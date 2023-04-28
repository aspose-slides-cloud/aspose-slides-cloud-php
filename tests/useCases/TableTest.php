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
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class TableTest extends TestBase
{
    public function testUpdateTableCell()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 2;
        $cellIndex = 1;
        $dto = new TableCell();
        $dto->setText("Test text");

        $response = $this->getApi()->updateTableCell(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

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

        $response = $this->getApi()->createTableRow(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 2;
        $withAttachedRows = true;
        $response = $this->getApi()->deleteTableRow(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 2;
        $dto = new TableRow();
        $dto->setMinimalHeight(30);

        $response = $this->getApi()->updateTableRow(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
	$dto = new TableCellMergeOptions();
        $dto->setFirstRowIndex(1);
        $dto->setFirstCellIndex(1);
        $dto->setLastRowIndex(2);
        $dto->setLastCellIndex(2);
        $dto->setAllowSplitting(true);

        $response = $this->getApi()->mergeTableCells(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $cellWidth = 10;

        $response = $this->getApi()->splitTableCell(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $cellHeight = 10;

        $response = $this->getApi()->splitTableCell(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 3;
        $cellIndex = 1;
        $colSpan = 1;

        $response = $this->getApi()->splitTableCell(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 2;
        $cellIndex = 3;
        $rowSpan = 1;

        $response = $this->getApi()->splitTableCell(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;

        $response = $this->getApi()->getTableCellParagraphs(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $response = $this->getApi()->getTableCellParagraph(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;

        $portion0 = new Portion();
        $portion0->setText("Portion 1");
        $portion1 = new Portion();
        $portion1->setText("Portion 2");
        $dto = new Paragraph();
        $dto->setPortionList([$portion0, $portion1]);

        $response = $this->getApi()->createTableCellParagraph(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $portion0 = new Portion();
        $portion0->setText("Portion 1");
        $portion1 = new Portion();
        $portion1->setText("Portion 2");
        $dto = new Paragraph();
        $dto->setPortionList([$portion0, $portion1]);

        $response = $this->getApi()->updateTableCellParagraph(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $response = $this->getApi()->deleteTableCellParagraph(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;

        $response = $this->getApi()->getTableCellPortions(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;

        $response = $this->getApi()->getTableCellPortion(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $dto = new Portion();
        $dto->setText("Portion 1");

        $response = $this->getApi()->createTableCellPortion(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;
        $dto = new Portion();
        $dto->setText("Portion 1");

        $response = $this->getApi()->updateTableCellPortion(
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
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $rowIndex = 1;
        $cellIndex = 1;
        $paragraphIndex = 1;
        $portionIndex = 1;

        $response = $this->getApi()->deleteTableCellPortion(
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

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const sourceFileName = "TemplateCV.pptx";
    public const password = "password";
    public const slideIndex = 9;
    public const shapeIndex = 1;
    public const paragraphIndex = 1;
    public const portionIndex = 1;
}