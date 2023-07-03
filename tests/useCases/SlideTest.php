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

use Aspose\Slides\Cloud\Sdk\Model\Slide;
use Aspose\Slides\Cloud\Sdk\Model\ResourceUri;
use Aspose\Slides\Cloud\Sdk\Model\SlideBackground;
use Aspose\Slides\Cloud\Sdk\Model\SolidFill;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class SlideTest extends TestBase
{
    public function testGetSlides()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $slides = $this->getApi()->getSlides(
            self::fileName,
            self::password,
            self::folderName
        );

        Assert::assertEquals(self::slideCount, count($slides->getSlideList()));
    }

    public function testGetSlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $slide = $this->getApi()->getSlide(
            self::fileName,
            self::slideIndex,
            self::password,
            self::folderName
        );

        Assert::assertNotNull($slide);
    }

    public function testCreateSlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $slides = $this->getApi()->createSlide(
            self::fileName,
            self::layoutSlidePath,
            1,
            self::password,
            self::folderName
        );
        Assert::assertEquals(self::slideCount + 1, count($slides->getSlideList()));

        $slides = $this->getApi()->createSlide(
            self::fileName,
            null,
            null,
            self::password,
            self::folderName
        );
        Assert::assertEquals(self::slideCount + 2, count($slides->getSlideList()));
    }

    public function testCopySlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $slides = $this->getApi()->copySlide(
            self::fileName,
            3,
            null,
            null,
            null,
            null,
            self::password,
            self::folderName
        );
        Assert::assertEquals(self::slideCount + 1, count($slides->getSlideList()));
    }

    public function testCopySlideFromSource()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getApi()->CopyFile(self::tempFolderName."/".self::sourceFileName, self::folderName."/".self::sourceFileName);

        $slides = $this->getApi()->copySlide(
            self::fileName,
            self::slideIndex,
            1,
            self::folderName.'/'.self::sourceFileName,
            null,
            null,
            self::password,
            self::folderName
        );
        Assert::assertEquals(self::slideCount + 1, count($slides->getSlideList()));
    }

    public function testMoveSlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $slides = $this->getApi()->moveSlide(
            self::fileName,
            self::slideIndex,
            2,
            self::password,
            self::folderName
        );
        Assert::assertEquals(self::slideCount, count($slides->getSlideList()));
    }

    public function testReorderSlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $oldPositions = [1, 2, 3, 4, 5, 6];
        $newPositions = [6, 5, 4, 3, 2, 1];

        $slides = $this->getApi()->reorderSlides(
            self::fileName,
            $oldPositions,
            $newPositions,
            self::password,
            self::folderName
        );
        Assert::assertEquals(self::slideCount, count($slides->getSlideList()));
    }

    public function testUpdateSlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new Slide();
        $layoutSlide = new ResourceUri();
        $layoutSlide->setHref(self::layoutSlidePath);
        $dto->setLayoutSlide($layoutSlide);

        $slide = $this->getApi()->updateSlide(
            self::fileName,
            self::slideIndex,
            $dto,
            self::password,
            self::folderName
        );
        Assert::assertTrue(strpos($slide->getLayoutSlide()->getHref(), self::layoutSlidePath) > 0);
    }

    public function testDeleteSlides()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $slides = $this->getApi()->deleteSlides(
            self::fileName,
            null,
            self::password,
            self::folderName
        );

        Assert::assertEquals(1, count($slides->getSlideList()));
    }

    public function testDeleteSlidesByIndexes()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $indexes = [1, 3, 5];

        $slides = $this->getApi()->deleteSlides(
            self::fileName,
            $indexes,
            self::password,
            self::folderName
        );

        Assert::assertEquals(self::slideCount - 3, count($slides->getSlideList()));
    }

    public function testDeleteSlide()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $slides = $this->getApi()->deleteSlide(
            self::fileName,
            self::slideIndex,
            self::password,
            self::folderName
        );

        Assert::assertEquals(self::slideCount - 1, count($slides->getSlideList()));
    }

    public function testGetBackground()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $response = $this->getApi()->getBackground(
            self::fileName,
            5,
            self::password,
            self::folderName
        );

        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
    }

    public function testSetBackground()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new SlideBackground();
        $fillFormat = new SolidFill();
        $fillFormat->setColor(self::color);
        $dto->setFillFormat($fillFormat);

        $response = $this->getApi()->setBackground(
            self::fileName,
            self::slideIndex,
            $dto,
            self::password,
            self::folderName
        );

        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
        Assert::assertEquals(self::color, $response->getFillFormat()->getColor());
    }

    public function testSetBackgroundColor()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $response = $this->getApi()->setBackgroundColor(
            self::fileName,
            self::slideIndex,
            self::color,
            self::password,
            self::folderName
        );
       
        Assert::assertEquals('Solid', $response->getFillFormat()->getType());
        Assert::assertEquals(self::color, $response->getFillFormat()->getColor());
    }

    public function testDeleteBackground()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
        $response = $this->getApi()->deleteBackground(
            self::fileName,
            5,
            self::password,
            self::folderName
        );
       
        Assert::assertEquals('NoFill', $response->getFillFormat()->getType());
    }

    public const sourceFileName = "TemplateCV.pptx";
    public const slideIndex = 1;
    public const slideCount = 9;
    public const layoutSlidePath = "layoutSlides/3";
    public const color = "#FFF5FF8A";
}