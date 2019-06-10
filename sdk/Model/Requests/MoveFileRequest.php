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
 * Request model for moveFile operation.
 */
class MoveFileRequest
{
    /*
     * Source file path e.g. &#39;/src.ext&#39;
     */
    public $srcPath;

    /*
     * Destination file path e.g. &#39;/dest.ext&#39;
     */
    public $destPath;

    /*
     * Source storage name
     */
    public $srcStorageName;

    /*
     * Destination storage name
     */
    public $destStorageName;

    /*
     * File version ID to move
     */
    public $versionId;

    /*
     * Initializes a new instance of the MoveFileRequest class.
     *  
     * @param string $srcPath Source file path e.g. &#39;/src.ext&#39;
     * @param string $destPath Destination file path e.g. &#39;/dest.ext&#39;
     * @param string $srcStorageName Source storage name
     * @param string $destStorageName Destination storage name
     * @param string $versionId File version ID to move
     */
    public function __construct($srcPath, $destPath, $srcStorageName = null, $destStorageName = null, $versionId = null)
    {
        $this->srcPath = $srcPath;
        $this->destPath = $destPath;
        $this->srcStorageName = $srcStorageName;
        $this->destStorageName = $destStorageName;
        $this->versionId = $versionId;
    }

    /*
     * Source file path e.g. &#39;/src.ext&#39;
     */
    public function get_srcPath()
    {
        return $this->srcPath;
    }

    /*
     * Source file path e.g. &#39;/src.ext&#39;
     */
    public function set_srcPath($value)
    {
        $this->srcPath = $value;
        return $this;
    }
    /*
     * Destination file path e.g. &#39;/dest.ext&#39;
     */
    public function get_destPath()
    {
        return $this->destPath;
    }

    /*
     * Destination file path e.g. &#39;/dest.ext&#39;
     */
    public function set_destPath($value)
    {
        $this->destPath = $value;
        return $this;
    }
    /*
     * Source storage name
     */
    public function get_srcStorageName()
    {
        return $this->srcStorageName;
    }

    /*
     * Source storage name
     */
    public function set_srcStorageName($value)
    {
        $this->srcStorageName = $value;
        return $this;
    }
    /*
     * Destination storage name
     */
    public function get_destStorageName()
    {
        return $this->destStorageName;
    }

    /*
     * Destination storage name
     */
    public function set_destStorageName($value)
    {
        $this->destStorageName = $value;
        return $this;
    }
    /*
     * File version ID to move
     */
    public function get_versionId()
    {
        return $this->versionId;
    }

    /*
     * File version ID to move
     */
    public function set_versionId($value)
    {
        $this->versionId = $value;
        return $this;
    }
}
