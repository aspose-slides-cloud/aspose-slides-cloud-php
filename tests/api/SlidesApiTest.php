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
        $testname = TestUtils::getTestValue("deleteSlideByIndex", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideByIndex", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideByIndex", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideByIndex", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideByIndex", "storage", $this->values);
        $request = new Requests\DeleteSlideByIndexRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideByIndex
     * Delete a presentation slide by its index.
     */
    public function testDeleteSlideByIndex()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideByIndex");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlideByIndexInvalidname()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideByIndex", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidslideIndex()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideByIndex", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidpassword()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideByIndex", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidfolder()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideByIndex", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidstorage()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideByIndex", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesCleanSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "name", $this->values);
        $testslides = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "slides", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesCleanSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidname()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesCleanSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidslides()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->slides = TestUtils::invalidizeValue("slides", "deleteSlidesCleanSlidesList", $request->slides, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "slides", $request->slides);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "slides", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "slides", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidpassword()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesCleanSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidfolder()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesCleanSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidstorage()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesCleanSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesSlideBackground", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlidesSlideBackground", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesSlideBackground", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesSlideBackground", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesSlideBackground", "storage", $this->values);
        $request = new Requests\DeleteSlidesSlideBackgroundRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesSlideBackground
     * Remove background from a slide.
     */
    public function testDeleteSlidesSlideBackground()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesSlideBackground", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlidesSlideBackground", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesSlideBackground", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesSlideBackground", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesSlideBackground", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlideWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlideWithFormat", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlideWithFormat", "slideIndex", $this->values);
        $testformat = TestUtils::getTestValue("getSlideWithFormat", "format", $this->values);
        $testwidth = TestUtils::getTestValue("getSlideWithFormat", "width", $this->values);
        $testheight = TestUtils::getTestValue("getSlideWithFormat", "height", $this->values);
        $testpassword = TestUtils::getTestValue("getSlideWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlideWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlideWithFormat", "storage", $this->values);
        $testoutPath = TestUtils::getTestValue("getSlideWithFormat", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("getSlideWithFormat", "fontsFolder", $this->values);
        $request = new Requests\GetSlideWithFormatRequest($testname, $testslideIndex, $testformat, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for getSlideWithFormat
     * Convert a slide to some format.
     */
    public function testGetSlideWithFormat()
    {
        $request = $this->getGetSlideWithFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", "getSlideWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidslideIndex()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlideWithFormat", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidformat()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getSlideWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidwidth()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->width = TestUtils::invalidizeValue("width", "getSlideWithFormat", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "width", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidheight()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->height = TestUtils::invalidizeValue("height", "getSlideWithFormat", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "height", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidpassword()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlideWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidfolder()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlideWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidstorage()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlideWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "storage", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidoutPath()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "getSlideWithFormat", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "outPath", $this->okToFailValues);
        }
    }

    public function testGetSlideWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetSlideWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "getSlideWithFormat", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideWithFormat", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideWithFormat", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlide", "storage", $this->values);
        $request = new Requests\GetSlidesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlide
     * Read a slide info.
     */
    public function testGetSlidesSlide()
    {
        $request = $this->getGetSlidesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesSlideInvalidname()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidpassword()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidfolder()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidstorage()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideBackground", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideBackground", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideBackground", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideBackground", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideBackground", "storage", $this->values);
        $request = new Requests\GetSlidesSlideBackgroundRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideBackground
     * Read background info for a slide.
     */
    public function testGetSlidesSlideBackground()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideBackground", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideBackground", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideBackground", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideBackground", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideBackground", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideCommentsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideComments", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideComments", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideComments", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideComments", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideComments", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideComments");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesSlideCommentsInvalidname()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideComments", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideComments", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidpassword()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideComments", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidfolder()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideComments", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidstorage()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideComments", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlidesList", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlidesList", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesSlidesListInvalidname()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlidesListInvalidpassword()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlidesListInvalidfolder()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlidesListInvalidstorage()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlideSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postSlideSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlideSaveAs", "slideIndex", $this->values);
        $testformat = TestUtils::getTestValue("postSlideSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postSlideSaveAs", "options", $this->values);
        $testwidth = TestUtils::getTestValue("postSlideSaveAs", "width", $this->values);
        $testheight = TestUtils::getTestValue("postSlideSaveAs", "height", $this->values);
        $testpassword = TestUtils::getTestValue("postSlideSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlideSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlideSaveAs", "storage", $this->values);
        $testoutPath = TestUtils::getTestValue("postSlideSaveAs", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postSlideSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PostSlideSaveAsRequest($testname, $testslideIndex, $testformat, $testoptions, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlideSaveAs
     * Convert a slide to some format.
     */
    public function testPostSlideSaveAs()
    {
        $request = $this->getPostSlideSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", "postSlideSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidslideIndex()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlideSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidformat()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlideSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidoptions()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "postSlideSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidwidth()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->width = TestUtils::invalidizeValue("width", "postSlideSaveAs", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "width", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidheight()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->height = TestUtils::invalidizeValue("height", "postSlideSaveAs", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "height", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidpassword()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlideSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidfolder()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlideSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidstorage()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlideSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidoutPath()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "postSlideSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postSlideSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlidesAddRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesAdd", "name", $this->values);
        $testposition = TestUtils::getTestValue("postSlidesAdd", "position", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesAdd", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesAdd", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesAdd", "storage", $this->values);
        $testlayoutAlias = TestUtils::getTestValue("postSlidesAdd", "layoutAlias", $this->values);
        $request = new Requests\PostSlidesAddRequest($testname, $testposition, $testpassword, $testfolder, $teststorage, $testlayoutAlias);
        return $request;
    }

    /**
     * Test case for postSlidesAdd
     * Create a slide.
     */
    public function testPostSlidesAdd()
    {
        $request = $this->getPostSlidesAddRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesAdd");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesAddInvalidname()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesAdd", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidposition()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->position = TestUtils::invalidizeValue("position", "postSlidesAdd", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "position", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidpassword()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesAdd", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidfolder()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesAdd", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidstorage()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesAdd", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidlayoutAlias()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->layoutAlias = TestUtils::invalidizeValue("layoutAlias", "postSlidesAdd", $request->layoutAlias, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "layoutAlias", $request->layoutAlias);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "layoutAlias", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "layoutAlias", $this->okToFailValues);
        }
    }
    private function getPostSlidesCopyRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesCopy", "name", $this->values);
        $testslideToCopy = TestUtils::getTestValue("postSlidesCopy", "slideToCopy", $this->values);
        $testposition = TestUtils::getTestValue("postSlidesCopy", "position", $this->values);
        $testsource = TestUtils::getTestValue("postSlidesCopy", "source", $this->values);
        $testsourcePassword = TestUtils::getTestValue("postSlidesCopy", "sourcePassword", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesCopy", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesCopy", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesCopy", "storage", $this->values);
        $request = new Requests\PostSlidesCopyRequest($testname, $testslideToCopy, $testposition, $testsource, $testsourcePassword, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesCopy
     * Copy a slide from the current or another presentation.
     */
    public function testPostSlidesCopy()
    {
        $request = $this->getPostSlidesCopyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesCopy");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesCopyInvalidname()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesCopy", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidslideToCopy()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->slideToCopy = TestUtils::invalidizeValue("slideToCopy", "postSlidesCopy", $request->slideToCopy, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "slideToCopy", $request->slideToCopy);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "slideToCopy", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "slideToCopy", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidposition()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->position = TestUtils::invalidizeValue("position", "postSlidesCopy", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "position", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidsource()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->source = TestUtils::invalidizeValue("source", "postSlidesCopy", $request->source, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "source", $request->source);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "source", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "source", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidsourcePassword()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->sourcePassword = TestUtils::invalidizeValue("sourcePassword", "postSlidesCopy", $request->sourcePassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "sourcePassword", $request->sourcePassword);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "sourcePassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "sourcePassword", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidpassword()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesCopy", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidfolder()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesCopy", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidstorage()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesCopy", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesReorderRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesReorder", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlidesReorder", "slideIndex", $this->values);
        $testnewPosition = TestUtils::getTestValue("postSlidesReorder", "newPosition", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesReorder", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesReorder", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesReorder", "storage", $this->values);
        $request = new Requests\PostSlidesReorderRequest($testname, $testslideIndex, $testnewPosition, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesReorder
     * Reorder presentation slide position.
     */
    public function testPostSlidesReorder()
    {
        $request = $this->getPostSlidesReorderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesReorder");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesReorderInvalidname()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesReorder", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidslideIndex()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlidesReorder", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidnewPosition()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->newPosition = TestUtils::invalidizeValue("newPosition", "postSlidesReorder", $request->newPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "newPosition", $request->newPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "newPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "newPosition", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidpassword()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesReorder", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidfolder()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesReorder", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidstorage()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesReorder", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesReorderManyRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesReorderMany", "name", $this->values);
        $testoldPositions = TestUtils::getTestValue("postSlidesReorderMany", "oldPositions", $this->values);
        $testnewPositions = TestUtils::getTestValue("postSlidesReorderMany", "newPositions", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesReorderMany", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesReorderMany", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesReorderMany", "storage", $this->values);
        $request = new Requests\PostSlidesReorderManyRequest($testname, $testoldPositions, $testnewPositions, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesReorderMany
     * Reorder presentation slides positions.
     */
    public function testPostSlidesReorderMany()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesReorderMany");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesReorderManyInvalidname()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesReorderMany", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidoldPositions()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->oldPositions = TestUtils::invalidizeValue("oldPositions", "postSlidesReorderMany", $request->oldPositions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "oldPositions", $request->oldPositions);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "oldPositions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "oldPositions", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidnewPositions()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->newPositions = TestUtils::invalidizeValue("newPositions", "postSlidesReorderMany", $request->newPositions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "newPositions", $request->newPositions);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "newPositions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "newPositions", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidpassword()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesReorderMany", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidfolder()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesReorderMany", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidstorage()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesReorderMany", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesReorderPositionRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesReorderPosition", "name", $this->values);
        $testoldPosition = TestUtils::getTestValue("postSlidesReorderPosition", "oldPosition", $this->values);
        $testnewPosition = TestUtils::getTestValue("postSlidesReorderPosition", "newPosition", $this->values);
        $testoldPositions = TestUtils::getTestValue("postSlidesReorderPosition", "oldPositions", $this->values);
        $testnewPositions = TestUtils::getTestValue("postSlidesReorderPosition", "newPositions", $this->values);
        $testslideToCopy = TestUtils::getTestValue("postSlidesReorderPosition", "slideToCopy", $this->values);
        $testposition = TestUtils::getTestValue("postSlidesReorderPosition", "position", $this->values);
        $testslideToClone = TestUtils::getTestValue("postSlidesReorderPosition", "slideToClone", $this->values);
        $testsource = TestUtils::getTestValue("postSlidesReorderPosition", "source", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesReorderPosition", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesReorderPosition", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesReorderPosition", "storage", $this->values);
        $testlayoutAlias = TestUtils::getTestValue("postSlidesReorderPosition", "layoutAlias", $this->values);
        $request = new Requests\PostSlidesReorderPositionRequest($testname, $testoldPosition, $testnewPosition, $testoldPositions, $testnewPositions, $testslideToCopy, $testposition, $testslideToClone, $testsource, $testpassword, $testfolder, $teststorage, $testlayoutAlias);
        return $request;
    }

    /**
     * Test case for postSlidesReorderPosition
     * Create, copy or reorder presentation slides.
     */
    public function testPostSlidesReorderPosition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesReorderPosition");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesReorderPositionInvalidname()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesReorderPosition", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidoldPosition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->oldPosition = TestUtils::invalidizeValue("oldPosition", "postSlidesReorderPosition", $request->oldPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "oldPosition", $request->oldPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "oldPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "oldPosition", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidnewPosition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->newPosition = TestUtils::invalidizeValue("newPosition", "postSlidesReorderPosition", $request->newPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "newPosition", $request->newPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "newPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "newPosition", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidoldPositions()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->oldPositions = TestUtils::invalidizeValue("oldPositions", "postSlidesReorderPosition", $request->oldPositions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "oldPositions", $request->oldPositions);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "oldPositions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "oldPositions", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidnewPositions()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->newPositions = TestUtils::invalidizeValue("newPositions", "postSlidesReorderPosition", $request->newPositions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "newPositions", $request->newPositions);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "newPositions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "newPositions", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidslideToCopy()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->slideToCopy = TestUtils::invalidizeValue("slideToCopy", "postSlidesReorderPosition", $request->slideToCopy, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "slideToCopy", $request->slideToCopy);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "slideToCopy", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "slideToCopy", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidposition()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->position = TestUtils::invalidizeValue("position", "postSlidesReorderPosition", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "position", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidslideToClone()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->slideToClone = TestUtils::invalidizeValue("slideToClone", "postSlidesReorderPosition", $request->slideToClone, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "slideToClone", $request->slideToClone);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "slideToClone", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "slideToClone", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidsource()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->source = TestUtils::invalidizeValue("source", "postSlidesReorderPosition", $request->source, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "source", $request->source);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "source", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "source", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidpassword()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesReorderPosition", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidfolder()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesReorderPosition", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidstorage()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesReorderPosition", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderPositionInvalidlayoutAlias()
    {
        $request = $this->getPostSlidesReorderPositionRequest();
        $request->layoutAlias = TestUtils::invalidizeValue("layoutAlias", "postSlidesReorderPosition", $request->layoutAlias, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderPosition", "layoutAlias", $request->layoutAlias);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesReorderPosition($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderPosition", "layoutAlias", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderPosition", "layoutAlias", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlidesSlide", "slideIndex", $this->values);
        $testslideDto = TestUtils::getTestValue("putSlidesSlide", "slideDto", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlide", "storage", $this->values);
        $request = new Requests\PutSlidesSlideRequest($testname, $testslideIndex, $testslideDto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSlide
     * Update a slide.
     */
    public function testPutSlidesSlide()
    {
        $request = $this->getPutSlidesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSlidesSlideInvalidname()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlidesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidslideDto()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->slideDto = TestUtils::invalidizeValue("slideDto", "putSlidesSlide", $request->slideDto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "slideDto", $request->slideDto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "slideDto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "slideDto", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidpassword()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidfolder()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidstorage()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideBackground", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlidesSlideBackground", "slideIndex", $this->values);
        $testbackground = TestUtils::getTestValue("putSlidesSlideBackground", "background", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlideBackground", "folder", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlideBackground", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlideBackground", "storage", $this->values);
        $testcolor = TestUtils::getTestValue("putSlidesSlideBackground", "color", $this->values);
        $request = new Requests\PutSlidesSlideBackgroundRequest($testname, $testslideIndex, $testbackground, $testfolder, $testpassword, $teststorage, $testcolor);
        return $request;
    }

    /**
     * Test case for putSlidesSlideBackground
     * Set background for a slide.
     */
    public function testPutSlidesSlideBackground()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlideBackground", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlidesSlideBackground", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidbackground()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->background = TestUtils::invalidizeValue("background", "putSlidesSlideBackground", $request->background, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "background", $request->background);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "background", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "background", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlideBackground", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlideBackground", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlideBackground", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidcolor()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->color = TestUtils::invalidizeValue("color", "putSlidesSlideBackground", $request->color, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "color", $request->color);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "color", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "color", $this->okToFailValues);
        }
    }
}
