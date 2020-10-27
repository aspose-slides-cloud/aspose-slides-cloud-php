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
 * Slide Class Doc Comment
 *
 * @category Class
 * @description Presentation slide.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Slide extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Slide';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'width' => 'double',
        'height' => 'double',
        'showMasterShapes' => 'bool',
        'layoutSlide' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'shapes' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'theme' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'placeholders' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'images' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'comments' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'background' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'notesSlide' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'width' => 'double',
        'height' => 'double',
        'showMasterShapes' => null,
        'layoutSlide' => null,
        'shapes' => null,
        'theme' => null,
        'placeholders' => null,
        'images' => null,
        'comments' => null,
        'background' => null,
        'notesSlide' => null
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
        'width' => 'Width',
        'height' => 'Height',
        'showMasterShapes' => 'ShowMasterShapes',
        'layoutSlide' => 'LayoutSlide',
        'shapes' => 'Shapes',
        'theme' => 'Theme',
        'placeholders' => 'Placeholders',
        'images' => 'Images',
        'comments' => 'Comments',
        'background' => 'Background',
        'notesSlide' => 'NotesSlide'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'showMasterShapes' => 'setShowMasterShapes',
        'layoutSlide' => 'setLayoutSlide',
        'shapes' => 'setShapes',
        'theme' => 'setTheme',
        'placeholders' => 'setPlaceholders',
        'images' => 'setImages',
        'comments' => 'setComments',
        'background' => 'setBackground',
        'notesSlide' => 'setNotesSlide'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'showMasterShapes' => 'getShowMasterShapes',
        'layoutSlide' => 'getLayoutSlide',
        'shapes' => 'getShapes',
        'theme' => 'getTheme',
        'placeholders' => 'getPlaceholders',
        'images' => 'getImages',
        'comments' => 'getComments',
        'background' => 'getBackground',
        'notesSlide' => 'getNotesSlide'
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

        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['showMasterShapes'] = isset($data['showMasterShapes']) ? $data['showMasterShapes'] : null;
        $this->container['layoutSlide'] = isset($data['layoutSlide']) ? $data['layoutSlide'] : null;
        $this->container['shapes'] = isset($data['shapes']) ? $data['shapes'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['placeholders'] = isset($data['placeholders']) ? $data['placeholders'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['notesSlide'] = isset($data['notesSlide']) ? $data['notesSlide'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['showMasterShapes'] === null) {
            $invalidProperties[] = "'showMasterShapes' can't be null";
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

        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['showMasterShapes'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Gets or sets the width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Gets or sets the height.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets showMasterShapes
     *
     * @return bool
     */
    public function getShowMasterShapes()
    {
        return $this->container['showMasterShapes'];
    }

    /**
     * Sets showMasterShapes
     *
     * @param bool $showMasterShapes Specifies if shapes of the master slide should be shown on the slide. True by default.
     *
     * @return $this
     */
    public function setShowMasterShapes($showMasterShapes)
    {
        $this->container['showMasterShapes'] = $showMasterShapes;

        return $this;
    }

    /**
     * Gets layoutSlide
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getLayoutSlide()
    {
        return $this->container['layoutSlide'];
    }

    /**
     * Sets layoutSlide
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $layoutSlide Gets or sets the  link to the layout slide.
     *
     * @return $this
     */
    public function setLayoutSlide($layoutSlide)
    {
        $this->container['layoutSlide'] = $layoutSlide;

        return $this;
    }

    /**
     * Gets shapes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getShapes()
    {
        return $this->container['shapes'];
    }

    /**
     * Sets shapes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $shapes Gets or sets the  link to list of top-level shapes.
     *
     * @return $this
     */
    public function setShapes($shapes)
    {
        $this->container['shapes'] = $shapes;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $theme Gets or sets the link to theme.
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets placeholders
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getPlaceholders()
    {
        return $this->container['placeholders'];
    }

    /**
     * Sets placeholders
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $placeholders Gets or sets the  link to placeholders.
     *
     * @return $this
     */
    public function setPlaceholders($placeholders)
    {
        $this->container['placeholders'] = $placeholders;

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
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $images Gets or sets the link to images.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $comments Gets or sets the link to comments.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets background
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $background Get or sets the link to slide's background
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets notesSlide
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getNotesSlide()
    {
        return $this->container['notesSlide'];
    }

    /**
     * Sets notesSlide
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $notesSlide Get or sets the link to notes slide.
     *
     * @return $this
     */
    public function setNotesSlide($notesSlide)
    {
        $this->container['notesSlide'] = $notesSlide;

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


