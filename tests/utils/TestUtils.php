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

namespace Aspose\Slides\Cloud\Sdk\Tests\Utils;

use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Model\DocumentProperty;
use Aspose\Slides\Cloud\Sdk\Model\DocumentProperties;
use Aspose\Slides\Cloud\Sdk\Model\Slide;
use Aspose\Slides\Cloud\Sdk\Model\LayoutSlide;
use Aspose\Slides\Cloud\Sdk\Model\NotesSlide;
use Aspose\Slides\Cloud\Sdk\Model\Pipeline;
use Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest;
use Aspose\Slides\Cloud\Sdk\Model\ResourceUri;
use Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement;
use Aspose\Slides\Cloud\Sdk\Model\Shape;
use Aspose\Slides\Cloud\Sdk\Model\ShapeType;
use Aspose\Slides\Cloud\Sdk\Model\CombinedShapeType;
use Aspose\Slides\Cloud\Sdk\Model\GeometryShapeType;

class TestUtils
{
    public const folderName = "TempSlidesSDK";
    public const fileName = "test.ppt";
    public const changedFileName = "changedtest.ppt";
    public const templateFileName = "TemplateCV.pptx";

    public static function getFileUploadPath()
    {
        return self::folderName."/".self::fileName;
    }

    public static function getFilePath()
    {
        return realpath(__DIR__.'/../..').'/TestData/'.self::fileName;
    }

    public static function getStreamValue()
    {
        return fopen(self::getFilePath(), 'r');
    }

    /**
     */
    public static function getTestValue($functionName, $name, $type)
    {
        if ($name == "oldPositions") {
            return [1, 2];
        }
        if ($name == "newPositions") {
            return [2, 1];
        }
        if (self::strEndsWith(strtolower($name), "storage")
            || $name == "outPath"
            || $name == "options"
            || $name == "jpegQuality"
            || $name == "isImageDataEmbeeded"
            || $name == "shapeToClone"
            || $type == "int[]") {
            return null;
        }
        if ($name == "format") {
           if ($functionName == "getNotesSlideShapeWithFormat"
               || $functionName == "getNotesSlideWithFormat"
               || $functionName == "getSlidesImageWithFormat"
               || $functionName == "getShapeWithFormat"
               || $functionName == "postShapeSaveAs"
               || $functionName == "postNotesSlideShapeSaveAs") {
               return "png";
           }
           return "pdf";
        }
        if ($name == "folder") {
            return self::folderName;
        }
        if ($name == "name") {
            if ($functionName == "putNewPresentation") {
                return self::changedFileName;
            }
            if ($functionName == "deleteSlidesCleanSlidesList" || $functionName == "putSlidesSlide" || $functionName == "postSlidesAdd") {
                return "test-unprotected.ppt";
            }
            return self::fileName;
        }
        if (self::strEndsWith(strtolower($name), "password")) {
            if ($functionName == "deleteSlidesCleanSlidesList" || $functionName == "putSlidesSlide" || $functionName == "postSlidesAdd") {
                return null;
            }
            return "password";
        }
        if ($name == "propertyName") {
            return "testProperty";
        }
        if ($name == "templatePath" || $name == "cloneFrom" || $name == "source") {
            if ($functionName == "postSlidesDocument") {
                return self::folderName."/".self::templateFileName;
            }
            return self::folderName."/".self::fileName;
        }
        if ($name == "path") {
            return "";
        }
        if ($name == "color") {
            return "#FF0000dd";
        }
        if ($name == "data") {
            return "<staff><person><name>John Doe</name><address><line1>10 Downing Street</line1><line2>London</line2></address><phone>+457 123456</phone><bio>Hi, I'm John and this is my CV</bio><skills><skill><title>C#</title><level>Excellent</level></skill><skill><title>C++</title><level>Good</level></skill><skill><title>Java</title><level>Average</level></skill></skills></person></staff>";
        }
        if ($name == "pipeline") {
            return new Pipeline();
        }
        if ($name == "properties") {
            $properties = new DocumentProperties();
            $properties->setList([]);
            return $properties;
        }
        if ($name == "property") {
            $property = new DocumentProperty();
            $property->setName("testProperty001");
            $property->setValue("testValue002");
            return $property;
        }
        if ($name == "request") {
            return new PresentationsMergeRequest();
        }
        if ($name == "dto") {
            if (self::strEndsWith($functionName, "AddNewShape")) {
                $shape = new Shape();
                $shape->setText("testShape");
                $shape->setType(ShapeType::SHAPE);
                $shape->setShapeType(CombinedShapeType::BENT_ARROW);
                $shape->setGeometryShapeType(GeometryShapeType::RECTANGLE);
                return $shape;
            }
            $notesSlide = new NotesSlide();
            $notesSlide->setText("testNote");
            return $notesSlide;
        }
        if ($name == "slideDto") {
            if ($functionName == "putSlidesSlide") {
                $slide = new Slide();
                $layoutSlideUri = new ResourceUriElement();
                $uri = new ResourceUri();
                $uri->setHref("TitleOnly");
                $layoutSlideUri->setUri($uri);
                $slide->setLayoutSlide($layoutSlideUri);
                return $slide;
            }
            $layoutSlide = new LayoutSlide();
            $masterSlideUri = new ResourceUriElement();
            $uri = new ResourceUri();
            $uri->setHref("masterSlides/2");
            $masterSlideUri->setUri($uri);
            $layoutSlide->setMasterSlide($masterSlideUri);
            return $layoutSlide;
        }
        if ($name == "shapeIndex") {
            return 3;
        }
        if ($type == "int") {
            return 1;
        }
        return "test".$name;
    }

    /**
     */
    public static function invalidizeValue($name, $value, $type)
    {
        if ($name == "stream"
            || self::strEndsWith(strtolower($name), "dto")
            || $name == "request"
            || $name == "properties"
            || $name == "property") {
            return null;
        }
        if ($type == "int") {
            return 593;
        }
        if ($type == "int[]") {
            return [1, 593];
        }
        if ($name == "name") {
            return "invalid".$value;
        }
        return $value."invalid";
    }

    public static function assertSuccessfulException(Exception $ex, $functionName)
    {
        throw $ex;
    }

    public static function assertException(ApiException $ex, $functionName, $fieldName)
    {
        if ($fieldName == "pipeline" || $fieldName == "options") {
            Assert::assertEquals(500, $ex->getCode());
        } else if ($fieldName == "path" && self::strEndsWith($functionName, 'AddNewShape')) {
            Assert::assertEquals(405, $ex->getCode());
        } else if ($fieldName == "format") {
            Assert::assertTrue($ex->getCode() == 500 || $ex->getCode() == 400);
        } else if (($fieldName == "name" || $fieldName == "propertyName" || $fieldName == "folder" || $fieldName == "cloneFrom" || $fieldName == "source")
            && !((self::strStartsWith($functionName, 'post') || self::strStartsWith($functionName, 'put'))
                && !(self::strEndsWith($functionName, 'SaveAsTiff')
                    || self::strEndsWith($functionName, 'SlidesSplit')
                    || self::strEndsWith($functionName, 'SlideSize')
                    || self::strEndsWith($functionName, 'LayoutSlide')
                    || self::strEndsWith($functionName, 'SlideFromSourcePresentation')
                    || self::strEndsWith($functionName, 'PresentationMerge')
                    || self::strEndsWith($functionName, 'DocumentProperties')
                    || self::strEndsWith($functionName, 'DocumentProperty')
                    || self::strEndsWith($functionName, 'AddNewParagraph')
                    || self::strEndsWith($functionName, 'AddNewPortion')
                    || self::strEndsWith($functionName, 'AddNewShape')
                    || self::strEndsWith($functionName, 'SaveAs')
                    || self::strEndsWith($functionName, 'Add')
                    || self::strEndsWith($functionName, 'Copy')
                    || self::strEndsWith($functionName, 'Reorder')
                    || self::strEndsWith($functionName, 'ReorderMany')
                    || self::strEndsWith($functionName, 'DocumentProperty')
                    || self::strEndsWith($functionName, 'SetParagraphPortionProperties')
                    || self::strEndsWith($functionName, 'SetParagraphProperties')
                    || self::strEndsWith($functionName, 'SlideShapeInfo')
                    || self::strEndsWith($functionName, 'ReorderPosition')
                    || self::strEndsWith($functionName, 'SlidesSlide')
                    || self::strEndsWith($functionName, 'Background')
                    || self::strEndsWith($functionName, 'ReplaceText')
                    || (strpos($functionName, 'NotesSlide') && !($functionName == 'postAddNotesSlide'))))) {
            Assert::assertEquals(404, $ex->getCode());
            if ($fieldName == "propertyName") {
               Assert::assertRegExp("/^Property [a-zA-Z]+ not found/", $ex->getResponseObject()->getMessage());
            } else if ($functionName == "putNewPresentation") {
               Assert::assertRegExp("/^Object reference not set to an instance of an object/", $ex->getResponseObject()->getMessage());
            } else {
                Assert::assertContains("The specified key does not exist", $ex->getResponseObject()->getMessage());
            }
        } else {
            Assert::assertEquals(400, $ex->getCode());
            if (self::strEndsWith(strtolower($fieldName), "password") && $functionName != "putSlidesDocumentFromHtml") {
                if ($functionName == "deleteSlidesCleanSlidesList" || $functionName == "putSlidesSlide" || $functionName == "postSlidesAdd") {
                    Assert::assertRegExp("/^An attempt was made to move the position before the beginning of the stream./", $ex->getResponseObject()->getMessage());
                } else if ($functionName == "postAddNotesSlide" || ($functionName == "putNewPresentation" && $fieldName == "templatePassword")) {
                    Assert::assertRegExp("/^Object reference not set to an instance of an object./", $ex->getResponseObject()->getMessage());
                } else {
                    Assert::assertRegExp("/^Invalid password./", $ex->getResponseObject()->getMessage());
                }
                //Assert::assertRegExp("/^An attempt was made to move the position before the beginning of the stream/", $ex->getResponseObject()->getMessage());
            } else if ($functionName == "putNewPresentation" || $functionName == "putSlidesDocumentFromHtml") {
                Assert::assertRegExp("/^Object reference not set to an instance of an object/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "document") {
                Assert::assertRegExp("/^Can't read/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "to") {
                Assert::assertRegExp("/^Invalid 'to' parameter/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "index") {
                Assert::assertRegExp("/^Specified argument was out of the range of valid values/", $ex->getResponseObject()->getMessage());
            } else if (($fieldName == "slideIndex"
                   && ($functionName == "getSlidesSlideComments"
                       || (self::strStartsWith($functionName, "getNotesSlide") && !self::strStartsWith($functionName, "getNotesSlideShape"))))
                || $fieldName == "cloneFromPosition"
                || $fieldName == "shapeToClone") {
                Assert::assertRegExp("/^Invalid index/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "slideIndex" && $functionName == "postSlidesReorder") {
                Assert::assertRegExp("/^Index was out of range./", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "slideIndex" || $fieldName == "slides") {
                Assert::assertRegExp("/^Wrong slide index/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "slideDto") {
                Assert::assertRegExp("/^DTO of the slide expected in request body/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "request"
                || $fieldName == "property"
                || $fieldName == "properties"
                || ($functionName == "postSlidesDocument"
                    && ($fieldName == "data" || $fieldName == "storage" || $fieldName == "templatePath" || $fieldName == "templateStorage"))
                || $functionName == "postAddNotesSlide") {
                Assert::assertRegExp("/^Object reference not set to an instance of an object/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "dto") {
                if (self::strEndsWith($functionName, 'AddNewParagraph')
                    || self::strEndsWith($functionName, 'SetParagraphProperties')
                    || self::strEndsWith($functionName, 'SetParagraphPortionProperties')
                    || self::strEndsWith($functionName, 'SlideShapeInfo')
                    || self::strStartsWith($functionName, 'putUpdateNotesSlideShape')) {
                    Assert::assertRegExp("/^Shape dto is not specified/", $ex->getResponseObject()->getMessage());
                } else if (self::strEndsWith($functionName, 'AddNewPortion') || self::strEndsWith($functionName, 'AddNewShape')) {
                    Assert::assertRegExp("/^Invalid shape's path/", $ex->getResponseObject()->getMessage());
                } else {
                    Assert::assertRegExp("/^Value cannot be null/", $ex->getResponseObject()->getMessage());
                }
            } else if ($fieldName == "path") {
                if (self::strEndsWith($functionName, "Shapes")) {
                    Assert::assertRegExp("/^The request is invalid/", $ex->getResponseObject()->getMessage());
                } else {
                    Assert::assertRegExp("/^The HTTP resource that matches the request URI/", $ex->getResponseObject()->getMessage());
                }
            } else if ($fieldName == "shapeIndex" || $fieldName == "shapes") {
                Assert::assertRegExp("/^Wrong shape index/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "paragraphIndex" || $fieldName == "paragraphs") {
                Assert::assertRegExp("/^Wrong paragraph index/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "portionIndex" || $fieldName == "portions") {
                Assert::assertRegExp("/^Wrong portion index/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "newPosition"
                || $fieldName == "oldPositions"
                || $fieldName == "newPositions"
                || ($fieldName == "position" && ($functionName == "postSlidesReorderPosition" || $functionName == "postSlidesAdd" || $functionName == "postSlidesCopy"))) {
                Assert::assertRegExp("/^Specified argument was out of the range of valid values/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "oldPosition") {
                Assert::assertRegExp("/^Index was out of range/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "position") {
                Assert::assertRegExp("/^Index must be within the bounds of the List/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "slideToClone" || $fieldName == "slideToCopy") {
                Assert::assertRegExp("/^Index was out of range/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "placeholderIndex") {
                Assert::assertRegExp("/^Placeholder with specified index doesn't exist/", $ex->getResponseObject()->getMessage());
            } else if ($fieldName == "color") {
                Assert::assertRegExp("/^Color must be in format/", $ex->getResponseObject()->getMessage());
            } else {
                Assert::assertRegExp("/^The specified storage was not found or is not associated with the application/", $ex->getResponseObject()->getMessage());
            }
        }
    }

    public static function assertResponse($functionName, $fieldName)
    {
        if ($fieldName != "jpegQuality"
            && $fieldName != "width"
            && $fieldName != "height"
            && $fieldName != "propertyName"
            && $fieldName != "scaleType"
            && $fieldName != "sizeType"
            && $fieldName != "scaleX"
            && $fieldName != "scaleY"
            && $fieldName != "bounds"
            && $fieldName != "outPath"
            && $fieldName != "fontsFolder"
            && $fieldName != "isImageDataEmbedded"
            && $fieldName != "stream"
            && $fieldName != "html"
            && $fieldName != "options"
            && $fieldName != "applyToAll"
            && $fieldName != "slideToCopy"
            && $fieldName != "source"
            && $fieldName != "layoutAlias"
            && $fieldName != "background"
            && $fieldName != "withEmpty"
            && $fieldName != "oldValue"
            && $fieldName != "newValue"
            && $fieldName != "ignoreCase"
            && !($functionName == "getSlidesImageWithFormat" && $fieldName == "format")
            && !(($functionName == "postSlidesDocument" || $functionName == "putNewPresentation") && ($fieldName == "folder" || $fieldName == "password"))
            && !($functionName == "putSlidesDocumentFromHtml" && $fieldName == "folder")
            && !(($functionName == "putSlidesDocumentFromHtml" || $functionName == "putNewPresentation" || $functionName == "postSlidesDocument") && $fieldName == "name")
            && !($functionName == "postAddNotesSlide" && $fieldName == "dto")
            && !($functionName == "postSlidesReorderPosition"
                && ($fieldName == "position" || $fieldName == "slideToClone" || $fieldName == "oldPositions" || $fieldName == "newPositions"))
            && !self::strEndsWith($functionName, 'SlidesSplit')) {
            Assert::fail("Must have failed");
        }
    }

    public static function strStartsWith($string, $head) {
        return !strncmp($string, $head, strlen($head));
    }
    
    public static function strEndsWith($string, $tail) {
        if (strlen($tail) == 0) {
            return true;
        }
        return (substr($string, -strlen($tail)) === $tail);
    }
}
