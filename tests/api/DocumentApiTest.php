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
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\Requests;
use Aspose\Slides\Cloud\Sdk\Api\DocumentApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class DocumentApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new DocumentApi(null, $this->config);
    }

    private function getGetSlidesApiInfoRequest()
    {
        $request = new Requests\GetSlidesApiInfoRequest();
        return $request;
    }

    /**
     * Test case for getSlidesApiInfo
     * Get API info.
     */
    public function testGetSlidesApiInfo()
    {
        $request = $this->getGetSlidesApiInfoRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesApiInfo", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesApiInfo($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesApiInfo");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }
    private function getGetSlidesDocumentRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocument", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocument", "password", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocument", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocument", "folder", $this->values);
        $request = new Requests\GetSlidesDocumentRequest($testname, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for getSlidesDocument
     * Read presentation info.
     */
    public function testGetSlidesDocument()
    {
        $request = $this->getGetSlidesDocumentRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocument");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesDocumentInvalidname()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocument", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocument", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocument", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "storage", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocument", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "folder", $this->okToFailValues);
        }
    }
    private function getGetSlidesDocumentWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentWithFormat", "name", $this->values);
        $testformat = TestUtils::getTestValue("getSlidesDocumentWithFormat", "format", $this->values);
        $testjpegQuality = TestUtils::getTestValue("getSlidesDocumentWithFormat", "jpegQuality", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocumentWithFormat", "password", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocumentWithFormat", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocumentWithFormat", "folder", $this->values);
        $testoutPath = TestUtils::getTestValue("getSlidesDocumentWithFormat", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("getSlidesDocumentWithFormat", "fontsFolder", $this->values);
        $request = new Requests\GetSlidesDocumentWithFormatRequest($testname, $testformat, $testjpegQuality, $testpassword, $teststorage, $testfolder, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for getSlidesDocumentWithFormat
     * Export presentation to some format.
     */
    public function testGetSlidesDocumentWithFormat()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidname()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocumentWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidformat()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getSlidesDocumentWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidjpegQuality()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->jpegQuality = TestUtils::invalidizeValue("jpegQuality", "getSlidesDocumentWithFormat", $request->jpegQuality, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "jpegQuality", $request->jpegQuality);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "jpegQuality", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "jpegQuality", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocumentWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocumentWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "storage", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocumentWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidoutPath()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "getSlidesDocumentWithFormat", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "outPath", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "getSlidesDocumentWithFormat", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlidesDocumentRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesDocument", "name", $this->values);
        $testdata = TestUtils::getTestValue("postSlidesDocument", "data", $this->values);
        $testtemplatePath = TestUtils::getTestValue("postSlidesDocument", "templatePath", $this->values);
        $testtemplateStorage = TestUtils::getTestValue("postSlidesDocument", "templateStorage", $this->values);
        $testisImageDataEmbedded = TestUtils::getTestValue("postSlidesDocument", "isImageDataEmbedded", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesDocument", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesDocument", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesDocument", "folder", $this->values);
        $request = new Requests\PostSlidesDocumentRequest($testname, $testdata, $testtemplatePath, $testtemplateStorage, $testisImageDataEmbedded, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesDocument
     * Create presentation
     */
    public function testPostSlidesDocument()
    {
        $request = $this->getPostSlidesDocumentRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesDocument");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesDocumentInvalidname()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesDocument", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvaliddata()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->data = TestUtils::invalidizeValue("data", "postSlidesDocument", $request->data, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "data", $request->data);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "data", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "data", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidtemplatePath()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->templatePath = TestUtils::invalidizeValue("templatePath", "postSlidesDocument", $request->templatePath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "templatePath", $request->templatePath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "templatePath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "templatePath", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidtemplateStorage()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->templateStorage = TestUtils::invalidizeValue("templateStorage", "postSlidesDocument", $request->templateStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "templateStorage", $request->templateStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "templateStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "templateStorage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidisImageDataEmbedded()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->isImageDataEmbedded = TestUtils::invalidizeValue("isImageDataEmbedded", "postSlidesDocument", $request->isImageDataEmbedded, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "isImageDataEmbedded", $request->isImageDataEmbedded);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "isImageDataEmbedded", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "isImageDataEmbedded", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidpassword()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesDocument", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidstorage()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesDocument", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidfolder()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesDocument", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "folder", $this->okToFailValues);
        }
    }
    private function getPostSlidesPipelineRequest()
    {
        $testpipeline = TestUtils::getTestValue("postSlidesPipeline", "pipeline", $this->values);
        $testfiles = null;
        $request = new Requests\PostSlidesPipelineRequest($testpipeline, $testfiles);
        return $request;
    }

    /**
     * Test case for postSlidesPipeline
     * Performs slides pipeline. Http-request contains pipeline DTO.
     */
    public function testPostSlidesPipeline()
    {
        $request = $this->getPostSlidesPipelineRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPipeline", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPipeline($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesPipeline");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlidesPipelineInvalidpipeline()
    {
        $request = $this->getPostSlidesPipelineRequest();
        $request->pipeline = TestUtils::invalidizeValue("pipeline", "postSlidesPipeline", $request->pipeline, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPipeline", "pipeline", $request->pipeline);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPipeline($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPipeline", "pipeline", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPipeline", "pipeline", $this->okToFailValues);
        }
    }

    private function getPostSlidesSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSaveAs", "name", $this->values);
        $testformat = TestUtils::getTestValue("postSlidesSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postSlidesSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSaveAs", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSaveAs", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSaveAs", "folder", $this->values);
        $testoutPath = TestUtils::getTestValue("postSlidesSaveAs", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postSlidesSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PostSlidesSaveAsRequest($testname, $testformat, $testoptions, $testpassword, $teststorage, $testfolder, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlidesSaveAs
     * Saves presentation with options
     */
    public function testPostSlidesSaveAs()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlidesSaveAsInvalidname()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidformat()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlidesSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidoptions()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "postSlidesSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidpassword()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidstorage()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidfolder()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidoutPath()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "postSlidesSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postSlidesSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlidesSplitRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSplit", "name", $this->values);
        $testoptions = TestUtils::getTestValue("postSlidesSplit", "options", $this->values);
        $testformat = TestUtils::getTestValue("postSlidesSplit", "format", $this->values);
        $testwidth = TestUtils::getTestValue("postSlidesSplit", "width", $this->values);
        $testheight = TestUtils::getTestValue("postSlidesSplit", "height", $this->values);
        $testto = TestUtils::getTestValue("postSlidesSplit", "to", $this->values);
        $testfrom = TestUtils::getTestValue("postSlidesSplit", "from", $this->values);
        $testdestFolder = TestUtils::getTestValue("postSlidesSplit", "destFolder", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSplit", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSplit", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSplit", "folder", $this->values);
        $request = new Requests\PostSlidesSplitRequest($testname, $testoptions, $testformat, $testwidth, $testheight, $testto, $testfrom, $testdestFolder, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesSplit
     * Splitting presentations. Create one image per slide.
     */
    public function testPostSlidesSplit()
    {
        $request = $this->getPostSlidesSplitRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSplit");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesSplitInvalidname()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSplit", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidoptions()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->options = TestUtils::invalidizeValue("options", "postSlidesSplit", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "options", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidformat()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlidesSplit", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "format", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidwidth()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->width = TestUtils::invalidizeValue("width", "postSlidesSplit", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "width", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidheight()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->height = TestUtils::invalidizeValue("height", "postSlidesSplit", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "height", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidto()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->to = TestUtils::invalidizeValue("to", "postSlidesSplit", $request->to, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "to", $request->to);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "to", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "to", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidfrom()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->from = TestUtils::invalidizeValue("from", "postSlidesSplit", $request->from, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "from", $request->from);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "from", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "from", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvaliddestFolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->destFolder = TestUtils::invalidizeValue("destFolder", "postSlidesSplit", $request->destFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "destFolder", $request->destFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "destFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "destFolder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidpassword()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSplit", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidstorage()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSplit", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidfolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSplit", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "folder", $this->okToFailValues);
        }
    }
    private function getPutNewPresentationRequest()
    {
        $testname = TestUtils::getTestValue("putNewPresentation", "name", $this->values);
        $teststream = TestUtils::getStreamValue();
        $testtemplatePath = TestUtils::getTestValue("putNewPresentation", "templatePath", $this->values);
        $testtemplatePassword = TestUtils::getTestValue("putNewPresentation", "templatePassword", $this->values);
        $testtemplateStorage = TestUtils::getTestValue("putNewPresentation", "templateStorage", $this->values);
        $testpassword = TestUtils::getTestValue("putNewPresentation", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putNewPresentation", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putNewPresentation", "folder", $this->values);
        $request = new Requests\PutNewPresentationRequest($testname, $teststream, $testtemplatePath, $testtemplatePassword, $testtemplateStorage, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for putNewPresentation
     * Create presentation
     */
    public function testPutNewPresentation()
    {
        $request = $this->getPutNewPresentationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putNewPresentation");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutNewPresentationInvalidname()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", "putNewPresentation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "name", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidstream()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->stream = TestUtils::invalidizeValue("stream", "putNewPresentation", $request->stream, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "stream", $request->stream);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "stream", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "stream", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidtemplatePath()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->templatePath = TestUtils::invalidizeValue("templatePath", "putNewPresentation", $request->templatePath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "templatePath", $request->templatePath);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "templatePath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "templatePath", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidtemplatePassword()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->templatePassword = TestUtils::invalidizeValue("templatePassword", "putNewPresentation", $request->templatePassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "templatePassword", $request->templatePassword);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "templatePassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "templatePassword", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidtemplateStorage()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->templateStorage = TestUtils::invalidizeValue("templateStorage", "putNewPresentation", $request->templateStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "templateStorage", $request->templateStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "templateStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "templateStorage", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidpassword()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", "putNewPresentation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "password", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidstorage()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putNewPresentation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "storage", $this->okToFailValues);
        }
    }

    public function testPutNewPresentationInvalidfolder()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putNewPresentation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNewPresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "folder", $this->okToFailValues);
        }
    }
    private function getPutSlidesConvertRequest()
    {
        $testformat = TestUtils::getTestValue("putSlidesConvert", "format", $this->values);
        $testdocument = TestUtils::getStreamValue();
        $testpassword = TestUtils::getTestValue("putSlidesConvert", "password", $this->values);
        $testoutPath = TestUtils::getTestValue("putSlidesConvert", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("putSlidesConvert", "fontsFolder", $this->values);
        $request = new Requests\PutSlidesConvertRequest($testformat, $testdocument, $testpassword, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for putSlidesConvert
     * Convert presentation from request content to format specified.
     */
    public function testPutSlidesConvert()
    {
        $request = $this->getPutSlidesConvertRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesConvert");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPutSlidesConvertInvalidformat()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->format = TestUtils::invalidizeValue("format", "putSlidesConvert", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "format", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvaliddocument()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->document = TestUtils::invalidizeValue("document", "putSlidesConvert", $request->document, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "document", $request->document);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "document", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "document", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvalidpassword()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesConvert", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvalidoutPath()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "putSlidesConvert", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "outPath", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvalidfontsFolder()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "putSlidesConvert", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutSlidesDocumentFromHtmlRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesDocumentFromHtml", "name", $this->values);
        $testhtml = TestUtils::getTestValue("putSlidesDocumentFromHtml", "html", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesDocumentFromHtml", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesDocumentFromHtml", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesDocumentFromHtml", "folder", $this->values);
        $request = new Requests\PutSlidesDocumentFromHtmlRequest($testname, $testhtml, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for putSlidesDocumentFromHtml
     * Create presentation document from html
     */
    public function testPutSlidesDocumentFromHtml()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesDocumentFromHtml");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidname()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesDocumentFromHtml", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidhtml()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->html = TestUtils::invalidizeValue("html", "putSlidesDocumentFromHtml", $request->html, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "html", $request->html);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "html", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "html", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidpassword()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesDocumentFromHtml", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidstorage()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesDocumentFromHtml", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidfolder()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesDocumentFromHtml", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "folder", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideSizeRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideSize", "name", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlideSize", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlideSize", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlideSize", "folder", $this->values);
        $testwidth = TestUtils::getTestValue("putSlidesSlideSize", "width", $this->values);
        $testheight = TestUtils::getTestValue("putSlidesSlideSize", "height", $this->values);
        $testsizeType = TestUtils::getTestValue("putSlidesSlideSize", "sizeType", $this->values);
        $testscaleType = TestUtils::getTestValue("putSlidesSlideSize", "scaleType", $this->values);
        $request = new Requests\PutSlidesSlideSizeRequest($testname, $testpassword, $teststorage, $testfolder, $testwidth, $testheight, $testsizeType, $testscaleType);
        return $request;
    }

    /**
     * Test case for putSlidesSlideSize
     * Set slide size for the presentation.
     */
    public function testPutSlidesSlideSize()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideSize");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSlidesSlideSizeInvalidname()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlideSize", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidpassword()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlideSize", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidstorage()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlideSize", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidfolder()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlideSize", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidwidth()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->width = TestUtils::invalidizeValue("width", "putSlidesSlideSize", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "width", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidheight()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->height = TestUtils::invalidizeValue("height", "putSlidesSlideSize", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "height", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidsizeType()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->sizeType = TestUtils::invalidizeValue("sizeType", "putSlidesSlideSize", $request->sizeType, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "sizeType", $request->sizeType);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "sizeType", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "sizeType", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidscaleType()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->scaleType = TestUtils::invalidizeValue("scaleType", "putSlidesSlideSize", $request->scaleType, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "scaleType", $request->scaleType);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "scaleType", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "scaleType", $this->okToFailValues);
        }
    }
}
