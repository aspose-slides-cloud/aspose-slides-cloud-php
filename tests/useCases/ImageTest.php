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
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class ImageTest extends TestBase
{
    public function testImagesGet()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $images = $this->getApi()->getPresentationImages(self::fileName, self::password, self::folderName);
        $slideImages = $this->getApi()->getSlideImages(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue(count($images->getList()) > count($slideImages->getList()));
    }

    public function testImagesDownloadStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $images = $this->getApi()->downloadImagesDefaultFormat(self::fileName, self::password, self::folderName);
        $imagesPng = $this->getApi()->downloadImages(self::fileName, self::format, self::password, self::folderName);
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
        $images = $this->getApi()->downloadImagesDefaultFormatOnline(fopen("TestData/".self::fileName, 'r'), self::password);
        $imagesPng = $this->getApi()->downloadImagesOnline(fopen("TestData/".self::fileName, 'r'), self::format, self::password);
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
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $image = $this->getApi()->downloadImageDefaultFormat(self::fileName, self::imageIndex, self::password, self::folderName);
        $imagePng = $this->getApi()->downloadImage(self::fileName, self::imageIndex, self::format, self::password, self::folderName);
        Assert::assertTrue($image->isFile());
        Assert::assertTrue($imagePng->isFile());
        Assert::assertNotEquals($image->getSize(), $imagePng->getSize());
    }

    public function testImageDownloadRequest()
    {
        $image = $this->getApi()->downloadImageDefaultFormatOnline(fopen("TestData/".self::fileName, 'r'), self::imageIndex, self::password);
        $imagePng = $this->getApi()->downloadImageOnline(fopen("TestData/".self::fileName, 'r'), self::imageIndex, self::format, self::password);
        Assert::assertTrue($image->isFile());
        Assert::assertTrue($imagePng->isFile());
        Assert::assertNotEquals($image->getSize(), $imagePng->getSize());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const format = 'png';
    public const slideIndex = 1;
    public const imageIndex = 1;
}
