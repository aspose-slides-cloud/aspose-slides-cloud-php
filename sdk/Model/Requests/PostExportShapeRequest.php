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
 * Request model for postExportShape operation.
 */
class PostExportShapeRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * Slide index.
     */
    public $slideIndex;

    /*
     * Index of shape starting from 1
     */
    public $shapeIndex;

    /*
     * Export picture format.
     */
    public $format;

    /*
     * X scale ratio.
     */
    public $scaleX;

    /*
     * Y scale ratio.
     */
    public $scaleY;

    /*
     * Shape thumbnail bounds type.
     */
    public $bounds;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Fonts folder.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the PostExportShapeRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param int $slideIndex Slide index.
     * @param int $shapeIndex Index of shape starting from 1
     * @param string $format Export picture format.
     * @param float $scaleX X scale ratio.
     * @param float $scaleY Y scale ratio.
     * @param string $bounds Shape thumbnail bounds type.
     * @param string $password Document password.
     * @param string $storage Document storage.
     * @param string $fontsFolder Fonts folder.
     */
    public function __construct($document, $slideIndex, $shapeIndex, $format, $scaleX = null, $scaleY = null, $bounds = null, $password = null, $storage = null, $fontsFolder = null)
    {
        $this->document = $document;
        $this->slideIndex = $slideIndex;
        $this->shapeIndex = $shapeIndex;
        $this->format = $format;
        $this->scaleX = $scaleX;
        $this->scaleY = $scaleY;
        $this->bounds = $bounds;
        $this->password = $password;
        $this->storage = $storage;
        $this->fontsFolder = $fontsFolder;
    }

    /*
     * Document data.
     */
    public function get_document()
    {
        return $this->document;
    }

    /*
     * Document data.
     */
    public function set_document($value)
    {
        $this->document = $value;
        return $this;
    }
    /*
     * Slide index.
     */
    public function get_slideIndex()
    {
        return $this->slideIndex;
    }

    /*
     * Slide index.
     */
    public function set_slideIndex($value)
    {
        $this->slideIndex = $value;
        return $this;
    }
    /*
     * Index of shape starting from 1
     */
    public function get_shapeIndex()
    {
        return $this->shapeIndex;
    }

    /*
     * Index of shape starting from 1
     */
    public function set_shapeIndex($value)
    {
        $this->shapeIndex = $value;
        return $this;
    }
    /*
     * Export picture format.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Export picture format.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * X scale ratio.
     */
    public function get_scaleX()
    {
        return $this->scaleX;
    }

    /*
     * X scale ratio.
     */
    public function set_scaleX($value)
    {
        $this->scaleX = $value;
        return $this;
    }
    /*
     * Y scale ratio.
     */
    public function get_scaleY()
    {
        return $this->scaleY;
    }

    /*
     * Y scale ratio.
     */
    public function set_scaleY($value)
    {
        $this->scaleY = $value;
        return $this;
    }
    /*
     * Shape thumbnail bounds type.
     */
    public function get_bounds()
    {
        return $this->bounds;
    }

    /*
     * Shape thumbnail bounds type.
     */
    public function set_bounds($value)
    {
        $this->bounds = $value;
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
     * Fonts folder.
     */
    public function get_fontsFolder()
    {
        return $this->fontsFolder;
    }

    /*
     * Fonts folder.
     */
    public function set_fontsFolder($value)
    {
        $this->fontsFolder = $value;
        return $this;
    }
}
