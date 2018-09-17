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
 * ChartWall Class Doc Comment
 *
 * @category Class
 * @description Represents a chart wall
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChartWall implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartWall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effect_format' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'line_format' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'thickness' => 'int',
        'picture_type' => '\Aspose\Slides\Cloud\Sdk\Model\PictureType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fill_format' => null,
        'effect_format' => null,
        'line_format' => null,
        'thickness' => 'int32',
        'picture_type' => null
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
        'fill_format' => 'FillFormat',
        'effect_format' => 'EffectFormat',
        'line_format' => 'LineFormat',
        'thickness' => 'Thickness',
        'picture_type' => 'PictureType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fill_format' => 'setFillFormat',
        'effect_format' => 'setEffectFormat',
        'line_format' => 'setLineFormat',
        'thickness' => 'setThickness',
        'picture_type' => 'setPictureType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fill_format' => 'getFillFormat',
        'effect_format' => 'getEffectFormat',
        'line_format' => 'getLineFormat',
        'thickness' => 'getThickness',
        'picture_type' => 'getPictureType'
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
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['effect_format'] = isset($data['effect_format']) ? $data['effect_format'] : null;
        $this->container['line_format'] = isset($data['line_format']) ? $data['line_format'] : null;
        $this->container['thickness'] = isset($data['thickness']) ? $data['thickness'] : null;
        $this->container['picture_type'] = isset($data['picture_type']) ? $data['picture_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['thickness'] === null) {
            $invalidProperties[] = "'thickness' can't be null";
        }
        if ($this->container['picture_type'] === null) {
            $invalidProperties[] = "'picture_type' can't be null";
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

        if ($this->container['thickness'] === null) {
            return false;
        }
        if ($this->container['picture_type'] === null) {
            return false;
        }
        return true;
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
     * Gets thickness
     *
     * @return int
     */
    public function getThickness()
    {
        return $this->container['thickness'];
    }

    /**
     * Sets thickness
     *
     * @param int $thickness Get or sets wall thickness as a percentage of the largest dimension of the plot volume.
     *
     * @return $this
     */
    public function setThickness($thickness)
    {
        $this->container['thickness'] = $thickness;

        return $this;
    }

    /**
     * Gets picture_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\PictureType
     */
    public function getPictureType()
    {
        return $this->container['picture_type'];
    }

    /**
     * Sets picture_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\PictureType $picture_type Get or sets mode of bar picture filling.
     *
     * @return $this
     */
    public function setPictureType($picture_type)
    {
        $this->container['picture_type'] = $picture_type;

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


