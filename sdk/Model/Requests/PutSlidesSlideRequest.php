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
 * Request model for putSlidesSlide operation.
 */
class PutSlidesSlideRequest
{
    /*
     * Name of the presentation.
     */
    public $name;

    /*
     * Index of the slide update to.
     */
    public $slideIndex;

    /*
     * DTO of the slide.
     */
    public $slideDto;

    /*
     * 
     */
    public $password;

    /*
     * The presentation folder.
     */
    public $folder;

    /*
     * The presentation storage.
     */
    public $storage;

    /*
     * Initializes a new instance of the PutSlidesSlideRequest class.
     *  
     * @param string $name Name of the presentation.
     * @param int $slideIndex Index of the slide update to.
     * @param \Aspose\Slides\Cloud\Sdk\Model\Slide $slideDto DTO of the slide.
     * @param string $password 
     * @param string $folder The presentation folder.
     * @param string $storage The presentation storage.
     */
    public function __construct($name, $slideIndex, $slideDto = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->slideDto = $slideDto;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * Name of the presentation.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Name of the presentation.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Index of the slide update to.
     */
    public function get_slideIndex()
    {
        return $this->slideIndex;
    }

    /*
     * Index of the slide update to.
     */
    public function set_slideIndex($value)
    {
        $this->slideIndex = $value;
        return $this;
    }
    /*
     * DTO of the slide.
     */
    public function get_slideDto()
    {
        return $this->slideDto;
    }

    /*
     * DTO of the slide.
     */
    public function set_slideDto($value)
    {
        $this->slideDto = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * 
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }
    /*
     * The presentation folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The presentation folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * The presentation storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The presentation storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
}
