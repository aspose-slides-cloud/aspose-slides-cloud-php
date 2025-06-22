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
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Model\VideoFrame;

class VideoTest extends TestBase
{
    public function testCaptionTracks()
    {
        $slideIndex = 3;
        $shapeIndex = 3;
        $track1Label = "track1";
        $track2Label = "track2";
        $track1Data = @"WEBVTT\n\n00:00:00.000-- > 00:00:10.000\nCaption 1 text.";
        $track2Data = @"WEBVTT\n\n00:00:00.000-- > 00:00:10.000\nCaption 2 text.";

        $this->getSlidesApi()->copyFile(self::tempFilePath, self::filePath);

        $dto = new VideoFrame();
        $dto->setBase64Data("bXAzc2FtcGxl");
        $this->getSlidesApi()->createShape(self::fileName, $slideIndex, $dto, null, null, self::password, self::folderName);
        $captions = $this->getSlidesApi()->getVideoCaptionTracks(
            self::fileName, $slideIndex, $shapeIndex, null, self::password, self::folderName);
        Assert::assertEquals(0, count($captions->getItems()));

        $this->getSlidesApi()->createVideoCaptionTrack(
            self::fileName, $slideIndex, $shapeIndex, $track1Label, $track1Data, self::password, self::folderName);
        $this->getSlidesApi()->createVideoCaptionTrack(
            self::fileName, $slideIndex, $shapeIndex, $track2Label, $track2Data, self::password, self::folderName);
        $captions = $this->getSlidesApi()->getVideoCaptionTracks(
            self::fileName, $slideIndex, $shapeIndex, true, self::password, self::folderName);
        Assert::assertEquals(2, count($captions->getItems()));
        Assert::assertEquals($track1Label, $captions->getItems()[0]->getLabel());
        Assert::assertEquals($track1Data, $captions->getItems()[0]->getDataAsString());
        Assert::assertEquals($track2Label, $captions->getItems()[1]->getLabel());
        Assert::assertEquals($track2Data, $captions->getItems()[1]->getDataAsString());

        $this->getSlidesApi()->deleteVideoCaptionTrack(
            self::fileName, $slideIndex, $shapeIndex, 1, self::password, self::folderName);
        $captions = $this->getSlidesApi()->getVideoCaptionTracks(
            self::fileName, $slideIndex, $shapeIndex, false, self::password, self::folderName);
        Assert::assertEquals(1, count($captions->getItems()));
        Assert::assertEquals($track2Label, $captions->getItems()[0]->getLabel());
        Assert::assertNull($captions->getItems()[0]->getDataAsString());

        $this->getSlidesApi()->deleteVideoCaptionTracks(
            self::fileName, $slideIndex, $shapeIndex, self::password, self::folderName);
        $captions = $this->getSlidesApi()->getVideoCaptionTracks(
            self::fileName, $slideIndex, $shapeIndex, true, self::password, self::folderName);
        Assert::assertEquals(0, count($captions->getItems()));
    }
}
