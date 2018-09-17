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
use Aspose\Slides\Cloud\Sdk\Api\NotesSlideShapesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class NotesSlideShapesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new NotesSlideShapesApi(null, $this->config);
    }

    private function getDeleteNotesSlideParagraphRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteNotesSlideParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlideParagraph", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("deleteNotesSlideParagraph", "paragraphIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteNotesSlideParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlideParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlideParagraph", "storage", "string");
        $request = new Requests\DeleteNotesSlideParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideParagraph
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideParagraph()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $this->initialize("deleteNotesSlideParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlideParagraphInvalidname()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlideParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "name");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlideParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "slideIndex");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidpath()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteNotesSlideParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "path");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteNotesSlideParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "shapeIndex");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidparagraphIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("deleteNotesSlideParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "paragraphIndex");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlideParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "password");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlideParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "folder");
        }
    }

    public function testDeleteNotesSlideParagraphInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlideParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraph", "storage");
        }
    }
    private function getDeleteNotesSlideParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideParagraphs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideParagraphs", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteNotesSlideParagraphs", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlideParagraphs", "shapeIndex", "int");
        $testparagraphs = TestUtils::getTestValue("deleteNotesSlideParagraphs", "paragraphs", "int[]");
        $testpassword = TestUtils::getTestValue("deleteNotesSlideParagraphs", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlideParagraphs", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlideParagraphs", "storage", "string");
        $request = new Requests\DeleteNotesSlideParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphs, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideParagraphs
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideParagraphs()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $this->initialize("deleteNotesSlideParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidname()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlideParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "name");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlideParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "slideIndex");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidpath()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteNotesSlideParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "path");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteNotesSlideParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "shapeIndex");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidparagraphs()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->paragraphs = TestUtils::invalidizeValue("paragraphs", $request->paragraphs, "int[]");
        $this->initialize("deleteNotesSlideParagraphs", "paragraphs", $request->paragraphs);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "paragraphs");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "paragraphs");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlideParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "password");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlideParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "folder");
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlideParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideParagraphs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideParagraphs", "storage");
        }
    }
    private function getDeleteNotesSlidePortionRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlidePortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteNotesSlidePortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "paragraphIndex", "int");
        $testportionIndex = TestUtils::getTestValue("deleteNotesSlidePortion", "portionIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteNotesSlidePortion", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlidePortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlidePortion", "storage", "string");
        $request = new Requests\DeleteNotesSlidePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlidePortion
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlidePortion()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $this->initialize("deleteNotesSlidePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlidePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlidePortionInvalidname()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlidePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "name");
        }
    }

    public function testDeleteNotesSlidePortionInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlidePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "slideIndex");
        }
    }

    public function testDeleteNotesSlidePortionInvalidpath()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteNotesSlidePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "path");
        }
    }

    public function testDeleteNotesSlidePortionInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteNotesSlidePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "shapeIndex");
        }
    }

    public function testDeleteNotesSlidePortionInvalidparagraphIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("deleteNotesSlidePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "paragraphIndex");
        }
    }

    public function testDeleteNotesSlidePortionInvalidportionIndex()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", $request->portionIndex, "int");
        $this->initialize("deleteNotesSlidePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "portionIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "portionIndex");
        }
    }

    public function testDeleteNotesSlidePortionInvalidpassword()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlidePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "password");
        }
    }

    public function testDeleteNotesSlidePortionInvalidfolder()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlidePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "folder");
        }
    }

    public function testDeleteNotesSlidePortionInvalidstorage()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlidePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortion", "storage");
        }
    }
    private function getDeleteNotesSlidePortionsRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlidePortions", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlidePortions", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteNotesSlidePortions", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlidePortions", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("deleteNotesSlidePortions", "paragraphIndex", "int");
        $testportions = TestUtils::getTestValue("deleteNotesSlidePortions", "portions", "int[]");
        $testpassword = TestUtils::getTestValue("deleteNotesSlidePortions", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlidePortions", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlidePortions", "storage", "string");
        $request = new Requests\DeleteNotesSlidePortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportions, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlidePortions
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlidePortions()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $this->initialize("deleteNotesSlidePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlidePortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlidePortionsInvalidname()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlidePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "name");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlidePortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "slideIndex");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidpath()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteNotesSlidePortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "path");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteNotesSlidePortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "shapeIndex");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidparagraphIndex()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("deleteNotesSlidePortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "paragraphIndex");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidportions()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->portions = TestUtils::invalidizeValue("portions", $request->portions, "int[]");
        $this->initialize("deleteNotesSlidePortions", "portions", $request->portions);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "portions");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "portions");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidpassword()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlidePortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "password");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidfolder()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlidePortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "folder");
        }
    }

    public function testDeleteNotesSlidePortionsInvalidstorage()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlidePortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlidePortions", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlidePortions", "storage");
        }
    }
    private function getDeleteNotesSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteNotesSlideShape", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteNotesSlideShape", "shapeIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteNotesSlideShape", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlideShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlideShape", "storage", "string");
        $request = new Requests\DeleteNotesSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideShape
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideShape()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $this->initialize("deleteNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlideShapeInvalidname()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "name");
        }
    }

    public function testDeleteNotesSlideShapeInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "slideIndex");
        }
    }

    public function testDeleteNotesSlideShapeInvalidpath()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteNotesSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "path");
        }
    }

    public function testDeleteNotesSlideShapeInvalidshapeIndex()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteNotesSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "shapeIndex");
        }
    }

    public function testDeleteNotesSlideShapeInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "password");
        }
    }

    public function testDeleteNotesSlideShapeInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "folder");
        }
    }

    public function testDeleteNotesSlideShapeInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShape", "storage");
        }
    }
    private function getDeleteNotesSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("deleteNotesSlideShapes", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteNotesSlideShapes", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteNotesSlideShapes", "path", "string");
        $testshapes = TestUtils::getTestValue("deleteNotesSlideShapes", "shapes", "int[]");
        $testpassword = TestUtils::getTestValue("deleteNotesSlideShapes", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteNotesSlideShapes", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteNotesSlideShapes", "storage", "string");
        $request = new Requests\DeleteNotesSlideShapesRequest($testname, $testslideIndex, $testpath, $testshapes, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteNotesSlideShapes
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideShapes()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $this->initialize("deleteNotesSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteNotesSlideShapesInvalidname()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteNotesSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "name");
        }
    }

    public function testDeleteNotesSlideShapesInvalidslideIndex()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteNotesSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "slideIndex");
        }
    }

    public function testDeleteNotesSlideShapesInvalidpath()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteNotesSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "path");
        }
    }

    public function testDeleteNotesSlideShapesInvalidshapes()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->shapes = TestUtils::invalidizeValue("shapes", $request->shapes, "int[]");
        $this->initialize("deleteNotesSlideShapes", "shapes", $request->shapes);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "shapes");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "shapes");
        }
    }

    public function testDeleteNotesSlideShapesInvalidpassword()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteNotesSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "password");
        }
    }

    public function testDeleteNotesSlideShapesInvalidfolder()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteNotesSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "folder");
        }
    }

    public function testDeleteNotesSlideShapesInvalidstorage()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteNotesSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "storage");
        }
    }
    private function getGetNotesSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getNotesSlideShape", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShape", "shapeIndex", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideShape", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShape", "storage", "string");
        $request = new Requests\GetNotesSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShape
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShape()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $this->initialize("getNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideShapeInvalidname()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "name");
        }
    }

    public function testGetNotesSlideShapeInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "slideIndex");
        }
    }

    public function testGetNotesSlideShapeInvalidpath()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getNotesSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "path");
        }
    }

    public function testGetNotesSlideShapeInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getNotesSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "shapeIndex");
        }
    }

    public function testGetNotesSlideShapeInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "password");
        }
    }

    public function testGetNotesSlideShapeInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "folder");
        }
    }

    public function testGetNotesSlideShapeInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShape", "storage");
        }
    }
    private function getGetNotesSlideShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapeParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapeParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getNotesSlideShapeParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapeParagraph", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("getNotesSlideShapeParagraph", "paragraphIndex", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideShapeParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShapeParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShapeParagraph", "storage", "string");
        $request = new Requests\GetNotesSlideShapeParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapeParagraph
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapeParagraph()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $this->initialize("getNotesSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidname()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "name");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "slideIndex");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidpath()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getNotesSlideShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "path");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getNotesSlideShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "shapeIndex");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("getNotesSlideShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "paragraphIndex");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "password");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "folder");
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraph", "storage");
        }
    }
    private function getGetNotesSlideShapeParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "shapeIndex", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShapeParagraphs", "storage", "string");
        $request = new Requests\GetNotesSlideShapeParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapeParagraphs
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapeParagraphs()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $this->initialize("getNotesSlideShapeParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidname()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShapeParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "name");
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShapeParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "slideIndex");
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidpath()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getNotesSlideShapeParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "path");
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getNotesSlideShapeParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "shapeIndex");
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShapeParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "password");
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShapeParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "folder");
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShapeParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeParagraphs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeParagraphs", "storage");
        }
    }
    private function getGetNotesSlideShapePortionRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapePortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getNotesSlideShapePortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "paragraphIndex", "int");
        $testportionIndex = TestUtils::getTestValue("getNotesSlideShapePortion", "portionIndex", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideShapePortion", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShapePortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShapePortion", "storage", "string");
        $request = new Requests\GetNotesSlideShapePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapePortion
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapePortion()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $this->initialize("getNotesSlideShapePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideShapePortionInvalidname()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShapePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "name");
        }
    }

    public function testGetNotesSlideShapePortionInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShapePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "slideIndex");
        }
    }

    public function testGetNotesSlideShapePortionInvalidpath()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getNotesSlideShapePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "path");
        }
    }

    public function testGetNotesSlideShapePortionInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getNotesSlideShapePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "shapeIndex");
        }
    }

    public function testGetNotesSlideShapePortionInvalidparagraphIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("getNotesSlideShapePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "paragraphIndex");
        }
    }

    public function testGetNotesSlideShapePortionInvalidportionIndex()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", $request->portionIndex, "int");
        $this->initialize("getNotesSlideShapePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "portionIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "portionIndex");
        }
    }

    public function testGetNotesSlideShapePortionInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShapePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "password");
        }
    }

    public function testGetNotesSlideShapePortionInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShapePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "folder");
        }
    }

    public function testGetNotesSlideShapePortionInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShapePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortion", "storage");
        }
    }
    private function getGetNotesSlideShapePortionsRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapePortions", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapePortions", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getNotesSlideShapePortions", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapePortions", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("getNotesSlideShapePortions", "paragraphIndex", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideShapePortions", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShapePortions", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShapePortions", "storage", "string");
        $request = new Requests\GetNotesSlideShapePortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapePortions
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapePortions()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $this->initialize("getNotesSlideShapePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapePortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideShapePortionsInvalidname()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShapePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "name");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShapePortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "slideIndex");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidpath()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getNotesSlideShapePortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "path");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getNotesSlideShapePortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "shapeIndex");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidparagraphIndex()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("getNotesSlideShapePortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "paragraphIndex");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShapePortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "password");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShapePortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "folder");
        }
    }

    public function testGetNotesSlideShapePortionsInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShapePortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "storage");
        }
    }
    private function getGetNotesSlideShapeWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "slideIndex", "int");
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "shapeIndex", "int");
        $testformat = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "format", "int");
        $testpassword = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "storage", "string");
        $testscaleX = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "scaleX", "double");
        $testscaleY = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "scaleY", "double");
        $testbounds = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "bounds", "string");
        $testoutPath = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "fontsFolder", "string");
        $request = new Requests\GetNotesSlideShapeWithFormatRequest($testname, $testslideIndex, $testshapeIndex, $testformat, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapeWithFormat
     * Render shape to specified picture format.
     */
    public function testGetNotesSlideShapeWithFormat()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $this->initialize("getNotesSlideShapeWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidname()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "name");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShapeWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "slideIndex");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getNotesSlideShapeWithFormat", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "shapeIndex");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidformat()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("getNotesSlideShapeWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "format");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "password");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "folder");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "storage");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidscaleX()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", $request->scaleX, "double");
        $this->initialize("getNotesSlideShapeWithFormat", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "scaleX");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "scaleX");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidscaleY()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", $request->scaleY, "double");
        $this->initialize("getNotesSlideShapeWithFormat", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "scaleY");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "scaleY");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidbounds()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", $request->bounds, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "bounds");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "bounds");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidoutPath()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "outPath");
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("getNotesSlideShapeWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "fontsFolder");
        }
    }
    private function getGetNotesSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapes", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapes", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getNotesSlideShapes", "path", "string");
        $testpassword = TestUtils::getTestValue("getNotesSlideShapes", "password", "string");
        $testfolder = TestUtils::getTestValue("getNotesSlideShapes", "folder", "string");
        $teststorage = TestUtils::getTestValue("getNotesSlideShapes", "storage", "string");
        $request = new Requests\GetNotesSlideShapesRequest($testname, $testslideIndex, $testpath, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getNotesSlideShapes
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapes()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $this->initialize("getNotesSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetNotesSlideShapesInvalidname()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getNotesSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "name");
        }
    }

    public function testGetNotesSlideShapesInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getNotesSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "slideIndex");
        }
    }

    public function testGetNotesSlideShapesInvalidpath()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getNotesSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "path");
        }
    }

    public function testGetNotesSlideShapesInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getNotesSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "password");
        }
    }

    public function testGetNotesSlideShapesInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getNotesSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "folder");
        }
    }

    public function testGetNotesSlideShapesInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getNotesSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "storage");
        }
    }
    private function getPostNotesSlideAddNewParagraphRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "shapeIndex", "int");
        $testdto = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $testpassword = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "storage", "string");
        $testposition = TestUtils::getTestValue("postNotesSlideAddNewParagraph", "position", "int");
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
        $this->initialize("postNotesSlideAddNewParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postNotesSlideAddNewParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "name");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postNotesSlideAddNewParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "slideIndex");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidpath()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("postNotesSlideAddNewParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "path");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("postNotesSlideAddNewParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "shapeIndex");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvaliddto()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $this->initialize("postNotesSlideAddNewParagraph", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "dto");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidpassword()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postNotesSlideAddNewParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "password");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidfolder()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postNotesSlideAddNewParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "folder");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidstorage()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postNotesSlideAddNewParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "storage");
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidposition()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postNotesSlideAddNewParagraph", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewParagraph", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewParagraph", "position");
        }
    }
    private function getPostNotesSlideAddNewPortionRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideAddNewPortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postNotesSlideAddNewPortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("postNotesSlideAddNewPortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideAddNewPortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("postNotesSlideAddNewPortion", "paragraphIndex", "int");
        $testdto = TestUtils::getTestValue("postNotesSlideAddNewPortion", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $testpassword = TestUtils::getTestValue("postNotesSlideAddNewPortion", "password", "string");
        $testfolder = TestUtils::getTestValue("postNotesSlideAddNewPortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("postNotesSlideAddNewPortion", "storage", "string");
        $testposition = TestUtils::getTestValue("postNotesSlideAddNewPortion", "position", "int");
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
        $this->initialize("postNotesSlideAddNewPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewPortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postNotesSlideAddNewPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "name");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postNotesSlideAddNewPortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "slideIndex");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidpath()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("postNotesSlideAddNewPortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "path");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("postNotesSlideAddNewPortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "shapeIndex");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidparagraphIndex()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("postNotesSlideAddNewPortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "paragraphIndex");
        }
    }

    public function testPostNotesSlideAddNewPortionInvaliddto()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $this->initialize("postNotesSlideAddNewPortion", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "dto");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidpassword()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postNotesSlideAddNewPortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "password");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidfolder()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postNotesSlideAddNewPortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "folder");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidstorage()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postNotesSlideAddNewPortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "storage");
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidposition()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postNotesSlideAddNewPortion", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewPortion", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewPortion", "position");
        }
    }
    private function getPostNotesSlideAddNewShapeRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideAddNewShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postNotesSlideAddNewShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("postNotesSlideAddNewShape", "path", "string");
        $testdto = TestUtils::getTestValue("postNotesSlideAddNewShape", "dto", "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $testpassword = TestUtils::getTestValue("postNotesSlideAddNewShape", "password", "string");
        $testfolder = TestUtils::getTestValue("postNotesSlideAddNewShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("postNotesSlideAddNewShape", "storage", "string");
        $testshapeToClone = TestUtils::getTestValue("postNotesSlideAddNewShape", "shapeToClone", "int");
        $testposition = TestUtils::getTestValue("postNotesSlideAddNewShape", "position", "int");
        $request = new Requests\PostNotesSlideAddNewShapeRequest($testname, $testslideIndex, $testpath, $testdto, $testpassword, $testfolder, $teststorage, $testshapeToClone, $testposition);
        return $request;
    }

    /**
     * Test case for postNotesSlideAddNewShape
     * Creates new shape.
     */
    public function testPostNotesSlideAddNewShape()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $this->initialize("postNotesSlideAddNewShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postNotesSlideAddNewShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "name");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postNotesSlideAddNewShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "slideIndex");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidpath()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("postNotesSlideAddNewShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "path");
        }
    }

    public function testPostNotesSlideAddNewShapeInvaliddto()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $this->initialize("postNotesSlideAddNewShape", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "dto");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidpassword()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postNotesSlideAddNewShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "password");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidfolder()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postNotesSlideAddNewShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "folder");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidstorage()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postNotesSlideAddNewShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "storage");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidshapeToClone()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->shapeToClone = TestUtils::invalidizeValue("shapeToClone", $request->shapeToClone, "int");
        $this->initialize("postNotesSlideAddNewShape", "shapeToClone", $request->shapeToClone);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "shapeToClone");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "shapeToClone");
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidposition()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postNotesSlideAddNewShape", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideAddNewShape", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideAddNewShape", "position");
        }
    }
    private function getPostNotesSlideShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "slideIndex", "int");
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "shapeIndex", "int");
        $testformat = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "format", "int");
        $testoptions = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "options", "\Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions");
        $testpassword = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "password", "string");
        $testfolder = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "folder", "string");
        $teststorage = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "storage", "string");
        $testscaleX = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "scaleX", "double");
        $testscaleY = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "scaleY", "double");
        $testbounds = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "bounds", "string");
        $testoutPath = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "fontsFolder", "string");
        $request = new Requests\PostNotesSlideShapeSaveAsRequest($testname, $testslideIndex, $testshapeIndex, $testformat, $testoptions, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postNotesSlideShapeSaveAs
     * Render shape to specified picture format.
     */
    public function testPostNotesSlideShapeSaveAs()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $this->initialize("postNotesSlideShapeSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "name");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidslideIndex()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postNotesSlideShapeSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "slideIndex");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("postNotesSlideShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "shapeIndex");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidformat()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "int");
        $this->initialize("postNotesSlideShapeSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "format");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidoptions()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", $request->options, "\Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions");
        $this->initialize("postNotesSlideShapeSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "options");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "options");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidpassword()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "password");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidfolder()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "folder");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidstorage()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "storage");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidscaleX()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", $request->scaleX, "double");
        $this->initialize("postNotesSlideShapeSaveAs", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "scaleX");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "scaleX");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidscaleY()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", $request->scaleY, "double");
        $this->initialize("postNotesSlideShapeSaveAs", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "scaleY");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "scaleY");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidbounds()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", $request->bounds, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "bounds");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "bounds");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidoutPath()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "outPath");
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("postNotesSlideShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "fontsFolder");
        }
    }
    private function getPutUpdateNotesSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlideShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlideShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("putUpdateNotesSlideShape", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("putUpdateNotesSlideShape", "shapeIndex", "int");
        $testdto = TestUtils::getTestValue("putUpdateNotesSlideShape", "dto", "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlideShape", "password", "string");
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlideShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlideShape", "storage", "string");
        $request = new Requests\PutUpdateNotesSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlideShape
     * Updates shape properties.
     */
    public function testPutUpdateNotesSlideShape()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $this->initialize("putUpdateNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putUpdateNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "name");
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putUpdateNotesSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "slideIndex");
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidpath()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("putUpdateNotesSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "path");
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidshapeIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("putUpdateNotesSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "shapeIndex");
        }
    }

    public function testPutUpdateNotesSlideShapeInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $this->initialize("putUpdateNotesSlideShape", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "dto");
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putUpdateNotesSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "password");
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putUpdateNotesSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "folder");
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putUpdateNotesSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShape", "storage");
        }
    }
    private function getPutUpdateNotesSlideShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "paragraphIndex", "int");
        $testdto = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlideShapeParagraph", "storage", "string");
        $request = new Requests\PutUpdateNotesSlideShapeParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlideShapeParagraph
     * Updates shape properties.
     */
    public function testPutUpdateNotesSlideShapeParagraph()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $this->initialize("putUpdateNotesSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "name");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "slideIndex");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidpath()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "path");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "shapeIndex");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "paragraphIndex");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "dto");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "password");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "folder");
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putUpdateNotesSlideShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapeParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapeParagraph", "storage");
        }
    }
    private function getPutUpdateNotesSlideShapePortionRequest()
    {
        $testname = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "paragraphIndex", "int");
        $testportionIndex = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "portionIndex", "int");
        $testdto = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $testpassword = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "password", "string");
        $testfolder = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("putUpdateNotesSlideShapePortion", "storage", "string");
        $request = new Requests\PutUpdateNotesSlideShapePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putUpdateNotesSlideShapePortion
     * Updates shape properties.
     */
    public function testPutUpdateNotesSlideShapePortion()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $this->initialize("putUpdateNotesSlideShapePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShapePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putUpdateNotesSlideShapePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "name");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidslideIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putUpdateNotesSlideShapePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "slideIndex");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidpath()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("putUpdateNotesSlideShapePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "path");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidshapeIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("putUpdateNotesSlideShapePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "shapeIndex");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidparagraphIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("putUpdateNotesSlideShapePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "paragraphIndex");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidportionIndex()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", $request->portionIndex, "int");
        $this->initialize("putUpdateNotesSlideShapePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "portionIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "portionIndex");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvaliddto()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $this->initialize("putUpdateNotesSlideShapePortion", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "dto");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidpassword()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putUpdateNotesSlideShapePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "password");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidfolder()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putUpdateNotesSlideShapePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "folder");
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidstorage()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putUpdateNotesSlideShapePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "storage");
        }
    }
}
