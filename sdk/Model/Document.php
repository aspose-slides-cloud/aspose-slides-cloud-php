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
        'document_properties' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement',
        'slides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement',
        'images' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement',
        'layout_slides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement',
        'master_slides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_properties' => null,
        'slides' => null,
        'images' => null,
        'layout_slides' => null,
        'master_slides' => null
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
        'document_properties' => 'DocumentProperties',
        'slides' => 'Slides',
        'images' => 'Images',
        'layout_slides' => 'LayoutSlides',
        'master_slides' => 'MasterSlides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_properties' => 'setDocumentProperties',
        'slides' => 'setSlides',
        'images' => 'setImages',
        'layout_slides' => 'setLayoutSlides',
        'master_slides' => 'setMasterSlides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_properties' => 'getDocumentProperties',
        'slides' => 'getSlides',
        'images' => 'getImages',
        'layout_slides' => 'getLayoutSlides',
        'master_slides' => 'getMasterSlides'
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

        $this->container['document_properties'] = isset($data['document_properties']) ? $data['document_properties'] : null;
        $this->container['slides'] = isset($data['slides']) ? $data['slides'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['layout_slides'] = isset($data['layout_slides']) ? $data['layout_slides'] : null;
        $this->container['master_slides'] = isset($data['master_slides']) ? $data['master_slides'] : null;
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
     * Gets document_properties
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement
     */
    public function getDocumentProperties()
    {
        return $this->container['document_properties'];
    }

    /**
     * Sets document_properties
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement $document_properties Link to Document properties.
     *
     * @return $this
     */
    public function setDocumentProperties($document_properties)
    {
        $this->container['document_properties'] = $document_properties;

        return $this;
    }

    /**
     * Gets slides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement
     */
    public function getSlides()
    {
        return $this->container['slides'];
    }

    /**
     * Sets slides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement $slides Link to slides collection.
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
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement $images Link to images collection.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets layout_slides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement
     */
    public function getLayoutSlides()
    {
        return $this->container['layout_slides'];
    }

    /**
     * Sets layout_slides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement $layout_slides Link to layout slides collection.
     *
     * @return $this
     */
    public function setLayoutSlides($layout_slides)
    {
        $this->container['layout_slides'] = $layout_slides;

        return $this;
    }

    /**
     * Gets master_slides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement
     */
    public function getMasterSlides()
    {
        return $this->container['master_slides'];
    }

    /**
     * Sets master_slides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement $master_slides Link to master slides collection.
     *
     * @return $this
     */
    public function setMasterSlides($master_slides)
    {
        $this->container['master_slides'] = $master_slides;

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


