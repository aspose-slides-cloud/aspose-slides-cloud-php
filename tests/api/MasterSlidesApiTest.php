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
        $testname = TestUtils::getTestValue("getMasterSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getMasterSlide", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getMasterSlide", "password", "string");
        $testfolder = TestUtils::getTestValue("getMasterSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("getMasterSlide", "storage", "string");
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
        $this->initialize("getMasterSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getMasterSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetMasterSlideInvalidname()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getMasterSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "name");
        }
    }

    public function testGetMasterSlideInvalidslideIndex()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getMasterSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "slideIndex");
        }
    }

    public function testGetMasterSlideInvalidpassword()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getMasterSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "password");
        }
    }

    public function testGetMasterSlideInvalidfolder()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getMasterSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "folder");
        }
    }

    public function testGetMasterSlideInvalidstorage()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getMasterSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "storage");
        }
    }
    private function getGetMasterSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getMasterSlidesList", "name", "string");
        $testpassword = TestUtils::getTestValue("getMasterSlidesList", "password", "string");
        $testfolder = TestUtils::getTestValue("getMasterSlidesList", "folder", "string");
        $teststorage = TestUtils::getTestValue("getMasterSlidesList", "storage", "string");
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
        $this->initialize("getMasterSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getMasterSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetMasterSlidesListInvalidname()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getMasterSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "name");
        }
    }

    public function testGetMasterSlidesListInvalidpassword()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getMasterSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "password");
        }
    }

    public function testGetMasterSlidesListInvalidfolder()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getMasterSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "folder");
        }
    }

    public function testGetMasterSlidesListInvalidstorage()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getMasterSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "storage");
        }
    }
    private function getPostCopyMasterSlideFromSourcePresentationRequest()
    {
        $testname = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "name", "string");
        $testcloneFrom = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFrom", "string");
        $testcloneFromPosition = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", "int");
        $testcloneFromPassword = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", "string");
        $testcloneFromStorage = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", "string");
        $testapplyToAll = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "applyToAll", "bool");
        $testpassword = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "password", "string");
        $testfolder = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "folder", "string");
        $teststorage = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "storage", "string");
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
        $this->initialize("postCopyMasterSlideFromSourcePresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postCopyMasterSlideFromSourcePresentation");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidname()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "name");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFrom()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFrom = TestUtils::invalidizeValue("cloneFrom", $request->cloneFrom, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $request->cloneFrom);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFrom");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFrom");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromPosition()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromPosition = TestUtils::invalidizeValue("cloneFromPosition", $request->cloneFromPosition, "int");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $request->cloneFromPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromPosition");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromPassword()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromPassword = TestUtils::invalidizeValue("cloneFromPassword", $request->cloneFromPassword, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $request->cloneFromPassword);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromPassword");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromStorage()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromStorage = TestUtils::invalidizeValue("cloneFromStorage", $request->cloneFromStorage, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $request->cloneFromStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromStorage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidapplyToAll()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->applyToAll = TestUtils::invalidizeValue("applyToAll", $request->applyToAll, "bool");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "applyToAll", $request->applyToAll);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "applyToAll");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "applyToAll");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidpassword()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "password");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidfolder()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "folder");
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidstorage()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postCopyMasterSlideFromSourcePresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "storage");
        }
    }
}
