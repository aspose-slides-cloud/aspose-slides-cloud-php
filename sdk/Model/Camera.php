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
 * Camera Class Doc Comment
 *
 * @category Class
 * @description Camera
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Camera implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Camera';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cameraType' => 'string',
        'fieldOfViewAngle' => 'double',
        'zoom' => 'double',
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
        'cameraType' => null,
        'fieldOfViewAngle' => 'double',
        'zoom' => 'double',
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
        'cameraType' => 'CameraType',
        'fieldOfViewAngle' => 'FieldOfViewAngle',
        'zoom' => 'Zoom',
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
        'cameraType' => 'setCameraType',
        'fieldOfViewAngle' => 'setFieldOfViewAngle',
        'zoom' => 'setZoom',
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
        'cameraType' => 'getCameraType',
        'fieldOfViewAngle' => 'getFieldOfViewAngle',
        'zoom' => 'getZoom',
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

    const CAMERA_TYPE_ISOMETRIC_BOTTOM_DOWN = 'IsometricBottomDown';
    const CAMERA_TYPE_ISOMETRIC_BOTTOM_UP = 'IsometricBottomUp';
    const CAMERA_TYPE_ISOMETRIC_LEFT_DOWN = 'IsometricLeftDown';
    const CAMERA_TYPE_ISOMETRIC_LEFT_UP = 'IsometricLeftUp';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS1_LEFT = 'IsometricOffAxis1Left';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS1_RIGHT = 'IsometricOffAxis1Right';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS1_TOP = 'IsometricOffAxis1Top';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS2_LEFT = 'IsometricOffAxis2Left';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS2_RIGHT = 'IsometricOffAxis2Right';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS2_TOP = 'IsometricOffAxis2Top';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS3_BOTTOM = 'IsometricOffAxis3Bottom';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS3_LEFT = 'IsometricOffAxis3Left';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS3_RIGHT = 'IsometricOffAxis3Right';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS4_BOTTOM = 'IsometricOffAxis4Bottom';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS4_LEFT = 'IsometricOffAxis4Left';
    const CAMERA_TYPE_ISOMETRIC_OFF_AXIS4_RIGHT = 'IsometricOffAxis4Right';
    const CAMERA_TYPE_ISOMETRIC_RIGHT_DOWN = 'IsometricRightDown';
    const CAMERA_TYPE_ISOMETRIC_RIGHT_UP = 'IsometricRightUp';
    const CAMERA_TYPE_ISOMETRIC_TOP_DOWN = 'IsometricTopDown';
    const CAMERA_TYPE_ISOMETRIC_TOP_UP = 'IsometricTopUp';
    const CAMERA_TYPE_LEGACY_OBLIQUE_BOTTOM = 'LegacyObliqueBottom';
    const CAMERA_TYPE_LEGACY_OBLIQUE_BOTTOM_LEFT = 'LegacyObliqueBottomLeft';
    const CAMERA_TYPE_LEGACY_OBLIQUE_BOTTOM_RIGHT = 'LegacyObliqueBottomRight';
    const CAMERA_TYPE_LEGACY_OBLIQUE_FRONT = 'LegacyObliqueFront';
    const CAMERA_TYPE_LEGACY_OBLIQUE_LEFT = 'LegacyObliqueLeft';
    const CAMERA_TYPE_LEGACY_OBLIQUE_RIGHT = 'LegacyObliqueRight';
    const CAMERA_TYPE_LEGACY_OBLIQUE_TOP = 'LegacyObliqueTop';
    const CAMERA_TYPE_LEGACY_OBLIQUE_TOP_LEFT = 'LegacyObliqueTopLeft';
    const CAMERA_TYPE_LEGACY_OBLIQUE_TOP_RIGHT = 'LegacyObliqueTopRight';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_BOTTOM = 'LegacyPerspectiveBottom';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_BOTTOM_LEFT = 'LegacyPerspectiveBottomLeft';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_BOTTOM_RIGHT = 'LegacyPerspectiveBottomRight';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_FRONT = 'LegacyPerspectiveFront';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_LEFT = 'LegacyPerspectiveLeft';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_RIGHT = 'LegacyPerspectiveRight';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_TOP = 'LegacyPerspectiveTop';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_TOP_LEFT = 'LegacyPerspectiveTopLeft';
    const CAMERA_TYPE_LEGACY_PERSPECTIVE_TOP_RIGHT = 'LegacyPerspectiveTopRight';
    const CAMERA_TYPE_OBLIQUE_BOTTOM = 'ObliqueBottom';
    const CAMERA_TYPE_OBLIQUE_BOTTOM_LEFT = 'ObliqueBottomLeft';
    const CAMERA_TYPE_OBLIQUE_BOTTOM_RIGHT = 'ObliqueBottomRight';
    const CAMERA_TYPE_OBLIQUE_LEFT = 'ObliqueLeft';
    const CAMERA_TYPE_OBLIQUE_RIGHT = 'ObliqueRight';
    const CAMERA_TYPE_OBLIQUE_TOP = 'ObliqueTop';
    const CAMERA_TYPE_OBLIQUE_TOP_LEFT = 'ObliqueTopLeft';
    const CAMERA_TYPE_OBLIQUE_TOP_RIGHT = 'ObliqueTopRight';
    const CAMERA_TYPE_ORTHOGRAPHIC_FRONT = 'OrthographicFront';
    const CAMERA_TYPE_PERSPECTIVE_ABOVE = 'PerspectiveAbove';
    const CAMERA_TYPE_PERSPECTIVE_ABOVE_LEFT_FACING = 'PerspectiveAboveLeftFacing';
    const CAMERA_TYPE_PERSPECTIVE_ABOVE_RIGHT_FACING = 'PerspectiveAboveRightFacing';
    const CAMERA_TYPE_PERSPECTIVE_BELOW = 'PerspectiveBelow';
    const CAMERA_TYPE_PERSPECTIVE_CONTRASTING_LEFT_FACING = 'PerspectiveContrastingLeftFacing';
    const CAMERA_TYPE_PERSPECTIVE_CONTRASTING_RIGHT_FACING = 'PerspectiveContrastingRightFacing';
    const CAMERA_TYPE_PERSPECTIVE_FRONT = 'PerspectiveFront';
    const CAMERA_TYPE_PERSPECTIVE_HEROIC_EXTREME_LEFT_FACING = 'PerspectiveHeroicExtremeLeftFacing';
    const CAMERA_TYPE_PERSPECTIVE_HEROIC_EXTREME_RIGHT_FACING = 'PerspectiveHeroicExtremeRightFacing';
    const CAMERA_TYPE_PERSPECTIVE_HEROIC_LEFT_FACING = 'PerspectiveHeroicLeftFacing';
    const CAMERA_TYPE_PERSPECTIVE_HEROIC_RIGHT_FACING = 'PerspectiveHeroicRightFacing';
    const CAMERA_TYPE_PERSPECTIVE_LEFT = 'PerspectiveLeft';
    const CAMERA_TYPE_PERSPECTIVE_RELAXED = 'PerspectiveRelaxed';
    const CAMERA_TYPE_PERSPECTIVE_RELAXED_MODERATELY = 'PerspectiveRelaxedModerately';
    const CAMERA_TYPE_PERSPECTIVE_RIGHT = 'PerspectiveRight';
    const CAMERA_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCameraTypeAllowableValues()
    {
        return [
            self::CAMERA_TYPE_ISOMETRIC_BOTTOM_DOWN,
            self::CAMERA_TYPE_ISOMETRIC_BOTTOM_UP,
            self::CAMERA_TYPE_ISOMETRIC_LEFT_DOWN,
            self::CAMERA_TYPE_ISOMETRIC_LEFT_UP,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS1_LEFT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS1_RIGHT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS1_TOP,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS2_LEFT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS2_RIGHT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS2_TOP,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS3_BOTTOM,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS3_LEFT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS3_RIGHT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS4_BOTTOM,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS4_LEFT,
            self::CAMERA_TYPE_ISOMETRIC_OFF_AXIS4_RIGHT,
            self::CAMERA_TYPE_ISOMETRIC_RIGHT_DOWN,
            self::CAMERA_TYPE_ISOMETRIC_RIGHT_UP,
            self::CAMERA_TYPE_ISOMETRIC_TOP_DOWN,
            self::CAMERA_TYPE_ISOMETRIC_TOP_UP,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_BOTTOM,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_BOTTOM_LEFT,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_BOTTOM_RIGHT,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_FRONT,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_LEFT,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_RIGHT,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_TOP,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_TOP_LEFT,
            self::CAMERA_TYPE_LEGACY_OBLIQUE_TOP_RIGHT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_BOTTOM,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_BOTTOM_LEFT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_BOTTOM_RIGHT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_FRONT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_LEFT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_RIGHT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_TOP,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_TOP_LEFT,
            self::CAMERA_TYPE_LEGACY_PERSPECTIVE_TOP_RIGHT,
            self::CAMERA_TYPE_OBLIQUE_BOTTOM,
            self::CAMERA_TYPE_OBLIQUE_BOTTOM_LEFT,
            self::CAMERA_TYPE_OBLIQUE_BOTTOM_RIGHT,
            self::CAMERA_TYPE_OBLIQUE_LEFT,
            self::CAMERA_TYPE_OBLIQUE_RIGHT,
            self::CAMERA_TYPE_OBLIQUE_TOP,
            self::CAMERA_TYPE_OBLIQUE_TOP_LEFT,
            self::CAMERA_TYPE_OBLIQUE_TOP_RIGHT,
            self::CAMERA_TYPE_ORTHOGRAPHIC_FRONT,
            self::CAMERA_TYPE_PERSPECTIVE_ABOVE,
            self::CAMERA_TYPE_PERSPECTIVE_ABOVE_LEFT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_ABOVE_RIGHT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_BELOW,
            self::CAMERA_TYPE_PERSPECTIVE_CONTRASTING_LEFT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_CONTRASTING_RIGHT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_FRONT,
            self::CAMERA_TYPE_PERSPECTIVE_HEROIC_EXTREME_LEFT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_HEROIC_EXTREME_RIGHT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_HEROIC_LEFT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_HEROIC_RIGHT_FACING,
            self::CAMERA_TYPE_PERSPECTIVE_LEFT,
            self::CAMERA_TYPE_PERSPECTIVE_RELAXED,
            self::CAMERA_TYPE_PERSPECTIVE_RELAXED_MODERATELY,
            self::CAMERA_TYPE_PERSPECTIVE_RIGHT,
            self::CAMERA_TYPE_NOT_DEFINED,
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
        $this->container['cameraType'] = isset($data['cameraType']) ? $data['cameraType'] : null;
        $this->container['fieldOfViewAngle'] = isset($data['fieldOfViewAngle']) ? $data['fieldOfViewAngle'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
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

        $allowedValues = $this->getCameraTypeAllowableValues();
        if (!in_array($this->container['cameraType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cameraType', must be one of '%s'",
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

        $allowedValues = $this->getCameraTypeAllowableValues();
        if (!in_array($this->container['cameraType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets cameraType
     *
     * @return string
     */
    public function getCameraType()
    {
        return $this->container['cameraType'];
    }

    /**
     * Sets cameraType
     *
     * @param string $cameraType Camera type
     *
     * @return $this
     */
    public function setCameraType($cameraType)
    {
        $allowedValues = $this->getCameraTypeAllowableValues();


        if (is_numeric($cameraType)) {
            if ($cameraType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'cameraType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $cameraType = $allowedValues[$cameraType];
            }
        } else {
            if (!is_null($cameraType) && !in_array($cameraType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'cameraType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['cameraType'] = $cameraType;

        return $this;
    }

    /**
     * Gets fieldOfViewAngle
     *
     * @return double
     */
    public function getFieldOfViewAngle()
    {
        return $this->container['fieldOfViewAngle'];
    }

    /**
     * Sets fieldOfViewAngle
     *
     * @param double $fieldOfViewAngle Camera FOV
     *
     * @return $this
     */
    public function setFieldOfViewAngle($fieldOfViewAngle)
    {
        $this->container['fieldOfViewAngle'] = $fieldOfViewAngle;

        return $this;
    }

    /**
     * Gets zoom
     *
     * @return double
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom
     *
     * @param double $zoom Camera zoom
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

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


