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
 * Request model for postSlidesCopy operation.
 */
class PostSlidesCopyRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * The index of the slide to be copied from the source presentation.
     */
    public $slideToCopy;

    /*
     * The target position at which to copy the slide. Copy to the end by default.
     */
    public $position;

    /*
     * Name of the document to copy a slide from.
     */
    public $source;

    /*
     * Password for the document to copy a slide from.
     */
    public $sourcePassword;

    /*
     * Template storage name.
     */
    public $sourceStorage;

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
     * Initializes a new instance of the PostSlidesCopyRequest class.
     *  
     * @param string $name Document name.
     * @param int $slideToCopy The index of the slide to be copied from the source presentation.
     * @param int $position The target position at which to copy the slide. Copy to the end by default.
     * @param string $source Name of the document to copy a slide from.
     * @param string $sourcePassword Password for the document to copy a slide from.
     * @param string $sourceStorage Template storage name.
     * @param string $password Document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     */
    public function __construct($name, $slideToCopy, $position = null, $source = null, $sourcePassword = null, $sourceStorage = null, $password = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->slideToCopy = $slideToCopy;
        $this->position = $position;
        $this->source = $source;
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
     * The index of the slide to be copied from the source presentation.
     */
    public function get_slideToCopy()
    {
        return $this->slideToCopy;
    }

    /*
     * The index of the slide to be copied from the source presentation.
     */
    public function set_slideToCopy($value)
    {
        $this->slideToCopy = $value;
        return $this;
    }
    /*
     * The target position at which to copy the slide. Copy to the end by default.
     */
    public function get_position()
    {
        return $this->position;
    }

    /*
     * The target position at which to copy the slide. Copy to the end by default.
     */
    public function set_position($value)
    {
        $this->position = $value;
        return $this;
    }
    /*
     * Name of the document to copy a slide from.
     */
    public function get_source()
    {
        return $this->source;
    }

    /*
     * Name of the document to copy a slide from.
     */
    public function set_source($value)
    {
        $this->source = $value;
        return $this;
    }
    /*
     * Password for the document to copy a slide from.
     */
    public function get_sourcePassword()
    {
        return $this->sourcePassword;
    }

    /*
     * Password for the document to copy a slide from.
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
