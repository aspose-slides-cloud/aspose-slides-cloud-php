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
 
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class AsyncApiTest extends TestBase
{
    public function testAsyncConvert()
    {
        $operationId = $this->getSlidesAsyncApi()->startConvert(fopen(self::localFilePath, 'r'), self::format, self::password);

        for ($i = 0; $i < self::maxTries; $i++)
        {
            sleep(self::timeout);
            $operation = $this->getSlidesAsyncApi()->getOperationStatus($operationId);
            if ($operation->getStatus() != "Created" && $operation->getStatus() != "Enqueued" && $operation->getStatus() != "Started")
            {
                break;
            }
        }

        Assert::assertEquals("Finished", $operation->getStatus());
        Assert::assertNull($operation->getError());

        $converted = $this->getSlidesAsyncApi()->getOperationResult($operationId);
        Assert::assertTrue($converted->isFile());
    }

    public function testAsyncDownloadPresentation()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $operationId = $this->getSlidesAsyncApi()->startDownloadPresentation(self::fileName, self::format, null, self::password, self::folderName);

        for ($i = 0; $i < self::maxTries; $i++)
        {
            sleep(self::timeout);
            $operation = $this->getSlidesAsyncApi()->getOperationStatus($operationId);
            if ($operation->getStatus() != "Created" && $operation->getStatus() != "Enqueued" && $operation->getStatus() != "Started")
            {
                break;
            }
        }

        Assert::assertEquals("Finished", $operation->getStatus());
        Assert::assertNull($operation->getError());

        $converted = $this->getSlidesAsyncApi()->getOperationResult($operationId);
        Assert::assertTrue($converted->isFile());
    }

    public function testAsyncBadOperation()
    {
        $operationId = $this->getSlidesAsyncApi()->startDownloadPresentation("IDoNotExist.pptx", self::format);

        for ($i = 0; $i < self::maxTries; $i++)
        {
            sleep(self::timeout);
            $operation = $this->getSlidesAsyncApi()->getOperationStatus($operationId);
            if ($operation->getStatus() != "Created" && $operation->getStatus() != "Enqueued" && $operation->getStatus() != "Started")
            {
                break;
            }
        }

        Assert::assertEquals("Failed", $operation->getStatus());
        Assert::assertNotNull($operation->getError());
    }

    public const format = ExportFormat::PDF;
    public const timeout = 3;
    public const maxTries = 10;
}
