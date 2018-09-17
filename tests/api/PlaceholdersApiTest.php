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
        $testname = TestUtils::getTestValue("getSlidesPlaceholder", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesPlaceholder", "slideIndex", "int");
        $testplaceholderIndex = TestUtils::getTestValue("getSlidesPlaceholder", "placeholderIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlidesPlaceholder", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesPlaceholder", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesPlaceholder", "storage", "string");
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
        $this->initialize("getSlidesPlaceholder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPlaceholder");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesPlaceholderInvalidname()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesPlaceholder", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "name");
        }
    }

    public function testGetSlidesPlaceholderInvalidslideIndex()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesPlaceholder", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "slideIndex");
        }
    }

    public function testGetSlidesPlaceholderInvalidplaceholderIndex()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->placeholderIndex = TestUtils::invalidizeValue("placeholderIndex", $request->placeholderIndex, "int");
        $this->initialize("getSlidesPlaceholder", "placeholderIndex", $request->placeholderIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "placeholderIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "placeholderIndex");
        }
    }

    public function testGetSlidesPlaceholderInvalidpassword()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesPlaceholder", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "password");
        }
    }

    public function testGetSlidesPlaceholderInvalidfolder()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesPlaceholder", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "folder");
        }
    }

    public function testGetSlidesPlaceholderInvalidstorage()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesPlaceholder", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "storage");
        }
    }
    private function getGetSlidesPlaceholdersRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPlaceholders", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesPlaceholders", "slideIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlidesPlaceholders", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesPlaceholders", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesPlaceholders", "storage", "string");
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
        $this->initialize("getSlidesPlaceholders", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPlaceholders");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesPlaceholdersInvalidname()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesPlaceholders", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "name");
        }
    }

    public function testGetSlidesPlaceholdersInvalidslideIndex()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesPlaceholders", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "slideIndex");
        }
    }

    public function testGetSlidesPlaceholdersInvalidpassword()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesPlaceholders", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "password");
        }
    }

    public function testGetSlidesPlaceholdersInvalidfolder()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesPlaceholders", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "folder");
        }
    }

    public function testGetSlidesPlaceholdersInvalidstorage()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesPlaceholders", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "storage");
        }
    }
}
