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
 * Request model for postSlidesSplit operation.
 */
class PostSlidesSplitRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * Export options.
     */
    public $options;

    /*
     * Export format. Default value is jpeg.
     */
    public $format;

    /*
     * The width of created images.
     */
    public $width;

    /*
     * The height of created images.
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
     * Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation.
     */
    public $destFolder;

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
     * Custom fonts folder.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the PostSlidesSplitRequest class.
     *  
     * @param string $name Document name.
     * @param \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options Export options.
     * @param string $format Export format. Default value is jpeg.
     * @param int $width The width of created images.
     * @param int $height The height of created images.
     * @param int $from The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     * @param int $to The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     * @param string $destFolder Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation.
     * @param string $password Document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     * @param string $fontsFolder Custom fonts folder.
     */
    public function __construct($name, $options = null, $format = null, $width = null, $height = null, $from = null, $to = null, $destFolder = null, $password = null, $folder = null, $storage = null, $fontsFolder = null)
    {
        $this->name = $name;
        $this->options = $options;
        $this->format = $format;
        $this->width = $width;
        $this->height = $height;
        $this->from = $from;
        $this->to = $to;
        $this->destFolder = $destFolder;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->fontsFolder = $fontsFolder;
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
     * Export options.
     */
    public function get_options()
    {
        return $this->options;
    }

    /*
     * Export options.
     */
    public function set_options($value)
    {
        $this->options = $value;
        return $this;
    }
    /*
     * Export format. Default value is jpeg.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Export format. Default value is jpeg.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * The width of created images.
     */
    public function get_width()
    {
        return $this->width;
    }

    /*
     * The width of created images.
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    /*
     * The height of created images.
     */
    public function get_height()
    {
        return $this->height;
    }

    /*
     * The height of created images.
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
     * Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation.
     */
    public function get_destFolder()
    {
        return $this->destFolder;
    }

    /*
     * Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation.
     */
    public function set_destFolder($value)
    {
        $this->destFolder = $value;
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
