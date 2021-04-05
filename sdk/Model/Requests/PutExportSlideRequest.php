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
 * Request model for putExportSlide operation.
 */
class PutExportSlideRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * Slide index.
     */
    public $slideIndex;

    /*
     * Output file format.
     */
    public $format;

    /*
     * Path to save result.
     */
    public $outPath;

    /*
     * Output file width; 0 to not adjust the size. Default is 0.
     */
    public $width;

    /*
     * Output file height; 0 to not adjust the size. Default is 0.
     */
    public $height;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Storage folder containing custom fonts to be used with the document.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the PutExportSlideRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param int $slideIndex Slide index.
     * @param string $format Output file format.
     * @param string $outPath Path to save result.
     * @param int $width Output file width; 0 to not adjust the size. Default is 0.
     * @param int $height Output file height; 0 to not adjust the size. Default is 0.
     * @param string $password Document password.
     * @param string $storage Document storage.
     * @param string $fontsFolder Storage folder containing custom fonts to be used with the document.
     */
    public function __construct($document, $slideIndex, $format, $outPath, $width = null, $height = null, $password = null, $storage = null, $fontsFolder = null)
    {
        $this->document = $document;
        $this->slideIndex = $slideIndex;
        $this->format = $format;
        $this->outPath = $outPath;
        $this->width = $width;
        $this->height = $height;
        $this->password = $password;
        $this->storage = $storage;
        $this->fontsFolder = $fontsFolder;
    }

    /*
     * Document data.
     */
    public function get_document()
    {
        return $this->document;
    }

    /*
     * Document data.
     */
    public function set_document($value)
    {
        $this->document = $value;
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
     * Output file format.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Output file format.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * Path to save result.
     */
    public function get_outPath()
    {
        return $this->outPath;
    }

    /*
     * Path to save result.
     */
    public function set_outPath($value)
    {
        $this->outPath = $value;
        return $this;
    }
    /*
     * Output file width; 0 to not adjust the size. Default is 0.
     */
    public function get_width()
    {
        return $this->width;
    }

    /*
     * Output file width; 0 to not adjust the size. Default is 0.
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    /*
     * Output file height; 0 to not adjust the size. Default is 0.
     */
    public function get_height()
    {
        return $this->height;
    }

    /*
     * Output file height; 0 to not adjust the size. Default is 0.
     */
    public function set_height($value)
    {
        $this->height = $value;
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
     * Storage folder containing custom fonts to be used with the document.
     */
    public function get_fontsFolder()
    {
        return $this->fontsFolder;
    }

    /*
     * Storage folder containing custom fonts to be used with the document.
     */
    public function set_fontsFolder($value)
    {
        $this->fontsFolder = $value;
        return $this;
    }
}
