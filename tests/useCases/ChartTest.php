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
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Model\Axes;
use Aspose\Slides\Cloud\Sdk\Model\Axis;
use Aspose\Slides\Cloud\Sdk\Model\Chart;
use Aspose\Slides\Cloud\Sdk\Model\ChartCategory;
use Aspose\Slides\Cloud\Sdk\Model\ChartLinesFormat;
use Aspose\Slides\Cloud\Sdk\Model\GradientFill;
use Aspose\Slides\Cloud\Sdk\Model\GradientFillStop;
use Aspose\Slides\Cloud\Sdk\Model\LineFormat;
use Aspose\Slides\Cloud\Sdk\Model\NoFill;
use Aspose\Slides\Cloud\Sdk\Model\OneValueSeries;
use Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint;
use Aspose\Slides\Cloud\Sdk\Model\SolidFill;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class ChartTest extends TestBase
{
    public function testChartGet()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue(count($result->getSeries()) == self::seriesCount);
        Assert::assertTrue(count($result->getCategories()) == self::categoryCount);
    }

    public function testChartCreate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Chart();
        $dto->setChartType('ClusteredColumn');
        $dto->setWidth(400);
        $dto->setHeight(300);
        $category1 = new ChartCategory();
        $category1->setValue("Category 1");
        $category2 = new ChartCategory();
        $category2->setValue("Category 2");
        $category3 = new ChartCategory();
        $category3->setValue("Category 3");
        $dto->setCategories([ $category1, $category2, $category3 ]);
        $series1 = new OneValueSeries();
        $dataPoint11 = new OneValueChartDataPoint();
        $dataPoint11->setValue(40);
        $dataPoint12 = new OneValueChartDataPoint();
        $dataPoint12->setValue(50);
        $dataPoint13 = new OneValueChartDataPoint();
        $dataPoint13->setValue(70);
        $series1->setDataPoints([ $dataPoint11, $dataPoint12, $dataPoint13 ]);
        $series2 = new OneValueSeries();
        $dataPoint21 = new OneValueChartDataPoint();
        $dataPoint21->setValue(55);
        $dataPoint22 = new OneValueChartDataPoint();
        $dataPoint22->setValue(35);
        $dataPoint23 = new OneValueChartDataPoint();
        $dataPoint23->setValue(90);
        $series2->setDataPoints([ $dataPoint21, $dataPoint22, $dataPoint23 ]);
        $dto->setSeries([ $series1, $series2 ]);
        $result = $this->getApi()->createShape(self::fileName, 1, $dto, null, null, self::password, self::folderName);
        Assert::assertEquals(2, count($result->getSeries()));
        Assert::assertEquals(3, count($result->getCategories()));
    }

    public function testChartUpdate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Chart();
        $dto->setChartType('ClusteredColumn');
        $dto->setWidth(400);
        $dto->setHeight(300);
        $category1 = new ChartCategory();
        $category1->setValue("Category 1");
        $category2 = new ChartCategory();
        $category2->setValue("Category 2");
        $category3 = new ChartCategory();
        $category3->setValue("Category 3");
        $dto->setCategories([ $category1, $category2, $category3 ]);
        $series1 = new OneValueSeries();
        $dataPoint11 = new OneValueChartDataPoint();
        $dataPoint11->setValue(40);
        $dataPoint12 = new OneValueChartDataPoint();
        $dataPoint12->setValue(50);
        $dataPoint13 = new OneValueChartDataPoint();
        $dataPoint13->setValue(70);
        $series1->setDataPoints([ $dataPoint11, $dataPoint12, $dataPoint13 ]);
        $series2 = new OneValueSeries();
        $dataPoint21 = new OneValueChartDataPoint();
        $dataPoint21->setValue(55);
        $dataPoint22 = new OneValueChartDataPoint();
        $dataPoint22->setValue(35);
        $dataPoint23 = new OneValueChartDataPoint();
        $dataPoint23->setValue(90);
        $series2->setDataPoints([ $dataPoint21, $dataPoint22, $dataPoint23 ]);
        $dto->setSeries([ $series1, $series2 ]);
        $result = $this->getApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(2, count($result->getSeries()));
        Assert::assertEquals(3, count($result->getCategories()));
    }

    public function testChartSeriesCreate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new OneValueSeries();
        $dto->setName("Series1");
        $dataPoint1 = new OneValueChartDataPoint();
        $dataPoint1->setValue(40);
        $dataPoint2 = new OneValueChartDataPoint();
        $dataPoint2->setValue(50);
        $dataPoint3 = new OneValueChartDataPoint();
        $dataPoint3->setValue(14);
        $dataPoint4 = new OneValueChartDataPoint();
        $dataPoint4->setValue(70);
        $dto->setDataPoints([ $dataPoint1, $dataPoint2, $dataPoint3, $dataPoint4 ]);
        $result = $this->getApi()->createChartSeries(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount + 1, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount, count($result->getCategories()));
    }

    public function testChartSeriesUpdate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new OneValueSeries();
        $dataPoint1 = new OneValueChartDataPoint();
        $dataPoint1->setValue(40);
        $dataPoint2 = new OneValueChartDataPoint();
        $dataPoint2->setValue(50);
        $dataPoint3 = new OneValueChartDataPoint();
        $dataPoint3->setValue(14);
        $dataPoint4 = new OneValueChartDataPoint();
        $dataPoint4->setValue(70);
        $dto->setDataPoints([ $dataPoint1, $dataPoint2, $dataPoint3, $dataPoint4 ]);
        $result = $this->getApi()->updateChartSeries(self::fileName, self::slideIndex, self::shapeIndex, self::seriesIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount, count($result->getCategories()));
    }

    public function testChartSeriesDelete()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteChartSeries(self::fileName, self::slideIndex, self::shapeIndex, self::seriesIndex, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount - 1, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount, count($result->getCategories()));
    }

    public function testChartCategoryCreate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new ChartCategory();
        $dto->setValue("NewCategory");
        $dataPoint1 = new OneValueChartDataPoint();
        $dataPoint1->setValue(40);
        $dataPoint2 = new OneValueChartDataPoint();
        $dataPoint2->setValue(50);
        $dataPoint3 = new OneValueChartDataPoint();
        $dataPoint3->setValue(14);
        $dto->setDataPoints([ $dataPoint1, $dataPoint2, $dataPoint3 ]);
        $result = $this->getApi()->createChartCategory(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount + 1, count($result->getCategories()));
        Assert::assertEquals($dto->getDataPoints()[0]->getValue(), $result->getSeries()[0]->getDataPoints()[self::categoryCount]->getValue());
    }

    public function testChartCategoryUpdate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new ChartCategory();
        $dto->setValue("NewCategory");
        $dataPoint1 = new OneValueChartDataPoint();
        $dataPoint1->setValue(40);
        $dataPoint2 = new OneValueChartDataPoint();
        $dataPoint2->setValue(50);
        $dataPoint3 = new OneValueChartDataPoint();
        $dataPoint3->setValue(14);
        $dto->setDataPoints([ $dataPoint1, $dataPoint2, $dataPoint3 ]);
        $result = $this->getApi()->updateChartCategory(self::fileName, self::slideIndex, self::shapeIndex, self::categoryIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount, count($result->getCategories()));
        Assert::assertEquals($dto->getDataPoints()[0]->getValue(), $result->getSeries()[0]->getDataPoints()[self::categoryIndex - 1]->getValue());
    }

    public function testChartCategoryDelete()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteChartCategory(self::fileName, self::slideIndex, self::shapeIndex, self::categoryIndex, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount - 1, count($result->getCategories()));
    }

    public function testChartDataPointCreate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new OneValueChartDataPoint();
        $dto->setValue(40);
        try {
            $this->getApi()->createChartDataPoint(self::fileName, self::slideIndex, self::shapeIndex, self::seriesIndex, $dto, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Must throw ApiException because adding data points only works with Scatter & Bubble charts.
        }
    }

    public function testChartDataPointUpdate()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new OneValueChartDataPoint();
        $dto->setValue(40);
        $result = $this->getApi()->updateChartDataPoint(self::fileName, self::slideIndex, self::shapeIndex, self::seriesIndex, self::categoryIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount, count($result->getCategories()));
        Assert::assertEquals(self::categoryCount, count($result->getSeries()[0]->getDataPoints()));
        Assert::assertEquals($dto->getValue(), $result->getSeries()[self::seriesIndex - 1]->getDataPoints()[self::categoryIndex - 1]->getValue());
    }

    public function testChartDataPointDelete()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteChartDataPoint(self::fileName, self::slideIndex, self::shapeIndex, self::seriesIndex, self::categoryIndex, self::password, self::folderName);
        Assert::assertEquals(self::seriesCount, count($result->getSeries()));
        Assert::assertEquals(self::categoryCount, count($result->getCategories()));
        Assert::assertTrue($result->getSeries()[self::seriesIndex - 1]->getDataPoints()[self::categoryIndex - 1] == null);
    }

    public function testSunburstChart()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Chart();
        $dto->setChartType('Sunburst');
        $dto->setWidth(400);
        $dto->setHeight(300);
        $category1 = new ChartCategory();
        $category1->setValue("Leaf1");
        $category1->setParentCategories([ "Branch1", "Stem1" ]);
        $category2 = new ChartCategory();
        $category2->setValue("Leaf2");
        $category2->setParentCategories([ "Branch1", "Stem1" ]);
        $category3 = new ChartCategory();
        $category3->setValue("Branch2");
        $category3->setParentCategories([ "Stem1" ]);
        $category4 = new ChartCategory();
        $category4->setValue("Stem2");
        $dto->setCategories([ $category1, $category2, $category3, $category4 ]);
        $series1 = new OneValueSeries();
        $series1->setName("Series1");
        $dataPoint1 = new OneValueChartDataPoint();
        $dataPoint1->setValue(40);
        $dataPoint2 = new OneValueChartDataPoint();
        $dataPoint2->setValue(50);
        $dataPoint3 = new OneValueChartDataPoint();
        $dataPoint3->setValue(70);
        $dataPoint4 = new OneValueChartDataPoint();
        $dataPoint4->setValue(80);
        $series1->setDataPoints([ $dataPoint1, $dataPoint2, $dataPoint3, $dataPoint4 ]);
        $dto->setSeries([ $series1 ]);
        $result = $this->getApi()->createShape(self::fileName, 1, $dto, null, null, self::password, self::folderName);
        Assert::assertEquals(1, count($result->getSeries()));
        Assert::assertEquals(4, count($result->getCategories()));
    }

    public function testMultiLevelCategoryAxis()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $dto = new Chart();
        $dto->setX(100);
        $dto->setY(100);
        $dto->setWidth(500);
        $dto->setHeight(400);
        $dto->setChartType('ClusteredColumn');

        $dataPoint1 = new OneValueChartDataPoint();
        $dataPoint1->setValue(1);
        $dataPoint2 = new OneValueChartDataPoint();
        $dataPoint2->setValue(2);
        $dataPoint3 = new OneValueChartDataPoint();
        $dataPoint3->setValue(3);
        $dataPoint4 = new OneValueChartDataPoint();
        $dataPoint4->setValue(4);
        $dataPoint5 = new OneValueChartDataPoint();
        $dataPoint5->setValue(5);
        $dataPoint6 = new OneValueChartDataPoint();
        $dataPoint6->setValue(6);
        $dataPoint7 = new OneValueChartDataPoint();
        $dataPoint7->setValue(7);
        $dataPoint8 = new OneValueChartDataPoint();
        $dataPoint8->setValue(8);

        $series = new OneValueSeries();
        $series->setDataPoints([$dataPoint1, $dataPoint2, $dataPoint3, $dataPoint4, $dataPoint5, $dataPoint6, $dataPoint7, $dataPoint8]);
        $dto->setSeries([ $series ]);

        $category1 = new ChartCategory();
        $category1->setValue("Category1");
        $category1->setParentCategories(["Sub-category 1", "Root 1"]);

        $category2 = new ChartCategory();
        $category2->setValue("Category2");

        $category3 = new ChartCategory();
        $category3->setValue("Category3");
        $category3->setParentCategories(["Sub-category 2"]);

        $category4 = new ChartCategory();
        $category4->setValue("Category4");

        $category5 = new ChartCategory();
        $category5->setValue("Category5");
        $category5->setParentCategories(["Sub-category 3", "Root 2"]);
       
        $category6 = new ChartCategory();
        $category6->setValue("Category6");

        $category7 = new ChartCategory();
        $category7->setValue("Category7");
        $category7->setParentCategories(["Sub-category 4"]);

        $category8 = new ChartCategory();
        $category8->setValue("Category8");

        $dto->setCategories([$category1, $category2, $category3, $category4, $category5, $category6, $category7, $category8]);

        $result = $this->getApi()->createShape(self::fileName, self::slideIndex, $dto, null, null, self::password, self::folderName);

        Assert::assertEquals(1, count($result->getSeries()));
        Assert::assertEquals(8, count($result->getCategories()));

        Assert::assertEquals(2, count($result->getCategories()[0]->getParentCategories()));
    }

    public function testHideChartLegend()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $chart = $this->getApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        $chart->getLegend()->setHasLegend(false);
        $chart = $this->getApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $chart, self::password, self::folderName);
    
        Assert::isFalse($chart->getLegend()->getHasLegend());
    }

    public function testChartGridLineFormat()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $chart = $this->getApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        
        $axes = new Axes();

        $horizontalAxis = new Axis();
        $horizontalAxis->setMajorGridLinesFormat(new ChartLinesFormat);
        $horizontalAxis->getMajorGridLinesFormat()->setLineFormat(new LineFormat());
        $horizontalAxis->getMajorGridLinesFormat()->getLineFormat()->setFillFormat(new NoFill());
        $horizontalAxis->setMinorGridLinesFormat(new ChartLinesFormat);
        $horizontalAxis->getMinorGridLinesFormat()->setLineFormat(new LineFormat());
        $solidFill = new SolidFill();
        $solidFill->setColor("Black");
        $horizontalAxis->getMinorGridLinesFormat()->getLineFormat()->setFillFormat($solidFill);
        $axes->setHorizontalAxis($horizontalAxis);

        $verticalAxis = new Axis();
        $verticalAxis->setMajorGridLinesFormat(new ChartLinesFormat);
        $verticalAxis->getMajorGridLinesFormat()->setLineFormat(new LineFormat());
        
        $gradientFill = new GradientFill();
        $gradientFill->setDirection("FromCorner1");
        $gradientFillStop1 = new GradientFillStop();
        $gradientFillStop1->setColor('White');
        $gradientFillStop1->setPosition(0);
        $gradientFillStop2 = new GradientFillStop();
        $gradientFillStop2->setColor('Black');
        $gradientFillStop2->setPosition(1);
        $gradientFill->setStops([$gradientFillStop1, $gradientFillStop2]);
        $verticalAxis->getMajorGridLinesFormat()->getLineFormat()->setFillFormat($gradientFill);
        
        $verticalAxis->setMinorGridLinesFormat(new ChartLinesFormat);
        $verticalAxis->getMinorGridLinesFormat()->setLineFormat(new LineFormat());
        $verticalAxis->getMinorGridLinesFormat()->getLineFormat()->setFillFormat(new NoFill());
        $axes->setVerticalAxis($verticalAxis);
        
        $chart->setAxes($axes);

        $chart = $this->getApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $chart, self::password, self::folderName);
        
        $fillType = $chart->getAxes()->getHorizontalAxis()->getMajorGridLinesFormat()->getLineFormat()->getFillFormat()->getType();
        Assert::assertEquals($fillType, "NoFill");
        $fillType = $chart->getAxes()->getHorizontalAxis()->getMinorGridLinesFormat()->getLineFormat()->getFillFormat()->getType();
        Assert::assertEquals($fillType, "Solid");
        $fillType = $chart->getAxes()->getVerticalAxis()->getMajorGridLinesFormat()->getLineFormat()->getFillFormat()->getType();
        Assert::assertEquals($fillType, "Gradient");
        $fillType = $chart->getAxes()->getVerticalAxis()->getMinorGridLinesFormat()->getLineFormat()->getFillFormat()->getType();
        Assert::assertEquals($fillType, "NoFill");
    }   

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 3;
    public const shapeIndex = 1;
    public const seriesIndex = 2;
    public const categoryIndex = 2;
    public const seriesCount = 3;
    public const categoryCount = 4;
}
