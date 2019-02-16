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
use Aspose\Slides\Cloud\Sdk\Api\ThemeApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class ThemeApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new ThemeApi(null, $this->config);
    }

    private function getGetSlidesThemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesTheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesTheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesTheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesTheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesTheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesTheme
     * Read slide theme info.
     */
    public function testGetSlidesTheme()
    {
        $request = $this->getGetSlidesThemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesTheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesThemeInvalidname()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesTheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesTheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesTheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesTheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesTheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeColorSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeColorScheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeColorScheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesThemeColorScheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesThemeColorScheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesThemeColorScheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeColorSchemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeColorScheme
     * Read slide theme color scheme info.
     */
    public function testGetSlidesThemeColorScheme()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeColorScheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesThemeColorScheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesThemeColorScheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesThemeColorScheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesThemeColorScheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesThemeColorScheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeFontSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeFontScheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeFontScheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesThemeFontScheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesThemeFontScheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesThemeFontScheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeFontSchemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeFontScheme
     * Read slide theme font scheme info.
     */
    public function testGetSlidesThemeFontScheme()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeFontScheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesThemeFontScheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesThemeFontScheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesThemeFontScheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesThemeFontScheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesThemeFontScheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeFormatSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeFormatScheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeFormatScheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesThemeFormatScheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesThemeFormatScheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesThemeFormatScheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeFormatSchemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeFormatScheme
     * Read slide theme color scheme info.
     */
    public function testGetSlidesThemeFormatScheme()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeFormatScheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesThemeFormatScheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesThemeFormatScheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesThemeFormatScheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesThemeFormatScheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesThemeFormatScheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "storage", $this->okToFailValues);
        }
    }
}
