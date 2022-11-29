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
 * FractionElement Class Doc Comment
 *
 * @category Class
 * @description Specifies the fraction object, consisting of a numerator and denominator separated by a fraction bar.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FractionElement extends MathElement 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FractionElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fractionType' => 'string',
        'numerator' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'denominator' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fractionType' => null,
        'numerator' => null,
        'denominator' => null
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
        'fractionType' => 'FractionType',
        'numerator' => 'Numerator',
        'denominator' => 'Denominator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fractionType' => 'setFractionType',
        'numerator' => 'setNumerator',
        'denominator' => 'setDenominator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fractionType' => 'getFractionType',
        'numerator' => 'getNumerator',
        'denominator' => 'getDenominator'
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

    const FRACTION_TYPE_BAR = 'Bar';
    const FRACTION_TYPE_SKEWED = 'Skewed';
    const FRACTION_TYPE_LINEAR = 'Linear';
    const FRACTION_TYPE_NO_BAR = 'NoBar';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFractionTypeAllowableValues()
    {
        return [
            self::FRACTION_TYPE_BAR,
            self::FRACTION_TYPE_SKEWED,
            self::FRACTION_TYPE_LINEAR,
            self::FRACTION_TYPE_NO_BAR,
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

        $this->container['fractionType'] = isset($data['fractionType']) ? $data['fractionType'] : null;
        $this->container['numerator'] = isset($data['numerator']) ? $data['numerator'] : null;
        $this->container['denominator'] = isset($data['denominator']) ? $data['denominator'] : null;
        $this->container['type'] = 'Fraction';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getFractionTypeAllowableValues();
        if (!in_array($this->container['fractionType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fractionType', must be one of '%s'",
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

        $allowedValues = $this->getFractionTypeAllowableValues();
        if (!in_array($this->container['fractionType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets fractionType
     *
     * @return string
     */
    public function getFractionType()
    {
        return $this->container['fractionType'];
    }

    /**
     * Sets fractionType
     *
     * @param string $fractionType Fraction type
     *
     * @return $this
     */
    public function setFractionType($fractionType)
    {
        $allowedValues = $this->getFractionTypeAllowableValues();


        if (is_numeric($fractionType)) {
            if ($fractionType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fractionType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $fractionType = $allowedValues[$fractionType];
            }
        } else {
            if (!is_null($fractionType) && !in_array($fractionType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fractionType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['fractionType'] = $fractionType;

        return $this;
    }

    /**
     * Gets numerator
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getNumerator()
    {
        return $this->container['numerator'];
    }

    /**
     * Sets numerator
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $numerator Numerator
     *
     * @return $this
     */
    public function setNumerator($numerator)
    {
        $this->container['numerator'] = $numerator;

        return $this;
    }

    /**
     * Gets denominator
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getDenominator()
    {
        return $this->container['denominator'];
    }

    /**
     * Sets denominator
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $denominator Denominator
     *
     * @return $this
     */
    public function setDenominator($denominator)
    {
        $this->container['denominator'] = $denominator;

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


