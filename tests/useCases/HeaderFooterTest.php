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
use Aspose\Slides\Cloud\Sdk\Model\HeaderFooter;
use Aspose\Slides\Cloud\Sdk\Model\NotesSlideHeaderFooter;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class HeaderFooterTest extends TestBase
{
    public function testSlidesFooter()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new HeaderFooter();
        $dto->setIsFooterVisible(true);
        $dto->setFooterText("footer");
        $dto->setIsDateTimeVisible(false);
        $this->getApi()->setPresentationHeaderFooter(self::fileName, $dto, self::password, self::folderName);
        $result = $this->getApi()->getSlideHeaderFooter(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue($result->getIsFooterVisible());
        Assert::assertFalse($result->getIsDateTimeVisible());
    }

    public function testSlideFooter()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new HeaderFooter();
        $dto->setIsFooterVisible(true);
        $dto->setFooterText("footer");
        $dto->setIsDateTimeVisible(false);
        $putResult = $this->getApi()->setSlideHeaderFooter(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertTrue($putResult->getIsFooterVisible());
        Assert::assertFalse($putResult->getIsDateTimeVisible());
        $getResult = $this->getApi()->getSlideHeaderFooter(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue($getResult->getIsFooterVisible());
        Assert::assertFalse($getResult->getIsDateTimeVisible());
    }

    public function testNotesSlideFooter()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new NotesSlideHeaderFooter();
        $dto->setIsHeaderVisible(true);
        $dto->setHeaderText("header");
        $dto->setIsDateTimeVisible(false);
        $putResult = $this->getApi()->setNotesSlideHeaderFooter(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertTrue($putResult->getIsHeaderVisible());
        Assert::assertFalse($putResult->getIsDateTimeVisible());
        $getResult = $this->getApi()->getNotesSlideHeaderFooter(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue($getResult->getIsHeaderVisible());
        Assert::assertFalse($getResult->getIsDateTimeVisible());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 1;
    public const format = "png";
}
