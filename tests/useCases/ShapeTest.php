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
use Aspose\Slides\Cloud\Sdk\Model\GeometryPaths;
use Aspose\Slides\Cloud\Sdk\Model\GeometryPath;
use Aspose\Slides\Cloud\Sdk\Model\MoveToPathSegment;
use Aspose\Slides\Cloud\Sdk\Model\LineToPathSegment;
use Aspose\Slides\Cloud\Sdk\Model\ClosePathSegment;
use Aspose\Slides\Cloud\Sdk\Model\FillFormat;
use Aspose\Slides\Cloud\Sdk\Model\GradientFill;
use Aspose\Slides\Cloud\Sdk\Model\GradientFillStop;
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\SolidFill;
use Aspose\Slides\Cloud\Sdk\Model\ZoomFrame;
use Aspose\Slides\Cloud\Sdk\Model\SectionZoomFrame;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class ShapeTest extends TestBase
{
    public function testGetShapes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapes = $this->getSlidesApi()->getShapes(
          self::fileName,
          self::slideIndex,
          self::password,
          self::folderName
        );

        Assert::assertEquals(2, count($shapes->getShapesLinks()));
    }

    public function testGetShapesByType()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapes = $this->getSlidesApi()->getShapes(
          self::fileName,
          self::slideIndex,
          self::password,
          self::folderName,
          null,
          'Chart'
        );

        Assert::assertEquals(2, count($shapes->getShapesLinks()));
    }

    public function testGetSubshapes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $subShape = "4";
        $shapes = $this->getSlidesApi()->getShapes(
          self::fileName,
          1,
          self::password,
          self::folderName,
          null,
          null,
          $subShape
        );

        Assert::assertEquals(2, count($shapes->getShapesLinks()));
    }

    public function testGetShape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shape = $this->getSlidesApi()->getShape(
          self::fileName,
          self::slideIndex,
          1,
          self::password,
          self::folderName
        );
        
        Assert::assertEquals('Chart', $shape->getType());
    }

    public function testGetSubshape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 4;
        $subShape = "1";
        $shape = $this->getSlidesApi()->getShape(
          self::fileName,
          1,
          $shapeIndex,
          self::password,
          self::folderName,
          null,
          $subShape
        );
        
        Assert::assertEquals('Shape', $shape->getType());
    }

    public function testShapeAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Shape();
        $dto->setShapeType("Callout1");
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
    }

    public function testShapeLoadAndSave()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, 1, self::password, self::folderName);
        $result = $this->getSlidesApi()->updateShape(self::fileName, self::slideIndex, 1, $dto, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Chart"));
    }

    public function testShapeEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Shape();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create shape with no ShapeType specified
            Assert::assertNotNull($ex);
        }
    }

    public function testGraphicalObjectEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new GraphicalObject();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a graphical object
            Assert::assertNotNull($ex);
        }
    }

    public function testPictureFrameAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new PictureFrame();
        $format = new PictureFill();
        $format->setBase64Data("iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXY5g+ffp/AAZTAsWGL27gAAAAAElFTkSuQmCC");
        $dto->setPictureFillFormat($format);
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\PictureFrame"));
    }

    public function testPictureFrameEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new PictureFrame();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a picture with no data specified
            Assert::assertNotNull($ex);
        }
    }

    public function testAudioFrameAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new AudioFrame();
        $dto->setBase64Data("bXAzc2FtcGxl");
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\AudioFrame"));
    }

    public function testAudioFrameEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new AudioFrame();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create an audio with no data specified
            Assert::assertNotNull($ex);
        }
    }

    public function testVideoFrameAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new VideoFrame();
        $dto->setBase64Data("bXAzc2FtcGxl");
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\VideoFrame"));
    }

    public function testVideoFrameEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new VideoFrame();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create a video with no data specified
            Assert::assertNotNull($ex);
        }
    }

    public function testOleObjectFrameEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new OleObjectFrame();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create an OleObjectFrame
            Assert::assertNotNull($ex);
        }
    }

    public function testSmartArtAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
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
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\SmartArt"));
    }

    public function testSmartArtTextFormatting()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $portion = new Portion();
        $portion->setText("New text");
        $portion->setFontHeight(24);
        $portion->setFontBold("True");
        $portion->setSpacing(3);
        $fillFormat = new SolidFill();
        $fillFormat->setColor("#FFFFFF00");
        $portion->setFillFormat($fillFormat);
        $shapeIndex = 1;
        $targetNodePath = "1/nodes/2";
        $slideIndex = 7;
        $response = $this->getSlidesApi()->updatePortion(self::fileName, $slideIndex, $shapeIndex,
            1, 1, $portion, self::password, self::folderName, null, $targetNodePath);
        Assert::assertNotNull($response);
        Assert::assertEquals($response->getText(), $portion->getText());
        Assert::assertEquals($response->getFontBold(), $portion->getFontBold());
        Assert::assertEquals($response->getSpacing(), $portion->getSpacing());
        Assert::assertEquals($response->getSpacing(), $portion->getSpacing());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testSmartArtEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new SmartArt();
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\SmartArt"));
    }


    public function testChartEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Chart();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot create an empty chart
            Assert::assertNotNull($ex);
        }
    }

    public function testTableAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
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
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Table"));
    }

    public function testTableEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Table();
        try {
            $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            Assert::assertNotNull($ex);
            //Cannot create a table with no cell data specified
        }
    }

    public function testGroupShapeEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new GroupShape();
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\GroupShape"));
    }

    public function testConnectorAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Connector();
        $uri1 = new ResourceUri();
        $uri1->setHref("https://api.aspose.cloud/v3.0/slides/myPresentation.pptx/slides/1/shapes/1");
        $dto->setStartShapeConnectedTo($uri1);
        $uri2 = new ResourceUri();
        $uri2->setHref("https://api.aspose.cloud/v3.0/slides/myPresentation.pptx/slides/1/shapes/2");
        $dto->setEndShapeConnectedTo($uri2);
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Connector"));
    }

    public function testConnectorEmpty()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Connector();
        $result = $this->getSlidesApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Connector"));
    }

    public function testCreateSubshape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Shape();
        $dto->setShapeType('Rectangle');
        $dto->setX(200);
        $dto->setX(200);
        $dto->setWidth(50);
        $dto->setHeight(50);

        $subShape = "4";

        $response = $this->getSlidesApi()->createShape(
            self::fileName,
            1,
            $dto,
            null,
            null,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        assert::assertEquals('Shape', $response->getType());
    }

    public function testUpdateShape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Shape();
        $dto->setWidth(200);
        $dto->setHeight(200);
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::color);

        $response = $this->getSlidesApi()->updateShape(
            self::fileName,
            1,
            3,
            $dto,
            self::password,
            self::folderName
        );

        assert::assertEquals('Shape', $response->getType());
        assert::assertEquals($dto->getWidth(), $response->getWidth());
        assert::assertEquals($dto->getHeight(), $response->getHeight());
        assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testUpdateSubshape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Shape();
        $dto->setWidth(200);
        $dto->setHeight(200);
        $fillFormat = new GradientFill();
        $fillFormat->setShape('Linear');
        $fillFormat->setDirection('FromCorner1');
        $stop1 = new GradientFillStop();
        $stop1->setColor(self::color);
        $stop1->setPosition(0);
        $stop2 = new GradientFillStop();
        $stop2->setColor(self::color);
        $stop2->setPosition(1);
        $fillFormat->setStops([$stop1, $stop2]);
        $dto->setFillFormat($fillFormat);

        $shapeIndex = 4;
        $subShape = "1";

        $response = $this->getSlidesApi()->updateShape(
            self::fileName,
            1,
            $shapeIndex,
            $dto,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        assert::assertEquals('Shape', $response->getType());
        assert::assertEquals($dto->getWidth(), $response->getWidth());
        assert::assertEquals($dto->getHeight(), $response->getHeight());
        assert::assertEquals('Gradient', $response->getFillFormat()->getType());
   
    }

    public function testDeleteShapes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapes = $this->getSlidesApi()->deleteShapes(
            self::fileName,
            self::slideIndex,
            null,
            self::password,
            self::folderName
        );
        
        Assert::assertEquals(0, count($shapes->getShapesLinks()));
    }

    public function testDeleteShapesIndexes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapes = $this->getSlidesApi()->deleteShapes(
            self::fileName,
            self::slideIndex,
            [2],
            self::password,
            self::folderName
        );
        
        Assert::assertEquals(1, count($shapes->getShapesLinks()));
    }

    public function testDeleteSubshapes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $subShape = "4";
        $shapes = $this->getSlidesApi()->deleteShapes(
            self::fileName,
            1,
            null,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        Assert::assertEquals(0, count($shapes->getShapesLinks()));
    }

    public function testDeleteSubshapesIndexes()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $subShape = "4";
        $shapes = $this->getSlidesApi()->deleteShapes(
            self::fileName,
            1,
            [2],
            self::password,
            self::folderName,
            null,
            $subShape
        );
        
        Assert::assertEquals(1, count($shapes->getShapesLinks()));
    }

    public function testDeleteShape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapes = $this->getSlidesApi()->deleteShape(
            self::fileName,
            1,
            4,
            self::password,
            self::folderName
        );
        
        Assert::assertEquals(3, count($shapes->getShapesLinks()));
    }

    public function testDeleteSubshape()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 4;
        $subShape = "1";
        $response = $this->getSlidesApi()->deleteShape(
            self::fileName,
            1,
            $shapeIndex,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        
        Assert::assertEquals(1, count($response->getShapesLinks()));
    }

    public function testShapesAlign()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $shape1 = $this->getSlidesApi()->getShape(self::fileName, 2, 1, self::password, self::folderName);
        $shape2 = $this->getSlidesApi()->getShape(self::fileName, 2, 2, self::password, self::folderName);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) > 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) > 1);

        $this->getSlidesApi()->alignShapes(
            self::fileName, 2, 'AlignTop', null, null, self::password, self::folderName);
        $shape1 = $this->getSlidesApi()->getShape(self::fileName, 2, 1, self::password, self::folderName);
        $shape2 = $this->getSlidesApi()->getShape(self::fileName, 2, 2, self::password, self::folderName);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) > 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) < 1);

        $this->getSlidesApi()->alignShapes(
            self::fileName, 2, 'AlignLeft', true, [ 1, 2 ], self::password, self::folderName);
        $shape1 = $this->getSlidesApi()->getShape(self::fileName, 2, 1, self::password, self::folderName);
        $shape2 = $this->getSlidesApi()->getShape(self::fileName, 2, 2, self::password, self::folderName);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) < 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) < 1);
        Assert::assertTrue(abs($shape1->getX()) < 1);
    }

    public function testShapesAlignGroup()
    {
        $path = "4/shapes";
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $shapeIndex = 4;
        $subShape1 = "1";
        $subShape2 = "2";

        $shape1 = $this->getSlidesApi()->getShape(self::fileName, 1, $shapeIndex, self::password, self::folderName, null, $subShape1);
        $shape2 = $this->getSlidesApi()->getShape(self::fileName, 1, $shapeIndex, self::password, self::folderName, null, $subShape2);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) > 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) > 1);

        $this->getSlidesApi()->alignShapes(
            self::fileName, 1, 'AlignTop', null, null, self::password, self::folderName, null, "4");
        $shape1 = $this->getSlidesApi()->getShape(self::fileName, 1, $shapeIndex, self::password, self::folderName, null, $subShape1);
        $shape2 = $this->getSlidesApi()->getShape(self::fileName, 1, $shapeIndex, self::password, self::folderName, null, $subShape2);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) > 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) < 1);

        $this->getSlidesApi()->alignShapes(
            self::fileName, 1, 'AlignLeft', true, [ 1, 2 ], self::password, self::folderName, null, "4");
        $shape1 = $this->getSlidesApi()->getShape(self::fileName, 1, $shapeIndex, self::password, self::folderName, null, $subShape1);
        $shape2 = $this->getSlidesApi()->getShape(self::fileName, 1, $shapeIndex, self::password, self::folderName, null, $subShape2);
        Assert::assertTrue(abs($shape1->getX() - $shape2->getX()) < 1);
        Assert::assertTrue(abs($shape1->getY() - $shape2->getY()) < 1);
        Assert::assertTrue(abs($shape1->getX()) < 1);
    }

    public function testShapeGeometryGet()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $paths = $this->getSlidesApi()->getShapeGeometryPath(self::fileName, 4, 2, self::password, self::folderName);
        Assert::assertTrue($paths->getPaths() != null);
        Assert::assertEquals(1, count($paths->getPaths()));
    }

    public function testShapeGeometrySet()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new GeometryPaths();
        $path = new GeometryPath();
        $start = new MoveToPathSegment();
        $start->setX(0);
        $start->setY(0);
        $line1 = new LineToPathSegment();
        $line1->setX(0);
        $line1->setY(200);
        $line2 = new LineToPathSegment();
        $line2->setX(200);
        $line2->setY(300);
        $line3 = new LineToPathSegment();
        $line3->setX(400);
        $line3->setY(200);
        $line4 = new LineToPathSegment();
        $line4->setX(400);
        $line4->setY(0);
        $end = new ClosePathSegment();
        $path->setPathData([ $start, $line1, $line1, $line3, $line4, $end ]);
        $dto->setPaths([ $path ]);
        $shape = $this->getSlidesApi()->setShapeGeometryPath(self::fileName, 4, 1, $dto, self::password, self::folderName);
        Assert::assertTrue($shape != null);
    }

    public function testZoomFrameAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        
        $dto = new ZoomFrame();
        $dto->setX(20);
        $dto->setY(20);
        $dto->setWidth(200);
        $dto->setHeight(100);
        $dto->setTargetSlideIndex(2);

        $shape = $this->getSlidesApi()->createShape(
            self::fileName,
            self::slideIndex,
            $dto,
            null,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals('ZoomFrame', $shape->getType());
        Assert::assertEquals(2, $shape->getTargetSlideIndex());
    }

    public function testSectionZoomFrameAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        
        $dto = new SectionZoomFrame();
        $dto->setX(20);
        $dto->setY(20);
        $dto->setWidth(200);
        $dto->setHeight(100);
        $dto->setTargetSectionIndex(2);

        $shape = $this->getSlidesApi()->createShape(
            self::fileName,
            self::slideIndex,
            $dto,
            null,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals('SectionZoomFrame', $shape->getType());
        Assert::assertEquals(2, $shape->getTargetSectionIndex());
    }

    public function testOleObjectFrameAddByLink()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        
        $dto = new OleObjectFrame();
        $dto->setX(20);
        $dto->setY(20);
        $dto->setWidth(200);
        $dto->setHeight(200);
        $dto->setLinkPath(self::oleObjectFileName);
        $dto->setObjectProgId("Excel.Sheet.8");

        $shape = $this->getSlidesApi()->createShape(
            self::fileName,
            self::slideIndex,
            $dto,
            null,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals('OleObjectFrame', $shape->getType());
        Assert::assertEquals($dto->getLinkPath(), $shape->getLinkPath());
    }

    public function testOleObjectFrameAddEmbedded()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new OleObjectFrame();
        $dto->setX(20);
        $dto->setY(20);
        $dto->setWidth(200);
        $dto->setHeight(200);
        $dto->setEmbeddedFileBase64Data(base64_encode(file_get_contents("TestData/oleObject.xlsx")));
        $dto->setEmbeddedFileExtension('xlsx');

        $shape = $this->getSlidesApi()->createShape(
            self::fileName,
            self::slideIndex,
            $dto,
            null,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals('OleObjectFrame', $shape->getType());
        Assert::assertEquals($dto->getEmbeddedFileBase64Data(), $shape->getEmbeddedFileBase64Data());
    }

    public function testGroupShapeAdd()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $subShape = "1";
        $shapes=$this->getSlidesApi()->getShapes(
            self::fileName,
            5,
            self::password,
            self::folderName
        );

        Assert::assertEquals(0, count($shapes->getShapesLinks()));

        $dto = new GroupShape();
        $this->getSlidesApi()->createShape(
            self::fileName,
            5,
            $dto,
            null,
            null,
            self::password,
            self::folderName
        );

        $shape1 = new Shape();
        $shape1->setShapeType('Rectangle');
        $shape1->setX(50);
        $shape1->setY(400);
        $shape1->setWidth(50);
        $shape1->setHeight(50);

        $this->getSlidesApi()->createShape(
            self::fileName,
            5,
            $shape1,
            null,
            null,
            self::password,
            self::folderName,
            null,
            $subShape 
        );

        $shape2 = new Shape();
        $shape2->setShapeType('Ellipse');
        $shape2->setX(150);
        $shape2->setY(400);
        $shape2->setWidth(50);
        $shape2->setHeight(50);

        $this->getSlidesApi()->createShape(
            self::fileName,
            5,
            $shape2,
            null,
            null,
            self::password,
            self::folderName,
            null,
            $subShape 
        );

        $shape3 = new Shape();
        $shape3->setShapeType('Triangle');
        $shape3->setX(250);
        $shape3->setY(400);
        $shape3->setWidth(50);
        $shape3->setHeight(50);

        $this->getSlidesApi()->createShape(
            self::fileName,
            5,
            $shape3,
            null,
            null,
            self::password,
            self::folderName,
            null,
            $subShape 
        );

        $shapes=$this->getSlidesApi()->getShapes(
            self::fileName,
            5,
            self::password,
            self::folderName
        );
        Assert::assertEquals(1, count($shapes->getShapesLinks()));

        $shapes=$this->getSlidesApi()->getShapes(
            self::fileName,
            5,
            self::password,
            self::folderName,
            null,
            null,
            $subShape 
        );
        Assert::assertEquals(3, count($shapes->getShapesLinks()));
    }

    public function testImportShapesFromSvg()
    {
        $file = fopen(self::localFolderName."/".self::svgFileName, 'r');
        $slideIndex = 5;
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->importShapesFromSvg(
            self::fileName,
            $slideIndex,
            $file,
            50,
            50,
            300,
            300,
            [1, 2, 3],
            false,
            self::password,
            self::folderName
        );
        Assert::assertEquals(3, count($result->getShapesLinks()));
    }

    public function testCreateSmartArtNode()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $slideIndex = 7;
        $newNodeText = "New root node";
        $response = $this->getSlidesApi()->createSmartArtNode(self::fileName, $slideIndex, self::smartArtIndex, null, $newNodeText,
            null, self::password, self::folderName);
        Assert::assertEquals(2, count($response->getNodes()));
        Assert::assertEquals($newNodeText, $response->getNodes()[1]->getText());
    }

    public function testCreateSmartArtSubNode()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $slideIndex = 7;
        $subNodePath = "1";
        $newSubNodeText = "New sub-node";
        $position = 1;
        $response = $this->getSlidesApi()->createSmartArtNode(self::fileName, $slideIndex, self::smartArtIndex, $subNodePath, $newSubNodeText,
        $position, self::password, self::folderName);
        Assert::assertEquals(5, count($response->getNodes()[0]->getNodes()));
        Assert::assertEquals($newSubNodeText, $response->getNodes()[0]->getNodes()[0]->getText());
    }

    public function testCreateSmartArtSubSubNode()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $slideIndex = 7;
        $subSubNodePath = "1/nodes/1";
        $newSubNodeText = "New sub-sub-node";
        $response = $this->getSlidesApi()->createSmartArtNode(self::fileName, $slideIndex, self::smartArtIndex, $subSubNodePath, $newSubNodeText,
        null, self::password, self::folderName);
        Assert::assertEquals(1, count($response->getNodes()[0]->getNodes()[0]->getNodes()));
        Assert::assertEquals($newSubNodeText, $response->getNodes()[0]->getNodes()[0]->getNodes()[0]->getText());
    }

    public function testDeleteSmartArtNode()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $slideIndex = 7;
        $smartArtIndex = 2;
        $nodeIndex = 1;
        $response = $this->getSlidesApi()->deleteSmartArtNode(self::fileName, $slideIndex, $smartArtIndex, $nodeIndex, null, 
            self::password, self::folderName);
        Assert::assertEquals(2, count($response->getNodes()));
    }

    public function testDeleteSmartArtSubNode()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $slideIndex = 7;
        $nodeIndex = 1;
        $subNodePath = "2";
        $response = $this->getSlidesApi()->deleteSmartArtNode(self::fileName, $slideIndex, self::smartArtIndex, $nodeIndex, $subNodePath, 
            self::password, self::folderName);
        Assert::assertEquals(3, count($response->getNodes()[0]->getNodes()));
    }

    public function testDownloadShapeFromDto()
    {
        $dto = new Shape();
        $dto->setShapeType("Rectangle");
        $dto->setWidth(400);
        $dto->setHeight(200);
        $dto->setText("Shape text");

        $result = $this->getSlidesApi()->downloadShapeFromDto("png", $dto);
        Assert::assertTrue($result->isFile());
    }

    public const svgFileName = "shapes.svg";
    public const slideIndex = 3;
    public const oleObjectFileName = "oleObject.xlsx";
    public const color = "#FFF5FF8A";
    public const shapePath = "4/shapes";
    public const smartArtIndex = 1;
}
