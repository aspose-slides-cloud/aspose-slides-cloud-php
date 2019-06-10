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
 * GradientFill Class Doc Comment
 *
 * @category Class
 * @description Represents gradient fill format
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GradientFill extends FillFormat 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GradientFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direction' => 'string',
        'shape' => 'string',
        'stops' => '\Aspose\Slides\Cloud\Sdk\Model\GradientFillStop[]',
        'linear_angle' => 'double',
        'is_scaled' => 'bool',
        'tile_flip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => null,
        'shape' => null,
        'stops' => null,
        'linear_angle' => 'double',
        'is_scaled' => null,
        'tile_flip' => null
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
        'direction' => 'Direction',
        'shape' => 'Shape',
        'stops' => 'Stops',
        'linear_angle' => 'LinearAngle',
        'is_scaled' => 'IsScaled',
        'tile_flip' => 'TileFlip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'shape' => 'setShape',
        'stops' => 'setStops',
        'linear_angle' => 'setLinearAngle',
        'is_scaled' => 'setIsScaled',
        'tile_flip' => 'setTileFlip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'shape' => 'getShape',
        'stops' => 'getStops',
        'linear_angle' => 'getLinearAngle',
        'is_scaled' => 'getIsScaled',
        'tile_flip' => 'getTileFlip'
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

    const DIRECTION_FROM_CORNER1 = 'FromCorner1';
    const DIRECTION_FROM_CORNER2 = 'FromCorner2';
    const DIRECTION_FROM_CORNER3 = 'FromCorner3';
    const DIRECTION_FROM_CORNER4 = 'FromCorner4';
    const DIRECTION_FROM_CENTER = 'FromCenter';
    const DIRECTION_NOT_DEFINED = 'NotDefined';
    const SHAPE_LINEAR = 'Linear';
    const SHAPE_RECTANGLE = 'Rectangle';
    const SHAPE_RADIAL = 'Radial';
    const SHAPE_PATH = 'Path';
    const SHAPE_NOT_DEFINED = 'NotDefined';
    const TILE_FLIP_NO_FLIP = 'NoFlip';
    const TILE_FLIP_FLIP_X = 'FlipX';
    const TILE_FLIP_FLIP_Y = 'FlipY';
    const TILE_FLIP_FLIP_BOTH = 'FlipBoth';
    const TILE_FLIP_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_FROM_CORNER1,
            self::DIRECTION_FROM_CORNER2,
            self::DIRECTION_FROM_CORNER3,
            self::DIRECTION_FROM_CORNER4,
            self::DIRECTION_FROM_CENTER,
            self::DIRECTION_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeAllowableValues()
    {
        return [
            self::SHAPE_LINEAR,
            self::SHAPE_RECTANGLE,
            self::SHAPE_RADIAL,
            self::SHAPE_PATH,
            self::SHAPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTileFlipAllowableValues()
    {
        return [
            self::TILE_FLIP_NO_FLIP,
            self::TILE_FLIP_FLIP_X,
            self::TILE_FLIP_FLIP_Y,
            self::TILE_FLIP_FLIP_BOTH,
            self::TILE_FLIP_NOT_DEFINED,
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

        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['shape'] = isset($data['shape']) ? $data['shape'] : null;
        $this->container['stops'] = isset($data['stops']) ? $data['stops'] : null;
        $this->container['linear_angle'] = isset($data['linear_angle']) ? $data['linear_angle'] : null;
        $this->container['is_scaled'] = isset($data['is_scaled']) ? $data['is_scaled'] : null;
        $this->container['tile_flip'] = isset($data['tile_flip']) ? $data['tile_flip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($this->container['direction'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shape'] === null) {
            $invalidProperties[] = "'shape' can't be null";
        }
        $allowedValues = $this->getShapeAllowableValues();
        if (!in_array($this->container['shape'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shape', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['linear_angle'] === null) {
            $invalidProperties[] = "'linear_angle' can't be null";
        }
        if ($this->container['is_scaled'] === null) {
            $invalidProperties[] = "'is_scaled' can't be null";
        }
        if ($this->container['tile_flip'] === null) {
            $invalidProperties[] = "'tile_flip' can't be null";
        }
        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($this->container['tile_flip'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tile_flip', must be one of '%s'",
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

        if ($this->container['direction'] === null) {
            return false;
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($this->container['direction'], $allowedValues)) {
            return false;
        }
        if ($this->container['shape'] === null) {
            return false;
        }
        $allowedValues = $this->getShapeAllowableValues();
        if (!in_array($this->container['shape'], $allowedValues)) {
            return false;
        }
        if ($this->container['linear_angle'] === null) {
            return false;
        }
        if ($this->container['is_scaled'] === null) {
            return false;
        }
        if ($this->container['tile_flip'] === null) {
            return false;
        }
        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($this->container['tile_flip'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Gradient style.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($direction, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return string
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param string $shape Gradient shape.
     *
     * @return $this
     */
    public function setShape($shape)
    {
        $allowedValues = $this->getShapeAllowableValues();
        if (!in_array($shape, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shape', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets stops
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\GradientFillStop[]
     */
    public function getStops()
    {
        return $this->container['stops'];
    }

    /**
     * Sets stops
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\GradientFillStop[] $stops Gradient stops.
     *
     * @return $this
     */
    public function setStops($stops)
    {
        $this->container['stops'] = $stops;

        return $this;
    }

    /**
     * Gets linear_angle
     *
     * @return double
     */
    public function getLinearAngle()
    {
        return $this->container['linear_angle'];
    }

    /**
     * Sets linear_angle
     *
     * @param double $linear_angle Gradient angle.
     *
     * @return $this
     */
    public function setLinearAngle($linear_angle)
    {
        $this->container['linear_angle'] = $linear_angle;

        return $this;
    }

    /**
     * Gets is_scaled
     *
     * @return bool
     */
    public function getIsScaled()
    {
        return $this->container['is_scaled'];
    }

    /**
     * Sets is_scaled
     *
     * @param bool $is_scaled True if the gradient is scaled.
     *
     * @return $this
     */
    public function setIsScaled($is_scaled)
    {
        $this->container['is_scaled'] = $is_scaled;

        return $this;
    }

    /**
     * Gets tile_flip
     *
     * @return string
     */
    public function getTileFlip()
    {
        return $this->container['tile_flip'];
    }

    /**
     * Sets tile_flip
     *
     * @param string $tile_flip Gradient flipping mode.
     *
     * @return $this
     */
    public function setTileFlip($tile_flip)
    {
        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($tile_flip, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tile_flip', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tile_flip'] = $tile_flip;

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


