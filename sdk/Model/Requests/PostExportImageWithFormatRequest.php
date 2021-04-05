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
 * Request model for postExportImageWithFormat operation.
 */
class PostExportImageWithFormatRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * Image index.
     */
    public $index;

    /*
     * Export format (png, jpg, gif).
     */
    public $format;

    /*
     * Document password.
     */
    public $password;

    /*
     * Initializes a new instance of the PostExportImageWithFormatRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param int $index Image index.
     * @param string $format Export format (png, jpg, gif).
     * @param string $password Document password.
     */
    public function __construct($document, $index, $format, $password = null)
    {
        $this->document = $document;
        $this->index = $index;
        $this->format = $format;
        $this->password = $password;
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
     * Image index.
     */
    public function get_index()
    {
        return $this->index;
    }

    /*
     * Image index.
     */
    public function set_index($value)
    {
        $this->index = $value;
        return $this;
    }
    /*
     * Export format (png, jpg, gif).
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Export format (png, jpg, gif).
     */
    public function set_format($value)
    {
        $this->format = $value;
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
}
