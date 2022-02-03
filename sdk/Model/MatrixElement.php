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
 * MatrixElement Class Doc Comment
 *
 * @category Class
 * @description Specifies the Matrix object,
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatrixElement extends MathElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MatrixElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hidePlaceholders' => 'bool',
        'baseJustification' => 'string',
        'minColumnWidth' => 'int',
        'columnGapRule' => 'string',
        'columnGap' => 'int',
        'rowGapRule' => 'string',
        'rowGap' => 'int',
        'items' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement[][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hidePlaceholders' => null,
        'baseJustification' => null,
        'minColumnWidth' => 'int32',
        'columnGapRule' => null,
        'columnGap' => 'int32',
        'rowGapRule' => null,
        'rowGap' => 'int32',
        'items' => null
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
        'hidePlaceholders' => 'HidePlaceholders',
        'baseJustification' => 'BaseJustification',
        'minColumnWidth' => 'MinColumnWidth',
        'columnGapRule' => 'ColumnGapRule',
        'columnGap' => 'ColumnGap',
        'rowGapRule' => 'RowGapRule',
        'rowGap' => 'RowGap',
        'items' => 'Items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hidePlaceholders' => 'setHidePlaceholders',
        'baseJustification' => 'setBaseJustification',
        'minColumnWidth' => 'setMinColumnWidth',
        'columnGapRule' => 'setColumnGapRule',
        'columnGap' => 'setColumnGap',
        'rowGapRule' => 'setRowGapRule',
        'rowGap' => 'setRowGap',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hidePlaceholders' => 'getHidePlaceholders',
        'baseJustification' => 'getBaseJustification',
        'minColumnWidth' => 'getMinColumnWidth',
        'columnGapRule' => 'getColumnGapRule',
        'columnGap' => 'getColumnGap',
        'rowGapRule' => 'getRowGapRule',
        'rowGap' => 'getRowGap',
        'items' => 'getItems'
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
    const COLUMN_GAP_RULE_SINGLE_SPACING_GAP = 'SingleSpacingGap';
    const COLUMN_GAP_RULE_ONE_AND_HALF_SPACING_GAP = 'OneAndHalfSpacingGap';
    const COLUMN_GAP_RULE_DOUBLE_SPACING_GAP = 'DoubleSpacingGap';
    const COLUMN_GAP_RULE_EXACTLY = 'Exactly';
    const COLUMN_GAP_RULE_MULTIPLE = 'Multiple';
    const ROW_GAP_RULE_SINGLE_SPACING_GAP = 'SingleSpacingGap';
    const ROW_GAP_RULE_ONE_AND_HALF_SPACING_GAP = 'OneAndHalfSpacingGap';
    const ROW_GAP_RULE_DOUBLE_SPACING_GAP = 'DoubleSpacingGap';
    const ROW_GAP_RULE_EXACTLY = 'Exactly';
    const ROW_GAP_RULE_MULTIPLE = 'Multiple';
    

    
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
    public function getColumnGapRuleAllowableValues()
    {
        return [
            self::COLUMN_GAP_RULE_SINGLE_SPACING_GAP,
            self::COLUMN_GAP_RULE_ONE_AND_HALF_SPACING_GAP,
            self::COLUMN_GAP_RULE_DOUBLE_SPACING_GAP,
            self::COLUMN_GAP_RULE_EXACTLY,
            self::COLUMN_GAP_RULE_MULTIPLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRowGapRuleAllowableValues()
    {
        return [
            self::ROW_GAP_RULE_SINGLE_SPACING_GAP,
            self::ROW_GAP_RULE_ONE_AND_HALF_SPACING_GAP,
            self::ROW_GAP_RULE_DOUBLE_SPACING_GAP,
            self::ROW_GAP_RULE_EXACTLY,
            self::ROW_GAP_RULE_MULTIPLE,
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

        $this->container['hidePlaceholders'] = isset($data['hidePlaceholders']) ? $data['hidePlaceholders'] : null;
        $this->container['baseJustification'] = isset($data['baseJustification']) ? $data['baseJustification'] : null;
        $this->container['minColumnWidth'] = isset($data['minColumnWidth']) ? $data['minColumnWidth'] : null;
        $this->container['columnGapRule'] = isset($data['columnGapRule']) ? $data['columnGapRule'] : null;
        $this->container['columnGap'] = isset($data['columnGap']) ? $data['columnGap'] : null;
        $this->container['rowGapRule'] = isset($data['rowGapRule']) ? $data['rowGapRule'] : null;
        $this->container['rowGap'] = isset($data['rowGap']) ? $data['rowGap'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['type'] = 'Matrix';
        
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

        $allowedValues = $this->getColumnGapRuleAllowableValues();
        if (!in_array($this->container['columnGapRule'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'columnGapRule', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRowGapRuleAllowableValues();
        if (!in_array($this->container['rowGapRule'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rowGapRule', must be one of '%s'",
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
        $allowedValues = $this->getColumnGapRuleAllowableValues();
        if (!in_array($this->container['columnGapRule'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRowGapRuleAllowableValues();
        if (!in_array($this->container['rowGapRule'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets hidePlaceholders
     *
     * @return bool
     */
    public function getHidePlaceholders()
    {
        return $this->container['hidePlaceholders'];
    }

    /**
     * Sets hidePlaceholders
     *
     * @param bool $hidePlaceholders Hide the placeholders for empty matrix elements
     *
     * @return $this
     */
    public function setHidePlaceholders($hidePlaceholders)
    {
        $this->container['hidePlaceholders'] = $hidePlaceholders;

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
     * @param string $baseJustification Specifies the vertical justification respect to surrounding text.
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
     * Gets minColumnWidth
     *
     * @return int
     */
    public function getMinColumnWidth()
    {
        return $this->container['minColumnWidth'];
    }

    /**
     * Sets minColumnWidth
     *
     * @param int $minColumnWidth Minimum column width in twips (1/20th of a point)
     *
     * @return $this
     */
    public function setMinColumnWidth($minColumnWidth)
    {
        $this->container['minColumnWidth'] = $minColumnWidth;

        return $this;
    }

    /**
     * Gets columnGapRule
     *
     * @return string
     */
    public function getColumnGapRule()
    {
        return $this->container['columnGapRule'];
    }

    /**
     * Sets columnGapRule
     *
     * @param string $columnGapRule The type of horizontal spacing between columns of a matrix.
     *
     * @return $this
     */
    public function setColumnGapRule($columnGapRule)
    {
        $allowedValues = $this->getColumnGapRuleAllowableValues();


        if (is_numeric($columnGapRule)) {
            if ($columnGapRule >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'columnGapRule', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $columnGapRule = $allowedValues[$columnGapRule];
            }
        } else {
            if (!is_null($columnGapRule) && !in_array($columnGapRule, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'columnGapRule', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['columnGapRule'] = $columnGapRule;

        return $this;
    }

    /**
     * Gets columnGap
     *
     * @return int
     */
    public function getColumnGap()
    {
        return $this->container['columnGap'];
    }

    /**
     * Sets columnGap
     *
     * @param int $columnGap The value of horizontal spacing between columns of a matrix
     *
     * @return $this
     */
    public function setColumnGap($columnGap)
    {
        $this->container['columnGap'] = $columnGap;

        return $this;
    }

    /**
     * Gets rowGapRule
     *
     * @return string
     */
    public function getRowGapRule()
    {
        return $this->container['rowGapRule'];
    }

    /**
     * Sets rowGapRule
     *
     * @param string $rowGapRule The type of vertical spacing between rows of a matrix
     *
     * @return $this
     */
    public function setRowGapRule($rowGapRule)
    {
        $allowedValues = $this->getRowGapRuleAllowableValues();


        if (is_numeric($rowGapRule)) {
            if ($rowGapRule >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rowGapRule', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $rowGapRule = $allowedValues[$rowGapRule];
            }
        } else {
            if (!is_null($rowGapRule) && !in_array($rowGapRule, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rowGapRule', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['rowGapRule'] = $rowGapRule;

        return $this;
    }

    /**
     * Gets rowGap
     *
     * @return int
     */
    public function getRowGap()
    {
        return $this->container['rowGap'];
    }

    /**
     * Sets rowGap
     *
     * @param int $rowGap The value of vertical spacing between rows of a matrix;
     *
     * @return $this
     */
    public function setRowGap($rowGap)
    {
        $this->container['rowGap'] = $rowGap;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement[][]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement[][] $items Matrix items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


