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
 * Request model for postSlidesDocumentFromSource operation.
 */
class PostSlidesDocumentFromSourceRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * Template file path.
     */
    public $sourcePath;

    /*
     * Template file password.
     */
    public $sourcePassword;

    /*
     * Template storage name.
     */
    public $sourceStorage;

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
     * Initializes a new instance of the PostSlidesDocumentFromSourceRequest class.
     *  
     * @param string $name Document name.
     * @param string $sourcePath Template file path.
     * @param string $sourcePassword Template file password.
     * @param string $sourceStorage Template storage name.
     * @param string $password The document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     */
    public function __construct($name, $sourcePath = null, $sourcePassword = null, $sourceStorage = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->sourcePath = $sourcePath;
        $this->sourcePassword = $sourcePassword;
        $this->sourceStorage = $sourceStorage;
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
    public function get_sourcePath()
    {
        return $this->sourcePath;
    }

    /*
     * Template file path.
     */
    public function set_sourcePath($value)
    {
        $this->sourcePath = $value;
        return $this;
    }
    /*
     * Template file password.
     */
    public function get_sourcePassword()
    {
        return $this->sourcePassword;
    }

    /*
     * Template file password.
     */
    public function set_sourcePassword($value)
    {
        $this->sourcePassword = $value;
        return $this;
    }
    /*
     * Template storage name.
     */
    public function get_sourceStorage()
    {
        return $this->sourceStorage;
    }

    /*
     * Template storage name.
     */
    public function set_sourceStorage($value)
    {
        $this->sourceStorage = $value;
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
