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

namespace Aspose\Slides\Cloud\Sdk\Tests\UseCases;
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class TimeoutTest extends TestBase
{
    /**
     * Test case for SaveSlideAs with little timeout
     */
    public function testSaveSlideAsSvgTimeout()
    {
/* unstable test
        list($expectedCode, $expectedMessage) = $this->initialize("postSlideSaveAs", null, null);

        $config = new Configuration();
        $config->setAppSid($this->config->getClientId());
        $config->setAppKey($this->config->getClientSecret());
        $config->setHost($this->config->getHost());
        $config->setAuthHost($this->config->getAuthHost());
        $config->setDebug($this->config->getDebug());
        $config->setTimeout(1);

        $slidesApi = new SlidesApi(null, $config);

        try {
//            $result = $this->getApi()->postSlideSaveAs("test.ppt", 1, "svg", null, null, null, "password", "TempSlidesSDK");
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postSlideSaveAs");
        }*/
    }
}
