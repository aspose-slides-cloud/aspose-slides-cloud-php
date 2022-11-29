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
 * FontFallbackRule Class Doc Comment
 *
 * @category Class
 * @description Represents font fallback rule.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FontFallbackRule implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FontFallbackRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rangeStartIndex' => 'int',
        'rangeEndIndex' => 'int',
        'fallbackFontList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rangeStartIndex' => 'int32',
        'rangeEndIndex' => 'int32',
        'fallbackFontList' => null
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
        'rangeStartIndex' => 'RangeStartIndex',
        'rangeEndIndex' => 'RangeEndIndex',
        'fallbackFontList' => 'FallbackFontList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rangeStartIndex' => 'setRangeStartIndex',
        'rangeEndIndex' => 'setRangeEndIndex',
        'fallbackFontList' => 'setFallbackFontList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rangeStartIndex' => 'getRangeStartIndex',
        'rangeEndIndex' => 'getRangeEndIndex',
        'fallbackFontList' => 'getFallbackFontList'
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
        $this->container['rangeStartIndex'] = isset($data['rangeStartIndex']) ? $data['rangeStartIndex'] : null;
        $this->container['rangeEndIndex'] = isset($data['rangeEndIndex']) ? $data['rangeEndIndex'] : null;
        $this->container['fallbackFontList'] = isset($data['fallbackFontList']) ? $data['fallbackFontList'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rangeStartIndex'] === null) {
            $invalidProperties[] = "'rangeStartIndex' can't be null";
        }
        if ($this->container['rangeEndIndex'] === null) {
            $invalidProperties[] = "'rangeEndIndex' can't be null";
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

        if ($this->container['rangeStartIndex'] === null) {
            return false;
        }
        if ($this->container['rangeEndIndex'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rangeStartIndex
     *
     * @return int
     */
    public function getRangeStartIndex()
    {
        return $this->container['rangeStartIndex'];
    }

    /**
     * Sets rangeStartIndex
     *
     * @param int $rangeStartIndex First index of continuous unicode range.
     *
     * @return $this
     */
    public function setRangeStartIndex($rangeStartIndex)
    {
        $this->container['rangeStartIndex'] = $rangeStartIndex;

        return $this;
    }

    /**
     * Gets rangeEndIndex
     *
     * @return int
     */
    public function getRangeEndIndex()
    {
        return $this->container['rangeEndIndex'];
    }

    /**
     * Sets rangeEndIndex
     *
     * @param int $rangeEndIndex Last index of continuous unicode range.
     *
     * @return $this
     */
    public function setRangeEndIndex($rangeEndIndex)
    {
        $this->container['rangeEndIndex'] = $rangeEndIndex;

        return $this;
    }

    /**
     * Gets fallbackFontList
     *
     * @return string[]
     */
    public function getFallbackFontList()
    {
        return $this->container['fallbackFontList'];
    }

    /**
     * Sets fallbackFontList
     *
     * @param string[] $fallbackFontList List of fallback font links.
     *
     * @return $this
     */
    public function setFallbackFontList($fallbackFontList)
    {
        $this->container['fallbackFontList'] = $fallbackFontList;

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


