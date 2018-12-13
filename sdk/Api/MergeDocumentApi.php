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

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use Aspose\Slides\Cloud\Sdk\Model\Requests;

/**
 * Aspose.Slides for Cloud API.
 */
class MergeDocumentApi extends ApiBase
{
    /*
     * Initialize a new instance of MergeDocumentApi
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        parent::__construct($client, $config, $selector);
    }

    /**
     */
    public function postPresentationMerge(Requests\PostPresentationMergeRequest $request)
    {
        try {
            list($response) = $this->postPresentationMergeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postPresentationMergeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postPresentationMergeWithHttpInfo(Requests\PostPresentationMergeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->postPresentationMergeRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postPresentationMergeAsync(Requests\PostPresentationMergeRequest $request)
    {
        return $this->postPresentationMergeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postPresentationMergeAsyncWithHttpInfo(Requests\PostPresentationMergeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->postPresentationMergeRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    if ($this->config->getDebug()) {
                        $this->writeResponseLog(
                            $response->getStatusCode(),
                            $response->getHeaders(),
                            ObjectSerializer::deserialize($content, $returnType, []));
                    }
                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    if ($exception instanceof RepeatRequestException) {
                        $this->refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody());
                });
    }

    /**
     * Create request for operation 'postPresentationMerge'
     *
     * @param  string $name Document name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest $request with a list of presentations to merge. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postPresentationMergeRequest(Requests\PostPresentationMergeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postPresentationMerge');
        }

        $resourcePath = '/slides/{name}/merge';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);

        $_tempBody = null;
        if (isset($request->request)) {
            $_tempBody = $request->request;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function putPresentationMerge(Requests\PutPresentationMergeRequest $request)
    {
        try {
            list($response) = $this->putPresentationMergeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putPresentationMergeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putPresentationMergeWithHttpInfo(Requests\PutPresentationMergeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putPresentationMergeRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putPresentationMergeAsync(Requests\PutPresentationMergeRequest $request)
    {
        return $this->putPresentationMergeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putPresentationMergeAsyncWithHttpInfo(Requests\PutPresentationMergeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putPresentationMergeRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    if ($this->config->getDebug()) {
                        $this->writeResponseLog(
                            $response->getStatusCode(),
                            $response->getHeaders(),
                            ObjectSerializer::deserialize($content, $returnType, []));
                    }
                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    if ($exception instanceof RepeatRequestException) {
                        $this->refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody());
                });
    }

    /**
     * Create request for operation 'putPresentationMerge'
     *
     * @param  string $name Document name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request with a list of presentations and slide indices to merge. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putPresentationMergeRequest(Requests\PutPresentationMergeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putPresentationMerge');
        }

        $resourcePath = '/slides/{name}/merge';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);

        $_tempBody = null;
        if (isset($request->request)) {
            $_tempBody = $request->request;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'PUT');
    }
}
