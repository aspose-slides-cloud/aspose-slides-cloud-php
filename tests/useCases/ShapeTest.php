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
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Model\AudioFrame;
use Aspose\Slides\Cloud\Sdk\Model\Chart;
use Aspose\Slides\Cloud\Sdk\Model\Connector;
use Aspose\Slides\Cloud\Sdk\Model\GraphicalObject;
use Aspose\Slides\Cloud\Sdk\Model\GroupShape;
use Aspose\Slides\Cloud\Sdk\Model\OleObjectFrame;
use Aspose\Slides\Cloud\Sdk\Model\PictureFill;
use Aspose\Slides\Cloud\Sdk\Model\PictureFrame;
use Aspose\Slides\Cloud\Sdk\Model\ResourceUri;
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Model\SmartArt;
use Aspose\Slides\Cloud\Sdk\Model\SmartArtNode;
use Aspose\Slides\Cloud\Sdk\Model\Table;
use Aspose\Slides\Cloud\Sdk\Model\TableCell;
use Aspose\Slides\Cloud\Sdk\Model\TableColumn;
use Aspose\Slides\Cloud\Sdk\Model\TableRow;
use Aspose\Slides\Cloud\Sdk\Model\VideoFrame;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class ShapeTest extends TestBase
{
    public function testShapeAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Shape();
        $dto->setShapeType("Callout1");
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
    }

    public function testShapeEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Shape();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create shape with no ShapeType specified
        }
    }

    public function testGraphicalObjectEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new GraphicalObject();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a graphical object
        }
    }

    public function testPictureFrameAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new PictureFrame();
        $format = new PictureFill();
        $format->setBase64Data("iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXY5g+ffp/AAZTAsWGL27gAAAAAElFTkSuQmCC");
        $dto->setPictureFillFormat($format);
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\PictureFrame"));
    }

    public function testPictureFrameEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new PictureFrame();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a picture with no data specified
        }
    }

    public function testAudioFrameAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new AudioFrame();
        $dto->setBase64Data("bXAzc2FtcGxl");
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\AudioFrame"));
    }

    public function testAudioFrameEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new AudioFrame();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create an audio with no data specified
        }
    }

    public function testVideoFrameAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new VideoFrame();
        $dto->setBase64Data("bXAzc2FtcGxl");
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\VideoFrame"));
    }

    public function testVideoFrameEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new VideoFrame();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a video with no data specified
        }
    }

    public function testOleObjectFrameEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new OleObjectFrame();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create an OleObjectFrame
        }
    }

    public function testSmartArtAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new SmartArt();
        $dto->setX(0);
        $dto->setY(0);
        $dto->setWidth(300);
        $dto->setHeight(200);
        $dto->setLayout("BasicProcess");
        $dto->setQuickStyle("SimpleFill");
        $dto->setColorStyle("ColoredFillAccent1");
        $node1 = new SmartArtNode();
        $node1->setText("First");
        $node1->setOrgChartLayout("Initial");
        $node11 = new SmartArtNode();
        $node11->setText("SubFirst");
        $node11->setOrgChartLayout("Initial");
        $node1->setNodes([ $node11 ]);
        $node2 = new SmartArtNode();
        $node2->setText("Second");
        $node2->setOrgChartLayout("Initial");
        $dto->setNodes([ $node1, $node2 ]);
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\SmartArt"));
    }

    public function testSmartArtEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new SmartArt();
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\SmartArt"));
    }

        //See ChartTest for non-empty chart examples
    public function testChartEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Chart();
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Chart"));
    }

    public function testTableAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Table();
        $dto->setX(30);
        $dto->setY(20);
        $dto->setStyle("MediumStyle2Accent1");
        $row1 = new TableRow();
        $cell11 = new TableCell();
        $cell11->setText("0.1");
        $cell12 = new TableCell();
        $cell12->setText("0.2");
        $cell13 = new TableCell();
        $cell13->setText("0.3");
        $cell14 = new TableCell();
        $cell14->setText("0.4");
        $row1->setCells([ $cell11, $cell12, $cell13, $cell14 ]);
        $row2 = new TableRow();
        $row2->setMinimalHeight(60);
        $cell21 = new TableCell();
        $cell21->setText("1");
        $cell22 = new TableCell();
        $cell22->setText("2-3");
        $cell22->setColSpan(2);
        $cell22->setRowSpan(2);
        $cell24 = new TableCell();
        $cell24->setText("4");
        $row2->setCells([ $cell21, $cell22, $cell24 ]);
        $row3 = new TableRow();
        $row3->setMinimalHeight(60);
        $cell31 = new TableCell();
        $cell31->setText("first");
        $cell34 = new TableCell();
        $cell34->setText("last");
        $row3->setCells([ $cell31, $cell34 ]);
        $row4 = new TableRow();
        $cell41 = new TableCell();
        $cell41->setText("3.1");
        $cell42 = new TableCell();
        $cell42->setText("3.2");
        $cell43 = new TableCell();
        $cell43->setText("3.3");
        $cell44 = new TableCell();
        $cell44->setText("3.4");
        $row4->setCells([ $cell41, $cell42, $cell43, $cell44 ]);
        $row5 = new TableRow();
        $cell51 = new TableCell();
        $cell51->setText("5.1");
        $cell52 = new TableCell();
        $cell52->setText("5.2");
        $cell53 = new TableCell();
        $cell53->setText("5.3");
        $cell54 = new TableCell();
        $cell54->setText("5.4");
        $row5->setCells([ $cell51, $cell52, $cell53, $cell54 ]);
        $dto->setRows([ $row1, $row2, $row3, $row4, $row5 ]);
        $column1 = new TableColumn();
        $column1->setWidth(100);
        $column2 = new TableColumn();
        $column2->setWidth(100);
        $column3 = new TableColumn();
        $column3->setWidth(100);
        $column4 = new TableColumn();
        $column4->setWidth(100);
        $dto->setColumns([ $column1, $column2, $column3, $column4 ]);
        $dto->setFirstRow(true);
        $dto->setHorizontalBanding(true);
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Table"));
    }

    public function testTableEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Table();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a table with no cell data specified
        }
    }

    public function testGroupShapeEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new GroupShape();
        try {
            $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a group shape
        }
    }

    public function testConnectorAdd()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Connector();
        $uri1 = new ResourceUri();
        $uri1->setHref("https://api.aspose.cloud/v3.0/slides/myPresentation.pptx/slides/1/shapes/1");
        $dto->setStartShapeConnectedTo($uri1);
        $uri2 = new ResourceUri();
        $uri2->setHref("https://api.aspose.cloud/v3.0/slides/myPresentation.pptx/slides/1/shapes/2");
        $dto->setEndShapeConnectedTo($uri2);
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Connector"));
    }

    public function testConnectorEmpty()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Connector();
        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Connector"));
    }

    public function testShapesAlign()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shape1 = $this->getApi()->getShape(self::fileName, 2, 1, self::password, self::folderName);
        $shape2 = $this->getApi()->getShape(self::fileName, 2, 2, self::password, self::folderName);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) > 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) > 1);

        $this->getApi()->alignShapes(
            self::fileName, 2, 'AlignTop', null, null, self::password, self::folderName);
        $shape1 = $this->getApi()->getShape(self::fileName, 2, 1, self::password, self::folderName);
        $shape2 = $this->getApi()->getShape(self::fileName, 2, 2, self::password, self::folderName);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) > 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) < 1);

        $this->getApi()->alignShapes(
            self::fileName, 2, 'AlignLeft', true, [ 1, 2 ], self::password, self::folderName);
        $shape1 = $this->getApi()->getShape(self::fileName, 2, 1, self::password, self::folderName);
        $shape2 = $this->getApi()->getShape(self::fileName, 2, 2, self::password, self::folderName);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) < 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) < 1);
        Assert::assertTrue(abs($shape1->getX()) < 1);
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 3;
}
