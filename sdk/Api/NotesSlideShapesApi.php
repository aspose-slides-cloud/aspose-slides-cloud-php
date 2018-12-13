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
class NotesSlideShapesApi extends ApiBase
{
    /*
     * Initialize a new instance of NotesSlideShapesApi
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
    public function deleteNotesSlideParagraph(Requests\DeleteNotesSlideParagraphRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlideParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlideParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlideParagraphWithHttpInfo(Requests\DeleteNotesSlideParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteNotesSlideParagraphRequest($request);
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
    public function deleteNotesSlideParagraphAsync(Requests\DeleteNotesSlideParagraphRequest $request)
    {
        return $this->deleteNotesSlideParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlideParagraphAsyncWithHttpInfo(Requests\DeleteNotesSlideParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteNotesSlideParagraphRequest($request);

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
     * Create request for operation 'deleteNotesSlideParagraph'
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
    protected function deleteNotesSlideParagraphRequest(Requests\DeleteNotesSlideParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlideParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlideParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteNotesSlideParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteNotesSlideParagraph');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling deleteNotesSlideParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}';
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
    public function deleteNotesSlideParagraphs(Requests\DeleteNotesSlideParagraphsRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlideParagraphsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlideParagraphsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlideParagraphsWithHttpInfo(Requests\DeleteNotesSlideParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteNotesSlideParagraphsRequest($request);
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
    public function deleteNotesSlideParagraphsAsync(Requests\DeleteNotesSlideParagraphsRequest $request)
    {
        return $this->deleteNotesSlideParagraphsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlideParagraphsAsyncWithHttpInfo(Requests\DeleteNotesSlideParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->deleteNotesSlideParagraphsRequest($request);

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
     * Create request for operation 'deleteNotesSlideParagraphs'
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
    protected function deleteNotesSlideParagraphsRequest(Requests\DeleteNotesSlideParagraphsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlideParagraphs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlideParagraphs');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteNotesSlideParagraphs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteNotesSlideParagraphs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs';
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
    public function deleteNotesSlidePortion(Requests\DeleteNotesSlidePortionRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlidePortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlidePortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlidePortionWithHttpInfo(Requests\DeleteNotesSlidePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deleteNotesSlidePortionRequest($request);
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
    public function deleteNotesSlidePortionAsync(Requests\DeleteNotesSlidePortionRequest $request)
    {
        return $this->deleteNotesSlidePortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlidePortionAsyncWithHttpInfo(Requests\DeleteNotesSlidePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deleteNotesSlidePortionRequest($request);

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
     * Create request for operation 'deleteNotesSlidePortion'
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
    protected function deleteNotesSlidePortionRequest(Requests\DeleteNotesSlidePortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlidePortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlidePortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteNotesSlidePortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteNotesSlidePortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling deleteNotesSlidePortion');
        }
        // verify the required parameter 'portion_index' is set
        if ($request->portionIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portionIndex when calling deleteNotesSlidePortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions/{portionIndex}';
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
    public function deleteNotesSlidePortions(Requests\DeleteNotesSlidePortionsRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlidePortionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlidePortionsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlidePortionsWithHttpInfo(Requests\DeleteNotesSlidePortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deleteNotesSlidePortionsRequest($request);
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
    public function deleteNotesSlidePortionsAsync(Requests\DeleteNotesSlidePortionsRequest $request)
    {
        return $this->deleteNotesSlidePortionsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlidePortionsAsyncWithHttpInfo(Requests\DeleteNotesSlidePortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->deleteNotesSlidePortionsRequest($request);

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
     * Create request for operation 'deleteNotesSlidePortions'
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
    protected function deleteNotesSlidePortionsRequest(Requests\DeleteNotesSlidePortionsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlidePortions');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlidePortions');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteNotesSlidePortions');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteNotesSlidePortions');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling deleteNotesSlidePortions');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions';
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
    public function deleteNotesSlideShape(Requests\DeleteNotesSlideShapeRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlideShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlideShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlideShapeWithHttpInfo(Requests\DeleteNotesSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteNotesSlideShapeRequest($request);
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
    public function deleteNotesSlideShapeAsync(Requests\DeleteNotesSlideShapeRequest $request)
    {
        return $this->deleteNotesSlideShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlideShapeAsyncWithHttpInfo(Requests\DeleteNotesSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteNotesSlideShapeRequest($request);

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
     * Create request for operation 'deleteNotesSlideShape'
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
    protected function deleteNotesSlideShapeRequest(Requests\DeleteNotesSlideShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlideShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlideShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteNotesSlideShape');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteNotesSlideShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}';
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
    public function deleteNotesSlideShapes(Requests\DeleteNotesSlideShapesRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlideShapesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlideShapesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlideShapesWithHttpInfo(Requests\DeleteNotesSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteNotesSlideShapesRequest($request);
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
    public function deleteNotesSlideShapesAsync(Requests\DeleteNotesSlideShapesRequest $request)
    {
        return $this->deleteNotesSlideShapesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlideShapesAsyncWithHttpInfo(Requests\DeleteNotesSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->deleteNotesSlideShapesRequest($request);

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
     * Create request for operation 'deleteNotesSlideShapes'
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
    protected function deleteNotesSlideShapesRequest(Requests\DeleteNotesSlideShapesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlideShapes');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlideShapes');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteNotesSlideShapes');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}';
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
    public function getNotesSlideShape(Requests\GetNotesSlideShapeRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapeWithHttpInfo(Requests\GetNotesSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->getNotesSlideShapeRequest($request);
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
    public function getNotesSlideShapeAsync(Requests\GetNotesSlideShapeRequest $request)
    {
        return $this->getNotesSlideShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapeAsyncWithHttpInfo(Requests\GetNotesSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->getNotesSlideShapeRequest($request);

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
     * Create request for operation 'getNotesSlideShape'
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
    protected function getNotesSlideShapeRequest(Requests\GetNotesSlideShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getNotesSlideShape');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getNotesSlideShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}';
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
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getNotesSlideShapeParagraph(Requests\GetNotesSlideShapeParagraphRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapeParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapeParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapeParagraphWithHttpInfo(Requests\GetNotesSlideShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->getNotesSlideShapeParagraphRequest($request);
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
    public function getNotesSlideShapeParagraphAsync(Requests\GetNotesSlideShapeParagraphRequest $request)
    {
        return $this->getNotesSlideShapeParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapeParagraphAsyncWithHttpInfo(Requests\GetNotesSlideShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->getNotesSlideShapeParagraphRequest($request);

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
     * Create request for operation 'getNotesSlideShapeParagraph'
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
    protected function getNotesSlideShapeParagraphRequest(Requests\GetNotesSlideShapeParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShapeParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShapeParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getNotesSlideShapeParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getNotesSlideShapeParagraph');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getNotesSlideShapeParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}';
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
    public function getNotesSlideShapeParagraphs(Requests\GetNotesSlideShapeParagraphsRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapeParagraphsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapeParagraphsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapeParagraphsWithHttpInfo(Requests\GetNotesSlideShapeParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->getNotesSlideShapeParagraphsRequest($request);
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
    public function getNotesSlideShapeParagraphsAsync(Requests\GetNotesSlideShapeParagraphsRequest $request)
    {
        return $this->getNotesSlideShapeParagraphsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapeParagraphsAsyncWithHttpInfo(Requests\GetNotesSlideShapeParagraphsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphListResponse';
        $httpRequest = $this->getNotesSlideShapeParagraphsRequest($request);

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
     * Create request for operation 'getNotesSlideShapeParagraphs'
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
    protected function getNotesSlideShapeParagraphsRequest(Requests\GetNotesSlideShapeParagraphsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShapeParagraphs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShapeParagraphs');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getNotesSlideShapeParagraphs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getNotesSlideShapeParagraphs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs';
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
    public function getNotesSlideShapePortion(Requests\GetNotesSlideShapePortionRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapePortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapePortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapePortionWithHttpInfo(Requests\GetNotesSlideShapePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->getNotesSlideShapePortionRequest($request);
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
    public function getNotesSlideShapePortionAsync(Requests\GetNotesSlideShapePortionRequest $request)
    {
        return $this->getNotesSlideShapePortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapePortionAsyncWithHttpInfo(Requests\GetNotesSlideShapePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->getNotesSlideShapePortionRequest($request);

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
     * Create request for operation 'getNotesSlideShapePortion'
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
    protected function getNotesSlideShapePortionRequest(Requests\GetNotesSlideShapePortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShapePortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShapePortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getNotesSlideShapePortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getNotesSlideShapePortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getNotesSlideShapePortion');
        }
        // verify the required parameter 'portion_index' is set
        if ($request->portionIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portionIndex when calling getNotesSlideShapePortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions/{portionIndex}';
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
    public function getNotesSlideShapePortions(Requests\GetNotesSlideShapePortionsRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapePortionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapePortionsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapePortionsWithHttpInfo(Requests\GetNotesSlideShapePortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->getNotesSlideShapePortionsRequest($request);
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
    public function getNotesSlideShapePortionsAsync(Requests\GetNotesSlideShapePortionsRequest $request)
    {
        return $this->getNotesSlideShapePortionsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapePortionsAsyncWithHttpInfo(Requests\GetNotesSlideShapePortionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionListResponse';
        $httpRequest = $this->getNotesSlideShapePortionsRequest($request);

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
     * Create request for operation 'getNotesSlideShapePortions'
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
    protected function getNotesSlideShapePortionsRequest(Requests\GetNotesSlideShapePortionsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShapePortions');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShapePortions');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getNotesSlideShapePortions');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getNotesSlideShapePortions');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getNotesSlideShapePortions');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions';
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
    public function getNotesSlideShapeWithFormat(Requests\GetNotesSlideShapeWithFormatRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapeWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapeWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapeWithFormatWithHttpInfo(Requests\GetNotesSlideShapeWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getNotesSlideShapeWithFormatRequest($request);
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
    public function getNotesSlideShapeWithFormatAsync(Requests\GetNotesSlideShapeWithFormatRequest $request)
    {
        return $this->getNotesSlideShapeWithFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapeWithFormatAsyncWithHttpInfo(Requests\GetNotesSlideShapeWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getNotesSlideShapeWithFormatRequest($request);

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
     * Create request for operation 'getNotesSlideShapeWithFormat'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  string $format Export picture format. (required)
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
    protected function getNotesSlideShapeWithFormatRequest(Requests\GetNotesSlideShapeWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShapeWithFormat');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShapeWithFormat');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getNotesSlideShapeWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getNotesSlideShapeWithFormat');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{shapeIndex}/saveAs/{format}';
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
    public function getNotesSlideShapes(Requests\GetNotesSlideShapesRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideShapesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideShapesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideShapesWithHttpInfo(Requests\GetNotesSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->getNotesSlideShapesRequest($request);
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
    public function getNotesSlideShapesAsync(Requests\GetNotesSlideShapesRequest $request)
    {
        return $this->getNotesSlideShapesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideShapesAsyncWithHttpInfo(Requests\GetNotesSlideShapesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeListResponse';
        $httpRequest = $this->getNotesSlideShapesRequest($request);

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
     * Create request for operation 'getNotesSlideShapes'
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
    protected function getNotesSlideShapesRequest(Requests\GetNotesSlideShapesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideShapes');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideShapes');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getNotesSlideShapes');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}';
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
    public function postNotesSlideAddNewParagraph(Requests\PostNotesSlideAddNewParagraphRequest $request)
    {
        try {
            list($response) = $this->postNotesSlideAddNewParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postNotesSlideAddNewParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postNotesSlideAddNewParagraphWithHttpInfo(Requests\PostNotesSlideAddNewParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->postNotesSlideAddNewParagraphRequest($request);
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
    public function postNotesSlideAddNewParagraphAsync(Requests\PostNotesSlideAddNewParagraphRequest $request)
    {
        return $this->postNotesSlideAddNewParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postNotesSlideAddNewParagraphAsyncWithHttpInfo(Requests\PostNotesSlideAddNewParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->postNotesSlideAddNewParagraphRequest($request);

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
     * Create request for operation 'postNotesSlideAddNewParagraph'
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
    protected function postNotesSlideAddNewParagraphRequest(Requests\PostNotesSlideAddNewParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postNotesSlideAddNewParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postNotesSlideAddNewParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling postNotesSlideAddNewParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling postNotesSlideAddNewParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs';
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
    public function postNotesSlideAddNewPortion(Requests\PostNotesSlideAddNewPortionRequest $request)
    {
        try {
            list($response) = $this->postNotesSlideAddNewPortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postNotesSlideAddNewPortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postNotesSlideAddNewPortionWithHttpInfo(Requests\PostNotesSlideAddNewPortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->postNotesSlideAddNewPortionRequest($request);
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
    public function postNotesSlideAddNewPortionAsync(Requests\PostNotesSlideAddNewPortionRequest $request)
    {
        return $this->postNotesSlideAddNewPortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postNotesSlideAddNewPortionAsyncWithHttpInfo(Requests\PostNotesSlideAddNewPortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->postNotesSlideAddNewPortionRequest($request);

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
     * Create request for operation 'postNotesSlideAddNewPortion'
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
     * @param  int $position Position of the new paragraph in the list. Default is at the end of the list. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postNotesSlideAddNewPortionRequest(Requests\PostNotesSlideAddNewPortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postNotesSlideAddNewPortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postNotesSlideAddNewPortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling postNotesSlideAddNewPortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling postNotesSlideAddNewPortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling postNotesSlideAddNewPortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions';
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
    public function postNotesSlideAddNewShape(Requests\PostNotesSlideAddNewShapeRequest $request)
    {
        try {
            list($response) = $this->postNotesSlideAddNewShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postNotesSlideAddNewShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postNotesSlideAddNewShapeWithHttpInfo(Requests\PostNotesSlideAddNewShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->postNotesSlideAddNewShapeRequest($request);
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
    public function postNotesSlideAddNewShapeAsync(Requests\PostNotesSlideAddNewShapeRequest $request)
    {
        return $this->postNotesSlideAddNewShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postNotesSlideAddNewShapeAsyncWithHttpInfo(Requests\PostNotesSlideAddNewShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->postNotesSlideAddNewShapeRequest($request);

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
     * Create request for operation 'postNotesSlideAddNewShape'
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
    protected function postNotesSlideAddNewShapeRequest(Requests\PostNotesSlideAddNewShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postNotesSlideAddNewShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postNotesSlideAddNewShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling postNotesSlideAddNewShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}';
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
    public function postNotesSlideShapeSaveAs(Requests\PostNotesSlideShapeSaveAsRequest $request)
    {
        try {
            list($response) = $this->postNotesSlideShapeSaveAsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postNotesSlideShapeSaveAsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postNotesSlideShapeSaveAsWithHttpInfo(Requests\PostNotesSlideShapeSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postNotesSlideShapeSaveAsRequest($request);
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
    public function postNotesSlideShapeSaveAsAsync(Requests\PostNotesSlideShapeSaveAsRequest $request)
    {
        return $this->postNotesSlideShapeSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postNotesSlideShapeSaveAsAsyncWithHttpInfo(Requests\PostNotesSlideShapeSaveAsRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postNotesSlideShapeSaveAsRequest($request);

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
     * Create request for operation 'postNotesSlideShapeSaveAs'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  string $format Export picture format. (required)
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
    protected function postNotesSlideShapeSaveAsRequest(Requests\PostNotesSlideShapeSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling postNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling postNotesSlideShapeSaveAs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{shapeIndex}/saveAs/{format}';
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
    public function putUpdateNotesSlideShape(Requests\PutUpdateNotesSlideShapeRequest $request)
    {
        try {
            list($response) = $this->putUpdateNotesSlideShapeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putUpdateNotesSlideShapeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putUpdateNotesSlideShapeWithHttpInfo(Requests\PutUpdateNotesSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->putUpdateNotesSlideShapeRequest($request);
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
    public function putUpdateNotesSlideShapeAsync(Requests\PutUpdateNotesSlideShapeRequest $request)
    {
        return $this->putUpdateNotesSlideShapeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putUpdateNotesSlideShapeAsyncWithHttpInfo(Requests\PutUpdateNotesSlideShapeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeResponse';
        $httpRequest = $this->putUpdateNotesSlideShapeRequest($request);

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
     * Create request for operation 'putUpdateNotesSlideShape'
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
    protected function putUpdateNotesSlideShapeRequest(Requests\PutUpdateNotesSlideShapeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putUpdateNotesSlideShape');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putUpdateNotesSlideShape');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling putUpdateNotesSlideShape');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putUpdateNotesSlideShape');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}';
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
    /**
     */
    public function putUpdateNotesSlideShapeParagraph(Requests\PutUpdateNotesSlideShapeParagraphRequest $request)
    {
        try {
            list($response) = $this->putUpdateNotesSlideShapeParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putUpdateNotesSlideShapeParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putUpdateNotesSlideShapeParagraphWithHttpInfo(Requests\PutUpdateNotesSlideShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->putUpdateNotesSlideShapeParagraphRequest($request);
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
    public function putUpdateNotesSlideShapeParagraphAsync(Requests\PutUpdateNotesSlideShapeParagraphRequest $request)
    {
        return $this->putUpdateNotesSlideShapeParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putUpdateNotesSlideShapeParagraphAsyncWithHttpInfo(Requests\PutUpdateNotesSlideShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ParagraphResponse';
        $httpRequest = $this->putUpdateNotesSlideShapeParagraphRequest($request);

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
     * Create request for operation 'putUpdateNotesSlideShapeParagraph'
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
    protected function putUpdateNotesSlideShapeParagraphRequest(Requests\PutUpdateNotesSlideShapeParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putUpdateNotesSlideShapeParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putUpdateNotesSlideShapeParagraph');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling putUpdateNotesSlideShapeParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putUpdateNotesSlideShapeParagraph');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling putUpdateNotesSlideShapeParagraph');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}';
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
    public function putUpdateNotesSlideShapePortion(Requests\PutUpdateNotesSlideShapePortionRequest $request)
    {
        try {
            list($response) = $this->putUpdateNotesSlideShapePortionWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putUpdateNotesSlideShapePortionWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putUpdateNotesSlideShapePortionWithHttpInfo(Requests\PutUpdateNotesSlideShapePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->putUpdateNotesSlideShapePortionRequest($request);
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
    public function putUpdateNotesSlideShapePortionAsync(Requests\PutUpdateNotesSlideShapePortionRequest $request)
    {
        return $this->putUpdateNotesSlideShapePortionAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putUpdateNotesSlideShapePortionAsyncWithHttpInfo(Requests\PutUpdateNotesSlideShapePortionRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\PortionResponse';
        $httpRequest = $this->putUpdateNotesSlideShapePortionRequest($request);

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
     * Create request for operation 'putUpdateNotesSlideShapePortion'
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
    protected function putUpdateNotesSlideShapePortionRequest(Requests\PutUpdateNotesSlideShapePortionRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putUpdateNotesSlideShapePortion');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putUpdateNotesSlideShapePortion');
        }
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling putUpdateNotesSlideShapePortion');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putUpdateNotesSlideShapePortion');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling putUpdateNotesSlideShapePortion');
        }
        // verify the required parameter 'portion_index' is set
        if ($request->portionIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portionIndex when calling putUpdateNotesSlideShapePortion');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs/{paragraphIndex}/portions/{portionIndex}';
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
}
