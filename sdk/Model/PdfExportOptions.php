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
        'textCompression' => 'string',
        'embedFullFonts' => 'bool',
        'compliance' => 'string',
        'sufficientResolution' => 'double',
        'jpegQuality' => 'int',
        'drawSlidesFrame' => 'bool',
        'showHiddenSlides' => 'bool',
        'saveMetafilesAsPng' => 'bool',
        'password' => 'string',
        'embedTrueTypeFontsForAscii' => 'bool',
        'additionalCommonFontFamilies' => 'string[]',
        'slidesLayoutOptions' => '\Aspose\Slides\Cloud\Sdk\Model\SlidesLayoutOptions',
        'imageTransparentColor' => 'string',
        'applyImageTransparent' => 'bool',
        'accessPermissions' => '\Aspose\Slides\Cloud\Sdk\Model\AccessPermissions',
        'hideInk' => 'bool',
        'interpretMaskOpAsOpacity' => 'bool',
        'rasterizeUnsupportedFontStyles' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'textCompression' => null,
        'embedFullFonts' => null,
        'compliance' => null,
        'sufficientResolution' => 'double',
        'jpegQuality' => 'byte',
        'drawSlidesFrame' => null,
        'showHiddenSlides' => null,
        'saveMetafilesAsPng' => null,
        'password' => null,
        'embedTrueTypeFontsForAscii' => null,
        'additionalCommonFontFamilies' => null,
        'slidesLayoutOptions' => null,
        'imageTransparentColor' => null,
        'applyImageTransparent' => null,
        'accessPermissions' => null,
        'hideInk' => null,
        'interpretMaskOpAsOpacity' => null,
        'rasterizeUnsupportedFontStyles' => null
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
        'textCompression' => 'TextCompression',
        'embedFullFonts' => 'EmbedFullFonts',
        'compliance' => 'Compliance',
        'sufficientResolution' => 'SufficientResolution',
        'jpegQuality' => 'JpegQuality',
        'drawSlidesFrame' => 'DrawSlidesFrame',
        'showHiddenSlides' => 'ShowHiddenSlides',
        'saveMetafilesAsPng' => 'SaveMetafilesAsPng',
        'password' => 'Password',
        'embedTrueTypeFontsForAscii' => 'EmbedTrueTypeFontsForASCII',
        'additionalCommonFontFamilies' => 'AdditionalCommonFontFamilies',
        'slidesLayoutOptions' => 'SlidesLayoutOptions',
        'imageTransparentColor' => 'ImageTransparentColor',
        'applyImageTransparent' => 'ApplyImageTransparent',
        'accessPermissions' => 'AccessPermissions',
        'hideInk' => 'HideInk',
        'interpretMaskOpAsOpacity' => 'InterpretMaskOpAsOpacity',
        'rasterizeUnsupportedFontStyles' => 'RasterizeUnsupportedFontStyles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'textCompression' => 'setTextCompression',
        'embedFullFonts' => 'setEmbedFullFonts',
        'compliance' => 'setCompliance',
        'sufficientResolution' => 'setSufficientResolution',
        'jpegQuality' => 'setJpegQuality',
        'drawSlidesFrame' => 'setDrawSlidesFrame',
        'showHiddenSlides' => 'setShowHiddenSlides',
        'saveMetafilesAsPng' => 'setSaveMetafilesAsPng',
        'password' => 'setPassword',
        'embedTrueTypeFontsForAscii' => 'setEmbedTrueTypeFontsForAscii',
        'additionalCommonFontFamilies' => 'setAdditionalCommonFontFamilies',
        'slidesLayoutOptions' => 'setSlidesLayoutOptions',
        'imageTransparentColor' => 'setImageTransparentColor',
        'applyImageTransparent' => 'setApplyImageTransparent',
        'accessPermissions' => 'setAccessPermissions',
        'hideInk' => 'setHideInk',
        'interpretMaskOpAsOpacity' => 'setInterpretMaskOpAsOpacity',
        'rasterizeUnsupportedFontStyles' => 'setRasterizeUnsupportedFontStyles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'textCompression' => 'getTextCompression',
        'embedFullFonts' => 'getEmbedFullFonts',
        'compliance' => 'getCompliance',
        'sufficientResolution' => 'getSufficientResolution',
        'jpegQuality' => 'getJpegQuality',
        'drawSlidesFrame' => 'getDrawSlidesFrame',
        'showHiddenSlides' => 'getShowHiddenSlides',
        'saveMetafilesAsPng' => 'getSaveMetafilesAsPng',
        'password' => 'getPassword',
        'embedTrueTypeFontsForAscii' => 'getEmbedTrueTypeFontsForAscii',
        'additionalCommonFontFamilies' => 'getAdditionalCommonFontFamilies',
        'slidesLayoutOptions' => 'getSlidesLayoutOptions',
        'imageTransparentColor' => 'getImageTransparentColor',
        'applyImageTransparent' => 'getApplyImageTransparent',
        'accessPermissions' => 'getAccessPermissions',
        'hideInk' => 'getHideInk',
        'interpretMaskOpAsOpacity' => 'getInterpretMaskOpAsOpacity',
        'rasterizeUnsupportedFontStyles' => 'getRasterizeUnsupportedFontStyles'
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
    const COMPLIANCE_PDF16 = 'Pdf16';
    const COMPLIANCE_PDF17 = 'Pdf17';
    const COMPLIANCE_PDF_A1B = 'PdfA1b';
    const COMPLIANCE_PDF_A1A = 'PdfA1a';
    const COMPLIANCE_PDF_A2B = 'PdfA2b';
    const COMPLIANCE_PDF_A2A = 'PdfA2a';
    const COMPLIANCE_PDF_A3B = 'PdfA3b';
    const COMPLIANCE_PDF_A3A = 'PdfA3a';
    const COMPLIANCE_PDF_UA = 'PdfUa';
    const COMPLIANCE_PDF_A2U = 'PdfA2u';
    

    
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
            self::COMPLIANCE_PDF16,
            self::COMPLIANCE_PDF17,
            self::COMPLIANCE_PDF_A1B,
            self::COMPLIANCE_PDF_A1A,
            self::COMPLIANCE_PDF_A2B,
            self::COMPLIANCE_PDF_A2A,
            self::COMPLIANCE_PDF_A3B,
            self::COMPLIANCE_PDF_A3A,
            self::COMPLIANCE_PDF_UA,
            self::COMPLIANCE_PDF_A2U,
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

        $this->container['textCompression'] = isset($data['textCompression']) ? $data['textCompression'] : null;
        $this->container['embedFullFonts'] = isset($data['embedFullFonts']) ? $data['embedFullFonts'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['sufficientResolution'] = isset($data['sufficientResolution']) ? $data['sufficientResolution'] : null;
        $this->container['jpegQuality'] = isset($data['jpegQuality']) ? $data['jpegQuality'] : null;
        $this->container['drawSlidesFrame'] = isset($data['drawSlidesFrame']) ? $data['drawSlidesFrame'] : null;
        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['saveMetafilesAsPng'] = isset($data['saveMetafilesAsPng']) ? $data['saveMetafilesAsPng'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['embedTrueTypeFontsForAscii'] = isset($data['embedTrueTypeFontsForAscii']) ? $data['embedTrueTypeFontsForAscii'] : null;
        $this->container['additionalCommonFontFamilies'] = isset($data['additionalCommonFontFamilies']) ? $data['additionalCommonFontFamilies'] : null;
        $this->container['slidesLayoutOptions'] = isset($data['slidesLayoutOptions']) ? $data['slidesLayoutOptions'] : null;
        $this->container['imageTransparentColor'] = isset($data['imageTransparentColor']) ? $data['imageTransparentColor'] : null;
        $this->container['applyImageTransparent'] = isset($data['applyImageTransparent']) ? $data['applyImageTransparent'] : null;
        $this->container['accessPermissions'] = isset($data['accessPermissions']) ? $data['accessPermissions'] : null;
        $this->container['hideInk'] = isset($data['hideInk']) ? $data['hideInk'] : null;
        $this->container['interpretMaskOpAsOpacity'] = isset($data['interpretMaskOpAsOpacity']) ? $data['interpretMaskOpAsOpacity'] : null;
        $this->container['rasterizeUnsupportedFontStyles'] = isset($data['rasterizeUnsupportedFontStyles']) ? $data['rasterizeUnsupportedFontStyles'] : null;
        $this->container['format'] = 'pdf';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTextCompressionAllowableValues();
        if (!in_array($this->container['textCompression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textCompression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getComplianceAllowableValues();
        if (!in_array($this->container['compliance'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compliance', must be one of '%s'",
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

        $allowedValues = $this->getTextCompressionAllowableValues();
        if (!in_array($this->container['textCompression'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getComplianceAllowableValues();
        if (!in_array($this->container['compliance'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets textCompression
     *
     * @return string
     */
    public function getTextCompression()
    {
        return $this->container['textCompression'];
    }

    /**
     * Sets textCompression
     *
     * @param string $textCompression Specifies compression type to be used for all textual content in the document.
     *
     * @return $this
     */
    public function setTextCompression($textCompression)
    {
        $allowedValues = $this->getTextCompressionAllowableValues();


        if (is_numeric($textCompression)) {
            if ($textCompression >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textCompression', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $textCompression = $allowedValues[$textCompression];
            }
        } else {
            if (!is_null($textCompression) && !in_array($textCompression, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textCompression', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['textCompression'] = $textCompression;

        return $this;
    }

    /**
     * Gets embedFullFonts
     *
     * @return bool
     */
    public function getEmbedFullFonts()
    {
        return $this->container['embedFullFonts'];
    }

    /**
     * Sets embedFullFonts
     *
     * @param bool $embedFullFonts Determines if all characters of font should be embedded or only used subset.
     *
     * @return $this
     */
    public function setEmbedFullFonts($embedFullFonts)
    {
        $this->container['embedFullFonts'] = $embedFullFonts;

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


        if (is_numeric($compliance)) {
            if ($compliance >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'compliance', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $compliance = $allowedValues[$compliance];
            }
        } else {
            if (!is_null($compliance) && !in_array($compliance, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'compliance', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['compliance'] = $compliance;

        return $this;
    }

    /**
     * Gets sufficientResolution
     *
     * @return double
     */
    public function getSufficientResolution()
    {
        return $this->container['sufficientResolution'];
    }

    /**
     * Sets sufficientResolution
     *
     * @param double $sufficientResolution Returns or sets a value determining resolution of images inside PDF document.  Property affects on file size, time of export and image quality. The default value is 96.
     *
     * @return $this
     */
    public function setSufficientResolution($sufficientResolution)
    {
        $this->container['sufficientResolution'] = $sufficientResolution;

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
     * Gets drawSlidesFrame
     *
     * @return bool
     */
    public function getDrawSlidesFrame()
    {
        return $this->container['drawSlidesFrame'];
    }

    /**
     * Sets drawSlidesFrame
     *
     * @param bool $drawSlidesFrame True to draw black frame around each slide.
     *
     * @return $this
     */
    public function setDrawSlidesFrame($drawSlidesFrame)
    {
        $this->container['drawSlidesFrame'] = $drawSlidesFrame;

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
     * Gets saveMetafilesAsPng
     *
     * @return bool
     */
    public function getSaveMetafilesAsPng()
    {
        return $this->container['saveMetafilesAsPng'];
    }

    /**
     * Sets saveMetafilesAsPng
     *
     * @param bool $saveMetafilesAsPng True to convert all metafiles used in a presentation to the PNG images.
     *
     * @return $this
     */
    public function setSaveMetafilesAsPng($saveMetafilesAsPng)
    {
        $this->container['saveMetafilesAsPng'] = $saveMetafilesAsPng;

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
     * Gets embedTrueTypeFontsForAscii
     *
     * @return bool
     */
    public function getEmbedTrueTypeFontsForAscii()
    {
        return $this->container['embedTrueTypeFontsForAscii'];
    }

    /**
     * Sets embedTrueTypeFontsForAscii
     *
     * @param bool $embedTrueTypeFontsForAscii Determines if Aspose.Slides will embed common fonts for ASCII (33..127 code range) text. Fonts for character codes greater than 127 are always embedded. Common fonts list includes PDF's base 14 fonts and additional user specified fonts.
     *
     * @return $this
     */
    public function setEmbedTrueTypeFontsForAscii($embedTrueTypeFontsForAscii)
    {
        $this->container['embedTrueTypeFontsForAscii'] = $embedTrueTypeFontsForAscii;

        return $this;
    }

    /**
     * Gets additionalCommonFontFamilies
     *
     * @return string[]
     */
    public function getAdditionalCommonFontFamilies()
    {
        return $this->container['additionalCommonFontFamilies'];
    }

    /**
     * Sets additionalCommonFontFamilies
     *
     * @param string[] $additionalCommonFontFamilies Returns or sets an array of user-defined names of font families which Aspose.Slides should consider common.
     *
     * @return $this
     */
    public function setAdditionalCommonFontFamilies($additionalCommonFontFamilies)
    {
        $this->container['additionalCommonFontFamilies'] = $additionalCommonFontFamilies;

        return $this;
    }

    /**
     * Gets slidesLayoutOptions
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SlidesLayoutOptions
     */
    public function getSlidesLayoutOptions()
    {
        return $this->container['slidesLayoutOptions'];
    }

    /**
     * Sets slidesLayoutOptions
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SlidesLayoutOptions $slidesLayoutOptions Slides layouting options
     *
     * @return $this
     */
    public function setSlidesLayoutOptions($slidesLayoutOptions)
    {
        $this->container['slidesLayoutOptions'] = $slidesLayoutOptions;

        return $this;
    }

    /**
     * Gets imageTransparentColor
     *
     * @return string
     */
    public function getImageTransparentColor()
    {
        return $this->container['imageTransparentColor'];
    }

    /**
     * Sets imageTransparentColor
     *
     * @param string $imageTransparentColor Image transparent color.
     *
     * @return $this
     */
    public function setImageTransparentColor($imageTransparentColor)
    {
        $this->container['imageTransparentColor'] = $imageTransparentColor;

        return $this;
    }

    /**
     * Gets applyImageTransparent
     *
     * @return bool
     */
    public function getApplyImageTransparent()
    {
        return $this->container['applyImageTransparent'];
    }

    /**
     * Sets applyImageTransparent
     *
     * @param bool $applyImageTransparent True to apply specified ImageTransparentColor  to an image.
     *
     * @return $this
     */
    public function setApplyImageTransparent($applyImageTransparent)
    {
        $this->container['applyImageTransparent'] = $applyImageTransparent;

        return $this;
    }

    /**
     * Gets accessPermissions
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\AccessPermissions
     */
    public function getAccessPermissions()
    {
        return $this->container['accessPermissions'];
    }

    /**
     * Sets accessPermissions
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\AccessPermissions $accessPermissions Access permissions that should be granted when the document is opened with user access.  Default is AccessPermissions.None.
     *
     * @return $this
     */
    public function setAccessPermissions($accessPermissions)
    {
        $this->container['accessPermissions'] = $accessPermissions;

        return $this;
    }

    /**
     * Gets hideInk
     *
     * @return bool
     */
    public function getHideInk()
    {
        return $this->container['hideInk'];
    }

    /**
     * Sets hideInk
     *
     * @param bool $hideInk True to hide Ink elements in exported document.
     *
     * @return $this
     */
    public function setHideInk($hideInk)
    {
        $this->container['hideInk'] = $hideInk;

        return $this;
    }

    /**
     * Gets interpretMaskOpAsOpacity
     *
     * @return bool
     */
    public function getInterpretMaskOpAsOpacity()
    {
        return $this->container['interpretMaskOpAsOpacity'];
    }

    /**
     * Sets interpretMaskOpAsOpacity
     *
     * @param bool $interpretMaskOpAsOpacity True to use ROP operation or Opacity for rendering brush.
     *
     * @return $this
     */
    public function setInterpretMaskOpAsOpacity($interpretMaskOpAsOpacity)
    {
        $this->container['interpretMaskOpAsOpacity'] = $interpretMaskOpAsOpacity;

        return $this;
    }

    /**
     * Gets rasterizeUnsupportedFontStyles
     *
     * @return bool
     */
    public function getRasterizeUnsupportedFontStyles()
    {
        return $this->container['rasterizeUnsupportedFontStyles'];
    }

    /**
     * Sets rasterizeUnsupportedFontStyles
     *
     * @param bool $rasterizeUnsupportedFontStyles True if text should be rasterized as a bitmap and saved to PDF when the font does not support bold styling. This approach can enhance the quality of text in the resulting PDF for certain fonts.
     *
     * @return $this
     */
    public function setRasterizeUnsupportedFontStyles($rasterizeUnsupportedFontStyles)
    {
        $this->container['rasterizeUnsupportedFontStyles'] = $rasterizeUnsupportedFontStyles;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
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
    public function offsetGet($offset) : mixed
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
    public function offsetSet($offset, $value) : void
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
    public function offsetUnset($offset) : void
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


