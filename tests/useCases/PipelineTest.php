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
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;
use Aspose\Slides\Cloud\Sdk\Model\Input;
use Aspose\Slides\Cloud\Sdk\Model\InputFile;
use Aspose\Slides\Cloud\Sdk\Model\OutputFile;
use Aspose\Slides\Cloud\Sdk\Model\Pipeline;
use Aspose\Slides\Cloud\Sdk\Model\RequestInputFile;
use Aspose\Slides\Cloud\Sdk\Model\Save;
use Aspose\Slides\Cloud\Sdk\Model\Task;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class PipelineTest extends TestBase
{
    /**
     * Test case for postSlidesPipeline with two files
     */
    public function testPipeline()
    {
        $file1 = new RequestInputFile();
        $file1->setIndex(0);

        $file2 = new RequestInputFile();
        $file2->setIndex(1);

        $input = new Input();
        $input->setTemplateData($file1);
        $input->setTemplate($file2);

        $output = new OutputFile();

        $task = new Save();
        $task->setFormat(ExportFormat::PPTX);
        $task->setOutput($output);

        $pipeline = new Pipeline();
        $pipeline->setInput($input);
        $pipeline->setTasks([ $task ]);

        $files = [ fopen("TestData/TemplatingCVDataWithBase64.xml", 'r'), fopen("TestData/TemplateCV.pptx", 'r') ];

        $result = $this->getApi()->pipeline($pipeline, $files);
        Assert::assertTrue($result->isFile());
    }
}
