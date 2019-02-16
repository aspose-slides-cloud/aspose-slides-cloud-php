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
use Aspose\Slides\Cloud\Sdk\Api\PlaceholdersApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class PlaceholdersApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new PlaceholdersApi(null, $this->config);
    }

    private function getGetSlidesPlaceholderRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPlaceholder", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesPlaceholder", "slideIndex", $this->values);
        $testplaceholderIndex = TestUtils::getTestValue("getSlidesPlaceholder", "placeholderIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesPlaceholder", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesPlaceholder", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesPlaceholder", "storage", $this->values);
        $request = new Requests\GetSlidesPlaceholderRequest($testname, $testslideIndex, $testplaceholderIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesPlaceholder
     * Read slide placeholder info.
     */
    public function testGetSlidesPlaceholder()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPlaceholder");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesPlaceholderInvalidname()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesPlaceholder", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidslideIndex()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesPlaceholder", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidplaceholderIndex()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->placeholderIndex = TestUtils::invalidizeValue("placeholderIndex", "getSlidesPlaceholder", $request->placeholderIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "placeholderIndex", $request->placeholderIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "placeholderIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "placeholderIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidpassword()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesPlaceholder", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidfolder()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesPlaceholder", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidstorage()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesPlaceholder", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesPlaceholdersRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPlaceholders", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesPlaceholders", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesPlaceholders", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesPlaceholders", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesPlaceholders", "storage", $this->values);
        $request = new Requests\GetSlidesPlaceholdersRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesPlaceholders
     * Read slide placeholders info.
     */
    public function testGetSlidesPlaceholders()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPlaceholders");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesPlaceholdersInvalidname()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesPlaceholders", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidslideIndex()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesPlaceholders", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidpassword()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesPlaceholders", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidfolder()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesPlaceholders", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidstorage()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesPlaceholders", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "storage", $this->okToFailValues);
        }
    }
}
