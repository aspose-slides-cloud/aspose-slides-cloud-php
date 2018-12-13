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
        $testname = TestUtils::getTestValue("postPresentationMerge", "name", "string");
        $testrequest = TestUtils::getTestValue("postPresentationMerge", "request", "\Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest");
        $testpassword = TestUtils::getTestValue("postPresentationMerge", "password", "string");
        $teststorage = TestUtils::getTestValue("postPresentationMerge", "storage", "string");
        $testfolder = TestUtils::getTestValue("postPresentationMerge", "folder", "string");
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
        $this->initialize("postPresentationMerge", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postPresentationMerge");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostPresentationMergeInvalidname()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postPresentationMerge", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "name");
        }
    }

    public function testPostPresentationMergeInvalidrequest()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->request = TestUtils::invalidizeValue("request", $request->request, "\Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest");
        $this->initialize("postPresentationMerge", "request", $request->request);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "request");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "request");
        }
    }

    public function testPostPresentationMergeInvalidpassword()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("postPresentationMerge", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "password");
        }
    }

    public function testPostPresentationMergeInvalidstorage()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postPresentationMerge", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "storage");
        }
    }

    public function testPostPresentationMergeInvalidfolder()
    {
        $request = $this->getPostPresentationMergeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postPresentationMerge", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postPresentationMerge", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postPresentationMerge", "folder");
        }
    }
    private function getPutPresentationMergeRequest()
    {
        $testname = TestUtils::getTestValue("putPresentationMerge", "name", "string");
        $testrequest = TestUtils::getTestValue("putPresentationMerge", "request", "\Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest");
        $testpassword = TestUtils::getTestValue("putPresentationMerge", "password", "string");
        $teststorage = TestUtils::getTestValue("putPresentationMerge", "storage", "string");
        $testfolder = TestUtils::getTestValue("putPresentationMerge", "folder", "string");
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
        $this->initialize("putPresentationMerge", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putPresentationMerge");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutPresentationMergeInvalidname()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putPresentationMerge", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "name");
        }
    }

    public function testPutPresentationMergeInvalidrequest()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->request = TestUtils::invalidizeValue("request", $request->request, "\Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest");
        $this->initialize("putPresentationMerge", "request", $request->request);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "request");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "request");
        }
    }

    public function testPutPresentationMergeInvalidpassword()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->password = TestUtils::invalidizeValue("password", $request->password, "string");
        $this->initialize("putPresentationMerge", "password", $request->password);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "password");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "password");
        }
    }

    public function testPutPresentationMergeInvalidstorage()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putPresentationMerge", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "storage");
        }
    }

    public function testPutPresentationMergeInvalidfolder()
    {
        $request = $this->getPutPresentationMergeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putPresentationMerge", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putPresentationMerge($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putPresentationMerge", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putPresentationMerge", "folder");
        }
    }
}
