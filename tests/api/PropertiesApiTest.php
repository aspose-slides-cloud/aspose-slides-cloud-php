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
use Aspose\Slides\Cloud\Sdk\Api\PropertiesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class PropertiesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new PropertiesApi(null, $this->config);
    }

    private function getDeleteSlidesDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesDocumentProperties", "name", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesDocumentProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesDocumentProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesDocumentProperties", "storage", $this->values);
        $request = new Requests\DeleteSlidesDocumentPropertiesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesDocumentProperties
     * Clean document properties.
     */
    public function testDeleteSlidesDocumentProperties()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidname()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesDocumentProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidpassword()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesDocumentProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidfolder()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesDocumentProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidstorage()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesDocumentProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesDocumentProperty", "name", $this->values);
        $testpropertyName = TestUtils::getTestValue("deleteSlidesDocumentProperty", "propertyName", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesDocumentProperty", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesDocumentProperty", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesDocumentProperty", "storage", $this->values);
        $request = new Requests\DeleteSlidesDocumentPropertyRequest($testname, $testpropertyName, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesDocumentProperty
     * Delete document property.
     */
    public function testDeleteSlidesDocumentProperty()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidname()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesDocumentProperty", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", "deleteSlidesDocumentProperty", $request->propertyName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "propertyName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "propertyName", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidpassword()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesDocumentProperty", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidfolder()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesDocumentProperty", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidstorage()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesDocumentProperty", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentProperties", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocumentProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocumentProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocumentProperties", "storage", $this->values);
        $request = new Requests\GetSlidesDocumentPropertiesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesDocumentProperties
     * Read presentation document properties.
     */
    public function testGetSlidesDocumentProperties()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidname()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocumentProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocumentProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocumentProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocumentProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentProperty", "name", $this->values);
        $testpropertyName = TestUtils::getTestValue("getSlidesDocumentProperty", "propertyName", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocumentProperty", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocumentProperty", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocumentProperty", "storage", $this->values);
        $request = new Requests\GetSlidesDocumentPropertyRequest($testname, $testpropertyName, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesDocumentProperty
     * Read presentation document property.
     */
    public function testGetSlidesDocumentProperty()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidname()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocumentProperty", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", "getSlidesDocumentProperty", $request->propertyName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "propertyName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "propertyName", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocumentProperty", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocumentProperty", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocumentProperty", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesSetDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSetDocumentProperties", "name", $this->values);
        $testproperties = TestUtils::getTestValue("postSlidesSetDocumentProperties", "properties", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSetDocumentProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSetDocumentProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSetDocumentProperties", "storage", $this->values);
        $request = new Requests\PostSlidesSetDocumentPropertiesRequest($testname, $testproperties, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesSetDocumentProperties
     * Set document properties.
     */
    public function testPostSlidesSetDocumentProperties()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSetDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidname()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSetDocumentProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidproperties()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->properties = TestUtils::invalidizeValue("properties", "postSlidesSetDocumentProperties", $request->properties, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "properties", $request->properties);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "properties", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "properties", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidpassword()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSetDocumentProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidfolder()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSetDocumentProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidstorage()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSetDocumentProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesSetDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSetDocumentProperty", "name", $this->values);
        $testpropertyName = TestUtils::getTestValue("putSlidesSetDocumentProperty", "propertyName", $this->values);
        $testproperty = TestUtils::getTestValue("putSlidesSetDocumentProperty", "property", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSetDocumentProperty", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSetDocumentProperty", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSetDocumentProperty", "storage", $this->values);
        $request = new Requests\PutSlidesSetDocumentPropertyRequest($testname, $testpropertyName, $testproperty, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSetDocumentProperty
     * Set document property.
     */
    public function testPutSlidesSetDocumentProperty()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSetDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidname()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSetDocumentProperty", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", "putSlidesSetDocumentProperty", $request->propertyName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "propertyName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "propertyName", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidproperty()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->property = TestUtils::invalidizeValue("property", "putSlidesSetDocumentProperty", $request->property, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "property", $request->property);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "property", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "property", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidpassword()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSetDocumentProperty", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidfolder()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSetDocumentProperty", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidstorage()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSetDocumentProperty", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "storage", $this->okToFailValues);
        }
    }
}
