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
use Aspose\Slides\Cloud\Sdk\Model\Section;
use Aspose\Slides\Cloud\Sdk\Model\Sections;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class SectionTest extends TestBase
{
    public function testSectionsGet()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->getSections(self::fileName, self::password, self::folderName);
        Assert::assertEquals(self::sectionCount, count($result->getSectionList()));
    }

    public function testSectionsPut()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Sections();
        $section1 = new Section();
        $section1->setName("Section1");
        $section1->setFirstSlideIndex(1);
        $section2 = new Section();
        $section2->setName("Section2");
        $section2->setFirstSlideIndex(3);
        $dto->setSectionList([ $section1, $section2 ]);
        $result = $this->getApi()->setSections(self::fileName, $dto, self::password, self::folderName);
        Assert::assertEquals(count($dto->getSectionList()), count($result->getSectionList()));
        Assert::assertEquals($dto->getSectionList()[1]->getFirstSlideIndex() - $dto->getSectionList()[0]->getFirstSlideIndex(), count($result->getSectionList()[0]->getSlideList()));
    }

    public function testSectionPost()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->createSection(self::fileName, "NewSection", 5, self::password, self::folderName);
        Assert::assertEquals(self::sectionCount + 1, count($result->getSectionList()));
    }

    public function testSectionPut()
    {
        $sectionName = "UpdatedSection";
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->updateSection(self::fileName, 2, $sectionName, self::password, self::folderName);
        Assert::assertEquals(self::sectionCount, count($result->getSectionList()));
        Assert::assertEquals($sectionName, $result->getSectionList()[1]->getName());
    }

    public function testSectionMove()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->moveSection(self::fileName, 1, 2, self::password, self::folderName);
        Assert::assertEquals(self::sectionCount, count($result->getSectionList()));
    }

    public function testSectionsClear()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteSections(self::fileName, null, null, self::password, self::folderName);
        Assert::assertEquals(0, count($result->getSectionList()));
    }

    public function testSectionsDelete()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteSections(self::fileName, [ 2, 3 ], null, self::password, self::folderName);
        Assert::assertEquals(self::sectionCount - 2, count($result->getSectionList()));
    }

    public function testSectionDelete()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $result = $this->getApi()->deleteSection(self::fileName, 2, null, self::password, self::folderName);
        Assert::assertEquals(self::sectionCount - 1, count($result->getSectionList()));
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const sectionCount = 3;
}
