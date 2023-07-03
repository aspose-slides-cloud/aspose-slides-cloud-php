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

namespace Aspose\Slides\Cloud\Sdk\Tests;

use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;

class TestBase extends \PHPUnit_Framework_TestCase
{
    protected function getApi()
    {
        if (self::$api == null)
        {
            $config = new Configuration();
            $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../testConfig.json")), true);
            $clientId = $testConfig["ClientId"];
            $clientSecret = $testConfig["ClientSecret"];
            $baseUrl = $testConfig["BaseUrl"];
            $authBaseUrl = array_key_exists("AuthBaseUrl", $testConfig) ? $testConfig["AuthBaseUrl"] : $baseUrl;
            $debug = $testConfig["Debug"];
            $config->setAppSid($clientId);
            $config->setAppKey($clientSecret);
            $config->setHost($baseUrl);
            $config->setAuthHost($authBaseUrl);
            $config->setDebug($debug);

            self::$api = new SlidesApi(null, $config);
        }
        return self::$api;
    }

    private static $api;

    protected const tempFolderName = "TempTests";
    protected const folderName = "TempSlidesSDK";
    protected const localFolderName = "TestData";
    protected const fileName = "test.pptx";
    protected const tempFilePath = self::tempFolderName . "/" . self::fileName;
    protected const filePath = self::folderName . "/" . self::fileName;
    protected const localFilePath = self::localFolderName . "/" . self::fileName;
    protected const password = "password";
}
