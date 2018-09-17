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
 * Request model for postSlidesSaveAs operation.
 */
class PostSlidesSaveAsRequest
{
    /*
     * The presentation name
     */
    public $name;

    /*
     * Export format
     */
    public $format;

    /*
     * Tiff export options
     */
    public $options;

    /*
     * The password to open presentation.
     */
    public $password;

    /*
     * Document&#39;s storage.
     */
    public $storage;

    /*
     * The presentation folder.
     */
    public $folder;

    /*
     * The optional output path.
     */
    public $outPath;

    /*
     * The optional custom fonts folder.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the PostSlidesSaveAsRequest class.
     *  
     * @param string $name The presentation name
     * @param int $format Export format
     * @param \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Tiff export options
     * @param string $password The password to open presentation.
     * @param string $storage Document&#39;s storage.
     * @param string $folder The presentation folder.
     * @param string $outPath The optional output path.
     * @param string $fontsFolder The optional custom fonts folder.
     */
    public function __construct($name, $format, $options = null, $password = null, $storage = null, $folder = null, $outPath = null, $fontsFolder = null)
    {
        $this->name = $name;
        $this->format = $format;
        $this->options = $options;
        $this->password = $password;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->outPath = $outPath;
        $this->fontsFolder = $fontsFolder;
    }

    /*
     * The presentation name
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The presentation name
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Export format
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Export format
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * Tiff export options
     */
    public function get_options()
    {
        return $this->options;
    }

    /*
     * Tiff export options
     */
    public function set_options($value)
    {
        $this->options = $value;
        return $this;
    }
    /*
     * The password to open presentation.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * The password to open presentation.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }
    /*
     * Document&#39;s storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Document&#39;s storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
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
     * The optional output path.
     */
    public function get_outPath()
    {
        return $this->outPath;
    }

    /*
     * The optional output path.
     */
    public function set_outPath($value)
    {
        $this->outPath = $value;
        return $this;
    }
    /*
     * The optional custom fonts folder.
     */
    public function get_fontsFolder()
    {
        return $this->fontsFolder;
    }

    /*
     * The optional custom fonts folder.
     */
    public function set_fontsFolder($value)
    {
        $this->fontsFolder = $value;
        return $this;
    }
}
