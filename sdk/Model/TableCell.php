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
        'rowSpan' => 'int',
        'colSpan' => 'int',
        'marginTop' => 'double',
        'marginRight' => 'double',
        'marginLeft' => 'double',
        'marginBottom' => 'double',
        'textAnchorType' => 'string',
        'textVerticalType' => 'string',
        'fillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'borderTop' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'borderRight' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'borderLeft' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'borderBottom' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'borderDiagonalUp' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'borderDiagonalDown' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'rowSpan' => 'int32',
        'colSpan' => 'int32',
        'marginTop' => 'double',
        'marginRight' => 'double',
        'marginLeft' => 'double',
        'marginBottom' => 'double',
        'textAnchorType' => null,
        'textVerticalType' => null,
        'fillFormat' => null,
        'borderTop' => null,
        'borderRight' => null,
        'borderLeft' => null,
        'borderBottom' => null,
        'borderDiagonalUp' => null,
        'borderDiagonalDown' => null
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
        'rowSpan' => 'RowSpan',
        'colSpan' => 'ColSpan',
        'marginTop' => 'MarginTop',
        'marginRight' => 'MarginRight',
        'marginLeft' => 'MarginLeft',
        'marginBottom' => 'MarginBottom',
        'textAnchorType' => 'TextAnchorType',
        'textVerticalType' => 'TextVerticalType',
        'fillFormat' => 'FillFormat',
        'borderTop' => 'BorderTop',
        'borderRight' => 'BorderRight',
        'borderLeft' => 'BorderLeft',
        'borderBottom' => 'BorderBottom',
        'borderDiagonalUp' => 'BorderDiagonalUp',
        'borderDiagonalDown' => 'BorderDiagonalDown'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'rowSpan' => 'setRowSpan',
        'colSpan' => 'setColSpan',
        'marginTop' => 'setMarginTop',
        'marginRight' => 'setMarginRight',
        'marginLeft' => 'setMarginLeft',
        'marginBottom' => 'setMarginBottom',
        'textAnchorType' => 'setTextAnchorType',
        'textVerticalType' => 'setTextVerticalType',
        'fillFormat' => 'setFillFormat',
        'borderTop' => 'setBorderTop',
        'borderRight' => 'setBorderRight',
        'borderLeft' => 'setBorderLeft',
        'borderBottom' => 'setBorderBottom',
        'borderDiagonalUp' => 'setBorderDiagonalUp',
        'borderDiagonalDown' => 'setBorderDiagonalDown'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'rowSpan' => 'getRowSpan',
        'colSpan' => 'getColSpan',
        'marginTop' => 'getMarginTop',
        'marginRight' => 'getMarginRight',
        'marginLeft' => 'getMarginLeft',
        'marginBottom' => 'getMarginBottom',
        'textAnchorType' => 'getTextAnchorType',
        'textVerticalType' => 'getTextVerticalType',
        'fillFormat' => 'getFillFormat',
        'borderTop' => 'getBorderTop',
        'borderRight' => 'getBorderRight',
        'borderLeft' => 'getBorderLeft',
        'borderBottom' => 'getBorderBottom',
        'borderDiagonalUp' => 'getBorderDiagonalUp',
        'borderDiagonalDown' => 'getBorderDiagonalDown'
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
        $this->container['rowSpan'] = isset($data['rowSpan']) ? $data['rowSpan'] : null;
        $this->container['colSpan'] = isset($data['colSpan']) ? $data['colSpan'] : null;
        $this->container['marginTop'] = isset($data['marginTop']) ? $data['marginTop'] : null;
        $this->container['marginRight'] = isset($data['marginRight']) ? $data['marginRight'] : null;
        $this->container['marginLeft'] = isset($data['marginLeft']) ? $data['marginLeft'] : null;
        $this->container['marginBottom'] = isset($data['marginBottom']) ? $data['marginBottom'] : null;
        $this->container['textAnchorType'] = isset($data['textAnchorType']) ? $data['textAnchorType'] : null;
        $this->container['textVerticalType'] = isset($data['textVerticalType']) ? $data['textVerticalType'] : null;
        $this->container['fillFormat'] = isset($data['fillFormat']) ? $data['fillFormat'] : null;
        $this->container['borderTop'] = isset($data['borderTop']) ? $data['borderTop'] : null;
        $this->container['borderRight'] = isset($data['borderRight']) ? $data['borderRight'] : null;
        $this->container['borderLeft'] = isset($data['borderLeft']) ? $data['borderLeft'] : null;
        $this->container['borderBottom'] = isset($data['borderBottom']) ? $data['borderBottom'] : null;
        $this->container['borderDiagonalUp'] = isset($data['borderDiagonalUp']) ? $data['borderDiagonalUp'] : null;
        $this->container['borderDiagonalDown'] = isset($data['borderDiagonalDown']) ? $data['borderDiagonalDown'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTextAnchorTypeAllowableValues();
        if (!in_array($this->container['textAnchorType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textAnchorType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($this->container['textVerticalType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textVerticalType', must be one of '%s'",
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

        $allowedValues = $this->getTextAnchorTypeAllowableValues();
        if (!in_array($this->container['textAnchorType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($this->container['textVerticalType'], $allowedValues)) {
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
     * Gets rowSpan
     *
     * @return int
     */
    public function getRowSpan()
    {
        return $this->container['rowSpan'];
    }

    /**
     * Sets rowSpan
     *
     * @param int $rowSpan The number of rows spanned by a merged cell.
     *
     * @return $this
     */
    public function setRowSpan($rowSpan)
    {
        $this->container['rowSpan'] = $rowSpan;

        return $this;
    }

    /**
     * Gets colSpan
     *
     * @return int
     */
    public function getColSpan()
    {
        return $this->container['colSpan'];
    }

    /**
     * Sets colSpan
     *
     * @param int $colSpan The number of columns spanned by a merged cell.
     *
     * @return $this
     */
    public function setColSpan($colSpan)
    {
        $this->container['colSpan'] = $colSpan;

        return $this;
    }

    /**
     * Gets marginTop
     *
     * @return double
     */
    public function getMarginTop()
    {
        return $this->container['marginTop'];
    }

    /**
     * Sets marginTop
     *
     * @param double $marginTop The top margin of the cell.
     *
     * @return $this
     */
    public function setMarginTop($marginTop)
    {
        $this->container['marginTop'] = $marginTop;

        return $this;
    }

    /**
     * Gets marginRight
     *
     * @return double
     */
    public function getMarginRight()
    {
        return $this->container['marginRight'];
    }

    /**
     * Sets marginRight
     *
     * @param double $marginRight The right margin of the cell.
     *
     * @return $this
     */
    public function setMarginRight($marginRight)
    {
        $this->container['marginRight'] = $marginRight;

        return $this;
    }

    /**
     * Gets marginLeft
     *
     * @return double
     */
    public function getMarginLeft()
    {
        return $this->container['marginLeft'];
    }

    /**
     * Sets marginLeft
     *
     * @param double $marginLeft The left margin of the cell.
     *
     * @return $this
     */
    public function setMarginLeft($marginLeft)
    {
        $this->container['marginLeft'] = $marginLeft;

        return $this;
    }

    /**
     * Gets marginBottom
     *
     * @return double
     */
    public function getMarginBottom()
    {
        return $this->container['marginBottom'];
    }

    /**
     * Sets marginBottom
     *
     * @param double $marginBottom The bottom margin of the cell.
     *
     * @return $this
     */
    public function setMarginBottom($marginBottom)
    {
        $this->container['marginBottom'] = $marginBottom;

        return $this;
    }

    /**
     * Gets textAnchorType
     *
     * @return string
     */
    public function getTextAnchorType()
    {
        return $this->container['textAnchorType'];
    }

    /**
     * Sets textAnchorType
     *
     * @param string $textAnchorType Text anchor type.
     *
     * @return $this
     */
    public function setTextAnchorType($textAnchorType)
    {
        $allowedValues = $this->getTextAnchorTypeAllowableValues();


        if (is_numeric($textAnchorType)) {
            if ($textAnchorType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textAnchorType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $textAnchorType = $allowedValues[$textAnchorType];
            }
        } else {
            if (!is_null($textAnchorType) && !in_array($textAnchorType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textAnchorType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['textAnchorType'] = $textAnchorType;

        return $this;
    }

    /**
     * Gets textVerticalType
     *
     * @return string
     */
    public function getTextVerticalType()
    {
        return $this->container['textVerticalType'];
    }

    /**
     * Sets textVerticalType
     *
     * @param string $textVerticalType The type of vertical text.
     *
     * @return $this
     */
    public function setTextVerticalType($textVerticalType)
    {
        $allowedValues = $this->getTextVerticalTypeAllowableValues();


        if (is_numeric($textVerticalType)) {
            if ($textVerticalType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textVerticalType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $textVerticalType = $allowedValues[$textVerticalType];
            }
        } else {
            if (!is_null($textVerticalType) && !in_array($textVerticalType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textVerticalType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['textVerticalType'] = $textVerticalType;

        return $this;
    }

    /**
     * Gets fillFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fillFormat'];
    }

    /**
     * Sets fillFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fillFormat Fill properties set of the cell.
     *
     * @return $this
     */
    public function setFillFormat($fillFormat)
    {
        $this->container['fillFormat'] = $fillFormat;

        return $this;
    }

    /**
     * Gets borderTop
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderTop()
    {
        return $this->container['borderTop'];
    }

    /**
     * Sets borderTop
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $borderTop Line properties set for the top border of the cell.
     *
     * @return $this
     */
    public function setBorderTop($borderTop)
    {
        $this->container['borderTop'] = $borderTop;

        return $this;
    }

    /**
     * Gets borderRight
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderRight()
    {
        return $this->container['borderRight'];
    }

    /**
     * Sets borderRight
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $borderRight Line properties set for the right border of the cell.
     *
     * @return $this
     */
    public function setBorderRight($borderRight)
    {
        $this->container['borderRight'] = $borderRight;

        return $this;
    }

    /**
     * Gets borderLeft
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderLeft()
    {
        return $this->container['borderLeft'];
    }

    /**
     * Sets borderLeft
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $borderLeft Line properties set for the left border of the cell.
     *
     * @return $this
     */
    public function setBorderLeft($borderLeft)
    {
        $this->container['borderLeft'] = $borderLeft;

        return $this;
    }

    /**
     * Gets borderBottom
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderBottom()
    {
        return $this->container['borderBottom'];
    }

    /**
     * Sets borderBottom
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $borderBottom Line properties set for the bottom border of the cell.
     *
     * @return $this
     */
    public function setBorderBottom($borderBottom)
    {
        $this->container['borderBottom'] = $borderBottom;

        return $this;
    }

    /**
     * Gets borderDiagonalUp
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderDiagonalUp()
    {
        return $this->container['borderDiagonalUp'];
    }

    /**
     * Sets borderDiagonalUp
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $borderDiagonalUp Line properties set for the diagonal up border of the cell.
     *
     * @return $this
     */
    public function setBorderDiagonalUp($borderDiagonalUp)
    {
        $this->container['borderDiagonalUp'] = $borderDiagonalUp;

        return $this;
    }

    /**
     * Gets borderDiagonalDown
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getBorderDiagonalDown()
    {
        return $this->container['borderDiagonalDown'];
    }

    /**
     * Sets borderDiagonalDown
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $borderDiagonalDown Line properties set for the diagonal down border of the cell.
     *
     * @return $this
     */
    public function setBorderDiagonalDown($borderDiagonalDown)
    {
        $this->container['borderDiagonalDown'] = $borderDiagonalDown;

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


