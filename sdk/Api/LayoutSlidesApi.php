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
class LayoutSlidesApi extends ApiBase
{
    /*
     * Initialize a new instance of LayoutSlidesApi
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
    public function getLayoutSlide(Requests\GetLayoutSlideRequest $request)
    {
        try {
            list($response) = $this->getLayoutSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getLayoutSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getLayoutSlideWithHttpInfo(Requests\GetLayoutSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse';
        $httpRequest = $this->getLayoutSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getLayoutSlideAsync(Requests\GetLayoutSlideRequest $request)
    {
        return $this->getLayoutSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getLayoutSlideAsyncWithHttpInfo(Requests\GetLayoutSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse';
        $httpRequest = $this->getLayoutSlideRequest($request);

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
     * Create request for operation 'getLayoutSlide'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLayoutSlideRequest(Requests\GetLayoutSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getLayoutSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getLayoutSlide');
        }

        $resourcePath = '/slides/{name}/layoutSlides/{slideIndex}';
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
    public function getLayoutSlidesList(Requests\GetLayoutSlidesListRequest $request)
    {
        try {
            list($response) = $this->getLayoutSlidesListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getLayoutSlidesListWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getLayoutSlidesListWithHttpInfo(Requests\GetLayoutSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideListResponse';
        $httpRequest = $this->getLayoutSlidesListRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getLayoutSlidesListAsync(Requests\GetLayoutSlidesListRequest $request)
    {
        return $this->getLayoutSlidesListAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getLayoutSlidesListAsyncWithHttpInfo(Requests\GetLayoutSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideListResponse';
        $httpRequest = $this->getLayoutSlidesListRequest($request);

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
     * Create request for operation 'getLayoutSlidesList'
     *
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLayoutSlidesListRequest(Requests\GetLayoutSlidesListRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getLayoutSlidesList');
        }

        $resourcePath = '/slides/{name}/layoutSlides';
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
    public function postCopyLayoutSlideFromSourcePresentation(Requests\PostCopyLayoutSlideFromSourcePresentationRequest $request)
    {
        try {
            list($response) = $this->postCopyLayoutSlideFromSourcePresentationWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postCopyLayoutSlideFromSourcePresentationWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postCopyLayoutSlideFromSourcePresentationWithHttpInfo(Requests\PostCopyLayoutSlideFromSourcePresentationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse';
        $httpRequest = $this->postCopyLayoutSlideFromSourcePresentationRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postCopyLayoutSlideFromSourcePresentationAsync(Requests\PostCopyLayoutSlideFromSourcePresentationRequest $request)
    {
        return $this->postCopyLayoutSlideFromSourcePresentationAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postCopyLayoutSlideFromSourcePresentationAsyncWithHttpInfo(Requests\PostCopyLayoutSlideFromSourcePresentationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse';
        $httpRequest = $this->postCopyLayoutSlideFromSourcePresentationRequest($request);

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
     * Create request for operation 'postCopyLayoutSlideFromSourcePresentation'
     *
     * @param  string $name Document name. (required)
     * @param  string $clone_from Name of the document to clone layoutSlide from. (required)
     * @param  int $clone_from_position Position of cloned layout slide. (required)
     * @param  string $clone_from_password Password for the document to clone layoutSlide from. (optional)
     * @param  string $clone_from_storage Storage of the document to clone layoutSlide from. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postCopyLayoutSlideFromSourcePresentationRequest(Requests\PostCopyLayoutSlideFromSourcePresentationRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postCopyLayoutSlideFromSourcePresentation');
        }
        // verify the required parameter 'clone_from' is set
        if ($request->cloneFrom === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cloneFrom when calling postCopyLayoutSlideFromSourcePresentation');
        }
        // verify the required parameter 'clone_from_position' is set
        if ($request->cloneFromPosition === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cloneFromPosition when calling postCopyLayoutSlideFromSourcePresentation');
        }

        $resourcePath = '/slides/{name}/layoutSlides';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->cloneFrom !== null) {
            $queryParams['cloneFrom'] = ObjectSerializer::toQueryValue($request->cloneFrom);
        }
        // query params
        if ($request->cloneFromPosition !== null) {
            $queryParams['cloneFromPosition'] = ObjectSerializer::toQueryValue($request->cloneFromPosition);
        }
        // query params
        if ($request->cloneFromPassword !== null) {
            $queryParams['cloneFromPassword'] = ObjectSerializer::toQueryValue($request->cloneFromPassword);
        }
        // query params
        if ($request->cloneFromStorage !== null) {
            $queryParams['cloneFromStorage'] = ObjectSerializer::toQueryValue($request->cloneFromStorage);
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

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function putLayoutSlide(Requests\PutLayoutSlideRequest $request)
    {
        try {
            list($response) = $this->putLayoutSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putLayoutSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putLayoutSlideWithHttpInfo(Requests\PutLayoutSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse';
        $httpRequest = $this->putLayoutSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putLayoutSlideAsync(Requests\PutLayoutSlideRequest $request)
    {
        return $this->putLayoutSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putLayoutSlideAsyncWithHttpInfo(Requests\PutLayoutSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlideResponse';
        $httpRequest = $this->putLayoutSlideRequest($request);

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
     * Create request for operation 'putLayoutSlide'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\LayoutSlide $slide_dto Slide update data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putLayoutSlideRequest(Requests\PutLayoutSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putLayoutSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putLayoutSlide');
        }

        $resourcePath = '/slides/{name}/layoutSlides/{slideIndex}';
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
}
