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
        'linearAngle' => 'double',
        'isScaled' => 'bool',
        'tileFlip' => 'string'
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
        'linearAngle' => 'double',
        'isScaled' => null,
        'tileFlip' => null
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
        'linearAngle' => 'LinearAngle',
        'isScaled' => 'IsScaled',
        'tileFlip' => 'TileFlip'
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
        'linearAngle' => 'setLinearAngle',
        'isScaled' => 'setIsScaled',
        'tileFlip' => 'setTileFlip'
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
        'linearAngle' => 'getLinearAngle',
        'isScaled' => 'getIsScaled',
        'tileFlip' => 'getTileFlip'
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
        $this->container['linearAngle'] = isset($data['linearAngle']) ? $data['linearAngle'] : null;
        $this->container['isScaled'] = isset($data['isScaled']) ? $data['isScaled'] : null;
        $this->container['tileFlip'] = isset($data['tileFlip']) ? $data['tileFlip'] : null;
        $this->container['type'] = 'Gradient';
        
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

        if ($this->container['linearAngle'] === null) {
            $invalidProperties[] = "'linearAngle' can't be null";
        }
        if ($this->container['isScaled'] === null) {
            $invalidProperties[] = "'isScaled' can't be null";
        }
        if ($this->container['tileFlip'] === null) {
            $invalidProperties[] = "'tileFlip' can't be null";
        }
        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($this->container['tileFlip'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tileFlip', must be one of '%s'",
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
        if ($this->container['linearAngle'] === null) {
            return false;
        }
        if ($this->container['isScaled'] === null) {
            return false;
        }
        if ($this->container['tileFlip'] === null) {
            return false;
        }
        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($this->container['tileFlip'], $allowedValues)) {
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


        if (is_numeric($direction)) {
            if ($direction >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'direction', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $direction = $allowedValues[$direction];
            }
        } else {
            if (!in_array($direction, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'direction', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
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


        if (is_numeric($shape)) {
            if ($shape >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'shape', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $shape = $allowedValues[$shape];
            }
        } else {
            if (!in_array($shape, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'shape', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
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
     * Gets linearAngle
     *
     * @return double
     */
    public function getLinearAngle()
    {
        return $this->container['linearAngle'];
    }

    /**
     * Sets linearAngle
     *
     * @param double $linearAngle Gradient angle.
     *
     * @return $this
     */
    public function setLinearAngle($linearAngle)
    {
        $this->container['linearAngle'] = $linearAngle;

        return $this;
    }

    /**
     * Gets isScaled
     *
     * @return bool
     */
    public function getIsScaled()
    {
        return $this->container['isScaled'];
    }

    /**
     * Sets isScaled
     *
     * @param bool $isScaled True if the gradient is scaled.
     *
     * @return $this
     */
    public function setIsScaled($isScaled)
    {
        $this->container['isScaled'] = $isScaled;

        return $this;
    }

    /**
     * Gets tileFlip
     *
     * @return string
     */
    public function getTileFlip()
    {
        return $this->container['tileFlip'];
    }

    /**
     * Sets tileFlip
     *
     * @param string $tileFlip Gradient flipping mode.
     *
     * @return $this
     */
    public function setTileFlip($tileFlip)
    {
        $allowedValues = $this->getTileFlipAllowableValues();


        if (is_numeric($tileFlip)) {
            if ($tileFlip >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tileFlip', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $tileFlip = $allowedValues[$tileFlip];
            }
        } else {
            if (!in_array($tileFlip, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tileFlip', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['tileFlip'] = $tileFlip;

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


