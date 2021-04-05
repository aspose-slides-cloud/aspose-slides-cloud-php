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
use Aspose\Slides\Cloud\Sdk\Model\Chart;
use Aspose\Slides\Cloud\Sdk\Model\ChartTitle;
use Aspose\Slides\Cloud\Sdk\Model\OneValueSeries;
use Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint;
use Aspose\Slides\Cloud\Sdk\Model\Axes;
use Aspose\Slides\Cloud\Sdk\Model\Axis;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class NullablePropertiesTest extends TestBase
{
    /**
     * Test case for postSlidesPipeline with two files
     */
    public function testNullableProperies()
    {
        $folderName = "TempSlidesSDK";
        $fileName = "placeholders.pptx";
        $password = "password";
        $min1  = 44.3;
        $min2 = 12;
        $max1 = 104.3;
        $max2 = 87;
        list($expectedCode, $expectedMessage) = $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".$fileName, $folderName."/".$fileName);

        $testDto = new Chart();
        $testDto->setChartType('Line');
        $testDto->setWidth(400);
        $testDto->setHeight(300);
        $testTitle = new ChartTitle();
        $testTitle->setHasTitle(true);
        $testTitle->setText("MyTitle");
        $testDto->setTitle($testTitle);
        $testSeries = new OneValueSeries();
        $testSeries->setType('ClusteredColumn');
        $testSeries->setDataPointType('OneValue');
        $testSeries->setName("Series1");
        $testPoint1 = new OneValueChartDataPoint();
        $testPoint1->setValue(40);
        $testPoint2 = new OneValueChartDataPoint();
        $testPoint2->setValue(50);
        $testSeries->setDataPoints([ $testPoint1, $testPoint2 ]);
        $testDto->setSeries([$testSeries]);
        $testAxes = new Axes();
        $testAxis = new Axis();
        $testAxis->setIsAutomaticMinValue(false);
        $testAxis->setMinValue($min1);
        $testAxis->setIsAutomaticMaxValue(false);
        $testAxis->setMaxValue($max1);
        $testAxes->setHorizontalAxis($testAxis);
        $testDto->setAxes($testAxes);
        $result = $this->getApi()->createShape($fileName, 1, $testDto, null, null, $password, $folderName);

        $result = $this->getApi()->getShape($fileName, 1, 4, $password, $folderName);
        Assert::assertTrue($result->getAxes()->getHorizontalAxis()->getMinValue() == $min1);
        Assert::assertTrue($result->getAxes()->getHorizontalAxis()->getMaxValue() == $max1);

        $testDto = new Chart();
        $testAxes = new Axes();
        $testAxis = new Axis();
        $testAxis->setMinValue($min2);
        $testAxes->setHorizontalAxis($testAxis);
        $testDto->setAxes($testAxes);
        $result = $this->getApi()->updateShape($fileName, 1, 4, $testDto, $password, $folderName);

        $result = $this->getApi()->getShape($fileName, 1, 4, $password, $folderName);
        Assert::assertTrue($result->getAxes()->getHorizontalAxis()->getMinValue() == $min2);
        Assert::assertTrue($result->getAxes()->getHorizontalAxis()->getMaxValue() == $max1);

        $testDto = new Chart();
        $testAxes = new Axes();
        $testAxis = new Axis();
        $testAxis->setMaxValue($max2);
        $testAxes->setHorizontalAxis($testAxis);
        $testDto->setAxes($testAxes);
        $result = $this->getApi()->updateShape($fileName, 1, 4, $testDto, $password, $folderName);

        $result = $this->getApi()->getShape($fileName, 1, 4, $password, $folderName);
        Assert::assertTrue($result->getAxes()->getHorizontalAxis()->getMinValue() == $min2);
        Assert::assertTrue($result->getAxes()->getHorizontalAxis()->getMaxValue() == $max2);
    }
}
