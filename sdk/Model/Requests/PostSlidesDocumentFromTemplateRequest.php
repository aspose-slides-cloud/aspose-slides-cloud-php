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
 * Request model for postSlidesDocumentFromTemplate operation.
 */
class PostSlidesDocumentFromTemplateRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * Template file path.
     */
    public $templatePath;

    /*
     * Document input data.
     */
    public $data;

    /*
     * Template file password.
     */
    public $templatePassword;

    /*
     * Template storage name.
     */
    public $templateStorage;

    /*
     * True if image data is embedded.
     */
    public $isImageDataEmbedded;

    /*
     * The document password.
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
     * Initializes a new instance of the PostSlidesDocumentFromTemplateRequest class.
     *  
     * @param string $name Document name.
     * @param string $templatePath Template file path.
     * @param string $data Document input data.
     * @param string $templatePassword Template file password.
     * @param string $templateStorage Template storage name.
     * @param bool $isImageDataEmbedded True if image data is embedded.
     * @param string $password The document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     */
    public function __construct($name, $templatePath, $data = null, $templatePassword = null, $templateStorage = null, $isImageDataEmbedded = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->templatePath = $templatePath;
        $this->data = $data;
        $this->templatePassword = $templatePassword;
        $this->templateStorage = $templateStorage;
        $this->isImageDataEmbedded = $isImageDataEmbedded;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage = $storage;
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
     * Document input data.
     */
    public function get_data()
    {
        return $this->data;
    }

    /*
     * Document input data.
     */
    public function set_data($value)
    {
        $this->data = $value;
        return $this;
    }
    /*
     * Template file password.
     */
    public function get_templatePassword()
    {
        return $this->templatePassword;
    }

    /*
     * Template file password.
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
     * True if image data is embedded.
     */
    public function get_isImageDataEmbedded()
    {
        return $this->isImageDataEmbedded;
    }

    /*
     * True if image data is embedded.
     */
    public function set_isImageDataEmbedded($value)
    {
        $this->isImageDataEmbedded = $value;
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
}
