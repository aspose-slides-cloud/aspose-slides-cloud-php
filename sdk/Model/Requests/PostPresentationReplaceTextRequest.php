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
 * Request model for postPresentationReplaceText operation.
 */
class PostPresentationReplaceTextRequest
{
    /*
     * Document data.
     */
    public $document;

    /*
     * Text value to be replaced.
     */
    public $oldValue;

    /*
     * Text value to replace with.
     */
    public $newValue;

    /*
     * True if character case must be ignored.
     */
    public $ignoreCase;

    /*
     * Document password.
     */
    public $password;

    /*
     * Initializes a new instance of the PostPresentationReplaceTextRequest class.
     *  
     * @param \SplFileObject $document Document data.
     * @param string $oldValue Text value to be replaced.
     * @param string $newValue Text value to replace with.
     * @param bool $ignoreCase True if character case must be ignored.
     * @param string $password Document password.
     */
    public function __construct($document, $oldValue, $newValue, $ignoreCase = null, $password = null)
    {
        $this->document = $document;
        $this->oldValue = $oldValue;
        $this->newValue = $newValue;
        $this->ignoreCase = $ignoreCase;
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
     * Text value to be replaced.
     */
    public function get_oldValue()
    {
        return $this->oldValue;
    }

    /*
     * Text value to be replaced.
     */
    public function set_oldValue($value)
    {
        $this->oldValue = $value;
        return $this;
    }
    /*
     * Text value to replace with.
     */
    public function get_newValue()
    {
        return $this->newValue;
    }

    /*
     * Text value to replace with.
     */
    public function set_newValue($value)
    {
        $this->newValue = $value;
        return $this;
    }
    /*
     * True if character case must be ignored.
     */
    public function get_ignoreCase()
    {
        return $this->ignoreCase;
    }

    /*
     * True if character case must be ignored.
     */
    public function set_ignoreCase($value)
    {
        $this->ignoreCase = $value;
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
