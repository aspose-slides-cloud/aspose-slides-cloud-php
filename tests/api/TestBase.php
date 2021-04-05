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

use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Model\Requests\DownloadFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\CopyFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\UploadFileRequest;
use Aspose\Slides\Cloud\Sdk\Model\Requests\DeleteFileRequest;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class TestBase extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (self::$values == null)
        {
            $rules = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testRules.json")), true);
            self::$fileRules = $rules["Files"];
            self::$rules = $rules["Results"];
            self::$values = $rules["Values"];
            self::$okToFailValues = $rules["OKToNotFail"];
        }
    }

    protected function getApi()
    {
        if (self::$api == null)
        {
            $config = new Configuration();
            $testConfig = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__."/../../testConfig.json")), true);
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
    
    protected function initialize($functionName, $invalidFieldName, $invalidFieldValue)
    {
        if (!self::$isInitialized)
        {
            $versionFile = $this->getApi()->DownloadFile("TempTests/version.txt");
            $versionLength = $versionFile->getSize();
            $version = 0;
            if ($versionLength > 0)
            {
                $version = $versionFile->fread($versionFile->getSize());
            }
            if ($versionLength <= 0 || $version != self::$expectedTestDataVersion)
            {
                foreach (scandir(realpath(__DIR__.'/../..').'/TestData') as $key => $value)
                {
                    $path = realpath(__DIR__.'/../..').'/TestData/'.$value;
                    if (is_file($path))
                    {
                        $stream = fopen(realpath(__DIR__.'/../..').'/TestData/'.$value, 'r');
                        $this->getApi()->UploadFile("TempTests/".$value, $stream);
                    }
                    $this->getApi()->UploadFile("TempTests/version.txt", self::$expectedTestDataVersion);
                }
            }
            self::$isInitialized = true;
        }
        $expectedValues = $this->applyRules($functionName, $invalidFieldName, $invalidFieldValue);
        $fileRulesToApply = $this->applyFileRules($functionName, $invalidFieldName, $invalidFieldValue);
        if ($functionName != 'deleteFolder' &&  $invalidFieldName != 'recursive')
        foreach ($fileRulesToApply as $path => $rule)
        {
            if ($rule["Action"] == "Put")
            {
                $this->getApi()->CopyFile("TempTests/".$rule["ActualName"], $path);
            }
            else if ($rule["Action"] == "Delete")
            {
                $this->getApi()->DeleteFile($path);
            }
        }
        return $expectedValues;
    }

    private function applyRules($functionName, $invalidFieldName, $invalidFieldValue)
    {
        $expectedCode = 0;
        $expectedMessage = "An error occured.";
        foreach (self::$rules as $rule)
        {
            $this->applyRule($rule, $expectedCode, $expectedMessage, $functionName, $invalidFieldName, $invalidFieldValue);
        }
        return [ $expectedCode, $expectedMessage ];
    }

    private function applyFileRules($functionName, $invalidFieldName, $invalidFieldValue)
    {
        $rulesToApply = [];
        foreach (self::$fileRules as $rule)
        {
            $this->applyFileRule($rule, $rulesToApply, $functionName, $invalidFieldName, $invalidFieldValue);
        }
        return $rulesToApply;
    }

    private function applyRule($rule, &$expectedCode, &$expectedMessage, $functionName, $invalidFieldName, $invalidFieldValue)
    {
        if ($this->checkMethod($rule, $functionName)
            && $this->checkInvalid($rule, $invalidFieldName)
            && $this->checkParameter($rule, $invalidFieldName)
            && $this->checkLanguage($rule))
        {
            if (array_key_exists("Code", $rule))
            {
                $expectedCode = $rule["Code"];
            }
            if (array_key_exists("Message", $rule))
            {
                $expectedMessage = str_replace("%v", is_array($invalidFieldValue) ? implode(",", $invalidFieldValue) : $invalidFieldValue, $rule["Message"]);
            }
        }
    }

    private function applyFileRule($rule, &$files, $functionName, $invalidFieldName, $invalidFieldValue)
    {
        if ($this->checkMethod($rule, $functionName, $invalidFieldName) && $this->checkParameter($rule, $invalidFieldName))
        {
            if (array_key_exists("File", $rule))
            {
                $fileFolder = "TempSlidesSDK";
                if (array_key_exists("Folder", $rule))
                {
                    $fileFolder = str_replace("%v", is_array($invalidFieldValue) ? implode(",", $invalidFieldValue) : $invalidFieldValue, $rule["Folder"]);
                }
                $fileName = str_replace("%v", is_array($invalidFieldValue) ? implode(",", $invalidFieldValue) : $invalidFieldValue, $rule["File"]);
                $filePath = $fileFolder."/".$fileName;
                $files[$fileFolder."/".$fileName] = $rule;
                $files[$fileFolder."/".$fileName]["ActualName"] = $fileName;
            }
        }
    }

    private function checkMethod($rule, $functionName)
    {
        return !array_key_exists("Method", $rule) || strcasecmp($functionName, $rule["Method"]) == 0;
    }

    private function checkInvalid($rule, $invalidFieldName)
    {
        return !array_key_exists("Invalid", $rule) || $rule["Invalid"] != is_null($invalidFieldName);
    }

    private function checkParameter($rule, $invalidFieldName)
    {
        return !array_key_exists("Parameter", $rule) || strcasecmp($invalidFieldName, $rule["Parameter"]) == 0;
    }

    private function checkLanguage($rule)
    {
        return !array_key_exists("Language", $rule) || strcasecmp("PHP", $rule["Language"]) == 0;
    }

    protected static $values;
    protected static $okToFailValues;
    private static $rules;
    private static $fileRules;
    private static $isInitialized = false;
    private static $expectedTestDataVersion = "1";
    private static $api;
}
