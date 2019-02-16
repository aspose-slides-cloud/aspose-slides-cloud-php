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
        $testname = TestUtils::getTestValue("getSlidesPresentationTextItems", "name", $this->values);
        $testwithEmpty = TestUtils::getTestValue("getSlidesPresentationTextItems", "withEmpty", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesPresentationTextItems", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesPresentationTextItems", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesPresentationTextItems", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPresentationTextItems");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidname()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesPresentationTextItems", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidwithEmpty()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->withEmpty = TestUtils::invalidizeValue("withEmpty", "getSlidesPresentationTextItems", $request->withEmpty, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "withEmpty", $request->withEmpty);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "withEmpty", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "withEmpty", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidpassword()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesPresentationTextItems", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidfolder()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesPresentationTextItems", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidstorage()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesPresentationTextItems", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideTextItemsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideTextItems", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideTextItems", "slideIndex", $this->values);
        $testwithEmpty = TestUtils::getTestValue("getSlidesSlideTextItems", "withEmpty", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideTextItems", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideTextItems", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideTextItems", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideTextItems");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidname()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideTextItems", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideTextItems", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidwithEmpty()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->withEmpty = TestUtils::invalidizeValue("withEmpty", "getSlidesSlideTextItems", $request->withEmpty, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "withEmpty", $request->withEmpty);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "withEmpty", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "withEmpty", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidpassword()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideTextItems", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidfolder()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideTextItems", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidstorage()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideTextItems", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesPresentationReplaceTextRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesPresentationReplaceText", "name", $this->values);
        $testoldValue = TestUtils::getTestValue("postSlidesPresentationReplaceText", "oldValue", $this->values);
        $testnewValue = TestUtils::getTestValue("postSlidesPresentationReplaceText", "newValue", $this->values);
        $testignoreCase = TestUtils::getTestValue("postSlidesPresentationReplaceText", "ignoreCase", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesPresentationReplaceText", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesPresentationReplaceText", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesPresentationReplaceText", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesPresentationReplaceText");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidname()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesPresentationReplaceText", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidoldValue()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->oldValue = TestUtils::invalidizeValue("oldValue", "postSlidesPresentationReplaceText", $request->oldValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "oldValue", $request->oldValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "oldValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "oldValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidnewValue()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->newValue = TestUtils::invalidizeValue("newValue", "postSlidesPresentationReplaceText", $request->newValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "newValue", $request->newValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "newValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "newValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidignoreCase()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->ignoreCase = TestUtils::invalidizeValue("ignoreCase", "postSlidesPresentationReplaceText", $request->ignoreCase, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "ignoreCase", $request->ignoreCase);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "ignoreCase", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "ignoreCase", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidpassword()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesPresentationReplaceText", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidfolder()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesPresentationReplaceText", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidstorage()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesPresentationReplaceText", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesSlideReplaceTextRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSlideReplaceText", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlidesSlideReplaceText", "slideIndex", $this->values);
        $testoldValue = TestUtils::getTestValue("postSlidesSlideReplaceText", "oldValue", $this->values);
        $testnewValue = TestUtils::getTestValue("postSlidesSlideReplaceText", "newValue", $this->values);
        $testignoreCase = TestUtils::getTestValue("postSlidesSlideReplaceText", "ignoreCase", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSlideReplaceText", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSlideReplaceText", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSlideReplaceText", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSlideReplaceText");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidname()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSlideReplaceText", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidslideIndex()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlidesSlideReplaceText", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidoldValue()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->oldValue = TestUtils::invalidizeValue("oldValue", "postSlidesSlideReplaceText", $request->oldValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "oldValue", $request->oldValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "oldValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "oldValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidnewValue()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->newValue = TestUtils::invalidizeValue("newValue", "postSlidesSlideReplaceText", $request->newValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "newValue", $request->newValue);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "newValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "newValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidignoreCase()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->ignoreCase = TestUtils::invalidizeValue("ignoreCase", "postSlidesSlideReplaceText", $request->ignoreCase, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "ignoreCase", $request->ignoreCase);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "ignoreCase", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "ignoreCase", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidpassword()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSlideReplaceText", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidfolder()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSlideReplaceText", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidstorage()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSlideReplaceText", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "storage", $this->okToFailValues);
        }
    }
}
