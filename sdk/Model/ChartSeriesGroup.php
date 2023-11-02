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


use \ArrayAccess;
use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * ChartSeriesGroup Class Doc Comment
 *
 * @category Class
 * @description Chart series group. Defines common properties for a group of series.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChartSeriesGroup implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartSeriesGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'gapWidth' => 'int',
        'gapDepth' => 'int',
        'firstSliceAngle' => 'int',
        'isColorVaried' => 'bool',
        'hasSeriesLines' => 'bool',
        'overlap' => 'int',
        'secondPieSize' => 'int',
        'pieSplitPosition' => 'double',
        'pieSplitBy' => 'string',
        'doughnutHoleSize' => 'int',
        'bubbleSizeScale' => 'int',
        'hiLowLinesFormat' => '\Aspose\Slides\Cloud\Sdk\Model\ChartLinesFormat',
        'bubbleSizeRepresentation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'gapWidth' => 'int32',
        'gapDepth' => 'int32',
        'firstSliceAngle' => 'int32',
        'isColorVaried' => null,
        'hasSeriesLines' => null,
        'overlap' => 'int32',
        'secondPieSize' => 'int32',
        'pieSplitPosition' => 'double',
        'pieSplitBy' => null,
        'doughnutHoleSize' => 'int32',
        'bubbleSizeScale' => 'int32',
        'hiLowLinesFormat' => null,
        'bubbleSizeRepresentation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'Type',
        'gapWidth' => 'GapWidth',
        'gapDepth' => 'GapDepth',
        'firstSliceAngle' => 'FirstSliceAngle',
        'isColorVaried' => 'IsColorVaried',
        'hasSeriesLines' => 'HasSeriesLines',
        'overlap' => 'Overlap',
        'secondPieSize' => 'SecondPieSize',
        'pieSplitPosition' => 'PieSplitPosition',
        'pieSplitBy' => 'PieSplitBy',
        'doughnutHoleSize' => 'DoughnutHoleSize',
        'bubbleSizeScale' => 'BubbleSizeScale',
        'hiLowLinesFormat' => 'HiLowLinesFormat',
        'bubbleSizeRepresentation' => 'BubbleSizeRepresentation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'gapWidth' => 'setGapWidth',
        'gapDepth' => 'setGapDepth',
        'firstSliceAngle' => 'setFirstSliceAngle',
        'isColorVaried' => 'setIsColorVaried',
        'hasSeriesLines' => 'setHasSeriesLines',
        'overlap' => 'setOverlap',
        'secondPieSize' => 'setSecondPieSize',
        'pieSplitPosition' => 'setPieSplitPosition',
        'pieSplitBy' => 'setPieSplitBy',
        'doughnutHoleSize' => 'setDoughnutHoleSize',
        'bubbleSizeScale' => 'setBubbleSizeScale',
        'hiLowLinesFormat' => 'setHiLowLinesFormat',
        'bubbleSizeRepresentation' => 'setBubbleSizeRepresentation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'gapWidth' => 'getGapWidth',
        'gapDepth' => 'getGapDepth',
        'firstSliceAngle' => 'getFirstSliceAngle',
        'isColorVaried' => 'getIsColorVaried',
        'hasSeriesLines' => 'getHasSeriesLines',
        'overlap' => 'getOverlap',
        'secondPieSize' => 'getSecondPieSize',
        'pieSplitPosition' => 'getPieSplitPosition',
        'pieSplitBy' => 'getPieSplitBy',
        'doughnutHoleSize' => 'getDoughnutHoleSize',
        'bubbleSizeScale' => 'getBubbleSizeScale',
        'hiLowLinesFormat' => 'getHiLowLinesFormat',
        'bubbleSizeRepresentation' => 'getBubbleSizeRepresentation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const TYPE_BAR_OF_PIE_CHART = 'BarOfPieChart';
    const TYPE_PIE_OF_PIE_CHART = 'PieOfPieChart';
    const TYPE_DOUGHNUT_CHART = 'DoughnutChart';
    const TYPE_PIE_CHART = 'PieChart';
    const TYPE_AREA_CHART_AREA = 'AreaChartArea';
    const TYPE_AREA_CHART_PERCENTS_STACKED_AREA = 'AreaChartPercentsStackedArea';
    const TYPE_AREA_CHART_STACKED_AREA = 'AreaChartStackedArea';
    const TYPE_BAR_CHART_HORIZ_CLUSTERED = 'BarChartHorizClustered';
    const TYPE_BAR_CHART_HORIZ_STACKED = 'BarChartHorizStacked';
    const TYPE_BAR_CHART_HORIZ_PERCENTS_STACKED = 'BarChartHorizPercentsStacked';
    const TYPE_BAR_CHART_VERT_CLUSTERED = 'BarChartVertClustered';
    const TYPE_BAR_CHART_VERT_STACKED = 'BarChartVertStacked';
    const TYPE_BAR_CHART_VERT_PERCENTS_STACKED = 'BarChartVertPercentsStacked';
    const TYPE_LINE_CHART_LINE = 'LineChartLine';
    const TYPE_LINE_CHART_STACKED_LINE = 'LineChartStackedLine';
    const TYPE_LINE_CHART_PERCENTS_STACKED_LINE = 'LineChartPercentsStackedLine';
    const TYPE_RADAR_CHART = 'RadarChart';
    const TYPE_FILLED_RADAR_CHART = 'FilledRadarChart';
    const TYPE_STOCK_HIGH_LOW_CLOSE = 'StockHighLowClose';
    const TYPE_STOCK_OPEN_HIGH_LOW_CLOSE = 'StockOpenHighLowClose';
    const TYPE_STOCK_VOLUME_HIGH_LOW_CLOSE = 'StockVolumeHighLowClose';
    const TYPE_STOCK_VOLUME_OPEN_HIGH_LOW_CLOSE = 'StockVolumeOpenHighLowClose';
    const TYPE_SCATTER_STRAIGHT_MARKER = 'ScatterStraightMarker';
    const TYPE_SCATTER_SMOOTH_MARKER = 'ScatterSmoothMarker';
    const TYPE_AREA_CHART_AREA3_D = 'AreaChartArea3D';
    const TYPE_AREA_CHART_STACKED_AREA3_D = 'AreaChartStackedArea3D';
    const TYPE_AREA_CHART_PERCENTS_STACKED_AREA3_D = 'AreaChartPercentsStackedArea3D';
    const TYPE_LINE3_D_CHART = 'Line3DChart';
    const TYPE_PIE3_D_CHART = 'Pie3DChart';
    const TYPE_BAR3_D_CHART_VERT = 'Bar3DChartVert';
    const TYPE_BAR3_D_CHART_VERT_CLUSTERED = 'Bar3DChartVertClustered';
    const TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_COLUMN3_D = 'Bar3DChartVertPercentsStackedColumn3D';
    const TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_CONE = 'Bar3DChartVertPercentsStackedCone';
    const TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_CYLINDER = 'Bar3DChartVertPercentsStackedCylinder';
    const TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_PYRAMID = 'Bar3DChartVertPercentsStackedPyramid';
    const TYPE_BAR3_D_CHART_VERT_STACKED_COLUMN3_D = 'Bar3DChartVertStackedColumn3D';
    const TYPE_BAR3_D_CHART_VERT_STACKED_CONE = 'Bar3DChartVertStackedCone';
    const TYPE_BAR3_D_CHART_VERT_STACKED_CYLINDER = 'Bar3DChartVertStackedCylinder';
    const TYPE_BAR3_D_CHART_VERT_STACKED_PYRAMID = 'Bar3DChartVertStackedPyramid';
    const TYPE_BAR3_D_CHART_HORIZ_CLUSTERED = 'Bar3DChartHorizClustered';
    const TYPE_BAR3_D_CHART_HORIZ_STACKED_BAR3_D = 'Bar3DChartHorizStackedBar3D';
    const TYPE_BAR3_D_CHART_HORIZ_STACKED_CONE = 'Bar3DChartHorizStackedCone';
    const TYPE_BAR3_D_CHART_HORIZ_STACKED_CYLINDER = 'Bar3DChartHorizStackedCylinder';
    const TYPE_BAR3_D_CHART_HORIZ_STACKED_PYRAMID = 'Bar3DChartHorizStackedPyramid';
    const TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_BAR3_D = 'Bar3DChartHorizPercentsStackedBar3D';
    const TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_CONE = 'Bar3DChartHorizPercentsStackedCone';
    const TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_CYLINDER = 'Bar3DChartHorizPercentsStackedCylinder';
    const TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_PYRAMID = 'Bar3DChartHorizPercentsStackedPyramid';
    const TYPE_SURFACE_CHART_CONTOUR = 'SurfaceChartContour';
    const TYPE_SURFACE_CHART_WIREFRAME_CONTOUR = 'SurfaceChartWireframeContour';
    const TYPE_SURFACE_CHART_SURFACE3_D = 'SurfaceChartSurface3D';
    const TYPE_SURFACE_CHART_WIREFRAME_SURFACE3_D = 'SurfaceChartWireframeSurface3D';
    const TYPE_BUBBLE_CHART = 'BubbleChart';
    const TYPE_HISTOGRAM_CHART = 'HistogramChart';
    const TYPE_PARETO_LINE_CHART = 'ParetoLineChart';
    const TYPE_BOX_AND_WHISKER_CHART = 'BoxAndWhiskerChart';
    const TYPE_WATERFALL_CHART = 'WaterfallChart';
    const TYPE_FUNNEL_CHART = 'FunnelChart';
    const TYPE_TREEMAP_CHART = 'TreemapChart';
    const TYPE_MAP_CHART = 'MapChart';
    const TYPE_SUNBURST_CHART = 'SunburstChart';
    const PIE_SPLIT_BY__DEFAULT = 'Default';
    const PIE_SPLIT_BY_CUSTOM = 'Custom';
    const PIE_SPLIT_BY_BY_PERCENTAGE = 'ByPercentage';
    const PIE_SPLIT_BY_BY_POS = 'ByPos';
    const PIE_SPLIT_BY_BY_VALUE = 'ByValue';
    const BUBBLE_SIZE_REPRESENTATION_AREA = 'Area';
    const BUBBLE_SIZE_REPRESENTATION_WIDTH = 'Width';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BAR_OF_PIE_CHART,
            self::TYPE_PIE_OF_PIE_CHART,
            self::TYPE_DOUGHNUT_CHART,
            self::TYPE_PIE_CHART,
            self::TYPE_AREA_CHART_AREA,
            self::TYPE_AREA_CHART_PERCENTS_STACKED_AREA,
            self::TYPE_AREA_CHART_STACKED_AREA,
            self::TYPE_BAR_CHART_HORIZ_CLUSTERED,
            self::TYPE_BAR_CHART_HORIZ_STACKED,
            self::TYPE_BAR_CHART_HORIZ_PERCENTS_STACKED,
            self::TYPE_BAR_CHART_VERT_CLUSTERED,
            self::TYPE_BAR_CHART_VERT_STACKED,
            self::TYPE_BAR_CHART_VERT_PERCENTS_STACKED,
            self::TYPE_LINE_CHART_LINE,
            self::TYPE_LINE_CHART_STACKED_LINE,
            self::TYPE_LINE_CHART_PERCENTS_STACKED_LINE,
            self::TYPE_RADAR_CHART,
            self::TYPE_FILLED_RADAR_CHART,
            self::TYPE_STOCK_HIGH_LOW_CLOSE,
            self::TYPE_STOCK_OPEN_HIGH_LOW_CLOSE,
            self::TYPE_STOCK_VOLUME_HIGH_LOW_CLOSE,
            self::TYPE_STOCK_VOLUME_OPEN_HIGH_LOW_CLOSE,
            self::TYPE_SCATTER_STRAIGHT_MARKER,
            self::TYPE_SCATTER_SMOOTH_MARKER,
            self::TYPE_AREA_CHART_AREA3_D,
            self::TYPE_AREA_CHART_STACKED_AREA3_D,
            self::TYPE_AREA_CHART_PERCENTS_STACKED_AREA3_D,
            self::TYPE_LINE3_D_CHART,
            self::TYPE_PIE3_D_CHART,
            self::TYPE_BAR3_D_CHART_VERT,
            self::TYPE_BAR3_D_CHART_VERT_CLUSTERED,
            self::TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_COLUMN3_D,
            self::TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_CONE,
            self::TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_CYLINDER,
            self::TYPE_BAR3_D_CHART_VERT_PERCENTS_STACKED_PYRAMID,
            self::TYPE_BAR3_D_CHART_VERT_STACKED_COLUMN3_D,
            self::TYPE_BAR3_D_CHART_VERT_STACKED_CONE,
            self::TYPE_BAR3_D_CHART_VERT_STACKED_CYLINDER,
            self::TYPE_BAR3_D_CHART_VERT_STACKED_PYRAMID,
            self::TYPE_BAR3_D_CHART_HORIZ_CLUSTERED,
            self::TYPE_BAR3_D_CHART_HORIZ_STACKED_BAR3_D,
            self::TYPE_BAR3_D_CHART_HORIZ_STACKED_CONE,
            self::TYPE_BAR3_D_CHART_HORIZ_STACKED_CYLINDER,
            self::TYPE_BAR3_D_CHART_HORIZ_STACKED_PYRAMID,
            self::TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_BAR3_D,
            self::TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_CONE,
            self::TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_CYLINDER,
            self::TYPE_BAR3_D_CHART_HORIZ_PERCENTS_STACKED_PYRAMID,
            self::TYPE_SURFACE_CHART_CONTOUR,
            self::TYPE_SURFACE_CHART_WIREFRAME_CONTOUR,
            self::TYPE_SURFACE_CHART_SURFACE3_D,
            self::TYPE_SURFACE_CHART_WIREFRAME_SURFACE3_D,
            self::TYPE_BUBBLE_CHART,
            self::TYPE_HISTOGRAM_CHART,
            self::TYPE_PARETO_LINE_CHART,
            self::TYPE_BOX_AND_WHISKER_CHART,
            self::TYPE_WATERFALL_CHART,
            self::TYPE_FUNNEL_CHART,
            self::TYPE_TREEMAP_CHART,
            self::TYPE_MAP_CHART,
            self::TYPE_SUNBURST_CHART,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPieSplitByAllowableValues()
    {
        return [
            self::PIE_SPLIT_BY__DEFAULT,
            self::PIE_SPLIT_BY_CUSTOM,
            self::PIE_SPLIT_BY_BY_PERCENTAGE,
            self::PIE_SPLIT_BY_BY_POS,
            self::PIE_SPLIT_BY_BY_VALUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBubbleSizeRepresentationAllowableValues()
    {
        return [
            self::BUBBLE_SIZE_REPRESENTATION_AREA,
            self::BUBBLE_SIZE_REPRESENTATION_WIDTH,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['gapWidth'] = isset($data['gapWidth']) ? $data['gapWidth'] : null;
        $this->container['gapDepth'] = isset($data['gapDepth']) ? $data['gapDepth'] : null;
        $this->container['firstSliceAngle'] = isset($data['firstSliceAngle']) ? $data['firstSliceAngle'] : null;
        $this->container['isColorVaried'] = isset($data['isColorVaried']) ? $data['isColorVaried'] : null;
        $this->container['hasSeriesLines'] = isset($data['hasSeriesLines']) ? $data['hasSeriesLines'] : null;
        $this->container['overlap'] = isset($data['overlap']) ? $data['overlap'] : null;
        $this->container['secondPieSize'] = isset($data['secondPieSize']) ? $data['secondPieSize'] : null;
        $this->container['pieSplitPosition'] = isset($data['pieSplitPosition']) ? $data['pieSplitPosition'] : null;
        $this->container['pieSplitBy'] = isset($data['pieSplitBy']) ? $data['pieSplitBy'] : null;
        $this->container['doughnutHoleSize'] = isset($data['doughnutHoleSize']) ? $data['doughnutHoleSize'] : null;
        $this->container['bubbleSizeScale'] = isset($data['bubbleSizeScale']) ? $data['bubbleSizeScale'] : null;
        $this->container['hiLowLinesFormat'] = isset($data['hiLowLinesFormat']) ? $data['hiLowLinesFormat'] : null;
        $this->container['bubbleSizeRepresentation'] = isset($data['bubbleSizeRepresentation']) ? $data['bubbleSizeRepresentation'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPieSplitByAllowableValues();
        if (!in_array($this->container['pieSplitBy'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pieSplitBy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBubbleSizeRepresentationAllowableValues();
        if (!in_array($this->container['bubbleSizeRepresentation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bubbleSizeRepresentation', must be one of '%s'",
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPieSplitByAllowableValues();
        if (!in_array($this->container['pieSplitBy'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getBubbleSizeRepresentationAllowableValues();
        if (!in_array($this->container['bubbleSizeRepresentation'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Returns a type of this series group.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();


        if (is_numeric($type)) {
            if ($type >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'type', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $type = $allowedValues[$type];
            }
        } else {
            if (!is_null($type) && !in_array($type, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'type', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets gapWidth
     *
     * @return int
     */
    public function getGapWidth()
    {
        return $this->container['gapWidth'];
    }

    /**
     * Sets gapWidth
     *
     * @param int $gapWidth Specifies the space between bar or column clusters, as a percentage of the bar or column width.
     *
     * @return $this
     */
    public function setGapWidth($gapWidth)
    {
        $this->container['gapWidth'] = $gapWidth;

        return $this;
    }

    /**
     * Gets gapDepth
     *
     * @return int
     */
    public function getGapDepth()
    {
        return $this->container['gapDepth'];
    }

    /**
     * Sets gapDepth
     *
     * @param int $gapDepth Returns or sets the distance, as a percentage of the marker width, between the data series in a 3D chart.
     *
     * @return $this
     */
    public function setGapDepth($gapDepth)
    {
        $this->container['gapDepth'] = $gapDepth;

        return $this;
    }

    /**
     * Gets firstSliceAngle
     *
     * @return int
     */
    public function getFirstSliceAngle()
    {
        return $this->container['firstSliceAngle'];
    }

    /**
     * Sets firstSliceAngle
     *
     * @param int $firstSliceAngle Gets or sets the angle of the first pie or doughnut chart slice,  in degrees (clockwise from up, from 0 to 360 degrees).
     *
     * @return $this
     */
    public function setFirstSliceAngle($firstSliceAngle)
    {
        $this->container['firstSliceAngle'] = $firstSliceAngle;

        return $this;
    }

    /**
     * Gets isColorVaried
     *
     * @return bool
     */
    public function getIsColorVaried()
    {
        return $this->container['isColorVaried'];
    }

    /**
     * Sets isColorVaried
     *
     * @param bool $isColorVaried Specifies that each data marker in the series has a different color.
     *
     * @return $this
     */
    public function setIsColorVaried($isColorVaried)
    {
        $this->container['isColorVaried'] = $isColorVaried;

        return $this;
    }

    /**
     * Gets hasSeriesLines
     *
     * @return bool
     */
    public function getHasSeriesLines()
    {
        return $this->container['hasSeriesLines'];
    }

    /**
     * Sets hasSeriesLines
     *
     * @param bool $hasSeriesLines True if chart has series lines. Applied to stacked bar and OfPie charts.
     *
     * @return $this
     */
    public function setHasSeriesLines($hasSeriesLines)
    {
        $this->container['hasSeriesLines'] = $hasSeriesLines;

        return $this;
    }

    /**
     * Gets overlap
     *
     * @return int
     */
    public function getOverlap()
    {
        return $this->container['overlap'];
    }

    /**
     * Sets overlap
     *
     * @param int $overlap Specifies how much bars and columns shall overlap on 2-D charts (from -100 to 100).
     *
     * @return $this
     */
    public function setOverlap($overlap)
    {
        $this->container['overlap'] = $overlap;

        return $this;
    }

    /**
     * Gets secondPieSize
     *
     * @return int
     */
    public function getSecondPieSize()
    {
        return $this->container['secondPieSize'];
    }

    /**
     * Sets secondPieSize
     *
     * @param int $secondPieSize Specifies the size of the second pie or bar of a pie-of-pie chart or  a bar-of-pie chart, as a percentage of the size of the first pie (can  be between 5 and 200 percents).
     *
     * @return $this
     */
    public function setSecondPieSize($secondPieSize)
    {
        $this->container['secondPieSize'] = $secondPieSize;

        return $this;
    }

    /**
     * Gets pieSplitPosition
     *
     * @return double
     */
    public function getPieSplitPosition()
    {
        return $this->container['pieSplitPosition'];
    }

    /**
     * Sets pieSplitPosition
     *
     * @param double $pieSplitPosition Specifies a value that shall be used to determine which data points  are in the second pie or bar on a pie-of-pie or bar-of-pie chart.  Is used together with PieSplitBy property.
     *
     * @return $this
     */
    public function setPieSplitPosition($pieSplitPosition)
    {
        $this->container['pieSplitPosition'] = $pieSplitPosition;

        return $this;
    }

    /**
     * Gets pieSplitBy
     *
     * @return string
     */
    public function getPieSplitBy()
    {
        return $this->container['pieSplitBy'];
    }

    /**
     * Sets pieSplitBy
     *
     * @param string $pieSplitBy Specifies how to determine which data points are in the second pie or bar  on a pie-of-pie or bar-of-pie chart.
     *
     * @return $this
     */
    public function setPieSplitBy($pieSplitBy)
    {
        $allowedValues = $this->getPieSplitByAllowableValues();


        if (is_numeric($pieSplitBy)) {
            if ($pieSplitBy >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pieSplitBy', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $pieSplitBy = $allowedValues[$pieSplitBy];
            }
        } else {
            if (!is_null($pieSplitBy) && !in_array($pieSplitBy, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pieSplitBy', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['pieSplitBy'] = $pieSplitBy;

        return $this;
    }

    /**
     * Gets doughnutHoleSize
     *
     * @return int
     */
    public function getDoughnutHoleSize()
    {
        return $this->container['doughnutHoleSize'];
    }

    /**
     * Sets doughnutHoleSize
     *
     * @param int $doughnutHoleSize Specifies the size of the hole in a doughnut chart (can be between 10 and 90 percents  of the size of the plot area.).
     *
     * @return $this
     */
    public function setDoughnutHoleSize($doughnutHoleSize)
    {
        $this->container['doughnutHoleSize'] = $doughnutHoleSize;

        return $this;
    }

    /**
     * Gets bubbleSizeScale
     *
     * @return int
     */
    public function getBubbleSizeScale()
    {
        return $this->container['bubbleSizeScale'];
    }

    /**
     * Sets bubbleSizeScale
     *
     * @param int $bubbleSizeScale Specifies the scale factor for the bubble chart (can be  between 0 and 300 percents of the default size). Read/write Int32.
     *
     * @return $this
     */
    public function setBubbleSizeScale($bubbleSizeScale)
    {
        $this->container['bubbleSizeScale'] = $bubbleSizeScale;

        return $this;
    }

    /**
     * Gets hiLowLinesFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartLinesFormat
     */
    public function getHiLowLinesFormat()
    {
        return $this->container['hiLowLinesFormat'];
    }

    /**
     * Sets hiLowLinesFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartLinesFormat $hiLowLinesFormat Specifies HiLowLines format.  HiLowLines applied with HiLowClose, OpenHiLowClose, VolumeHiLowClose and VolumeOpenHiLowClose chart types.
     *
     * @return $this
     */
    public function setHiLowLinesFormat($hiLowLinesFormat)
    {
        $this->container['hiLowLinesFormat'] = $hiLowLinesFormat;

        return $this;
    }

    /**
     * Gets bubbleSizeRepresentation
     *
     * @return string
     */
    public function getBubbleSizeRepresentation()
    {
        return $this->container['bubbleSizeRepresentation'];
    }

    /**
     * Sets bubbleSizeRepresentation
     *
     * @param string $bubbleSizeRepresentation Specifies how the bubble size values are represented on the bubble chart. Read/write BubbleSizeRepresentationType.
     *
     * @return $this
     */
    public function setBubbleSizeRepresentation($bubbleSizeRepresentation)
    {
        $allowedValues = $this->getBubbleSizeRepresentationAllowableValues();


        if (is_numeric($bubbleSizeRepresentation)) {
            if ($bubbleSizeRepresentation >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'bubbleSizeRepresentation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $bubbleSizeRepresentation = $allowedValues[$bubbleSizeRepresentation];
            }
        } else {
            if (!is_null($bubbleSizeRepresentation) && !in_array($bubbleSizeRepresentation, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'bubbleSizeRepresentation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['bubbleSizeRepresentation'] = $bubbleSizeRepresentation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
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
    public function offsetGet($offset) : mixed
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
    public function offsetSet($offset, $value) : void
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
    public function offsetUnset($offset) : void
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


