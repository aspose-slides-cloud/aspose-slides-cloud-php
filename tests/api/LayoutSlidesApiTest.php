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
use Aspose\Slides\Cloud\Sdk\Api\LayoutSlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class LayoutSlidesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new LayoutSlidesApi(null, $this->config);
    }

    private function getGetLayoutSlideRequest()
    {
        $testname = TestUtils::getTestValue("getLayoutSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getLayoutSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getLayoutSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getLayoutSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getLayoutSlide", "storage", $this->values);
        $request = new Requests\GetLayoutSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getLayoutSlide
     * Read presentation layoutSlide info.
     */
    public function testGetLayoutSlide()
    {
        $request = $this->getGetLayoutSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getLayoutSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetLayoutSlideInvalidname()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getLayoutSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidslideIndex()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getLayoutSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidpassword()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getLayoutSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidfolder()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getLayoutSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidstorage()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getLayoutSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetLayoutSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getLayoutSlidesList", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getLayoutSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getLayoutSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getLayoutSlidesList", "storage", $this->values);
        $request = new Requests\GetLayoutSlidesListRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getLayoutSlidesList
     * Read presentation layoutSlides info.
     */
    public function testGetLayoutSlidesList()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getLayoutSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetLayoutSlidesListInvalidname()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "getLayoutSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlidesListInvalidpassword()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "getLayoutSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlidesListInvalidfolder()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getLayoutSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlidesListInvalidstorage()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getLayoutSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getPostCopyLayoutSlideFromSourcePresentationRequest()
    {
        $testname = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "name", $this->values);
        $testcloneFrom = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $this->values);
        $testcloneFromPosition = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $this->values);
        $testcloneFromPassword = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $this->values);
        $testcloneFromStorage = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $this->values);
        $testpassword = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "storage", $this->values);
        $request = new Requests\PostCopyLayoutSlideFromSourcePresentationRequest($testname, $testcloneFrom, $testcloneFromPosition, $testcloneFromPassword, $testcloneFromStorage, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postCopyLayoutSlideFromSourcePresentation
     * Copy layoutSlide from source presentation.
     */
    public function testPostCopyLayoutSlideFromSourcePresentation()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postCopyLayoutSlideFromSourcePresentation");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidname()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", "postCopyLayoutSlideFromSourcePresentation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "name", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFrom()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFrom = TestUtils::invalidizeValue("cloneFrom", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFrom, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $request->cloneFrom);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromPosition()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromPosition = TestUtils::invalidizeValue("cloneFromPosition", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFromPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $request->cloneFromPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromPassword()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromPassword = TestUtils::invalidizeValue("cloneFromPassword", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFromPassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $request->cloneFromPassword);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromStorage()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromStorage = TestUtils::invalidizeValue("cloneFromStorage", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFromStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $request->cloneFromStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidpassword()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", "postCopyLayoutSlideFromSourcePresentation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "password", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidfolder()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postCopyLayoutSlideFromSourcePresentation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "folder", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidstorage()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postCopyLayoutSlideFromSourcePresentation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "storage", $this->okToFailValues);
        }
    }
    private function getPutLayoutSlideRequest()
    {
        $testname = TestUtils::getTestValue("putLayoutSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putLayoutSlide", "slideIndex", $this->values);
        $testslideDto = TestUtils::getTestValue("putLayoutSlide", "slideDto", $this->values);
        $testpassword = TestUtils::getTestValue("putLayoutSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putLayoutSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putLayoutSlide", "storage", $this->values);
        $request = new Requests\PutLayoutSlideRequest($testname, $testslideIndex, $testslideDto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putLayoutSlide
     * Update a layoutSlide.
     */
    public function testPutLayoutSlide()
    {
        $request = $this->getPutLayoutSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putLayoutSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutLayoutSlideInvalidname()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "putLayoutSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "name", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidslideIndex()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putLayoutSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidslideDto()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->slideDto = TestUtils::invalidizeValue("slideDto", "putLayoutSlide", $request->slideDto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "slideDto", $request->slideDto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "slideDto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "slideDto", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidpassword()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "putLayoutSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "password", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidfolder()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putLayoutSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidstorage()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putLayoutSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "storage", $this->okToFailValues);
        }
    }
}
