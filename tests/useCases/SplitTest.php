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
use Aspose\Slides\Cloud\Sdk\Model\PdfExportOptions;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class SplitTest extends TestBase
{
    public function testSplitStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->split(self::fileName, null, null, null, null, null, null, null, self::password, self::folderName);
        $resultFromTo = $this->getApi()->split(self::fileName, null, null, null, null, 2, 3, null, self::password, self::folderName);
        Assert::assertEquals(2, count($resultFromTo->getSlides()));
        Assert::assertTrue(count($result->getSlides()) > count($resultFromTo->getSlides()));

        $url = $result->getSlides()[0]->getHref();
        $path = substr($url, strpos($url, "/storage/file/") + strlen("/storage/file/"));
        $resultExists = $this->getApi()->objectExists($path);
        Assert::assertTrue($resultExists->getExists());
    }

    public function testSplitRequest()
    {
        $result = $this->getApi()->splitOnline(fopen("TestData/".self::fileName, 'r'), self::format, null, null, null, null, self::password);
        $resultFromTo = $this->getApi()->splitOnline(fopen("TestData/".self::fileName, 'r'), self::format, null, null, 2, 3, self::password);
        Assert::assertTrue($result->isFile());
        Assert::assertTrue($resultFromTo->isFile());
        Assert::assertNotEquals($result->getSize(), $resultFromTo->getSize());
        $zip = zip_open($result->getPathname());
        $zipCount = 0;
        while ($zipFile = zip_read($zip)) {
            $zipCount++;
        }
        $zipFromTo = zip_open($resultFromTo->getPathname());
        $zipFromToCount = 0;
        while ($zipFromToFile = zip_read($zipFromTo)) {
            $zipFromToCount++;
        }
        Assert::assertEquals(2, $zipFromToCount);
        Assert::assertTrue($zipCount > $zipFromToCount);
        zip_close($zipFromTo);
        zip_close($zip);
    }

    public function testSplitAndSaveRequest()
    {
        $result = $this->getApi()->splitAndSaveOnline(fopen("TestData/".self::fileName, 'r'), self::format, null, null, null, null, null, self::password);
        $resultFromTo = $this->getApi()->splitAndSaveOnline(fopen("TestData/".self::fileName, 'r'), self::format, null, null, null, 2, 3, self::password);
        Assert::assertEquals(2, count($resultFromTo->getSlides()));
        Assert::assertTrue(count($result->getSlides()) > count($resultFromTo->getSlides()));

        $url = $result->getSlides()[0]->getHref();
        $path = substr($url, strpos($url, "/storage/file/") + strlen("/storage/file/"));
        $resultExists = $this->getApi()->objectExists($path);
        Assert::assertTrue($resultExists->getExists());
    }

    public function testSplitWithOptions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $options = new PdfExportOptions();
        $options->setJpegQuality(50);
        $result = $this->getApi()->split(self::fileName, $options, self::format, null, null, null, null, null, self::password, self::folderName);
        $url = $result->getSlides()[0]->getHref();
        $path = substr($url, strpos($url, "/storage/file/") + strlen("/storage/file/"));
        $resultExists = $this->getApi()->objectExists($path);
        Assert::assertTrue($resultExists->getExists());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const format = "pdf";
}
