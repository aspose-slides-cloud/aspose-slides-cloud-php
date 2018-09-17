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
use Aspose\Slides\Cloud\Sdk\Api\TextApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class TextApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new TextApi(null, $this->config);
    }

    private function getGetSlidesPresentationTextItemsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPresentationTextItems", "name", "string");
        $testwithEmpty = TestUtils::getTestValue("getSlidesPresentationTextItems", "withEmpty", "bool");
        $testpassword = TestUtils::getTestValue("getSlidesPresentationTextItems", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesPresentationTextItems", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesPresentationTextItems", "storage", "string");
        $request = new Requests\GetSlidesPresentationTextItemsRequest($testname, $testwithEmpty, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesPresentationTextItems
     * Extract presentation text items.
     */
    public function testGetSlidesPresentationTextItems()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $this->initialize("getSlidesPresentationTextItems", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPresentationTextItems");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidname()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesPresentationTextItems", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "name");
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidwithEmpty()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->withEmpty = TestUtils::invalidizeValue("withEmpty", $request->withEmpty, "bool");
        $this->initialize("getSlidesPresentationTextItems", "withEmpty", $request->withEmpty);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "withEmpty");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "withEmpty");
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidpassword()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesPresentationTextItems", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "password");
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidfolder()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesPresentationTextItems", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "folder");
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidstorage()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesPresentationTextItems", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "storage");
        }
    }
    private function getGetSlidesSlideTextItemsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideTextItems", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideTextItems", "slideIndex", "int");
        $testwithEmpty = TestUtils::getTestValue("getSlidesSlideTextItems", "withEmpty", "bool");
        $testpassword = TestUtils::getTestValue("getSlidesSlideTextItems", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesSlideTextItems", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesSlideTextItems", "storage", "string");
        $request = new Requests\GetSlidesSlideTextItemsRequest($testname, $testslideIndex, $testwithEmpty, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideTextItems
     * Extract slide text items.
     */
    public function testGetSlidesSlideTextItems()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $this->initialize("getSlidesSlideTextItems", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideTextItems");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesSlideTextItemsInvalidname()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesSlideTextItems", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "name");
        }
    }

    public function testGetSlidesSlideTextItemsInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesSlideTextItems", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "slideIndex");
        }
    }

    public function testGetSlidesSlideTextItemsInvalidwithEmpty()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->withEmpty = TestUtils::invalidizeValue("withEmpty", $request->withEmpty, "bool");
        $this->initialize("getSlidesSlideTextItems", "withEmpty", $request->withEmpty);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "withEmpty");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "withEmpty");
        }
    }

    public function testGetSlidesSlideTextItemsInvalidpassword()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesSlideTextItems", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "password");
        }
    }

    public function testGetSlidesSlideTextItemsInvalidfolder()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesSlideTextItems", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "folder");
        }
    }

    public function testGetSlidesSlideTextItemsInvalidstorage()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesSlideTextItems", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "storage");
        }
    }
    private function getPostSlidesPresentationReplaceTextRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesPresentationReplaceText", "name", "string");
        $testoldValue = TestUtils::getTestValue("postSlidesPresentationReplaceText", "oldValue", "string");
        $testnewValue = TestUtils::getTestValue("postSlidesPresentationReplaceText", "newValue", "string");
        $testignoreCase = TestUtils::getTestValue("postSlidesPresentationReplaceText", "ignoreCase", "bool");
        $testpassword = TestUtils::getTestValue("postSlidesPresentationReplaceText", "password", "string");
        $testfolder = TestUtils::getTestValue("postSlidesPresentationReplaceText", "folder", "string");
        $teststorage = TestUtils::getTestValue("postSlidesPresentationReplaceText", "storage", "string");
        $request = new Requests\PostSlidesPresentationReplaceTextRequest($testname, $testoldValue, $testnewValue, $testignoreCase, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesPresentationReplaceText
     * Replace text with a new value.
     */
    public function testPostSlidesPresentationReplaceText()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $this->initialize("postSlidesPresentationReplaceText", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesPresentationReplaceText");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidname()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesPresentationReplaceText", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "name");
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidoldValue()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->oldValue = TestUtils::invalidizeValue("oldValue", $request->oldValue, "string");
        $this->initialize("postSlidesPresentationReplaceText", "oldValue", $request->oldValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "oldValue");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "oldValue");
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidnewValue()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->newValue = TestUtils::invalidizeValue("newValue", $request->newValue, "string");
        $this->initialize("postSlidesPresentationReplaceText", "newValue", $request->newValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "newValue");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "newValue");
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidignoreCase()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->ignoreCase = TestUtils::invalidizeValue("ignoreCase", $request->ignoreCase, "bool");
        $this->initialize("postSlidesPresentationReplaceText", "ignoreCase", $request->ignoreCase);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "ignoreCase");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "ignoreCase");
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidpassword()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesPresentationReplaceText", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "password");
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidfolder()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesPresentationReplaceText", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "folder");
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidstorage()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesPresentationReplaceText", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "storage");
        }
    }
    private function getPostSlidesSlideReplaceTextRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSlideReplaceText", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postSlidesSlideReplaceText", "slideIndex", "int");
        $testoldValue = TestUtils::getTestValue("postSlidesSlideReplaceText", "oldValue", "string");
        $testnewValue = TestUtils::getTestValue("postSlidesSlideReplaceText", "newValue", "string");
        $testignoreCase = TestUtils::getTestValue("postSlidesSlideReplaceText", "ignoreCase", "bool");
        $testpassword = TestUtils::getTestValue("postSlidesSlideReplaceText", "password", "string");
        $testfolder = TestUtils::getTestValue("postSlidesSlideReplaceText", "folder", "string");
        $teststorage = TestUtils::getTestValue("postSlidesSlideReplaceText", "storage", "string");
        $request = new Requests\PostSlidesSlideReplaceTextRequest($testname, $testslideIndex, $testoldValue, $testnewValue, $testignoreCase, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesSlideReplaceText
     * Replace text with a new value.
     */
    public function testPostSlidesSlideReplaceText()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $this->initialize("postSlidesSlideReplaceText", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSlideReplaceText");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidname()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesSlideReplaceText", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "name");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidslideIndex()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postSlidesSlideReplaceText", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "slideIndex");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidoldValue()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->oldValue = TestUtils::invalidizeValue("oldValue", $request->oldValue, "string");
        $this->initialize("postSlidesSlideReplaceText", "oldValue", $request->oldValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "oldValue");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "oldValue");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidnewValue()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->newValue = TestUtils::invalidizeValue("newValue", $request->newValue, "string");
        $this->initialize("postSlidesSlideReplaceText", "newValue", $request->newValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "newValue");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "newValue");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidignoreCase()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->ignoreCase = TestUtils::invalidizeValue("ignoreCase", $request->ignoreCase, "bool");
        $this->initialize("postSlidesSlideReplaceText", "ignoreCase", $request->ignoreCase);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "ignoreCase");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "ignoreCase");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidpassword()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesSlideReplaceText", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "password");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidfolder()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesSlideReplaceText", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "folder");
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidstorage()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesSlideReplaceText", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "storage");
        }
    }
}
