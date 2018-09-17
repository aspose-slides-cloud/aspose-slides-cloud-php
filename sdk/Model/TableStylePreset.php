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
 * TableStylePreset Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TableStylePreset
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const MEDIUM_STYLE2_ACCENT1 = 'MediumStyle2Accent1';
    const MEDIUM_STYLE2 = 'MediumStyle2';
    const NO_STYLE_NO_GRID = 'NoStyleNoGrid';
    const THEMED_STYLE1_ACCENT1 = 'ThemedStyle1Accent1';
    const THEMED_STYLE1_ACCENT2 = 'ThemedStyle1Accent2';
    const THEMED_STYLE1_ACCENT3 = 'ThemedStyle1Accent3';
    const THEMED_STYLE1_ACCENT4 = 'ThemedStyle1Accent4';
    const THEMED_STYLE1_ACCENT5 = 'ThemedStyle1Accent5';
    const THEMED_STYLE1_ACCENT6 = 'ThemedStyle1Accent6';
    const NO_STYLE_TABLE_GRID = 'NoStyleTableGrid';
    const THEMED_STYLE2_ACCENT1 = 'ThemedStyle2Accent1';
    const THEMED_STYLE2_ACCENT2 = 'ThemedStyle2Accent2';
    const THEMED_STYLE2_ACCENT3 = 'ThemedStyle2Accent3';
    const THEMED_STYLE2_ACCENT4 = 'ThemedStyle2Accent4';
    const THEMED_STYLE2_ACCENT5 = 'ThemedStyle2Accent5';
    const THEMED_STYLE2_ACCENT6 = 'ThemedStyle2Accent6';
    const LIGHT_STYLE1 = 'LightStyle1';
    const LIGHT_STYLE1_ACCENT1 = 'LightStyle1Accent1';
    const LIGHT_STYLE1_ACCENT2 = 'LightStyle1Accent2';
    const LIGHT_STYLE1_ACCENT3 = 'LightStyle1Accent3';
    const LIGHT_STYLE1_ACCENT4 = 'LightStyle1Accent4';
    const LIGHT_STYLE2_ACCENT5 = 'LightStyle2Accent5';
    const LIGHT_STYLE1_ACCENT6 = 'LightStyle1Accent6';
    const LIGHT_STYLE2 = 'LightStyle2';
    const LIGHT_STYLE2_ACCENT1 = 'LightStyle2Accent1';
    const LIGHT_STYLE2_ACCENT2 = 'LightStyle2Accent2';
    const LIGHT_STYLE2_ACCENT3 = 'LightStyle2Accent3';
    const MEDIUM_STYLE2_ACCENT3 = 'MediumStyle2Accent3';
    const MEDIUM_STYLE2_ACCENT4 = 'MediumStyle2Accent4';
    const MEDIUM_STYLE2_ACCENT5 = 'MediumStyle2Accent5';
    const LIGHT_STYLE2_ACCENT6 = 'LightStyle2Accent6';
    const LIGHT_STYLE2_ACCENT4 = 'LightStyle2Accent4';
    const LIGHT_STYLE3 = 'LightStyle3';
    const LIGHT_STYLE3_ACCENT1 = 'LightStyle3Accent1';
    const MEDIUM_STYLE2_ACCENT2 = 'MediumStyle2Accent2';
    const LIGHT_STYLE3_ACCENT2 = 'LightStyle3Accent2';
    const LIGHT_STYLE3_ACCENT3 = 'LightStyle3Accent3';
    const LIGHT_STYLE3_ACCENT4 = 'LightStyle3Accent4';
    const LIGHT_STYLE3_ACCENT5 = 'LightStyle3Accent5';
    const LIGHT_STYLE3_ACCENT6 = 'LightStyle3Accent6';
    const MEDIUM_STYLE1 = 'MediumStyle1';
    const MEDIUM_STYLE1_ACCENT1 = 'MediumStyle1Accent1';
    const MEDIUM_STYLE1_ACCENT2 = 'MediumStyle1Accent2';
    const MEDIUM_STYLE1_ACCENT3 = 'MediumStyle1Accent3';
    const MEDIUM_STYLE1_ACCENT4 = 'MediumStyle1Accent4';
    const MEDIUM_STYLE1_ACCENT5 = 'MediumStyle1Accent5';
    const MEDIUM_STYLE1_ACCENT6 = 'MediumStyle1Accent6';
    const MEDIUM_STYLE2_ACCENT6 = 'MediumStyle2Accent6';
    const MEDIUM_STYLE3 = 'MediumStyle3';
    const MEDIUM_STYLE3_ACCENT1 = 'MediumStyle3Accent1';
    const MEDIUM_STYLE3_ACCENT2 = 'MediumStyle3Accent2';
    const MEDIUM_STYLE3_ACCENT3 = 'MediumStyle3Accent3';
    const MEDIUM_STYLE3_ACCENT4 = 'MediumStyle3Accent4';
    const MEDIUM_STYLE3_ACCENT5 = 'MediumStyle3Accent5';
    const MEDIUM_STYLE3_ACCENT6 = 'MediumStyle3Accent6';
    const MEDIUM_STYLE4 = 'MediumStyle4';
    const MEDIUM_STYLE4_ACCENT1 = 'MediumStyle4Accent1';
    const MEDIUM_STYLE4_ACCENT2 = 'MediumStyle4Accent2';
    const MEDIUM_STYLE4_ACCENT3 = 'MediumStyle4Accent3';
    const MEDIUM_STYLE4_ACCENT4 = 'MediumStyle4Accent4';
    const MEDIUM_STYLE4_ACCENT5 = 'MediumStyle4Accent5';
    const MEDIUM_STYLE4_ACCENT6 = 'MediumStyle4Accent6';
    const DARK_STYLE1 = 'DarkStyle1';
    const DARK_STYLE1_ACCENT1 = 'DarkStyle1Accent1';
    const DARK_STYLE1_ACCENT2 = 'DarkStyle1Accent2';
    const DARK_STYLE1_ACCENT3 = 'DarkStyle1Accent3';
    const DARK_STYLE1_ACCENT4 = 'DarkStyle1Accent4';
    const DARK_STYLE1_ACCENT5 = 'DarkStyle1Accent5';
    const DARK_STYLE1_ACCENT6 = 'DarkStyle1Accent6';
    const DARK_STYLE2 = 'DarkStyle2';
    const DARK_STYLE2_ACCENT1_ACCENT2 = 'DarkStyle2Accent1Accent2';
    const DARK_STYLE2_ACCENT3_ACCENT4 = 'DarkStyle2Accent3Accent4';
    const DARK_STYLE2_ACCENT5_ACCENT6 = 'DarkStyle2Accent5Accent6';
    const CUSTOM = 'Custom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::MEDIUM_STYLE2_ACCENT1,
            self::MEDIUM_STYLE2,
            self::NO_STYLE_NO_GRID,
            self::THEMED_STYLE1_ACCENT1,
            self::THEMED_STYLE1_ACCENT2,
            self::THEMED_STYLE1_ACCENT3,
            self::THEMED_STYLE1_ACCENT4,
            self::THEMED_STYLE1_ACCENT5,
            self::THEMED_STYLE1_ACCENT6,
            self::NO_STYLE_TABLE_GRID,
            self::THEMED_STYLE2_ACCENT1,
            self::THEMED_STYLE2_ACCENT2,
            self::THEMED_STYLE2_ACCENT3,
            self::THEMED_STYLE2_ACCENT4,
            self::THEMED_STYLE2_ACCENT5,
            self::THEMED_STYLE2_ACCENT6,
            self::LIGHT_STYLE1,
            self::LIGHT_STYLE1_ACCENT1,
            self::LIGHT_STYLE1_ACCENT2,
            self::LIGHT_STYLE1_ACCENT3,
            self::LIGHT_STYLE1_ACCENT4,
            self::LIGHT_STYLE2_ACCENT5,
            self::LIGHT_STYLE1_ACCENT6,
            self::LIGHT_STYLE2,
            self::LIGHT_STYLE2_ACCENT1,
            self::LIGHT_STYLE2_ACCENT2,
            self::LIGHT_STYLE2_ACCENT3,
            self::MEDIUM_STYLE2_ACCENT3,
            self::MEDIUM_STYLE2_ACCENT4,
            self::MEDIUM_STYLE2_ACCENT5,
            self::LIGHT_STYLE2_ACCENT6,
            self::LIGHT_STYLE2_ACCENT4,
            self::LIGHT_STYLE3,
            self::LIGHT_STYLE3_ACCENT1,
            self::MEDIUM_STYLE2_ACCENT2,
            self::LIGHT_STYLE3_ACCENT2,
            self::LIGHT_STYLE3_ACCENT3,
            self::LIGHT_STYLE3_ACCENT4,
            self::LIGHT_STYLE3_ACCENT5,
            self::LIGHT_STYLE3_ACCENT6,
            self::MEDIUM_STYLE1,
            self::MEDIUM_STYLE1_ACCENT1,
            self::MEDIUM_STYLE1_ACCENT2,
            self::MEDIUM_STYLE1_ACCENT3,
            self::MEDIUM_STYLE1_ACCENT4,
            self::MEDIUM_STYLE1_ACCENT5,
            self::MEDIUM_STYLE1_ACCENT6,
            self::MEDIUM_STYLE2_ACCENT6,
            self::MEDIUM_STYLE3,
            self::MEDIUM_STYLE3_ACCENT1,
            self::MEDIUM_STYLE3_ACCENT2,
            self::MEDIUM_STYLE3_ACCENT3,
            self::MEDIUM_STYLE3_ACCENT4,
            self::MEDIUM_STYLE3_ACCENT5,
            self::MEDIUM_STYLE3_ACCENT6,
            self::MEDIUM_STYLE4,
            self::MEDIUM_STYLE4_ACCENT1,
            self::MEDIUM_STYLE4_ACCENT2,
            self::MEDIUM_STYLE4_ACCENT3,
            self::MEDIUM_STYLE4_ACCENT4,
            self::MEDIUM_STYLE4_ACCENT5,
            self::MEDIUM_STYLE4_ACCENT6,
            self::DARK_STYLE1,
            self::DARK_STYLE1_ACCENT1,
            self::DARK_STYLE1_ACCENT2,
            self::DARK_STYLE1_ACCENT3,
            self::DARK_STYLE1_ACCENT4,
            self::DARK_STYLE1_ACCENT5,
            self::DARK_STYLE1_ACCENT6,
            self::DARK_STYLE2,
            self::DARK_STYLE2_ACCENT1_ACCENT2,
            self::DARK_STYLE2_ACCENT3_ACCENT4,
            self::DARK_STYLE2_ACCENT5_ACCENT6,
            self::CUSTOM,
        ];
    }
}


