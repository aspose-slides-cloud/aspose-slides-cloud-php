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
use Aspose\Slides\Cloud\Sdk\Model\SlideComment;
use Aspose\Slides\Cloud\Sdk\Model\SlideModernComment;
use Aspose\Slides\Cloud\Sdk\Tests\TestBase;

class CommentTest extends TestBase
{
    public function testCreateComment()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);

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
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $comment = new SlideComment();
        $comment->setText(self::commentText);
        $comment->setAuthor(self::author);

        $childComment = new SlideComment();
        $childComment->setText(self::childCommentText);
        $childComment->setAuthor(self::author);

        $comment->setChildComments([$childComment]);

        $document = fopen(self::localFilePath, 'r');

        $ouputDocument = $this->getApi()->createCommentOnline($document, 3, $comment, null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $ouputDocument->getSize());
    }

    public function testGetSlideComments()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $response = $this->getApi()->getSlideComments(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(2, count($response->getList()));
        Assert::assertEquals(1, count($response->getList()[0]->getChildComments()));
    }

    public function testDeleteComments()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $response = $this->getApi()->deleteComments(self::fileName, null, self::password, self::folderName);
        $response = $this->getApi()->getSlideComments(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(0, count($response->getList()));
    }

    public function testDeleteCommentsOnline()
    {
        $document = fopen(self::localFilePath, 'r');
        $outputDocument = $this->getApi()->deleteCommentsOnline($document, null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $outputDocument->getSize());
    }

    public function testDeleteSlidesComments()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        $this->getApi()->deleteSlideComments(self::fileName, self::slideIndex, null, self::password, self::folderName);
        $response = $this->getApi()->getSlideComments(self::fileName, self::slideIndex, self::password, self::folderName);
        Assert::assertEquals(0, count($response->getList()));
    }

    public function testDeleteSlideCommentsOnline()
    {
        $document = fopen(self::localFilePath, 'r');
        $outputDocument = $this->getApi()->deleteSlideCommentsOnline($document, self::slideIndex, null, self::password);
        Assert::assertNotEquals(filesize(self::localFilePath), $outputDocument->getSize());
    }

    public function testCreateModerComment()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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

    public function testCreateModernCommentShape()
    {
        $this->getApi()->copyFile(self::tempFilePath, self::filePath);
        
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

    public const slideIndex = 1;
    public const shapeIndex = 1;
    public const author = "Test author";
    public const childCommentText = "Child comment text";
    public const commentText = "Comment text";
}