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
 * Request model for putNotesSlideHeaderFooter operation.
 */
class PutNotesSlideHeaderFooterRequest
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
     * Header/footer to set.
     */
    public $dto;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Document folder.
     */
    public $folder;

    /*
     * Initializes a new instance of the PutNotesSlideHeaderFooterRequest class.
     *  
     * @param string $name Document name.
     * @param int $slideIndex Slide index.
     * @param \Aspose\Slides\Cloud\Sdk\Model\NotesSlideHeaderFooter $dto Header/footer to set.
     * @param string $password Document password.
     * @param string $storage Document storage.
     * @param string $folder Document folder.
     */
    public function __construct($name, $slideIndex, $dto, $password = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->dto = $dto;
        $this->password = $password;
        $this->storage = $storage;
        $this->folder = $folder;
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
     * Header/footer to set.
     */
    public function get_dto()
    {
        return $this->dto;
    }

    /*
     * Header/footer to set.
     */
    public function set_dto($value)
    {
        $this->dto = $value;
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
}
