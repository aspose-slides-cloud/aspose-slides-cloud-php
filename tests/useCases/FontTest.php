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

use Aspose\Slides\Cloud\Sdk\Tests\TestBase;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\FontSubstRule;
use Aspose\Slides\Cloud\Sdk\Model\ImageExportOptions;

class FontTest extends TestBase
{
    public function testGetAvailableFonts()
    {
        $result = $this->getSlidesApi()->getAvailableFonts();
        Assert::assertTrue(count($result->getList()) > 1);
        Assert::assertTrue($result->getList()[0]->getIsCustom() == null);
    }

    public function testGetFonts()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->getFonts(self::fileName, self::password, self::folderName);
        Assert::assertTrue(count($result->getList()) == 3);
    }

    public function testGetFontsOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $result = $this->getSlidesApi()->getFontsONline($file, self::password, self::folderName);
        Assert::assertTrue(count($result->getList()) == 3);
    }

    public function testSetEmbeddedFont()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->setEmbeddedFont(self::fileName, self::fontName, false, self::password, self::folderName);
        Assert::assertNull($result->getList()[0]->getIsEmbedded());
        Assert::assertNotNull($result->getList()[1]->getIsEmbedded());
        Assert::assertTrue($result->getList()[2]->getIsEmbedded());
        Assert::assertEquals(self::fontName, $result->getList()[2]->getFontName());
    }

    public function testSetEmbeddedFontOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $result = $this->getSlidesApi()->setEmbeddedFontOnline($file, self::fontName, false, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testSetEmbeddedFontFromRequest()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $file = fopen(self::localFolderName."/".self::fontFileName, 'r');
        $result = $this->getSlidesApi()->setEmbeddedFontFromRequest($file, self::fileName, false, self::password, self::folderName);
        Assert::assertNull($result->getList()[0]->getIsEmbedded());
        Assert::assertNotNull($result->getList()[1]->getIsEmbedded());
        Assert::assertTrue($result->getList()[2]->getIsEmbedded());
        Assert::assertEquals(self::fontName, $result->getList()[2]->getFontName());
    }

    public function testSetEmbeddedFontFromRequestOnline()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $file = fopen(self::localFilePath, 'r');
        $fontFile = fopen(self::localFolderName."/".self::fontFileName, 'r');

        $result = $this->getSlidesApi()->setEmbeddedFontFromRequestOnline($file, $fontFile, false, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testCompressEmbeddedFonts()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->setEmbeddedFont(self::fileName, self::fontName, false, self::password, self::folderName);
        Assert::assertTrue($result->getList()[2]->getIsEmbedded());
        //In a real world example, you would rather get the same result by just calling SetEmbeddedFont with onlyUsed = true
        $this->getSlidesApi()->compressEmbeddedFonts(self::fileName, self::password, self::folderName);
    }

    public function testCompressEmbeddedFontsOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $resultEmbedded = $this->getSlidesApi()->setEmbeddedFontOnline($file, self::fontName, false, self::password, self::folderName);
        Assert::assertTrue($resultEmbedded->isFile());
        $resultCompressed = $this->getSlidesApi()->compressEmbeddedFontsOnline($resultEmbedded, self::password);
        Assert::assertTrue($resultCompressed->isFile());
        Assert::assertTrue($resultEmbedded->getSize() > $resultCompressed->getSize());
    }

    public function testDeleteEmbeddedFont()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->setEmbeddedFont(self::fileName, self::fontName, false, self::password, self::folderName);
        Assert::assertTrue($result->getList()[2]->getIsEmbedded());
        $result = $this->getSlidesApi()->deleteEmbeddedFont(self::fileName, self::fontName, self::password, self::folderName);
        Assert::assertNull($result->getList()[2]->getIsEmbedded());
    }

    public function testDeleteEmbeddedFontOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $resultEmbedded = $this->getSlidesApi()->setEmbeddedFontOnline($file, self::fontName, false, self::password, self::folderName);
        Assert::assertTrue($resultEmbedded->isFile());
        $resultDeleted = $this->getSlidesApi()->deleteEmbeddedFontOnline($resultEmbedded, self::fontName, self::password, self::folderName);
        Assert::assertTrue($resultDeleted->isFile());
        Assert::assertTrue($resultEmbedded->getSize() > $resultDeleted->getSize());
    }

    public function testReplaceFont()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->replaceFont(self::fileName, self::fontName, self::fontNameTimes, true, self::password, self::folderName);
        Assert::assertTrue($result->getList()[2]->getIsEmbedded());
        Assert::assertEquals(self::fontNameTimes, $result->getList()[2]->getFontName());
    }

    public function testReplaceFontOnline()
    {
        $file = fopen(self::localFilePath, 'r');
        $result = $this->getSlidesApi()->replaceFontOnline($file, self::fontName, self::fontNameTimes, true, self::password);
        Assert::assertTrue($result->isFile());
    }

    public function testFontSubstitution()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        
        $fontRule1 = new FontSubstRule();
        $fontRule1 -> setSourceFont("Arial");
        $fontRule1 -> setTargetFont(self::fontNameTimes);
        $fontRule1 -> setNotFoundOnly(false);
        $fontRule2 = new FontSubstRule();
        $fontRule2 -> setSourceFont(self::fontName);
        $fontRule2 -> setTargetFont(self::fontNameTimes);
        $exportOptions = new ImageExportOptions();
        $exportOptions -> setFontSubstRules([$fontRule1, $fontRule2]);
        
        $result = $this->getSlidesApi()->downloadPresentation(self::fileName, "png", $exportOptions, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public const fontFileName = "calibri.ttf";
    public const fontName = "Calibri";
    public const fontNameTimes = "Times New Roman";
}