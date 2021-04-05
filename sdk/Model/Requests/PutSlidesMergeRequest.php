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
 * Request model for putSlidesMerge operation.
 */
class PutSlidesMergeRequest
{
    /*
     * Path to save result.
     */
    public $outPath;

    /*
     * Files to merge
     */
    public $files;

    /*
     * Merge request.
     */
    public $request;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Initializes a new instance of the PutSlidesMergeRequest class.
     *  
     * @param string $outPath Path to save result.
     * @param array $files Files to merge
     * @param \Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest $request Merge request.
     * @param string $password Document password.
     * @param string $storage Document storage.
     */
    public function __construct($outPath, $files = null, $request = null, $password = null, $storage = null)
    {
        $this->outPath = $outPath;
        $this->files = $files;
        $this->request = $request;
        $this->password = $password;
        $this->storage = $storage;
    }

    /*
     * Path to save result.
     */
    public function get_outPath()
    {
        return $this->outPath;
    }

    /*
     * Path to save result.
     */
    public function set_outPath($value)
    {
        $this->outPath = $value;
        return $this;
    }
    /*
     * Files to merge
     */
    public function get_files()
    {
        return $this->files;
    }

    /*
     * Files to merge
     */
    public function set_files($value)
    {
        $this->files = $value;
        return $this;
    }
    /*
     * Merge request.
     */
    public function get_request()
    {
        return $this->request;
    }

    /*
     * Merge request.
     */
    public function set_request($value)
    {
        $this->request = $value;
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
}
