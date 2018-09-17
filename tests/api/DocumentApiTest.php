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
        $this->initialize("getSlidesApiInfo", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesApiInfo($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesApiInfo");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }
    private function getGetSlidesDocumentRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocument", "name", "string");
        $testpassword = TestUtils::getTestValue("getSlidesDocument", "password", "string");
        $teststorage = TestUtils::getTestValue("getSlidesDocument", "storage", "string");
        $testfolder = TestUtils::getTestValue("getSlidesDocument", "folder", "string");
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
        $this->initialize("getSlidesDocument", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocument");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesDocumentInvalidname()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesDocument", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "name");
        }
    }

    public function testGetSlidesDocumentInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesDocument", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "password");
        }
    }

    public function testGetSlidesDocumentInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesDocument", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "storage");
        }
    }

    public function testGetSlidesDocumentInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesDocument", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "folder");
        }
    }
    private function getGetSlidesDocumentWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentWithFormat", "name", "string");
        $testformat = TestUtils::getTestValue("getSlidesDocumentWithFormat", "format", "int");
        $testjpegQuality = TestUtils::getTestValue("getSlidesDocumentWithFormat", "jpegQuality", "int");
        $testpassword = TestUtils::getTestValue("getSlidesDocumentWithFormat", "password", "string");
        $teststorage = TestUtils::getTestValue("getSlidesDocumentWithFormat", "storage", "string");
        $testfolder = TestUtils::getTestValue("getSlidesDocumentWithFormat", "folder", "string");
        $testoutPath = TestUtils::getTestValue("getSlidesDocumentWithFormat", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("getSlidesDocumentWithFormat", "fontsFolder", "string");
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
        $this->initialize("getSlidesDocumentWithFormat", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesDocumentWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "name");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidformat()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("getSlidesDocumentWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "format");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidjpegQuality()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->jpegQuality = TestUtils::invalidizeValue("jpegQuality", $request->jpegQuality, "int");
        $this->initialize("getSlidesDocumentWithFormat", "jpegQuality", $request->jpegQuality);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "jpegQuality");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "jpegQuality");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesDocumentWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "password");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesDocumentWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "storage");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesDocumentWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "folder");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidoutPath()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("getSlidesDocumentWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "outPath");
        }
    }

    public function testGetSlidesDocumentWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetSlidesDocumentWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("getSlidesDocumentWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentWithFormat", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentWithFormat", "fontsFolder");
        }
    }
    private function getPostSlidesDocumentRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesDocument", "name", "string");
        $testdata = TestUtils::getTestValue("postSlidesDocument", "data", "string");
        $testtemplatePath = TestUtils::getTestValue("postSlidesDocument", "templatePath", "string");
        $testtemplateStorage = TestUtils::getTestValue("postSlidesDocument", "templateStorage", "string");
        $testisImageDataEmbeeded = TestUtils::getTestValue("postSlidesDocument", "isImageDataEmbeeded", "bool");
        $testpassword = TestUtils::getTestValue("postSlidesDocument", "password", "string");
        $teststorage = TestUtils::getTestValue("postSlidesDocument", "storage", "string");
        $testfolder = TestUtils::getTestValue("postSlidesDocument", "folder", "string");
        $request = new Requests\PostSlidesDocumentRequest($testname, $testdata, $testtemplatePath, $testtemplateStorage, $testisImageDataEmbeeded, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesDocument
     * Create presentation
     */
    public function testPostSlidesDocument()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $this->initialize("postSlidesDocument", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesDocument");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostSlidesDocumentInvalidname()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesDocument", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "name");
        }
    }

    public function testPostSlidesDocumentInvaliddata()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->data = TestUtils::invalidizeValue("data", $request->data, "string");
        $this->initialize("postSlidesDocument", "data", $request->data);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "data");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "data");
        }
    }

    public function testPostSlidesDocumentInvalidtemplatePath()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->templatePath = TestUtils::invalidizeValue("templatePath", $request->templatePath, "string");
        $this->initialize("postSlidesDocument", "templatePath", $request->templatePath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "templatePath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "templatePath");
        }
    }

    public function testPostSlidesDocumentInvalidtemplateStorage()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->templateStorage = TestUtils::invalidizeValue("templateStorage", $request->templateStorage, "string");
        $this->initialize("postSlidesDocument", "templateStorage", $request->templateStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "templateStorage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "templateStorage");
        }
    }

    public function testPostSlidesDocumentInvalidisImageDataEmbeeded()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->isImageDataEmbeeded = TestUtils::invalidizeValue("isImageDataEmbeeded", $request->isImageDataEmbeeded, "bool");
        $this->initialize("postSlidesDocument", "isImageDataEmbeeded", $request->isImageDataEmbeeded);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "isImageDataEmbeeded");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "isImageDataEmbeeded");
        }
    }

    public function testPostSlidesDocumentInvalidpassword()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesDocument", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "password");
        }
    }

    public function testPostSlidesDocumentInvalidstorage()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesDocument", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "storage");
        }
    }

    public function testPostSlidesDocumentInvalidfolder()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesDocument", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "folder");
        }
    }
    private function getPostSlidesPipelineRequest()
    {
        $testpipeline = TestUtils::getTestValue("postSlidesPipeline", "pipeline", "\Aspose\Slides\Cloud\Sdk\Model\Pipeline");
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
        $this->initialize("postSlidesPipeline", null, null);
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
        $request->pipeline = TestUtils::invalidizeValue("pipeline", $request->pipeline, "\Aspose\Slides\Cloud\Sdk\Model\Pipeline");
        $this->initialize("postSlidesPipeline", "pipeline", $request->pipeline);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPipeline($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPipeline", "pipeline");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPipeline", "pipeline");
        }
    }

    private function getPostSlidesSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSaveAs", "name", "string");
        $testformat = TestUtils::getTestValue("postSlidesSaveAs", "format", "int");
        $testoptions = TestUtils::getTestValue("postSlidesSaveAs", "options", "\Aspose\Slides\Cloud\Sdk\Model\ExportOptions");
        $testpassword = TestUtils::getTestValue("postSlidesSaveAs", "password", "string");
        $teststorage = TestUtils::getTestValue("postSlidesSaveAs", "storage", "string");
        $testfolder = TestUtils::getTestValue("postSlidesSaveAs", "folder", "string");
        $testoutPath = TestUtils::getTestValue("postSlidesSaveAs", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("postSlidesSaveAs", "fontsFolder", "string");
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
        $this->initialize("postSlidesSaveAs", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "name");
        }
    }

    public function testPostSlidesSaveAsInvalidformat()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("postSlidesSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "format");
        }
    }

    public function testPostSlidesSaveAsInvalidoptions()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", $request->options, "\Aspose\Slides\Cloud\Sdk\Model\ExportOptions");
        $this->initialize("postSlidesSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "options");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "options");
        }
    }

    public function testPostSlidesSaveAsInvalidpassword()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "password");
        }
    }

    public function testPostSlidesSaveAsInvalidstorage()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "storage");
        }
    }

    public function testPostSlidesSaveAsInvalidfolder()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "folder");
        }
    }

    public function testPostSlidesSaveAsInvalidoutPath()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("postSlidesSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "outPath");
        }
    }

    public function testPostSlidesSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("postSlidesSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "fontsFolder");
        }
    }
    private function getPostSlidesSplitRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSplit", "name", "string");
        $testoptions = TestUtils::getTestValue("postSlidesSplit", "options", "\Aspose\Slides\Cloud\Sdk\Model\ExportOptions");
        $testformat = TestUtils::getTestValue("postSlidesSplit", "format", "int");
        $testwidth = TestUtils::getTestValue("postSlidesSplit", "width", "int");
        $testheight = TestUtils::getTestValue("postSlidesSplit", "height", "int");
        $testto = TestUtils::getTestValue("postSlidesSplit", "to", "int");
        $testfrom = TestUtils::getTestValue("postSlidesSplit", "from", "int");
        $testdestFolder = TestUtils::getTestValue("postSlidesSplit", "destFolder", "string");
        $testpassword = TestUtils::getTestValue("postSlidesSplit", "password", "string");
        $teststorage = TestUtils::getTestValue("postSlidesSplit", "storage", "string");
        $testfolder = TestUtils::getTestValue("postSlidesSplit", "folder", "string");
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
        $this->initialize("postSlidesSplit", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSplit");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostSlidesSplitInvalidname()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesSplit", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "name");
        }
    }

    public function testPostSlidesSplitInvalidoptions()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->options = TestUtils::invalidizeValue("options", $request->options, "\Aspose\Slides\Cloud\Sdk\Model\ExportOptions");
        $this->initialize("postSlidesSplit", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "options");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "options");
        }
    }

    public function testPostSlidesSplitInvalidformat()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("postSlidesSplit", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "format");
        }
    }

    public function testPostSlidesSplitInvalidwidth()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->width = TestUtils::invalidizeValue("width", $request->width, "int");
        $this->initialize("postSlidesSplit", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "width");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "width");
        }
    }

    public function testPostSlidesSplitInvalidheight()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->height = TestUtils::invalidizeValue("height", $request->height, "int");
        $this->initialize("postSlidesSplit", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "height");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "height");
        }
    }

    public function testPostSlidesSplitInvalidto()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->to = TestUtils::invalidizeValue("to", $request->to, "int");
        $this->initialize("postSlidesSplit", "to", $request->to);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "to");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "to");
        }
    }

    public function testPostSlidesSplitInvalidfrom()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->from = TestUtils::invalidizeValue("from", $request->from, "int");
        $this->initialize("postSlidesSplit", "from", $request->from);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "from");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "from");
        }
    }

    public function testPostSlidesSplitInvaliddestFolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->destFolder = TestUtils::invalidizeValue("destFolder", $request->destFolder, "string");
        $this->initialize("postSlidesSplit", "destFolder", $request->destFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "destFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "destFolder");
        }
    }

    public function testPostSlidesSplitInvalidpassword()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesSplit", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "password");
        }
    }

    public function testPostSlidesSplitInvalidstorage()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesSplit", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "storage");
        }
    }

    public function testPostSlidesSplitInvalidfolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesSplit", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "folder");
        }
    }
    private function getPutNewPresentationRequest()
    {
        $testname = TestUtils::getTestValue("putNewPresentation", "name", "string");
        $teststream = TestUtils::getStreamValue();
        $testtemplatePath = TestUtils::getTestValue("putNewPresentation", "templatePath", "string");
        $testtemplatePassword = TestUtils::getTestValue("putNewPresentation", "templatePassword", "string");
        $testtemplateStorage = TestUtils::getTestValue("putNewPresentation", "templateStorage", "string");
        $testpassword = TestUtils::getTestValue("putNewPresentation", "password", "string");
        $teststorage = TestUtils::getTestValue("putNewPresentation", "storage", "string");
        $testfolder = TestUtils::getTestValue("putNewPresentation", "folder", "string");
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
        $this->initialize("putNewPresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putNewPresentation");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutNewPresentationInvalidname()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putNewPresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "name");
        }
    }

    public function testPutNewPresentationInvalidstream()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->stream = TestUtils::invalidizeValue("stream", $request->stream, "\SplFileObject");
        $this->initialize("putNewPresentation", "stream", $request->stream);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "stream");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "stream");
        }
    }

    public function testPutNewPresentationInvalidtemplatePath()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->templatePath = TestUtils::invalidizeValue("templatePath", $request->templatePath, "string");
        $this->initialize("putNewPresentation", "templatePath", $request->templatePath);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "templatePath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "templatePath");
        }
    }

    public function testPutNewPresentationInvalidtemplatePassword()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->templatePassword = TestUtils::invalidizeValue("templatePassword", $request->templatePassword, "string");
        $this->initialize("putNewPresentation", "templatePassword", $request->templatePassword);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "templatePassword");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "templatePassword");
        }
    }

    public function testPutNewPresentationInvalidtemplateStorage()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->templateStorage = TestUtils::invalidizeValue("templateStorage", $request->templateStorage, "string");
        $this->initialize("putNewPresentation", "templateStorage", $request->templateStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "templateStorage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "templateStorage");
        }
    }

    public function testPutNewPresentationInvalidpassword()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putNewPresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "password");
        }
    }

    public function testPutNewPresentationInvalidstorage()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putNewPresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "storage");
        }
    }

    public function testPutNewPresentationInvalidfolder()
    {
        $request = $this->getPutNewPresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putNewPresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putNewPresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNewPresentation", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNewPresentation", "folder");
        }
    }
    private function getPutSlidesConvertRequest()
    {
        $testformat = TestUtils::getTestValue("putSlidesConvert", "format", "int");
        $testdocument = TestUtils::getStreamValue();
        $testpassword = TestUtils::getTestValue("putSlidesConvert", "password", "string");
        $testoutPath = TestUtils::getTestValue("putSlidesConvert", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("putSlidesConvert", "fontsFolder", "string");
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
        $this->initialize("putSlidesConvert", null, null);
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
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("putSlidesConvert", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "format");
        }
    }

    public function testPutSlidesConvertInvaliddocument()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->document = TestUtils::invalidizeValue("document", $request->document, "\SplFileObject");
        $this->initialize("putSlidesConvert", "document", $request->document);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "document");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "document");
        }
    }

    public function testPutSlidesConvertInvalidpassword()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlidesConvert", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "password");
        }
    }

    public function testPutSlidesConvertInvalidoutPath()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("putSlidesConvert", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "outPath");
        }
    }

    public function testPutSlidesConvertInvalidfontsFolder()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("putSlidesConvert", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "fontsFolder");
        }
    }
    private function getPutSlidesDocumentFromHtmlRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesDocumentFromHtml", "name", "string");
        $testhtml = TestUtils::getTestValue("putSlidesDocumentFromHtml", "html", "string");
        $testpassword = TestUtils::getTestValue("putSlidesDocumentFromHtml", "password", "string");
        $teststorage = TestUtils::getTestValue("putSlidesDocumentFromHtml", "storage", "string");
        $testfolder = TestUtils::getTestValue("putSlidesDocumentFromHtml", "folder", "string");
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
        $this->initialize("putSlidesDocumentFromHtml", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesDocumentFromHtml");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidname()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSlidesDocumentFromHtml", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "name");
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidhtml()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->html = TestUtils::invalidizeValue("html", $request->html, "string");
        $this->initialize("putSlidesDocumentFromHtml", "html", $request->html);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "html");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "html");
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidpassword()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlidesDocumentFromHtml", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "password");
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidstorage()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSlidesDocumentFromHtml", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "storage");
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidfolder()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSlidesDocumentFromHtml", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "folder");
        }
    }
    private function getPutSlidesSlideSizeRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideSize", "name", "string");
        $testpassword = TestUtils::getTestValue("putSlidesSlideSize", "password", "string");
        $teststorage = TestUtils::getTestValue("putSlidesSlideSize", "storage", "string");
        $testfolder = TestUtils::getTestValue("putSlidesSlideSize", "folder", "string");
        $testwidth = TestUtils::getTestValue("putSlidesSlideSize", "width", "int");
        $testheight = TestUtils::getTestValue("putSlidesSlideSize", "height", "int");
        $testsizeType = TestUtils::getTestValue("putSlidesSlideSize", "sizeType", "int");
        $testscaleType = TestUtils::getTestValue("putSlidesSlideSize", "scaleType", "int");
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
        $this->initialize("putSlidesSlideSize", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideSize");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSlidesSlideSizeInvalidname()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSlidesSlideSize", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "name");
        }
    }

    public function testPutSlidesSlideSizeInvalidpassword()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlidesSlideSize", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "password");
        }
    }

    public function testPutSlidesSlideSizeInvalidstorage()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSlidesSlideSize", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "storage");
        }
    }

    public function testPutSlidesSlideSizeInvalidfolder()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSlidesSlideSize", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "folder");
        }
    }

    public function testPutSlidesSlideSizeInvalidwidth()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->width = TestUtils::invalidizeValue("width", $request->width, "int");
        $this->initialize("putSlidesSlideSize", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "width");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "width");
        }
    }

    public function testPutSlidesSlideSizeInvalidheight()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->height = TestUtils::invalidizeValue("height", $request->height, "int");
        $this->initialize("putSlidesSlideSize", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "height");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "height");
        }
    }

    public function testPutSlidesSlideSizeInvalidsizeType()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->sizeType = TestUtils::invalidizeValue("sizeType", $request->sizeType, "int");
        $this->initialize("putSlidesSlideSize", "sizeType", $request->sizeType);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "sizeType");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "sizeType");
        }
    }

    public function testPutSlidesSlideSizeInvalidscaleType()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->scaleType = TestUtils::invalidizeValue("scaleType", $request->scaleType, "int");
        $this->initialize("putSlidesSlideSize", "scaleType", $request->scaleType);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "scaleType");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "scaleType");
        }
    }
}
