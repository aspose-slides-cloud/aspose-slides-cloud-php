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
    public function copyFile(Requests\CopyFileRequest $request)
    {
        try {
            $this->copyFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->copyFileWithHttpInfo($request);
        } 
    }

    /**
     */
    public function copyFileWithHttpInfo(Requests\CopyFileRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->copyFileRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function copyFileAsync(Requests\CopyFileRequest $request)
    {
        return $this->copyFileAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function copyFileAsyncWithHttpInfo(Requests\CopyFileRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->copyFileRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'copyFile'
     *
     * @param  string $src_path Source file path e.g. &#39;/folder/file.ext&#39; (required)
     * @param  string $dest_path Destination file path (required)
     * @param  string $src_storage_name Source storage name (optional)
     * @param  string $dest_storage_name Destination storage name (optional)
     * @param  string $version_id File version ID to copy (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function copyFileRequest(Requests\CopyFileRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->srcPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $srcPath when calling copyFile');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->destPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destPath when calling copyFile');
        }

        $resourcePath = '/slides/storage/file/copy/{srcPath}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->destPath !== null) {
            $queryParams['destPath'] = ObjectSerializer::toQueryValue($request->destPath);
        }
        // query params
        if ($request->srcStorageName !== null) {
            $queryParams['srcStorageName'] = ObjectSerializer::toQueryValue($request->srcStorageName);
        }
        // query params
        if ($request->destStorageName !== null) {
            $queryParams['destStorageName'] = ObjectSerializer::toQueryValue($request->destStorageName);
        }
        // query params
        if ($request->versionId !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($request->versionId);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "srcPath", $request->srcPath);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function copyFolder(Requests\CopyFolderRequest $request)
    {
        try {
            $this->copyFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->copyFolderWithHttpInfo($request);
        } 
    }

    /**
     */
    public function copyFolderWithHttpInfo(Requests\CopyFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->copyFolderRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function copyFolderAsync(Requests\CopyFolderRequest $request)
    {
        return $this->copyFolderAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function copyFolderAsyncWithHttpInfo(Requests\CopyFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->copyFolderRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'copyFolder'
     *
     * @param  string $src_path Source folder path e.g. &#39;/src&#39; (required)
     * @param  string $dest_path Destination folder path e.g. &#39;/dst&#39; (required)
     * @param  string $src_storage_name Source storage name (optional)
     * @param  string $dest_storage_name Destination storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function copyFolderRequest(Requests\CopyFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->srcPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $srcPath when calling copyFolder');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->destPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destPath when calling copyFolder');
        }

        $resourcePath = '/slides/storage/folder/copy/{srcPath}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->destPath !== null) {
            $queryParams['destPath'] = ObjectSerializer::toQueryValue($request->destPath);
        }
        // query params
        if ($request->srcStorageName !== null) {
            $queryParams['srcStorageName'] = ObjectSerializer::toQueryValue($request->srcStorageName);
        }
        // query params
        if ($request->destStorageName !== null) {
            $queryParams['destStorageName'] = ObjectSerializer::toQueryValue($request->destStorageName);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "srcPath", $request->srcPath);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function createFolder(Requests\CreateFolderRequest $request)
    {
        try {
            $this->createFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->createFolderWithHttpInfo($request);
        } 
    }

    /**
     */
    public function createFolderWithHttpInfo(Requests\CreateFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->createFolderRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function createFolderAsync(Requests\CreateFolderRequest $request)
    {
        return $this->createFolderAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function createFolderAsyncWithHttpInfo(Requests\CreateFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->createFolderRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'createFolder'
     *
     * @param  string $path Folder path to create e.g. &#39;folder_1/folder_2/&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createFolderRequest(Requests\CreateFolderRequest $request)
    {

        $resourcePath = '/slides/storage/folder/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function deleteFile(Requests\DeleteFileRequest $request)
    {
        try {
            $this->deleteFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->deleteFileWithHttpInfo($request);
        } 
    }

    /**
     */
    public function deleteFileWithHttpInfo(Requests\DeleteFileRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->deleteFileRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteFileAsync(Requests\DeleteFileRequest $request)
    {
        return $this->deleteFileAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteFileAsyncWithHttpInfo(Requests\DeleteFileRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->deleteFileRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteFile'
     *
     * @param  string $path File path e.g. &#39;/folder/file.ext&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     * @param  string $version_id File version ID to delete (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteFileRequest(Requests\DeleteFileRequest $request)
    {

        $resourcePath = '/slides/storage/file/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }
        // query params
        if ($request->versionId !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($request->versionId);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteFolder(Requests\DeleteFolderRequest $request)
    {
        try {
            $this->deleteFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->deleteFolderWithHttpInfo($request);
        } 
    }

    /**
     */
    public function deleteFolderWithHttpInfo(Requests\DeleteFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->deleteFolderRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteFolderAsync(Requests\DeleteFolderRequest $request)
    {
        return $this->deleteFolderAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteFolderAsyncWithHttpInfo(Requests\DeleteFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->deleteFolderRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteFolder'
     *
     * @param  string $path Folder path e.g. &#39;/folder&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     * @param  bool $recursive Enable to delete folders, subfolders and files (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteFolderRequest(Requests\DeleteFolderRequest $request)
    {

        $resourcePath = '/slides/storage/folder/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }
        // query params
        if ($request->recursive !== null) {
            $queryParams['recursive'] = ObjectSerializer::toQueryValue($request->recursive);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteNotesSlide(Requests\DeleteNotesSlideRequest $request)
    {
        try {
            list($response) = $this->deleteNotesSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteNotesSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteNotesSlideWithHttpInfo(Requests\DeleteNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slide';
        $httpRequest = $this->deleteNotesSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slide', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteNotesSlideAsync(Requests\DeleteNotesSlideRequest $request)
    {
        return $this->deleteNotesSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteNotesSlideAsyncWithHttpInfo(Requests\DeleteNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slide';
        $httpRequest = $this->deleteNotesSlideRequest($request);

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
     * Create request for operation 'deleteNotesSlide'
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
    protected function deleteNotesSlideRequest(Requests\DeleteNotesSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteNotesSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteNotesSlide');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int[] $paragraphs The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteNotesSlideParagraphs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/paragraphs';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->paragraphs !== null) {
            $queryParams['paragraphs'] = ObjectSerializer::toQueryValue($request->paragraphs);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portions', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portions', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int[] $portions The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        if ($request->portions !== null) {
            $queryParams['portions'] = ObjectSerializer::toQueryValue($request->portions);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Shapes', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Shapes', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int[] $shapes The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->shapes !== null) {
            $queryParams['shapes'] = ObjectSerializer::toQueryValue($request->shapes);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int[] $paragraphs The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling deleteParagraphs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/paragraphs';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->paragraphs !== null) {
            $queryParams['paragraphs'] = ObjectSerializer::toQueryValue($request->paragraphs);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portions', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portions', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int[] $portions The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        if ($request->portions !== null) {
            $queryParams['portions'] = ObjectSerializer::toQueryValue($request->portions);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "paragraphIndex", $request->paragraphIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideAnimation(Requests\DeleteSlideAnimationRequest $request)
    {
        try {
            list($response) = $this->deleteSlideAnimationWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideAnimationWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideAnimationWithHttpInfo(Requests\DeleteSlideAnimationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideAnimationAsync(Requests\DeleteSlideAnimationRequest $request)
    {
        return $this->deleteSlideAnimationAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideAnimationAsyncWithHttpInfo(Requests\DeleteSlideAnimationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationRequest($request);

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
     * Create request for operation 'deleteSlideAnimation'
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
    protected function deleteSlideAnimationRequest(Requests\DeleteSlideAnimationRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideAnimation');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideAnimation');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideAnimationEffect(Requests\DeleteSlideAnimationEffectRequest $request)
    {
        try {
            list($response) = $this->deleteSlideAnimationEffectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideAnimationEffectWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideAnimationEffectWithHttpInfo(Requests\DeleteSlideAnimationEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationEffectRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideAnimationEffectAsync(Requests\DeleteSlideAnimationEffectRequest $request)
    {
        return $this->deleteSlideAnimationEffectAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideAnimationEffectAsyncWithHttpInfo(Requests\DeleteSlideAnimationEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationEffectRequest($request);

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
     * Create request for operation 'deleteSlideAnimationEffect'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $effect_index Index of the effect to be removed. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlideAnimationEffectRequest(Requests\DeleteSlideAnimationEffectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideAnimationEffect');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideAnimationEffect');
        }
        // verify the required parameter 'effect_index' is set
        if ($request->effectIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effectIndex when calling deleteSlideAnimationEffect');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/mainSequence/{effectIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "effectIndex", $request->effectIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideAnimationInteractiveSequence(Requests\DeleteSlideAnimationInteractiveSequenceRequest $request)
    {
        try {
            list($response) = $this->deleteSlideAnimationInteractiveSequenceWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideAnimationInteractiveSequenceWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequenceWithHttpInfo(Requests\DeleteSlideAnimationInteractiveSequenceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationInteractiveSequenceRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequenceAsync(Requests\DeleteSlideAnimationInteractiveSequenceRequest $request)
    {
        return $this->deleteSlideAnimationInteractiveSequenceAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequenceAsyncWithHttpInfo(Requests\DeleteSlideAnimationInteractiveSequenceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationInteractiveSequenceRequest($request);

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
     * Create request for operation 'deleteSlideAnimationInteractiveSequence'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $sequence_index The index of an interactive sequence to be deleted. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlideAnimationInteractiveSequenceRequest(Requests\DeleteSlideAnimationInteractiveSequenceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideAnimationInteractiveSequence');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideAnimationInteractiveSequence');
        }
        // verify the required parameter 'sequence_index' is set
        if ($request->sequenceIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sequenceIndex when calling deleteSlideAnimationInteractiveSequence');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/interactiveSequences/{sequenceIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "sequenceIndex", $request->sequenceIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideAnimationInteractiveSequenceEffect(Requests\DeleteSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        try {
            list($response) = $this->deleteSlideAnimationInteractiveSequenceEffectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideAnimationInteractiveSequenceEffectWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequenceEffectWithHttpInfo(Requests\DeleteSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationInteractiveSequenceEffectRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequenceEffectAsync(Requests\DeleteSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        return $this->deleteSlideAnimationInteractiveSequenceEffectAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequenceEffectAsyncWithHttpInfo(Requests\DeleteSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationInteractiveSequenceEffectRequest($request);

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
     * Create request for operation 'deleteSlideAnimationInteractiveSequenceEffect'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $sequence_index Interactive sequence index. (required)
     * @param  int $effect_index Index of the effect to be removed. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlideAnimationInteractiveSequenceEffectRequest(Requests\DeleteSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'sequence_index' is set
        if ($request->sequenceIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sequenceIndex when calling deleteSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'effect_index' is set
        if ($request->effectIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effectIndex when calling deleteSlideAnimationInteractiveSequenceEffect');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/interactiveSequences/{sequenceIndex}/{effectIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "sequenceIndex", $request->sequenceIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "effectIndex", $request->effectIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideAnimationInteractiveSequences(Requests\DeleteSlideAnimationInteractiveSequencesRequest $request)
    {
        try {
            list($response) = $this->deleteSlideAnimationInteractiveSequencesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideAnimationInteractiveSequencesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequencesWithHttpInfo(Requests\DeleteSlideAnimationInteractiveSequencesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationInteractiveSequencesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequencesAsync(Requests\DeleteSlideAnimationInteractiveSequencesRequest $request)
    {
        return $this->deleteSlideAnimationInteractiveSequencesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideAnimationInteractiveSequencesAsyncWithHttpInfo(Requests\DeleteSlideAnimationInteractiveSequencesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationInteractiveSequencesRequest($request);

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
     * Create request for operation 'deleteSlideAnimationInteractiveSequences'
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
    protected function deleteSlideAnimationInteractiveSequencesRequest(Requests\DeleteSlideAnimationInteractiveSequencesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideAnimationInteractiveSequences');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideAnimationInteractiveSequences');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/interactiveSequences';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlideAnimationMainSequence(Requests\DeleteSlideAnimationMainSequenceRequest $request)
    {
        try {
            list($response) = $this->deleteSlideAnimationMainSequenceWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlideAnimationMainSequenceWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlideAnimationMainSequenceWithHttpInfo(Requests\DeleteSlideAnimationMainSequenceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationMainSequenceRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlideAnimationMainSequenceAsync(Requests\DeleteSlideAnimationMainSequenceRequest $request)
    {
        return $this->deleteSlideAnimationMainSequenceAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlideAnimationMainSequenceAsyncWithHttpInfo(Requests\DeleteSlideAnimationMainSequenceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->deleteSlideAnimationMainSequenceRequest($request);

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
     * Create request for operation 'deleteSlideAnimationMainSequence'
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
    protected function deleteSlideAnimationMainSequenceRequest(Requests\DeleteSlideAnimationMainSequenceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlideAnimationMainSequence');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling deleteSlideAnimationMainSequence');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/mainSequence';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Shapes', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Shapes', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int[] $shapes The indices of the shapes to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->shapes !== null) {
            $queryParams['shapes'] = ObjectSerializer::toQueryValue($request->shapes);
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
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
     * @param  string $name Document name. (required)
     * @param  int[] $slides The indices of the slides to be deleted; delete all by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        if ($request->slides !== null) {
            $queryParams['slides'] = ObjectSerializer::toQueryValue($request->slides);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlidesDocumentProperties(Requests\DeleteSlidesDocumentPropertiesRequest $request)
    {
        try {
            list($response) = $this->deleteSlidesDocumentPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlidesDocumentPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlidesDocumentPropertiesWithHttpInfo(Requests\DeleteSlidesDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->deleteSlidesDocumentPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlidesDocumentPropertiesAsync(Requests\DeleteSlidesDocumentPropertiesRequest $request)
    {
        return $this->deleteSlidesDocumentPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlidesDocumentPropertiesAsyncWithHttpInfo(Requests\DeleteSlidesDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->deleteSlidesDocumentPropertiesRequest($request);

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
     * Create request for operation 'deleteSlidesDocumentProperties'
     *
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlidesDocumentPropertiesRequest(Requests\DeleteSlidesDocumentPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlidesDocumentProperties');
        }

        $resourcePath = '/slides/{name}/documentproperties';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function deleteSlidesDocumentProperty(Requests\DeleteSlidesDocumentPropertyRequest $request)
    {
        try {
            list($response) = $this->deleteSlidesDocumentPropertyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->deleteSlidesDocumentPropertyWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function deleteSlidesDocumentPropertyWithHttpInfo(Requests\DeleteSlidesDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->deleteSlidesDocumentPropertyRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function deleteSlidesDocumentPropertyAsync(Requests\DeleteSlidesDocumentPropertyRequest $request)
    {
        return $this->deleteSlidesDocumentPropertyAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function deleteSlidesDocumentPropertyAsyncWithHttpInfo(Requests\DeleteSlidesDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->deleteSlidesDocumentPropertyRequest($request);

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
     * Create request for operation 'deleteSlidesDocumentProperty'
     *
     * @param  string $name Document name. (required)
     * @param  string $property_name The property name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSlidesDocumentPropertyRequest(Requests\DeleteSlidesDocumentPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteSlidesDocumentProperty');
        }
        // verify the required parameter 'property_name' is set
        if ($request->propertyName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $propertyName when calling deleteSlidesDocumentProperty');
        }

        $resourcePath = '/slides/{name}/documentproperties/{propertyName}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "propertyName", $request->propertyName);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'DELETE');
    }
    /**
     */
    public function downloadFile(Requests\DownloadFileRequest $request)
    {
        try {
            list($response) = $this->downloadFileWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->downloadFileWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function downloadFileWithHttpInfo(Requests\DownloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->downloadFileRequest($request);
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
    public function downloadFileAsync(Requests\DownloadFileRequest $request)
    {
        return $this->downloadFileAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function downloadFileAsyncWithHttpInfo(Requests\DownloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->downloadFileRequest($request);

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
     * Create request for operation 'downloadFile'
     *
     * @param  string $path File path e.g. &#39;/folder/file.ext&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     * @param  string $version_id File version ID to download (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function downloadFileRequest(Requests\DownloadFileRequest $request)
    {

        $resourcePath = '/slides/storage/file/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }
        // query params
        if ($request->versionId !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($request->versionId);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getDiscUsage(Requests\GetDiscUsageRequest $request)
    {
        try {
            list($response) = $this->getDiscUsageWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getDiscUsageWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getDiscUsageWithHttpInfo(Requests\GetDiscUsageRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DiscUsage';
        $httpRequest = $this->getDiscUsageRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DiscUsage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getDiscUsageAsync(Requests\GetDiscUsageRequest $request)
    {
        return $this->getDiscUsageAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getDiscUsageAsyncWithHttpInfo(Requests\GetDiscUsageRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DiscUsage';
        $httpRequest = $this->getDiscUsageRequest($request);

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
     * Create request for operation 'getDiscUsage'
     *
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDiscUsageRequest(Requests\GetDiscUsageRequest $request)
    {

        $resourcePath = '/slides/storage/disc';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }

        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getFileVersions(Requests\GetFileVersionsRequest $request)
    {
        try {
            list($response) = $this->getFileVersionsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getFileVersionsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getFileVersionsWithHttpInfo(Requests\GetFileVersionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FileVersions';
        $httpRequest = $this->getFileVersionsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\FileVersions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getFileVersionsAsync(Requests\GetFileVersionsRequest $request)
    {
        return $this->getFileVersionsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getFileVersionsAsyncWithHttpInfo(Requests\GetFileVersionsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FileVersions';
        $httpRequest = $this->getFileVersionsRequest($request);

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
     * Create request for operation 'getFileVersions'
     *
     * @param  string $path File path e.g. &#39;/file.ext&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFileVersionsRequest(Requests\GetFileVersionsRequest $request)
    {

        $resourcePath = '/slides/storage/version/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getFilesList(Requests\GetFilesListRequest $request)
    {
        try {
            list($response) = $this->getFilesListWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getFilesListWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getFilesListWithHttpInfo(Requests\GetFilesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FilesList';
        $httpRequest = $this->getFilesListRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\FilesList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getFilesListAsync(Requests\GetFilesListRequest $request)
    {
        return $this->getFilesListAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getFilesListAsyncWithHttpInfo(Requests\GetFilesListRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FilesList';
        $httpRequest = $this->getFilesListRequest($request);

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
     * Create request for operation 'getFilesList'
     *
     * @param  string $path Folder path e.g. &#39;/folder&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFilesListRequest(Requests\GetFilesListRequest $request)
    {

        $resourcePath = '/slides/storage/folder/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlides';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlides', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlides';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlide';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\MasterSlide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlide';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlides';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\MasterSlides', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlides';
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
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getNotesSlide(Requests\GetNotesSlideRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideWithHttpInfo(Requests\GetNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide';
        $httpRequest = $this->getNotesSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getNotesSlideAsync(Requests\GetNotesSlideRequest $request)
    {
        return $this->getNotesSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideAsyncWithHttpInfo(Requests\GetNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide';
        $httpRequest = $this->getNotesSlideRequest($request);

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
     * Create request for operation 'getNotesSlide'
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
    protected function getNotesSlideRequest(Requests\GetNotesSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlide');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraph', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portion', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portions', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Shapes', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getNotesSlideWithFormat(Requests\GetNotesSlideWithFormatRequest $request)
    {
        try {
            list($response) = $this->getNotesSlideWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getNotesSlideWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getNotesSlideWithFormatWithHttpInfo(Requests\GetNotesSlideWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getNotesSlideWithFormatRequest($request);
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
    public function getNotesSlideWithFormatAsync(Requests\GetNotesSlideWithFormatRequest $request)
    {
        return $this->getNotesSlideWithFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getNotesSlideWithFormatAsyncWithHttpInfo(Requests\GetNotesSlideWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getNotesSlideWithFormatRequest($request);

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
     * Create request for operation 'getNotesSlideWithFormat'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $format Output file format. (required)
     * @param  int $width Output file width. (optional)
     * @param  int $height Output file height. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $fonts_folder Storage folder containing custom fonts to be used with the document. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getNotesSlideWithFormatRequest(Requests\GetNotesSlideWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getNotesSlideWithFormat');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getNotesSlideWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getNotesSlideWithFormat');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/{format}';
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portion', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portions', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portions';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlideAnimation(Requests\GetSlideAnimationRequest $request)
    {
        try {
            list($response) = $this->getSlideAnimationWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlideAnimationWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlideAnimationWithHttpInfo(Requests\GetSlideAnimationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->getSlideAnimationRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlideAnimationAsync(Requests\GetSlideAnimationRequest $request)
    {
        return $this->getSlideAnimationAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlideAnimationAsyncWithHttpInfo(Requests\GetSlideAnimationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->getSlideAnimationRequest($request);

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
     * Create request for operation 'getSlideAnimation'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $shape_index Shape index. If specified, only effects related to that shape are returned. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlideAnimationRequest(Requests\GetSlideAnimationRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlideAnimation');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlideAnimation');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getSlideAnimation');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->shapeIndex !== null) {
            $queryParams['shapeIndex'] = ObjectSerializer::toQueryValue($request->shapeIndex);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlideShapeParagraph(Requests\GetSlideShapeParagraphRequest $request)
    {
        try {
            list($response) = $this->getSlideShapeParagraphWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlideShapeParagraphWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlideShapeParagraphWithHttpInfo(Requests\GetSlideShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
        $httpRequest = $this->getSlideShapeParagraphRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraph', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlideShapeParagraphAsync(Requests\GetSlideShapeParagraphRequest $request)
    {
        return $this->getSlideShapeParagraphAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlideShapeParagraphAsyncWithHttpInfo(Requests\GetSlideShapeParagraphRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
        $httpRequest = $this->getSlideShapeParagraphRequest($request);

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
     * Create request for operation 'getSlideShapeParagraph'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlideShapeParagraphRequest(Requests\GetSlideShapeParagraphRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlideShapeParagraph');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlideShapeParagraph');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling getSlideShapeParagraph');
        }
        // verify the required parameter 'paragraph_index' is set
        if ($request->paragraphIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paragraphIndex when calling getSlideShapeParagraph');
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraphs';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Shapes', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Shapes';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ApiInfo';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ApiInfo', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ApiInfo';
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


        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $storage Documentstorage. (optional)
     * @param  string $folder Document folder. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesDocumentProperties(Requests\GetSlidesDocumentPropertiesRequest $request)
    {
        try {
            list($response) = $this->getSlidesDocumentPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesDocumentPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesDocumentPropertiesWithHttpInfo(Requests\GetSlidesDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->getSlidesDocumentPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesDocumentPropertiesAsync(Requests\GetSlidesDocumentPropertiesRequest $request)
    {
        return $this->getSlidesDocumentPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesDocumentPropertiesAsyncWithHttpInfo(Requests\GetSlidesDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->getSlidesDocumentPropertiesRequest($request);

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
     * Create request for operation 'getSlidesDocumentProperties'
     *
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesDocumentPropertiesRequest(Requests\GetSlidesDocumentPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesDocumentProperties');
        }

        $resourcePath = '/slides/{name}/documentproperties';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesDocumentProperty(Requests\GetSlidesDocumentPropertyRequest $request)
    {
        try {
            list($response) = $this->getSlidesDocumentPropertyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesDocumentPropertyWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesDocumentPropertyWithHttpInfo(Requests\GetSlidesDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty';
        $httpRequest = $this->getSlidesDocumentPropertyRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesDocumentPropertyAsync(Requests\GetSlidesDocumentPropertyRequest $request)
    {
        return $this->getSlidesDocumentPropertyAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesDocumentPropertyAsyncWithHttpInfo(Requests\GetSlidesDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty';
        $httpRequest = $this->getSlidesDocumentPropertyRequest($request);

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
     * Create request for operation 'getSlidesDocumentProperty'
     *
     * @param  string $name Document name. (required)
     * @param  string $property_name The property name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesDocumentPropertyRequest(Requests\GetSlidesDocumentPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesDocumentProperty');
        }
        // verify the required parameter 'property_name' is set
        if ($request->propertyName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $propertyName when calling getSlidesDocumentProperty');
        }

        $resourcePath = '/slides/{name}/documentproperties/{propertyName}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "propertyName", $request->propertyName);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesImageWithDefaultFormat(Requests\GetSlidesImageWithDefaultFormatRequest $request)
    {
        try {
            list($response) = $this->getSlidesImageWithDefaultFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesImageWithDefaultFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesImageWithDefaultFormatWithHttpInfo(Requests\GetSlidesImageWithDefaultFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlidesImageWithDefaultFormatRequest($request);
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
    public function getSlidesImageWithDefaultFormatAsync(Requests\GetSlidesImageWithDefaultFormatRequest $request)
    {
        return $this->getSlidesImageWithDefaultFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesImageWithDefaultFormatAsyncWithHttpInfo(Requests\GetSlidesImageWithDefaultFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlidesImageWithDefaultFormatRequest($request);

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
     * Create request for operation 'getSlidesImageWithDefaultFormat'
     *
     * @param  string $name Document name. (required)
     * @param  int $index Image index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesImageWithDefaultFormatRequest(Requests\GetSlidesImageWithDefaultFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesImageWithDefaultFormat');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling getSlidesImageWithDefaultFormat');
        }

        $resourcePath = '/slides/{name}/images/{index}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "index", $request->index);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesImageWithFormat(Requests\GetSlidesImageWithFormatRequest $request)
    {
        try {
            list($response) = $this->getSlidesImageWithFormatWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesImageWithFormatWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesImageWithFormatWithHttpInfo(Requests\GetSlidesImageWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlidesImageWithFormatRequest($request);
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
    public function getSlidesImageWithFormatAsync(Requests\GetSlidesImageWithFormatRequest $request)
    {
        return $this->getSlidesImageWithFormatAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesImageWithFormatAsyncWithHttpInfo(Requests\GetSlidesImageWithFormatRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->getSlidesImageWithFormatRequest($request);

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
     * Create request for operation 'getSlidesImageWithFormat'
     *
     * @param  string $name Document name. (required)
     * @param  int $index Image index. (required)
     * @param  string $format Export format (png, jpg, gif). (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesImageWithFormatRequest(Requests\GetSlidesImageWithFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesImageWithFormat');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling getSlidesImageWithFormat');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getSlidesImageWithFormat');
        }

        $resourcePath = '/slides/{name}/images/{index}/{format}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "index", $request->index);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['multipart/form-data'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesImages(Requests\GetSlidesImagesRequest $request)
    {
        try {
            list($response) = $this->getSlidesImagesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesImagesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesImagesWithHttpInfo(Requests\GetSlidesImagesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Images';
        $httpRequest = $this->getSlidesImagesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Images', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesImagesAsync(Requests\GetSlidesImagesRequest $request)
    {
        return $this->getSlidesImagesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesImagesAsyncWithHttpInfo(Requests\GetSlidesImagesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Images';
        $httpRequest = $this->getSlidesImagesRequest($request);

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
     * Create request for operation 'getSlidesImages'
     *
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesImagesRequest(Requests\GetSlidesImagesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesImages');
        }

        $resourcePath = '/slides/{name}/images';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesPlaceholder(Requests\GetSlidesPlaceholderRequest $request)
    {
        try {
            list($response) = $this->getSlidesPlaceholderWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesPlaceholderWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesPlaceholderWithHttpInfo(Requests\GetSlidesPlaceholderRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Placeholder';
        $httpRequest = $this->getSlidesPlaceholderRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Placeholder', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesPlaceholderAsync(Requests\GetSlidesPlaceholderRequest $request)
    {
        return $this->getSlidesPlaceholderAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesPlaceholderAsyncWithHttpInfo(Requests\GetSlidesPlaceholderRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Placeholder';
        $httpRequest = $this->getSlidesPlaceholderRequest($request);

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
     * Create request for operation 'getSlidesPlaceholder'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $placeholder_index Placeholder index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesPlaceholderRequest(Requests\GetSlidesPlaceholderRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesPlaceholder');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesPlaceholder');
        }
        // verify the required parameter 'placeholder_index' is set
        if ($request->placeholderIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $placeholderIndex when calling getSlidesPlaceholder');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/placeholders/{placeholderIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "placeholderIndex", $request->placeholderIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesPlaceholders(Requests\GetSlidesPlaceholdersRequest $request)
    {
        try {
            list($response) = $this->getSlidesPlaceholdersWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesPlaceholdersWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesPlaceholdersWithHttpInfo(Requests\GetSlidesPlaceholdersRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Placeholders';
        $httpRequest = $this->getSlidesPlaceholdersRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Placeholders', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesPlaceholdersAsync(Requests\GetSlidesPlaceholdersRequest $request)
    {
        return $this->getSlidesPlaceholdersAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesPlaceholdersAsyncWithHttpInfo(Requests\GetSlidesPlaceholdersRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Placeholders';
        $httpRequest = $this->getSlidesPlaceholdersRequest($request);

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
     * Create request for operation 'getSlidesPlaceholders'
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
    protected function getSlidesPlaceholdersRequest(Requests\GetSlidesPlaceholdersRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesPlaceholders');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesPlaceholders');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/placeholders';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItems';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\TextItems', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItems';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slide';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slide';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideComments';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideComments', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideComments';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index The position of the slide to be reordered. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesSlideImages(Requests\GetSlidesSlideImagesRequest $request)
    {
        try {
            list($response) = $this->getSlidesSlideImagesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesSlideImagesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesSlideImagesWithHttpInfo(Requests\GetSlidesSlideImagesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Images';
        $httpRequest = $this->getSlidesSlideImagesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Images', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesSlideImagesAsync(Requests\GetSlidesSlideImagesRequest $request)
    {
        return $this->getSlidesSlideImagesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesSlideImagesAsyncWithHttpInfo(Requests\GetSlidesSlideImagesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Images';
        $httpRequest = $this->getSlidesSlideImagesRequest($request);

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
     * Create request for operation 'getSlidesSlideImages'
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
    protected function getSlidesSlideImagesRequest(Requests\GetSlidesSlideImagesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesSlideImages');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesSlideImages');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/images';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItems';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\TextItems', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\TextItems';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
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
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesTheme(Requests\GetSlidesThemeRequest $request)
    {
        try {
            list($response) = $this->getSlidesThemeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesThemeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesThemeWithHttpInfo(Requests\GetSlidesThemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Theme';
        $httpRequest = $this->getSlidesThemeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Theme', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesThemeAsync(Requests\GetSlidesThemeRequest $request)
    {
        return $this->getSlidesThemeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesThemeAsyncWithHttpInfo(Requests\GetSlidesThemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Theme';
        $httpRequest = $this->getSlidesThemeRequest($request);

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
     * Create request for operation 'getSlidesTheme'
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
    protected function getSlidesThemeRequest(Requests\GetSlidesThemeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesTheme');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesTheme');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/theme';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesThemeColorScheme(Requests\GetSlidesThemeColorSchemeRequest $request)
    {
        try {
            list($response) = $this->getSlidesThemeColorSchemeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesThemeColorSchemeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesThemeColorSchemeWithHttpInfo(Requests\GetSlidesThemeColorSchemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ColorScheme';
        $httpRequest = $this->getSlidesThemeColorSchemeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ColorScheme', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesThemeColorSchemeAsync(Requests\GetSlidesThemeColorSchemeRequest $request)
    {
        return $this->getSlidesThemeColorSchemeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesThemeColorSchemeAsyncWithHttpInfo(Requests\GetSlidesThemeColorSchemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ColorScheme';
        $httpRequest = $this->getSlidesThemeColorSchemeRequest($request);

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
     * Create request for operation 'getSlidesThemeColorScheme'
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
    protected function getSlidesThemeColorSchemeRequest(Requests\GetSlidesThemeColorSchemeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesThemeColorScheme');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesThemeColorScheme');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/theme/colorScheme';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesThemeFontScheme(Requests\GetSlidesThemeFontSchemeRequest $request)
    {
        try {
            list($response) = $this->getSlidesThemeFontSchemeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesThemeFontSchemeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesThemeFontSchemeWithHttpInfo(Requests\GetSlidesThemeFontSchemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FontScheme';
        $httpRequest = $this->getSlidesThemeFontSchemeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\FontScheme', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesThemeFontSchemeAsync(Requests\GetSlidesThemeFontSchemeRequest $request)
    {
        return $this->getSlidesThemeFontSchemeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesThemeFontSchemeAsyncWithHttpInfo(Requests\GetSlidesThemeFontSchemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FontScheme';
        $httpRequest = $this->getSlidesThemeFontSchemeRequest($request);

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
     * Create request for operation 'getSlidesThemeFontScheme'
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
    protected function getSlidesThemeFontSchemeRequest(Requests\GetSlidesThemeFontSchemeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesThemeFontScheme');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesThemeFontScheme');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/theme/fontScheme';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesThemeFormatScheme(Requests\GetSlidesThemeFormatSchemeRequest $request)
    {
        try {
            list($response) = $this->getSlidesThemeFormatSchemeWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesThemeFormatSchemeWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesThemeFormatSchemeWithHttpInfo(Requests\GetSlidesThemeFormatSchemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FormatScheme';
        $httpRequest = $this->getSlidesThemeFormatSchemeRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\FormatScheme', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesThemeFormatSchemeAsync(Requests\GetSlidesThemeFormatSchemeRequest $request)
    {
        return $this->getSlidesThemeFormatSchemeAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesThemeFormatSchemeAsyncWithHttpInfo(Requests\GetSlidesThemeFormatSchemeRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FormatScheme';
        $httpRequest = $this->getSlidesThemeFormatSchemeRequest($request);

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
     * Create request for operation 'getSlidesThemeFormatScheme'
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
    protected function getSlidesThemeFormatSchemeRequest(Requests\GetSlidesThemeFormatSchemeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesThemeFormatScheme');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling getSlidesThemeFormatScheme');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/theme/formatScheme';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function getSlidesViewProperties(Requests\GetSlidesViewPropertiesRequest $request)
    {
        try {
            list($response) = $this->getSlidesViewPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->getSlidesViewPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function getSlidesViewPropertiesWithHttpInfo(Requests\GetSlidesViewPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ViewProperties';
        $httpRequest = $this->getSlidesViewPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ViewProperties', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function getSlidesViewPropertiesAsync(Requests\GetSlidesViewPropertiesRequest $request)
    {
        return $this->getSlidesViewPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function getSlidesViewPropertiesAsyncWithHttpInfo(Requests\GetSlidesViewPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ViewProperties';
        $httpRequest = $this->getSlidesViewPropertiesRequest($request);

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
     * Create request for operation 'getSlidesViewProperties'
     *
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSlidesViewPropertiesRequest(Requests\GetSlidesViewPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getSlidesViewProperties');
        }

        $resourcePath = '/slides/{name}/viewProperties';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function moveFile(Requests\MoveFileRequest $request)
    {
        try {
            $this->moveFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->moveFileWithHttpInfo($request);
        } 
    }

    /**
     */
    public function moveFileWithHttpInfo(Requests\MoveFileRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->moveFileRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function moveFileAsync(Requests\MoveFileRequest $request)
    {
        return $this->moveFileAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function moveFileAsyncWithHttpInfo(Requests\MoveFileRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->moveFileRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'moveFile'
     *
     * @param  string $src_path Source file path e.g. &#39;/src.ext&#39; (required)
     * @param  string $dest_path Destination file path e.g. &#39;/dest.ext&#39; (required)
     * @param  string $src_storage_name Source storage name (optional)
     * @param  string $dest_storage_name Destination storage name (optional)
     * @param  string $version_id File version ID to move (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function moveFileRequest(Requests\MoveFileRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->srcPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $srcPath when calling moveFile');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->destPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destPath when calling moveFile');
        }

        $resourcePath = '/slides/storage/file/move/{srcPath}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->destPath !== null) {
            $queryParams['destPath'] = ObjectSerializer::toQueryValue($request->destPath);
        }
        // query params
        if ($request->srcStorageName !== null) {
            $queryParams['srcStorageName'] = ObjectSerializer::toQueryValue($request->srcStorageName);
        }
        // query params
        if ($request->destStorageName !== null) {
            $queryParams['destStorageName'] = ObjectSerializer::toQueryValue($request->destStorageName);
        }
        // query params
        if ($request->versionId !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($request->versionId);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "srcPath", $request->srcPath);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function moveFolder(Requests\MoveFolderRequest $request)
    {
        try {
            $this->moveFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->moveFolderWithHttpInfo($request);
        } 
    }

    /**
     */
    public function moveFolderWithHttpInfo(Requests\MoveFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->moveFolderRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function moveFolderAsync(Requests\MoveFolderRequest $request)
    {
        return $this->moveFolderAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function moveFolderAsyncWithHttpInfo(Requests\MoveFolderRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->moveFolderRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'moveFolder'
     *
     * @param  string $src_path Folder path to move e.g. &#39;/folder&#39; (required)
     * @param  string $dest_path Destination folder path to move to e.g &#39;/dst&#39; (required)
     * @param  string $src_storage_name Source storage name (optional)
     * @param  string $dest_storage_name Destination storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function moveFolderRequest(Requests\MoveFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->srcPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $srcPath when calling moveFolder');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->destPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destPath when calling moveFolder');
        }

        $resourcePath = '/slides/storage/folder/move/{srcPath}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->destPath !== null) {
            $queryParams['destPath'] = ObjectSerializer::toQueryValue($request->destPath);
        }
        // query params
        if ($request->srcStorageName !== null) {
            $queryParams['srcStorageName'] = ObjectSerializer::toQueryValue($request->srcStorageName);
        }
        // query params
        if ($request->destStorageName !== null) {
            $queryParams['destStorageName'] = ObjectSerializer::toQueryValue($request->destStorageName);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "srcPath", $request->srcPath);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function objectExists(Requests\ObjectExistsRequest $request)
    {
        try {
            list($response) = $this->objectExistsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->objectExistsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function objectExistsWithHttpInfo(Requests\ObjectExistsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ObjectExist';
        $httpRequest = $this->objectExistsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ObjectExist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function objectExistsAsync(Requests\ObjectExistsRequest $request)
    {
        return $this->objectExistsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function objectExistsAsyncWithHttpInfo(Requests\ObjectExistsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ObjectExist';
        $httpRequest = $this->objectExistsRequest($request);

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
     * Create request for operation 'objectExists'
     *
     * @param  string $path File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; (optional)
     * @param  string $storage_name Storage name (optional)
     * @param  string $version_id File version ID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function objectExistsRequest(Requests\ObjectExistsRequest $request)
    {

        $resourcePath = '/slides/storage/exist/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }
        // query params
        if ($request->versionId !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($request->versionId);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraph', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Paragraph $dto Paragraph DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portion', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Portion DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  int $shape_to_clone Optional index for clone shape instead of adding a new one. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postAddNotesSlide(Requests\PostAddNotesSlideRequest $request)
    {
        try {
            list($response) = $this->postAddNotesSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postAddNotesSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postAddNotesSlideWithHttpInfo(Requests\PostAddNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide';
        $httpRequest = $this->postAddNotesSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postAddNotesSlideAsync(Requests\PostAddNotesSlideRequest $request)
    {
        return $this->postAddNotesSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postAddNotesSlideAsyncWithHttpInfo(Requests\PostAddNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide';
        $httpRequest = $this->postAddNotesSlideRequest($request);

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
     * Create request for operation 'postAddNotesSlide'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\NotesSlide $dto A NotesSlide object with notes slide data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAddNotesSlideRequest(Requests\PostAddNotesSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postAddNotesSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postAddNotesSlide');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide';
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
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlide';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\MasterSlide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\MasterSlide';
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
     * @param  string $name Document name. (required)
     * @param  string $clone_from Name of the document to clone masterSlide from. (required)
     * @param  int $clone_from_position Position of cloned master slide. (required)
     * @param  string $clone_from_password Password for the document to clone masterSlide from. (optional)
     * @param  string $clone_from_storage Storage of the document to clone masterSlide from. (optional)
     * @param  bool $apply_to_all True to apply cloned master slide to every existing slide. (optional, default to false)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraph', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Paragraph $dto Paragraph DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portion', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Portion DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  int $position Position of the new portion in the list. Default is at the end of the list. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  int $shape_to_clone Optional index for clone shape instead of adding a new one. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  string $format Export picture format. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions $options export options (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  double $scale_x X scale ratio. (optional, default to 0.0)
     * @param  double $scale_y Y scale ratio. (optional, default to 0.0)
     * @param  string $bounds Shape thumbnail bounds type. (optional, default to 1)
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

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/{format}';
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
     * @param  \Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest $request PresentationsMergeRequest with a list of presentations to merge. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  string $format Export picture format. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions $options export options (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  double $scale_x X scale ratio. (optional, default to 0.0)
     * @param  double $scale_y Y scale ratio. (optional, default to 0.0)
     * @param  string $bounds Shape thumbnail bounds type. (optional, default to 1)
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

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/{format}';
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlideAnimationEffect(Requests\PostSlideAnimationEffectRequest $request)
    {
        try {
            list($response) = $this->postSlideAnimationEffectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlideAnimationEffectWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlideAnimationEffectWithHttpInfo(Requests\PostSlideAnimationEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->postSlideAnimationEffectRequest($request);
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlideAnimationEffectAsync(Requests\PostSlideAnimationEffectRequest $request)
    {
        return $this->postSlideAnimationEffectAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlideAnimationEffectAsyncWithHttpInfo(Requests\PostSlideAnimationEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->postSlideAnimationEffectRequest($request);

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
     * Create request for operation 'postSlideAnimationEffect'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Effect $effect Animation effect DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlideAnimationEffectRequest(Requests\PostSlideAnimationEffectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlideAnimationEffect');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postSlideAnimationEffect');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/mainSequence';
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
        if (isset($request->effect)) {
            $_tempBody = $request->effect;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlideAnimationInteractiveSequence(Requests\PostSlideAnimationInteractiveSequenceRequest $request)
    {
        try {
            list($response) = $this->postSlideAnimationInteractiveSequenceWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlideAnimationInteractiveSequenceWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlideAnimationInteractiveSequenceWithHttpInfo(Requests\PostSlideAnimationInteractiveSequenceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->postSlideAnimationInteractiveSequenceRequest($request);
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlideAnimationInteractiveSequenceAsync(Requests\PostSlideAnimationInteractiveSequenceRequest $request)
    {
        return $this->postSlideAnimationInteractiveSequenceAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlideAnimationInteractiveSequenceAsyncWithHttpInfo(Requests\PostSlideAnimationInteractiveSequenceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->postSlideAnimationInteractiveSequenceRequest($request);

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
     * Create request for operation 'postSlideAnimationInteractiveSequence'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\InteractiveSequence $sequence Animation sequence DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlideAnimationInteractiveSequenceRequest(Requests\PostSlideAnimationInteractiveSequenceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlideAnimationInteractiveSequence');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postSlideAnimationInteractiveSequence');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/interactiveSequences';
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
        if (isset($request->sequence)) {
            $_tempBody = $request->sequence;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlideAnimationInteractiveSequenceEffect(Requests\PostSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        try {
            list($response) = $this->postSlideAnimationInteractiveSequenceEffectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlideAnimationInteractiveSequenceEffectWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlideAnimationInteractiveSequenceEffectWithHttpInfo(Requests\PostSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->postSlideAnimationInteractiveSequenceEffectRequest($request);
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlideAnimationInteractiveSequenceEffectAsync(Requests\PostSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        return $this->postSlideAnimationInteractiveSequenceEffectAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlideAnimationInteractiveSequenceEffectAsyncWithHttpInfo(Requests\PostSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->postSlideAnimationInteractiveSequenceEffectRequest($request);

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
     * Create request for operation 'postSlideAnimationInteractiveSequenceEffect'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $sequence_index The position of the interactive sequence. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Effect $effect Animation effect DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlideAnimationInteractiveSequenceEffectRequest(Requests\PostSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'sequence_index' is set
        if ($request->sequenceIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sequenceIndex when calling postSlideAnimationInteractiveSequenceEffect');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/interactiveSequences/{sequenceIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "sequenceIndex", $request->sequenceIndex);
        $_tempBody = null;
        if (isset($request->effect)) {
            $_tempBody = $request->effect;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $format Output file format. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Export options. (optional)
     * @param  int $width Output file width; 0 to not adjust the size. Default is 0. (optional, default to 0)
     * @param  int $height Output file height; 0 to not adjust the size. Default is 0. (optional, default to 0)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $fonts_folder Storage folder containing custom fonts to be used with the document. (optional)
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

        $resourcePath = '/slides/{name}/slides/{slideIndex}/{format}';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesAdd(Requests\PostSlidesAddRequest $request)
    {
        try {
            list($response) = $this->postSlidesAddWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesAddWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesAddWithHttpInfo(Requests\PostSlidesAddRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesAddRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesAddAsync(Requests\PostSlidesAddRequest $request)
    {
        return $this->postSlidesAddAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesAddAsyncWithHttpInfo(Requests\PostSlidesAddRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesAddRequest($request);

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
     * Create request for operation 'postSlidesAdd'
     *
     * @param  string $name Document name. (required)
     * @param  int $position The target position at which to create the slide. Add to the end by default. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $layout_alias Alias of layout slide for new slide. Alias may be the type of layout, name of layout slide or index (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesAddRequest(Requests\PostSlidesAddRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesAdd');
        }

        $resourcePath = '/slides/{name}/slides';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->position !== null) {
            $queryParams['position'] = ObjectSerializer::toQueryValue($request->position);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesConvert(Requests\PostSlidesConvertRequest $request)
    {
        try {
            list($response) = $this->postSlidesConvertWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesConvertWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesConvertWithHttpInfo(Requests\PostSlidesConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlidesConvertRequest($request);
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
    public function postSlidesConvertAsync(Requests\PostSlidesConvertRequest $request)
    {
        return $this->postSlidesConvertAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesConvertAsyncWithHttpInfo(Requests\PostSlidesConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $httpRequest = $this->postSlidesConvertRequest($request);

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
     * Create request for operation 'postSlidesConvert'
     *
     * @param  string $format Export format. (required)
     * @param  \SplFileObject $document Document data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $fonts_folder Custom fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesConvertRequest(Requests\PostSlidesConvertRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling postSlidesConvert');
        }

        $resourcePath = '/slides/convert/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->document)) {
            $_tempBody = $request->document;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['multipart/form-data'],
            ['application/octet-stream', 'multipart/form-data']);

        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesCopy(Requests\PostSlidesCopyRequest $request)
    {
        try {
            list($response) = $this->postSlidesCopyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesCopyWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesCopyWithHttpInfo(Requests\PostSlidesCopyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesCopyRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesCopyAsync(Requests\PostSlidesCopyRequest $request)
    {
        return $this->postSlidesCopyAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesCopyAsyncWithHttpInfo(Requests\PostSlidesCopyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesCopyRequest($request);

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
     * Create request for operation 'postSlidesCopy'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_to_copy The index of the slide to be copied from the source presentation. (required)
     * @param  int $position The target position at which to copy the slide. Copy to the end by default. (optional)
     * @param  string $source Name of the document to copy a slide from. (optional)
     * @param  string $source_password Password for the document to copy a slide from. (optional)
     * @param  string $source_storage Template storage name. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesCopyRequest(Requests\PostSlidesCopyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesCopy');
        }
        // verify the required parameter 'slide_to_copy' is set
        if ($request->slideToCopy === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideToCopy when calling postSlidesCopy');
        }

        $resourcePath = '/slides/{name}/slides/copy';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->slideToCopy !== null) {
            $queryParams['slideToCopy'] = ObjectSerializer::toQueryValue($request->slideToCopy);
        }
        // query params
        if ($request->position !== null) {
            $queryParams['position'] = ObjectSerializer::toQueryValue($request->position);
        }
        // query params
        if ($request->source !== null) {
            $queryParams['source'] = ObjectSerializer::toQueryValue($request->source);
        }
        // query params
        if ($request->sourcePassword !== null) {
            $queryParams['sourcePassword'] = ObjectSerializer::toQueryValue($request->sourcePassword);
        }
        // query params
        if ($request->sourceStorage !== null) {
            $queryParams['sourceStorage'] = ObjectSerializer::toQueryValue($request->sourceStorage);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
     * @param  string $name Document name. (required)
     * @param  \SplFileObject $data Document input data. (optional)
     * @param  string $input_password The password for input document. (optional)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
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

        $resourcePath = '/slides/{name}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->inputPassword !== null) {
            $queryParams['inputPassword'] = ObjectSerializer::toQueryValue($request->inputPassword);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/octet-stream', 'multipart/form-data']);

        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesDocumentFromHtml(Requests\PostSlidesDocumentFromHtmlRequest $request)
    {
        try {
            list($response) = $this->postSlidesDocumentFromHtmlWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesDocumentFromHtmlWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesDocumentFromHtmlWithHttpInfo(Requests\PostSlidesDocumentFromHtmlRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
        $httpRequest = $this->postSlidesDocumentFromHtmlRequest($request);
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesDocumentFromHtmlAsync(Requests\PostSlidesDocumentFromHtmlRequest $request)
    {
        return $this->postSlidesDocumentFromHtmlAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesDocumentFromHtmlAsyncWithHttpInfo(Requests\PostSlidesDocumentFromHtmlRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
        $httpRequest = $this->postSlidesDocumentFromHtmlRequest($request);

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
     * Create request for operation 'postSlidesDocumentFromHtml'
     *
     * @param  string $name Document name. (required)
     * @param  string $html HTML data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesDocumentFromHtmlRequest(Requests\PostSlidesDocumentFromHtmlRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesDocumentFromHtml');
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesDocumentFromSource(Requests\PostSlidesDocumentFromSourceRequest $request)
    {
        try {
            list($response) = $this->postSlidesDocumentFromSourceWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesDocumentFromSourceWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesDocumentFromSourceWithHttpInfo(Requests\PostSlidesDocumentFromSourceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
        $httpRequest = $this->postSlidesDocumentFromSourceRequest($request);
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesDocumentFromSourceAsync(Requests\PostSlidesDocumentFromSourceRequest $request)
    {
        return $this->postSlidesDocumentFromSourceAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesDocumentFromSourceAsyncWithHttpInfo(Requests\PostSlidesDocumentFromSourceRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
        $httpRequest = $this->postSlidesDocumentFromSourceRequest($request);

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
     * Create request for operation 'postSlidesDocumentFromSource'
     *
     * @param  string $name Document name. (required)
     * @param  string $source_path Template file path. (optional)
     * @param  string $source_password Template file password. (optional)
     * @param  string $source_storage Template storage name. (optional)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesDocumentFromSourceRequest(Requests\PostSlidesDocumentFromSourceRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesDocumentFromSource');
        }

        $resourcePath = '/slides/{name}/fromSource';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->sourcePath !== null) {
            $queryParams['sourcePath'] = ObjectSerializer::toQueryValue($request->sourcePath);
        }
        // query params
        if ($request->sourcePassword !== null) {
            $queryParams['sourcePassword'] = ObjectSerializer::toQueryValue($request->sourcePassword);
        }
        // query params
        if ($request->sourceStorage !== null) {
            $queryParams['sourceStorage'] = ObjectSerializer::toQueryValue($request->sourceStorage);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesDocumentFromTemplate(Requests\PostSlidesDocumentFromTemplateRequest $request)
    {
        try {
            list($response) = $this->postSlidesDocumentFromTemplateWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesDocumentFromTemplateWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesDocumentFromTemplateWithHttpInfo(Requests\PostSlidesDocumentFromTemplateRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
        $httpRequest = $this->postSlidesDocumentFromTemplateRequest($request);
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
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesDocumentFromTemplateAsync(Requests\PostSlidesDocumentFromTemplateRequest $request)
    {
        return $this->postSlidesDocumentFromTemplateAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesDocumentFromTemplateAsyncWithHttpInfo(Requests\PostSlidesDocumentFromTemplateRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
        $httpRequest = $this->postSlidesDocumentFromTemplateRequest($request);

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
     * Create request for operation 'postSlidesDocumentFromTemplate'
     *
     * @param  string $name Document name. (required)
     * @param  string $template_path Template file path. (required)
     * @param  string $data Document input data. (optional)
     * @param  string $template_password Template file password. (optional)
     * @param  string $template_storage Template storage name. (optional)
     * @param  bool $is_image_data_embedded True if image data is embedded. (optional, default to false)
     * @param  string $password The document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesDocumentFromTemplateRequest(Requests\PostSlidesDocumentFromTemplateRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesDocumentFromTemplate');
        }
        // verify the required parameter 'template_path' is set
        if ($request->templatePath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $templatePath when calling postSlidesDocumentFromTemplate');
        }

        $resourcePath = '/slides/{name}/fromTemplate';
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
        if ($request->isImageDataEmbedded !== null) {
            $queryParams['isImageDataEmbedded'] = ObjectSerializer::toQueryValue($request->isImageDataEmbedded);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Pipeline $pipeline A Pipeline object. (optional)
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
        $this->headerSelector->selectHeadersForMultipart($headerParams, ['multipart/form-data']);

        $httpBody = ObjectSerializer::toMultipart($_tempBody, $request->get_files());
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentReplaceResult';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentReplaceResult', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentReplaceResult';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesReorder(Requests\PostSlidesReorderRequest $request)
    {
        try {
            list($response) = $this->postSlidesReorderWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesReorderWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesReorderWithHttpInfo(Requests\PostSlidesReorderRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesReorderRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesReorderAsync(Requests\PostSlidesReorderRequest $request)
    {
        return $this->postSlidesReorderAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesReorderAsyncWithHttpInfo(Requests\PostSlidesReorderRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesReorderRequest($request);

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
     * Create request for operation 'postSlidesReorder'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index The position of the slide to be reordered. (required)
     * @param  int $new_position The new position of the reordered slide. (required)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesReorderRequest(Requests\PostSlidesReorderRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesReorder');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling postSlidesReorder');
        }
        // verify the required parameter 'new_position' is set
        if ($request->newPosition === null) {
            throw new \InvalidArgumentException('Missing the required parameter $newPosition when calling postSlidesReorder');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/move';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->newPosition !== null) {
            $queryParams['newPosition'] = ObjectSerializer::toQueryValue($request->newPosition);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesReorderMany(Requests\PostSlidesReorderManyRequest $request)
    {
        try {
            list($response) = $this->postSlidesReorderManyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesReorderManyWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesReorderManyWithHttpInfo(Requests\PostSlidesReorderManyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesReorderManyRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slides', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesReorderManyAsync(Requests\PostSlidesReorderManyRequest $request)
    {
        return $this->postSlidesReorderManyAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesReorderManyAsyncWithHttpInfo(Requests\PostSlidesReorderManyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slides';
        $httpRequest = $this->postSlidesReorderManyRequest($request);

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
     * Create request for operation 'postSlidesReorderMany'
     *
     * @param  string $name Document name. (required)
     * @param  int[] $old_positions A comma separated array of positions of slides to be reordered. (optional)
     * @param  int[] $new_positions A comma separated array of new slide positions. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesReorderManyRequest(Requests\PostSlidesReorderManyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesReorderMany');
        }

        $resourcePath = '/slides/{name}/slides/reorder';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->oldPositions !== null) {
            $queryParams['oldPositions'] = ObjectSerializer::toQueryValue($request->oldPositions);
        }
        // query params
        if ($request->newPositions !== null) {
            $queryParams['newPositions'] = ObjectSerializer::toQueryValue($request->newPositions);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
     * @param  string $name Document name. (required)
     * @param  string $format Export format. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Export options. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $fonts_folder Custom fonts folder. (optional)
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

        $resourcePath = '/slides/{name}/{format}';
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
    }
    /**
     */
    public function postSlidesSetDocumentProperties(Requests\PostSlidesSetDocumentPropertiesRequest $request)
    {
        try {
            list($response) = $this->postSlidesSetDocumentPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->postSlidesSetDocumentPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function postSlidesSetDocumentPropertiesWithHttpInfo(Requests\PostSlidesSetDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->postSlidesSetDocumentPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function postSlidesSetDocumentPropertiesAsync(Requests\PostSlidesSetDocumentPropertiesRequest $request)
    {
        return $this->postSlidesSetDocumentPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function postSlidesSetDocumentPropertiesAsyncWithHttpInfo(Requests\PostSlidesSetDocumentPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties';
        $httpRequest = $this->postSlidesSetDocumentPropertiesRequest($request);

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
     * Create request for operation 'postSlidesSetDocumentProperties'
     *
     * @param  string $name Document name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\DocumentProperties $properties New properties. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSlidesSetDocumentPropertiesRequest(Requests\PostSlidesSetDocumentPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling postSlidesSetDocumentProperties');
        }

        $resourcePath = '/slides/{name}/documentproperties';
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
        $_tempBody = null;
        if (isset($request->properties)) {
            $_tempBody = $request->properties;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideReplaceResult';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideReplaceResult', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideReplaceResult';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SplitDocumentResult';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SplitDocumentResult', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SplitDocumentResult';
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
     * @param  string $name Document name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Export options. (optional)
     * @param  string $format Export format. Default value is jpeg. (optional, default to 0)
     * @param  int $width The width of created images. (optional)
     * @param  int $height The height of created images. (optional)
     * @param  int $to The last slide number for splitting, if is not specified splitting ends at the last slide of the document. (optional)
     * @param  int $from The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation. (optional)
     * @param  string $dest_folder Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $fonts_folder Custom fonts folder. (optional)
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
        // query params
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'POST');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putNotesSlideShapeSaveAs(Requests\PutNotesSlideShapeSaveAsRequest $request)
    {
        try {
            $this->putNotesSlideShapeSaveAsWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->putNotesSlideShapeSaveAsWithHttpInfo($request);
        } 
    }

    /**
     */
    public function putNotesSlideShapeSaveAsWithHttpInfo(Requests\PutNotesSlideShapeSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putNotesSlideShapeSaveAsRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putNotesSlideShapeSaveAsAsync(Requests\PutNotesSlideShapeSaveAsRequest $request)
    {
        return $this->putNotesSlideShapeSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putNotesSlideShapeSaveAsAsyncWithHttpInfo(Requests\PutNotesSlideShapeSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putNotesSlideShapeSaveAsRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'putNotesSlideShapeSaveAs'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  string $format Export picture format. (required)
     * @param  string $out_path Output path. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions $options export options (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  double $scale_x X scale ratio. (optional, default to 0.0)
     * @param  double $scale_y Y scale ratio. (optional, default to 0.0)
     * @param  string $bounds Shape thumbnail bounds type. (optional, default to 1)
     * @param  string $fonts_folder Fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putNotesSlideShapeSaveAsRequest(Requests\PutNotesSlideShapeSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling putNotesSlideShapeSaveAs');
        }
        // verify the required parameter 'out_path' is set
        if ($request->outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling putNotesSlideShapeSaveAs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide/shapes/{path}/{shapeIndex}/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
     * @param  \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request OrderedMergeRequest with a list of presentations and slide indices to merge. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portion', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Portion DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraph', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Paragraph $dto Paragraph DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putShapeSaveAs(Requests\PutShapeSaveAsRequest $request)
    {
        try {
            $this->putShapeSaveAsWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->putShapeSaveAsWithHttpInfo($request);
        } 
    }

    /**
     */
    public function putShapeSaveAsWithHttpInfo(Requests\PutShapeSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putShapeSaveAsRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putShapeSaveAsAsync(Requests\PutShapeSaveAsRequest $request)
    {
        return $this->putShapeSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putShapeSaveAsAsyncWithHttpInfo(Requests\PutShapeSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putShapeSaveAsRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'putShapeSaveAs'
     *
     * @param  string $name Presentation name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Index of shape starting from 1 (required)
     * @param  string $format Export picture format. (required)
     * @param  string $out_path Output path. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions $options export options (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Presentation folder. (optional)
     * @param  string $storage Presentation storage. (optional)
     * @param  double $scale_x X scale ratio. (optional, default to 0.0)
     * @param  double $scale_y Y scale ratio. (optional, default to 0.0)
     * @param  string $bounds Shape thumbnail bounds type. (optional, default to 1)
     * @param  string $fonts_folder Fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putShapeSaveAsRequest(Requests\PutShapeSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putShapeSaveAs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putShapeSaveAs');
        }
        // verify the required parameter 'shape_index' is set
        if ($request->shapeIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shapeIndex when calling putShapeSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling putShapeSaveAs');
        }
        // verify the required parameter 'out_path' is set
        if ($request->outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling putShapeSaveAs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/shapes/{path}/{shapeIndex}/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "shapeIndex", $request->shapeIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlideAnimation(Requests\PutSlideAnimationRequest $request)
    {
        try {
            list($response) = $this->putSlideAnimationWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlideAnimationWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlideAnimationWithHttpInfo(Requests\PutSlideAnimationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->putSlideAnimationRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlideAnimationAsync(Requests\PutSlideAnimationRequest $request)
    {
        return $this->putSlideAnimationAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlideAnimationAsyncWithHttpInfo(Requests\PutSlideAnimationRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->putSlideAnimationRequest($request);

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
     * Create request for operation 'putSlideAnimation'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\SlideAnimation $animation Animation DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlideAnimationRequest(Requests\PutSlideAnimationRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlideAnimation');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlideAnimation');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation';
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
        if (isset($request->animation)) {
            $_tempBody = $request->animation;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlideAnimationEffect(Requests\PutSlideAnimationEffectRequest $request)
    {
        try {
            list($response) = $this->putSlideAnimationEffectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlideAnimationEffectWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlideAnimationEffectWithHttpInfo(Requests\PutSlideAnimationEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->putSlideAnimationEffectRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlideAnimationEffectAsync(Requests\PutSlideAnimationEffectRequest $request)
    {
        return $this->putSlideAnimationEffectAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlideAnimationEffectAsyncWithHttpInfo(Requests\PutSlideAnimationEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->putSlideAnimationEffectRequest($request);

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
     * Create request for operation 'putSlideAnimationEffect'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $effect_index The position of the effect to be modified. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Effect $effect Animation effect DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlideAnimationEffectRequest(Requests\PutSlideAnimationEffectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlideAnimationEffect');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlideAnimationEffect');
        }
        // verify the required parameter 'effect_index' is set
        if ($request->effectIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effectIndex when calling putSlideAnimationEffect');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/mainSequence/{effectIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "effectIndex", $request->effectIndex);
        $_tempBody = null;
        if (isset($request->effect)) {
            $_tempBody = $request->effect;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlideAnimationInteractiveSequenceEffect(Requests\PutSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        try {
            list($response) = $this->putSlideAnimationInteractiveSequenceEffectWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlideAnimationInteractiveSequenceEffectWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlideAnimationInteractiveSequenceEffectWithHttpInfo(Requests\PutSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->putSlideAnimationInteractiveSequenceEffectRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlideAnimationInteractiveSequenceEffectAsync(Requests\PutSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        return $this->putSlideAnimationInteractiveSequenceEffectAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlideAnimationInteractiveSequenceEffectAsyncWithHttpInfo(Requests\PutSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideAnimation';
        $httpRequest = $this->putSlideAnimationInteractiveSequenceEffectRequest($request);

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
     * Create request for operation 'putSlideAnimationInteractiveSequenceEffect'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  int $sequence_index The position of the interactive sequence. (required)
     * @param  int $effect_index The position of the effect to be modified. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Effect $effect Animation effect DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlideAnimationInteractiveSequenceEffectRequest(Requests\PutSlideAnimationInteractiveSequenceEffectRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'sequence_index' is set
        if ($request->sequenceIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sequenceIndex when calling putSlideAnimationInteractiveSequenceEffect');
        }
        // verify the required parameter 'effect_index' is set
        if ($request->effectIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effectIndex when calling putSlideAnimationInteractiveSequenceEffect');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/animation/interactiveSequences/{sequenceIndex}/{effectIndex}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "sequenceIndex", $request->sequenceIndex);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "effectIndex", $request->effectIndex);
        $_tempBody = null;
        if (isset($request->effect)) {
            $_tempBody = $request->effect;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlideSaveAs(Requests\PutSlideSaveAsRequest $request)
    {
        try {
            $this->putSlideSaveAsWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->putSlideSaveAsWithHttpInfo($request);
        } 
    }

    /**
     */
    public function putSlideSaveAsWithHttpInfo(Requests\PutSlideSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putSlideSaveAsRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlideSaveAsAsync(Requests\PutSlideSaveAsRequest $request)
    {
        return $this->putSlideSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlideSaveAsAsyncWithHttpInfo(Requests\PutSlideSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putSlideSaveAsRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'putSlideSaveAs'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $format Output file format. (required)
     * @param  string $out_path Path to upload the output file to. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Export options. (optional)
     * @param  int $width Output file width; 0 to not adjust the size. Default is 0. (optional, default to 0)
     * @param  int $height Output file height; 0 to not adjust the size. Default is 0. (optional, default to 0)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $fonts_folder Storage folder containing custom fonts to be used with the document. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlideSaveAsRequest(Requests\PutSlideSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlideSaveAs');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlideSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling putSlideSaveAs');
        }
        // verify the required parameter 'out_path' is set
        if ($request->outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling putSlideSaveAs');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlidesConvert(Requests\PutSlidesConvertRequest $request)
    {
        try {
            $this->putSlidesConvertWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->putSlidesConvertWithHttpInfo($request);
        } 
    }

    /**
     */
    public function putSlidesConvertWithHttpInfo(Requests\PutSlidesConvertRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putSlidesConvertRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
        $returnType = '';
        $httpRequest = $this->putSlidesConvertRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * @param  string $format Export format. (required)
     * @param  string $out_path Path to save result. (required)
     * @param  \SplFileObject $document Document data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $fonts_folder Custom fonts folder. (optional)
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
        // verify the required parameter 'out_path' is set
        if ($request->outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling putSlidesConvert');
        }

        $resourcePath = '/slides/convert/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
        }
        // query params
        if ($request->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($request->password);
        }
        // query params
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->document)) {
            $_tempBody = $request->document;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/octet-stream', 'multipart/form-data']);

        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
     * @param  string $name Document name. (required)
     * @param  string $html HTML data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlidesSaveAs(Requests\PutSlidesSaveAsRequest $request)
    {
        try {
            $this->putSlidesSaveAsWithHttpInfo($request);
        }
        catch(RepeatRequestException $ex) {
            $this->putSlidesSaveAsWithHttpInfo($request);
        } 
    }

    /**
     */
    public function putSlidesSaveAsWithHttpInfo(Requests\PutSlidesSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putSlidesSaveAsRequest($request);
        try {
            $response = $this->httpCall($httpRequest);
            return [null, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlidesSaveAsAsync(Requests\PutSlidesSaveAsRequest $request)
    {
        return $this->putSlidesSaveAsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesSaveAsAsyncWithHttpInfo(Requests\PutSlidesSaveAsRequest $request)
    {
        $returnType = '';
        $httpRequest = $this->putSlidesSaveAsRequest($request);

        return $this->client
            ->sendAsync($httpRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'putSlidesSaveAs'
     *
     * @param  string $name Document name. (required)
     * @param  string $out_path Output path. (required)
     * @param  string $format Export format. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Export options. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $fonts_folder Custom fonts folder. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesSaveAsRequest(Requests\PutSlidesSaveAsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesSaveAs');
        }
        // verify the required parameter 'out_path' is set
        if ($request->outPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $outPath when calling putSlidesSaveAs');
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling putSlidesSaveAs');
        }

        $resourcePath = '/slides/{name}/{format}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->outPath !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($request->outPath);
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
        if ($request->fontsFolder !== null) {
            $queryParams['fontsFolder'] = ObjectSerializer::toQueryValue($request->fontsFolder);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "format", $request->format);
        $_tempBody = null;
        if (isset($request->options)) {
            $_tempBody = $request->options;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlidesSetDocumentProperty(Requests\PutSlidesSetDocumentPropertyRequest $request)
    {
        try {
            list($response) = $this->putSlidesSetDocumentPropertyWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesSetDocumentPropertyWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesSetDocumentPropertyWithHttpInfo(Requests\PutSlidesSetDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty';
        $httpRequest = $this->putSlidesSetDocumentPropertyRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlidesSetDocumentPropertyAsync(Requests\PutSlidesSetDocumentPropertyRequest $request)
    {
        return $this->putSlidesSetDocumentPropertyAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesSetDocumentPropertyAsyncWithHttpInfo(Requests\PutSlidesSetDocumentPropertyRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty';
        $httpRequest = $this->putSlidesSetDocumentPropertyRequest($request);

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
     * Create request for operation 'putSlidesSetDocumentProperty'
     *
     * @param  string $name Document name. (required)
     * @param  string $property_name The property name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\DocumentProperty $property Property with the value. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesSetDocumentPropertyRequest(Requests\PutSlidesSetDocumentPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesSetDocumentProperty');
        }
        // verify the required parameter 'property_name' is set
        if ($request->propertyName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $propertyName when calling putSlidesSetDocumentProperty');
        }

        $resourcePath = '/slides/{name}/documentproperties/{propertyName}';
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
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "propertyName", $request->propertyName);
        $_tempBody = null;
        if (isset($request->property)) {
            $_tempBody = $request->property;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slide';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Slide', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Slide';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Slide $slide_dto Slide update data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\SlideBackground $background Slide background update data. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
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

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $_tempBody = null;
        if (isset($request->background)) {
            $_tempBody = $request->background;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlidesSlideBackgroundColor(Requests\PutSlidesSlideBackgroundColorRequest $request)
    {
        try {
            list($response) = $this->putSlidesSlideBackgroundColorWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesSlideBackgroundColorWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesSlideBackgroundColorWithHttpInfo(Requests\PutSlidesSlideBackgroundColorRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
        $httpRequest = $this->putSlidesSlideBackgroundColorRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlidesSlideBackgroundColorAsync(Requests\PutSlidesSlideBackgroundColorRequest $request)
    {
        return $this->putSlidesSlideBackgroundColorAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesSlideBackgroundColorAsyncWithHttpInfo(Requests\PutSlidesSlideBackgroundColorRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\SlideBackground';
        $httpRequest = $this->putSlidesSlideBackgroundColorRequest($request);

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
     * Create request for operation 'putSlidesSlideBackgroundColor'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $color Slide background target color in RRGGBB format. (required)
     * @param  string $folder Document folder. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesSlideBackgroundColorRequest(Requests\PutSlidesSlideBackgroundColorRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesSlideBackgroundColor');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putSlidesSlideBackgroundColor');
        }
        // verify the required parameter 'color' is set
        if ($request->color === null) {
            throw new \InvalidArgumentException('Missing the required parameter $color when calling putSlidesSlideBackgroundColor');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/backgroundColor';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->color !== null) {
            $queryParams['color'] = ObjectSerializer::toQueryValue($request->color);
        }
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

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "name", $request->name);
        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "slideIndex", $request->slideIndex);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
                $this->writeResponseLog($response->getStatusCode(), $response->getHeaders(), $deserializedContent);
            }
            return [$deserializedContent, $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Document', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Document';
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
     * @param  string $name Document name. (required)
     * @param  string $password Document password. (optional)
     * @param  string $storage Document storage. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  int $width Slide width. (optional, default to 0)
     * @param  int $height Slide height. (optional, default to 0)
     * @param  string $size_type Standard slide size type. (optional)
     * @param  string $scale_type Standard slide scale type. (optional, default to 0)
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

        $resourcePath = '/slides/{name}/slideSize';
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
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putSlidesViewProperties(Requests\PutSlidesViewPropertiesRequest $request)
    {
        try {
            list($response) = $this->putSlidesViewPropertiesWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putSlidesViewPropertiesWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putSlidesViewPropertiesWithHttpInfo(Requests\PutSlidesViewPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty';
        $httpRequest = $this->putSlidesViewPropertiesRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putSlidesViewPropertiesAsync(Requests\PutSlidesViewPropertiesRequest $request)
    {
        return $this->putSlidesViewPropertiesAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putSlidesViewPropertiesAsyncWithHttpInfo(Requests\PutSlidesViewPropertiesRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty';
        $httpRequest = $this->putSlidesViewPropertiesRequest($request);

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
     * Create request for operation 'putSlidesViewProperties'
     *
     * @param  string $name Document name. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ViewProperties $dto The view properties data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSlidesViewPropertiesRequest(Requests\PutSlidesViewPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putSlidesViewProperties');
        }

        $resourcePath = '/slides/{name}/viewProperties';
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
        $_tempBody = null;
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function putUpdateNotesSlide(Requests\PutUpdateNotesSlideRequest $request)
    {
        try {
            list($response) = $this->putUpdateNotesSlideWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->putUpdateNotesSlideWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function putUpdateNotesSlideWithHttpInfo(Requests\PutUpdateNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide';
        $httpRequest = $this->putUpdateNotesSlideRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function putUpdateNotesSlideAsync(Requests\PutUpdateNotesSlideRequest $request)
    {
        return $this->putUpdateNotesSlideAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function putUpdateNotesSlideAsyncWithHttpInfo(Requests\PutUpdateNotesSlideRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\NotesSlide';
        $httpRequest = $this->putUpdateNotesSlideRequest($request);

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
     * Create request for operation 'putUpdateNotesSlide'
     *
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\NotesSlide $dto A NotesSlide object with notes slide data. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putUpdateNotesSlideRequest(Requests\PutUpdateNotesSlideRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling putUpdateNotesSlide');
        }
        // verify the required parameter 'slide_index' is set
        if ($request->slideIndex === null) {
            throw new \InvalidArgumentException('Missing the required parameter $slideIndex when calling putUpdateNotesSlide');
        }

        $resourcePath = '/slides/{name}/slides/{slideIndex}/notesSlide';
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
        if (isset($request->dto)) {
            $_tempBody = $request->dto;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\ShapeBase';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Paragraph', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Paragraph';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Paragraph $dto Paragraph DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\Portion', $e->getResponseHeaders());
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
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\Portion';
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
     * @param  string $name Document name. (required)
     * @param  int $slide_index Slide index. (required)
     * @param  string $path Shape path (for smart art and group shapes). (optional)
     * @param  int $shape_index Shape index. (required)
     * @param  int $paragraph_index Paragraph index. (required)
     * @param  int $portion_index Portion index. (required)
     * @param  \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Portion DTO. (optional)
     * @param  string $password Document password. (optional)
     * @param  string $folder Document folder. (optional)
     * @param  string $storage Document storage. (optional)
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
        $this->headerSelector->selectHeaders(
            $headerParams,
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
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
    /**
     */
    public function storageExists(Requests\StorageExistsRequest $request)
    {
        try {
            list($response) = $this->storageExistsWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->storageExistsWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function storageExistsWithHttpInfo(Requests\StorageExistsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\StorageExist';
        $httpRequest = $this->storageExistsRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\StorageExist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function storageExistsAsync(Requests\StorageExistsRequest $request)
    {
        return $this->storageExistsAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function storageExistsAsyncWithHttpInfo(Requests\StorageExistsRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\StorageExist';
        $httpRequest = $this->storageExistsRequest($request);

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
     * Create request for operation 'storageExists'
     *
     * @param  string $storage_name Storage name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function storageExistsRequest(Requests\StorageExistsRequest $request)
    {
        // verify the required parameter 'storage_name' is set
        if ($request->storageName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $storageName when calling storageExists');
        }

        $resourcePath = '/slides/storage/{storageName}/exist';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';


        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "storageName", $request->storageName);
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['application/json']);

        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'GET');
    }
    /**
     */
    public function uploadFile(Requests\UploadFileRequest $request)
    {
        try {
            list($response) = $this->uploadFileWithHttpInfo($request);
            return $response;
        }
        catch(RepeatRequestException $ex) {
            list($response) = $this->uploadFileWithHttpInfo($request);
            return $response;
        } 
    }

    /**
     */
    public function uploadFileWithHttpInfo(Requests\UploadFileRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FilesUploadResult';
        $httpRequest = $this->uploadFileRequest($request);
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Slides\Cloud\Sdk\Model\FilesUploadResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default: $this->handleApiException($e);
            }
            throw $e;
        }
    }

    /**
     */
    public function uploadFileAsync(Requests\UploadFileRequest $request)
    {
        return $this->uploadFileAsyncWithHttpInfo($request)
            ->then(function ($response) {
                return $response[0];
            });
    }

    /**
     */
    public function uploadFileAsyncWithHttpInfo(Requests\UploadFileRequest $request)
    {
        $returnType = '\Aspose\Slides\Cloud\Sdk\Model\FilesUploadResult';
        $httpRequest = $this->uploadFileRequest($request);

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
     * Create request for operation 'uploadFile'
     *
     * @param  string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. (optional)
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $storage_name Storage name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadFileRequest(Requests\UploadFileRequest $request)
    {
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadFile');
        }

        $resourcePath = '/slides/storage/file/{path}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($request->storageName !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($request->storageName);
        }

        $resourcePath = ObjectSerializer::addPathValue($resourcePath, "path", $request->path);
        $_tempBody = null;
        if (isset($request->file)) {
            $_tempBody = $request->file;
        }
        $this->headerSelector->selectHeaders(
            $headerParams,
            ['application/json'],
            ['multipart/form-data']);

        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        return $this->createRequest($resourcePath, $queryParams, $headerParams, $httpBody, 'PUT');
    }
}
