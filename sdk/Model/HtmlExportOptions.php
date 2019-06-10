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
 * HtmlExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in Html format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HtmlExportOptions extends ExportOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HtmlExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'save_as_zip' => 'bool',
        'sub_directory_name' => 'string',
        'show_hidden_slides' => 'bool',
        'jpeg_quality' => 'int',
        'pictures_compression' => 'string',
        'delete_pictures_cropped_areas' => 'bool',
        'notes_position' => 'string',
        'comments_position' => 'string',
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
        'save_as_zip' => null,
        'sub_directory_name' => null,
        'show_hidden_slides' => null,
        'jpeg_quality' => 'byte',
        'pictures_compression' => null,
        'delete_pictures_cropped_areas' => null,
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
        'save_as_zip' => 'SaveAsZip',
        'sub_directory_name' => 'SubDirectoryName',
        'show_hidden_slides' => 'ShowHiddenSlides',
        'jpeg_quality' => 'JpegQuality',
        'pictures_compression' => 'PicturesCompression',
        'delete_pictures_cropped_areas' => 'DeletePicturesCroppedAreas',
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
        'save_as_zip' => 'setSaveAsZip',
        'sub_directory_name' => 'setSubDirectoryName',
        'show_hidden_slides' => 'setShowHiddenSlides',
        'jpeg_quality' => 'setJpegQuality',
        'pictures_compression' => 'setPicturesCompression',
        'delete_pictures_cropped_areas' => 'setDeletePicturesCroppedAreas',
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
        'save_as_zip' => 'getSaveAsZip',
        'sub_directory_name' => 'getSubDirectoryName',
        'show_hidden_slides' => 'getShowHiddenSlides',
        'jpeg_quality' => 'getJpegQuality',
        'pictures_compression' => 'getPicturesCompression',
        'delete_pictures_cropped_areas' => 'getDeletePicturesCroppedAreas',
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

    const PICTURES_COMPRESSION_DPI330 = 'Dpi330';
    const PICTURES_COMPRESSION_DPI220 = 'Dpi220';
    const PICTURES_COMPRESSION_DPI150 = 'Dpi150';
    const PICTURES_COMPRESSION_DPI96 = 'Dpi96';
    const PICTURES_COMPRESSION_DPI72 = 'Dpi72';
    const PICTURES_COMPRESSION_DOCUMENT_RESOLUTION = 'DocumentResolution';
    const NOTES_POSITION_NONE = 'None';
    const NOTES_POSITION_BOTTOM_FULL = 'BottomFull';
    const NOTES_POSITION_BOTTOM_TRUNCATED = 'BottomTruncated';
    const COMMENTS_POSITION_NONE = 'None';
    const COMMENTS_POSITION_BOTTOM = 'Bottom';
    const COMMENTS_POSITION_RIGHT = 'Right';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPicturesCompressionAllowableValues()
    {
        return [
            self::PICTURES_COMPRESSION_DPI330,
            self::PICTURES_COMPRESSION_DPI220,
            self::PICTURES_COMPRESSION_DPI150,
            self::PICTURES_COMPRESSION_DPI96,
            self::PICTURES_COMPRESSION_DPI72,
            self::PICTURES_COMPRESSION_DOCUMENT_RESOLUTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotesPositionAllowableValues()
    {
        return [
            self::NOTES_POSITION_NONE,
            self::NOTES_POSITION_BOTTOM_FULL,
            self::NOTES_POSITION_BOTTOM_TRUNCATED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommentsPositionAllowableValues()
    {
        return [
            self::COMMENTS_POSITION_NONE,
            self::COMMENTS_POSITION_BOTTOM,
            self::COMMENTS_POSITION_RIGHT,
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

        $this->container['save_as_zip'] = isset($data['save_as_zip']) ? $data['save_as_zip'] : null;
        $this->container['sub_directory_name'] = isset($data['sub_directory_name']) ? $data['sub_directory_name'] : null;
        $this->container['show_hidden_slides'] = isset($data['show_hidden_slides']) ? $data['show_hidden_slides'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['pictures_compression'] = isset($data['pictures_compression']) ? $data['pictures_compression'] : null;
        $this->container['delete_pictures_cropped_areas'] = isset($data['delete_pictures_cropped_areas']) ? $data['delete_pictures_cropped_areas'] : null;
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

        if ($this->container['save_as_zip'] === null) {
            $invalidProperties[] = "'save_as_zip' can't be null";
        }
        if ($this->container['show_hidden_slides'] === null) {
            $invalidProperties[] = "'show_hidden_slides' can't be null";
        }
        if ($this->container['jpeg_quality'] === null) {
            $invalidProperties[] = "'jpeg_quality' can't be null";
        }
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!in_array($this->container['pictures_compression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pictures_compression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['delete_pictures_cropped_areas'] === null) {
            $invalidProperties[] = "'delete_pictures_cropped_areas' can't be null";
        }
        if ($this->container['notes_position'] === null) {
            $invalidProperties[] = "'notes_position' can't be null";
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notes_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notes_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['comments_position'] === null) {
            $invalidProperties[] = "'comments_position' can't be null";
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['comments_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'comments_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['comments_area_width'] === null) {
            $invalidProperties[] = "'comments_area_width' can't be null";
        }
        if ($this->container['show_comments_by_no_author'] === null) {
            $invalidProperties[] = "'show_comments_by_no_author' can't be null";
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

        if ($this->container['save_as_zip'] === null) {
            return false;
        }
        if ($this->container['show_hidden_slides'] === null) {
            return false;
        }
        if ($this->container['jpeg_quality'] === null) {
            return false;
        }
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!in_array($this->container['pictures_compression'], $allowedValues)) {
            return false;
        }
        if ($this->container['delete_pictures_cropped_areas'] === null) {
            return false;
        }
        if ($this->container['notes_position'] === null) {
            return false;
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notes_position'], $allowedValues)) {
            return false;
        }
        if ($this->container['comments_position'] === null) {
            return false;
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['comments_position'], $allowedValues)) {
            return false;
        }
        if ($this->container['comments_area_width'] === null) {
            return false;
        }
        if ($this->container['show_comments_by_no_author'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets save_as_zip
     *
     * @return bool
     */
    public function getSaveAsZip()
    {
        return $this->container['save_as_zip'];
    }

    /**
     * Sets save_as_zip
     *
     * @param bool $save_as_zip Get or sets flag for save presentation as zip file
     *
     * @return $this
     */
    public function setSaveAsZip($save_as_zip)
    {
        $this->container['save_as_zip'] = $save_as_zip;

        return $this;
    }

    /**
     * Gets sub_directory_name
     *
     * @return string
     */
    public function getSubDirectoryName()
    {
        return $this->container['sub_directory_name'];
    }

    /**
     * Sets sub_directory_name
     *
     * @param string $sub_directory_name Get or set name of subdirectory in zip-file for store external files
     *
     * @return $this
     */
    public function setSubDirectoryName($sub_directory_name)
    {
        $this->container['sub_directory_name'] = $sub_directory_name;

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
     * Gets jpeg_quality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpeg_quality'];
    }

    /**
     * Sets jpeg_quality
     *
     * @param int $jpeg_quality Returns or sets a value determining the quality of the JPEG images inside PDF document.
     *
     * @return $this
     */
    public function setJpegQuality($jpeg_quality)
    {
        $this->container['jpeg_quality'] = $jpeg_quality;

        return $this;
    }

    /**
     * Gets pictures_compression
     *
     * @return string
     */
    public function getPicturesCompression()
    {
        return $this->container['pictures_compression'];
    }

    /**
     * Sets pictures_compression
     *
     * @param string $pictures_compression Represents the pictures compression level
     *
     * @return $this
     */
    public function setPicturesCompression($pictures_compression)
    {
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!is_null($pictures_compression) && !in_array($pictures_compression, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pictures_compression', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pictures_compression'] = $pictures_compression;

        return $this;
    }

    /**
     * Gets delete_pictures_cropped_areas
     *
     * @return bool
     */
    public function getDeletePicturesCroppedAreas()
    {
        return $this->container['delete_pictures_cropped_areas'];
    }

    /**
     * Sets delete_pictures_cropped_areas
     *
     * @param bool $delete_pictures_cropped_areas A boolean flag indicates if the cropped parts remain as part of the document. If true the cropped  parts will removed, if false they will be serialized in the document (which can possible lead to a  larger file)
     *
     * @return $this
     */
    public function setDeletePicturesCroppedAreas($delete_pictures_cropped_areas)
    {
        $this->container['delete_pictures_cropped_areas'] = $delete_pictures_cropped_areas;

        return $this;
    }

    /**
     * Gets notes_position
     *
     * @return string
     */
    public function getNotesPosition()
    {
        return $this->container['notes_position'];
    }

    /**
     * Sets notes_position
     *
     * @param string $notes_position Gets or sets the position of the notes on the page.
     *
     * @return $this
     */
    public function setNotesPosition($notes_position)
    {
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($notes_position, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'notes_position', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notes_position'] = $notes_position;

        return $this;
    }

    /**
     * Gets comments_position
     *
     * @return string
     */
    public function getCommentsPosition()
    {
        return $this->container['comments_position'];
    }

    /**
     * Sets comments_position
     *
     * @param string $comments_position Gets or sets the position of the comments on the page.
     *
     * @return $this
     */
    public function setCommentsPosition($comments_position)
    {
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($comments_position, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'comments_position', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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


