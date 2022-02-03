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
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Model\PictureFrame;
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\Hyperlink;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class HyperlinkTest extends TestBase
{
    public function testHyperlinkGetShape()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shape = $this->getApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue($shape->getHyperlinkClick() != null);
        Assert::assertEquals("Hyperlink", $shape->getHyperlinkClick()->getActionType());
        Assert::assertTrue($shape->getHyperlinkMouseOver() == null);
    }

    public function testHyperlinkGetPortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $portion = $this->getApi()->getPortion(self::fileName, self::slideIndex, self::hoverShapeIndex, self::paragraphIndex, self::portionIndex, self::password, self::folderName);
        Assert::assertTrue($portion->getHyperlinkClick() == null);
        Assert::assertTrue($portion->getHyperlinkMouseOver() != null);
        Assert::assertEquals("JumpLastSlide", $portion->getHyperlinkMouseOver()->getActionType());
    }

    public function testHyperlinkCreateShape()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shape = new Shape();
        $hyperlink = new Hyperlink();
        $hyperlink->setActionType("Hyperlink");
        $hyperlink->setExternalUrl("https://docs.aspose.cloud/slides");
        $shape->setHyperlinkClick($hyperlink);
        $updatedShape = $this->getApi()->updateShape(self::fileName, 1, 1, $shape, self::password, self::folderName);
        Assert::assertTrue($shape->getHyperlinkClick() != null);
        Assert::assertEquals("Hyperlink", $shape->getHyperlinkClick()->getActionType());
        Assert::assertTrue($shape->getHyperlinkMouseOver() == null);
    }

    public function testHyperlinkCreatePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $portion = new Portion();
        $portion->setText("Link text");
        $hyperlink = new Hyperlink();
        $hyperlink->setActionType("JumpLastSlide");
        $portion->setHyperlinkMouseOver($hyperlink);
        $updatedPortion = $this->getApi()->createPortion(self::fileName, 1, 1, 1, $portion, null, self::password, self::folderName);
        Assert::assertTrue($updatedPortion->getHyperlinkMouseOver() != null);
        Assert::assertEquals("JumpLastSlide", $updatedPortion->getHyperlinkMouseOver()->getActionType());
    }

    public function testHyperlinkDelete()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shape = new PictureFrame();
        $hyperlink = new Hyperlink();
        $hyperlink->setIsDisabled(true);
        $shape->setHyperlinkClick($hyperlink);
        $updatedShape = $this->getApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $shape, self::password, self::folderName);
        Assert::assertTrue($updatedShape->getHyperlinkClick() == null);
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 2;
    public const shapeIndex = 2;
    public const hoverShapeIndex = 1;
    public const paragraphIndex = 1;
    public const portionIndex = 2;
}
