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
use Aspose\Slides\Cloud\Sdk\Model\NotesSlideExportFormat;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class NotesSlideTest extends TestBase
{
    public function testNotesSlideGetStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $this->getApi()->getNotesSlide(self::fileName, self::slideIndex, self::password, self::folderName);
    }

    public function testNotesSlideExistsStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->notesSlideExists(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue($result->getExists());
    }

    public function testNotesSlideDownloadStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->downloadNotesSlide(self::fileName, self::slideIndex, self::format, null, null, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testNotesSlideGetRequest()
    {
        $this->getApi()->getNotesSlideOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::password);
    }

    public function testNotesSlideExistsRequest()
    {
        $result = $this->getApi()->notesSlideExistsOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::password);
        Assert::assertTrue($result->getExists());
    }

    public function testNotesSlideDownloadRequest()
    {
        $result = $this->getApi()->downloadNotesSlideOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::format, null, null, self::password);
        Assert::assertTrue($result->isFile());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 1;
    public const format = NotesSlideExportFormat::PNG;
}
