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

namespace Aspose\Slides\Cloud\Sdk\Tests\UseCases;
 
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Model\DocumentProperties;
use Aspose\Slides\Cloud\Sdk\Model\DocumentProperty;
use Aspose\Slides\Cloud\Sdk\Model\ProtectionProperties;
use Aspose\Slides\Cloud\Sdk\Model\SlideProperties;
use Aspose\Slides\Cloud\Sdk\Model\Requests\CopyFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\DeleteSlidesDocumentPropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\DeleteSlidesDocumentPropertyRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\GetSlidesDocumentPropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\GetSlidesDocumentPropertyRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\GetSlidesProtectionPropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\GetSlidesSlidePropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesSetDocumentPropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PutSlidesProtectionPropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PutSlidesSetDocumentPropertyRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PutSlidesSlidePropertiesRequest;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class PropertyTest extends TestBase
{
    public function testDocumentPropertiesBuiltin()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $getRequest = new GetSlidesDocumentPropertyRequest(self::fileName, self::builtinPropertyName, self::password, self::folderName);
        $getResult = $this->getApi()->getSlidesDocumentProperty($getRequest);
        Assert::assertEquals(self::builtinPropertyName, $getResult->getName());
        Assert::assertTrue($getResult->getBuiltin());

        $property = new DocumentProperty();
        $property->setValue(self::updatedPropertyValue);
        $putRequest = new PutSlidesSetDocumentPropertyRequest(self::fileName, self::builtinPropertyName, $property, self::password, self::folderName);
        $putResult = $this->getApi()->putSlidesSetDocumentProperty($putRequest);
        Assert::assertTrue($putResult->getBuiltin());
        Assert::assertEquals(self::updatedPropertyValue, $putResult->getValue());

        $deleteRequest = new DeleteSlidesDocumentPropertyRequest(self::fileName, self::builtinPropertyName, self::password, self::folderName);
        $this->getApi()->deleteSlidesDocumentProperty($deleteRequest);
        $getResult = $this->getApi()->getSlidesDocumentProperty($getRequest);
            //built-in property is not actually deleted
        Assert::assertEquals(self::builtinPropertyName, $getResult->getName());
        Assert::assertTrue($getResult->getBuiltin());
        Assert::assertNotEquals(self::updatedPropertyValue, $getResult->getValue());
    }

    public function testDocumentPropertiesCustom()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $property = new DocumentProperty();
        $property->setValue(self::updatedPropertyValue);
        $putRequest = new PutSlidesSetDocumentPropertyRequest(self::fileName, self::customPropertyName, $property, self::password, self::folderName);
        $putResult = $this->getApi()->putSlidesSetDocumentProperty($putRequest);
        Assert::assertFalse($putResult->getBuiltin());
        Assert::assertEquals(self::updatedPropertyValue, $putResult->getValue());

        $deleteRequest = new DeleteSlidesDocumentPropertyRequest(self::fileName, self::customPropertyName, self::password, self::folderName);
        $this->getApi()->deleteSlidesDocumentProperty($deleteRequest);
        $getRequest = new GetSlidesDocumentPropertyRequest(self::fileName, self::customPropertyName, self::password, self::folderName);
        try {
            $this->getApi()->getSlidesDocumentProperty($getRequest);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            Assert::assertEquals(404, $ex->getCode());
        }
    }

    public function testDocumentPropertiesBulkUpdate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $getRequest = new GetSlidesDocumentPropertiesRequest(self::fileName, self::password, self::folderName);
        $getResult = $this->getApi()->getSlidesDocumentProperties($getRequest);

        $properties = new DocumentProperties();
        $property1 = new DocumentProperty();
        $property1->setName(self::builtinPropertyName);
        $property1->setValue(self::updatedPropertyValue);
        $property2 = new DocumentProperty();
        $property2->setName(self::customPropertyName);
        $property2->setValue(self::updatedPropertyValue);
        $properties->setList([ $property1, $property2 ]);
        $postRequest = new PostSlidesSetDocumentPropertiesRequest(self::fileName, $properties, self::password, self::folderName);
        $postResult = $this->getApi()->postSlidesSetDocumentProperties($postRequest);
        Assert::assertEquals(count($getResult->getList()) + 1, count($postResult->getList()));

        $deleteRequest = new DeleteSlidesDocumentPropertiesRequest(self::fileName, self::password, self::folderName);
        $deleteResult = $this->getApi()->deleteSlidesDocumentProperties($deleteRequest);
            //One custom property was contained in the original presentation; it also must be deleted
        Assert::assertEquals(count($getResult->getList()) - 1, count($deleteResult->getList()));
    }

    public function testSlideProperties()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $getRequest = new GetSlidesSlidePropertiesRequest(self::fileName, self::password, self::folderName);
        $getResult = $this->getApi()->getSlidesSlideProperties($getRequest);
        $dto = new SlideProperties();
        $dto->setFirstSlideNumber($getResult->getFirstSlideNumber() + 2);
        $putRequest = new PutSlidesSlidePropertiesRequest(self::fileName, $dto, self::password, self::folderName);
        $putResult = $this->getApi()->putSlidesSlideProperties($putRequest);
        Assert::assertNotEquals($getResult->getFirstSlideNumber(), $putResult->getFirstSlideNumber());
        Assert::assertEquals($getResult->getOrientation(), $putResult->getOrientation());
    }

    public function testSlideSizePreset()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $dto = new SlideProperties();
        $dto->setSizeType("B4IsoPaper");
        $request = new PutSlidesSlidePropertiesRequest(self::fileName, $dto, self::password, self::folderName);
        $result = $this->getApi()->putSlidesSlideProperties($request);
        Assert::assertEquals("B4IsoPaper", $result->getSizeType());
        Assert::assertEquals(852, $result->getWidth());
        Assert::assertEquals(639, $result->getHeight());
    }

    public function testSlideSizeCustom()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $dto = new SlideProperties();
        $dto->setWidth(800);
        $dto->setHeight(500);
        $request = new PutSlidesSlidePropertiesRequest(self::fileName, $dto, self::password, self::folderName);
        $result = $this->getApi()->putSlidesSlideProperties($request);
        Assert::assertEquals("Custom", $result->getSizeType());
        Assert::assertEquals($dto->getWidth(), $result->getWidth());
        Assert::assertEquals($dto->getHeight(), $result->getHeight());
    }

    public function testProtectionProperties()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $getRequest = new GetSlidesProtectionPropertiesRequest(self::fileName, self::password, self::folderName);
        $getResult = $this->getApi()->getSlidesProtectionProperties($getRequest);
        $dto = new ProtectionProperties();
        $dto->setReadOnlyRecommended(!$getResult->getReadOnlyRecommended());
        $putRequest = new PutSlidesProtectionPropertiesRequest(self::fileName, $dto, self::password, self::folderName);
        $putResult = $this->getApi()->putSlidesProtectionProperties($putRequest);
        Assert::assertNotEquals($getResult->getReadOnlyRecommended(), $putResult->getReadOnlyRecommended());
        Assert::assertEquals($getResult->getEncryptDocumentProperties(), $putResult->getEncryptDocumentProperties());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const builtinPropertyName = "Author";
    public const customPropertyName = "CustomProperty2";
    public const updatedPropertyValue = "New Value";
}
