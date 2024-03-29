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

use Aspose\Slides\Cloud\Sdk\Model\NotesSlide;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\NotesSlideExportFormat;
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Model\Paragraph;
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\SpecialSlideType;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class NotesSlideTest extends TestBase
{
    public function testNotesSlideGetStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $notesSlide = $this->getSlidesApi()->getNotesSlide(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertNotNull($notesSlide);
    }

    public function testNotesSlideExistsStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->notesSlideExists(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertTrue($result->getExists());
    }

    public function testNotesSlideDownloadStorage()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->downloadNotesSlide(self::fileName, self::slideIndex, self::format, null, null, self::password, self::folderName);
        Assert::assertTrue($result->isFile());
    }

    public function testNotesSlideGetRequest()
    {
        $notesSlide = $this->getSlidesApi()->getNotesSlideOnline(fopen(self::localFilePath, 'r'), self::slideIndex, self::password);
        Assert::assertNotNull($notesSlide);
    }

    public function testNotesSlideExistsRequest()
    {
        $result = $this->getSlidesApi()->notesSlideExistsOnline(fopen(self::localFilePath, 'r'), self::slideIndex, self::password);
        Assert::assertTrue($result->getExists());
    }

    public function testNotesSlideDownloadRequest()
    {
        $result = $this->getSlidesApi()->downloadNotesSlideOnline(fopen(self::localFilePath, 'r'), self::slideIndex, self::format, null, null, self::password);
        Assert::assertTrue($result->isFile());
    }

    public function testNotesSlideShapes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount, count($shapes->getShapesLinks()));

        $dto = new Shape();
        $dto->setX(100);
        $dto->setY(100);
        $dto->setWidth(500);
        $dto->setHeight(200);
        $dto->setShapeType("Rectangle");
        $dto->setText("New shape");

        $shape = $this->getSlidesApi()->CreateSpecialSlideShape(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, $dto, null, null, self::password, self::folderName);
        Assert::assertEquals($dto->getText(), $shape->getText());
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount + 1, count($shapes->getShapesLinks()));
        Assert::assertEquals($dto->getText(), $shape->getText());

        $dto->setText("Updated shape");
        $shape = $this->getSlidesApi()->UpdateSpecialSlideShape(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::shapeCount + 1, $dto, self::password, self::folderName);
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount + 1, count($shapes->getShapesLinks()));

        $shape = $this->getSlidesApi()->DeleteSpecialSlideShape(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::shapeCount + 1, self::password, self::folderName);
        $shapes = $this->getSlidesApi()->GetSpecialSlideShapes(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::password, self::folderName);
        Assert::assertEquals(self::shapeCount, count($shapes->getShapesLinks()));
    }

    public function testNotesSlideParagraphs()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount, count($paragraphs->getParagraphLinks()));

        $dto = new Paragraph();
        $dto->setAlignment("Right");
        $portion = new Portion();
        $portion->setText("New paragraph");
        $dto->setPortionList([ $portion ]);
        $paragraph = $this->getSlidesApi()->CreateSpecialSlideParagraph(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::NOTES_SLIDE,
            self::shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName);
        Assert::assertEquals($dto->getAlignment(), $paragraph->getAlignment());
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount + 1, count($paragraphs->getParagraphLinks()));

        $dto = new Paragraph();
        $dto->setAlignment("Center");
        $paragraph = $this->getSlidesApi()->UpdateSpecialSlideParagraph(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::NOTES_SLIDE,
            self::shapeIndex,
            self::paragraphCount + 1,
            $dto,
            self::password,
            self::folderName);
        Assert::assertEquals($dto->getAlignment(), $paragraph->getAlignment());
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount + 1, count($paragraphs->getParagraphLinks()));

        $this->getSlidesApi()->DeleteSpecialSlideParagraph(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::NOTES_SLIDE,
            self::shapeIndex,
            self::paragraphCount + 1,
            self::password,
            self::folderName);
        $paragraphs = $this->getSlidesApi()->GetSpecialSlideParagraphs(
            self::fileName, self::slideIndex, SpecialSlideType::NOTES_SLIDE, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(self::paragraphCount, count($paragraphs->getParagraphLinks()));
    }

    public function testNotesSlidePortions()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $portions = $this->getSlidesApi()->GetSpecialSlidePortions(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::NOTES_SLIDE,
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
            SpecialSlideType::NOTES_SLIDE,
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
            SpecialSlideType::NOTES_SLIDE,
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
            SpecialSlideType::NOTES_SLIDE,
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
            SpecialSlideType::NOTES_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName);
        Assert::assertEquals(self::portionCount + 1, count($portions->getItems()));

        $this->getSlidesApi()->DeleteSpecialSlidePortion(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::NOTES_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionCount + 1,
            self::password,
            self::folderName);
        $portions = $this->getSlidesApi()->GetSpecialSlidePortions(
            self::fileName,
            self::slideIndex,
            SpecialSlideType::NOTES_SLIDE,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName);
        Assert::assertEquals(self::portionCount, count($portions->getItems()));
    }

    public function testCreateNotesSlide()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new NotesSlide();
        $dto->setText(self::notesSlideText);
        $response = $this->getSlidesApi()->createNotesSlide(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::notesSlideText, $response->getText());
    }

    public function testUpdateNotesSlide()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new NotesSlide();
        $dto->setText(self::notesSlideText);
        $response = $this->getSlidesApi()->updateNotesSlide(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::notesSlideText, $response->getText());
    }

    public function testDeleteNotesSlide()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $response = $this->getSlidesApi()->deleteNotesSlide(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(null, $response->getNotesSlide());
    }

    public const slideIndex = 1;
    public const shapeIndex = 2;
    public const shapeCount = 3;
    public const paragraphIndex = 1;
    public const paragraphCount = 1;
    public const portionCount = 1;
    public const format = NotesSlideExportFormat::PNG;
    public const notesSlideText = "Notes slide text";
}
