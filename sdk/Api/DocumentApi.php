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
class DocumentApi extends ApiBase
{
    /*
     * Initialize a new instance of DocumentApi
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
    public function getSlidesApiInfo(Requests\GetSlidesApiInfoRequest $request)
    {
        try {
            list($response) = $this->getSlidesApiInfoWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesApiInfoWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesApiInfoWithHttpInfo(Requests\GetSlidesApiInfoRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ApiInfoResponse';
        $httpRequest = $this->getSlidesApiInfoRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ApiInfoResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesApiInfoAsync(Requests\GetSlidesApiInfoRequest $request)
    {
        return $this->getSlidesApiInfoAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesApiInfoAsyncWithHttpInfo(Requests\GetSlidesApiInfoRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ApiInfoResponse';
        $httpRequest = $this->getSlidesApiInfoRequest($request);

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
     * Create request for operation 'getSlidesApiInfo'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesApiInfoRequest(Requests\GetSlidesApiInfoRequest $request)
    {

        $resourcePath = '/slides/info';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';




        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesDocument(Requests\GetSlidesDocumentRequest $request)
    {
        try {
            list($response) = $this->getSlidesDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesDocumentWithHttpInfo(Requests\GetSlidesDocumentRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->getSlidesDocumentRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function getSlidesDocumentAsync(Requests\GetSlidesDocumentRequest $request)
    {
        return $this->getSlidesDocumentAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesDocumentAsyncWithHttpInfo(Requests\GetSlidesDocumentRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->getSlidesDocumentRequest($request);

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
     * Create request for operation 'getSlidesDocument'
     *
     * @param  string $name The document name. (required)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document&#39;s storage. (optional)
     * @param  string $folder Document&#39;s folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesDocumentRequest(Requests\GetSlidesDocumentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesDocument');
        }

        $resourcePath = '/slides/{name}';
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


        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesDocumentWithFormat(Requests\GetSlidesDocumentWithFormatRequest $request)
    {
        try {
            list($response) = $this->getSlidesDocumentWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesDocumentWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesDocumentWithFormatWithHttpInfo(Requests\GetSlidesDocumentWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlidesDocumentWithFormatRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody; //stream goes to serializer
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function getSlidesDocumentWithFormatAsync(Requests\GetSlidesDocumentWithFormatRequest $request)
    {
        return $this->getSlidesDocumentWithFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesDocumentWithFormatAsyncWithHttpInfo(Requests\GetSlidesDocumentWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlidesDocumentWithFormatRequest($request);

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
     * Create request for operation 'getSlidesDocumentWithFormat'
     *
     * @param  string $name The document name. (required)
     * @param  int $format The conversion format. (required)
     * @param  int $jpeg_quality Quality of the JPEG images inside PDF document. (optional)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document&#39;s storage. (optional)
     * @param  string $folder Document&#39;s folder. (optional)
     * @param  string $out_path Path to save result (optional)
     * @param  string $fonts_folder The optional custom fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesDocumentWithFormatRequest(Requests\GetSlidesDocumentWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesDocumentWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getSlidesDocumentWithFormat');
        }

        $resourcePath = '/slides/{name}/saveAs/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->jpegQuality !== null) {
            $queryParams['jpegQuality'] = ObjectSerializer::toQueryValue($request->jpegQuality);
        }
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
        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
        }
        // query params
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);


        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function postSlidesDocument(Requests\PostSlidesDocumentRequest $request)
    {
        try {
            list($response) = $this->postSlidesDocumentWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesDocumentWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesDocumentWithHttpInfo(Requests\PostSlidesDocumentRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->postSlidesDocumentRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function postSlidesDocumentAsync(Requests\PostSlidesDocumentRequest $request)
    {
        return $this->postSlidesDocumentAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesDocumentAsyncWithHttpInfo(Requests\PostSlidesDocumentRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->postSlidesDocumentRequest($request);

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
     * Create request for operation 'postSlidesDocument'
     *
     * @param  string $name The document name. (required)
     * @param  string $data (required)
     * @param  string $template_path Template file path. (required)
     * @param  string $template_storage Template storage name. (optional)
     * @param  bool $is_image_data_embeeded Is Image Data Embeeded (optional, default to false)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document&#39;s storage. (optional)
     * @param  string $folder Document&#39;s folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesDocumentRequest(Requests\PostSlidesDocumentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesDocument');
        }
        // verify the required parameter 'data' is set
        if ($request->data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling postSlidesDocument');
        }
        // verify the required parameter 'template_path' is set
        if ($request->templatePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $templatePath when calling postSlidesDocument');
        }

        $resourcePath = '/slides/{name}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->templatePath !== null) {
            $queryParams['templatePath'] = ObjectSerializer::toQueryValue($request->templatePath);
        }
        // query params
        if ($request->templateStorage !== null) {
            $queryParams['templateStorage'] = ObjectSerializer::toQueryValue($request->templateStorage);
        }
        // query params
        if ($request->isImageDataEmbeeded !== null) {
            $queryParams['isImageDataEmbeeded'] = ObjectSerializer::toQueryValue($request->isImageDataEmbeeded);
        }
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
        if (isset($request->data)) {
            $_tempBody = $request->data;
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
    public function postSlidesPipeline(Requests\PostSlidesPipelineRequest $request)
    {
        try {
            list($response) = $this->postSlidesPipelineWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesPipelineWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesPipelineWithHttpInfo(Requests\PostSlidesPipelineRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlidesPipelineRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody; //stream goes to serializer
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function postSlidesPipelineAsync(Requests\PostSlidesPipelineRequest $request)
    {
        return $this->postSlidesPipelineAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesPipelineAsyncWithHttpInfo(Requests\PostSlidesPipelineRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlidesPipelineRequest($request);

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
     * Create request for operation 'postSlidesPipeline'
     *
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Pipeline $pipeline (optional)
     * @param  \SplFileObject[] $files files to upload with the pipeline (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesPipelineRequest(Requests\PostSlidesPipelineRequest $request)
    {

        $resourcePath = '/slides/pipeline';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        $_tempBody = null;
        if (isset($request->pipeline)) {
            $_tempBody = $request->pipeline;
        }

        $headers= $this->headerSelector->selectHeadersForMultipart(['multipart/form-data']);

        $httpBody = ObjectSerializer::toMultipart($_tempBody, $request->get_files());
        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesSaveAs(Requests\PostSlidesSaveAsRequest $request)
    {
        try {
            list($response) = $this->postSlidesSaveAsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesSaveAsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesSaveAsWithHttpInfo(Requests\PostSlidesSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlidesSaveAsRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody; //stream goes to serializer
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function postSlidesSaveAsAsync(Requests\PostSlidesSaveAsRequest $request)
    {
        return $this->postSlidesSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesSaveAsAsyncWithHttpInfo(Requests\PostSlidesSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlidesSaveAsRequest($request);

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
     * Create request for operation 'postSlidesSaveAs'
     *
     * @param  string $name The presentation name (required)
     * @param  int $format Export format (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Tiff export options (optional)
     * @param  string $password The password to open presentation. (optional)
     * @param  string $storage Document&#39;s storage. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $out_path The optional output path. (optional)
     * @param  string $fonts_folder The optional custom fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesSaveAsRequest(Requests\PostSlidesSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling postSlidesSaveAs');
        }

        $resourcePath = '/slides/{name}/saveAs/{format}';
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
        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
        }
        // query params
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);

        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
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
    public function postSlidesSplit(Requests\PostSlidesSplitRequest $request)
    {
        try {
            list($response) = $this->postSlidesSplitWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesSplitWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesSplitWithHttpInfo(Requests\PostSlidesSplitRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SplitDocumentResponse';
        $httpRequest = $this->postSlidesSplitRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SplitDocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesSplitAsync(Requests\PostSlidesSplitRequest $request)
    {
        return $this->postSlidesSplitAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesSplitAsyncWithHttpInfo(Requests\PostSlidesSplitRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SplitDocumentResponse';
        $httpRequest = $this->postSlidesSplitRequest($request);

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
     * Create request for operation 'postSlidesSplit'
     *
     * @param  string $name The document name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options export options (optional)
     * @param  int $format The format. Default value is jpeg. (optional, default to 0)
     * @param  int $width The width of created images. (optional)
     * @param  int $height The height of created images. (optional)
     * @param  int $to The last slide number for splitting, if is not specified splitting ends at the last slide of the document. (optional)
     * @param  int $from The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation. (optional)
     * @param  string $dest_folder Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation. (optional)
     * @param  string $password The document password. (optional)
     * @param  string $storage The document storage. (optional)
     * @param  string $folder The document folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesSplitRequest(Requests\PostSlidesSplitRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesSplit');
        }

        $resourcePath = '/slides/{name}/split';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($request->format);
        }
        // query params
        if ($request->width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($request->width);
        }
        // query params
        if ($request->height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($request->height);
        }
        // query params
        if ($request->to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($request->to);
        }
        // query params
        if ($request->from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($request->from);
        }
        // query params
        if ($request->destFolder !== null) {
            $queryParams['destFolder'] = ObjectSerializer::toQueryValue($request->destFolder);
        }
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
        if (isset($request->options)) {
            $_tempBody = $request->options;
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
    public function putNewPresentation(Requests\PutNewPresentationRequest $request)
    {
        try {
            list($response) = $this->putNewPresentationWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putNewPresentationWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putNewPresentationWithHttpInfo(Requests\PutNewPresentationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putNewPresentationRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function putNewPresentationAsync(Requests\PutNewPresentationRequest $request)
    {
        return $this->putNewPresentationAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putNewPresentationAsyncWithHttpInfo(Requests\PutNewPresentationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putNewPresentationRequest($request);

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
     * Create request for operation 'putNewPresentation'
     *
     * @param  string $name The document name. (required)
     * @param  \SplFileObject $stream (optional)
     * @param  string $template_path Template file path. (optional)
     * @param  string $template_password (optional)
     * @param  string $template_storage Template storage name. (optional)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document&#39;s storage. (optional)
     * @param  string $folder Document&#39;s folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putNewPresentationRequest(Requests\PutNewPresentationRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putNewPresentation');
        }

        $resourcePath = '/slides/{name}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->templatePath !== null) {
            $queryParams['templatePath'] = ObjectSerializer::toQueryValue($request->templatePath);
        }
        // query params
        if ($request->templatePassword !== null) {
            $queryParams['templatePassword'] = ObjectSerializer::toQueryValue($request->templatePassword);
        }
        // query params
        if ($request->templateStorage !== null) {
            $queryParams['templateStorage'] = ObjectSerializer::toQueryValue($request->templateStorage);
        }
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
        if (isset($request->stream)) {
            $_tempBody = $request->stream;
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
    /**
     */
    public function putSlidesConvert(Requests\PutSlidesConvertRequest $request)
    {
        try {
            list($response) = $this->putSlidesConvertWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesConvertWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesConvertWithHttpInfo(Requests\PutSlidesConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->putSlidesConvertRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody; //stream goes to serializer
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function putSlidesConvertAsync(Requests\PutSlidesConvertRequest $request)
    {
        return $this->putSlidesConvertAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesConvertAsyncWithHttpInfo(Requests\PutSlidesConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->putSlidesConvertRequest($request);

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
     * Create request for operation 'putSlidesConvert'
     *
     * @param  int $format The format. (required)
     * @param  \SplFileObject $document (optional)
     * @param  string $password The document password. (optional)
     * @param  string $out_path Path to save result (optional)
     * @param  string $fonts_folder The optional custom fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesConvertRequest(Requests\PutSlidesConvertRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling putSlidesConvert');
        }

        $resourcePath = '/slides/convert';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($request->format);
        }
        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
        }
        // query params
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }


        $_tempBody = null;
        if (isset($request->document)) {
            $_tempBody = $request->document;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
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
    /**
     */
    public function putSlidesDocumentFromHtml(Requests\PutSlidesDocumentFromHtmlRequest $request)
    {
        try {
            list($response) = $this->putSlidesDocumentFromHtmlWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesDocumentFromHtmlWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesDocumentFromHtmlWithHttpInfo(Requests\PutSlidesDocumentFromHtmlRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putSlidesDocumentFromHtmlRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function putSlidesDocumentFromHtmlAsync(Requests\PutSlidesDocumentFromHtmlRequest $request)
    {
        return $this->putSlidesDocumentFromHtmlAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesDocumentFromHtmlAsyncWithHttpInfo(Requests\PutSlidesDocumentFromHtmlRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putSlidesDocumentFromHtmlRequest($request);

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
     * Create request for operation 'putSlidesDocumentFromHtml'
     *
     * @param  string $name The document name. (required)
     * @param  string $html (required)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document&#39;s storage. (optional)
     * @param  string $folder Document&#39;s folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesDocumentFromHtmlRequest(Requests\PutSlidesDocumentFromHtmlRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesDocumentFromHtml');
        }
        // verify the required parameter 'html' is set
        if ($request->html === null) {
            throw new \InvalidArgumentException('Missing the required parameter $html when calling putSlidesDocumentFromHtml');
        }

        $resourcePath = '/slides/{name}/fromHtml';
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
        if (isset($request->html)) {
            $_tempBody = $request->html;
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
    /**
     */
    public function putSlidesSlideSize(Requests\PutSlidesSlideSizeRequest $request)
    {
        try {
            list($response) = $this->putSlidesSlideSizeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesSlideSizeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesSlideSizeWithHttpInfo(Requests\PutSlidesSlideSizeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putSlidesSlideSizeRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            $responseBody = $response->getBody();
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
            $deserializedContent = ObjectSerializer::deserialize($content, $returnType, []);
            if ($this->config->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $deserializedContent);
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
    public function putSlidesSlideSizeAsync(Requests\PutSlidesSlideSizeRequest $request)
    {
        return $this->putSlidesSlideSizeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesSlideSizeAsyncWithHttpInfo(Requests\PutSlidesSlideSizeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentResponse';
        $httpRequest = $this->putSlidesSlideSizeRequest($request);

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
     * Create request for operation 'putSlidesSlideSize'
     *
     * @param  string $name The document name. (required)
     * @param  string $password The document password. (optional)
     * @param  string $storage The document storage. (optional)
     * @param  string $folder The document folder. (optional)
     * @param  int $width Slide width. (optional, default to 0)
     * @param  int $height Slide height. (optional, default to 0)
     * @param  int $size_type Standard slide size type. (optional)
     * @param  int $scale_type Standard slide scale type. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesSlideSizeRequest(Requests\PutSlidesSlideSizeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesSlideSize');
        }

        $resourcePath = '/slides/{name}/slidesize';
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
        // query params
        if ($request->width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($request->width);
        }
        // query params
        if ($request->height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($request->height);
        }
        // query params
        if ($request->sizeType !== null) {
            $queryParams['sizeType'] = ObjectSerializer::toQueryValue($request->sizeType);
        }
        // query params
        if ($request->scaleType !== null) {
            $queryParams['scaleType'] = ObjectSerializer::toQueryValue($request->scaleType);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'PUT');
    }
}
