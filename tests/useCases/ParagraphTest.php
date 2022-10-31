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

use Aspose\Slides\Cloud\Sdk\Model\Paragraph;
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\PortionFormat;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;
use PHPUnit\Framework\Assert;

class ParagraphTest extends TestBase
{
    public function testGetParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->getParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            self::password,
            self::folderName
        );
        Assert::assertEquals(2, count($response->getPortionList()));
    }

    public function testGetParagraphs()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->getParagraphs(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::password,
            self::folderName
        );
        Assert::assertEquals(2, count($response->getParagraphLinks()));
    }

    public function testGetSubshapeParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shapeIndex = 3;
        $subShape = "1";
        $response = $this->getApi()->getParagraph(self::fileName, self::slideIndex, $shapeIndex, 1, 
            self::password, self::folderName, null, $subShape);
        Assert::assertEquals(2, count($response->getPortionList()));
    }

    public function testGetSubshapeParagraphs()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shapeIndex = 3;
        $subShape = "1";
        $response = $this->getApi()->getParagraphs(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        Assert::assertEquals(2, count($response->getParagraphLinks())); 
    }

    public function testCreateParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Paragraph();
        $dto->setMarginLeft(2);
        $dto->setMarginRight(2);
        $dto->setAlignment("Center");

        $response = $this->getApi()->createParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getMarginLeft(), $response->getMarginLeft());
        Assert::assertEquals($dto->getMarginRight(), $response->getMarginRight());
        Assert::assertEquals($dto->getAlignment(), $response->getAlignment());
    }

    public function testCreateParagraphWithPortions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/" . self::fileName, self::folderName . "/" . self::fileName);

        $dto = new Paragraph();
        $portion1Dto = new Portion();
        $portion1Dto->setText("Portion1");
        $portion2Dto = new Portion();
        $portion2Dto->setText("Portion2");
        $portion2Dto->setFontBold('True');
        $dto->setPortionList([$portion1Dto, $portion2Dto]);

        $response = $this->getApi()->createParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName
        );
               
        Assert::assertEquals(count($dto->getPortionList()), count($dto->getPortionList($response)));
    }

    public function testCreateSubshapeParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Paragraph();
        $dto->setMarginLeft(2);
        $dto->setMarginRight(2);
        $dto->setAlignment("Center");
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->createParagraph(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals($dto->getMarginLeft(), $response->getMarginLeft());
        Assert::assertEquals($dto->getMarginRight(), $response->getMarginRight());
        Assert::assertEquals($dto->getAlignment(), $response->getAlignment());
    }

    public function testUpdateParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Paragraph();
        $dto->setMarginLeft(2);
        $dto->setMarginRight(2);
        $dto->setAlignment("Center");

        $response = $this->getApi()->updateParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getMarginLeft(), $response->getMarginLeft());
        Assert::assertEquals($dto->getMarginRight(), $response->getMarginRight());
        Assert::assertEquals($dto->getAlignment(), $response->getAlignment());
    }

    public function testUpdateSubshapeParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Paragraph();
        $dto->setMarginLeft(2);
        $dto->setMarginRight(2);
        $dto->setAlignment("Center");
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->updateParagraph(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            1,
            $dto,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        
        Assert::assertEquals($dto->getMarginLeft(), $response->getMarginLeft());
        Assert::assertEquals($dto->getMarginRight(), $response->getMarginRight());
        Assert::assertEquals($dto->getAlignment(), $response->getAlignment());
    }

    public function testDeleteParagraphs()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->deleteParagraphs(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            null,
            self::password,
            self::folderName
        );
        Assert::assertEquals(0, count($response->getParagraphLinks()));
    }

    public function testDeleteParagraphsIndexes()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->deleteParagraphs(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            [2],
            self::password,
            self::folderName
        );
        Assert::assertEquals(1, count($response->getParagraphLinks()));
    }

    public function testDeleteSubshapeParagraphs()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->deleteParagraphs(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            null,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        Assert::assertEquals(0, count($response->getParagraphLinks()));
    }

    public function testDeleteSubshapeParagraphsIndexes()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->deleteParagraphs(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            [1],
            self::password,
            self::folderName,
            null,
            $subShape
        );
        Assert::assertEquals(1, count($response->getParagraphLinks()));
    }

    public function testDeleteParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->deleteParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            self::password,
            self::folderName
        );
        Assert::assertEquals(1, count($response->getParagraphLinks()));
    }

    public function testDeleteSubshapeParagraph()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->deleteParagraph(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            1,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        Assert::assertEquals(1, count($response->getParagraphLinks()));
    }

    public function testGetParagraphRect()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->getParagraphRectangle(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            self::password,
            self::folderName
        );

        Assert::assertNotNull($response);
        Assert::assertGreaterThan(0, $response->getX());
        Assert::assertGreaterThan(0, $response->getY());
        Assert::assertGreaterThan(0, $response->getWidth());
        Assert::assertGreaterThan(0, $response->getHeight());
    }

    public function testParagraphDefaultPortionFormat()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $dto = new Paragraph();
        $defaultPortionFormat = new PortionFormat();
        $defaultPortionFormat->setFontHeight(20);
        $defaultPortionFormat->setLatinFont("Arial");
    
        $portion1Dto = new Portion();
        $portion1Dto->setText("Portion1");
        $portion2Dto = new Portion();
        $portion2Dto->setText("Portion2");

        $dto->setPortionList([$portion1Dto, $portion2Dto]);
        $dto->setDefaultPortionFormat($defaultPortionFormat);

        $response=$this->getApi()->createParagraph(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            $dto,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals(count($response->getPortionList()), 2);
        Assert::assertNotNull($response->getDefaultPortionFormat());
        Assert::assertEquals(
            $response->getDefaultPortionFormat()->getLatinFont(),
            $dto->getDefaultPortionFormat()->getLatinFont()
        );
        Assert::assertEquals(
            $response->getDefaultPortionFormat()->getFontHeight(),
            $dto->getDefaultPortionFormat()->getFontHeight()
        );
    }

    public function testGetParagraphEffective()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->getParagraphEffective(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            self::password,
            self::folderName
        );
        Assert::assertEquals(72, $response->getDefaultTabSize());
    }

    public function testGetSubshapeParagraphEffective()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $shapeIndex = 3;
        $subShape = "1";
        $response = $this->getApi()->
        getParagraphEffective(self::fileName, self::slideIndex, $shapeIndex, 1, self::password, 
            self::folderName, null, $subShape);
        Assert::assertEquals(72, $response->getDefaultTabSize());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 6;
    public const shapeIndex = 2;
    public const shapePath = "3/shapes";
}