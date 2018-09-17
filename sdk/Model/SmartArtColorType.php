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
 * SmartArtColorType Class Doc Comment
 *
 * @category Class
 * @description Represents color scheme of a SmartArt diagram.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartArtColorType
{
    /**
     * Possible values of this enum
     */
    const DARK1_OUTLINE = 'Dark1Outline';
    const DARK2_OUTLINE = 'Dark2Outline';
    const DARK_FILL = 'DarkFill';
    const COLORFUL_ACCENT_COLORS = 'ColorfulAccentColors';
    const COLORFUL_ACCENT_COLORS2TO3 = 'ColorfulAccentColors2to3';
    const COLORFUL_ACCENT_COLORS3TO4 = 'ColorfulAccentColors3to4';
    const COLORFUL_ACCENT_COLORS4TO5 = 'ColorfulAccentColors4to5';
    const COLORFUL_ACCENT_COLORS5TO6 = 'ColorfulAccentColors5to6';
    const COLORED_OUTLINE_ACCENT1 = 'ColoredOutlineAccent1';
    const COLORED_FILL_ACCENT1 = 'ColoredFillAccent1';
    const GRADIENT_RANGE_ACCENT1 = 'GradientRangeAccent1';
    const GRADIENT_LOOP_ACCENT1 = 'GradientLoopAccent1';
    const TRANSPARENT_GRADIENT_RANGE_ACCENT1 = 'TransparentGradientRangeAccent1';
    const COLORED_OUTLINE_ACCENT2 = 'ColoredOutlineAccent2';
    const COLORED_FILL_ACCENT2 = 'ColoredFillAccent2';
    const GRADIENT_RANGE_ACCENT2 = 'GradientRangeAccent2';
    const GRADIENT_LOOP_ACCENT2 = 'GradientLoopAccent2';
    const TRANSPARENT_GRADIENT_RANGE_ACCENT2 = 'TransparentGradientRangeAccent2';
    const COLORED_OUTLINE_ACCENT3 = 'ColoredOutlineAccent3';
    const COLORED_FILL_ACCENT3 = 'ColoredFillAccent3';
    const GRADIENT_RANGE_ACCENT3 = 'GradientRangeAccent3';
    const GRADIENT_LOOP_ACCENT3 = 'GradientLoopAccent3';
    const TRANSPARENT_GRADIENT_RANGE_ACCENT3 = 'TransparentGradientRangeAccent3';
    const COLORED_OUTLINE_ACCENT4 = 'ColoredOutlineAccent4';
    const COLORED_FILL_ACCENT4 = 'ColoredFillAccent4';
    const GRADIENT_RANGE_ACCENT4 = 'GradientRangeAccent4';
    const GRADIENT_LOOP_ACCENT4 = 'GradientLoopAccent4';
    const TRANSPARENT_GRADIENT_RANGE_ACCENT4 = 'TransparentGradientRangeAccent4';
    const COLORED_OUTLINE_ACCENT5 = 'ColoredOutlineAccent5';
    const COLORED_FILL_ACCENT5 = 'ColoredFillAccent5';
    const GRADIENT_RANGE_ACCENT5 = 'GradientRangeAccent5';
    const GRADIENT_LOOP_ACCENT5 = 'GradientLoopAccent5';
    const TRANSPARENT_GRADIENT_RANGE_ACCENT5 = 'TransparentGradientRangeAccent5';
    const COLORED_OUTLINE_ACCENT6 = 'ColoredOutlineAccent6';
    const COLORED_FILL_ACCENT6 = 'ColoredFillAccent6';
    const GRADIENT_RANGE_ACCENT6 = 'GradientRangeAccent6';
    const GRADIENT_LOOP_ACCENT6 = 'GradientLoopAccent6';
    const TRANSPARENT_GRADIENT_RANGE_ACCENT6 = 'TransparentGradientRangeAccent6';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DARK1_OUTLINE,
            self::DARK2_OUTLINE,
            self::DARK_FILL,
            self::COLORFUL_ACCENT_COLORS,
            self::COLORFUL_ACCENT_COLORS2TO3,
            self::COLORFUL_ACCENT_COLORS3TO4,
            self::COLORFUL_ACCENT_COLORS4TO5,
            self::COLORFUL_ACCENT_COLORS5TO6,
            self::COLORED_OUTLINE_ACCENT1,
            self::COLORED_FILL_ACCENT1,
            self::GRADIENT_RANGE_ACCENT1,
            self::GRADIENT_LOOP_ACCENT1,
            self::TRANSPARENT_GRADIENT_RANGE_ACCENT1,
            self::COLORED_OUTLINE_ACCENT2,
            self::COLORED_FILL_ACCENT2,
            self::GRADIENT_RANGE_ACCENT2,
            self::GRADIENT_LOOP_ACCENT2,
            self::TRANSPARENT_GRADIENT_RANGE_ACCENT2,
            self::COLORED_OUTLINE_ACCENT3,
            self::COLORED_FILL_ACCENT3,
            self::GRADIENT_RANGE_ACCENT3,
            self::GRADIENT_LOOP_ACCENT3,
            self::TRANSPARENT_GRADIENT_RANGE_ACCENT3,
            self::COLORED_OUTLINE_ACCENT4,
            self::COLORED_FILL_ACCENT4,
            self::GRADIENT_RANGE_ACCENT4,
            self::GRADIENT_LOOP_ACCENT4,
            self::TRANSPARENT_GRADIENT_RANGE_ACCENT4,
            self::COLORED_OUTLINE_ACCENT5,
            self::COLORED_FILL_ACCENT5,
            self::GRADIENT_RANGE_ACCENT5,
            self::GRADIENT_LOOP_ACCENT5,
            self::TRANSPARENT_GRADIENT_RANGE_ACCENT5,
            self::COLORED_OUTLINE_ACCENT6,
            self::COLORED_FILL_ACCENT6,
            self::GRADIENT_RANGE_ACCENT6,
            self::GRADIENT_LOOP_ACCENT6,
            self::TRANSPARENT_GRADIENT_RANGE_ACCENT6,
        ];
    }
}


