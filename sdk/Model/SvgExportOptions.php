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
 * @description Provides options that control how a presentation is saved in SVG format.
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
        'vectorizeText' => 'bool',
        'metafileRasterizationDpi' => 'int',
        'disable3DText' => 'bool',
        'disableGradientSplit' => 'bool',
        'disableLineEndCropping' => 'bool',
        'jpegQuality' => 'int',
        'picturesCompression' => 'string',
        'deletePicturesCroppedAreas' => 'bool',
        'externalFontsHandling' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vectorizeText' => null,
        'metafileRasterizationDpi' => 'int32',
        'disable3DText' => null,
        'disableGradientSplit' => null,
        'disableLineEndCropping' => null,
        'jpegQuality' => 'int32',
        'picturesCompression' => null,
        'deletePicturesCroppedAreas' => null,
        'externalFontsHandling' => null
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
        'vectorizeText' => 'VectorizeText',
        'metafileRasterizationDpi' => 'MetafileRasterizationDpi',
        'disable3DText' => 'Disable3DText',
        'disableGradientSplit' => 'DisableGradientSplit',
        'disableLineEndCropping' => 'DisableLineEndCropping',
        'jpegQuality' => 'JpegQuality',
        'picturesCompression' => 'PicturesCompression',
        'deletePicturesCroppedAreas' => 'DeletePicturesCroppedAreas',
        'externalFontsHandling' => 'ExternalFontsHandling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vectorizeText' => 'setVectorizeText',
        'metafileRasterizationDpi' => 'setMetafileRasterizationDpi',
        'disable3DText' => 'setDisable3DText',
        'disableGradientSplit' => 'setDisableGradientSplit',
        'disableLineEndCropping' => 'setDisableLineEndCropping',
        'jpegQuality' => 'setJpegQuality',
        'picturesCompression' => 'setPicturesCompression',
        'deletePicturesCroppedAreas' => 'setDeletePicturesCroppedAreas',
        'externalFontsHandling' => 'setExternalFontsHandling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vectorizeText' => 'getVectorizeText',
        'metafileRasterizationDpi' => 'getMetafileRasterizationDpi',
        'disable3DText' => 'getDisable3DText',
        'disableGradientSplit' => 'getDisableGradientSplit',
        'disableLineEndCropping' => 'getDisableLineEndCropping',
        'jpegQuality' => 'getJpegQuality',
        'picturesCompression' => 'getPicturesCompression',
        'deletePicturesCroppedAreas' => 'getDeletePicturesCroppedAreas',
        'externalFontsHandling' => 'getExternalFontsHandling'
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

        $this->container['vectorizeText'] = isset($data['vectorizeText']) ? $data['vectorizeText'] : null;
        $this->container['metafileRasterizationDpi'] = isset($data['metafileRasterizationDpi']) ? $data['metafileRasterizationDpi'] : null;
        $this->container['disable3DText'] = isset($data['disable3DText']) ? $data['disable3DText'] : null;
        $this->container['disableGradientSplit'] = isset($data['disableGradientSplit']) ? $data['disableGradientSplit'] : null;
        $this->container['disableLineEndCropping'] = isset($data['disableLineEndCropping']) ? $data['disableLineEndCropping'] : null;
        $this->container['jpegQuality'] = isset($data['jpegQuality']) ? $data['jpegQuality'] : null;
        $this->container['picturesCompression'] = isset($data['picturesCompression']) ? $data['picturesCompression'] : null;
        $this->container['deletePicturesCroppedAreas'] = isset($data['deletePicturesCroppedAreas']) ? $data['deletePicturesCroppedAreas'] : null;
        $this->container['externalFontsHandling'] = isset($data['externalFontsHandling']) ? $data['externalFontsHandling'] : null;
        $this->container['format'] = 'svg';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['vectorizeText'] === null) {
            $invalidProperties[] = "'vectorizeText' can't be null";
        }
        if ($this->container['metafileRasterizationDpi'] === null) {
            $invalidProperties[] = "'metafileRasterizationDpi' can't be null";
        }
        if ($this->container['disable3DText'] === null) {
            $invalidProperties[] = "'disable3DText' can't be null";
        }
        if ($this->container['disableGradientSplit'] === null) {
            $invalidProperties[] = "'disableGradientSplit' can't be null";
        }
        if ($this->container['disableLineEndCropping'] === null) {
            $invalidProperties[] = "'disableLineEndCropping' can't be null";
        }
        if ($this->container['jpegQuality'] === null) {
            $invalidProperties[] = "'jpegQuality' can't be null";
        }
        if ($this->container['picturesCompression'] === null) {
            $invalidProperties[] = "'picturesCompression' can't be null";
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
        if ($this->container['externalFontsHandling'] === null) {
            $invalidProperties[] = "'externalFontsHandling' can't be null";
        }
        $allowedValues = $this->getExternalFontsHandlingAllowableValues();
        if (!in_array($this->container['externalFontsHandling'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'externalFontsHandling', must be one of '%s'",
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

        if ($this->container['vectorizeText'] === null) {
            return false;
        }
        if ($this->container['metafileRasterizationDpi'] === null) {
            return false;
        }
        if ($this->container['disable3DText'] === null) {
            return false;
        }
        if ($this->container['disableGradientSplit'] === null) {
            return false;
        }
        if ($this->container['disableLineEndCropping'] === null) {
            return false;
        }
        if ($this->container['jpegQuality'] === null) {
            return false;
        }
        if ($this->container['picturesCompression'] === null) {
            return false;
        }
        $allowedValues = $this->getPicturesCompressionAllowableValues();
        if (!in_array($this->container['picturesCompression'], $allowedValues)) {
            return false;
        }
        if ($this->container['deletePicturesCroppedAreas'] === null) {
            return false;
        }
        if ($this->container['externalFontsHandling'] === null) {
            return false;
        }
        $allowedValues = $this->getExternalFontsHandlingAllowableValues();
        if (!in_array($this->container['externalFontsHandling'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets vectorizeText
     *
     * @return bool
     */
    public function getVectorizeText()
    {
        return $this->container['vectorizeText'];
    }

    /**
     * Sets vectorizeText
     *
     * @param bool $vectorizeText Determines whether the text on a slide will be saved as graphics.
     *
     * @return $this
     */
    public function setVectorizeText($vectorizeText)
    {
        $this->container['vectorizeText'] = $vectorizeText;

        return $this;
    }

    /**
     * Gets metafileRasterizationDpi
     *
     * @return int
     */
    public function getMetafileRasterizationDpi()
    {
        return $this->container['metafileRasterizationDpi'];
    }

    /**
     * Sets metafileRasterizationDpi
     *
     * @param int $metafileRasterizationDpi Returns or sets the lower resolution limit for metafile rasterization.
     *
     * @return $this
     */
    public function setMetafileRasterizationDpi($metafileRasterizationDpi)
    {
        $this->container['metafileRasterizationDpi'] = $metafileRasterizationDpi;

        return $this;
    }

    /**
     * Gets disable3DText
     *
     * @return bool
     */
    public function getDisable3DText()
    {
        return $this->container['disable3DText'];
    }

    /**
     * Sets disable3DText
     *
     * @param bool $disable3DText Determines whether the 3D text is disabled in SVG.
     *
     * @return $this
     */
    public function setDisable3DText($disable3DText)
    {
        $this->container['disable3DText'] = $disable3DText;

        return $this;
    }

    /**
     * Gets disableGradientSplit
     *
     * @return bool
     */
    public function getDisableGradientSplit()
    {
        return $this->container['disableGradientSplit'];
    }

    /**
     * Sets disableGradientSplit
     *
     * @param bool $disableGradientSplit Disables splitting FromCornerX and FromCenter gradients.
     *
     * @return $this
     */
    public function setDisableGradientSplit($disableGradientSplit)
    {
        $this->container['disableGradientSplit'] = $disableGradientSplit;

        return $this;
    }

    /**
     * Gets disableLineEndCropping
     *
     * @return bool
     */
    public function getDisableLineEndCropping()
    {
        return $this->container['disableLineEndCropping'];
    }

    /**
     * Sets disableLineEndCropping
     *
     * @param bool $disableLineEndCropping SVG 1.1 lacks ability to define insets for markers. Aspose.Slides SVG writing engine has workaround for that problem: it crops end of line with arrow, so, line doesn't overlap markers. This option switches off such behavior.
     *
     * @return $this
     */
    public function setDisableLineEndCropping($disableLineEndCropping)
    {
        $this->container['disableLineEndCropping'] = $disableLineEndCropping;

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
     * @param int $jpegQuality Determines JPEG encoding quality.
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
            if (!in_array($picturesCompression, $allowedValues)) {
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
     * Gets externalFontsHandling
     *
     * @return string
     */
    public function getExternalFontsHandling()
    {
        return $this->container['externalFontsHandling'];
    }

    /**
     * Sets externalFontsHandling
     *
     * @param string $externalFontsHandling Determines a way of handling externally loaded fonts.
     *
     * @return $this
     */
    public function setExternalFontsHandling($externalFontsHandling)
    {
        $allowedValues = $this->getExternalFontsHandlingAllowableValues();


        if (is_numeric($externalFontsHandling)) {
            if ($externalFontsHandling >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'externalFontsHandling', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $externalFontsHandling = $allowedValues[$externalFontsHandling];
            }
        } else {
            if (!in_array($externalFontsHandling, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'externalFontsHandling', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['externalFontsHandling'] = $externalFontsHandling;

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


