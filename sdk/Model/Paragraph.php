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
 * Paragraph Class Doc Comment
 *
 * @category Class
 * @description Represents paragraph resource
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Paragraph extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Paragraph';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'margin_left' => 'double',
        'margin_right' => 'double',
        'space_before' => 'double',
        'space_after' => 'double',
        'space_within' => 'double',
        'indent' => 'double',
        'alignment' => '\Aspose\Slides\Cloud\Sdk\Model\TextAlignment',
        'font_alignment' => '\Aspose\Slides\Cloud\Sdk\Model\FontAlignment',
        'default_tab_size' => 'double',
        'depth' => 'int',
        'bullet_char' => 'string',
        'bullet_height' => 'double',
        'bullet_type' => '\Aspose\Slides\Cloud\Sdk\Model\BulletType',
        'numbered_bullet_start_with' => 'int',
        'numbered_bullet_style' => '\Aspose\Slides\Cloud\Sdk\Model\NumberedBulletStyle',
        'hanging_punctuation' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'east_asian_line_break' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'latin_line_break' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'right_to_left' => '\Aspose\Slides\Cloud\Sdk\Model\NullableBool',
        'portion_list' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'margin_left' => 'double',
        'margin_right' => 'double',
        'space_before' => 'double',
        'space_after' => 'double',
        'space_within' => 'double',
        'indent' => 'double',
        'alignment' => null,
        'font_alignment' => null,
        'default_tab_size' => 'double',
        'depth' => null,
        'bullet_char' => null,
        'bullet_height' => 'double',
        'bullet_type' => null,
        'numbered_bullet_start_with' => null,
        'numbered_bullet_style' => null,
        'hanging_punctuation' => null,
        'east_asian_line_break' => null,
        'latin_line_break' => null,
        'right_to_left' => null,
        'portion_list' => null
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
        'margin_left' => 'MarginLeft',
        'margin_right' => 'MarginRight',
        'space_before' => 'SpaceBefore',
        'space_after' => 'SpaceAfter',
        'space_within' => 'SpaceWithin',
        'indent' => 'Indent',
        'alignment' => 'Alignment',
        'font_alignment' => 'FontAlignment',
        'default_tab_size' => 'DefaultTabSize',
        'depth' => 'Depth',
        'bullet_char' => 'BulletChar',
        'bullet_height' => 'BulletHeight',
        'bullet_type' => 'BulletType',
        'numbered_bullet_start_with' => 'NumberedBulletStartWith',
        'numbered_bullet_style' => 'NumberedBulletStyle',
        'hanging_punctuation' => 'HangingPunctuation',
        'east_asian_line_break' => 'EastAsianLineBreak',
        'latin_line_break' => 'LatinLineBreak',
        'right_to_left' => 'RightToLeft',
        'portion_list' => 'PortionList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'margin_left' => 'setMarginLeft',
        'margin_right' => 'setMarginRight',
        'space_before' => 'setSpaceBefore',
        'space_after' => 'setSpaceAfter',
        'space_within' => 'setSpaceWithin',
        'indent' => 'setIndent',
        'alignment' => 'setAlignment',
        'font_alignment' => 'setFontAlignment',
        'default_tab_size' => 'setDefaultTabSize',
        'depth' => 'setDepth',
        'bullet_char' => 'setBulletChar',
        'bullet_height' => 'setBulletHeight',
        'bullet_type' => 'setBulletType',
        'numbered_bullet_start_with' => 'setNumberedBulletStartWith',
        'numbered_bullet_style' => 'setNumberedBulletStyle',
        'hanging_punctuation' => 'setHangingPunctuation',
        'east_asian_line_break' => 'setEastAsianLineBreak',
        'latin_line_break' => 'setLatinLineBreak',
        'right_to_left' => 'setRightToLeft',
        'portion_list' => 'setPortionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'margin_left' => 'getMarginLeft',
        'margin_right' => 'getMarginRight',
        'space_before' => 'getSpaceBefore',
        'space_after' => 'getSpaceAfter',
        'space_within' => 'getSpaceWithin',
        'indent' => 'getIndent',
        'alignment' => 'getAlignment',
        'font_alignment' => 'getFontAlignment',
        'default_tab_size' => 'getDefaultTabSize',
        'depth' => 'getDepth',
        'bullet_char' => 'getBulletChar',
        'bullet_height' => 'getBulletHeight',
        'bullet_type' => 'getBulletType',
        'numbered_bullet_start_with' => 'getNumberedBulletStartWith',
        'numbered_bullet_style' => 'getNumberedBulletStyle',
        'hanging_punctuation' => 'getHangingPunctuation',
        'east_asian_line_break' => 'getEastAsianLineBreak',
        'latin_line_break' => 'getLatinLineBreak',
        'right_to_left' => 'getRightToLeft',
        'portion_list' => 'getPortionList'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['margin_left'] = isset($data['margin_left']) ? $data['margin_left'] : null;
        $this->container['margin_right'] = isset($data['margin_right']) ? $data['margin_right'] : null;
        $this->container['space_before'] = isset($data['space_before']) ? $data['space_before'] : null;
        $this->container['space_after'] = isset($data['space_after']) ? $data['space_after'] : null;
        $this->container['space_within'] = isset($data['space_within']) ? $data['space_within'] : null;
        $this->container['indent'] = isset($data['indent']) ? $data['indent'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['font_alignment'] = isset($data['font_alignment']) ? $data['font_alignment'] : null;
        $this->container['default_tab_size'] = isset($data['default_tab_size']) ? $data['default_tab_size'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['bullet_char'] = isset($data['bullet_char']) ? $data['bullet_char'] : null;
        $this->container['bullet_height'] = isset($data['bullet_height']) ? $data['bullet_height'] : null;
        $this->container['bullet_type'] = isset($data['bullet_type']) ? $data['bullet_type'] : null;
        $this->container['numbered_bullet_start_with'] = isset($data['numbered_bullet_start_with']) ? $data['numbered_bullet_start_with'] : null;
        $this->container['numbered_bullet_style'] = isset($data['numbered_bullet_style']) ? $data['numbered_bullet_style'] : null;
        $this->container['hanging_punctuation'] = isset($data['hanging_punctuation']) ? $data['hanging_punctuation'] : null;
        $this->container['east_asian_line_break'] = isset($data['east_asian_line_break']) ? $data['east_asian_line_break'] : null;
        $this->container['latin_line_break'] = isset($data['latin_line_break']) ? $data['latin_line_break'] : null;
        $this->container['right_to_left'] = isset($data['right_to_left']) ? $data['right_to_left'] : null;
        $this->container['portion_list'] = isset($data['portion_list']) ? $data['portion_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets margin_left
     *
     * @return double
     */
    public function getMarginLeft()
    {
        return $this->container['margin_left'];
    }

    /**
     * Sets margin_left
     *
     * @param double $margin_left margin_left
     *
     * @return $this
     */
    public function setMarginLeft($margin_left)
    {
        $this->container['margin_left'] = $margin_left;

        return $this;
    }

    /**
     * Gets margin_right
     *
     * @return double
     */
    public function getMarginRight()
    {
        return $this->container['margin_right'];
    }

    /**
     * Sets margin_right
     *
     * @param double $margin_right margin_right
     *
     * @return $this
     */
    public function setMarginRight($margin_right)
    {
        $this->container['margin_right'] = $margin_right;

        return $this;
    }

    /**
     * Gets space_before
     *
     * @return double
     */
    public function getSpaceBefore()
    {
        return $this->container['space_before'];
    }

    /**
     * Sets space_before
     *
     * @param double $space_before space_before
     *
     * @return $this
     */
    public function setSpaceBefore($space_before)
    {
        $this->container['space_before'] = $space_before;

        return $this;
    }

    /**
     * Gets space_after
     *
     * @return double
     */
    public function getSpaceAfter()
    {
        return $this->container['space_after'];
    }

    /**
     * Sets space_after
     *
     * @param double $space_after space_after
     *
     * @return $this
     */
    public function setSpaceAfter($space_after)
    {
        $this->container['space_after'] = $space_after;

        return $this;
    }

    /**
     * Gets space_within
     *
     * @return double
     */
    public function getSpaceWithin()
    {
        return $this->container['space_within'];
    }

    /**
     * Sets space_within
     *
     * @param double $space_within space_within
     *
     * @return $this
     */
    public function setSpaceWithin($space_within)
    {
        $this->container['space_within'] = $space_within;

        return $this;
    }

    /**
     * Gets indent
     *
     * @return double
     */
    public function getIndent()
    {
        return $this->container['indent'];
    }

    /**
     * Sets indent
     *
     * @param double $indent indent
     *
     * @return $this
     */
    public function setIndent($indent)
    {
        $this->container['indent'] = $indent;

        return $this;
    }

    /**
     * Gets alignment
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TextAlignment
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TextAlignment $alignment alignment
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets font_alignment
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FontAlignment
     */
    public function getFontAlignment()
    {
        return $this->container['font_alignment'];
    }

    /**
     * Sets font_alignment
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FontAlignment $font_alignment font_alignment
     *
     * @return $this
     */
    public function setFontAlignment($font_alignment)
    {
        $this->container['font_alignment'] = $font_alignment;

        return $this;
    }

    /**
     * Gets default_tab_size
     *
     * @return double
     */
    public function getDefaultTabSize()
    {
        return $this->container['default_tab_size'];
    }

    /**
     * Sets default_tab_size
     *
     * @param double $default_tab_size default_tab_size
     *
     * @return $this
     */
    public function setDefaultTabSize($default_tab_size)
    {
        $this->container['default_tab_size'] = $default_tab_size;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param int $depth depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets bullet_char
     *
     * @return string
     */
    public function getBulletChar()
    {
        return $this->container['bullet_char'];
    }

    /**
     * Sets bullet_char
     *
     * @param string $bullet_char bullet_char
     *
     * @return $this
     */
    public function setBulletChar($bullet_char)
    {
        $this->container['bullet_char'] = $bullet_char;

        return $this;
    }

    /**
     * Gets bullet_height
     *
     * @return double
     */
    public function getBulletHeight()
    {
        return $this->container['bullet_height'];
    }

    /**
     * Sets bullet_height
     *
     * @param double $bullet_height bullet_height
     *
     * @return $this
     */
    public function setBulletHeight($bullet_height)
    {
        $this->container['bullet_height'] = $bullet_height;

        return $this;
    }

    /**
     * Gets bullet_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\BulletType
     */
    public function getBulletType()
    {
        return $this->container['bullet_type'];
    }

    /**
     * Sets bullet_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\BulletType $bullet_type bullet_type
     *
     * @return $this
     */
    public function setBulletType($bullet_type)
    {
        $this->container['bullet_type'] = $bullet_type;

        return $this;
    }

    /**
     * Gets numbered_bullet_start_with
     *
     * @return int
     */
    public function getNumberedBulletStartWith()
    {
        return $this->container['numbered_bullet_start_with'];
    }

    /**
     * Sets numbered_bullet_start_with
     *
     * @param int $numbered_bullet_start_with numbered_bullet_start_with
     *
     * @return $this
     */
    public function setNumberedBulletStartWith($numbered_bullet_start_with)
    {
        $this->container['numbered_bullet_start_with'] = $numbered_bullet_start_with;

        return $this;
    }

    /**
     * Gets numbered_bullet_style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NumberedBulletStyle
     */
    public function getNumberedBulletStyle()
    {
        return $this->container['numbered_bullet_style'];
    }

    /**
     * Sets numbered_bullet_style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NumberedBulletStyle $numbered_bullet_style numbered_bullet_style
     *
     * @return $this
     */
    public function setNumberedBulletStyle($numbered_bullet_style)
    {
        $this->container['numbered_bullet_style'] = $numbered_bullet_style;

        return $this;
    }

    /**
     * Gets hanging_punctuation
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getHangingPunctuation()
    {
        return $this->container['hanging_punctuation'];
    }

    /**
     * Sets hanging_punctuation
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $hanging_punctuation hanging_punctuation
     *
     * @return $this
     */
    public function setHangingPunctuation($hanging_punctuation)
    {
        $this->container['hanging_punctuation'] = $hanging_punctuation;

        return $this;
    }

    /**
     * Gets east_asian_line_break
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getEastAsianLineBreak()
    {
        return $this->container['east_asian_line_break'];
    }

    /**
     * Sets east_asian_line_break
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $east_asian_line_break east_asian_line_break
     *
     * @return $this
     */
    public function setEastAsianLineBreak($east_asian_line_break)
    {
        $this->container['east_asian_line_break'] = $east_asian_line_break;

        return $this;
    }

    /**
     * Gets latin_line_break
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getLatinLineBreak()
    {
        return $this->container['latin_line_break'];
    }

    /**
     * Sets latin_line_break
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $latin_line_break latin_line_break
     *
     * @return $this
     */
    public function setLatinLineBreak($latin_line_break)
    {
        $this->container['latin_line_break'] = $latin_line_break;

        return $this;
    }

    /**
     * Gets right_to_left
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NullableBool
     */
    public function getRightToLeft()
    {
        return $this->container['right_to_left'];
    }

    /**
     * Sets right_to_left
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NullableBool $right_to_left right_to_left
     *
     * @return $this
     */
    public function setRightToLeft($right_to_left)
    {
        $this->container['right_to_left'] = $right_to_left;

        return $this;
    }

    /**
     * Gets portion_list
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement[]
     */
    public function getPortionList()
    {
        return $this->container['portion_list'];
    }

    /**
     * Sets portion_list
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUriElement[] $portion_list portion_list
     *
     * @return $this
     */
    public function setPortionList($portion_list)
    {
        $this->container['portion_list'] = $portion_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


