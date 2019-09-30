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
 * @description Slide size preset.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SizeType
{
    /**
     * Possible values of this enum
     */
    const ON_SCREEN = 'OnScreen';
    const LETTER_PAPER = 'LetterPaper';
    const A4_PAPER = 'A4Paper';
    const SLIDE35MM = 'Slide35mm';
    const OVERHEAD = 'Overhead';
    const BANNER = 'Banner';
    const CUSTOM = 'Custom';
    const LEDGER = 'Ledger';
    const A3_PAPER = 'A3Paper';
    const B4_ISO_PAPER = 'B4IsoPaper';
    const B5_ISO_PAPER = 'B5IsoPaper';
    const B4_JIS_PAPER = 'B4JisPaper';
    const B5_JIS_PAPER = 'B5JisPaper';
    const HAGAKI_CARD = 'HagakiCard';
    const ON_SCREEN16X9 = 'OnScreen16x9';
    const ON_SCREEN16X10 = 'OnScreen16x10';
    const WIDESCREEN = 'Widescreen';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ON_SCREEN,
            self::LETTER_PAPER,
            self::A4_PAPER,
            self::SLIDE35MM,
            self::OVERHEAD,
            self::BANNER,
            self::CUSTOM,
            self::LEDGER,
            self::A3_PAPER,
            self::B4_ISO_PAPER,
            self::B5_ISO_PAPER,
            self::B4_JIS_PAPER,
            self::B5_JIS_PAPER,
            self::HAGAKI_CARD,
            self::ON_SCREEN16X9,
            self::ON_SCREEN16X10,
            self::WIDESCREEN,
        ];
    }
}


