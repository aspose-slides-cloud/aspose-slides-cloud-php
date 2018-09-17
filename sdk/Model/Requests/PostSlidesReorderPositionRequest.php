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
 * Request model for postSlidesReorderPosition operation.
 */
class PostSlidesReorderPositionRequest
{
    /*
     * The presentation name.
     */
    public $name;

    /*
     * The new presentation slide position.
     */
    public $oldPosition;

    /*
     * The new presentation slide position.
     */
    public $newPosition;

    /*
     * The presentation slide to copy.
     */
    public $slideToCopy;

    /*
     * The presentation slide position.
     */
    public $position;

    /*
     * The presentation slide to clone.
     */
    public $slideToClone;

    /*
     * The source presentation.
     */
    public $source;

    /*
     * Document password.
     */
    public $password;

    /*
     * The presentation folder.
     */
    public $folder;

    /*
     * The presentation storage.
     */
    public $storage;

    /*
     * Alias of layout slide for new slide. Alias could be the type of layout, name of layout slide or index
     */
    public $layoutAlias;

    /*
     * Initializes a new instance of the PostSlidesReorderPositionRequest class.
     *  
     * @param string $name The presentation name.
     * @param int $oldPosition The new presentation slide position.
     * @param int $newPosition The new presentation slide position.
     * @param int $slideToCopy The presentation slide to copy.
     * @param int $position The presentation slide position.
     * @param int $slideToClone The presentation slide to clone.
     * @param string $source The source presentation.
     * @param string $password Document password.
     * @param string $folder The presentation folder.
     * @param string $storage The presentation storage.
     * @param string $layoutAlias Alias of layout slide for new slide. Alias could be the type of layout, name of layout slide or index
     */
    public function __construct($name, $oldPosition = null, $newPosition = null, $slideToCopy = null, $position = null, $slideToClone = null, $source = null, $password = null, $folder = null, $storage = null, $layoutAlias = null)
    {
        $this->name = $name;
        $this->oldPosition = $oldPosition;
        $this->newPosition = $newPosition;
        $this->slideToCopy = $slideToCopy;
        $this->position = $position;
        $this->slideToClone = $slideToClone;
        $this->source = $source;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->layoutAlias = $layoutAlias;
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
     * The new presentation slide position.
     */
    public function get_oldPosition()
    {
        return $this->oldPosition;
    }

    /*
     * The new presentation slide position.
     */
    public function set_oldPosition($value)
    {
        $this->oldPosition = $value;
        return $this;
    }
    /*
     * The new presentation slide position.
     */
    public function get_newPosition()
    {
        return $this->newPosition;
    }

    /*
     * The new presentation slide position.
     */
    public function set_newPosition($value)
    {
        $this->newPosition = $value;
        return $this;
    }
    /*
     * The presentation slide to copy.
     */
    public function get_slideToCopy()
    {
        return $this->slideToCopy;
    }

    /*
     * The presentation slide to copy.
     */
    public function set_slideToCopy($value)
    {
        $this->slideToCopy = $value;
        return $this;
    }
    /*
     * The presentation slide position.
     */
    public function get_position()
    {
        return $this->position;
    }

    /*
     * The presentation slide position.
     */
    public function set_position($value)
    {
        $this->position = $value;
        return $this;
    }
    /*
     * The presentation slide to clone.
     */
    public function get_slideToClone()
    {
        return $this->slideToClone;
    }

    /*
     * The presentation slide to clone.
     */
    public function set_slideToClone($value)
    {
        $this->slideToClone = $value;
        return $this;
    }
    /*
     * The source presentation.
     */
    public function get_source()
    {
        return $this->source;
    }

    /*
     * The source presentation.
     */
    public function set_source($value)
    {
        $this->source = $value;
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
     * The presentation storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The presentation storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    /*
     * Alias of layout slide for new slide. Alias could be the type of layout, name of layout slide or index
     */
    public function get_layoutAlias()
    {
        return $this->layoutAlias;
    }

    /*
     * Alias of layout slide for new slide. Alias could be the type of layout, name of layout slide or index
     */
    public function set_layoutAlias($value)
    {
        $this->layoutAlias = $value;
        return $this;
    }
}
