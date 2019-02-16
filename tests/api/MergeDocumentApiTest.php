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
use Aspose\Slides\Cloud\Sdk\Api\MergeDocumentApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class MergeDocumentApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new MergeDocumentApi(null, $this->config);
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
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postPresentationMerge");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPostPresentationMergeInvalidname()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->name = TestUtils::invalidizeValue("name", "postPresentationMerge", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("postPresentationMerge", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
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
            $result = $this->api->postPresentationMerge($request);
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
            $result = $this->api->postPresentationMerge($request);
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
            $result = $this->api->postPresentationMerge($request);
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
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "folder", $this->okToFailValues);
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
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putPresentationMerge");
        }
        if ($needAssertResponse) {
            Assert::assertEquals($expectedCode, json_decode($result, true)["Code"]);
        }
    }

    public function testPutPresentationMergeInvalidname()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->name = TestUtils::invalidizeValue("name", "putPresentationMerge", $request->name, $this->values);
        list($expectedCode, $expectedMessage) = $this->initialize("putPresentationMerge", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
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
            $result = $this->api->putPresentationMerge($request);
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
            $result = $this->api->putPresentationMerge($request);
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
            $result = $this->api->putPresentationMerge($request);
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
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "folder", $expectedCode, $expectedMessage);
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "folder", $this->okToFailValues);
        }
    }
}
