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
use Aspose\Slides\Cloud\Sdk\Api\ShapesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class ShapesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new ShapesApi(null, $this->config);
    }

    private function getDeleteParagraphRequest()
    {
        $testname = TestUtils::getTestValue("deleteParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteParagraph", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("deleteParagraph", "paragraphIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteParagraph", "storage", "string");
        $request = new Requests\DeleteParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteParagraph
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteParagraph()
    {
        $request = $this->getDeleteParagraphRequest();
        $this->initialize("deleteParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteParagraphInvalidname()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "name");
        }
    }

    public function testDeleteParagraphInvalidslideIndex()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "slideIndex");
        }
    }

    public function testDeleteParagraphInvalidpath()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "path");
        }
    }

    public function testDeleteParagraphInvalidshapeIndex()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "shapeIndex");
        }
    }

    public function testDeleteParagraphInvalidparagraphIndex()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("deleteParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "paragraphIndex");
        }
    }

    public function testDeleteParagraphInvalidpassword()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "password");
        }
    }

    public function testDeleteParagraphInvalidfolder()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "folder");
        }
    }

    public function testDeleteParagraphInvalidstorage()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraph", "storage");
        }
    }
    private function getDeleteParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("deleteParagraphs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteParagraphs", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteParagraphs", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteParagraphs", "shapeIndex", "int");
        $testparagraphs = TestUtils::getTestValue("deleteParagraphs", "paragraphs", "int[]");
        $testpassword = TestUtils::getTestValue("deleteParagraphs", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteParagraphs", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteParagraphs", "storage", "string");
        $request = new Requests\DeleteParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphs, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteParagraphs
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteParagraphs()
    {
        $request = $this->getDeleteParagraphsRequest();
        $this->initialize("deleteParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteParagraphsInvalidname()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "name");
        }
    }

    public function testDeleteParagraphsInvalidslideIndex()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "slideIndex");
        }
    }

    public function testDeleteParagraphsInvalidpath()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "path");
        }
    }

    public function testDeleteParagraphsInvalidshapeIndex()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "shapeIndex");
        }
    }

    public function testDeleteParagraphsInvalidparagraphs()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->paragraphs = TestUtils::invalidizeValue("paragraphs", $request->paragraphs, "int[]");
        $this->initialize("deleteParagraphs", "paragraphs", $request->paragraphs);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "paragraphs");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "paragraphs");
        }
    }

    public function testDeleteParagraphsInvalidpassword()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "password");
        }
    }

    public function testDeleteParagraphsInvalidfolder()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "folder");
        }
    }

    public function testDeleteParagraphsInvalidstorage()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteParagraphs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteParagraphs", "storage");
        }
    }
    private function getDeletePortionRequest()
    {
        $testname = TestUtils::getTestValue("deletePortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deletePortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deletePortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deletePortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("deletePortion", "paragraphIndex", "int");
        $testportionIndex = TestUtils::getTestValue("deletePortion", "portionIndex", "int");
        $testpassword = TestUtils::getTestValue("deletePortion", "password", "string");
        $testfolder = TestUtils::getTestValue("deletePortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("deletePortion", "storage", "string");
        $request = new Requests\DeletePortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deletePortion
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeletePortion()
    {
        $request = $this->getDeletePortionRequest();
        $this->initialize("deletePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deletePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeletePortionInvalidname()
    {
        $request = $this->getDeletePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deletePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "name");
        }
    }

    public function testDeletePortionInvalidslideIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deletePortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "slideIndex");
        }
    }

    public function testDeletePortionInvalidpath()
    {
        $request = $this->getDeletePortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deletePortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "path");
        }
    }

    public function testDeletePortionInvalidshapeIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deletePortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "shapeIndex");
        }
    }

    public function testDeletePortionInvalidparagraphIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("deletePortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "paragraphIndex");
        }
    }

    public function testDeletePortionInvalidportionIndex()
    {
        $request = $this->getDeletePortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", $request->portionIndex, "int");
        $this->initialize("deletePortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "portionIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "portionIndex");
        }
    }

    public function testDeletePortionInvalidpassword()
    {
        $request = $this->getDeletePortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deletePortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "password");
        }
    }

    public function testDeletePortionInvalidfolder()
    {
        $request = $this->getDeletePortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deletePortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "folder");
        }
    }

    public function testDeletePortionInvalidstorage()
    {
        $request = $this->getDeletePortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deletePortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortion", "storage");
        }
    }
    private function getDeletePortionsRequest()
    {
        $testname = TestUtils::getTestValue("deletePortions", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deletePortions", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deletePortions", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deletePortions", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("deletePortions", "paragraphIndex", "int");
        $testportions = TestUtils::getTestValue("deletePortions", "portions", "int[]");
        $testpassword = TestUtils::getTestValue("deletePortions", "password", "string");
        $testfolder = TestUtils::getTestValue("deletePortions", "folder", "string");
        $teststorage = TestUtils::getTestValue("deletePortions", "storage", "string");
        $request = new Requests\DeletePortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportions, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deletePortions
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeletePortions()
    {
        $request = $this->getDeletePortionsRequest();
        $this->initialize("deletePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deletePortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeletePortionsInvalidname()
    {
        $request = $this->getDeletePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deletePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "name");
        }
    }

    public function testDeletePortionsInvalidslideIndex()
    {
        $request = $this->getDeletePortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deletePortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "slideIndex");
        }
    }

    public function testDeletePortionsInvalidpath()
    {
        $request = $this->getDeletePortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deletePortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "path");
        }
    }

    public function testDeletePortionsInvalidshapeIndex()
    {
        $request = $this->getDeletePortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deletePortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "shapeIndex");
        }
    }

    public function testDeletePortionsInvalidparagraphIndex()
    {
        $request = $this->getDeletePortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("deletePortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "paragraphIndex");
        }
    }

    public function testDeletePortionsInvalidportions()
    {
        $request = $this->getDeletePortionsRequest();
        $request->portions = TestUtils::invalidizeValue("portions", $request->portions, "int[]");
        $this->initialize("deletePortions", "portions", $request->portions);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "portions");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "portions");
        }
    }

    public function testDeletePortionsInvalidpassword()
    {
        $request = $this->getDeletePortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deletePortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "password");
        }
    }

    public function testDeletePortionsInvalidfolder()
    {
        $request = $this->getDeletePortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deletePortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "folder");
        }
    }

    public function testDeletePortionsInvalidstorage()
    {
        $request = $this->getDeletePortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deletePortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "storage");
        }
    }
    private function getDeleteSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteSlideShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteSlideShape", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("deleteSlideShape", "shapeIndex", "int");
        $testpassword = TestUtils::getTestValue("deleteSlideShape", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlideShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlideShape", "storage", "string");
        $request = new Requests\DeleteSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideShape
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteSlideShape()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $this->initialize("deleteSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlideShapeInvalidname()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "name");
        }
    }

    public function testDeleteSlideShapeInvalidslideIndex()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "slideIndex");
        }
    }

    public function testDeleteSlideShapeInvalidpath()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "path");
        }
    }

    public function testDeleteSlideShapeInvalidshapeIndex()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("deleteSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "shapeIndex");
        }
    }

    public function testDeleteSlideShapeInvalidpassword()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "password");
        }
    }

    public function testDeleteSlideShapeInvalidfolder()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "folder");
        }
    }

    public function testDeleteSlideShapeInvalidstorage()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShape", "storage");
        }
    }
    private function getDeleteSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("deleteSlideShapes", "name", "string");
        $testslideIndex = TestUtils::getTestValue("deleteSlideShapes", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("deleteSlideShapes", "path", "string");
        $testshapes = TestUtils::getTestValue("deleteSlideShapes", "shapes", "int[]");
        $testpassword = TestUtils::getTestValue("deleteSlideShapes", "password", "string");
        $testfolder = TestUtils::getTestValue("deleteSlideShapes", "folder", "string");
        $teststorage = TestUtils::getTestValue("deleteSlideShapes", "storage", "string");
        $request = new Requests\DeleteSlideShapesRequest($testname, $testslideIndex, $testpath, $testshapes, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for deleteSlideShapes
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteSlideShapes()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $this->initialize("deleteSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testDeleteSlideShapesInvalidname()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("deleteSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "name");
        }
    }

    public function testDeleteSlideShapesInvalidslideIndex()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("deleteSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "slideIndex");
        }
    }

    public function testDeleteSlideShapesInvalidpath()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("deleteSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "path");
        }
    }

    public function testDeleteSlideShapesInvalidshapes()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->shapes = TestUtils::invalidizeValue("shapes", $request->shapes, "int[]");
        $this->initialize("deleteSlideShapes", "shapes", $request->shapes);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "shapes");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "shapes");
        }
    }

    public function testDeleteSlideShapesInvalidpassword()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("deleteSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "password");
        }
    }

    public function testDeleteSlideShapesInvalidfolder()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("deleteSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "folder");
        }
    }

    public function testDeleteSlideShapesInvalidstorage()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("deleteSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "storage");
        }
    }
    private function getGetParagraphPortionRequest()
    {
        $testname = TestUtils::getTestValue("getParagraphPortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getParagraphPortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getParagraphPortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getParagraphPortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("getParagraphPortion", "paragraphIndex", "int");
        $testportionIndex = TestUtils::getTestValue("getParagraphPortion", "portionIndex", "int");
        $testpassword = TestUtils::getTestValue("getParagraphPortion", "password", "string");
        $testfolder = TestUtils::getTestValue("getParagraphPortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("getParagraphPortion", "storage", "string");
        $request = new Requests\GetParagraphPortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getParagraphPortion
     * Read slide shapes or shape info.
     */
    public function testGetParagraphPortion()
    {
        $request = $this->getGetParagraphPortionRequest();
        $this->initialize("getParagraphPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getParagraphPortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetParagraphPortionInvalidname()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getParagraphPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "name");
        }
    }

    public function testGetParagraphPortionInvalidslideIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getParagraphPortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "slideIndex");
        }
    }

    public function testGetParagraphPortionInvalidpath()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getParagraphPortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "path");
        }
    }

    public function testGetParagraphPortionInvalidshapeIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getParagraphPortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "shapeIndex");
        }
    }

    public function testGetParagraphPortionInvalidparagraphIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("getParagraphPortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "paragraphIndex");
        }
    }

    public function testGetParagraphPortionInvalidportionIndex()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", $request->portionIndex, "int");
        $this->initialize("getParagraphPortion", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "portionIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "portionIndex");
        }
    }

    public function testGetParagraphPortionInvalidpassword()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getParagraphPortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "password");
        }
    }

    public function testGetParagraphPortionInvalidfolder()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getParagraphPortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "folder");
        }
    }

    public function testGetParagraphPortionInvalidstorage()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getParagraphPortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortion", "storage");
        }
    }
    private function getGetParagraphPortionsRequest()
    {
        $testname = TestUtils::getTestValue("getParagraphPortions", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getParagraphPortions", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getParagraphPortions", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getParagraphPortions", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("getParagraphPortions", "paragraphIndex", "int");
        $testpassword = TestUtils::getTestValue("getParagraphPortions", "password", "string");
        $testfolder = TestUtils::getTestValue("getParagraphPortions", "folder", "string");
        $teststorage = TestUtils::getTestValue("getParagraphPortions", "storage", "string");
        $request = new Requests\GetParagraphPortionsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getParagraphPortions
     * Read slide shapes or shape info.
     */
    public function testGetParagraphPortions()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $this->initialize("getParagraphPortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getParagraphPortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetParagraphPortionsInvalidname()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getParagraphPortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "name");
        }
    }

    public function testGetParagraphPortionsInvalidslideIndex()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getParagraphPortions", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "slideIndex");
        }
    }

    public function testGetParagraphPortionsInvalidpath()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getParagraphPortions", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "path");
        }
    }

    public function testGetParagraphPortionsInvalidshapeIndex()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getParagraphPortions", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "shapeIndex");
        }
    }

    public function testGetParagraphPortionsInvalidparagraphIndex()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("getParagraphPortions", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "paragraphIndex");
        }
    }

    public function testGetParagraphPortionsInvalidpassword()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getParagraphPortions", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "password");
        }
    }

    public function testGetParagraphPortionsInvalidfolder()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getParagraphPortions", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "folder");
        }
    }

    public function testGetParagraphPortionsInvalidstorage()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getParagraphPortions", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "storage");
        }
    }
    private function getGetShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("getShapeParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getShapeParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getShapeParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getShapeParagraph", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("getShapeParagraph", "paragraphIndex", "int");
        $testpassword = TestUtils::getTestValue("getShapeParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("getShapeParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("getShapeParagraph", "storage", "string");
        $request = new Requests\GetShapeParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getShapeParagraph
     * Read slide shapes or shape info.
     */
    public function testGetShapeParagraph()
    {
        $request = $this->getGetShapeParagraphRequest();
        $this->initialize("getShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetShapeParagraphInvalidname()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "name");
        }
    }

    public function testGetShapeParagraphInvalidslideIndex()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "slideIndex");
        }
    }

    public function testGetShapeParagraphInvalidpath()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "path");
        }
    }

    public function testGetShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "shapeIndex");
        }
    }

    public function testGetShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("getShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "paragraphIndex");
        }
    }

    public function testGetShapeParagraphInvalidpassword()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "password");
        }
    }

    public function testGetShapeParagraphInvalidfolder()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "folder");
        }
    }

    public function testGetShapeParagraphInvalidstorage()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "storage");
        }
    }
    private function getGetShapeWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getShapeWithFormat", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getShapeWithFormat", "slideIndex", "int");
        $testshapeIndex = TestUtils::getTestValue("getShapeWithFormat", "shapeIndex", "int");
        $testformat = TestUtils::getTestValue("getShapeWithFormat", "format", "string");
        $testpassword = TestUtils::getTestValue("getShapeWithFormat", "password", "string");
        $testfolder = TestUtils::getTestValue("getShapeWithFormat", "folder", "string");
        $teststorage = TestUtils::getTestValue("getShapeWithFormat", "storage", "string");
        $testscaleX = TestUtils::getTestValue("getShapeWithFormat", "scaleX", "double");
        $testscaleY = TestUtils::getTestValue("getShapeWithFormat", "scaleY", "double");
        $testbounds = TestUtils::getTestValue("getShapeWithFormat", "bounds", "string");
        $testoutPath = TestUtils::getTestValue("getShapeWithFormat", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("getShapeWithFormat", "fontsFolder", "string");
        $request = new Requests\GetShapeWithFormatRequest($testname, $testslideIndex, $testshapeIndex, $testformat, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for getShapeWithFormat
     * Render shape to specified picture format.
     */
    public function testGetShapeWithFormat()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $this->initialize("getShapeWithFormat", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getShapeWithFormat");
        }
        if ($needAssertResponse) {
            Assert::assertTrue($result->isFile());
        }
    }

    public function testGetShapeWithFormatInvalidname()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getShapeWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "name");
        }
    }

    public function testGetShapeWithFormatInvalidslideIndex()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getShapeWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "slideIndex");
        }
    }

    public function testGetShapeWithFormatInvalidshapeIndex()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getShapeWithFormat", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "shapeIndex");
        }
    }

    public function testGetShapeWithFormatInvalidformat()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "string");
        $this->initialize("getShapeWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "format");
        }
    }

    public function testGetShapeWithFormatInvalidpassword()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getShapeWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "password");
        }
    }

    public function testGetShapeWithFormatInvalidfolder()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getShapeWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "folder");
        }
    }

    public function testGetShapeWithFormatInvalidstorage()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getShapeWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "storage");
        }
    }

    public function testGetShapeWithFormatInvalidscaleX()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", $request->scaleX, "double");
        $this->initialize("getShapeWithFormat", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "scaleX");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "scaleX");
        }
    }

    public function testGetShapeWithFormatInvalidscaleY()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", $request->scaleY, "double");
        $this->initialize("getShapeWithFormat", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "scaleY");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "scaleY");
        }
    }

    public function testGetShapeWithFormatInvalidbounds()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", $request->bounds, "string");
        $this->initialize("getShapeWithFormat", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "bounds");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "bounds");
        }
    }

    public function testGetShapeWithFormatInvalidoutPath()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("getShapeWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "outPath");
        }
    }

    public function testGetShapeWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("getShapeWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "fontsFolder");
        }
    }
    private function getGetSlideShapeRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlideShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getSlideShape", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getSlideShape", "shapeIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlideShape", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlideShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlideShape", "storage", "string");
        $request = new Requests\GetSlideShapeRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShape
     * Read slide shapes or shape info.
     */
    public function testGetSlideShape()
    {
        $request = $this->getGetSlideShapeRequest();
        $this->initialize("getSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlideShapeInvalidname()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "name");
        }
    }

    public function testGetSlideShapeInvalidslideIndex()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlideShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "slideIndex");
        }
    }

    public function testGetSlideShapeInvalidpath()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getSlideShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "path");
        }
    }

    public function testGetSlideShapeInvalidshapeIndex()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getSlideShape", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "shapeIndex");
        }
    }

    public function testGetSlideShapeInvalidpassword()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlideShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "password");
        }
    }

    public function testGetSlideShapeInvalidfolder()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlideShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "folder");
        }
    }

    public function testGetSlideShapeInvalidstorage()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlideShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "storage");
        }
    }
    private function getGetSlideShapeParagraphsRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShapeParagraphs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlideShapeParagraphs", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getSlideShapeParagraphs", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("getSlideShapeParagraphs", "shapeIndex", "int");
        $testpassword = TestUtils::getTestValue("getSlideShapeParagraphs", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlideShapeParagraphs", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlideShapeParagraphs", "storage", "string");
        $request = new Requests\GetSlideShapeParagraphsRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShapeParagraphs
     * Read slide shapes or shape info.
     */
    public function testGetSlideShapeParagraphs()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $this->initialize("getSlideShapeParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapeParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlideShapeParagraphsInvalidname()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlideShapeParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "name");
        }
    }

    public function testGetSlideShapeParagraphsInvalidslideIndex()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlideShapeParagraphs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "slideIndex");
        }
    }

    public function testGetSlideShapeParagraphsInvalidpath()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getSlideShapeParagraphs", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "path");
        }
    }

    public function testGetSlideShapeParagraphsInvalidshapeIndex()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("getSlideShapeParagraphs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "shapeIndex");
        }
    }

    public function testGetSlideShapeParagraphsInvalidpassword()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlideShapeParagraphs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "password");
        }
    }

    public function testGetSlideShapeParagraphsInvalidfolder()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlideShapeParagraphs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "folder");
        }
    }

    public function testGetSlideShapeParagraphsInvalidstorage()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlideShapeParagraphs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapeParagraphs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapeParagraphs", "storage");
        }
    }
    private function getGetSlideShapesRequest()
    {
        $testname = TestUtils::getTestValue("getSlideShapes", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlideShapes", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("getSlideShapes", "path", "string");
        $testpassword = TestUtils::getTestValue("getSlideShapes", "password", "string");
        $testfolder = TestUtils::getTestValue("getSlideShapes", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlideShapes", "storage", "string");
        $request = new Requests\GetSlideShapesRequest($testname, $testslideIndex, $testpath, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlideShapes
     * Read slide shapes or shape info.
     */
    public function testGetSlideShapes()
    {
        $request = $this->getGetSlideShapesRequest();
        $this->initialize("getSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlideShapesInvalidname()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "name");
        }
    }

    public function testGetSlideShapesInvalidslideIndex()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlideShapes", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "slideIndex");
        }
    }

    public function testGetSlideShapesInvalidpath()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("getSlideShapes", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "path");
        }
    }

    public function testGetSlideShapesInvalidpassword()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("getSlideShapes", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "password");
        }
    }

    public function testGetSlideShapesInvalidfolder()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlideShapes", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "folder");
        }
    }

    public function testGetSlideShapesInvalidstorage()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlideShapes", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "storage");
        }
    }
    private function getPostAddNewParagraphRequest()
    {
        $testname = TestUtils::getTestValue("postAddNewParagraph", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postAddNewParagraph", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("postAddNewParagraph", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("postAddNewParagraph", "shapeIndex", "int");
        $testdto = TestUtils::getTestValue("postAddNewParagraph", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $testpassword = TestUtils::getTestValue("postAddNewParagraph", "password", "string");
        $testfolder = TestUtils::getTestValue("postAddNewParagraph", "folder", "string");
        $teststorage = TestUtils::getTestValue("postAddNewParagraph", "storage", "string");
        $testposition = TestUtils::getTestValue("postAddNewParagraph", "position", "int");
        $request = new Requests\PostAddNewParagraphRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage, $testposition);
        return $request;
    }

    /**
     * Test case for postAddNewParagraph
     * Creates new shape.
     */
    public function testPostAddNewParagraph()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $this->initialize("postAddNewParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostAddNewParagraphInvalidname()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postAddNewParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "name");
        }
    }

    public function testPostAddNewParagraphInvalidslideIndex()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postAddNewParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "slideIndex");
        }
    }

    public function testPostAddNewParagraphInvalidpath()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("postAddNewParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "path");
        }
    }

    public function testPostAddNewParagraphInvalidshapeIndex()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("postAddNewParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "shapeIndex");
        }
    }

    public function testPostAddNewParagraphInvaliddto()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $this->initialize("postAddNewParagraph", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "dto");
        }
    }

    public function testPostAddNewParagraphInvalidpassword()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postAddNewParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "password");
        }
    }

    public function testPostAddNewParagraphInvalidfolder()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postAddNewParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "folder");
        }
    }

    public function testPostAddNewParagraphInvalidstorage()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postAddNewParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "storage");
        }
    }

    public function testPostAddNewParagraphInvalidposition()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postAddNewParagraph", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewParagraph", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewParagraph", "position");
        }
    }
    private function getPostAddNewPortionRequest()
    {
        $testname = TestUtils::getTestValue("postAddNewPortion", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postAddNewPortion", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("postAddNewPortion", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("postAddNewPortion", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("postAddNewPortion", "paragraphIndex", "int");
        $testdto = TestUtils::getTestValue("postAddNewPortion", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $testpassword = TestUtils::getTestValue("postAddNewPortion", "password", "string");
        $testfolder = TestUtils::getTestValue("postAddNewPortion", "folder", "string");
        $teststorage = TestUtils::getTestValue("postAddNewPortion", "storage", "string");
        $testposition = TestUtils::getTestValue("postAddNewPortion", "position", "int");
        $request = new Requests\PostAddNewPortionRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage, $testposition);
        return $request;
    }

    /**
     * Test case for postAddNewPortion
     * Creates new shape.
     */
    public function testPostAddNewPortion()
    {
        $request = $this->getPostAddNewPortionRequest();
        $this->initialize("postAddNewPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewPortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostAddNewPortionInvalidname()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postAddNewPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "name");
        }
    }

    public function testPostAddNewPortionInvalidslideIndex()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postAddNewPortion", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "slideIndex");
        }
    }

    public function testPostAddNewPortionInvalidpath()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("postAddNewPortion", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "path");
        }
    }

    public function testPostAddNewPortionInvalidshapeIndex()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("postAddNewPortion", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "shapeIndex");
        }
    }

    public function testPostAddNewPortionInvalidparagraphIndex()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("postAddNewPortion", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "paragraphIndex");
        }
    }

    public function testPostAddNewPortionInvaliddto()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $this->initialize("postAddNewPortion", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "dto");
        }
    }

    public function testPostAddNewPortionInvalidpassword()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postAddNewPortion", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "password");
        }
    }

    public function testPostAddNewPortionInvalidfolder()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postAddNewPortion", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "folder");
        }
    }

    public function testPostAddNewPortionInvalidstorage()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postAddNewPortion", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "storage");
        }
    }

    public function testPostAddNewPortionInvalidposition()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postAddNewPortion", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewPortion", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewPortion", "position");
        }
    }
    private function getPostAddNewShapeRequest()
    {
        $testname = TestUtils::getTestValue("postAddNewShape", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postAddNewShape", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("postAddNewShape", "path", "string");
        $testdto = TestUtils::getTestValue("postAddNewShape", "dto", "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $testpassword = TestUtils::getTestValue("postAddNewShape", "password", "string");
        $testfolder = TestUtils::getTestValue("postAddNewShape", "folder", "string");
        $teststorage = TestUtils::getTestValue("postAddNewShape", "storage", "string");
        $testshapeToClone = TestUtils::getTestValue("postAddNewShape", "shapeToClone", "int");
        $testposition = TestUtils::getTestValue("postAddNewShape", "position", "int");
        $request = new Requests\PostAddNewShapeRequest($testname, $testslideIndex, $testpath, $testdto, $testpassword, $testfolder, $teststorage, $testshapeToClone, $testposition);
        return $request;
    }

    /**
     * Test case for postAddNewShape
     * Creates new shape.
     */
    public function testPostAddNewShape()
    {
        $request = $this->getPostAddNewShapeRequest();
        $this->initialize("postAddNewShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostAddNewShapeInvalidname()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postAddNewShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "name");
        }
    }

    public function testPostAddNewShapeInvalidslideIndex()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postAddNewShape", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "slideIndex");
        }
    }

    public function testPostAddNewShapeInvalidpath()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("postAddNewShape", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "path");
        }
    }

    public function testPostAddNewShapeInvaliddto()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $this->initialize("postAddNewShape", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "dto");
        }
    }

    public function testPostAddNewShapeInvalidpassword()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postAddNewShape", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "password");
        }
    }

    public function testPostAddNewShapeInvalidfolder()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postAddNewShape", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "folder");
        }
    }

    public function testPostAddNewShapeInvalidstorage()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postAddNewShape", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "storage");
        }
    }

    public function testPostAddNewShapeInvalidshapeToClone()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->shapeToClone = TestUtils::invalidizeValue("shapeToClone", $request->shapeToClone, "int");
        $this->initialize("postAddNewShape", "shapeToClone", $request->shapeToClone);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "shapeToClone");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "shapeToClone");
        }
    }

    public function testPostAddNewShapeInvalidposition()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->position = TestUtils::invalidizeValue("position", $request->position, "int");
        $this->initialize("postAddNewShape", "position", $request->position);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "position");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "position");
        }
    }
    private function getPostShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postShapeSaveAs", "name", "string");
        $testslideIndex = TestUtils::getTestValue("postShapeSaveAs", "slideIndex", "int");
        $testshapeIndex = TestUtils::getTestValue("postShapeSaveAs", "shapeIndex", "int");
        $testformat = TestUtils::getTestValue("postShapeSaveAs", "format", "string");
        $testoptions = TestUtils::getTestValue("postShapeSaveAs", "options", "\Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions");
        $testpassword = TestUtils::getTestValue("postShapeSaveAs", "password", "string");
        $testfolder = TestUtils::getTestValue("postShapeSaveAs", "folder", "string");
        $teststorage = TestUtils::getTestValue("postShapeSaveAs", "storage", "string");
        $testscaleX = TestUtils::getTestValue("postShapeSaveAs", "scaleX", "double");
        $testscaleY = TestUtils::getTestValue("postShapeSaveAs", "scaleY", "double");
        $testbounds = TestUtils::getTestValue("postShapeSaveAs", "bounds", "string");
        $testoutPath = TestUtils::getTestValue("postShapeSaveAs", "outPath", "string");
        $testfontsFolder = TestUtils::getTestValue("postShapeSaveAs", "fontsFolder", "string");
        $request = new Requests\PostShapeSaveAsRequest($testname, $testslideIndex, $testshapeIndex, $testformat, $testoptions, $testpassword, $testfolder, $teststorage, $testscaleX, $testscaleY, $testbounds, $testoutPath, $testfontsFolder);
        return $request;
    }

    /**
     * Test case for postShapeSaveAs
     * Render shape to specified picture format.
     */
    public function testPostShapeSaveAs()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $this->initialize("postShapeSaveAs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
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
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "name");
        }
    }

    public function testPostShapeSaveAsInvalidslideIndex()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("postShapeSaveAs", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "slideIndex");
        }
    }

    public function testPostShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("postShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "shapeIndex");
        }
    }

    public function testPostShapeSaveAsInvalidformat()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->format = TestUtils::invalidizeValue("format", $request->format, "string");
        $this->initialize("postShapeSaveAs", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "format");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "format");
        }
    }

    public function testPostShapeSaveAsInvalidoptions()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->options = TestUtils::invalidizeValue("options", $request->options, "\Aspose\Slides\Cloud\Sdk\Model\IShapeExportOptions");
        $this->initialize("postShapeSaveAs", "options", $request->options);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "options");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "options");
        }
    }

    public function testPostShapeSaveAsInvalidpassword()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postShapeSaveAs", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "password");
        }
    }

    public function testPostShapeSaveAsInvalidfolder()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postShapeSaveAs", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "folder");
        }
    }

    public function testPostShapeSaveAsInvalidstorage()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postShapeSaveAs", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "storage");
        }
    }

    public function testPostShapeSaveAsInvalidscaleX()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", $request->scaleX, "double");
        $this->initialize("postShapeSaveAs", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "scaleX");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "scaleX");
        }
    }

    public function testPostShapeSaveAsInvalidscaleY()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", $request->scaleY, "double");
        $this->initialize("postShapeSaveAs", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "scaleY");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "scaleY");
        }
    }

    public function testPostShapeSaveAsInvalidbounds()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", $request->bounds, "string");
        $this->initialize("postShapeSaveAs", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "bounds");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "bounds");
        }
    }

    public function testPostShapeSaveAsInvalidoutPath()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", $request->outPath, "string");
        $this->initialize("postShapeSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "outPath");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "outPath");
        }
    }

    public function testPostShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", $request->fontsFolder, "string");
        $this->initialize("postShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "fontsFolder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "fontsFolder");
        }
    }
    private function getPutSetParagraphPortionPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("putSetParagraphPortionProperties", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("putSetParagraphPortionProperties", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "paragraphIndex", "int");
        $testportionIndex = TestUtils::getTestValue("putSetParagraphPortionProperties", "portionIndex", "int");
        $testdto = TestUtils::getTestValue("putSetParagraphPortionProperties", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $testpassword = TestUtils::getTestValue("putSetParagraphPortionProperties", "password", "string");
        $testfolder = TestUtils::getTestValue("putSetParagraphPortionProperties", "folder", "string");
        $teststorage = TestUtils::getTestValue("putSetParagraphPortionProperties", "storage", "string");
        $request = new Requests\PutSetParagraphPortionPropertiesRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testportionIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSetParagraphPortionProperties
     * Updates shape properties.
     */
    public function testPutSetParagraphPortionProperties()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $this->initialize("putSetParagraphPortionProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSetParagraphPortionProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidname()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSetParagraphPortionProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "name");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidslideIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putSetParagraphPortionProperties", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "slideIndex");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidpath()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("putSetParagraphPortionProperties", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "path");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidshapeIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("putSetParagraphPortionProperties", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "shapeIndex");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidparagraphIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("putSetParagraphPortionProperties", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "paragraphIndex");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidportionIndex()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->portionIndex = TestUtils::invalidizeValue("portionIndex", $request->portionIndex, "int");
        $this->initialize("putSetParagraphPortionProperties", "portionIndex", $request->portionIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "portionIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "portionIndex");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvaliddto()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Portion");
        $this->initialize("putSetParagraphPortionProperties", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "dto");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidpassword()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSetParagraphPortionProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "password");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidfolder()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSetParagraphPortionProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "folder");
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidstorage()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSetParagraphPortionProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphPortionProperties", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphPortionProperties", "storage");
        }
    }
    private function getPutSetParagraphPropertiesRequest()
    {
        $testname = TestUtils::getTestValue("putSetParagraphProperties", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putSetParagraphProperties", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("putSetParagraphProperties", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("putSetParagraphProperties", "shapeIndex", "int");
        $testparagraphIndex = TestUtils::getTestValue("putSetParagraphProperties", "paragraphIndex", "int");
        $testdto = TestUtils::getTestValue("putSetParagraphProperties", "dto", "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $testpassword = TestUtils::getTestValue("putSetParagraphProperties", "password", "string");
        $testfolder = TestUtils::getTestValue("putSetParagraphProperties", "folder", "string");
        $teststorage = TestUtils::getTestValue("putSetParagraphProperties", "storage", "string");
        $request = new Requests\PutSetParagraphPropertiesRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testparagraphIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSetParagraphProperties
     * Updates shape properties.
     */
    public function testPutSetParagraphProperties()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $this->initialize("putSetParagraphProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSetParagraphProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSetParagraphPropertiesInvalidname()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSetParagraphProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "name");
        }
    }

    public function testPutSetParagraphPropertiesInvalidslideIndex()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putSetParagraphProperties", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "slideIndex");
        }
    }

    public function testPutSetParagraphPropertiesInvalidpath()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("putSetParagraphProperties", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "path");
        }
    }

    public function testPutSetParagraphPropertiesInvalidshapeIndex()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("putSetParagraphProperties", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "shapeIndex");
        }
    }

    public function testPutSetParagraphPropertiesInvalidparagraphIndex()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", $request->paragraphIndex, "int");
        $this->initialize("putSetParagraphProperties", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "paragraphIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "paragraphIndex");
        }
    }

    public function testPutSetParagraphPropertiesInvaliddto()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\Paragraph");
        $this->initialize("putSetParagraphProperties", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "dto");
        }
    }

    public function testPutSetParagraphPropertiesInvalidpassword()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSetParagraphProperties", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "password");
        }
    }

    public function testPutSetParagraphPropertiesInvalidfolder()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSetParagraphProperties", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "folder");
        }
    }

    public function testPutSetParagraphPropertiesInvalidstorage()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSetParagraphProperties", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "storage");
        }
    }
    private function getPutSlideShapeInfoRequest()
    {
        $testname = TestUtils::getTestValue("putSlideShapeInfo", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putSlideShapeInfo", "slideIndex", "int");
        $testpath = TestUtils::getTestValue("putSlideShapeInfo", "path", "string");
        $testshapeIndex = TestUtils::getTestValue("putSlideShapeInfo", "shapeIndex", "int");
        $testdto = TestUtils::getTestValue("putSlideShapeInfo", "dto", "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $testpassword = TestUtils::getTestValue("putSlideShapeInfo", "password", "string");
        $testfolder = TestUtils::getTestValue("putSlideShapeInfo", "folder", "string");
        $teststorage = TestUtils::getTestValue("putSlideShapeInfo", "storage", "string");
        $request = new Requests\PutSlideShapeInfoRequest($testname, $testslideIndex, $testpath, $testshapeIndex, $testdto, $testpassword, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putSlideShapeInfo
     * Updates shape properties.
     */
    public function testPutSlideShapeInfo()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $this->initialize("putSlideShapeInfo", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideShapeInfo");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutSlideShapeInfoInvalidname()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putSlideShapeInfo", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "name");
        }
    }

    public function testPutSlideShapeInfoInvalidslideIndex()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putSlideShapeInfo", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "slideIndex");
        }
    }

    public function testPutSlideShapeInfoInvalidpath()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->path = TestUtils::invalidizeValue("path", $request->path, "string");
        $this->initialize("putSlideShapeInfo", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "path");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "path");
        }
    }

    public function testPutSlideShapeInfoInvalidshapeIndex()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", $request->shapeIndex, "int");
        $this->initialize("putSlideShapeInfo", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "shapeIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "shapeIndex");
        }
    }

    public function testPutSlideShapeInfoInvaliddto()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->dto = TestUtils::invalidizeValue("dto", $request->dto, "\Aspose\Slides\Cloud\Sdk\Model\ShapeBase");
        $this->initialize("putSlideShapeInfo", "dto", $request->dto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "dto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "dto");
        }
    }

    public function testPutSlideShapeInfoInvalidpassword()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putSlideShapeInfo", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "password");
        }
    }

    public function testPutSlideShapeInfoInvalidfolder()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putSlideShapeInfo", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "folder");
        }
    }

    public function testPutSlideShapeInfoInvalidstorage()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putSlideShapeInfo", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "storage");
        }
    }
}
