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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteParagraph()
    {
        $request = $this->getDeleteParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteParagraphInvalidname()
    {
        $request = $this->getDeleteParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
            $result = $this->api->deleteParagraph($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteParagraphs()
    {
        $request = $this->getDeleteParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteParagraphsInvalidname()
    {
        $request = $this->getDeleteParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
            $result = $this->api->deleteParagraphs($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeletePortion()
    {
        $request = $this->getDeletePortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deletePortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeletePortionInvalidname()
    {
        $request = $this->getDeletePortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "deletePortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
            $result = $this->api->deletePortion($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeletePortions()
    {
        $request = $this->getDeletePortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deletePortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeletePortionsInvalidname()
    {
        $request = $this->getDeletePortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "deletePortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deletePortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
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
            $result = $this->api->deletePortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deletePortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deletePortions", "storage", $this->okToFailValues);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteSlideShape()
    {
        $request = $this->getDeleteSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlideShapeInvalidname()
    {
        $request = $this->getDeleteSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShape($request);
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
            $result = $this->api->deleteSlideShape($request);
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
            $result = $this->api->deleteSlideShape($request);
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
            $result = $this->api->deleteSlideShape($request);
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
            $result = $this->api->deleteSlideShape($request);
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
            $result = $this->api->deleteSlideShape($request);
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
            $result = $this->api->deleteSlideShape($request);
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
     * Removes a shape, specified shapes or all shapes.
     */
    public function testDeleteSlideShapes()
    {
        $request = $this->getDeleteSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "deleteSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testDeleteSlideShapesInvalidname()
    {
        $request = $this->getDeleteSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "deleteSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("deleteSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->deleteSlideShapes($request);
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
            $result = $this->api->deleteSlideShapes($request);
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
            $result = $this->api->deleteSlideShapes($request);
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
            $result = $this->api->deleteSlideShapes($request);
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
            $result = $this->api->deleteSlideShapes($request);
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
            $result = $this->api->deleteSlideShapes($request);
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
            $result = $this->api->deleteSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "deleteSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("deleteSlideShapes", "storage", $this->okToFailValues);
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
     * Read slide shapes or shape info.
     */
    public function testGetParagraphPortion()
    {
        $request = $this->getGetParagraphPortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getParagraphPortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetParagraphPortionInvalidname()
    {
        $request = $this->getGetParagraphPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "getParagraphPortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
            $result = $this->api->getParagraphPortion($request);
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
     * Read slide shapes or shape info.
     */
    public function testGetParagraphPortions()
    {
        $request = $this->getGetParagraphPortionsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getParagraphPortions");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetParagraphPortionsInvalidname()
    {
        $request = $this->getGetParagraphPortionsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getParagraphPortions", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getParagraphPortions", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
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
            $result = $this->api->getParagraphPortions($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getParagraphPortions", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getParagraphPortions", "storage", $this->okToFailValues);
        }
    }
    private function getGetShapeParagraphRequest()
    {
        $testname = TestUtils::getTestValue("getShapeParagraph", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getShapeParagraph", "slideIndex", $this->values);
        $testpath = TestUtils::getTestValue("getShapeParagraph", "path", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getShapeParagraph", "shapeIndex", $this->values);
        $testparagraphIndex = TestUtils::getTestValue("getShapeParagraph", "paragraphIndex", $this->values);
        $testpassword = TestUtils::getTestValue("getShapeParagraph", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getShapeParagraph", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getShapeParagraph", "storage", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getShapeParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetShapeParagraphInvalidname()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "getShapeParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "name", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidslideIndex()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getShapeParagraph", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidpath()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->path = TestUtils::invalidizeValue("path", "getShapeParagraph", $request->path, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "path", $request->path);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "path", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "path", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidshapeIndex()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getShapeParagraph", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidparagraphIndex()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->paragraphIndex = TestUtils::invalidizeValue("paragraphIndex", "getShapeParagraph", $request->paragraphIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "paragraphIndex", $request->paragraphIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "paragraphIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "paragraphIndex", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidpassword()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->password = TestUtils::invalidizeValue("password", "getShapeParagraph", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "password", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidfolder()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getShapeParagraph", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "folder", $this->okToFailValues);
        }
    }

    public function testGetShapeParagraphInvalidstorage()
    {
        $request = $this->getGetShapeParagraphRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getShapeParagraph", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeParagraph", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeParagraph($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeParagraph", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeParagraph", "storage", $this->okToFailValues);
        }
    }
    private function getGetShapeWithFormatRequest()
    {
        $testname = TestUtils::getTestValue("getShapeWithFormat", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("getShapeWithFormat", "slideIndex", $this->values);
        $testshapeIndex = TestUtils::getTestValue("getShapeWithFormat", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("getShapeWithFormat", "format", $this->values);
        $testpassword = TestUtils::getTestValue("getShapeWithFormat", "password", $this->values);
        $testfolder = TestUtils::getTestValue("getShapeWithFormat", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("getShapeWithFormat", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("getShapeWithFormat", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("getShapeWithFormat", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("getShapeWithFormat", "bounds", $this->values);
        $testoutPath = TestUtils::getTestValue("getShapeWithFormat", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("getShapeWithFormat", "fontsFolder", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", "getShapeWithFormat", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "name", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "name", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidslideIndex()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", "getShapeWithFormat", $request->slideIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "slideIndex", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidshapeIndex()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "getShapeWithFormat", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "shapeIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "shapeIndex", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidformat()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->format = TestUtils::invalidizeValue("format", "getShapeWithFormat", $request->format, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "format", $request->format);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "format", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "format", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidpassword()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->password = TestUtils::invalidizeValue("password", "getShapeWithFormat", $request->password, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "password", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "password", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidfolder()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->folder = TestUtils::invalidizeValue("folder", "getShapeWithFormat", $request->folder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "folder", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidstorage()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->storage = TestUtils::invalidizeValue("storage", "getShapeWithFormat", $request->storage, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "storage", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidscaleX()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->scaleX = TestUtils::invalidizeValue("scaleX", "getShapeWithFormat", $request->scaleX, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "scaleX", $request->scaleX);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "scaleX", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "scaleX", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidscaleY()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->scaleY = TestUtils::invalidizeValue("scaleY", "getShapeWithFormat", $request->scaleY, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "scaleY", $request->scaleY);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "scaleY", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "scaleY", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidbounds()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->bounds = TestUtils::invalidizeValue("bounds", "getShapeWithFormat", $request->bounds, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "bounds", $request->bounds);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "bounds", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidoutPath()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "getShapeWithFormat", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "outPath", $this->okToFailValues);
        }
    }

    public function testGetShapeWithFormatInvalidfontsFolder()
    {
        $request = $this->getGetShapeWithFormatRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "getShapeWithFormat", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getShapeWithFormat", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getShapeWithFormat($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getShapeWithFormat", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getShapeWithFormat", "fontsFolder", $this->okToFailValues);
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
     * Read slide shapes or shape info.
     */
    public function testGetSlideShape()
    {
        $request = $this->getGetSlideShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlideShapeInvalidname()
    {
        $request = $this->getGetSlideShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShape($request);
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
            $result = $this->api->getSlideShape($request);
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
            $result = $this->api->getSlideShape($request);
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
            $result = $this->api->getSlideShape($request);
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
            $result = $this->api->getSlideShape($request);
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
            $result = $this->api->getSlideShape($request);
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
            $result = $this->api->getSlideShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShape", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShape", "storage", $this->okToFailValues);
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
     * Read slide shapes or shape info.
     */
    public function testGetSlideShapeParagraphs()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapeParagraphs");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlideShapeParagraphsInvalidname()
    {
        $request = $this->getGetSlideShapeParagraphsRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShapeParagraphs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapeParagraphs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapeParagraphs($request);
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
            $result = $this->api->getSlideShapeParagraphs($request);
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
            $result = $this->api->getSlideShapeParagraphs($request);
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
            $result = $this->api->getSlideShapeParagraphs($request);
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
            $result = $this->api->getSlideShapeParagraphs($request);
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
            $result = $this->api->getSlideShapeParagraphs($request);
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
            $result = $this->api->getSlideShapeParagraphs($request);
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
     * Read slide shapes or shape info.
     */
    public function testGetSlideShapes()
    {
        $request = $this->getGetSlideShapesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlideShapes");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testGetSlideShapesInvalidname()
    {
        $request = $this->getGetSlideShapesRequest();
        $request->name = TestUtils::invalidizeValue("name", "getSlideShapes", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("getSlideShapes", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlideShapes($request);
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
            $result = $this->api->getSlideShapes($request);
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
            $result = $this->api->getSlideShapes($request);
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
            $result = $this->api->getSlideShapes($request);
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
            $result = $this->api->getSlideShapes($request);
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
            $result = $this->api->getSlideShapes($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlideShapes", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlideShapes", "storage", $this->okToFailValues);
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
     * Creates new shape.
     */
    public function testPostAddNewParagraph()
    {
        $request = $this->getPostAddNewParagraphRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewParagraph");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostAddNewParagraphInvalidname()
    {
        $request = $this->getPostAddNewParagraphRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNewParagraph", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewParagraph", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
            $result = $this->api->postAddNewParagraph($request);
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
     * Creates new shape.
     */
    public function testPostAddNewPortion()
    {
        $request = $this->getPostAddNewPortionRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewPortion");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostAddNewPortionInvalidname()
    {
        $request = $this->getPostAddNewPortionRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNewPortion", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewPortion", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
            $result = $this->api->postAddNewPortion($request);
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
     * Creates new shape.
     */
    public function testPostAddNewShape()
    {
        $request = $this->getPostAddNewShapeRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postAddNewShape");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostAddNewShapeInvalidname()
    {
        $request = $this->getPostAddNewShapeRequest();
        $request->name = TestUtils::invalidizeValue("name", "postAddNewShape", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postAddNewShape", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
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
            $result = $this->api->postAddNewShape($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postAddNewShape", "position", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postAddNewShape", "position", $this->okToFailValues);
        }
    }
    private function getPostShapeSaveAsRequest()
    {
        $testname = TestUtils::getTestValue("postShapeSaveAs", "name", $this->values);
        $testslideIndex = TestUtils::getTestValue("postShapeSaveAs", "slideIndex", $this->values);
        $testshapeIndex = TestUtils::getTestValue("postShapeSaveAs", "shapeIndex", $this->values);
        $testformat = TestUtils::getTestValue("postShapeSaveAs", "format", $this->values);
        $testoptions = TestUtils::getTestValue("postShapeSaveAs", "options", $this->values);
        $testpassword = TestUtils::getTestValue("postShapeSaveAs", "password", $this->values);
        $testfolder = TestUtils::getTestValue("postShapeSaveAs", "folder", $this->values);
        $teststorage = TestUtils::getTestValue("postShapeSaveAs", "storage", $this->values);
        $testscaleX = TestUtils::getTestValue("postShapeSaveAs", "scaleX", $this->values);
        $testscaleY = TestUtils::getTestValue("postShapeSaveAs", "scaleY", $this->values);
        $testbounds = TestUtils::getTestValue("postShapeSaveAs", "bounds", $this->values);
        $testoutPath = TestUtils::getTestValue("postShapeSaveAs", "outPath", $this->values);
        $testfontsFolder = TestUtils::getTestValue("postShapeSaveAs", "fontsFolder", $this->values);
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
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", null, null);
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
        $request->name = TestUtils::invalidizeValue("name", "postShapeSaveAs", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "slideIndex", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "slideIndex", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidshapeIndex()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->shapeIndex = TestUtils::invalidizeValue("shapeIndex", "postShapeSaveAs", $request->shapeIndex, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "shapeIndex", $request->shapeIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
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
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "bounds", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "bounds", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidoutPath()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->outPath = TestUtils::invalidizeValue("outPath", "postShapeSaveAs", $request->outPath, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "outPath", $request->outPath);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "outPath", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "outPath", $this->okToFailValues);
        }
    }

    public function testPostShapeSaveAsInvalidfontsFolder()
    {
        $request = $this->getPostShapeSaveAsRequest();
        $request->fontsFolder = TestUtils::invalidizeValue("fontsFolder", "postShapeSaveAs", $request->fontsFolder, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postShapeSaveAs", "fontsFolder", $request->fontsFolder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postShapeSaveAs($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postShapeSaveAs", "fontsFolder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postShapeSaveAs", "fontsFolder", $this->okToFailValues);
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
     * Updates shape properties.
     */
    public function testPutSetParagraphPortionProperties()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSetParagraphPortionProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSetParagraphPortionPropertiesInvalidname()
    {
        $request = $this->getPutSetParagraphPortionPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSetParagraphPortionProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphPortionProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
            $result = $this->api->putSetParagraphPortionProperties($request);
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
     * Updates shape properties.
     */
    public function testPutSetParagraphProperties()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSetParagraphProperties");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSetParagraphPropertiesInvalidname()
    {
        $request = $this->getPutSetParagraphPropertiesRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSetParagraphProperties", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSetParagraphProperties", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
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
            $result = $this->api->putSetParagraphProperties($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSetParagraphProperties", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSetParagraphProperties", "storage", $this->okToFailValues);
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
     * Updates shape properties.
     */
    public function testPutSlideShapeInfo()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putSlideShapeInfo");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutSlideShapeInfoInvalidname()
    {
        $request = $this->getPutSlideShapeInfoRequest();
        $request->name = TestUtils::invalidizeValue("name", "putSlideShapeInfo", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putSlideShapeInfo", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
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
            $result = $this->api->putSlideShapeInfo($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putSlideShapeInfo", "storage", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putSlideShapeInfo", "storage", $this->okToFailValues);
        }
    }
}
