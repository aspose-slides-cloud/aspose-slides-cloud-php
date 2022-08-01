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
use Aspose\Slides\Cloud\Sdk\Model\OrderedMergeRequest;
use Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest;
use Aspose\Slides\Cloud\Sdk\Model\PresentationToMerge;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class MergeTest extends TestBase
{
    public function testMergeStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $this->getApi()->copyFile("TempTests/".self::fileName2, self::folderName."/".self::fileName2);
        $this->getApi()->copyFile("TempTests/".self::fileNamePdf, self::folderName."/".self::fileNamePdf);

        $request = new PresentationsMergeRequest();
        $request->setPresentationPaths([ self::folderName."/".self::fileName2, self::folderName."/".self::fileNamePdf ]);
        $result = $this->getApi()->merge(self::fileName, $request, self::password, self::folderName);
    }

    public function testMergeOrderedStorage()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $this->getApi()->copyFile("TempTests/".self::fileName2, self::folderName."/".self::fileName2);

        $request = new OrderedMergeRequest();
        $presentation = new PresentationToMerge();
        $presentation->setPath(self::folderName."/".self::fileName2);
        $presentation->setSlides([ 2, 1 ]);
        $request->setPresentations([ $presentation ]);
        $result = $this->getApi()->orderedMerge(self::fileName, $request, self::password, self::folderName);
    }

    public function testMergeRequest()
    {
        $files = [ fopen("TestData/TemplateCV.pptx", 'r'), fopen("TestData/".self::fileName2, 'r') ];
        $result = $this->getApi()->mergeOnline($files);
        Assert::assertTrue($result->isFile());
    }

    public function testMergeAndSaveRequest()
    {
        $files = [ fopen("TestData/TemplateCV.pptx", 'r'), fopen("TestData/".self::fileName2, 'r') ];
        $this->getApi()->mergeAndSaveOnline(self::outPath, $files);
        $result = $this->getApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testMergeOrderedRequest()
    {
        $files = [ fopen("TestData/".self::fileName, 'r'), fopen("TestData/".self::fileName2, 'r') ];
        $request = new OrderedMergeRequest();
        $presentation1 = new PresentationToMerge();
        $presentation1->setPath(self::fileName);
        $presentation1->setPassword(self::password);
        $presentation2 = new PresentationToMerge();
        $presentation2->setPath(self::fileName2);
        $presentation2->setSlides([ 1, 2 ]);
        $request->setPresentations([ $presentation1, $presentation2 ]);
        $result = $this->getApi()->mergeOnline($files, $request);
        Assert::assertTrue($result->isFile());
    }

    public function testMergeOrderedCombined()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName2, self::folderName."/".self::fileName2);

        $files = [ fopen("TestData/".self::fileName, 'r') ];
        $request = new OrderedMergeRequest();
        $presentation1 = new PresentationToMerge();
        $presentation1->setPath(self::fileName);
        $presentation1->setPassword(self::password);
        $presentation2 = new PresentationToMerge();
        $presentation2->setSlides([ 1, 2 ]);
        $presentation2->setSource("Storage");
        $presentation2->setPath(self::folderName."/".self::fileName2);
        $request->setPresentations([ $presentation1, $presentation2 ]);
        $result = $this->getApi()->mergeOnline($files, $request);
        Assert::assertTrue($result->isFile());
    }

    public function testMergeOrderedUrl()
    {
        $this->initialize(null, null, null);
        $this->getApi()->copyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $request = new OrderedMergeRequest();
        $presentation1 = new PresentationToMerge();
        $presentation1->setPath(self::folderName."/".self::fileName);
        $presentation1->setPassword(self::password);
        $presentation1->setSource("Storage");
        $presentation1->setSlides([ 1, 2 ]);
        $presentation2 = new PresentationToMerge();
        $presentation2->setPath(self::url);
        $presentation2->setSource("Url");
        $presentation2->setSlides([ 1 ]);
        $request->setPresentations([ $presentation1, $presentation2 ]);

        $result = $this->getApi()->mergeOnline(null, $request);
        Assert::assertTrue($result->isFile());
    }

    public const url = "https://drive.google.com/uc?export=download&id=1ycMzd7e--Ro9H8eH2GL5fPP7-2HjX4My";
    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const fileName2 = "test-unprotected.pptx";
    public const fileNamePdf = "test.pdf";
    public const password = "password";
    public const outPath = self::folderName."/merged.pptx";
}
