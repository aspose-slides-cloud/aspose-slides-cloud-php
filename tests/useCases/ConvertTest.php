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
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;
use Aspose\Slides\Cloud\Sdk\Model\FontFallbackRule;
use Aspose\Slides\Cloud\Sdk\Model\PdfExportOptions;
use Aspose\Slides\Cloud\Sdk\Model\ImageExportOptions;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class ConvertTest extends TestBase
{
    public function testConvertPostFromRequest()
    {
        $result = $this->getApi()->convert(fopen("TestData/".self::fileName, 'r'), self::format, self::password);
        Assert::assertTrue($result->isFile());
        $resultSlides = $this->getApi()->convert(fopen("TestData/".self::fileName, 'r'), self::format, self::password, null, null, [ 2, 4 ]);
        Assert::assertTrue($result->isFile());
        Assert::assertTrue($result->getSize() > $resultSlides->getSize());
    }

    public function testConvertPutFromRequest()
    {
        $this->getApi()->convertAndSave(fopen("TestData/".self::fileName, 'r'), self::format, self::outPath, self::password);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertPostFromStorage()
    {
        $fileName = "test.pdf";
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".$fileName, self::folderName."/".$fileName);

        $result = $this->getApi()->downloadPresentation($fileName, ExportFormat::HTML5, null, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertPutFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $this->getApi()->savePresentation(self::fileName, self::format, self::outPath, null, self::password, self::folderName);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertWithOptionsFromRequest()
    {
        $result1 = $this->getApi()->convert(fopen("TestData/".self::fileName, 'r'), self::format, self::password);
        $options = new PdfExportOptions();
        $options->setDrawSlidesFrame(true);
        $result2 = $this->getApi()->convert(
            fopen("TestData/".self::fileName, 'r'), self::format, self::password, null, null, null, $options);
        Assert::assertNotEquals($result1->getSize(), $result2->getSize());
    }

    public function testConvertWithOptionsFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result1 = $this->getApi()->downloadPresentation(self::fileName, ExportFormat::PNG, null, self::password, self::folderName);
        $options = new ImageExportOptions();
        $options->setWidth(480);
        $options->setHeight(360);
        $result2 = $this->getApi()->downloadPresentation(self::fileName, ExportFormat::PNG, $options, self::password, self::folderName);
        Assert::assertTrue($result1->getSize() > $result2->getSize());
    }

    public function testConvertSlidePostFromRequest()
    {
        $result = $this->getApi()->downloadSlideOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::format, null, null, self::password);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertSlidePutFromRequest()
    {
        $this->getApi()->saveSlideOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::format, self::outPath, null, null, self::password);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertSlidePostFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->downloadSlide(self::fileName, self::slideIndex, self::format, null, null, null, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertSlidePutFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $this->getApi()->saveSlide(self::fileName, self::slideIndex, self::format, self::outPath, null, null, null, self::password, self::folderName);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertSlideWithOptionsFromRequest()
    {
        $result1 = $this->getApi()->downloadSlideOnline(
            fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::format, null, null, self::password);
        $options = new PdfExportOptions();
        $options->setDrawSlidesFrame(true);
        $result2 = $this->getApi()->downloadSlideOnline(
            fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::format, null, null, self::password, null, null, $options);
        Assert::assertNotEquals($result1->getSize(), $result2->getSize());
    }

    public function testConvertSlideWithOptionsFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result1 = $this->getApi()->downloadSlide(self::fileName, self::slideIndex, self::format, null, null, null, self::password, self::folderName);
        $options = new PdfExportOptions();
        $options->setDrawSlidesFrame(true);
        $result2 = $this->getApi()->downloadSlide(self::fileName, self::slideIndex, self::format, $options, null, null, self::password, self::folderName);
        Assert::assertNotEquals($result1->getSize(), $result2->getSize());
    }

    public function testConvertShapePostFromRequest()
    {
        $result = $this->getApi()->downloadShapeOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::shapeIndex, self::shapeFormat, null, null, null, self::password);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertShapePutFromRequest()
    {
        $this->getApi()->saveShapeOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::shapeIndex, self::shapeFormat, self::outPath, null, null, null, self::password);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertShapePostFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->downloadShape(self::fileName, self::slideIndex, self::shapeIndex, self::shapeFormat, null, null, null, null, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertSubshapePostFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->downloadSubshape(self::fileName, self::slideIndex, "4/shapes", 1, self::shapeFormat, null, null, null, null, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
        Assert::assertTrue($result->getSize() > 0);
    }

    public function testConvertShapePutFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $this->getApi()->saveShape(self::fileName, self::slideIndex, self::shapeIndex, self::shapeFormat, self::outPath, null, null, null, null, self::password, self::folderName);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertSubshapePutFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $this->getApi()->saveSubshape(self::fileName, self::slideIndex, "4/shapes", 1, self::shapeFormat, self::outPath, null, null, null, null, self::password, self::folderName);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertWithFontFallBackRules()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $fontFallbackRule1 = new FontFallbackRule();
        $fontFallbackRule1->setRangeStartIndex(self::startUnicodeIndex);
        $fontFallbackRule1->setRangeEndIndex(self::endUnicodeIndex);
        $fontFallbackRule1->setFallbackFontList(["Vijaya"]);

        $fontFallbackRule2 = new FontFallbackRule();
        $fontFallbackRule2->setRangeStartIndex(self::startUnicodeIndex);
        $fontFallbackRule2->setRangeEndIndex(self::endUnicodeIndex);
        $fontFallbackRule2->setFallbackFontList(["Segoe UI Emoji", "Segoe UI Symbol", "Arial"]);
        
        $exportOptions = new ImageExportOptions();
        $exportOptions->setFontFallbackRules([$fontFallbackRule1, $fontFallbackRule2]);

        $response = $this->getApi()->downloadPresentation(self::fileName, "png", $exportOptions, self::password, self::folderName);
        Assert::assertTrue($response->isFile());
        Assert::assertTrue($response->getSize() > 0);
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const outPath = self::folderName."/converted.pdf";
    public const format = 'pdf';
    public const shapeFormat = 'png';
    public const slideIndex = 1;
    public const shapeIndex = 3;
    public const startUnicodeIndex = 0x0B80;
    public const endUnicodeIndex = 0x0BFF;
}
