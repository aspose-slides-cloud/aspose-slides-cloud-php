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
 * NaryOperatorElement Class Doc Comment
 *
 * @category Class
 * @description Specifies an N-ary mathematical object, such as Summation and Integral.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NaryOperatorElement extends MathElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NaryOperatorElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'subscript' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'superscript' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'operator' => 'string',
        'limitLocation' => 'string',
        'growToMatchOperandHeight' => 'bool',
        'hideSubscript' => 'bool',
        'hideSuperscript' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base' => null,
        'subscript' => null,
        'superscript' => null,
        'operator' => null,
        'limitLocation' => null,
        'growToMatchOperandHeight' => null,
        'hideSubscript' => null,
        'hideSuperscript' => null
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
        'base' => 'Base',
        'subscript' => 'Subscript',
        'superscript' => 'Superscript',
        'operator' => 'Operator',
        'limitLocation' => 'LimitLocation',
        'growToMatchOperandHeight' => 'GrowToMatchOperandHeight',
        'hideSubscript' => 'HideSubscript',
        'hideSuperscript' => 'HideSuperscript'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base' => 'setBase',
        'subscript' => 'setSubscript',
        'superscript' => 'setSuperscript',
        'operator' => 'setOperator',
        'limitLocation' => 'setLimitLocation',
        'growToMatchOperandHeight' => 'setGrowToMatchOperandHeight',
        'hideSubscript' => 'setHideSubscript',
        'hideSuperscript' => 'setHideSuperscript'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base' => 'getBase',
        'subscript' => 'getSubscript',
        'superscript' => 'getSuperscript',
        'operator' => 'getOperator',
        'limitLocation' => 'getLimitLocation',
        'growToMatchOperandHeight' => 'getGrowToMatchOperandHeight',
        'hideSubscript' => 'getHideSubscript',
        'hideSuperscript' => 'getHideSuperscript'
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

    const LIMIT_LOCATION_NOT_DEFINED = 'NotDefined';
    const LIMIT_LOCATION_UNDER_OVER = 'UnderOver';
    const LIMIT_LOCATION_SUBSCRIPT_SUPERSCRIPT = 'SubscriptSuperscript';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLimitLocationAllowableValues()
    {
        return [
            self::LIMIT_LOCATION_NOT_DEFINED,
            self::LIMIT_LOCATION_UNDER_OVER,
            self::LIMIT_LOCATION_SUBSCRIPT_SUPERSCRIPT,
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

        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['subscript'] = isset($data['subscript']) ? $data['subscript'] : null;
        $this->container['superscript'] = isset($data['superscript']) ? $data['superscript'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['limitLocation'] = isset($data['limitLocation']) ? $data['limitLocation'] : null;
        $this->container['growToMatchOperandHeight'] = isset($data['growToMatchOperandHeight']) ? $data['growToMatchOperandHeight'] : null;
        $this->container['hideSubscript'] = isset($data['hideSubscript']) ? $data['hideSubscript'] : null;
        $this->container['hideSuperscript'] = isset($data['hideSuperscript']) ? $data['hideSuperscript'] : null;
        $this->container['type'] = 'NaryOperator';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getLimitLocationAllowableValues();
        if (!in_array($this->container['limitLocation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'limitLocation', must be one of '%s'",
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

        $allowedValues = $this->getLimitLocationAllowableValues();
        if (!in_array($this->container['limitLocation'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets base
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $base Base argument
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets subscript
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getSubscript()
    {
        return $this->container['subscript'];
    }

    /**
     * Sets subscript
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $subscript Subscript argument
     *
     * @return $this
     */
    public function setSubscript($subscript)
    {
        $this->container['subscript'] = $subscript;

        return $this;
    }

    /**
     * Gets superscript
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getSuperscript()
    {
        return $this->container['superscript'];
    }

    /**
     * Sets superscript
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $superscript Superscript argument
     *
     * @return $this
     */
    public function setSuperscript($superscript)
    {
        $this->container['superscript'] = $superscript;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator Nary Operator Character
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets limitLocation
     *
     * @return string
     */
    public function getLimitLocation()
    {
        return $this->container['limitLocation'];
    }

    /**
     * Sets limitLocation
     *
     * @param string $limitLocation The location of limits (subscript and superscript)
     *
     * @return $this
     */
    public function setLimitLocation($limitLocation)
    {
        $allowedValues = $this->getLimitLocationAllowableValues();


        if (is_numeric($limitLocation)) {
            if ($limitLocation >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'limitLocation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $limitLocation = $allowedValues[$limitLocation];
            }
        } else {
            if (!is_null($limitLocation) && !in_array($limitLocation, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'limitLocation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['limitLocation'] = $limitLocation;

        return $this;
    }

    /**
     * Gets growToMatchOperandHeight
     *
     * @return bool
     */
    public function getGrowToMatchOperandHeight()
    {
        return $this->container['growToMatchOperandHeight'];
    }

    /**
     * Sets growToMatchOperandHeight
     *
     * @param bool $growToMatchOperandHeight Operator Character grows vertically to match its operand height
     *
     * @return $this
     */
    public function setGrowToMatchOperandHeight($growToMatchOperandHeight)
    {
        $this->container['growToMatchOperandHeight'] = $growToMatchOperandHeight;

        return $this;
    }

    /**
     * Gets hideSubscript
     *
     * @return bool
     */
    public function getHideSubscript()
    {
        return $this->container['hideSubscript'];
    }

    /**
     * Sets hideSubscript
     *
     * @param bool $hideSubscript Hide Subscript
     *
     * @return $this
     */
    public function setHideSubscript($hideSubscript)
    {
        $this->container['hideSubscript'] = $hideSubscript;

        return $this;
    }

    /**
     * Gets hideSuperscript
     *
     * @return bool
     */
    public function getHideSuperscript()
    {
        return $this->container['hideSuperscript'];
    }

    /**
     * Sets hideSuperscript
     *
     * @param bool $hideSuperscript Hide Superscript
     *
     * @return $this
     */
    public function setHideSuperscript($hideSuperscript)
    {
        $this->container['hideSuperscript'] = $hideSuperscript;

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


