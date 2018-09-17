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
 * PatternStyle Class Doc Comment
 *
 * @category Class
 * @description Available pattern styles
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PatternStyle
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const PERCENT05 = 'Percent05';
    const PERCENT10 = 'Percent10';
    const PERCENT20 = 'Percent20';
    const PERCENT25 = 'Percent25';
    const PERCENT30 = 'Percent30';
    const PERCENT40 = 'Percent40';
    const PERCENT50 = 'Percent50';
    const PERCENT60 = 'Percent60';
    const PERCENT70 = 'Percent70';
    const PERCENT75 = 'Percent75';
    const PERCENT80 = 'Percent80';
    const PERCENT90 = 'Percent90';
    const DARK_HORIZONTAL = 'DarkHorizontal';
    const DARK_VERTICAL = 'DarkVertical';
    const DARK_DOWNWARD_DIAGONAL = 'DarkDownwardDiagonal';
    const DARK_UPWARD_DIAGONAL = 'DarkUpwardDiagonal';
    const SMALL_CHECKER_BOARD = 'SmallCheckerBoard';
    const TRELLIS = 'Trellis';
    const LIGHT_HORIZONTAL = 'LightHorizontal';
    const LIGHT_VERTICAL = 'LightVertical';
    const LIGHT_DOWNWARD_DIAGONAL = 'LightDownwardDiagonal';
    const LIGHT_UPWARD_DIAGONAL = 'LightUpwardDiagonal';
    const SMALL_GRID = 'SmallGrid';
    const DOTTED_DIAMOND = 'DottedDiamond';
    const WIDE_DOWNWARD_DIAGONAL = 'WideDownwardDiagonal';
    const WIDE_UPWARD_DIAGONAL = 'WideUpwardDiagonal';
    const DASHED_UPWARD_DIAGONAL = 'DashedUpwardDiagonal';
    const DASHED_DOWNWARD_DIAGONAL = 'DashedDownwardDiagonal';
    const NARROW_VERTICAL = 'NarrowVertical';
    const NARROW_HORIZONTAL = 'NarrowHorizontal';
    const DASHED_VERTICAL = 'DashedVertical';
    const DASHED_HORIZONTAL = 'DashedHorizontal';
    const LARGE_CONFETTI = 'LargeConfetti';
    const LARGE_GRID = 'LargeGrid';
    const HORIZONTAL_BRICK = 'HorizontalBrick';
    const LARGE_CHECKER_BOARD = 'LargeCheckerBoard';
    const SMALL_CONFETTI = 'SmallConfetti';
    const ZIGZAG = 'Zigzag';
    const SOLID_DIAMOND = 'SolidDiamond';
    const DIAGONAL_BRICK = 'DiagonalBrick';
    const OUTLINED_DIAMOND = 'OutlinedDiamond';
    const PLAID = 'Plaid';
    const SPHERE = 'Sphere';
    const WEAVE = 'Weave';
    const DOTTED_GRID = 'DottedGrid';
    const DIVOT = 'Divot';
    const SHINGLE = 'Shingle';
    const WAVE = 'Wave';
    const HORIZONTAL = 'Horizontal';
    const VERTICAL = 'Vertical';
    const CROSS = 'Cross';
    const DOWNWARD_DIAGONAL = 'DownwardDiagonal';
    const UPWARD_DIAGONAL = 'UpwardDiagonal';
    const DIAGONAL_CROSS = 'DiagonalCross';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PERCENT05,
            self::PERCENT10,
            self::PERCENT20,
            self::PERCENT25,
            self::PERCENT30,
            self::PERCENT40,
            self::PERCENT50,
            self::PERCENT60,
            self::PERCENT70,
            self::PERCENT75,
            self::PERCENT80,
            self::PERCENT90,
            self::DARK_HORIZONTAL,
            self::DARK_VERTICAL,
            self::DARK_DOWNWARD_DIAGONAL,
            self::DARK_UPWARD_DIAGONAL,
            self::SMALL_CHECKER_BOARD,
            self::TRELLIS,
            self::LIGHT_HORIZONTAL,
            self::LIGHT_VERTICAL,
            self::LIGHT_DOWNWARD_DIAGONAL,
            self::LIGHT_UPWARD_DIAGONAL,
            self::SMALL_GRID,
            self::DOTTED_DIAMOND,
            self::WIDE_DOWNWARD_DIAGONAL,
            self::WIDE_UPWARD_DIAGONAL,
            self::DASHED_UPWARD_DIAGONAL,
            self::DASHED_DOWNWARD_DIAGONAL,
            self::NARROW_VERTICAL,
            self::NARROW_HORIZONTAL,
            self::DASHED_VERTICAL,
            self::DASHED_HORIZONTAL,
            self::LARGE_CONFETTI,
            self::LARGE_GRID,
            self::HORIZONTAL_BRICK,
            self::LARGE_CHECKER_BOARD,
            self::SMALL_CONFETTI,
            self::ZIGZAG,
            self::SOLID_DIAMOND,
            self::DIAGONAL_BRICK,
            self::OUTLINED_DIAMOND,
            self::PLAID,
            self::SPHERE,
            self::WEAVE,
            self::DOTTED_GRID,
            self::DIVOT,
            self::SHINGLE,
            self::WAVE,
            self::HORIZONTAL,
            self::VERTICAL,
            self::CROSS,
            self::DOWNWARD_DIAGONAL,
            self::UPWARD_DIAGONAL,
            self::DIAGONAL_CROSS,
            self::NOT_DEFINED,
        ];
    }
}


