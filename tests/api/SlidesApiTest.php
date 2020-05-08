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


namespace Aspose\Slides\Cloud\Sdk\Tests\Api;
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\Requests;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class SlidesApiTest extends TestBase
{
    private function getCopyFileRequest()
    {
        $testsrcPath = TestUtils::getTestValue("copyFile", "srcPath", $this->values);
        $testdestPath = TestUtils::getTestValue("copyFile", "destPath", $this->values);
        $testsrcStorageName = TestUtils::getTestValue("copyFile", "srcStorageName", $this->values);
        $testdestStorageName = TestUtils::getTestValue("copyFile", "destStorageName", $this->values);
        $testversionId = TestUtils::getTestValue("copyFile", "versionId", $this->values);
        $request = new Requests\CopyFileRequest($testsrcPath, $testdestPath, $testsrcStorageName, $testdestStorageName, $testversionId);
        return $request;
    }

    /**
     * Test case for copyFile
     * Copy file
     */
    public function testCopyFile()
    {
        $request = $this->getCopyFileRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("copyFile", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFile($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "copyFile");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testCopyFileInvalidsrcPath()
    {
        $request = $this->getCopyFileRequest();
        $request->srcPath = TestUtils::invalidizeValue("srcPath", "copyFile", $request->srcPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFile", "srcPath", $request->srcPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFile", "srcPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFile", "srcPath", $this->okToFailValues);
        }
    }

    public function testCopyFileInvaliddestPath()
    {
        $request = $this->getCopyFileRequest();
        $request->destPath = TestUtils::invalidizeValue("destPath", "copyFile", $request->destPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFile", "destPath", $request->destPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFile", "destPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFile", "destPath", $this->okToFailValues);
        }
    }

    public function testCopyFileInvalidsrcStorageName()
    {
        $request = $this->getCopyFileRequest();
        $request->srcStorageName = TestUtils::invalidizeValue("srcStorageName", "copyFile", $request->srcStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFile", "srcStorageName", $request->srcStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFile", "srcStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFile", "srcStorageName", $this->okToFailValues);
        }
    }

    public function testCopyFileInvaliddestStorageName()
    {
        $request = $this->getCopyFileRequest();
        $request->destStorageName = TestUtils::invalidizeValue("destStorageName", "copyFile", $request->destStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFile", "destStorageName", $request->destStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFile", "destStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFile", "destStorageName", $this->okToFailValues);
        }
    }

    public function testCopyFileInvalidversionId()
    {
        $request = $this->getCopyFileRequest();
        $request->versionId = TestUtils::invalidizeValue("versionId", "copyFile", $request->versionId, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFile", "versionId", $request->versionId);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFile", "versionId", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFile", "versionId", $this->okToFailValues);
        }
    }
    private function getCopyFolderRequest()
    {
        $testsrcPath = TestUtils::getTestValue("copyFolder", "srcPath", $this->values);
        $testdestPath = TestUtils::getTestValue("copyFolder", "destPath", $this->values);
        $testsrcStorageName = TestUtils::getTestValue("copyFolder", "srcStorageName", $this->values);
        $testdestStorageName = TestUtils::getTestValue("copyFolder", "destStorageName", $this->values);
        $request = new Requests\CopyFolderRequest($testsrcPath, $testdestPath, $testsrcStorageName, $testdestStorageName);
        return $request;
    }

    /**
     * Test case for copyFolder
     * Copy folder
     */
    public function testCopyFolder()
    {
        $request = $this->getCopyFolderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("copyFolder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFolder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "copyFolder");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testCopyFolderInvalidsrcPath()
    {
        $request = $this->getCopyFolderRequest();
        $request->srcPath = TestUtils::invalidizeValue("srcPath", "copyFolder", $request->srcPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFolder", "srcPath", $request->srcPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFolder", "srcPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFolder", "srcPath", $this->okToFailValues);
        }
    }

    public function testCopyFolderInvaliddestPath()
    {
        $request = $this->getCopyFolderRequest();
        $request->destPath = TestUtils::invalidizeValue("destPath", "copyFolder", $request->destPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFolder", "destPath", $request->destPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFolder", "destPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFolder", "destPath", $this->okToFailValues);
        }
    }

    public function testCopyFolderInvalidsrcStorageName()
    {
        $request = $this->getCopyFolderRequest();
        $request->srcStorageName = TestUtils::invalidizeValue("srcStorageName", "copyFolder", $request->srcStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFolder", "srcStorageName", $request->srcStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFolder", "srcStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFolder", "srcStorageName", $this->okToFailValues);
        }
    }

    public function testCopyFolderInvaliddestStorageName()
    {
        $request = $this->getCopyFolderRequest();
        $request->destStorageName = TestUtils::invalidizeValue("destStorageName", "copyFolder", $request->destStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("copyFolder", "destStorageName", $request->destStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->copyFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "copyFolder", "destStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("copyFolder", "destStorageName", $this->okToFailValues);
        }
    }
    private function getCreateFolderRequest()
    {
        $testpath = TestUtils::getTestValue("createFolder", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("createFolder", "storageName", $this->values);
        $request = new Requests\CreateFolderRequest($testpath, $teststorageName);
        return $request;
    }

    /**
     * Test case for createFolder
     * Create the folder
     */
    public function testCreateFolder()
    {
        $request = $this->getCreateFolderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("createFolder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->createFolder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "createFolder");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testCreateFolderInvalidpath()
    {
        $request = $this->getCreateFolderRequest();
        $request->path = TestUtils::invalidizeValue("path", "createFolder", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("createFolder", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->createFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "createFolder", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("createFolder", "path", $this->okToFailValues);
        }
    }

    public function testCreateFolderInvalidstorageName()
    {
        $request = $this->getCreateFolderRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "createFolder", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("createFolder", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->createFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "createFolder", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("createFolder", "storageName", $this->okToFailValues);
        }
    }
    private function getDeleteFileRequest()
    {
        $testpath = TestUtils::getTestValue("deleteFile", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("deleteFile", "storageName", $this->values);
        $testversionId = TestUtils::getTestValue("deleteFile", "versionId", $this->values);
        $request = new Requests\DeleteFileRequest($testpath, $teststorageName, $testversionId);
        return $request;
    }

    /**
     * Test case for deleteFile
     * Delete file
     */
    public function testDeleteFile()
    {
        $request = $this->getDeleteFileRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFile", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFile($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteFile");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testDeleteFileInvalidpath()
    {
        $request = $this->getDeleteFileRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteFile", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFile", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteFile", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteFile", "path", $this->okToFailValues);
        }
    }

    public function testDeleteFileInvalidstorageName()
    {
        $request = $this->getDeleteFileRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "deleteFile", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFile", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteFile", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteFile", "storageName", $this->okToFailValues);
        }
    }

    public function testDeleteFileInvalidversionId()
    {
        $request = $this->getDeleteFileRequest();
        $request->versionId = TestUtils::invalidizeValue("versionId", "deleteFile", $request->versionId, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFile", "versionId", $request->versionId);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteFile", "versionId", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteFile", "versionId", $this->okToFailValues);
        }
    }
    private function getDeleteFolderRequest()
    {
        $testpath = TestUtils::getTestValue("deleteFolder", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("deleteFolder", "storageName", $this->values);
        $testrecursive = TestUtils::getTestValue("deleteFolder", "recursive", $this->values);
        $request = new Requests\DeleteFolderRequest($testpath, $teststorageName, $testrecursive);
        return $request;
    }

    /**
     * Test case for deleteFolder
     * Delete folder
     */
    public function testDeleteFolder()
    {
        $request = $this->getDeleteFolderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFolder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFolder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteFolder");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testDeleteFolderInvalidpath()
    {
        $request = $this->getDeleteFolderRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteFolder", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFolder", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteFolder", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteFolder", "path", $this->okToFailValues);
        }
    }

    public function testDeleteFolderInvalidstorageName()
    {
        $request = $this->getDeleteFolderRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "deleteFolder", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFolder", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteFolder", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteFolder", "storageName", $this->okToFailValues);
        }
    }

    public function testDeleteFolderInvalidrecursive()
    {
        $request = $this->getDeleteFolderRequest();
        $request->recursive = TestUtils::invalidizeValue("recursive", "deleteFolder", $request->recursive, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteFolder", "recursive", $request->recursive);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteFolder", "recursive", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteFolder", "recursive", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlide", "storage", $this->values);
        $request = new Requests\DeleteNotesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlide
     * Remove notes slide.
     */
    public function testDeleteNotesSlide()
    {
        $request = $this->getDeleteNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlideInvalidname()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlideParagraphRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteNotesSlideParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlideParagraph", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("deleteNotesSlideParagraph", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlideParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlideParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlideParagraph", "storage", $this->values);
        $request = new Requests\DeleteNotesSlideParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideParagraph
     * Remove a paragraph.
     */
    public function testDeleteNotesSlideParagraph()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidname()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlideParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidpath()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteNotesSlideParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "path", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteNotesSlideParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidparagraphIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "deleteNotesSlideParagraph", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlideParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlideParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlideParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlideParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideParagraphs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideParagraphs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteNotesSlideParagraphs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlideParagraphs", "shapeIndex", $this->values);
        $testparagraphs = TestUtils::getTestValue("deleteNotesSlideParagraphs", "paragraphs", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlideParagraphs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlideParagraphs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlideParagraphs", "storage", $this->values);
        $request = new Requests\DeleteNotesSlideParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphs, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideParagraphs
     * Remove a range of paragraphs.
     */
    public function testDeleteNotesSlideParagraphs()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidname()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlideParagraphs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidpath()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteNotesSlideParagraphs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "path", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteNotesSlideParagraphs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidparagraphs()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->paragraphs = TestUtils::invalidizeValue("paragraphs", "deleteNotesSlideParagraphs", $request->paragraphs, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "paragraphs", $request->paragraphs);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "paragraphs", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "paragraphs", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlideParagraphs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlideParagraphs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlideParagraphs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlidePortionRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlidePortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteNotesSlidePortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "paragraphIndex", $this->values);
        $testportionIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "portionIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlidePortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlidePortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlidePortion", "storage", $this->values);
        $request = new Requests\DeleteNotesSlidePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlidePortion
     * Remove a portion.
     */
    public function testDeleteNotesSlidePortion()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlidePortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlidePortionInvalidname()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlidePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlidePortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidpath()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteNotesSlidePortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "path", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteNotesSlidePortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidparagraphIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "deleteNotesSlidePortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidportionIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", "deleteNotesSlidePortion", $request->portionIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "portionIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "portionIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidpassword()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlidePortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidfolder()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlidePortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionInvalidstorage()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlidePortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlidePortionsRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlidePortions", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlidePortions", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteNotesSlidePortions", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlidePortions", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("deleteNotesSlidePortions", "paragraphIndex", $this->values);
        $testportions = TestUtils::getTestValue("deleteNotesSlidePortions", "portions", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlidePortions", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlidePortions", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlidePortions", "storage", $this->values);
        $request = new Requests\DeleteNotesSlidePortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportions, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlidePortions
     * Remove a range of portions.
     */
    public function testDeleteNotesSlidePortions()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlidePortions");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidname()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlidePortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlidePortions", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidpath()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteNotesSlidePortions", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "path", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteNotesSlidePortions", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidparagraphIndex()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "deleteNotesSlidePortions", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidportions()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->portions = TestUtils::invalidizeValue("portions", "deleteNotesSlidePortions", $request->portions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "portions", $request->portions);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "portions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "portions", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidpassword()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlidePortions", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidfolder()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlidePortions", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidstorage()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlidePortions", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteNotesSlideShape", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlideShape", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlideShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlideShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlideShape", "storage", $this->values);
        $request = new Requests\DeleteNotesSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideShape
     * Remove a shape.
     */
    public function testDeleteNotesSlideShape()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlideShapeInvalidname()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapeInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlideShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapeInvalidpath()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteNotesSlideShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "path", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapeInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteNotesSlideShape", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapeInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlideShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapeInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlideShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapeInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlideShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteNotesSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideShapes", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideShapes", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteNotesSlideShapes", "path", $this->values);
        $testshapes = TestUtils::getTestValue("deleteNotesSlideShapes", "shapes", $this->values);
        $testpassword = TestUtils::getTestValue("deleteNotesSlideShapes", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteNotesSlideShapes", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteNotesSlideShapes", "storage", $this->values);
        $request = new Requests\DeleteNotesSlideShapesRequest($testname, $testslideIndex, $testpath, $testshapes, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideShapes
     * Remove a range of shapes.
     */
    public function testDeleteNotesSlideShapes()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteNotesSlideShapesInvalidname()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "name", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapesInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteNotesSlideShapes", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapesInvalidpath()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteNotesSlideShapes", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "path", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapesInvalidshapes()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->shapes = TestUtils::invalidizeValue("shapes", "deleteNotesSlideShapes", $request->shapes, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "shapes", $request->shapes);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "shapes", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "shapes", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapesInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteNotesSlideShapes", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "password", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapesInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteNotesSlideShapes", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteNotesSlideShapesInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteNotesSlideShapes", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteParagraphRequest()
    {
        $testname = TestUtils::getTestValue("deleteParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteParagraph", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("deleteParagraph", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteParagraph", "storage", $this->values);
        $request = new Requests\DeleteParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteParagraph
     * Remove a paragraph.
     */
    public function testDeleteParagraph()
    {
        $request = $this->getDeleteParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteParagraphInvalidname()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "name", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidslideIndex()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidpath()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "path", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidshapeIndex()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidparagraphIndex()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "deleteParagraph", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidpassword()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "password", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidfolder()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphInvalidstorage()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("deleteParagraphs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteParagraphs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteParagraphs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteParagraphs", "shapeIndex", $this->values);
        $testparagraphs = TestUtils::getTestValue("deleteParagraphs", "paragraphs", $this->values);
        $testpassword = TestUtils::getTestValue("deleteParagraphs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteParagraphs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteParagraphs", "storage", $this->values);
        $request = new Requests\DeleteParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphs, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteParagraphs
     * Remove a range of paragraphs.
     */
    public function testDeleteParagraphs()
    {
        $request = $this->getDeleteParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteParagraphsInvalidname()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "name", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidslideIndex()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteParagraphs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidpath()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteParagraphs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "path", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidshapeIndex()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteParagraphs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidparagraphs()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->paragraphs = TestUtils::invalidizeValue("paragraphs", "deleteParagraphs", $request->paragraphs, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "paragraphs", $request->paragraphs);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "paragraphs", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "paragraphs", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidpassword()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteParagraphs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "password", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidfolder()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteParagraphs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteParagraphsInvalidstorage()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteParagraphs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "storage", $this->okToFailValues);
        }
    }
    private function getDeletePortionRequest()
    {
        $testname = TestUtils::getTestValue("deletePortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deletePortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deletePortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deletePortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("deletePortion", "paragraphIndex", $this->values);
        $testportionIndex = TestUtils::getTestValue("deletePortion", "portionIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deletePortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deletePortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deletePortion", "storage", $this->values);
        $request = new Requests\DeletePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deletePortion
     * Remove a portion.
     */
    public function testDeletePortion()
    {
        $request = $this->getDeletePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deletePortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeletePortionInvalidname()
    {
        $request = $this->getDeletePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "deletePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "name", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidslideIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deletePortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidpath()
    {
        $request = $this->getDeletePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "deletePortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "path", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidshapeIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deletePortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidparagraphIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "deletePortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidportionIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", "deletePortion", $request->portionIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "portionIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "portionIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidpassword()
    {
        $request = $this->getDeletePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "deletePortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "password", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidfolder()
    {
        $request = $this->getDeletePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deletePortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "folder", $this->okToFailValues);
        }
    }

    public function testDeletePortionInvalidstorage()
    {
        $request = $this->getDeletePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deletePortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "storage", $this->okToFailValues);
        }
    }
    private function getDeletePortionsRequest()
    {
        $testname = TestUtils::getTestValue("deletePortions", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deletePortions", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deletePortions", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deletePortions", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("deletePortions", "paragraphIndex", $this->values);
        $testportions = TestUtils::getTestValue("deletePortions", "portions", $this->values);
        $testpassword = TestUtils::getTestValue("deletePortions", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deletePortions", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deletePortions", "storage", $this->values);
        $request = new Requests\DeletePortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportions, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deletePortions
     * Remove a range of portions.
     */
    public function testDeletePortions()
    {
        $request = $this->getDeletePortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deletePortions");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeletePortionsInvalidname()
    {
        $request = $this->getDeletePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deletePortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "name", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidslideIndex()
    {
        $request = $this->getDeletePortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deletePortions", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidpath()
    {
        $request = $this->getDeletePortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", "deletePortions", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "path", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidshapeIndex()
    {
        $request = $this->getDeletePortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deletePortions", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidparagraphIndex()
    {
        $request = $this->getDeletePortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "deletePortions", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidportions()
    {
        $request = $this->getDeletePortionsRequest();
        $request->portions = TestUtils::invalidizeValue("portions", "deletePortions", $request->portions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "portions", $request->portions);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "portions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "portions", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidpassword()
    {
        $request = $this->getDeletePortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", "deletePortions", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "password", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidfolder()
    {
        $request = $this->getDeletePortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deletePortions", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "folder", $this->okToFailValues);
        }
    }

    public function testDeletePortionsInvalidstorage()
    {
        $request = $this->getDeletePortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deletePortions", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideAnimationRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideAnimation", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideAnimation", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideAnimation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideAnimation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideAnimation", "storage", $this->values);
        $request = new Requests\DeleteSlideAnimationRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideAnimation
     * Remove animation from a slide.
     */
    public function testDeleteSlideAnimation()
    {
        $request = $this->getDeleteSlideAnimationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideAnimation");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideAnimationInvalidname()
    {
        $request = $this->getDeleteSlideAnimationRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideAnimation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimation", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInvalidslideIndex()
    {
        $request = $this->getDeleteSlideAnimationRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideAnimation", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimation", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimation", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimation", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInvalidpassword()
    {
        $request = $this->getDeleteSlideAnimationRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideAnimation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimation", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInvalidfolder()
    {
        $request = $this->getDeleteSlideAnimationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideAnimation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimation", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInvalidstorage()
    {
        $request = $this->getDeleteSlideAnimationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideAnimation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimation", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideAnimationEffectRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideAnimationEffect", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideAnimationEffect", "slideIndex", $this->values);
        $testeffectIndex = TestUtils::getTestValue("deleteSlideAnimationEffect", "effectIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideAnimationEffect", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideAnimationEffect", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideAnimationEffect", "storage", $this->values);
        $request = new Requests\DeleteSlideAnimationEffectRequest($testname, $testslideIndex, $testeffectIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideAnimationEffect
     * Remove an effect from slide animation.
     */
    public function testDeleteSlideAnimationEffect()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideAnimationEffect");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideAnimationEffectInvalidname()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideAnimationEffect", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationEffect", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationEffect", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationEffectInvalidslideIndex()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideAnimationEffect", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationEffect", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationEffect", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationEffectInvalideffectIndex()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        $request->effectIndex = TestUtils::invalidizeValue("effectIndex", "deleteSlideAnimationEffect", $request->effectIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", "effectIndex", $request->effectIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationEffect", "effectIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationEffect", "effectIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationEffectInvalidpassword()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideAnimationEffect", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationEffect", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationEffect", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationEffectInvalidfolder()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideAnimationEffect", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationEffect", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationEffect", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationEffectInvalidstorage()
    {
        $request = $this->getDeleteSlideAnimationEffectRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideAnimationEffect", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationEffect", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationEffect", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationEffect", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideAnimationInteractiveSequenceRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequence", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequence", "slideIndex", $this->values);
        $testsequenceIndex = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequence", "sequenceIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequence", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequence", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequence", "storage", $this->values);
        $request = new Requests\DeleteSlideAnimationInteractiveSequenceRequest($testname, $testslideIndex, $testsequenceIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideAnimationInteractiveSequence
     * Remove an interactive sequence from slide animation.
     */
    public function testDeleteSlideAnimationInteractiveSequence()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideAnimationInteractiveSequence");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceInvalidname()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideAnimationInteractiveSequence", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequence", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequence", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceInvalidslideIndex()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideAnimationInteractiveSequence", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequence", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequence", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceInvalidsequenceIndex()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        $request->sequenceIndex = TestUtils::invalidizeValue("sequenceIndex", "deleteSlideAnimationInteractiveSequence", $request->sequenceIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", "sequenceIndex", $request->sequenceIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequence", "sequenceIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequence", "sequenceIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceInvalidpassword()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideAnimationInteractiveSequence", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequence", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequence", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceInvalidfolder()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideAnimationInteractiveSequence", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequence", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequence", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceInvalidstorage()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideAnimationInteractiveSequence", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequence", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequence", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequence", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideAnimationInteractiveSequenceEffectRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "slideIndex", $this->values);
        $testsequenceIndex = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $this->values);
        $testeffectIndex = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "effectIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequenceEffect", "storage", $this->values);
        $request = new Requests\DeleteSlideAnimationInteractiveSequenceEffectRequest($testname, $testslideIndex, $testsequenceIndex, $testeffectIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideAnimationInteractiveSequenceEffect
     * Remove an effect from slide animation interactive sequence.
     */
    public function testDeleteSlideAnimationInteractiveSequenceEffect()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideAnimationInteractiveSequenceEffect");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalidname()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideAnimationInteractiveSequenceEffect", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalidslideIndex()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideAnimationInteractiveSequenceEffect", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalidsequenceIndex()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->sequenceIndex = TestUtils::invalidizeValue("sequenceIndex", "deleteSlideAnimationInteractiveSequenceEffect", $request->sequenceIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $request->sequenceIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalideffectIndex()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->effectIndex = TestUtils::invalidizeValue("effectIndex", "deleteSlideAnimationInteractiveSequenceEffect", $request->effectIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "effectIndex", $request->effectIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "effectIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "effectIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalidpassword()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideAnimationInteractiveSequenceEffect", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalidfolder()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideAnimationInteractiveSequenceEffect", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequenceEffectInvalidstorage()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequenceEffectRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideAnimationInteractiveSequenceEffect", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequenceEffect", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequenceEffect", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequenceEffect", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideAnimationInteractiveSequencesRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequences", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequences", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequences", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequences", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideAnimationInteractiveSequences", "storage", $this->values);
        $request = new Requests\DeleteSlideAnimationInteractiveSequencesRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideAnimationInteractiveSequences
     * Clear all interactive sequences from slide animation.
     */
    public function testDeleteSlideAnimationInteractiveSequences()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequencesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequences", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequences($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideAnimationInteractiveSequences");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequencesInvalidname()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequencesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideAnimationInteractiveSequences", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequences", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequences($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequences", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequences", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequencesInvalidslideIndex()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequencesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideAnimationInteractiveSequences", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequences", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequences($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequences", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequences", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequencesInvalidpassword()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequencesRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideAnimationInteractiveSequences", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequences", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequences($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequences", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequences", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequencesInvalidfolder()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequencesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideAnimationInteractiveSequences", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequences", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequences($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequences", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequences", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationInteractiveSequencesInvalidstorage()
    {
        $request = $this->getDeleteSlideAnimationInteractiveSequencesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideAnimationInteractiveSequences", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationInteractiveSequences", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationInteractiveSequences($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationInteractiveSequences", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationInteractiveSequences", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideAnimationMainSequenceRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideAnimationMainSequence", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideAnimationMainSequence", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideAnimationMainSequence", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideAnimationMainSequence", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideAnimationMainSequence", "storage", $this->values);
        $request = new Requests\DeleteSlideAnimationMainSequenceRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideAnimationMainSequence
     * Clear main sequence in slide animation.
     */
    public function testDeleteSlideAnimationMainSequence()
    {
        $request = $this->getDeleteSlideAnimationMainSequenceRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationMainSequence", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationMainSequence($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideAnimationMainSequence");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideAnimationMainSequenceInvalidname()
    {
        $request = $this->getDeleteSlideAnimationMainSequenceRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideAnimationMainSequence", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationMainSequence", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationMainSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationMainSequence", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationMainSequence", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationMainSequenceInvalidslideIndex()
    {
        $request = $this->getDeleteSlideAnimationMainSequenceRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideAnimationMainSequence", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationMainSequence", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationMainSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationMainSequence", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationMainSequence", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationMainSequenceInvalidpassword()
    {
        $request = $this->getDeleteSlideAnimationMainSequenceRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideAnimationMainSequence", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationMainSequence", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationMainSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationMainSequence", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationMainSequence", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationMainSequenceInvalidfolder()
    {
        $request = $this->getDeleteSlideAnimationMainSequenceRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideAnimationMainSequence", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationMainSequence", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationMainSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationMainSequence", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationMainSequence", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideAnimationMainSequenceInvalidstorage()
    {
        $request = $this->getDeleteSlideAnimationMainSequenceRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideAnimationMainSequence", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideAnimationMainSequence", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideAnimationMainSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideAnimationMainSequence", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideAnimationMainSequence", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideByIndexRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideByIndex", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideByIndex", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideByIndex", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideByIndex", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideByIndex", "storage", $this->values);
        $request = new Requests\DeleteSlideByIndexRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideByIndex
     * Delete a presentation slide by index.
     */
    public function testDeleteSlideByIndex()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideByIndex");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideByIndexInvalidname()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideByIndex", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidslideIndex()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideByIndex", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidpassword()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideByIndex", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidfolder()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideByIndex", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideByIndexInvalidstorage()
    {
        $request = $this->getDeleteSlideByIndexRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideByIndex", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideByIndex", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideByIndex($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideByIndex", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideByIndex", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteSlideShape", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("deleteSlideShape", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideShape", "storage", $this->values);
        $request = new Requests\DeleteSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideShape
     * Remove a shape.
     */
    public function testDeleteSlideShape()
    {
        $request = $this->getDeleteSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideShapeInvalidname()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapeInvalidslideIndex()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapeInvalidpath()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteSlideShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "path", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapeInvalidshapeIndex()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "deleteSlideShape", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapeInvalidpassword()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapeInvalidfolder()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapeInvalidstorage()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideShapes", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlideShapes", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("deleteSlideShapes", "path", $this->values);
        $testshapes = TestUtils::getTestValue("deleteSlideShapes", "shapes", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlideShapes", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlideShapes", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlideShapes", "storage", $this->values);
        $request = new Requests\DeleteSlideShapesRequest($testname, $testslideIndex, $testpath, $testshapes, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideShapes
     * Remove a range of shapes.
     */
    public function testDeleteSlideShapes()
    {
        $request = $this->getDeleteSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlideShapesInvalidname()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapesInvalidslideIndex()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlideShapes", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapesInvalidpath()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", "deleteSlideShapes", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "path", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapesInvalidshapes()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->shapes = TestUtils::invalidizeValue("shapes", "deleteSlideShapes", $request->shapes, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "shapes", $request->shapes);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "shapes", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "shapes", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapesInvalidpassword()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlideShapes", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapesInvalidfolder()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlideShapes", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlideShapesInvalidstorage()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlideShapes", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesCleanSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "name", $this->values);
        $testslides = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "slides", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesCleanSlidesList", "storage", $this->values);
        $request = new Requests\DeleteSlidesCleanSlidesListRequest($testname, $testslides, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesCleanSlidesList
     * Delete presentation slides.
     */
    public function testDeleteSlidesCleanSlidesList()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesCleanSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidname()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesCleanSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidslides()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->slides = TestUtils::invalidizeValue("slides", "deleteSlidesCleanSlidesList", $request->slides, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "slides", $request->slides);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "slides", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "slides", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidpassword()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesCleanSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidfolder()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesCleanSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesCleanSlidesListInvalidstorage()
    {
        $request = $this->getDeleteSlidesCleanSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesCleanSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesCleanSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesCleanSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesCleanSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesCleanSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesDocumentProperties", "name", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesDocumentProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesDocumentProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesDocumentProperties", "storage", $this->values);
        $request = new Requests\DeleteSlidesDocumentPropertiesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesDocumentProperties
     * Clean document properties.
     */
    public function testDeleteSlidesDocumentProperties()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidname()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesDocumentProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidpassword()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesDocumentProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidfolder()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesDocumentProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertiesInvalidstorage()
    {
        $request = $this->getDeleteSlidesDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesDocumentProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperties", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesDocumentProperty", "name", $this->values);
        $testpropertyName = TestUtils::getTestValue("deleteSlidesDocumentProperty", "propertyName", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesDocumentProperty", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesDocumentProperty", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesDocumentProperty", "storage", $this->values);
        $request = new Requests\DeleteSlidesDocumentPropertyRequest($testname, $testpropertyName, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesDocumentProperty
     * Delete document property.
     */
    public function testDeleteSlidesDocumentProperty()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidname()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesDocumentProperty", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", "deleteSlidesDocumentProperty", $request->propertyName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "propertyName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "propertyName", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidpassword()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesDocumentProperty", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidfolder()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesDocumentProperty", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesDocumentPropertyInvalidstorage()
    {
        $request = $this->getDeleteSlidesDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesDocumentProperty", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesDocumentProperty", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesDocumentProperty", "storage", $this->okToFailValues);
        }
    }
    private function getDeleteSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlidesSlideBackground", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("deleteSlidesSlideBackground", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("deleteSlidesSlideBackground", "password", $this->values);
        $testfolder = TestUtils::getTestValue("deleteSlidesSlideBackground", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("deleteSlidesSlideBackground", "storage", $this->values);
        $request = new Requests\DeleteSlidesSlideBackgroundRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlidesSlideBackground
     * Remove background from a slide.
     */
    public function testDeleteSlidesSlideBackground()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlidesSlideBackground", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "name", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "deleteSlidesSlideBackground", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "slideIndex", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", "deleteSlidesSlideBackground", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "password", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "deleteSlidesSlideBackground", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "folder", $this->okToFailValues);
        }
    }

    public function testDeleteSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getDeleteSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "deleteSlidesSlideBackground", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->deleteSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlidesSlideBackground", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlidesSlideBackground", "storage", $this->okToFailValues);
        }
    }
    private function getDownloadFileRequest()
    {
        $testpath = TestUtils::getTestValue("downloadFile", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("downloadFile", "storageName", $this->values);
        $testversionId = TestUtils::getTestValue("downloadFile", "versionId", $this->values);
        $request = new Requests\DownloadFileRequest($testpath, $teststorageName, $testversionId);
        return $request;
    }

    /**
     * Test case for downloadFile
     * Download file
     */
    public function testDownloadFile()
    {
        $request = $this->getDownloadFileRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("downloadFile", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->downloadFile($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "downloadFile");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testDownloadFileInvalidpath()
    {
        $request = $this->getDownloadFileRequest();
        $request->path = TestUtils::invalidizeValue("path", "downloadFile", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("downloadFile", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->downloadFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "downloadFile", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("downloadFile", "path", $this->okToFailValues);
        }
    }

    public function testDownloadFileInvalidstorageName()
    {
        $request = $this->getDownloadFileRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "downloadFile", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("downloadFile", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->downloadFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "downloadFile", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("downloadFile", "storageName", $this->okToFailValues);
        }
    }

    public function testDownloadFileInvalidversionId()
    {
        $request = $this->getDownloadFileRequest();
        $request->versionId = TestUtils::invalidizeValue("versionId", "downloadFile", $request->versionId, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("downloadFile", "versionId", $request->versionId);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->downloadFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "downloadFile", "versionId", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("downloadFile", "versionId", $this->okToFailValues);
        }
    }
    private function getGetDiscUsageRequest()
    {
        $teststorageName = TestUtils::getTestValue("getDiscUsage", "storageName", $this->values);
        $request = new Requests\GetDiscUsageRequest($teststorageName);
        return $request;
    }

    /**
     * Test case for getDiscUsage
     * Get disc usage
     */
    public function testGetDiscUsage()
    {
        $request = $this->getGetDiscUsageRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getDiscUsage", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getDiscUsage($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getDiscUsage");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetDiscUsageInvalidstorageName()
    {
        $request = $this->getGetDiscUsageRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "getDiscUsage", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getDiscUsage", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getDiscUsage($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getDiscUsage", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getDiscUsage", "storageName", $this->okToFailValues);
        }
    }
    private function getGetFileVersionsRequest()
    {
        $testpath = TestUtils::getTestValue("getFileVersions", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("getFileVersions", "storageName", $this->values);
        $request = new Requests\GetFileVersionsRequest($testpath, $teststorageName);
        return $request;
    }

    /**
     * Test case for getFileVersions
     * Get file versions
     */
    public function testGetFileVersions()
    {
        $request = $this->getGetFileVersionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getFileVersions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getFileVersions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getFileVersions");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetFileVersionsInvalidpath()
    {
        $request = $this->getGetFileVersionsRequest();
        $request->path = TestUtils::invalidizeValue("path", "getFileVersions", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getFileVersions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getFileVersions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getFileVersions", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getFileVersions", "path", $this->okToFailValues);
        }
    }

    public function testGetFileVersionsInvalidstorageName()
    {
        $request = $this->getGetFileVersionsRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "getFileVersions", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getFileVersions", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getFileVersions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getFileVersions", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getFileVersions", "storageName", $this->okToFailValues);
        }
    }
    private function getGetFilesListRequest()
    {
        $testpath = TestUtils::getTestValue("getFilesList", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("getFilesList", "storageName", $this->values);
        $request = new Requests\GetFilesListRequest($testpath, $teststorageName);
        return $request;
    }

    /**
     * Test case for getFilesList
     * Get all files and folders within a folder
     */
    public function testGetFilesList()
    {
        $request = $this->getGetFilesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getFilesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getFilesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getFilesList");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetFilesListInvalidpath()
    {
        $request = $this->getGetFilesListRequest();
        $request->path = TestUtils::invalidizeValue("path", "getFilesList", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getFilesList", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getFilesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getFilesList", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getFilesList", "path", $this->okToFailValues);
        }
    }

    public function testGetFilesListInvalidstorageName()
    {
        $request = $this->getGetFilesListRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "getFilesList", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getFilesList", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getFilesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getFilesList", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getFilesList", "storageName", $this->okToFailValues);
        }
    }
    private function getGetLayoutSlideRequest()
    {
        $testname = TestUtils::getTestValue("getLayoutSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getLayoutSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getLayoutSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getLayoutSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getLayoutSlide", "storage", $this->values);
        $request = new Requests\GetLayoutSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getLayoutSlide
     * Read presentation layoutSlide info.
     */
    public function testGetLayoutSlide()
    {
        $request = $this->getGetLayoutSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getLayoutSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetLayoutSlideInvalidname()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getLayoutSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidslideIndex()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getLayoutSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidpassword()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getLayoutSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidfolder()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getLayoutSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlideInvalidstorage()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getLayoutSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetLayoutSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getLayoutSlidesList", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getLayoutSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getLayoutSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getLayoutSlidesList", "storage", $this->values);
        $request = new Requests\GetLayoutSlidesListRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getLayoutSlidesList
     * Read presentation layoutSlides info.
     */
    public function testGetLayoutSlidesList()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getLayoutSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetLayoutSlidesListInvalidname()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "getLayoutSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlidesListInvalidpassword()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "getLayoutSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlidesListInvalidfolder()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getLayoutSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testGetLayoutSlidesListInvalidstorage()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getLayoutSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getLayoutSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getGetMasterSlideRequest()
    {
        $testname = TestUtils::getTestValue("getMasterSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getMasterSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getMasterSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getMasterSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getMasterSlide", "storage", $this->values);
        $request = new Requests\GetMasterSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getMasterSlide
     * Read presentation masterSlide info.
     */
    public function testGetMasterSlide()
    {
        $request = $this->getGetMasterSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getMasterSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetMasterSlideInvalidname()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getMasterSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidslideIndex()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getMasterSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidpassword()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getMasterSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidfolder()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getMasterSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetMasterSlideInvalidstorage()
    {
        $request = $this->getGetMasterSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getMasterSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetMasterSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getMasterSlidesList", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getMasterSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getMasterSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getMasterSlidesList", "storage", $this->values);
        $request = new Requests\GetMasterSlidesListRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getMasterSlidesList
     * Read presentation masterSlides info.
     */
    public function testGetMasterSlidesList()
    {
        $request = $this->getGetMasterSlidesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getMasterSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetMasterSlidesListInvalidname()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "getMasterSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testGetMasterSlidesListInvalidpassword()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "getMasterSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testGetMasterSlidesListInvalidfolder()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getMasterSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testGetMasterSlidesListInvalidstorage()
    {
        $request = $this->getGetMasterSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getMasterSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getMasterSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getMasterSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getMasterSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getMasterSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlide", "storage", $this->values);
        $request = new Requests\GetNotesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlide
     * Read notes slide info.
     */
    public function testGetNotesSlide()
    {
        $request = $this->getGetNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideInvalidname()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidpassword()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidfolder()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideInvalidstorage()
    {
        $request = $this->getGetNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getNotesSlideShape", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShape", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShape", "storage", $this->values);
        $request = new Requests\GetNotesSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShape
     * Read slide shape info.
     */
    public function testGetNotesSlideShape()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideShapeInvalidname()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeInvalidpath()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "getNotesSlideShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "path", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getNotesSlideShape", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapeParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapeParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getNotesSlideShapeParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapeParagraph", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getNotesSlideShapeParagraph", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShapeParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShapeParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShapeParagraph", "storage", $this->values);
        $request = new Requests\GetNotesSlideShapeParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapeParagraph
     * Read shape paragraph info.
     */
    public function testGetNotesSlideShapeParagraph()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidname()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapeParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShapeParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidpath()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "getNotesSlideShapeParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "path", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getNotesSlideShapeParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getNotesSlideShapeParagraph", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShapeParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShapeParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShapeParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapeParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "storage", $this->values);
        $request = new Requests\GetNotesSlideShapeParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapeParagraphs
     * Read shape paragraphs info.
     */
    public function testGetNotesSlideShapeParagraphs()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidname()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapeParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShapeParagraphs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidpath()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", "getNotesSlideShapeParagraphs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "path", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getNotesSlideShapeParagraphs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShapeParagraphs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShapeParagraphs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShapeParagraphs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapePortionRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapePortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getNotesSlideShapePortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "paragraphIndex", $this->values);
        $testportionIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "portionIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShapePortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShapePortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShapePortion", "storage", $this->values);
        $request = new Requests\GetNotesSlideShapePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapePortion
     * Read paragraph portion info.
     */
    public function testGetNotesSlideShapePortion()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapePortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideShapePortionInvalidname()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShapePortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidpath()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "getNotesSlideShapePortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "path", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getNotesSlideShapePortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidparagraphIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getNotesSlideShapePortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidportionIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", "getNotesSlideShapePortion", $request->portionIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "portionIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "portionIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShapePortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShapePortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShapePortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapePortionsRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapePortions", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapePortions", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getNotesSlideShapePortions", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapePortions", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getNotesSlideShapePortions", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShapePortions", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShapePortions", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShapePortions", "storage", $this->values);
        $request = new Requests\GetNotesSlideShapePortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapePortions
     * Read paragraph portions info.
     */
    public function testGetNotesSlideShapePortions()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapePortions");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidname()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapePortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShapePortions", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidpath()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", "getNotesSlideShapePortions", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "path", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getNotesSlideShapePortions", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidparagraphIndex()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getNotesSlideShapePortions", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShapePortions", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShapePortions", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShapePortions", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapes", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapes", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getNotesSlideShapes", "path", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShapes", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShapes", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShapes", "storage", $this->values);
        $request = new Requests\GetNotesSlideShapesRequest($testname, $testslideIndex, $testpath, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapes
     * Read slide shapes info.
     */
    public function testGetNotesSlideShapes()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetNotesSlideShapesInvalidname()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapesInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShapes", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapesInvalidpath()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", "getNotesSlideShapes", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "path", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapesInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShapes", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapesInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShapes", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapesInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShapes", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideWithFormat", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideWithFormat", "slideIndex", $this->values);
        $testformat = TestUtils::getTestValue("getNotesSlideWithFormat", "format", $this->values);
        $testwidth = TestUtils::getTestValue("getNotesSlideWithFormat", "width", $this->values);
        $testheight = TestUtils::getTestValue("getNotesSlideWithFormat", "height", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideWithFormat", "storage", $this->values);
        $testfontsFolder = TestUtils::getTestValue("getNotesSlideWithFormat", "fontsFolder", $this->values);
        $request = new Requests\GetNotesSlideWithFormatRequest($testname, $testslideIndex, $testformat, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for getNotesSlideWithFormat
     * Convert notes slide to the specified image format.
     */
    public function testGetNotesSlideWithFormat()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetNotesSlideWithFormatInvalidname()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideWithFormat", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidformat()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getNotesSlideWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidwidth()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->width = TestUtils::invalidizeValue("width", "getNotesSlideWithFormat", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "width", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidheight()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->height = TestUtils::invalidizeValue("height", "getNotesSlideWithFormat", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "height", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidpassword()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidfolder()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidstorage()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "storage", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetNotesSlideWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "getNotesSlideWithFormat", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getNotesSlideWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideWithFormat", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideWithFormat", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getGetParagraphPortionRequest()
    {
        $testname = TestUtils::getTestValue("getParagraphPortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getParagraphPortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getParagraphPortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getParagraphPortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getParagraphPortion", "paragraphIndex", $this->values);
        $testportionIndex = TestUtils::getTestValue("getParagraphPortion", "portionIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getParagraphPortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getParagraphPortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getParagraphPortion", "storage", $this->values);
        $request = new Requests\GetParagraphPortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getParagraphPortion
     * Read paragraph portion info.
     */
    public function testGetParagraphPortion()
    {
        $request = $this->getGetParagraphPortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getParagraphPortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetParagraphPortionInvalidname()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "getParagraphPortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "name", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidslideIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getParagraphPortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidpath()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "getParagraphPortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "path", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidshapeIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getParagraphPortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidparagraphIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getParagraphPortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidportionIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", "getParagraphPortion", $request->portionIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "portionIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "portionIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidpassword()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "getParagraphPortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "password", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidfolder()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getParagraphPortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "folder", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionInvalidstorage()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getParagraphPortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "storage", $this->okToFailValues);
        }
    }
    private function getGetParagraphPortionsRequest()
    {
        $testname = TestUtils::getTestValue("getParagraphPortions", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getParagraphPortions", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getParagraphPortions", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getParagraphPortions", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getParagraphPortions", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getParagraphPortions", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getParagraphPortions", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getParagraphPortions", "storage", $this->values);
        $request = new Requests\GetParagraphPortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getParagraphPortions
     * Read paragraph portions info.
     */
    public function testGetParagraphPortions()
    {
        $request = $this->getGetParagraphPortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getParagraphPortions");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetParagraphPortionsInvalidname()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getParagraphPortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "name", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidslideIndex()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getParagraphPortions", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidpath()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", "getParagraphPortions", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "path", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidshapeIndex()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getParagraphPortions", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidparagraphIndex()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getParagraphPortions", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidpassword()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getParagraphPortions", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "password", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidfolder()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getParagraphPortions", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "folder", $this->okToFailValues);
        }
    }

    public function testGetParagraphPortionsInvalidstorage()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getParagraphPortions", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlideAnimationRequest()
    {
        $testname = TestUtils::getTestValue("getSlideAnimation", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlideAnimation", "slideIndex", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getSlideAnimation", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlideAnimation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlideAnimation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlideAnimation", "storage", $this->values);
        $request = new Requests\GetSlideAnimationRequest($testname, $testslideIndex, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideAnimation
     * Read slide animation effects.
     */
    public function testGetSlideAnimation()
    {
        $request = $this->getGetSlideAnimationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideAnimation");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlideAnimationInvalidname()
    {
        $request = $this->getGetSlideAnimationRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideAnimation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideAnimation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideAnimation", "name", $this->okToFailValues);
        }
    }

    public function testGetSlideAnimationInvalidslideIndex()
    {
        $request = $this->getGetSlideAnimationRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlideAnimation", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideAnimation", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideAnimation", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideAnimationInvalidshapeIndex()
    {
        $request = $this->getGetSlideAnimationRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getSlideAnimation", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideAnimation", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideAnimation", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideAnimationInvalidpassword()
    {
        $request = $this->getGetSlideAnimationRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlideAnimation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideAnimation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideAnimation", "password", $this->okToFailValues);
        }
    }

    public function testGetSlideAnimationInvalidfolder()
    {
        $request = $this->getGetSlideAnimationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlideAnimation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideAnimation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideAnimation", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlideAnimationInvalidstorage()
    {
        $request = $this->getGetSlideAnimationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlideAnimation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideAnimation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideAnimation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideAnimation", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlideShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getSlideShape", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getSlideShape", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlideShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlideShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlideShape", "storage", $this->values);
        $request = new Requests\GetSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShape
     * Read slide shape info.
     */
    public function testGetSlideShape()
    {
        $request = $this->getGetSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlideShapeInvalidname()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "name", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeInvalidslideIndex()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlideShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeInvalidpath()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "getSlideShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "path", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeInvalidshapeIndex()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getSlideShape", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeInvalidpassword()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlideShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "password", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeInvalidfolder()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlideShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeInvalidstorage()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlideShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlideShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShapeParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlideShapeParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getSlideShapeParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getSlideShapeParagraph", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getSlideShapeParagraph", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlideShapeParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlideShapeParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlideShapeParagraph", "storage", $this->values);
        $request = new Requests\GetSlideShapeParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShapeParagraph
     * Read shape paragraph info.
     */
    public function testGetSlideShapeParagraph()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlideShapeParagraphInvalidname()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShapeParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "name", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidslideIndex()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlideShapeParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidpath()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "getSlideShapeParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "path", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getSlideShapeParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getSlideShapeParagraph", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidpassword()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlideShapeParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "password", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidfolder()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlideShapeParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphInvalidstorage()
    {
        $request = $this->getGetSlideShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlideShapeParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraph", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlideShapeParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShapeParagraphs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlideShapeParagraphs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getSlideShapeParagraphs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getSlideShapeParagraphs", "shapeIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlideShapeParagraphs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlideShapeParagraphs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlideShapeParagraphs", "storage", $this->values);
        $request = new Requests\GetSlideShapeParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShapeParagraphs
     * Read shape paragraphs info.
     */
    public function testGetSlideShapeParagraphs()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapeParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlideShapeParagraphsInvalidname()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShapeParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "name", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphsInvalidslideIndex()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlideShapeParagraphs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphsInvalidpath()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", "getSlideShapeParagraphs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "path", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphsInvalidshapeIndex()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getSlideShapeParagraphs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphsInvalidpassword()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlideShapeParagraphs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "password", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphsInvalidfolder()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlideShapeParagraphs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlideShapeParagraphsInvalidstorage()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlideShapeParagraphs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShapes", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlideShapes", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getSlideShapes", "path", $this->values);
        $testpassword = TestUtils::getTestValue("getSlideShapes", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlideShapes", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlideShapes", "storage", $this->values);
        $request = new Requests\GetSlideShapesRequest($testname, $testslideIndex, $testpath, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShapes
     * Read slide shapes info.
     */
    public function testGetSlideShapes()
    {
        $request = $this->getGetSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlideShapesInvalidname()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "name", $this->okToFailValues);
        }
    }

    public function testGetSlideShapesInvalidslideIndex()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlideShapes", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlideShapesInvalidpath()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", "getSlideShapes", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "path", $this->okToFailValues);
        }
    }

    public function testGetSlideShapesInvalidpassword()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlideShapes", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "password", $this->okToFailValues);
        }
    }

    public function testGetSlideShapesInvalidfolder()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlideShapes", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlideShapesInvalidstorage()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlideShapes", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesApiInfoRequest()
    {
        $request = new Requests\GetSlidesApiInfoRequest();
        return $request;
    }

    /**
     * Test case for getSlidesApiInfo
     * Get API info.
     */
    public function testGetSlidesApiInfo()
    {
        $request = $this->getGetSlidesApiInfoRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesApiInfo", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesApiInfo($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesApiInfo");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }
    private function getGetSlidesDocumentRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocument", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocument", "password", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocument", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocument", "folder", $this->values);
        $request = new Requests\GetSlidesDocumentRequest($testname, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for getSlidesDocument
     * Read presentation info.
     */
    public function testGetSlidesDocument()
    {
        $request = $this->getGetSlidesDocumentRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocument");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesDocumentInvalidname()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocument", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocument", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocument", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "storage", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocument", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocument", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocument", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocument", "folder", $this->okToFailValues);
        }
    }
    private function getGetSlidesDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentProperties", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocumentProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocumentProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocumentProperties", "storage", $this->values);
        $request = new Requests\GetSlidesDocumentPropertiesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesDocumentProperties
     * Read presentation document properties.
     */
    public function testGetSlidesDocumentProperties()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidname()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocumentProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocumentProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocumentProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertiesInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocumentProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperties", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesDocumentProperty", "name", $this->values);
        $testpropertyName = TestUtils::getTestValue("getSlidesDocumentProperty", "propertyName", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesDocumentProperty", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesDocumentProperty", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesDocumentProperty", "storage", $this->values);
        $request = new Requests\GetSlidesDocumentPropertyRequest($testname, $testpropertyName, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesDocumentProperty
     * Read presentation document property.
     */
    public function testGetSlidesDocumentProperty()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidname()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesDocumentProperty", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", "getSlidesDocumentProperty", $request->propertyName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "propertyName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "propertyName", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidpassword()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesDocumentProperty", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidfolder()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesDocumentProperty", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesDocumentPropertyInvalidstorage()
    {
        $request = $this->getGetSlidesDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesDocumentProperty", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesDocumentProperty", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesDocumentProperty", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesImageWithDefaultFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesImageWithDefaultFormat", "name", $this->values);
        $testindex = TestUtils::getTestValue("getSlidesImageWithDefaultFormat", "index", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesImageWithDefaultFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesImageWithDefaultFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesImageWithDefaultFormat", "storage", $this->values);
        $request = new Requests\GetSlidesImageWithDefaultFormatRequest($testname, $testindex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesImageWithDefaultFormat
     * Get image binary data.
     */
    public function testGetSlidesImageWithDefaultFormat()
    {
        $request = $this->getGetSlidesImageWithDefaultFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithDefaultFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithDefaultFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesImageWithDefaultFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetSlidesImageWithDefaultFormatInvalidname()
    {
        $request = $this->getGetSlidesImageWithDefaultFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesImageWithDefaultFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithDefaultFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithDefaultFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithDefaultFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithDefaultFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithDefaultFormatInvalidindex()
    {
        $request = $this->getGetSlidesImageWithDefaultFormatRequest();
        $request->index = TestUtils::invalidizeValue("index", "getSlidesImageWithDefaultFormat", $request->index, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithDefaultFormat", "index", $request->index);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithDefaultFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithDefaultFormat", "index", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithDefaultFormat", "index", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithDefaultFormatInvalidpassword()
    {
        $request = $this->getGetSlidesImageWithDefaultFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesImageWithDefaultFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithDefaultFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithDefaultFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithDefaultFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithDefaultFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithDefaultFormatInvalidfolder()
    {
        $request = $this->getGetSlidesImageWithDefaultFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesImageWithDefaultFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithDefaultFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithDefaultFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithDefaultFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithDefaultFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithDefaultFormatInvalidstorage()
    {
        $request = $this->getGetSlidesImageWithDefaultFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesImageWithDefaultFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithDefaultFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithDefaultFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithDefaultFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithDefaultFormat", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesImageWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesImageWithFormat", "name", $this->values);
        $testindex = TestUtils::getTestValue("getSlidesImageWithFormat", "index", $this->values);
        $testformat = TestUtils::getTestValue("getSlidesImageWithFormat", "format", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesImageWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesImageWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesImageWithFormat", "storage", $this->values);
        $request = new Requests\GetSlidesImageWithFormatRequest($testname, $testindex, $testformat, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesImageWithFormat
     * Get image in specified format.
     */
    public function testGetSlidesImageWithFormat()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesImageWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetSlidesImageWithFormatInvalidname()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesImageWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidindex()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->index = TestUtils::invalidizeValue("index", "getSlidesImageWithFormat", $request->index, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "index", $request->index);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "index", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "index", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidformat()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getSlidesImageWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidpassword()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesImageWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidfolder()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesImageWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesImageWithFormatInvalidstorage()
    {
        $request = $this->getGetSlidesImageWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesImageWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImageWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImageWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImageWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImageWithFormat", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesImagesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesImages", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesImages", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesImages", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesImages", "storage", $this->values);
        $request = new Requests\GetSlidesImagesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesImages
     * Read presentation images info.
     */
    public function testGetSlidesImages()
    {
        $request = $this->getGetSlidesImagesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesImages");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesImagesInvalidname()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesImages", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesImagesInvalidpassword()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesImages", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesImagesInvalidfolder()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesImages", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesImagesInvalidstorage()
    {
        $request = $this->getGetSlidesImagesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesImages", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesImages", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesImages", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesImages", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesPlaceholderRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPlaceholder", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesPlaceholder", "slideIndex", $this->values);
        $testplaceholderIndex = TestUtils::getTestValue("getSlidesPlaceholder", "placeholderIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesPlaceholder", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesPlaceholder", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesPlaceholder", "storage", $this->values);
        $request = new Requests\GetSlidesPlaceholderRequest($testname, $testslideIndex, $testplaceholderIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesPlaceholder
     * Read slide placeholder info.
     */
    public function testGetSlidesPlaceholder()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPlaceholder");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesPlaceholderInvalidname()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesPlaceholder", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidslideIndex()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesPlaceholder", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidplaceholderIndex()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->placeholderIndex = TestUtils::invalidizeValue("placeholderIndex", "getSlidesPlaceholder", $request->placeholderIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "placeholderIndex", $request->placeholderIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "placeholderIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "placeholderIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidpassword()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesPlaceholder", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidfolder()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesPlaceholder", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholderInvalidstorage()
    {
        $request = $this->getGetSlidesPlaceholderRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesPlaceholder", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholder", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholder", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholder", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesPlaceholdersRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPlaceholders", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesPlaceholders", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesPlaceholders", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesPlaceholders", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesPlaceholders", "storage", $this->values);
        $request = new Requests\GetSlidesPlaceholdersRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesPlaceholders
     * Read slide placeholders info.
     */
    public function testGetSlidesPlaceholders()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPlaceholders");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesPlaceholdersInvalidname()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesPlaceholders", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidslideIndex()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesPlaceholders", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidpassword()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesPlaceholders", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidfolder()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesPlaceholders", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesPlaceholdersInvalidstorage()
    {
        $request = $this->getGetSlidesPlaceholdersRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesPlaceholders", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPlaceholders", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPlaceholders($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPlaceholders", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPlaceholders", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesPresentationTextItemsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesPresentationTextItems", "name", $this->values);
        $testwithEmpty = TestUtils::getTestValue("getSlidesPresentationTextItems", "withEmpty", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesPresentationTextItems", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesPresentationTextItems", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesPresentationTextItems", "storage", $this->values);
        $request = new Requests\GetSlidesPresentationTextItemsRequest($testname, $testwithEmpty, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesPresentationTextItems
     * Extract presentation text items.
     */
    public function testGetSlidesPresentationTextItems()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesPresentationTextItems");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidname()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesPresentationTextItems", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidwithEmpty()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->withEmpty = TestUtils::invalidizeValue("withEmpty", "getSlidesPresentationTextItems", $request->withEmpty, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "withEmpty", $request->withEmpty);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "withEmpty", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "withEmpty", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidpassword()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesPresentationTextItems", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidfolder()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesPresentationTextItems", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesPresentationTextItemsInvalidstorage()
    {
        $request = $this->getGetSlidesPresentationTextItemsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesPresentationTextItems", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesPresentationTextItems", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesPresentationTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesPresentationTextItems", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesPresentationTextItems", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlide", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlide", "storage", $this->values);
        $request = new Requests\GetSlidesSlideRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlide
     * Read presentation slide info.
     */
    public function testGetSlidesSlide()
    {
        $request = $this->getGetSlidesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesSlideInvalidname()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidpassword()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidfolder()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideInvalidstorage()
    {
        $request = $this->getGetSlidesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideBackground", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideBackground", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideBackground", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideBackground", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideBackground", "storage", $this->values);
        $request = new Requests\GetSlidesSlideBackgroundRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideBackground
     * Read slide background info.
     */
    public function testGetSlidesSlideBackground()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideBackground", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideBackground", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideBackground", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideBackground", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getGetSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideBackground", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideBackground", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideBackground", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideCommentsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideComments", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideComments", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideComments", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideComments", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideComments", "storage", $this->values);
        $request = new Requests\GetSlidesSlideCommentsRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideComments
     * Read presentation slide comments.
     */
    public function testGetSlidesSlideComments()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideComments");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesSlideCommentsInvalidname()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideComments", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideComments", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidpassword()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideComments", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidfolder()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideComments", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideCommentsInvalidstorage()
    {
        $request = $this->getGetSlidesSlideCommentsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideComments", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideComments", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideComments($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideComments", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideComments", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideImagesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideImages", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideImages", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideImages", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideImages", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideImages", "storage", $this->values);
        $request = new Requests\GetSlidesSlideImagesRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideImages
     * Read slide images info.
     */
    public function testGetSlidesSlideImages()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideImages");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesSlideImagesInvalidname()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideImages", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideImages", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidpassword()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideImages", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidfolder()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideImages", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideImagesInvalidstorage()
    {
        $request = $this->getGetSlidesSlideImagesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideImages", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideImages", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideImages($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideImages", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideImages", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlideTextItemsRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlideTextItems", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesSlideTextItems", "slideIndex", $this->values);
        $testwithEmpty = TestUtils::getTestValue("getSlidesSlideTextItems", "withEmpty", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlideTextItems", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlideTextItems", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlideTextItems", "storage", $this->values);
        $request = new Requests\GetSlidesSlideTextItemsRequest($testname, $testslideIndex, $testwithEmpty, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlideTextItems
     * Extract slide text items.
     */
    public function testGetSlidesSlideTextItems()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlideTextItems");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidname()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlideTextItems", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidslideIndex()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesSlideTextItems", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidwithEmpty()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->withEmpty = TestUtils::invalidizeValue("withEmpty", "getSlidesSlideTextItems", $request->withEmpty, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "withEmpty", $request->withEmpty);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "withEmpty", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "withEmpty", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidpassword()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlideTextItems", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidfolder()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlideTextItems", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlideTextItemsInvalidstorage()
    {
        $request = $this->getGetSlidesSlideTextItemsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlideTextItems", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlideTextItems", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlideTextItems($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlideTextItems", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlideTextItems", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesSlidesList", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesSlidesList", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesSlidesList", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesSlidesList", "storage", $this->values);
        $request = new Requests\GetSlidesSlidesListRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesSlidesList
     * Read presentation slides info.
     */
    public function testGetSlidesSlidesList()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesSlidesListInvalidname()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesSlidesList", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlidesListInvalidpassword()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesSlidesList", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlidesListInvalidfolder()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesSlidesList", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesSlidesListInvalidstorage()
    {
        $request = $this->getGetSlidesSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesSlidesList", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesSlidesList", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesSlidesList", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesTheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesTheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesTheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesTheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesTheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesTheme
     * Read slide theme info.
     */
    public function testGetSlidesTheme()
    {
        $request = $this->getGetSlidesThemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesTheme");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesThemeInvalidname()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesTheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesTheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesTheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesTheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesTheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesTheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeColorSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeColorScheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeColorScheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesThemeColorScheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesThemeColorScheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesThemeColorScheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeColorSchemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeColorScheme
     * Read slide theme color scheme info.
     */
    public function testGetSlidesThemeColorScheme()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeColorScheme");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesThemeColorScheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesThemeColorScheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesThemeColorScheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesThemeColorScheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesThemeColorScheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeColorScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeFontSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeFontScheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeFontScheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesThemeFontScheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesThemeFontScheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesThemeFontScheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeFontSchemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeFontScheme
     * Read slide theme font scheme info.
     */
    public function testGetSlidesThemeFontScheme()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeFontScheme");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesThemeFontScheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesThemeFontScheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesThemeFontScheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesThemeFontScheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesThemeFontScheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFontScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesThemeFormatSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeFormatScheme", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeFormatScheme", "slideIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesThemeFormatScheme", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesThemeFormatScheme", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesThemeFormatScheme", "storage", $this->values);
        $request = new Requests\GetSlidesThemeFormatSchemeRequest($testname, $testslideIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeFormatScheme
     * Read slide theme format scheme info.
     */
    public function testGetSlidesThemeFormatScheme()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeFormatScheme");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesThemeFormatScheme", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getSlidesThemeFormatScheme", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidpassword()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesThemeFormatScheme", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesThemeFormatScheme", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesThemeFormatScheme", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesThemeFormatScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "storage", $this->okToFailValues);
        }
    }
    private function getGetSlidesViewPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesViewProperties", "name", $this->values);
        $testpassword = TestUtils::getTestValue("getSlidesViewProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getSlidesViewProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getSlidesViewProperties", "storage", $this->values);
        $request = new Requests\GetSlidesViewPropertiesRequest($testname, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesViewProperties
     * Read presentation document properties.
     */
    public function testGetSlidesViewProperties()
    {
        $request = $this->getGetSlidesViewPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesViewProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesViewProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testGetSlidesViewPropertiesInvalidname()
    {
        $request = $this->getGetSlidesViewPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlidesViewProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesViewProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesViewProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesViewProperties", "name", $this->okToFailValues);
        }
    }

    public function testGetSlidesViewPropertiesInvalidpassword()
    {
        $request = $this->getGetSlidesViewPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "getSlidesViewProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesViewProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesViewProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesViewProperties", "password", $this->okToFailValues);
        }
    }

    public function testGetSlidesViewPropertiesInvalidfolder()
    {
        $request = $this->getGetSlidesViewPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getSlidesViewProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesViewProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesViewProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesViewProperties", "folder", $this->okToFailValues);
        }
    }

    public function testGetSlidesViewPropertiesInvalidstorage()
    {
        $request = $this->getGetSlidesViewPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getSlidesViewProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlidesViewProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->getSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesViewProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesViewProperties", "storage", $this->okToFailValues);
        }
    }
    private function getMoveFileRequest()
    {
        $testsrcPath = TestUtils::getTestValue("moveFile", "srcPath", $this->values);
        $testdestPath = TestUtils::getTestValue("moveFile", "destPath", $this->values);
        $testsrcStorageName = TestUtils::getTestValue("moveFile", "srcStorageName", $this->values);
        $testdestStorageName = TestUtils::getTestValue("moveFile", "destStorageName", $this->values);
        $testversionId = TestUtils::getTestValue("moveFile", "versionId", $this->values);
        $request = new Requests\MoveFileRequest($testsrcPath, $testdestPath, $testsrcStorageName, $testdestStorageName, $testversionId);
        return $request;
    }

    /**
     * Test case for moveFile
     * Move file
     */
    public function testMoveFile()
    {
        $request = $this->getMoveFileRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("moveFile", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFile($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "moveFile");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testMoveFileInvalidsrcPath()
    {
        $request = $this->getMoveFileRequest();
        $request->srcPath = TestUtils::invalidizeValue("srcPath", "moveFile", $request->srcPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFile", "srcPath", $request->srcPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFile", "srcPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFile", "srcPath", $this->okToFailValues);
        }
    }

    public function testMoveFileInvaliddestPath()
    {
        $request = $this->getMoveFileRequest();
        $request->destPath = TestUtils::invalidizeValue("destPath", "moveFile", $request->destPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFile", "destPath", $request->destPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFile", "destPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFile", "destPath", $this->okToFailValues);
        }
    }

    public function testMoveFileInvalidsrcStorageName()
    {
        $request = $this->getMoveFileRequest();
        $request->srcStorageName = TestUtils::invalidizeValue("srcStorageName", "moveFile", $request->srcStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFile", "srcStorageName", $request->srcStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFile", "srcStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFile", "srcStorageName", $this->okToFailValues);
        }
    }

    public function testMoveFileInvaliddestStorageName()
    {
        $request = $this->getMoveFileRequest();
        $request->destStorageName = TestUtils::invalidizeValue("destStorageName", "moveFile", $request->destStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFile", "destStorageName", $request->destStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFile", "destStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFile", "destStorageName", $this->okToFailValues);
        }
    }

    public function testMoveFileInvalidversionId()
    {
        $request = $this->getMoveFileRequest();
        $request->versionId = TestUtils::invalidizeValue("versionId", "moveFile", $request->versionId, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFile", "versionId", $request->versionId);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFile", "versionId", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFile", "versionId", $this->okToFailValues);
        }
    }
    private function getMoveFolderRequest()
    {
        $testsrcPath = TestUtils::getTestValue("moveFolder", "srcPath", $this->values);
        $testdestPath = TestUtils::getTestValue("moveFolder", "destPath", $this->values);
        $testsrcStorageName = TestUtils::getTestValue("moveFolder", "srcStorageName", $this->values);
        $testdestStorageName = TestUtils::getTestValue("moveFolder", "destStorageName", $this->values);
        $request = new Requests\MoveFolderRequest($testsrcPath, $testdestPath, $testsrcStorageName, $testdestStorageName);
        return $request;
    }

    /**
     * Test case for moveFolder
     * Move folder
     */
    public function testMoveFolder()
    {
        $request = $this->getMoveFolderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("moveFolder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFolder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "moveFolder");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testMoveFolderInvalidsrcPath()
    {
        $request = $this->getMoveFolderRequest();
        $request->srcPath = TestUtils::invalidizeValue("srcPath", "moveFolder", $request->srcPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFolder", "srcPath", $request->srcPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFolder", "srcPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFolder", "srcPath", $this->okToFailValues);
        }
    }

    public function testMoveFolderInvaliddestPath()
    {
        $request = $this->getMoveFolderRequest();
        $request->destPath = TestUtils::invalidizeValue("destPath", "moveFolder", $request->destPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFolder", "destPath", $request->destPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFolder", "destPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFolder", "destPath", $this->okToFailValues);
        }
    }

    public function testMoveFolderInvalidsrcStorageName()
    {
        $request = $this->getMoveFolderRequest();
        $request->srcStorageName = TestUtils::invalidizeValue("srcStorageName", "moveFolder", $request->srcStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFolder", "srcStorageName", $request->srcStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFolder", "srcStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFolder", "srcStorageName", $this->okToFailValues);
        }
    }

    public function testMoveFolderInvaliddestStorageName()
    {
        $request = $this->getMoveFolderRequest();
        $request->destStorageName = TestUtils::invalidizeValue("destStorageName", "moveFolder", $request->destStorageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("moveFolder", "destStorageName", $request->destStorageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->moveFolder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "moveFolder", "destStorageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("moveFolder", "destStorageName", $this->okToFailValues);
        }
    }
    private function getObjectExistsRequest()
    {
        $testpath = TestUtils::getTestValue("objectExists", "path", $this->values);
        $teststorageName = TestUtils::getTestValue("objectExists", "storageName", $this->values);
        $testversionId = TestUtils::getTestValue("objectExists", "versionId", $this->values);
        $request = new Requests\ObjectExistsRequest($testpath, $teststorageName, $testversionId);
        return $request;
    }

    /**
     * Test case for objectExists
     * Check if file or folder exists
     */
    public function testObjectExists()
    {
        $request = $this->getObjectExistsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("objectExists", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->objectExists($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "objectExists");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testObjectExistsInvalidpath()
    {
        $request = $this->getObjectExistsRequest();
        $request->path = TestUtils::invalidizeValue("path", "objectExists", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("objectExists", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->objectExists($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "objectExists", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("objectExists", "path", $this->okToFailValues);
        }
    }

    public function testObjectExistsInvalidstorageName()
    {
        $request = $this->getObjectExistsRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "objectExists", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("objectExists", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->objectExists($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "objectExists", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("objectExists", "storageName", $this->okToFailValues);
        }
    }

    public function testObjectExistsInvalidversionId()
    {
        $request = $this->getObjectExistsRequest();
        $request->versionId = TestUtils::invalidizeValue("versionId", "objectExists", $request->versionId, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("objectExists", "versionId", $request->versionId);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->objectExists($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "objectExists", "versionId", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("objectExists", "versionId", $this->okToFailValues);
        }
    }
    private function getPostAddNewParagraphRequest()
    {
        $testname = TestUtils::getTestValue("postAddNewParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postAddNewParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postAddNewParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postAddNewParagraph", "shapeIndex", $this->values);
        $testdto = TestUtils::getTestValue("postAddNewParagraph", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postAddNewParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postAddNewParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postAddNewParagraph", "storage", $this->values);
        $testposition = TestUtils::getTestValue("postAddNewParagraph", "position", $this->values);
        $request = new Requests\PostAddNewParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage, $testposition);
        return $request;
    }

    /**
     * Test case for postAddNewParagraph
     * Creates new paragraph.
     */
    public function testPostAddNewParagraph()
    {
        $request = $this->getPostAddNewParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostAddNewParagraphInvalidname()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNewParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "name", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidslideIndex()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postAddNewParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidpath()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "postAddNewParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "path", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidshapeIndex()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postAddNewParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvaliddto()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postAddNewParagraph", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "dto", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidpassword()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "postAddNewParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "password", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidfolder()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postAddNewParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidstorage()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postAddNewParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "storage", $this->okToFailValues);
        }
    }

    public function testPostAddNewParagraphInvalidposition()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->position = TestUtils::invalidizeValue("position", "postAddNewParagraph", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "position", $this->okToFailValues);
        }
    }
    private function getPostAddNewPortionRequest()
    {
        $testname = TestUtils::getTestValue("postAddNewPortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postAddNewPortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postAddNewPortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postAddNewPortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("postAddNewPortion", "paragraphIndex", $this->values);
        $testdto = TestUtils::getTestValue("postAddNewPortion", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postAddNewPortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postAddNewPortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postAddNewPortion", "storage", $this->values);
        $testposition = TestUtils::getTestValue("postAddNewPortion", "position", $this->values);
        $request = new Requests\PostAddNewPortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage, $testposition);
        return $request;
    }

    /**
     * Test case for postAddNewPortion
     * Creates new portion.
     */
    public function testPostAddNewPortion()
    {
        $request = $this->getPostAddNewPortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewPortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostAddNewPortionInvalidname()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNewPortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "name", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidslideIndex()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postAddNewPortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidpath()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "postAddNewPortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "path", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidshapeIndex()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postAddNewPortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidparagraphIndex()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "postAddNewPortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvaliddto()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postAddNewPortion", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "dto", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidpassword()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "postAddNewPortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "password", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidfolder()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postAddNewPortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "folder", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidstorage()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postAddNewPortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "storage", $this->okToFailValues);
        }
    }

    public function testPostAddNewPortionInvalidposition()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->position = TestUtils::invalidizeValue("position", "postAddNewPortion", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "position", $this->okToFailValues);
        }
    }
    private function getPostAddNewShapeRequest()
    {
        $testname = TestUtils::getTestValue("postAddNewShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postAddNewShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postAddNewShape", "path", $this->values);
        $testdto = TestUtils::getTestValue("postAddNewShape", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postAddNewShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postAddNewShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postAddNewShape", "storage", $this->values);
        $testshapeToClone = TestUtils::getTestValue("postAddNewShape", "shapeToClone", $this->values);
        $testposition = TestUtils::getTestValue("postAddNewShape", "position", $this->values);
        $request = new Requests\PostAddNewShapeRequest($testname, $testslideIndex, $testpath, $testdto, $testpassword, $testfolder, $teststorage, $testshapeToClone, $testposition);
        return $request;
    }

    /**
     * Test case for postAddNewShape
     * Create new shape.
     */
    public function testPostAddNewShape()
    {
        $request = $this->getPostAddNewShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostAddNewShapeInvalidname()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNewShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "name", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidslideIndex()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postAddNewShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidpath()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "postAddNewShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "path", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvaliddto()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postAddNewShape", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "dto", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidpassword()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "postAddNewShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "password", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidfolder()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postAddNewShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "folder", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidstorage()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postAddNewShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "storage", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidshapeToClone()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->shapeToClone = TestUtils::invalidizeValue("shapeToClone", "postAddNewShape", $request->shapeToClone, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "shapeToClone", $request->shapeToClone);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "shapeToClone", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "shapeToClone", $this->okToFailValues);
        }
    }

    public function testPostAddNewShapeInvalidposition()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->position = TestUtils::invalidizeValue("position", "postAddNewShape", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "position", $this->okToFailValues);
        }
    }
    private function getPostAddNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("postAddNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postAddNotesSlide", "slideIndex", $this->values);
        $testdto = TestUtils::getTestValue("postAddNotesSlide", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postAddNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postAddNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postAddNotesSlide", "storage", $this->values);
        $request = new Requests\PostAddNotesSlideRequest($testname, $testslideIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postAddNotesSlide
     * Add new notes slide.
     */
    public function testPostAddNotesSlide()
    {
        $request = $this->getPostAddNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostAddNotesSlideInvalidname()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidslideIndex()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postAddNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvaliddto()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postAddNotesSlide", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "dto", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidpassword()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "postAddNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidfolder()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postAddNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPostAddNotesSlideInvalidstorage()
    {
        $request = $this->getPostAddNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postAddNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postAddNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getPostCopyLayoutSlideFromSourcePresentationRequest()
    {
        $testname = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "name", $this->values);
        $testcloneFrom = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $this->values);
        $testcloneFromPosition = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $this->values);
        $testcloneFromPassword = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $this->values);
        $testcloneFromStorage = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $this->values);
        $testpassword = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "storage", $this->values);
        $request = new Requests\PostCopyLayoutSlideFromSourcePresentationRequest($testname, $testcloneFrom, $testcloneFromPosition, $testcloneFromPassword, $testcloneFromStorage, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postCopyLayoutSlideFromSourcePresentation
     * Copy layoutSlide from source presentation.
     */
    public function testPostCopyLayoutSlideFromSourcePresentation()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postCopyLayoutSlideFromSourcePresentation");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidname()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", "postCopyLayoutSlideFromSourcePresentation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "name", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFrom()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFrom = TestUtils::invalidizeValue("cloneFrom", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFrom, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $request->cloneFrom);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromPosition()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromPosition = TestUtils::invalidizeValue("cloneFromPosition", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFromPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $request->cloneFromPosition);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromPassword()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromPassword = TestUtils::invalidizeValue("cloneFromPassword", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFromPassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $request->cloneFromPassword);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromPassword", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromStorage()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromStorage = TestUtils::invalidizeValue("cloneFromStorage", "postCopyLayoutSlideFromSourcePresentation", $request->cloneFromStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $request->cloneFromStorage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidpassword()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", "postCopyLayoutSlideFromSourcePresentation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "password", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidfolder()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postCopyLayoutSlideFromSourcePresentation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "folder", $this->okToFailValues);
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidstorage()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postCopyLayoutSlideFromSourcePresentation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyLayoutSlideFromSourcePresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "storage", $this->okToFailValues);
        }
    }
    private function getPostCopyMasterSlideFromSourcePresentationRequest()
    {
        $testname = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "name", $this->values);
        $testcloneFrom = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $this->values);
        $testcloneFromPosition = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $this->values);
        $testcloneFromPassword = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $this->values);
        $testcloneFromStorage = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $this->values);
        $testapplyToAll = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "applyToAll", $this->values);
        $testpassword = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postCopyMasterSlideFromSourcePresentation", "storage", $this->values);
        $request = new Requests\PostCopyMasterSlideFromSourcePresentationRequest($testname, $testcloneFrom, $testcloneFromPosition, $testcloneFromPassword, $testcloneFromStorage, $testapplyToAll, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postCopyMasterSlideFromSourcePresentation
     * Copy masterSlide from source presentation.
     */
    public function testPostCopyMasterSlideFromSourcePresentation()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postCopyMasterSlideFromSourcePresentation");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidname()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", "postCopyMasterSlideFromSourcePresentation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "name", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFrom()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFrom = TestUtils::invalidizeValue("cloneFrom", "postCopyMasterSlideFromSourcePresentation", $request->cloneFrom, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $request->cloneFrom);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFrom", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFrom", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromPosition()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromPosition = TestUtils::invalidizeValue("cloneFromPosition", "postCopyMasterSlideFromSourcePresentation", $request->cloneFromPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $request->cloneFromPosition);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromPosition", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromPassword()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromPassword = TestUtils::invalidizeValue("cloneFromPassword", "postCopyMasterSlideFromSourcePresentation", $request->cloneFromPassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $request->cloneFromPassword);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromPassword", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidcloneFromStorage()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->cloneFromStorage = TestUtils::invalidizeValue("cloneFromStorage", "postCopyMasterSlideFromSourcePresentation", $request->cloneFromStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $request->cloneFromStorage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "cloneFromStorage", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidapplyToAll()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->applyToAll = TestUtils::invalidizeValue("applyToAll", "postCopyMasterSlideFromSourcePresentation", $request->applyToAll, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "applyToAll", $request->applyToAll);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "applyToAll", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "applyToAll", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidpassword()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->password = TestUtils::invalidizeValue("password", "postCopyMasterSlideFromSourcePresentation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "password", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidfolder()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postCopyMasterSlideFromSourcePresentation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "folder", $this->okToFailValues);
        }
    }

    public function testPostCopyMasterSlideFromSourcePresentationInvalidstorage()
    {
        $request = $this->getPostCopyMasterSlideFromSourcePresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postCopyMasterSlideFromSourcePresentation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postCopyMasterSlideFromSourcePresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postCopyMasterSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyMasterSlideFromSourcePresentation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyMasterSlideFromSourcePresentation", "storage", $this->okToFailValues);
        }
    }
    private function getPostNotesSlideAddNewParagraphRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "shapeIndex", $this->values);
        $testdto = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "storage", $this->values);
        $testposition = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "position", $this->values);
        $request = new Requests\PostNotesSlideAddNewParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage, $testposition);
        return $request;
    }

    /**
     * Test case for postNotesSlideAddNewParagraph
     * Creates new paragraph.
     */
    public function testPostNotesSlideAddNewParagraph()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideAddNewParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "name", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postNotesSlideAddNewParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidpath()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "postNotesSlideAddNewParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "path", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postNotesSlideAddNewParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvaliddto()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postNotesSlideAddNewParagraph", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "dto", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidpassword()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "postNotesSlideAddNewParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "password", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidfolder()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postNotesSlideAddNewParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidstorage()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postNotesSlideAddNewParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "storage", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidposition()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->position = TestUtils::invalidizeValue("position", "postNotesSlideAddNewParagraph", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "position", $this->okToFailValues);
        }
    }
    private function getPostNotesSlideAddNewPortionRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideAddNewPortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postNotesSlideAddNewPortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postNotesSlideAddNewPortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideAddNewPortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("postNotesSlideAddNewPortion", "paragraphIndex", $this->values);
        $testdto = TestUtils::getTestValue("postNotesSlideAddNewPortion", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postNotesSlideAddNewPortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postNotesSlideAddNewPortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postNotesSlideAddNewPortion", "storage", $this->values);
        $testposition = TestUtils::getTestValue("postNotesSlideAddNewPortion", "position", $this->values);
        $request = new Requests\PostNotesSlideAddNewPortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage, $testposition);
        return $request;
    }

    /**
     * Test case for postNotesSlideAddNewPortion
     * Creates new portion.
     */
    public function testPostNotesSlideAddNewPortion()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewPortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideAddNewPortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "name", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postNotesSlideAddNewPortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidpath()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "postNotesSlideAddNewPortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "path", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postNotesSlideAddNewPortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidparagraphIndex()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "postNotesSlideAddNewPortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvaliddto()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postNotesSlideAddNewPortion", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "dto", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidpassword()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "postNotesSlideAddNewPortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "password", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidfolder()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postNotesSlideAddNewPortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "folder", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidstorage()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postNotesSlideAddNewPortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "storage", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidposition()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->position = TestUtils::invalidizeValue("position", "postNotesSlideAddNewPortion", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "position", $this->okToFailValues);
        }
    }
    private function getPostNotesSlideAddNewShapeRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideAddNewShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postNotesSlideAddNewShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postNotesSlideAddNewShape", "path", $this->values);
        $testdto = TestUtils::getTestValue("postNotesSlideAddNewShape", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("postNotesSlideAddNewShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postNotesSlideAddNewShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postNotesSlideAddNewShape", "storage", $this->values);
        $testshapeToClone = TestUtils::getTestValue("postNotesSlideAddNewShape", "shapeToClone", $this->values);
        $testposition = TestUtils::getTestValue("postNotesSlideAddNewShape", "position", $this->values);
        $request = new Requests\PostNotesSlideAddNewShapeRequest($testname, $testslideIndex, $testpath, $testdto, $testpassword, $testfolder, $teststorage, $testshapeToClone, $testposition);
        return $request;
    }

    /**
     * Test case for postNotesSlideAddNewShape
     * Create new shape.
     */
    public function testPostNotesSlideAddNewShape()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideAddNewShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "name", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postNotesSlideAddNewShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidpath()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "postNotesSlideAddNewShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "path", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvaliddto()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "postNotesSlideAddNewShape", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "dto", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidpassword()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "postNotesSlideAddNewShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "password", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidfolder()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postNotesSlideAddNewShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "folder", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidstorage()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postNotesSlideAddNewShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "storage", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidshapeToClone()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->shapeToClone = TestUtils::invalidizeValue("shapeToClone", "postNotesSlideAddNewShape", $request->shapeToClone, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "shapeToClone", $request->shapeToClone);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "shapeToClone", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "shapeToClone", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidposition()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->position = TestUtils::invalidizeValue("position", "postNotesSlideAddNewShape", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "position", $this->okToFailValues);
        }
    }
    private function getPostNotesSlideShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "bounds", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PostNotesSlideShapeSaveAsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testformat, $testoptions, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postNotesSlideShapeSaveAs
     * Render shape to specified picture format.
     */
    public function testPostNotesSlideShapeSaveAs()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideShapeSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidname()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideShapeSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postNotesSlideShapeSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidpath()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->path = TestUtils::invalidizeValue("path", "postNotesSlideShapeSaveAs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "path", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postNotesSlideShapeSaveAs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidformat()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "postNotesSlideShapeSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidoptions()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "postNotesSlideShapeSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidpassword()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "postNotesSlideShapeSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidfolder()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postNotesSlideShapeSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidstorage()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postNotesSlideShapeSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidscaleX()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", "postNotesSlideShapeSaveAs", $request->scaleX, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "scaleX", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "scaleX", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidscaleY()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", "postNotesSlideShapeSaveAs", $request->scaleY, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "scaleY", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "scaleY", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidbounds()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", "postNotesSlideShapeSaveAs", $request->bounds, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "bounds", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postNotesSlideShapeSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostPresentationMergeRequest()
    {
        $testname = TestUtils::getTestValue("postPresentationMerge", "name", $this->values);
        $testrequest = TestUtils::getTestValue("postPresentationMerge", "request", $this->values);
        $testpassword = TestUtils::getTestValue("postPresentationMerge", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postPresentationMerge", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postPresentationMerge", "folder", $this->values);
        $request = new Requests\PostPresentationMergeRequest($testname, $testrequest, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postPresentationMerge
     * Merge the presentation with other presentations specified in the request parameter.
     */
    public function testPostPresentationMerge()
    {
        $request = $this->getPostPresentationMergeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postPresentationMerge");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostPresentationMergeInvalidname()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->name = TestUtils::invalidizeValue("name", "postPresentationMerge", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "name", $this->okToFailValues);
        }
    }

    public function testPostPresentationMergeInvalidrequest()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->request = TestUtils::invalidizeValue("request", "postPresentationMerge", $request->request, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", "request", $request->request);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "request", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "request", $this->okToFailValues);
        }
    }

    public function testPostPresentationMergeInvalidpassword()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->password = TestUtils::invalidizeValue("password", "postPresentationMerge", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "password", $this->okToFailValues);
        }
    }

    public function testPostPresentationMergeInvalidstorage()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postPresentationMerge", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "storage", $this->okToFailValues);
        }
    }

    public function testPostPresentationMergeInvalidfolder()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postPresentationMerge", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "folder", $this->okToFailValues);
        }
    }
    private function getPostShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postShapeSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postShapeSaveAs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("postShapeSaveAs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postShapeSaveAs", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("postShapeSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postShapeSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("postShapeSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postShapeSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postShapeSaveAs", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("postShapeSaveAs", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("postShapeSaveAs", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("postShapeSaveAs", "bounds", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postShapeSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PostShapeSaveAsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testformat, $testoptions, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postShapeSaveAs
     * Render shape to specified picture format.
     */
    public function testPostShapeSaveAs()
    {
        $request = $this->getPostShapeSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postShapeSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostShapeSaveAsInvalidname()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "postShapeSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidslideIndex()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postShapeSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidpath()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->path = TestUtils::invalidizeValue("path", "postShapeSaveAs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "path", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postShapeSaveAs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidformat()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "postShapeSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidoptions()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "postShapeSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidpassword()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "postShapeSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidfolder()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postShapeSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidstorage()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postShapeSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidscaleX()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", "postShapeSaveAs", $request->scaleX, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "scaleX", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "scaleX", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidscaleY()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", "postShapeSaveAs", $request->scaleY, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "scaleY", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "scaleY", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidbounds()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", "postShapeSaveAs", $request->bounds, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "bounds", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postShapeSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlideAnimationEffectRequest()
    {
        $testname = TestUtils::getTestValue("postSlideAnimationEffect", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlideAnimationEffect", "slideIndex", $this->values);
        $testeffect = TestUtils::getTestValue("postSlideAnimationEffect", "effect", $this->values);
        $testpassword = TestUtils::getTestValue("postSlideAnimationEffect", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlideAnimationEffect", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlideAnimationEffect", "storage", $this->values);
        $request = new Requests\PostSlideAnimationEffectRequest($testname, $testslideIndex, $testeffect, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlideAnimationEffect
     * Add an effect to slide animation.
     */
    public function testPostSlideAnimationEffect()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlideAnimationEffect");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlideAnimationEffectInvalidname()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlideAnimationEffect", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationEffect", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationEffect", "name", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationEffectInvalidslideIndex()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlideAnimationEffect", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationEffect", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationEffect", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationEffectInvalideffect()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        $request->effect = TestUtils::invalidizeValue("effect", "postSlideAnimationEffect", $request->effect, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", "effect", $request->effect);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationEffect", "effect", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationEffect", "effect", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationEffectInvalidpassword()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlideAnimationEffect", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationEffect", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationEffect", "password", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationEffectInvalidfolder()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlideAnimationEffect", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationEffect", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationEffect", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationEffectInvalidstorage()
    {
        $request = $this->getPostSlideAnimationEffectRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlideAnimationEffect", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationEffect", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationEffect", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationEffect", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlideAnimationInteractiveSequenceRequest()
    {
        $testname = TestUtils::getTestValue("postSlideAnimationInteractiveSequence", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlideAnimationInteractiveSequence", "slideIndex", $this->values);
        $testsequence = TestUtils::getTestValue("postSlideAnimationInteractiveSequence", "sequence", $this->values);
        $testpassword = TestUtils::getTestValue("postSlideAnimationInteractiveSequence", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlideAnimationInteractiveSequence", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlideAnimationInteractiveSequence", "storage", $this->values);
        $request = new Requests\PostSlideAnimationInteractiveSequenceRequest($testname, $testslideIndex, $testsequence, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlideAnimationInteractiveSequence
     * Set slide animation.
     */
    public function testPostSlideAnimationInteractiveSequence()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlideAnimationInteractiveSequence");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceInvalidname()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlideAnimationInteractiveSequence", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequence", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequence", "name", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceInvalidslideIndex()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlideAnimationInteractiveSequence", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequence", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequence", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceInvalidsequence()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        $request->sequence = TestUtils::invalidizeValue("sequence", "postSlideAnimationInteractiveSequence", $request->sequence, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", "sequence", $request->sequence);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequence", "sequence", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequence", "sequence", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceInvalidpassword()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlideAnimationInteractiveSequence", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequence", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequence", "password", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceInvalidfolder()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlideAnimationInteractiveSequence", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequence", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequence", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceInvalidstorage()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlideAnimationInteractiveSequence", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequence", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequence($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequence", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequence", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlideAnimationInteractiveSequenceEffectRequest()
    {
        $testname = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "slideIndex", $this->values);
        $testsequenceIndex = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $this->values);
        $testeffect = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "effect", $this->values);
        $testpassword = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlideAnimationInteractiveSequenceEffect", "storage", $this->values);
        $request = new Requests\PostSlideAnimationInteractiveSequenceEffectRequest($testname, $testslideIndex, $testsequenceIndex, $testeffect, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlideAnimationInteractiveSequenceEffect
     * Add an animation effect to a slide interactive sequence.
     */
    public function testPostSlideAnimationInteractiveSequenceEffect()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlideAnimationInteractiveSequenceEffect");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalidname()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlideAnimationInteractiveSequenceEffect", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "name", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalidslideIndex()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlideAnimationInteractiveSequenceEffect", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalidsequenceIndex()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->sequenceIndex = TestUtils::invalidizeValue("sequenceIndex", "postSlideAnimationInteractiveSequenceEffect", $request->sequenceIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $request->sequenceIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalideffect()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->effect = TestUtils::invalidizeValue("effect", "postSlideAnimationInteractiveSequenceEffect", $request->effect, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "effect", $request->effect);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "effect", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "effect", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalidpassword()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlideAnimationInteractiveSequenceEffect", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "password", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalidfolder()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlideAnimationInteractiveSequenceEffect", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlideAnimationInteractiveSequenceEffectInvalidstorage()
    {
        $request = $this->getPostSlideAnimationInteractiveSequenceEffectRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlideAnimationInteractiveSequenceEffect", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideAnimationInteractiveSequenceEffect", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideAnimationInteractiveSequenceEffect", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideAnimationInteractiveSequenceEffect", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlideSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postSlideSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlideSaveAs", "slideIndex", $this->values);
        $testformat = TestUtils::getTestValue("postSlideSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postSlideSaveAs", "options", $this->values);
        $testwidth = TestUtils::getTestValue("postSlideSaveAs", "width", $this->values);
        $testheight = TestUtils::getTestValue("postSlideSaveAs", "height", $this->values);
        $testpassword = TestUtils::getTestValue("postSlideSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlideSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlideSaveAs", "storage", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postSlideSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PostSlideSaveAsRequest($testname, $testslideIndex, $testformat, $testoptions, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlideSaveAs
     * Save a slide to a specified format.
     */
    public function testPostSlideSaveAs()
    {
        $request = $this->getPostSlideSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlideSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlideSaveAsInvalidname()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlideSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidslideIndex()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlideSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidformat()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlideSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidoptions()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "postSlideSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidwidth()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->width = TestUtils::invalidizeValue("width", "postSlideSaveAs", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "width", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidheight()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->height = TestUtils::invalidizeValue("height", "postSlideSaveAs", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "height", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidpassword()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlideSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidfolder()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlideSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidstorage()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlideSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlideSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostSlideSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postSlideSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlideSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlideSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlidesAddRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesAdd", "name", $this->values);
        $testposition = TestUtils::getTestValue("postSlidesAdd", "position", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesAdd", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesAdd", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesAdd", "storage", $this->values);
        $testlayoutAlias = TestUtils::getTestValue("postSlidesAdd", "layoutAlias", $this->values);
        $request = new Requests\PostSlidesAddRequest($testname, $testposition, $testpassword, $testfolder, $teststorage, $testlayoutAlias);
        return $request;
    }

    /**
     * Test case for postSlidesAdd
     * Create a slide.
     */
    public function testPostSlidesAdd()
    {
        $request = $this->getPostSlidesAddRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesAdd");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesAddInvalidname()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesAdd", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidposition()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->position = TestUtils::invalidizeValue("position", "postSlidesAdd", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "position", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidpassword()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesAdd", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidfolder()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesAdd", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidstorage()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesAdd", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesAddInvalidlayoutAlias()
    {
        $request = $this->getPostSlidesAddRequest();
        $request->layoutAlias = TestUtils::invalidizeValue("layoutAlias", "postSlidesAdd", $request->layoutAlias, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesAdd", "layoutAlias", $request->layoutAlias);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesAdd($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesAdd", "layoutAlias", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesAdd", "layoutAlias", $this->okToFailValues);
        }
    }
    private function getPostSlidesConvertRequest()
    {
        $testformat = TestUtils::getTestValue("postSlidesConvert", "format", $this->values);
        $testdocument = TestUtils::getStreamValue();
        $testpassword = TestUtils::getTestValue("postSlidesConvert", "password", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postSlidesConvert", "fontsFolder", $this->values);
        $request = new Requests\PostSlidesConvertRequest($testformat, $testdocument, $testpassword, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlidesConvert
     * Convert presentation from request content to format specified.
     */
    public function testPostSlidesConvert()
    {
        $request = $this->getPostSlidesConvertRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesConvert", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesConvert($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesConvert");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlidesConvertInvalidformat()
    {
        $request = $this->getPostSlidesConvertRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlidesConvert", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesConvert", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesConvert", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesConvert", "format", $this->okToFailValues);
        }
    }

    public function testPostSlidesConvertInvaliddocument()
    {
        $request = $this->getPostSlidesConvertRequest();
        $request->document = null;
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesConvert", "document", $request->document);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesConvert", "document", $expectedCode, $expectedMessage);
        } catch (Exception $ex) {
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesConvert", "document", $this->okToFailValues);
        }
    }

    public function testPostSlidesConvertInvalidpassword()
    {
        $request = $this->getPostSlidesConvertRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesConvert", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesConvert", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesConvert", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesConvert", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesConvertInvalidfontsFolder()
    {
        $request = $this->getPostSlidesConvertRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postSlidesConvert", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesConvert", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesConvert", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesConvert", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlidesCopyRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesCopy", "name", $this->values);
        $testslideToCopy = TestUtils::getTestValue("postSlidesCopy", "slideToCopy", $this->values);
        $testposition = TestUtils::getTestValue("postSlidesCopy", "position", $this->values);
        $testsource = TestUtils::getTestValue("postSlidesCopy", "source", $this->values);
        $testsourcePassword = TestUtils::getTestValue("postSlidesCopy", "sourcePassword", $this->values);
        $testsourceStorage = TestUtils::getTestValue("postSlidesCopy", "sourceStorage", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesCopy", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesCopy", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesCopy", "storage", $this->values);
        $request = new Requests\PostSlidesCopyRequest($testname, $testslideToCopy, $testposition, $testsource, $testsourcePassword, $testsourceStorage, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesCopy
     * Copy a slide from the current or another presentation.
     */
    public function testPostSlidesCopy()
    {
        $request = $this->getPostSlidesCopyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesCopy");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesCopyInvalidname()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesCopy", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidslideToCopy()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->slideToCopy = TestUtils::invalidizeValue("slideToCopy", "postSlidesCopy", $request->slideToCopy, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "slideToCopy", $request->slideToCopy);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "slideToCopy", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "slideToCopy", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidposition()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->position = TestUtils::invalidizeValue("position", "postSlidesCopy", $request->position, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "position", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidsource()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->source = TestUtils::invalidizeValue("source", "postSlidesCopy", $request->source, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "source", $request->source);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "source", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "source", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidsourcePassword()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->sourcePassword = TestUtils::invalidizeValue("sourcePassword", "postSlidesCopy", $request->sourcePassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "sourcePassword", $request->sourcePassword);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "sourcePassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "sourcePassword", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidsourceStorage()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->sourceStorage = TestUtils::invalidizeValue("sourceStorage", "postSlidesCopy", $request->sourceStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "sourceStorage", $request->sourceStorage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "sourceStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "sourceStorage", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidpassword()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesCopy", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidfolder()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesCopy", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesCopyInvalidstorage()
    {
        $request = $this->getPostSlidesCopyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesCopy", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesCopy", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesCopy($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesCopy", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesCopy", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesDocumentRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesDocument", "name", $this->values);
        $testdata = TestUtils::getStreamValue();
        $testinputPassword = TestUtils::getTestValue("postSlidesDocument", "inputPassword", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesDocument", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesDocument", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesDocument", "folder", $this->values);
        $request = new Requests\PostSlidesDocumentRequest($testname, $testdata, $testinputPassword, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesDocument
     * Create a presentation.
     */
    public function testPostSlidesDocument()
    {
        $request = $this->getPostSlidesDocumentRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesDocument");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesDocumentInvalidname()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesDocument", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvaliddata()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->data = null;
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "data", $request->data);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "data", $expectedCode, $expectedMessage);
        } catch (Exception $ex) {
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "data", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidinputPassword()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->inputPassword = TestUtils::invalidizeValue("inputPassword", "postSlidesDocument", $request->inputPassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "inputPassword", $request->inputPassword);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "inputPassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "inputPassword", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidpassword()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesDocument", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidstorage()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesDocument", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentInvalidfolder()
    {
        $request = $this->getPostSlidesDocumentRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesDocument", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocument", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocument($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocument", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocument", "folder", $this->okToFailValues);
        }
    }
    private function getPostSlidesDocumentFromHtmlRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesDocumentFromHtml", "name", $this->values);
        $testhtml = TestUtils::getTestValue("postSlidesDocumentFromHtml", "html", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesDocumentFromHtml", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesDocumentFromHtml", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesDocumentFromHtml", "folder", $this->values);
        $request = new Requests\PostSlidesDocumentFromHtmlRequest($testname, $testhtml, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesDocumentFromHtml
     * Create presentation document from html.
     */
    public function testPostSlidesDocumentFromHtml()
    {
        $request = $this->getPostSlidesDocumentFromHtmlRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromHtml", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesDocumentFromHtml");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesDocumentFromHtmlInvalidname()
    {
        $request = $this->getPostSlidesDocumentFromHtmlRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesDocumentFromHtml", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromHtml", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromHtml", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromHtml", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromHtmlInvalidhtml()
    {
        $request = $this->getPostSlidesDocumentFromHtmlRequest();
        $request->html = TestUtils::invalidizeValue("html", "postSlidesDocumentFromHtml", $request->html, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromHtml", "html", $request->html);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromHtml", "html", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromHtml", "html", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromHtmlInvalidpassword()
    {
        $request = $this->getPostSlidesDocumentFromHtmlRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesDocumentFromHtml", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromHtml", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromHtml", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromHtml", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromHtmlInvalidstorage()
    {
        $request = $this->getPostSlidesDocumentFromHtmlRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesDocumentFromHtml", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromHtml", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromHtml", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromHtml", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromHtmlInvalidfolder()
    {
        $request = $this->getPostSlidesDocumentFromHtmlRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesDocumentFromHtml", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromHtml", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromHtml", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromHtml", "folder", $this->okToFailValues);
        }
    }
    private function getPostSlidesDocumentFromSourceRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesDocumentFromSource", "name", $this->values);
        $testsourcePath = TestUtils::getTestValue("postSlidesDocumentFromSource", "sourcePath", $this->values);
        $testsourcePassword = TestUtils::getTestValue("postSlidesDocumentFromSource", "sourcePassword", $this->values);
        $testsourceStorage = TestUtils::getTestValue("postSlidesDocumentFromSource", "sourceStorage", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesDocumentFromSource", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesDocumentFromSource", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesDocumentFromSource", "folder", $this->values);
        $request = new Requests\PostSlidesDocumentFromSourceRequest($testname, $testsourcePath, $testsourcePassword, $testsourceStorage, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesDocumentFromSource
     * Create a presentation from an existing source.
     */
    public function testPostSlidesDocumentFromSource()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesDocumentFromSource");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidname()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesDocumentFromSource", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidsourcePath()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->sourcePath = TestUtils::invalidizeValue("sourcePath", "postSlidesDocumentFromSource", $request->sourcePath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "sourcePath", $request->sourcePath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "sourcePath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "sourcePath", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidsourcePassword()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->sourcePassword = TestUtils::invalidizeValue("sourcePassword", "postSlidesDocumentFromSource", $request->sourcePassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "sourcePassword", $request->sourcePassword);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "sourcePassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "sourcePassword", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidsourceStorage()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->sourceStorage = TestUtils::invalidizeValue("sourceStorage", "postSlidesDocumentFromSource", $request->sourceStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "sourceStorage", $request->sourceStorage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "sourceStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "sourceStorage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidpassword()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesDocumentFromSource", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidstorage()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesDocumentFromSource", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromSourceInvalidfolder()
    {
        $request = $this->getPostSlidesDocumentFromSourceRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesDocumentFromSource", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromSource", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromSource($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromSource", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromSource", "folder", $this->okToFailValues);
        }
    }
    private function getPostSlidesDocumentFromTemplateRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "name", $this->values);
        $testtemplatePath = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "templatePath", $this->values);
        $testdata = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "data", $this->values);
        $testtemplatePassword = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "templatePassword", $this->values);
        $testtemplateStorage = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "templateStorage", $this->values);
        $testisImageDataEmbedded = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "isImageDataEmbedded", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesDocumentFromTemplate", "folder", $this->values);
        $request = new Requests\PostSlidesDocumentFromTemplateRequest($testname, $testtemplatePath, $testdata, $testtemplatePassword, $testtemplateStorage, $testisImageDataEmbedded, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for postSlidesDocumentFromTemplate
     * Create a presentation.
     */
    public function testPostSlidesDocumentFromTemplate()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesDocumentFromTemplate");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidname()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesDocumentFromTemplate", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidtemplatePath()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->templatePath = TestUtils::invalidizeValue("templatePath", "postSlidesDocumentFromTemplate", $request->templatePath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "templatePath", $request->templatePath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "templatePath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "templatePath", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvaliddata()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->data = TestUtils::invalidizeValue("data", "postSlidesDocumentFromTemplate", $request->data, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "data", $request->data);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "data", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "data", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidtemplatePassword()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->templatePassword = TestUtils::invalidizeValue("templatePassword", "postSlidesDocumentFromTemplate", $request->templatePassword, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "templatePassword", $request->templatePassword);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "templatePassword", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "templatePassword", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidtemplateStorage()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->templateStorage = TestUtils::invalidizeValue("templateStorage", "postSlidesDocumentFromTemplate", $request->templateStorage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "templateStorage", $request->templateStorage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "templateStorage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "templateStorage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidisImageDataEmbedded()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->isImageDataEmbedded = TestUtils::invalidizeValue("isImageDataEmbedded", "postSlidesDocumentFromTemplate", $request->isImageDataEmbedded, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "isImageDataEmbedded", $request->isImageDataEmbedded);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "isImageDataEmbedded", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "isImageDataEmbedded", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidpassword()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesDocumentFromTemplate", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidstorage()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesDocumentFromTemplate", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesDocumentFromTemplateInvalidfolder()
    {
        $request = $this->getPostSlidesDocumentFromTemplateRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesDocumentFromTemplate", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesDocumentFromTemplate", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesDocumentFromTemplate($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesDocumentFromTemplate", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesDocumentFromTemplate", "folder", $this->okToFailValues);
        }
    }
    private function getPostSlidesPipelineRequest()
    {
        $testpipeline = TestUtils::getTestValue("postSlidesPipeline", "pipeline", $this->values);
        $testfiles = null;
        $request = new Requests\PostSlidesPipelineRequest($testpipeline, $testfiles);
        return $request;
    }

    /**
     * Test case for postSlidesPipeline
     * Performs slides pipeline.
     */
    public function testPostSlidesPipeline()
    {
        $request = $this->getPostSlidesPipelineRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPipeline", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPipeline($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesPipeline");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlidesPipelineInvalidpipeline()
    {
        $request = $this->getPostSlidesPipelineRequest();
        $request->pipeline = TestUtils::invalidizeValue("pipeline", "postSlidesPipeline", $request->pipeline, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPipeline", "pipeline", $request->pipeline);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPipeline($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPipeline", "pipeline", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPipeline", "pipeline", $this->okToFailValues);
        }
    }

    private function getPostSlidesPresentationReplaceTextRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesPresentationReplaceText", "name", $this->values);
        $testoldValue = TestUtils::getTestValue("postSlidesPresentationReplaceText", "oldValue", $this->values);
        $testnewValue = TestUtils::getTestValue("postSlidesPresentationReplaceText", "newValue", $this->values);
        $testignoreCase = TestUtils::getTestValue("postSlidesPresentationReplaceText", "ignoreCase", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesPresentationReplaceText", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesPresentationReplaceText", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesPresentationReplaceText", "storage", $this->values);
        $request = new Requests\PostSlidesPresentationReplaceTextRequest($testname, $testoldValue, $testnewValue, $testignoreCase, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesPresentationReplaceText
     * Replace text with a new value.
     */
    public function testPostSlidesPresentationReplaceText()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesPresentationReplaceText");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidname()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesPresentationReplaceText", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidoldValue()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->oldValue = TestUtils::invalidizeValue("oldValue", "postSlidesPresentationReplaceText", $request->oldValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "oldValue", $request->oldValue);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "oldValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "oldValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidnewValue()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->newValue = TestUtils::invalidizeValue("newValue", "postSlidesPresentationReplaceText", $request->newValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "newValue", $request->newValue);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "newValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "newValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidignoreCase()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->ignoreCase = TestUtils::invalidizeValue("ignoreCase", "postSlidesPresentationReplaceText", $request->ignoreCase, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "ignoreCase", $request->ignoreCase);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "ignoreCase", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "ignoreCase", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidpassword()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesPresentationReplaceText", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidfolder()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesPresentationReplaceText", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesPresentationReplaceTextInvalidstorage()
    {
        $request = $this->getPostSlidesPresentationReplaceTextRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesPresentationReplaceText", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesPresentationReplaceText", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesPresentationReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesPresentationReplaceText", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesPresentationReplaceText", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesReorderRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesReorder", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlidesReorder", "slideIndex", $this->values);
        $testnewPosition = TestUtils::getTestValue("postSlidesReorder", "newPosition", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesReorder", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesReorder", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesReorder", "storage", $this->values);
        $request = new Requests\PostSlidesReorderRequest($testname, $testslideIndex, $testnewPosition, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesReorder
     * Reorder presentation slide position.
     */
    public function testPostSlidesReorder()
    {
        $request = $this->getPostSlidesReorderRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesReorder");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesReorderInvalidname()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesReorder", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidslideIndex()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlidesReorder", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidnewPosition()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->newPosition = TestUtils::invalidizeValue("newPosition", "postSlidesReorder", $request->newPosition, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "newPosition", $request->newPosition);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "newPosition", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "newPosition", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidpassword()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesReorder", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidfolder()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesReorder", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderInvalidstorage()
    {
        $request = $this->getPostSlidesReorderRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesReorder", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorder", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorder($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorder", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorder", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesReorderManyRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesReorderMany", "name", $this->values);
        $testoldPositions = TestUtils::getTestValue("postSlidesReorderMany", "oldPositions", $this->values);
        $testnewPositions = TestUtils::getTestValue("postSlidesReorderMany", "newPositions", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesReorderMany", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesReorderMany", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesReorderMany", "storage", $this->values);
        $request = new Requests\PostSlidesReorderManyRequest($testname, $testoldPositions, $testnewPositions, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesReorderMany
     * Reorder presentation slides positions.
     */
    public function testPostSlidesReorderMany()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesReorderMany");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesReorderManyInvalidname()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesReorderMany", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidoldPositions()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->oldPositions = TestUtils::invalidizeValue("oldPositions", "postSlidesReorderMany", $request->oldPositions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "oldPositions", $request->oldPositions);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "oldPositions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "oldPositions", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidnewPositions()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->newPositions = TestUtils::invalidizeValue("newPositions", "postSlidesReorderMany", $request->newPositions, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "newPositions", $request->newPositions);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "newPositions", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "newPositions", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidpassword()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesReorderMany", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidfolder()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesReorderMany", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesReorderManyInvalidstorage()
    {
        $request = $this->getPostSlidesReorderManyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesReorderMany", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesReorderMany", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesReorderMany($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesReorderMany", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesReorderMany", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSaveAs", "name", $this->values);
        $testformat = TestUtils::getTestValue("postSlidesSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postSlidesSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSaveAs", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSaveAs", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSaveAs", "folder", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postSlidesSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PostSlidesSaveAsRequest($testname, $testformat, $testoptions, $testpassword, $teststorage, $testfolder, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlidesSaveAs
     * Save a presentation to a specified format.
     */
    public function testPostSlidesSaveAs()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testPostSlidesSaveAsInvalidname()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidformat()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlidesSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidoptions()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "postSlidesSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidpassword()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidstorage()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidfolder()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostSlidesSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postSlidesSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPostSlidesSetDocumentPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSetDocumentProperties", "name", $this->values);
        $testproperties = TestUtils::getTestValue("postSlidesSetDocumentProperties", "properties", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSetDocumentProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSetDocumentProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSetDocumentProperties", "storage", $this->values);
        $request = new Requests\PostSlidesSetDocumentPropertiesRequest($testname, $testproperties, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesSetDocumentProperties
     * Set document properties.
     */
    public function testPostSlidesSetDocumentProperties()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSetDocumentProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidname()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSetDocumentProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidproperties()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->properties = TestUtils::invalidizeValue("properties", "postSlidesSetDocumentProperties", $request->properties, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "properties", $request->properties);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "properties", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "properties", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidpassword()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSetDocumentProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidfolder()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSetDocumentProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSetDocumentPropertiesInvalidstorage()
    {
        $request = $this->getPostSlidesSetDocumentPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSetDocumentProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSetDocumentProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSetDocumentProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSetDocumentProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSetDocumentProperties", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesSlideReplaceTextRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSlideReplaceText", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postSlidesSlideReplaceText", "slideIndex", $this->values);
        $testoldValue = TestUtils::getTestValue("postSlidesSlideReplaceText", "oldValue", $this->values);
        $testnewValue = TestUtils::getTestValue("postSlidesSlideReplaceText", "newValue", $this->values);
        $testignoreCase = TestUtils::getTestValue("postSlidesSlideReplaceText", "ignoreCase", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSlideReplaceText", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSlideReplaceText", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSlideReplaceText", "storage", $this->values);
        $request = new Requests\PostSlidesSlideReplaceTextRequest($testname, $testslideIndex, $testoldValue, $testnewValue, $testignoreCase, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postSlidesSlideReplaceText
     * Replace text with a new value.
     */
    public function testPostSlidesSlideReplaceText()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSlideReplaceText");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidname()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSlideReplaceText", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidslideIndex()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "postSlidesSlideReplaceText", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidoldValue()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->oldValue = TestUtils::invalidizeValue("oldValue", "postSlidesSlideReplaceText", $request->oldValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "oldValue", $request->oldValue);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "oldValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "oldValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidnewValue()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->newValue = TestUtils::invalidizeValue("newValue", "postSlidesSlideReplaceText", $request->newValue, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "newValue", $request->newValue);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "newValue", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "newValue", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidignoreCase()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->ignoreCase = TestUtils::invalidizeValue("ignoreCase", "postSlidesSlideReplaceText", $request->ignoreCase, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "ignoreCase", $request->ignoreCase);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "ignoreCase", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "ignoreCase", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidpassword()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSlideReplaceText", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidfolder()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSlideReplaceText", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSlideReplaceTextInvalidstorage()
    {
        $request = $this->getPostSlidesSlideReplaceTextRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSlideReplaceText", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSlideReplaceText", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSlideReplaceText($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSlideReplaceText", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSlideReplaceText", "storage", $this->okToFailValues);
        }
    }
    private function getPostSlidesSplitRequest()
    {
        $testname = TestUtils::getTestValue("postSlidesSplit", "name", $this->values);
        $testoptions = TestUtils::getTestValue("postSlidesSplit", "options", $this->values);
        $testformat = TestUtils::getTestValue("postSlidesSplit", "format", $this->values);
        $testwidth = TestUtils::getTestValue("postSlidesSplit", "width", $this->values);
        $testheight = TestUtils::getTestValue("postSlidesSplit", "height", $this->values);
        $testto = TestUtils::getTestValue("postSlidesSplit", "to", $this->values);
        $testfrom = TestUtils::getTestValue("postSlidesSplit", "from", $this->values);
        $testdestFolder = TestUtils::getTestValue("postSlidesSplit", "destFolder", $this->values);
        $testpassword = TestUtils::getTestValue("postSlidesSplit", "password", $this->values);
        $teststorage = TestUtils::getTestValue("postSlidesSplit", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("postSlidesSplit", "folder", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postSlidesSplit", "fontsFolder", $this->values);
        $request = new Requests\PostSlidesSplitRequest($testname, $testoptions, $testformat, $testwidth, $testheight, $testto, $testfrom, $testdestFolder, $testpassword, $teststorage, $testfolder, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postSlidesSplit
     * Splitting presentations. Create one image per slide.
     */
    public function testPostSlidesSplit()
    {
        $request = $this->getPostSlidesSplitRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlidesSplit");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPostSlidesSplitInvalidname()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->name = TestUtils::invalidizeValue("name", "postSlidesSplit", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "name", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidoptions()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->options = TestUtils::invalidizeValue("options", "postSlidesSplit", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "options", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidformat()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->format = TestUtils::invalidizeValue("format", "postSlidesSplit", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "format", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidwidth()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->width = TestUtils::invalidizeValue("width", "postSlidesSplit", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "width", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidheight()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->height = TestUtils::invalidizeValue("height", "postSlidesSplit", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "height", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidto()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->to = TestUtils::invalidizeValue("to", "postSlidesSplit", $request->to, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "to", $request->to);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "to", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "to", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidfrom()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->from = TestUtils::invalidizeValue("from", "postSlidesSplit", $request->from, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "from", $request->from);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "from", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "from", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvaliddestFolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->destFolder = TestUtils::invalidizeValue("destFolder", "postSlidesSplit", $request->destFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "destFolder", $request->destFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "destFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "destFolder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidpassword()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->password = TestUtils::invalidizeValue("password", "postSlidesSplit", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "password", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidstorage()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "postSlidesSplit", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "storage", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidfolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "postSlidesSplit", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "folder", $this->okToFailValues);
        }
    }

    public function testPostSlidesSplitInvalidfontsFolder()
    {
        $request = $this->getPostSlidesSplitRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postSlidesSplit", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postSlidesSplit", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->postSlidesSplit($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postSlidesSplit", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postSlidesSplit", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutLayoutSlideRequest()
    {
        $testname = TestUtils::getTestValue("putLayoutSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putLayoutSlide", "slideIndex", $this->values);
        $testslideDto = TestUtils::getTestValue("putLayoutSlide", "slideDto", $this->values);
        $testpassword = TestUtils::getTestValue("putLayoutSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putLayoutSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putLayoutSlide", "storage", $this->values);
        $request = new Requests\PutLayoutSlideRequest($testname, $testslideIndex, $testslideDto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putLayoutSlide
     * Update a layoutSlide.
     */
    public function testPutLayoutSlide()
    {
        $request = $this->getPutLayoutSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putLayoutSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutLayoutSlideInvalidname()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "putLayoutSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "name", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidslideIndex()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putLayoutSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidslideDto()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->slideDto = TestUtils::invalidizeValue("slideDto", "putLayoutSlide", $request->slideDto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "slideDto", $request->slideDto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "slideDto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "slideDto", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidpassword()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "putLayoutSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "password", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidfolder()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putLayoutSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPutLayoutSlideInvalidstorage()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putLayoutSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putLayoutSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "storage", $this->okToFailValues);
        }
    }
    private function getPutNotesSlideShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "format", $this->values);
        $testoutPath = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "outPath", $this->values);
        $testoptions = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "bounds", $this->values);
        $testfontsFolder = TestUtils::getTestValue("putNotesSlideShapeSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PutNotesSlideShapeSaveAsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testformat, $testoutPath, $testoptions, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for putNotesSlideShapeSaveAs
     * Render shape to specified picture format.
     */
    public function testPutNotesSlideShapeSaveAs()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putNotesSlideShapeSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidname()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "putNotesSlideShapeSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidslideIndex()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putNotesSlideShapeSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidpath()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->path = TestUtils::invalidizeValue("path", "putNotesSlideShapeSaveAs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "path", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putNotesSlideShapeSaveAs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidformat()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "putNotesSlideShapeSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidoutPath()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "putNotesSlideShapeSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidoptions()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "putNotesSlideShapeSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidpassword()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "putNotesSlideShapeSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidfolder()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putNotesSlideShapeSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidstorage()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putNotesSlideShapeSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidscaleX()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", "putNotesSlideShapeSaveAs", $request->scaleX, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "scaleX", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "scaleX", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidscaleY()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", "putNotesSlideShapeSaveAs", $request->scaleY, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "scaleY", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "scaleY", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidbounds()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", "putNotesSlideShapeSaveAs", $request->bounds, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "bounds", $this->okToFailValues);
        }
    }

    public function testPutNotesSlideShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPutNotesSlideShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "putNotesSlideShapeSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putNotesSlideShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putNotesSlideShapeSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putNotesSlideShapeSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutPresentationMergeRequest()
    {
        $testname = TestUtils::getTestValue("putPresentationMerge", "name", $this->values);
        $testrequest = TestUtils::getTestValue("putPresentationMerge", "request", $this->values);
        $testpassword = TestUtils::getTestValue("putPresentationMerge", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putPresentationMerge", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putPresentationMerge", "folder", $this->values);
        $request = new Requests\PutPresentationMergeRequest($testname, $testrequest, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for putPresentationMerge
     * Merge the presentation with other presentations or some of their slides specified in the request parameter.
     */
    public function testPutPresentationMerge()
    {
        $request = $this->getPutPresentationMergeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putPresentationMerge");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutPresentationMergeInvalidname()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->name = TestUtils::invalidizeValue("name", "putPresentationMerge", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "name", $this->okToFailValues);
        }
    }

    public function testPutPresentationMergeInvalidrequest()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->request = TestUtils::invalidizeValue("request", "putPresentationMerge", $request->request, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", "request", $request->request);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "request", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "request", $this->okToFailValues);
        }
    }

    public function testPutPresentationMergeInvalidpassword()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->password = TestUtils::invalidizeValue("password", "putPresentationMerge", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "password", $this->okToFailValues);
        }
    }

    public function testPutPresentationMergeInvalidstorage()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putPresentationMerge", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "storage", $this->okToFailValues);
        }
    }

    public function testPutPresentationMergeInvalidfolder()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putPresentationMerge", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "folder", $this->okToFailValues);
        }
    }
    private function getPutSetParagraphPortionPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("putSetParagraphPortionProperties", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putSetParagraphPortionProperties", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "paragraphIndex", $this->values);
        $testportionIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "portionIndex", $this->values);
        $testdto = TestUtils::getTestValue("putSetParagraphPortionProperties", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putSetParagraphPortionProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSetParagraphPortionProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSetParagraphPortionProperties", "storage", $this->values);
        $request = new Requests\PutSetParagraphPortionPropertiesRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSetParagraphPortionProperties
     * Update portion properties.
     */
    public function testPutSetParagraphPortionProperties()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSetParagraphPortionProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidname()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSetParagraphPortionProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "name", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidslideIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSetParagraphPortionProperties", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidpath()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->path = TestUtils::invalidizeValue("path", "putSetParagraphPortionProperties", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "path", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidshapeIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putSetParagraphPortionProperties", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidparagraphIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "putSetParagraphPortionProperties", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidportionIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", "putSetParagraphPortionProperties", $request->portionIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "portionIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "portionIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvaliddto()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putSetParagraphPortionProperties", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "dto", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidpassword()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSetParagraphPortionProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "password", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidfolder()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSetParagraphPortionProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "folder", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidstorage()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSetParagraphPortionProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "storage", $this->okToFailValues);
        }
    }
    private function getPutSetParagraphPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("putSetParagraphProperties", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSetParagraphProperties", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putSetParagraphProperties", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putSetParagraphProperties", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("putSetParagraphProperties", "paragraphIndex", $this->values);
        $testdto = TestUtils::getTestValue("putSetParagraphProperties", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putSetParagraphProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSetParagraphProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSetParagraphProperties", "storage", $this->values);
        $request = new Requests\PutSetParagraphPropertiesRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSetParagraphProperties
     * Update paragraph properties.
     */
    public function testPutSetParagraphProperties()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSetParagraphProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSetParagraphPropertiesInvalidname()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSetParagraphProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "name", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidslideIndex()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSetParagraphProperties", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidpath()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->path = TestUtils::invalidizeValue("path", "putSetParagraphProperties", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "path", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidshapeIndex()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putSetParagraphProperties", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidparagraphIndex()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "putSetParagraphProperties", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvaliddto()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putSetParagraphProperties", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "dto", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidpassword()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSetParagraphProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "password", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidfolder()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSetParagraphProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "folder", $this->okToFailValues);
        }
    }

    public function testPutSetParagraphPropertiesInvalidstorage()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSetParagraphProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "storage", $this->okToFailValues);
        }
    }
    private function getPutShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("putShapeSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putShapeSaveAs", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putShapeSaveAs", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putShapeSaveAs", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("putShapeSaveAs", "format", $this->values);
        $testoutPath = TestUtils::getTestValue("putShapeSaveAs", "outPath", $this->values);
        $testoptions = TestUtils::getTestValue("putShapeSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("putShapeSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putShapeSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putShapeSaveAs", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("putShapeSaveAs", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("putShapeSaveAs", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("putShapeSaveAs", "bounds", $this->values);
        $testfontsFolder = TestUtils::getTestValue("putShapeSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PutShapeSaveAsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testformat, $testoutPath, $testoptions, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for putShapeSaveAs
     * Render shape to specified picture format.
     */
    public function testPutShapeSaveAs()
    {
        $request = $this->getPutShapeSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putShapeSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testPutShapeSaveAsInvalidname()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "putShapeSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidslideIndex()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putShapeSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidpath()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->path = TestUtils::invalidizeValue("path", "putShapeSaveAs", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "path", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putShapeSaveAs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidformat()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "putShapeSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidoutPath()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "putShapeSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidoptions()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "putShapeSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidpassword()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "putShapeSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidfolder()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putShapeSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidstorage()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putShapeSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidscaleX()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", "putShapeSaveAs", $request->scaleX, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "scaleX", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "scaleX", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidscaleY()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", "putShapeSaveAs", $request->scaleY, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "scaleY", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "scaleY", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidbounds()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", "putShapeSaveAs", $request->bounds, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "bounds", $this->okToFailValues);
        }
    }

    public function testPutShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPutShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "putShapeSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putShapeSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putShapeSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutSlideAnimationRequest()
    {
        $testname = TestUtils::getTestValue("putSlideAnimation", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlideAnimation", "slideIndex", $this->values);
        $testanimation = TestUtils::getTestValue("putSlideAnimation", "animation", $this->values);
        $testpassword = TestUtils::getTestValue("putSlideAnimation", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlideAnimation", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlideAnimation", "storage", $this->values);
        $request = new Requests\PutSlideAnimationRequest($testname, $testslideIndex, $testanimation, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlideAnimation
     * Set slide animation.
     */
    public function testPutSlideAnimation()
    {
        $request = $this->getPutSlideAnimationRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideAnimation");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlideAnimationInvalidname()
    {
        $request = $this->getPutSlideAnimationRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlideAnimation", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimation", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimation", "name", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInvalidslideIndex()
    {
        $request = $this->getPutSlideAnimationRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlideAnimation", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimation", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimation", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInvalidanimation()
    {
        $request = $this->getPutSlideAnimationRequest();
        $request->animation = TestUtils::invalidizeValue("animation", "putSlideAnimation", $request->animation, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", "animation", $request->animation);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimation", "animation", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimation", "animation", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInvalidpassword()
    {
        $request = $this->getPutSlideAnimationRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlideAnimation", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimation", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimation", "password", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInvalidfolder()
    {
        $request = $this->getPutSlideAnimationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlideAnimation", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimation", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimation", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInvalidstorage()
    {
        $request = $this->getPutSlideAnimationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlideAnimation", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimation", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimation", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlideAnimationEffectRequest()
    {
        $testname = TestUtils::getTestValue("putSlideAnimationEffect", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlideAnimationEffect", "slideIndex", $this->values);
        $testeffectIndex = TestUtils::getTestValue("putSlideAnimationEffect", "effectIndex", $this->values);
        $testeffect = TestUtils::getTestValue("putSlideAnimationEffect", "effect", $this->values);
        $testpassword = TestUtils::getTestValue("putSlideAnimationEffect", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlideAnimationEffect", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlideAnimationEffect", "storage", $this->values);
        $request = new Requests\PutSlideAnimationEffectRequest($testname, $testslideIndex, $testeffectIndex, $testeffect, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlideAnimationEffect
     * Modify an animation effect for a slide.
     */
    public function testPutSlideAnimationEffect()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideAnimationEffect");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlideAnimationEffectInvalidname()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlideAnimationEffect", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "name", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationEffectInvalidslideIndex()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlideAnimationEffect", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationEffectInvalideffectIndex()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->effectIndex = TestUtils::invalidizeValue("effectIndex", "putSlideAnimationEffect", $request->effectIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "effectIndex", $request->effectIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "effectIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "effectIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationEffectInvalideffect()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->effect = TestUtils::invalidizeValue("effect", "putSlideAnimationEffect", $request->effect, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "effect", $request->effect);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "effect", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "effect", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationEffectInvalidpassword()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlideAnimationEffect", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "password", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationEffectInvalidfolder()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlideAnimationEffect", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationEffectInvalidstorage()
    {
        $request = $this->getPutSlideAnimationEffectRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlideAnimationEffect", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationEffect", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationEffect", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationEffect", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlideAnimationInteractiveSequenceEffectRequest()
    {
        $testname = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "slideIndex", $this->values);
        $testsequenceIndex = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $this->values);
        $testeffectIndex = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "effectIndex", $this->values);
        $testeffect = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "effect", $this->values);
        $testpassword = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlideAnimationInteractiveSequenceEffect", "storage", $this->values);
        $request = new Requests\PutSlideAnimationInteractiveSequenceEffectRequest($testname, $testslideIndex, $testsequenceIndex, $testeffectIndex, $testeffect, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlideAnimationInteractiveSequenceEffect
     * Modify an animation effect for a slide interactive sequence.
     */
    public function testPutSlideAnimationInteractiveSequenceEffect()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideAnimationInteractiveSequenceEffect");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalidname()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlideAnimationInteractiveSequenceEffect", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "name", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalidslideIndex()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlideAnimationInteractiveSequenceEffect", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalidsequenceIndex()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->sequenceIndex = TestUtils::invalidizeValue("sequenceIndex", "putSlideAnimationInteractiveSequenceEffect", $request->sequenceIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $request->sequenceIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "sequenceIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalideffectIndex()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->effectIndex = TestUtils::invalidizeValue("effectIndex", "putSlideAnimationInteractiveSequenceEffect", $request->effectIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "effectIndex", $request->effectIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "effectIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "effectIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalideffect()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->effect = TestUtils::invalidizeValue("effect", "putSlideAnimationInteractiveSequenceEffect", $request->effect, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "effect", $request->effect);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "effect", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "effect", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalidpassword()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlideAnimationInteractiveSequenceEffect", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "password", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalidfolder()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlideAnimationInteractiveSequenceEffect", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlideAnimationInteractiveSequenceEffectInvalidstorage()
    {
        $request = $this->getPutSlideAnimationInteractiveSequenceEffectRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlideAnimationInteractiveSequenceEffect", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideAnimationInteractiveSequenceEffect", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideAnimationInteractiveSequenceEffect($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideAnimationInteractiveSequenceEffect", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideAnimationInteractiveSequenceEffect", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlideSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("putSlideSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlideSaveAs", "slideIndex", $this->values);
        $testformat = TestUtils::getTestValue("putSlideSaveAs", "format", $this->values);
        $testoutPath = TestUtils::getTestValue("putSlideSaveAs", "outPath", $this->values);
        $testoptions = TestUtils::getTestValue("putSlideSaveAs", "options", $this->values);
        $testwidth = TestUtils::getTestValue("putSlideSaveAs", "width", $this->values);
        $testheight = TestUtils::getTestValue("putSlideSaveAs", "height", $this->values);
        $testpassword = TestUtils::getTestValue("putSlideSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlideSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlideSaveAs", "storage", $this->values);
        $testfontsFolder = TestUtils::getTestValue("putSlideSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PutSlideSaveAsRequest($testname, $testslideIndex, $testformat, $testoutPath, $testoptions, $testwidth, $testheight, $testpassword, $testfolder, $teststorage, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for putSlideSaveAs
     * Save a slide to a specified format.
     */
    public function testPutSlideSaveAs()
    {
        $request = $this->getPutSlideSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testPutSlideSaveAsInvalidname()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlideSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidslideIndex()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlideSaveAs", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidformat()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "putSlideSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidoutPath()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "putSlideSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidoptions()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "putSlideSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidwidth()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->width = TestUtils::invalidizeValue("width", "putSlideSaveAs", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "width", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidheight()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->height = TestUtils::invalidizeValue("height", "putSlideSaveAs", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "height", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidpassword()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlideSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidfolder()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlideSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidstorage()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlideSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlideSaveAsInvalidfontsFolder()
    {
        $request = $this->getPutSlideSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "putSlideSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutSlideShapeInfoRequest()
    {
        $testname = TestUtils::getTestValue("putSlideShapeInfo", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlideShapeInfo", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putSlideShapeInfo", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putSlideShapeInfo", "shapeIndex", $this->values);
        $testdto = TestUtils::getTestValue("putSlideShapeInfo", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putSlideShapeInfo", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlideShapeInfo", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlideShapeInfo", "storage", $this->values);
        $request = new Requests\PutSlideShapeInfoRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlideShapeInfo
     * Update shape properties.
     */
    public function testPutSlideShapeInfo()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideShapeInfo");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlideShapeInfoInvalidname()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlideShapeInfo", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "name", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvalidslideIndex()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlideShapeInfo", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvalidpath()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->path = TestUtils::invalidizeValue("path", "putSlideShapeInfo", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "path", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvalidshapeIndex()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putSlideShapeInfo", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvaliddto()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putSlideShapeInfo", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "dto", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvalidpassword()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlideShapeInfo", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "password", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvalidfolder()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlideShapeInfo", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlideShapeInfoInvalidstorage()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlideShapeInfo", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesConvertRequest()
    {
        $testformat = TestUtils::getTestValue("putSlidesConvert", "format", $this->values);
        $testoutPath = TestUtils::getTestValue("putSlidesConvert", "outPath", $this->values);
        $testdocument = TestUtils::getStreamValue();
        $testpassword = TestUtils::getTestValue("putSlidesConvert", "password", $this->values);
        $testfontsFolder = TestUtils::getTestValue("putSlidesConvert", "fontsFolder", $this->values);
        $request = new Requests\PutSlidesConvertRequest($testformat, $testoutPath, $testdocument, $testpassword, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for putSlidesConvert
     * Convert presentation from request content to format specified.
     */
    public function testPutSlidesConvert()
    {
        $request = $this->getPutSlidesConvertRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesConvert");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testPutSlidesConvertInvalidformat()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->format = TestUtils::invalidizeValue("format", "putSlidesConvert", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "format", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvalidoutPath()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "putSlidesConvert", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "outPath", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvaliddocument()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->document = null;
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "document", $request->document);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "document", $expectedCode, $expectedMessage);
        } catch (Exception $ex) {
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "document", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvalidpassword()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesConvert", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesConvertInvalidfontsFolder()
    {
        $request = $this->getPutSlidesConvertRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "putSlidesConvert", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesConvert", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesConvert($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesConvert", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesConvert", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutSlidesDocumentFromHtmlRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesDocumentFromHtml", "name", $this->values);
        $testhtml = TestUtils::getTestValue("putSlidesDocumentFromHtml", "html", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesDocumentFromHtml", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesDocumentFromHtml", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesDocumentFromHtml", "folder", $this->values);
        $request = new Requests\PutSlidesDocumentFromHtmlRequest($testname, $testhtml, $testpassword, $teststorage, $testfolder);
        return $request;
    }

    /**
     * Test case for putSlidesDocumentFromHtml
     * Update presentation document from html.
     */
    public function testPutSlidesDocumentFromHtml()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesDocumentFromHtml");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidname()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesDocumentFromHtml", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidhtml()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->html = TestUtils::invalidizeValue("html", "putSlidesDocumentFromHtml", $request->html, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "html", $request->html);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "html", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "html", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidpassword()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesDocumentFromHtml", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidstorage()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesDocumentFromHtml", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlidesDocumentFromHtmlInvalidfolder()
    {
        $request = $this->getPutSlidesDocumentFromHtmlRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesDocumentFromHtml", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesDocumentFromHtml", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesDocumentFromHtml($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesDocumentFromHtml", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesDocumentFromHtml", "folder", $this->okToFailValues);
        }
    }
    private function getPutSlidesSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSaveAs", "name", $this->values);
        $testoutPath = TestUtils::getTestValue("putSlidesSaveAs", "outPath", $this->values);
        $testformat = TestUtils::getTestValue("putSlidesSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("putSlidesSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSaveAs", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSaveAs", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSaveAs", "folder", $this->values);
        $testfontsFolder = TestUtils::getTestValue("putSlidesSaveAs", "fontsFolder", $this->values);
        $request = new Requests\PutSlidesSaveAsRequest($testname, $testoutPath, $testformat, $testoptions, $testpassword, $teststorage, $testfolder, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for putSlidesSaveAs
     * Save a presentation to a specified format.
     */
    public function testPutSlidesSaveAs()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSaveAs");
        }
        if ($needAssertResponse) {
            Assert::assertNull($result);
        }
    }

    public function testPutSlidesSaveAsInvalidname()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidoutPath()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "putSlidesSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidformat()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", "putSlidesSaveAs", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "format", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidoptions()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", "putSlidesSaveAs", $request->options, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "options", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "options", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidpassword()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSaveAs", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidstorage()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSaveAs", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidfolder()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSaveAs", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSaveAsInvalidfontsFolder()
    {
        $request = $this->getPutSlidesSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "putSlidesSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSaveAs", "fontsFolder", $this->okToFailValues);
        }
    }
    private function getPutSlidesSetDocumentPropertyRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSetDocumentProperty", "name", $this->values);
        $testpropertyName = TestUtils::getTestValue("putSlidesSetDocumentProperty", "propertyName", $this->values);
        $testproperty = TestUtils::getTestValue("putSlidesSetDocumentProperty", "property", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSetDocumentProperty", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSetDocumentProperty", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSetDocumentProperty", "storage", $this->values);
        $request = new Requests\PutSlidesSetDocumentPropertyRequest($testname, $testpropertyName, $testproperty, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSetDocumentProperty
     * Set document property.
     */
    public function testPutSlidesSetDocumentProperty()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSetDocumentProperty");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidname()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSetDocumentProperty", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidpropertyName()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->propertyName = TestUtils::invalidizeValue("propertyName", "putSlidesSetDocumentProperty", $request->propertyName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "propertyName", $request->propertyName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "propertyName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "propertyName", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidproperty()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->property = TestUtils::invalidizeValue("property", "putSlidesSetDocumentProperty", $request->property, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "property", $request->property);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "property", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "property", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidpassword()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSetDocumentProperty", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidfolder()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSetDocumentProperty", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSetDocumentPropertyInvalidstorage()
    {
        $request = $this->getPutSlidesSetDocumentPropertyRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSetDocumentProperty", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSetDocumentProperty", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSetDocumentProperty($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSetDocumentProperty", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSetDocumentProperty", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlidesSlide", "slideIndex", $this->values);
        $testslideDto = TestUtils::getTestValue("putSlidesSlide", "slideDto", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlide", "storage", $this->values);
        $request = new Requests\PutSlidesSlideRequest($testname, $testslideIndex, $testslideDto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSlide
     * Update a slide.
     */
    public function testPutSlidesSlide()
    {
        $request = $this->getPutSlidesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesSlideInvalidname()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlidesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidslideDto()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->slideDto = TestUtils::invalidizeValue("slideDto", "putSlidesSlide", $request->slideDto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "slideDto", $request->slideDto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "slideDto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "slideDto", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidpassword()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidfolder()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideInvalidstorage()
    {
        $request = $this->getPutSlidesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideBackgroundRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideBackground", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlidesSlideBackground", "slideIndex", $this->values);
        $testbackground = TestUtils::getTestValue("putSlidesSlideBackground", "background", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlideBackground", "folder", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlideBackground", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlideBackground", "storage", $this->values);
        $request = new Requests\PutSlidesSlideBackgroundRequest($testname, $testslideIndex, $testbackground, $testfolder, $testpassword, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSlideBackground
     * Set background for a slide.
     */
    public function testPutSlidesSlideBackground()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideBackground");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidname()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlideBackground", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlidesSlideBackground", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidbackground()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->background = TestUtils::invalidizeValue("background", "putSlidesSlideBackground", $request->background, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "background", $request->background);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "background", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "background", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidfolder()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlideBackground", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidpassword()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlideBackground", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundInvalidstorage()
    {
        $request = $this->getPutSlidesSlideBackgroundRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlideBackground", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackground", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackground($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackground", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackground", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideBackgroundColorRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideBackgroundColor", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putSlidesSlideBackgroundColor", "slideIndex", $this->values);
        $testcolor = TestUtils::getTestValue("putSlidesSlideBackgroundColor", "color", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlideBackgroundColor", "folder", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlideBackgroundColor", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlideBackgroundColor", "storage", $this->values);
        $request = new Requests\PutSlidesSlideBackgroundColorRequest($testname, $testslideIndex, $testcolor, $testfolder, $testpassword, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesSlideBackgroundColor
     * Set background color for a slide.
     */
    public function testPutSlidesSlideBackgroundColor()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideBackgroundColor");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesSlideBackgroundColorInvalidname()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlideBackgroundColor", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackgroundColor", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackgroundColor", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundColorInvalidslideIndex()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putSlidesSlideBackgroundColor", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackgroundColor", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackgroundColor", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundColorInvalidcolor()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        $request->color = TestUtils::invalidizeValue("color", "putSlidesSlideBackgroundColor", $request->color, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", "color", $request->color);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackgroundColor", "color", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackgroundColor", "color", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundColorInvalidfolder()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlideBackgroundColor", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackgroundColor", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackgroundColor", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundColorInvalidpassword()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlideBackgroundColor", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackgroundColor", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackgroundColor", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideBackgroundColorInvalidstorage()
    {
        $request = $this->getPutSlidesSlideBackgroundColorRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlideBackgroundColor", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideBackgroundColor", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideBackgroundColor($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideBackgroundColor", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideBackgroundColor", "storage", $this->okToFailValues);
        }
    }
    private function getPutSlidesSlideSizeRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesSlideSize", "name", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesSlideSize", "password", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesSlideSize", "storage", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesSlideSize", "folder", $this->values);
        $testwidth = TestUtils::getTestValue("putSlidesSlideSize", "width", $this->values);
        $testheight = TestUtils::getTestValue("putSlidesSlideSize", "height", $this->values);
        $testsizeType = TestUtils::getTestValue("putSlidesSlideSize", "sizeType", $this->values);
        $testscaleType = TestUtils::getTestValue("putSlidesSlideSize", "scaleType", $this->values);
        $request = new Requests\PutSlidesSlideSizeRequest($testname, $testpassword, $teststorage, $testfolder, $testwidth, $testheight, $testsizeType, $testscaleType);
        return $request;
    }

    /**
     * Test case for putSlidesSlideSize
     * Set slide size for a presentation.
     */
    public function testPutSlidesSlideSize()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesSlideSize");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesSlideSizeInvalidname()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesSlideSize", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidpassword()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesSlideSize", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidstorage()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesSlideSize", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "storage", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidfolder()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesSlideSize", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidwidth()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->width = TestUtils::invalidizeValue("width", "putSlidesSlideSize", $request->width, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "width", $request->width);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "width", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "width", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidheight()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->height = TestUtils::invalidizeValue("height", "putSlidesSlideSize", $request->height, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "height", $request->height);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "height", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "height", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidsizeType()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->sizeType = TestUtils::invalidizeValue("sizeType", "putSlidesSlideSize", $request->sizeType, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "sizeType", $request->sizeType);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "sizeType", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "sizeType", $this->okToFailValues);
        }
    }

    public function testPutSlidesSlideSizeInvalidscaleType()
    {
        $request = $this->getPutSlidesSlideSizeRequest();
        $request->scaleType = TestUtils::invalidizeValue("scaleType", "putSlidesSlideSize", $request->scaleType, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesSlideSize", "scaleType", $request->scaleType);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesSlideSize($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesSlideSize", "scaleType", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesSlideSize", "scaleType", $this->okToFailValues);
        }
    }
    private function getPutSlidesViewPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("putSlidesViewProperties", "name", $this->values);
        $testdto = TestUtils::getTestValue("putSlidesViewProperties", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putSlidesViewProperties", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putSlidesViewProperties", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putSlidesViewProperties", "storage", $this->values);
        $request = new Requests\PutSlidesViewPropertiesRequest($testname, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlidesViewProperties
     * Update presentation document properties.
     */
    public function testPutSlidesViewProperties()
    {
        $request = $this->getPutSlidesViewPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesViewProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlidesViewProperties");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutSlidesViewPropertiesInvalidname()
    {
        $request = $this->getPutSlidesViewPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlidesViewProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesViewProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesViewProperties", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesViewProperties", "name", $this->okToFailValues);
        }
    }

    public function testPutSlidesViewPropertiesInvaliddto()
    {
        $request = $this->getPutSlidesViewPropertiesRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putSlidesViewProperties", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesViewProperties", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesViewProperties", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesViewProperties", "dto", $this->okToFailValues);
        }
    }

    public function testPutSlidesViewPropertiesInvalidpassword()
    {
        $request = $this->getPutSlidesViewPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", "putSlidesViewProperties", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesViewProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesViewProperties", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesViewProperties", "password", $this->okToFailValues);
        }
    }

    public function testPutSlidesViewPropertiesInvalidfolder()
    {
        $request = $this->getPutSlidesViewPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putSlidesViewProperties", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesViewProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesViewProperties", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesViewProperties", "folder", $this->okToFailValues);
        }
    }

    public function testPutSlidesViewPropertiesInvalidstorage()
    {
        $request = $this->getPutSlidesViewPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putSlidesViewProperties", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlidesViewProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putSlidesViewProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlidesViewProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlidesViewProperties", "storage", $this->okToFailValues);
        }
    }
    private function getPutUpdateNotesSlideRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlide", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlide", "slideIndex", $this->values);
        $testdto = TestUtils::getTestValue("putUpdateNotesSlide", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlide", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlide", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlide", "storage", $this->values);
        $request = new Requests\PutUpdateNotesSlideRequest($testname, $testslideIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlide
     * Update notes slide properties.
     */
    public function testPutUpdateNotesSlide()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlide");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutUpdateNotesSlideInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlide", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "name", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putUpdateNotesSlide", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putUpdateNotesSlide", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "dto", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->password = TestUtils::invalidizeValue("password", "putUpdateNotesSlide", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "password", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putUpdateNotesSlide", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "folder", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putUpdateNotesSlide", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlide", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlide", "storage", $this->okToFailValues);
        }
    }
    private function getPutUpdateNotesSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlideShape", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlideShape", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putUpdateNotesSlideShape", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putUpdateNotesSlideShape", "shapeIndex", $this->values);
        $testdto = TestUtils::getTestValue("putUpdateNotesSlideShape", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlideShape", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlideShape", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlideShape", "storage", $this->values);
        $request = new Requests\PutUpdateNotesSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlideShape
     * Update shape properties.
     */
    public function testPutUpdateNotesSlideShape()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "name", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putUpdateNotesSlideShape", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidpath()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", "putUpdateNotesSlideShape", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "path", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidshapeIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putUpdateNotesSlideShape", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putUpdateNotesSlideShape", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "dto", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", "putUpdateNotesSlideShape", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "password", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putUpdateNotesSlideShape", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "folder", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putUpdateNotesSlideShape", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "storage", $this->okToFailValues);
        }
    }
    private function getPutUpdateNotesSlideShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "paragraphIndex", $this->values);
        $testdto = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "storage", $this->values);
        $request = new Requests\PutUpdateNotesSlideShapeParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlideShapeParagraph
     * Update paragraph properties.
     */
    public function testPutUpdateNotesSlideShapeParagraph()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlideShapeParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "name", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putUpdateNotesSlideShapeParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidpath()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "putUpdateNotesSlideShapeParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "path", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putUpdateNotesSlideShapeParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "putUpdateNotesSlideShapeParagraph", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putUpdateNotesSlideShapeParagraph", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "dto", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "putUpdateNotesSlideShapeParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "password", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putUpdateNotesSlideShapeParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putUpdateNotesSlideShapeParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "storage", $this->okToFailValues);
        }
    }
    private function getPutUpdateNotesSlideShapePortionRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "paragraphIndex", $this->values);
        $testportionIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "portionIndex", $this->values);
        $testdto = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "dto", $this->values);
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "password", $this->values);
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "storage", $this->values);
        $request = new Requests\PutUpdateNotesSlideShapePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlideShapePortion
     * Update portion properties.
     */
    public function testPutUpdateNotesSlideShapePortion()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShapePortion");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlideShapePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "name", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "putUpdateNotesSlideShapePortion", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidpath()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", "putUpdateNotesSlideShapePortion", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "path", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidshapeIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "putUpdateNotesSlideShapePortion", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidparagraphIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "putUpdateNotesSlideShapePortion", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidportionIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", "putUpdateNotesSlideShapePortion", $request->portionIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "portionIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "portionIndex", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->dto = TestUtils::invalidizeValue("dto", "putUpdateNotesSlideShapePortion", $request->dto, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "dto", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "dto", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", "putUpdateNotesSlideShapePortion", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "password", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "putUpdateNotesSlideShapePortion", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "folder", $this->okToFailValues);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "putUpdateNotesSlideShapePortion", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "storage", $this->okToFailValues);
        }
    }
    private function getStorageExistsRequest()
    {
        $teststorageName = TestUtils::getTestValue("storageExists", "storageName", $this->values);
        $request = new Requests\StorageExistsRequest($teststorageName);
        return $request;
    }

    /**
     * Test case for storageExists
     * Check if storage exists
     */
    public function testStorageExists()
    {
        $request = $this->getStorageExistsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("storageExists", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->storageExists($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "storageExists");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testStorageExistsInvalidstorageName()
    {
        $request = $this->getStorageExistsRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "storageExists", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("storageExists", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->storageExists($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "storageExists", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("storageExists", "storageName", $this->okToFailValues);
        }
    }
    private function getUploadFileRequest()
    {
        $testpath = TestUtils::getTestValue("uploadFile", "path", $this->values);
        $testfile = TestUtils::getStreamValue();
        $teststorageName = TestUtils::getTestValue("uploadFile", "storageName", $this->values);
        $request = new Requests\UploadFileRequest($testpath, $testfile, $teststorageName);
        return $request;
    }

    /**
     * Test case for uploadFile
     * Upload file
     */
    public function testUploadFile()
    {
        $request = $this->getUploadFileRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("uploadFile", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->uploadFile($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "uploadFile");
        }
        if ($needAssertResponse) {
            Assert::assertNotNull($result);
        }
    }

    public function testUploadFileInvalidpath()
    {
        $request = $this->getUploadFileRequest();
        $request->path = TestUtils::invalidizeValue("path", "uploadFile", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("uploadFile", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->uploadFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "uploadFile", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("uploadFile", "path", $this->okToFailValues);
        }
    }

    public function testUploadFileInvalidfile()
    {
        $request = $this->getUploadFileRequest();
        $request->file = null;
        list($expectedCode, $expectedMessage) = $this->initialize("uploadFile", "file", $request->file);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->uploadFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "uploadFile", "file", $expectedCode, $expectedMessage);
        } catch (Exception $ex) {
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("uploadFile", "file", $this->okToFailValues);
        }
    }

    public function testUploadFileInvalidstorageName()
    {
        $request = $this->getUploadFileRequest();
        $request->storageName = TestUtils::invalidizeValue("storageName", "uploadFile", $request->storageName, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("uploadFile", "storageName", $request->storageName);
        $needAssertResponse = false;
        try {
            $result = $this->getApi()->uploadFile($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "uploadFile", "storageName", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("uploadFile", "storageName", $this->okToFailValues);
        }
    }
}
