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
 * EffectFormat Class Doc Comment
 *
 * @category Class
 * @description Effect format
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EffectFormat implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EffectFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blur' => '\Aspose\Slides\Cloud\Sdk\Model\BlurEffect',
        'glow' => '\Aspose\Slides\Cloud\Sdk\Model\GlowEffect',
        'inner_shadow' => '\Aspose\Slides\Cloud\Sdk\Model\InnerShadowEffect',
        'outer_shadow' => '\Aspose\Slides\Cloud\Sdk\Model\OuterShadowEffect',
        'preset_shadow' => '\Aspose\Slides\Cloud\Sdk\Model\PresetShadowEffect',
        'soft_edge' => '\Aspose\Slides\Cloud\Sdk\Model\SoftEdgeEffect',
        'reflection' => '\Aspose\Slides\Cloud\Sdk\Model\ReflectionEffect',
        'fill_overlay' => '\Aspose\Slides\Cloud\Sdk\Model\FillOverlayEffect'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blur' => null,
        'glow' => null,
        'inner_shadow' => null,
        'outer_shadow' => null,
        'preset_shadow' => null,
        'soft_edge' => null,
        'reflection' => null,
        'fill_overlay' => null
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
        'blur' => 'Blur',
        'glow' => 'Glow',
        'inner_shadow' => 'InnerShadow',
        'outer_shadow' => 'OuterShadow',
        'preset_shadow' => 'PresetShadow',
        'soft_edge' => 'SoftEdge',
        'reflection' => 'Reflection',
        'fill_overlay' => 'FillOverlay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blur' => 'setBlur',
        'glow' => 'setGlow',
        'inner_shadow' => 'setInnerShadow',
        'outer_shadow' => 'setOuterShadow',
        'preset_shadow' => 'setPresetShadow',
        'soft_edge' => 'setSoftEdge',
        'reflection' => 'setReflection',
        'fill_overlay' => 'setFillOverlay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blur' => 'getBlur',
        'glow' => 'getGlow',
        'inner_shadow' => 'getInnerShadow',
        'outer_shadow' => 'getOuterShadow',
        'preset_shadow' => 'getPresetShadow',
        'soft_edge' => 'getSoftEdge',
        'reflection' => 'getReflection',
        'fill_overlay' => 'getFillOverlay'
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
        $this->container['blur'] = isset($data['blur']) ? $data['blur'] : null;
        $this->container['glow'] = isset($data['glow']) ? $data['glow'] : null;
        $this->container['inner_shadow'] = isset($data['inner_shadow']) ? $data['inner_shadow'] : null;
        $this->container['outer_shadow'] = isset($data['outer_shadow']) ? $data['outer_shadow'] : null;
        $this->container['preset_shadow'] = isset($data['preset_shadow']) ? $data['preset_shadow'] : null;
        $this->container['soft_edge'] = isset($data['soft_edge']) ? $data['soft_edge'] : null;
        $this->container['reflection'] = isset($data['reflection']) ? $data['reflection'] : null;
        $this->container['fill_overlay'] = isset($data['fill_overlay']) ? $data['fill_overlay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets blur
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\BlurEffect
     */
    public function getBlur()
    {
        return $this->container['blur'];
    }

    /**
     * Sets blur
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\BlurEffect $blur blur effect
     *
     * @return $this
     */
    public function setBlur($blur)
    {
        $this->container['blur'] = $blur;

        return $this;
    }

    /**
     * Gets glow
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\GlowEffect
     */
    public function getGlow()
    {
        return $this->container['glow'];
    }

    /**
     * Sets glow
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\GlowEffect $glow glow effect
     *
     * @return $this
     */
    public function setGlow($glow)
    {
        $this->container['glow'] = $glow;

        return $this;
    }

    /**
     * Gets inner_shadow
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\InnerShadowEffect
     */
    public function getInnerShadow()
    {
        return $this->container['inner_shadow'];
    }

    /**
     * Sets inner_shadow
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\InnerShadowEffect $inner_shadow inner shadow effect
     *
     * @return $this
     */
    public function setInnerShadow($inner_shadow)
    {
        $this->container['inner_shadow'] = $inner_shadow;

        return $this;
    }

    /**
     * Gets outer_shadow
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\OuterShadowEffect
     */
    public function getOuterShadow()
    {
        return $this->container['outer_shadow'];
    }

    /**
     * Sets outer_shadow
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\OuterShadowEffect $outer_shadow outer shadow effect
     *
     * @return $this
     */
    public function setOuterShadow($outer_shadow)
    {
        $this->container['outer_shadow'] = $outer_shadow;

        return $this;
    }

    /**
     * Gets preset_shadow
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\PresetShadowEffect
     */
    public function getPresetShadow()
    {
        return $this->container['preset_shadow'];
    }

    /**
     * Sets preset_shadow
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\PresetShadowEffect $preset_shadow preset shadow effect
     *
     * @return $this
     */
    public function setPresetShadow($preset_shadow)
    {
        $this->container['preset_shadow'] = $preset_shadow;

        return $this;
    }

    /**
     * Gets soft_edge
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SoftEdgeEffect
     */
    public function getSoftEdge()
    {
        return $this->container['soft_edge'];
    }

    /**
     * Sets soft_edge
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SoftEdgeEffect $soft_edge soft edge effect
     *
     * @return $this
     */
    public function setSoftEdge($soft_edge)
    {
        $this->container['soft_edge'] = $soft_edge;

        return $this;
    }

    /**
     * Gets reflection
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ReflectionEffect
     */
    public function getReflection()
    {
        return $this->container['reflection'];
    }

    /**
     * Sets reflection
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ReflectionEffect $reflection reflection effect
     *
     * @return $this
     */
    public function setReflection($reflection)
    {
        $this->container['reflection'] = $reflection;

        return $this;
    }

    /**
     * Gets fill_overlay
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillOverlayEffect
     */
    public function getFillOverlay()
    {
        return $this->container['fill_overlay'];
    }

    /**
     * Sets fill_overlay
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillOverlayEffect $fill_overlay fill overlay effect
     *
     * @return $this
     */
    public function setFillOverlay($fill_overlay)
    {
        $this->container['fill_overlay'] = $fill_overlay;

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


