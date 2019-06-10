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
 * Paragraph Class Doc Comment
 *
 * @category Class
 * @description Represents paragraph resource
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Paragraph extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Paragraph';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'margin_left' => 'double',
        'margin_right' => 'double',
        'space_before' => 'double',
        'space_after' => 'double',
        'space_within' => 'double',
        'indent' => 'double',
        'alignment' => 'string',
        'font_alignment' => 'string',
        'default_tab_size' => 'double',
        'depth' => 'int',
        'bullet_char' => 'string',
        'bullet_height' => 'double',
        'bullet_type' => 'string',
        'numbered_bullet_start_with' => 'int',
        'numbered_bullet_style' => 'string',
        'hanging_punctuation' => 'string',
        'east_asian_line_break' => 'string',
        'latin_line_break' => 'string',
        'right_to_left' => 'string',
        'portion_list' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'margin_left' => 'double',
        'margin_right' => 'double',
        'space_before' => 'double',
        'space_after' => 'double',
        'space_within' => 'double',
        'indent' => 'double',
        'alignment' => null,
        'font_alignment' => null,
        'default_tab_size' => 'double',
        'depth' => null,
        'bullet_char' => null,
        'bullet_height' => 'double',
        'bullet_type' => null,
        'numbered_bullet_start_with' => null,
        'numbered_bullet_style' => null,
        'hanging_punctuation' => null,
        'east_asian_line_break' => null,
        'latin_line_break' => null,
        'right_to_left' => null,
        'portion_list' => null
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
        'margin_left' => 'MarginLeft',
        'margin_right' => 'MarginRight',
        'space_before' => 'SpaceBefore',
        'space_after' => 'SpaceAfter',
        'space_within' => 'SpaceWithin',
        'indent' => 'Indent',
        'alignment' => 'Alignment',
        'font_alignment' => 'FontAlignment',
        'default_tab_size' => 'DefaultTabSize',
        'depth' => 'Depth',
        'bullet_char' => 'BulletChar',
        'bullet_height' => 'BulletHeight',
        'bullet_type' => 'BulletType',
        'numbered_bullet_start_with' => 'NumberedBulletStartWith',
        'numbered_bullet_style' => 'NumberedBulletStyle',
        'hanging_punctuation' => 'HangingPunctuation',
        'east_asian_line_break' => 'EastAsianLineBreak',
        'latin_line_break' => 'LatinLineBreak',
        'right_to_left' => 'RightToLeft',
        'portion_list' => 'PortionList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'margin_left' => 'setMarginLeft',
        'margin_right' => 'setMarginRight',
        'space_before' => 'setSpaceBefore',
        'space_after' => 'setSpaceAfter',
        'space_within' => 'setSpaceWithin',
        'indent' => 'setIndent',
        'alignment' => 'setAlignment',
        'font_alignment' => 'setFontAlignment',
        'default_tab_size' => 'setDefaultTabSize',
        'depth' => 'setDepth',
        'bullet_char' => 'setBulletChar',
        'bullet_height' => 'setBulletHeight',
        'bullet_type' => 'setBulletType',
        'numbered_bullet_start_with' => 'setNumberedBulletStartWith',
        'numbered_bullet_style' => 'setNumberedBulletStyle',
        'hanging_punctuation' => 'setHangingPunctuation',
        'east_asian_line_break' => 'setEastAsianLineBreak',
        'latin_line_break' => 'setLatinLineBreak',
        'right_to_left' => 'setRightToLeft',
        'portion_list' => 'setPortionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'margin_left' => 'getMarginLeft',
        'margin_right' => 'getMarginRight',
        'space_before' => 'getSpaceBefore',
        'space_after' => 'getSpaceAfter',
        'space_within' => 'getSpaceWithin',
        'indent' => 'getIndent',
        'alignment' => 'getAlignment',
        'font_alignment' => 'getFontAlignment',
        'default_tab_size' => 'getDefaultTabSize',
        'depth' => 'getDepth',
        'bullet_char' => 'getBulletChar',
        'bullet_height' => 'getBulletHeight',
        'bullet_type' => 'getBulletType',
        'numbered_bullet_start_with' => 'getNumberedBulletStartWith',
        'numbered_bullet_style' => 'getNumberedBulletStyle',
        'hanging_punctuation' => 'getHangingPunctuation',
        'east_asian_line_break' => 'getEastAsianLineBreak',
        'latin_line_break' => 'getLatinLineBreak',
        'right_to_left' => 'getRightToLeft',
        'portion_list' => 'getPortionList'
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

    const ALIGNMENT_LEFT = 'Left';
    const ALIGNMENT_CENTER = 'Center';
    const ALIGNMENT_RIGHT = 'Right';
    const ALIGNMENT_JUSTIFY = 'Justify';
    const ALIGNMENT_JUSTIFY_LOW = 'JustifyLow';
    const ALIGNMENT_DISTRIBUTED = 'Distributed';
    const ALIGNMENT_NOT_DEFINED = 'NotDefined';
    const FONT_ALIGNMENT_AUTOMATIC = 'Automatic';
    const FONT_ALIGNMENT_TOP = 'Top';
    const FONT_ALIGNMENT_CENTER = 'Center';
    const FONT_ALIGNMENT_BOTTOM = 'Bottom';
    const FONT_ALIGNMENT_BASELINE = 'Baseline';
    const FONT_ALIGNMENT__DEFAULT = 'Default';
    const BULLET_TYPE_NONE = 'None';
    const BULLET_TYPE_SYMBOL = 'Symbol';
    const BULLET_TYPE_NUMBERED = 'Numbered';
    const BULLET_TYPE_PICTURE = 'Picture';
    const BULLET_TYPE_NOT_DEFINED = 'NotDefined';
    const NUMBERED_BULLET_STYLE_BULLET_ALPHA_LC_PERIOD = 'BulletAlphaLCPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ALPHA_UC_PERIOD = 'BulletAlphaUCPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_PAREN_RIGHT = 'BulletArabicParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_PERIOD = 'BulletArabicPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ROMAN_LC_PAREN_BOTH = 'BulletRomanLCParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_ROMAN_LC_PAREN_RIGHT = 'BulletRomanLCParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_ROMAN_LC_PERIOD = 'BulletRomanLCPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ROMAN_UC_PERIOD = 'BulletRomanUCPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ALPHA_LC_PAREN_BOTH = 'BulletAlphaLCParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_ALPHA_LC_PAREN_RIGHT = 'BulletAlphaLCParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_ALPHA_UC_PAREN_BOTH = 'BulletAlphaUCParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_ALPHA_UC_PAREN_RIGHT = 'BulletAlphaUCParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_PAREN_BOTH = 'BulletArabicParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_PLAIN = 'BulletArabicPlain';
    const NUMBERED_BULLET_STYLE_BULLET_ROMAN_UC_PAREN_BOTH = 'BulletRomanUCParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_ROMAN_UC_PAREN_RIGHT = 'BulletRomanUCParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_SIMP_CHIN_PLAIN = 'BulletSimpChinPlain';
    const NUMBERED_BULLET_STYLE_BULLET_SIMP_CHIN_PERIOD = 'BulletSimpChinPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_CIRCLE_NUM_DB_PLAIN = 'BulletCircleNumDBPlain';
    const NUMBERED_BULLET_STYLE_BULLET_CIRCLE_NUM_WD_WHITE_PLAIN = 'BulletCircleNumWDWhitePlain';
    const NUMBERED_BULLET_STYLE_BULLET_CIRCLE_NUM_WD_BLACK_PLAIN = 'BulletCircleNumWDBlackPlain';
    const NUMBERED_BULLET_STYLE_BULLET_TRAD_CHIN_PLAIN = 'BulletTradChinPlain';
    const NUMBERED_BULLET_STYLE_BULLET_TRAD_CHIN_PERIOD = 'BulletTradChinPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_ALPHA_DASH = 'BulletArabicAlphaDash';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_ABJAD_DASH = 'BulletArabicAbjadDash';
    const NUMBERED_BULLET_STYLE_BULLET_HEBREW_ALPHA_DASH = 'BulletHebrewAlphaDash';
    const NUMBERED_BULLET_STYLE_BULLET_KANJI_KOREAN_PLAIN = 'BulletKanjiKoreanPlain';
    const NUMBERED_BULLET_STYLE_BULLET_KANJI_KOREAN_PERIOD = 'BulletKanjiKoreanPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_DB_PLAIN = 'BulletArabicDBPlain';
    const NUMBERED_BULLET_STYLE_BULLET_ARABIC_DB_PERIOD = 'BulletArabicDBPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_THAI_ALPHA_PERIOD = 'BulletThaiAlphaPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_THAI_ALPHA_PAREN_RIGHT = 'BulletThaiAlphaParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_THAI_ALPHA_PAREN_BOTH = 'BulletThaiAlphaParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_THAI_NUM_PERIOD = 'BulletThaiNumPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_THAI_NUM_PAREN_RIGHT = 'BulletThaiNumParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_THAI_NUM_PAREN_BOTH = 'BulletThaiNumParenBoth';
    const NUMBERED_BULLET_STYLE_BULLET_HINDI_ALPHA_PERIOD = 'BulletHindiAlphaPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_HINDI_NUM_PERIOD = 'BulletHindiNumPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_KANJI_SIMP_CHIN_DB_PERIOD = 'BulletKanjiSimpChinDBPeriod';
    const NUMBERED_BULLET_STYLE_BULLET_HINDI_NUM_PAREN_RIGHT = 'BulletHindiNumParenRight';
    const NUMBERED_BULLET_STYLE_BULLET_HINDI_ALPHA1_PERIOD = 'BulletHindiAlpha1Period';
    const NUMBERED_BULLET_STYLE_NOT_DEFINED = 'NotDefined';
    const HANGING_PUNCTUATION_FALSE = 'False';
    const HANGING_PUNCTUATION_TRUE = 'True';
    const HANGING_PUNCTUATION_NOT_DEFINED = 'NotDefined';
    const EAST_ASIAN_LINE_BREAK_FALSE = 'False';
    const EAST_ASIAN_LINE_BREAK_TRUE = 'True';
    const EAST_ASIAN_LINE_BREAK_NOT_DEFINED = 'NotDefined';
    const LATIN_LINE_BREAK_FALSE = 'False';
    const LATIN_LINE_BREAK_TRUE = 'True';
    const LATIN_LINE_BREAK_NOT_DEFINED = 'NotDefined';
    const RIGHT_TO_LEFT_FALSE = 'False';
    const RIGHT_TO_LEFT_TRUE = 'True';
    const RIGHT_TO_LEFT_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_LEFT,
            self::ALIGNMENT_CENTER,
            self::ALIGNMENT_RIGHT,
            self::ALIGNMENT_JUSTIFY,
            self::ALIGNMENT_JUSTIFY_LOW,
            self::ALIGNMENT_DISTRIBUTED,
            self::ALIGNMENT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontAlignmentAllowableValues()
    {
        return [
            self::FONT_ALIGNMENT_AUTOMATIC,
            self::FONT_ALIGNMENT_TOP,
            self::FONT_ALIGNMENT_CENTER,
            self::FONT_ALIGNMENT_BOTTOM,
            self::FONT_ALIGNMENT_BASELINE,
            self::FONT_ALIGNMENT__DEFAULT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBulletTypeAllowableValues()
    {
        return [
            self::BULLET_TYPE_NONE,
            self::BULLET_TYPE_SYMBOL,
            self::BULLET_TYPE_NUMBERED,
            self::BULLET_TYPE_PICTURE,
            self::BULLET_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumberedBulletStyleAllowableValues()
    {
        return [
            self::NUMBERED_BULLET_STYLE_BULLET_ALPHA_LC_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ALPHA_UC_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ROMAN_LC_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_ROMAN_LC_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_ROMAN_LC_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ROMAN_UC_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ALPHA_LC_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_ALPHA_LC_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_ALPHA_UC_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_ALPHA_UC_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_ROMAN_UC_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_ROMAN_UC_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_SIMP_CHIN_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_SIMP_CHIN_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_CIRCLE_NUM_DB_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_CIRCLE_NUM_WD_WHITE_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_CIRCLE_NUM_WD_BLACK_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_TRAD_CHIN_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_TRAD_CHIN_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_ALPHA_DASH,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_ABJAD_DASH,
            self::NUMBERED_BULLET_STYLE_BULLET_HEBREW_ALPHA_DASH,
            self::NUMBERED_BULLET_STYLE_BULLET_KANJI_KOREAN_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_KANJI_KOREAN_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_DB_PLAIN,
            self::NUMBERED_BULLET_STYLE_BULLET_ARABIC_DB_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_THAI_ALPHA_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_THAI_ALPHA_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_THAI_ALPHA_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_THAI_NUM_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_THAI_NUM_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_THAI_NUM_PAREN_BOTH,
            self::NUMBERED_BULLET_STYLE_BULLET_HINDI_ALPHA_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_HINDI_NUM_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_KANJI_SIMP_CHIN_DB_PERIOD,
            self::NUMBERED_BULLET_STYLE_BULLET_HINDI_NUM_PAREN_RIGHT,
            self::NUMBERED_BULLET_STYLE_BULLET_HINDI_ALPHA1_PERIOD,
            self::NUMBERED_BULLET_STYLE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHangingPunctuationAllowableValues()
    {
        return [
            self::HANGING_PUNCTUATION_FALSE,
            self::HANGING_PUNCTUATION_TRUE,
            self::HANGING_PUNCTUATION_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEastAsianLineBreakAllowableValues()
    {
        return [
            self::EAST_ASIAN_LINE_BREAK_FALSE,
            self::EAST_ASIAN_LINE_BREAK_TRUE,
            self::EAST_ASIAN_LINE_BREAK_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLatinLineBreakAllowableValues()
    {
        return [
            self::LATIN_LINE_BREAK_FALSE,
            self::LATIN_LINE_BREAK_TRUE,
            self::LATIN_LINE_BREAK_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRightToLeftAllowableValues()
    {
        return [
            self::RIGHT_TO_LEFT_FALSE,
            self::RIGHT_TO_LEFT_TRUE,
            self::RIGHT_TO_LEFT_NOT_DEFINED,
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

        $this->container['margin_left'] = isset($data['margin_left']) ? $data['margin_left'] : null;
        $this->container['margin_right'] = isset($data['margin_right']) ? $data['margin_right'] : null;
        $this->container['space_before'] = isset($data['space_before']) ? $data['space_before'] : null;
        $this->container['space_after'] = isset($data['space_after']) ? $data['space_after'] : null;
        $this->container['space_within'] = isset($data['space_within']) ? $data['space_within'] : null;
        $this->container['indent'] = isset($data['indent']) ? $data['indent'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['font_alignment'] = isset($data['font_alignment']) ? $data['font_alignment'] : null;
        $this->container['default_tab_size'] = isset($data['default_tab_size']) ? $data['default_tab_size'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['bullet_char'] = isset($data['bullet_char']) ? $data['bullet_char'] : null;
        $this->container['bullet_height'] = isset($data['bullet_height']) ? $data['bullet_height'] : null;
        $this->container['bullet_type'] = isset($data['bullet_type']) ? $data['bullet_type'] : null;
        $this->container['numbered_bullet_start_with'] = isset($data['numbered_bullet_start_with']) ? $data['numbered_bullet_start_with'] : null;
        $this->container['numbered_bullet_style'] = isset($data['numbered_bullet_style']) ? $data['numbered_bullet_style'] : null;
        $this->container['hanging_punctuation'] = isset($data['hanging_punctuation']) ? $data['hanging_punctuation'] : null;
        $this->container['east_asian_line_break'] = isset($data['east_asian_line_break']) ? $data['east_asian_line_break'] : null;
        $this->container['latin_line_break'] = isset($data['latin_line_break']) ? $data['latin_line_break'] : null;
        $this->container['right_to_left'] = isset($data['right_to_left']) ? $data['right_to_left'] : null;
        $this->container['portion_list'] = isset($data['portion_list']) ? $data['portion_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFontAlignmentAllowableValues();
        if (!in_array($this->container['font_alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'font_alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBulletTypeAllowableValues();
        if (!in_array($this->container['bullet_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bullet_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNumberedBulletStyleAllowableValues();
        if (!in_array($this->container['numbered_bullet_style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'numbered_bullet_style', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHangingPunctuationAllowableValues();
        if (!in_array($this->container['hanging_punctuation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hanging_punctuation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEastAsianLineBreakAllowableValues();
        if (!in_array($this->container['east_asian_line_break'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'east_asian_line_break', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLatinLineBreakAllowableValues();
        if (!in_array($this->container['latin_line_break'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'latin_line_break', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRightToLeftAllowableValues();
        if (!in_array($this->container['right_to_left'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'right_to_left', must be one of '%s'",
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

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFontAlignmentAllowableValues();
        if (!in_array($this->container['font_alignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getBulletTypeAllowableValues();
        if (!in_array($this->container['bullet_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getNumberedBulletStyleAllowableValues();
        if (!in_array($this->container['numbered_bullet_style'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHangingPunctuationAllowableValues();
        if (!in_array($this->container['hanging_punctuation'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getEastAsianLineBreakAllowableValues();
        if (!in_array($this->container['east_asian_line_break'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLatinLineBreakAllowableValues();
        if (!in_array($this->container['latin_line_break'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRightToLeftAllowableValues();
        if (!in_array($this->container['right_to_left'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets margin_left
     *
     * @return double
     */
    public function getMarginLeft()
    {
        return $this->container['margin_left'];
    }

    /**
     * Sets margin_left
     *
     * @param double $margin_left margin_left
     *
     * @return $this
     */
    public function setMarginLeft($margin_left)
    {
        $this->container['margin_left'] = $margin_left;

        return $this;
    }

    /**
     * Gets margin_right
     *
     * @return double
     */
    public function getMarginRight()
    {
        return $this->container['margin_right'];
    }

    /**
     * Sets margin_right
     *
     * @param double $margin_right margin_right
     *
     * @return $this
     */
    public function setMarginRight($margin_right)
    {
        $this->container['margin_right'] = $margin_right;

        return $this;
    }

    /**
     * Gets space_before
     *
     * @return double
     */
    public function getSpaceBefore()
    {
        return $this->container['space_before'];
    }

    /**
     * Sets space_before
     *
     * @param double $space_before space_before
     *
     * @return $this
     */
    public function setSpaceBefore($space_before)
    {
        $this->container['space_before'] = $space_before;

        return $this;
    }

    /**
     * Gets space_after
     *
     * @return double
     */
    public function getSpaceAfter()
    {
        return $this->container['space_after'];
    }

    /**
     * Sets space_after
     *
     * @param double $space_after space_after
     *
     * @return $this
     */
    public function setSpaceAfter($space_after)
    {
        $this->container['space_after'] = $space_after;

        return $this;
    }

    /**
     * Gets space_within
     *
     * @return double
     */
    public function getSpaceWithin()
    {
        return $this->container['space_within'];
    }

    /**
     * Sets space_within
     *
     * @param double $space_within space_within
     *
     * @return $this
     */
    public function setSpaceWithin($space_within)
    {
        $this->container['space_within'] = $space_within;

        return $this;
    }

    /**
     * Gets indent
     *
     * @return double
     */
    public function getIndent()
    {
        return $this->container['indent'];
    }

    /**
     * Sets indent
     *
     * @param double $indent indent
     *
     * @return $this
     */
    public function setIndent($indent)
    {
        $this->container['indent'] = $indent;

        return $this;
    }

    /**
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param string $alignment alignment
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();
        if (!is_null($alignment) && !in_array($alignment, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alignment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets font_alignment
     *
     * @return string
     */
    public function getFontAlignment()
    {
        return $this->container['font_alignment'];
    }

    /**
     * Sets font_alignment
     *
     * @param string $font_alignment font_alignment
     *
     * @return $this
     */
    public function setFontAlignment($font_alignment)
    {
        $allowedValues = $this->getFontAlignmentAllowableValues();
        if (!is_null($font_alignment) && !in_array($font_alignment, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'font_alignment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['font_alignment'] = $font_alignment;

        return $this;
    }

    /**
     * Gets default_tab_size
     *
     * @return double
     */
    public function getDefaultTabSize()
    {
        return $this->container['default_tab_size'];
    }

    /**
     * Sets default_tab_size
     *
     * @param double $default_tab_size default_tab_size
     *
     * @return $this
     */
    public function setDefaultTabSize($default_tab_size)
    {
        $this->container['default_tab_size'] = $default_tab_size;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param int $depth depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets bullet_char
     *
     * @return string
     */
    public function getBulletChar()
    {
        return $this->container['bullet_char'];
    }

    /**
     * Sets bullet_char
     *
     * @param string $bullet_char bullet_char
     *
     * @return $this
     */
    public function setBulletChar($bullet_char)
    {
        $this->container['bullet_char'] = $bullet_char;

        return $this;
    }

    /**
     * Gets bullet_height
     *
     * @return double
     */
    public function getBulletHeight()
    {
        return $this->container['bullet_height'];
    }

    /**
     * Sets bullet_height
     *
     * @param double $bullet_height bullet_height
     *
     * @return $this
     */
    public function setBulletHeight($bullet_height)
    {
        $this->container['bullet_height'] = $bullet_height;

        return $this;
    }

    /**
     * Gets bullet_type
     *
     * @return string
     */
    public function getBulletType()
    {
        return $this->container['bullet_type'];
    }

    /**
     * Sets bullet_type
     *
     * @param string $bullet_type bullet_type
     *
     * @return $this
     */
    public function setBulletType($bullet_type)
    {
        $allowedValues = $this->getBulletTypeAllowableValues();
        if (!is_null($bullet_type) && !in_array($bullet_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bullet_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bullet_type'] = $bullet_type;

        return $this;
    }

    /**
     * Gets numbered_bullet_start_with
     *
     * @return int
     */
    public function getNumberedBulletStartWith()
    {
        return $this->container['numbered_bullet_start_with'];
    }

    /**
     * Sets numbered_bullet_start_with
     *
     * @param int $numbered_bullet_start_with numbered_bullet_start_with
     *
     * @return $this
     */
    public function setNumberedBulletStartWith($numbered_bullet_start_with)
    {
        $this->container['numbered_bullet_start_with'] = $numbered_bullet_start_with;

        return $this;
    }

    /**
     * Gets numbered_bullet_style
     *
     * @return string
     */
    public function getNumberedBulletStyle()
    {
        return $this->container['numbered_bullet_style'];
    }

    /**
     * Sets numbered_bullet_style
     *
     * @param string $numbered_bullet_style numbered_bullet_style
     *
     * @return $this
     */
    public function setNumberedBulletStyle($numbered_bullet_style)
    {
        $allowedValues = $this->getNumberedBulletStyleAllowableValues();
        if (!is_null($numbered_bullet_style) && !in_array($numbered_bullet_style, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'numbered_bullet_style', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['numbered_bullet_style'] = $numbered_bullet_style;

        return $this;
    }

    /**
     * Gets hanging_punctuation
     *
     * @return string
     */
    public function getHangingPunctuation()
    {
        return $this->container['hanging_punctuation'];
    }

    /**
     * Sets hanging_punctuation
     *
     * @param string $hanging_punctuation hanging_punctuation
     *
     * @return $this
     */
    public function setHangingPunctuation($hanging_punctuation)
    {
        $allowedValues = $this->getHangingPunctuationAllowableValues();
        if (!is_null($hanging_punctuation) && !in_array($hanging_punctuation, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hanging_punctuation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hanging_punctuation'] = $hanging_punctuation;

        return $this;
    }

    /**
     * Gets east_asian_line_break
     *
     * @return string
     */
    public function getEastAsianLineBreak()
    {
        return $this->container['east_asian_line_break'];
    }

    /**
     * Sets east_asian_line_break
     *
     * @param string $east_asian_line_break east_asian_line_break
     *
     * @return $this
     */
    public function setEastAsianLineBreak($east_asian_line_break)
    {
        $allowedValues = $this->getEastAsianLineBreakAllowableValues();
        if (!is_null($east_asian_line_break) && !in_array($east_asian_line_break, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'east_asian_line_break', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['east_asian_line_break'] = $east_asian_line_break;

        return $this;
    }

    /**
     * Gets latin_line_break
     *
     * @return string
     */
    public function getLatinLineBreak()
    {
        return $this->container['latin_line_break'];
    }

    /**
     * Sets latin_line_break
     *
     * @param string $latin_line_break latin_line_break
     *
     * @return $this
     */
    public function setLatinLineBreak($latin_line_break)
    {
        $allowedValues = $this->getLatinLineBreakAllowableValues();
        if (!is_null($latin_line_break) && !in_array($latin_line_break, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'latin_line_break', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['latin_line_break'] = $latin_line_break;

        return $this;
    }

    /**
     * Gets right_to_left
     *
     * @return string
     */
    public function getRightToLeft()
    {
        return $this->container['right_to_left'];
    }

    /**
     * Sets right_to_left
     *
     * @param string $right_to_left right_to_left
     *
     * @return $this
     */
    public function setRightToLeft($right_to_left)
    {
        $allowedValues = $this->getRightToLeftAllowableValues();
        if (!is_null($right_to_left) && !in_array($right_to_left, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'right_to_left', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['right_to_left'] = $right_to_left;

        return $this;
    }

    /**
     * Gets portion_list
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement[]
     */
    public function getPortionList()
    {
        return $this->container['portion_list'];
    }

    /**
     * Sets portion_list
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement[] $portion_list portion_list
     *
     * @return $this
     */
    public function setPortionList($portion_list)
    {
        $this->container['portion_list'] = $portion_list;

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


