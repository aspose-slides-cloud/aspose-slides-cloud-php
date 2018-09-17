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
 * RectangleAlignment Class Doc Comment
 *
 * @category Class
 * @description rectangle alignment types
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RectangleAlignment
{
    /**
     * Possible values of this enum
     */
    const TOP_LEFT = 'TopLeft';
    const TOP = 'Top';
    const TOP_RIGHT = 'TopRight';
    const LEFT = 'Left';
    const CENTER = 'Center';
    const RIGHT = 'Right';
    const BOTTOM_LEFT = 'BottomLeft';
    const BOTTOM = 'Bottom';
    const BOTTOM_RIGHT = 'BottomRight';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TOP_LEFT,
            self::TOP,
            self::TOP_RIGHT,
            self::LEFT,
            self::CENTER,
            self::RIGHT,
            self::BOTTOM_LEFT,
            self::BOTTOM,
            self::BOTTOM_RIGHT,
            self::NOT_DEFINED,
        ];
    }
}


