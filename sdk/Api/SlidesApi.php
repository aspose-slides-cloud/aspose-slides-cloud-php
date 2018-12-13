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
class SlidesApi extends ApiBase
{
    /*
     * Initialize a new instance of SlidesApi
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
    public function deleteSlideByIndex(Requests\DeleteSlideByIndexRequest $request)
    {
        try {
            list($response) = $this->deleteSlideByIndexWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideByIndexWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideByIndexWithHttpInfo(Requests\DeleteSlideByIndexRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->deleteSlideByIndexRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideByIndexAsync(Requests\DeleteSlideByIndexRequest $request)
    {
        return $this->deleteSlideByIndexAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideByIndexAsyncWithHttpInfo(Requests\DeleteSlideByIndexRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->deleteSlideByIndexRequest($request);

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
     * Create request for operation 'deleteSlideByIndex'
     *
     * @param  string $name The presentation name. (required)
     * @param  int $slide_index The slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage The presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlideByIndexRequest(Requests\DeleteSlideByIndexRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideByIndex');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideByIndex');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlidesCleanSlidesList(Requests\DeleteSlidesCleanSlidesListRequest $request)
    {
        try {
            list($response) = $this->deleteSlidesCleanSlidesListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlidesCleanSlidesListWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlidesCleanSlidesListWithHttpInfo(Requests\DeleteSlidesCleanSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->deleteSlidesCleanSlidesListRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlidesCleanSlidesListAsync(Requests\DeleteSlidesCleanSlidesListRequest $request)
    {
        return $this->deleteSlidesCleanSlidesListAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlidesCleanSlidesListAsyncWithHttpInfo(Requests\DeleteSlidesCleanSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->deleteSlidesCleanSlidesListRequest($request);

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
     * Create request for operation 'deleteSlidesCleanSlidesList'
     *
     * @param  string $name The presentation name. (required)
     * @param  int[] $slides The indices of the slides to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlidesCleanSlidesListRequest(Requests\DeleteSlidesCleanSlidesListRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlidesCleanSlidesList');
        }

        $resourcePath = '/slides/{name}/slides';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }
        // query params
        if ($request->slides !== null) {
            $queryParams['slides'] = ObjectSerializer::toQueryValue($request->slides);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlidesSlideBackground(Requests\DeleteSlidesSlideBackgroundRequest $request)
    {
        try {
            list($response) = $this->deleteSlidesSlideBackgroundWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlidesSlideBackgroundWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlidesSlideBackgroundWithHttpInfo(Requests\DeleteSlidesSlideBackgroundRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse';
        $httpRequest = $this->deleteSlidesSlideBackgroundRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlidesSlideBackgroundAsync(Requests\DeleteSlidesSlideBackgroundRequest $request)
    {
        return $this->deleteSlidesSlideBackgroundAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlidesSlideBackgroundAsyncWithHttpInfo(Requests\DeleteSlidesSlideBackgroundRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse';
        $httpRequest = $this->deleteSlidesSlideBackgroundRequest($request);

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
     * Create request for operation 'deleteSlidesSlideBackground'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder (optional)
     * @param  string $storage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlidesSlideBackgroundRequest(Requests\DeleteSlidesSlideBackgroundRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlidesSlideBackground');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlidesSlideBackground');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/background';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function getSlideWithFormat(Requests\GetSlideWithFormatRequest $request)
    {
        try {
            list($response) = $this->getSlideWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlideWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlideWithFormatWithHttpInfo(Requests\GetSlideWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlideWithFormatRequest($request);
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
    public function getSlideWithFormatAsync(Requests\GetSlideWithFormatRequest $request)
    {
        return $this->getSlideWithFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlideWithFormatAsyncWithHttpInfo(Requests\GetSlideWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlideWithFormatRequest($request);

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
     * Create request for operation 'getSlideWithFormat'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  string $format (required)
     * @param  int $width (optional, default to 0)
     * @param  int $height (optional, default to 0)
     * @param  string $password (optional)
     * @param  string $folder (optional)
     * @param  string $storage (optional)
     * @param  string $out_path (optional)
     * @param  string $fonts_folder (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlideWithFormatRequest(Requests\GetSlideWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlideWithFormat');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlideWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getSlideWithFormat');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/saveAs/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($request->width);
        }
        // query params
        if ($request->height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($request->height);
        }
        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);


        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesSlide(Requests\GetSlidesSlideRequest $request)
    {
        try {
            list($response) = $this->getSlidesSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesSlideWithHttpInfo(Requests\GetSlidesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideResponse';
        $httpRequest = $this->getSlidesSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesSlideAsync(Requests\GetSlidesSlideRequest $request)
    {
        return $this->getSlidesSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesSlideAsyncWithHttpInfo(Requests\GetSlidesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideResponse';
        $httpRequest = $this->getSlidesSlideRequest($request);

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
     * Create request for operation 'getSlidesSlide'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder (optional)
     * @param  string $storage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesSlideRequest(Requests\GetSlidesSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesSlide');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesSlideBackground(Requests\GetSlidesSlideBackgroundRequest $request)
    {
        try {
            list($response) = $this->getSlidesSlideBackgroundWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesSlideBackgroundWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesSlideBackgroundWithHttpInfo(Requests\GetSlidesSlideBackgroundRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse';
        $httpRequest = $this->getSlidesSlideBackgroundRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesSlideBackgroundAsync(Requests\GetSlidesSlideBackgroundRequest $request)
    {
        return $this->getSlidesSlideBackgroundAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesSlideBackgroundAsyncWithHttpInfo(Requests\GetSlidesSlideBackgroundRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse';
        $httpRequest = $this->getSlidesSlideBackgroundRequest($request);

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
     * Create request for operation 'getSlidesSlideBackground'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder (optional)
     * @param  string $storage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesSlideBackgroundRequest(Requests\GetSlidesSlideBackgroundRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesSlideBackground');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesSlideBackground');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/background';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesSlideComments(Requests\GetSlidesSlideCommentsRequest $request)
    {
        try {
            list($response) = $this->getSlidesSlideCommentsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesSlideCommentsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesSlideCommentsWithHttpInfo(Requests\GetSlidesSlideCommentsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideCommentsResponse';
        $httpRequest = $this->getSlidesSlideCommentsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideCommentsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesSlideCommentsAsync(Requests\GetSlidesSlideCommentsRequest $request)
    {
        return $this->getSlidesSlideCommentsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesSlideCommentsAsyncWithHttpInfo(Requests\GetSlidesSlideCommentsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideCommentsResponse';
        $httpRequest = $this->getSlidesSlideCommentsRequest($request);

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
     * Create request for operation 'getSlidesSlideComments'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder (optional)
     * @param  string $storage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesSlideCommentsRequest(Requests\GetSlidesSlideCommentsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesSlideComments');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesSlideComments');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/comments';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesSlidesList(Requests\GetSlidesSlidesListRequest $request)
    {
        try {
            list($response) = $this->getSlidesSlidesListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesSlidesListWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesSlidesListWithHttpInfo(Requests\GetSlidesSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->getSlidesSlidesListRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesSlidesListAsync(Requests\GetSlidesSlidesListRequest $request)
    {
        return $this->getSlidesSlidesListAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesSlidesListAsyncWithHttpInfo(Requests\GetSlidesSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->getSlidesSlidesListRequest($request);

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
     * Create request for operation 'getSlidesSlidesList'
     *
     * @param  string $name The presentation name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesSlidesListRequest(Requests\GetSlidesSlidesListRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesSlidesList');
        }

        $resourcePath = '/slides/{name}/slides';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function postSlideSaveAs(Requests\PostSlideSaveAsRequest $request)
    {
        try {
            list($response) = $this->postSlideSaveAsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlideSaveAsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlideSaveAsWithHttpInfo(Requests\PostSlideSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlideSaveAsRequest($request);
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
    public function postSlideSaveAsAsync(Requests\PostSlideSaveAsRequest $request)
    {
        return $this->postSlideSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlideSaveAsAsyncWithHttpInfo(Requests\PostSlideSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlideSaveAsRequest($request);

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
     * Create request for operation 'postSlideSaveAs'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  string $format (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options export options (optional)
     * @param  int $width (optional, default to 0)
     * @param  int $height (optional, default to 0)
     * @param  string $password (optional)
     * @param  string $folder (optional)
     * @param  string $storage (optional)
     * @param  string $out_path (optional)
     * @param  string $fonts_folder (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlideSaveAsRequest(Requests\PostSlideSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlideSaveAs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postSlideSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling postSlideSaveAs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/saveAs/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($request->width);
        }
        // query params
        if ($request->height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($request->height);
        }
        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
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
    public function postSlidesReorderPosition(Requests\PostSlidesReorderPositionRequest $request)
    {
        try {
            list($response) = $this->postSlidesReorderPositionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesReorderPositionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesReorderPositionWithHttpInfo(Requests\PostSlidesReorderPositionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->postSlidesReorderPositionRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesReorderPositionAsync(Requests\PostSlidesReorderPositionRequest $request)
    {
        return $this->postSlidesReorderPositionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesReorderPositionAsyncWithHttpInfo(Requests\PostSlidesReorderPositionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideListResponse';
        $httpRequest = $this->postSlidesReorderPositionRequest($request);

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
     * Create request for operation 'postSlidesReorderPosition'
     *
     * @param  string $name The presentation name. (required)
     * @param  int $old_position The new presentation slide position. (optional)
     * @param  int $new_position The new presentation slide position. (optional)
     * @param  int $slide_to_copy The presentation slide to copy. (optional)
     * @param  int $position The presentation slide position. (optional)
     * @param  int $slide_to_clone The presentation slide to clone. (optional)
     * @param  string $source The source presentation. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage The presentation storage. (optional)
     * @param  string $layout_alias Alias of layout slide for new slide. Alias could be the type of layout, name of layout slide or index (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesReorderPositionRequest(Requests\PostSlidesReorderPositionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesReorderPosition');
        }

        $resourcePath = '/slides/{name}/slides';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->oldPosition !== null) {
            $queryParams['oldPosition'] = ObjectSerializer::toQueryValue($request->oldPosition);
        }
        // query params
        if ($request->newPosition !== null) {
            $queryParams['newPosition'] = ObjectSerializer::toQueryValue($request->newPosition);
        }
        // query params
        if ($request->slideToCopy !== null) {
            $queryParams['slideToCopy'] = ObjectSerializer::toQueryValue($request->slideToCopy);
        }
        // query params
        if ($request->position !== null) {
            $queryParams['position'] = ObjectSerializer::toQueryValue($request->position);
        }
        // query params
        if ($request->slideToClone !== null) {
            $queryParams['slideToClone'] = ObjectSerializer::toQueryValue($request->slideToClone);
        }
        // query params
        if ($request->source !== null) {
            $queryParams['source'] = ObjectSerializer::toQueryValue($request->source);
        }
        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }
        // query params
        if ($request->layoutAlias !== null) {
            $queryParams['layoutAlias'] = ObjectSerializer::toQueryValue($request->layoutAlias);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function putSlidesSlide(Requests\PutSlidesSlideRequest $request)
    {
        try {
            list($response) = $this->putSlidesSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesSlideWithHttpInfo(Requests\PutSlidesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideResponse';
        $httpRequest = $this->putSlidesSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlidesSlideAsync(Requests\PutSlidesSlideRequest $request)
    {
        return $this->putSlidesSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesSlideAsyncWithHttpInfo(Requests\PutSlidesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideResponse';
        $httpRequest = $this->putSlidesSlideRequest($request);

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
     * Create request for operation 'putSlidesSlide'
     *
     * @param  string $name Name of the presentation. (required)
     * @param  int $slide_index Index of the slide update to. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Slide $slide_dto DTO of the slide. (optional)
     * @param  string $password (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage The presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesSlideRequest(Requests\PutSlidesSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlidesSlide');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
        }
        // query params
        if ($request->storage !== null) {
            $queryParams['storage'] = ObjectSerializer::toQueryValue($request->storage);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);

        $_tempBody = null;
        if (isset($request->slideDto)) {
            $_tempBody = $request->slideDto;
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
    public function putSlidesSlideBackground(Requests\PutSlidesSlideBackgroundRequest $request)
    {
        try {
            list($response) = $this->putSlidesSlideBackgroundWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesSlideBackgroundWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesSlideBackgroundWithHttpInfo(Requests\PutSlidesSlideBackgroundRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse';
        $httpRequest = $this->putSlidesSlideBackgroundRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlidesSlideBackgroundAsync(Requests\PutSlidesSlideBackgroundRequest $request)
    {
        return $this->putSlidesSlideBackgroundAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesSlideBackgroundAsyncWithHttpInfo(Requests\PutSlidesSlideBackgroundRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackgroundResponse';
        $httpRequest = $this->putSlidesSlideBackgroundRequest($request);

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
     * Create request for operation 'putSlidesSlideBackground'
     *
     * @param  string $name (required)
     * @param  int $slide_index (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\SlideBackground $background (optional)
     * @param  string $folder (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage (optional)
     * @param  string $color (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesSlideBackgroundRequest(Requests\PutSlidesSlideBackgroundRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesSlideBackground');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlidesSlideBackground');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/background';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($request->folder);
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
        if ($request->color !== null) {
            $queryParams['color'] = ObjectSerializer::toQueryValue($request->color);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);

        $_tempBody = null;
        if (isset($request->background)) {
            $_tempBody = $request->background;
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
