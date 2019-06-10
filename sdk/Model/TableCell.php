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


use \ArrayAccess;
use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * TableCell Class Doc Comment
 *
 * @category Class
 * @description Represents one cell of table.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TableCell implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TableCell';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'row_span' => 'int',
        'col_span' => 'int',
        'margin_top' => 'double',
        'margin_right' => 'double',
        'margin_left' => 'double',
        'margin_bottom' => 'double',
        'text_anchor_type' => 'string',
        'text_vertical_type' => 'string',
        'fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'border_top' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'border_right' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'border_left' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'border_bottom' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'border_diagonal_up' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'border_diagonal_down' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'row_span' => 'int32',
        'col_span' => 'int32',
        'margin_top' => 'double',
        'margin_right' => 'double',
        'margin_left' => 'double',
        'margin_bottom' => 'double',
        'text_anchor_type' => null,
        'text_vertical_type' => null,
        'fill_format' => null,
        'border_top' => null,
        'border_right' => null,
        'border_left' => null,
        'border_bottom' => null,
        'border_diagonal_up' => null,
        'border_diagonal_down' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text' => 'Text',
        'row_span' => 'RowSpan',
        'col_span' => 'ColSpan',
        'margin_top' => 'MarginTop',
        'margin_right' => 'MarginRight',
        'margin_left' => 'MarginLeft',
        'margin_bottom' => 'MarginBottom',
        'text_anchor_type' => 'TextAnchorType',
        'text_vertical_type' => 'TextVerticalType',
        'fill_format' => 'FillFormat',
        'border_top' => 'BorderTop',
        'border_right' => 'BorderRight',
        'border_left' => 'BorderLeft',
        'border_bottom' => 'BorderBottom',
        'border_diagonal_up' => 'BorderDiagonalUp',
        'border_diagonal_down' => 'BorderDiagonalDown'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'row_span' => 'setRowSpan',
        'col_span' => 'setColSpan',
        'margin_top' => 'setMarginTop',
        'margin_right' => 'setMarginRight',
        'margin_left' => 'setMarginLeft',
        'margin_bottom' => 'setMarginBottom',
        'text_anchor_type' => 'setTextAnchorType',
        'text_vertical_type' => 'setTextVerticalType',
        'fill_format' => 'setFillFormat',
        'border_top' => 'setBorderTop',
        'border_right' => 'setBorderRight',
        'border_left' => 'setBorderLeft',
        'border_bottom' => 'setBorderBottom',
        'border_diagonal_up' => 'setBorderDiagonalUp',
        'border_diagonal_down' => 'setBorderDiagonalDown'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'row_span' => 'getRowSpan',
        'col_span' => 'getColSpan',
        'margin_top' => 'getMarginTop',
        'margin_right' => 'getMarginRight',
        'margin_left' => 'getMarginLeft',
        'margin_bottom' => 'getMarginBottom',
        'text_anchor_type' => 'getTextAnchorType',
        'text_vertical_type' => 'getTextVerticalType',
        'fill_format' => 'getFillFormat',
        'border_top' => 'getBorderTop',
        'border_right' => 'getBorderRight',
        'border_left' => 'getBorderLeft',
        'border_bottom' => 'getBorderBottom',
        'border_diagonal_up' => 'getBorderDiagonalUp',
        'border_diagonal_down' => 'getBorderDiagonalDown'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const TEXT_ANCHOR_TYPE_TOP = 'Top';
    const TEXT_ANCHOR_TYPE_CENTER = 'Center';
    const TEXT_ANCHOR_TYPE_BOTTOM = 'Bottom';
    const TEXT_ANCHOR_TYPE_JUSTIFIED = 'Justified';
    const TEXT_ANCHOR_TYPE_DISTRIBUTED = 'Distributed';
    const TEXT_ANCHOR_TYPE_NOT_DEFINED = 'NotDefined';
    const TEXT_VERTICAL_TYPE_HORIZONTAL = 'Horizontal';
    const TEXT_VERTICAL_TYPE_VERTICAL = 'Vertical';
    const TEXT_VERTICAL_TYPE_VERTICAL270 = 'Vertical270';
    const TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL = 'WordArtVertical';
    const TEXT_VERTICAL_TYPE_EAST_ASIAN_VERTICAL = 'EastAsianVertical';
    const TEXT_VERTICAL_TYPE_MONGOLIAN_VERTICAL = 'MongolianVertical';
    const TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL_RIGHT_TO_LEFT = 'WordArtVerticalRightToLeft';
    const TEXT_VERTICAL_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextAnchorTypeAllowableValues()
    {
        return [
            self::TEXT_ANCHOR_TYPE_TOP,
            self::TEXT_ANCHOR_TYPE_CENTER,
            self::TEXT_ANCHOR_TYPE_BOTTOM,
            self::TEXT_ANCHOR_TYPE_JUSTIFIED,
            self::TEXT_ANCHOR_TYPE_DISTRIBUTED,
            self::TEXT_ANCHOR_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextVerticalTypeAllowableValues()
    {
        return [
            self::TEXT_VERTICAL_TYPE_HORIZONTAL,
            self::TEXT_VERTICAL_TYPE_VERTICAL,
            self::TEXT_VERTICAL_TYPE_VERTICAL270,
            self::TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL,
            self::TEXT_VERTICAL_TYPE_EAST_ASIAN_VERTICAL,
            self::TEXT_VERTICAL_TYPE_MONGOLIAN_VERTICAL,
            self::TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL_RIGHT_TO_LEFT,
            self::TEXT_VERTICAL_TYPE_NOT_DEFINED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['row_span'] = isset($data['row_span']) ? $data['row_span'] : null;
        $this->container['col_span'] = isset($data['col_span']) ? $data['col_span'] : null;
        $this->container['margin_top'] = isset($data['margin_top']) ? $data['margin_top'] : null;
        $this->container['margin_right'] = isset($data['margin_right']) ? $data['margin_right'] : null;
        $this->container['margin_left'] = isset($data['margin_left']) ? $data['margin_left'] : null;
        $this->container['margin_bottom'] = isset($data['margin_bottom']) ? $data['margin_bottom'] : null;
        $this->container['text_anchor_type'] = isset($data['text_anchor_type']) ? $data['text_anchor_type'] : null;
        $this->container['text_vertical_type'] = isset($data['text_vertical_type']) ? $data['text_vertical_type'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['border_top'] = isset($data['border_top']) ? $data['border_top'] : null;
        $this->container['border_right'] = isset($data['border_right']) ? $data['border_right'] : null;
        $this->container['border_left'] = isset($data['border_left']) ? $data['border_left'] : null;
        $this->container['border_bottom'] = isset($data['border_bottom']) ? $data['border_bottom'] : null;
        $this->container['border_diagonal_up'] = isset($data['border_diagonal_up']) ? $data['border_diagonal_up'] : null;
        $this->container['border_diagonal_down'] = isset($data['border_diagonal_down']) ? $data['border_diagonal_down'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['row_span'] === null) {
            $invalidProperties[] = "'row_span' can't be null";
        }
        if ($this->container['col_span'] === null) {
            $invalidProperties[] = "'col_span' can't be null";
        }
        if ($this->container['margin_top'] === null) {
            $invalidProperties[] = "'margin_top' can't be null";
        }
        if ($this->container['margin_right'] === null) {
            $invalidProperties[] = "'margin_right' can't be null";
        }
        if ($this->container['margin_left'] === null) {
            $invalidProperties[] = "'margin_left' can't be null";
        }
        if ($this->container['margin_bottom'] === null) {
            $invalidProperties[] = "'margin_bottom' can't be null";
        }
        if ($this->container['text_anchor_type'] === null) {
            $invalidProperties[] = "'text_anchor_type' can't be null";
        }
        $allowedValues = $this->getTextAnchorTypeAllowableValues();
        if (!in_array($this->container['text_anchor_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_anchor_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['text_vertical_type'] === null) {
            $invalidProperties[] = "'text_vertical_type' can't be null";
        }
        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($this->container['text_vertical_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_vertical_type', must be one of '%s'",
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

        if ($this->container['row_span'] === null) {
            return false;
        }
        if ($this->container['col_span'] === null) {
            return false;
        }
        if ($this->container['margin_top'] === null) {
            return false;
        }
        if ($this->container['margin_right'] === null) {
            return false;
        }
        if ($this->container['margin_left'] === null) {
            return false;
        }
        if ($this->container['margin_bottom'] === null) {
            return false;
        }
        if ($this->container['text_anchor_type'] === null) {
            return false;
        }
        $allowedValues = $this->getTextAnchorTypeAllowableValues();
        if (!in_array($this->container['text_anchor_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['text_vertical_type'] === null) {
            return false;
        }
        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($this->container['text_vertical_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Cell text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets row_span
     *
     * @return int
     */
    public function getRowSpan()
    {
        return $this->container['row_span'];
    }

    /**
     * Sets row_span
     *
     * @param int $row_span The number of rows spanned by a merged cell.
     *
     * @return $this
     */
    public function setRowSpan($row_span)
    {
        $this->container['row_span'] = $row_span;

        return $this;
    }

    /**
     * Gets col_span
     *
     * @return int
     */
    public function getColSpan()
    {
        return $this->container['col_span'];
    }

    /**
     * Sets col_span
     *
     * @param int $col_span The number of columns spanned by a merged cell.
     *
     * @return $this
     */
    public function setColSpan($col_span)
    {
        $this->container['col_span'] = $col_span;

        return $this;
    }

    /**
     * Gets margin_top
     *
     * @return double
     */
    public function getMarginTop()
    {
        return $this->container['margin_top'];
    }

    /**
     * Sets margin_top
     *
     * @param double $margin_top The top margin of the cell.
     *
     * @return $this
     */
    public function setMarginTop($margin_top)
    {
        $this->container['margin_top'] = $margin_top;

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
     * @param double $margin_right The right margin of the cell.
     *
     * @return $this
     */
    public function setMarginRight($margin_right)
    {
        $this->container['margin_right'] = $margin_right;

        return $this;
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
     * @param double $margin_left The left margin of the cell.
     *
     * @return $this
     */
    public function setMarginLeft($margin_left)
    {
        $this->container['margin_left'] = $margin_left;

        return $this;
    }

    /**
     * Gets margin_bottom
     *
     * @return double
     */
    public function getMarginBottom()
    {
        return $this->container['margin_bottom'];
    }

    /**
     * Sets margin_bottom
     *
     * @param double $margin_bottom The bottom margin of the cell.
     *
     * @return $this
     */
    public function setMarginBottom($margin_bottom)
    {
        $this->container['margin_bottom'] = $margin_bottom;

        return $this;
    }

    /**
     * Gets text_anchor_type
     *
     * @return string
     */
    public function getTextAnchorType()
    {
        return $this->container['text_anchor_type'];
    }

    /**
     * Sets text_anchor_type
     *
     * @param string $text_anchor_type Text anchor type.
     *
     * @return $this
     */
    public function setTextAnchorType($text_anchor_type)
    {
        $allowedValues = $this->getTextAnchorTypeAllowableValues();
        if (!in_array($text_anchor_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_anchor_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['text_anchor_type'] = $text_anchor_type;

        return $this;
    }

    /**
     * Gets text_vertical_type
     *
     * @return string
     */
    public function getTextVerticalType()
    {
        return $this->container['text_vertical_type'];
    }

    /**
     * Sets text_vertical_type
     *
     * @param string $text_vertical_type The type of vertical text.
     *
     * @return $this
     */
    public function setTextVerticalType($text_vertical_type)
    {
        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($text_vertical_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_vertical_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['text_vertical_type'] = $text_vertical_type;

        return $this;
    }

    /**
     * Gets fill_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fill_format'];
    }

    /**
     * Sets fill_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fill_format Fill properties set of the cell.
     *
     * @return $this
     */
    public function setFillFormat($fill_format)
    {
        $this->container['fill_format'] = $fill_format;

        return $this;
    }

    /**
     * Gets border_top
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderTop()
    {
        return $this->container['border_top'];
    }

    /**
     * Sets border_top
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $border_top Line properties set for the top border of the cell.
     *
     * @return $this
     */
    public function setBorderTop($border_top)
    {
        $this->container['border_top'] = $border_top;

        return $this;
    }

    /**
     * Gets border_right
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderRight()
    {
        return $this->container['border_right'];
    }

    /**
     * Sets border_right
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $border_right Line properties set for the right border of the cell.
     *
     * @return $this
     */
    public function setBorderRight($border_right)
    {
        $this->container['border_right'] = $border_right;

        return $this;
    }

    /**
     * Gets border_left
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderLeft()
    {
        return $this->container['border_left'];
    }

    /**
     * Sets border_left
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $border_left Line properties set for the left border of the cell.
     *
     * @return $this
     */
    public function setBorderLeft($border_left)
    {
        $this->container['border_left'] = $border_left;

        return $this;
    }

    /**
     * Gets border_bottom
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderBottom()
    {
        return $this->container['border_bottom'];
    }

    /**
     * Sets border_bottom
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $border_bottom Line properties set for the bottom border of the cell.
     *
     * @return $this
     */
    public function setBorderBottom($border_bottom)
    {
        $this->container['border_bottom'] = $border_bottom;

        return $this;
    }

    /**
     * Gets border_diagonal_up
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderDiagonalUp()
    {
        return $this->container['border_diagonal_up'];
    }

    /**
     * Sets border_diagonal_up
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $border_diagonal_up Line properties set for the diagonal up border of the cell.
     *
     * @return $this
     */
    public function setBorderDiagonalUp($border_diagonal_up)
    {
        $this->container['border_diagonal_up'] = $border_diagonal_up;

        return $this;
    }

    /**
     * Gets border_diagonal_down
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderDiagonalDown()
    {
        return $this->container['border_diagonal_down'];
    }

    /**
     * Sets border_diagonal_down
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $border_diagonal_down Line properties set for the diagonal down border of the cell.
     *
     * @return $this
     */
    public function setBorderDiagonalDown($border_diagonal_down)
    {
        $this->container['border_diagonal_down'] = $border_diagonal_down;

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


