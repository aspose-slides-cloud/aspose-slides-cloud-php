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
 * Document Class Doc Comment
 *
 * @category Class
 * @description Represents document DTO.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Document extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'documentProperties' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'viewProperties' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'slides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'images' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'layoutSlides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'masterSlides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'documentProperties' => null,
        'viewProperties' => null,
        'slides' => null,
        'images' => null,
        'layoutSlides' => null,
        'masterSlides' => null
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
        'documentProperties' => 'DocumentProperties',
        'viewProperties' => 'ViewProperties',
        'slides' => 'Slides',
        'images' => 'Images',
        'layoutSlides' => 'LayoutSlides',
        'masterSlides' => 'MasterSlides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentProperties' => 'setDocumentProperties',
        'viewProperties' => 'setViewProperties',
        'slides' => 'setSlides',
        'images' => 'setImages',
        'layoutSlides' => 'setLayoutSlides',
        'masterSlides' => 'setMasterSlides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentProperties' => 'getDocumentProperties',
        'viewProperties' => 'getViewProperties',
        'slides' => 'getSlides',
        'images' => 'getImages',
        'layoutSlides' => 'getLayoutSlides',
        'masterSlides' => 'getMasterSlides'
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

        $this->container['documentProperties'] = isset($data['documentProperties']) ? $data['documentProperties'] : null;
        $this->container['viewProperties'] = isset($data['viewProperties']) ? $data['viewProperties'] : null;
        $this->container['slides'] = isset($data['slides']) ? $data['slides'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['layoutSlides'] = isset($data['layoutSlides']) ? $data['layoutSlides'] : null;
        $this->container['masterSlides'] = isset($data['masterSlides']) ? $data['masterSlides'] : null;
        
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
     * Gets documentProperties
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getDocumentProperties()
    {
        return $this->container['documentProperties'];
    }

    /**
     * Sets documentProperties
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $documentProperties Link to Document properties.
     *
     * @return $this
     */
    public function setDocumentProperties($documentProperties)
    {
        $this->container['documentProperties'] = $documentProperties;

        return $this;
    }

    /**
     * Gets viewProperties
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getViewProperties()
    {
        return $this->container['viewProperties'];
    }

    /**
     * Sets viewProperties
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $viewProperties Link to Document properties.
     *
     * @return $this
     */
    public function setViewProperties($viewProperties)
    {
        $this->container['viewProperties'] = $viewProperties;

        return $this;
    }

    /**
     * Gets slides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getSlides()
    {
        return $this->container['slides'];
    }

    /**
     * Sets slides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $slides Link to slides collection.
     *
     * @return $this
     */
    public function setSlides($slides)
    {
        $this->container['slides'] = $slides;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $images Link to images collection.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets layoutSlides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getLayoutSlides()
    {
        return $this->container['layoutSlides'];
    }

    /**
     * Sets layoutSlides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $layoutSlides Link to layout slides collection.
     *
     * @return $this
     */
    public function setLayoutSlides($layoutSlides)
    {
        $this->container['layoutSlides'] = $layoutSlides;

        return $this;
    }

    /**
     * Gets masterSlides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getMasterSlides()
    {
        return $this->container['masterSlides'];
    }

    /**
     * Sets masterSlides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $masterSlides Link to master slides collection.
     *
     * @return $this
     */
    public function setMasterSlides($masterSlides)
    {
        $this->container['masterSlides'] = $masterSlides;

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


