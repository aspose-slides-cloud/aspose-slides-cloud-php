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
 * MarkerStyleType Class Doc Comment
 *
 * @category Class
 * @description Determines form of marker on chart&#39;s data point
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarkerStyleType
{
    /**
     * Possible values of this enum
     */
    const CIRCLE = 'Circle';
    const DASH = 'Dash';
    const DIAMOND = 'Diamond';
    const DOT = 'Dot';
    const NONE = 'None';
    const PICTURE = 'Picture';
    const PLUS = 'Plus';
    const SQUARE = 'Square';
    const STAR = 'Star';
    const TRIANGLE = 'Triangle';
    const X = 'X';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CIRCLE,
            self::DASH,
            self::DIAMOND,
            self::DOT,
            self::NONE,
            self::PICTURE,
            self::PLUS,
            self::SQUARE,
            self::STAR,
            self::TRIANGLE,
            self::X,
            self::NOT_DEFINED,
        ];
    }
}


