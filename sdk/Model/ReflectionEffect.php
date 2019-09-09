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
        'fadeDirection' => 'double',
        'distance' => 'double',
        'blurRadius' => 'double',
        'scaleHorizontal' => 'double',
        'scaleVertical' => 'double',
        'skewHorizontal' => 'double',
        'skewVertical' => 'double',
        'startPosAlpha' => 'double',
        'endPosAlpha' => 'double',
        'startReflectionOpacity' => 'double',
        'endReflectionOpacity' => 'double',
        'rectangleAlign' => 'string',
        'rotateShadowWithShape' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => 'double',
        'fadeDirection' => 'double',
        'distance' => 'double',
        'blurRadius' => 'double',
        'scaleHorizontal' => 'double',
        'scaleVertical' => 'double',
        'skewHorizontal' => 'double',
        'skewVertical' => 'double',
        'startPosAlpha' => 'double',
        'endPosAlpha' => 'double',
        'startReflectionOpacity' => 'double',
        'endReflectionOpacity' => 'double',
        'rectangleAlign' => null,
        'rotateShadowWithShape' => null
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
        'fadeDirection' => 'FadeDirection',
        'distance' => 'Distance',
        'blurRadius' => 'BlurRadius',
        'scaleHorizontal' => 'ScaleHorizontal',
        'scaleVertical' => 'ScaleVertical',
        'skewHorizontal' => 'SkewHorizontal',
        'skewVertical' => 'SkewVertical',
        'startPosAlpha' => 'StartPosAlpha',
        'endPosAlpha' => 'EndPosAlpha',
        'startReflectionOpacity' => 'StartReflectionOpacity',
        'endReflectionOpacity' => 'EndReflectionOpacity',
        'rectangleAlign' => 'RectangleAlign',
        'rotateShadowWithShape' => 'RotateShadowWithShape'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'fadeDirection' => 'setFadeDirection',
        'distance' => 'setDistance',
        'blurRadius' => 'setBlurRadius',
        'scaleHorizontal' => 'setScaleHorizontal',
        'scaleVertical' => 'setScaleVertical',
        'skewHorizontal' => 'setSkewHorizontal',
        'skewVertical' => 'setSkewVertical',
        'startPosAlpha' => 'setStartPosAlpha',
        'endPosAlpha' => 'setEndPosAlpha',
        'startReflectionOpacity' => 'setStartReflectionOpacity',
        'endReflectionOpacity' => 'setEndReflectionOpacity',
        'rectangleAlign' => 'setRectangleAlign',
        'rotateShadowWithShape' => 'setRotateShadowWithShape'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'fadeDirection' => 'getFadeDirection',
        'distance' => 'getDistance',
        'blurRadius' => 'getBlurRadius',
        'scaleHorizontal' => 'getScaleHorizontal',
        'scaleVertical' => 'getScaleVertical',
        'skewHorizontal' => 'getSkewHorizontal',
        'skewVertical' => 'getSkewVertical',
        'startPosAlpha' => 'getStartPosAlpha',
        'endPosAlpha' => 'getEndPosAlpha',
        'startReflectionOpacity' => 'getStartReflectionOpacity',
        'endReflectionOpacity' => 'getEndReflectionOpacity',
        'rectangleAlign' => 'getRectangleAlign',
        'rotateShadowWithShape' => 'getRotateShadowWithShape'
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

    const RECTANGLE_ALIGN_TOP_LEFT = 'TopLeft';
    const RECTANGLE_ALIGN_TOP = 'Top';
    const RECTANGLE_ALIGN_TOP_RIGHT = 'TopRight';
    const RECTANGLE_ALIGN_LEFT = 'Left';
    const RECTANGLE_ALIGN_CENTER = 'Center';
    const RECTANGLE_ALIGN_RIGHT = 'Right';
    const RECTANGLE_ALIGN_BOTTOM_LEFT = 'BottomLeft';
    const RECTANGLE_ALIGN_BOTTOM = 'Bottom';
    const RECTANGLE_ALIGN_BOTTOM_RIGHT = 'BottomRight';
    const RECTANGLE_ALIGN_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRectangleAlignAllowableValues()
    {
        return [
            self::RECTANGLE_ALIGN_TOP_LEFT,
            self::RECTANGLE_ALIGN_TOP,
            self::RECTANGLE_ALIGN_TOP_RIGHT,
            self::RECTANGLE_ALIGN_LEFT,
            self::RECTANGLE_ALIGN_CENTER,
            self::RECTANGLE_ALIGN_RIGHT,
            self::RECTANGLE_ALIGN_BOTTOM_LEFT,
            self::RECTANGLE_ALIGN_BOTTOM,
            self::RECTANGLE_ALIGN_BOTTOM_RIGHT,
            self::RECTANGLE_ALIGN_NOT_DEFINED,
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['fadeDirection'] = isset($data['fadeDirection']) ? $data['fadeDirection'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['blurRadius'] = isset($data['blurRadius']) ? $data['blurRadius'] : null;
        $this->container['scaleHorizontal'] = isset($data['scaleHorizontal']) ? $data['scaleHorizontal'] : null;
        $this->container['scaleVertical'] = isset($data['scaleVertical']) ? $data['scaleVertical'] : null;
        $this->container['skewHorizontal'] = isset($data['skewHorizontal']) ? $data['skewHorizontal'] : null;
        $this->container['skewVertical'] = isset($data['skewVertical']) ? $data['skewVertical'] : null;
        $this->container['startPosAlpha'] = isset($data['startPosAlpha']) ? $data['startPosAlpha'] : null;
        $this->container['endPosAlpha'] = isset($data['endPosAlpha']) ? $data['endPosAlpha'] : null;
        $this->container['startReflectionOpacity'] = isset($data['startReflectionOpacity']) ? $data['startReflectionOpacity'] : null;
        $this->container['endReflectionOpacity'] = isset($data['endReflectionOpacity']) ? $data['endReflectionOpacity'] : null;
        $this->container['rectangleAlign'] = isset($data['rectangleAlign']) ? $data['rectangleAlign'] : null;
        $this->container['rotateShadowWithShape'] = isset($data['rotateShadowWithShape']) ? $data['rotateShadowWithShape'] : null;
        
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
        if ($this->container['fadeDirection'] === null) {
            $invalidProperties[] = "'fadeDirection' can't be null";
        }
        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['blurRadius'] === null) {
            $invalidProperties[] = "'blurRadius' can't be null";
        }
        if ($this->container['scaleHorizontal'] === null) {
            $invalidProperties[] = "'scaleHorizontal' can't be null";
        }
        if ($this->container['scaleVertical'] === null) {
            $invalidProperties[] = "'scaleVertical' can't be null";
        }
        if ($this->container['skewHorizontal'] === null) {
            $invalidProperties[] = "'skewHorizontal' can't be null";
        }
        if ($this->container['skewVertical'] === null) {
            $invalidProperties[] = "'skewVertical' can't be null";
        }
        if ($this->container['startPosAlpha'] === null) {
            $invalidProperties[] = "'startPosAlpha' can't be null";
        }
        if ($this->container['endPosAlpha'] === null) {
            $invalidProperties[] = "'endPosAlpha' can't be null";
        }
        if ($this->container['startReflectionOpacity'] === null) {
            $invalidProperties[] = "'startReflectionOpacity' can't be null";
        }
        if ($this->container['endReflectionOpacity'] === null) {
            $invalidProperties[] = "'endReflectionOpacity' can't be null";
        }
        if ($this->container['rectangleAlign'] === null) {
            $invalidProperties[] = "'rectangleAlign' can't be null";
        }
        $allowedValues = $this->getRectangleAlignAllowableValues();
        if (!in_array($this->container['rectangleAlign'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rectangleAlign', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rotateShadowWithShape'] === null) {
            $invalidProperties[] = "'rotateShadowWithShape' can't be null";
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
        if ($this->container['fadeDirection'] === null) {
            return false;
        }
        if ($this->container['distance'] === null) {
            return false;
        }
        if ($this->container['blurRadius'] === null) {
            return false;
        }
        if ($this->container['scaleHorizontal'] === null) {
            return false;
        }
        if ($this->container['scaleVertical'] === null) {
            return false;
        }
        if ($this->container['skewHorizontal'] === null) {
            return false;
        }
        if ($this->container['skewVertical'] === null) {
            return false;
        }
        if ($this->container['startPosAlpha'] === null) {
            return false;
        }
        if ($this->container['endPosAlpha'] === null) {
            return false;
        }
        if ($this->container['startReflectionOpacity'] === null) {
            return false;
        }
        if ($this->container['endReflectionOpacity'] === null) {
            return false;
        }
        if ($this->container['rectangleAlign'] === null) {
            return false;
        }
        $allowedValues = $this->getRectangleAlignAllowableValues();
        if (!in_array($this->container['rectangleAlign'], $allowedValues)) {
            return false;
        }
        if ($this->container['rotateShadowWithShape'] === null) {
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
     * Gets fadeDirection
     *
     * @return double
     */
    public function getFadeDirection()
    {
        return $this->container['fadeDirection'];
    }

    /**
     * Sets fadeDirection
     *
     * @param double $fadeDirection fade direction
     *
     * @return $this
     */
    public function setFadeDirection($fadeDirection)
    {
        $this->container['fadeDirection'] = $fadeDirection;

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
     * Gets blurRadius
     *
     * @return double
     */
    public function getBlurRadius()
    {
        return $this->container['blurRadius'];
    }

    /**
     * Sets blurRadius
     *
     * @param double $blurRadius blur radius
     *
     * @return $this
     */
    public function setBlurRadius($blurRadius)
    {
        $this->container['blurRadius'] = $blurRadius;

        return $this;
    }

    /**
     * Gets scaleHorizontal
     *
     * @return double
     */
    public function getScaleHorizontal()
    {
        return $this->container['scaleHorizontal'];
    }

    /**
     * Sets scaleHorizontal
     *
     * @param double $scaleHorizontal scale horizontal
     *
     * @return $this
     */
    public function setScaleHorizontal($scaleHorizontal)
    {
        $this->container['scaleHorizontal'] = $scaleHorizontal;

        return $this;
    }

    /**
     * Gets scaleVertical
     *
     * @return double
     */
    public function getScaleVertical()
    {
        return $this->container['scaleVertical'];
    }

    /**
     * Sets scaleVertical
     *
     * @param double $scaleVertical scale vertical
     *
     * @return $this
     */
    public function setScaleVertical($scaleVertical)
    {
        $this->container['scaleVertical'] = $scaleVertical;

        return $this;
    }

    /**
     * Gets skewHorizontal
     *
     * @return double
     */
    public function getSkewHorizontal()
    {
        return $this->container['skewHorizontal'];
    }

    /**
     * Sets skewHorizontal
     *
     * @param double $skewHorizontal skew horizontal
     *
     * @return $this
     */
    public function setSkewHorizontal($skewHorizontal)
    {
        $this->container['skewHorizontal'] = $skewHorizontal;

        return $this;
    }

    /**
     * Gets skewVertical
     *
     * @return double
     */
    public function getSkewVertical()
    {
        return $this->container['skewVertical'];
    }

    /**
     * Sets skewVertical
     *
     * @param double $skewVertical skew vertical
     *
     * @return $this
     */
    public function setSkewVertical($skewVertical)
    {
        $this->container['skewVertical'] = $skewVertical;

        return $this;
    }

    /**
     * Gets startPosAlpha
     *
     * @return double
     */
    public function getStartPosAlpha()
    {
        return $this->container['startPosAlpha'];
    }

    /**
     * Sets startPosAlpha
     *
     * @param double $startPosAlpha start pos alpha
     *
     * @return $this
     */
    public function setStartPosAlpha($startPosAlpha)
    {
        $this->container['startPosAlpha'] = $startPosAlpha;

        return $this;
    }

    /**
     * Gets endPosAlpha
     *
     * @return double
     */
    public function getEndPosAlpha()
    {
        return $this->container['endPosAlpha'];
    }

    /**
     * Sets endPosAlpha
     *
     * @param double $endPosAlpha end pos alpha
     *
     * @return $this
     */
    public function setEndPosAlpha($endPosAlpha)
    {
        $this->container['endPosAlpha'] = $endPosAlpha;

        return $this;
    }

    /**
     * Gets startReflectionOpacity
     *
     * @return double
     */
    public function getStartReflectionOpacity()
    {
        return $this->container['startReflectionOpacity'];
    }

    /**
     * Sets startReflectionOpacity
     *
     * @param double $startReflectionOpacity start reflection opacity
     *
     * @return $this
     */
    public function setStartReflectionOpacity($startReflectionOpacity)
    {
        $this->container['startReflectionOpacity'] = $startReflectionOpacity;

        return $this;
    }

    /**
     * Gets endReflectionOpacity
     *
     * @return double
     */
    public function getEndReflectionOpacity()
    {
        return $this->container['endReflectionOpacity'];
    }

    /**
     * Sets endReflectionOpacity
     *
     * @param double $endReflectionOpacity end reflection opacity
     *
     * @return $this
     */
    public function setEndReflectionOpacity($endReflectionOpacity)
    {
        $this->container['endReflectionOpacity'] = $endReflectionOpacity;

        return $this;
    }

    /**
     * Gets rectangleAlign
     *
     * @return string
     */
    public function getRectangleAlign()
    {
        return $this->container['rectangleAlign'];
    }

    /**
     * Sets rectangleAlign
     *
     * @param string $rectangleAlign rectangle alignment
     *
     * @return $this
     */
    public function setRectangleAlign($rectangleAlign)
    {
        $allowedValues = $this->getRectangleAlignAllowableValues();


        if (is_numeric($rectangleAlign)) {
            if ($rectangleAlign >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rectangleAlign', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $rectangleAlign = $allowedValues[$rectangleAlign];
            }
        } else {
            if (!in_array($rectangleAlign, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rectangleAlign', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['rectangleAlign'] = $rectangleAlign;

        return $this;
    }

    /**
     * Gets rotateShadowWithShape
     *
     * @return bool
     */
    public function getRotateShadowWithShape()
    {
        return $this->container['rotateShadowWithShape'];
    }

    /**
     * Sets rotateShadowWithShape
     *
     * @param bool $rotateShadowWithShape true if the reflection should rotate with the shape when the shape is rotated
     *
     * @return $this
     */
    public function setRotateShadowWithShape($rotateShadowWithShape)
    {
        $this->container['rotateShadowWithShape'] = $rotateShadowWithShape;

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


