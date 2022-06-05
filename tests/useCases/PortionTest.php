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

use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\SolidFill;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;
use PHPUnit\Framework\Assert;

class PortionTest extends TestBase
{
    public function testGetPortions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response=$this->getApi()->getPortions(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName
        );
        Assert::assertEquals(2, count($response->getItems()));
    }

    public function testGetSubshapePortions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response=$this->getApi()->getSubshapePortions(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            1,
            self::paragraphIndex,
            self::password,
            self::folderName
        );
        Assert::assertEquals(2, count($response->getItems()));
    }

    public function testGetPortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $response = $this->getApi()->getPortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName
        );
        Assert::assertTrue(strpos($response->getText(), self::portionText) > 0);
    }

    public function testGetSubshapePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->getSubshapePortion(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            1,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName
        );

        Assert::assertTrue(strpos($response->getText(), self::portionText) > 0);
    }

    public function testCreatePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $dto = new Portion();
        $dto->setText(self::newPortionText);
        $dto->setFontBold('True');
        $dto->setFontHeight(20);
        $dto->setLatinFont(self::fontName);
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::fontColor);
        $dto->setFillFormat($fillFormat);

        $response = $this->getApi()->createPortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            $dto,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getText(), $response->getText());
        Assert::assertEquals($dto->getFontBold(), $response->getFontBold());
        Assert::assertEquals($dto->getFontHeight(), $response->getFontHeight());
        Assert::assertEquals($dto->getLatinFont(), $response->getLatinFont());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testCreateSubshapePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $dto = new Portion();
        $dto->setText(self::newPortionText);
        $dto->setFontBold('True');
        $dto->setFontHeight(20);
        $dto->setLatinFont(self::fontName);
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::fontColor);
        $dto->setFillFormat($fillFormat);

        $response = $this->getApi()->createSubshapePortion(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            self::shapeIndex,
            1,
            $dto,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getText(), $response->getText());
        Assert::assertEquals($dto->getFontBold(), $response->getFontBold());
        Assert::assertEquals($dto->getFontHeight(), $response->getFontHeight());
        Assert::assertEquals($dto->getLatinFont(), $response->getLatinFont());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testUpdatePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $dto = new Portion();
        $dto->setText(self::newPortionText);
        $dto->setFontBold('True');
        $dto->setFontHeight(20);
        $dto->setLatinFont(self::fontName);
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::fontColor);
        $dto->setFillFormat($fillFormat);

        $response = $this->getApi()->updatePortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            1,
            1,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getText(), $response->getText());
        Assert::assertEquals($dto->getFontBold(), $response->getFontBold());
        Assert::assertEquals($dto->getFontHeight(), $response->getFontHeight());
        Assert::assertEquals($dto->getLatinFont(), $response->getLatinFont());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testUpdateSubshapePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $dto = new Portion();
        $dto->setText(self::newPortionText);
        $dto->setFontBold('True');
        $dto->setFontHeight(20);
        $dto->setLatinFont(self::fontName);
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::fontColor);
        $dto->setFillFormat($fillFormat);

        $response = $this->getApi()->updateSubshapePortion(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            self::shapeIndex,
            1,
            1,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals($dto->getText(), $response->getText());
        Assert::assertEquals($dto->getFontBold(), $response->getFontBold());
        Assert::assertEquals($dto->getFontHeight(), $response->getFontHeight());
        Assert::assertEquals($dto->getLatinFont(), $response->getLatinFont());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testDeletePortions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->deletePortions(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals(0, count($response->getItems()));
    }

    public function testDeletePortionsIndexes()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->deletePortions(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            [1],
            self::password,
            self::folderName
        );

        Assert::assertEquals(1, count($response->getItems()));
    }

    public function testDeleteSubshapePortions()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->deleteSubshapePortions(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            1,
            self::paragraphIndex,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals(0, count($response->getItems()));
    }

    public function testDeleteSubshapePortionsIndexes()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->deleteSubshapePortions(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            1,
            self::paragraphIndex,
            [1],
            self::password,
            self::folderName
        );

        Assert::assertEquals(1, count($response->getItems()));
    }

    public function testDeletePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->deletePortion(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(1, count($response->getItems()));
    }

    public function testDeleteSubshapePortion()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->deleteSubshapePortion(
            self::fileName,
            self::slideIndex,
            self::shapePath,
            1,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(1, count($response->getItems()));
    }

    public function testGetPortionRect()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $response = $this->getApi()->getPortionRectangle(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName
        );

        Assert::assertNotNull($response);
        Assert::assertGreaterThan(0, $response->getX());
        Assert::assertGreaterThan(0, $response->getY());
        Assert::assertGreaterThan(0, $response->getWidth());
        Assert::assertGreaterThan(0, $response->getHeight());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 6;
    public const shapeIndex = 2;
    public const shapePath = "3/shapes";
    public const paragraphIndex = 1;
    public const portionIndex = 1;
    public const portionText = "portion 1";
    public const newPortionText = "new portion text";
    public const fontColor = "#FFF5FF8A";
    public const fontName = "Arial";
}