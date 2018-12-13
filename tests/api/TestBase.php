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

namespace Aspose\Slides\Cloud\Sdk\Tests\Api;

use Aspose\Storage\Api\StorageApi;
use Aspose\Storage\Model\Requests\PutCreateRequest;
use Aspose\Storage\Model\Requests\DeleteFileRequest;
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class TestBase extends \PHPUnit_Framework_TestCase
{
    protected $storage;
    protected $config;

    protected function setUp()
    {
        $this->config = new Configuration();
        $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testConfig.json")), true);
        $appKey = $testConfig["AppKey"];
        $appSid = $testConfig["AppSid"];
        $baseUrl = $testConfig["BaseUrl"];
        $debug = $testConfig["Debug"];
        $this->config->setAppKey($appKey);
        $this->config->setAppSid($appSid);
        $this->config->setHost($baseUrl);
        $this->config->setDebug($debug);

        $this->storage = new StorageApi();
        $this->storage->getConfig()->setAppKey($appKey);
        $this->storage->getConfig()->setAppSid($appSid);
        $this->storage->getConfig()->setHost($baseUrl);

        $putRequest = new PutCreateRequest(TestUtils::getFileUploadPath(), TestUtils::getFilePath());
        $this->storage->PutCreate($putRequest);
    }
    
    protected function initialize($functionName, $invalidFieldName, $invalidFieldValue)
    {
        if ($functionName == 'deleteSlidesCleanSlidesList' || $functionName == "putSlidesSlide") {
            $putRequest = new PutCreateRequest(
                TestUtils::folderName."/test-unprotected.ppt", realpath(__DIR__.'/../..').'/TestData/test-unprotected.ppt');
            $this->storage->PutCreate($putRequest);
        }
        if ($functionName == 'postSlidesDocument') {
            $putRequest = new PutCreateRequest(
                TestUtils::folderName."/".TestUtils::templateFileName, realpath(__DIR__.'/../..').'/TestData/'.TestUtils::templateFileName);
            $this->storage->PutCreate($putRequest);
        }
        if ($functionName == "postSlidesDocument") {
            $deleteRequest = new DeleteFileRequest(TestUtils::getFileUploadPath());
            $this->storage->DeleteFile($deleteRequest);
        }
        if ($invalidFieldName == "folder") {
            $deleteRequest = new DeleteFileRequest($invalidFieldValue."/".TestUtils::fileName);
            $this->storage->DeleteFile($deleteRequest);
        }
        if ($invalidFieldName == "name") {
            $deleteRequest = new DeleteFileRequest(TestUtils::folderName."/".$invalidFieldValue);
            $this->storage->DeleteFile($deleteRequest);
        }
        if ($functionName == "putNewPresentation" || $functionName == "postSlidesDocument") {
            $deleteRequest = new DeleteFileRequest(TestUtils::folderName."invalid/".TestUtils::changedFileName);
            $this->storage->DeleteFile($deleteRequest);
            $deleteRequest = new DeleteFileRequest(TestUtils::folderName."/invalid".TestUtils::changedFileName);
            $this->storage->DeleteFile($deleteRequest);
            $deleteRequest = new DeleteFileRequest(TestUtils::folderName."/".TestUtils::changedFileName);
            $this->storage->DeleteFile($deleteRequest);
        }
    }
}
