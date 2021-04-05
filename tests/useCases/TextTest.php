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

class TextTest extends TestBase
{
    public function testTextGet()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $presentationItems = $this->getApi()->getPresentationTextItems(self::fileName, null, self::password, self::folderName);
        $presentationItemsWithEmpty = $this->getApi()->getPresentationTextItems(self::fileName, true, self::password, self::folderName);
        $slideItems = $this->getApi()->getSlideTextItems(self::fileName, self::slideIndex, null, self::password, self::folderName);
        $slideItemsWithEmpty = $this->getApi()->getSlideTextItems(self::fileName, self::slideIndex, true, self::password, self::folderName);
        Assert::assertTrue(count($presentationItemsWithEmpty->getItems()) > count($presentationItems->getItems()));
        Assert::assertTrue(count($presentationItems->getItems()) > count($slideItems->getItems()));
        Assert::assertTrue(count($slideItemsWithEmpty->getItems()) > count($slideItems->getItems()));
    }

    public function testTextReplaceStorage()
    {
        $this->initialize(null, null, null);

        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $presentationResult = $this->getApi()->replacePresentationText(self::fileName, self::oldValue, self::newValue, null, self::password, self::folderName);

        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $presentationResultIgnoreCase = $this->getApi()->replacePresentationText(self::fileName, self::oldValue, self::newValue, true, self::password, self::folderName);

        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $slideResult = $this->getApi()->replaceSlideText(self::fileName, self::slideIndex, self::oldValue, self::newValue, null, self::password, self::folderName);

        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $slideResultIgnoreCase = $this->getApi()->replaceSlideText(self::fileName, self::slideIndex, self::oldValue, self::newValue, true, self::password, self::folderName);

        Assert::assertTrue($presentationResultIgnoreCase->getMatches() > $presentationResult->getMatches());
        Assert::assertTrue($presentationResult->getMatches() > $slideResult->getMatches());
        Assert::assertTrue($slideResultIgnoreCase->getMatches() > $slideResult->getMatches());
    }

    public function testTextReplaceRequest()
    {
        $presentationResult = $this->getApi()->replacePresentationTextOnline(fopen("TestData/".self::fileName, 'r'), self::oldValue, self::newValue, null, self::password);
        $presentationResultIgnoreCase = $this->getApi()->replacePresentationTextOnline(fopen("TestData/".self::fileName, 'r'), self::oldValue, self::newValue, true, self::password);
        $slideResult = $this->getApi()->replaceSlideTextOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::oldValue, self::newValue, null, self::password);
        $slideResultIgnoreCase = $this->getApi()->replaceSlideTextOnline(fopen("TestData/".self::fileName, 'r'), self::slideIndex, self::oldValue, self::newValue, true, self::password);
        Assert::assertTrue($presentationResult->isFile());
        Assert::assertTrue($presentationResultIgnoreCase->isFile());
        Assert::assertTrue($slideResult->isFile());
        Assert::assertTrue($slideResultIgnoreCase->isFile());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const oldValue = "text";
    public const newValue = "new_text";
    public const slideIndex = 1;
}
