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
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class SlidesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new SlidesApi(null, $this->config);
    }

    private function getDeleteSlideByIndexRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideByIndex", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteSlideByIndex", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteSlideByIndex", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlideByIndex", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlideByIndex", "storage", "string");
        $request = new Requests\DeleteSlideByIndexRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideByIndex
     * Delete presentation slide by its index.
     */
    public function testDeleteSlideByIndex()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $this->initialize("deleteSlideByIndex", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideByIndex");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlideByIndexInvalidname()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlideByIndex", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "name");
        }
    }

    public function testDeleteSlideByIndexInvalidslideIndex()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteSlideByIndex", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "slideIndex");
        }
    }

    public function testDeleteSlideByIndexInvalidpassword()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlideByIndex", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "password");
        }
    }

    public function testDeleteSlideByIndexInvalidfolder()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlideByIndex", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "folder");
        }
    }

    public function testDeleteSlideByIndexInvalidstorage()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlideByIndex", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "storage");
        }
    }
    private function getDeleteSlidesCleanSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "name", "string");
        $testslides = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "slides", "int[]");
        $testpassword = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "storage", "string");
        $request = new Requests\DeleteSlidesCleanSlidesListRequest($testname, $testslides, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesCleanSlidesList
     * Delete presentation slides.
     */
    public function testDeleteSlidesCleanSlidesList()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $this->initialize("deleteSlidesCleanSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesCleanSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidname()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlidesCleanSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "name");
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidslides()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->slides = TestUtils::invalidizeValue("slides", $request->slides, "int[]");
        $this->initialize("deleteSlidesCleanSlidesList", "slides", $request->slides);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "slides");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "slides");
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidpassword()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlidesCleanSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "password");
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidfolder()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlidesCleanSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "folder");
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidstorage()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlidesCleanSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "storage");
        }
    }
    private function getDeleteSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesSlideBackground", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteSlidesSlideBackground", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteSlidesSlideBackground", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlidesSlideBackground", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlidesSlideBackground", "storage", "string");
        $request = new Requests\DeleteSlidesSlideBackgroundRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesSlideBackground
     * Remove presentation slide background color.
     */
    public function testDeleteSlidesSlideBackground()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $this->initialize("deleteSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "name");
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "slideIndex");
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "password");
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "folder");
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "storage");
        }
    }
    private function getGetSlideWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlideWithFormat", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlideWithFormat", "slideIndex", "int");
        $testformat = TestUtils::getTestValue("getSlideWithFormat", "format", "int");
        $testwidth = TestUtils::getTestValue("getSlideWithFormat", "width", "int");
        $testheight = TestUtils::getTestValue("getSlideWithFormat", "height", "int");
        $testpassword = TestUtils::getTestValue("getSlideWithFormat", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlideWithFormat", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlideWithFormat", "storage", "string");
        $testoutPath = TestUtils::getTestValue("getSlideWithFormat", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("getSlideWithFormat", "fontsFolder", "string");
        $request = new Requests\GetSlideWithFormatRequest($testname, $testslideIndex, $testformat, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for getSlideWithFormat
     * Convert slide to some format.
     */
    public function testGetSlideWithFormat()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $this->initialize("getSlideWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetSlideWithFormatInvalidname()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlideWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "name");
        }
    }

    public function testGetSlideWithFormatInvalidslideIndex()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlideWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "slideIndex");
        }
    }

    public function testGetSlideWithFormatInvalidformat()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("getSlideWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "format");
        }
    }

    public function testGetSlideWithFormatInvalidwidth()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->width = TestUtils::invalidizeValue("width", $request->width, "int");
        $this->initialize("getSlideWithFormat", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "width");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "width");
        }
    }

    public function testGetSlideWithFormatInvalidheight()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->height = TestUtils::invalidizeValue("height", $request->height, "int");
        $this->initialize("getSlideWithFormat", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "height");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "height");
        }
    }

    public function testGetSlideWithFormatInvalidpassword()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlideWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "password");
        }
    }

    public function testGetSlideWithFormatInvalidfolder()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlideWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "folder");
        }
    }

    public function testGetSlideWithFormatInvalidstorage()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlideWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "storage");
        }
    }

    public function testGetSlideWithFormatInvalidoutPath()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("getSlideWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "outPath");
        }
    }

    public function testGetSlideWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("getSlideWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "fontsFolder");
        }
    }
    private function getGetSlidesSlideRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesSlide", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlidesSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesSlide", "storage", "string");
        $request = new Requests\GetSlidesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlide
     * Read slide info.
     */
    public function testGetSlidesSlide()
    {
        $request = $this->getGetSlidesSlideRequest();
        $this->initialize("getSlidesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesSlideInvalidname()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "name");
        }
    }

    public function testGetSlidesSlideInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "slideIndex");
        }
    }

    public function testGetSlidesSlideInvalidpassword()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "password");
        }
    }

    public function testGetSlidesSlideInvalidfolder()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "folder");
        }
    }

    public function testGetSlidesSlideInvalidstorage()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "storage");
        }
    }
    private function getGetSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideBackground", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideBackground", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlidesSlideBackground", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesSlideBackground", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesSlideBackground", "storage", "string");
        $request = new Requests\GetSlidesSlideBackgroundRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideBackground
     * Read presentation slide background color type.
     */
    public function testGetSlidesSlideBackground()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $this->initialize("getSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "name");
        }
    }

    public function testGetSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "slideIndex");
        }
    }

    public function testGetSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "password");
        }
    }

    public function testGetSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "folder");
        }
    }

    public function testGetSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "storage");
        }
    }
    private function getGetSlidesSlideCommentsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideComments", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideComments", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlidesSlideComments", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesSlideComments", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesSlideComments", "storage", "string");
        $request = new Requests\GetSlidesSlideCommentsRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideComments
     * Read presentation slide comments.
     */
    public function testGetSlidesSlideComments()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $this->initialize("getSlidesSlideComments", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideComments");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesSlideCommentsInvalidname()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesSlideComments", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "name");
        }
    }

    public function testGetSlidesSlideCommentsInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesSlideComments", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "slideIndex");
        }
    }

    public function testGetSlidesSlideCommentsInvalidpassword()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesSlideComments", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "password");
        }
    }

    public function testGetSlidesSlideCommentsInvalidfolder()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesSlideComments", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "folder");
        }
    }

    public function testGetSlidesSlideCommentsInvalidstorage()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesSlideComments", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "storage");
        }
    }
    private function getGetSlidesSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlidesList", "name", "string");
        $testpassword = TestUtils::getTestValue("getSlidesSlidesList", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesSlidesList", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesSlidesList", "storage", "string");
        $request = new Requests\GetSlidesSlidesListRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlidesList
     * Read presentation slides info.
     */
    public function testGetSlidesSlidesList()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $this->initialize("getSlidesSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesSlidesListInvalidname()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "name");
        }
    }

    public function testGetSlidesSlidesListInvalidpassword()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "password");
        }
    }

    public function testGetSlidesSlidesListInvalidfolder()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "folder");
        }
    }

    public function testGetSlidesSlidesListInvalidstorage()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "storage");
        }
    }
    private function getPostSlideSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postSlideSaveAs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postSlideSaveAs", "slideIndex", "int");
        $testformat = TestUtils::getTestValue("postSlideSaveAs", "format", "int");
        $testoptions = TestUtils::getTestValue("postSlideSaveAs", "options", "\Aspose\Slides\Cloud\Sdk\Model\ExportOptions");
        $testwidth = TestUtils::getTestValue("postSlideSaveAs", "width", "int");
        $testheight = TestUtils::getTestValue("postSlideSaveAs", "height", "int");
        $testpassword = TestUtils::getTestValue("postSlideSaveAs", "password", "string");
        $testfolder = TestUtils::getTestValue("postSlideSaveAs", "folder", "string");
        $teststorage = TestUtils::getTestValue("postSlideSaveAs", "storage", "string");
        $testoutPath = TestUtils::getTestValue("postSlideSaveAs", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("postSlideSaveAs", "fontsFolder", "string");
        $request = new Requests\PostSlideSaveAsRequest($testname, $testslideIndex, $testformat, $testoptions, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlideSaveAs
     * Convert slide to some format.
     */
    public function testPostSlideSaveAs()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $this->initialize("postSlideSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlideSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlideSaveAsInvalidname()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlideSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "name");
        }
    }

    public function testPostSlideSaveAsInvalidslideIndex()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postSlideSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "slideIndex");
        }
    }

    public function testPostSlideSaveAsInvalidformat()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("postSlideSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "format");
        }
    }

    public function testPostSlideSaveAsInvalidoptions()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", $request->options, "\Aspose\Slides\Cloud\Sdk\Model\ExportOptions");
        $this->initialize("postSlideSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "options");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "options");
        }
    }

    public function testPostSlideSaveAsInvalidwidth()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->width = TestUtils::invalidizeValue("width", $request->width, "int");
        $this->initialize("postSlideSaveAs", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "width");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "width");
        }
    }

    public function testPostSlideSaveAsInvalidheight()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->height = TestUtils::invalidizeValue("height", $request->height, "int");
        $this->initialize("postSlideSaveAs", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "height");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "height");
        }
    }

    public function testPostSlideSaveAsInvalidpassword()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlideSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "password");
        }
    }

    public function testPostSlideSaveAsInvalidfolder()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlideSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "folder");
        }
    }

    public function testPostSlideSaveAsInvalidstorage()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlideSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "storage");
        }
    }

    public function testPostSlideSaveAsInvalidoutPath()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("postSlideSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "outPath");
        }
    }

    public function testPostSlideSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("postSlideSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "fontsFolder");
        }
    }
    private function getPostSlidesReorderPositionRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesReorderPosition", "name", "string");
        $testoldPosition = TestUtils::getTestValue("postSlidesReorderPosition", "oldPosition", "int");
        $testnewPosition = TestUtils::getTestValue("postSlidesReorderPosition", "newPosition", "int");
        $testslideToCopy = TestUtils::getTestValue("postSlidesReorderPosition", "slideToCopy", "int");
        $testposition = TestUtils::getTestValue("postSlidesReorderPosition", "position", "int");
        $testslideToClone = TestUtils::getTestValue("postSlidesReorderPosition", "slideToClone", "int");
        $testsource = TestUtils::getTestValue("postSlidesReorderPosition", "source", "string");
        $testpassword = TestUtils::getTestValue("postSlidesReorderPosition", "password", "string");
        $testfolder = TestUtils::getTestValue("postSlidesReorderPosition", "folder", "string");
        $teststorage = TestUtils::getTestValue("postSlidesReorderPosition", "storage", "string");
        $testlayoutAlias = TestUtils::getTestValue("postSlidesReorderPosition", "layoutAlias", "string");
        $request = new Requests\PostSlidesReorderPositionRequest($testname, $testoldPosition, $testnewPosition, $testslideToCopy, $testposition, $testslideToClone, $testsource, $testpassword, $testfolder, $teststorage, $testlayoutAlias);
        return $request;
    }

    /**
     * Test case for postSlidesReorderPosition
     * Reorder presentation slide position
     */
    public function testPostSlidesReorderPosition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $this->initialize("postSlidesReorderPosition", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesReorderPosition");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostSlidesReorderPositionInvalidname()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesReorderPosition", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "name");
        }
    }

    public function testPostSlidesReorderPositionInvalidoldPosition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->oldPosition = TestUtils::invalidizeValue("oldPosition", $request->oldPosition, "int");
        $this->initialize("postSlidesReorderPosition", "oldPosition", $request->oldPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "oldPosition");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "oldPosition");
        }
    }

    public function testPostSlidesReorderPositionInvalidnewPosition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->newPosition = TestUtils::invalidizeValue("newPosition", $request->newPosition, "int");
        $this->initialize("postSlidesReorderPosition", "newPosition", $request->newPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "newPosition");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "newPosition");
        }
    }

    public function testPostSlidesReorderPositionInvalidslideToCopy()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->slideToCopy = TestUtils::invalidizeValue("slideToCopy", $request->slideToCopy, "int");
        $this->initialize("postSlidesReorderPosition", "slideToCopy", $request->slideToCopy);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "slideToCopy");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "slideToCopy");
        }
    }

    public function testPostSlidesReorderPositionInvalidposition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postSlidesReorderPosition", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "position");
        }
    }

    public function testPostSlidesReorderPositionInvalidslideToClone()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->slideToClone = TestUtils::invalidizeValue("slideToClone", $request->slideToClone, "int");
        $this->initialize("postSlidesReorderPosition", "slideToClone", $request->slideToClone);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "slideToClone");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "slideToClone");
        }
    }

    public function testPostSlidesReorderPositionInvalidsource()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->source = TestUtils::invalidizeValue("source", $request->source, "string");
        $this->initialize("postSlidesReorderPosition", "source", $request->source);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "source");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "source");
        }
    }

    public function testPostSlidesReorderPositionInvalidpassword()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesReorderPosition", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "password");
        }
    }

    public function testPostSlidesReorderPositionInvalidfolder()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesReorderPosition", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "folder");
        }
    }

    public function testPostSlidesReorderPositionInvalidstorage()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesReorderPosition", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "storage");
        }
    }

    public function testPostSlidesReorderPositionInvalidlayoutAlias()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->layoutAlias = TestUtils::invalidizeValue("layoutAlias", $request->layoutAlias, "string");
        $this->initialize("postSlidesReorderPosition", "layoutAlias", $request->layoutAlias);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "layoutAlias");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "layoutAlias");
        }
    }
    private function getPutSlidesSlideRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putSlidesSlide", "slideIndex", "int");
        $testslideDto = TestUtils::getTestValue("putSlidesSlide", "slideDto", "\Aspose\Slides\Cloud\Sdk\Model\Slide");
        $testpassword = TestUtils::getTestValue("putSlidesSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("putSlidesSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("putSlidesSlide", "storage", "string");
        $request = new Requests\PutSlidesSlideRequest($testname, $testslideIndex, $testslideDto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSlide
     * Update slide properties.
     */
    public function testPutSlidesSlide()
    {
        $request = $this->getPutSlidesSlideRequest();
        $this->initialize("putSlidesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSlidesSlideInvalidname()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSlidesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "name");
        }
    }

    public function testPutSlidesSlideInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putSlidesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "slideIndex");
        }
    }

    public function testPutSlidesSlideInvalidslideDto()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->slideDto = TestUtils::invalidizeValue("slideDto", $request->slideDto, "\Aspose\Slides\Cloud\Sdk\Model\Slide");
        $this->initialize("putSlidesSlide", "slideDto", $request->slideDto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "slideDto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "slideDto");
        }
    }

    public function testPutSlidesSlideInvalidpassword()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlidesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "password");
        }
    }

    public function testPutSlidesSlideInvalidfolder()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSlidesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "folder");
        }
    }

    public function testPutSlidesSlideInvalidstorage()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSlidesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "storage");
        }
    }
    private function getPutSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideBackground", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putSlidesSlideBackground", "slideIndex", "int");
        $testbackground = TestUtils::getTestValue("putSlidesSlideBackground", "background", "\Aspose\Slides\Cloud\Sdk\Model\SlideBackground");
        $testfolder = TestUtils::getTestValue("putSlidesSlideBackground", "folder", "string");
        $testpassword = TestUtils::getTestValue("putSlidesSlideBackground", "password", "string");
        $teststorage = TestUtils::getTestValue("putSlidesSlideBackground", "storage", "string");
        $testcolor = TestUtils::getTestValue("putSlidesSlideBackground", "color", "string");
        $request = new Requests\PutSlidesSlideBackgroundRequest($testname, $testslideIndex, $testbackground, $testfolder, $testpassword, $teststorage, $testcolor);
        return $request;
    }

    /**
     * Test case for putSlidesSlideBackground
     * Set presentation slide background color.
     */
    public function testPutSlidesSlideBackground()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $this->initialize("putSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "name");
        }
    }

    public function testPutSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "slideIndex");
        }
    }

    public function testPutSlidesSlideBackgroundInvalidbackground()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->background = TestUtils::invalidizeValue("background", $request->background, "\Aspose\Slides\Cloud\Sdk\Model\SlideBackground");
        $this->initialize("putSlidesSlideBackground", "background", $request->background);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "background");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "background");
        }
    }

    public function testPutSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "folder");
        }
    }

    public function testPutSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "password");
        }
    }

    public function testPutSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "storage");
        }
    }

    public function testPutSlidesSlideBackgroundInvalidcolor()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->color = TestUtils::invalidizeValue("color", $request->color, "string");
        $this->initialize("putSlidesSlideBackground", "color", $request->color);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "color");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "color");
        }
    }
}
