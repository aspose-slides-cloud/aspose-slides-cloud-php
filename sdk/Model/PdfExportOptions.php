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
 * PdfExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in Pdf format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PdfExportOptions extends ExportOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PdfExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text_compression' => 'string',
        'embed_full_fonts' => 'bool',
        'compliance' => 'string',
        'sufficient_resolution' => 'double',
        'jpeg_quality' => 'int',
        'draw_slides_frame' => 'bool',
        'show_hidden_slides' => 'bool',
        'save_metafiles_as_png' => 'bool',
        'password' => 'string',
        'embed_true_type_fonts_for_ascii' => 'bool',
        'additional_common_font_families' => 'string[]',
        'notes_position' => 'string',
        'comments_position' => 'string',
        'comments_area_width' => 'int',
        'comments_area_color' => 'string',
        'show_comments_by_no_author' => 'bool',
        'image_transparent_color' => 'string',
        'apply_image_transparent' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text_compression' => null,
        'embed_full_fonts' => null,
        'compliance' => null,
        'sufficient_resolution' => 'double',
        'jpeg_quality' => 'byte',
        'draw_slides_frame' => null,
        'show_hidden_slides' => null,
        'save_metafiles_as_png' => null,
        'password' => null,
        'embed_true_type_fonts_for_ascii' => null,
        'additional_common_font_families' => null,
        'notes_position' => null,
        'comments_position' => null,
        'comments_area_width' => 'int32',
        'comments_area_color' => null,
        'show_comments_by_no_author' => null,
        'image_transparent_color' => null,
        'apply_image_transparent' => null
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
        'text_compression' => 'TextCompression',
        'embed_full_fonts' => 'EmbedFullFonts',
        'compliance' => 'Compliance',
        'sufficient_resolution' => 'SufficientResolution',
        'jpeg_quality' => 'JpegQuality',
        'draw_slides_frame' => 'DrawSlidesFrame',
        'show_hidden_slides' => 'ShowHiddenSlides',
        'save_metafiles_as_png' => 'SaveMetafilesAsPng',
        'password' => 'Password',
        'embed_true_type_fonts_for_ascii' => 'EmbedTrueTypeFontsForASCII',
        'additional_common_font_families' => 'AdditionalCommonFontFamilies',
        'notes_position' => 'NotesPosition',
        'comments_position' => 'CommentsPosition',
        'comments_area_width' => 'CommentsAreaWidth',
        'comments_area_color' => 'CommentsAreaColor',
        'show_comments_by_no_author' => 'ShowCommentsByNoAuthor',
        'image_transparent_color' => 'ImageTransparentColor',
        'apply_image_transparent' => 'ApplyImageTransparent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_compression' => 'setTextCompression',
        'embed_full_fonts' => 'setEmbedFullFonts',
        'compliance' => 'setCompliance',
        'sufficient_resolution' => 'setSufficientResolution',
        'jpeg_quality' => 'setJpegQuality',
        'draw_slides_frame' => 'setDrawSlidesFrame',
        'show_hidden_slides' => 'setShowHiddenSlides',
        'save_metafiles_as_png' => 'setSaveMetafilesAsPng',
        'password' => 'setPassword',
        'embed_true_type_fonts_for_ascii' => 'setEmbedTrueTypeFontsForAscii',
        'additional_common_font_families' => 'setAdditionalCommonFontFamilies',
        'notes_position' => 'setNotesPosition',
        'comments_position' => 'setCommentsPosition',
        'comments_area_width' => 'setCommentsAreaWidth',
        'comments_area_color' => 'setCommentsAreaColor',
        'show_comments_by_no_author' => 'setShowCommentsByNoAuthor',
        'image_transparent_color' => 'setImageTransparentColor',
        'apply_image_transparent' => 'setApplyImageTransparent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_compression' => 'getTextCompression',
        'embed_full_fonts' => 'getEmbedFullFonts',
        'compliance' => 'getCompliance',
        'sufficient_resolution' => 'getSufficientResolution',
        'jpeg_quality' => 'getJpegQuality',
        'draw_slides_frame' => 'getDrawSlidesFrame',
        'show_hidden_slides' => 'getShowHiddenSlides',
        'save_metafiles_as_png' => 'getSaveMetafilesAsPng',
        'password' => 'getPassword',
        'embed_true_type_fonts_for_ascii' => 'getEmbedTrueTypeFontsForAscii',
        'additional_common_font_families' => 'getAdditionalCommonFontFamilies',
        'notes_position' => 'getNotesPosition',
        'comments_position' => 'getCommentsPosition',
        'comments_area_width' => 'getCommentsAreaWidth',
        'comments_area_color' => 'getCommentsAreaColor',
        'show_comments_by_no_author' => 'getShowCommentsByNoAuthor',
        'image_transparent_color' => 'getImageTransparentColor',
        'apply_image_transparent' => 'getApplyImageTransparent'
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

    const TEXT_COMPRESSION_NONE = 'None';
    const TEXT_COMPRESSION_FLATE = 'Flate';
    const COMPLIANCE_PDF15 = 'Pdf15';
    const COMPLIANCE_PDF_A1B = 'PdfA1b';
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
    public function getTextCompressionAllowableValues()
    {
        return [
            self::TEXT_COMPRESSION_NONE,
            self::TEXT_COMPRESSION_FLATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComplianceAllowableValues()
    {
        return [
            self::COMPLIANCE_PDF15,
            self::COMPLIANCE_PDF_A1B,
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

        $this->container['text_compression'] = isset($data['text_compression']) ? $data['text_compression'] : null;
        $this->container['embed_full_fonts'] = isset($data['embed_full_fonts']) ? $data['embed_full_fonts'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['sufficient_resolution'] = isset($data['sufficient_resolution']) ? $data['sufficient_resolution'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['draw_slides_frame'] = isset($data['draw_slides_frame']) ? $data['draw_slides_frame'] : null;
        $this->container['show_hidden_slides'] = isset($data['show_hidden_slides']) ? $data['show_hidden_slides'] : null;
        $this->container['save_metafiles_as_png'] = isset($data['save_metafiles_as_png']) ? $data['save_metafiles_as_png'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['embed_true_type_fonts_for_ascii'] = isset($data['embed_true_type_fonts_for_ascii']) ? $data['embed_true_type_fonts_for_ascii'] : null;
        $this->container['additional_common_font_families'] = isset($data['additional_common_font_families']) ? $data['additional_common_font_families'] : null;
        $this->container['notes_position'] = isset($data['notes_position']) ? $data['notes_position'] : null;
        $this->container['comments_position'] = isset($data['comments_position']) ? $data['comments_position'] : null;
        $this->container['comments_area_width'] = isset($data['comments_area_width']) ? $data['comments_area_width'] : null;
        $this->container['comments_area_color'] = isset($data['comments_area_color']) ? $data['comments_area_color'] : null;
        $this->container['show_comments_by_no_author'] = isset($data['show_comments_by_no_author']) ? $data['show_comments_by_no_author'] : null;
        $this->container['image_transparent_color'] = isset($data['image_transparent_color']) ? $data['image_transparent_color'] : null;
        $this->container['apply_image_transparent'] = isset($data['apply_image_transparent']) ? $data['apply_image_transparent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['text_compression'] === null) {
            $invalidProperties[] = "'text_compression' can't be null";
        }
        $allowedValues = $this->getTextCompressionAllowableValues();
        if (!in_array($this->container['text_compression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_compression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['embed_full_fonts'] === null) {
            $invalidProperties[] = "'embed_full_fonts' can't be null";
        }
        if ($this->container['compliance'] === null) {
            $invalidProperties[] = "'compliance' can't be null";
        }
        $allowedValues = $this->getComplianceAllowableValues();
        if (!in_array($this->container['compliance'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compliance', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sufficient_resolution'] === null) {
            $invalidProperties[] = "'sufficient_resolution' can't be null";
        }
        if ($this->container['jpeg_quality'] === null) {
            $invalidProperties[] = "'jpeg_quality' can't be null";
        }
        if ($this->container['draw_slides_frame'] === null) {
            $invalidProperties[] = "'draw_slides_frame' can't be null";
        }
        if ($this->container['show_hidden_slides'] === null) {
            $invalidProperties[] = "'show_hidden_slides' can't be null";
        }
        if ($this->container['save_metafiles_as_png'] === null) {
            $invalidProperties[] = "'save_metafiles_as_png' can't be null";
        }
        if ($this->container['embed_true_type_fonts_for_ascii'] === null) {
            $invalidProperties[] = "'embed_true_type_fonts_for_ascii' can't be null";
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
        if ($this->container['apply_image_transparent'] === null) {
            $invalidProperties[] = "'apply_image_transparent' can't be null";
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

        if ($this->container['text_compression'] === null) {
            return false;
        }
        $allowedValues = $this->getTextCompressionAllowableValues();
        if (!in_array($this->container['text_compression'], $allowedValues)) {
            return false;
        }
        if ($this->container['embed_full_fonts'] === null) {
            return false;
        }
        if ($this->container['compliance'] === null) {
            return false;
        }
        $allowedValues = $this->getComplianceAllowableValues();
        if (!in_array($this->container['compliance'], $allowedValues)) {
            return false;
        }
        if ($this->container['sufficient_resolution'] === null) {
            return false;
        }
        if ($this->container['jpeg_quality'] === null) {
            return false;
        }
        if ($this->container['draw_slides_frame'] === null) {
            return false;
        }
        if ($this->container['show_hidden_slides'] === null) {
            return false;
        }
        if ($this->container['save_metafiles_as_png'] === null) {
            return false;
        }
        if ($this->container['embed_true_type_fonts_for_ascii'] === null) {
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
        if ($this->container['apply_image_transparent'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets text_compression
     *
     * @return string
     */
    public function getTextCompression()
    {
        return $this->container['text_compression'];
    }

    /**
     * Sets text_compression
     *
     * @param string $text_compression Specifies compression type to be used for all textual content in the document.
     *
     * @return $this
     */
    public function setTextCompression($text_compression)
    {
        $allowedValues = $this->getTextCompressionAllowableValues();
        if (!in_array($text_compression, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_compression', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['text_compression'] = $text_compression;

        return $this;
    }

    /**
     * Gets embed_full_fonts
     *
     * @return bool
     */
    public function getEmbedFullFonts()
    {
        return $this->container['embed_full_fonts'];
    }

    /**
     * Sets embed_full_fonts
     *
     * @param bool $embed_full_fonts Determines if all characters of font should be embedded or only used subset.
     *
     * @return $this
     */
    public function setEmbedFullFonts($embed_full_fonts)
    {
        $this->container['embed_full_fonts'] = $embed_full_fonts;

        return $this;
    }

    /**
     * Gets compliance
     *
     * @return string
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /**
     * Sets compliance
     *
     * @param string $compliance Desired conformance level for generated PDF document.
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $allowedValues = $this->getComplianceAllowableValues();
        if (!in_array($compliance, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'compliance', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compliance'] = $compliance;

        return $this;
    }

    /**
     * Gets sufficient_resolution
     *
     * @return double
     */
    public function getSufficientResolution()
    {
        return $this->container['sufficient_resolution'];
    }

    /**
     * Sets sufficient_resolution
     *
     * @param double $sufficient_resolution Returns or sets a value determining resolution of images inside PDF document.  Property affects on file size, time of export and image quality. The default value is 96.
     *
     * @return $this
     */
    public function setSufficientResolution($sufficient_resolution)
    {
        $this->container['sufficient_resolution'] = $sufficient_resolution;

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
     * Gets draw_slides_frame
     *
     * @return bool
     */
    public function getDrawSlidesFrame()
    {
        return $this->container['draw_slides_frame'];
    }

    /**
     * Sets draw_slides_frame
     *
     * @param bool $draw_slides_frame True to draw black frame around each slide.
     *
     * @return $this
     */
    public function setDrawSlidesFrame($draw_slides_frame)
    {
        $this->container['draw_slides_frame'] = $draw_slides_frame;

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
     * Gets save_metafiles_as_png
     *
     * @return bool
     */
    public function getSaveMetafilesAsPng()
    {
        return $this->container['save_metafiles_as_png'];
    }

    /**
     * Sets save_metafiles_as_png
     *
     * @param bool $save_metafiles_as_png True to convert all metafiles used in a presentation to the PNG images.
     *
     * @return $this
     */
    public function setSaveMetafilesAsPng($save_metafiles_as_png)
    {
        $this->container['save_metafiles_as_png'] = $save_metafiles_as_png;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Setting user password to protect the PDF document.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets embed_true_type_fonts_for_ascii
     *
     * @return bool
     */
    public function getEmbedTrueTypeFontsForAscii()
    {
        return $this->container['embed_true_type_fonts_for_ascii'];
    }

    /**
     * Sets embed_true_type_fonts_for_ascii
     *
     * @param bool $embed_true_type_fonts_for_ascii Determines if Aspose.Slides will embed common fonts for ASCII (33..127 code range) text. Fonts for character codes greater than 127 are always embedded. Common fonts list includes PDF's base 14 fonts and additional user specified fonts.
     *
     * @return $this
     */
    public function setEmbedTrueTypeFontsForAscii($embed_true_type_fonts_for_ascii)
    {
        $this->container['embed_true_type_fonts_for_ascii'] = $embed_true_type_fonts_for_ascii;

        return $this;
    }

    /**
     * Gets additional_common_font_families
     *
     * @return string[]
     */
    public function getAdditionalCommonFontFamilies()
    {
        return $this->container['additional_common_font_families'];
    }

    /**
     * Sets additional_common_font_families
     *
     * @param string[] $additional_common_font_families Returns or sets an array of user-defined names of font families which Aspose.Slides should consider common.
     *
     * @return $this
     */
    public function setAdditionalCommonFontFamilies($additional_common_font_families)
    {
        $this->container['additional_common_font_families'] = $additional_common_font_families;

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
     * Gets image_transparent_color
     *
     * @return string
     */
    public function getImageTransparentColor()
    {
        return $this->container['image_transparent_color'];
    }

    /**
     * Sets image_transparent_color
     *
     * @param string $image_transparent_color Image transparent color.
     *
     * @return $this
     */
    public function setImageTransparentColor($image_transparent_color)
    {
        $this->container['image_transparent_color'] = $image_transparent_color;

        return $this;
    }

    /**
     * Gets apply_image_transparent
     *
     * @return bool
     */
    public function getApplyImageTransparent()
    {
        return $this->container['apply_image_transparent'];
    }

    /**
     * Sets apply_image_transparent
     *
     * @param bool $apply_image_transparent True to apply specified ImageTransparentColor  to an image.
     *
     * @return $this
     */
    public function setApplyImageTransparent($apply_image_transparent)
    {
        $this->container['apply_image_transparent'] = $apply_image_transparent;

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


