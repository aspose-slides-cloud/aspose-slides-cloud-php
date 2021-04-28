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
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class PropertyTest extends TestBase
{
    public function testDocumentPropertiesBuiltin()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $getResult = $this->getApi()->getDocumentProperty(self::fileName, self::builtinPropertyName, self::password, self::folderName);
        Assert::assertEquals(self::builtinPropertyName, $getResult->getName());
        Assert::assertTrue($getResult->getBuiltin());

        $property = new DocumentProperty();
        $property->setValue(self::updatedPropertyValue);
        $putResult = $this->getApi()->setDocumentProperty(self::fileName, self::builtinPropertyName, $property, self::password, self::folderName);
        Assert::assertTrue($putResult->getBuiltin());
        Assert::assertEquals(self::updatedPropertyValue, $putResult->getValue());

        $this->getApi()->deleteDocumentProperty(self::fileName, self::builtinPropertyName, self::password, self::folderName);
        $getResult = $this->getApi()->getDocumentProperty(self::fileName, self::builtinPropertyName, self::password, self::folderName);
            //built-in property is not actually deleted
        Assert::assertEquals(self::builtinPropertyName, $getResult->getName());
        Assert::assertTrue($getResult->getBuiltin());
        Assert::assertNotEquals(self::updatedPropertyValue, $getResult->getValue());
    }

    public function testDocumentPropertiesCustom()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $property = new DocumentProperty();
        $property->setValue(self::updatedPropertyValue);
        $putResult = $this->getApi()->setDocumentProperty(self::fileName, self::customPropertyName, $property, self::password, self::folderName);
        Assert::assertFalse($putResult->getBuiltin());
        Assert::assertEquals(self::updatedPropertyValue, $putResult->getValue());

        $this->getApi()->deleteDocumentProperty(self::fileName, self::customPropertyName, self::password, self::folderName);
        try {
            $this->getApi()->getDocumentProperty(self::fileName, self::customPropertyName, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            Assert::assertEquals(404, $ex->getCode());
        }
    }

    public function testDocumentPropertiesBulkUpdate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $getResult = $this->getApi()->getDocumentProperties(self::fileName, self::password, self::folderName);

        $properties = new DocumentProperties();
        $property1 = new DocumentProperty();
        $property1->setName(self::builtinPropertyName);
        $property1->setValue(self::updatedPropertyValue);
        $property2 = new DocumentProperty();
        $property2->setName(self::customPropertyName);
        $property2->setValue(self::updatedPropertyValue);
        $properties->setList([ $property1, $property2 ]);
        $postResult = $this->getApi()->setDocumentProperties(self::fileName, $properties, self::password, self::folderName);
        Assert::assertEquals(count($getResult->getList()) + 1, count($postResult->getList()));

        $deleteResult = $this->getApi()->deleteDocumentProperties(self::fileName, self::password, self::folderName);
            //One custom property was contained in the original presentation; it also must be deleted
        Assert::assertEquals(count($getResult->getList()) - 1, count($deleteResult->getList()));
    }

    public function testSlideProperties()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $getResult = $this->getApi()->getSlideProperties(self::fileName, self::password, self::folderName);
        $dto = new SlideProperties();
        $dto->setFirstSlideNumber($getResult->getFirstSlideNumber() + 2);
        $putResult = $this->getApi()->setSlideProperties(self::fileName, $dto, self::password, self::folderName);
        Assert::assertNotEquals($getResult->getFirstSlideNumber(), $putResult->getFirstSlideNumber());
        Assert::assertEquals($getResult->getOrientation(), $putResult->getOrientation());
    }

    public function testSlideSizePreset()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new SlideProperties();
        $dto->setSizeType("B4IsoPaper");
        $result = $this->getApi()->setSlideProperties(self::fileName, $dto, self::password, self::folderName);
        Assert::assertEquals("B4IsoPaper", $result->getSizeType());
        Assert::assertEquals(852, $result->getWidth());
        Assert::assertEquals(639, $result->getHeight());
    }

    public function testSlideSizeCustom()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new SlideProperties();
        $dto->setWidth(800);
        $dto->setHeight(500);
        $result = $this->getApi()->setSlideProperties(self::fileName, $dto, self::password, self::folderName);
        Assert::assertEquals("Custom", $result->getSizeType());
        Assert::assertEquals($dto->getWidth(), $result->getWidth());
        Assert::assertEquals($dto->getHeight(), $result->getHeight());
    }

    public function testProtection()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $getResult = $this->getApi()->getProtectionProperties(self::fileName, self::password, self::folderName);
        $dto = new ProtectionProperties();
        $dto->setReadOnlyRecommended(!$getResult->getReadOnlyRecommended());
        $putResult = $this->getApi()->setProtection(self::fileName, $dto, self::password, self::folderName);
        Assert::assertNotEquals($getResult->getReadOnlyRecommended(), $putResult->getReadOnlyRecommended());
        Assert::assertEquals($getResult->getEncryptDocumentProperties(), $putResult->getEncryptDocumentProperties());
    }

    public function testDeleteProtection()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteProtection(self::fileName, self::password, self::folderName);
        Assert::assertFalse($result->getReadOnlyRecommended());
        Assert::assertFalse($result->getIsEncrypted());
        Assert::assertNull($result->getReadPassword());
    }

    public function testProtectOnline()
    {
        $file = fopen("TestData/".self::fileName, 'r');
        $dto = new ProtectionProperties();
        $dto->setReadPassword("newPassword");
        $result = $this->getApi()->setProtectionOnline($file, $dto, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $result->getSize());
    }

    public function testUnprotectOnline()
    {
        $file = fopen("TestData/".self::fileName, 'r');
        $result = $this->getApi()->deleteProtectionOnline($file, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $result->getSize());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const builtinPropertyName = "Author";
    public const customPropertyName = "CustomProperty2";
    public const updatedPropertyValue = "New Value";
}
