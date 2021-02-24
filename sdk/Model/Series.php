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
 * Series Class Doc Comment
 *
 * @category Class
 * @description A chart series.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Series implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Series';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'name' => 'string',
        'isColorVaried' => 'bool',
        'invertedSolidFillColor' => 'string',
        'smooth' => 'bool',
        'plotOnSecondAxis' => 'bool',
        'order' => 'int',
        'numberFormatOfYValues' => 'string',
        'numberFormatOfXValues' => 'string',
        'numberFormatOfValues' => 'string',
        'numberFormatOfBubbleSizes' => 'string',
        'invertIfNegative' => 'bool',
        'explosion' => 'int',
        'marker' => '\Aspose\Slides\Cloud\Sdk\Model\SeriesMarker',
        'fillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effectFormat' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'lineFormat' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'dataPointType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'name' => null,
        'isColorVaried' => null,
        'invertedSolidFillColor' => null,
        'smooth' => null,
        'plotOnSecondAxis' => null,
        'order' => 'int32',
        'numberFormatOfYValues' => null,
        'numberFormatOfXValues' => null,
        'numberFormatOfValues' => null,
        'numberFormatOfBubbleSizes' => null,
        'invertIfNegative' => null,
        'explosion' => 'int32',
        'marker' => null,
        'fillFormat' => null,
        'effectFormat' => null,
        'lineFormat' => null,
        'dataPointType' => null
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
        'name' => 'Name',
        'isColorVaried' => 'IsColorVaried',
        'invertedSolidFillColor' => 'InvertedSolidFillColor',
        'smooth' => 'Smooth',
        'plotOnSecondAxis' => 'PlotOnSecondAxis',
        'order' => 'Order',
        'numberFormatOfYValues' => 'NumberFormatOfYValues',
        'numberFormatOfXValues' => 'NumberFormatOfXValues',
        'numberFormatOfValues' => 'NumberFormatOfValues',
        'numberFormatOfBubbleSizes' => 'NumberFormatOfBubbleSizes',
        'invertIfNegative' => 'InvertIfNegative',
        'explosion' => 'Explosion',
        'marker' => 'Marker',
        'fillFormat' => 'FillFormat',
        'effectFormat' => 'EffectFormat',
        'lineFormat' => 'LineFormat',
        'dataPointType' => 'DataPointType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'isColorVaried' => 'setIsColorVaried',
        'invertedSolidFillColor' => 'setInvertedSolidFillColor',
        'smooth' => 'setSmooth',
        'plotOnSecondAxis' => 'setPlotOnSecondAxis',
        'order' => 'setOrder',
        'numberFormatOfYValues' => 'setNumberFormatOfYValues',
        'numberFormatOfXValues' => 'setNumberFormatOfXValues',
        'numberFormatOfValues' => 'setNumberFormatOfValues',
        'numberFormatOfBubbleSizes' => 'setNumberFormatOfBubbleSizes',
        'invertIfNegative' => 'setInvertIfNegative',
        'explosion' => 'setExplosion',
        'marker' => 'setMarker',
        'fillFormat' => 'setFillFormat',
        'effectFormat' => 'setEffectFormat',
        'lineFormat' => 'setLineFormat',
        'dataPointType' => 'setDataPointType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'isColorVaried' => 'getIsColorVaried',
        'invertedSolidFillColor' => 'getInvertedSolidFillColor',
        'smooth' => 'getSmooth',
        'plotOnSecondAxis' => 'getPlotOnSecondAxis',
        'order' => 'getOrder',
        'numberFormatOfYValues' => 'getNumberFormatOfYValues',
        'numberFormatOfXValues' => 'getNumberFormatOfXValues',
        'numberFormatOfValues' => 'getNumberFormatOfValues',
        'numberFormatOfBubbleSizes' => 'getNumberFormatOfBubbleSizes',
        'invertIfNegative' => 'getInvertIfNegative',
        'explosion' => 'getExplosion',
        'marker' => 'getMarker',
        'fillFormat' => 'getFillFormat',
        'effectFormat' => 'getEffectFormat',
        'lineFormat' => 'getLineFormat',
        'dataPointType' => 'getDataPointType'
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

    const TYPE_CLUSTERED_COLUMN = 'ClusteredColumn';
    const TYPE_STACKED_COLUMN = 'StackedColumn';
    const TYPE_PERCENTS_STACKED_COLUMN = 'PercentsStackedColumn';
    const TYPE_CLUSTERED_COLUMN3_D = 'ClusteredColumn3D';
    const TYPE_STACKED_COLUMN3_D = 'StackedColumn3D';
    const TYPE_PERCENTS_STACKED_COLUMN3_D = 'PercentsStackedColumn3D';
    const TYPE_COLUMN3_D = 'Column3D';
    const TYPE_CLUSTERED_CYLINDER = 'ClusteredCylinder';
    const TYPE_STACKED_CYLINDER = 'StackedCylinder';
    const TYPE_PERCENTS_STACKED_CYLINDER = 'PercentsStackedCylinder';
    const TYPE_CYLINDER3_D = 'Cylinder3D';
    const TYPE_CLUSTERED_CONE = 'ClusteredCone';
    const TYPE_STACKED_CONE = 'StackedCone';
    const TYPE_PERCENTS_STACKED_CONE = 'PercentsStackedCone';
    const TYPE_CONE3_D = 'Cone3D';
    const TYPE_CLUSTERED_PYRAMID = 'ClusteredPyramid';
    const TYPE_STACKED_PYRAMID = 'StackedPyramid';
    const TYPE_PERCENTS_STACKED_PYRAMID = 'PercentsStackedPyramid';
    const TYPE_PYRAMID3_D = 'Pyramid3D';
    const TYPE_LINE = 'Line';
    const TYPE_STACKED_LINE = 'StackedLine';
    const TYPE_PERCENTS_STACKED_LINE = 'PercentsStackedLine';
    const TYPE_LINE_WITH_MARKERS = 'LineWithMarkers';
    const TYPE_STACKED_LINE_WITH_MARKERS = 'StackedLineWithMarkers';
    const TYPE_PERCENTS_STACKED_LINE_WITH_MARKERS = 'PercentsStackedLineWithMarkers';
    const TYPE_LINE3_D = 'Line3D';
    const TYPE_PIE = 'Pie';
    const TYPE_PIE3_D = 'Pie3D';
    const TYPE_PIE_OF_PIE = 'PieOfPie';
    const TYPE_EXPLODED_PIE = 'ExplodedPie';
    const TYPE_EXPLODED_PIE3_D = 'ExplodedPie3D';
    const TYPE_BAR_OF_PIE = 'BarOfPie';
    const TYPE_PERCENTS_STACKED_BAR = 'PercentsStackedBar';
    const TYPE_CLUSTERED_BAR3_D = 'ClusteredBar3D';
    const TYPE_CLUSTERED_BAR = 'ClusteredBar';
    const TYPE_STACKED_BAR = 'StackedBar';
    const TYPE_STACKED_BAR3_D = 'StackedBar3D';
    const TYPE_PERCENTS_STACKED_BAR3_D = 'PercentsStackedBar3D';
    const TYPE_CLUSTERED_HORIZONTAL_CYLINDER = 'ClusteredHorizontalCylinder';
    const TYPE_STACKED_HORIZONTAL_CYLINDER = 'StackedHorizontalCylinder';
    const TYPE_PERCENTS_STACKED_HORIZONTAL_CYLINDER = 'PercentsStackedHorizontalCylinder';
    const TYPE_CLUSTERED_HORIZONTAL_CONE = 'ClusteredHorizontalCone';
    const TYPE_STACKED_HORIZONTAL_CONE = 'StackedHorizontalCone';
    const TYPE_PERCENTS_STACKED_HORIZONTAL_CONE = 'PercentsStackedHorizontalCone';
    const TYPE_CLUSTERED_HORIZONTAL_PYRAMID = 'ClusteredHorizontalPyramid';
    const TYPE_STACKED_HORIZONTAL_PYRAMID = 'StackedHorizontalPyramid';
    const TYPE_PERCENTS_STACKED_HORIZONTAL_PYRAMID = 'PercentsStackedHorizontalPyramid';
    const TYPE_AREA = 'Area';
    const TYPE_STACKED_AREA = 'StackedArea';
    const TYPE_PERCENTS_STACKED_AREA = 'PercentsStackedArea';
    const TYPE_AREA3_D = 'Area3D';
    const TYPE_STACKED_AREA3_D = 'StackedArea3D';
    const TYPE_PERCENTS_STACKED_AREA3_D = 'PercentsStackedArea3D';
    const TYPE_SCATTER_WITH_MARKERS = 'ScatterWithMarkers';
    const TYPE_SCATTER_WITH_SMOOTH_LINES_AND_MARKERS = 'ScatterWithSmoothLinesAndMarkers';
    const TYPE_SCATTER_WITH_SMOOTH_LINES = 'ScatterWithSmoothLines';
    const TYPE_SCATTER_WITH_STRAIGHT_LINES_AND_MARKERS = 'ScatterWithStraightLinesAndMarkers';
    const TYPE_SCATTER_WITH_STRAIGHT_LINES = 'ScatterWithStraightLines';
    const TYPE_HIGH_LOW_CLOSE = 'HighLowClose';
    const TYPE_OPEN_HIGH_LOW_CLOSE = 'OpenHighLowClose';
    const TYPE_VOLUME_HIGH_LOW_CLOSE = 'VolumeHighLowClose';
    const TYPE_VOLUME_OPEN_HIGH_LOW_CLOSE = 'VolumeOpenHighLowClose';
    const TYPE_SURFACE3_D = 'Surface3D';
    const TYPE_WIREFRAME_SURFACE3_D = 'WireframeSurface3D';
    const TYPE_CONTOUR = 'Contour';
    const TYPE_WIREFRAME_CONTOUR = 'WireframeContour';
    const TYPE_DOUGHNUT = 'Doughnut';
    const TYPE_EXPLODED_DOUGHNUT = 'ExplodedDoughnut';
    const TYPE_BUBBLE = 'Bubble';
    const TYPE_BUBBLE_WITH3_D = 'BubbleWith3D';
    const TYPE_RADAR = 'Radar';
    const TYPE_RADAR_WITH_MARKERS = 'RadarWithMarkers';
    const TYPE_FILLED_RADAR = 'FilledRadar';
    const TYPE_SERIES_OF_MIXED_TYPES = 'SeriesOfMixedTypes';
    const TYPE_TREEMAP = 'Treemap';
    const TYPE_SUNBURST = 'Sunburst';
    const TYPE_HISTOGRAM = 'Histogram';
    const TYPE_PARETO_LINE = 'ParetoLine';
    const TYPE_BOX_AND_WHISKER = 'BoxAndWhisker';
    const TYPE_WATERFALL = 'Waterfall';
    const TYPE_FUNNEL = 'Funnel';
    const TYPE_MAP = 'Map';
    const DATA_POINT_TYPE_ONE_VALUE = 'OneValue';
    const DATA_POINT_TYPE_SCATTER = 'Scatter';
    const DATA_POINT_TYPE_BUBBLE = 'Bubble';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CLUSTERED_COLUMN,
            self::TYPE_STACKED_COLUMN,
            self::TYPE_PERCENTS_STACKED_COLUMN,
            self::TYPE_CLUSTERED_COLUMN3_D,
            self::TYPE_STACKED_COLUMN3_D,
            self::TYPE_PERCENTS_STACKED_COLUMN3_D,
            self::TYPE_COLUMN3_D,
            self::TYPE_CLUSTERED_CYLINDER,
            self::TYPE_STACKED_CYLINDER,
            self::TYPE_PERCENTS_STACKED_CYLINDER,
            self::TYPE_CYLINDER3_D,
            self::TYPE_CLUSTERED_CONE,
            self::TYPE_STACKED_CONE,
            self::TYPE_PERCENTS_STACKED_CONE,
            self::TYPE_CONE3_D,
            self::TYPE_CLUSTERED_PYRAMID,
            self::TYPE_STACKED_PYRAMID,
            self::TYPE_PERCENTS_STACKED_PYRAMID,
            self::TYPE_PYRAMID3_D,
            self::TYPE_LINE,
            self::TYPE_STACKED_LINE,
            self::TYPE_PERCENTS_STACKED_LINE,
            self::TYPE_LINE_WITH_MARKERS,
            self::TYPE_STACKED_LINE_WITH_MARKERS,
            self::TYPE_PERCENTS_STACKED_LINE_WITH_MARKERS,
            self::TYPE_LINE3_D,
            self::TYPE_PIE,
            self::TYPE_PIE3_D,
            self::TYPE_PIE_OF_PIE,
            self::TYPE_EXPLODED_PIE,
            self::TYPE_EXPLODED_PIE3_D,
            self::TYPE_BAR_OF_PIE,
            self::TYPE_PERCENTS_STACKED_BAR,
            self::TYPE_CLUSTERED_BAR3_D,
            self::TYPE_CLUSTERED_BAR,
            self::TYPE_STACKED_BAR,
            self::TYPE_STACKED_BAR3_D,
            self::TYPE_PERCENTS_STACKED_BAR3_D,
            self::TYPE_CLUSTERED_HORIZONTAL_CYLINDER,
            self::TYPE_STACKED_HORIZONTAL_CYLINDER,
            self::TYPE_PERCENTS_STACKED_HORIZONTAL_CYLINDER,
            self::TYPE_CLUSTERED_HORIZONTAL_CONE,
            self::TYPE_STACKED_HORIZONTAL_CONE,
            self::TYPE_PERCENTS_STACKED_HORIZONTAL_CONE,
            self::TYPE_CLUSTERED_HORIZONTAL_PYRAMID,
            self::TYPE_STACKED_HORIZONTAL_PYRAMID,
            self::TYPE_PERCENTS_STACKED_HORIZONTAL_PYRAMID,
            self::TYPE_AREA,
            self::TYPE_STACKED_AREA,
            self::TYPE_PERCENTS_STACKED_AREA,
            self::TYPE_AREA3_D,
            self::TYPE_STACKED_AREA3_D,
            self::TYPE_PERCENTS_STACKED_AREA3_D,
            self::TYPE_SCATTER_WITH_MARKERS,
            self::TYPE_SCATTER_WITH_SMOOTH_LINES_AND_MARKERS,
            self::TYPE_SCATTER_WITH_SMOOTH_LINES,
            self::TYPE_SCATTER_WITH_STRAIGHT_LINES_AND_MARKERS,
            self::TYPE_SCATTER_WITH_STRAIGHT_LINES,
            self::TYPE_HIGH_LOW_CLOSE,
            self::TYPE_OPEN_HIGH_LOW_CLOSE,
            self::TYPE_VOLUME_HIGH_LOW_CLOSE,
            self::TYPE_VOLUME_OPEN_HIGH_LOW_CLOSE,
            self::TYPE_SURFACE3_D,
            self::TYPE_WIREFRAME_SURFACE3_D,
            self::TYPE_CONTOUR,
            self::TYPE_WIREFRAME_CONTOUR,
            self::TYPE_DOUGHNUT,
            self::TYPE_EXPLODED_DOUGHNUT,
            self::TYPE_BUBBLE,
            self::TYPE_BUBBLE_WITH3_D,
            self::TYPE_RADAR,
            self::TYPE_RADAR_WITH_MARKERS,
            self::TYPE_FILLED_RADAR,
            self::TYPE_SERIES_OF_MIXED_TYPES,
            self::TYPE_TREEMAP,
            self::TYPE_SUNBURST,
            self::TYPE_HISTOGRAM,
            self::TYPE_PARETO_LINE,
            self::TYPE_BOX_AND_WHISKER,
            self::TYPE_WATERFALL,
            self::TYPE_FUNNEL,
            self::TYPE_MAP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataPointTypeAllowableValues()
    {
        return [
            self::DATA_POINT_TYPE_ONE_VALUE,
            self::DATA_POINT_TYPE_SCATTER,
            self::DATA_POINT_TYPE_BUBBLE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isColorVaried'] = isset($data['isColorVaried']) ? $data['isColorVaried'] : null;
        $this->container['invertedSolidFillColor'] = isset($data['invertedSolidFillColor']) ? $data['invertedSolidFillColor'] : null;
        $this->container['smooth'] = isset($data['smooth']) ? $data['smooth'] : null;
        $this->container['plotOnSecondAxis'] = isset($data['plotOnSecondAxis']) ? $data['plotOnSecondAxis'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['numberFormatOfYValues'] = isset($data['numberFormatOfYValues']) ? $data['numberFormatOfYValues'] : null;
        $this->container['numberFormatOfXValues'] = isset($data['numberFormatOfXValues']) ? $data['numberFormatOfXValues'] : null;
        $this->container['numberFormatOfValues'] = isset($data['numberFormatOfValues']) ? $data['numberFormatOfValues'] : null;
        $this->container['numberFormatOfBubbleSizes'] = isset($data['numberFormatOfBubbleSizes']) ? $data['numberFormatOfBubbleSizes'] : null;
        $this->container['invertIfNegative'] = isset($data['invertIfNegative']) ? $data['invertIfNegative'] : null;
        $this->container['explosion'] = isset($data['explosion']) ? $data['explosion'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['fillFormat'] = isset($data['fillFormat']) ? $data['fillFormat'] : null;
        $this->container['effectFormat'] = isset($data['effectFormat']) ? $data['effectFormat'] : null;
        $this->container['lineFormat'] = isset($data['lineFormat']) ? $data['lineFormat'] : null;
        $this->container['dataPointType'] = isset($data['dataPointType']) ? $data['dataPointType'] : null;
        
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

        $allowedValues = $this->getDataPointTypeAllowableValues();
        if (!in_array($this->container['dataPointType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dataPointType', must be one of '%s'",
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
        $allowedValues = $this->getDataPointTypeAllowableValues();
        if (!in_array($this->container['dataPointType'], $allowedValues)) {
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
     * @param string $type Series type.
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Series name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param bool $isColorVaried True if each data marker in the series has a different color.
     *
     * @return $this
     */
    public function setIsColorVaried($isColorVaried)
    {
        $this->container['isColorVaried'] = $isColorVaried;

        return $this;
    }

    /**
     * Gets invertedSolidFillColor
     *
     * @return string
     */
    public function getInvertedSolidFillColor()
    {
        return $this->container['invertedSolidFillColor'];
    }

    /**
     * Sets invertedSolidFillColor
     *
     * @param string $invertedSolidFillColor Invert solid color for the series.
     *
     * @return $this
     */
    public function setInvertedSolidFillColor($invertedSolidFillColor)
    {
        $this->container['invertedSolidFillColor'] = $invertedSolidFillColor;

        return $this;
    }

    /**
     * Gets smooth
     *
     * @return bool
     */
    public function getSmooth()
    {
        return $this->container['smooth'];
    }

    /**
     * Sets smooth
     *
     * @param bool $smooth True if curve smoothing is turned on. Applies only to line and scatter connected by lines charts.
     *
     * @return $this
     */
    public function setSmooth($smooth)
    {
        $this->container['smooth'] = $smooth;

        return $this;
    }

    /**
     * Gets plotOnSecondAxis
     *
     * @return bool
     */
    public function getPlotOnSecondAxis()
    {
        return $this->container['plotOnSecondAxis'];
    }

    /**
     * Sets plotOnSecondAxis
     *
     * @param bool $plotOnSecondAxis True if the series is plotted on second value axis.
     *
     * @return $this
     */
    public function setPlotOnSecondAxis($plotOnSecondAxis)
    {
        $this->container['plotOnSecondAxis'] = $plotOnSecondAxis;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Series order.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets numberFormatOfYValues
     *
     * @return string
     */
    public function getNumberFormatOfYValues()
    {
        return $this->container['numberFormatOfYValues'];
    }

    /**
     * Sets numberFormatOfYValues
     *
     * @param string $numberFormatOfYValues The number format for the series y values.
     *
     * @return $this
     */
    public function setNumberFormatOfYValues($numberFormatOfYValues)
    {
        $this->container['numberFormatOfYValues'] = $numberFormatOfYValues;

        return $this;
    }

    /**
     * Gets numberFormatOfXValues
     *
     * @return string
     */
    public function getNumberFormatOfXValues()
    {
        return $this->container['numberFormatOfXValues'];
    }

    /**
     * Sets numberFormatOfXValues
     *
     * @param string $numberFormatOfXValues The number format for the series x values.
     *
     * @return $this
     */
    public function setNumberFormatOfXValues($numberFormatOfXValues)
    {
        $this->container['numberFormatOfXValues'] = $numberFormatOfXValues;

        return $this;
    }

    /**
     * Gets numberFormatOfValues
     *
     * @return string
     */
    public function getNumberFormatOfValues()
    {
        return $this->container['numberFormatOfValues'];
    }

    /**
     * Sets numberFormatOfValues
     *
     * @param string $numberFormatOfValues The number format for the series values.
     *
     * @return $this
     */
    public function setNumberFormatOfValues($numberFormatOfValues)
    {
        $this->container['numberFormatOfValues'] = $numberFormatOfValues;

        return $this;
    }

    /**
     * Gets numberFormatOfBubbleSizes
     *
     * @return string
     */
    public function getNumberFormatOfBubbleSizes()
    {
        return $this->container['numberFormatOfBubbleSizes'];
    }

    /**
     * Sets numberFormatOfBubbleSizes
     *
     * @param string $numberFormatOfBubbleSizes The number format for the series bubble sizes.
     *
     * @return $this
     */
    public function setNumberFormatOfBubbleSizes($numberFormatOfBubbleSizes)
    {
        $this->container['numberFormatOfBubbleSizes'] = $numberFormatOfBubbleSizes;

        return $this;
    }

    /**
     * Gets invertIfNegative
     *
     * @return bool
     */
    public function getInvertIfNegative()
    {
        return $this->container['invertIfNegative'];
    }

    /**
     * Sets invertIfNegative
     *
     * @param bool $invertIfNegative True if the series shall invert its colors if the value is negative. Applies to bar, column and bubble series.
     *
     * @return $this
     */
    public function setInvertIfNegative($invertIfNegative)
    {
        $this->container['invertIfNegative'] = $invertIfNegative;

        return $this;
    }

    /**
     * Gets explosion
     *
     * @return int
     */
    public function getExplosion()
    {
        return $this->container['explosion'];
    }

    /**
     * Sets explosion
     *
     * @param int $explosion The distance of an open pie slice from the center of the pie chart is expressed as a percentage of the pie diameter.
     *
     * @return $this
     */
    public function setExplosion($explosion)
    {
        $this->container['explosion'] = $explosion;

        return $this;
    }

    /**
     * Gets marker
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SeriesMarker
     */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
     * Sets marker
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SeriesMarker $marker Series marker.
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;

        return $this;
    }

    /**
     * Gets fillFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fillFormat'];
    }

    /**
     * Sets fillFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fillFormat Fill properties set for the series.
     *
     * @return $this
     */
    public function setFillFormat($fillFormat)
    {
        $this->container['fillFormat'] = $fillFormat;

        return $this;
    }

    /**
     * Gets effectFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\EffectFormat
     */
    public function getEffectFormat()
    {
        return $this->container['effectFormat'];
    }

    /**
     * Sets effectFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effectFormat Effect properties set for the series.
     *
     * @return $this
     */
    public function setEffectFormat($effectFormat)
    {
        $this->container['effectFormat'] = $effectFormat;

        return $this;
    }

    /**
     * Gets lineFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getLineFormat()
    {
        return $this->container['lineFormat'];
    }

    /**
     * Sets lineFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $lineFormat Line properties set for the series.
     *
     * @return $this
     */
    public function setLineFormat($lineFormat)
    {
        $this->container['lineFormat'] = $lineFormat;

        return $this;
    }

    /**
     * Gets dataPointType
     *
     * @return string
     */
    public function getDataPointType()
    {
        return $this->container['dataPointType'];
    }

    /**
     * Sets dataPointType
     *
     * @param string $dataPointType dataPointType
     *
     * @return $this
     */
    public function setDataPointType($dataPointType)
    {
        $allowedValues = $this->getDataPointTypeAllowableValues();


        if (is_numeric($dataPointType)) {
            if ($dataPointType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'dataPointType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $dataPointType = $allowedValues[$dataPointType];
            }
        } else {
            if (!is_null($dataPointType) && !in_array($dataPointType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'dataPointType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['dataPointType'] = $dataPointType;

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


