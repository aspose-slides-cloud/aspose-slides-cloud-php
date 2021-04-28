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
 * Request model for postWatermarkOnline operation.
 */
class PostWatermarkOnlineRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * Shape DTO
     */
    public $shape;

    /*
     * Watermark font height.
     */
    public $fontHeight;

    /*
     * Watermark text.
     */
    public $text;

    /*
     * Watermark font name.
     */
    public $fontName;

    /*
     * Watermark font color.
     */
    public $fontColor;

    /*
     * Document password.
     */
    public $password;

    /*
     * Initializes a new instance of the PostWatermarkOnlineRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param \Aspose\Slides\Cloud\Sdk\Model\Shape $shape Shape DTO
     * @param float $fontHeight Watermark font height.
     * @param string $text Watermark text.
     * @param string $fontName Watermark font name.
     * @param string $fontColor Watermark font color.
     * @param string $password Document password.
     */
    public function __construct($document, $shape = null, $fontHeight = null, $text = null, $fontName = null, $fontColor = null, $password = null)
    {
        $this->document = $document;
        $this->shape = $shape;
        $this->fontHeight = $fontHeight;
        $this->text = $text;
        $this->fontName = $fontName;
        $this->fontColor = $fontColor;
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
     * Shape DTO
     */
    public function get_shape()
    {
        return $this->shape;
    }

    /*
     * Shape DTO
     */
    public function set_shape($value)
    {
        $this->shape = $value;
        return $this;
    }
    /*
     * Watermark font height.
     */
    public function get_fontHeight()
    {
        return $this->fontHeight;
    }

    /*
     * Watermark font height.
     */
    public function set_fontHeight($value)
    {
        $this->fontHeight = $value;
        return $this;
    }
    /*
     * Watermark text.
     */
    public function get_text()
    {
        return $this->text;
    }

    /*
     * Watermark text.
     */
    public function set_text($value)
    {
        $this->text = $value;
        return $this;
    }
    /*
     * Watermark font name.
     */
    public function get_fontName()
    {
        return $this->fontName;
    }

    /*
     * Watermark font name.
     */
    public function set_fontName($value)
    {
        $this->fontName = $value;
        return $this;
    }
    /*
     * Watermark font color.
     */
    public function get_fontColor()
    {
        return $this->fontColor;
    }

    /*
     * Watermark font color.
     */
    public function set_fontColor($value)
    {
        $this->fontColor = $value;
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
