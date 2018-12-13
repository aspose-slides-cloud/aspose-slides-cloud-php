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
     * The document name.
     */
    public $name;

    /*
     * export options
     */
    public $options;

    /*
     * The format. Default value is jpeg.
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
     * The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     */
    public $to;

    /*
     * The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     */
    public $from;

    /*
     * Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation.
     */
    public $destFolder;

    /*
     * The document password.
     */
    public $password;

    /*
     * The document storage.
     */
    public $storage;

    /*
     * The document folder.
     */
    public $folder;

    /*
     * Initializes a new instance of the PostSlidesSplitRequest class.
     *  
     * @param string $name The document name.
     * @param \Aspose\Slides\Cloud\Sdk\Model\ExportOptions $options export options
     * @param string $format The format. Default value is jpeg.
     * @param int $width The width of created images.
     * @param int $height The height of created images.
     * @param int $to The last slide number for splitting, if is not specified splitting ends at the last slide of the document.
     * @param int $from The start slide number for splitting, if is not specified splitting starts from the first slide of the presentation.
     * @param string $destFolder Folder on storage where images are going to be uploaded. If not specified then images are uploaded to same folder as presentation.
     * @param string $password The document password.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $options = null, $format = null, $width = null, $height = null, $to = null, $from = null, $destFolder = null, $password = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->options = $options;
        $this->format = $format;
        $this->width = $width;
        $this->height = $height;
        $this->to = $to;
        $this->from = $from;
        $this->destFolder = $destFolder;
        $this->password = $password;
        $this->storage = $storage;
        $this->folder = $folder;
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
     * The format. Default value is jpeg.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * The format. Default value is jpeg.
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
     * The document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    /*
     * The document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
}
