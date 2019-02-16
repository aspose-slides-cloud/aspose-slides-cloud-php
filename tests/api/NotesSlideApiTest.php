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
use Aspose\Slides\Cloud\Sdk\Api\NotesSlideApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class NotesSlideApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new NotesSlideApi(null, $this->config);
    }

    private function getDeleteNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlide", "storage", $this->values);
        $request = new Requests\DeleteNotesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlide
     * Remove Notes Slide.
     */
    public function testDeleteNotesSlide()
    {
        $request = $this->getDeleteNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlideInvalidname()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlide", "storage", $this->values);
        $request = new Requests\GetNotesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlide
     * Read Notes slide info.
     */
    public function testGetNotesSlide()
    {
        $request = $this->getGetNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideInvalidname()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidpassword()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidfolder()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidstorage()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideWithFormat", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideWithFormat", "slideIndex", $this->values);
        $testformat = TestUtils::getTestValue("getNotesSlideWithFormat", "format", $this->values);
        $testwidth = TestUtils::getTestValue("getNotesSlideWithFormat", "width", $this->values);
        $testheight = TestUtils::getTestValue("getNotesSlideWithFormat", "height", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideWithFormat", "storage", $this->values);
        $request = new Requests\GetNotesSlideWithFormatRequest($testname, $testslideIndex, $testformat, $testwidth, $testheight, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideWithFormat
     * Convert Notes Slide to the specified picture format.
     */
    public function testGetNotesSlideWithFormat()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetNotesSlideWithFormatInvalidname()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideWithFormat", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidformat()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getNotesSlideWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidwidth()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->width = TestUtils::invalidizeValue("width", "getNotesSlideWithFormat", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "width", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidheight()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->height = TestUtils::invalidizeValue("height", "getNotesSlideWithFormat", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "height", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidpassword()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidfolder()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidstorage()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "storage", $this->okToFailValues);
        }
    }
    private function getPostAddNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("postAddNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postAddNotesSlide", "slideIndex", $this->values);
        $testdto = TestUtils::getTestValue("postAddNotesSlide", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postAddNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postAddNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postAddNotesSlide", "storage", $this->values);
        $request = new Requests\PostAddNotesSlideRequest($testname, $testslideIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postAddNotesSlide
     * Add new Notes Slide.
     */
    public function testPostAddNotesSlide()
    {
        $request = $this->getPostAddNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostAddNotesSlideInvalidname()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidslideIndex()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postAddNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvaliddto()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postAddNotesSlide", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "dto", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidpassword()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "postAddNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidfolder()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postAddNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidstorage()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postAddNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getPutUpdateNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlide", "slideIndex", $this->values);
        $testdto = TestUtils::getTestValue("putUpdateNotesSlide", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlide", "storage", $this->values);
        $request = new Requests\PutUpdateNotesSlideRequest($testname, $testslideIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlide
     * Update Notes Slide properties.
     */
    public function testPutUpdateNotesSlide()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutUpdateNotesSlideInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putUpdateNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putUpdateNotesSlide", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "dto", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "putUpdateNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putUpdateNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putUpdateNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "storage", $this->okToFailValues);
        }
    }
}
