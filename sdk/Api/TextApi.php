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
class TextApi extends ApiBase
{
    /*
     * Initialize a new instance of TextApi
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
    public function getSlidesPresentationTextItems(Requests\GetSlidesPresentationTextItemsRequest $request)
    {
        try {
            list($response) = $this->getSlidesPresentationTextItemsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesPresentationTextItemsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesPresentationTextItemsWithHttpInfo(Requests\GetSlidesPresentationTextItemsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItemsResponse';
        $httpRequest = $this->getSlidesPresentationTextItemsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\TextItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesPresentationTextItemsAsync(Requests\GetSlidesPresentationTextItemsRequest $request)
    {
        return $this->getSlidesPresentationTextItemsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesPresentationTextItemsAsyncWithHttpInfo(Requests\GetSlidesPresentationTextItemsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItemsResponse';
        $httpRequest = $this->getSlidesPresentationTextItemsRequest($request);

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
     * Create request for operation 'getSlidesPresentationTextItems'
     *
     * @param  string $name Document name. (required)
     * @param  bool $with_empty True to incude empty items. (optional, default to false)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesPresentationTextItemsRequest(Requests\GetSlidesPresentationTextItemsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesPresentationTextItems');
        }

        $resourcePath = '/slides/{name}/textItems';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->withEmpty !== null) {
            $queryParams['withEmpty'] = ObjectSerializer::toQueryValue($request->withEmpty);
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

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesSlideTextItems(Requests\GetSlidesSlideTextItemsRequest $request)
    {
        try {
            list($response) = $this->getSlidesSlideTextItemsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesSlideTextItemsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesSlideTextItemsWithHttpInfo(Requests\GetSlidesSlideTextItemsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItemsResponse';
        $httpRequest = $this->getSlidesSlideTextItemsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\TextItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesSlideTextItemsAsync(Requests\GetSlidesSlideTextItemsRequest $request)
    {
        return $this->getSlidesSlideTextItemsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesSlideTextItemsAsyncWithHttpInfo(Requests\GetSlidesSlideTextItemsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItemsResponse';
        $httpRequest = $this->getSlidesSlideTextItemsRequest($request);

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
     * Create request for operation 'getSlidesSlideTextItems'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  bool $with_empty True to incude empty items. (optional, default to false)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesSlideTextItemsRequest(Requests\GetSlidesSlideTextItemsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesSlideTextItems');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesSlideTextItems');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/textItems';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->withEmpty !== null) {
            $queryParams['withEmpty'] = ObjectSerializer::toQueryValue($request->withEmpty);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function postSlidesPresentationReplaceText(Requests\PostSlidesPresentationReplaceTextRequest $request)
    {
        try {
            list($response) = $this->postSlidesPresentationReplaceTextWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesPresentationReplaceTextWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesPresentationReplaceTextWithHttpInfo(Requests\PostSlidesPresentationReplaceTextRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PresentationStringReplaceResponse';
        $httpRequest = $this->postSlidesPresentationReplaceTextRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PresentationStringReplaceResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesPresentationReplaceTextAsync(Requests\PostSlidesPresentationReplaceTextRequest $request)
    {
        return $this->postSlidesPresentationReplaceTextAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesPresentationReplaceTextAsyncWithHttpInfo(Requests\PostSlidesPresentationReplaceTextRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PresentationStringReplaceResponse';
        $httpRequest = $this->postSlidesPresentationReplaceTextRequest($request);

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
     * Create request for operation 'postSlidesPresentationReplaceText'
     *
     * @param  string $name Document name. (required)
     * @param  string $old_value Text value to be replaced. (required)
     * @param  string $new_value Text value to replace with. (required)
     * @param  bool $ignore_case True if character case must be ignored. (optional, default to false)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesPresentationReplaceTextRequest(Requests\PostSlidesPresentationReplaceTextRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesPresentationReplaceText');
        }
        // verify the required parameter 'old_value' is set
        if ($request->oldValue === null) {
            throw new \InvalidArgumentException('Missing the required parameter $oldValue when calling postSlidesPresentationReplaceText');
        }
        // verify the required parameter 'new_value' is set
        if ($request->newValue === null) {
            throw new \InvalidArgumentException('Missing the required parameter $newValue when calling postSlidesPresentationReplaceText');
        }

        $resourcePath = '/slides/{name}/replaceText';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->oldValue !== null) {
            $queryParams['oldValue'] = ObjectSerializer::toQueryValue($request->oldValue);
        }
        // query params
        if ($request->newValue !== null) {
            $queryParams['newValue'] = ObjectSerializer::toQueryValue($request->newValue);
        }
        // query params
        if ($request->ignoreCase !== null) {
            $queryParams['ignoreCase'] = ObjectSerializer::toQueryValue($request->ignoreCase);
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
    public function postSlidesSlideReplaceText(Requests\PostSlidesSlideReplaceTextRequest $request)
    {
        try {
            list($response) = $this->postSlidesSlideReplaceTextWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesSlideReplaceTextWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesSlideReplaceTextWithHttpInfo(Requests\PostSlidesSlideReplaceTextRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideStringReplaceResponse';
        $httpRequest = $this->postSlidesSlideReplaceTextRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideStringReplaceResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesSlideReplaceTextAsync(Requests\PostSlidesSlideReplaceTextRequest $request)
    {
        return $this->postSlidesSlideReplaceTextAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesSlideReplaceTextAsyncWithHttpInfo(Requests\PostSlidesSlideReplaceTextRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideStringReplaceResponse';
        $httpRequest = $this->postSlidesSlideReplaceTextRequest($request);

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
     * Create request for operation 'postSlidesSlideReplaceText'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $old_value Text value to be replaced. (required)
     * @param  string $new_value Text value to replace with. (required)
     * @param  bool $ignore_case True if character case must be ignored. (optional, default to false)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesSlideReplaceTextRequest(Requests\PostSlidesSlideReplaceTextRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesSlideReplaceText');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postSlidesSlideReplaceText');
        }
        // verify the required parameter 'old_value' is set
        if ($request->oldValue === null) {
            throw new \InvalidArgumentException('Missing the required parameter $oldValue when calling postSlidesSlideReplaceText');
        }
        // verify the required parameter 'new_value' is set
        if ($request->newValue === null) {
            throw new \InvalidArgumentException('Missing the required parameter $newValue when calling postSlidesSlideReplaceText');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/replaceText';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->oldValue !== null) {
            $queryParams['oldValue'] = ObjectSerializer::toQueryValue($request->oldValue);
        }
        // query params
        if ($request->newValue !== null) {
            $queryParams['newValue'] = ObjectSerializer::toQueryValue($request->newValue);
        }
        // query params
        if ($request->ignoreCase !== null) {
            $queryParams['ignoreCase'] = ObjectSerializer::toQueryValue($request->ignoreCase);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'POST');
    }
}
