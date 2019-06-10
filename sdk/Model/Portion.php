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
        'font_bold' => 'string',
        'font_italic' => 'string',
        'font_underline' => 'string',
        'strikethrough_type' => 'string',
        'text_cap_type' => 'string',
        'escapement' => 'double',
        'spacing' => 'double',
        'font_color' => 'string',
        'highlight_color' => 'string',
        'font_height' => 'double',
        'normalise_height' => 'string',
        'proof_disabled' => 'string',
        'smart_tag_clean' => 'bool',
        'kerning_minimal_size' => 'double',
        'kumimoji' => 'string',
        'language_id' => 'string',
        'alternative_language_id' => 'string',
        'is_hard_underline_fill' => 'string',
        'is_hard_underline_line' => 'string',
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

    const FONT_BOLD_FALSE = 'False';
    const FONT_BOLD_TRUE = 'True';
    const FONT_BOLD_NOT_DEFINED = 'NotDefined';
    const FONT_ITALIC_FALSE = 'False';
    const FONT_ITALIC_TRUE = 'True';
    const FONT_ITALIC_NOT_DEFINED = 'NotDefined';
    const FONT_UNDERLINE_NONE = 'None';
    const FONT_UNDERLINE_WORDS = 'Words';
    const FONT_UNDERLINE_SINGLE = 'Single';
    const FONT_UNDERLINE_DOUBLE = 'Double';
    const FONT_UNDERLINE_HEAVY = 'Heavy';
    const FONT_UNDERLINE_DOTTED = 'Dotted';
    const FONT_UNDERLINE_HEAVY_DOTTED = 'HeavyDotted';
    const FONT_UNDERLINE_DASHED = 'Dashed';
    const FONT_UNDERLINE_HEAVY_DASHED = 'HeavyDashed';
    const FONT_UNDERLINE_LONG_DASHED = 'LongDashed';
    const FONT_UNDERLINE_HEAVY_LONG_DASHED = 'HeavyLongDashed';
    const FONT_UNDERLINE_DOT_DASH = 'DotDash';
    const FONT_UNDERLINE_HEAVY_DOT_DASH = 'HeavyDotDash';
    const FONT_UNDERLINE_DOT_DOT_DASH = 'DotDotDash';
    const FONT_UNDERLINE_HEAVY_DOT_DOT_DASH = 'HeavyDotDotDash';
    const FONT_UNDERLINE_WAVY = 'Wavy';
    const FONT_UNDERLINE_HEAVY_WAVY = 'HeavyWavy';
    const FONT_UNDERLINE_DOUBLE_WAVY = 'DoubleWavy';
    const FONT_UNDERLINE_NOT_DEFINED = 'NotDefined';
    const STRIKETHROUGH_TYPE_NONE = 'None';
    const STRIKETHROUGH_TYPE_SINGLE = 'Single';
    const STRIKETHROUGH_TYPE_DOUBLE = 'Double';
    const STRIKETHROUGH_TYPE_NOT_DEFINED = 'NotDefined';
    const TEXT_CAP_TYPE_NONE = 'None';
    const TEXT_CAP_TYPE_SMALL = 'Small';
    const TEXT_CAP_TYPE_ALL = 'All';
    const TEXT_CAP_TYPE_NOT_DEFINED = 'NotDefined';
    const NORMALISE_HEIGHT_FALSE = 'False';
    const NORMALISE_HEIGHT_TRUE = 'True';
    const NORMALISE_HEIGHT_NOT_DEFINED = 'NotDefined';
    const PROOF_DISABLED_FALSE = 'False';
    const PROOF_DISABLED_TRUE = 'True';
    const PROOF_DISABLED_NOT_DEFINED = 'NotDefined';
    const KUMIMOJI_FALSE = 'False';
    const KUMIMOJI_TRUE = 'True';
    const KUMIMOJI_NOT_DEFINED = 'NotDefined';
    const IS_HARD_UNDERLINE_FILL_FALSE = 'False';
    const IS_HARD_UNDERLINE_FILL_TRUE = 'True';
    const IS_HARD_UNDERLINE_FILL_NOT_DEFINED = 'NotDefined';
    const IS_HARD_UNDERLINE_LINE_FALSE = 'False';
    const IS_HARD_UNDERLINE_LINE_TRUE = 'True';
    const IS_HARD_UNDERLINE_LINE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontBoldAllowableValues()
    {
        return [
            self::FONT_BOLD_FALSE,
            self::FONT_BOLD_TRUE,
            self::FONT_BOLD_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontItalicAllowableValues()
    {
        return [
            self::FONT_ITALIC_FALSE,
            self::FONT_ITALIC_TRUE,
            self::FONT_ITALIC_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontUnderlineAllowableValues()
    {
        return [
            self::FONT_UNDERLINE_NONE,
            self::FONT_UNDERLINE_WORDS,
            self::FONT_UNDERLINE_SINGLE,
            self::FONT_UNDERLINE_DOUBLE,
            self::FONT_UNDERLINE_HEAVY,
            self::FONT_UNDERLINE_DOTTED,
            self::FONT_UNDERLINE_HEAVY_DOTTED,
            self::FONT_UNDERLINE_DASHED,
            self::FONT_UNDERLINE_HEAVY_DASHED,
            self::FONT_UNDERLINE_LONG_DASHED,
            self::FONT_UNDERLINE_HEAVY_LONG_DASHED,
            self::FONT_UNDERLINE_DOT_DASH,
            self::FONT_UNDERLINE_HEAVY_DOT_DASH,
            self::FONT_UNDERLINE_DOT_DOT_DASH,
            self::FONT_UNDERLINE_HEAVY_DOT_DOT_DASH,
            self::FONT_UNDERLINE_WAVY,
            self::FONT_UNDERLINE_HEAVY_WAVY,
            self::FONT_UNDERLINE_DOUBLE_WAVY,
            self::FONT_UNDERLINE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStrikethroughTypeAllowableValues()
    {
        return [
            self::STRIKETHROUGH_TYPE_NONE,
            self::STRIKETHROUGH_TYPE_SINGLE,
            self::STRIKETHROUGH_TYPE_DOUBLE,
            self::STRIKETHROUGH_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextCapTypeAllowableValues()
    {
        return [
            self::TEXT_CAP_TYPE_NONE,
            self::TEXT_CAP_TYPE_SMALL,
            self::TEXT_CAP_TYPE_ALL,
            self::TEXT_CAP_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNormaliseHeightAllowableValues()
    {
        return [
            self::NORMALISE_HEIGHT_FALSE,
            self::NORMALISE_HEIGHT_TRUE,
            self::NORMALISE_HEIGHT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProofDisabledAllowableValues()
    {
        return [
            self::PROOF_DISABLED_FALSE,
            self::PROOF_DISABLED_TRUE,
            self::PROOF_DISABLED_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKumimojiAllowableValues()
    {
        return [
            self::KUMIMOJI_FALSE,
            self::KUMIMOJI_TRUE,
            self::KUMIMOJI_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsHardUnderlineFillAllowableValues()
    {
        return [
            self::IS_HARD_UNDERLINE_FILL_FALSE,
            self::IS_HARD_UNDERLINE_FILL_TRUE,
            self::IS_HARD_UNDERLINE_FILL_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsHardUnderlineLineAllowableValues()
    {
        return [
            self::IS_HARD_UNDERLINE_LINE_FALSE,
            self::IS_HARD_UNDERLINE_LINE_TRUE,
            self::IS_HARD_UNDERLINE_LINE_NOT_DEFINED,
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

        $allowedValues = $this->getFontBoldAllowableValues();
        if (!in_array($this->container['font_bold'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'font_bold', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFontItalicAllowableValues();
        if (!in_array($this->container['font_italic'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'font_italic', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFontUnderlineAllowableValues();
        if (!in_array($this->container['font_underline'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'font_underline', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStrikethroughTypeAllowableValues();
        if (!in_array($this->container['strikethrough_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'strikethrough_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextCapTypeAllowableValues();
        if (!in_array($this->container['text_cap_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_cap_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNormaliseHeightAllowableValues();
        if (!in_array($this->container['normalise_height'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'normalise_height', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProofDisabledAllowableValues();
        if (!in_array($this->container['proof_disabled'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'proof_disabled', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getKumimojiAllowableValues();
        if (!in_array($this->container['kumimoji'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kumimoji', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIsHardUnderlineFillAllowableValues();
        if (!in_array($this->container['is_hard_underline_fill'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'is_hard_underline_fill', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIsHardUnderlineLineAllowableValues();
        if (!in_array($this->container['is_hard_underline_line'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'is_hard_underline_line', must be one of '%s'",
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

        $allowedValues = $this->getFontBoldAllowableValues();
        if (!in_array($this->container['font_bold'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFontItalicAllowableValues();
        if (!in_array($this->container['font_italic'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFontUnderlineAllowableValues();
        if (!in_array($this->container['font_underline'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStrikethroughTypeAllowableValues();
        if (!in_array($this->container['strikethrough_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTextCapTypeAllowableValues();
        if (!in_array($this->container['text_cap_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getNormaliseHeightAllowableValues();
        if (!in_array($this->container['normalise_height'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getProofDisabledAllowableValues();
        if (!in_array($this->container['proof_disabled'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getKumimojiAllowableValues();
        if (!in_array($this->container['kumimoji'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getIsHardUnderlineFillAllowableValues();
        if (!in_array($this->container['is_hard_underline_fill'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getIsHardUnderlineLineAllowableValues();
        if (!in_array($this->container['is_hard_underline_line'], $allowedValues)) {
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
     * @return string
     */
    public function getFontBold()
    {
        return $this->container['font_bold'];
    }

    /**
     * Sets font_bold
     *
     * @param string $font_bold font_bold
     *
     * @return $this
     */
    public function setFontBold($font_bold)
    {
        $allowedValues = $this->getFontBoldAllowableValues();
        if (!is_null($font_bold) && !in_array($font_bold, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'font_bold', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['font_bold'] = $font_bold;

        return $this;
    }

    /**
     * Gets font_italic
     *
     * @return string
     */
    public function getFontItalic()
    {
        return $this->container['font_italic'];
    }

    /**
     * Sets font_italic
     *
     * @param string $font_italic font_italic
     *
     * @return $this
     */
    public function setFontItalic($font_italic)
    {
        $allowedValues = $this->getFontItalicAllowableValues();
        if (!is_null($font_italic) && !in_array($font_italic, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'font_italic', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['font_italic'] = $font_italic;

        return $this;
    }

    /**
     * Gets font_underline
     *
     * @return string
     */
    public function getFontUnderline()
    {
        return $this->container['font_underline'];
    }

    /**
     * Sets font_underline
     *
     * @param string $font_underline font_underline
     *
     * @return $this
     */
    public function setFontUnderline($font_underline)
    {
        $allowedValues = $this->getFontUnderlineAllowableValues();
        if (!is_null($font_underline) && !in_array($font_underline, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'font_underline', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['font_underline'] = $font_underline;

        return $this;
    }

    /**
     * Gets strikethrough_type
     *
     * @return string
     */
    public function getStrikethroughType()
    {
        return $this->container['strikethrough_type'];
    }

    /**
     * Sets strikethrough_type
     *
     * @param string $strikethrough_type strikethrough_type
     *
     * @return $this
     */
    public function setStrikethroughType($strikethrough_type)
    {
        $allowedValues = $this->getStrikethroughTypeAllowableValues();
        if (!is_null($strikethrough_type) && !in_array($strikethrough_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'strikethrough_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['strikethrough_type'] = $strikethrough_type;

        return $this;
    }

    /**
     * Gets text_cap_type
     *
     * @return string
     */
    public function getTextCapType()
    {
        return $this->container['text_cap_type'];
    }

    /**
     * Sets text_cap_type
     *
     * @param string $text_cap_type text_cap_type
     *
     * @return $this
     */
    public function setTextCapType($text_cap_type)
    {
        $allowedValues = $this->getTextCapTypeAllowableValues();
        if (!is_null($text_cap_type) && !in_array($text_cap_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_cap_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @return string
     */
    public function getNormaliseHeight()
    {
        return $this->container['normalise_height'];
    }

    /**
     * Sets normalise_height
     *
     * @param string $normalise_height normalise_height
     *
     * @return $this
     */
    public function setNormaliseHeight($normalise_height)
    {
        $allowedValues = $this->getNormaliseHeightAllowableValues();
        if (!is_null($normalise_height) && !in_array($normalise_height, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'normalise_height', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['normalise_height'] = $normalise_height;

        return $this;
    }

    /**
     * Gets proof_disabled
     *
     * @return string
     */
    public function getProofDisabled()
    {
        return $this->container['proof_disabled'];
    }

    /**
     * Sets proof_disabled
     *
     * @param string $proof_disabled proof_disabled
     *
     * @return $this
     */
    public function setProofDisabled($proof_disabled)
    {
        $allowedValues = $this->getProofDisabledAllowableValues();
        if (!is_null($proof_disabled) && !in_array($proof_disabled, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'proof_disabled', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @return string
     */
    public function getKumimoji()
    {
        return $this->container['kumimoji'];
    }

    /**
     * Sets kumimoji
     *
     * @param string $kumimoji kumimoji
     *
     * @return $this
     */
    public function setKumimoji($kumimoji)
    {
        $allowedValues = $this->getKumimojiAllowableValues();
        if (!is_null($kumimoji) && !in_array($kumimoji, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kumimoji', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @return string
     */
    public function getIsHardUnderlineFill()
    {
        return $this->container['is_hard_underline_fill'];
    }

    /**
     * Sets is_hard_underline_fill
     *
     * @param string $is_hard_underline_fill is_hard_underline_fill
     *
     * @return $this
     */
    public function setIsHardUnderlineFill($is_hard_underline_fill)
    {
        $allowedValues = $this->getIsHardUnderlineFillAllowableValues();
        if (!is_null($is_hard_underline_fill) && !in_array($is_hard_underline_fill, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'is_hard_underline_fill', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['is_hard_underline_fill'] = $is_hard_underline_fill;

        return $this;
    }

    /**
     * Gets is_hard_underline_line
     *
     * @return string
     */
    public function getIsHardUnderlineLine()
    {
        return $this->container['is_hard_underline_line'];
    }

    /**
     * Sets is_hard_underline_line
     *
     * @param string $is_hard_underline_line is_hard_underline_line
     *
     * @return $this
     */
    public function setIsHardUnderlineLine($is_hard_underline_line)
    {
        $allowedValues = $this->getIsHardUnderlineLineAllowableValues();
        if (!is_null($is_hard_underline_line) && !in_array($is_hard_underline_line, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'is_hard_underline_line', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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


