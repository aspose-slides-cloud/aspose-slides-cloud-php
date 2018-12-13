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
        $testname = TestUtils::getTestValue("deleteNotesSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlide", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteNotesSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlide", "storage", "string");
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
        $this->initialize("deleteNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlideInvalidname()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "name");
        }
    }

    public function testDeleteNotesSlideInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "slideIndex");
        }
    }

    public function testDeleteNotesSlideInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "password");
        }
    }

    public function testDeleteNotesSlideInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "folder");
        }
    }

    public function testDeleteNotesSlideInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "storage");
        }
    }
    private function getGetNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlide", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlide", "storage", "string");
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
        $this->initialize("getNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideInvalidname()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "name");
        }
    }

    public function testGetNotesSlideInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "slideIndex");
        }
    }

    public function testGetNotesSlideInvalidpassword()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "password");
        }
    }

    public function testGetNotesSlideInvalidfolder()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "folder");
        }
    }

    public function testGetNotesSlideInvalidstorage()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "storage");
        }
    }
    private function getGetNotesSlideWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideWithFormat", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideWithFormat", "slideIndex", "int");
        $testformat = TestUtils::getTestValue("getNotesSlideWithFormat", "format", "string");
        $testwidth = TestUtils::getTestValue("getNotesSlideWithFormat", "width", "int");
        $testheight = TestUtils::getTestValue("getNotesSlideWithFormat", "height", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideWithFormat", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideWithFormat", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideWithFormat", "storage", "string");
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
        $this->initialize("getNotesSlideWithFormat", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "name");
        }
    }

    public function testGetNotesSlideWithFormatInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "slideIndex");
        }
    }

    public function testGetNotesSlideWithFormatInvalidformat()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "string");
        $this->initialize("getNotesSlideWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "format");
        }
    }

    public function testGetNotesSlideWithFormatInvalidwidth()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->width = TestUtils::invalidizeValue("width", $request->width, "int");
        $this->initialize("getNotesSlideWithFormat", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "width");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "width");
        }
    }

    public function testGetNotesSlideWithFormatInvalidheight()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->height = TestUtils::invalidizeValue("height", $request->height, "int");
        $this->initialize("getNotesSlideWithFormat", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "height");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "height");
        }
    }

    public function testGetNotesSlideWithFormatInvalidpassword()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "password");
        }
    }

    public function testGetNotesSlideWithFormatInvalidfolder()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "folder");
        }
    }

    public function testGetNotesSlideWithFormatInvalidstorage()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "storage");
        }
    }
    private function getPostAddNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("postAddNotesSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postAddNotesSlide", "slideIndex", "int");
        $testdto = TestUtils::getTestValue("postAddNotesSlide", "dto", "\Aspose\Slides\Cloud\Sdk\Model\NotesSlide");
        $testpassword = TestUtils::getTestValue("postAddNotesSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("postAddNotesSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("postAddNotesSlide", "storage", "string");
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
        $this->initialize("postAddNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostAddNotesSlideInvalidname()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postAddNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "name");
        }
    }

    public function testPostAddNotesSlideInvalidslideIndex()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postAddNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "slideIndex");
        }
    }

    public function testPostAddNotesSlideInvaliddto()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\NotesSlide");
        $this->initialize("postAddNotesSlide", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "dto");
        }
    }

    public function testPostAddNotesSlideInvalidpassword()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postAddNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "password");
        }
    }

    public function testPostAddNotesSlideInvalidfolder()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postAddNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "folder");
        }
    }

    public function testPostAddNotesSlideInvalidstorage()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postAddNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "storage");
        }
    }
    private function getPutUpdateNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlide", "slideIndex", "int");
        $testdto = TestUtils::getTestValue("putUpdateNotesSlide", "dto", "\Aspose\Slides\Cloud\Sdk\Model\NotesSlide");
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlide", "storage", "string");
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
        $this->initialize("putUpdateNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutUpdateNotesSlideInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putUpdateNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "name");
        }
    }

    public function testPutUpdateNotesSlideInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putUpdateNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "slideIndex");
        }
    }

    public function testPutUpdateNotesSlideInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\NotesSlide");
        $this->initialize("putUpdateNotesSlide", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "dto");
        }
    }

    public function testPutUpdateNotesSlideInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putUpdateNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "password");
        }
    }

    public function testPutUpdateNotesSlideInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putUpdateNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "folder");
        }
    }

    public function testPutUpdateNotesSlideInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putUpdateNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "storage");
        }
    }
}
