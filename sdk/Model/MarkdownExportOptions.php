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


namespace Aspose\Slides\Cloud\Sdk\Model;

use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * MarkdownExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in Html5 format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarkdownExportOptions extends ExportOptions 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MarkdownExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exportType' => 'string',
        'flavor' => 'string',
        'newLineType' => 'string',
        'imagesSaveFolderName' => 'string',
        'showSlideNumber' => 'bool',
        'showComments' => 'bool',
        'showHiddenSlides' => 'bool',
        'removeEmptyLines' => 'bool',
        'handleRepeatedSpaces' => 'string',
        'slideNumberFormat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exportType' => null,
        'flavor' => null,
        'newLineType' => null,
        'imagesSaveFolderName' => null,
        'showSlideNumber' => null,
        'showComments' => null,
        'showHiddenSlides' => null,
        'removeEmptyLines' => null,
        'handleRepeatedSpaces' => null,
        'slideNumberFormat' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'exportType' => 'ExportType',
        'flavor' => 'Flavor',
        'newLineType' => 'NewLineType',
        'imagesSaveFolderName' => 'ImagesSaveFolderName',
        'showSlideNumber' => 'ShowSlideNumber',
        'showComments' => 'ShowComments',
        'showHiddenSlides' => 'ShowHiddenSlides',
        'removeEmptyLines' => 'RemoveEmptyLines',
        'handleRepeatedSpaces' => 'HandleRepeatedSpaces',
        'slideNumberFormat' => 'SlideNumberFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exportType' => 'setExportType',
        'flavor' => 'setFlavor',
        'newLineType' => 'setNewLineType',
        'imagesSaveFolderName' => 'setImagesSaveFolderName',
        'showSlideNumber' => 'setShowSlideNumber',
        'showComments' => 'setShowComments',
        'showHiddenSlides' => 'setShowHiddenSlides',
        'removeEmptyLines' => 'setRemoveEmptyLines',
        'handleRepeatedSpaces' => 'setHandleRepeatedSpaces',
        'slideNumberFormat' => 'setSlideNumberFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exportType' => 'getExportType',
        'flavor' => 'getFlavor',
        'newLineType' => 'getNewLineType',
        'imagesSaveFolderName' => 'getImagesSaveFolderName',
        'showSlideNumber' => 'getShowSlideNumber',
        'showComments' => 'getShowComments',
        'showHiddenSlides' => 'getShowHiddenSlides',
        'removeEmptyLines' => 'getRemoveEmptyLines',
        'handleRepeatedSpaces' => 'getHandleRepeatedSpaces',
        'slideNumberFormat' => 'getSlideNumberFormat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const EXPORT_TYPE_SEQUENTIAL = 'Sequential';
    const EXPORT_TYPE_TEXT_ONLY = 'TextOnly';
    const EXPORT_TYPE_VISUAL = 'Visual';
    const FLAVOR_GITHUB = 'Github';
    const FLAVOR_GRUBER = 'Gruber';
    const FLAVOR_MULTI_MARKDOWN = 'MultiMarkdown';
    const FLAVOR_COMMON_MARK = 'CommonMark';
    const FLAVOR_MARKDOWN_EXTRA = 'MarkdownExtra';
    const FLAVOR_PANDOC = 'Pandoc';
    const FLAVOR_KRAMDOWN = 'Kramdown';
    const FLAVOR_MARKUA = 'Markua';
    const FLAVOR_MARUKU = 'Maruku';
    const FLAVOR_MARKDOWN2 = 'Markdown2';
    const FLAVOR_REMARKABLE = 'Remarkable';
    const FLAVOR_SHOWDOWN = 'Showdown';
    const FLAVOR_GHOST = 'Ghost';
    const FLAVOR_GIT_LAB = 'GitLab';
    const FLAVOR_HAROOPAD = 'Haroopad';
    const FLAVOR_IA_WRITER = 'IaWriter';
    const FLAVOR_REDCARPET = 'Redcarpet';
    const FLAVOR_SCHOLARLY_MARKDOWN = 'ScholarlyMarkdown';
    const FLAVOR_TAIGA = 'Taiga';
    const FLAVOR_TRELLO = 'Trello';
    const FLAVOR_S9_E_TEXT_FORMATTER = 'S9ETextFormatter';
    const FLAVOR_X_WIKI = 'XWiki';
    const FLAVOR_STACK_OVERFLOW = 'StackOverflow';
    const FLAVOR__DEFAULT = 'Default';
    const NEW_LINE_TYPE_WINDOWS = 'Windows';
    const NEW_LINE_TYPE_UNIX = 'Unix';
    const NEW_LINE_TYPE_MAC = 'Mac';
    const HANDLE_REPEATED_SPACES_NONE = 'None';
    const HANDLE_REPEATED_SPACES_ALTERNATE_SPACES_TO_NBSP = 'AlternateSpacesToNbsp';
    const HANDLE_REPEATED_SPACES_MULTIPLE_SPACES_TO_NBSP = 'MultipleSpacesToNbsp';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportTypeAllowableValues()
    {
        return [
            self::EXPORT_TYPE_SEQUENTIAL,
            self::EXPORT_TYPE_TEXT_ONLY,
            self::EXPORT_TYPE_VISUAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlavorAllowableValues()
    {
        return [
            self::FLAVOR_GITHUB,
            self::FLAVOR_GRUBER,
            self::FLAVOR_MULTI_MARKDOWN,
            self::FLAVOR_COMMON_MARK,
            self::FLAVOR_MARKDOWN_EXTRA,
            self::FLAVOR_PANDOC,
            self::FLAVOR_KRAMDOWN,
            self::FLAVOR_MARKUA,
            self::FLAVOR_MARUKU,
            self::FLAVOR_MARKDOWN2,
            self::FLAVOR_REMARKABLE,
            self::FLAVOR_SHOWDOWN,
            self::FLAVOR_GHOST,
            self::FLAVOR_GIT_LAB,
            self::FLAVOR_HAROOPAD,
            self::FLAVOR_IA_WRITER,
            self::FLAVOR_REDCARPET,
            self::FLAVOR_SCHOLARLY_MARKDOWN,
            self::FLAVOR_TAIGA,
            self::FLAVOR_TRELLO,
            self::FLAVOR_S9_E_TEXT_FORMATTER,
            self::FLAVOR_X_WIKI,
            self::FLAVOR_STACK_OVERFLOW,
            self::FLAVOR__DEFAULT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNewLineTypeAllowableValues()
    {
        return [
            self::NEW_LINE_TYPE_WINDOWS,
            self::NEW_LINE_TYPE_UNIX,
            self::NEW_LINE_TYPE_MAC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandleRepeatedSpacesAllowableValues()
    {
        return [
            self::HANDLE_REPEATED_SPACES_NONE,
            self::HANDLE_REPEATED_SPACES_ALTERNATE_SPACES_TO_NBSP,
            self::HANDLE_REPEATED_SPACES_MULTIPLE_SPACES_TO_NBSP,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['exportType'] = isset($data['exportType']) ? $data['exportType'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['newLineType'] = isset($data['newLineType']) ? $data['newLineType'] : null;
        $this->container['imagesSaveFolderName'] = isset($data['imagesSaveFolderName']) ? $data['imagesSaveFolderName'] : null;
        $this->container['showSlideNumber'] = isset($data['showSlideNumber']) ? $data['showSlideNumber'] : null;
        $this->container['showComments'] = isset($data['showComments']) ? $data['showComments'] : null;
        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['removeEmptyLines'] = isset($data['removeEmptyLines']) ? $data['removeEmptyLines'] : null;
        $this->container['handleRepeatedSpaces'] = isset($data['handleRepeatedSpaces']) ? $data['handleRepeatedSpaces'] : null;
        $this->container['slideNumberFormat'] = isset($data['slideNumberFormat']) ? $data['slideNumberFormat'] : null;
        $this->container['format'] = 'md';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getExportTypeAllowableValues();
        if (!in_array($this->container['exportType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'exportType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFlavorAllowableValues();
        if (!in_array($this->container['flavor'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flavor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNewLineTypeAllowableValues();
        if (!in_array($this->container['newLineType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'newLineType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHandleRepeatedSpacesAllowableValues();
        if (!in_array($this->container['handleRepeatedSpaces'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'handleRepeatedSpaces', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        $allowedValues = $this->getExportTypeAllowableValues();
        if (!in_array($this->container['exportType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFlavorAllowableValues();
        if (!in_array($this->container['flavor'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getNewLineTypeAllowableValues();
        if (!in_array($this->container['newLineType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHandleRepeatedSpacesAllowableValues();
        if (!in_array($this->container['handleRepeatedSpaces'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets exportType
     *
     * @return string
     */
    public function getExportType()
    {
        return $this->container['exportType'];
    }

    /**
     * Sets exportType
     *
     * @param string $exportType Specifies markdown specification to convert presentation. Default is TextOnly.
     *
     * @return $this
     */
    public function setExportType($exportType)
    {
        $allowedValues = $this->getExportTypeAllowableValues();


        if (is_numeric($exportType)) {
            if ($exportType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'exportType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $exportType = $allowedValues[$exportType];
            }
        } else {
            if (!is_null($exportType) && !in_array($exportType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'exportType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['exportType'] = $exportType;

        return $this;
    }

    /**
     * Gets flavor
     *
     * @return string
     */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
     * Sets flavor
     *
     * @param string $flavor Specifies markdown specification to convert presentation. Default is MultiMarkdown.
     *
     * @return $this
     */
    public function setFlavor($flavor)
    {
        $allowedValues = $this->getFlavorAllowableValues();


        if (is_numeric($flavor)) {
            if ($flavor >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'flavor', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $flavor = $allowedValues[$flavor];
            }
        } else {
            if (!is_null($flavor) && !in_array($flavor, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'flavor', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['flavor'] = $flavor;

        return $this;
    }

    /**
     * Gets newLineType
     *
     * @return string
     */
    public function getNewLineType()
    {
        return $this->container['newLineType'];
    }

    /**
     * Sets newLineType
     *
     * @param string $newLineType Specifies whether the generated document should have new lines of \\\\r(Macintosh), \\\\n(Unix) or \\\\r\\\\n(Windows). Default is Unix.
     *
     * @return $this
     */
    public function setNewLineType($newLineType)
    {
        $allowedValues = $this->getNewLineTypeAllowableValues();


        if (is_numeric($newLineType)) {
            if ($newLineType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'newLineType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $newLineType = $allowedValues[$newLineType];
            }
        } else {
            if (!is_null($newLineType) && !in_array($newLineType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'newLineType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['newLineType'] = $newLineType;

        return $this;
    }

    /**
     * Gets imagesSaveFolderName
     *
     * @return string
     */
    public function getImagesSaveFolderName()
    {
        return $this->container['imagesSaveFolderName'];
    }

    /**
     * Sets imagesSaveFolderName
     *
     * @param string $imagesSaveFolderName Specifies folder name to save images. Default is Images.
     *
     * @return $this
     */
    public function setImagesSaveFolderName($imagesSaveFolderName)
    {
        $this->container['imagesSaveFolderName'] = $imagesSaveFolderName;

        return $this;
    }

    /**
     * Gets showSlideNumber
     *
     * @return bool
     */
    public function getShowSlideNumber()
    {
        return $this->container['showSlideNumber'];
    }

    /**
     * Sets showSlideNumber
     *
     * @param bool $showSlideNumber Specifies whether the generated document should include slide number. Default is false.
     *
     * @return $this
     */
    public function setShowSlideNumber($showSlideNumber)
    {
        $this->container['showSlideNumber'] = $showSlideNumber;

        return $this;
    }

    /**
     * Gets showComments
     *
     * @return bool
     */
    public function getShowComments()
    {
        return $this->container['showComments'];
    }

    /**
     * Sets showComments
     *
     * @param bool $showComments Specifies whether the generated document should include comments. Default is false.
     *
     * @return $this
     */
    public function setShowComments($showComments)
    {
        $this->container['showComments'] = $showComments;

        return $this;
    }

    /**
     * Gets showHiddenSlides
     *
     * @return bool
     */
    public function getShowHiddenSlides()
    {
        return $this->container['showHiddenSlides'];
    }

    /**
     * Sets showHiddenSlides
     *
     * @param bool $showHiddenSlides Specifies whether the generated document should include hidden slides. Default is false.
     *
     * @return $this
     */
    public function setShowHiddenSlides($showHiddenSlides)
    {
        $this->container['showHiddenSlides'] = $showHiddenSlides;

        return $this;
    }

    /**
     * Gets removeEmptyLines
     *
     * @return bool
     */
    public function getRemoveEmptyLines()
    {
        return $this->container['removeEmptyLines'];
    }

    /**
     * Sets removeEmptyLines
     *
     * @param bool $removeEmptyLines true to remove empty or whitespace-only lines from the final Markdown output. Default is false.
     *
     * @return $this
     */
    public function setRemoveEmptyLines($removeEmptyLines)
    {
        $this->container['removeEmptyLines'] = $removeEmptyLines;

        return $this;
    }

    /**
     * Gets handleRepeatedSpaces
     *
     * @return string
     */
    public function getHandleRepeatedSpaces()
    {
        return $this->container['handleRepeatedSpaces'];
    }

    /**
     * Sets handleRepeatedSpaces
     *
     * @param string $handleRepeatedSpaces Specifies how repeated space characters are preserved to maintain visual alignment.
     *
     * @return $this
     */
    public function setHandleRepeatedSpaces($handleRepeatedSpaces)
    {
        $allowedValues = $this->getHandleRepeatedSpacesAllowableValues();


        if (is_numeric($handleRepeatedSpaces)) {
            if ($handleRepeatedSpaces >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'handleRepeatedSpaces', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $handleRepeatedSpaces = $allowedValues[$handleRepeatedSpaces];
            }
        } else {
            if (!is_null($handleRepeatedSpaces) && !in_array($handleRepeatedSpaces, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'handleRepeatedSpaces', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['handleRepeatedSpaces'] = $handleRepeatedSpaces;

        return $this;
    }

    /**
     * Gets slideNumberFormat
     *
     * @return string
     */
    public function getSlideNumberFormat()
    {
        return $this->container['slideNumberFormat'];
    }

    /**
     * Sets slideNumberFormat
     *
     * @param string $slideNumberFormat The format of slide number headers.
     *
     * @return $this
     */
    public function setSlideNumberFormat($slideNumberFormat)
    {
        $this->container['slideNumberFormat'] = $slideNumberFormat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset) : mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


