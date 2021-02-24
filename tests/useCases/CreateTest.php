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
use Aspose\Slides\Cloud\Sdk\Model\Requests\CopyFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\DeleteFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\GetSlidesSlidesListRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesDocumentRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesDocumentFromHtmlRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesDocumentFromPdfRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesDocumentFromSourceRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesDocumentFromTemplateRequest;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class CreateTest extends TestBase
{
    public function testCreateEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(new DeleteFileRequest(self::folderName."/".self::fileName));

        $request = new PostSlidesDocumentRequest(self::fileName, null, null, null, null, self::folderName);
        $this->getApi()->postSlidesDocument($request);
    }

    public function testCreateFromRequest()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(new DeleteFileRequest(self::folderName."/".self::fileName));

        $request = new PostSlidesDocumentRequest(self::fileName, fopen("TestData/".self::fileName, 'r'), self::password, null, null, self::folderName);
        $this->getApi()->postSlidesDocument($request);
    }

    public function testCreateFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));
        $this->getApi()->DeleteFile(new DeleteFileRequest(self::folderName."/".self::newFileName));

        $request = new PostSlidesDocumentFromSourceRequest(self::newFileName, self::folderName."/".self::fileName, self::password, null, null, null, self::folderName);
        $this->getApi()->postSlidesDocumentFromSource($request);
    }

    public function testCreateFromTemplate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::templateFileName, self::folderName."/".self::templateFileName));
        $this->getApi()->DeleteFile(new DeleteFileRequest(self::folderName."/".self::fileName));

        $request = new PostSlidesDocumentFromTemplateRequest(self::fileName, self::folderName."/".self::templateFileName, self::template, null, null, null, null, null, self::folderName);
        $this->getApi()->postSlidesDocumentFromTemplate($request);
    }

    public function testCreateFromHtml()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(new DeleteFileRequest(self::folderName."/".self::fileName));

        $request = new PostSlidesDocumentFromHtmlRequest(self::fileName, self::html, null, null, self::folderName);
        $this->getApi()->postSlidesDocumentFromHtml($request);
    }

    public function testAppendFromHtml()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $getRequest = new GetSlidesSlidesListRequest(self::fileName, self::password, self::folderName);
        $result1 = $this->getApi()->getSlidesSlidesList($getRequest);
        $postRequest = new PostSlidesDocumentFromHtmlRequest(self::fileName, self::html, self::password, null, self::folderName);
        $this->getApi()->postSlidesDocumentFromHtml($postRequest);
        $result2 = $this->getApi()->getSlidesSlidesList($getRequest);
        Assert::assertTrue(count($result2->getSlideList()) > count($result1->getSlideList()));
    }

    public function testCreateFromPdf()
    {
        $this->initialize(null, null, null);
        $this->getApi()->DeleteFile(new DeleteFileRequest(self::folderName."/".self::fileName));

        $request = new PostSlidesDocumentFromPdfRequest(self::fileName, fopen("TestData/".self::pdfFileName, 'r'), null, null, self::folderName);
        $this->getApi()->postSlidesDocumentFromPdf($request);
    }

    public function testAppendFromPdf()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $getRequest = new GetSlidesSlidesListRequest(self::fileName, self::password, self::folderName);
        $result1 = $this->getApi()->getSlidesSlidesList($getRequest);
        $postRequest = new PostSlidesDocumentFromPdfRequest(self::fileName, fopen("TestData/".self::pdfFileName, 'r'), self::password, null, self::folderName);
        $this->getApi()->postSlidesDocumentFromPdf($postRequest);
        $result2 = $this->getApi()->getSlidesSlidesList($getRequest);
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
