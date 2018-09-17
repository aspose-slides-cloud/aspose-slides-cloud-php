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
     * The presentation name.
     */
    public $name;

    /*
     * Source presentation to clone masterSlide from.
     */
    public $cloneFrom;

    /*
     * Position of cloning master slide.
     */
    public $cloneFromPosition;

    /*
     * Source presentation password.
     */
    public $cloneFromPassword;

    /*
     * Storage source presentation to clone masterSlide from.
     */
    public $cloneFromStorage;

    /*
     * Apply cloned master slide to every existed slide. Optional parameter, false by default
     */
    public $applyToAll;

    /*
     * The presentation password.
     */
    public $password;

    /*
     * The presentation folder.
     */
    public $folder;

    /*
     * Presentation storage.
     */
    public $storage;

    /*
     * Initializes a new instance of the PostCopyMasterSlideFromSourcePresentationRequest class.
     *  
     * @param string $name The presentation name.
     * @param string $cloneFrom Source presentation to clone masterSlide from.
     * @param int $cloneFromPosition Position of cloning master slide.
     * @param string $cloneFromPassword Source presentation password.
     * @param string $cloneFromStorage Storage source presentation to clone masterSlide from.
     * @param bool $applyToAll Apply cloned master slide to every existed slide. Optional parameter, false by default
     * @param string $password The presentation password.
     * @param string $folder The presentation folder.
     * @param string $storage Presentation storage.
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
     * The presentation name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The presentation name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Source presentation to clone masterSlide from.
     */
    public function get_cloneFrom()
    {
        return $this->cloneFrom;
    }

    /*
     * Source presentation to clone masterSlide from.
     */
    public function set_cloneFrom($value)
    {
        $this->cloneFrom = $value;
        return $this;
    }
    /*
     * Position of cloning master slide.
     */
    public function get_cloneFromPosition()
    {
        return $this->cloneFromPosition;
    }

    /*
     * Position of cloning master slide.
     */
    public function set_cloneFromPosition($value)
    {
        $this->cloneFromPosition = $value;
        return $this;
    }
    /*
     * Source presentation password.
     */
    public function get_cloneFromPassword()
    {
        return $this->cloneFromPassword;
    }

    /*
     * Source presentation password.
     */
    public function set_cloneFromPassword($value)
    {
        $this->cloneFromPassword = $value;
        return $this;
    }
    /*
     * Storage source presentation to clone masterSlide from.
     */
    public function get_cloneFromStorage()
    {
        return $this->cloneFromStorage;
    }

    /*
     * Storage source presentation to clone masterSlide from.
     */
    public function set_cloneFromStorage($value)
    {
        $this->cloneFromStorage = $value;
        return $this;
    }
    /*
     * Apply cloned master slide to every existed slide. Optional parameter, false by default
     */
    public function get_applyToAll()
    {
        return $this->applyToAll;
    }

    /*
     * Apply cloned master slide to every existed slide. Optional parameter, false by default
     */
    public function set_applyToAll($value)
    {
        $this->applyToAll = $value;
        return $this;
    }
    /*
     * The presentation password.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * The presentation password.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }
    /*
     * The presentation folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The presentation folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * Presentation storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Presentation storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
}
