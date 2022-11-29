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
 * XYSeries Class Doc Comment
 *
 * @category Class
 * @description Common properties for Bubble and Scatter series.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XYSeries extends Series 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XYSeries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numberFormatOfYValues' => 'string',
        'numberFormatOfXValues' => 'string',
        'dataSourceForXValues' => '\Aspose\Slides\Cloud\Sdk\Model\DataSource',
        'dataSourceForYValues' => '\Aspose\Slides\Cloud\Sdk\Model\DataSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numberFormatOfYValues' => null,
        'numberFormatOfXValues' => null,
        'dataSourceForXValues' => null,
        'dataSourceForYValues' => null
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
        'numberFormatOfYValues' => 'NumberFormatOfYValues',
        'numberFormatOfXValues' => 'NumberFormatOfXValues',
        'dataSourceForXValues' => 'DataSourceForXValues',
        'dataSourceForYValues' => 'DataSourceForYValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numberFormatOfYValues' => 'setNumberFormatOfYValues',
        'numberFormatOfXValues' => 'setNumberFormatOfXValues',
        'dataSourceForXValues' => 'setDataSourceForXValues',
        'dataSourceForYValues' => 'setDataSourceForYValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numberFormatOfYValues' => 'getNumberFormatOfYValues',
        'numberFormatOfXValues' => 'getNumberFormatOfXValues',
        'dataSourceForXValues' => 'getDataSourceForXValues',
        'dataSourceForYValues' => 'getDataSourceForYValues'
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

        $this->container['numberFormatOfYValues'] = isset($data['numberFormatOfYValues']) ? $data['numberFormatOfYValues'] : null;
        $this->container['numberFormatOfXValues'] = isset($data['numberFormatOfXValues']) ? $data['numberFormatOfXValues'] : null;
        $this->container['dataSourceForXValues'] = isset($data['dataSourceForXValues']) ? $data['dataSourceForXValues'] : null;
        $this->container['dataSourceForYValues'] = isset($data['dataSourceForYValues']) ? $data['dataSourceForYValues'] : null;
        
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
     * Gets numberFormatOfYValues
     *
     * @return string
     */
    public function getNumberFormatOfYValues()
    {
        return $this->container['numberFormatOfYValues'];
    }

    /**
     * Sets numberFormatOfYValues
     *
     * @param string $numberFormatOfYValues The number format for the series y values.
     *
     * @return $this
     */
    public function setNumberFormatOfYValues($numberFormatOfYValues)
    {
        $this->container['numberFormatOfYValues'] = $numberFormatOfYValues;

        return $this;
    }

    /**
     * Gets numberFormatOfXValues
     *
     * @return string
     */
    public function getNumberFormatOfXValues()
    {
        return $this->container['numberFormatOfXValues'];
    }

    /**
     * Sets numberFormatOfXValues
     *
     * @param string $numberFormatOfXValues The number format for the series x values.
     *
     * @return $this
     */
    public function setNumberFormatOfXValues($numberFormatOfXValues)
    {
        $this->container['numberFormatOfXValues'] = $numberFormatOfXValues;

        return $this;
    }

    /**
     * Gets dataSourceForXValues
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\DataSource
     */
    public function getDataSourceForXValues()
    {
        return $this->container['dataSourceForXValues'];
    }

    /**
     * Sets dataSourceForXValues
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\DataSource $dataSourceForXValues Data source type for X Values.
     *
     * @return $this
     */
    public function setDataSourceForXValues($dataSourceForXValues)
    {
        $this->container['dataSourceForXValues'] = $dataSourceForXValues;

        return $this;
    }

    /**
     * Gets dataSourceForYValues
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\DataSource
     */
    public function getDataSourceForYValues()
    {
        return $this->container['dataSourceForYValues'];
    }

    /**
     * Sets dataSourceForYValues
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\DataSource $dataSourceForYValues Data source type for Y Values.
     *
     * @return $this
     */
    public function setDataSourceForYValues($dataSourceForYValues)
    {
        $this->container['dataSourceForYValues'] = $dataSourceForYValues;

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


