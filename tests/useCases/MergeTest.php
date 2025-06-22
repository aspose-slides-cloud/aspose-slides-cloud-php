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
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class MergeTest extends TestBase
{
    public function testMerge()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getSlidesApi()->copyFile(self::tempFolderName."/".self::fileName2, self::folderName."/".self::fileName2);
        $this->getSlidesApi()->copyFile(self::tempFolderName."/".self::fileNamePdf, self::folderName."/".self::fileNamePdf);

        $request = new PresentationsMergeRequest();
        $request->setPresentationPaths([ self::folderName."/".self::fileName2, self::folderName."/".self::fileNamePdf ]);
        $result = $this->getSlidesApi()->merge(self::fileName, $request, self::password, self::folderName);
        Assert::assertNotNull($result);
    }

    public function testOrderedMerge()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getSlidesApi()->copyFile(self::tempFolderName."/".self::fileName2, self::folderName."/".self::fileName2);

        $request = new OrderedMergeRequest();
        $presentation = new PresentationToMerge();
        $presentation->setPath(self::folderName."/".self::fileName2);
        $presentation->setSlides([ 2, 1 ]);
        $request->setPresentations([ $presentation ]);
        $result = $this->getSlidesApi()->orderedMerge(self::fileName, $request, self::password, self::folderName);
        Assert::assertNotNull($result);
    }

    public function testMergeOnline()
    {
        $files = [ fopen(self::localFolderName."/TemplateCV.pptx", 'r'), fopen(self::localFolderName."/".self::fileName2, 'r') ];
        $result = $this->getSlidesApi()->mergeOnline($files);
        Assert::assertTrue($result->isFile());
    }

    public function testMergeAndSaveOnline()
    {
        $files = [ fopen(self::localFolderName."/TemplateCV.pptx", 'r'), fopen(self::localFolderName."/".self::fileName2, 'r') ];
        $this->getSlidesApi()->mergeAndSaveOnline(self::outPath, $files);
        $result = $this->getSlidesApi()->objectExists(self::outPath);
        Assert::assertTrue($result->getExists());
    }

    public function testMergeOnlineWithRequest()
    {
        $files = [ fopen(self::localFilePath, 'r'), fopen(self::localFolderName."/".self::fileName2, 'r') ];
        $request = new OrderedMergeRequest();
        $presentation1 = new PresentationToMerge();
        $presentation1->setPath(self::fileName);
        $presentation1->setPassword(self::password);
        $presentation2 = new PresentationToMerge();
        $presentation2->setPath(self::fileName2);
        $presentation2->setSlides([ 1, 2 ]);
        $request->setPresentations([ $presentation1, $presentation2 ]);
        $result = $this->getSlidesApi()->mergeOnline($files, $request);
        Assert::assertTrue($result->isFile());
    }

    public function testMergeOnlineCombined()
    {
        $this->getSlidesApi()->copyFile(self::tempFolderName."/".self::fileName2, self::folderName."/".self::fileName2);

        $files = [ fopen(self::localFilePath, 'r') ];
        $request = new OrderedMergeRequest();
        $presentation1 = new PresentationToMerge();
        $presentation1->setPath(self::fileName);
        $presentation1->setPassword(self::password);
        $presentation2 = new PresentationToMerge();
        $presentation2->setSlides([ 1, 2 ]);
        $presentation2->setSource("Storage");
        $presentation2->setPath(self::folderName."/".self::fileName2);
        $request->setPresentations([ $presentation1, $presentation2 ]);
        $result = $this->getSlidesApi()->mergeOnline($files, $request);
        Assert::assertTrue($result->isFile());
    }

    public function testMergeOnlineUrl()
    {
        $this->getSlidesApi()->copyFile(self::tempFolderName."/".self::fileName, self::folderName."/".self::fileName);
        
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

        $result = $this->getSlidesApi()->mergeOnline(null, $request);
        Assert::assertTrue($result->isFile());
    }

    public const url = "https://www.dropbox.com/scl/fi/nz3yt2wpg4eugiw12bz3g/info.pptx?rlkey=wju4vbi6h46q8733tzzvfgufz&e=1&st=pqt66x86&dl=1";
    public const fileName2 = "test-unprotected.pptx";
    public const fileNamePdf = "test.pdf";
    public const outPath = self::folderName."/merged.pptx";
}
