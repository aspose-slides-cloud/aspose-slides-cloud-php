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
 * Request model for deleteFile operation.
 */
class DeleteFileRequest
{
    /*
     * File path e.g. &#39;/folder/file.ext&#39;
     */
    public $path;

    /*
     * Storage name
     */
    public $storageName;

    /*
     * File version ID to delete
     */
    public $versionId;

    /*
     * Initializes a new instance of the DeleteFileRequest class.
     *  
     * @param string $path File path e.g. &#39;/folder/file.ext&#39;
     * @param string $storageName Storage name
     * @param string $versionId File version ID to delete
     */
    public function __construct($path, $storageName = null, $versionId = null)
    {
        $this->path = $path;
        $this->storageName = $storageName;
        $this->versionId = $versionId;
    }

    /*
     * File path e.g. &#39;/folder/file.ext&#39;
     */
    public function get_path()
    {
        return $this->path;
    }

    /*
     * File path e.g. &#39;/folder/file.ext&#39;
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }
    /*
     * Storage name
     */
    public function get_storageName()
    {
        return $this->storageName;
    }

    /*
     * Storage name
     */
    public function set_storageName($value)
    {
        $this->storageName = $value;
        return $this;
    }
    /*
     * File version ID to delete
     */
    public function get_versionId()
    {
        return $this->versionId;
    }

    /*
     * File version ID to delete
     */
    public function set_versionId($value)
    {
        $this->versionId = $value;
        return $this;
    }
}
