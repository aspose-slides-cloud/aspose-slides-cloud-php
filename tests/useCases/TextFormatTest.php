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

use Aspose\Slides\Cloud\Sdk\Model\Camera;
use Aspose\Slides\Cloud\Sdk\Model\LightRig;
use Aspose\Slides\Cloud\Sdk\Model\ShapeBevel;
use Aspose\Slides\Cloud\Sdk\Model\TextFrameFormat;
use Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat;
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;
use PHPUnit\Framework\Assert;

class TextFormatTest extends TestBase
{
    public function testTextFormat3D()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $dto = new Shape();
        $dto->setShapeType('Rectangle');
        $dto->setX(100);
        $dto->setY(100);
        $dto->setHeight(100);
        $dto->setWidth(200);
        $dto->setText('Sample text');

        $textFormat = new TextFrameFormat();
        $textFormat->setTransform('ArchUpPour');
       
        $threeDFormat = new ThreeDFormat();
        
        $bevelBottom = new ShapeBevel();
        $bevelBottom->setBevelType('Circle');
        $bevelBottom->setHeight(3.5);
        $bevelBottom->setWidth(3.5);
        $threeDFormat->setBevelBottom($bevelBottom);

        $bevelTop = new ShapeBevel();
        $bevelTop->setBevelType('Circle');
        $bevelTop->setHeight(4);
        $bevelTop->setWidth(4);
        $threeDFormat->setBevelTop($bevelTop);
        
        $threeDFormat->setExtrusionColor('#FF008000');
        $threeDFormat->setExtrusionHeight(6);
        $threeDFormat->setContourColor('#FF25353D');
        $threeDFormat->setContourWidth(1.5);
        $threeDFormat->setDepth(3);
        $threeDFormat->setMaterial('Plastic');

        $lightRig = new LightRig();
        $lightRig->setLightType('Balanced');
        $lightRig->setDirection('Top');
        $lightRig->setXRotation(0);
        $lightRig->setYRotation(0);
        $lightRig->setZRotation(40);
        $threeDFormat->setLightRig($lightRig);

        $camera = new Camera();
        $camera->setCameraType('PerspectiveContrastingRightFacing');
        $threeDFormat->setCamera($camera);
        
        $textFormat->setThreeDFormat($threeDFormat);
        
        $dto->setTextFrameFormat($textFormat);

        $shape = $this->getApi()->createShape(
            self::fileName,
            self::slideIndex,
            $dto,
            null,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals('Shape', $shape->getType());
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 1;
}