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
 * Request model for postAddNewSubshape operation.
 */
class PostAddNewSubshapeRequest
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
     * Shape path.
     */
    public $path;

    /*
     * Shape DTO.
     */
    public $dto;

    /*
     * Optional index for clone shape instead of adding a new one.
     */
    public $shapeToClone;

    /*
     * Position of the new shape in the list. Default is at the end of the list.
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
     * Initializes a new instance of the PostAddNewSubshapeRequest class.
     *  
     * @param string $name Document name.
     * @param int $slideIndex Slide index.
     * @param string $path Shape path.
     * @param \Aspose\Slides\Cloud\Sdk\Model\ShapeBase $dto Shape DTO.
     * @param int $shapeToClone Optional index for clone shape instead of adding a new one.
     * @param int $position Position of the new shape in the list. Default is at the end of the list.
     * @param string $password Document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     */
    public function __construct($name, $slideIndex, $path, $dto = null, $shapeToClone = null, $position = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->path = $path;
        $this->dto = $dto;
        $this->shapeToClone = $shapeToClone;
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
     * Shape path.
     */
    public function get_path()
    {
        return $this->path;
    }

    /*
     * Shape path.
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }
    /*
     * Shape DTO.
     */
    public function get_dto()
    {
        return $this->dto;
    }

    /*
     * Shape DTO.
     */
    public function set_dto($value)
    {
        $this->dto = $value;
        return $this;
    }
    /*
     * Optional index for clone shape instead of adding a new one.
     */
    public function get_shapeToClone()
    {
        return $this->shapeToClone;
    }

    /*
     * Optional index for clone shape instead of adding a new one.
     */
    public function set_shapeToClone($value)
    {
        $this->shapeToClone = $value;
        return $this;
    }
    /*
     * Position of the new shape in the list. Default is at the end of the list.
     */
    public function get_position()
    {
        return $this->position;
    }

    /*
     * Position of the new shape in the list. Default is at the end of the list.
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
