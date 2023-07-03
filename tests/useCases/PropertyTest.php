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
use Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties;
use Aspose\Slides\Cloud\Sdk\Model\DocumentProperties;
use Aspose\Slides\Cloud\Sdk\Model\DocumentProperty;
use Aspose\Slides\Cloud\Sdk\Model\ProtectionProperties;
use Aspose\Slides\Cloud\Sdk\Model\SlideProperties;
use Aspose\Slides\Cloud\Sdk\Model\ViewProperties;
use Aspose\Slides\Cloud\Sdk\Model\SlideShowProperties;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class PropertyTest extends TestBase
{
    public function testDocumentPropertiesBuiltin()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $getResult = $this->getApi()->getSlideProperties(self::fileName, self::password, self::folderName);
        $dto = new SlideProperties();
        $dto->setFirstSlideNumber($getResult->getFirstSlideNumber() + 2);
        $putResult = $this->getApi()->setSlideProperties(self::fileName, $dto, self::password, self::folderName);
        Assert::assertNotEquals($getResult->getFirstSlideNumber(), $putResult->getFirstSlideNumber());
        Assert::assertEquals($getResult->getOrientation(), $putResult->getOrientation());
    }

    public function testSlideSizePreset()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new SlideProperties();
        $dto->setSizeType("B4IsoPaper");
        $result = $this->getApi()->setSlideProperties(self::fileName, $dto, self::password, self::folderName);
        Assert::assertEquals("B4IsoPaper", $result->getSizeType());
        Assert::assertEquals(852, $result->getWidth());
        Assert::assertEquals(639, $result->getHeight());
    }

    public function testSlideSizeCustom()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $getResult = $this->getApi()->getProtectionProperties(self::fileName, self::password, self::folderName);
        $dto = new ProtectionProperties();
        $dto->setReadOnlyRecommended(!$getResult->getReadOnlyRecommended());
        $putResult = $this->getApi()->setProtection(self::fileName, $dto, self::password, self::folderName);
        Assert::assertNotEquals($getResult->getReadOnlyRecommended(), $putResult->getReadOnlyRecommended());
        Assert::assertEquals($getResult->getEncryptDocumentProperties(), $putResult->getEncryptDocumentProperties());
    }

    public function testDeleteProtection()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getApi()->deleteProtection(self::fileName, self::password, self::folderName);
        Assert::assertFalse($result->getReadOnlyRecommended());
        Assert::assertFalse($result->getIsEncrypted());
        Assert::assertNull($result->getReadPassword());
    }

    public function testProtectOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $dto = new ProtectionProperties();
        $dto->setReadPassword("newPassword");
        $result = $this->getApi()->setProtectionOnline($file, $dto, self::password);
        Assert::assertTrue($result->getSize() > 0);
    }

    public function testUnprotectOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $result = $this->getApi()->deleteProtectionOnline($file, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $result->getSize());
    }

    public function testGetViewProperties()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $response = $this->getApi()->getViewProperties(
            self::fileName,
            self::password,
            self::folderName
        );
        Assert::assertEquals('True', $response->getShowComments());
    }

    public function testSetViewProperties()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $dto = new ViewProperties();
        $dto->setShowComments('False');
        $slideViewProperties = new CommonSlideViewProperties();
        $slideViewProperties->setScale(50);
        $dto->setSlideViewProperties($slideViewProperties);

        $response = $this->getApi()->setViewProperties(
            self::fileName,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals('False', $response->getShowComments());
        Assert::assertEquals(50, $response->getSlideViewProperties()->getScale());
    }

    public function testProtectionCheck()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $getResult = $this->getApi()->getProtectionProperties(self::fileName, null, self::folderName);
        Assert::assertTrue($getResult->getIsEncrypted());
        Assert::assertNull($getResult->getReadPassword());

        $getResult = $this->getApi()->getProtectionProperties(self::fileName, self::password, self::folderName);
        Assert::assertTrue($getResult->getIsEncrypted());
        Assert::assertNotNull($getResult->getReadPassword());
    }

    public function testGetSlideShowProperties()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $response = $this->getApi()->getSlideShowProperties(
            self::fileName,
            self::password,
            self::folderName
        );
        Assert::assertTrue($response->getShowAnimation());
        Assert::assertTrue($response->getShowNarration());
    }

    public function testSetSlideShowProperties()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $dto = new SlideShowProperties();
        $dto->setLoop(true);
        $dto->setUseTimings(true);
        $dto->setSlideShowType('PresentedBySpeaker');

        $response = $this->getApi()->setSlideShowProperties(
            self::fileName,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getLoop(), $response->getLoop());
        Assert::assertEquals($dto->getUseTimings(), $response->getUseTimings());
        Assert::assertEquals($dto->getSlideShowType(), $response->getSlideShowType());
    }

    public const builtinPropertyName = "Author";
    public const customPropertyName = "CustomProperty2";
    public const updatedPropertyValue = "New Value";
}
