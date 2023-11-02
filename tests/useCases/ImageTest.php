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
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class ImageTest extends TestBase
{
    public function testImagesGet()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $images = $this->getSlidesApi()->getPresentationImages(self::fileName, self::password, self::folderName);
        $slideImages = $this->getSlidesApi()->getSlideImages(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue(count($images->getList()) > count($slideImages->getList()));
    }

    public function testImagesDownloadStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $images = $this->getSlidesApi()->downloadImagesDefaultFormat(self::fileName, self::password, self::folderName);
        $imagesPng = $this->getSlidesApi()->downloadImages(self::fileName, self::format, self::password, self::folderName);
        Assert::assertTrue($images->isFile());
        Assert::assertTrue($imagesPng->isFile());
        Assert::assertNotEquals($images->getSize(), $imagesPng->getSize());
        $zip = zip_open($images->getPathname());
        $zipCount = 0;
        while ($zipFile = zip_read($zip)) {
            $zipCount++;
        }
        $zipPng = zip_open($imagesPng->getPathname());
        $zipPngCount = 0;
        while ($zipPngFile = zip_read($zipPng)) {
            $zipPngCount++;
        }
        Assert::assertEquals($zipCount, $zipPngCount);
        zip_close($zipPng);
        zip_close($zip);
    }

    public function testImagesDownloadRequest()
    {
        $images = $this->getSlidesApi()->downloadImagesDefaultFormatOnline(fopen(self::localFilePath, 'r'), self::password);
        $imagesPng = $this->getSlidesApi()->downloadImagesOnline(fopen(self::localFilePath, 'r'), self::format, self::password);
        Assert::assertTrue($images->isFile());
        Assert::assertTrue($imagesPng->isFile());
        Assert::assertNotEquals($images->getSize(), $imagesPng->getSize());
        $zip = zip_open($images->getPathname());
        $zipCount = 0;
        while ($zipFile = zip_read($zip)) {
            $zipCount++;
        }
        $zipPng = zip_open($imagesPng->getPathname());
        $zipPngCount = 0;
        while ($zipPngFile = zip_read($zipPng)) {
            $zipPngCount++;
        }
        Assert::assertEquals($zipCount, $zipPngCount);
        zip_close($zipPng);
        zip_close($zip);
    }

    public function testImageDownloadStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $image = $this->getSlidesApi()->downloadImageDefaultFormat(self::fileName, self::imageIndex, self::password, self::folderName);
        $imagePng = $this->getSlidesApi()->downloadImage(self::fileName, self::imageIndex, self::format, self::password, self::folderName);
        Assert::assertTrue($image->isFile());
        Assert::assertTrue($imagePng->isFile());
        Assert::assertNotEquals($image->getSize(), $imagePng->getSize());
    }

    public function testImageDownloadRequest()
    {
        $image = $this->getSlidesApi()->downloadImageDefaultFormatOnline(fopen(self::localFilePath, 'r'), self::imageIndex, self::password);
        $imagePng = $this->getSlidesApi()->downloadImageOnline(fopen(self::localFilePath, 'r'), self::imageIndex, self::format, self::password);
        Assert::assertTrue($image->isFile());
        Assert::assertTrue($imagePng->isFile());
        Assert::assertNotEquals($image->getSize(), $imagePng->getSize());
    }

    public function testReplaceImage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $imageFile = fopen(self::imagePath, 'r');
        $this->getSlidesApi()->replaceImage(self::fileName, self::imageIndex, $imageFile, self::password, self::folderName);
        Assert::assertTrue(true);
    }

    public function testReplaceImageRequest()
    {
        $file = fopen(self::localFilePath, 'r');
        $imageFile = fopen(self::imagePath, 'r');
        $response = $this->getSlidesApi()->replaceImageOnline($file, self::imageIndex, $imageFile, self::password);
        Assert::assertNotNull($response);
        Assert::assertNotEquals(0, $response->getSize());
    }

    public const format = 'png';
    public const slideIndex = 1;
    public const imageIndex = 1;
    public const imagePath = self::localFolderName."/watermark.png";
}
