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
 * DisplayUnitType Class Doc Comment
 *
 * @category Class
 * @description Determines multiplicity of the displayed data.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisplayUnitType
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const HUNDREDS = 'Hundreds';
    const THOUSANDS = 'Thousands';
    const TEN_THOUSANDS = 'TenThousands';
    const HUNDRED_THOUSANDS = 'HundredThousands';
    const MILLIONS = 'Millions';
    const TEN_MILLIONS = 'TenMillions';
    const HUNDRED_MILLIONS = 'HundredMillions';
    const BILLIONS = 'Billions';
    const TRILLIONS = 'Trillions';
    const CUSTOM_VALUE = 'CustomValue';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::HUNDREDS,
            self::THOUSANDS,
            self::TEN_THOUSANDS,
            self::HUNDRED_THOUSANDS,
            self::MILLIONS,
            self::TEN_MILLIONS,
            self::HUNDRED_MILLIONS,
            self::BILLIONS,
            self::TRILLIONS,
            self::CUSTOM_VALUE,
        ];
    }
}


