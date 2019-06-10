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
 * ShapeImageExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a shape is saved in thumbnail.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShapeImageExportOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShapeImageExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scale_x' => 'double',
        'scale_y' => 'double',
        'thumbnail_bounds' => 'string',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scale_x' => 'double',
        'scale_y' => 'double',
        'thumbnail_bounds' => null,
        'format' => null
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
        'scale_x' => 'ScaleX',
        'scale_y' => 'ScaleY',
        'thumbnail_bounds' => 'ThumbnailBounds',
        'format' => 'Format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scale_x' => 'setScaleX',
        'scale_y' => 'setScaleY',
        'thumbnail_bounds' => 'setThumbnailBounds',
        'format' => 'setFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scale_x' => 'getScaleX',
        'scale_y' => 'getScaleY',
        'thumbnail_bounds' => 'getThumbnailBounds',
        'format' => 'getFormat'
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

    const THUMBNAIL_BOUNDS_SLIDE = 'Slide';
    const THUMBNAIL_BOUNDS_SHAPE = 'Shape';
    const THUMBNAIL_BOUNDS_APPEARANCE = 'Appearance';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThumbnailBoundsAllowableValues()
    {
        return [
            self::THUMBNAIL_BOUNDS_SLIDE,
            self::THUMBNAIL_BOUNDS_SHAPE,
            self::THUMBNAIL_BOUNDS_APPEARANCE,
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
        $this->container['scale_x'] = isset($data['scale_x']) ? $data['scale_x'] : null;
        $this->container['scale_y'] = isset($data['scale_y']) ? $data['scale_y'] : null;
        $this->container['thumbnail_bounds'] = isset($data['thumbnail_bounds']) ? $data['thumbnail_bounds'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scale_x'] === null) {
            $invalidProperties[] = "'scale_x' can't be null";
        }
        if ($this->container['scale_y'] === null) {
            $invalidProperties[] = "'scale_y' can't be null";
        }
        if ($this->container['thumbnail_bounds'] === null) {
            $invalidProperties[] = "'thumbnail_bounds' can't be null";
        }
        $allowedValues = $this->getThumbnailBoundsAllowableValues();
        if (!in_array($this->container['thumbnail_bounds'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'thumbnail_bounds', must be one of '%s'",
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

        if ($this->container['scale_x'] === null) {
            return false;
        }
        if ($this->container['scale_y'] === null) {
            return false;
        }
        if ($this->container['thumbnail_bounds'] === null) {
            return false;
        }
        $allowedValues = $this->getThumbnailBoundsAllowableValues();
        if (!in_array($this->container['thumbnail_bounds'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets scale_x
     *
     * @return double
     */
    public function getScaleX()
    {
        return $this->container['scale_x'];
    }

    /**
     * Sets scale_x
     *
     * @param double $scale_x Get or sets scaling ratio by X axis.
     *
     * @return $this
     */
    public function setScaleX($scale_x)
    {
        $this->container['scale_x'] = $scale_x;

        return $this;
    }

    /**
     * Gets scale_y
     *
     * @return double
     */
    public function getScaleY()
    {
        return $this->container['scale_y'];
    }

    /**
     * Sets scale_y
     *
     * @param double $scale_y Get or sets scaling ratio by Y axis.
     *
     * @return $this
     */
    public function setScaleY($scale_y)
    {
        $this->container['scale_y'] = $scale_y;

        return $this;
    }

    /**
     * Gets thumbnail_bounds
     *
     * @return string
     */
    public function getThumbnailBounds()
    {
        return $this->container['thumbnail_bounds'];
    }

    /**
     * Sets thumbnail_bounds
     *
     * @param string $thumbnail_bounds Get or sets thumbnail bounds
     *
     * @return $this
     */
    public function setThumbnailBounds($thumbnail_bounds)
    {
        $allowedValues = $this->getThumbnailBoundsAllowableValues();
        if (!in_array($thumbnail_bounds, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'thumbnail_bounds', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['thumbnail_bounds'] = $thumbnail_bounds;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format Gets export format.
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

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


