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
        $testname = TestUtils::getTestValue("getSlidesImageWithFormat", "name", "string");
        $testindex = TestUtils::getTestValue("getSlidesImageWithFormat", "index", "int");
        $testformat = TestUtils::getTestValue("getSlidesImageWithFormat", "format", "string");
        $testpassword = TestUtils::getTestValue("getSlidesImageWithFormat", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesImageWithFormat", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesImageWithFormat", "storage", "string");
        $request = new Requests\GetSlidesImageWithFormatRequest($testname, $testindex, $testformat, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesImageWithFormat
     * Gets image in specified format.
     */
    public function testGetSlidesImageWithFormat()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $this->initialize("getSlidesImageWithFormat", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesImageWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "name");
        }
    }

    public function testGetSlidesImageWithFormatInvalidindex()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->index = TestUtils::invalidizeValue("index", $request->index, "int");
        $this->initialize("getSlidesImageWithFormat", "index", $request->index);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "index");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "index");
        }
    }

    public function testGetSlidesImageWithFormatInvalidformat()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "string");
        $this->initialize("getSlidesImageWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "format");
        }
    }

    public function testGetSlidesImageWithFormatInvalidpassword()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesImageWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "password");
        }
    }

    public function testGetSlidesImageWithFormatInvalidfolder()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesImageWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "folder");
        }
    }

    public function testGetSlidesImageWithFormatInvalidstorage()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesImageWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "storage");
        }
    }
    private function getGetSlidesImagesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesImages", "name", "string");
        $testpassword = TestUtils::getTestValue("getSlidesImages", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesImages", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesImages", "storage", "string");
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
        $this->initialize("getSlidesImages", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesImages");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesImagesInvalidname()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesImages", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "name");
        }
    }

    public function testGetSlidesImagesInvalidpassword()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesImages", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "password");
        }
    }

    public function testGetSlidesImagesInvalidfolder()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesImages", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "folder");
        }
    }

    public function testGetSlidesImagesInvalidstorage()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesImages", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "storage");
        }
    }
    private function getGetSlidesSlideImagesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideImages", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideImages", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlidesSlideImages", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesSlideImages", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesSlideImages", "storage", "string");
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
        $this->initialize("getSlidesSlideImages", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideImages");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesSlideImagesInvalidname()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesSlideImages", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "name");
        }
    }

    public function testGetSlidesSlideImagesInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesSlideImages", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "slideIndex");
        }
    }

    public function testGetSlidesSlideImagesInvalidpassword()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesSlideImages", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "password");
        }
    }

    public function testGetSlidesSlideImagesInvalidfolder()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesSlideImages", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "folder");
        }
    }

    public function testGetSlidesSlideImagesInvalidstorage()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesSlideImages", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "storage");
        }
    }
}
