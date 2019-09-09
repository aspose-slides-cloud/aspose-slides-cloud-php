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
 * PresetShadowEffect Class Doc Comment
 *
 * @category Class
 * @description Represents preset shadow effect
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PresetShadowEffect implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PresetShadowEffect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direction' => 'double',
        'distance' => 'double',
        'preset' => 'string',
        'shadowColor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => 'double',
        'distance' => 'double',
        'preset' => null,
        'shadowColor' => null
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
        'distance' => 'Distance',
        'preset' => 'Preset',
        'shadowColor' => 'ShadowColor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'distance' => 'setDistance',
        'preset' => 'setPreset',
        'shadowColor' => 'setShadowColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'distance' => 'getDistance',
        'preset' => 'getPreset',
        'shadowColor' => 'getShadowColor'
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

    const PRESET_TOP_LEFT_DROP_SHADOW = 'TopLeftDropShadow';
    const PRESET_TOP_LEFT_LARGE_DROP_SHADOW = 'TopLeftLargeDropShadow';
    const PRESET_BACK_LEFT_LONG_PERSPECTIVE_SHADOW = 'BackLeftLongPerspectiveShadow';
    const PRESET_BACK_RIGHT_LONG_PERSPECTIVE_SHADOW = 'BackRightLongPerspectiveShadow';
    const PRESET_TOP_LEFT_DOUBLE_DROP_SHADOW = 'TopLeftDoubleDropShadow';
    const PRESET_BOTTOM_RIGHT_SMALL_DROP_SHADOW = 'BottomRightSmallDropShadow';
    const PRESET_FRONT_LEFT_LONG_PERSPECTIVE_SHADOW = 'FrontLeftLongPerspectiveShadow';
    const PRESET_FRONT_RIGHT_LONG_PERSPECTIVE_SHADOW = 'FrontRightLongPerspectiveShadow';
    const PRESET_OUTER_BOX_SHADOW3_D = 'OuterBoxShadow3D';
    const PRESET_INNER_BOX_SHADOW3_D = 'InnerBoxShadow3D';
    const PRESET_BACK_CENTER_PERSPECTIVE_SHADOW = 'BackCenterPerspectiveShadow';
    const PRESET_TOP_RIGHT_DROP_SHADOW = 'TopRightDropShadow';
    const PRESET_FRONT_BOTTOM_SHADOW = 'FrontBottomShadow';
    const PRESET_BACK_LEFT_PERSPECTIVE_SHADOW = 'BackLeftPerspectiveShadow';
    const PRESET_BACK_RIGHT_PERSPECTIVE_SHADOW = 'BackRightPerspectiveShadow';
    const PRESET_BOTTOM_LEFT_DROP_SHADOW = 'BottomLeftDropShadow';
    const PRESET_BOTTOM_RIGHT_DROP_SHADOW = 'BottomRightDropShadow';
    const PRESET_FRONT_LEFT_PERSPECTIVE_SHADOW = 'FrontLeftPerspectiveShadow';
    const PRESET_FRONT_RIGHT_PERSPECTIVE_SHADOW = 'FrontRightPerspectiveShadow';
    const PRESET_TOP_LEFT_SMALL_DROP_SHADOW = 'TopLeftSmallDropShadow';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPresetAllowableValues()
    {
        return [
            self::PRESET_TOP_LEFT_DROP_SHADOW,
            self::PRESET_TOP_LEFT_LARGE_DROP_SHADOW,
            self::PRESET_BACK_LEFT_LONG_PERSPECTIVE_SHADOW,
            self::PRESET_BACK_RIGHT_LONG_PERSPECTIVE_SHADOW,
            self::PRESET_TOP_LEFT_DOUBLE_DROP_SHADOW,
            self::PRESET_BOTTOM_RIGHT_SMALL_DROP_SHADOW,
            self::PRESET_FRONT_LEFT_LONG_PERSPECTIVE_SHADOW,
            self::PRESET_FRONT_RIGHT_LONG_PERSPECTIVE_SHADOW,
            self::PRESET_OUTER_BOX_SHADOW3_D,
            self::PRESET_INNER_BOX_SHADOW3_D,
            self::PRESET_BACK_CENTER_PERSPECTIVE_SHADOW,
            self::PRESET_TOP_RIGHT_DROP_SHADOW,
            self::PRESET_FRONT_BOTTOM_SHADOW,
            self::PRESET_BACK_LEFT_PERSPECTIVE_SHADOW,
            self::PRESET_BACK_RIGHT_PERSPECTIVE_SHADOW,
            self::PRESET_BOTTOM_LEFT_DROP_SHADOW,
            self::PRESET_BOTTOM_RIGHT_DROP_SHADOW,
            self::PRESET_FRONT_LEFT_PERSPECTIVE_SHADOW,
            self::PRESET_FRONT_RIGHT_PERSPECTIVE_SHADOW,
            self::PRESET_TOP_LEFT_SMALL_DROP_SHADOW,
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
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['preset'] = isset($data['preset']) ? $data['preset'] : null;
        $this->container['shadowColor'] = isset($data['shadowColor']) ? $data['shadowColor'] : null;
        
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
        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['preset'] === null) {
            $invalidProperties[] = "'preset' can't be null";
        }
        $allowedValues = $this->getPresetAllowableValues();
        if (!in_array($this->container['preset'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preset', must be one of '%s'",
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

        if ($this->container['direction'] === null) {
            return false;
        }
        if ($this->container['distance'] === null) {
            return false;
        }
        if ($this->container['preset'] === null) {
            return false;
        }
        $allowedValues = $this->getPresetAllowableValues();
        if (!in_array($this->container['preset'], $allowedValues)) {
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
     * Gets preset
     *
     * @return string
     */
    public function getPreset()
    {
        return $this->container['preset'];
    }

    /**
     * Sets preset
     *
     * @param string $preset preset
     *
     * @return $this
     */
    public function setPreset($preset)
    {
        $allowedValues = $this->getPresetAllowableValues();


        if (is_numeric($preset)) {
            if ($preset >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'preset', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $preset = $allowedValues[$preset];
            }
        } else {
            if (!in_array($preset, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'preset', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['preset'] = $preset;

        return $this;
    }

    /**
     * Gets shadowColor
     *
     * @return string
     */
    public function getShadowColor()
    {
        return $this->container['shadowColor'];
    }

    /**
     * Sets shadowColor
     *
     * @param string $shadowColor shadow color
     *
     * @return $this
     */
    public function setShadowColor($shadowColor)
    {
        $this->container['shadowColor'] = $shadowColor;

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


