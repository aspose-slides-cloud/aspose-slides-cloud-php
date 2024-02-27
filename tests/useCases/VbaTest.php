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

use Aspose\Slides\Cloud\Sdk\Model\VbaModule;
use Aspose\Slides\Cloud\Sdk\Model\VbaReference;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class VbaTest extends TestBase
{
    public function testCreateVbaModule()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $vbaModule = new VbaModule();
        $vbaModule->setName("Module1");
        $vbaModule->setSourceCode("Sub Test() MsgBox \"Test\" End Sub");

        $reference0 = new VbaReference();
        $reference0->setName("stdole");
        $reference0->setLibId("*\\G{00020430-0000-0000-C000-000000000046}#2.0#0#C:\\Windows\\system32\\stdole2.tlb#OLE Automation");
        $reference1 = new VbaReference();
        $reference1->setName("Office");
        $reference1->setLibId("*\\G{2DF8D04C-5BFA-101B-BDE5-00AA0044DE52}#2.0#0#C:\\Program Files\\Common Files\\Microsoft Shared\\OFFICE14\\MSO.DLL#Microsoft Office 14.0 Object Library");
        $vbaModule->setReferences([$reference0, $reference1]);

        $result = $this->getSlidesApi()->createVbaModule(self::fileName, $vbaModule, self::password, self::folderName);
        echo "\"" . $result->getName() . "\" has been created\n" . $result->getSelfUri()->getHref();
    }

    public function testDeleteVbaModule()
    {
        $fileName = "macros.pptm";
        $this->getSlidesApi()->copyFile(self::tempFolderName . "/" . $fileName, self::folderName . "/" . $fileName);
        $moduleIndex = 1;

        $result = $this->getSlidesApi()->deleteVbaModule($fileName, $moduleIndex, null, self::folderName);
        echo "VBA project contains: " . count($result->getModules()) . " module(s), and " . count($result->getReferences()) . " references";
    }

    public function testGetVbaModule()
    {
        $fileName = "macros.pptm";
        $this->getSlidesApi()->copyFile(self::tempFolderName . "/" . $fileName, self::folderName . "/" . $fileName);
        $moduleIndex = 1;

        $result = $this->getSlidesApi()->getVbaModule($fileName, $moduleIndex, null, self::folderName);
        echo "Module: " . $result->getName() . "\n" . $result->getSourceCode();
    }

    public function testGetVbaProject()
    {
        $fileName = "macros.pptm";
        $this->getSlidesApi()->copyFile(self::tempFolderName . "/" . $fileName, self::folderName . "/" . $fileName);

        $result = $this->getSlidesApi()->getVbaProject($fileName, null, self::folderName);
        echo "VBA project contains: " . count($result->getModules()) . " module(s), and " . count($result->getReferences()) . " references";
    }

    public function testUpdateVbaModule()
    {
        $fileName = "macros.pptm";
        $this->getSlidesApi()->copyFile(self::tempFolderName . "/" . $fileName, self::folderName . "/" . $fileName);
        $vbaModule = new VbaModule();
        $vbaModule->setSourceCode("Sub Test() MsgBox \"Test\" End Sub");
        $moduleIndex = 1;
        $result = $this->getSlidesApi()->updateVbaModule($fileName, $moduleIndex, $vbaModule, self::password, self::folderName);
        echo "\"" . $result->getName() . "\" has been updated\n" . $result->getSelfUri()->getHref();
    }
}