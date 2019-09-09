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
 * @description Provides options that control how a presentation is saved in TIFF format.
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
        'compression' => 'string',
        'width' => 'int',
        'height' => 'int',
        'dpiX' => 'int',
        'dpiY' => 'int',
        'showHiddenSlides' => 'bool',
        'pixelFormat' => 'string',
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
        'compression' => null,
        'width' => 'int32',
        'height' => 'int32',
        'dpiX' => 'int32',
        'dpiY' => 'int32',
        'showHiddenSlides' => null,
        'pixelFormat' => null,
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
        'compression' => 'Compression',
        'width' => 'Width',
        'height' => 'Height',
        'dpiX' => 'DpiX',
        'dpiY' => 'DpiY',
        'showHiddenSlides' => 'ShowHiddenSlides',
        'pixelFormat' => 'PixelFormat',
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
        'compression' => 'setCompression',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dpiX' => 'setDpiX',
        'dpiY' => 'setDpiY',
        'showHiddenSlides' => 'setShowHiddenSlides',
        'pixelFormat' => 'setPixelFormat',
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
        'compression' => 'getCompression',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dpiX' => 'getDpiX',
        'dpiY' => 'getDpiY',
        'showHiddenSlides' => 'getShowHiddenSlides',
        'pixelFormat' => 'getPixelFormat',
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

    const COMPRESSION__DEFAULT = 'Default';
    const COMPRESSION_NONE = 'None';
    const COMPRESSION_CCITT3 = 'CCITT3';
    const COMPRESSION_CCITT4 = 'CCITT4';
    const COMPRESSION_LZW = 'LZW';
    const COMPRESSION_RLE = 'RLE';
    const PIXEL_FORMAT_FORMAT1BPP_INDEXED = 'Format1bppIndexed';
    const PIXEL_FORMAT_FORMAT4BPP_INDEXED = 'Format4bppIndexed';
    const PIXEL_FORMAT_FORMAT8BPP_INDEXED = 'Format8bppIndexed';
    const PIXEL_FORMAT_FORMAT24BPP_RGB = 'Format24bppRgb';
    const PIXEL_FORMAT_FORMAT32BPP_ARGB = 'Format32bppArgb';
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
    public function getCompressionAllowableValues()
    {
        return [
            self::COMPRESSION__DEFAULT,
            self::COMPRESSION_NONE,
            self::COMPRESSION_CCITT3,
            self::COMPRESSION_CCITT4,
            self::COMPRESSION_LZW,
            self::COMPRESSION_RLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPixelFormatAllowableValues()
    {
        return [
            self::PIXEL_FORMAT_FORMAT1BPP_INDEXED,
            self::PIXEL_FORMAT_FORMAT4BPP_INDEXED,
            self::PIXEL_FORMAT_FORMAT8BPP_INDEXED,
            self::PIXEL_FORMAT_FORMAT24BPP_RGB,
            self::PIXEL_FORMAT_FORMAT32BPP_ARGB,
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

        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['dpiX'] = isset($data['dpiX']) ? $data['dpiX'] : null;
        $this->container['dpiY'] = isset($data['dpiY']) ? $data['dpiY'] : null;
        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['pixelFormat'] = isset($data['pixelFormat']) ? $data['pixelFormat'] : null;
        $this->container['notesPosition'] = isset($data['notesPosition']) ? $data['notesPosition'] : null;
        $this->container['commentsPosition'] = isset($data['commentsPosition']) ? $data['commentsPosition'] : null;
        $this->container['commentsAreaWidth'] = isset($data['commentsAreaWidth']) ? $data['commentsAreaWidth'] : null;
        $this->container['commentsAreaColor'] = isset($data['commentsAreaColor']) ? $data['commentsAreaColor'] : null;
        $this->container['showCommentsByNoAuthor'] = isset($data['showCommentsByNoAuthor']) ? $data['showCommentsByNoAuthor'] : null;
        $this->container['format'] = 'tiff';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['compression'] === null) {
            $invalidProperties[] = "'compression' can't be null";
        }
        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['showHiddenSlides'] === null) {
            $invalidProperties[] = "'showHiddenSlides' can't be null";
        }
        if ($this->container['pixelFormat'] === null) {
            $invalidProperties[] = "'pixelFormat' can't be null";
        }
        $allowedValues = $this->getPixelFormatAllowableValues();
        if (!in_array($this->container['pixelFormat'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pixelFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['compression'] === null) {
            return false;
        }
        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            return false;
        }
        if ($this->container['showHiddenSlides'] === null) {
            return false;
        }
        if ($this->container['pixelFormat'] === null) {
            return false;
        }
        $allowedValues = $this->getPixelFormatAllowableValues();
        if (!in_array($this->container['pixelFormat'], $allowedValues)) {
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
     * Gets compression
     *
     * @return string
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
     * Sets compression
     *
     * @param string $compression Compression type.
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $allowedValues = $this->getCompressionAllowableValues();


        if (is_numeric($compression)) {
            if ($compression >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'compression', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $compression = $allowedValues[$compression];
            }
        } else {
            if (!in_array($compression, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'compression', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
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
     * @param int $width Width.
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
     * @param int $height Height.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets dpiX
     *
     * @return int
     */
    public function getDpiX()
    {
        return $this->container['dpiX'];
    }

    /**
     * Sets dpiX
     *
     * @param int $dpiX Horizontal resolution, in dots per inch.
     *
     * @return $this
     */
    public function setDpiX($dpiX)
    {
        $this->container['dpiX'] = $dpiX;

        return $this;
    }

    /**
     * Gets dpiY
     *
     * @return int
     */
    public function getDpiY()
    {
        return $this->container['dpiY'];
    }

    /**
     * Sets dpiY
     *
     * @param int $dpiY Vertical resolution, in dots per inch.
     *
     * @return $this
     */
    public function setDpiY($dpiY)
    {
        $this->container['dpiY'] = $dpiY;

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
     * Gets pixelFormat
     *
     * @return string
     */
    public function getPixelFormat()
    {
        return $this->container['pixelFormat'];
    }

    /**
     * Sets pixelFormat
     *
     * @param string $pixelFormat Specifies the pixel format for the generated images. Read/write ImagePixelFormat.
     *
     * @return $this
     */
    public function setPixelFormat($pixelFormat)
    {
        $allowedValues = $this->getPixelFormatAllowableValues();


        if (is_numeric($pixelFormat)) {
            if ($pixelFormat >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pixelFormat', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $pixelFormat = $allowedValues[$pixelFormat];
            }
        } else {
            if (!in_array($pixelFormat, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pixelFormat', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['pixelFormat'] = $pixelFormat;

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


