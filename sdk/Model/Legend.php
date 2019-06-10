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
 * Legend Class Doc Comment
 *
 * @category Class
 * @description Represents a chart legend
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Legend implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Legend';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'position' => 'string',
        'x' => 'double',
        'y' => 'double',
        'width' => 'double',
        'height' => 'double',
        'overlay' => 'bool',
        'fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effect_format' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'line_format' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'position' => null,
        'x' => 'double',
        'y' => 'double',
        'width' => 'double',
        'height' => 'double',
        'overlay' => null,
        'fill_format' => null,
        'effect_format' => null,
        'line_format' => null
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
        'position' => 'Position',
        'x' => 'X',
        'y' => 'Y',
        'width' => 'Width',
        'height' => 'Height',
        'overlay' => 'Overlay',
        'fill_format' => 'FillFormat',
        'effect_format' => 'EffectFormat',
        'line_format' => 'LineFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
        'x' => 'setX',
        'y' => 'setY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'overlay' => 'setOverlay',
        'fill_format' => 'setFillFormat',
        'effect_format' => 'setEffectFormat',
        'line_format' => 'setLineFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
        'x' => 'getX',
        'y' => 'getY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'overlay' => 'getOverlay',
        'fill_format' => 'getFillFormat',
        'effect_format' => 'getEffectFormat',
        'line_format' => 'getLineFormat'
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

    const POSITION_BOTTOM = 'Bottom';
    const POSITION_LEFT = 'Left';
    const POSITION_RIGHT = 'Right';
    const POSITION_TOP = 'Top';
    const POSITION_TOP_RIGHT = 'TopRight';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_BOTTOM,
            self::POSITION_LEFT,
            self::POSITION_RIGHT,
            self::POSITION_TOP,
            self::POSITION_TOP_RIGHT,
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['overlay'] = isset($data['overlay']) ? $data['overlay'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['effect_format'] = isset($data['effect_format']) ? $data['effect_format'] : null;
        $this->container['line_format'] = isset($data['line_format']) ? $data['line_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($this->container['position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['overlay'] === null) {
            $invalidProperties[] = "'overlay' can't be null";
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

        if ($this->container['position'] === null) {
            return false;
        }
        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($this->container['position'], $allowedValues)) {
            return false;
        }
        if ($this->container['x'] === null) {
            return false;
        }
        if ($this->container['y'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['overlay'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($position, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'position', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets x
     *
     * @return double
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param double $x the X location
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return double
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param double $y the Y location
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets overlay
     *
     * @return bool
     */
    public function getOverlay()
    {
        return $this->container['overlay'];
    }

    /**
     * Sets overlay
     *
     * @param bool $overlay true if other elements are allowed to overlay the legend
     *
     * @return $this
     */
    public function setOverlay($overlay)
    {
        $this->container['overlay'] = $overlay;

        return $this;
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


