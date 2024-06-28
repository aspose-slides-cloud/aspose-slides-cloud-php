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
use Aspose\Slides\Cloud\Sdk\Model\SlideAnimation;
use Aspose\Slides\Cloud\Sdk\Model\InteractiveSequence;
use Aspose\Slides\Cloud\Sdk\Model\Effect;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class AnimationTest extends TestBase
{
    public function testGetAnimation()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->GetAnimation(self::fileName, self::slideIndex, null, null, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
        $result = $this->getSlidesApi()->GetAnimation(self::fileName, self::slideIndex, 3, null, self::password, self::folderName);
        Assert::assertEquals(1, count($result->getMainSequence()));
        Assert::assertEquals(0, count($result->getInteractiveSequences()));
        $result = $this->getSlidesApi()->GetAnimation(self::fileName, self::slideIndex, 3, 1, self::password, self::folderName);
        Assert::assertEquals(0, count($result->getMainSequence()));
    }

    public function testSetAnimation()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $dto = new SlideAnimation();

        $effect1 = new Effect();
        $effect1->setType("Blink");
        $effect1->setShapeIndex(2);
        $effect1->setParagraphIndex(1);

        $effect2 = new Effect();
        $effect2->setType("Box");
        $effect2->setSubtype("In");
        $effect2->setPresetClassType("Entrance");
        $effect2->setShapeIndex(4);
        $dto->setMainSequence([ $effect1, $effect2 ]);
        $dto->setInteractiveSequences([]);
        $result = $this->getSlidesApi()->SetAnimation(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(count($dto->getMainSequence()), count($result->getMainSequence()));
        Assert::assertEquals(0, count($result->getInteractiveSequences()));
    }

    public function testCreateAnimationEffect()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $dto = new Effect();
        $dto->setType("Blast");
        $dto->setShapeIndex(3);
        $result = $this->getSlidesApi()->CreateAnimationEffect(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::effectCount + 1, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public function testCreateAnimationInteractiveSequence()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $dto = new InteractiveSequence();
        $dto->setTriggerShapeIndex(2);
        $effect = new Effect();
        $effect->setType("Blast");
        $effect->setShapeIndex(3);
        $dto->setEffects([ $effect ]);
        $result = $this->getSlidesApi()->CreateAnimationInteractiveSequence(self::fileName, self::slideIndex, $dto, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount + 1, count($result->getInteractiveSequences()));
    }

    public function testCreateAnimationInteractiveSequenceEffect()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $dto = new Effect();
        $dto->setType("Blast");
        $dto->setShapeIndex(3);
        $result = $this->getSlidesApi()->CreateAnimationInteractiveSequenceEffect(self::fileName, self::slideIndex, 1, $dto, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public function testUpdateAnimationEffect()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $dto = new Effect();
        $dto->setType("Blast");
        $dto->setShapeIndex(3);
        $result = $this->getSlidesApi()->UpdateAnimationEffect(self::fileName, self::slideIndex, 1, $dto, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public function testUpdateAnimationInteractiveSequenceEffect()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $dto = new Effect();
        $dto->setType("Blast");
        $dto->setShapeIndex(3);
        $result = $this->getSlidesApi()->UpdateAnimationInteractiveSequenceEffect(self::fileName, self::slideIndex, 1, 1, $dto, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public function testDeleteAnimation()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->DeleteAnimation(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(0, count($result->getMainSequence()));
        Assert::assertEquals(0, count($result->getInteractiveSequences()));
    }

    public function testDeleteAnimationMainSequence()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->DeleteAnimationMainSequence(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(0, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public function testDeleteAnimationEffect()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->DeleteAnimationEffect(self::fileName, self::slideIndex, 1, self::password, self::folderName);
        Assert::assertEquals(self::effectCount - 1, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public function testDeleteAnimationInteractiveSequences()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->DeleteAnimationInteractiveSequences(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(0, count($result->getInteractiveSequences()));
    }

    public function testDeleteAnimationInteractiveSequence()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->DeleteAnimationInteractiveSequence(self::fileName, self::slideIndex, 1, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount - 1, count($result->getInteractiveSequences()));
    }

    public function testDeleteAnimationInteractiveSequenceEffect()
    {
        $this->getSlidesApi()->CopyFile(self::tempFilePath, self::filePath);
        $result = $this->getSlidesApi()->DeleteAnimationInteractiveSequenceEffect(self::fileName, self::slideIndex, 1, 1, self::password, self::folderName);
        Assert::assertEquals(self::effectCount, count($result->getMainSequence()));
        Assert::assertEquals(self::interactiveSequenceCount, count($result->getInteractiveSequences()));
    }

    public const slideIndex = 1;
    public const effectCount = 1;
    public const interactiveSequenceCount = 1;
}
