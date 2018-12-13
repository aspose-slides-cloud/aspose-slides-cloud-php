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
 * TiffExportOptions Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TiffExportOptions extends ExportOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TiffExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compression' => '\Aspose\Slides\Cloud\Sdk\Model\TiffCompressionType',
        'width' => 'int',
        'height' => 'int',
        'dpi_x' => 'int',
        'dpi_y' => 'int',
        'show_hidden_slides' => 'bool',
        'pixel_format' => '\Aspose\Slides\Cloud\Sdk\Model\ImagePixelFormat',
        'notes_position' => '\Aspose\Slides\Cloud\Sdk\Model\NotesPositions',
        'comments_position' => '\Aspose\Slides\Cloud\Sdk\Model\CommentsPositions',
        'comments_area_width' => 'int',
        'comments_area_color' => 'string',
        'show_comments_by_no_author' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compression' => null,
        'width' => 'int32',
        'height' => 'int32',
        'dpi_x' => 'int32',
        'dpi_y' => 'int32',
        'show_hidden_slides' => null,
        'pixel_format' => null,
        'notes_position' => null,
        'comments_position' => null,
        'comments_area_width' => 'int32',
        'comments_area_color' => null,
        'show_comments_by_no_author' => null
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
        'compression' => 'Compression',
        'width' => 'Width',
        'height' => 'Height',
        'dpi_x' => 'DpiX',
        'dpi_y' => 'DpiY',
        'show_hidden_slides' => 'ShowHiddenSlides',
        'pixel_format' => 'PixelFormat',
        'notes_position' => 'NotesPosition',
        'comments_position' => 'CommentsPosition',
        'comments_area_width' => 'CommentsAreaWidth',
        'comments_area_color' => 'CommentsAreaColor',
        'show_comments_by_no_author' => 'ShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compression' => 'setCompression',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dpi_x' => 'setDpiX',
        'dpi_y' => 'setDpiY',
        'show_hidden_slides' => 'setShowHiddenSlides',
        'pixel_format' => 'setPixelFormat',
        'notes_position' => 'setNotesPosition',
        'comments_position' => 'setCommentsPosition',
        'comments_area_width' => 'setCommentsAreaWidth',
        'comments_area_color' => 'setCommentsAreaColor',
        'show_comments_by_no_author' => 'setShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compression' => 'getCompression',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dpi_x' => 'getDpiX',
        'dpi_y' => 'getDpiY',
        'show_hidden_slides' => 'getShowHiddenSlides',
        'pixel_format' => 'getPixelFormat',
        'notes_position' => 'getNotesPosition',
        'comments_position' => 'getCommentsPosition',
        'comments_area_width' => 'getCommentsAreaWidth',
        'comments_area_color' => 'getCommentsAreaColor',
        'show_comments_by_no_author' => 'getShowCommentsByNoAuthor'
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

        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['dpi_x'] = isset($data['dpi_x']) ? $data['dpi_x'] : null;
        $this->container['dpi_y'] = isset($data['dpi_y']) ? $data['dpi_y'] : null;
        $this->container['show_hidden_slides'] = isset($data['show_hidden_slides']) ? $data['show_hidden_slides'] : null;
        $this->container['pixel_format'] = isset($data['pixel_format']) ? $data['pixel_format'] : null;
        $this->container['notes_position'] = isset($data['notes_position']) ? $data['notes_position'] : null;
        $this->container['comments_position'] = isset($data['comments_position']) ? $data['comments_position'] : null;
        $this->container['comments_area_width'] = isset($data['comments_area_width']) ? $data['comments_area_width'] : null;
        $this->container['comments_area_color'] = isset($data['comments_area_color']) ? $data['comments_area_color'] : null;
        $this->container['show_comments_by_no_author'] = isset($data['show_comments_by_no_author']) ? $data['show_comments_by_no_author'] : null;
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
     * Gets compression
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TiffCompressionType
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
     * Sets compression
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TiffCompressionType $compression compression
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $this->container['compression'] = $compression;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
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
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets dpi_x
     *
     * @return int
     */
    public function getDpiX()
    {
        return $this->container['dpi_x'];
    }

    /**
     * Sets dpi_x
     *
     * @param int $dpi_x dpi_x
     *
     * @return $this
     */
    public function setDpiX($dpi_x)
    {
        $this->container['dpi_x'] = $dpi_x;

        return $this;
    }

    /**
     * Gets dpi_y
     *
     * @return int
     */
    public function getDpiY()
    {
        return $this->container['dpi_y'];
    }

    /**
     * Sets dpi_y
     *
     * @param int $dpi_y dpi_y
     *
     * @return $this
     */
    public function setDpiY($dpi_y)
    {
        $this->container['dpi_y'] = $dpi_y;

        return $this;
    }

    /**
     * Gets show_hidden_slides
     *
     * @return bool
     */
    public function getShowHiddenSlides()
    {
        return $this->container['show_hidden_slides'];
    }

    /**
     * Sets show_hidden_slides
     *
     * @param bool $show_hidden_slides Specifies whether the generated document should include hidden slides or not. Default is false.
     *
     * @return $this
     */
    public function setShowHiddenSlides($show_hidden_slides)
    {
        $this->container['show_hidden_slides'] = $show_hidden_slides;

        return $this;
    }

    /**
     * Gets pixel_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ImagePixelFormat
     */
    public function getPixelFormat()
    {
        return $this->container['pixel_format'];
    }

    /**
     * Sets pixel_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ImagePixelFormat $pixel_format Specifies the pixel format for the generated images. Read/write .
     *
     * @return $this
     */
    public function setPixelFormat($pixel_format)
    {
        $this->container['pixel_format'] = $pixel_format;

        return $this;
    }

    /**
     * Gets notes_position
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NotesPositions
     */
    public function getNotesPosition()
    {
        return $this->container['notes_position'];
    }

    /**
     * Sets notes_position
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NotesPositions $notes_position Gets or sets the position of the notes on the page.
     *
     * @return $this
     */
    public function setNotesPosition($notes_position)
    {
        $this->container['notes_position'] = $notes_position;

        return $this;
    }

    /**
     * Gets comments_position
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CommentsPositions
     */
    public function getCommentsPosition()
    {
        return $this->container['comments_position'];
    }

    /**
     * Sets comments_position
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CommentsPositions $comments_position Gets or sets the position of the comments on the page.
     *
     * @return $this
     */
    public function setCommentsPosition($comments_position)
    {
        $this->container['comments_position'] = $comments_position;

        return $this;
    }

    /**
     * Gets comments_area_width
     *
     * @return int
     */
    public function getCommentsAreaWidth()
    {
        return $this->container['comments_area_width'];
    }

    /**
     * Sets comments_area_width
     *
     * @param int $comments_area_width Gets or sets the width of the comment output area in pixels (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaWidth($comments_area_width)
    {
        $this->container['comments_area_width'] = $comments_area_width;

        return $this;
    }

    /**
     * Gets comments_area_color
     *
     * @return string
     */
    public function getCommentsAreaColor()
    {
        return $this->container['comments_area_color'];
    }

    /**
     * Sets comments_area_color
     *
     * @param string $comments_area_color Gets or sets the color of comments area (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaColor($comments_area_color)
    {
        $this->container['comments_area_color'] = $comments_area_color;

        return $this;
    }

    /**
     * Gets show_comments_by_no_author
     *
     * @return bool
     */
    public function getShowCommentsByNoAuthor()
    {
        return $this->container['show_comments_by_no_author'];
    }

    /**
     * Sets show_comments_by_no_author
     *
     * @param bool $show_comments_by_no_author True if comments that have no author are displayed. (Applies only if comments are displayed).
     *
     * @return $this
     */
    public function setShowCommentsByNoAuthor($show_comments_by_no_author)
    {
        $this->container['show_comments_by_no_author'] = $show_comments_by_no_author;

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


