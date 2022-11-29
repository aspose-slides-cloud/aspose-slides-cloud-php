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
 * Workbook Class Doc Comment
 *
 * @category Class
 * @description Represents Excel spreadsheet data source.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Workbook extends DataSource 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Workbook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'worksheetIndex' => 'int',
        'columnIndex' => 'int',
        'rowIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'worksheetIndex' => 'int32',
        'columnIndex' => 'int32',
        'rowIndex' => 'int32'
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
        'worksheetIndex' => 'WorksheetIndex',
        'columnIndex' => 'ColumnIndex',
        'rowIndex' => 'RowIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'worksheetIndex' => 'setWorksheetIndex',
        'columnIndex' => 'setColumnIndex',
        'rowIndex' => 'setRowIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'worksheetIndex' => 'getWorksheetIndex',
        'columnIndex' => 'getColumnIndex',
        'rowIndex' => 'getRowIndex'
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

        $this->container['worksheetIndex'] = isset($data['worksheetIndex']) ? $data['worksheetIndex'] : null;
        $this->container['columnIndex'] = isset($data['columnIndex']) ? $data['columnIndex'] : null;
        $this->container['rowIndex'] = isset($data['rowIndex']) ? $data['rowIndex'] : null;
        $this->container['type'] = 'Workbook';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['worksheetIndex'] === null) {
            $invalidProperties[] = "'worksheetIndex' can't be null";
        }
        if ($this->container['columnIndex'] === null) {
            $invalidProperties[] = "'columnIndex' can't be null";
        }
        if ($this->container['rowIndex'] === null) {
            $invalidProperties[] = "'rowIndex' can't be null";
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

        if ($this->container['worksheetIndex'] === null) {
            return false;
        }
        if ($this->container['columnIndex'] === null) {
            return false;
        }
        if ($this->container['rowIndex'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets worksheetIndex
     *
     * @return int
     */
    public function getWorksheetIndex()
    {
        return $this->container['worksheetIndex'];
    }

    /**
     * Sets worksheetIndex
     *
     * @param int $worksheetIndex Worksheet index.
     *
     * @return $this
     */
    public function setWorksheetIndex($worksheetIndex)
    {
        $this->container['worksheetIndex'] = $worksheetIndex;

        return $this;
    }

    /**
     * Gets columnIndex
     *
     * @return int
     */
    public function getColumnIndex()
    {
        return $this->container['columnIndex'];
    }

    /**
     * Sets columnIndex
     *
     * @param int $columnIndex Column index of the first value.
     *
     * @return $this
     */
    public function setColumnIndex($columnIndex)
    {
        $this->container['columnIndex'] = $columnIndex;

        return $this;
    }

    /**
     * Gets rowIndex
     *
     * @return int
     */
    public function getRowIndex()
    {
        return $this->container['rowIndex'];
    }

    /**
     * Sets rowIndex
     *
     * @param int $rowIndex Row index of the first value.
     *
     * @return $this
     */
    public function setRowIndex($rowIndex)
    {
        $this->container['rowIndex'] = $rowIndex;

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


