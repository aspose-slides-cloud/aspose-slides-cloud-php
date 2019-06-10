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
 * OneValueSeries Class Doc Comment
 *
 * @category Class
 * @description One value series.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OneValueSeries extends Series 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OneValueSeries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_point_type' => 'string',
        'data_points' => '\Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_point_type' => null,
        'data_points' => null
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
        'data_point_type' => 'DataPointType',
        'data_points' => 'DataPoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_point_type' => 'setDataPointType',
        'data_points' => 'setDataPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_point_type' => 'getDataPointType',
        'data_points' => 'getDataPoints'
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

    const DATA_POINT_TYPE_ONE_VALUE = 'OneValue';
    const DATA_POINT_TYPE_SCATTER = 'Scatter';
    const DATA_POINT_TYPE_BUBBLE = 'Bubble';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataPointTypeAllowableValues()
    {
        return [
            self::DATA_POINT_TYPE_ONE_VALUE,
            self::DATA_POINT_TYPE_SCATTER,
            self::DATA_POINT_TYPE_BUBBLE,
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

        $this->container['data_point_type'] = isset($data['data_point_type']) ? $data['data_point_type'] : null;
        $this->container['data_points'] = isset($data['data_points']) ? $data['data_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['data_point_type'] === null) {
            $invalidProperties[] = "'data_point_type' can't be null";
        }
        $allowedValues = $this->getDataPointTypeAllowableValues();
        if (!in_array($this->container['data_point_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'data_point_type', must be one of '%s'",
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

        if ($this->container['data_point_type'] === null) {
            return false;
        }
        $allowedValues = $this->getDataPointTypeAllowableValues();
        if (!in_array($this->container['data_point_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets data_point_type
     *
     * @return string
     */
    public function getDataPointType()
    {
        return $this->container['data_point_type'];
    }

    /**
     * Sets data_point_type
     *
     * @param string $data_point_type Data point type.
     *
     * @return $this
     */
    public function setDataPointType($data_point_type)
    {
        $allowedValues = $this->getDataPointTypeAllowableValues();
        if (!in_array($data_point_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'data_point_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_point_type'] = $data_point_type;

        return $this;
    }

    /**
     * Gets data_points
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint[]
     */
    public function getDataPoints()
    {
        return $this->container['data_points'];
    }

    /**
     * Sets data_points
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint[] $data_points Gets or sets the values.
     *
     * @return $this
     */
    public function setDataPoints($data_points)
    {
        $this->container['data_points'] = $data_points;

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


