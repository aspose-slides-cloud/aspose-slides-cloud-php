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
 * Axis Class Doc Comment
 *
 * @category Class
 * @description Represents a chart axis
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Axis implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Axis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_visible' => 'bool',
        'has_title' => 'bool',
        'position' => '\Aspose\Slides\Cloud\Sdk\Model\AxisPositionType',
        'display_unit' => '\Aspose\Slides\Cloud\Sdk\Model\DisplayUnitType',
        'base_unit_scale' => '\Aspose\Slides\Cloud\Sdk\Model\TimeUnitType',
        'is_automatic_major_unit' => 'bool',
        'major_unit' => 'double',
        'major_unit_scale' => '\Aspose\Slides\Cloud\Sdk\Model\TimeUnitType',
        'major_tick_mark' => '\Aspose\Slides\Cloud\Sdk\Model\TickMarkType',
        'is_automatic_minor_unit' => 'bool',
        'minor_unit' => 'double',
        'minor_unit_scale' => '\Aspose\Slides\Cloud\Sdk\Model\TimeUnitType',
        'minor_tick_mark' => '\Aspose\Slides\Cloud\Sdk\Model\TickMarkType',
        'is_automatic_max_value' => 'bool',
        'max_value' => 'double',
        'is_automatic_min_value' => 'bool',
        'min_value' => 'double',
        'is_logarithmic' => 'bool',
        'log_base' => 'double',
        'category_axis_type' => '\Aspose\Slides\Cloud\Sdk\Model\CategoryAxisType',
        'axis_between_categories' => 'bool',
        'label_offset' => 'int',
        'is_plot_order_reversed' => 'bool',
        'is_number_format_linked_to_source' => 'bool',
        'number_format' => 'string',
        'cross_type' => '\Aspose\Slides\Cloud\Sdk\Model\CrossesType',
        'cross_at' => 'double',
        'is_automatic_tick_marks_spacing' => 'bool',
        'tick_marks_spacing' => 'int',
        'is_automatic_tick_label_spacing' => 'bool',
        'tick_label_spacing' => 'int',
        'tick_label_position' => '\Aspose\Slides\Cloud\Sdk\Model\TickLabelPositionType',
        'tick_label_rotation_angle' => 'double',
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
        'is_visible' => null,
        'has_title' => null,
        'position' => null,
        'display_unit' => null,
        'base_unit_scale' => null,
        'is_automatic_major_unit' => null,
        'major_unit' => 'double',
        'major_unit_scale' => null,
        'major_tick_mark' => null,
        'is_automatic_minor_unit' => null,
        'minor_unit' => 'double',
        'minor_unit_scale' => null,
        'minor_tick_mark' => null,
        'is_automatic_max_value' => null,
        'max_value' => 'double',
        'is_automatic_min_value' => null,
        'min_value' => 'double',
        'is_logarithmic' => null,
        'log_base' => 'double',
        'category_axis_type' => null,
        'axis_between_categories' => null,
        'label_offset' => null,
        'is_plot_order_reversed' => null,
        'is_number_format_linked_to_source' => null,
        'number_format' => null,
        'cross_type' => null,
        'cross_at' => 'double',
        'is_automatic_tick_marks_spacing' => null,
        'tick_marks_spacing' => null,
        'is_automatic_tick_label_spacing' => null,
        'tick_label_spacing' => null,
        'tick_label_position' => null,
        'tick_label_rotation_angle' => 'double',
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
        'is_visible' => 'IsVisible',
        'has_title' => 'HasTitle',
        'position' => 'Position',
        'display_unit' => 'DisplayUnit',
        'base_unit_scale' => 'BaseUnitScale',
        'is_automatic_major_unit' => 'IsAutomaticMajorUnit',
        'major_unit' => 'MajorUnit',
        'major_unit_scale' => 'MajorUnitScale',
        'major_tick_mark' => 'MajorTickMark',
        'is_automatic_minor_unit' => 'IsAutomaticMinorUnit',
        'minor_unit' => 'MinorUnit',
        'minor_unit_scale' => 'MinorUnitScale',
        'minor_tick_mark' => 'MinorTickMark',
        'is_automatic_max_value' => 'IsAutomaticMaxValue',
        'max_value' => 'MaxValue',
        'is_automatic_min_value' => 'IsAutomaticMinValue',
        'min_value' => 'MinValue',
        'is_logarithmic' => 'IsLogarithmic',
        'log_base' => 'LogBase',
        'category_axis_type' => 'CategoryAxisType',
        'axis_between_categories' => 'AxisBetweenCategories',
        'label_offset' => 'LabelOffset',
        'is_plot_order_reversed' => 'IsPlotOrderReversed',
        'is_number_format_linked_to_source' => 'IsNumberFormatLinkedToSource',
        'number_format' => 'NumberFormat',
        'cross_type' => 'CrossType',
        'cross_at' => 'CrossAt',
        'is_automatic_tick_marks_spacing' => 'IsAutomaticTickMarksSpacing',
        'tick_marks_spacing' => 'TickMarksSpacing',
        'is_automatic_tick_label_spacing' => 'IsAutomaticTickLabelSpacing',
        'tick_label_spacing' => 'TickLabelSpacing',
        'tick_label_position' => 'TickLabelPosition',
        'tick_label_rotation_angle' => 'TickLabelRotationAngle',
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
        'is_visible' => 'setIsVisible',
        'has_title' => 'setHasTitle',
        'position' => 'setPosition',
        'display_unit' => 'setDisplayUnit',
        'base_unit_scale' => 'setBaseUnitScale',
        'is_automatic_major_unit' => 'setIsAutomaticMajorUnit',
        'major_unit' => 'setMajorUnit',
        'major_unit_scale' => 'setMajorUnitScale',
        'major_tick_mark' => 'setMajorTickMark',
        'is_automatic_minor_unit' => 'setIsAutomaticMinorUnit',
        'minor_unit' => 'setMinorUnit',
        'minor_unit_scale' => 'setMinorUnitScale',
        'minor_tick_mark' => 'setMinorTickMark',
        'is_automatic_max_value' => 'setIsAutomaticMaxValue',
        'max_value' => 'setMaxValue',
        'is_automatic_min_value' => 'setIsAutomaticMinValue',
        'min_value' => 'setMinValue',
        'is_logarithmic' => 'setIsLogarithmic',
        'log_base' => 'setLogBase',
        'category_axis_type' => 'setCategoryAxisType',
        'axis_between_categories' => 'setAxisBetweenCategories',
        'label_offset' => 'setLabelOffset',
        'is_plot_order_reversed' => 'setIsPlotOrderReversed',
        'is_number_format_linked_to_source' => 'setIsNumberFormatLinkedToSource',
        'number_format' => 'setNumberFormat',
        'cross_type' => 'setCrossType',
        'cross_at' => 'setCrossAt',
        'is_automatic_tick_marks_spacing' => 'setIsAutomaticTickMarksSpacing',
        'tick_marks_spacing' => 'setTickMarksSpacing',
        'is_automatic_tick_label_spacing' => 'setIsAutomaticTickLabelSpacing',
        'tick_label_spacing' => 'setTickLabelSpacing',
        'tick_label_position' => 'setTickLabelPosition',
        'tick_label_rotation_angle' => 'setTickLabelRotationAngle',
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
        'is_visible' => 'getIsVisible',
        'has_title' => 'getHasTitle',
        'position' => 'getPosition',
        'display_unit' => 'getDisplayUnit',
        'base_unit_scale' => 'getBaseUnitScale',
        'is_automatic_major_unit' => 'getIsAutomaticMajorUnit',
        'major_unit' => 'getMajorUnit',
        'major_unit_scale' => 'getMajorUnitScale',
        'major_tick_mark' => 'getMajorTickMark',
        'is_automatic_minor_unit' => 'getIsAutomaticMinorUnit',
        'minor_unit' => 'getMinorUnit',
        'minor_unit_scale' => 'getMinorUnitScale',
        'minor_tick_mark' => 'getMinorTickMark',
        'is_automatic_max_value' => 'getIsAutomaticMaxValue',
        'max_value' => 'getMaxValue',
        'is_automatic_min_value' => 'getIsAutomaticMinValue',
        'min_value' => 'getMinValue',
        'is_logarithmic' => 'getIsLogarithmic',
        'log_base' => 'getLogBase',
        'category_axis_type' => 'getCategoryAxisType',
        'axis_between_categories' => 'getAxisBetweenCategories',
        'label_offset' => 'getLabelOffset',
        'is_plot_order_reversed' => 'getIsPlotOrderReversed',
        'is_number_format_linked_to_source' => 'getIsNumberFormatLinkedToSource',
        'number_format' => 'getNumberFormat',
        'cross_type' => 'getCrossType',
        'cross_at' => 'getCrossAt',
        'is_automatic_tick_marks_spacing' => 'getIsAutomaticTickMarksSpacing',
        'tick_marks_spacing' => 'getTickMarksSpacing',
        'is_automatic_tick_label_spacing' => 'getIsAutomaticTickLabelSpacing',
        'tick_label_spacing' => 'getTickLabelSpacing',
        'tick_label_position' => 'getTickLabelPosition',
        'tick_label_rotation_angle' => 'getTickLabelRotationAngle',
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
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['has_title'] = isset($data['has_title']) ? $data['has_title'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['display_unit'] = isset($data['display_unit']) ? $data['display_unit'] : null;
        $this->container['base_unit_scale'] = isset($data['base_unit_scale']) ? $data['base_unit_scale'] : null;
        $this->container['is_automatic_major_unit'] = isset($data['is_automatic_major_unit']) ? $data['is_automatic_major_unit'] : null;
        $this->container['major_unit'] = isset($data['major_unit']) ? $data['major_unit'] : null;
        $this->container['major_unit_scale'] = isset($data['major_unit_scale']) ? $data['major_unit_scale'] : null;
        $this->container['major_tick_mark'] = isset($data['major_tick_mark']) ? $data['major_tick_mark'] : null;
        $this->container['is_automatic_minor_unit'] = isset($data['is_automatic_minor_unit']) ? $data['is_automatic_minor_unit'] : null;
        $this->container['minor_unit'] = isset($data['minor_unit']) ? $data['minor_unit'] : null;
        $this->container['minor_unit_scale'] = isset($data['minor_unit_scale']) ? $data['minor_unit_scale'] : null;
        $this->container['minor_tick_mark'] = isset($data['minor_tick_mark']) ? $data['minor_tick_mark'] : null;
        $this->container['is_automatic_max_value'] = isset($data['is_automatic_max_value']) ? $data['is_automatic_max_value'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['is_automatic_min_value'] = isset($data['is_automatic_min_value']) ? $data['is_automatic_min_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['is_logarithmic'] = isset($data['is_logarithmic']) ? $data['is_logarithmic'] : null;
        $this->container['log_base'] = isset($data['log_base']) ? $data['log_base'] : null;
        $this->container['category_axis_type'] = isset($data['category_axis_type']) ? $data['category_axis_type'] : null;
        $this->container['axis_between_categories'] = isset($data['axis_between_categories']) ? $data['axis_between_categories'] : null;
        $this->container['label_offset'] = isset($data['label_offset']) ? $data['label_offset'] : null;
        $this->container['is_plot_order_reversed'] = isset($data['is_plot_order_reversed']) ? $data['is_plot_order_reversed'] : null;
        $this->container['is_number_format_linked_to_source'] = isset($data['is_number_format_linked_to_source']) ? $data['is_number_format_linked_to_source'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['cross_type'] = isset($data['cross_type']) ? $data['cross_type'] : null;
        $this->container['cross_at'] = isset($data['cross_at']) ? $data['cross_at'] : null;
        $this->container['is_automatic_tick_marks_spacing'] = isset($data['is_automatic_tick_marks_spacing']) ? $data['is_automatic_tick_marks_spacing'] : null;
        $this->container['tick_marks_spacing'] = isset($data['tick_marks_spacing']) ? $data['tick_marks_spacing'] : null;
        $this->container['is_automatic_tick_label_spacing'] = isset($data['is_automatic_tick_label_spacing']) ? $data['is_automatic_tick_label_spacing'] : null;
        $this->container['tick_label_spacing'] = isset($data['tick_label_spacing']) ? $data['tick_label_spacing'] : null;
        $this->container['tick_label_position'] = isset($data['tick_label_position']) ? $data['tick_label_position'] : null;
        $this->container['tick_label_rotation_angle'] = isset($data['tick_label_rotation_angle']) ? $data['tick_label_rotation_angle'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['effect_format'] = isset($data['effect_format']) ? $data['effect_format'] : null;
        $this->container['line_format'] = isset($data['line_format']) ? $data['line_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['has_title'] === null) {
            $invalidProperties[] = "'has_title' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['display_unit'] === null) {
            $invalidProperties[] = "'display_unit' can't be null";
        }
        if ($this->container['base_unit_scale'] === null) {
            $invalidProperties[] = "'base_unit_scale' can't be null";
        }
        if ($this->container['is_automatic_major_unit'] === null) {
            $invalidProperties[] = "'is_automatic_major_unit' can't be null";
        }
        if ($this->container['major_unit'] === null) {
            $invalidProperties[] = "'major_unit' can't be null";
        }
        if ($this->container['major_unit_scale'] === null) {
            $invalidProperties[] = "'major_unit_scale' can't be null";
        }
        if ($this->container['major_tick_mark'] === null) {
            $invalidProperties[] = "'major_tick_mark' can't be null";
        }
        if ($this->container['is_automatic_minor_unit'] === null) {
            $invalidProperties[] = "'is_automatic_minor_unit' can't be null";
        }
        if ($this->container['minor_unit'] === null) {
            $invalidProperties[] = "'minor_unit' can't be null";
        }
        if ($this->container['minor_unit_scale'] === null) {
            $invalidProperties[] = "'minor_unit_scale' can't be null";
        }
        if ($this->container['minor_tick_mark'] === null) {
            $invalidProperties[] = "'minor_tick_mark' can't be null";
        }
        if ($this->container['is_automatic_max_value'] === null) {
            $invalidProperties[] = "'is_automatic_max_value' can't be null";
        }
        if ($this->container['max_value'] === null) {
            $invalidProperties[] = "'max_value' can't be null";
        }
        if ($this->container['is_automatic_min_value'] === null) {
            $invalidProperties[] = "'is_automatic_min_value' can't be null";
        }
        if ($this->container['min_value'] === null) {
            $invalidProperties[] = "'min_value' can't be null";
        }
        if ($this->container['is_logarithmic'] === null) {
            $invalidProperties[] = "'is_logarithmic' can't be null";
        }
        if ($this->container['log_base'] === null) {
            $invalidProperties[] = "'log_base' can't be null";
        }
        if ($this->container['category_axis_type'] === null) {
            $invalidProperties[] = "'category_axis_type' can't be null";
        }
        if ($this->container['axis_between_categories'] === null) {
            $invalidProperties[] = "'axis_between_categories' can't be null";
        }
        if ($this->container['label_offset'] === null) {
            $invalidProperties[] = "'label_offset' can't be null";
        }
        if ($this->container['is_plot_order_reversed'] === null) {
            $invalidProperties[] = "'is_plot_order_reversed' can't be null";
        }
        if ($this->container['is_number_format_linked_to_source'] === null) {
            $invalidProperties[] = "'is_number_format_linked_to_source' can't be null";
        }
        if ($this->container['cross_type'] === null) {
            $invalidProperties[] = "'cross_type' can't be null";
        }
        if ($this->container['cross_at'] === null) {
            $invalidProperties[] = "'cross_at' can't be null";
        }
        if ($this->container['is_automatic_tick_marks_spacing'] === null) {
            $invalidProperties[] = "'is_automatic_tick_marks_spacing' can't be null";
        }
        if ($this->container['tick_marks_spacing'] === null) {
            $invalidProperties[] = "'tick_marks_spacing' can't be null";
        }
        if ($this->container['is_automatic_tick_label_spacing'] === null) {
            $invalidProperties[] = "'is_automatic_tick_label_spacing' can't be null";
        }
        if ($this->container['tick_label_spacing'] === null) {
            $invalidProperties[] = "'tick_label_spacing' can't be null";
        }
        if ($this->container['tick_label_position'] === null) {
            $invalidProperties[] = "'tick_label_position' can't be null";
        }
        if ($this->container['tick_label_rotation_angle'] === null) {
            $invalidProperties[] = "'tick_label_rotation_angle' can't be null";
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

        if ($this->container['is_visible'] === null) {
            return false;
        }
        if ($this->container['has_title'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['display_unit'] === null) {
            return false;
        }
        if ($this->container['base_unit_scale'] === null) {
            return false;
        }
        if ($this->container['is_automatic_major_unit'] === null) {
            return false;
        }
        if ($this->container['major_unit'] === null) {
            return false;
        }
        if ($this->container['major_unit_scale'] === null) {
            return false;
        }
        if ($this->container['major_tick_mark'] === null) {
            return false;
        }
        if ($this->container['is_automatic_minor_unit'] === null) {
            return false;
        }
        if ($this->container['minor_unit'] === null) {
            return false;
        }
        if ($this->container['minor_unit_scale'] === null) {
            return false;
        }
        if ($this->container['minor_tick_mark'] === null) {
            return false;
        }
        if ($this->container['is_automatic_max_value'] === null) {
            return false;
        }
        if ($this->container['max_value'] === null) {
            return false;
        }
        if ($this->container['is_automatic_min_value'] === null) {
            return false;
        }
        if ($this->container['min_value'] === null) {
            return false;
        }
        if ($this->container['is_logarithmic'] === null) {
            return false;
        }
        if ($this->container['log_base'] === null) {
            return false;
        }
        if ($this->container['category_axis_type'] === null) {
            return false;
        }
        if ($this->container['axis_between_categories'] === null) {
            return false;
        }
        if ($this->container['label_offset'] === null) {
            return false;
        }
        if ($this->container['is_plot_order_reversed'] === null) {
            return false;
        }
        if ($this->container['is_number_format_linked_to_source'] === null) {
            return false;
        }
        if ($this->container['cross_type'] === null) {
            return false;
        }
        if ($this->container['cross_at'] === null) {
            return false;
        }
        if ($this->container['is_automatic_tick_marks_spacing'] === null) {
            return false;
        }
        if ($this->container['tick_marks_spacing'] === null) {
            return false;
        }
        if ($this->container['is_automatic_tick_label_spacing'] === null) {
            return false;
        }
        if ($this->container['tick_label_spacing'] === null) {
            return false;
        }
        if ($this->container['tick_label_position'] === null) {
            return false;
        }
        if ($this->container['tick_label_rotation_angle'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_visible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     * @param bool $is_visible True if the axis is visible
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }

    /**
     * Gets has_title
     *
     * @return bool
     */
    public function getHasTitle()
    {
        return $this->container['has_title'];
    }

    /**
     * Sets has_title
     *
     * @param bool $has_title True if the axis has a visible title
     *
     * @return $this
     */
    public function setHasTitle($has_title)
    {
        $this->container['has_title'] = $has_title;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\AxisPositionType
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\AxisPositionType $position Axis position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets display_unit
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\DisplayUnitType
     */
    public function getDisplayUnit()
    {
        return $this->container['display_unit'];
    }

    /**
     * Sets display_unit
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\DisplayUnitType $display_unit The scaling value of the display units for the value axis
     *
     * @return $this
     */
    public function setDisplayUnit($display_unit)
    {
        $this->container['display_unit'] = $display_unit;

        return $this;
    }

    /**
     * Gets base_unit_scale
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TimeUnitType
     */
    public function getBaseUnitScale()
    {
        return $this->container['base_unit_scale'];
    }

    /**
     * Sets base_unit_scale
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TimeUnitType $base_unit_scale The smallest time unit that is represented on the date axis
     *
     * @return $this
     */
    public function setBaseUnitScale($base_unit_scale)
    {
        $this->container['base_unit_scale'] = $base_unit_scale;

        return $this;
    }

    /**
     * Gets is_automatic_major_unit
     *
     * @return bool
     */
    public function getIsAutomaticMajorUnit()
    {
        return $this->container['is_automatic_major_unit'];
    }

    /**
     * Sets is_automatic_major_unit
     *
     * @param bool $is_automatic_major_unit True the major unit of the axis is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMajorUnit($is_automatic_major_unit)
    {
        $this->container['is_automatic_major_unit'] = $is_automatic_major_unit;

        return $this;
    }

    /**
     * Gets major_unit
     *
     * @return double
     */
    public function getMajorUnit()
    {
        return $this->container['major_unit'];
    }

    /**
     * Sets major_unit
     *
     * @param double $major_unit The major units for the date or value axis
     *
     * @return $this
     */
    public function setMajorUnit($major_unit)
    {
        $this->container['major_unit'] = $major_unit;

        return $this;
    }

    /**
     * Gets major_unit_scale
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TimeUnitType
     */
    public function getMajorUnitScale()
    {
        return $this->container['major_unit_scale'];
    }

    /**
     * Sets major_unit_scale
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TimeUnitType $major_unit_scale The major unit scale for the date axis
     *
     * @return $this
     */
    public function setMajorUnitScale($major_unit_scale)
    {
        $this->container['major_unit_scale'] = $major_unit_scale;

        return $this;
    }

    /**
     * Gets major_tick_mark
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TickMarkType
     */
    public function getMajorTickMark()
    {
        return $this->container['major_tick_mark'];
    }

    /**
     * Sets major_tick_mark
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TickMarkType $major_tick_mark The type of major tick mark for the specified axis
     *
     * @return $this
     */
    public function setMajorTickMark($major_tick_mark)
    {
        $this->container['major_tick_mark'] = $major_tick_mark;

        return $this;
    }

    /**
     * Gets is_automatic_minor_unit
     *
     * @return bool
     */
    public function getIsAutomaticMinorUnit()
    {
        return $this->container['is_automatic_minor_unit'];
    }

    /**
     * Sets is_automatic_minor_unit
     *
     * @param bool $is_automatic_minor_unit True the minor unit of the axis is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMinorUnit($is_automatic_minor_unit)
    {
        $this->container['is_automatic_minor_unit'] = $is_automatic_minor_unit;

        return $this;
    }

    /**
     * Gets minor_unit
     *
     * @return double
     */
    public function getMinorUnit()
    {
        return $this->container['minor_unit'];
    }

    /**
     * Sets minor_unit
     *
     * @param double $minor_unit The minor units for the date or value axis
     *
     * @return $this
     */
    public function setMinorUnit($minor_unit)
    {
        $this->container['minor_unit'] = $minor_unit;

        return $this;
    }

    /**
     * Gets minor_unit_scale
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TimeUnitType
     */
    public function getMinorUnitScale()
    {
        return $this->container['minor_unit_scale'];
    }

    /**
     * Sets minor_unit_scale
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TimeUnitType $minor_unit_scale The minor unit scale for the date axis
     *
     * @return $this
     */
    public function setMinorUnitScale($minor_unit_scale)
    {
        $this->container['minor_unit_scale'] = $minor_unit_scale;

        return $this;
    }

    /**
     * Gets minor_tick_mark
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TickMarkType
     */
    public function getMinorTickMark()
    {
        return $this->container['minor_tick_mark'];
    }

    /**
     * Sets minor_tick_mark
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TickMarkType $minor_tick_mark The type of minor tick mark for the specified axis
     *
     * @return $this
     */
    public function setMinorTickMark($minor_tick_mark)
    {
        $this->container['minor_tick_mark'] = $minor_tick_mark;

        return $this;
    }

    /**
     * Gets is_automatic_max_value
     *
     * @return bool
     */
    public function getIsAutomaticMaxValue()
    {
        return $this->container['is_automatic_max_value'];
    }

    /**
     * Sets is_automatic_max_value
     *
     * @param bool $is_automatic_max_value True if the max value is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMaxValue($is_automatic_max_value)
    {
        $this->container['is_automatic_max_value'] = $is_automatic_max_value;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return double
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param double $max_value The maximum value on the value axis
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets is_automatic_min_value
     *
     * @return bool
     */
    public function getIsAutomaticMinValue()
    {
        return $this->container['is_automatic_min_value'];
    }

    /**
     * Sets is_automatic_min_value
     *
     * @param bool $is_automatic_min_value True if the min value is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMinValue($is_automatic_min_value)
    {
        $this->container['is_automatic_min_value'] = $is_automatic_min_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return double
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param double $min_value The minimum value on the value axis
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets is_logarithmic
     *
     * @return bool
     */
    public function getIsLogarithmic()
    {
        return $this->container['is_logarithmic'];
    }

    /**
     * Sets is_logarithmic
     *
     * @param bool $is_logarithmic True if the value axis scale type is logarithmic
     *
     * @return $this
     */
    public function setIsLogarithmic($is_logarithmic)
    {
        $this->container['is_logarithmic'] = $is_logarithmic;

        return $this;
    }

    /**
     * Gets log_base
     *
     * @return double
     */
    public function getLogBase()
    {
        return $this->container['log_base'];
    }

    /**
     * Sets log_base
     *
     * @param double $log_base The logarithmic base. Default value is 10
     *
     * @return $this
     */
    public function setLogBase($log_base)
    {
        $this->container['log_base'] = $log_base;

        return $this;
    }

    /**
     * Gets category_axis_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CategoryAxisType
     */
    public function getCategoryAxisType()
    {
        return $this->container['category_axis_type'];
    }

    /**
     * Sets category_axis_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CategoryAxisType $category_axis_type The type of the category axis
     *
     * @return $this
     */
    public function setCategoryAxisType($category_axis_type)
    {
        $this->container['category_axis_type'] = $category_axis_type;

        return $this;
    }

    /**
     * Gets axis_between_categories
     *
     * @return bool
     */
    public function getAxisBetweenCategories()
    {
        return $this->container['axis_between_categories'];
    }

    /**
     * Sets axis_between_categories
     *
     * @param bool $axis_between_categories True if the value axis crosses the category axis between categories. This property applies only to category axes, and it doesn't apply to 3-D charts
     *
     * @return $this
     */
    public function setAxisBetweenCategories($axis_between_categories)
    {
        $this->container['axis_between_categories'] = $axis_between_categories;

        return $this;
    }

    /**
     * Gets label_offset
     *
     * @return int
     */
    public function getLabelOffset()
    {
        return $this->container['label_offset'];
    }

    /**
     * Sets label_offset
     *
     * @param int $label_offset The distance of labels from the axis. Applied to category or date axis. Value must be between 0% and 1000%.
     *
     * @return $this
     */
    public function setLabelOffset($label_offset)
    {
        $this->container['label_offset'] = $label_offset;

        return $this;
    }

    /**
     * Gets is_plot_order_reversed
     *
     * @return bool
     */
    public function getIsPlotOrderReversed()
    {
        return $this->container['is_plot_order_reversed'];
    }

    /**
     * Sets is_plot_order_reversed
     *
     * @param bool $is_plot_order_reversed True if MS PowerPoint plots data points from last to first
     *
     * @return $this
     */
    public function setIsPlotOrderReversed($is_plot_order_reversed)
    {
        $this->container['is_plot_order_reversed'] = $is_plot_order_reversed;

        return $this;
    }

    /**
     * Gets is_number_format_linked_to_source
     *
     * @return bool
     */
    public function getIsNumberFormatLinkedToSource()
    {
        return $this->container['is_number_format_linked_to_source'];
    }

    /**
     * Sets is_number_format_linked_to_source
     *
     * @param bool $is_number_format_linked_to_source True if the format is linked to source data
     *
     * @return $this
     */
    public function setIsNumberFormatLinkedToSource($is_number_format_linked_to_source)
    {
        $this->container['is_number_format_linked_to_source'] = $is_number_format_linked_to_source;

        return $this;
    }

    /**
     * Gets number_format
     *
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /**
     * Sets number_format
     *
     * @param string $number_format the format string for the Axis Labels
     *
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $this->container['number_format'] = $number_format;

        return $this;
    }

    /**
     * Gets cross_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CrossesType
     */
    public function getCrossType()
    {
        return $this->container['cross_type'];
    }

    /**
     * Sets cross_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CrossesType $cross_type The CrossType on the specified axis where the other axis crosses
     *
     * @return $this
     */
    public function setCrossType($cross_type)
    {
        $this->container['cross_type'] = $cross_type;

        return $this;
    }

    /**
     * Gets cross_at
     *
     * @return double
     */
    public function getCrossAt()
    {
        return $this->container['cross_at'];
    }

    /**
     * Sets cross_at
     *
     * @param double $cross_at The point on the axis where the perpendicular axis crosses it
     *
     * @return $this
     */
    public function setCrossAt($cross_at)
    {
        $this->container['cross_at'] = $cross_at;

        return $this;
    }

    /**
     * Gets is_automatic_tick_marks_spacing
     *
     * @return bool
     */
    public function getIsAutomaticTickMarksSpacing()
    {
        return $this->container['is_automatic_tick_marks_spacing'];
    }

    /**
     * Sets is_automatic_tick_marks_spacing
     *
     * @param bool $is_automatic_tick_marks_spacing True for automatic tick marks spacing value
     *
     * @return $this
     */
    public function setIsAutomaticTickMarksSpacing($is_automatic_tick_marks_spacing)
    {
        $this->container['is_automatic_tick_marks_spacing'] = $is_automatic_tick_marks_spacing;

        return $this;
    }

    /**
     * Gets tick_marks_spacing
     *
     * @return int
     */
    public function getTickMarksSpacing()
    {
        return $this->container['tick_marks_spacing'];
    }

    /**
     * Sets tick_marks_spacing
     *
     * @param int $tick_marks_spacing Specifies how many tick marks shall be skipped before the next one shall be drawn. Applied to category or series axis.
     *
     * @return $this
     */
    public function setTickMarksSpacing($tick_marks_spacing)
    {
        $this->container['tick_marks_spacing'] = $tick_marks_spacing;

        return $this;
    }

    /**
     * Gets is_automatic_tick_label_spacing
     *
     * @return bool
     */
    public function getIsAutomaticTickLabelSpacing()
    {
        return $this->container['is_automatic_tick_label_spacing'];
    }

    /**
     * Sets is_automatic_tick_label_spacing
     *
     * @param bool $is_automatic_tick_label_spacing True for automatic tick label spacing value
     *
     * @return $this
     */
    public function setIsAutomaticTickLabelSpacing($is_automatic_tick_label_spacing)
    {
        $this->container['is_automatic_tick_label_spacing'] = $is_automatic_tick_label_spacing;

        return $this;
    }

    /**
     * Gets tick_label_spacing
     *
     * @return int
     */
    public function getTickLabelSpacing()
    {
        return $this->container['tick_label_spacing'];
    }

    /**
     * Sets tick_label_spacing
     *
     * @param int $tick_label_spacing Specifies how many tick labels to skip between label that is drawn.
     *
     * @return $this
     */
    public function setTickLabelSpacing($tick_label_spacing)
    {
        $this->container['tick_label_spacing'] = $tick_label_spacing;

        return $this;
    }

    /**
     * Gets tick_label_position
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TickLabelPositionType
     */
    public function getTickLabelPosition()
    {
        return $this->container['tick_label_position'];
    }

    /**
     * Sets tick_label_position
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TickLabelPositionType $tick_label_position The position of tick-mark labels on the specified axis.
     *
     * @return $this
     */
    public function setTickLabelPosition($tick_label_position)
    {
        $this->container['tick_label_position'] = $tick_label_position;

        return $this;
    }

    /**
     * Gets tick_label_rotation_angle
     *
     * @return double
     */
    public function getTickLabelRotationAngle()
    {
        return $this->container['tick_label_rotation_angle'];
    }

    /**
     * Sets tick_label_rotation_angle
     *
     * @param double $tick_label_rotation_angle Represents the rotation angle of tick labels.
     *
     * @return $this
     */
    public function setTickLabelRotationAngle($tick_label_rotation_angle)
    {
        $this->container['tick_label_rotation_angle'] = $tick_label_rotation_angle;

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
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fill_format Get or sets the fill format.
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
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effect_format Get or sets the effect format.
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
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $line_format Get or sets the line format.
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


