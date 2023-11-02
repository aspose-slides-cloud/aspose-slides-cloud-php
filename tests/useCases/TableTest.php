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

use Aspose\Slides\Cloud\Sdk\Model\TableCell;
use Aspose\Slides\Cloud\Sdk\Model\TableCellMergeOptions;
use Aspose\Slides\Cloud\Sdk\Model\TableRow;
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\Paragraph;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class TableTest extends TestBase
{
    public function testUpdateTableCell()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 2;
        $cellIndex = 1;
        $dto = new TableCell();
        $dto->setText("Test text");

        $response = $this->getSlidesApi()->updateTableCell(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getText(), $dto->getText());
    }

    public function testCreateTableRow()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $cell0 = new TableCell();
        $cell0->setText("Cell 1");
        $cell1 = new TableCell();
        $cell1->setText("Cell 2");
        $cell2 = new TableCell();
        $cell2->setText("Cell 3");
        $cell3 = new TableCell();
        $cell3->setText("Cell 4");

        $dto = new TableRow();
        $dto->setMinimalHeight(30);
        $dto->setCells([$cell0, $cell1, $cell2, $cell3]);

        $response = $this->getSlidesApi()->createTableRow(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getCells()), count($dto->getCells()));
        Assert::assertEquals($response->getMinimalHeight(), $dto->getMinimalHeight());
    }

    public function testDeleteTableRow()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 2;
        $withAttachedRows = true;
        $response = $this->getSlidesApi()->deleteTableRow(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $withAttachedRows,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getRows()),2);
    }

    public function testUpdateTableRow()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 2;
        $dto = new TableRow();
        $dto->setMinimalHeight(30);

        $response = $this->getSlidesApi()->updateTableRow(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getMinimalHeight(), $dto->getMinimalHeight());
    }

    public function testMergeTableCells()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        
	$dto = new TableCellMergeOptions();
        $dto->setFirstRowIndex(1);
        $dto->setFirstCellIndex(1);
        $dto->setLastRowIndex(2);
        $dto->setLastCellIndex(2);
        $dto->setAllowSplitting(true);

        $response = $this->getSlidesApi()->mergeTableCells(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getRows()[0]->getCells()[0]->getColSpan(), 2);
        Assert::assertEquals($response->getRows()[0]->getCells()[0]->getRowSpan(), 2);
    }

    public function testSplitTableCellsByWidth()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $cellWidth = 10;

        $response = $this->getSlidesApi()->splitTableCell(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            'SplitByWidth',
            $cellWidth,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getRows()[0]->getCells()), 5);
    }

    public function testSplitTableCellsByHeight()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $cellHeight = 10;

        $response = $this->getSlidesApi()->splitTableCell(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            'SplitByHeight',
            $cellHeight,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getRows()), 5);
    }

    public function testSplitTableCellsByColSpan()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 3;
        $cellIndex = 1;
        $colSpan = 1;

        $response = $this->getSlidesApi()->splitTableCell(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            'SplitByColSpan',
            $colSpan,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getRows()[2]->getCells()[2]->getColSpan(), null);
    }

    public function testSplitTableCellsByRowSpan()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 2;
        $cellIndex = 3;
        $rowSpan = 1;

        $response = $this->getSlidesApi()->splitTableCell(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            'SplitByRowSpan',
            $rowSpan,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getRows()[1]->getCells()[2]->getRowSpan(), null);
    }

    public function testGetTableCellParagraphs()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;

        $response = $this->getSlidesApi()->getTableCellParagraphs(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getParagraphLinks()), 1);
    }

    public function testGetTableCellParagraph()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $response = $this->getSlidesApi()->getTableCellParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getPortionList()), 2);
    }

    public function testCreateTableCellParagraph()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;

        $portion0 = new Portion();
        $portion0->setText("Portion 1");
        $portion1 = new Portion();
        $portion1->setText("Portion 2");
        $dto = new Paragraph();
        $dto->setPortionList([$portion0, $portion1]);

        $response = $this->getSlidesApi()->createTableCellParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getPortionList()), 2);
    }

    public function testUpdateTableCellParagraph()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $portion0 = new Portion();
        $portion0->setText("Portion 1");
        $portion1 = new Portion();
        $portion1->setText("Portion 2");
        $dto = new Paragraph();
        $dto->setPortionList([$portion0, $portion1]);

        $response = $this->getSlidesApi()->updateTableCellParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getPortionList()), 2);
    }

    public function testDeleteTableCellParagraph()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $response = $this->getSlidesApi()->deleteTableCellParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getParagraphLinks()), 0);
    }

    public function testGetTableCellPortions()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $response = $this->getSlidesApi()->getTableCellPortions(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getItems()), 2);
    }

    public function testGetTableCellPortion()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;

        $response = $this->getSlidesApi()->getTableCellPortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            $portionIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getText(), "Header");
    }

    public function testCreateTableCellPortion()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $dto = new Portion();
        $dto->setText("Portion 1");

        $response = $this->getSlidesApi()->createTableCellPortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getText(), $dto->getText());
    }

    public function testUpdateTableCellPortion()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;
        $dto = new Portion();
        $dto->setText("Portion 1");

        $response = $this->getSlidesApi()->updateTableCellPortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            $portionIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($response->getText(), $dto->getText());
    }

    public function testDeleteTableCellPortion()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;

        $response = $this->getSlidesApi()->deleteTableCellPortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $rowIndex,
            $cellIndex,
            $paragraphIndex,
            $portionIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getItems()), 1);
    }

    public const sourceFileName = "TemplateCV.pptx";
    public const slideIndex = 9;
    public const shapeIndex = 1;
    public const paragraphIndex = 1;
    public const portionIndex = 1;
}