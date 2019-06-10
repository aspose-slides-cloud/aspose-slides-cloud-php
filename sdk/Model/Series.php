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
        'is_color_varied' => 'bool',
        'inverted_solid_fill_color' => 'string',
        'smooth' => 'bool',
        'plot_on_second_axis' => 'bool',
        'order' => 'int',
        'number_format_of_y_values' => 'string',
        'number_format_of_x_values' => 'string',
        'number_format_of_values' => 'string',
        'number_format_of_bubble_sizes' => 'string',
        'invert_if_negative' => 'bool',
        'explosion' => 'int',
        'marker' => '\Aspose\Slides\Cloud\Sdk\Model\SeriesMarker',
        'fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effect_format' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'line_format' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'name' => null,
        'is_color_varied' => null,
        'inverted_solid_fill_color' => null,
        'smooth' => null,
        'plot_on_second_axis' => null,
        'order' => 'int32',
        'number_format_of_y_values' => null,
        'number_format_of_x_values' => null,
        'number_format_of_values' => null,
        'number_format_of_bubble_sizes' => null,
        'invert_if_negative' => null,
        'explosion' => 'int32',
        'marker' => null,
        'fill_format' => null,
        'effect_format' => null,
        'line_format' => null
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
        'is_color_varied' => 'IsColorVaried',
        'inverted_solid_fill_color' => 'InvertedSolidFillColor',
        'smooth' => 'Smooth',
        'plot_on_second_axis' => 'PlotOnSecondAxis',
        'order' => 'Order',
        'number_format_of_y_values' => 'NumberFormatOfYValues',
        'number_format_of_x_values' => 'NumberFormatOfXValues',
        'number_format_of_values' => 'NumberFormatOfValues',
        'number_format_of_bubble_sizes' => 'NumberFormatOfBubbleSizes',
        'invert_if_negative' => 'InvertIfNegative',
        'explosion' => 'Explosion',
        'marker' => 'Marker',
        'fill_format' => 'FillFormat',
        'effect_format' => 'EffectFormat',
        'line_format' => 'LineFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'is_color_varied' => 'setIsColorVaried',
        'inverted_solid_fill_color' => 'setInvertedSolidFillColor',
        'smooth' => 'setSmooth',
        'plot_on_second_axis' => 'setPlotOnSecondAxis',
        'order' => 'setOrder',
        'number_format_of_y_values' => 'setNumberFormatOfYValues',
        'number_format_of_x_values' => 'setNumberFormatOfXValues',
        'number_format_of_values' => 'setNumberFormatOfValues',
        'number_format_of_bubble_sizes' => 'setNumberFormatOfBubbleSizes',
        'invert_if_negative' => 'setInvertIfNegative',
        'explosion' => 'setExplosion',
        'marker' => 'setMarker',
        'fill_format' => 'setFillFormat',
        'effect_format' => 'setEffectFormat',
        'line_format' => 'setLineFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'is_color_varied' => 'getIsColorVaried',
        'inverted_solid_fill_color' => 'getInvertedSolidFillColor',
        'smooth' => 'getSmooth',
        'plot_on_second_axis' => 'getPlotOnSecondAxis',
        'order' => 'getOrder',
        'number_format_of_y_values' => 'getNumberFormatOfYValues',
        'number_format_of_x_values' => 'getNumberFormatOfXValues',
        'number_format_of_values' => 'getNumberFormatOfValues',
        'number_format_of_bubble_sizes' => 'getNumberFormatOfBubbleSizes',
        'invert_if_negative' => 'getInvertIfNegative',
        'explosion' => 'getExplosion',
        'marker' => 'getMarker',
        'fill_format' => 'getFillFormat',
        'effect_format' => 'getEffectFormat',
        'line_format' => 'getLineFormat'
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
        $this->container['is_color_varied'] = isset($data['is_color_varied']) ? $data['is_color_varied'] : null;
        $this->container['inverted_solid_fill_color'] = isset($data['inverted_solid_fill_color']) ? $data['inverted_solid_fill_color'] : null;
        $this->container['smooth'] = isset($data['smooth']) ? $data['smooth'] : null;
        $this->container['plot_on_second_axis'] = isset($data['plot_on_second_axis']) ? $data['plot_on_second_axis'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['number_format_of_y_values'] = isset($data['number_format_of_y_values']) ? $data['number_format_of_y_values'] : null;
        $this->container['number_format_of_x_values'] = isset($data['number_format_of_x_values']) ? $data['number_format_of_x_values'] : null;
        $this->container['number_format_of_values'] = isset($data['number_format_of_values']) ? $data['number_format_of_values'] : null;
        $this->container['number_format_of_bubble_sizes'] = isset($data['number_format_of_bubble_sizes']) ? $data['number_format_of_bubble_sizes'] : null;
        $this->container['invert_if_negative'] = isset($data['invert_if_negative']) ? $data['invert_if_negative'] : null;
        $this->container['explosion'] = isset($data['explosion']) ? $data['explosion'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['effect_format'] = isset($data['effect_format']) ? $data['effect_format'] : null;
        $this->container['line_format'] = isset($data['line_format']) ? $data['line_format'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['is_color_varied'] === null) {
            $invalidProperties[] = "'is_color_varied' can't be null";
        }
        if ($this->container['smooth'] === null) {
            $invalidProperties[] = "'smooth' can't be null";
        }
        if ($this->container['plot_on_second_axis'] === null) {
            $invalidProperties[] = "'plot_on_second_axis' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['invert_if_negative'] === null) {
            $invalidProperties[] = "'invert_if_negative' can't be null";
        }
        if ($this->container['explosion'] === null) {
            $invalidProperties[] = "'explosion' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['is_color_varied'] === null) {
            return false;
        }
        if ($this->container['smooth'] === null) {
            return false;
        }
        if ($this->container['plot_on_second_axis'] === null) {
            return false;
        }
        if ($this->container['order'] === null) {
            return false;
        }
        if ($this->container['invert_if_negative'] === null) {
            return false;
        }
        if ($this->container['explosion'] === null) {
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
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
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
     * Gets is_color_varied
     *
     * @return bool
     */
    public function getIsColorVaried()
    {
        return $this->container['is_color_varied'];
    }

    /**
     * Sets is_color_varied
     *
     * @param bool $is_color_varied True if each data marker in the series has a different color.
     *
     * @return $this
     */
    public function setIsColorVaried($is_color_varied)
    {
        $this->container['is_color_varied'] = $is_color_varied;

        return $this;
    }

    /**
     * Gets inverted_solid_fill_color
     *
     * @return string
     */
    public function getInvertedSolidFillColor()
    {
        return $this->container['inverted_solid_fill_color'];
    }

    /**
     * Sets inverted_solid_fill_color
     *
     * @param string $inverted_solid_fill_color Invert solid color for the series.
     *
     * @return $this
     */
    public function setInvertedSolidFillColor($inverted_solid_fill_color)
    {
        $this->container['inverted_solid_fill_color'] = $inverted_solid_fill_color;

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
     * Gets plot_on_second_axis
     *
     * @return bool
     */
    public function getPlotOnSecondAxis()
    {
        return $this->container['plot_on_second_axis'];
    }

    /**
     * Sets plot_on_second_axis
     *
     * @param bool $plot_on_second_axis True if the series is plotted on second value axis.
     *
     * @return $this
     */
    public function setPlotOnSecondAxis($plot_on_second_axis)
    {
        $this->container['plot_on_second_axis'] = $plot_on_second_axis;

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
     * Gets number_format_of_y_values
     *
     * @return string
     */
    public function getNumberFormatOfYValues()
    {
        return $this->container['number_format_of_y_values'];
    }

    /**
     * Sets number_format_of_y_values
     *
     * @param string $number_format_of_y_values The number format for the series y values.
     *
     * @return $this
     */
    public function setNumberFormatOfYValues($number_format_of_y_values)
    {
        $this->container['number_format_of_y_values'] = $number_format_of_y_values;

        return $this;
    }

    /**
     * Gets number_format_of_x_values
     *
     * @return string
     */
    public function getNumberFormatOfXValues()
    {
        return $this->container['number_format_of_x_values'];
    }

    /**
     * Sets number_format_of_x_values
     *
     * @param string $number_format_of_x_values The number format for the series x values.
     *
     * @return $this
     */
    public function setNumberFormatOfXValues($number_format_of_x_values)
    {
        $this->container['number_format_of_x_values'] = $number_format_of_x_values;

        return $this;
    }

    /**
     * Gets number_format_of_values
     *
     * @return string
     */
    public function getNumberFormatOfValues()
    {
        return $this->container['number_format_of_values'];
    }

    /**
     * Sets number_format_of_values
     *
     * @param string $number_format_of_values The number format for the series values.
     *
     * @return $this
     */
    public function setNumberFormatOfValues($number_format_of_values)
    {
        $this->container['number_format_of_values'] = $number_format_of_values;

        return $this;
    }

    /**
     * Gets number_format_of_bubble_sizes
     *
     * @return string
     */
    public function getNumberFormatOfBubbleSizes()
    {
        return $this->container['number_format_of_bubble_sizes'];
    }

    /**
     * Sets number_format_of_bubble_sizes
     *
     * @param string $number_format_of_bubble_sizes The number format for the series bubble sizes.
     *
     * @return $this
     */
    public function setNumberFormatOfBubbleSizes($number_format_of_bubble_sizes)
    {
        $this->container['number_format_of_bubble_sizes'] = $number_format_of_bubble_sizes;

        return $this;
    }

    /**
     * Gets invert_if_negative
     *
     * @return bool
     */
    public function getInvertIfNegative()
    {
        return $this->container['invert_if_negative'];
    }

    /**
     * Sets invert_if_negative
     *
     * @param bool $invert_if_negative True if the series shall invert its colors if the value is negative. Applies to bar, column and bubble series.
     *
     * @return $this
     */
    public function setInvertIfNegative($invert_if_negative)
    {
        $this->container['invert_if_negative'] = $invert_if_negative;

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
     * Gets fill_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fill_format'];
    }

    /**
     * Sets fill_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fill_format Fill properties set for the series.
     *
     * @return $this
     */
    public function setFillFormat($fill_format)
    {
        $this->container['fill_format'] = $fill_format;

        return $this;
    }

    /**
     * Gets effect_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\EffectFormat
     */
    public function getEffectFormat()
    {
        return $this->container['effect_format'];
    }

    /**
     * Sets effect_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effect_format Effect properties set for the series.
     *
     * @return $this
     */
    public function setEffectFormat($effect_format)
    {
        $this->container['effect_format'] = $effect_format;

        return $this;
    }

    /**
     * Gets line_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getLineFormat()
    {
        return $this->container['line_format'];
    }

    /**
     * Sets line_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $line_format Line properties set for the series.
     *
     * @return $this
     */
    public function setLineFormat($line_format)
    {
        $this->container['line_format'] = $line_format;

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


