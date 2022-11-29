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
 * LightRig Class Doc Comment
 *
 * @category Class
 * @description Light rig
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LightRig implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LightRig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direction' => 'string',
        'lightType' => 'string',
        'xRotation' => 'double',
        'yRotation' => 'double',
        'zRotation' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => null,
        'lightType' => null,
        'xRotation' => 'double',
        'yRotation' => 'double',
        'zRotation' => 'double'
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
        'lightType' => 'LightType',
        'xRotation' => 'XRotation',
        'yRotation' => 'YRotation',
        'zRotation' => 'ZRotation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'lightType' => 'setLightType',
        'xRotation' => 'setXRotation',
        'yRotation' => 'setYRotation',
        'zRotation' => 'setZRotation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'lightType' => 'getLightType',
        'xRotation' => 'getXRotation',
        'yRotation' => 'getYRotation',
        'zRotation' => 'getZRotation'
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

    const DIRECTION_TOP_LEFT = 'TopLeft';
    const DIRECTION_TOP = 'Top';
    const DIRECTION_TOP_RIGHT = 'TopRight';
    const DIRECTION_RIGHT = 'Right';
    const DIRECTION_BOTTOM_RIGHT = 'BottomRight';
    const DIRECTION_BOTTOM = 'Bottom';
    const DIRECTION_BOTTOM_LEFT = 'BottomLeft';
    const DIRECTION_LEFT = 'Left';
    const DIRECTION_NOT_DEFINED = 'NotDefined';
    const LIGHT_TYPE_BALANCED = 'Balanced';
    const LIGHT_TYPE_BRIGHT_ROOM = 'BrightRoom';
    const LIGHT_TYPE_CHILLY = 'Chilly';
    const LIGHT_TYPE_CONTRASTING = 'Contrasting';
    const LIGHT_TYPE_FLAT = 'Flat';
    const LIGHT_TYPE_FLOOD = 'Flood';
    const LIGHT_TYPE_FREEZING = 'Freezing';
    const LIGHT_TYPE_GLOW = 'Glow';
    const LIGHT_TYPE_HARSH = 'Harsh';
    const LIGHT_TYPE_LEGACY_FLAT1 = 'LegacyFlat1';
    const LIGHT_TYPE_LEGACY_FLAT2 = 'LegacyFlat2';
    const LIGHT_TYPE_LEGACY_FLAT3 = 'LegacyFlat3';
    const LIGHT_TYPE_LEGACY_FLAT4 = 'LegacyFlat4';
    const LIGHT_TYPE_LEGACY_HARSH1 = 'LegacyHarsh1';
    const LIGHT_TYPE_LEGACY_HARSH2 = 'LegacyHarsh2';
    const LIGHT_TYPE_LEGACY_HARSH3 = 'LegacyHarsh3';
    const LIGHT_TYPE_LEGACY_HARSH4 = 'LegacyHarsh4';
    const LIGHT_TYPE_LEGACY_NORMAL1 = 'LegacyNormal1';
    const LIGHT_TYPE_LEGACY_NORMAL2 = 'LegacyNormal2';
    const LIGHT_TYPE_LEGACY_NORMAL3 = 'LegacyNormal3';
    const LIGHT_TYPE_LEGACY_NORMAL4 = 'LegacyNormal4';
    const LIGHT_TYPE_MORNING = 'Morning';
    const LIGHT_TYPE_SOFT = 'Soft';
    const LIGHT_TYPE_SUNRISE = 'Sunrise';
    const LIGHT_TYPE_SUNSET = 'Sunset';
    const LIGHT_TYPE_THREE_PT = 'ThreePt';
    const LIGHT_TYPE_TWO_PT = 'TwoPt';
    const LIGHT_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_TOP_LEFT,
            self::DIRECTION_TOP,
            self::DIRECTION_TOP_RIGHT,
            self::DIRECTION_RIGHT,
            self::DIRECTION_BOTTOM_RIGHT,
            self::DIRECTION_BOTTOM,
            self::DIRECTION_BOTTOM_LEFT,
            self::DIRECTION_LEFT,
            self::DIRECTION_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLightTypeAllowableValues()
    {
        return [
            self::LIGHT_TYPE_BALANCED,
            self::LIGHT_TYPE_BRIGHT_ROOM,
            self::LIGHT_TYPE_CHILLY,
            self::LIGHT_TYPE_CONTRASTING,
            self::LIGHT_TYPE_FLAT,
            self::LIGHT_TYPE_FLOOD,
            self::LIGHT_TYPE_FREEZING,
            self::LIGHT_TYPE_GLOW,
            self::LIGHT_TYPE_HARSH,
            self::LIGHT_TYPE_LEGACY_FLAT1,
            self::LIGHT_TYPE_LEGACY_FLAT2,
            self::LIGHT_TYPE_LEGACY_FLAT3,
            self::LIGHT_TYPE_LEGACY_FLAT4,
            self::LIGHT_TYPE_LEGACY_HARSH1,
            self::LIGHT_TYPE_LEGACY_HARSH2,
            self::LIGHT_TYPE_LEGACY_HARSH3,
            self::LIGHT_TYPE_LEGACY_HARSH4,
            self::LIGHT_TYPE_LEGACY_NORMAL1,
            self::LIGHT_TYPE_LEGACY_NORMAL2,
            self::LIGHT_TYPE_LEGACY_NORMAL3,
            self::LIGHT_TYPE_LEGACY_NORMAL4,
            self::LIGHT_TYPE_MORNING,
            self::LIGHT_TYPE_SOFT,
            self::LIGHT_TYPE_SUNRISE,
            self::LIGHT_TYPE_SUNSET,
            self::LIGHT_TYPE_THREE_PT,
            self::LIGHT_TYPE_TWO_PT,
            self::LIGHT_TYPE_NOT_DEFINED,
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
        $this->container['lightType'] = isset($data['lightType']) ? $data['lightType'] : null;
        $this->container['xRotation'] = isset($data['xRotation']) ? $data['xRotation'] : null;
        $this->container['yRotation'] = isset($data['yRotation']) ? $data['yRotation'] : null;
        $this->container['zRotation'] = isset($data['zRotation']) ? $data['zRotation'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($this->container['direction'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLightTypeAllowableValues();
        if (!in_array($this->container['lightType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'lightType', must be one of '%s'",
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

        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($this->container['direction'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLightTypeAllowableValues();
        if (!in_array($this->container['lightType'], $allowedValues)) {
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
     * @param string $direction Light direction
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
            if (!is_null($direction) && !in_array($direction, $allowedValues)) {
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
     * Gets lightType
     *
     * @return string
     */
    public function getLightType()
    {
        return $this->container['lightType'];
    }

    /**
     * Sets lightType
     *
     * @param string $lightType Light type
     *
     * @return $this
     */
    public function setLightType($lightType)
    {
        $allowedValues = $this->getLightTypeAllowableValues();


        if (is_numeric($lightType)) {
            if ($lightType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'lightType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $lightType = $allowedValues[$lightType];
            }
        } else {
            if (!is_null($lightType) && !in_array($lightType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'lightType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['lightType'] = $lightType;

        return $this;
    }

    /**
     * Gets xRotation
     *
     * @return double
     */
    public function getXRotation()
    {
        return $this->container['xRotation'];
    }

    /**
     * Sets xRotation
     *
     * @param double $xRotation XRotation
     *
     * @return $this
     */
    public function setXRotation($xRotation)
    {
        $this->container['xRotation'] = $xRotation;

        return $this;
    }

    /**
     * Gets yRotation
     *
     * @return double
     */
    public function getYRotation()
    {
        return $this->container['yRotation'];
    }

    /**
     * Sets yRotation
     *
     * @param double $yRotation YRotation
     *
     * @return $this
     */
    public function setYRotation($yRotation)
    {
        $this->container['yRotation'] = $yRotation;

        return $this;
    }

    /**
     * Gets zRotation
     *
     * @return double
     */
    public function getZRotation()
    {
        return $this->container['zRotation'];
    }

    /**
     * Sets zRotation
     *
     * @param double $zRotation ZRotation
     *
     * @return $this
     */
    public function setZRotation($zRotation)
    {
        $this->container['zRotation'] = $zRotation;

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


