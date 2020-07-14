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
 * ExportFormat Class Doc Comment
 *
 * @category Class
 * @description Available export formats
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportFormat
{
    /**
     * Possible values of this enum
     */
    const PDF = 'Pdf';
    const XPS = 'Xps';
    const TIFF = 'Tiff';
    const PPTX = 'Pptx';
    const ODP = 'Odp';
    const OTP = 'Otp';
    const PPT = 'Ppt';
    const PPS = 'Pps';
    const PPSX = 'Ppsx';
    const PPTM = 'Pptm';
    const PPSM = 'Ppsm';
    const POT = 'Pot';
    const POTX = 'Potx';
    const POTM = 'Potm';
    const HTML = 'Html';
    const SWF = 'Swf';
    const SVG = 'Svg';
    const JPEG = 'Jpeg';
    const PNG = 'Png';
    const GIF = 'Gif';
    const BMP = 'Bmp';
    const FODP = 'Fodp';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
            self::XPS,
            self::TIFF,
            self::PPTX,
            self::ODP,
            self::OTP,
            self::PPT,
            self::PPS,
            self::PPSX,
            self::PPTM,
            self::PPSM,
            self::POT,
            self::POTX,
            self::POTM,
            self::HTML,
            self::SWF,
            self::SVG,
            self::JPEG,
            self::PNG,
            self::GIF,
            self::BMP,
            self::FODP,
        ];
    }
}


