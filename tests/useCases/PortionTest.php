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
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;
use PHPUnit\Framework\Assert;

class PortionTest extends TestBase
{
    public function testGetPortions()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 3;
        $subShape = "1";

        $response=$this->getApi()->getPortions(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::paragraphIndex,
            self::password,
            self::folderName,
            null,
            $subShape
        );
        Assert::assertEquals(2, count($response->getItems()));
    }

    public function testGetPortion()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->getPortion(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertTrue(strpos($response->getText(), self::portionText) > 0);
    }

    public function testCreatePortion()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $shapeIndex = 3;
        $subShape = "2";

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
            $shapeIndex,
            1,
            $dto,
            null,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals($dto->getText(), $response->getText());
        Assert::assertEquals($dto->getFontBold(), $response->getFontBold());
        Assert::assertEquals($dto->getFontHeight(), $response->getFontHeight());
        Assert::assertEquals($dto->getLatinFont(), $response->getLatinFont());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testUpdatePortion()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $dto = new Portion();
        $dto->setText(self::newPortionText);
        $dto->setFontBold('True');
        $dto->setFontHeight(20);
        $dto->setLatinFont(self::fontName);
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::fontColor);
        $dto->setFillFormat($fillFormat);

        $shapeIndex = 3;
        $subShape = "2";

        $response = $this->getApi()->updatePortion(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            1,
            1,
            $dto,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals($dto->getText(), $response->getText());
        Assert::assertEquals($dto->getFontBold(), $response->getFontBold());
        Assert::assertEquals($dto->getFontHeight(), $response->getFontHeight());
        Assert::assertEquals($dto->getLatinFont(), $response->getLatinFont());
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testDeletePortions()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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

    public function testDeletePortionsByIndexes()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 3;
        $subShape = "1";
        $response = $this->getApi()->deletePortions(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::paragraphIndex,
            null,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals(0, count($response->getItems()));
    }

    public function testDeleteSubshapePortionsByIndexes()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->deletePortions(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::paragraphIndex,
            [1],
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals(1, count($response->getItems()));
    }

    public function testDeletePortion()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->deletePortion(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals(1, count($response->getItems()));
    }

    public function testGetPortionRect()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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

    public function testGetPortionEffective()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $response = $this->getApi()->getPortionEffective(
            self::fileName,
            self::slideIndex,
            self::shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName
        );
        Assert::assertEquals(18, $response->getFontHeight());
    }

    public function testGetSubshapePortionEffective()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $shapeIndex = 3;
        $subShape = "1";

        $response = $this->getApi()->getPortionEffective(
            self::fileName,
            self::slideIndex,
            $shapeIndex,
            self::paragraphIndex,
            self::portionIndex,
            self::password,
            self::folderName,
            null,
            $subShape
        );

        Assert::assertEquals(18, $response->getFontHeight());
    }

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