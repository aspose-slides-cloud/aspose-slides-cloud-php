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
 * LineDashStyle Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineDashStyle
{
    /**
     * Possible values of this enum
     */
    const SOLID = 'Solid';
    const DOT = 'Dot';
    const DASH = 'Dash';
    const LARGE_DASH = 'LargeDash';
    const DASH_DOT = 'DashDot';
    const LARGE_DASH_DOT = 'LargeDashDot';
    const LARGE_DASH_DOT_DOT = 'LargeDashDotDot';
    const SYSTEM_DASH = 'SystemDash';
    const SYSTEM_DOT = 'SystemDot';
    const SYSTEM_DASH_DOT = 'SystemDashDot';
    const SYSTEM_DASH_DOT_DOT = 'SystemDashDotDot';
    const CUSTOM = 'Custom';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOLID,
            self::DOT,
            self::DASH,
            self::LARGE_DASH,
            self::DASH_DOT,
            self::LARGE_DASH_DOT,
            self::LARGE_DASH_DOT_DOT,
            self::SYSTEM_DASH,
            self::SYSTEM_DOT,
            self::SYSTEM_DASH_DOT,
            self::SYSTEM_DASH_DOT_DOT,
            self::CUSTOM,
            self::NOT_DEFINED,
        ];
    }
}


