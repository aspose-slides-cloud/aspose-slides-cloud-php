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
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\PortionFormat;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class TextTest extends TestBase
{
    public function testTextGet()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $presentationResult = $this->getApi()->replacePresentationText(self::fileName, self::oldValue, self::newValue, null, self::password, self::folderName);

        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $presentationResultIgnoreCase = $this->getApi()->replacePresentationText(self::fileName, self::oldValue, self::newValue, true, self::password, self::folderName);

        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $slideResult = $this->getApi()->replaceSlideText(self::fileName, self::slideIndex, self::oldValue, self::newValue, null, self::password, self::folderName);

        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $slideResultIgnoreCase = $this->getApi()->replaceSlideText(self::fileName, self::slideIndex, self::oldValue, self::newValue, true, self::password, self::folderName);

        Assert::assertTrue($presentationResultIgnoreCase->getMatches() > $presentationResult->getMatches());
        Assert::assertTrue($presentationResult->getMatches() > $slideResult->getMatches());
        Assert::assertTrue($slideResultIgnoreCase->getMatches() > $slideResult->getMatches());
    }

    public function testTextReplaceRequest()
    {
        $presentationResult = $this->getApi()->replacePresentationTextOnline(fopen(self::localFilePath, 'r'), self::oldValue, self::newValue, null, self::password);
        $presentationResultIgnoreCase = $this->getApi()->replacePresentationTextOnline(fopen(self::localFilePath, 'r'), self::oldValue, self::newValue, true, self::password);
        $slideResult = $this->getApi()->replaceSlideTextOnline(fopen(self::localFilePath, 'r'), self::slideIndex, self::oldValue, self::newValue, null, self::password);
        $slideResultIgnoreCase = $this->getApi()->replaceSlideTextOnline(fopen(self::localFilePath, 'r'), self::slideIndex, self::oldValue, self::newValue, true, self::password);
        Assert::assertTrue($presentationResult->isFile());
        Assert::assertTrue($presentationResultIgnoreCase->isFile());
        Assert::assertTrue($slideResult->isFile());
        Assert::assertTrue($slideResultIgnoreCase->isFile());
    }

    public function testReplaceTextFormatting()
    {
        $oldText = "banana";
        $newText = "orange";
        $color = "#FFFFA500";
        $shapeIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;

        $portion = new Portion();
        $portion->setText($oldText);

        $portionFormat = new PortionFormat();
        $portionFormat->setFontColor($color);

        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getApi()->createPortion(self::fileName, self::slideIndex, $shapeIndex, $paragraphIndex, $portion, $portionIndex, self::password, self::folderName);
        $this->getApi()->replaceTextFormatting(self::fileName, $oldText, $newText, $portionFormat, false, self::password, self::folderName);
        $result = $this->getApi()->getPortion(self::fileName, self::slideIndex, $shapeIndex, $paragraphIndex, $portionIndex, self::password, self::folderName);

        Assert::assertEquals($newText, $result->getText());
        Assert::assertEquals($color, $result->getFontColor());
    }

    public function testReplaceTextFormattingOnline()
    {
        $portionFormat = new Portionformat();
        $portionFormat->setFontColor("#FFFFA500");
        $result = $this->getApi()->replaceTextFormattingOnline(fopen(self::localFilePath, 'r'), "banana", "orange", $portionFormat, false, self::password);
        Assert::assertTrue($result->isFile());
    }

    public function testHighlightShapeText()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $shapeIndex = 1;
        $slideIndex = 6;
        $paragraphIndex = 1;

        $this->getApi()->highlightShapeText(
            self::fileName,
            $slideIndex,
            $shapeIndex,
            self::textToHighlight,
            self::highlightColor,
            null,
            false,
            self::password,
            self::folderName
        );

        $para = $this->getApi()->getParagraph(
            self::fileName,
            $slideIndex,
            $shapeIndex,
            $paragraphIndex,
            self::password,
            self::folderName
        );
        Assert::assertNotEquals($para->getPortionList()[0]->getText(), self::textToHighlight);
        Assert::assertNotEquals($para->getPortionList()[0]->getHighlightColor(), self::highlightColor);
        Assert::assertEquals($para->getPortionList()[1]->getText(), self::textToHighlight);
        Assert::assertEquals($para->getPortionList()[1]->getHighlightColor(), self::highlightColor);
    }

    public function testHighlightShapeRegex()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $shapeIndex = 1;
        $slideIndex = 6;
        $paragraphIndex = 1;

        $this->getApi()->highlightShapeRegex(
            self::fileName,
            $slideIndex,
            $shapeIndex,
            self::highlightRegex,
            self::highlightColor,
            null,
            false,
            self::password,
            self::folderName
        );

        $para = $this->getApi()->getParagraph(
            self::fileName,
            $slideIndex,
            $shapeIndex,
            $paragraphIndex,
            self::password,
            self::folderName
        );
        Assert::assertNotEquals($para->getPortionList()[0]->getText(), self::textToHighlight);
        Assert::assertNotEquals($para->getPortionList()[0]->getHighlightColor(), self::highlightColor);
        Assert::assertEquals($para->getPortionList()[1]->getText(), self::textToHighlight);
        Assert::assertEquals($para->getPortionList()[1]->getHighlightColor(), self::highlightColor);
    }

    public const oldValue = "text";
    public const newValue = "new_text";
    public const slideIndex = 1;
    public const textToHighlight = "highlight";
    public const highlightColor = "#FFF5FF8A";
    public const highlightRegex = "h.ghl[abci]ght";
}
