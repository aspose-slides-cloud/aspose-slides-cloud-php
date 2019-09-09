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
        'scaleX' => 'double',
        'scaleY' => 'double',
        'thumbnailBounds' => 'string',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scaleX' => 'double',
        'scaleY' => 'double',
        'thumbnailBounds' => null,
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
        'scaleX' => 'ScaleX',
        'scaleY' => 'ScaleY',
        'thumbnailBounds' => 'ThumbnailBounds',
        'format' => 'Format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scaleX' => 'setScaleX',
        'scaleY' => 'setScaleY',
        'thumbnailBounds' => 'setThumbnailBounds',
        'format' => 'setFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scaleX' => 'getScaleX',
        'scaleY' => 'getScaleY',
        'thumbnailBounds' => 'getThumbnailBounds',
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
        $this->container['scaleX'] = isset($data['scaleX']) ? $data['scaleX'] : null;
        $this->container['scaleY'] = isset($data['scaleY']) ? $data['scaleY'] : null;
        $this->container['thumbnailBounds'] = isset($data['thumbnailBounds']) ? $data['thumbnailBounds'] : null;
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

        if ($this->container['scaleX'] === null) {
            $invalidProperties[] = "'scaleX' can't be null";
        }
        if ($this->container['scaleY'] === null) {
            $invalidProperties[] = "'scaleY' can't be null";
        }
        if ($this->container['thumbnailBounds'] === null) {
            $invalidProperties[] = "'thumbnailBounds' can't be null";
        }
        $allowedValues = $this->getThumbnailBoundsAllowableValues();
        if (!in_array($this->container['thumbnailBounds'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'thumbnailBounds', must be one of '%s'",
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

        if ($this->container['scaleX'] === null) {
            return false;
        }
        if ($this->container['scaleY'] === null) {
            return false;
        }
        if ($this->container['thumbnailBounds'] === null) {
            return false;
        }
        $allowedValues = $this->getThumbnailBoundsAllowableValues();
        if (!in_array($this->container['thumbnailBounds'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets scaleX
     *
     * @return double
     */
    public function getScaleX()
    {
        return $this->container['scaleX'];
    }

    /**
     * Sets scaleX
     *
     * @param double $scaleX Get or sets scaling ratio by X axis.
     *
     * @return $this
     */
    public function setScaleX($scaleX)
    {
        $this->container['scaleX'] = $scaleX;

        return $this;
    }

    /**
     * Gets scaleY
     *
     * @return double
     */
    public function getScaleY()
    {
        return $this->container['scaleY'];
    }

    /**
     * Sets scaleY
     *
     * @param double $scaleY Get or sets scaling ratio by Y axis.
     *
     * @return $this
     */
    public function setScaleY($scaleY)
    {
        $this->container['scaleY'] = $scaleY;

        return $this;
    }

    /**
     * Gets thumbnailBounds
     *
     * @return string
     */
    public function getThumbnailBounds()
    {
        return $this->container['thumbnailBounds'];
    }

    /**
     * Sets thumbnailBounds
     *
     * @param string $thumbnailBounds Get or sets thumbnail bounds
     *
     * @return $this
     */
    public function setThumbnailBounds($thumbnailBounds)
    {
        $allowedValues = $this->getThumbnailBoundsAllowableValues();


        if (is_numeric($thumbnailBounds)) {
            if ($thumbnailBounds >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'thumbnailBounds', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $thumbnailBounds = $allowedValues[$thumbnailBounds];
            }
        } else {
            if (!in_array($thumbnailBounds, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'thumbnailBounds', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['thumbnailBounds'] = $thumbnailBounds;

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


