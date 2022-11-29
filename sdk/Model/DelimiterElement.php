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
 * DelimiterElement Class Doc Comment
 *
 * @category Class
 * @description Delimiter element
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DelimiterElement extends MathElement 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DelimiterElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arguments' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement[]',
        'beginningCharacter' => 'string',
        'separatorCharacter' => 'string',
        'endingCharacter' => 'string',
        'growToMatchOperandHeight' => 'bool',
        'delimiterShape' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arguments' => null,
        'beginningCharacter' => null,
        'separatorCharacter' => null,
        'endingCharacter' => null,
        'growToMatchOperandHeight' => null,
        'delimiterShape' => null
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
        'beginningCharacter' => 'BeginningCharacter',
        'separatorCharacter' => 'SeparatorCharacter',
        'endingCharacter' => 'EndingCharacter',
        'growToMatchOperandHeight' => 'GrowToMatchOperandHeight',
        'delimiterShape' => 'DelimiterShape'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arguments' => 'setArguments',
        'beginningCharacter' => 'setBeginningCharacter',
        'separatorCharacter' => 'setSeparatorCharacter',
        'endingCharacter' => 'setEndingCharacter',
        'growToMatchOperandHeight' => 'setGrowToMatchOperandHeight',
        'delimiterShape' => 'setDelimiterShape'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arguments' => 'getArguments',
        'beginningCharacter' => 'getBeginningCharacter',
        'separatorCharacter' => 'getSeparatorCharacter',
        'endingCharacter' => 'getEndingCharacter',
        'growToMatchOperandHeight' => 'getGrowToMatchOperandHeight',
        'delimiterShape' => 'getDelimiterShape'
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

    const DELIMITER_SHAPE_CENTERED = 'Centered';
    const DELIMITER_SHAPE_MATCH = 'Match';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDelimiterShapeAllowableValues()
    {
        return [
            self::DELIMITER_SHAPE_CENTERED,
            self::DELIMITER_SHAPE_MATCH,
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
        $this->container['beginningCharacter'] = isset($data['beginningCharacter']) ? $data['beginningCharacter'] : null;
        $this->container['separatorCharacter'] = isset($data['separatorCharacter']) ? $data['separatorCharacter'] : null;
        $this->container['endingCharacter'] = isset($data['endingCharacter']) ? $data['endingCharacter'] : null;
        $this->container['growToMatchOperandHeight'] = isset($data['growToMatchOperandHeight']) ? $data['growToMatchOperandHeight'] : null;
        $this->container['delimiterShape'] = isset($data['delimiterShape']) ? $data['delimiterShape'] : null;
        $this->container['type'] = 'Delimiter';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getDelimiterShapeAllowableValues();
        if (!in_array($this->container['delimiterShape'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delimiterShape', must be one of '%s'",
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

        $allowedValues = $this->getDelimiterShapeAllowableValues();
        if (!in_array($this->container['delimiterShape'], $allowedValues)) {
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
     * Gets beginningCharacter
     *
     * @return string
     */
    public function getBeginningCharacter()
    {
        return $this->container['beginningCharacter'];
    }

    /**
     * Sets beginningCharacter
     *
     * @param string $beginningCharacter Beginning character
     *
     * @return $this
     */
    public function setBeginningCharacter($beginningCharacter)
    {
        $this->container['beginningCharacter'] = $beginningCharacter;

        return $this;
    }

    /**
     * Gets separatorCharacter
     *
     * @return string
     */
    public function getSeparatorCharacter()
    {
        return $this->container['separatorCharacter'];
    }

    /**
     * Sets separatorCharacter
     *
     * @param string $separatorCharacter Separator character
     *
     * @return $this
     */
    public function setSeparatorCharacter($separatorCharacter)
    {
        $this->container['separatorCharacter'] = $separatorCharacter;

        return $this;
    }

    /**
     * Gets endingCharacter
     *
     * @return string
     */
    public function getEndingCharacter()
    {
        return $this->container['endingCharacter'];
    }

    /**
     * Sets endingCharacter
     *
     * @param string $endingCharacter Ending character
     *
     * @return $this
     */
    public function setEndingCharacter($endingCharacter)
    {
        $this->container['endingCharacter'] = $endingCharacter;

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
     * @param bool $growToMatchOperandHeight Grow to match operand height
     *
     * @return $this
     */
    public function setGrowToMatchOperandHeight($growToMatchOperandHeight)
    {
        $this->container['growToMatchOperandHeight'] = $growToMatchOperandHeight;

        return $this;
    }

    /**
     * Gets delimiterShape
     *
     * @return string
     */
    public function getDelimiterShape()
    {
        return $this->container['delimiterShape'];
    }

    /**
     * Sets delimiterShape
     *
     * @param string $delimiterShape Delimiter shape
     *
     * @return $this
     */
    public function setDelimiterShape($delimiterShape)
    {
        $allowedValues = $this->getDelimiterShapeAllowableValues();


        if (is_numeric($delimiterShape)) {
            if ($delimiterShape >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'delimiterShape', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $delimiterShape = $allowedValues[$delimiterShape];
            }
        } else {
            if (!is_null($delimiterShape) && !in_array($delimiterShape, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'delimiterShape', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['delimiterShape'] = $delimiterShape;

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


