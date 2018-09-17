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
 * Portion Class Doc Comment
 *
 * @category Class
 * @description Represents portion resource
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Portion extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Portion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'font_bold' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'font_italic' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'font_underline' => '\Aspose\Slides\Cloud\Sdk\Model\TextUnderlineType',
        'strikethrough_type' => '\Aspose\Slides\Cloud\Sdk\Model\TextStrikethroughType',
        'text_cap_type' => '\Aspose\Slides\Cloud\Sdk\Model\TextCapType',
        'escapement' => 'double',
        'spacing' => 'double',
        'font_color' => 'string',
        'highlight_color' => 'string',
        'font_height' => 'double',
        'normalise_height' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'proof_disabled' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'smart_tag_clean' => 'bool',
        'kerning_minimal_size' => 'double',
        'kumimoji' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'language_id' => 'string',
        'alternative_language_id' => 'string',
        'is_hard_underline_fill' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'is_hard_underline_line' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effect_format' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'line_format' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'underline_fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'underline_line_format' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'font_bold' => null,
        'font_italic' => null,
        'font_underline' => null,
        'strikethrough_type' => null,
        'text_cap_type' => null,
        'escapement' => 'double',
        'spacing' => 'double',
        'font_color' => null,
        'highlight_color' => null,
        'font_height' => 'double',
        'normalise_height' => null,
        'proof_disabled' => null,
        'smart_tag_clean' => null,
        'kerning_minimal_size' => 'double',
        'kumimoji' => null,
        'language_id' => null,
        'alternative_language_id' => null,
        'is_hard_underline_fill' => null,
        'is_hard_underline_line' => null,
        'fill_format' => null,
        'effect_format' => null,
        'line_format' => null,
        'underline_fill_format' => null,
        'underline_line_format' => null
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
        'text' => 'Text',
        'font_bold' => 'FontBold',
        'font_italic' => 'FontItalic',
        'font_underline' => 'FontUnderline',
        'strikethrough_type' => 'StrikethroughType',
        'text_cap_type' => 'TextCapType',
        'escapement' => 'Escapement',
        'spacing' => 'Spacing',
        'font_color' => 'FontColor',
        'highlight_color' => 'HighlightColor',
        'font_height' => 'FontHeight',
        'normalise_height' => 'NormaliseHeight',
        'proof_disabled' => 'ProofDisabled',
        'smart_tag_clean' => 'SmartTagClean',
        'kerning_minimal_size' => 'KerningMinimalSize',
        'kumimoji' => 'Kumimoji',
        'language_id' => 'LanguageId',
        'alternative_language_id' => 'AlternativeLanguageId',
        'is_hard_underline_fill' => 'IsHardUnderlineFill',
        'is_hard_underline_line' => 'IsHardUnderlineLine',
        'fill_format' => 'FillFormat',
        'effect_format' => 'EffectFormat',
        'line_format' => 'LineFormat',
        'underline_fill_format' => 'UnderlineFillFormat',
        'underline_line_format' => 'UnderlineLineFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'font_bold' => 'setFontBold',
        'font_italic' => 'setFontItalic',
        'font_underline' => 'setFontUnderline',
        'strikethrough_type' => 'setStrikethroughType',
        'text_cap_type' => 'setTextCapType',
        'escapement' => 'setEscapement',
        'spacing' => 'setSpacing',
        'font_color' => 'setFontColor',
        'highlight_color' => 'setHighlightColor',
        'font_height' => 'setFontHeight',
        'normalise_height' => 'setNormaliseHeight',
        'proof_disabled' => 'setProofDisabled',
        'smart_tag_clean' => 'setSmartTagClean',
        'kerning_minimal_size' => 'setKerningMinimalSize',
        'kumimoji' => 'setKumimoji',
        'language_id' => 'setLanguageId',
        'alternative_language_id' => 'setAlternativeLanguageId',
        'is_hard_underline_fill' => 'setIsHardUnderlineFill',
        'is_hard_underline_line' => 'setIsHardUnderlineLine',
        'fill_format' => 'setFillFormat',
        'effect_format' => 'setEffectFormat',
        'line_format' => 'setLineFormat',
        'underline_fill_format' => 'setUnderlineFillFormat',
        'underline_line_format' => 'setUnderlineLineFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'font_bold' => 'getFontBold',
        'font_italic' => 'getFontItalic',
        'font_underline' => 'getFontUnderline',
        'strikethrough_type' => 'getStrikethroughType',
        'text_cap_type' => 'getTextCapType',
        'escapement' => 'getEscapement',
        'spacing' => 'getSpacing',
        'font_color' => 'getFontColor',
        'highlight_color' => 'getHighlightColor',
        'font_height' => 'getFontHeight',
        'normalise_height' => 'getNormaliseHeight',
        'proof_disabled' => 'getProofDisabled',
        'smart_tag_clean' => 'getSmartTagClean',
        'kerning_minimal_size' => 'getKerningMinimalSize',
        'kumimoji' => 'getKumimoji',
        'language_id' => 'getLanguageId',
        'alternative_language_id' => 'getAlternativeLanguageId',
        'is_hard_underline_fill' => 'getIsHardUnderlineFill',
        'is_hard_underline_line' => 'getIsHardUnderlineLine',
        'fill_format' => 'getFillFormat',
        'effect_format' => 'getEffectFormat',
        'line_format' => 'getLineFormat',
        'underline_fill_format' => 'getUnderlineFillFormat',
        'underline_line_format' => 'getUnderlineLineFormat'
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

        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['font_bold'] = isset($data['font_bold']) ? $data['font_bold'] : null;
        $this->container['font_italic'] = isset($data['font_italic']) ? $data['font_italic'] : null;
        $this->container['font_underline'] = isset($data['font_underline']) ? $data['font_underline'] : null;
        $this->container['strikethrough_type'] = isset($data['strikethrough_type']) ? $data['strikethrough_type'] : null;
        $this->container['text_cap_type'] = isset($data['text_cap_type']) ? $data['text_cap_type'] : null;
        $this->container['escapement'] = isset($data['escapement']) ? $data['escapement'] : null;
        $this->container['spacing'] = isset($data['spacing']) ? $data['spacing'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['highlight_color'] = isset($data['highlight_color']) ? $data['highlight_color'] : null;
        $this->container['font_height'] = isset($data['font_height']) ? $data['font_height'] : null;
        $this->container['normalise_height'] = isset($data['normalise_height']) ? $data['normalise_height'] : null;
        $this->container['proof_disabled'] = isset($data['proof_disabled']) ? $data['proof_disabled'] : null;
        $this->container['smart_tag_clean'] = isset($data['smart_tag_clean']) ? $data['smart_tag_clean'] : null;
        $this->container['kerning_minimal_size'] = isset($data['kerning_minimal_size']) ? $data['kerning_minimal_size'] : null;
        $this->container['kumimoji'] = isset($data['kumimoji']) ? $data['kumimoji'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['alternative_language_id'] = isset($data['alternative_language_id']) ? $data['alternative_language_id'] : null;
        $this->container['is_hard_underline_fill'] = isset($data['is_hard_underline_fill']) ? $data['is_hard_underline_fill'] : null;
        $this->container['is_hard_underline_line'] = isset($data['is_hard_underline_line']) ? $data['is_hard_underline_line'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['effect_format'] = isset($data['effect_format']) ? $data['effect_format'] : null;
        $this->container['line_format'] = isset($data['line_format']) ? $data['line_format'] : null;
        $this->container['underline_fill_format'] = isset($data['underline_fill_format']) ? $data['underline_fill_format'] : null;
        $this->container['underline_line_format'] = isset($data['underline_line_format']) ? $data['underline_line_format'] : null;
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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets font_bold
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getFontBold()
    {
        return $this->container['font_bold'];
    }

    /**
     * Sets font_bold
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $font_bold font_bold
     *
     * @return $this
     */
    public function setFontBold($font_bold)
    {
        $this->container['font_bold'] = $font_bold;

        return $this;
    }

    /**
     * Gets font_italic
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getFontItalic()
    {
        return $this->container['font_italic'];
    }

    /**
     * Sets font_italic
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $font_italic font_italic
     *
     * @return $this
     */
    public function setFontItalic($font_italic)
    {
        $this->container['font_italic'] = $font_italic;

        return $this;
    }

    /**
     * Gets font_underline
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TextUnderlineType
     */
    public function getFontUnderline()
    {
        return $this->container['font_underline'];
    }

    /**
     * Sets font_underline
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TextUnderlineType $font_underline font_underline
     *
     * @return $this
     */
    public function setFontUnderline($font_underline)
    {
        $this->container['font_underline'] = $font_underline;

        return $this;
    }

    /**
     * Gets strikethrough_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TextStrikethroughType
     */
    public function getStrikethroughType()
    {
        return $this->container['strikethrough_type'];
    }

    /**
     * Sets strikethrough_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TextStrikethroughType $strikethrough_type strikethrough_type
     *
     * @return $this
     */
    public function setStrikethroughType($strikethrough_type)
    {
        $this->container['strikethrough_type'] = $strikethrough_type;

        return $this;
    }

    /**
     * Gets text_cap_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TextCapType
     */
    public function getTextCapType()
    {
        return $this->container['text_cap_type'];
    }

    /**
     * Sets text_cap_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TextCapType $text_cap_type text_cap_type
     *
     * @return $this
     */
    public function setTextCapType($text_cap_type)
    {
        $this->container['text_cap_type'] = $text_cap_type;

        return $this;
    }

    /**
     * Gets escapement
     *
     * @return double
     */
    public function getEscapement()
    {
        return $this->container['escapement'];
    }

    /**
     * Sets escapement
     *
     * @param double $escapement escapement
     *
     * @return $this
     */
    public function setEscapement($escapement)
    {
        $this->container['escapement'] = $escapement;

        return $this;
    }

    /**
     * Gets spacing
     *
     * @return double
     */
    public function getSpacing()
    {
        return $this->container['spacing'];
    }

    /**
     * Sets spacing
     *
     * @param double $spacing spacing
     *
     * @return $this
     */
    public function setSpacing($spacing)
    {
        $this->container['spacing'] = $spacing;

        return $this;
    }

    /**
     * Gets font_color
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     *
     * @param string $font_color font_color
     *
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets highlight_color
     *
     * @return string
     */
    public function getHighlightColor()
    {
        return $this->container['highlight_color'];
    }

    /**
     * Sets highlight_color
     *
     * @param string $highlight_color highlight_color
     *
     * @return $this
     */
    public function setHighlightColor($highlight_color)
    {
        $this->container['highlight_color'] = $highlight_color;

        return $this;
    }

    /**
     * Gets font_height
     *
     * @return double
     */
    public function getFontHeight()
    {
        return $this->container['font_height'];
    }

    /**
     * Sets font_height
     *
     * @param double $font_height font_height
     *
     * @return $this
     */
    public function setFontHeight($font_height)
    {
        $this->container['font_height'] = $font_height;

        return $this;
    }

    /**
     * Gets normalise_height
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getNormaliseHeight()
    {
        return $this->container['normalise_height'];
    }

    /**
     * Sets normalise_height
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $normalise_height normalise_height
     *
     * @return $this
     */
    public function setNormaliseHeight($normalise_height)
    {
        $this->container['normalise_height'] = $normalise_height;

        return $this;
    }

    /**
     * Gets proof_disabled
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getProofDisabled()
    {
        return $this->container['proof_disabled'];
    }

    /**
     * Sets proof_disabled
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $proof_disabled proof_disabled
     *
     * @return $this
     */
    public function setProofDisabled($proof_disabled)
    {
        $this->container['proof_disabled'] = $proof_disabled;

        return $this;
    }

    /**
     * Gets smart_tag_clean
     *
     * @return bool
     */
    public function getSmartTagClean()
    {
        return $this->container['smart_tag_clean'];
    }

    /**
     * Sets smart_tag_clean
     *
     * @param bool $smart_tag_clean smart_tag_clean
     *
     * @return $this
     */
    public function setSmartTagClean($smart_tag_clean)
    {
        $this->container['smart_tag_clean'] = $smart_tag_clean;

        return $this;
    }

    /**
     * Gets kerning_minimal_size
     *
     * @return double
     */
    public function getKerningMinimalSize()
    {
        return $this->container['kerning_minimal_size'];
    }

    /**
     * Sets kerning_minimal_size
     *
     * @param double $kerning_minimal_size kerning_minimal_size
     *
     * @return $this
     */
    public function setKerningMinimalSize($kerning_minimal_size)
    {
        $this->container['kerning_minimal_size'] = $kerning_minimal_size;

        return $this;
    }

    /**
     * Gets kumimoji
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getKumimoji()
    {
        return $this->container['kumimoji'];
    }

    /**
     * Sets kumimoji
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $kumimoji kumimoji
     *
     * @return $this
     */
    public function setKumimoji($kumimoji)
    {
        $this->container['kumimoji'] = $kumimoji;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id language_id
     *
     * @return $this
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets alternative_language_id
     *
     * @return string
     */
    public function getAlternativeLanguageId()
    {
        return $this->container['alternative_language_id'];
    }

    /**
     * Sets alternative_language_id
     *
     * @param string $alternative_language_id alternative_language_id
     *
     * @return $this
     */
    public function setAlternativeLanguageId($alternative_language_id)
    {
        $this->container['alternative_language_id'] = $alternative_language_id;

        return $this;
    }

    /**
     * Gets is_hard_underline_fill
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getIsHardUnderlineFill()
    {
        return $this->container['is_hard_underline_fill'];
    }

    /**
     * Sets is_hard_underline_fill
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $is_hard_underline_fill is_hard_underline_fill
     *
     * @return $this
     */
    public function setIsHardUnderlineFill($is_hard_underline_fill)
    {
        $this->container['is_hard_underline_fill'] = $is_hard_underline_fill;

        return $this;
    }

    /**
     * Gets is_hard_underline_line
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getIsHardUnderlineLine()
    {
        return $this->container['is_hard_underline_line'];
    }

    /**
     * Sets is_hard_underline_line
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $is_hard_underline_line is_hard_underline_line
     *
     * @return $this
     */
    public function setIsHardUnderlineLine($is_hard_underline_line)
    {
        $this->container['is_hard_underline_line'] = $is_hard_underline_line;

        return $this;
    }

    /**
     * Gets fill_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fill_format'];
    }

    /**
     * Sets fill_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fill_format fill_format
     *
     * @return $this
     */
    public function setFillFormat($fill_format)
    {
        $this->container['fill_format'] = $fill_format;

        return $this;
    }

    /**
     * Gets effect_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\EffectFormat
     */
    public function getEffectFormat()
    {
        return $this->container['effect_format'];
    }

    /**
     * Sets effect_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effect_format effect_format
     *
     * @return $this
     */
    public function setEffectFormat($effect_format)
    {
        $this->container['effect_format'] = $effect_format;

        return $this;
    }

    /**
     * Gets line_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getLineFormat()
    {
        return $this->container['line_format'];
    }

    /**
     * Sets line_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $line_format line_format
     *
     * @return $this
     */
    public function setLineFormat($line_format)
    {
        $this->container['line_format'] = $line_format;

        return $this;
    }

    /**
     * Gets underline_fill_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getUnderlineFillFormat()
    {
        return $this->container['underline_fill_format'];
    }

    /**
     * Sets underline_fill_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $underline_fill_format underline_fill_format
     *
     * @return $this
     */
    public function setUnderlineFillFormat($underline_fill_format)
    {
        $this->container['underline_fill_format'] = $underline_fill_format;

        return $this;
    }

    /**
     * Gets underline_line_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getUnderlineLineFormat()
    {
        return $this->container['underline_line_format'];
    }

    /**
     * Sets underline_line_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $underline_line_format underline_line_format
     *
     * @return $this
     */
    public function setUnderlineLineFormat($underline_line_format)
    {
        $this->container['underline_line_format'] = $underline_line_format;

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


