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
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Model\PictureFrame;
use Aspose\Slides\Cloud\Sdk\Model\PictureFill;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class WatermarkTest extends TestBase
{
    public function testWatermarkTextStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $shapeCount = count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $this->getApi()->createWatermark(self::fileName, null, null, self::watermarkText, null, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals(self::watermarkText, $shape->getText());
        Assert::assertEquals(self::watermarkName, $shape->getName());

        $this->getApi()->deleteWatermark(self::fileName, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkTextDtoStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $shapeCount = count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $dto = new Shape();
        $dto->setText(self::watermarkText);
        $this->getApi()->createWatermark(self::fileName, $dto, null, null, null, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals(self::watermarkText, $shape->getText());
        Assert::assertEquals(self::watermarkName, $shape->getName());

        $this->getApi()->deleteWatermark(self::fileName, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkImageStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $shapeCount = count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $watermarkFile = fopen("TestData/watermark.png", 'r');
        $this->getApi()->createImageWatermark(self::fileName, $watermarkFile, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals(self::watermarkName, $shape->getName());

        $this->getApi()->deleteWatermark(self::fileName, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkImageDtoStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $shapeCount = count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $dto = new PictureFrame();
        $fillFormat = new PictureFill();
        $watermarkData = base64_encode(file_get_contents("TestData/watermark.png"));
        $fillFormat->setBase64Data($watermarkData);
        $dto->setFillFormat($fillFormat);
        $watermarkName = "myWatermark";
        $dto->setName($watermarkName);
        $this->getApi()->createImageWatermark(self::fileName, null, $dto, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals($watermarkName, $shape->getName());

        $this->getApi()->deleteWatermark(self::fileName, $watermarkName, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkTextRequest()
    {
        $file = fopen("TestData/".self::fileName, 'r');
        $fileWithWatermarks = $this->getApi()->createWatermarkOnline($file, null, null, self::watermarkText, null, null, self::password);
        $fileWithNoWatermarks = $this->getApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public function testWatermarkTextDtoRequest()
    {
        $file = fopen("TestData/".self::fileName, 'r');
        $dto = new Shape();
        $dto->setText(self::watermarkText);
        $fileWithWatermarks = $this->getApi()->createWatermarkOnline($file, $dto, null, null, null, null, self::password);
        $fileWithNoWatermarks = $this->getApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public function testWatermarkImageRequest()
    {
        $file = fopen("TestData/".self::fileName, 'r');
        $watermarkFile = fopen("TestData/watermark.png", 'r');
        $fileWithWatermarks = $this->getApi()->createImageWatermarkOnline($file, $watermarkFile, null, self::password);
        $fileWithNoWatermarks = $this->getApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public function testWatermarkImageDtoRequest()
    {
        $file = fopen("TestData/".self::fileName, 'r');
        $dto = new PictureFrame();
        $fillFormat = new PictureFill();
        $watermarkData = base64_encode(file_get_contents("TestData/watermark.png"));
        $fillFormat->setBase64Data($watermarkData);
        $dto->setFillFormat($fillFormat);
        $fileWithWatermarks = $this->getApi()->createImageWatermarkOnline($file, null, $dto, self::password);
        $fileWithNoWatermarks = $this->getApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const watermarkText = "watermarkText";
    public const watermarkName = "watermark";
    public const slideIndex = 1;
}
