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
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Model\LineFormat;
use Aspose\Slides\Cloud\Sdk\Model\SolidFill;
use Aspose\Slides\Cloud\Sdk\Model\PictureFill;
use Aspose\Slides\Cloud\Sdk\Model\EffectFormat;
use Aspose\Slides\Cloud\Sdk\Model\InnerShadowEffect;
use Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat;
use Aspose\Slides\Cloud\Sdk\Model\ShapeBevel;
use Aspose\Slides\Cloud\Sdk\Model\Camera;
use Aspose\Slides\Cloud\Sdk\Model\LightRig;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class ShapeFormatTest extends TestBase
{
    public function testShapeFormatLine()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Shape();
        $lineFormat = new LineFormat();
        $lineFormat->setStyle("ThickThin");
        $lineFormat->setWidth(7);
        $lineFormat->setDashStyle("Dash");
        $dto->setLineFormat($lineFormat);
        $result = $this->getSlidesApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        $result = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        Assert::assertEquals($dto->getLineFormat()->getWidth(), $result->getLineFormat()->getWidth());
    }

    public function testShapeFormatFill()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Shape();
        $fillFormat = new SolidFill();
        $fillFormat->setColor("#FFFFFF00");
        $dto->setFillFormat($fillFormat);
        $result = $this->getSlidesApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        $result = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        Assert::assertTrue(is_a($result->getFillFormat(), "Aspose\\Slides\\Cloud\\Sdk\\Model\\SolidFill"));
        Assert::assertEquals($dto->getFillFormat()->getColor(), $result->getFillFormat()->getColor());
    }

    public function testShapeFormatPictureFill()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Shape();
        $fillFormat = new PictureFill();
        $pictureData = base64_encode(file_get_contents(self::picturePath));
        $fillFormat->setBase64Data($pictureData);
        $fillFormat->setResolution(150);
        $dto->setFillFormat($fillFormat);
        $result = $this->getSlidesApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        $result = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        Assert::assertTrue(is_a($result->getFillFormat(), "Aspose\\Slides\\Cloud\\Sdk\\Model\\PictureFill"));
    }

    public function testShapeFormatEffect()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);
        $dto = new Shape();
        $effectFormat = new EffectFormat();
        $innerShadow = new InnerShadowEffect();
        $innerShadow->setDirection(35);
        $innerShadow->setBlurRadius(30);
        $innerShadow->setDistance(40);
        $innerShadow->setShadowColor("#FFFFFF00");
        $effectFormat->setInnerShadow($innerShadow);
        $dto->setEffectFormat($effectFormat);
        $result = $this->getSlidesApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        $result = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        Assert::assertEquals($dto->getEffectFormat()->getInnerShadow()->getDirection(), $result->getEffectFormat()->getInnerShadow()->getDirection());
    }

    public function testShapeFormat3D()
    {
        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Shape();
        $threeDFormat = new ThreeDFormat();
        $threeDFormat->setDepth(4);

        $bevelTop = new ShapeBevel();
        $bevelTop->setBevelType("Circle");
        $bevelTop->setHeight(6);
        $bevelTop->setWidth(6);
        $threeDFormat->setBevelTop($bevelTop);

        $camera = new Camera();
        $camera->setCameraType("OrthographicFront");
        $threeDFormat->setCamera($camera);

        $lightRig = new LightRig();
        $lightRig->setLightType("ThreePt");
        $lightRig->setDirection("Top");
        $threeDFormat->setLightRig($lightRig);
        $dto->setThreeDFormat($threeDFormat);
        $result = $this->getSlidesApi()->updateShape(self::fileName, self::slideIndex, self::shapeIndex, $dto, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        $result = $this->getSlidesApi()->getShape(self::fileName, self::slideIndex, self::shapeIndex, self::password, self::folderName);
        Assert::assertTrue(is_a($result, "Aspose\\Slides\\Cloud\\Sdk\\Model\\Shape"));
        Assert::assertEquals($dto->getThreeDFormat()->getDepth(), $result->getThreeDFormat()->getDepth());
    }

    public const slideIndex = 1;
    public const shapeIndex = 1;
    public const picturePath = self::localFolderName."/watermark.png";
}
