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
 * Request model for postCopyMasterSlideFromSourcePresentation operation.
 */
class PostCopyMasterSlideFromSourcePresentationRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * Name of the document to clone masterSlide from.
     */
    public $cloneFrom;

    /*
     * Position of cloned master slide.
     */
    public $cloneFromPosition;

    /*
     * Password for the document to clone masterSlide from.
     */
    public $cloneFromPassword;

    /*
     * Storage of the document to clone masterSlide from.
     */
    public $cloneFromStorage;

    /*
     * True to apply cloned master slide to every existing slide.
     */
    public $applyToAll;

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
     * Initializes a new instance of the PostCopyMasterSlideFromSourcePresentationRequest class.
     *  
     * @param string $name Document name.
     * @param string $cloneFrom Name of the document to clone masterSlide from.
     * @param int $cloneFromPosition Position of cloned master slide.
     * @param string $cloneFromPassword Password for the document to clone masterSlide from.
     * @param string $cloneFromStorage Storage of the document to clone masterSlide from.
     * @param bool $applyToAll True to apply cloned master slide to every existing slide.
     * @param string $password Document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     */
    public function __construct($name, $cloneFrom, $cloneFromPosition, $cloneFromPassword = null, $cloneFromStorage = null, $applyToAll = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->cloneFrom = $cloneFrom;
        $this->cloneFromPosition = $cloneFromPosition;
        $this->cloneFromPassword = $cloneFromPassword;
        $this->cloneFromStorage = $cloneFromStorage;
        $this->applyToAll = $applyToAll;
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
     * Name of the document to clone masterSlide from.
     */
    public function get_cloneFrom()
    {
        return $this->cloneFrom;
    }

    /*
     * Name of the document to clone masterSlide from.
     */
    public function set_cloneFrom($value)
    {
        $this->cloneFrom = $value;
        return $this;
    }
    /*
     * Position of cloned master slide.
     */
    public function get_cloneFromPosition()
    {
        return $this->cloneFromPosition;
    }

    /*
     * Position of cloned master slide.
     */
    public function set_cloneFromPosition($value)
    {
        $this->cloneFromPosition = $value;
        return $this;
    }
    /*
     * Password for the document to clone masterSlide from.
     */
    public function get_cloneFromPassword()
    {
        return $this->cloneFromPassword;
    }

    /*
     * Password for the document to clone masterSlide from.
     */
    public function set_cloneFromPassword($value)
    {
        $this->cloneFromPassword = $value;
        return $this;
    }
    /*
     * Storage of the document to clone masterSlide from.
     */
    public function get_cloneFromStorage()
    {
        return $this->cloneFromStorage;
    }

    /*
     * Storage of the document to clone masterSlide from.
     */
    public function set_cloneFromStorage($value)
    {
        $this->cloneFromStorage = $value;
        return $this;
    }
    /*
     * True to apply cloned master slide to every existing slide.
     */
    public function get_applyToAll()
    {
        return $this->applyToAll;
    }

    /*
     * True to apply cloned master slide to every existing slide.
     */
    public function set_applyToAll($value)
    {
        $this->applyToAll = $value;
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
}
