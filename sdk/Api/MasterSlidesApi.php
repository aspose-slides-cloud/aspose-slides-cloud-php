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
class MasterSlidesApi extends ApiBase
{
    /*
     * Initialize a new instance of MasterSlidesApi
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
    public function getMasterSlide(Requests\GetMasterSlideRequest $request)
    {
        try {
            list($response) = $this->getMasterSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getMasterSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getMasterSlideWithHttpInfo(Requests\GetMasterSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideResponse';
        $httpRequest = $this->getMasterSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getMasterSlideAsync(Requests\GetMasterSlideRequest $request)
    {
        return $this->getMasterSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getMasterSlideAsyncWithHttpInfo(Requests\GetMasterSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideResponse';
        $httpRequest = $this->getMasterSlideRequest($request);

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
     * Create request for operation 'getMasterSlide'
     *
     * @param  string $name The presentation name. (required)
     * @param  int $slide_index (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMasterSlideRequest(Requests\GetMasterSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getMasterSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getMasterSlide');
        }

        $resourcePath = '/slides/{name}/masterSlides/{slideIndex}';
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
    public function getMasterSlidesList(Requests\GetMasterSlidesListRequest $request)
    {
        try {
            list($response) = $this->getMasterSlidesListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getMasterSlidesListWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getMasterSlidesListWithHttpInfo(Requests\GetMasterSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideListResponse';
        $httpRequest = $this->getMasterSlidesListRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getMasterSlidesListAsync(Requests\GetMasterSlidesListRequest $request)
    {
        return $this->getMasterSlidesListAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getMasterSlidesListAsyncWithHttpInfo(Requests\GetMasterSlidesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideListResponse';
        $httpRequest = $this->getMasterSlidesListRequest($request);

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
     * Create request for operation 'getMasterSlidesList'
     *
     * @param  string $name The presentation name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMasterSlidesListRequest(Requests\GetMasterSlidesListRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getMasterSlidesList');
        }

        $resourcePath = '/slides/{name}/masterSlides';
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
    public function postCopyMasterSlideFromSourcePresentation(Requests\PostCopyMasterSlideFromSourcePresentationRequest $request)
    {
        try {
            list($response) = $this->postCopyMasterSlideFromSourcePresentationWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postCopyMasterSlideFromSourcePresentationWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postCopyMasterSlideFromSourcePresentationWithHttpInfo(Requests\PostCopyMasterSlideFromSourcePresentationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideResponse';
        $httpRequest = $this->postCopyMasterSlideFromSourcePresentationRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postCopyMasterSlideFromSourcePresentationAsync(Requests\PostCopyMasterSlideFromSourcePresentationRequest $request)
    {
        return $this->postCopyMasterSlideFromSourcePresentationAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postCopyMasterSlideFromSourcePresentationAsyncWithHttpInfo(Requests\PostCopyMasterSlideFromSourcePresentationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlideResponse';
        $httpRequest = $this->postCopyMasterSlideFromSourcePresentationRequest($request);

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
     * Create request for operation 'postCopyMasterSlideFromSourcePresentation'
     *
     * @param  string $name The presentation name. (required)
     * @param  string $clone_from Source presentation to clone masterSlide from. (required)
     * @param  int $clone_from_position Position of cloning master slide. (required)
     * @param  string $clone_from_password Source presentation password. (optional)
     * @param  string $clone_from_storage Storage source presentation to clone masterSlide from. (optional)
     * @param  bool $apply_to_all Apply cloned master slide to every existed slide. Optional parameter, false by default (optional, default to false)
     * @param  string $password The presentation password. (optional)
     * @param  string $folder The presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postCopyMasterSlideFromSourcePresentationRequest(Requests\PostCopyMasterSlideFromSourcePresentationRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postCopyMasterSlideFromSourcePresentation');
        }
        // verify the required parameter 'clone_from' is set
        if ($request->cloneFrom === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cloneFrom when calling postCopyMasterSlideFromSourcePresentation');
        }
        // verify the required parameter 'clone_from_position' is set
        if ($request->cloneFromPosition === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cloneFromPosition when calling postCopyMasterSlideFromSourcePresentation');
        }

        $resourcePath = '/slides/{name}/masterSlides';
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
        if ($request->applyToAll !== null) {
            $queryParams['applyToAll'] = ObjectSerializer::toQueryValue($request->applyToAll);
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
}
