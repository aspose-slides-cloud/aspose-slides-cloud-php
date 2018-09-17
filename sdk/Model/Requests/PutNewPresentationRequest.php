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
 * Request model for putNewPresentation operation.
 */
class PutNewPresentationRequest
{
    /*
     * The document name.
     */
    public $name;

    /*
     * 
     */
    public $stream;

    /*
     * Template file path.
     */
    public $templatePath;

    /*
     * 
     */
    public $templatePassword;

    /*
     * Template storage name.
     */
    public $templateStorage;

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
     * Initializes a new instance of the PutNewPresentationRequest class.
     *  
     * @param string $name The document name.
     * @param \SplFileObject $stream 
     * @param string $templatePath Template file path.
     * @param string $templatePassword 
     * @param string $templateStorage Template storage name.
     * @param string $password The document password.
     * @param string $storage Document&#39;s storage.
     * @param string $folder Document&#39;s folder.
     */
    public function __construct($name, $stream = null, $templatePath = null, $templatePassword = null, $templateStorage = null, $password = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->stream = $stream;
        $this->templatePath = $templatePath;
        $this->templatePassword = $templatePassword;
        $this->templateStorage = $templateStorage;
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
    public function get_stream()
    {
        return $this->stream;
    }

    /*
     * 
     */
    public function set_stream($value)
    {
        $this->stream = $value;
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
     * 
     */
    public function get_templatePassword()
    {
        return $this->templatePassword;
    }

    /*
     * 
     */
    public function set_templatePassword($value)
    {
        $this->templatePassword = $value;
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
