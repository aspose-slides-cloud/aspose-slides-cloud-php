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
use Aspose\Slides\Cloud\Sdk\Api\MasterSlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class MasterSlidesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new MasterSlidesApi(null, $this->config);
    }

    private function getGetMasterSlideRequest()
    {
        $testname = TestUtils::getTestValue("getMasterSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getMasterSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getMasterSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getMasterSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getMasterSlide", "storage", $this->values);
        $request = new Requests\GetMasterSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getMasterSlide
     * Read presentation masterSlide info.
     */
    public function testGetMasterSlide()
    {
        $request = $this->getGetMasterSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getMasterSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetMasterSlideInvalidname()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getMasterSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidslideIndex()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getMasterSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidpassword()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getMasterSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidfolder()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getMasterSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidstorage()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getMasterSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetMasterSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getMasterSlidesList", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getMasterSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getMasterSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getMasterSlidesList", "storage", $this->values);
        $request = new Requests\GetMasterSlidesListRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getMasterSlidesList
     * Read presentation masterSlides info.
     */
    public function testGetMasterSlidesList()
    {
        $request = $this->getGetMasterSlidesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getMasterSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetMasterSlidesListInvalidname()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "getMasterSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testGetMasterSlidesListInvalidpassword()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "getMasterSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testGetMasterSlidesListInvalidfolder()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getMasterSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testGetMasterSlidesListInvalidstorage()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getMasterSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getPostCopyMasterSlideFromSourcePresentationRequest()
    {
        $testname = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "name", $this->values);
        $testcloneFrom = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $this->values);
        $testcloneFromPosition = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $this->values);
        $testcloneFromPassword = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $this->values);
        $testcloneFromStorage = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $this->values);
        $testapplyToAll = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "applyToAll", $this->values);
        $testpassword = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "storage", $this->values);
        $request = new Requests\PostCopyMasterSlideFromSourcePresentationRequest($testname, $testcloneFrom, $testcloneFromPosition, $testcloneFromPassword, $testcloneFromStorage, $testapplyToAll, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postCopyMasterSlideFromSourcePresentation
     * Copy masterSlide from source presentation.
     */
    public function testPostCopyMasterSlideFromSourcePresentation()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postCopyMasterSlideFromSourcePresentation");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidname()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", "postCopyMasterSlideFromSourcePresentation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "name", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFrom()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFrom = TestUtils::invalidizeValue("cloneFrom", "postCopyMasterSlideFromSourcePresentation", $request->cloneFrom, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $request->cloneFrom);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFrom", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromPosition()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromPosition = TestUtils::invalidizeValue("cloneFromPosition", "postCopyMasterSlideFromSourcePresentation", $request->cloneFromPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $request->cloneFromPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromPassword()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromPassword = TestUtils::invalidizeValue("cloneFromPassword", "postCopyMasterSlideFromSourcePresentation", $request->cloneFromPassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $request->cloneFromPassword);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromStorage()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromStorage = TestUtils::invalidizeValue("cloneFromStorage", "postCopyMasterSlideFromSourcePresentation", $request->cloneFromStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $request->cloneFromStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidapplyToAll()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->applyToAll = TestUtils::invalidizeValue("applyToAll", "postCopyMasterSlideFromSourcePresentation", $request->applyToAll, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "applyToAll", $request->applyToAll);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "applyToAll", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "applyToAll", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidpassword()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", "postCopyMasterSlideFromSourcePresentation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "password", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidfolder()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postCopyMasterSlideFromSourcePresentation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "folder", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidstorage()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postCopyMasterSlideFromSourcePresentation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "storage", $this->okToFailValues);
        }
    }
}
