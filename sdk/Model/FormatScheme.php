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
 * FormatScheme Class Doc Comment
 *
 * @category Class
 * @description Represents Format Scheme for slide&#39;s theme
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormatScheme extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormatScheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'backgroundStyles' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]',
        'effectStyles' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]',
        'fillStyles' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]',
        'lineStyles' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'backgroundStyles' => null,
        'effectStyles' => null,
        'fillStyles' => null,
        'lineStyles' => null
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
        'backgroundStyles' => 'BackgroundStyles',
        'effectStyles' => 'EffectStyles',
        'fillStyles' => 'FillStyles',
        'lineStyles' => 'LineStyles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backgroundStyles' => 'setBackgroundStyles',
        'effectStyles' => 'setEffectStyles',
        'fillStyles' => 'setFillStyles',
        'lineStyles' => 'setLineStyles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backgroundStyles' => 'getBackgroundStyles',
        'effectStyles' => 'getEffectStyles',
        'fillStyles' => 'getFillStyles',
        'lineStyles' => 'getLineStyles'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['backgroundStyles'] = isset($data['backgroundStyles']) ? $data['backgroundStyles'] : null;
        $this->container['effectStyles'] = isset($data['effectStyles']) ? $data['effectStyles'] : null;
        $this->container['fillStyles'] = isset($data['fillStyles']) ? $data['fillStyles'] : null;
        $this->container['lineStyles'] = isset($data['lineStyles']) ? $data['lineStyles'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets backgroundStyles
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]
     */
    public function getBackgroundStyles()
    {
        return $this->container['backgroundStyles'];
    }

    /**
     * Sets backgroundStyles
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[] $backgroundStyles Background style links.
     *
     * @return $this
     */
    public function setBackgroundStyles($backgroundStyles)
    {
        $this->container['backgroundStyles'] = $backgroundStyles;

        return $this;
    }

    /**
     * Gets effectStyles
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]
     */
    public function getEffectStyles()
    {
        return $this->container['effectStyles'];
    }

    /**
     * Sets effectStyles
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[] $effectStyles Effect style links.
     *
     * @return $this
     */
    public function setEffectStyles($effectStyles)
    {
        $this->container['effectStyles'] = $effectStyles;

        return $this;
    }

    /**
     * Gets fillStyles
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]
     */
    public function getFillStyles()
    {
        return $this->container['fillStyles'];
    }

    /**
     * Sets fillStyles
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[] $fillStyles Fill style links.
     *
     * @return $this
     */
    public function setFillStyles($fillStyles)
    {
        $this->container['fillStyles'] = $fillStyles;

        return $this;
    }

    /**
     * Gets lineStyles
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]
     */
    public function getLineStyles()
    {
        return $this->container['lineStyles'];
    }

    /**
     * Sets lineStyles
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[] $lineStyles Line style links.
     *
     * @return $this
     */
    public function setLineStyles($lineStyles)
    {
        $this->container['lineStyles'] = $lineStyles;

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


