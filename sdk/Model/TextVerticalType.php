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
 * TextVerticalType Class Doc Comment
 *
 * @category Class
 * @description Vertical text writing mode
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextVerticalType
{
    /**
     * Possible values of this enum
     */
    const HORIZONTAL = 'Horizontal';
    const VERTICAL = 'Vertical';
    const VERTICAL270 = 'Vertical270';
    const WORD_ART_VERTICAL = 'WordArtVertical';
    const EAST_ASIAN_VERTICAL = 'EastAsianVertical';
    const MONGOLIAN_VERTICAL = 'MongolianVertical';
    const WORD_ART_VERTICAL_RIGHT_TO_LEFT = 'WordArtVerticalRightToLeft';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HORIZONTAL,
            self::VERTICAL,
            self::VERTICAL270,
            self::WORD_ART_VERTICAL,
            self::EAST_ASIAN_VERTICAL,
            self::MONGOLIAN_VERTICAL,
            self::WORD_ART_VERTICAL_RIGHT_TO_LEFT,
            self::NOT_DEFINED,
        ];
    }
}


