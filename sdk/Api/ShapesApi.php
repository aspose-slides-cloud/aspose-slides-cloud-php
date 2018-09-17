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
class ShapesApi extends ApiBase
{
    /*
     * Initialize a new instance of ShapesApi
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
    public function deleteParagraph(Requests\DeleteParagraphRequest $request)
    {
        try {
            list($response) = $this->deleteParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteParagraphWithHttpInfo(Requests\DeleteParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteParagraphRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteParagraphAsync(Requests\DeleteParagraphRequest $request)
    {
        return $this->deleteParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteParagraphAsyncWithHttpInfo(Requests\DeleteParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteParagraphRequest($request);

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
     * Create request for operation 'deleteParagraph'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteParagraphRequest(Requests\DeleteParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteParagraph');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling deleteParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteParagraphs(Requests\DeleteParagraphsRequest $request)
    {
        try {
            list($response) = $this->deleteParagraphsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteParagraphsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteParagraphsWithHttpInfo(Requests\DeleteParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteParagraphsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteParagraphsAsync(Requests\DeleteParagraphsRequest $request)
    {
        return $this->deleteParagraphsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteParagraphsAsyncWithHttpInfo(Requests\DeleteParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteParagraphsRequest($request);

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
     * Create request for operation 'deleteParagraphs'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int[] $paragraphs The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteParagraphsRequest(Requests\DeleteParagraphsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteParagraphs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteParagraphs');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteParagraphs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteParagraphs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs';
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
        if ($request->paragraphs !== null) {
            $queryParams['paragraphs'] = ObjectSerializer::toQueryValue($request->paragraphs);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deletePortion(Requests\DeletePortionRequest $request)
    {
        try {
            list($response) = $this->deletePortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deletePortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deletePortionWithHttpInfo(Requests\DeletePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deletePortionRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deletePortionAsync(Requests\DeletePortionRequest $request)
    {
        return $this->deletePortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deletePortionAsyncWithHttpInfo(Requests\DeletePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deletePortionRequest($request);

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
     * Create request for operation 'deletePortion'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePortionRequest(Requests\DeletePortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deletePortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deletePortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deletePortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deletePortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling deletePortion');
        }
        // verify the required parameter 'portion_index' is set
        if ($request->portionIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portionIndex when calling deletePortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions/{portionIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "portionIndex", $request->portionIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deletePortions(Requests\DeletePortionsRequest $request)
    {
        try {
            list($response) = $this->deletePortionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deletePortionsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deletePortionsWithHttpInfo(Requests\DeletePortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deletePortionsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deletePortionsAsync(Requests\DeletePortionsRequest $request)
    {
        return $this->deletePortionsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deletePortionsAsyncWithHttpInfo(Requests\DeletePortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deletePortionsRequest($request);

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
     * Create request for operation 'deletePortions'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int[] $portions The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePortionsRequest(Requests\DeletePortionsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deletePortions');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deletePortions');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deletePortions');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deletePortions');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling deletePortions');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions';
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
        if ($request->portions !== null) {
            $queryParams['portions'] = ObjectSerializer::toQueryValue($request->portions);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideShape(Requests\DeleteSlideShapeRequest $request)
    {
        try {
            list($response) = $this->deleteSlideShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideShapeWithHttpInfo(Requests\DeleteSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteSlideShapeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideShapeAsync(Requests\DeleteSlideShapeRequest $request)
    {
        return $this->deleteSlideShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideShapeAsyncWithHttpInfo(Requests\DeleteSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteSlideShapeRequest($request);

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
     * Create request for operation 'deleteSlideShape'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlideShapeRequest(Requests\DeleteSlideShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteSlideShape');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteSlideShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideShapes(Requests\DeleteSlideShapesRequest $request)
    {
        try {
            list($response) = $this->deleteSlideShapesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideShapesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideShapesWithHttpInfo(Requests\DeleteSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteSlideShapesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideShapesAsync(Requests\DeleteSlideShapesRequest $request)
    {
        return $this->deleteSlideShapesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideShapesAsyncWithHttpInfo(Requests\DeleteSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteSlideShapesRequest($request);

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
     * Create request for operation 'deleteSlideShapes'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int[] $shapes The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlideShapesRequest(Requests\DeleteSlideShapesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideShapes');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideShapes');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteSlideShapes');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}';
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
        if ($request->shapes !== null) {
            $queryParams['shapes'] = ObjectSerializer::toQueryValue($request->shapes);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function getParagraphPortion(Requests\GetParagraphPortionRequest $request)
    {
        try {
            list($response) = $this->getParagraphPortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getParagraphPortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getParagraphPortionWithHttpInfo(Requests\GetParagraphPortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->getParagraphPortionRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getParagraphPortionAsync(Requests\GetParagraphPortionRequest $request)
    {
        return $this->getParagraphPortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getParagraphPortionAsyncWithHttpInfo(Requests\GetParagraphPortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->getParagraphPortionRequest($request);

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
     * Create request for operation 'getParagraphPortion'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getParagraphPortionRequest(Requests\GetParagraphPortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getParagraphPortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getParagraphPortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getParagraphPortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getParagraphPortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getParagraphPortion');
        }
        // verify the required parameter 'portion_index' is set
        if ($request->portionIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portionIndex when calling getParagraphPortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions/{portionIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "portionIndex", $request->portionIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getParagraphPortions(Requests\GetParagraphPortionsRequest $request)
    {
        try {
            list($response) = $this->getParagraphPortionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getParagraphPortionsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getParagraphPortionsWithHttpInfo(Requests\GetParagraphPortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->getParagraphPortionsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getParagraphPortionsAsync(Requests\GetParagraphPortionsRequest $request)
    {
        return $this->getParagraphPortionsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getParagraphPortionsAsyncWithHttpInfo(Requests\GetParagraphPortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->getParagraphPortionsRequest($request);

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
     * Create request for operation 'getParagraphPortions'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getParagraphPortionsRequest(Requests\GetParagraphPortionsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getParagraphPortions');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getParagraphPortions');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getParagraphPortions');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getParagraphPortions');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getParagraphPortions');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getShapeParagraph(Requests\GetShapeParagraphRequest $request)
    {
        try {
            list($response) = $this->getShapeParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getShapeParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getShapeParagraphWithHttpInfo(Requests\GetShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->getShapeParagraphRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getShapeParagraphAsync(Requests\GetShapeParagraphRequest $request)
    {
        return $this->getShapeParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getShapeParagraphAsyncWithHttpInfo(Requests\GetShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->getShapeParagraphRequest($request);

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
     * Create request for operation 'getShapeParagraph'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShapeParagraphRequest(Requests\GetShapeParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getShapeParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getShapeParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getShapeParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getShapeParagraph');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getShapeParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getShapeWithFormat(Requests\GetShapeWithFormatRequest $request)
    {
        try {
            list($response) = $this->getShapeWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getShapeWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getShapeWithFormatWithHttpInfo(Requests\GetShapeWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getShapeWithFormatRequest($request);
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
    public function getShapeWithFormatAsync(Requests\GetShapeWithFormatRequest $request)
    {
        return $this->getShapeWithFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getShapeWithFormatAsyncWithHttpInfo(Requests\GetShapeWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getShapeWithFormatRequest($request);

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
     * Create request for operation 'getShapeWithFormat'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  int $format Export picture format. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  double $scale_x X scale ratio. (optional, default to 0.0)
     * @param  double $scale_y Y scale ratio. (optional, default to 0.0)
     * @param  string $bounds Shape thumbnail bounds type. (optional)
     * @param  string $out_path Output path. (optional)
     * @param  string $fonts_folder Fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShapeWithFormatRequest(Requests\GetShapeWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getShapeWithFormat');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getShapeWithFormat');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getShapeWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getShapeWithFormat');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{shapeIndex}/saveAs/{format}';
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
        if ($request->scaleX !== null) {
            $queryParams['scaleX'] = ObjectSerializer::toQueryValue($request->scaleX);
        }
        // query params
        if ($request->scaleY !== null) {
            $queryParams['scaleY'] = ObjectSerializer::toQueryValue($request->scaleY);
        }
        // query params
        if ($request->bounds !== null) {
            $queryParams['bounds'] = ObjectSerializer::toQueryValue($request->bounds);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);


        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlideShape(Requests\GetSlideShapeRequest $request)
    {
        try {
            list($response) = $this->getSlideShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlideShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlideShapeWithHttpInfo(Requests\GetSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->getSlideShapeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlideShapeAsync(Requests\GetSlideShapeRequest $request)
    {
        return $this->getSlideShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlideShapeAsyncWithHttpInfo(Requests\GetSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->getSlideShapeRequest($request);

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
     * Create request for operation 'getSlideShape'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlideShapeRequest(Requests\GetSlideShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlideShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlideShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getSlideShape');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getSlideShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlideShapeParagraphs(Requests\GetSlideShapeParagraphsRequest $request)
    {
        try {
            list($response) = $this->getSlideShapeParagraphsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlideShapeParagraphsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlideShapeParagraphsWithHttpInfo(Requests\GetSlideShapeParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->getSlideShapeParagraphsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlideShapeParagraphsAsync(Requests\GetSlideShapeParagraphsRequest $request)
    {
        return $this->getSlideShapeParagraphsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlideShapeParagraphsAsyncWithHttpInfo(Requests\GetSlideShapeParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->getSlideShapeParagraphsRequest($request);

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
     * Create request for operation 'getSlideShapeParagraphs'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlideShapeParagraphsRequest(Requests\GetSlideShapeParagraphsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlideShapeParagraphs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlideShapeParagraphs');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getSlideShapeParagraphs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getSlideShapeParagraphs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlideShapes(Requests\GetSlideShapesRequest $request)
    {
        try {
            list($response) = $this->getSlideShapesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlideShapesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlideShapesWithHttpInfo(Requests\GetSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->getSlideShapesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlideShapesAsync(Requests\GetSlideShapesRequest $request)
    {
        return $this->getSlideShapesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlideShapesAsyncWithHttpInfo(Requests\GetSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->getSlideShapesRequest($request);

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
     * Create request for operation 'getSlideShapes'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlideShapesRequest(Requests\GetSlideShapesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlideShapes');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlideShapes');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getSlideShapes');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function postAddNewParagraph(Requests\PostAddNewParagraphRequest $request)
    {
        try {
            list($response) = $this->postAddNewParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postAddNewParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postAddNewParagraphWithHttpInfo(Requests\PostAddNewParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->postAddNewParagraphRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postAddNewParagraphAsync(Requests\PostAddNewParagraphRequest $request)
    {
        return $this->postAddNewParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postAddNewParagraphAsyncWithHttpInfo(Requests\PostAddNewParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->postAddNewParagraphRequest($request);

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
     * Create request for operation 'postAddNewParagraph'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Paragraph $dto Shape dto. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  int $position Position of the new paragraph in the list. Default is at the end of the list. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAddNewParagraphRequest(Requests\PostAddNewParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postAddNewParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postAddNewParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling postAddNewParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling postAddNewParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs';
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
        if ($request->position !== null) {
            $queryParams['position'] = ObjectSerializer::toQueryValue($request->position);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);

        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
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
    public function postAddNewPortion(Requests\PostAddNewPortionRequest $request)
    {
        try {
            list($response) = $this->postAddNewPortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postAddNewPortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postAddNewPortionWithHttpInfo(Requests\PostAddNewPortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->postAddNewPortionRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postAddNewPortionAsync(Requests\PostAddNewPortionRequest $request)
    {
        return $this->postAddNewPortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postAddNewPortionAsyncWithHttpInfo(Requests\PostAddNewPortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->postAddNewPortionRequest($request);

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
     * Create request for operation 'postAddNewPortion'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Shape dto. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  int $position Position of the new portion in the list. Default is at the end of the list. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAddNewPortionRequest(Requests\PostAddNewPortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postAddNewPortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postAddNewPortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling postAddNewPortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling postAddNewPortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling postAddNewPortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions';
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
        if ($request->position !== null) {
            $queryParams['position'] = ObjectSerializer::toQueryValue($request->position);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);

        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
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
    public function postAddNewShape(Requests\PostAddNewShapeRequest $request)
    {
        try {
            list($response) = $this->postAddNewShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postAddNewShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postAddNewShapeWithHttpInfo(Requests\PostAddNewShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->postAddNewShapeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postAddNewShapeAsync(Requests\PostAddNewShapeRequest $request)
    {
        return $this->postAddNewShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postAddNewShapeAsyncWithHttpInfo(Requests\PostAddNewShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->postAddNewShapeRequest($request);

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
     * Create request for operation 'postAddNewShape'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape dto. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  int $shape_to_clone Optional index for clone shape instead of adding the new one. (optional)
     * @param  int $position Position of the new shape in the list. Default is at the end of the list. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAddNewShapeRequest(Requests\PostAddNewShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postAddNewShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postAddNewShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling postAddNewShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}';
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
        if ($request->shapeToClone !== null) {
            $queryParams['shapeToClone'] = ObjectSerializer::toQueryValue($request->shapeToClone);
        }
        // query params
        if ($request->position !== null) {
            $queryParams['position'] = ObjectSerializer::toQueryValue($request->position);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);

        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
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
    public function postShapeSaveAs(Requests\PostShapeSaveAsRequest $request)
    {
        try {
            list($response) = $this->postShapeSaveAsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postShapeSaveAsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postShapeSaveAsWithHttpInfo(Requests\PostShapeSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postShapeSaveAsRequest($request);
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
    public function postShapeSaveAsAsync(Requests\PostShapeSaveAsRequest $request)
    {
        return $this->postShapeSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postShapeSaveAsAsyncWithHttpInfo(Requests\PostShapeSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postShapeSaveAsRequest($request);

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
     * Create request for operation 'postShapeSaveAs'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  int $format Export picture format. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions $options export options (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  double $scale_x X scale ratio. (optional, default to 0.0)
     * @param  double $scale_y Y scale ratio. (optional, default to 0.0)
     * @param  string $bounds Shape thumbnail bounds type. (optional)
     * @param  string $out_path Output path. (optional)
     * @param  string $fonts_folder Fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postShapeSaveAsRequest(Requests\PostShapeSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postShapeSaveAs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postShapeSaveAs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling postShapeSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling postShapeSaveAs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{shapeIndex}/saveAs/{format}';
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
        if ($request->scaleX !== null) {
            $queryParams['scaleX'] = ObjectSerializer::toQueryValue($request->scaleX);
        }
        // query params
        if ($request->scaleY !== null) {
            $queryParams['scaleY'] = ObjectSerializer::toQueryValue($request->scaleY);
        }
        // query params
        if ($request->bounds !== null) {
            $queryParams['bounds'] = ObjectSerializer::toQueryValue($request->bounds);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
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
    public function putSetParagraphPortionProperties(Requests\PutSetParagraphPortionPropertiesRequest $request)
    {
        try {
            list($response) = $this->putSetParagraphPortionPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSetParagraphPortionPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSetParagraphPortionPropertiesWithHttpInfo(Requests\PutSetParagraphPortionPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->putSetParagraphPortionPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSetParagraphPortionPropertiesAsync(Requests\PutSetParagraphPortionPropertiesRequest $request)
    {
        return $this->putSetParagraphPortionPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSetParagraphPortionPropertiesAsyncWithHttpInfo(Requests\PutSetParagraphPortionPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->putSetParagraphPortionPropertiesRequest($request);

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
     * Create request for operation 'putSetParagraphPortionProperties'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Object path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Shape dto. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSetParagraphPortionPropertiesRequest(Requests\PutSetParagraphPortionPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSetParagraphPortionProperties');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSetParagraphPortionProperties');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling putSetParagraphPortionProperties');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putSetParagraphPortionProperties');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling putSetParagraphPortionProperties');
        }
        // verify the required parameter 'portion_index' is set
        if ($request->portionIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portionIndex when calling putSetParagraphPortionProperties');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions/{portionIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "portionIndex", $request->portionIndex);

        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
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
    public function putSetParagraphProperties(Requests\PutSetParagraphPropertiesRequest $request)
    {
        try {
            list($response) = $this->putSetParagraphPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSetParagraphPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSetParagraphPropertiesWithHttpInfo(Requests\PutSetParagraphPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->putSetParagraphPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSetParagraphPropertiesAsync(Requests\PutSetParagraphPropertiesRequest $request)
    {
        return $this->putSetParagraphPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSetParagraphPropertiesAsyncWithHttpInfo(Requests\PutSetParagraphPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->putSetParagraphPropertiesRequest($request);

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
     * Create request for operation 'putSetParagraphProperties'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Object path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Paragraph $dto Shape dto. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSetParagraphPropertiesRequest(Requests\PutSetParagraphPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSetParagraphProperties');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSetParagraphProperties');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling putSetParagraphProperties');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putSetParagraphProperties');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling putSetParagraphProperties');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);

        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
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
    public function putSlideShapeInfo(Requests\PutSlideShapeInfoRequest $request)
    {
        try {
            list($response) = $this->putSlideShapeInfoWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlideShapeInfoWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlideShapeInfoWithHttpInfo(Requests\PutSlideShapeInfoRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->putSlideShapeInfoRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlideShapeInfoAsync(Requests\PutSlideShapeInfoRequest $request)
    {
        return $this->putSlideShapeInfoAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlideShapeInfoAsyncWithHttpInfo(Requests\PutSlideShapeInfoRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->putSlideShapeInfoRequest($request);

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
     * Create request for operation 'putSlideShapeInfo'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Object path. (required)
     * @param  int $shape_index Shape index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape dto. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlideShapeInfoRequest(Requests\PutSlideShapeInfoRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlideShapeInfo');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlideShapeInfo');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling putSlideShapeInfo');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putSlideShapeInfo');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);

        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
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
