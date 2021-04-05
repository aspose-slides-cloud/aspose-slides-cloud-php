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

class CreateTest extends TestBase
{
    public function testCreateEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(self::folderName."/".self::fileName);
        $this->getApi()->createPresentation(self::fileName, null, null, null, self::folderName);
    }

    public function testCreateFromRequest()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(self::folderName."/".self::fileName);
        $this->getApi()->createPresentation(self::fileName, fopen("TestData/".self::fileName, 'r'), self::password, null, self::folderName);
    }

    public function testCreateFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $this->getApi()->DeleteFile(self::folderName."/".self::newFileName);

        $this->getApi()->createPresentationFromSource(self::newFileName, self::folderName."/".self::fileName, self::password, null, null, self::folderName);
    }

    public function testCreateFromTemplate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::templateFileName, self::folderName."/".self::templateFileName);
        $this->getApi()->DeleteFile(self::folderName."/".self::fileName);

        $this->getApi()->createPresentationFromTemplate(self::fileName, self::folderName."/".self::templateFileName, self::template, null, null, null, null, self::folderName);
    }

    public function testCreateFromHtml()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(self::folderName."/".self::fileName);

        $this->getApi()->importFromHtml(self::fileName, self::html, null, self::folderName);
    }

    public function testAppendFromHtml()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result1 = $this->getApi()->getSlides(self::fileName, self::password, self::folderName);
        $this->getApi()->importFromHtml(self::fileName, self::html, self::password, self::folderName);
        $result2 = $this->getApi()->getSlides(self::fileName, self::password, self::folderName);
        Assert::assertTrue(count($result2->getSlideList()) > count($result1->getSlideList()));
    }

    public function testCreateFromPdf()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(self::folderName."/".self::fileName);

        $this->getApi()->importFromPdf(self::fileName, fopen("TestData/".self::pdfFileName, 'r'), null, self::folderName);
    }

    public function testAppendFromPdf()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result1 = $this->getApi()->getSlides(self::fileName, self::password, self::folderName);
        $this->getApi()->importFromPdf(self::fileName, fopen("TestData/".self::pdfFileName, 'r'), self::password, self::folderName);
        $result2 = $this->getApi()->getSlides(self::fileName, self::password, self::folderName);
        Assert::assertTrue(count($result2->getSlideList()) > count($result1->getSlideList()));
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const newFileName = "test2.pptx";
    public const templateFileName = "TemplateCV.pptx";
    public const pdfFileName = "test.pdf";
    public const password = "password";
    public const html = "<html><body>New Content</body></html>";
    public const template = "<staff><person><name>John Doe</name><address><line1>10 Downing Street</line1><line2>London</line2></address><phone>+457 123456</phone><bio>Hi, I'm John and this is my CV</bio><skills><skill><title>C#</title><level>Excellent</level></skill><skill><title>C++</title><level>Good</level></skill><skill><title>Java</title><level>Average</level></skill></skills></person></staff>";
}
