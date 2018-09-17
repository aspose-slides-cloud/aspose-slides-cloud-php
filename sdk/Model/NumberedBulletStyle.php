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
 * NumberedBulletStyle Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NumberedBulletStyle
{
    /**
     * Possible values of this enum
     */
    const BULLET_ALPHA_LC_PERIOD = 'BulletAlphaLCPeriod';
    const BULLET_ALPHA_UC_PERIOD = 'BulletAlphaUCPeriod';
    const BULLET_ARABIC_PAREN_RIGHT = 'BulletArabicParenRight';
    const BULLET_ARABIC_PERIOD = 'BulletArabicPeriod';
    const BULLET_ROMAN_LC_PAREN_BOTH = 'BulletRomanLCParenBoth';
    const BULLET_ROMAN_LC_PAREN_RIGHT = 'BulletRomanLCParenRight';
    const BULLET_ROMAN_LC_PERIOD = 'BulletRomanLCPeriod';
    const BULLET_ROMAN_UC_PERIOD = 'BulletRomanUCPeriod';
    const BULLET_ALPHA_LC_PAREN_BOTH = 'BulletAlphaLCParenBoth';
    const BULLET_ALPHA_LC_PAREN_RIGHT = 'BulletAlphaLCParenRight';
    const BULLET_ALPHA_UC_PAREN_BOTH = 'BulletAlphaUCParenBoth';
    const BULLET_ALPHA_UC_PAREN_RIGHT = 'BulletAlphaUCParenRight';
    const BULLET_ARABIC_PAREN_BOTH = 'BulletArabicParenBoth';
    const BULLET_ARABIC_PLAIN = 'BulletArabicPlain';
    const BULLET_ROMAN_UC_PAREN_BOTH = 'BulletRomanUCParenBoth';
    const BULLET_ROMAN_UC_PAREN_RIGHT = 'BulletRomanUCParenRight';
    const BULLET_SIMP_CHIN_PLAIN = 'BulletSimpChinPlain';
    const BULLET_SIMP_CHIN_PERIOD = 'BulletSimpChinPeriod';
    const BULLET_CIRCLE_NUM_DB_PLAIN = 'BulletCircleNumDBPlain';
    const BULLET_CIRCLE_NUM_WD_WHITE_PLAIN = 'BulletCircleNumWDWhitePlain';
    const BULLET_CIRCLE_NUM_WD_BLACK_PLAIN = 'BulletCircleNumWDBlackPlain';
    const BULLET_TRAD_CHIN_PLAIN = 'BulletTradChinPlain';
    const BULLET_TRAD_CHIN_PERIOD = 'BulletTradChinPeriod';
    const BULLET_ARABIC_ALPHA_DASH = 'BulletArabicAlphaDash';
    const BULLET_ARABIC_ABJAD_DASH = 'BulletArabicAbjadDash';
    const BULLET_HEBREW_ALPHA_DASH = 'BulletHebrewAlphaDash';
    const BULLET_KANJI_KOREAN_PLAIN = 'BulletKanjiKoreanPlain';
    const BULLET_KANJI_KOREAN_PERIOD = 'BulletKanjiKoreanPeriod';
    const BULLET_ARABIC_DB_PLAIN = 'BulletArabicDBPlain';
    const BULLET_ARABIC_DB_PERIOD = 'BulletArabicDBPeriod';
    const BULLET_THAI_ALPHA_PERIOD = 'BulletThaiAlphaPeriod';
    const BULLET_THAI_ALPHA_PAREN_RIGHT = 'BulletThaiAlphaParenRight';
    const BULLET_THAI_ALPHA_PAREN_BOTH = 'BulletThaiAlphaParenBoth';
    const BULLET_THAI_NUM_PERIOD = 'BulletThaiNumPeriod';
    const BULLET_THAI_NUM_PAREN_RIGHT = 'BulletThaiNumParenRight';
    const BULLET_THAI_NUM_PAREN_BOTH = 'BulletThaiNumParenBoth';
    const BULLET_HINDI_ALPHA_PERIOD = 'BulletHindiAlphaPeriod';
    const BULLET_HINDI_NUM_PERIOD = 'BulletHindiNumPeriod';
    const BULLET_KANJI_SIMP_CHIN_DB_PERIOD = 'BulletKanjiSimpChinDBPeriod';
    const BULLET_HINDI_NUM_PAREN_RIGHT = 'BulletHindiNumParenRight';
    const BULLET_HINDI_ALPHA1_PERIOD = 'BulletHindiAlpha1Period';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BULLET_ALPHA_LC_PERIOD,
            self::BULLET_ALPHA_UC_PERIOD,
            self::BULLET_ARABIC_PAREN_RIGHT,
            self::BULLET_ARABIC_PERIOD,
            self::BULLET_ROMAN_LC_PAREN_BOTH,
            self::BULLET_ROMAN_LC_PAREN_RIGHT,
            self::BULLET_ROMAN_LC_PERIOD,
            self::BULLET_ROMAN_UC_PERIOD,
            self::BULLET_ALPHA_LC_PAREN_BOTH,
            self::BULLET_ALPHA_LC_PAREN_RIGHT,
            self::BULLET_ALPHA_UC_PAREN_BOTH,
            self::BULLET_ALPHA_UC_PAREN_RIGHT,
            self::BULLET_ARABIC_PAREN_BOTH,
            self::BULLET_ARABIC_PLAIN,
            self::BULLET_ROMAN_UC_PAREN_BOTH,
            self::BULLET_ROMAN_UC_PAREN_RIGHT,
            self::BULLET_SIMP_CHIN_PLAIN,
            self::BULLET_SIMP_CHIN_PERIOD,
            self::BULLET_CIRCLE_NUM_DB_PLAIN,
            self::BULLET_CIRCLE_NUM_WD_WHITE_PLAIN,
            self::BULLET_CIRCLE_NUM_WD_BLACK_PLAIN,
            self::BULLET_TRAD_CHIN_PLAIN,
            self::BULLET_TRAD_CHIN_PERIOD,
            self::BULLET_ARABIC_ALPHA_DASH,
            self::BULLET_ARABIC_ABJAD_DASH,
            self::BULLET_HEBREW_ALPHA_DASH,
            self::BULLET_KANJI_KOREAN_PLAIN,
            self::BULLET_KANJI_KOREAN_PERIOD,
            self::BULLET_ARABIC_DB_PLAIN,
            self::BULLET_ARABIC_DB_PERIOD,
            self::BULLET_THAI_ALPHA_PERIOD,
            self::BULLET_THAI_ALPHA_PAREN_RIGHT,
            self::BULLET_THAI_ALPHA_PAREN_BOTH,
            self::BULLET_THAI_NUM_PERIOD,
            self::BULLET_THAI_NUM_PAREN_RIGHT,
            self::BULLET_THAI_NUM_PAREN_BOTH,
            self::BULLET_HINDI_ALPHA_PERIOD,
            self::BULLET_HINDI_NUM_PERIOD,
            self::BULLET_KANJI_SIMP_CHIN_DB_PERIOD,
            self::BULLET_HINDI_NUM_PAREN_RIGHT,
            self::BULLET_HINDI_ALPHA1_PERIOD,
            self::NOT_DEFINED,
        ];
    }
}


