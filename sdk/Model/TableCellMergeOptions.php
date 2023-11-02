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
 * TableCellMergeOptions Class Doc Comment
 *
 * @category Class
 * @description Table cells merge options
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TableCellMergeOptions implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TableCellMergeOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstRowIndex' => 'int',
        'firstCellIndex' => 'int',
        'lastRowIndex' => 'int',
        'lastCellIndex' => 'int',
        'allowSplitting' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'firstRowIndex' => 'int32',
        'firstCellIndex' => 'int32',
        'lastRowIndex' => 'int32',
        'lastCellIndex' => 'int32',
        'allowSplitting' => null
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
        'firstRowIndex' => 'FirstRowIndex',
        'firstCellIndex' => 'FirstCellIndex',
        'lastRowIndex' => 'LastRowIndex',
        'lastCellIndex' => 'LastCellIndex',
        'allowSplitting' => 'AllowSplitting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstRowIndex' => 'setFirstRowIndex',
        'firstCellIndex' => 'setFirstCellIndex',
        'lastRowIndex' => 'setLastRowIndex',
        'lastCellIndex' => 'setLastCellIndex',
        'allowSplitting' => 'setAllowSplitting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstRowIndex' => 'getFirstRowIndex',
        'firstCellIndex' => 'getFirstCellIndex',
        'lastRowIndex' => 'getLastRowIndex',
        'lastCellIndex' => 'getLastCellIndex',
        'allowSplitting' => 'getAllowSplitting'
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
        $this->container['firstRowIndex'] = isset($data['firstRowIndex']) ? $data['firstRowIndex'] : null;
        $this->container['firstCellIndex'] = isset($data['firstCellIndex']) ? $data['firstCellIndex'] : null;
        $this->container['lastRowIndex'] = isset($data['lastRowIndex']) ? $data['lastRowIndex'] : null;
        $this->container['lastCellIndex'] = isset($data['lastCellIndex']) ? $data['lastCellIndex'] : null;
        $this->container['allowSplitting'] = isset($data['allowSplitting']) ? $data['allowSplitting'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstRowIndex'] === null) {
            $invalidProperties[] = "'firstRowIndex' can't be null";
        }
        if ($this->container['firstCellIndex'] === null) {
            $invalidProperties[] = "'firstCellIndex' can't be null";
        }
        if ($this->container['lastRowIndex'] === null) {
            $invalidProperties[] = "'lastRowIndex' can't be null";
        }
        if ($this->container['lastCellIndex'] === null) {
            $invalidProperties[] = "'lastCellIndex' can't be null";
        }
        if ($this->container['allowSplitting'] === null) {
            $invalidProperties[] = "'allowSplitting' can't be null";
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

        if ($this->container['firstRowIndex'] === null) {
            return false;
        }
        if ($this->container['firstCellIndex'] === null) {
            return false;
        }
        if ($this->container['lastRowIndex'] === null) {
            return false;
        }
        if ($this->container['lastCellIndex'] === null) {
            return false;
        }
        if ($this->container['allowSplitting'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets firstRowIndex
     *
     * @return int
     */
    public function getFirstRowIndex()
    {
        return $this->container['firstRowIndex'];
    }

    /**
     * Sets firstRowIndex
     *
     * @param int $firstRowIndex Row index of the first cell
     *
     * @return $this
     */
    public function setFirstRowIndex($firstRowIndex)
    {
        $this->container['firstRowIndex'] = $firstRowIndex;

        return $this;
    }

    /**
     * Gets firstCellIndex
     *
     * @return int
     */
    public function getFirstCellIndex()
    {
        return $this->container['firstCellIndex'];
    }

    /**
     * Sets firstCellIndex
     *
     * @param int $firstCellIndex First cell index in the row
     *
     * @return $this
     */
    public function setFirstCellIndex($firstCellIndex)
    {
        $this->container['firstCellIndex'] = $firstCellIndex;

        return $this;
    }

    /**
     * Gets lastRowIndex
     *
     * @return int
     */
    public function getLastRowIndex()
    {
        return $this->container['lastRowIndex'];
    }

    /**
     * Sets lastRowIndex
     *
     * @param int $lastRowIndex Row index of the last cell
     *
     * @return $this
     */
    public function setLastRowIndex($lastRowIndex)
    {
        $this->container['lastRowIndex'] = $lastRowIndex;

        return $this;
    }

    /**
     * Gets lastCellIndex
     *
     * @return int
     */
    public function getLastCellIndex()
    {
        return $this->container['lastCellIndex'];
    }

    /**
     * Sets lastCellIndex
     *
     * @param int $lastCellIndex Last cell index in the row
     *
     * @return $this
     */
    public function setLastCellIndex($lastCellIndex)
    {
        $this->container['lastCellIndex'] = $lastCellIndex;

        return $this;
    }

    /**
     * Gets allowSplitting
     *
     * @return bool
     */
    public function getAllowSplitting()
    {
        return $this->container['allowSplitting'];
    }

    /**
     * Sets allowSplitting
     *
     * @param bool $allowSplitting Allow splitting
     *
     * @return $this
     */
    public function setAllowSplitting($allowSplitting)
    {
        $this->container['allowSplitting'] = $allowSplitting;

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


