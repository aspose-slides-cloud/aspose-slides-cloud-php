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

use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Model\SlideComment;
use Aspose\Slides\Cloud\Sdk\Model\SlideModernComment;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;

class CommentTest extends TestBase
{
    public function testCreateComment()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);

        $comment = new SlideComment();
        $comment->setText(self::commentText);
        $comment->setAuthor(self::author);

        $childComment = new SlideComment();
        $childComment->setText(self::childCommentText);
        $childComment->setAuthor(self::author);

        $comment->setChildComments([$childComment]);

        $result = $this->getApi()->createComment(self::fileName, 3, $comment, null, self::password, self::folderName);
        
        Assert::assertEquals(1, count($result->getList()));
        Assert::assertEquals(self::commentText, $result->getList()[0]->getText());
        Assert::assertEquals(self::author, $result->getList()[0]->getAuthor());
        Assert::assertEquals(self::childCommentText, $result->getList()[0]->getChildComments()[0]->getText());
        Assert::assertEquals(self::author, $result->getList()[0]->getChildComments()[0]->getAuthor());
    }

    public function testCreateCommentOnline()
    {
        $this->initialize(null, null, null);
        $comment = new SlideComment();
        $comment->setText(self::commentText);
        $comment->setAuthor(self::author);

        $childComment = new SlideComment();
        $childComment->setText(self::childCommentText);
        $childComment->setAuthor(self::author);

        $comment->setChildComments([$childComment]);

        $document = fopen("TestData/".self::fileName, 'r');

        $ouputDocument = $this->getApi()->createCommentOnline($document, 3, $comment, null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $ouputDocument->getSize());
    }

    public function testGetSlideComments()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $response = $this->getApi()->getSlideComments(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(2, count($response->getList()));
        Assert::assertEquals(1, count($response->getList()[0]->getChildComments()));
    }

    public function testDeleteComments()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $response = $this->getApi()->deleteComments(self::fileName, null, self::password, self::folderName);
        $response = $this->getApi()->getSlideComments(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(0, count($response->getList()));
    }

    public function testDeleteCommentsOnline()
    {
        $this->initialize(null, null, null);
        $document = fopen("TestData/".self::fileName, 'r');
        $outputDocument = $this->getApi()->deleteCommentsOnline($document, null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $outputDocument->getSize());
    }

    public function testDeleteSlidesComments()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        $this->getApi()->deleteSlideComments(self::fileName, self::slideIndex, null, self::password, self::folderName);
        $response = $this->getApi()->getSlideComments(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(0, count($response->getList()));
    }

    public function testDeleteSlideCommentsOnline()
    {
        $this->initialize(null, null, null);
        $document = fopen("TestData/".self::fileName, 'r');
        $outputDocument = $this->getApi()->deleteSlideCommentsOnline($document, self::slideIndex, null, self::password);
        Assert::assertNotEquals(filesize("TestData/".self::fileName), $outputDocument->getSize());
    }

    public function testCreateModerComment()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $textSelectionStartIndex = 1;
        $textSelectionLength = 5;

        $childComment = new SlideModernComment();
        $childComment->setAuthor(self::author);
        $childComment->setText(self::childCommentText);
        $childComment->setStatus("Resolved");

        $comment = new SlideModernComment();
        $comment->setAuthor(self::author);
        $comment->setText(self::commentText);
        $comment->setStatus("Active");
        $comment->setTextSelectionStart($textSelectionStartIndex);
        $comment->setTextSelectionLength($textSelectionLength);
        $comment->setChildComments([$childComment]);

        $result = $this->getApi()->createComment(self::fileName, 3, $comment, null, self::password, self::folderName);
        Assert::assertEquals(1, count($result->getList()));
        Assert::assertEquals($result->getList()[0]->getType(), "Modern");
    }

    public function testCreateShapeModernCommentOnline()
    {
        $this->initialize(null, null, null);
        $this->getApi()->CopyFile("TempTests/".self::fileName, self::folderName."/".self::fileName);
        
        $textSelectionStartIndex = 1;
        $textSelectionLength = 5;

        $childComment = new SlideModernComment();
        $childComment->setAuthor(self::author);
        $childComment->setText(self::childCommentText);
        $childComment->setStatus("Resolved");

        $comment = new SlideModernComment();
        $comment->setAuthor(self::author);
        $comment->setText(self::commentText);
        $comment->setStatus("Active");
        $comment->setTextSelectionStart($textSelectionStartIndex);
        $comment->setTextSelectionLength($textSelectionLength);
        $comment->setChildComments([$childComment]);

        $result = $this->getApi()->createComment(self::fileName, 3, $comment, self::shapeIndex, self::password, self::folderName);
        Assert::assertEquals(1, count($result->getList()));
        Assert::assertEquals($result->getList()[0]->getType(), "Modern");
    }

    public const folderName = "TempSlidesSDK";
    public const fileName = "test.pptx";
    public const password = "password";
    public const slideIndex = 1;
    public const shapeIndex = 1;
    public const author = "Test author";
    public const childCommentText = "Child comment text";
    public const commentText = "Comment text";
}