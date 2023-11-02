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
 * MathParagraph Class Doc Comment
 *
 * @category Class
 * @description Mathematical paragraph that is a container for mathematical blocks
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MathParagraph implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MathParagraph';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mathBlockList' => '\Aspose\Slides\Cloud\Sdk\Model\BlockElement[]',
        'justification' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mathBlockList' => null,
        'justification' => null
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
        'mathBlockList' => 'MathBlockList',
        'justification' => 'Justification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mathBlockList' => 'setMathBlockList',
        'justification' => 'setJustification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mathBlockList' => 'getMathBlockList',
        'justification' => 'getJustification'
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

    const JUSTIFICATION_LEFT_JUSTIFIED = 'LeftJustified';
    const JUSTIFICATION_RIGHT_JUSTIFIED = 'RightJustified';
    const JUSTIFICATION_CENTERED = 'Centered';
    const JUSTIFICATION_CENTERED_AS_GROUP = 'CenteredAsGroup';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJustificationAllowableValues()
    {
        return [
            self::JUSTIFICATION_LEFT_JUSTIFIED,
            self::JUSTIFICATION_RIGHT_JUSTIFIED,
            self::JUSTIFICATION_CENTERED,
            self::JUSTIFICATION_CENTERED_AS_GROUP,
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
        $this->container['mathBlockList'] = isset($data['mathBlockList']) ? $data['mathBlockList'] : null;
        $this->container['justification'] = isset($data['justification']) ? $data['justification'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getJustificationAllowableValues();
        if (!in_array($this->container['justification'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'justification', must be one of '%s'",
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

        $allowedValues = $this->getJustificationAllowableValues();
        if (!in_array($this->container['justification'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets mathBlockList
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\BlockElement[]
     */
    public function getMathBlockList()
    {
        return $this->container['mathBlockList'];
    }

    /**
     * Sets mathBlockList
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\BlockElement[] $mathBlockList List of math blocks
     *
     * @return $this
     */
    public function setMathBlockList($mathBlockList)
    {
        $this->container['mathBlockList'] = $mathBlockList;

        return $this;
    }

    /**
     * Gets justification
     *
     * @return string
     */
    public function getJustification()
    {
        return $this->container['justification'];
    }

    /**
     * Sets justification
     *
     * @param string $justification Justification of the math paragraph
     *
     * @return $this
     */
    public function setJustification($justification)
    {
        $allowedValues = $this->getJustificationAllowableValues();


        if (is_numeric($justification)) {
            if ($justification >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'justification', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $justification = $allowedValues[$justification];
            }
        } else {
            if (!is_null($justification) && !in_array($justification, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'justification', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['justification'] = $justification;

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


