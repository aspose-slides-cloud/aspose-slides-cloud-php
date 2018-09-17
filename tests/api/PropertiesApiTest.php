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
        $testname = TestUtils::getTestValue("deleteSlidesDocumentProperties", "name", "string");
        $testpassword = TestUtils::getTestValue("deleteSlidesDocumentProperties", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlidesDocumentProperties", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlidesDocumentProperties", "storage", "string");
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
        $this->initialize("deleteSlidesDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidname()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlidesDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "name");
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidpassword()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlidesDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "password");
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidfolder()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlidesDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "folder");
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidstorage()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlidesDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "storage");
        }
    }
    private function getDeleteSlidesDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesDocumentProperty", "name", "string");
        $testpropertyName = TestUtils::getTestValue("deleteSlidesDocumentProperty", "propertyName", "string");
        $testpassword = TestUtils::getTestValue("deleteSlidesDocumentProperty", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlidesDocumentProperty", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlidesDocumentProperty", "storage", "string");
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
        $this->initialize("deleteSlidesDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidname()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlidesDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "name");
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", $request->propertyName, "string");
        $this->initialize("deleteSlidesDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "propertyName");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "propertyName");
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidpassword()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlidesDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "password");
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidfolder()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlidesDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "folder");
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidstorage()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlidesDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "storage");
        }
    }
    private function getGetSlidesDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentProperties", "name", "string");
        $testpassword = TestUtils::getTestValue("getSlidesDocumentProperties", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesDocumentProperties", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesDocumentProperties", "storage", "string");
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
        $this->initialize("getSlidesDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidname()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "name");
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "password");
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "folder");
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "storage");
        }
    }
    private function getGetSlidesDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentProperty", "name", "string");
        $testpropertyName = TestUtils::getTestValue("getSlidesDocumentProperty", "propertyName", "string");
        $testpassword = TestUtils::getTestValue("getSlidesDocumentProperty", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlidesDocumentProperty", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesDocumentProperty", "storage", "string");
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
        $this->initialize("getSlidesDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesDocumentPropertyInvalidname()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "name");
        }
    }

    public function testGetSlidesDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", $request->propertyName, "string");
        $this->initialize("getSlidesDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "propertyName");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "propertyName");
        }
    }

    public function testGetSlidesDocumentPropertyInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlidesDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "password");
        }
    }

    public function testGetSlidesDocumentPropertyInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "folder");
        }
    }

    public function testGetSlidesDocumentPropertyInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "storage");
        }
    }
    private function getPostSlidesSetDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSetDocumentProperties", "name", "string");
        $testproperties = TestUtils::getTestValue("postSlidesSetDocumentProperties", "properties", "\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties");
        $testpassword = TestUtils::getTestValue("postSlidesSetDocumentProperties", "password", "string");
        $testfolder = TestUtils::getTestValue("postSlidesSetDocumentProperties", "folder", "string");
        $teststorage = TestUtils::getTestValue("postSlidesSetDocumentProperties", "storage", "string");
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
        $this->initialize("postSlidesSetDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSetDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidname()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postSlidesSetDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "name");
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidproperties()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->properties = TestUtils::invalidizeValue("properties", $request->properties, "\Aspose\Slides\Cloud\Sdk\Model\DocumentProperties");
        $this->initialize("postSlidesSetDocumentProperties", "properties", $request->properties);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "properties");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "properties");
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidpassword()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postSlidesSetDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "password");
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidfolder()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postSlidesSetDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "folder");
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidstorage()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postSlidesSetDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "storage");
        }
    }
    private function getPutSlidesSetDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSetDocumentProperty", "name", "string");
        $testpropertyName = TestUtils::getTestValue("putSlidesSetDocumentProperty", "propertyName", "string");
        $testproperty = TestUtils::getTestValue("putSlidesSetDocumentProperty", "property", "\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty");
        $testpassword = TestUtils::getTestValue("putSlidesSetDocumentProperty", "password", "string");
        $testfolder = TestUtils::getTestValue("putSlidesSetDocumentProperty", "folder", "string");
        $teststorage = TestUtils::getTestValue("putSlidesSetDocumentProperty", "storage", "string");
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
        $this->initialize("putSlidesSetDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSetDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidname()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSlidesSetDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "name");
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", $request->propertyName, "string");
        $this->initialize("putSlidesSetDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "propertyName");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "propertyName");
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidproperty()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->property = TestUtils::invalidizeValue("property", $request->property, "\Aspose\Slides\Cloud\Sdk\Model\DocumentProperty");
        $this->initialize("putSlidesSetDocumentProperty", "property", $request->property);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "property");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "property");
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidpassword()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlidesSetDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "password");
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidfolder()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSlidesSetDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "folder");
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidstorage()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSlidesSetDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "storage");
        }
    }
}
