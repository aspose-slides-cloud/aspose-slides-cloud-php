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
 * Request model for postSlideSaveAs operation.
 */
class PostSlideSaveAsRequest
{
    /*
     * 
     */
    public $name;

    /*
     * 
     */
    public $slideIndex;

    /*
     * 
     */
    public $format;

    /*
     * export options
     */
    public $options;

    /*
     * 
     */
    public $width;

    /*
     * 
     */
    public $height;

    /*
     * 
     */
    public $password;

    /*
     * 
     */
    public $folder;

    /*
     * 
     */
    public $storage;

    /*
     * 
     */
    public $outPath;

    /*
     * 
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the PostSlideSaveAsRequest class.
     *  
     * @param string $name 
     * @param int $slideIndex 
     * @param string $format 
     * @param \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options export options
     * @param int $width 
     * @param int $height 
     * @param string $password 
     * @param string $folder 
     * @param string $storage 
     * @param string $outPath 
     * @param string $fontsFolder 
     */
    public function __construct($name, $slideIndex, $format, $options = null, $width = null, $height = null, $password = null, $folder = null, $storage = null, $outPath = null, $fontsFolder = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->format = $format;
        $this->options = $options;
        $this->width = $width;
        $this->height = $height;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->outPath = $outPath;
        $this->fontsFolder = $fontsFolder;
    }

    /*
     * 
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * 
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_slideIndex()
    {
        return $this->slideIndex;
    }

    /*
     * 
     */
    public function set_slideIndex($value)
    {
        $this->slideIndex = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * 
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * export options
     */
    public function get_options()
    {
        return $this->options;
    }

    /*
     * export options
     */
    public function set_options($value)
    {
        $this->options = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_width()
    {
        return $this->width;
    }

    /*
     * 
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_height()
    {
        return $this->height;
    }

    /*
     * 
     */
    public function set_height($value)
    {
        $this->height = $value;
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
     * 
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * 
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * 
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_outPath()
    {
        return $this->outPath;
    }

    /*
     * 
     */
    public function set_outPath($value)
    {
        $this->outPath = $value;
        return $this;
    }
    /*
     * 
     */
    public function get_fontsFolder()
    {
        return $this->fontsFolder;
    }

    /*
     * 
     */
    public function set_fontsFolder($value)
    {
        $this->fontsFolder = $value;
        return $this;
    }
}
