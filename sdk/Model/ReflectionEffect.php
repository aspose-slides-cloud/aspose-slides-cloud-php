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
 * ReflectionEffect Class Doc Comment
 *
 * @category Class
 * @description Represents reflection effect
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReflectionEffect implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReflectionEffect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direction' => 'double',
        'fade_direction' => 'double',
        'distance' => 'double',
        'blur_radius' => 'double',
        'scale_horizontal' => 'double',
        'scale_vertical' => 'double',
        'skew_horizontal' => 'double',
        'skew_vertical' => 'double',
        'start_pos_alpha' => 'double',
        'end_pos_alpha' => 'double',
        'start_reflection_opacity' => 'double',
        'end_reflection_opacity' => 'double',
        'rectangle_align' => '\Aspose\Slides\Cloud\Sdk\Model\RectangleAlignment',
        'rotate_shadow_with_shape' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => 'double',
        'fade_direction' => 'double',
        'distance' => 'double',
        'blur_radius' => 'double',
        'scale_horizontal' => 'double',
        'scale_vertical' => 'double',
        'skew_horizontal' => 'double',
        'skew_vertical' => 'double',
        'start_pos_alpha' => 'double',
        'end_pos_alpha' => 'double',
        'start_reflection_opacity' => 'double',
        'end_reflection_opacity' => 'double',
        'rectangle_align' => null,
        'rotate_shadow_with_shape' => null
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
        'direction' => 'Direction',
        'fade_direction' => 'FadeDirection',
        'distance' => 'Distance',
        'blur_radius' => 'BlurRadius',
        'scale_horizontal' => 'ScaleHorizontal',
        'scale_vertical' => 'ScaleVertical',
        'skew_horizontal' => 'SkewHorizontal',
        'skew_vertical' => 'SkewVertical',
        'start_pos_alpha' => 'StartPosAlpha',
        'end_pos_alpha' => 'EndPosAlpha',
        'start_reflection_opacity' => 'StartReflectionOpacity',
        'end_reflection_opacity' => 'EndReflectionOpacity',
        'rectangle_align' => 'RectangleAlign',
        'rotate_shadow_with_shape' => 'RotateShadowWithShape'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'fade_direction' => 'setFadeDirection',
        'distance' => 'setDistance',
        'blur_radius' => 'setBlurRadius',
        'scale_horizontal' => 'setScaleHorizontal',
        'scale_vertical' => 'setScaleVertical',
        'skew_horizontal' => 'setSkewHorizontal',
        'skew_vertical' => 'setSkewVertical',
        'start_pos_alpha' => 'setStartPosAlpha',
        'end_pos_alpha' => 'setEndPosAlpha',
        'start_reflection_opacity' => 'setStartReflectionOpacity',
        'end_reflection_opacity' => 'setEndReflectionOpacity',
        'rectangle_align' => 'setRectangleAlign',
        'rotate_shadow_with_shape' => 'setRotateShadowWithShape'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'fade_direction' => 'getFadeDirection',
        'distance' => 'getDistance',
        'blur_radius' => 'getBlurRadius',
        'scale_horizontal' => 'getScaleHorizontal',
        'scale_vertical' => 'getScaleVertical',
        'skew_horizontal' => 'getSkewHorizontal',
        'skew_vertical' => 'getSkewVertical',
        'start_pos_alpha' => 'getStartPosAlpha',
        'end_pos_alpha' => 'getEndPosAlpha',
        'start_reflection_opacity' => 'getStartReflectionOpacity',
        'end_reflection_opacity' => 'getEndReflectionOpacity',
        'rectangle_align' => 'getRectangleAlign',
        'rotate_shadow_with_shape' => 'getRotateShadowWithShape'
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['fade_direction'] = isset($data['fade_direction']) ? $data['fade_direction'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['blur_radius'] = isset($data['blur_radius']) ? $data['blur_radius'] : null;
        $this->container['scale_horizontal'] = isset($data['scale_horizontal']) ? $data['scale_horizontal'] : null;
        $this->container['scale_vertical'] = isset($data['scale_vertical']) ? $data['scale_vertical'] : null;
        $this->container['skew_horizontal'] = isset($data['skew_horizontal']) ? $data['skew_horizontal'] : null;
        $this->container['skew_vertical'] = isset($data['skew_vertical']) ? $data['skew_vertical'] : null;
        $this->container['start_pos_alpha'] = isset($data['start_pos_alpha']) ? $data['start_pos_alpha'] : null;
        $this->container['end_pos_alpha'] = isset($data['end_pos_alpha']) ? $data['end_pos_alpha'] : null;
        $this->container['start_reflection_opacity'] = isset($data['start_reflection_opacity']) ? $data['start_reflection_opacity'] : null;
        $this->container['end_reflection_opacity'] = isset($data['end_reflection_opacity']) ? $data['end_reflection_opacity'] : null;
        $this->container['rectangle_align'] = isset($data['rectangle_align']) ? $data['rectangle_align'] : null;
        $this->container['rotate_shadow_with_shape'] = isset($data['rotate_shadow_with_shape']) ? $data['rotate_shadow_with_shape'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['fade_direction'] === null) {
            $invalidProperties[] = "'fade_direction' can't be null";
        }
        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['blur_radius'] === null) {
            $invalidProperties[] = "'blur_radius' can't be null";
        }
        if ($this->container['scale_horizontal'] === null) {
            $invalidProperties[] = "'scale_horizontal' can't be null";
        }
        if ($this->container['scale_vertical'] === null) {
            $invalidProperties[] = "'scale_vertical' can't be null";
        }
        if ($this->container['skew_horizontal'] === null) {
            $invalidProperties[] = "'skew_horizontal' can't be null";
        }
        if ($this->container['skew_vertical'] === null) {
            $invalidProperties[] = "'skew_vertical' can't be null";
        }
        if ($this->container['start_pos_alpha'] === null) {
            $invalidProperties[] = "'start_pos_alpha' can't be null";
        }
        if ($this->container['end_pos_alpha'] === null) {
            $invalidProperties[] = "'end_pos_alpha' can't be null";
        }
        if ($this->container['start_reflection_opacity'] === null) {
            $invalidProperties[] = "'start_reflection_opacity' can't be null";
        }
        if ($this->container['end_reflection_opacity'] === null) {
            $invalidProperties[] = "'end_reflection_opacity' can't be null";
        }
        if ($this->container['rectangle_align'] === null) {
            $invalidProperties[] = "'rectangle_align' can't be null";
        }
        if ($this->container['rotate_shadow_with_shape'] === null) {
            $invalidProperties[] = "'rotate_shadow_with_shape' can't be null";
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

        if ($this->container['direction'] === null) {
            return false;
        }
        if ($this->container['fade_direction'] === null) {
            return false;
        }
        if ($this->container['distance'] === null) {
            return false;
        }
        if ($this->container['blur_radius'] === null) {
            return false;
        }
        if ($this->container['scale_horizontal'] === null) {
            return false;
        }
        if ($this->container['scale_vertical'] === null) {
            return false;
        }
        if ($this->container['skew_horizontal'] === null) {
            return false;
        }
        if ($this->container['skew_vertical'] === null) {
            return false;
        }
        if ($this->container['start_pos_alpha'] === null) {
            return false;
        }
        if ($this->container['end_pos_alpha'] === null) {
            return false;
        }
        if ($this->container['start_reflection_opacity'] === null) {
            return false;
        }
        if ($this->container['end_reflection_opacity'] === null) {
            return false;
        }
        if ($this->container['rectangle_align'] === null) {
            return false;
        }
        if ($this->container['rotate_shadow_with_shape'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets direction
     *
     * @return double
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param double $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets fade_direction
     *
     * @return double
     */
    public function getFadeDirection()
    {
        return $this->container['fade_direction'];
    }

    /**
     * Sets fade_direction
     *
     * @param double $fade_direction fade direction
     *
     * @return $this
     */
    public function setFadeDirection($fade_direction)
    {
        $this->container['fade_direction'] = $fade_direction;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return double
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param double $distance distance
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets blur_radius
     *
     * @return double
     */
    public function getBlurRadius()
    {
        return $this->container['blur_radius'];
    }

    /**
     * Sets blur_radius
     *
     * @param double $blur_radius blur radius
     *
     * @return $this
     */
    public function setBlurRadius($blur_radius)
    {
        $this->container['blur_radius'] = $blur_radius;

        return $this;
    }

    /**
     * Gets scale_horizontal
     *
     * @return double
     */
    public function getScaleHorizontal()
    {
        return $this->container['scale_horizontal'];
    }

    /**
     * Sets scale_horizontal
     *
     * @param double $scale_horizontal scale horizontal
     *
     * @return $this
     */
    public function setScaleHorizontal($scale_horizontal)
    {
        $this->container['scale_horizontal'] = $scale_horizontal;

        return $this;
    }

    /**
     * Gets scale_vertical
     *
     * @return double
     */
    public function getScaleVertical()
    {
        return $this->container['scale_vertical'];
    }

    /**
     * Sets scale_vertical
     *
     * @param double $scale_vertical scale vertical
     *
     * @return $this
     */
    public function setScaleVertical($scale_vertical)
    {
        $this->container['scale_vertical'] = $scale_vertical;

        return $this;
    }

    /**
     * Gets skew_horizontal
     *
     * @return double
     */
    public function getSkewHorizontal()
    {
        return $this->container['skew_horizontal'];
    }

    /**
     * Sets skew_horizontal
     *
     * @param double $skew_horizontal skew horizontal
     *
     * @return $this
     */
    public function setSkewHorizontal($skew_horizontal)
    {
        $this->container['skew_horizontal'] = $skew_horizontal;

        return $this;
    }

    /**
     * Gets skew_vertical
     *
     * @return double
     */
    public function getSkewVertical()
    {
        return $this->container['skew_vertical'];
    }

    /**
     * Sets skew_vertical
     *
     * @param double $skew_vertical skew vertical
     *
     * @return $this
     */
    public function setSkewVertical($skew_vertical)
    {
        $this->container['skew_vertical'] = $skew_vertical;

        return $this;
    }

    /**
     * Gets start_pos_alpha
     *
     * @return double
     */
    public function getStartPosAlpha()
    {
        return $this->container['start_pos_alpha'];
    }

    /**
     * Sets start_pos_alpha
     *
     * @param double $start_pos_alpha start pos alpha
     *
     * @return $this
     */
    public function setStartPosAlpha($start_pos_alpha)
    {
        $this->container['start_pos_alpha'] = $start_pos_alpha;

        return $this;
    }

    /**
     * Gets end_pos_alpha
     *
     * @return double
     */
    public function getEndPosAlpha()
    {
        return $this->container['end_pos_alpha'];
    }

    /**
     * Sets end_pos_alpha
     *
     * @param double $end_pos_alpha end pos alpha
     *
     * @return $this
     */
    public function setEndPosAlpha($end_pos_alpha)
    {
        $this->container['end_pos_alpha'] = $end_pos_alpha;

        return $this;
    }

    /**
     * Gets start_reflection_opacity
     *
     * @return double
     */
    public function getStartReflectionOpacity()
    {
        return $this->container['start_reflection_opacity'];
    }

    /**
     * Sets start_reflection_opacity
     *
     * @param double $start_reflection_opacity start reflection opacity
     *
     * @return $this
     */
    public function setStartReflectionOpacity($start_reflection_opacity)
    {
        $this->container['start_reflection_opacity'] = $start_reflection_opacity;

        return $this;
    }

    /**
     * Gets end_reflection_opacity
     *
     * @return double
     */
    public function getEndReflectionOpacity()
    {
        return $this->container['end_reflection_opacity'];
    }

    /**
     * Sets end_reflection_opacity
     *
     * @param double $end_reflection_opacity end reflection opacity
     *
     * @return $this
     */
    public function setEndReflectionOpacity($end_reflection_opacity)
    {
        $this->container['end_reflection_opacity'] = $end_reflection_opacity;

        return $this;
    }

    /**
     * Gets rectangle_align
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\RectangleAlignment
     */
    public function getRectangleAlign()
    {
        return $this->container['rectangle_align'];
    }

    /**
     * Sets rectangle_align
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\RectangleAlignment $rectangle_align rectangle alignment
     *
     * @return $this
     */
    public function setRectangleAlign($rectangle_align)
    {
        $this->container['rectangle_align'] = $rectangle_align;

        return $this;
    }

    /**
     * Gets rotate_shadow_with_shape
     *
     * @return bool
     */
    public function getRotateShadowWithShape()
    {
        return $this->container['rotate_shadow_with_shape'];
    }

    /**
     * Sets rotate_shadow_with_shape
     *
     * @param bool $rotate_shadow_with_shape true if the reflection should rotate with the shape when the shape is rotated
     *
     * @return $this
     */
    public function setRotateShadowWithShape($rotate_shadow_with_shape)
    {
        $this->container['rotate_shadow_with_shape'] = $rotate_shadow_with_shape;

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


