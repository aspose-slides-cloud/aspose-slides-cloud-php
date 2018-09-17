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
 * SmartArtQuickStyleType Class Doc Comment
 *
 * @category Class
 * @description Represents style scheme of a SmartArt diagram.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartArtQuickStyleType
{
    /**
     * Possible values of this enum
     */
    const SIMPLE_FILL = 'SimpleFill';
    const WHITE_OUTLINE = 'WhiteOutline';
    const SUBTLE_EFFECT = 'SubtleEffect';
    const MODERATE_EFFECT = 'ModerateEffect';
    const INTENCE_EFFECT = 'IntenceEffect';
    const POLISHED = 'Polished';
    const INSET = 'Inset';
    const CARTOON = 'Cartoon';
    const POWDER = 'Powder';
    const BRICK_SCENE = 'BrickScene';
    const FLAT_SCENE = 'FlatScene';
    const METALLIC_SCENE = 'MetallicScene';
    const SUNSET_SCENE = 'SunsetScene';
    const BIRDS_EYE_SCENE = 'BirdsEyeScene';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SIMPLE_FILL,
            self::WHITE_OUTLINE,
            self::SUBTLE_EFFECT,
            self::MODERATE_EFFECT,
            self::INTENCE_EFFECT,
            self::POLISHED,
            self::INSET,
            self::CARTOON,
            self::POWDER,
            self::BRICK_SCENE,
            self::FLAT_SCENE,
            self::METALLIC_SCENE,
            self::SUNSET_SCENE,
            self::BIRDS_EYE_SCENE,
        ];
    }
}


