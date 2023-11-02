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
 * ThreeDFormat Class Doc Comment
 *
 * @category Class
 * @description ThreeDFormat
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThreeDFormat implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ThreeDFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bevelBottom' => '\Aspose\Slides\Cloud\Sdk\Model\ShapeBevel',
        'bevelTop' => '\Aspose\Slides\Cloud\Sdk\Model\ShapeBevel',
        'camera' => '\Aspose\Slides\Cloud\Sdk\Model\Camera',
        'contourColor' => 'string',
        'contourWidth' => 'double',
        'depth' => 'double',
        'extrusionColor' => 'string',
        'extrusionHeight' => 'double',
        'lightRig' => '\Aspose\Slides\Cloud\Sdk\Model\LightRig',
        'material' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bevelBottom' => null,
        'bevelTop' => null,
        'camera' => null,
        'contourColor' => null,
        'contourWidth' => 'double',
        'depth' => 'double',
        'extrusionColor' => null,
        'extrusionHeight' => 'double',
        'lightRig' => null,
        'material' => null
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
        'bevelBottom' => 'BevelBottom',
        'bevelTop' => 'BevelTop',
        'camera' => 'Camera',
        'contourColor' => 'ContourColor',
        'contourWidth' => 'ContourWidth',
        'depth' => 'Depth',
        'extrusionColor' => 'ExtrusionColor',
        'extrusionHeight' => 'ExtrusionHeight',
        'lightRig' => 'LightRig',
        'material' => 'Material'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bevelBottom' => 'setBevelBottom',
        'bevelTop' => 'setBevelTop',
        'camera' => 'setCamera',
        'contourColor' => 'setContourColor',
        'contourWidth' => 'setContourWidth',
        'depth' => 'setDepth',
        'extrusionColor' => 'setExtrusionColor',
        'extrusionHeight' => 'setExtrusionHeight',
        'lightRig' => 'setLightRig',
        'material' => 'setMaterial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bevelBottom' => 'getBevelBottom',
        'bevelTop' => 'getBevelTop',
        'camera' => 'getCamera',
        'contourColor' => 'getContourColor',
        'contourWidth' => 'getContourWidth',
        'depth' => 'getDepth',
        'extrusionColor' => 'getExtrusionColor',
        'extrusionHeight' => 'getExtrusionHeight',
        'lightRig' => 'getLightRig',
        'material' => 'getMaterial'
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

    const MATERIAL_CLEAR = 'Clear';
    const MATERIAL_DK_EDGE = 'DkEdge';
    const MATERIAL_FLAT = 'Flat';
    const MATERIAL_LEGACY_MATTE = 'LegacyMatte';
    const MATERIAL_LEGACY_METAL = 'LegacyMetal';
    const MATERIAL_LEGACY_PLASTIC = 'LegacyPlastic';
    const MATERIAL_LEGACY_WIREFRAME = 'LegacyWireframe';
    const MATERIAL_MATTE = 'Matte';
    const MATERIAL_METAL = 'Metal';
    const MATERIAL_PLASTIC = 'Plastic';
    const MATERIAL_POWDER = 'Powder';
    const MATERIAL_SOFT_EDGE = 'SoftEdge';
    const MATERIAL_SOFTMETAL = 'Softmetal';
    const MATERIAL_TRANSLUCENT_POWDER = 'TranslucentPowder';
    const MATERIAL_WARM_MATTE = 'WarmMatte';
    const MATERIAL_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaterialAllowableValues()
    {
        return [
            self::MATERIAL_CLEAR,
            self::MATERIAL_DK_EDGE,
            self::MATERIAL_FLAT,
            self::MATERIAL_LEGACY_MATTE,
            self::MATERIAL_LEGACY_METAL,
            self::MATERIAL_LEGACY_PLASTIC,
            self::MATERIAL_LEGACY_WIREFRAME,
            self::MATERIAL_MATTE,
            self::MATERIAL_METAL,
            self::MATERIAL_PLASTIC,
            self::MATERIAL_POWDER,
            self::MATERIAL_SOFT_EDGE,
            self::MATERIAL_SOFTMETAL,
            self::MATERIAL_TRANSLUCENT_POWDER,
            self::MATERIAL_WARM_MATTE,
            self::MATERIAL_NOT_DEFINED,
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
        $this->container['bevelBottom'] = isset($data['bevelBottom']) ? $data['bevelBottom'] : null;
        $this->container['bevelTop'] = isset($data['bevelTop']) ? $data['bevelTop'] : null;
        $this->container['camera'] = isset($data['camera']) ? $data['camera'] : null;
        $this->container['contourColor'] = isset($data['contourColor']) ? $data['contourColor'] : null;
        $this->container['contourWidth'] = isset($data['contourWidth']) ? $data['contourWidth'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['extrusionColor'] = isset($data['extrusionColor']) ? $data['extrusionColor'] : null;
        $this->container['extrusionHeight'] = isset($data['extrusionHeight']) ? $data['extrusionHeight'] : null;
        $this->container['lightRig'] = isset($data['lightRig']) ? $data['lightRig'] : null;
        $this->container['material'] = isset($data['material']) ? $data['material'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMaterialAllowableValues();
        if (!in_array($this->container['material'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'material', must be one of '%s'",
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

        $allowedValues = $this->getMaterialAllowableValues();
        if (!in_array($this->container['material'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets bevelBottom
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ShapeBevel
     */
    public function getBevelBottom()
    {
        return $this->container['bevelBottom'];
    }

    /**
     * Sets bevelBottom
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ShapeBevel $bevelBottom Type of a bottom 3D bevel.
     *
     * @return $this
     */
    public function setBevelBottom($bevelBottom)
    {
        $this->container['bevelBottom'] = $bevelBottom;

        return $this;
    }

    /**
     * Gets bevelTop
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ShapeBevel
     */
    public function getBevelTop()
    {
        return $this->container['bevelTop'];
    }

    /**
     * Sets bevelTop
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ShapeBevel $bevelTop Type of a top 3D bevel.
     *
     * @return $this
     */
    public function setBevelTop($bevelTop)
    {
        $this->container['bevelTop'] = $bevelTop;

        return $this;
    }

    /**
     * Gets camera
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Camera
     */
    public function getCamera()
    {
        return $this->container['camera'];
    }

    /**
     * Sets camera
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Camera $camera Camera
     *
     * @return $this
     */
    public function setCamera($camera)
    {
        $this->container['camera'] = $camera;

        return $this;
    }

    /**
     * Gets contourColor
     *
     * @return string
     */
    public function getContourColor()
    {
        return $this->container['contourColor'];
    }

    /**
     * Sets contourColor
     *
     * @param string $contourColor Contour color
     *
     * @return $this
     */
    public function setContourColor($contourColor)
    {
        $this->container['contourColor'] = $contourColor;

        return $this;
    }

    /**
     * Gets contourWidth
     *
     * @return double
     */
    public function getContourWidth()
    {
        return $this->container['contourWidth'];
    }

    /**
     * Sets contourWidth
     *
     * @param double $contourWidth Contour width
     *
     * @return $this
     */
    public function setContourWidth($contourWidth)
    {
        $this->container['contourWidth'] = $contourWidth;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return double
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param double $depth Depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets extrusionColor
     *
     * @return string
     */
    public function getExtrusionColor()
    {
        return $this->container['extrusionColor'];
    }

    /**
     * Sets extrusionColor
     *
     * @param string $extrusionColor Extrusion color
     *
     * @return $this
     */
    public function setExtrusionColor($extrusionColor)
    {
        $this->container['extrusionColor'] = $extrusionColor;

        return $this;
    }

    /**
     * Gets extrusionHeight
     *
     * @return double
     */
    public function getExtrusionHeight()
    {
        return $this->container['extrusionHeight'];
    }

    /**
     * Sets extrusionHeight
     *
     * @param double $extrusionHeight Extrusion height
     *
     * @return $this
     */
    public function setExtrusionHeight($extrusionHeight)
    {
        $this->container['extrusionHeight'] = $extrusionHeight;

        return $this;
    }

    /**
     * Gets lightRig
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LightRig
     */
    public function getLightRig()
    {
        return $this->container['lightRig'];
    }

    /**
     * Sets lightRig
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LightRig $lightRig Light rig
     *
     * @return $this
     */
    public function setLightRig($lightRig)
    {
        $this->container['lightRig'] = $lightRig;

        return $this;
    }

    /**
     * Gets material
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param string $material Material
     *
     * @return $this
     */
    public function setMaterial($material)
    {
        $allowedValues = $this->getMaterialAllowableValues();


        if (is_numeric($material)) {
            if ($material >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'material', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $material = $allowedValues[$material];
            }
        } else {
            if (!is_null($material) && !in_array($material, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'material', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['material'] = $material;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
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
    public function offsetGet($offset) : mixed
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
    public function offsetSet($offset, $value) : void
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
    public function offsetUnset($offset) : void
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


