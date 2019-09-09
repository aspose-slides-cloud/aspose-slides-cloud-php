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
        'saveAsZip' => 'bool',
        'subDirectoryName' => 'string',
        'showHiddenSlides' => 'bool',
        'svgResponsiveLayout' => 'bool',
        'jpegQuality' => 'int',
        'picturesCompression' => 'string',
        'deletePicturesCroppedAreas' => 'bool',
        'notesPosition' => 'string',
        'commentsPosition' => 'string',
        'commentsAreaWidth' => 'int',
        'commentsAreaColor' => 'string',
        'showCommentsByNoAuthor' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'saveAsZip' => null,
        'subDirectoryName' => null,
        'showHiddenSlides' => null,
        'svgResponsiveLayout' => null,
        'jpegQuality' => 'byte',
        'picturesCompression' => null,
        'deletePicturesCroppedAreas' => null,
        'notesPosition' => null,
        'commentsPosition' => null,
        'commentsAreaWidth' => 'int32',
        'commentsAreaColor' => null,
        'showCommentsByNoAuthor' => null
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
        'saveAsZip' => 'SaveAsZip',
        'subDirectoryName' => 'SubDirectoryName',
        'showHiddenSlides' => 'ShowHiddenSlides',
        'svgResponsiveLayout' => 'SvgResponsiveLayout',
        'jpegQuality' => 'JpegQuality',
        'picturesCompression' => 'PicturesCompression',
        'deletePicturesCroppedAreas' => 'DeletePicturesCroppedAreas',
        'notesPosition' => 'NotesPosition',
        'commentsPosition' => 'CommentsPosition',
        'commentsAreaWidth' => 'CommentsAreaWidth',
        'commentsAreaColor' => 'CommentsAreaColor',
        'showCommentsByNoAuthor' => 'ShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'saveAsZip' => 'setSaveAsZip',
        'subDirectoryName' => 'setSubDirectoryName',
        'showHiddenSlides' => 'setShowHiddenSlides',
        'svgResponsiveLayout' => 'setSvgResponsiveLayout',
        'jpegQuality' => 'setJpegQuality',
        'picturesCompression' => 'setPicturesCompression',
        'deletePicturesCroppedAreas' => 'setDeletePicturesCroppedAreas',
        'notesPosition' => 'setNotesPosition',
        'commentsPosition' => 'setCommentsPosition',
        'commentsAreaWidth' => 'setCommentsAreaWidth',
        'commentsAreaColor' => 'setCommentsAreaColor',
        'showCommentsByNoAuthor' => 'setShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'saveAsZip' => 'getSaveAsZip',
        'subDirectoryName' => 'getSubDirectoryName',
        'showHiddenSlides' => 'getShowHiddenSlides',
        'svgResponsiveLayout' => 'getSvgResponsiveLayout',
        'jpegQuality' => 'getJpegQuality',
        'picturesCompression' => 'getPicturesCompression',
        'deletePicturesCroppedAreas' => 'getDeletePicturesCroppedAreas',
        'notesPosition' => 'getNotesPosition',
        'commentsPosition' => 'getCommentsPosition',
        'commentsAreaWidth' => 'getCommentsAreaWidth',
        'commentsAreaColor' => 'getCommentsAreaColor',
        'showCommentsByNoAuthor' => 'getShowCommentsByNoAuthor'
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

        $this->container['saveAsZip'] = isset($data['saveAsZip']) ? $data['saveAsZip'] : null;
        $this->container['subDirectoryName'] = isset($data['subDirectoryName']) ? $data['subDirectoryName'] : null;
        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['svgResponsiveLayout'] = isset($data['svgResponsiveLayout']) ? $data['svgResponsiveLayout'] : null;
        $this->container['jpegQuality'] = isset($data['jpegQuality']) ? $data['jpegQuality'] : null;
        $this->container['picturesCompression'] = isset($data['picturesCompression']) ? $data['picturesCompression'] : null;
        $this->container['deletePicturesCroppedAreas'] = isset($data['deletePicturesCroppedAreas']) ? $data['deletePicturesCroppedAreas'] : null;
        $this->container['notesPosition'] = isset($data['notesPosition']) ? $data['notesPosition'] : null;
        $this->container['commentsPosition'] = isset($data['commentsPosition']) ? $data['commentsPosition'] : null;
        $this->container['commentsAreaWidth'] = isset($data['commentsAreaWidth']) ? $data['commentsAreaWidth'] : null;
        $this->container['commentsAreaColor'] = isset($data['commentsAreaColor']) ? $data['commentsAreaColor'] : null;
        $this->container['showCommentsByNoAuthor'] = isset($data['showCommentsByNoAuthor']) ? $data['showCommentsByNoAuthor'] : null;
        $this->container['format'] = 'html';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['saveAsZip'] === null) {
            $invalidProperties[] = "'saveAsZip' can't be null";
        }
        if ($this->container['showHiddenSlides'] === null) {
            $invalidProperties[] = "'showHiddenSlides' can't be null";
        }
        if ($this->container['svgResponsiveLayout'] === null) {
            $invalidProperties[] = "'svgResponsiveLayout' can't be null";
        }
        if ($this->container['jpegQuality'] === null) {
            $invalidProperties[] = "'jpegQuality' can't be null";
        }
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!in_array($this->container['picturesCompression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'picturesCompression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['deletePicturesCroppedAreas'] === null) {
            $invalidProperties[] = "'deletePicturesCroppedAreas' can't be null";
        }
        if ($this->container['notesPosition'] === null) {
            $invalidProperties[] = "'notesPosition' can't be null";
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notesPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notesPosition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['commentsPosition'] === null) {
            $invalidProperties[] = "'commentsPosition' can't be null";
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['commentsPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'commentsPosition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['commentsAreaWidth'] === null) {
            $invalidProperties[] = "'commentsAreaWidth' can't be null";
        }
        if ($this->container['showCommentsByNoAuthor'] === null) {
            $invalidProperties[] = "'showCommentsByNoAuthor' can't be null";
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

        if ($this->container['saveAsZip'] === null) {
            return false;
        }
        if ($this->container['showHiddenSlides'] === null) {
            return false;
        }
        if ($this->container['svgResponsiveLayout'] === null) {
            return false;
        }
        if ($this->container['jpegQuality'] === null) {
            return false;
        }
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!in_array($this->container['picturesCompression'], $allowedValues)) {
            return false;
        }
        if ($this->container['deletePicturesCroppedAreas'] === null) {
            return false;
        }
        if ($this->container['notesPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notesPosition'], $allowedValues)) {
            return false;
        }
        if ($this->container['commentsPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['commentsPosition'], $allowedValues)) {
            return false;
        }
        if ($this->container['commentsAreaWidth'] === null) {
            return false;
        }
        if ($this->container['showCommentsByNoAuthor'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets saveAsZip
     *
     * @return bool
     */
    public function getSaveAsZip()
    {
        return $this->container['saveAsZip'];
    }

    /**
     * Sets saveAsZip
     *
     * @param bool $saveAsZip Get or sets flag for save presentation as zip file
     *
     * @return $this
     */
    public function setSaveAsZip($saveAsZip)
    {
        $this->container['saveAsZip'] = $saveAsZip;

        return $this;
    }

    /**
     * Gets subDirectoryName
     *
     * @return string
     */
    public function getSubDirectoryName()
    {
        return $this->container['subDirectoryName'];
    }

    /**
     * Sets subDirectoryName
     *
     * @param string $subDirectoryName Get or set name of subdirectory in zip-file for store external files
     *
     * @return $this
     */
    public function setSubDirectoryName($subDirectoryName)
    {
        $this->container['subDirectoryName'] = $subDirectoryName;

        return $this;
    }

    /**
     * Gets showHiddenSlides
     *
     * @return bool
     */
    public function getShowHiddenSlides()
    {
        return $this->container['showHiddenSlides'];
    }

    /**
     * Sets showHiddenSlides
     *
     * @param bool $showHiddenSlides Specifies whether the generated document should include hidden slides or not. Default is false.
     *
     * @return $this
     */
    public function setShowHiddenSlides($showHiddenSlides)
    {
        $this->container['showHiddenSlides'] = $showHiddenSlides;

        return $this;
    }

    /**
     * Gets svgResponsiveLayout
     *
     * @return bool
     */
    public function getSvgResponsiveLayout()
    {
        return $this->container['svgResponsiveLayout'];
    }

    /**
     * Sets svgResponsiveLayout
     *
     * @param bool $svgResponsiveLayout True to make layout responsive by excluding width and height attributes from svg container.
     *
     * @return $this
     */
    public function setSvgResponsiveLayout($svgResponsiveLayout)
    {
        $this->container['svgResponsiveLayout'] = $svgResponsiveLayout;

        return $this;
    }

    /**
     * Gets jpegQuality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpegQuality'];
    }

    /**
     * Sets jpegQuality
     *
     * @param int $jpegQuality Returns or sets a value determining the quality of the JPEG images inside PDF document.
     *
     * @return $this
     */
    public function setJpegQuality($jpegQuality)
    {
        $this->container['jpegQuality'] = $jpegQuality;

        return $this;
    }

    /**
     * Gets picturesCompression
     *
     * @return string
     */
    public function getPicturesCompression()
    {
        return $this->container['picturesCompression'];
    }

    /**
     * Sets picturesCompression
     *
     * @param string $picturesCompression Represents the pictures compression level
     *
     * @return $this
     */
    public function setPicturesCompression($picturesCompression)
    {
        $allowedValues = $this->getPicturesCompressionAllowableValues();


        if (is_numeric($picturesCompression)) {
            if ($picturesCompression >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'picturesCompression', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $picturesCompression = $allowedValues[$picturesCompression];
            }
        } else {
            if (!is_null($picturesCompression) && !in_array($picturesCompression, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'picturesCompression', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['picturesCompression'] = $picturesCompression;

        return $this;
    }

    /**
     * Gets deletePicturesCroppedAreas
     *
     * @return bool
     */
    public function getDeletePicturesCroppedAreas()
    {
        return $this->container['deletePicturesCroppedAreas'];
    }

    /**
     * Sets deletePicturesCroppedAreas
     *
     * @param bool $deletePicturesCroppedAreas A boolean flag indicates if the cropped parts remain as part of the document. If true the cropped  parts will removed, if false they will be serialized in the document (which can possible lead to a  larger file)
     *
     * @return $this
     */
    public function setDeletePicturesCroppedAreas($deletePicturesCroppedAreas)
    {
        $this->container['deletePicturesCroppedAreas'] = $deletePicturesCroppedAreas;

        return $this;
    }

    /**
     * Gets notesPosition
     *
     * @return string
     */
    public function getNotesPosition()
    {
        return $this->container['notesPosition'];
    }

    /**
     * Sets notesPosition
     *
     * @param string $notesPosition Gets or sets the position of the notes on the page.
     *
     * @return $this
     */
    public function setNotesPosition($notesPosition)
    {
        $allowedValues = $this->getNotesPositionAllowableValues();


        if (is_numeric($notesPosition)) {
            if ($notesPosition >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'notesPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $notesPosition = $allowedValues[$notesPosition];
            }
        } else {
            if (!in_array($notesPosition, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'notesPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['notesPosition'] = $notesPosition;

        return $this;
    }

    /**
     * Gets commentsPosition
     *
     * @return string
     */
    public function getCommentsPosition()
    {
        return $this->container['commentsPosition'];
    }

    /**
     * Sets commentsPosition
     *
     * @param string $commentsPosition Gets or sets the position of the comments on the page.
     *
     * @return $this
     */
    public function setCommentsPosition($commentsPosition)
    {
        $allowedValues = $this->getCommentsPositionAllowableValues();


        if (is_numeric($commentsPosition)) {
            if ($commentsPosition >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'commentsPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $commentsPosition = $allowedValues[$commentsPosition];
            }
        } else {
            if (!in_array($commentsPosition, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'commentsPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['commentsPosition'] = $commentsPosition;

        return $this;
    }

    /**
     * Gets commentsAreaWidth
     *
     * @return int
     */
    public function getCommentsAreaWidth()
    {
        return $this->container['commentsAreaWidth'];
    }

    /**
     * Sets commentsAreaWidth
     *
     * @param int $commentsAreaWidth Gets or sets the width of the comment output area in pixels (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaWidth($commentsAreaWidth)
    {
        $this->container['commentsAreaWidth'] = $commentsAreaWidth;

        return $this;
    }

    /**
     * Gets commentsAreaColor
     *
     * @return string
     */
    public function getCommentsAreaColor()
    {
        return $this->container['commentsAreaColor'];
    }

    /**
     * Sets commentsAreaColor
     *
     * @param string $commentsAreaColor Gets or sets the color of comments area (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaColor($commentsAreaColor)
    {
        $this->container['commentsAreaColor'] = $commentsAreaColor;

        return $this;
    }

    /**
     * Gets showCommentsByNoAuthor
     *
     * @return bool
     */
    public function getShowCommentsByNoAuthor()
    {
        return $this->container['showCommentsByNoAuthor'];
    }

    /**
     * Sets showCommentsByNoAuthor
     *
     * @param bool $showCommentsByNoAuthor True if comments that have no author are displayed. (Applies only if comments are displayed).
     *
     * @return $this
     */
    public function setShowCommentsByNoAuthor($showCommentsByNoAuthor)
    {
        $this->container['showCommentsByNoAuthor'] = $showCommentsByNoAuthor;

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


