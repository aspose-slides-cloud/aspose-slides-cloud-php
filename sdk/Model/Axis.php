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
        'isVisible' => 'bool',
        'hasTitle' => 'bool',
        'position' => 'string',
        'displayUnit' => 'string',
        'baseUnitScale' => 'string',
        'isAutomaticMajorUnit' => 'bool',
        'majorUnit' => 'double',
        'majorUnitScale' => 'string',
        'majorTickMark' => 'string',
        'isAutomaticMinorUnit' => 'bool',
        'minorUnit' => 'double',
        'minorUnitScale' => 'string',
        'minorTickMark' => 'string',
        'isAutomaticMaxValue' => 'bool',
        'maxValue' => 'double',
        'isAutomaticMinValue' => 'bool',
        'minValue' => 'double',
        'isLogarithmic' => 'bool',
        'logBase' => 'double',
        'categoryAxisType' => 'string',
        'axisBetweenCategories' => 'bool',
        'labelOffset' => 'int',
        'isPlotOrderReversed' => 'bool',
        'isNumberFormatLinkedToSource' => 'bool',
        'numberFormat' => 'string',
        'crossType' => 'string',
        'crossAt' => 'double',
        'isAutomaticTickMarksSpacing' => 'bool',
        'tickMarksSpacing' => 'int',
        'isAutomaticTickLabelSpacing' => 'bool',
        'tickLabelSpacing' => 'int',
        'tickLabelPosition' => 'string',
        'tickLabelRotationAngle' => 'double',
        'fillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effectFormat' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'lineFormat' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isVisible' => null,
        'hasTitle' => null,
        'position' => null,
        'displayUnit' => null,
        'baseUnitScale' => null,
        'isAutomaticMajorUnit' => null,
        'majorUnit' => 'double',
        'majorUnitScale' => null,
        'majorTickMark' => null,
        'isAutomaticMinorUnit' => null,
        'minorUnit' => 'double',
        'minorUnitScale' => null,
        'minorTickMark' => null,
        'isAutomaticMaxValue' => null,
        'maxValue' => 'double',
        'isAutomaticMinValue' => null,
        'minValue' => 'double',
        'isLogarithmic' => null,
        'logBase' => 'double',
        'categoryAxisType' => null,
        'axisBetweenCategories' => null,
        'labelOffset' => null,
        'isPlotOrderReversed' => null,
        'isNumberFormatLinkedToSource' => null,
        'numberFormat' => null,
        'crossType' => null,
        'crossAt' => 'double',
        'isAutomaticTickMarksSpacing' => null,
        'tickMarksSpacing' => null,
        'isAutomaticTickLabelSpacing' => null,
        'tickLabelSpacing' => null,
        'tickLabelPosition' => null,
        'tickLabelRotationAngle' => 'double',
        'fillFormat' => null,
        'effectFormat' => null,
        'lineFormat' => null
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
        'isVisible' => 'IsVisible',
        'hasTitle' => 'HasTitle',
        'position' => 'Position',
        'displayUnit' => 'DisplayUnit',
        'baseUnitScale' => 'BaseUnitScale',
        'isAutomaticMajorUnit' => 'IsAutomaticMajorUnit',
        'majorUnit' => 'MajorUnit',
        'majorUnitScale' => 'MajorUnitScale',
        'majorTickMark' => 'MajorTickMark',
        'isAutomaticMinorUnit' => 'IsAutomaticMinorUnit',
        'minorUnit' => 'MinorUnit',
        'minorUnitScale' => 'MinorUnitScale',
        'minorTickMark' => 'MinorTickMark',
        'isAutomaticMaxValue' => 'IsAutomaticMaxValue',
        'maxValue' => 'MaxValue',
        'isAutomaticMinValue' => 'IsAutomaticMinValue',
        'minValue' => 'MinValue',
        'isLogarithmic' => 'IsLogarithmic',
        'logBase' => 'LogBase',
        'categoryAxisType' => 'CategoryAxisType',
        'axisBetweenCategories' => 'AxisBetweenCategories',
        'labelOffset' => 'LabelOffset',
        'isPlotOrderReversed' => 'IsPlotOrderReversed',
        'isNumberFormatLinkedToSource' => 'IsNumberFormatLinkedToSource',
        'numberFormat' => 'NumberFormat',
        'crossType' => 'CrossType',
        'crossAt' => 'CrossAt',
        'isAutomaticTickMarksSpacing' => 'IsAutomaticTickMarksSpacing',
        'tickMarksSpacing' => 'TickMarksSpacing',
        'isAutomaticTickLabelSpacing' => 'IsAutomaticTickLabelSpacing',
        'tickLabelSpacing' => 'TickLabelSpacing',
        'tickLabelPosition' => 'TickLabelPosition',
        'tickLabelRotationAngle' => 'TickLabelRotationAngle',
        'fillFormat' => 'FillFormat',
        'effectFormat' => 'EffectFormat',
        'lineFormat' => 'LineFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isVisible' => 'setIsVisible',
        'hasTitle' => 'setHasTitle',
        'position' => 'setPosition',
        'displayUnit' => 'setDisplayUnit',
        'baseUnitScale' => 'setBaseUnitScale',
        'isAutomaticMajorUnit' => 'setIsAutomaticMajorUnit',
        'majorUnit' => 'setMajorUnit',
        'majorUnitScale' => 'setMajorUnitScale',
        'majorTickMark' => 'setMajorTickMark',
        'isAutomaticMinorUnit' => 'setIsAutomaticMinorUnit',
        'minorUnit' => 'setMinorUnit',
        'minorUnitScale' => 'setMinorUnitScale',
        'minorTickMark' => 'setMinorTickMark',
        'isAutomaticMaxValue' => 'setIsAutomaticMaxValue',
        'maxValue' => 'setMaxValue',
        'isAutomaticMinValue' => 'setIsAutomaticMinValue',
        'minValue' => 'setMinValue',
        'isLogarithmic' => 'setIsLogarithmic',
        'logBase' => 'setLogBase',
        'categoryAxisType' => 'setCategoryAxisType',
        'axisBetweenCategories' => 'setAxisBetweenCategories',
        'labelOffset' => 'setLabelOffset',
        'isPlotOrderReversed' => 'setIsPlotOrderReversed',
        'isNumberFormatLinkedToSource' => 'setIsNumberFormatLinkedToSource',
        'numberFormat' => 'setNumberFormat',
        'crossType' => 'setCrossType',
        'crossAt' => 'setCrossAt',
        'isAutomaticTickMarksSpacing' => 'setIsAutomaticTickMarksSpacing',
        'tickMarksSpacing' => 'setTickMarksSpacing',
        'isAutomaticTickLabelSpacing' => 'setIsAutomaticTickLabelSpacing',
        'tickLabelSpacing' => 'setTickLabelSpacing',
        'tickLabelPosition' => 'setTickLabelPosition',
        'tickLabelRotationAngle' => 'setTickLabelRotationAngle',
        'fillFormat' => 'setFillFormat',
        'effectFormat' => 'setEffectFormat',
        'lineFormat' => 'setLineFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isVisible' => 'getIsVisible',
        'hasTitle' => 'getHasTitle',
        'position' => 'getPosition',
        'displayUnit' => 'getDisplayUnit',
        'baseUnitScale' => 'getBaseUnitScale',
        'isAutomaticMajorUnit' => 'getIsAutomaticMajorUnit',
        'majorUnit' => 'getMajorUnit',
        'majorUnitScale' => 'getMajorUnitScale',
        'majorTickMark' => 'getMajorTickMark',
        'isAutomaticMinorUnit' => 'getIsAutomaticMinorUnit',
        'minorUnit' => 'getMinorUnit',
        'minorUnitScale' => 'getMinorUnitScale',
        'minorTickMark' => 'getMinorTickMark',
        'isAutomaticMaxValue' => 'getIsAutomaticMaxValue',
        'maxValue' => 'getMaxValue',
        'isAutomaticMinValue' => 'getIsAutomaticMinValue',
        'minValue' => 'getMinValue',
        'isLogarithmic' => 'getIsLogarithmic',
        'logBase' => 'getLogBase',
        'categoryAxisType' => 'getCategoryAxisType',
        'axisBetweenCategories' => 'getAxisBetweenCategories',
        'labelOffset' => 'getLabelOffset',
        'isPlotOrderReversed' => 'getIsPlotOrderReversed',
        'isNumberFormatLinkedToSource' => 'getIsNumberFormatLinkedToSource',
        'numberFormat' => 'getNumberFormat',
        'crossType' => 'getCrossType',
        'crossAt' => 'getCrossAt',
        'isAutomaticTickMarksSpacing' => 'getIsAutomaticTickMarksSpacing',
        'tickMarksSpacing' => 'getTickMarksSpacing',
        'isAutomaticTickLabelSpacing' => 'getIsAutomaticTickLabelSpacing',
        'tickLabelSpacing' => 'getTickLabelSpacing',
        'tickLabelPosition' => 'getTickLabelPosition',
        'tickLabelRotationAngle' => 'getTickLabelRotationAngle',
        'fillFormat' => 'getFillFormat',
        'effectFormat' => 'getEffectFormat',
        'lineFormat' => 'getLineFormat'
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

    const POSITION_BOTTOM = 'Bottom';
    const POSITION_LEFT = 'Left';
    const POSITION_RIGHT = 'Right';
    const POSITION_TOP = 'Top';
    const DISPLAY_UNIT_NONE = 'None';
    const DISPLAY_UNIT_HUNDREDS = 'Hundreds';
    const DISPLAY_UNIT_THOUSANDS = 'Thousands';
    const DISPLAY_UNIT_TEN_THOUSANDS = 'TenThousands';
    const DISPLAY_UNIT_HUNDRED_THOUSANDS = 'HundredThousands';
    const DISPLAY_UNIT_MILLIONS = 'Millions';
    const DISPLAY_UNIT_TEN_MILLIONS = 'TenMillions';
    const DISPLAY_UNIT_HUNDRED_MILLIONS = 'HundredMillions';
    const DISPLAY_UNIT_BILLIONS = 'Billions';
    const DISPLAY_UNIT_TRILLIONS = 'Trillions';
    const DISPLAY_UNIT_CUSTOM_VALUE = 'CustomValue';
    const BASE_UNIT_SCALE_DAYS = 'Days';
    const BASE_UNIT_SCALE_MONTHS = 'Months';
    const BASE_UNIT_SCALE_YEARS = 'Years';
    const MAJOR_UNIT_SCALE_DAYS = 'Days';
    const MAJOR_UNIT_SCALE_MONTHS = 'Months';
    const MAJOR_UNIT_SCALE_YEARS = 'Years';
    const MAJOR_TICK_MARK_CROSS = 'Cross';
    const MAJOR_TICK_MARK_INSIDE = 'Inside';
    const MAJOR_TICK_MARK_NONE = 'None';
    const MAJOR_TICK_MARK_OUTSIDE = 'Outside';
    const MINOR_UNIT_SCALE_DAYS = 'Days';
    const MINOR_UNIT_SCALE_MONTHS = 'Months';
    const MINOR_UNIT_SCALE_YEARS = 'Years';
    const MINOR_TICK_MARK_CROSS = 'Cross';
    const MINOR_TICK_MARK_INSIDE = 'Inside';
    const MINOR_TICK_MARK_NONE = 'None';
    const MINOR_TICK_MARK_OUTSIDE = 'Outside';
    const CATEGORY_AXIS_TYPE_TEXT = 'Text';
    const CATEGORY_AXIS_TYPE_DATE = 'Date';
    const CROSS_TYPE_AXIS_CROSSES_AT_ZERO = 'AxisCrossesAtZero';
    const CROSS_TYPE_MAXIMUM = 'Maximum';
    const CROSS_TYPE_CUSTOM = 'Custom';
    const TICK_LABEL_POSITION_HIGH = 'High';
    const TICK_LABEL_POSITION_LOW = 'Low';
    const TICK_LABEL_POSITION_NEXT_TO = 'NextTo';
    const TICK_LABEL_POSITION_NONE = 'None';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_BOTTOM,
            self::POSITION_LEFT,
            self::POSITION_RIGHT,
            self::POSITION_TOP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisplayUnitAllowableValues()
    {
        return [
            self::DISPLAY_UNIT_NONE,
            self::DISPLAY_UNIT_HUNDREDS,
            self::DISPLAY_UNIT_THOUSANDS,
            self::DISPLAY_UNIT_TEN_THOUSANDS,
            self::DISPLAY_UNIT_HUNDRED_THOUSANDS,
            self::DISPLAY_UNIT_MILLIONS,
            self::DISPLAY_UNIT_TEN_MILLIONS,
            self::DISPLAY_UNIT_HUNDRED_MILLIONS,
            self::DISPLAY_UNIT_BILLIONS,
            self::DISPLAY_UNIT_TRILLIONS,
            self::DISPLAY_UNIT_CUSTOM_VALUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBaseUnitScaleAllowableValues()
    {
        return [
            self::BASE_UNIT_SCALE_DAYS,
            self::BASE_UNIT_SCALE_MONTHS,
            self::BASE_UNIT_SCALE_YEARS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMajorUnitScaleAllowableValues()
    {
        return [
            self::MAJOR_UNIT_SCALE_DAYS,
            self::MAJOR_UNIT_SCALE_MONTHS,
            self::MAJOR_UNIT_SCALE_YEARS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMajorTickMarkAllowableValues()
    {
        return [
            self::MAJOR_TICK_MARK_CROSS,
            self::MAJOR_TICK_MARK_INSIDE,
            self::MAJOR_TICK_MARK_NONE,
            self::MAJOR_TICK_MARK_OUTSIDE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMinorUnitScaleAllowableValues()
    {
        return [
            self::MINOR_UNIT_SCALE_DAYS,
            self::MINOR_UNIT_SCALE_MONTHS,
            self::MINOR_UNIT_SCALE_YEARS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMinorTickMarkAllowableValues()
    {
        return [
            self::MINOR_TICK_MARK_CROSS,
            self::MINOR_TICK_MARK_INSIDE,
            self::MINOR_TICK_MARK_NONE,
            self::MINOR_TICK_MARK_OUTSIDE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAxisTypeAllowableValues()
    {
        return [
            self::CATEGORY_AXIS_TYPE_TEXT,
            self::CATEGORY_AXIS_TYPE_DATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCrossTypeAllowableValues()
    {
        return [
            self::CROSS_TYPE_AXIS_CROSSES_AT_ZERO,
            self::CROSS_TYPE_MAXIMUM,
            self::CROSS_TYPE_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTickLabelPositionAllowableValues()
    {
        return [
            self::TICK_LABEL_POSITION_HIGH,
            self::TICK_LABEL_POSITION_LOW,
            self::TICK_LABEL_POSITION_NEXT_TO,
            self::TICK_LABEL_POSITION_NONE,
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
        $this->container['isVisible'] = isset($data['isVisible']) ? $data['isVisible'] : null;
        $this->container['hasTitle'] = isset($data['hasTitle']) ? $data['hasTitle'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['displayUnit'] = isset($data['displayUnit']) ? $data['displayUnit'] : null;
        $this->container['baseUnitScale'] = isset($data['baseUnitScale']) ? $data['baseUnitScale'] : null;
        $this->container['isAutomaticMajorUnit'] = isset($data['isAutomaticMajorUnit']) ? $data['isAutomaticMajorUnit'] : null;
        $this->container['majorUnit'] = isset($data['majorUnit']) ? $data['majorUnit'] : null;
        $this->container['majorUnitScale'] = isset($data['majorUnitScale']) ? $data['majorUnitScale'] : null;
        $this->container['majorTickMark'] = isset($data['majorTickMark']) ? $data['majorTickMark'] : null;
        $this->container['isAutomaticMinorUnit'] = isset($data['isAutomaticMinorUnit']) ? $data['isAutomaticMinorUnit'] : null;
        $this->container['minorUnit'] = isset($data['minorUnit']) ? $data['minorUnit'] : null;
        $this->container['minorUnitScale'] = isset($data['minorUnitScale']) ? $data['minorUnitScale'] : null;
        $this->container['minorTickMark'] = isset($data['minorTickMark']) ? $data['minorTickMark'] : null;
        $this->container['isAutomaticMaxValue'] = isset($data['isAutomaticMaxValue']) ? $data['isAutomaticMaxValue'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['isAutomaticMinValue'] = isset($data['isAutomaticMinValue']) ? $data['isAutomaticMinValue'] : null;
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['isLogarithmic'] = isset($data['isLogarithmic']) ? $data['isLogarithmic'] : null;
        $this->container['logBase'] = isset($data['logBase']) ? $data['logBase'] : null;
        $this->container['categoryAxisType'] = isset($data['categoryAxisType']) ? $data['categoryAxisType'] : null;
        $this->container['axisBetweenCategories'] = isset($data['axisBetweenCategories']) ? $data['axisBetweenCategories'] : null;
        $this->container['labelOffset'] = isset($data['labelOffset']) ? $data['labelOffset'] : null;
        $this->container['isPlotOrderReversed'] = isset($data['isPlotOrderReversed']) ? $data['isPlotOrderReversed'] : null;
        $this->container['isNumberFormatLinkedToSource'] = isset($data['isNumberFormatLinkedToSource']) ? $data['isNumberFormatLinkedToSource'] : null;
        $this->container['numberFormat'] = isset($data['numberFormat']) ? $data['numberFormat'] : null;
        $this->container['crossType'] = isset($data['crossType']) ? $data['crossType'] : null;
        $this->container['crossAt'] = isset($data['crossAt']) ? $data['crossAt'] : null;
        $this->container['isAutomaticTickMarksSpacing'] = isset($data['isAutomaticTickMarksSpacing']) ? $data['isAutomaticTickMarksSpacing'] : null;
        $this->container['tickMarksSpacing'] = isset($data['tickMarksSpacing']) ? $data['tickMarksSpacing'] : null;
        $this->container['isAutomaticTickLabelSpacing'] = isset($data['isAutomaticTickLabelSpacing']) ? $data['isAutomaticTickLabelSpacing'] : null;
        $this->container['tickLabelSpacing'] = isset($data['tickLabelSpacing']) ? $data['tickLabelSpacing'] : null;
        $this->container['tickLabelPosition'] = isset($data['tickLabelPosition']) ? $data['tickLabelPosition'] : null;
        $this->container['tickLabelRotationAngle'] = isset($data['tickLabelRotationAngle']) ? $data['tickLabelRotationAngle'] : null;
        $this->container['fillFormat'] = isset($data['fillFormat']) ? $data['fillFormat'] : null;
        $this->container['effectFormat'] = isset($data['effectFormat']) ? $data['effectFormat'] : null;
        $this->container['lineFormat'] = isset($data['lineFormat']) ? $data['lineFormat'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($this->container['position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDisplayUnitAllowableValues();
        if (!in_array($this->container['displayUnit'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'displayUnit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBaseUnitScaleAllowableValues();
        if (!in_array($this->container['baseUnitScale'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'baseUnitScale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMajorUnitScaleAllowableValues();
        if (!in_array($this->container['majorUnitScale'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'majorUnitScale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMajorTickMarkAllowableValues();
        if (!in_array($this->container['majorTickMark'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'majorTickMark', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMinorUnitScaleAllowableValues();
        if (!in_array($this->container['minorUnitScale'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'minorUnitScale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMinorTickMarkAllowableValues();
        if (!in_array($this->container['minorTickMark'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'minorTickMark', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategoryAxisTypeAllowableValues();
        if (!in_array($this->container['categoryAxisType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'categoryAxisType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCrossTypeAllowableValues();
        if (!in_array($this->container['crossType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'crossType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTickLabelPositionAllowableValues();
        if (!in_array($this->container['tickLabelPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tickLabelPosition', must be one of '%s'",
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

        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($this->container['position'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getDisplayUnitAllowableValues();
        if (!in_array($this->container['displayUnit'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getBaseUnitScaleAllowableValues();
        if (!in_array($this->container['baseUnitScale'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMajorUnitScaleAllowableValues();
        if (!in_array($this->container['majorUnitScale'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMajorTickMarkAllowableValues();
        if (!in_array($this->container['majorTickMark'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMinorUnitScaleAllowableValues();
        if (!in_array($this->container['minorUnitScale'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMinorTickMarkAllowableValues();
        if (!in_array($this->container['minorTickMark'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCategoryAxisTypeAllowableValues();
        if (!in_array($this->container['categoryAxisType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCrossTypeAllowableValues();
        if (!in_array($this->container['crossType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTickLabelPositionAllowableValues();
        if (!in_array($this->container['tickLabelPosition'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets isVisible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
    }

    /**
     * Sets isVisible
     *
     * @param bool $isVisible True if the axis is visible
     *
     * @return $this
     */
    public function setIsVisible($isVisible)
    {
        $this->container['isVisible'] = $isVisible;

        return $this;
    }

    /**
     * Gets hasTitle
     *
     * @return bool
     */
    public function getHasTitle()
    {
        return $this->container['hasTitle'];
    }

    /**
     * Sets hasTitle
     *
     * @param bool $hasTitle True if the axis has a visible title
     *
     * @return $this
     */
    public function setHasTitle($hasTitle)
    {
        $this->container['hasTitle'] = $hasTitle;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string $position Axis position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $allowedValues = $this->getPositionAllowableValues();


        if (is_numeric($position)) {
            if ($position >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'position', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $position = $allowedValues[$position];
            }
        } else {
            if (!is_null($position) && !in_array($position, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'position', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets displayUnit
     *
     * @return string
     */
    public function getDisplayUnit()
    {
        return $this->container['displayUnit'];
    }

    /**
     * Sets displayUnit
     *
     * @param string $displayUnit The scaling value of the display units for the value axis
     *
     * @return $this
     */
    public function setDisplayUnit($displayUnit)
    {
        $allowedValues = $this->getDisplayUnitAllowableValues();


        if (is_numeric($displayUnit)) {
            if ($displayUnit >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'displayUnit', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $displayUnit = $allowedValues[$displayUnit];
            }
        } else {
            if (!is_null($displayUnit) && !in_array($displayUnit, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'displayUnit', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['displayUnit'] = $displayUnit;

        return $this;
    }

    /**
     * Gets baseUnitScale
     *
     * @return string
     */
    public function getBaseUnitScale()
    {
        return $this->container['baseUnitScale'];
    }

    /**
     * Sets baseUnitScale
     *
     * @param string $baseUnitScale The smallest time unit that is represented on the date axis
     *
     * @return $this
     */
    public function setBaseUnitScale($baseUnitScale)
    {
        $allowedValues = $this->getBaseUnitScaleAllowableValues();


        if (is_numeric($baseUnitScale)) {
            if ($baseUnitScale >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'baseUnitScale', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $baseUnitScale = $allowedValues[$baseUnitScale];
            }
        } else {
            if (!is_null($baseUnitScale) && !in_array($baseUnitScale, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'baseUnitScale', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['baseUnitScale'] = $baseUnitScale;

        return $this;
    }

    /**
     * Gets isAutomaticMajorUnit
     *
     * @return bool
     */
    public function getIsAutomaticMajorUnit()
    {
        return $this->container['isAutomaticMajorUnit'];
    }

    /**
     * Sets isAutomaticMajorUnit
     *
     * @param bool $isAutomaticMajorUnit True the major unit of the axis is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMajorUnit($isAutomaticMajorUnit)
    {
        $this->container['isAutomaticMajorUnit'] = $isAutomaticMajorUnit;

        return $this;
    }

    /**
     * Gets majorUnit
     *
     * @return double
     */
    public function getMajorUnit()
    {
        return $this->container['majorUnit'];
    }

    /**
     * Sets majorUnit
     *
     * @param double $majorUnit The major units for the date or value axis
     *
     * @return $this
     */
    public function setMajorUnit($majorUnit)
    {
        $this->container['majorUnit'] = $majorUnit;

        return $this;
    }

    /**
     * Gets majorUnitScale
     *
     * @return string
     */
    public function getMajorUnitScale()
    {
        return $this->container['majorUnitScale'];
    }

    /**
     * Sets majorUnitScale
     *
     * @param string $majorUnitScale The major unit scale for the date axis
     *
     * @return $this
     */
    public function setMajorUnitScale($majorUnitScale)
    {
        $allowedValues = $this->getMajorUnitScaleAllowableValues();


        if (is_numeric($majorUnitScale)) {
            if ($majorUnitScale >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'majorUnitScale', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $majorUnitScale = $allowedValues[$majorUnitScale];
            }
        } else {
            if (!is_null($majorUnitScale) && !in_array($majorUnitScale, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'majorUnitScale', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['majorUnitScale'] = $majorUnitScale;

        return $this;
    }

    /**
     * Gets majorTickMark
     *
     * @return string
     */
    public function getMajorTickMark()
    {
        return $this->container['majorTickMark'];
    }

    /**
     * Sets majorTickMark
     *
     * @param string $majorTickMark The type of major tick mark for the specified axis
     *
     * @return $this
     */
    public function setMajorTickMark($majorTickMark)
    {
        $allowedValues = $this->getMajorTickMarkAllowableValues();


        if (is_numeric($majorTickMark)) {
            if ($majorTickMark >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'majorTickMark', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $majorTickMark = $allowedValues[$majorTickMark];
            }
        } else {
            if (!is_null($majorTickMark) && !in_array($majorTickMark, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'majorTickMark', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['majorTickMark'] = $majorTickMark;

        return $this;
    }

    /**
     * Gets isAutomaticMinorUnit
     *
     * @return bool
     */
    public function getIsAutomaticMinorUnit()
    {
        return $this->container['isAutomaticMinorUnit'];
    }

    /**
     * Sets isAutomaticMinorUnit
     *
     * @param bool $isAutomaticMinorUnit True the minor unit of the axis is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMinorUnit($isAutomaticMinorUnit)
    {
        $this->container['isAutomaticMinorUnit'] = $isAutomaticMinorUnit;

        return $this;
    }

    /**
     * Gets minorUnit
     *
     * @return double
     */
    public function getMinorUnit()
    {
        return $this->container['minorUnit'];
    }

    /**
     * Sets minorUnit
     *
     * @param double $minorUnit The minor units for the date or value axis
     *
     * @return $this
     */
    public function setMinorUnit($minorUnit)
    {
        $this->container['minorUnit'] = $minorUnit;

        return $this;
    }

    /**
     * Gets minorUnitScale
     *
     * @return string
     */
    public function getMinorUnitScale()
    {
        return $this->container['minorUnitScale'];
    }

    /**
     * Sets minorUnitScale
     *
     * @param string $minorUnitScale The minor unit scale for the date axis
     *
     * @return $this
     */
    public function setMinorUnitScale($minorUnitScale)
    {
        $allowedValues = $this->getMinorUnitScaleAllowableValues();


        if (is_numeric($minorUnitScale)) {
            if ($minorUnitScale >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'minorUnitScale', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $minorUnitScale = $allowedValues[$minorUnitScale];
            }
        } else {
            if (!is_null($minorUnitScale) && !in_array($minorUnitScale, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'minorUnitScale', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['minorUnitScale'] = $minorUnitScale;

        return $this;
    }

    /**
     * Gets minorTickMark
     *
     * @return string
     */
    public function getMinorTickMark()
    {
        return $this->container['minorTickMark'];
    }

    /**
     * Sets minorTickMark
     *
     * @param string $minorTickMark The type of minor tick mark for the specified axis
     *
     * @return $this
     */
    public function setMinorTickMark($minorTickMark)
    {
        $allowedValues = $this->getMinorTickMarkAllowableValues();


        if (is_numeric($minorTickMark)) {
            if ($minorTickMark >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'minorTickMark', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $minorTickMark = $allowedValues[$minorTickMark];
            }
        } else {
            if (!is_null($minorTickMark) && !in_array($minorTickMark, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'minorTickMark', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['minorTickMark'] = $minorTickMark;

        return $this;
    }

    /**
     * Gets isAutomaticMaxValue
     *
     * @return bool
     */
    public function getIsAutomaticMaxValue()
    {
        return $this->container['isAutomaticMaxValue'];
    }

    /**
     * Sets isAutomaticMaxValue
     *
     * @param bool $isAutomaticMaxValue True if the max value is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMaxValue($isAutomaticMaxValue)
    {
        $this->container['isAutomaticMaxValue'] = $isAutomaticMaxValue;

        return $this;
    }

    /**
     * Gets maxValue
     *
     * @return double
     */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
     * Sets maxValue
     *
     * @param double $maxValue The maximum value on the value axis
     *
     * @return $this
     */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * Gets isAutomaticMinValue
     *
     * @return bool
     */
    public function getIsAutomaticMinValue()
    {
        return $this->container['isAutomaticMinValue'];
    }

    /**
     * Sets isAutomaticMinValue
     *
     * @param bool $isAutomaticMinValue True if the min value is automatically assigned
     *
     * @return $this
     */
    public function setIsAutomaticMinValue($isAutomaticMinValue)
    {
        $this->container['isAutomaticMinValue'] = $isAutomaticMinValue;

        return $this;
    }

    /**
     * Gets minValue
     *
     * @return double
     */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
     * Sets minValue
     *
     * @param double $minValue The minimum value on the value axis
     *
     * @return $this
     */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;

        return $this;
    }

    /**
     * Gets isLogarithmic
     *
     * @return bool
     */
    public function getIsLogarithmic()
    {
        return $this->container['isLogarithmic'];
    }

    /**
     * Sets isLogarithmic
     *
     * @param bool $isLogarithmic True if the value axis scale type is logarithmic
     *
     * @return $this
     */
    public function setIsLogarithmic($isLogarithmic)
    {
        $this->container['isLogarithmic'] = $isLogarithmic;

        return $this;
    }

    /**
     * Gets logBase
     *
     * @return double
     */
    public function getLogBase()
    {
        return $this->container['logBase'];
    }

    /**
     * Sets logBase
     *
     * @param double $logBase The logarithmic base. Default value is 10
     *
     * @return $this
     */
    public function setLogBase($logBase)
    {
        $this->container['logBase'] = $logBase;

        return $this;
    }

    /**
     * Gets categoryAxisType
     *
     * @return string
     */
    public function getCategoryAxisType()
    {
        return $this->container['categoryAxisType'];
    }

    /**
     * Sets categoryAxisType
     *
     * @param string $categoryAxisType The type of the category axis
     *
     * @return $this
     */
    public function setCategoryAxisType($categoryAxisType)
    {
        $allowedValues = $this->getCategoryAxisTypeAllowableValues();


        if (is_numeric($categoryAxisType)) {
            if ($categoryAxisType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'categoryAxisType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $categoryAxisType = $allowedValues[$categoryAxisType];
            }
        } else {
            if (!is_null($categoryAxisType) && !in_array($categoryAxisType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'categoryAxisType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['categoryAxisType'] = $categoryAxisType;

        return $this;
    }

    /**
     * Gets axisBetweenCategories
     *
     * @return bool
     */
    public function getAxisBetweenCategories()
    {
        return $this->container['axisBetweenCategories'];
    }

    /**
     * Sets axisBetweenCategories
     *
     * @param bool $axisBetweenCategories True if the value axis crosses the category axis between categories. This property applies only to category axes, and it doesn't apply to 3-D charts
     *
     * @return $this
     */
    public function setAxisBetweenCategories($axisBetweenCategories)
    {
        $this->container['axisBetweenCategories'] = $axisBetweenCategories;

        return $this;
    }

    /**
     * Gets labelOffset
     *
     * @return int
     */
    public function getLabelOffset()
    {
        return $this->container['labelOffset'];
    }

    /**
     * Sets labelOffset
     *
     * @param int $labelOffset The distance of labels from the axis. Applied to category or date axis. Value must be between 0% and 1000%.
     *
     * @return $this
     */
    public function setLabelOffset($labelOffset)
    {
        $this->container['labelOffset'] = $labelOffset;

        return $this;
    }

    /**
     * Gets isPlotOrderReversed
     *
     * @return bool
     */
    public function getIsPlotOrderReversed()
    {
        return $this->container['isPlotOrderReversed'];
    }

    /**
     * Sets isPlotOrderReversed
     *
     * @param bool $isPlotOrderReversed True if MS PowerPoint plots data points from last to first
     *
     * @return $this
     */
    public function setIsPlotOrderReversed($isPlotOrderReversed)
    {
        $this->container['isPlotOrderReversed'] = $isPlotOrderReversed;

        return $this;
    }

    /**
     * Gets isNumberFormatLinkedToSource
     *
     * @return bool
     */
    public function getIsNumberFormatLinkedToSource()
    {
        return $this->container['isNumberFormatLinkedToSource'];
    }

    /**
     * Sets isNumberFormatLinkedToSource
     *
     * @param bool $isNumberFormatLinkedToSource True if the format is linked to source data
     *
     * @return $this
     */
    public function setIsNumberFormatLinkedToSource($isNumberFormatLinkedToSource)
    {
        $this->container['isNumberFormatLinkedToSource'] = $isNumberFormatLinkedToSource;

        return $this;
    }

    /**
     * Gets numberFormat
     *
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->container['numberFormat'];
    }

    /**
     * Sets numberFormat
     *
     * @param string $numberFormat the format string for the Axis Labels
     *
     * @return $this
     */
    public function setNumberFormat($numberFormat)
    {
        $this->container['numberFormat'] = $numberFormat;

        return $this;
    }

    /**
     * Gets crossType
     *
     * @return string
     */
    public function getCrossType()
    {
        return $this->container['crossType'];
    }

    /**
     * Sets crossType
     *
     * @param string $crossType The CrossType on the specified axis where the other axis crosses
     *
     * @return $this
     */
    public function setCrossType($crossType)
    {
        $allowedValues = $this->getCrossTypeAllowableValues();


        if (is_numeric($crossType)) {
            if ($crossType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'crossType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $crossType = $allowedValues[$crossType];
            }
        } else {
            if (!is_null($crossType) && !in_array($crossType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'crossType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['crossType'] = $crossType;

        return $this;
    }

    /**
     * Gets crossAt
     *
     * @return double
     */
    public function getCrossAt()
    {
        return $this->container['crossAt'];
    }

    /**
     * Sets crossAt
     *
     * @param double $crossAt The point on the axis where the perpendicular axis crosses it
     *
     * @return $this
     */
    public function setCrossAt($crossAt)
    {
        $this->container['crossAt'] = $crossAt;

        return $this;
    }

    /**
     * Gets isAutomaticTickMarksSpacing
     *
     * @return bool
     */
    public function getIsAutomaticTickMarksSpacing()
    {
        return $this->container['isAutomaticTickMarksSpacing'];
    }

    /**
     * Sets isAutomaticTickMarksSpacing
     *
     * @param bool $isAutomaticTickMarksSpacing True for automatic tick marks spacing value
     *
     * @return $this
     */
    public function setIsAutomaticTickMarksSpacing($isAutomaticTickMarksSpacing)
    {
        $this->container['isAutomaticTickMarksSpacing'] = $isAutomaticTickMarksSpacing;

        return $this;
    }

    /**
     * Gets tickMarksSpacing
     *
     * @return int
     */
    public function getTickMarksSpacing()
    {
        return $this->container['tickMarksSpacing'];
    }

    /**
     * Sets tickMarksSpacing
     *
     * @param int $tickMarksSpacing Specifies how many tick marks shall be skipped before the next one shall be drawn. Applied to category or series axis.
     *
     * @return $this
     */
    public function setTickMarksSpacing($tickMarksSpacing)
    {
        $this->container['tickMarksSpacing'] = $tickMarksSpacing;

        return $this;
    }

    /**
     * Gets isAutomaticTickLabelSpacing
     *
     * @return bool
     */
    public function getIsAutomaticTickLabelSpacing()
    {
        return $this->container['isAutomaticTickLabelSpacing'];
    }

    /**
     * Sets isAutomaticTickLabelSpacing
     *
     * @param bool $isAutomaticTickLabelSpacing True for automatic tick label spacing value
     *
     * @return $this
     */
    public function setIsAutomaticTickLabelSpacing($isAutomaticTickLabelSpacing)
    {
        $this->container['isAutomaticTickLabelSpacing'] = $isAutomaticTickLabelSpacing;

        return $this;
    }

    /**
     * Gets tickLabelSpacing
     *
     * @return int
     */
    public function getTickLabelSpacing()
    {
        return $this->container['tickLabelSpacing'];
    }

    /**
     * Sets tickLabelSpacing
     *
     * @param int $tickLabelSpacing Specifies how many tick labels to skip between label that is drawn.
     *
     * @return $this
     */
    public function setTickLabelSpacing($tickLabelSpacing)
    {
        $this->container['tickLabelSpacing'] = $tickLabelSpacing;

        return $this;
    }

    /**
     * Gets tickLabelPosition
     *
     * @return string
     */
    public function getTickLabelPosition()
    {
        return $this->container['tickLabelPosition'];
    }

    /**
     * Sets tickLabelPosition
     *
     * @param string $tickLabelPosition The position of tick-mark labels on the specified axis.
     *
     * @return $this
     */
    public function setTickLabelPosition($tickLabelPosition)
    {
        $allowedValues = $this->getTickLabelPositionAllowableValues();


        if (is_numeric($tickLabelPosition)) {
            if ($tickLabelPosition >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tickLabelPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $tickLabelPosition = $allowedValues[$tickLabelPosition];
            }
        } else {
            if (!is_null($tickLabelPosition) && !in_array($tickLabelPosition, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tickLabelPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['tickLabelPosition'] = $tickLabelPosition;

        return $this;
    }

    /**
     * Gets tickLabelRotationAngle
     *
     * @return double
     */
    public function getTickLabelRotationAngle()
    {
        return $this->container['tickLabelRotationAngle'];
    }

    /**
     * Sets tickLabelRotationAngle
     *
     * @param double $tickLabelRotationAngle Represents the rotation angle of tick labels.
     *
     * @return $this
     */
    public function setTickLabelRotationAngle($tickLabelRotationAngle)
    {
        $this->container['tickLabelRotationAngle'] = $tickLabelRotationAngle;

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
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fillFormat Get or sets the fill format.
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
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effectFormat Get or sets the effect format.
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
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $lineFormat Get or sets the line format.
     *
     * @return $this
     */
    public function setLineFormat($lineFormat)
    {
        $this->container['lineFormat'] = $lineFormat;

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


