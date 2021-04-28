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
 * Request model for postImageWatermarkOnline operation.
 */
class PostImageWatermarkOnlineRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * Image data.
     */
    public $image;

    /*
     * PictureFrame DTO.
     */
    public $pictureFrame;

    /*
     * Document password.
     */
    public $password;

    /*
     * Initializes a new instance of the PostImageWatermarkOnlineRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param \SplFileObject $image Image data.
     * @param \Aspose\Slides\Cloud\Sdk\Model\PictureFrame $pictureFrame PictureFrame DTO.
     * @param string $password Document password.
     */
    public function __construct($document, $image = null, $pictureFrame = null, $password = null)
    {
        $this->document = $document;
        $this->image = $image;
        $this->pictureFrame = $pictureFrame;
        $this->password = $password;
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
     * Image data.
     */
    public function get_image()
    {
        return $this->image;
    }

    /*
     * Image data.
     */
    public function set_image($value)
    {
        $this->image = $value;
        return $this;
    }
    /*
     * PictureFrame DTO.
     */
    public function get_pictureFrame()
    {
        return $this->pictureFrame;
    }

    /*
     * PictureFrame DTO.
     */
    public function set_pictureFrame($value)
    {
        $this->pictureFrame = $value;
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
}
