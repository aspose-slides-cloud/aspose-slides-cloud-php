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
use Aspose\Slides\Cloud\Sdk\Model\Paragraph;
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\SlideAnimation;
use Aspose\Slides\Cloud\Sdk\Model\Effect;
use Aspose\Slides\Cloud\Sdk\Model\SpecialSlideType;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class LayoutSlideTest extends TestBase
{
    public function testLayoutSlides()
    {
        $sourceFile = "TemplateCV.pptx";
        $sourcePath = self::folderName."/".$sourceFile;
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getSlidesApi()->CopyFile(self::tempFolderName."/".$sourceFile, $sourcePath);

        $layoutSlides = $this->getSlidesApi()->GetLayoutSlides(self::fileName, self::password, self::folderName);
        Assert::assertEquals(11, count($layoutSlides->getSlideList()));

        $layoutSlide = $this->getSlidesApi()->GetLayoutSlide(self::fileName, 1, self::password, self::folderName);
        Assert::assertEquals("Title Slide", $layoutSlide->getName());

        $layoutSlide = $this->getSlidesApi()->CopyLayoutSlide(
            self::fileName, $sourcePath, 2, null, null, self::password, self::folderName);
        Assert::assertEquals("Title and Content", $layoutSlide->getName());

        $layoutSlides = $this->getSlidesApi()->GetLayoutSlides(self::fileName, self::password, self::folderName);
        Assert::assertEquals(12, count($layoutSlides->getSlideList()));
    }

    public function testLayoutSlideShapes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount, count($shapes->getShapesLinks()));

        $dto = new Shape();
        $dto->setX(100);
        $dto->setY(100);
        $dto->setWidth(500);
        $dto->setHeight(200);
        $dto->setShapeType("Rectangle");
        $dto->setText("New shape");

        $shape = $this->getSlidesApi()->CreateSpecialSlideShape(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, $dto, null, null, self::password, self::folderName);
        Assert::assertEquals($dto->getText(), $shape->getText());
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount + 1, count($shapes->getShapesLinks()));
        Assert::assertEquals($dto->getText(), $shape->getText());

        $dto->setText("Updated shape");
        $shape = $this->getSlidesApi()->UpdateSpecialSlideShape(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::shapeCount + 1, $dto, self::password, self::folderName);
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount + 1, count($shapes->getShapesLinks()));

        $shape = $this->getSlidesApi()->DeleteSpecialSlideShape(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::shapeCount + 1, self::password, self::folderName);
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount, count($shapes->getShapesLinks()));
    }

    public function testLayoutSlideParagraphs()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount, count($paragraphs->getParagraphLinks()));

        $dto = new Paragraph();
        $dto->setAlignment("Right");
        $portion = new Portion();
        $portion->setText("New paragraph");
        $dto->setPortionList([ $portion ]);
        $paragraph = $this->getSlidesApi()->CreateSpecialSlideParagraph(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName);
        Assert::assertEquals($dto->getAlignment(), $paragraph->getAlignment());
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount + 1, count($paragraphs->getParagraphLinks()));

        $dto = new Paragraph();
        $dto->setAlignment("Center");
        $paragraph = $this->getSlidesApi()->UpdateSpecialSlideParagraph(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphCount + 1,
            $dto,
            self::password,
            self::folderName);
        Assert::assertEquals($dto->getAlignment(), $paragraph->getAlignment());
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount + 1, count($paragraphs->getParagraphLinks()));

        $this->getSlidesApi()->DeleteSpecialSlideParagraph(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphCount + 1,
            self::password,
            self::folderName);
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount, count($paragraphs->getParagraphLinks()));
    }

    public function testLayoutSlidePortions()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $portions = $this->getSlidesApi()->GetSpecialSlidePortions(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName);
        Assert::assertEquals(self::portionCount, count($portions->getItems()));

        $dto = new Portion();
        $dto->setFontBold("True");
        $dto->setText("New portion");
        $portion = $this->getSlidesApi()->CreateSpecialSlidePortion(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            $dto,
            null,
            self::password,
            self::folderName);
        Assert::assertEquals($dto->getFontBold(), $portion->getFontBold());
        Assert::assertEquals($dto->getText(), $portion->getText());
        $portions = $this->getSlidesApi()->GetSpecialSlidePortions(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName);
        Assert::assertEquals(self::portionCount + 1, count($portions->getItems()));

        $dto2 = new Portion();
        $dto2->setFontHeight(22);
        $dto2->setText("Updated portion");
        $portion = $this->getSlidesApi()->UpdateSpecialSlidePortion(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionCount + 1,
            $dto2,
            self::password,
            self::folderName);
        Assert::assertEquals($dto->getFontBold(), $portion->getFontBold());
        Assert::assertEquals($dto2->getFontHeight(), $portion->getFontHeight());
        Assert::assertEquals($dto2->getText(), $portion->getText());
        $portions = $this->getSlidesApi()->GetSpecialSlidePortions(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName);
        Assert::assertEquals(self::portionCount + 1, count($portions->getItems()));

        $this->getSlidesApi()->DeleteSpecialSlidePortion(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionCount + 1,
            self::password,
            self::folderName);
        $portions = $this->getSlidesApi()->GetSpecialSlidePortions(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::LAYOUT_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName);
        Assert::assertEquals(self::portionCount, count($portions->getItems()));
    }

    public function testLayoutSlideAnimation()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $animation = $this->getSlidesApi()->GetSpecialSlideAnimation(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, null, null, self::password, self::folderName);
        Assert::assertEquals(1, count($animation->getMainSequence()));

        $dto = new SlideAnimation();
        $effect1 = new Effect();
        $effect1->setType("Blink");
        $effect1->setShapeIndex(2);
        $effect2 = new Effect();
        $effect2->setType("Appear");
        $effect2->setShapeIndex(3);
        $dto->setMainSequence([ $effect1, $effect2 ]);
        $animation = $this->getSlidesApi()->SetSpecialSlideAnimation(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, $dto, self::password, self::folderName);
        Assert::assertEquals(count($dto->getMainSequence()), count($animation->getMainSequence()));
        $animation = $this->getSlidesApi()->GetSpecialSlideAnimation(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, 3, null, self::password, self::folderName);
        Assert::assertEquals(1, count($animation->getMainSequence()));

        $animation = $this->getSlidesApi()->DeleteSpecialSlideAnimationEffect(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, 2, self::password, self::folderName);
        Assert::assertEquals(count($dto->getMainSequence()) - 1, count($animation->getMainSequence()));
        $animation = $this->getSlidesApi()->GetSpecialSlideAnimation(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, 3, null, self::password, self::folderName);
        Assert::assertEquals(0, count($animation->getMainSequence()));

        $animation = $this->getSlidesApi()->DeleteSpecialSlideAnimation(
            self::fileName, self::slideIndex, SpecialSlideType::LAYOUT_SLIDE, self::password, self::folderName);
        Assert::assertEquals(0, count($animation->getMainSequence()));
    }

    public function testDeleteUnusedLayoutSlides()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $layoutSlidesBefore = $this->getSlidesApi()->getLayoutSlides(self::fileName, self::password, self::folderName);
        Assert::assertEquals(count($layoutSlidesBefore->getSlideList()), self::layoutSlidesCount);
        $layoutSlidesAfter = $this->getSlidesApi()->deleteUnusedLayoutSLides(self::fileName, self::password, self::folderName);
        Assert::assertEquals(count($layoutSlidesAfter->getSlideList()), 2);
     }

     public function testDeleteUnusedLayoutSlidesOnline()
     {
        $file = fopen(self::localFilePath, 'r');
        $result = $this->getSlidesApi()->deleteUnusedLayoutSlidesOnline($file, self::password);
        Assert::assertTrue($result->getSize() > 0);
    }

    public const slideIndex = 1;
    public const shapeIndex = 2;
    public const shapeCount = 6;
    public const paragraphIndex = 1;
    public const paragraphCount = 1;
    public const portionCount = 1;
    public const layoutSlidesCount = 11;
}
