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
 * SvgExportOptions Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SvgExportOptions extends ExportOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SvgExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vectorize_text' => 'bool',
        'metafile_rasterization_dpi' => 'int',
        'disable3_d_text' => 'bool',
        'disable_gradient_split' => 'bool',
        'disable_line_end_cropping' => 'bool',
        'jpeg_quality' => 'int',
        'pictures_compression' => 'string',
        'delete_pictures_cropped_areas' => 'bool',
        'external_fonts_handling' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vectorize_text' => null,
        'metafile_rasterization_dpi' => 'int32',
        'disable3_d_text' => null,
        'disable_gradient_split' => null,
        'disable_line_end_cropping' => null,
        'jpeg_quality' => 'int32',
        'pictures_compression' => null,
        'delete_pictures_cropped_areas' => null,
        'external_fonts_handling' => null
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
        'vectorize_text' => 'VectorizeText',
        'metafile_rasterization_dpi' => 'MetafileRasterizationDpi',
        'disable3_d_text' => 'Disable3DText',
        'disable_gradient_split' => 'DisableGradientSplit',
        'disable_line_end_cropping' => 'DisableLineEndCropping',
        'jpeg_quality' => 'JpegQuality',
        'pictures_compression' => 'PicturesCompression',
        'delete_pictures_cropped_areas' => 'DeletePicturesCroppedAreas',
        'external_fonts_handling' => 'ExternalFontsHandling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vectorize_text' => 'setVectorizeText',
        'metafile_rasterization_dpi' => 'setMetafileRasterizationDpi',
        'disable3_d_text' => 'setDisable3DText',
        'disable_gradient_split' => 'setDisableGradientSplit',
        'disable_line_end_cropping' => 'setDisableLineEndCropping',
        'jpeg_quality' => 'setJpegQuality',
        'pictures_compression' => 'setPicturesCompression',
        'delete_pictures_cropped_areas' => 'setDeletePicturesCroppedAreas',
        'external_fonts_handling' => 'setExternalFontsHandling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vectorize_text' => 'getVectorizeText',
        'metafile_rasterization_dpi' => 'getMetafileRasterizationDpi',
        'disable3_d_text' => 'getDisable3DText',
        'disable_gradient_split' => 'getDisableGradientSplit',
        'disable_line_end_cropping' => 'getDisableLineEndCropping',
        'jpeg_quality' => 'getJpegQuality',
        'pictures_compression' => 'getPicturesCompression',
        'delete_pictures_cropped_areas' => 'getDeletePicturesCroppedAreas',
        'external_fonts_handling' => 'getExternalFontsHandling'
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
    const EXTERNAL_FONTS_HANDLING_ADD_LINKS_TO_FONT_FILES = 'AddLinksToFontFiles';
    const EXTERNAL_FONTS_HANDLING_EMBED = 'Embed';
    const EXTERNAL_FONTS_HANDLING_VECTORIZE = 'Vectorize';
    

    
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
    public function getExternalFontsHandlingAllowableValues()
    {
        return [
            self::EXTERNAL_FONTS_HANDLING_ADD_LINKS_TO_FONT_FILES,
            self::EXTERNAL_FONTS_HANDLING_EMBED,
            self::EXTERNAL_FONTS_HANDLING_VECTORIZE,
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

        $this->container['vectorize_text'] = isset($data['vectorize_text']) ? $data['vectorize_text'] : null;
        $this->container['metafile_rasterization_dpi'] = isset($data['metafile_rasterization_dpi']) ? $data['metafile_rasterization_dpi'] : null;
        $this->container['disable3_d_text'] = isset($data['disable3_d_text']) ? $data['disable3_d_text'] : null;
        $this->container['disable_gradient_split'] = isset($data['disable_gradient_split']) ? $data['disable_gradient_split'] : null;
        $this->container['disable_line_end_cropping'] = isset($data['disable_line_end_cropping']) ? $data['disable_line_end_cropping'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['pictures_compression'] = isset($data['pictures_compression']) ? $data['pictures_compression'] : null;
        $this->container['delete_pictures_cropped_areas'] = isset($data['delete_pictures_cropped_areas']) ? $data['delete_pictures_cropped_areas'] : null;
        $this->container['external_fonts_handling'] = isset($data['external_fonts_handling']) ? $data['external_fonts_handling'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['vectorize_text'] === null) {
            $invalidProperties[] = "'vectorize_text' can't be null";
        }
        if ($this->container['metafile_rasterization_dpi'] === null) {
            $invalidProperties[] = "'metafile_rasterization_dpi' can't be null";
        }
        if ($this->container['disable3_d_text'] === null) {
            $invalidProperties[] = "'disable3_d_text' can't be null";
        }
        if ($this->container['disable_gradient_split'] === null) {
            $invalidProperties[] = "'disable_gradient_split' can't be null";
        }
        if ($this->container['disable_line_end_cropping'] === null) {
            $invalidProperties[] = "'disable_line_end_cropping' can't be null";
        }
        if ($this->container['jpeg_quality'] === null) {
            $invalidProperties[] = "'jpeg_quality' can't be null";
        }
        if ($this->container['pictures_compression'] === null) {
            $invalidProperties[] = "'pictures_compression' can't be null";
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
        if ($this->container['external_fonts_handling'] === null) {
            $invalidProperties[] = "'external_fonts_handling' can't be null";
        }
        $allowedValues = $this->getExternalFontsHandlingAllowableValues();
        if (!in_array($this->container['external_fonts_handling'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'external_fonts_handling', must be one of '%s'",
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

        if ($this->container['vectorize_text'] === null) {
            return false;
        }
        if ($this->container['metafile_rasterization_dpi'] === null) {
            return false;
        }
        if ($this->container['disable3_d_text'] === null) {
            return false;
        }
        if ($this->container['disable_gradient_split'] === null) {
            return false;
        }
        if ($this->container['disable_line_end_cropping'] === null) {
            return false;
        }
        if ($this->container['jpeg_quality'] === null) {
            return false;
        }
        if ($this->container['pictures_compression'] === null) {
            return false;
        }
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!in_array($this->container['pictures_compression'], $allowedValues)) {
            return false;
        }
        if ($this->container['delete_pictures_cropped_areas'] === null) {
            return false;
        }
        if ($this->container['external_fonts_handling'] === null) {
            return false;
        }
        $allowedValues = $this->getExternalFontsHandlingAllowableValues();
        if (!in_array($this->container['external_fonts_handling'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets vectorize_text
     *
     * @return bool
     */
    public function getVectorizeText()
    {
        return $this->container['vectorize_text'];
    }

    /**
     * Sets vectorize_text
     *
     * @param bool $vectorize_text Determines whether the text on a slide will be saved as graphics.
     *
     * @return $this
     */
    public function setVectorizeText($vectorize_text)
    {
        $this->container['vectorize_text'] = $vectorize_text;

        return $this;
    }

    /**
     * Gets metafile_rasterization_dpi
     *
     * @return int
     */
    public function getMetafileRasterizationDpi()
    {
        return $this->container['metafile_rasterization_dpi'];
    }

    /**
     * Sets metafile_rasterization_dpi
     *
     * @param int $metafile_rasterization_dpi Returns or sets the lower resolution limit for metafile rasterization.
     *
     * @return $this
     */
    public function setMetafileRasterizationDpi($metafile_rasterization_dpi)
    {
        $this->container['metafile_rasterization_dpi'] = $metafile_rasterization_dpi;

        return $this;
    }

    /**
     * Gets disable3_d_text
     *
     * @return bool
     */
    public function getDisable3DText()
    {
        return $this->container['disable3_d_text'];
    }

    /**
     * Sets disable3_d_text
     *
     * @param bool $disable3_d_text Determines whether the 3D text is disabled in SVG.
     *
     * @return $this
     */
    public function setDisable3DText($disable3_d_text)
    {
        $this->container['disable3_d_text'] = $disable3_d_text;

        return $this;
    }

    /**
     * Gets disable_gradient_split
     *
     * @return bool
     */
    public function getDisableGradientSplit()
    {
        return $this->container['disable_gradient_split'];
    }

    /**
     * Sets disable_gradient_split
     *
     * @param bool $disable_gradient_split Disables splitting FromCornerX and FromCenter gradients.
     *
     * @return $this
     */
    public function setDisableGradientSplit($disable_gradient_split)
    {
        $this->container['disable_gradient_split'] = $disable_gradient_split;

        return $this;
    }

    /**
     * Gets disable_line_end_cropping
     *
     * @return bool
     */
    public function getDisableLineEndCropping()
    {
        return $this->container['disable_line_end_cropping'];
    }

    /**
     * Sets disable_line_end_cropping
     *
     * @param bool $disable_line_end_cropping SVG 1.1 lacks ability to define insets for markers. Aspose.Slides SVG writing engine has workaround for that problem: it crops end of line with arrow, so, line doesn't overlap markers. This option switches off such behavior.
     *
     * @return $this
     */
    public function setDisableLineEndCropping($disable_line_end_cropping)
    {
        $this->container['disable_line_end_cropping'] = $disable_line_end_cropping;

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
     * @param int $jpeg_quality Determines JPEG encoding quality.
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
        if (!in_array($pictures_compression, $allowedValues)) {
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
     * Gets external_fonts_handling
     *
     * @return string
     */
    public function getExternalFontsHandling()
    {
        return $this->container['external_fonts_handling'];
    }

    /**
     * Sets external_fonts_handling
     *
     * @param string $external_fonts_handling Determines a way of handling externally loaded fonts.
     *
     * @return $this
     */
    public function setExternalFontsHandling($external_fonts_handling)
    {
        $allowedValues = $this->getExternalFontsHandlingAllowableValues();
        if (!in_array($external_fonts_handling, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'external_fonts_handling', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['external_fonts_handling'] = $external_fonts_handling;

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


