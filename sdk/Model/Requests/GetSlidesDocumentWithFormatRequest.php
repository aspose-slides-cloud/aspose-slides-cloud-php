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
 * Request model for getSlidesDocumentWithFormat operation.
 */
class GetSlidesDocumentWithFormatRequest
{
    /*
     * The document name.
     */
    public $name;

    /*
     * The conversion format.
     */
    public $format;

    /*
     * Quality of the JPEG images inside PDF document.
     */
    public $jpegQuality;

    /*
     * The document password.
     */
    public $password;

    /*
     * Document&#39;s storage.
     */
    public $storage;

    /*
     * Document&#39;s folder.
     */
    public $folder;

    /*
     * Path to save result
     */
    public $outPath;

    /*
     * The optional custom fonts folder.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the GetSlidesDocumentWithFormatRequest class.
     *  
     * @param string $name The document name.
     * @param int $format The conversion format.
     * @param int $jpegQuality Quality of the JPEG images inside PDF document.
     * @param string $password The document password.
     * @param string $storage Document&#39;s storage.
     * @param string $folder Document&#39;s folder.
     * @param string $outPath Path to save result
     * @param string $fontsFolder The optional custom fonts folder.
     */
    public function __construct($name, $format, $jpegQuality = null, $password = null, $storage = null, $folder = null, $outPath = null, $fontsFolder = null)
    {
        $this->name = $name;
        $this->format = $format;
        $this->jpegQuality = $jpegQuality;
        $this->password = $password;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->outPath = $outPath;
        $this->fontsFolder = $fontsFolder;
    }

    /*
     * The document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The document name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * The conversion format.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * The conversion format.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * Quality of the JPEG images inside PDF document.
     */
    public function get_jpegQuality()
    {
        return $this->jpegQuality;
    }

    /*
     * Quality of the JPEG images inside PDF document.
     */
    public function set_jpegQuality($value)
    {
        $this->jpegQuality = $value;
        return $this;
    }
    /*
     * The document password.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * The document password.
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
     * Document&#39;s folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Document&#39;s folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * Path to save result
     */
    public function get_outPath()
    {
        return $this->outPath;
    }

    /*
     * Path to save result
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
