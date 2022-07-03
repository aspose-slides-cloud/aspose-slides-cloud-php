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

namespace Aspose\Slides\Cloud\Sdk\Tests\Utils;

use \Exception;
use \InvalidArgumentException;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

class TestUtils
{
    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const changedFileName = "changedtest.pptx";
    public const templateFileName = "TemplateCV.pptx";
    public static $fileStream = null;

    public static function getFileUploadPath()
    {
        return self::folderName."/".self::fileName;
    }

    public static function getFilePath()
    {
        return realpath(__DIR__.'/../..').'/TestData/'.self::fileName;
    }

    /**
     */
    public static function getTestValue($functionName, $name, $values, $type)
    {
        $value = null;
        foreach ($values as $rule)
        {
            self::applyRule($rule, $value, $functionName, $name, $type);
        }
        return $value;
    }

    private static function applyRule($rule, &$value, $functionName, $name, $type)
    {
        if (self::checkMethod($rule, $functionName) && self::checkParameter($rule, $name) && self::checkLanguage($rule) && self::checkType($rule, $type))
        {
            if (array_key_exists("Value", $rule))
            {
                if (is_bool($rule["Value"]))
                {
                    $value = $rule["Value"];
                }
                else if (is_null($rule["Value"]))
                {
                    $value = null;
                }
                else if (is_string($rule["Value"]) && substr($rule["Value"], 0, 1) == "@")
                {
                    if (substr($rule["Value"], 1, 1) == "(")
                    {
                        $value = [];
                        $filePaths = explode(",", substr($rule["Value"], 2, strlen($rule["Value"]) - 3));
                        foreach ($filePaths as $filePath)
                        {
                            array_push($value, fopen(realpath(__DIR__.'/../..').'/TestData/'.$filePath, 'r'));
                        }
                    }
                    else
                    {
                        $filePath = realpath(__DIR__.'/../..').'/TestData/'.substr($rule["Value"], 1);
                        $value = fopen($filePath, 'r');
                    }
                }
                else if ($type && substr($type, 0, strlen('\Aspose\Slides\Cloud\Sdk\Model\\')) == '\Aspose\Slides\Cloud\Sdk\Model\\')
                {
                    if (array_key_exists("Type", $rule) && $rule["Type"] != 'model')
                    {
                        $type = '\Aspose\Slides\Cloud\Sdk\Model\\' . $rule["Type"];
                    }
                    $value = ObjectSerializer::deserialize($rule["Value"], $type, []);
                }
                else
                {
                    $value = $rule["Value"] ? str_replace("%n", $name, $rule["Value"]) : $rule["Value"];
                }
            }
        }
    }

    private static function applyInvalidValueRule($rule, &$value, $functionName, $name, $validValue, $type)
    {
        if (self::checkMethod($rule, $functionName) && self::checkParameter($rule, $name) && self::checkLanguage($rule) && self::checkType($rule, $type))
        {
            if (array_key_exists("InvalidValue", $rule))
            {
                if (is_bool($rule["InvalidValue"]))
                {
                    $value = $rule["InvalidValue"];
                }
                else if (is_null($rule["InvalidValue"]))
                {
                    if ($type && substr($type, 0, strlen('\Aspose\Slides\Cloud\Sdk\Model\\')) == '\Aspose\Slides\Cloud\Sdk\Model\\')
                    {
                        $value = $validValue;
                    }
                    else
                    {
                        $value = null;
                    }
                }
                else
                {
                    $value = str_replace("%v", is_array($validValue) ? implode(",", $validValue) : $validValue, $rule["InvalidValue"]);
                }
            }
        }
    }

    private static function checkMethod($rule, $functionName)
    {
        return self::checkArrayKey($rule, "Method", $functionName);
    }

    private static function checkParameter($rule, $name)
    {
        return self::checkArrayKey($rule, "Parameter", $name);
    }

    private static function checkType($rule, $type)
    {
        if (!array_key_exists("Type", $rule))
        {
            return true;
        }
        $ruleValue = $rule["Type"];
        if ($ruleValue == "number")
        {
            return $type == "int";
        }
        if ($ruleValue == "int")
        {
            return $type == "int";
        }
        if ($ruleValue == "int[]")
        {
            return $type == "array";
        }
        if ($ruleValue == "bool")
        {
            return $type == "bool";
        }
        if ($ruleValue == "stream")
        {
            return $type == "\\SplFileObject";
        }
        if ($ruleValue == "stream[]")
        {
            return $type == "array<\\SplFileObject>";
        }
        if ($ruleValue == "model")
        {
            return substr($type, 0, strlen('\Aspose\Slides\Cloud\Sdk\Model\\')) == '\Aspose\Slides\Cloud\Sdk\Model\\';
        }
        $modelType = '\Aspose\Slides\Cloud\Sdk\Model\\'.$ruleValue;
        if ($modelType == $type  || is_subclass_of($modelType, $type))
        {
            return true;
        }
        return false;
    }

    private static function checkLanguage($rule)
    {
        return !array_key_exists("Language", $rule) || strcasecmp("PHP", $rule["Language"]) == 0;
    }

    private static function checkArrayKey($rule, $key, $value)
    {
        if (!array_key_exists($key, $rule))
        {
            return true;
        }
        $ruleValue = $rule[$key];
        if (substr($ruleValue, 0, 1) == "/" && substr($ruleValue, -1) == "/")
        {
            return preg_match($ruleValue . "i", $value) > 0;
        }
        return strcasecmp($value, $ruleValue) == 0;
    }

    /**
     */
    public static function invalidizeValue($name, $functionName, $value, $values, $type)
    {
        $invalidValue = $value;
        foreach ($values as $rule)
        {
            self::applyInvalidValueRule($rule, $invalidValue, $functionName, $name, $value, $type);
        }
        return $invalidValue;
    }

    public static function assertSuccessfulException(Exception $ex, $functionName)
    {
        throw $ex;
    }

    public static function assertException(ApiException $ex, $functionName, $fieldName, $expectedCode, $expectedMessage)
    {
        Assert::assertEquals($expectedCode, $ex->getCode());
        Assert::assertRegExp("/".$expectedMessage."/", $ex->getResponseObject()->getMessage());
    }

    public static function assertInvalidArgumentException(InvalidArgumentException $ex, $functionName, $fieldName, $expectedCode, $expectedMessage)
    {
        Assert::assertEquals($expectedCode, 400);
        Assert::assertRegExp("/".$expectedMessage."/", $ex->getMessage());
    }

    public static function assertResponse($functionName, $fieldName, $okToFailValues)
    {
        $okToFail = false;
        foreach ($okToFailValues as $rule)
        {
            self::applyOkToFailRule($rule, $okToFail, $functionName, $fieldName);
        }
        if (!$okToFail) {
            Assert::fail("Must have failed");
        }
    }

    private static function applyOkToFailRule($rule, &$ok, $functionName, $name)
    {
        if (self::checkMethod($rule, $functionName) && self::checkParameter($rule, $name))
        {
            $ok = true;
        }
    }

    public static function strStartsWith($string, $head) {
        return !strncmp($string, $head, strlen($head));
    }
    
    public static function strEndsWith($string, $tail) {
        if (strlen($tail) == 0) {
            return true;
        }
        return (substr($string, -strlen($tail)) === $tail);
    }

}
