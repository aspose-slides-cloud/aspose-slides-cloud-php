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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideParagraph()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlideParagraphInvalidname()
    {
        $request = $this->getDeleteNotesSlideParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
            $result = $this->api->deleteNotesSlideParagraph($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideParagraphs()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlideParagraphsInvalidname()
    {
        $request = $this->getDeleteNotesSlideParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
            $result = $this->api->deleteNotesSlideParagraphs($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlidePortion()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlidePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlidePortionInvalidname()
    {
        $request = $this->getDeleteNotesSlidePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlidePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
            $result = $this->api->deleteNotesSlidePortion($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlidePortions()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlidePortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlidePortionsInvalidname()
    {
        $request = $this->getDeleteNotesSlidePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlidePortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlidePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
            $result = $this->api->deleteNotesSlidePortions($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideShape()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlideShapeInvalidname()
    {
        $request = $this->getDeleteNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShape($request);
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
            $result = $this->api->deleteNotesSlideShape($request);
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
            $result = $this->api->deleteNotesSlideShape($request);
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
            $result = $this->api->deleteNotesSlideShape($request);
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
            $result = $this->api->deleteNotesSlideShape($request);
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
            $result = $this->api->deleteNotesSlideShape($request);
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
            $result = $this->api->deleteNotesSlideShape($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteNotesSlideShapes()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteNotesSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteNotesSlideShapesInvalidname()
    {
        $request = $this->getDeleteNotesSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteNotesSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteNotesSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteNotesSlideShapes($request);
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
            $result = $this->api->deleteNotesSlideShapes($request);
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
            $result = $this->api->deleteNotesSlideShapes($request);
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
            $result = $this->api->deleteNotesSlideShapes($request);
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
            $result = $this->api->deleteNotesSlideShapes($request);
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
            $result = $this->api->deleteNotesSlideShapes($request);
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
            $result = $this->api->deleteNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteNotesSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteNotesSlideShapes", "storage", $this->okToFailValues);
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
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShape()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideShapeInvalidname()
    {
        $request = $this->getGetNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShape($request);
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
            $result = $this->api->getNotesSlideShape($request);
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
            $result = $this->api->getNotesSlideShape($request);
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
            $result = $this->api->getNotesSlideShape($request);
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
            $result = $this->api->getNotesSlideShape($request);
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
            $result = $this->api->getNotesSlideShape($request);
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
            $result = $this->api->getNotesSlideShape($request);
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
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapeParagraph()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideShapeParagraphInvalidname()
    {
        $request = $this->getGetNotesSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapeParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
            $result = $this->api->getNotesSlideShapeParagraph($request);
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
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapeParagraphs()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapeParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideShapeParagraphsInvalidname()
    {
        $request = $this->getGetNotesSlideShapeParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapeParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
            $result = $this->api->getNotesSlideShapeParagraphs($request);
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
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapePortion()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideShapePortionInvalidname()
    {
        $request = $this->getGetNotesSlideShapePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
            $result = $this->api->getNotesSlideShapePortion($request);
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
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapePortions()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapePortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideShapePortionsInvalidname()
    {
        $request = $this->getGetNotesSlideShapePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapePortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
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
            $result = $this->api->getNotesSlideShapePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapePortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapePortions", "storage", $this->okToFailValues);
        }
    }
    private function getGetNotesSlideShapeWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "slideIndex", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "format", $this->values);
        $testpassword = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "bounds", $this->values);
        $testoutPath = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("getNotesSlideShapeWithFormat", "fontsFolder", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapeWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidslideIndex()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getNotesSlideShapeWithFormat", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidshapeIndex()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getNotesSlideShapeWithFormat", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidformat()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getNotesSlideShapeWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidpassword()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getNotesSlideShapeWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidfolder()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getNotesSlideShapeWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidstorage()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getNotesSlideShapeWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "storage", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidscaleX()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", "getNotesSlideShapeWithFormat", $request->scaleX, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "scaleX", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "scaleX", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidscaleY()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", "getNotesSlideShapeWithFormat", $request->scaleY, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "scaleY", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "scaleY", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidbounds()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", "getNotesSlideShapeWithFormat", $request->bounds, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "bounds", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidoutPath()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "getNotesSlideShapeWithFormat", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "outPath", $this->okToFailValues);
        }
    }

    public function testGetNotesSlideShapeWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetNotesSlideShapeWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "getNotesSlideShapeWithFormat", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapeWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapeWithFormat", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapeWithFormat", "fontsFolder", $this->okToFailValues);
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
     * Read slide shapes or shape info.
     */
    public function testGetNotesSlideShapes()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getNotesSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetNotesSlideShapesInvalidname()
    {
        $request = $this->getGetNotesSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getNotesSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getNotesSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getNotesSlideShapes($request);
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
            $result = $this->api->getNotesSlideShapes($request);
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
            $result = $this->api->getNotesSlideShapes($request);
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
            $result = $this->api->getNotesSlideShapes($request);
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
            $result = $this->api->getNotesSlideShapes($request);
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
            $result = $this->api->getNotesSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getNotesSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getNotesSlideShapes", "storage", $this->okToFailValues);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostNotesSlideAddNewParagraphInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideAddNewParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewParagraph($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewPortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostNotesSlideAddNewPortionInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideAddNewPortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
            $result = $this->api->postNotesSlideAddNewPortion($request);
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
     * Creates new shape.
     */
    public function testPostNotesSlideAddNewShape()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postNotesSlideAddNewShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostNotesSlideAddNewShapeInvalidname()
    {
        $request = $this->getPostNotesSlideAddNewShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideAddNewShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideAddNewShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
            $result = $this->api->postNotesSlideAddNewShape($request);
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
        $testshapeIndex = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "bounds", $this->values);
        $testoutPath = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postNotesSlideShapeSaveAs", "fontsFolder", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", "postNotesSlideShapeSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postNotesSlideShapeSaveAs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
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
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "bounds", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidoutPath()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "postNotesSlideShapeSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPostNotesSlideShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostNotesSlideShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postNotesSlideShapeSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postNotesSlideShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postNotesSlideShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postNotesSlideShapeSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postNotesSlideShapeSaveAs", "fontsFolder", $this->okToFailValues);
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
     * Updates shape properties.
     */
    public function testPutUpdateNotesSlideShape()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutUpdateNotesSlideShapeInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
            $result = $this->api->putUpdateNotesSlideShape($request);
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
     * Updates shape properties.
     */
    public function testPutUpdateNotesSlideShapeParagraph()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutUpdateNotesSlideShapeParagraphInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlideShapeParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
            $result = $this->api->putUpdateNotesSlideShapeParagraph($request);
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
     * Updates shape properties.
     */
    public function testPutUpdateNotesSlideShapePortion()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putUpdateNotesSlideShapePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutUpdateNotesSlideShapePortionInvalidname()
    {
        $request = $this->getPutUpdateNotesSlideShapePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "putUpdateNotesSlideShapePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putUpdateNotesSlideShapePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
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
            $result = $this->api->putUpdateNotesSlideShapePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putUpdateNotesSlideShapePortion", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putUpdateNotesSlideShapePortion", "storage", $this->okToFailValues);
        }
    }
}
