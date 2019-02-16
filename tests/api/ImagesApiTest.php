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
use Aspose\Slides\Cloud\Sdk\Api\ImagesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class ImagesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new ImagesApi(null, $this->config);
    }

    private function getGetSlidesImageWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesImageWithFormat", "name", $this->values);
        $testindex = TestUtils::getTestValue("getSlidesImageWithFormat", "index", $this->values);
        $testformat = TestUtils::getTestValue("getSlidesImageWithFormat", "format", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesImageWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesImageWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesImageWithFormat", "storage", $this->values);
        $request = new Requests\GetSlidesImageWithFormatRequest($testname, $testindex, $testformat, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesImageWithFormat
     * Get image in specified format.
     */
    public function testGetSlidesImageWithFormat()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesImageWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetSlidesImageWithFormatInvalidname()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesImageWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidindex()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->index = TestUtils::invalidizeValue("index", "getSlidesImageWithFormat", $request->index, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "index", $request->index);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "index", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "index", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidformat()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getSlidesImageWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidpassword()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesImageWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidfolder()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesImageWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidstorage()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesImageWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesImagesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesImages", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesImages", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesImages", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesImages", "storage", $this->values);
        $request = new Requests\GetSlidesImagesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesImages
     * Read presentation images info.
     */
    public function testGetSlidesImages()
    {
        $request = $this->getGetSlidesImagesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesImages");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesImagesInvalidname()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesImages", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesImagesInvalidpassword()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesImages", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesImagesInvalidfolder()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesImages", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesImagesInvalidstorage()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesImages", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideImagesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideImages", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideImages", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideImages", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideImages", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideImages", "storage", $this->values);
        $request = new Requests\GetSlidesSlideImagesRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideImages
     * Read slide images info.
     */
    public function testGetSlidesSlideImages()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideImages");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesSlideImagesInvalidname()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideImages", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideImages", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidpassword()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideImages", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidfolder()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideImages", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidstorage()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideImages", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "storage", $this->okToFailValues);
        }
    }
}
