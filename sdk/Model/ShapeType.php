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
 * ShapeType Class Doc Comment
 *
 * @category Class
 * @description Shape type
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShapeType
{
    /**
     * Possible values of this enum
     */
    const SHAPE = 'Shape';
    const CHART = 'Chart';
    const TABLE = 'Table';
    const PICTURE_FRAME = 'PictureFrame';
    const VIDEO_FRAME = 'VideoFrame';
    const AUDIO_FRAME = 'AudioFrame';
    const SMART_ART = 'SmartArt';
    const OLE_OBJECT_FRAME = 'OleObjectFrame';
    const GROUP_SHAPE = 'GroupShape';
    const GRAPHICAL_OBJECT = 'GraphicalObject';
    const CONNECTOR = 'Connector';
    const SMART_ART_SHAPE = 'SmartArtShape';
    const ZOOM_FRAME = 'ZoomFrame';
    const SECTION_ZOOM_FRAME = 'SectionZoomFrame';
    const SUMMARY_ZOOM_FRAME = 'SummaryZoomFrame';
    const SUMMARY_ZOOM_SECTION = 'SummaryZoomSection';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHAPE,
            self::CHART,
            self::TABLE,
            self::PICTURE_FRAME,
            self::VIDEO_FRAME,
            self::AUDIO_FRAME,
            self::SMART_ART,
            self::OLE_OBJECT_FRAME,
            self::GROUP_SHAPE,
            self::GRAPHICAL_OBJECT,
            self::CONNECTOR,
            self::SMART_ART_SHAPE,
            self::ZOOM_FRAME,
            self::SECTION_ZOOM_FRAME,
            self::SUMMARY_ZOOM_FRAME,
            self::SUMMARY_ZOOM_SECTION,
        ];
    }
}


