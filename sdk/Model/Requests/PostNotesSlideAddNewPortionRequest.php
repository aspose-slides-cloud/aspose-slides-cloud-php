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


namespace Aspose\Slides\Cloud\Sdk\Model\Requests;
/*
 * Request model for postNotesSlideAddNewPortion operation.
 */
class PostNotesSlideAddNewPortionRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * Slide index.
     */
    public $slideIndex;

    /*
     * Shape index.
     */
    public $shapeIndex;

    /*
     * Paragraph index.
     */
    public $paragraphIndex;

    /*
     * Portion DTO.
     */
    public $dto;

    /*
     * Position of the new portion in the list. Default is at the end of the list.
     */
    public $position;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document folder.
     */
    public $folder;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Initializes a new instance of the PostNotesSlideAddNewPortionRequest class.
     *  
     * @param string $name Document name.
     * @param int $slideIndex Slide index.
     * @param int $shapeIndex Shape index.
     * @param int $paragraphIndex Paragraph index.
     * @param \Aspose\Slides\Cloud\Sdk\Model\Portion $dto Portion DTO.
     * @param int $position Position of the new portion in the list. Default is at the end of the list.
     * @param string $password Document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     */
    public function __construct($name, $slideIndex, $shapeIndex, $paragraphIndex, $dto, $position = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->shapeIndex = $shapeIndex;
        $this->paragraphIndex = $paragraphIndex;
        $this->dto = $dto;
        $this->position = $position;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * Document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Document name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Slide index.
     */
    public function get_slideIndex()
    {
        return $this->slideIndex;
    }

    /*
     * Slide index.
     */
    public function set_slideIndex($value)
    {
        $this->slideIndex = $value;
        return $this;
    }
    /*
     * Shape index.
     */
    public function get_shapeIndex()
    {
        return $this->shapeIndex;
    }

    /*
     * Shape index.
     */
    public function set_shapeIndex($value)
    {
        $this->shapeIndex = $value;
        return $this;
    }
    /*
     * Paragraph index.
     */
    public function get_paragraphIndex()
    {
        return $this->paragraphIndex;
    }

    /*
     * Paragraph index.
     */
    public function set_paragraphIndex($value)
    {
        $this->paragraphIndex = $value;
        return $this;
    }
    /*
     * Portion DTO.
     */
    public function get_dto()
    {
        return $this->dto;
    }

    /*
     * Portion DTO.
     */
    public function set_dto($value)
    {
        $this->dto = $value;
        return $this;
    }
    /*
     * Position of the new portion in the list. Default is at the end of the list.
     */
    public function get_position()
    {
        return $this->position;
    }

    /*
     * Position of the new portion in the list. Default is at the end of the list.
     */
    public function set_position($value)
    {
        $this->position = $value;
        return $this;
    }
    /*
     * Document password.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * Document password.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }
    /*
     * Document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * Document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
}
