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

/**
 * Aspose.Slides for Cloud API.
 */
class SlidesAsyncApi extends ApiBase
{
    /*
     * Initialize a new instance of SlidesAsyncApi
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
    public function getOperationResult($id)
    {
        try {
            list($response) = $this->getOperationResultWithHttpInfo($id);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getOperationResultWithHttpInfo($id);
            return $response;
        } 
    }

    /**
     */
    public function getOperationResultWithHttpInfo($id)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getOperationResultRequest($id);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody; //stream goes to serializer
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getOperationResultAsync($id)
    {
        return $this->getOperationResultAsyncWithHttpInfo($id)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getOperationResultAsyncWithHttpInfo($id)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getOperationResultRequest($id);

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
     * Create request for operation 'getOperationResult'
     *
     * @param  string $$id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOperationResultRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOperationResult');
        }

        $resourcePath = '/slides/async/{id}/result';
        $queryParams = [];
        $headerParams = [];


        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "id", $id);
        $_tempBody = [];
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['multipart/form-data'],
            ['application/json']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getOperationStatus($id)
    {
        try {
            list($response) = $this->getOperationStatusWithHttpInfo($id);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getOperationStatusWithHttpInfo($id);
            return $response;
        } 
    }

    /**
     */
    public function getOperationStatusWithHttpInfo($id)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Operation';
        $httpRequest = $this->getOperationStatusRequest($id);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Operation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getOperationStatusAsync($id)
    {
        return $this->getOperationStatusAsyncWithHttpInfo($id)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getOperationStatusAsyncWithHttpInfo($id)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Operation';
        $httpRequest = $this->getOperationStatusRequest($id);

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
     * Create request for operation 'getOperationStatus'
     *
     * @param  string $$id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOperationStatusRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOperationStatus');
        }

        $resourcePath = '/slides/async/{id}';
        $queryParams = [];
        $headerParams = [];


        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "id", $id);
        $_tempBody = [];
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function startConvert($document, $format, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        try {
            list($response) = $this->startConvertWithHttpInfo($document, $format, $password, $storage, $fontsFolder, $slides, $options);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->startConvertWithHttpInfo($document, $format, $password, $storage, $fontsFolder, $slides, $options);
            return $response;
        } 
    }

    /**
     */
    public function startConvertWithHttpInfo($document, $format, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startConvertRequest($document, $format, $password, $storage, $fontsFolder, $slides, $options);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function startConvertAsync($document, $format, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        return $this->startConvertAsyncWithHttpInfo($document, $format, $password, $storage, $fontsFolder, $slides, $options)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function startConvertAsyncWithHttpInfo($document, $format, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startConvertRequest($document, $format, $password, $storage, $fontsFolder, $slides, $options);

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
     * Create request for operation 'startConvert'
     *
     * @param  \SplFileObject $$document Document data. (required)
     * @param  string $$format (required)
     * @param  string $$password (optional)
     * @param  string $$storage (optional)
     * @param  string $$fontsFolder (optional)
     * @param  array $$slides (optional)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $$options (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startConvertRequest($document, $format, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        // verify the required parameter 'document' is set
        if ($document === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document when calling startConvert');
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling startConvert');
        }
        // verify the value of enum parameter 'format' is valid
        if (!in_array(strtolower($format), array_map('strtolower', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()))) {
            throw new \InvalidArgumentException('Invalid value for format: ' . $format . '. Must be one of the following: ' . implode(',', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()));
        }

        $resourcePath = '/slides/async/convert/{format}';
        $queryParams = [];
        $headerParams = [];

        // query params
        if ($storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($storage);
        }
        // query params
        if ($fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($fontsFolder);
        }
        // query params
        if ($slides !== null) {
            $queryParams['slides'] = ObjectSerializer::toQueryValue($slides);
        }
        // header params
        if ($password !== null) {
            $headerParams['password'] = ObjectSerializer::toHeaderValue($password);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $format);
        $_tempBody = [];
        if (isset($options)) {
            array_push($_tempBody, $options);
        }
        if (isset($document)) {
            array_push($_tempBody, $document);
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['multipart/form-data']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function startConvertAndSave($document, $format, $outPath, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        try {
            list($response) = $this->startConvertAndSaveWithHttpInfo($document, $format, $outPath, $password, $storage, $fontsFolder, $slides, $options);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->startConvertAndSaveWithHttpInfo($document, $format, $outPath, $password, $storage, $fontsFolder, $slides, $options);
            return $response;
        } 
    }

    /**
     */
    public function startConvertAndSaveWithHttpInfo($document, $format, $outPath, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startConvertAndSaveRequest($document, $format, $outPath, $password, $storage, $fontsFolder, $slides, $options);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function startConvertAndSaveAsync($document, $format, $outPath, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        return $this->startConvertAndSaveAsyncWithHttpInfo($document, $format, $outPath, $password, $storage, $fontsFolder, $slides, $options)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function startConvertAndSaveAsyncWithHttpInfo($document, $format, $outPath, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startConvertAndSaveRequest($document, $format, $outPath, $password, $storage, $fontsFolder, $slides, $options);

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
     * Create request for operation 'startConvertAndSave'
     *
     * @param  \SplFileObject $$document Document data. (required)
     * @param  string $$format (required)
     * @param  string $$outPath (required)
     * @param  string $$password (optional)
     * @param  string $$storage (optional)
     * @param  string $$fontsFolder (optional)
     * @param  array $$slides (optional)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $$options (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startConvertAndSaveRequest($document, $format, $outPath, $password = null, $storage = null, $fontsFolder = null, array $slides = null, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null)
    {
        // verify the required parameter 'document' is set
        if ($document === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document when calling startConvertAndSave');
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling startConvertAndSave');
        }
        // verify the value of enum parameter 'format' is valid
        if (!in_array(strtolower($format), array_map('strtolower', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()))) {
            throw new \InvalidArgumentException('Invalid value for format: ' . $format . '. Must be one of the following: ' . implode(',', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()));
        }
        // verify the required parameter 'out_path' is set
        if ($outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling startConvertAndSave');
        }

        $resourcePath = '/slides/async/convert/{format}';
        $queryParams = [];
        $headerParams = [];

        // query params
        if ($outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($outPath);
        }
        // query params
        if ($storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($storage);
        }
        // query params
        if ($fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($fontsFolder);
        }
        // query params
        if ($slides !== null) {
            $queryParams['slides'] = ObjectSerializer::toQueryValue($slides);
        }
        // header params
        if ($password !== null) {
            $headerParams['password'] = ObjectSerializer::toHeaderValue($password);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $format);
        $_tempBody = [];
        if (isset($options)) {
            array_push($_tempBody, $options);
        }
        if (isset($document)) {
            array_push($_tempBody, $document);
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['multipart/form-data']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function startDownloadPresentation($name, $format, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        try {
            list($response) = $this->startDownloadPresentationWithHttpInfo($name, $format, $options, $password, $folder, $storage, $fontsFolder, $slides);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->startDownloadPresentationWithHttpInfo($name, $format, $options, $password, $folder, $storage, $fontsFolder, $slides);
            return $response;
        } 
    }

    /**
     */
    public function startDownloadPresentationWithHttpInfo($name, $format, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startDownloadPresentationRequest($name, $format, $options, $password, $folder, $storage, $fontsFolder, $slides);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function startDownloadPresentationAsync($name, $format, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        return $this->startDownloadPresentationAsyncWithHttpInfo($name, $format, $options, $password, $folder, $storage, $fontsFolder, $slides)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function startDownloadPresentationAsyncWithHttpInfo($name, $format, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startDownloadPresentationRequest($name, $format, $options, $password, $folder, $storage, $fontsFolder, $slides);

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
     * Create request for operation 'startDownloadPresentation'
     *
     * @param  string $$name (required)
     * @param  string $$format (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $$options (optional)
     * @param  string $$password (optional)
     * @param  string $$folder (optional)
     * @param  string $$storage (optional)
     * @param  string $$fontsFolder (optional)
     * @param  array $$slides (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startDownloadPresentationRequest($name, $format, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling startDownloadPresentation');
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling startDownloadPresentation');
        }
        // verify the value of enum parameter 'format' is valid
        if (!in_array(strtolower($format), array_map('strtolower', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()))) {
            throw new \InvalidArgumentException('Invalid value for format: ' . $format . '. Must be one of the following: ' . implode(',', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()));
        }

        $resourcePath = '/slides/async/{name}/{format}';
        $queryParams = [];
        $headerParams = [];

        // query params
        if ($folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($folder);
        }
        // query params
        if ($storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($storage);
        }
        // query params
        if ($fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($fontsFolder);
        }
        // query params
        if ($slides !== null) {
            $queryParams['slides'] = ObjectSerializer::toQueryValue($slides);
        }
        // header params
        if ($password !== null) {
            $headerParams['password'] = ObjectSerializer::toHeaderValue($password);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $format);
        $_tempBody = [];
        if (isset($options)) {
            array_push($_tempBody, $options);
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function startMerge(array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        try {
            list($response) = $this->startMergeWithHttpInfo($files, $request, $storage);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->startMergeWithHttpInfo($files, $request, $storage);
            return $response;
        } 
    }

    /**
     */
    public function startMergeWithHttpInfo(array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startMergeRequest($files, $request, $storage);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function startMergeAsync(array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        return $this->startMergeAsyncWithHttpInfo($files, $request, $storage)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function startMergeAsyncWithHttpInfo(array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startMergeRequest($files, $request, $storage);

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
     * Create request for operation 'startMerge'
     *
     * @param  array $$files Files to merge (optional)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $$request (optional)
     * @param  string $$storage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startMergeRequest(array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {

        $resourcePath = '/slides/async/merge';
        $queryParams = [];
        $headerParams = [];

        // query params
        if ($storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($storage);
        }

        $_tempBody = [];
        if (isset($request)) {
            array_push($_tempBody, $request);
        }
        if (isset($files)) {
            $_tempBody = array_merge($_tempBody, $files);
        }
        $this->headerSelector->selectHeadersForMultipart($headerParams, ['application/json']);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['multipart/form-data']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function startMergeAndSave($outPath, array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        try {
            list($response) = $this->startMergeAndSaveWithHttpInfo($outPath, $files, $request, $storage);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->startMergeAndSaveWithHttpInfo($outPath, $files, $request, $storage);
            return $response;
        } 
    }

    /**
     */
    public function startMergeAndSaveWithHttpInfo($outPath, array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startMergeAndSaveRequest($outPath, $files, $request, $storage);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function startMergeAndSaveAsync($outPath, array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        return $this->startMergeAndSaveAsyncWithHttpInfo($outPath, $files, $request, $storage)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function startMergeAndSaveAsyncWithHttpInfo($outPath, array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startMergeAndSaveRequest($outPath, $files, $request, $storage);

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
     * Create request for operation 'startMergeAndSave'
     *
     * @param  string $$outPath (required)
     * @param  array $$files Files to merge (optional)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $$request (optional)
     * @param  string $$storage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startMergeAndSaveRequest($outPath, array $files = null, \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request = null, $storage = null)
    {
        // verify the required parameter 'out_path' is set
        if ($outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling startMergeAndSave');
        }

        $resourcePath = '/slides/async/merge';
        $queryParams = [];
        $headerParams = [];

        // query params
        if ($outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($outPath);
        }
        // query params
        if ($storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($storage);
        }

        $_tempBody = [];
        if (isset($request)) {
            array_push($_tempBody, $request);
        }
        if (isset($files)) {
            $_tempBody = array_merge($_tempBody, $files);
        }
        $this->headerSelector->selectHeadersForMultipart($headerParams, ['application/json']);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['multipart/form-data']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function startSavePresentation($name, $format, $outPath, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        try {
            list($response) = $this->startSavePresentationWithHttpInfo($name, $format, $outPath, $options, $password, $folder, $storage, $fontsFolder, $slides);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->startSavePresentationWithHttpInfo($name, $format, $outPath, $options, $password, $folder, $storage, $fontsFolder, $slides);
            return $response;
        } 
    }

    /**
     */
    public function startSavePresentationWithHttpInfo($name, $format, $outPath, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startSavePresentationRequest($name, $format, $outPath, $options, $password, $folder, $storage, $fontsFolder, $slides);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function startSavePresentationAsync($name, $format, $outPath, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        return $this->startSavePresentationAsyncWithHttpInfo($name, $format, $outPath, $options, $password, $folder, $storage, $fontsFolder, $slides)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function startSavePresentationAsyncWithHttpInfo($name, $format, $outPath, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        $returnType = 'string';
        $httpRequest = $this->startSavePresentationRequest($name, $format, $outPath, $options, $password, $folder, $storage, $fontsFolder, $slides);

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
     * Create request for operation 'startSavePresentation'
     *
     * @param  string $$name (required)
     * @param  string $$format (required)
     * @param  string $$outPath (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $$options (optional)
     * @param  string $$password (optional)
     * @param  string $$folder (optional)
     * @param  string $$storage (optional)
     * @param  string $$fontsFolder (optional)
     * @param  array $$slides (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function startSavePresentationRequest($name, $format, $outPath, \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options = null, $password = null, $folder = null, $storage = null, $fontsFolder = null, array $slides = null)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling startSavePresentation');
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling startSavePresentation');
        }
        // verify the value of enum parameter 'format' is valid
        if (!in_array(strtolower($format), array_map('strtolower', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()))) {
            throw new \InvalidArgumentException('Invalid value for format: ' . $format . '. Must be one of the following: ' . implode(',', \Aspose\Slides\Cloud\Sdk\Model\ExportFormat::getAllowableEnumValues()));
        }
        // verify the required parameter 'out_path' is set
        if ($outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling startSavePresentation');
        }

        $resourcePath = '/slides/async/{name}/{format}';
        $queryParams = [];
        $headerParams = [];

        // query params
        if ($outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($outPath);
        }
        // query params
        if ($folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($folder);
        }
        // query params
        if ($storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($storage);
        }
        // query params
        if ($fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($fontsFolder);
        }
        // query params
        if ($slides !== null) {
            $queryParams['slides'] = ObjectSerializer::toQueryValue($slides);
        }
        // header params
        if ($password !== null) {
            $headerParams['password'] = ObjectSerializer::toHeaderValue($password);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $format);
        $_tempBody = [];
        if (isset($options)) {
            array_push($_tempBody, $options);
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);
        $httpBody = ObjectSerializer::createBody($_tempBody);
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
}
