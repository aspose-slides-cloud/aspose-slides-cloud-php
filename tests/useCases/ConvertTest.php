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
use Aspose\Slides\Cloud\Sdk\Model\Requests\CopyFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\ObjectExistsRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesConvertRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesSaveAsRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PutSlidesConvertRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PutSlidesSaveAsRequest;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class ConvertTest extends TestBase
{
    public function testConvertPostFromRequest()
    {
        $request = new PostSlidesConvertRequest(fopen("TestData/".self::fileName, 'r'), self::format, self::password);
        $result = $this->getApi()->postSlidesConvert($request);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertPutFromRequest()
    {
        $putRequest = new PutSlidesConvertRequest(fopen("TestData/".self::fileName, 'r'), self::format, self::outPath, self::password);
        $this->getApi()->putSlidesConvert($putRequest);
        $existsRequest = new ObjectExistsRequest(self::outPath);
        $result = $this->getApi()->objectExists($existsRequest);
        Assert::assertTrue($result->getExists());
    }

    public function testConvertPostFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $request = new PostSlidesSaveAsRequest(self::fileName, self::format, null, self::password, null, self::folderName);
        $result = $this->getApi()->postSlidesSaveAs($request);
        Assert::assertTrue($result->isFile());
    }

    public function testConvertPutFromStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $putRequest = new PutSlidesSaveAsRequest(self::fileName, self::outPath, self::format, null, self::password, null, self::folderName);
        $this->getApi()->putSlidesSaveAs($putRequest);
        $existsRequest = new ObjectExistsRequest(self::outPath);
        $result = $this->getApi()->objectExists($existsRequest);
        Assert::assertTrue($result->getExists());
    }


    public function testConvertWithOptions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile(new CopyFileRequest("TempTests/".self::fileName, self::folderName."/".self::fileName));

        $request = new PostSlidesSaveAsRequest(self::fileName, self::format, null, self::password, null, self::folderName);
        $result1 = $this->getApi()->postSlidesSaveAs($request);
        $options = new PdfExportOptions();
        $options->setDrawSlidesFrame(true);
        $request = new PostSlidesSaveAsRequest(self::fileName, self::format, $options, self::password, null, self::folderName);
        $result2 = $this->getApi()->postSlidesSaveAs($request);
        Assert::assertNotEquals($result1->getSize(), $result2->getSize());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const outPath = self::folderName."/converted.pdf";
    public const format = 'pdf';
}
