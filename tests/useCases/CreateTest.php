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

class CreateTest extends TestBase
{
    public function testCreateEmpty()
    {
        $this->getSlidesApi()->DeleteFile(self::filePath);
        $created = $this->getSlidesApi()->createPresentation(self::fileName, null, null, null, self::folderName);
        Assert::assertNotNull($created);
    }

    public function testCreateFromRequest()
    {
        $this->getSlidesApi()->DeleteFile(self::filePath);
        $created = $this->getSlidesApi()->createPresentation(self::fileName, fopen(self::localFilePath, 'r'), self::password, null, self::folderName);
        Assert::assertNotNull($created);
    }

    public function testCreateFromStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getSlidesApi()->DeleteFile(self::folderName."/".self::newFileName);
        $created = $this->getSlidesApi()->createPresentationFromSource(self::newFileName, self::filePath, self::password, null, null, self::folderName);
        Assert::assertNotNull($created);
    }

    public function testCreateFromTemplate()
    {
        $this->getSlidesApi()->CopyFile(self::tempFolderName."/".self::templateFileName, self::folderName."/".self::templateFileName);
        $this->getSlidesApi()->DeleteFile(self::filePath);
        $created = $this->getSlidesApi()->createPresentationFromTemplate(self::fileName, self::folderName."/".self::templateFileName, self::template, null, null, null, null, self::folderName);
        Assert::assertNotNull($created);
    }

    public function testCreateFromHtml()
    {
        $this->getSlidesApi()->DeleteFile(self::filePath);
        $created = $this->getSlidesApi()->importFromHtml(self::fileName, self::html, null, self::folderName);
        Assert::assertNotNull($created);
    }

    public function testAppendFromHtml()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result1 = $this->getSlidesApi()->getSlides(self::fileName, self::password, self::folderName);
        $this->getSlidesApi()->importFromHtml(self::fileName, self::html, self::password, self::folderName);
        $result2 = $this->getSlidesApi()->getSlides(self::fileName, self::password, self::folderName);
        Assert::assertTrue(count($result2->getSlideList()) > count($result1->getSlideList()));
    }

    public function testCreateFromPdf()
    {
        $this->getSlidesApi()->DeleteFile(self::filePath);
        $created = $this->getSlidesApi()->importFromPdf(self::fileName, fopen(self::localFolderName."/".self::pdfFileName, 'r'), null, self::folderName);
        Assert::assertNotNull($created);
    }

    public function testAppendFromPdf()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result1 = $this->getSlidesApi()->getSlides(self::fileName, self::password, self::folderName);
        $this->getSlidesApi()->importFromPdf(self::fileName, fopen(self::localFolderName."/".self::pdfFileName, 'r'), self::password, self::folderName);
        $result2 = $this->getSlidesApi()->getSlides(self::fileName, self::password, self::folderName);
        Assert::assertTrue(count($result2->getSlideList()) > count($result1->getSlideList()));
    }

    public const newFileName = "test2.pptx";
    public const templateFileName = "TemplateCV.pptx";
    public const pdfFileName = "test.pdf";
    public const html = "<html><body>New Content</body></html>";
    public const template = "<staff><person><name>John Doe</name><address><line1>10 Downing Street</line1><line2>London</line2></address><phone>+457 123456</phone><bio>Hi, I'm John and this is my CV</bio><skills><skill><title>C#</title><level>Excellent</level></skill><skill><title>C++</title><level>Good</level></skill><skill><title>Java</title><level>Average</level></skill></skills></person></staff>";
}
