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
 * Request model for postSlidesDocument operation.
 */
class PostSlidesDocumentRequest
{
    /*
     * The document name.
     */
    public $name;

    /*
     * 
     */
    public $data;

    /*
     * Template file path.
     */
    public $templatePath;

    /*
     * Template storage name.
     */
    public $templateStorage;

    /*
     * Is Image Data Embeeded
     */
    public $isImageDataEmbeeded;

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
     * Initializes a new instance of the PostSlidesDocumentRequest class.
     *  
     * @param string $name The document name.
     * @param string $data 
     * @param string $templatePath Template file path.
     * @param string $templateStorage Template storage name.
     * @param bool $isImageDataEmbeeded Is Image Data Embeeded
     * @param string $password The document password.
     * @param string $storage Document&#39;s storage.
     * @param string $folder Document&#39;s folder.
     */
    public function __construct($name, $data, $templatePath, $templateStorage = null, $isImageDataEmbeeded = null, $password = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->data = $data;
        $this->templatePath = $templatePath;
        $this->templateStorage = $templateStorage;
        $this->isImageDataEmbeeded = $isImageDataEmbeeded;
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
     * 
     */
    public function get_data()
    {
        return $this->data;
    }

    /*
     * 
     */
    public function set_data($value)
    {
        $this->data = $value;
        return $this;
    }
    /*
     * Template file path.
     */
    public function get_templatePath()
    {
        return $this->templatePath;
    }

    /*
     * Template file path.
     */
    public function set_templatePath($value)
    {
        $this->templatePath = $value;
        return $this;
    }
    /*
     * Template storage name.
     */
    public function get_templateStorage()
    {
        return $this->templateStorage;
    }

    /*
     * Template storage name.
     */
    public function set_templateStorage($value)
    {
        $this->templateStorage = $value;
        return $this;
    }
    /*
     * Is Image Data Embeeded
     */
    public function get_isImageDataEmbeeded()
    {
        return $this->isImageDataEmbeeded;
    }

    /*
     * Is Image Data Embeeded
     */
    public function set_isImageDataEmbeeded($value)
    {
        $this->isImageDataEmbeeded = $value;
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
}
