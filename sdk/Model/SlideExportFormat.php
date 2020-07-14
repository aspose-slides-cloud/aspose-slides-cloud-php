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
    const JPEG = 'Jpeg';
    const PNG = 'Png';
    const GIF = 'Gif';
    const BMP = 'Bmp';
    const TIFF = 'Tiff';
    const HTML = 'Html';
    const PDF = 'Pdf';
    const XPS = 'Xps';
    const PPTX = 'Pptx';
    const ODP = 'Odp';
    const OTP = 'Otp';
    const PPT = 'Ppt';
    const PPS = 'Pps';
    const PPSX = 'Ppsx';
    const PPTM = 'Pptm';
    const PPSM = 'Ppsm';
    const POTX = 'Potx';
    const POT = 'Pot';
    const POTM = 'Potm';
    const SVG = 'Svg';
    const FODP = 'Fodp';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JPEG,
            self::PNG,
            self::GIF,
            self::BMP,
            self::TIFF,
            self::HTML,
            self::PDF,
            self::XPS,
            self::PPTX,
            self::ODP,
            self::OTP,
            self::PPT,
            self::PPS,
            self::PPSX,
            self::PPTM,
            self::PPSM,
            self::POTX,
            self::POT,
            self::POTM,
            self::SVG,
            self::FODP,
        ];
    }
}


