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


namespace Aspose\Slides\Cloud\Sdk\Tests\Extra;
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class AuthTest extends TestBase
{
    /**
     * Test case for valid app key
     */
    public function testGoodAuth()
    {
        $config = new Configuration();
        $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testConfig.json")), true);
        $appKey = $testConfig["AppKey"];
        $appSid = $testConfig["AppSid"];
        $baseUrl = $testConfig["BaseUrl"];
        $authBaseUrl = array_key_exists("AuthBaseUrl", $testConfig) ? $testConfig["AuthBaseUrl"] : $baseUrl;
        $debug = $testConfig["Debug"];
        $config->setAppKey($appKey);
        $config->setAppSid($appSid);
        $config->setHost($baseUrl);
        $config->setAuthHost($authBaseUrl);
        $config->setDebug($debug);

        $api = new SlidesApi(null, $config);
        $api->getSlidesApiInfo();
    }

    /**
     * Test case for invalid app key
     */
    public function testBadAuth()
    {
        $config = new Configuration();
        $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testConfig.json")), true);
        $appKey = "invalid";
        $appSid = $testConfig["AppSid"];
        $baseUrl = $testConfig["BaseUrl"];
        $authBaseUrl = array_key_exists("AuthBaseUrl", $testConfig) ? $testConfig["AuthBaseUrl"] : $baseUrl;
        $debug = $testConfig["Debug"];
        $config->setAppKey($appKey);
        $config->setAppSid($appSid);
        $config->setHost($baseUrl);
        $config->setAuthHost($authBaseUrl);
        $config->setDebug($debug);

        $api = new SlidesApi(null, $config);
        try {
            $api->getSlidesApiInfo();
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            Assert::assertEquals(401, $ex->getCode());
        }
    }

    /**
     * Test case for invalid app key but valid token
     */
    public function testGoodToken()
    {
        $config = new Configuration();
        $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testConfig.json")), true);
        $appKey = $testConfig["AppKey"];
        $appSid = $testConfig["AppSid"];
        $baseUrl = $testConfig["BaseUrl"];
        $authBaseUrl = array_key_exists("AuthBaseUrl", $testConfig) ? $testConfig["AuthBaseUrl"] : $baseUrl;
        $debug = $testConfig["Debug"];
        $config->setAppKey($appKey);
        $config->setAppSid($appSid);
        $config->setHost($baseUrl);
        $config->setAuthHost($authBaseUrl);
        $config->setDebug($debug);
        $api = new SlidesApi(null, $config);
        $api->getSlidesApiInfo();
        $appKey = "invalid";
        $config->setAppKey($appKey);
        $api = new SlidesApi(null, $config);
        $api->getSlidesApiInfo();
    }

    /**
     * Test case for invalid app key but valid token
     */
    public function testBadToken()
    {
        $config = new Configuration();
        $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testConfig.json")), true);
        $appKey = $testConfig["AppKey"];
        $appSid = $testConfig["AppSid"];
        $baseUrl = $testConfig["BaseUrl"];
        $authBaseUrl = array_key_exists("AuthBaseUrl", $testConfig) ? $testConfig["AuthBaseUrl"] : $baseUrl;
        $debug = $testConfig["Debug"];
        $config->setAppKey($appKey);
        $config->setAppSid($appSid);
        $config->setHost($baseUrl);
        $config->setAuthHost($authBaseUrl);
        $config->setDebug($debug);
        $api = new SlidesApi(null, $config);
        $api->getSlidesApiInfo();
        $authToken = "invalid";
        $config->setAccessToken($authToken);
        $api = new SlidesApi(null, $config);
        $api->getSlidesApiInfo();
    }
}
