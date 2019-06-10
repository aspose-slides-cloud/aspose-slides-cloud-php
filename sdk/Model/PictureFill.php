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
 * PictureFill Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PictureFill extends FillFormat 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PictureFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'crop_bottom' => 'double',
        'crop_left' => 'double',
        'crop_right' => 'double',
        'crop_top' => 'double',
        'dpi' => 'int',
        'image' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement',
        'base64_data' => 'string',
        'svg_data' => 'string',
        'picture_fill_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'crop_bottom' => 'double',
        'crop_left' => 'double',
        'crop_right' => 'double',
        'crop_top' => 'double',
        'dpi' => 'int32',
        'image' => null,
        'base64_data' => null,
        'svg_data' => null,
        'picture_fill_mode' => null
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
        'crop_bottom' => 'CropBottom',
        'crop_left' => 'CropLeft',
        'crop_right' => 'CropRight',
        'crop_top' => 'CropTop',
        'dpi' => 'Dpi',
        'image' => 'Image',
        'base64_data' => 'Base64Data',
        'svg_data' => 'SvgData',
        'picture_fill_mode' => 'PictureFillMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'crop_bottom' => 'setCropBottom',
        'crop_left' => 'setCropLeft',
        'crop_right' => 'setCropRight',
        'crop_top' => 'setCropTop',
        'dpi' => 'setDpi',
        'image' => 'setImage',
        'base64_data' => 'setBase64Data',
        'svg_data' => 'setSvgData',
        'picture_fill_mode' => 'setPictureFillMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'crop_bottom' => 'getCropBottom',
        'crop_left' => 'getCropLeft',
        'crop_right' => 'getCropRight',
        'crop_top' => 'getCropTop',
        'dpi' => 'getDpi',
        'image' => 'getImage',
        'base64_data' => 'getBase64Data',
        'svg_data' => 'getSvgData',
        'picture_fill_mode' => 'getPictureFillMode'
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

    const PICTURE_FILL_MODE_TILE = 'Tile';
    const PICTURE_FILL_MODE_STRETCH = 'Stretch';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPictureFillModeAllowableValues()
    {
        return [
            self::PICTURE_FILL_MODE_TILE,
            self::PICTURE_FILL_MODE_STRETCH,
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

        $this->container['crop_bottom'] = isset($data['crop_bottom']) ? $data['crop_bottom'] : null;
        $this->container['crop_left'] = isset($data['crop_left']) ? $data['crop_left'] : null;
        $this->container['crop_right'] = isset($data['crop_right']) ? $data['crop_right'] : null;
        $this->container['crop_top'] = isset($data['crop_top']) ? $data['crop_top'] : null;
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['base64_data'] = isset($data['base64_data']) ? $data['base64_data'] : null;
        $this->container['svg_data'] = isset($data['svg_data']) ? $data['svg_data'] : null;
        $this->container['picture_fill_mode'] = isset($data['picture_fill_mode']) ? $data['picture_fill_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['crop_bottom'] === null) {
            $invalidProperties[] = "'crop_bottom' can't be null";
        }
        if ($this->container['crop_left'] === null) {
            $invalidProperties[] = "'crop_left' can't be null";
        }
        if ($this->container['crop_right'] === null) {
            $invalidProperties[] = "'crop_right' can't be null";
        }
        if ($this->container['crop_top'] === null) {
            $invalidProperties[] = "'crop_top' can't be null";
        }
        if ($this->container['dpi'] === null) {
            $invalidProperties[] = "'dpi' can't be null";
        }
        if ($this->container['picture_fill_mode'] === null) {
            $invalidProperties[] = "'picture_fill_mode' can't be null";
        }
        $allowedValues = $this->getPictureFillModeAllowableValues();
        if (!in_array($this->container['picture_fill_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'picture_fill_mode', must be one of '%s'",
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

        if ($this->container['crop_bottom'] === null) {
            return false;
        }
        if ($this->container['crop_left'] === null) {
            return false;
        }
        if ($this->container['crop_right'] === null) {
            return false;
        }
        if ($this->container['crop_top'] === null) {
            return false;
        }
        if ($this->container['dpi'] === null) {
            return false;
        }
        if ($this->container['picture_fill_mode'] === null) {
            return false;
        }
        $allowedValues = $this->getPictureFillModeAllowableValues();
        if (!in_array($this->container['picture_fill_mode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets crop_bottom
     *
     * @return double
     */
    public function getCropBottom()
    {
        return $this->container['crop_bottom'];
    }

    /**
     * Sets crop_bottom
     *
     * @param double $crop_bottom crop_bottom
     *
     * @return $this
     */
    public function setCropBottom($crop_bottom)
    {
        $this->container['crop_bottom'] = $crop_bottom;

        return $this;
    }

    /**
     * Gets crop_left
     *
     * @return double
     */
    public function getCropLeft()
    {
        return $this->container['crop_left'];
    }

    /**
     * Sets crop_left
     *
     * @param double $crop_left crop_left
     *
     * @return $this
     */
    public function setCropLeft($crop_left)
    {
        $this->container['crop_left'] = $crop_left;

        return $this;
    }

    /**
     * Gets crop_right
     *
     * @return double
     */
    public function getCropRight()
    {
        return $this->container['crop_right'];
    }

    /**
     * Sets crop_right
     *
     * @param double $crop_right crop_right
     *
     * @return $this
     */
    public function setCropRight($crop_right)
    {
        $this->container['crop_right'] = $crop_right;

        return $this;
    }

    /**
     * Gets crop_top
     *
     * @return double
     */
    public function getCropTop()
    {
        return $this->container['crop_top'];
    }

    /**
     * Sets crop_top
     *
     * @param double $crop_top crop_top
     *
     * @return $this
     */
    public function setCropTop($crop_top)
    {
        $this->container['crop_top'] = $crop_top;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return int
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param int $dpi dpi
     *
     * @return $this
     */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets base64_data
     *
     * @return string
     */
    public function getBase64Data()
    {
        return $this->container['base64_data'];
    }

    /**
     * Sets base64_data
     *
     * @param string $base64_data base64_data
     *
     * @return $this
     */
    public function setBase64Data($base64_data)
    {
        $this->container['base64_data'] = $base64_data;

        return $this;
    }

    /**
     * Gets svg_data
     *
     * @return string
     */
    public function getSvgData()
    {
        return $this->container['svg_data'];
    }

    /**
     * Sets svg_data
     *
     * @param string $svg_data svg_data
     *
     * @return $this
     */
    public function setSvgData($svg_data)
    {
        $this->container['svg_data'] = $svg_data;

        return $this;
    }

    /**
     * Gets picture_fill_mode
     *
     * @return string
     */
    public function getPictureFillMode()
    {
        return $this->container['picture_fill_mode'];
    }

    /**
     * Sets picture_fill_mode
     *
     * @param string $picture_fill_mode picture_fill_mode
     *
     * @return $this
     */
    public function setPictureFillMode($picture_fill_mode)
    {
        $allowedValues = $this->getPictureFillModeAllowableValues();
        if (!in_array($picture_fill_mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'picture_fill_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['picture_fill_mode'] = $picture_fill_mode;

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


