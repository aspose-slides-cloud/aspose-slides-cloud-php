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
 * PlaceholderType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlaceholderType
{
    /**
     * Possible values of this enum
     */
    const TITLE = 'Title';
    const BODY = 'Body';
    const CENTERED_TITLE = 'CenteredTitle';
    const SUBTITLE = 'Subtitle';
    const DATE_AND_TIME = 'DateAndTime';
    const SLIDE_NUMBER = 'SlideNumber';
    const FOOTER = 'Footer';
    const HEADER = 'Header';
    const OBJECT = 'Object';
    const CHART = 'Chart';
    const TABLE = 'Table';
    const CLIP_ART = 'ClipArt';
    const DIAGRAM = 'Diagram';
    const MEDIA = 'Media';
    const SLIDE_IMAGE = 'SlideImage';
    const PICTURE = 'Picture';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TITLE,
            self::BODY,
            self::CENTERED_TITLE,
            self::SUBTITLE,
            self::DATE_AND_TIME,
            self::SLIDE_NUMBER,
            self::FOOTER,
            self::HEADER,
            self::OBJECT,
            self::CHART,
            self::TABLE,
            self::CLIP_ART,
            self::DIAGRAM,
            self::MEDIA,
            self::SLIDE_IMAGE,
            self::PICTURE,
        ];
    }
}


