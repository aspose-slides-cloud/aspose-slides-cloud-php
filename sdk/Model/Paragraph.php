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
        'marginLeft' => 'double',
        'marginRight' => 'double',
        'spaceBefore' => 'double',
        'spaceAfter' => 'double',
        'spaceWithin' => 'double',
        'indent' => 'double',
        'alignment' => 'string',
        'fontAlignment' => 'string',
        'defaultTabSize' => 'double',
        'depth' => 'int',
        'bulletChar' => 'string',
        'bulletHeight' => 'double',
        'bulletType' => 'string',
        'numberedBulletStartWith' => 'int',
        'numberedBulletStyle' => 'string',
        'hangingPunctuation' => 'string',
        'eastAsianLineBreak' => 'string',
        'latinLineBreak' => 'string',
        'rightToLeft' => 'string',
        'portionList' => '\Aspose\Slides\Cloud\Sdk\Model\Portion[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marginLeft' => 'double',
        'marginRight' => 'double',
        'spaceBefore' => 'double',
        'spaceAfter' => 'double',
        'spaceWithin' => 'double',
        'indent' => 'double',
        'alignment' => null,
        'fontAlignment' => null,
        'defaultTabSize' => 'double',
        'depth' => null,
        'bulletChar' => null,
        'bulletHeight' => 'double',
        'bulletType' => null,
        'numberedBulletStartWith' => null,
        'numberedBulletStyle' => null,
        'hangingPunctuation' => null,
        'eastAsianLineBreak' => null,
        'latinLineBreak' => null,
        'rightToLeft' => null,
        'portionList' => null
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
        'marginLeft' => 'MarginLeft',
        'marginRight' => 'MarginRight',
        'spaceBefore' => 'SpaceBefore',
        'spaceAfter' => 'SpaceAfter',
        'spaceWithin' => 'SpaceWithin',
        'indent' => 'Indent',
        'alignment' => 'Alignment',
        'fontAlignment' => 'FontAlignment',
        'defaultTabSize' => 'DefaultTabSize',
        'depth' => 'Depth',
        'bulletChar' => 'BulletChar',
        'bulletHeight' => 'BulletHeight',
        'bulletType' => 'BulletType',
        'numberedBulletStartWith' => 'NumberedBulletStartWith',
        'numberedBulletStyle' => 'NumberedBulletStyle',
        'hangingPunctuation' => 'HangingPunctuation',
        'eastAsianLineBreak' => 'EastAsianLineBreak',
        'latinLineBreak' => 'LatinLineBreak',
        'rightToLeft' => 'RightToLeft',
        'portionList' => 'PortionList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marginLeft' => 'setMarginLeft',
        'marginRight' => 'setMarginRight',
        'spaceBefore' => 'setSpaceBefore',
        'spaceAfter' => 'setSpaceAfter',
        'spaceWithin' => 'setSpaceWithin',
        'indent' => 'setIndent',
        'alignment' => 'setAlignment',
        'fontAlignment' => 'setFontAlignment',
        'defaultTabSize' => 'setDefaultTabSize',
        'depth' => 'setDepth',
        'bulletChar' => 'setBulletChar',
        'bulletHeight' => 'setBulletHeight',
        'bulletType' => 'setBulletType',
        'numberedBulletStartWith' => 'setNumberedBulletStartWith',
        'numberedBulletStyle' => 'setNumberedBulletStyle',
        'hangingPunctuation' => 'setHangingPunctuation',
        'eastAsianLineBreak' => 'setEastAsianLineBreak',
        'latinLineBreak' => 'setLatinLineBreak',
        'rightToLeft' => 'setRightToLeft',
        'portionList' => 'setPortionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marginLeft' => 'getMarginLeft',
        'marginRight' => 'getMarginRight',
        'spaceBefore' => 'getSpaceBefore',
        'spaceAfter' => 'getSpaceAfter',
        'spaceWithin' => 'getSpaceWithin',
        'indent' => 'getIndent',
        'alignment' => 'getAlignment',
        'fontAlignment' => 'getFontAlignment',
        'defaultTabSize' => 'getDefaultTabSize',
        'depth' => 'getDepth',
        'bulletChar' => 'getBulletChar',
        'bulletHeight' => 'getBulletHeight',
        'bulletType' => 'getBulletType',
        'numberedBulletStartWith' => 'getNumberedBulletStartWith',
        'numberedBulletStyle' => 'getNumberedBulletStyle',
        'hangingPunctuation' => 'getHangingPunctuation',
        'eastAsianLineBreak' => 'getEastAsianLineBreak',
        'latinLineBreak' => 'getLatinLineBreak',
        'rightToLeft' => 'getRightToLeft',
        'portionList' => 'getPortionList'
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

        $this->container['marginLeft'] = isset($data['marginLeft']) ? $data['marginLeft'] : null;
        $this->container['marginRight'] = isset($data['marginRight']) ? $data['marginRight'] : null;
        $this->container['spaceBefore'] = isset($data['spaceBefore']) ? $data['spaceBefore'] : null;
        $this->container['spaceAfter'] = isset($data['spaceAfter']) ? $data['spaceAfter'] : null;
        $this->container['spaceWithin'] = isset($data['spaceWithin']) ? $data['spaceWithin'] : null;
        $this->container['indent'] = isset($data['indent']) ? $data['indent'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['fontAlignment'] = isset($data['fontAlignment']) ? $data['fontAlignment'] : null;
        $this->container['defaultTabSize'] = isset($data['defaultTabSize']) ? $data['defaultTabSize'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['bulletChar'] = isset($data['bulletChar']) ? $data['bulletChar'] : null;
        $this->container['bulletHeight'] = isset($data['bulletHeight']) ? $data['bulletHeight'] : null;
        $this->container['bulletType'] = isset($data['bulletType']) ? $data['bulletType'] : null;
        $this->container['numberedBulletStartWith'] = isset($data['numberedBulletStartWith']) ? $data['numberedBulletStartWith'] : null;
        $this->container['numberedBulletStyle'] = isset($data['numberedBulletStyle']) ? $data['numberedBulletStyle'] : null;
        $this->container['hangingPunctuation'] = isset($data['hangingPunctuation']) ? $data['hangingPunctuation'] : null;
        $this->container['eastAsianLineBreak'] = isset($data['eastAsianLineBreak']) ? $data['eastAsianLineBreak'] : null;
        $this->container['latinLineBreak'] = isset($data['latinLineBreak']) ? $data['latinLineBreak'] : null;
        $this->container['rightToLeft'] = isset($data['rightToLeft']) ? $data['rightToLeft'] : null;
        $this->container['portionList'] = isset($data['portionList']) ? $data['portionList'] : null;
        
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
        if (!in_array($this->container['fontAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fontAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBulletTypeAllowableValues();
        if (!in_array($this->container['bulletType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bulletType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNumberedBulletStyleAllowableValues();
        if (!in_array($this->container['numberedBulletStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'numberedBulletStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHangingPunctuationAllowableValues();
        if (!in_array($this->container['hangingPunctuation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hangingPunctuation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEastAsianLineBreakAllowableValues();
        if (!in_array($this->container['eastAsianLineBreak'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'eastAsianLineBreak', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLatinLineBreakAllowableValues();
        if (!in_array($this->container['latinLineBreak'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'latinLineBreak', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRightToLeftAllowableValues();
        if (!in_array($this->container['rightToLeft'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rightToLeft', must be one of '%s'",
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
        if (!in_array($this->container['fontAlignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getBulletTypeAllowableValues();
        if (!in_array($this->container['bulletType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getNumberedBulletStyleAllowableValues();
        if (!in_array($this->container['numberedBulletStyle'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHangingPunctuationAllowableValues();
        if (!in_array($this->container['hangingPunctuation'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getEastAsianLineBreakAllowableValues();
        if (!in_array($this->container['eastAsianLineBreak'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLatinLineBreakAllowableValues();
        if (!in_array($this->container['latinLineBreak'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRightToLeftAllowableValues();
        if (!in_array($this->container['rightToLeft'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets marginLeft
     *
     * @return double
     */
    public function getMarginLeft()
    {
        return $this->container['marginLeft'];
    }

    /**
     * Sets marginLeft
     *
     * @param double $marginLeft Left margin.
     *
     * @return $this
     */
    public function setMarginLeft($marginLeft)
    {
        $this->container['marginLeft'] = $marginLeft;

        return $this;
    }

    /**
     * Gets marginRight
     *
     * @return double
     */
    public function getMarginRight()
    {
        return $this->container['marginRight'];
    }

    /**
     * Sets marginRight
     *
     * @param double $marginRight Right margin.
     *
     * @return $this
     */
    public function setMarginRight($marginRight)
    {
        $this->container['marginRight'] = $marginRight;

        return $this;
    }

    /**
     * Gets spaceBefore
     *
     * @return double
     */
    public function getSpaceBefore()
    {
        return $this->container['spaceBefore'];
    }

    /**
     * Sets spaceBefore
     *
     * @param double $spaceBefore Left spacing.
     *
     * @return $this
     */
    public function setSpaceBefore($spaceBefore)
    {
        $this->container['spaceBefore'] = $spaceBefore;

        return $this;
    }

    /**
     * Gets spaceAfter
     *
     * @return double
     */
    public function getSpaceAfter()
    {
        return $this->container['spaceAfter'];
    }

    /**
     * Sets spaceAfter
     *
     * @param double $spaceAfter Right spacing.
     *
     * @return $this
     */
    public function setSpaceAfter($spaceAfter)
    {
        $this->container['spaceAfter'] = $spaceAfter;

        return $this;
    }

    /**
     * Gets spaceWithin
     *
     * @return double
     */
    public function getSpaceWithin()
    {
        return $this->container['spaceWithin'];
    }

    /**
     * Sets spaceWithin
     *
     * @param double $spaceWithin Spacing between lines.
     *
     * @return $this
     */
    public function setSpaceWithin($spaceWithin)
    {
        $this->container['spaceWithin'] = $spaceWithin;

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
     * @param double $indent First line indent.
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
     * @param string $alignment Text alignment.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();


        if (is_numeric($alignment)) {
            if ($alignment >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'alignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $alignment = $allowedValues[$alignment];
            }
        } else {
            if (!is_null($alignment) && !in_array($alignment, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'alignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets fontAlignment
     *
     * @return string
     */
    public function getFontAlignment()
    {
        return $this->container['fontAlignment'];
    }

    /**
     * Sets fontAlignment
     *
     * @param string $fontAlignment Font alignment.
     *
     * @return $this
     */
    public function setFontAlignment($fontAlignment)
    {
        $allowedValues = $this->getFontAlignmentAllowableValues();


        if (is_numeric($fontAlignment)) {
            if ($fontAlignment >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontAlignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $fontAlignment = $allowedValues[$fontAlignment];
            }
        } else {
            if (!is_null($fontAlignment) && !in_array($fontAlignment, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontAlignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['fontAlignment'] = $fontAlignment;

        return $this;
    }

    /**
     * Gets defaultTabSize
     *
     * @return double
     */
    public function getDefaultTabSize()
    {
        return $this->container['defaultTabSize'];
    }

    /**
     * Sets defaultTabSize
     *
     * @param double $defaultTabSize Default tabulation size.
     *
     * @return $this
     */
    public function setDefaultTabSize($defaultTabSize)
    {
        $this->container['defaultTabSize'] = $defaultTabSize;

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
     * @param int $depth Depth.
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets bulletChar
     *
     * @return string
     */
    public function getBulletChar()
    {
        return $this->container['bulletChar'];
    }

    /**
     * Sets bulletChar
     *
     * @param string $bulletChar Bullet char.
     *
     * @return $this
     */
    public function setBulletChar($bulletChar)
    {
        $this->container['bulletChar'] = $bulletChar;

        return $this;
    }

    /**
     * Gets bulletHeight
     *
     * @return double
     */
    public function getBulletHeight()
    {
        return $this->container['bulletHeight'];
    }

    /**
     * Sets bulletHeight
     *
     * @param double $bulletHeight Bullet height.
     *
     * @return $this
     */
    public function setBulletHeight($bulletHeight)
    {
        $this->container['bulletHeight'] = $bulletHeight;

        return $this;
    }

    /**
     * Gets bulletType
     *
     * @return string
     */
    public function getBulletType()
    {
        return $this->container['bulletType'];
    }

    /**
     * Sets bulletType
     *
     * @param string $bulletType Bullet type.
     *
     * @return $this
     */
    public function setBulletType($bulletType)
    {
        $allowedValues = $this->getBulletTypeAllowableValues();


        if (is_numeric($bulletType)) {
            if ($bulletType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'bulletType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $bulletType = $allowedValues[$bulletType];
            }
        } else {
            if (!is_null($bulletType) && !in_array($bulletType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'bulletType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['bulletType'] = $bulletType;

        return $this;
    }

    /**
     * Gets numberedBulletStartWith
     *
     * @return int
     */
    public function getNumberedBulletStartWith()
    {
        return $this->container['numberedBulletStartWith'];
    }

    /**
     * Sets numberedBulletStartWith
     *
     * @param int $numberedBulletStartWith Starting number for a numbered bullet.
     *
     * @return $this
     */
    public function setNumberedBulletStartWith($numberedBulletStartWith)
    {
        $this->container['numberedBulletStartWith'] = $numberedBulletStartWith;

        return $this;
    }

    /**
     * Gets numberedBulletStyle
     *
     * @return string
     */
    public function getNumberedBulletStyle()
    {
        return $this->container['numberedBulletStyle'];
    }

    /**
     * Sets numberedBulletStyle
     *
     * @param string $numberedBulletStyle Numbered bullet style.
     *
     * @return $this
     */
    public function setNumberedBulletStyle($numberedBulletStyle)
    {
        $allowedValues = $this->getNumberedBulletStyleAllowableValues();


        if (is_numeric($numberedBulletStyle)) {
            if ($numberedBulletStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'numberedBulletStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $numberedBulletStyle = $allowedValues[$numberedBulletStyle];
            }
        } else {
            if (!is_null($numberedBulletStyle) && !in_array($numberedBulletStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'numberedBulletStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['numberedBulletStyle'] = $numberedBulletStyle;

        return $this;
    }

    /**
     * Gets hangingPunctuation
     *
     * @return string
     */
    public function getHangingPunctuation()
    {
        return $this->container['hangingPunctuation'];
    }

    /**
     * Sets hangingPunctuation
     *
     * @param string $hangingPunctuation True if hanging punctuation is used with the paragraph.
     *
     * @return $this
     */
    public function setHangingPunctuation($hangingPunctuation)
    {
        $allowedValues = $this->getHangingPunctuationAllowableValues();


        if (is_numeric($hangingPunctuation)) {
            if ($hangingPunctuation >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'hangingPunctuation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $hangingPunctuation = $allowedValues[$hangingPunctuation];
            }
        } else {
            if (!is_null($hangingPunctuation) && !in_array($hangingPunctuation, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'hangingPunctuation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['hangingPunctuation'] = $hangingPunctuation;

        return $this;
    }

    /**
     * Gets eastAsianLineBreak
     *
     * @return string
     */
    public function getEastAsianLineBreak()
    {
        return $this->container['eastAsianLineBreak'];
    }

    /**
     * Sets eastAsianLineBreak
     *
     * @param string $eastAsianLineBreak True if East Asian line break is used with the paragraph.
     *
     * @return $this
     */
    public function setEastAsianLineBreak($eastAsianLineBreak)
    {
        $allowedValues = $this->getEastAsianLineBreakAllowableValues();


        if (is_numeric($eastAsianLineBreak)) {
            if ($eastAsianLineBreak >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'eastAsianLineBreak', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $eastAsianLineBreak = $allowedValues[$eastAsianLineBreak];
            }
        } else {
            if (!is_null($eastAsianLineBreak) && !in_array($eastAsianLineBreak, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'eastAsianLineBreak', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['eastAsianLineBreak'] = $eastAsianLineBreak;

        return $this;
    }

    /**
     * Gets latinLineBreak
     *
     * @return string
     */
    public function getLatinLineBreak()
    {
        return $this->container['latinLineBreak'];
    }

    /**
     * Sets latinLineBreak
     *
     * @param string $latinLineBreak True if Latin line break is used with the paragraph.
     *
     * @return $this
     */
    public function setLatinLineBreak($latinLineBreak)
    {
        $allowedValues = $this->getLatinLineBreakAllowableValues();


        if (is_numeric($latinLineBreak)) {
            if ($latinLineBreak >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'latinLineBreak', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $latinLineBreak = $allowedValues[$latinLineBreak];
            }
        } else {
            if (!is_null($latinLineBreak) && !in_array($latinLineBreak, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'latinLineBreak', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['latinLineBreak'] = $latinLineBreak;

        return $this;
    }

    /**
     * Gets rightToLeft
     *
     * @return string
     */
    public function getRightToLeft()
    {
        return $this->container['rightToLeft'];
    }

    /**
     * Sets rightToLeft
     *
     * @param string $rightToLeft True if right to left direction is used with the paragraph.
     *
     * @return $this
     */
    public function setRightToLeft($rightToLeft)
    {
        $allowedValues = $this->getRightToLeftAllowableValues();


        if (is_numeric($rightToLeft)) {
            if ($rightToLeft >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rightToLeft', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $rightToLeft = $allowedValues[$rightToLeft];
            }
        } else {
            if (!is_null($rightToLeft) && !in_array($rightToLeft, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'rightToLeft', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['rightToLeft'] = $rightToLeft;

        return $this;
    }

    /**
     * Gets portionList
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Portion[]
     */
    public function getPortionList()
    {
        return $this->container['portionList'];
    }

    /**
     * Sets portionList
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Portion[] $portionList List of portion links.
     *
     * @return $this
     */
    public function setPortionList($portionList)
    {
        $this->container['portionList'] = $portionList;

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


