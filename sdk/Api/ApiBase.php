<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Slides\Cloud\Sdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Monolog\Logger;

/**
 * Aspose.Slides for Cloud API.
 */
class ApiBase
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;

    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Initialize a new instance of ApiBase
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client([ 'verify' => false ]);
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    protected function httpCall(Request $request)
    {
        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            $errorResponse = $e->getResponse();
            $code = $e->getCode();
            if ($this->isAuthError($code, $errorResponse)) {
                $this->requestToken();
                throw new RepeatRequestException("Request must be retried");
            }
            throw new ApiException(
                "[{$code}] {$e->getMessage()}",
                $code,
                $errorResponse ? $errorResponse->getHeaders() : null,
                $errorResponse ? $errorResponse->getBody() : null);
        }
        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            if ($statusCode === 401) {
                $this->requestToken();
                throw new RepeatRequestException("Request must be retried");
            }
            throw new ApiException(
                sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()),
                $statusCode,
                $response->getHeaders(),
                $response->getBody());
        }
        return $response;
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        return [];
    }

    /*
     * Executes url parsing
     */
    protected function parseURL($url, $queryParams) 
    {
         $urlToSign = trim($url, "/");
         return $this->config->getHost()
             ."/"
             .$this->config->getBasePath()
             ."/"
             .parse_url($urlToSign, PHP_URL_HOST)
             .parse_url($urlToSign, PHP_URL_PATH)
             ."?"
             .http_build_query($queryParams);
    }


    /**
     * Create request
     */
    protected function createRequest($resourcePath, $queryParams, $headers, $httpBody, $httpMethod)
    {
        if ($this->config->getAppSid() != null || $this->config->getAccessToken() != null) {
            if ($this->config->getAccessToken() == null) {
                $this->requestToken();
            }
            $headers['Authorization'] = 'Bearer '.$this->config->getAccessToken();
        }
        $headers['x-aspose-client'] = $this->config->getUserAgent()." v".$this->config->getClientVersion();
        if ($this->config->getTimeout()) {
            $headers['x-aspose-timeout'] = $this->config->getTimeout();
        }
        $headers = array_merge($headers, $this->config->getCustomHeaders());
        $resourcePath = $this->parseURL($resourcePath, $queryParams);
        $request = new Request($httpMethod, $resourcePath, $headers, $httpBody);
        if ($this->config->getDebug()) {
            $this->writeRequestLog($httpMethod, $resourcePath, $headers, $httpBody);
        }
        return $request;
    }

    protected function handleApiException(ApiException $e)
    {
        if ($e->getCode() >= 400) {
            try {
                $e->getResponseBody()->rewind();
                $c = $e->getResponseBody()->getContents();
                if ($c) {
                    $errorObject = json_decode($c);
                    if (property_exists($errorObject, "error")) {
                        $errorObject = $errorObject->error;
                    }
                    $error = ObjectSerializer::deserialize($errorObject, '\Aspose\Slides\Cloud\Sdk\Api\ErrorMessage', $e->getResponseHeaders());
                    $e->setResponseObject($error);
                }
            } catch (Exception $ex) {
                //leave as is if could not parse the error
            }
        }
    }
  
    /*
     * Gets a request token from server
     */
    protected function requestToken() 
    {
        $requestUrl = $this->config->getAuthHost()."/connect/token";
        $postData = "grant_type=client_credentials"."&client_id=".$this->config->getAppSid()."&client_secret=".$this->config->getAppKey();

        try {
            $response = $this->client->send(new Request('POST', $requestUrl,  [ 'Content-Type' => 'application/x-www-form-urlencoded' ], $postData));
            $result = json_decode($response->getBody()->getContents(), true);
            $this->config->setAccessToken($result["access_token"]);
        } catch (RequestException $e) {
            $errorResponse = $e->getResponse();
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                401,
                $errorResponse ? $errorResponse->getHeaders() : null,
                $errorResponse ? $errorResponse->getBody() : null);
        }
    }
    
    /*
     * Executes response logging
     */
    protected function writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    protected function writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function writeHeadersAndBody($logInfo, $headers, $body)
    {
        echo "\nlog:";
        foreach ($headers as $name => $value) {
            $logInfo .= $name.': '.(is_array($value) ? implode(",", $value) : $value)."\n";
        }
        return $logInfo .= "Body: ".$body."\n";
    }

    private function isAuthError($code, $response)
    {
        if ($code == 401) {
            return true;
        }
        if ($code == 500) {
            $c = $response->getBody()->getContents();
            if (!$c) {
                return true;
            }
        }
        return false;
    }
}
