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


namespace Aspose\Slides\Cloud\Sdk\Model;

use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * Chart Class Doc Comment
 *
 * @category Class
 * @description Represents chart resource
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Chart extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chartType' => 'string',
        'showDataLabelsOverMaximum' => 'bool',
        'series' => '\Aspose\Slides\Cloud\Sdk\Model\Series[]',
        'categories' => '\Aspose\Slides\Cloud\Sdk\Model\ChartCategory[]',
        'title' => '\Aspose\Slides\Cloud\Sdk\Model\ChartTitle',
        'backWall' => '\Aspose\Slides\Cloud\Sdk\Model\ChartWall',
        'sideWall' => '\Aspose\Slides\Cloud\Sdk\Model\ChartWall',
        'floor' => '\Aspose\Slides\Cloud\Sdk\Model\ChartWall',
        'legend' => '\Aspose\Slides\Cloud\Sdk\Model\Legend',
        'axes' => '\Aspose\Slides\Cloud\Sdk\Model\Axes',
        'plotArea' => '\Aspose\Slides\Cloud\Sdk\Model\PlotArea'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chartType' => null,
        'showDataLabelsOverMaximum' => null,
        'series' => null,
        'categories' => null,
        'title' => null,
        'backWall' => null,
        'sideWall' => null,
        'floor' => null,
        'legend' => null,
        'axes' => null,
        'plotArea' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'chartType' => 'ChartType',
        'showDataLabelsOverMaximum' => 'ShowDataLabelsOverMaximum',
        'series' => 'Series',
        'categories' => 'Categories',
        'title' => 'Title',
        'backWall' => 'BackWall',
        'sideWall' => 'SideWall',
        'floor' => 'Floor',
        'legend' => 'Legend',
        'axes' => 'Axes',
        'plotArea' => 'PlotArea'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chartType' => 'setChartType',
        'showDataLabelsOverMaximum' => 'setShowDataLabelsOverMaximum',
        'series' => 'setSeries',
        'categories' => 'setCategories',
        'title' => 'setTitle',
        'backWall' => 'setBackWall',
        'sideWall' => 'setSideWall',
        'floor' => 'setFloor',
        'legend' => 'setLegend',
        'axes' => 'setAxes',
        'plotArea' => 'setPlotArea'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chartType' => 'getChartType',
        'showDataLabelsOverMaximum' => 'getShowDataLabelsOverMaximum',
        'series' => 'getSeries',
        'categories' => 'getCategories',
        'title' => 'getTitle',
        'backWall' => 'getBackWall',
        'sideWall' => 'getSideWall',
        'floor' => 'getFloor',
        'legend' => 'getLegend',
        'axes' => 'getAxes',
        'plotArea' => 'getPlotArea'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CHART_TYPE_CLUSTERED_COLUMN = 'ClusteredColumn';
    const CHART_TYPE_STACKED_COLUMN = 'StackedColumn';
    const CHART_TYPE_PERCENTS_STACKED_COLUMN = 'PercentsStackedColumn';
    const CHART_TYPE_CLUSTERED_COLUMN3_D = 'ClusteredColumn3D';
    const CHART_TYPE_STACKED_COLUMN3_D = 'StackedColumn3D';
    const CHART_TYPE_PERCENTS_STACKED_COLUMN3_D = 'PercentsStackedColumn3D';
    const CHART_TYPE_COLUMN3_D = 'Column3D';
    const CHART_TYPE_CLUSTERED_CYLINDER = 'ClusteredCylinder';
    const CHART_TYPE_STACKED_CYLINDER = 'StackedCylinder';
    const CHART_TYPE_PERCENTS_STACKED_CYLINDER = 'PercentsStackedCylinder';
    const CHART_TYPE_CYLINDER3_D = 'Cylinder3D';
    const CHART_TYPE_CLUSTERED_CONE = 'ClusteredCone';
    const CHART_TYPE_STACKED_CONE = 'StackedCone';
    const CHART_TYPE_PERCENTS_STACKED_CONE = 'PercentsStackedCone';
    const CHART_TYPE_CONE3_D = 'Cone3D';
    const CHART_TYPE_CLUSTERED_PYRAMID = 'ClusteredPyramid';
    const CHART_TYPE_STACKED_PYRAMID = 'StackedPyramid';
    const CHART_TYPE_PERCENTS_STACKED_PYRAMID = 'PercentsStackedPyramid';
    const CHART_TYPE_PYRAMID3_D = 'Pyramid3D';
    const CHART_TYPE_LINE = 'Line';
    const CHART_TYPE_STACKED_LINE = 'StackedLine';
    const CHART_TYPE_PERCENTS_STACKED_LINE = 'PercentsStackedLine';
    const CHART_TYPE_LINE_WITH_MARKERS = 'LineWithMarkers';
    const CHART_TYPE_STACKED_LINE_WITH_MARKERS = 'StackedLineWithMarkers';
    const CHART_TYPE_PERCENTS_STACKED_LINE_WITH_MARKERS = 'PercentsStackedLineWithMarkers';
    const CHART_TYPE_LINE3_D = 'Line3D';
    const CHART_TYPE_PIE = 'Pie';
    const CHART_TYPE_PIE3_D = 'Pie3D';
    const CHART_TYPE_PIE_OF_PIE = 'PieOfPie';
    const CHART_TYPE_EXPLODED_PIE = 'ExplodedPie';
    const CHART_TYPE_EXPLODED_PIE3_D = 'ExplodedPie3D';
    const CHART_TYPE_BAR_OF_PIE = 'BarOfPie';
    const CHART_TYPE_PERCENTS_STACKED_BAR = 'PercentsStackedBar';
    const CHART_TYPE_CLUSTERED_BAR3_D = 'ClusteredBar3D';
    const CHART_TYPE_CLUSTERED_BAR = 'ClusteredBar';
    const CHART_TYPE_STACKED_BAR = 'StackedBar';
    const CHART_TYPE_STACKED_BAR3_D = 'StackedBar3D';
    const CHART_TYPE_PERCENTS_STACKED_BAR3_D = 'PercentsStackedBar3D';
    const CHART_TYPE_CLUSTERED_HORIZONTAL_CYLINDER = 'ClusteredHorizontalCylinder';
    const CHART_TYPE_STACKED_HORIZONTAL_CYLINDER = 'StackedHorizontalCylinder';
    const CHART_TYPE_PERCENTS_STACKED_HORIZONTAL_CYLINDER = 'PercentsStackedHorizontalCylinder';
    const CHART_TYPE_CLUSTERED_HORIZONTAL_CONE = 'ClusteredHorizontalCone';
    const CHART_TYPE_STACKED_HORIZONTAL_CONE = 'StackedHorizontalCone';
    const CHART_TYPE_PERCENTS_STACKED_HORIZONTAL_CONE = 'PercentsStackedHorizontalCone';
    const CHART_TYPE_CLUSTERED_HORIZONTAL_PYRAMID = 'ClusteredHorizontalPyramid';
    const CHART_TYPE_STACKED_HORIZONTAL_PYRAMID = 'StackedHorizontalPyramid';
    const CHART_TYPE_PERCENTS_STACKED_HORIZONTAL_PYRAMID = 'PercentsStackedHorizontalPyramid';
    const CHART_TYPE_AREA = 'Area';
    const CHART_TYPE_STACKED_AREA = 'StackedArea';
    const CHART_TYPE_PERCENTS_STACKED_AREA = 'PercentsStackedArea';
    const CHART_TYPE_AREA3_D = 'Area3D';
    const CHART_TYPE_STACKED_AREA3_D = 'StackedArea3D';
    const CHART_TYPE_PERCENTS_STACKED_AREA3_D = 'PercentsStackedArea3D';
    const CHART_TYPE_SCATTER_WITH_MARKERS = 'ScatterWithMarkers';
    const CHART_TYPE_SCATTER_WITH_SMOOTH_LINES_AND_MARKERS = 'ScatterWithSmoothLinesAndMarkers';
    const CHART_TYPE_SCATTER_WITH_SMOOTH_LINES = 'ScatterWithSmoothLines';
    const CHART_TYPE_SCATTER_WITH_STRAIGHT_LINES_AND_MARKERS = 'ScatterWithStraightLinesAndMarkers';
    const CHART_TYPE_SCATTER_WITH_STRAIGHT_LINES = 'ScatterWithStraightLines';
    const CHART_TYPE_HIGH_LOW_CLOSE = 'HighLowClose';
    const CHART_TYPE_OPEN_HIGH_LOW_CLOSE = 'OpenHighLowClose';
    const CHART_TYPE_VOLUME_HIGH_LOW_CLOSE = 'VolumeHighLowClose';
    const CHART_TYPE_VOLUME_OPEN_HIGH_LOW_CLOSE = 'VolumeOpenHighLowClose';
    const CHART_TYPE_SURFACE3_D = 'Surface3D';
    const CHART_TYPE_WIREFRAME_SURFACE3_D = 'WireframeSurface3D';
    const CHART_TYPE_CONTOUR = 'Contour';
    const CHART_TYPE_WIREFRAME_CONTOUR = 'WireframeContour';
    const CHART_TYPE_DOUGHNUT = 'Doughnut';
    const CHART_TYPE_EXPLODED_DOUGHNUT = 'ExplodedDoughnut';
    const CHART_TYPE_BUBBLE = 'Bubble';
    const CHART_TYPE_BUBBLE_WITH3_D = 'BubbleWith3D';
    const CHART_TYPE_RADAR = 'Radar';
    const CHART_TYPE_RADAR_WITH_MARKERS = 'RadarWithMarkers';
    const CHART_TYPE_FILLED_RADAR = 'FilledRadar';
    const CHART_TYPE_SERIES_OF_MIXED_TYPES = 'SeriesOfMixedTypes';
    const CHART_TYPE_TREEMAP = 'Treemap';
    const CHART_TYPE_SUNBURST = 'Sunburst';
    const CHART_TYPE_HISTOGRAM = 'Histogram';
    const CHART_TYPE_PARETO_LINE = 'ParetoLine';
    const CHART_TYPE_BOX_AND_WHISKER = 'BoxAndWhisker';
    const CHART_TYPE_WATERFALL = 'Waterfall';
    const CHART_TYPE_FUNNEL = 'Funnel';
    const CHART_TYPE_MAP = 'Map';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChartTypeAllowableValues()
    {
        return [
            self::CHART_TYPE_CLUSTERED_COLUMN,
            self::CHART_TYPE_STACKED_COLUMN,
            self::CHART_TYPE_PERCENTS_STACKED_COLUMN,
            self::CHART_TYPE_CLUSTERED_COLUMN3_D,
            self::CHART_TYPE_STACKED_COLUMN3_D,
            self::CHART_TYPE_PERCENTS_STACKED_COLUMN3_D,
            self::CHART_TYPE_COLUMN3_D,
            self::CHART_TYPE_CLUSTERED_CYLINDER,
            self::CHART_TYPE_STACKED_CYLINDER,
            self::CHART_TYPE_PERCENTS_STACKED_CYLINDER,
            self::CHART_TYPE_CYLINDER3_D,
            self::CHART_TYPE_CLUSTERED_CONE,
            self::CHART_TYPE_STACKED_CONE,
            self::CHART_TYPE_PERCENTS_STACKED_CONE,
            self::CHART_TYPE_CONE3_D,
            self::CHART_TYPE_CLUSTERED_PYRAMID,
            self::CHART_TYPE_STACKED_PYRAMID,
            self::CHART_TYPE_PERCENTS_STACKED_PYRAMID,
            self::CHART_TYPE_PYRAMID3_D,
            self::CHART_TYPE_LINE,
            self::CHART_TYPE_STACKED_LINE,
            self::CHART_TYPE_PERCENTS_STACKED_LINE,
            self::CHART_TYPE_LINE_WITH_MARKERS,
            self::CHART_TYPE_STACKED_LINE_WITH_MARKERS,
            self::CHART_TYPE_PERCENTS_STACKED_LINE_WITH_MARKERS,
            self::CHART_TYPE_LINE3_D,
            self::CHART_TYPE_PIE,
            self::CHART_TYPE_PIE3_D,
            self::CHART_TYPE_PIE_OF_PIE,
            self::CHART_TYPE_EXPLODED_PIE,
            self::CHART_TYPE_EXPLODED_PIE3_D,
            self::CHART_TYPE_BAR_OF_PIE,
            self::CHART_TYPE_PERCENTS_STACKED_BAR,
            self::CHART_TYPE_CLUSTERED_BAR3_D,
            self::CHART_TYPE_CLUSTERED_BAR,
            self::CHART_TYPE_STACKED_BAR,
            self::CHART_TYPE_STACKED_BAR3_D,
            self::CHART_TYPE_PERCENTS_STACKED_BAR3_D,
            self::CHART_TYPE_CLUSTERED_HORIZONTAL_CYLINDER,
            self::CHART_TYPE_STACKED_HORIZONTAL_CYLINDER,
            self::CHART_TYPE_PERCENTS_STACKED_HORIZONTAL_CYLINDER,
            self::CHART_TYPE_CLUSTERED_HORIZONTAL_CONE,
            self::CHART_TYPE_STACKED_HORIZONTAL_CONE,
            self::CHART_TYPE_PERCENTS_STACKED_HORIZONTAL_CONE,
            self::CHART_TYPE_CLUSTERED_HORIZONTAL_PYRAMID,
            self::CHART_TYPE_STACKED_HORIZONTAL_PYRAMID,
            self::CHART_TYPE_PERCENTS_STACKED_HORIZONTAL_PYRAMID,
            self::CHART_TYPE_AREA,
            self::CHART_TYPE_STACKED_AREA,
            self::CHART_TYPE_PERCENTS_STACKED_AREA,
            self::CHART_TYPE_AREA3_D,
            self::CHART_TYPE_STACKED_AREA3_D,
            self::CHART_TYPE_PERCENTS_STACKED_AREA3_D,
            self::CHART_TYPE_SCATTER_WITH_MARKERS,
            self::CHART_TYPE_SCATTER_WITH_SMOOTH_LINES_AND_MARKERS,
            self::CHART_TYPE_SCATTER_WITH_SMOOTH_LINES,
            self::CHART_TYPE_SCATTER_WITH_STRAIGHT_LINES_AND_MARKERS,
            self::CHART_TYPE_SCATTER_WITH_STRAIGHT_LINES,
            self::CHART_TYPE_HIGH_LOW_CLOSE,
            self::CHART_TYPE_OPEN_HIGH_LOW_CLOSE,
            self::CHART_TYPE_VOLUME_HIGH_LOW_CLOSE,
            self::CHART_TYPE_VOLUME_OPEN_HIGH_LOW_CLOSE,
            self::CHART_TYPE_SURFACE3_D,
            self::CHART_TYPE_WIREFRAME_SURFACE3_D,
            self::CHART_TYPE_CONTOUR,
            self::CHART_TYPE_WIREFRAME_CONTOUR,
            self::CHART_TYPE_DOUGHNUT,
            self::CHART_TYPE_EXPLODED_DOUGHNUT,
            self::CHART_TYPE_BUBBLE,
            self::CHART_TYPE_BUBBLE_WITH3_D,
            self::CHART_TYPE_RADAR,
            self::CHART_TYPE_RADAR_WITH_MARKERS,
            self::CHART_TYPE_FILLED_RADAR,
            self::CHART_TYPE_SERIES_OF_MIXED_TYPES,
            self::CHART_TYPE_TREEMAP,
            self::CHART_TYPE_SUNBURST,
            self::CHART_TYPE_HISTOGRAM,
            self::CHART_TYPE_PARETO_LINE,
            self::CHART_TYPE_BOX_AND_WHISKER,
            self::CHART_TYPE_WATERFALL,
            self::CHART_TYPE_FUNNEL,
            self::CHART_TYPE_MAP,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['chartType'] = isset($data['chartType']) ? $data['chartType'] : null;
        $this->container['showDataLabelsOverMaximum'] = isset($data['showDataLabelsOverMaximum']) ? $data['showDataLabelsOverMaximum'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['backWall'] = isset($data['backWall']) ? $data['backWall'] : null;
        $this->container['sideWall'] = isset($data['sideWall']) ? $data['sideWall'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['legend'] = isset($data['legend']) ? $data['legend'] : null;
        $this->container['axes'] = isset($data['axes']) ? $data['axes'] : null;
        $this->container['plotArea'] = isset($data['plotArea']) ? $data['plotArea'] : null;
        $this->container['type'] = 'Chart';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['chartType'] === null) {
            $invalidProperties[] = "'chartType' can't be null";
        }
        $allowedValues = $this->getChartTypeAllowableValues();
        if (!in_array($this->container['chartType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'chartType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['chartType'] === null) {
            return false;
        }
        $allowedValues = $this->getChartTypeAllowableValues();
        if (!in_array($this->container['chartType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets chartType
     *
     * @return string
     */
    public function getChartType()
    {
        return $this->container['chartType'];
    }

    /**
     * Sets chartType
     *
     * @param string $chartType Gets or sets the type of the chart.
     *
     * @return $this
     */
    public function setChartType($chartType)
    {
        $allowedValues = $this->getChartTypeAllowableValues();


        if (is_numeric($chartType)) {
            if ($chartType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'chartType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $chartType = $allowedValues[$chartType];
            }
        } else {
            if (!in_array($chartType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'chartType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['chartType'] = $chartType;

        return $this;
    }

    /**
     * Gets showDataLabelsOverMaximum
     *
     * @return bool
     */
    public function getShowDataLabelsOverMaximum()
    {
        return $this->container['showDataLabelsOverMaximum'];
    }

    /**
     * Sets showDataLabelsOverMaximum
     *
     * @param bool $showDataLabelsOverMaximum True if data labels over the maximum of the chart shall be shown.
     *
     * @return $this
     */
    public function setShowDataLabelsOverMaximum($showDataLabelsOverMaximum)
    {
        $this->container['showDataLabelsOverMaximum'] = $showDataLabelsOverMaximum;

        return $this;
    }

    /**
     * Gets series
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Series[]
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Series[] $series Gets or sets the series of chart data values.
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartCategory[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartCategory[] $categories Gets or sets the categories for chart data
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartTitle
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartTitle $title Gets or sets the title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets backWall
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartWall
     */
    public function getBackWall()
    {
        return $this->container['backWall'];
    }

    /**
     * Sets backWall
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartWall $backWall Gets or sets the back wall.
     *
     * @return $this
     */
    public function setBackWall($backWall)
    {
        $this->container['backWall'] = $backWall;

        return $this;
    }

    /**
     * Gets sideWall
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartWall
     */
    public function getSideWall()
    {
        return $this->container['sideWall'];
    }

    /**
     * Sets sideWall
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartWall $sideWall Gets or sets the side wall.
     *
     * @return $this
     */
    public function setSideWall($sideWall)
    {
        $this->container['sideWall'] = $sideWall;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartWall
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartWall $floor Gets or sets the floor.
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets legend
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Legend
     */
    public function getLegend()
    {
        return $this->container['legend'];
    }

    /**
     * Sets legend
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Legend $legend Gets or sets the legend.
     *
     * @return $this
     */
    public function setLegend($legend)
    {
        $this->container['legend'] = $legend;

        return $this;
    }

    /**
     * Gets axes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Axes
     */
    public function getAxes()
    {
        return $this->container['axes'];
    }

    /**
     * Sets axes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Axes $axes Gets or sets the axes.
     *
     * @return $this
     */
    public function setAxes($axes)
    {
        $this->container['axes'] = $axes;

        return $this;
    }

    /**
     * Gets plotArea
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\PlotArea
     */
    public function getPlotArea()
    {
        return $this->container['plotArea'];
    }

    /**
     * Sets plotArea
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\PlotArea $plotArea Gets or sets the plot area.
     *
     * @return $this
     */
    public function setPlotArea($plotArea)
    {
        $this->container['plotArea'] = $plotArea;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


