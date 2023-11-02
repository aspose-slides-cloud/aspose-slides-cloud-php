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
use Aspose\Slides\Cloud\Sdk\Model\Portion;
use Aspose\Slides\Cloud\Sdk\Model\MathParagraph;
use Aspose\Slides\Cloud\Sdk\Model\BlockElement;
use Aspose\Slides\Cloud\Sdk\Model\FunctionElement;
use Aspose\Slides\Cloud\Sdk\Model\FractionElement;
use Aspose\Slides\Cloud\Sdk\Model\LimitElement;
use Aspose\Slides\Cloud\Sdk\Model\TextElement;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class MathTest extends TestBase
{
    public function testMathGet()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $portion = $this->getSlidesApi()->getPortion(
            self::fileName, self::slideIndex, self::shapeIndex, self::paragraphIndex, self::portionIndex, self::password, self::folderName);
        Assert::assertTrue($portion->getMathParagraph() != null);
        Assert::assertTrue($portion->getMathParagraph()->getMathBlockList() != null);
        Assert::assertEquals(1, count($portion->getMathParagraph()->getMathBlockList()));
        Assert::assertTrue($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList() != null);
        Assert::assertEquals(3, count($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList()));
        Assert::assertTrue(is_a($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList()[2], "Aspose\\Slides\\Cloud\\Sdk\\Model\\FractionElement"));
    }

    public function testMathGetNull()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $portion = $this->getSlidesApi()->getPortion(
            self::fileName, self::slideIndex, self::notMathShapeIndex, self::paragraphIndex, self::portionIndex, self::password, self::folderName);
        Assert::assertTrue($portion->getMathParagraph() == null);
    }

    public function testMathCreate()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Portion();
        $math = new MathParagraph();
        $block = new BlockElement();
        $function = new FunctionElement();
        $limit = new LimitElement();
        $text1 = new TextElement();
        $text1->setValue("lim");
        $limit->setBase($text1);

        $text2 = new TextElement();
        $text2->setValue("x->0");
        $limit->setLimit($text2);
        $function->setName($limit);

        $fraction = new FractionElement();
        $sinus = new FunctionElement();
        $text3 = new TextElement();
        $text3->setValue("sin");
        $sinus->setName($text3);

        $text4 = new TextElement();
        $text4->setValue("x");
        $sinus->setBase($text4);
        $fraction->setNumerator($sinus);

        $text5 = new TextElement();
        $text5->setValue("x");
        $fraction->setDenominator($text5);
        $function->setBase($fraction);
        $block->setMathElementList([ $function ]);
        $math->setMathBlockList([ $block ]);
        $dto->setMathParagraph($math);

        $portion = $this->getSlidesApi()->createPortion(self::fileName, 1, 1, 1, $dto, null, self::password, self::folderName);
        Assert::assertTrue($portion->getMathParagraph() != null);
        Assert::assertTrue($portion->getMathParagraph()->getMathBlockList() != null);
        Assert::assertEquals(1, count($portion->getMathParagraph()->getMathBlockList()));
        Assert::assertTrue($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList() != null);
        Assert::assertEquals(1, count($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList()));
        Assert::assertTrue(is_a($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList()[0], "Aspose\\Slides\\Cloud\\Sdk\\Model\\FunctionElement"));
    }

    public function testMathUpdate()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Portion();
        $math = new MathParagraph();
        $block = new BlockElement();
        $function = new FunctionElement();
        $limit = new LimitElement();
        $text1 = new TextElement();
        $text1->setValue("lim");
        $limit->setBase($text1);

        $text2 = new TextElement();
        $text2->setValue("x->0");
        $limit->setLimit($text2);
        $function->setName($limit);

        $fraction = new FractionElement();
        $sinus = new FunctionElement();
        $text3 = new TextElement();
        $text3->setValue("sin");
        $sinus->setName($text3);

        $text4 = new TextElement();
        $text4->setValue("x");
        $sinus->setBase($text4);
        $fraction->setNumerator($sinus);

        $text5 = new TextElement();
        $text5->setValue("x");
        $fraction->setDenominator($text5);
        $function->setBase($fraction);
        $block->setMathElementList([ $function ]);
        $math->setMathBlockList([ $block ]);
        $dto->setMathParagraph($math);

        $portion = $this->getSlidesApi()->updatePortion(self::fileName, self::slideIndex, self::shapeIndex, self::paragraphIndex, self::portionIndex, $dto, self::password, self::folderName);
        Assert::assertTrue($portion->getMathParagraph() != null);
        Assert::assertTrue($portion->getMathParagraph()->getMathBlockList() != null);
        Assert::assertEquals(1, count($portion->getMathParagraph()->getMathBlockList()));
        Assert::assertTrue($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList() != null);
        Assert::assertEquals(1, count($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList()));
        Assert::assertTrue(is_a($portion->getMathParagraph()->getMathBlockList()[0]->getMathElementList()[0], "Aspose\\Slides\\Cloud\\Sdk\\Model\\FunctionElement"));
    }

    public function testMathDownload()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $mathMl = $this->getSlidesApi()->downloadPortionAsMathMl(
            self::fileName, self::slideIndex, self::shapeIndex, self::paragraphIndex, self::portionIndex, self::password, self::folderName);
        Assert::assertTrue($mathMl->isFile());
        Assert::assertTrue($mathMl->getSize() > 0);
    }

    public function testMathDownloadNull()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        try {
            $mathMl = $this->getSlidesApi()->downloadPortionAsMathMl(
                self::fileName, self::slideIndex, self::notMathShapeIndex, self::paragraphIndex, self::portionIndex, self::password, self::folderName);
            Assert::fail("Must have failed");
        } catch (ApiException $ex) {
            //Cannot convert an ordinary portion to MathML
            Assert::assertNotNull($ex);
        }
    }

    public function testMathSave()
    {
        $outPath = self::folderName."/mathml.xml";
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getSlidesApi()->savePortionAsMathMl(
            self::fileName, self::slideIndex, self::shapeIndex, self::paragraphIndex, self::portionIndex, $outPath, self::password, self::folderName);
        $result = $this->getSlidesApi()->objectExists($outPath);
        Assert::assertTrue($result->getExists());
    }

    public const slideIndex = 2;
    public const shapeIndex = 3;
    public const notMathShapeIndex = 1;
    public const paragraphIndex = 1;
    public const portionIndex = 1;
}
