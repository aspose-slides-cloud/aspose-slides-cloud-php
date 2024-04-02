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
class TiffExportOptions extends ImageExportOptionsBase 
{
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
        'dpiX' => 'int',
        'dpiY' => 'int',
        'showHiddenSlides' => 'bool',
        'pixelFormat' => 'string',
        'slidesLayoutOptions' => '\Aspose\Slides\Cloud\Sdk\Model\SlidesLayoutOptions',
        'bwConversionMode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compression' => null,
        'dpiX' => 'int32',
        'dpiY' => 'int32',
        'showHiddenSlides' => null,
        'pixelFormat' => null,
        'slidesLayoutOptions' => null,
        'bwConversionMode' => null
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
        'dpiX' => 'DpiX',
        'dpiY' => 'DpiY',
        'showHiddenSlides' => 'ShowHiddenSlides',
        'pixelFormat' => 'PixelFormat',
        'slidesLayoutOptions' => 'SlidesLayoutOptions',
        'bwConversionMode' => 'BwConversionMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compression' => 'setCompression',
        'dpiX' => 'setDpiX',
        'dpiY' => 'setDpiY',
        'showHiddenSlides' => 'setShowHiddenSlides',
        'pixelFormat' => 'setPixelFormat',
        'slidesLayoutOptions' => 'setSlidesLayoutOptions',
        'bwConversionMode' => 'setBwConversionMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compression' => 'getCompression',
        'dpiX' => 'getDpiX',
        'dpiY' => 'getDpiY',
        'showHiddenSlides' => 'getShowHiddenSlides',
        'pixelFormat' => 'getPixelFormat',
        'slidesLayoutOptions' => 'getSlidesLayoutOptions',
        'bwConversionMode' => 'getBwConversionMode'
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
    const BW_CONVERSION_MODE__DEFAULT = 'Default';
    const BW_CONVERSION_MODE_DITHERING = 'Dithering';
    const BW_CONVERSION_MODE_DITHERING_FLOYD_STEINBERG = 'DitheringFloydSteinberg';
    const BW_CONVERSION_MODE_AUTO = 'Auto';
    const BW_CONVERSION_MODE_AUTO_OTSU = 'AutoOtsu';
    const BW_CONVERSION_MODE_THRESHOLD25 = 'Threshold25';
    const BW_CONVERSION_MODE_THRESHOLD50 = 'Threshold50';
    const BW_CONVERSION_MODE_THRESHOLD75 = 'Threshold75';
    

    
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
    public function getBwConversionModeAllowableValues()
    {
        return [
            self::BW_CONVERSION_MODE__DEFAULT,
            self::BW_CONVERSION_MODE_DITHERING,
            self::BW_CONVERSION_MODE_DITHERING_FLOYD_STEINBERG,
            self::BW_CONVERSION_MODE_AUTO,
            self::BW_CONVERSION_MODE_AUTO_OTSU,
            self::BW_CONVERSION_MODE_THRESHOLD25,
            self::BW_CONVERSION_MODE_THRESHOLD50,
            self::BW_CONVERSION_MODE_THRESHOLD75,
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
        $this->container['dpiX'] = isset($data['dpiX']) ? $data['dpiX'] : null;
        $this->container['dpiY'] = isset($data['dpiY']) ? $data['dpiY'] : null;
        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['pixelFormat'] = isset($data['pixelFormat']) ? $data['pixelFormat'] : null;
        $this->container['slidesLayoutOptions'] = isset($data['slidesLayoutOptions']) ? $data['slidesLayoutOptions'] : null;
        $this->container['bwConversionMode'] = isset($data['bwConversionMode']) ? $data['bwConversionMode'] : null;
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

        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compression', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPixelFormatAllowableValues();
        if (!in_array($this->container['pixelFormat'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pixelFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBwConversionModeAllowableValues();
        if (!in_array($this->container['bwConversionMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bwConversionMode', must be one of '%s'",
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

        $allowedValues = $this->getCompressionAllowableValues();
        if (!in_array($this->container['compression'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPixelFormatAllowableValues();
        if (!in_array($this->container['pixelFormat'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getBwConversionModeAllowableValues();
        if (!in_array($this->container['bwConversionMode'], $allowedValues)) {
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
            if (!is_null($compression) && !in_array($compression, $allowedValues)) {
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
            if (!is_null($pixelFormat) && !in_array($pixelFormat, $allowedValues)) {
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
     * Gets bwConversionMode
     *
     * @return string
     */
    public function getBwConversionMode()
    {
        return $this->container['bwConversionMode'];
    }

    /**
     * Sets bwConversionMode
     *
     * @param string $bwConversionMode Specifies the algorithm for converting a color image into a black and white image. This option will applied only if Aspose.Slides.Export.TiffOptions.CompressionType is set to Aspose.Slides.Export.TiffCompressionTypes.CCITT4 or Aspose.Slides.Export.TiffCompressionTypes.CCITT3.
     *
     * @return $this
     */
    public function setBwConversionMode($bwConversionMode)
    {
        $allowedValues = $this->getBwConversionModeAllowableValues();


        if (is_numeric($bwConversionMode)) {
            if ($bwConversionMode >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'bwConversionMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $bwConversionMode = $allowedValues[$bwConversionMode];
            }
        } else {
            if (!is_null($bwConversionMode) && !in_array($bwConversionMode, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'bwConversionMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['bwConversionMode'] = $bwConversionMode;

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


