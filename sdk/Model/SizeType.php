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
 * SizeType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SizeType
{
    /**
     * Possible values of this enum
     */
    const OnScreen = 0;
    const LetterPaper = 1;
    const A4Paper = 2;
    const Slide35mm = 3;
    const Overhead = 4;
    const Banner = 5;
    const Custom = 6;
    const Ledger = 7;
    const A3Paper = 8;
    const B4IsoPaper = 9;
    const B5IsoPaper = 10;
    const B4JisPaper = 11;
    const B5JisPaper = 12;
    const HagakiCard = 13;
    const OnScreen16x9 = 14;
    const OnScreen16x10 = 15;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OnScreen,
            self::LetterPaper,
            self::A4Paper,
            self::Slide35mm,
            self::Overhead,
            self::Banner,
            self::Custom,
            self::Ledger,
            self::A3Paper,
            self::B4IsoPaper,
            self::B5IsoPaper,
            self::B4JisPaper,
            self::B5JisPaper,
            self::HagakiCard,
            self::OnScreen16x9,
            self::OnScreen16x10,
        ];
    }
}


