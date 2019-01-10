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
     * Document name.
     */
    public $name;

    /*
     * The position of the slide to be reordered.
     */
    public $oldPosition;

    /*
     * The new position of the reordered slide.
     */
    public $newPosition;

    /*
     * A comma separated array of positions of slides to be reordered.
     */
    public $oldPositions;

    /*
     * A comma separated array of new slide positions.
     */
    public $newPositions;

    /*
     * The index of the slide to be copied from the source presentation.
     */
    public $slideToCopy;

    /*
     * The target position at which to copy or create the slide.
     */
    public $position;

    /*
     * The index of the slide to be cloned.
     */
    public $slideToClone;

    /*
     * Name of the document to copy a slide from.
     */
    public $source;

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
     * Alias of layout slide for new slide. Alias may be the type of layout, name of layout slide or index
     */
    public $layoutAlias;

    /*
     * Initializes a new instance of the PostSlidesReorderPositionRequest class.
     *  
     * @param string $name Document name.
     * @param int $oldPosition The position of the slide to be reordered.
     * @param int $newPosition The new position of the reordered slide.
     * @param int[] $oldPositions A comma separated array of positions of slides to be reordered.
     * @param int[] $newPositions A comma separated array of new slide positions.
     * @param int $slideToCopy The index of the slide to be copied from the source presentation.
     * @param int $position The target position at which to copy or create the slide.
     * @param int $slideToClone The index of the slide to be cloned.
     * @param string $source Name of the document to copy a slide from.
     * @param string $password Document password.
     * @param string $folder Document folder.
     * @param string $storage Document storage.
     * @param string $layoutAlias Alias of layout slide for new slide. Alias may be the type of layout, name of layout slide or index
     */
    public function __construct($name, $oldPosition = null, $newPosition = null, $oldPositions = null, $newPositions = null, $slideToCopy = null, $position = null, $slideToClone = null, $source = null, $password = null, $folder = null, $storage = null, $layoutAlias = null)
    {
        $this->name = $name;
        $this->oldPosition = $oldPosition;
        $this->newPosition = $newPosition;
        $this->oldPositions = $oldPositions;
        $this->newPositions = $newPositions;
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
     * The position of the slide to be reordered.
     */
    public function get_oldPosition()
    {
        return $this->oldPosition;
    }

    /*
     * The position of the slide to be reordered.
     */
    public function set_oldPosition($value)
    {
        $this->oldPosition = $value;
        return $this;
    }
    /*
     * The new position of the reordered slide.
     */
    public function get_newPosition()
    {
        return $this->newPosition;
    }

    /*
     * The new position of the reordered slide.
     */
    public function set_newPosition($value)
    {
        $this->newPosition = $value;
        return $this;
    }
    /*
     * A comma separated array of positions of slides to be reordered.
     */
    public function get_oldPositions()
    {
        return $this->oldPositions;
    }

    /*
     * A comma separated array of positions of slides to be reordered.
     */
    public function set_oldPositions($value)
    {
        $this->oldPositions = $value;
        return $this;
    }
    /*
     * A comma separated array of new slide positions.
     */
    public function get_newPositions()
    {
        return $this->newPositions;
    }

    /*
     * A comma separated array of new slide positions.
     */
    public function set_newPositions($value)
    {
        $this->newPositions = $value;
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
     * The target position at which to copy or create the slide.
     */
    public function get_position()
    {
        return $this->position;
    }

    /*
     * The target position at which to copy or create the slide.
     */
    public function set_position($value)
    {
        $this->position = $value;
        return $this;
    }
    /*
     * The index of the slide to be cloned.
     */
    public function get_slideToClone()
    {
        return $this->slideToClone;
    }

    /*
     * The index of the slide to be cloned.
     */
    public function set_slideToClone($value)
    {
        $this->slideToClone = $value;
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
     * Alias of layout slide for new slide. Alias may be the type of layout, name of layout slide or index
     */
    public function get_layoutAlias()
    {
        return $this->layoutAlias;
    }

    /*
     * Alias of layout slide for new slide. Alias may be the type of layout, name of layout slide or index
     */
    public function set_layoutAlias($value)
    {
        $this->layoutAlias = $value;
        return $this;
    }
}
