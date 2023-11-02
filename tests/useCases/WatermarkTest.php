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
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class WatermarkTest extends TestBase
{
    public function testWatermarkTextStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapeCount = count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $this->getSlidesApi()->createWatermark(self::fileName, null, null, self::watermarkText, null, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals(self::watermarkText, $shape->getText());
        Assert::assertEquals(self::watermarkName, $shape->getName());

        $this->getSlidesApi()->deleteWatermark(self::fileName, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkTextDtoStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapeCount = count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $dto = new Shape();
        $dto->setText(self::watermarkText);
        $this->getSlidesApi()->createWatermark(self::fileName, $dto, null, null, null, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals(self::watermarkText, $shape->getText());
        Assert::assertEquals(self::watermarkName, $shape->getName());

        $this->getSlidesApi()->deleteWatermark(self::fileName, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkImageStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapeCount = count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $watermarkFile = fopen(self::watermarkPath, 'r');
        $this->getSlidesApi()->createImageWatermark(self::fileName, $watermarkFile, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals(self::watermarkName, $shape->getName());

        $this->getSlidesApi()->deleteWatermark(self::fileName, null, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkImageDtoStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapeCount = count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks());
        $dto = new PictureFrame();
        $fillFormat = new PictureFill();
        $watermarkData = base64_encode(file_get_contents(self::watermarkPath));
        $fillFormat->setBase64Data($watermarkData);
        $dto->setFillFormat($fillFormat);
        $watermarkName = "myWatermark";
        $dto->setName($watermarkName);
        $this->getSlidesApi()->createImageWatermark(self::fileName, null, $dto, self::password, self::folderName);
        Assert::assertEquals($shapeCount + 1, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
        $shape = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, $shapeCount + 1, self::password, self::folderName);
        Assert::assertEquals($watermarkName, $shape->getName());

        $this->getSlidesApi()->deleteWatermark(self::fileName, $watermarkName, self::password, self::folderName);
        Assert::assertEquals($shapeCount, count($this->getSlidesApi()->getShapes(self::fileName, self::slideIndex, self::password, self::folderName)->getShapesLinks()));
    }

    public function testWatermarkTextRequest()
    {
        $file = fopen(self::localFilePath, 'r');
        $fileWithWatermarks = $this->getSlidesApi()->createWatermarkOnline($file, null, null, self::watermarkText, null, null, self::password);
        $fileWithNoWatermarks = $this->getSlidesApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public function testWatermarkTextDtoRequest()
    {
        $file = fopen(self::localFilePath, 'r');
        $dto = new Shape();
        $dto->setText(self::watermarkText);
        $fileWithWatermarks = $this->getSlidesApi()->createWatermarkOnline($file, $dto, null, null, null, null, self::password);
        $fileWithNoWatermarks = $this->getSlidesApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public function testWatermarkImageRequest()
    {
        $file = fopen(self::localFilePath, 'r');
        $watermarkFile = fopen(self::watermarkPath, 'r');
        $fileWithWatermarks = $this->getSlidesApi()->createImageWatermarkOnline($file, $watermarkFile, null, self::password);
        $fileWithNoWatermarks = $this->getSlidesApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public function testWatermarkImageDtoRequest()
    {
        $file = fopen(self::localFilePath, 'r');
        $dto = new PictureFrame();
        $fillFormat = new PictureFill();
        $watermarkData = base64_encode(file_get_contents(self::watermarkPath));
        $fillFormat->setBase64Data($watermarkData);
        $dto->setFillFormat($fillFormat);
        $fileWithWatermarks = $this->getSlidesApi()->createImageWatermarkOnline($file, null, $dto, self::password);
        $fileWithNoWatermarks = $this->getSlidesApi()->deleteWatermarkOnline(fopen($fileWithWatermarks->getPathname(), 'r'), null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $fileWithWatermarks->getSize());
        Assert::assertTrue($fileWithWatermarks->getSize() > $fileWithNoWatermarks->getSize());
    }

    public const watermarkText = "watermarkText";
    public const watermarkName = "watermark";
    public const watermarkPath = self::localFolderName."/watermark.png";
    public const slideIndex = 1;
}
