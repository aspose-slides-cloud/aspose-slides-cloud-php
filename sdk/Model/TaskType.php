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
 * TaskType Class Doc Comment
 *
 * @category Class
 * @description Pipeline task type.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskType
{
    /**
     * Possible values of this enum
     */
    const SAVE = 'Save';
    const SAVE_SLIDE = 'SaveSlide';
    const SAVE_SHAPE = 'SaveShape';
    const ADD_SLIDE = 'AddSlide';
    const ADD_MASTER_SLIDE = 'AddMasterSlide';
    const ADD_LAYOUT_SLIDE = 'AddLayoutSlide';
    const REMOVE_SLIDE = 'RemoveSlide';
    const REODER_SLIDE = 'ReoderSlide';
    const MERGE = 'Merge';
    const UPDATE_BACKGROUND = 'UpdateBackground';
    const RESET_SLIDE = 'ResetSlide';
    const ADD_SHAPE = 'AddShape';
    const REMOVE_SHAPE = 'RemoveShape';
    const UPDATE_SHAPE = 'UpdateShape';
    const REPLACE_TEXT = 'ReplaceText';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SAVE,
            self::SAVE_SLIDE,
            self::SAVE_SHAPE,
            self::ADD_SLIDE,
            self::ADD_MASTER_SLIDE,
            self::ADD_LAYOUT_SLIDE,
            self::REMOVE_SLIDE,
            self::REODER_SLIDE,
            self::MERGE,
            self::UPDATE_BACKGROUND,
            self::RESET_SLIDE,
            self::ADD_SHAPE,
            self::REMOVE_SHAPE,
            self::UPDATE_SHAPE,
            self::REPLACE_TEXT,
        ];
    }
}


