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
 * TextFrameFormat Class Doc Comment
 *
 * @category Class
 * @description Contains the TextFrame&#39;s formatting properties.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextFrameFormat implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextFrameFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'threeDFormat' => '\Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat',
        'transform' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'threeDFormat' => null,
        'transform' => null
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
        'threeDFormat' => 'ThreeDFormat',
        'transform' => 'Transform'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'threeDFormat' => 'setThreeDFormat',
        'transform' => 'setTransform'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'threeDFormat' => 'getThreeDFormat',
        'transform' => 'getTransform'
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

    const TRANSFORM_NONE = 'None';
    const TRANSFORM_PLAIN = 'Plain';
    const TRANSFORM_STOP = 'Stop';
    const TRANSFORM_TRIANGLE = 'Triangle';
    const TRANSFORM_TRIANGLE_INVERTED = 'TriangleInverted';
    const TRANSFORM_CHEVRON = 'Chevron';
    const TRANSFORM_CHEVRON_INVERTED = 'ChevronInverted';
    const TRANSFORM_RING_INSIDE = 'RingInside';
    const TRANSFORM_RING_OUTSIDE = 'RingOutside';
    const TRANSFORM_ARCH_UP = 'ArchUp';
    const TRANSFORM_ARCH_DOWN = 'ArchDown';
    const TRANSFORM_CIRCLE = 'Circle';
    const TRANSFORM_BUTTON = 'Button';
    const TRANSFORM_ARCH_UP_POUR = 'ArchUpPour';
    const TRANSFORM_ARCH_DOWN_POUR = 'ArchDownPour';
    const TRANSFORM_CIRCLE_POUR = 'CirclePour';
    const TRANSFORM_BUTTON_POUR = 'ButtonPour';
    const TRANSFORM_CURVE_UP = 'CurveUp';
    const TRANSFORM_CURVE_DOWN = 'CurveDown';
    const TRANSFORM_CAN_UP = 'CanUp';
    const TRANSFORM_CAN_DOWN = 'CanDown';
    const TRANSFORM_WAVE1 = 'Wave1';
    const TRANSFORM_WAVE2 = 'Wave2';
    const TRANSFORM_DOUBLE_WAVE1 = 'DoubleWave1';
    const TRANSFORM_WAVE4 = 'Wave4';
    const TRANSFORM_INFLATE = 'Inflate';
    const TRANSFORM_DEFLATE = 'Deflate';
    const TRANSFORM_INFLATE_BOTTOM = 'InflateBottom';
    const TRANSFORM_DEFLATE_BOTTOM = 'DeflateBottom';
    const TRANSFORM_INFLATE_TOP = 'InflateTop';
    const TRANSFORM_DEFLATE_TOP = 'DeflateTop';
    const TRANSFORM_DEFLATE_INFLATE = 'DeflateInflate';
    const TRANSFORM_DEFLATE_INFLATE_DEFLATE = 'DeflateInflateDeflate';
    const TRANSFORM_FADE_RIGHT = 'FadeRight';
    const TRANSFORM_FADE_LEFT = 'FadeLeft';
    const TRANSFORM_FADE_UP = 'FadeUp';
    const TRANSFORM_FADE_DOWN = 'FadeDown';
    const TRANSFORM_SLANT_UP = 'SlantUp';
    const TRANSFORM_SLANT_DOWN = 'SlantDown';
    const TRANSFORM_CASCADE_UP = 'CascadeUp';
    const TRANSFORM_CASCADE_DOWN = 'CascadeDown';
    const TRANSFORM_CUSTOM = 'Custom';
    const TRANSFORM_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransformAllowableValues()
    {
        return [
            self::TRANSFORM_NONE,
            self::TRANSFORM_PLAIN,
            self::TRANSFORM_STOP,
            self::TRANSFORM_TRIANGLE,
            self::TRANSFORM_TRIANGLE_INVERTED,
            self::TRANSFORM_CHEVRON,
            self::TRANSFORM_CHEVRON_INVERTED,
            self::TRANSFORM_RING_INSIDE,
            self::TRANSFORM_RING_OUTSIDE,
            self::TRANSFORM_ARCH_UP,
            self::TRANSFORM_ARCH_DOWN,
            self::TRANSFORM_CIRCLE,
            self::TRANSFORM_BUTTON,
            self::TRANSFORM_ARCH_UP_POUR,
            self::TRANSFORM_ARCH_DOWN_POUR,
            self::TRANSFORM_CIRCLE_POUR,
            self::TRANSFORM_BUTTON_POUR,
            self::TRANSFORM_CURVE_UP,
            self::TRANSFORM_CURVE_DOWN,
            self::TRANSFORM_CAN_UP,
            self::TRANSFORM_CAN_DOWN,
            self::TRANSFORM_WAVE1,
            self::TRANSFORM_WAVE2,
            self::TRANSFORM_DOUBLE_WAVE1,
            self::TRANSFORM_WAVE4,
            self::TRANSFORM_INFLATE,
            self::TRANSFORM_DEFLATE,
            self::TRANSFORM_INFLATE_BOTTOM,
            self::TRANSFORM_DEFLATE_BOTTOM,
            self::TRANSFORM_INFLATE_TOP,
            self::TRANSFORM_DEFLATE_TOP,
            self::TRANSFORM_DEFLATE_INFLATE,
            self::TRANSFORM_DEFLATE_INFLATE_DEFLATE,
            self::TRANSFORM_FADE_RIGHT,
            self::TRANSFORM_FADE_LEFT,
            self::TRANSFORM_FADE_UP,
            self::TRANSFORM_FADE_DOWN,
            self::TRANSFORM_SLANT_UP,
            self::TRANSFORM_SLANT_DOWN,
            self::TRANSFORM_CASCADE_UP,
            self::TRANSFORM_CASCADE_DOWN,
            self::TRANSFORM_CUSTOM,
            self::TRANSFORM_NOT_DEFINED,
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
        $this->container['threeDFormat'] = isset($data['threeDFormat']) ? $data['threeDFormat'] : null;
        $this->container['transform'] = isset($data['transform']) ? $data['transform'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransformAllowableValues();
        if (!in_array($this->container['transform'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transform', must be one of '%s'",
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

        $allowedValues = $this->getTransformAllowableValues();
        if (!in_array($this->container['transform'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets threeDFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat
     */
    public function getThreeDFormat()
    {
        return $this->container['threeDFormat'];
    }

    /**
     * Sets threeDFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat $threeDFormat Represents 3d effect properties for a text.
     *
     * @return $this
     */
    public function setThreeDFormat($threeDFormat)
    {
        $this->container['threeDFormat'] = $threeDFormat;

        return $this;
    }

    /**
     * Gets transform
     *
     * @return string
     */
    public function getTransform()
    {
        return $this->container['transform'];
    }

    /**
     * Sets transform
     *
     * @param string $transform Gets or sets text wrapping shape.
     *
     * @return $this
     */
    public function setTransform($transform)
    {
        $allowedValues = $this->getTransformAllowableValues();


        if (is_numeric($transform)) {
            if ($transform >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'transform', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $transform = $allowedValues[$transform];
            }
        } else {
            if (!is_null($transform) && !in_array($transform, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'transform', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['transform'] = $transform;

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


