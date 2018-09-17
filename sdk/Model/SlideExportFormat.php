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
 * SlideExportFormat Class Doc Comment
 *
 * @category Class
 * @description Slide Export Format
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SlideExportFormat
{
    /**
     * Possible values of this enum
     */
    const Jpeg = 0;
    const Png = 1;
    const Gif = 2;
    const Bmp = 3;
    const Tiff = 4;
    const Html = 5;
    const Pdf = 6;
    const Xps = 7;
    const Pptx = 8;
    const Odp = 9;
    const Otp = 10;
    const Ppt = 11;
    const Pps = 12;
    const Ppsx = 13;
    const Pptm = 14;
    const Ppsm = 15;
    const Potx = 16;
    const Potm = 17;
    const Svg = 18;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Jpeg,
            self::Png,
            self::Gif,
            self::Bmp,
            self::Tiff,
            self::Html,
            self::Pdf,
            self::Xps,
            self::Pptx,
            self::Odp,
            self::Otp,
            self::Ppt,
            self::Pps,
            self::Ppsx,
            self::Pptm,
            self::Ppsm,
            self::Potx,
            self::Potm,
            self::Svg,
        ];
    }
}


