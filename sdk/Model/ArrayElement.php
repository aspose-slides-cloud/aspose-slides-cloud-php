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
 * ArrayElement Class Doc Comment
 *
 * @category Class
 * @description An array of elements.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArrayElement extends MathElement 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArrayElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arguments' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement[]',
        'baseJustification' => 'string',
        'maximumDistribution' => 'bool',
        'objectDistribution' => 'bool',
        'rowSpacingRule' => 'string',
        'rowSpacing' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arguments' => null,
        'baseJustification' => null,
        'maximumDistribution' => null,
        'objectDistribution' => null,
        'rowSpacingRule' => null,
        'rowSpacing' => 'int32'
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
        'arguments' => 'Arguments',
        'baseJustification' => 'BaseJustification',
        'maximumDistribution' => 'MaximumDistribution',
        'objectDistribution' => 'ObjectDistribution',
        'rowSpacingRule' => 'RowSpacingRule',
        'rowSpacing' => 'RowSpacing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arguments' => 'setArguments',
        'baseJustification' => 'setBaseJustification',
        'maximumDistribution' => 'setMaximumDistribution',
        'objectDistribution' => 'setObjectDistribution',
        'rowSpacingRule' => 'setRowSpacingRule',
        'rowSpacing' => 'setRowSpacing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arguments' => 'getArguments',
        'baseJustification' => 'getBaseJustification',
        'maximumDistribution' => 'getMaximumDistribution',
        'objectDistribution' => 'getObjectDistribution',
        'rowSpacingRule' => 'getRowSpacingRule',
        'rowSpacing' => 'getRowSpacing'
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

    const BASE_JUSTIFICATION_NOT_DEFINED = 'NotDefined';
    const BASE_JUSTIFICATION_TOP = 'Top';
    const BASE_JUSTIFICATION_CENTER = 'Center';
    const BASE_JUSTIFICATION_BOTTOM = 'Bottom';
    const ROW_SPACING_RULE_SINGLE_LINE_GAP = 'SingleLineGap';
    const ROW_SPACING_RULE_ONE_AND_A_HALF_LINE_GAP = 'OneAndAHalfLineGap';
    const ROW_SPACING_RULE_TWO_LINE_GAP = 'TwoLineGap';
    const ROW_SPACING_RULE_EXACTLY = 'Exactly';
    const ROW_SPACING_RULE_MULTIPLE = 'Multiple';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBaseJustificationAllowableValues()
    {
        return [
            self::BASE_JUSTIFICATION_NOT_DEFINED,
            self::BASE_JUSTIFICATION_TOP,
            self::BASE_JUSTIFICATION_CENTER,
            self::BASE_JUSTIFICATION_BOTTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRowSpacingRuleAllowableValues()
    {
        return [
            self::ROW_SPACING_RULE_SINGLE_LINE_GAP,
            self::ROW_SPACING_RULE_ONE_AND_A_HALF_LINE_GAP,
            self::ROW_SPACING_RULE_TWO_LINE_GAP,
            self::ROW_SPACING_RULE_EXACTLY,
            self::ROW_SPACING_RULE_MULTIPLE,
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

        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['baseJustification'] = isset($data['baseJustification']) ? $data['baseJustification'] : null;
        $this->container['maximumDistribution'] = isset($data['maximumDistribution']) ? $data['maximumDistribution'] : null;
        $this->container['objectDistribution'] = isset($data['objectDistribution']) ? $data['objectDistribution'] : null;
        $this->container['rowSpacingRule'] = isset($data['rowSpacingRule']) ? $data['rowSpacingRule'] : null;
        $this->container['rowSpacing'] = isset($data['rowSpacing']) ? $data['rowSpacing'] : null;
        $this->container['type'] = 'Array';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getBaseJustificationAllowableValues();
        if (!in_array($this->container['baseJustification'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'baseJustification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRowSpacingRuleAllowableValues();
        if (!in_array($this->container['rowSpacingRule'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rowSpacingRule', must be one of '%s'",
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

        $allowedValues = $this->getBaseJustificationAllowableValues();
        if (!in_array($this->container['baseJustification'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRowSpacingRuleAllowableValues();
        if (!in_array($this->container['rowSpacingRule'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets arguments
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement[]
     */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
     * Sets arguments
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement[] $arguments Arguments
     *
     * @return $this
     */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;

        return $this;
    }

    /**
     * Gets baseJustification
     *
     * @return string
     */
    public function getBaseJustification()
    {
        return $this->container['baseJustification'];
    }

    /**
     * Sets baseJustification
     *
     * @param string $baseJustification Specifies alignment of the array relative to surrounding text
     *
     * @return $this
     */
    public function setBaseJustification($baseJustification)
    {
        $allowedValues = $this->getBaseJustificationAllowableValues();


        if (is_numeric($baseJustification)) {
            if ($baseJustification >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'baseJustification', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $baseJustification = $allowedValues[$baseJustification];
            }
        } else {
            if (!is_null($baseJustification) && !in_array($baseJustification, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'baseJustification', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['baseJustification'] = $baseJustification;

        return $this;
    }

    /**
     * Gets maximumDistribution
     *
     * @return bool
     */
    public function getMaximumDistribution()
    {
        return $this->container['maximumDistribution'];
    }

    /**
     * Sets maximumDistribution
     *
     * @param bool $maximumDistribution Maximum Distribution
     *
     * @return $this
     */
    public function setMaximumDistribution($maximumDistribution)
    {
        $this->container['maximumDistribution'] = $maximumDistribution;

        return $this;
    }

    /**
     * Gets objectDistribution
     *
     * @return bool
     */
    public function getObjectDistribution()
    {
        return $this->container['objectDistribution'];
    }

    /**
     * Sets objectDistribution
     *
     * @param bool $objectDistribution Object Distribution
     *
     * @return $this
     */
    public function setObjectDistribution($objectDistribution)
    {
        $this->container['objectDistribution'] = $objectDistribution;

        return $this;
    }

    /**
     * Gets rowSpacingRule
     *
     * @return string
     */
    public function getRowSpacingRule()
    {
        return $this->container['rowSpacingRule'];
    }

    /**
     * Sets rowSpacingRule
     *
     * @param string $rowSpacingRule The type of vertical spacing between array elements
     *
     * @return $this
     */
    public function setRowSpacingRule($rowSpacingRule)
    {
        $allowedValues = $this->getRowSpacingRuleAllowableValues();


        if (is_numeric($rowSpacingRule)) {
            if ($rowSpacingRule >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rowSpacingRule', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $rowSpacingRule = $allowedValues[$rowSpacingRule];
            }
        } else {
            if (!is_null($rowSpacingRule) && !in_array($rowSpacingRule, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rowSpacingRule', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['rowSpacingRule'] = $rowSpacingRule;

        return $this;
    }

    /**
     * Gets rowSpacing
     *
     * @return int
     */
    public function getRowSpacing()
    {
        return $this->container['rowSpacing'];
    }

    /**
     * Sets rowSpacing
     *
     * @param int $rowSpacing Spacing between rows of an array
     *
     * @return $this
     */
    public function setRowSpacing($rowSpacing)
    {
        $this->container['rowSpacing'] = $rowSpacing;

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


