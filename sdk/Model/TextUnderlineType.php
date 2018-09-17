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
 * TextUnderlineType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextUnderlineType
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const WORDS = 'Words';
    const SINGLE = 'Single';
    const DOUBLE = 'Double';
    const HEAVY = 'Heavy';
    const DOTTED = 'Dotted';
    const HEAVY_DOTTED = 'HeavyDotted';
    const DASHED = 'Dashed';
    const HEAVY_DASHED = 'HeavyDashed';
    const LONG_DASHED = 'LongDashed';
    const HEAVY_LONG_DASHED = 'HeavyLongDashed';
    const DOT_DASH = 'DotDash';
    const HEAVY_DOT_DASH = 'HeavyDotDash';
    const DOT_DOT_DASH = 'DotDotDash';
    const HEAVY_DOT_DOT_DASH = 'HeavyDotDotDash';
    const WAVY = 'Wavy';
    const HEAVY_WAVY = 'HeavyWavy';
    const DOUBLE_WAVY = 'DoubleWavy';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::WORDS,
            self::SINGLE,
            self::DOUBLE,
            self::HEAVY,
            self::DOTTED,
            self::HEAVY_DOTTED,
            self::DASHED,
            self::HEAVY_DASHED,
            self::LONG_DASHED,
            self::HEAVY_LONG_DASHED,
            self::DOT_DASH,
            self::HEAVY_DOT_DASH,
            self::DOT_DOT_DASH,
            self::HEAVY_DOT_DOT_DASH,
            self::WAVY,
            self::HEAVY_WAVY,
            self::DOUBLE_WAVY,
            self::NOT_DEFINED,
        ];
    }
}


