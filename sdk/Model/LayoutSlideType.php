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
 * LayoutSlideType Class Doc Comment
 *
 * @category Class
 * @description Represents type of Layout Slide
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LayoutSlideType
{
    /**
     * Possible values of this enum
     */
    const TITLE = 'Title';
    const TEXT = 'Text';
    const TWO_COLUMN_TEXT = 'TwoColumnText';
    const TABLE = 'Table';
    const TEXT_AND_CHART = 'TextAndChart';
    const CHART_AND_TEXT = 'ChartAndText';
    const DIAGRAM = 'Diagram';
    const CHART = 'Chart';
    const TEXT_AND_CLIP_ART = 'TextAndClipArt';
    const CLIP_ART_AND_TEXT = 'ClipArtAndText';
    const TITLE_ONLY = 'TitleOnly';
    const BLANK = 'Blank';
    const TEXT_AND_OBJECT = 'TextAndObject';
    const OBJECT_AND_TEXT = 'ObjectAndText';
    const OBJECT = 'Object';
    const TITLE_AND_OBJECT = 'TitleAndObject';
    const TEXT_AND_MEDIA = 'TextAndMedia';
    const MEDIA_AND_TEXT = 'MediaAndText';
    const OBJECT_OVER_TEXT = 'ObjectOverText';
    const TEXT_OVER_OBJECT = 'TextOverObject';
    const TEXT_AND_TWO_OBJECTS = 'TextAndTwoObjects';
    const TWO_OBJECTS_AND_TEXT = 'TwoObjectsAndText';
    const TWO_OBJECTS_OVER_TEXT = 'TwoObjectsOverText';
    const FOUR_OBJECTS = 'FourObjects';
    const VERTICAL_TEXT = 'VerticalText';
    const CLIP_ART_AND_VERTICAL_TEXT = 'ClipArtAndVerticalText';
    const VERTICAL_TITLE_AND_TEXT = 'VerticalTitleAndText';
    const VERTICAL_TITLE_AND_TEXT_OVER_CHART = 'VerticalTitleAndTextOverChart';
    const TWO_OBJECTS = 'TwoObjects';
    const OBJECT_AND_TWO_OBJECT = 'ObjectAndTwoObject';
    const TWO_OBJECTS_AND_OBJECT = 'TwoObjectsAndObject';
    const SECTION_HEADER = 'SectionHeader';
    const TWO_TEXT_AND_TWO_OBJECTS = 'TwoTextAndTwoObjects';
    const TITLE_OBJECT_AND_CAPTION = 'TitleObjectAndCaption';
    const PICTURE_AND_CAPTION = 'PictureAndCaption';
    const CUSTOM = 'Custom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TITLE,
            self::TEXT,
            self::TWO_COLUMN_TEXT,
            self::TABLE,
            self::TEXT_AND_CHART,
            self::CHART_AND_TEXT,
            self::DIAGRAM,
            self::CHART,
            self::TEXT_AND_CLIP_ART,
            self::CLIP_ART_AND_TEXT,
            self::TITLE_ONLY,
            self::BLANK,
            self::TEXT_AND_OBJECT,
            self::OBJECT_AND_TEXT,
            self::OBJECT,
            self::TITLE_AND_OBJECT,
            self::TEXT_AND_MEDIA,
            self::MEDIA_AND_TEXT,
            self::OBJECT_OVER_TEXT,
            self::TEXT_OVER_OBJECT,
            self::TEXT_AND_TWO_OBJECTS,
            self::TWO_OBJECTS_AND_TEXT,
            self::TWO_OBJECTS_OVER_TEXT,
            self::FOUR_OBJECTS,
            self::VERTICAL_TEXT,
            self::CLIP_ART_AND_VERTICAL_TEXT,
            self::VERTICAL_TITLE_AND_TEXT,
            self::VERTICAL_TITLE_AND_TEXT_OVER_CHART,
            self::TWO_OBJECTS,
            self::OBJECT_AND_TWO_OBJECT,
            self::TWO_OBJECTS_AND_OBJECT,
            self::SECTION_HEADER,
            self::TWO_TEXT_AND_TWO_OBJECTS,
            self::TITLE_OBJECT_AND_CAPTION,
            self::PICTURE_AND_CAPTION,
            self::CUSTOM,
        ];
    }
}


