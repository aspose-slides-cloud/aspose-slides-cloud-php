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
 * BubbleSeries Class Doc Comment
 *
 * @category Class
 * @description A bubble series.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BubbleSeries extends XYSeries 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BubbleSeries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataPoints' => '\Aspose\Slides\Cloud\Sdk\Model\BubbleChartDataPoint[]',
        'numberFormatOfBubbleSizes' => 'string',
        'dataSourceForBubbleSizeValues' => '\Aspose\Slides\Cloud\Sdk\Model\DataSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataPoints' => null,
        'numberFormatOfBubbleSizes' => null,
        'dataSourceForBubbleSizeValues' => null
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
        'dataPoints' => 'DataPoints',
        'numberFormatOfBubbleSizes' => 'NumberFormatOfBubbleSizes',
        'dataSourceForBubbleSizeValues' => 'DataSourceForBubbleSizeValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataPoints' => 'setDataPoints',
        'numberFormatOfBubbleSizes' => 'setNumberFormatOfBubbleSizes',
        'dataSourceForBubbleSizeValues' => 'setDataSourceForBubbleSizeValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataPoints' => 'getDataPoints',
        'numberFormatOfBubbleSizes' => 'getNumberFormatOfBubbleSizes',
        'dataSourceForBubbleSizeValues' => 'getDataSourceForBubbleSizeValues'
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

        $this->container['dataPoints'] = isset($data['dataPoints']) ? $data['dataPoints'] : null;
        $this->container['numberFormatOfBubbleSizes'] = isset($data['numberFormatOfBubbleSizes']) ? $data['numberFormatOfBubbleSizes'] : null;
        $this->container['dataSourceForBubbleSizeValues'] = isset($data['dataSourceForBubbleSizeValues']) ? $data['dataSourceForBubbleSizeValues'] : null;
        $this->container['dataPointType'] = 'Bubble';
        
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
     * Gets dataPoints
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\BubbleChartDataPoint[]
     */
    public function getDataPoints()
    {
        return $this->container['dataPoints'];
    }

    /**
     * Sets dataPoints
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\BubbleChartDataPoint[] $dataPoints Gets or sets the values.
     *
     * @return $this
     */
    public function setDataPoints($dataPoints)
    {
        $this->container['dataPoints'] = $dataPoints;

        return $this;
    }

    /**
     * Gets numberFormatOfBubbleSizes
     *
     * @return string
     */
    public function getNumberFormatOfBubbleSizes()
    {
        return $this->container['numberFormatOfBubbleSizes'];
    }

    /**
     * Sets numberFormatOfBubbleSizes
     *
     * @param string $numberFormatOfBubbleSizes The number format for the series bubble sizes.
     *
     * @return $this
     */
    public function setNumberFormatOfBubbleSizes($numberFormatOfBubbleSizes)
    {
        $this->container['numberFormatOfBubbleSizes'] = $numberFormatOfBubbleSizes;

        return $this;
    }

    /**
     * Gets dataSourceForBubbleSizeValues
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\DataSource
     */
    public function getDataSourceForBubbleSizeValues()
    {
        return $this->container['dataSourceForBubbleSizeValues'];
    }

    /**
     * Sets dataSourceForBubbleSizeValues
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\DataSource $dataSourceForBubbleSizeValues Data source type for Bubble size values.
     *
     * @return $this
     */
    public function setDataSourceForBubbleSizeValues($dataSourceForBubbleSizeValues)
    {
        $this->container['dataSourceForBubbleSizeValues'] = $dataSourceForBubbleSizeValues;

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


