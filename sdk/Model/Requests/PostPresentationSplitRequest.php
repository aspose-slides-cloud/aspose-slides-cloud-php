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
 * Request model for postPresentationSplit operation.
 */
class PostPresentationSplitRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * ExportFormat
     */
    public $format;

    /*
     * Slide width.
     */
    public $width;

    /*
     * Slide height.
     */
    public $height;

    /*
     * The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     */
    public $from;

    /*
     * The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     */
    public $to;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Custom fonts folder.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the PostPresentationSplitRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param string $format ExportFormat
     * @param int $width Slide width.
     * @param int $height Slide height.
     * @param int $from The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     * @param int $to The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     * @param string $password Document password.
     * @param string $storage Document storage.
     * @param string $fontsFolder Custom fonts folder.
     */
    public function __construct($document, $format, $width = null, $height = null, $from = null, $to = null, $password = null, $storage = null, $fontsFolder = null)
    {
        $this->document = $document;
        $this->format = $format;
        $this->width = $width;
        $this->height = $height;
        $this->from = $from;
        $this->to = $to;
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
     * ExportFormat
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * ExportFormat
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * Slide width.
     */
    public function get_width()
    {
        return $this->width;
    }

    /*
     * Slide width.
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    /*
     * Slide height.
     */
    public function get_height()
    {
        return $this->height;
    }

    /*
     * Slide height.
     */
    public function set_height($value)
    {
        $this->height = $value;
        return $this;
    }
    /*
     * The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     */
    public function get_from()
    {
        return $this->from;
    }

    /*
     * The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     */
    public function set_from($value)
    {
        $this->from = $value;
        return $this;
    }
    /*
     * The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     */
    public function get_to()
    {
        return $this->to;
    }

    /*
     * The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     */
    public function set_to($value)
    {
        $this->to = $value;
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
     * Custom fonts folder.
     */
    public function get_fontsFolder()
    {
        return $this->fontsFolder;
    }

    /*
     * Custom fonts folder.
     */
    public function set_fontsFolder($value)
    {
        $this->fontsFolder = $value;
        return $this;
    }
}
