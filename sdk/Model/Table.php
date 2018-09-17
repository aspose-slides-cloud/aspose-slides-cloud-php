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
 * Table Class Doc Comment
 *
 * @category Class
 * @description Represents Table shape resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Table extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Table';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'style' => '\Aspose\Slides\Cloud\Sdk\Model\TableStylePreset',
        'rows' => '\Aspose\Slides\Cloud\Sdk\Model\TableRow[]',
        'columns' => '\Aspose\Slides\Cloud\Sdk\Model\TableColumn[]',
        'first_col' => 'bool',
        'first_row' => 'bool',
        'horizontal_banding' => 'bool',
        'last_col' => 'bool',
        'last_row' => 'bool',
        'right_to_left' => 'bool',
        'vertical_banding' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'style' => null,
        'rows' => null,
        'columns' => null,
        'first_col' => null,
        'first_row' => null,
        'horizontal_banding' => null,
        'last_col' => null,
        'last_row' => null,
        'right_to_left' => null,
        'vertical_banding' => null
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
        'style' => 'Style',
        'rows' => 'Rows',
        'columns' => 'Columns',
        'first_col' => 'FirstCol',
        'first_row' => 'FirstRow',
        'horizontal_banding' => 'HorizontalBanding',
        'last_col' => 'LastCol',
        'last_row' => 'LastRow',
        'right_to_left' => 'RightToLeft',
        'vertical_banding' => 'VerticalBanding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'style' => 'setStyle',
        'rows' => 'setRows',
        'columns' => 'setColumns',
        'first_col' => 'setFirstCol',
        'first_row' => 'setFirstRow',
        'horizontal_banding' => 'setHorizontalBanding',
        'last_col' => 'setLastCol',
        'last_row' => 'setLastRow',
        'right_to_left' => 'setRightToLeft',
        'vertical_banding' => 'setVerticalBanding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'style' => 'getStyle',
        'rows' => 'getRows',
        'columns' => 'getColumns',
        'first_col' => 'getFirstCol',
        'first_row' => 'getFirstRow',
        'horizontal_banding' => 'getHorizontalBanding',
        'last_col' => 'getLastCol',
        'last_row' => 'getLastRow',
        'right_to_left' => 'getRightToLeft',
        'vertical_banding' => 'getVerticalBanding'
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

        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['first_col'] = isset($data['first_col']) ? $data['first_col'] : null;
        $this->container['first_row'] = isset($data['first_row']) ? $data['first_row'] : null;
        $this->container['horizontal_banding'] = isset($data['horizontal_banding']) ? $data['horizontal_banding'] : null;
        $this->container['last_col'] = isset($data['last_col']) ? $data['last_col'] : null;
        $this->container['last_row'] = isset($data['last_row']) ? $data['last_row'] : null;
        $this->container['right_to_left'] = isset($data['right_to_left']) ? $data['right_to_left'] : null;
        $this->container['vertical_banding'] = isset($data['vertical_banding']) ? $data['vertical_banding'] : null;
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
     * Gets style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TableStylePreset
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TableStylePreset $style Builtin table style.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TableRow[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TableRow[] $rows Rows.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\TableColumn[]
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\TableColumn[] $columns Columns.
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
    }

    /**
     * Gets first_col
     *
     * @return bool
     */
    public function getFirstCol()
    {
        return $this->container['first_col'];
    }

    /**
     * Sets first_col
     *
     * @param bool $first_col Determines whether the first column of a table has to be drawn with a special formatting.
     *
     * @return $this
     */
    public function setFirstCol($first_col)
    {
        $this->container['first_col'] = $first_col;

        return $this;
    }

    /**
     * Gets first_row
     *
     * @return bool
     */
    public function getFirstRow()
    {
        return $this->container['first_row'];
    }

    /**
     * Sets first_row
     *
     * @param bool $first_row Determines whether the first row of a table has to be drawn with a special formatting.
     *
     * @return $this
     */
    public function setFirstRow($first_row)
    {
        $this->container['first_row'] = $first_row;

        return $this;
    }

    /**
     * Gets horizontal_banding
     *
     * @return bool
     */
    public function getHorizontalBanding()
    {
        return $this->container['horizontal_banding'];
    }

    /**
     * Sets horizontal_banding
     *
     * @param bool $horizontal_banding Determines whether the even rows has to be drawn with a different formatting.
     *
     * @return $this
     */
    public function setHorizontalBanding($horizontal_banding)
    {
        $this->container['horizontal_banding'] = $horizontal_banding;

        return $this;
    }

    /**
     * Gets last_col
     *
     * @return bool
     */
    public function getLastCol()
    {
        return $this->container['last_col'];
    }

    /**
     * Sets last_col
     *
     * @param bool $last_col Determines whether the last column of a table has to be drawn with a special formatting.
     *
     * @return $this
     */
    public function setLastCol($last_col)
    {
        $this->container['last_col'] = $last_col;

        return $this;
    }

    /**
     * Gets last_row
     *
     * @return bool
     */
    public function getLastRow()
    {
        return $this->container['last_row'];
    }

    /**
     * Sets last_row
     *
     * @param bool $last_row Determines whether the last row of a table has to be drawn with a special formatting.
     *
     * @return $this
     */
    public function setLastRow($last_row)
    {
        $this->container['last_row'] = $last_row;

        return $this;
    }

    /**
     * Gets right_to_left
     *
     * @return bool
     */
    public function getRightToLeft()
    {
        return $this->container['right_to_left'];
    }

    /**
     * Sets right_to_left
     *
     * @param bool $right_to_left Determines whether the table has right to left reading order.
     *
     * @return $this
     */
    public function setRightToLeft($right_to_left)
    {
        $this->container['right_to_left'] = $right_to_left;

        return $this;
    }

    /**
     * Gets vertical_banding
     *
     * @return bool
     */
    public function getVerticalBanding()
    {
        return $this->container['vertical_banding'];
    }

    /**
     * Sets vertical_banding
     *
     * @param bool $vertical_banding Determines whether the even columns has to be drawn with a different formatting.
     *
     * @return $this
     */
    public function setVerticalBanding($vertical_banding)
    {
        $this->container['vertical_banding'] = $vertical_banding;

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


