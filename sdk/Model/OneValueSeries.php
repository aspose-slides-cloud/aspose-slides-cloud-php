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
        'dataPoints' => '\Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint[]',
        'numberFormatOfValues' => 'string',
        'dataSourceForValues' => '\Aspose\Slides\Cloud\Sdk\Model\DataSource',
        'showConnectorLines' => 'bool',
        'quartileMethod' => 'string',
        'showInnerPoints' => 'bool',
        'showMeanLine' => 'bool',
        'showMeanMarkers' => 'bool',
        'showOutlierPoints' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataPoints' => null,
        'numberFormatOfValues' => null,
        'dataSourceForValues' => null,
        'showConnectorLines' => null,
        'quartileMethod' => null,
        'showInnerPoints' => null,
        'showMeanLine' => null,
        'showMeanMarkers' => null,
        'showOutlierPoints' => null
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
        'numberFormatOfValues' => 'NumberFormatOfValues',
        'dataSourceForValues' => 'DataSourceForValues',
        'showConnectorLines' => 'ShowConnectorLines',
        'quartileMethod' => 'QuartileMethod',
        'showInnerPoints' => 'ShowInnerPoints',
        'showMeanLine' => 'ShowMeanLine',
        'showMeanMarkers' => 'ShowMeanMarkers',
        'showOutlierPoints' => 'ShowOutlierPoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataPoints' => 'setDataPoints',
        'numberFormatOfValues' => 'setNumberFormatOfValues',
        'dataSourceForValues' => 'setDataSourceForValues',
        'showConnectorLines' => 'setShowConnectorLines',
        'quartileMethod' => 'setQuartileMethod',
        'showInnerPoints' => 'setShowInnerPoints',
        'showMeanLine' => 'setShowMeanLine',
        'showMeanMarkers' => 'setShowMeanMarkers',
        'showOutlierPoints' => 'setShowOutlierPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataPoints' => 'getDataPoints',
        'numberFormatOfValues' => 'getNumberFormatOfValues',
        'dataSourceForValues' => 'getDataSourceForValues',
        'showConnectorLines' => 'getShowConnectorLines',
        'quartileMethod' => 'getQuartileMethod',
        'showInnerPoints' => 'getShowInnerPoints',
        'showMeanLine' => 'getShowMeanLine',
        'showMeanMarkers' => 'getShowMeanMarkers',
        'showOutlierPoints' => 'getShowOutlierPoints'
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

    const QUARTILE_METHOD_EXCLUSIVE = 'Exclusive';
    const QUARTILE_METHOD_INCLUSIVE = 'Inclusive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQuartileMethodAllowableValues()
    {
        return [
            self::QUARTILE_METHOD_EXCLUSIVE,
            self::QUARTILE_METHOD_INCLUSIVE,
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

        $this->container['dataPoints'] = isset($data['dataPoints']) ? $data['dataPoints'] : null;
        $this->container['numberFormatOfValues'] = isset($data['numberFormatOfValues']) ? $data['numberFormatOfValues'] : null;
        $this->container['dataSourceForValues'] = isset($data['dataSourceForValues']) ? $data['dataSourceForValues'] : null;
        $this->container['showConnectorLines'] = isset($data['showConnectorLines']) ? $data['showConnectorLines'] : null;
        $this->container['quartileMethod'] = isset($data['quartileMethod']) ? $data['quartileMethod'] : null;
        $this->container['showInnerPoints'] = isset($data['showInnerPoints']) ? $data['showInnerPoints'] : null;
        $this->container['showMeanLine'] = isset($data['showMeanLine']) ? $data['showMeanLine'] : null;
        $this->container['showMeanMarkers'] = isset($data['showMeanMarkers']) ? $data['showMeanMarkers'] : null;
        $this->container['showOutlierPoints'] = isset($data['showOutlierPoints']) ? $data['showOutlierPoints'] : null;
        $this->container['dataPointType'] = 'OneValue';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getQuartileMethodAllowableValues();
        if (!in_array($this->container['quartileMethod'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'quartileMethod', must be one of '%s'",
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

        $allowedValues = $this->getQuartileMethodAllowableValues();
        if (!in_array($this->container['quartileMethod'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets dataPoints
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint[]
     */
    public function getDataPoints()
    {
        return $this->container['dataPoints'];
    }

    /**
     * Sets dataPoints
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\OneValueChartDataPoint[] $dataPoints Gets or sets the values.
     *
     * @return $this
     */
    public function setDataPoints($dataPoints)
    {
        $this->container['dataPoints'] = $dataPoints;

        return $this;
    }

    /**
     * Gets numberFormatOfValues
     *
     * @return string
     */
    public function getNumberFormatOfValues()
    {
        return $this->container['numberFormatOfValues'];
    }

    /**
     * Sets numberFormatOfValues
     *
     * @param string $numberFormatOfValues The number format for the series values.
     *
     * @return $this
     */
    public function setNumberFormatOfValues($numberFormatOfValues)
    {
        $this->container['numberFormatOfValues'] = $numberFormatOfValues;

        return $this;
    }

    /**
     * Gets dataSourceForValues
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\DataSource
     */
    public function getDataSourceForValues()
    {
        return $this->container['dataSourceForValues'];
    }

    /**
     * Sets dataSourceForValues
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\DataSource $dataSourceForValues Data source type for values.
     *
     * @return $this
     */
    public function setDataSourceForValues($dataSourceForValues)
    {
        $this->container['dataSourceForValues'] = $dataSourceForValues;

        return $this;
    }

    /**
     * Gets showConnectorLines
     *
     * @return bool
     */
    public function getShowConnectorLines()
    {
        return $this->container['showConnectorLines'];
    }

    /**
     * Sets showConnectorLines
     *
     * @param bool $showConnectorLines True if inner points are shown. Applied to Waterfall series only.
     *
     * @return $this
     */
    public function setShowConnectorLines($showConnectorLines)
    {
        $this->container['showConnectorLines'] = $showConnectorLines;

        return $this;
    }

    /**
     * Gets quartileMethod
     *
     * @return string
     */
    public function getQuartileMethod()
    {
        return $this->container['quartileMethod'];
    }

    /**
     * Sets quartileMethod
     *
     * @param string $quartileMethod Quartile method. Applied to BoxAndWhisker series only.
     *
     * @return $this
     */
    public function setQuartileMethod($quartileMethod)
    {
        $allowedValues = $this->getQuartileMethodAllowableValues();


        if (is_numeric($quartileMethod)) {
            if ($quartileMethod >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'quartileMethod', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $quartileMethod = $allowedValues[$quartileMethod];
            }
        } else {
            if (!is_null($quartileMethod) && !in_array($quartileMethod, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'quartileMethod', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['quartileMethod'] = $quartileMethod;

        return $this;
    }

    /**
     * Gets showInnerPoints
     *
     * @return bool
     */
    public function getShowInnerPoints()
    {
        return $this->container['showInnerPoints'];
    }

    /**
     * Sets showInnerPoints
     *
     * @param bool $showInnerPoints True if inner points are shown. Applied to BoxAndWhisker series only.
     *
     * @return $this
     */
    public function setShowInnerPoints($showInnerPoints)
    {
        $this->container['showInnerPoints'] = $showInnerPoints;

        return $this;
    }

    /**
     * Gets showMeanLine
     *
     * @return bool
     */
    public function getShowMeanLine()
    {
        return $this->container['showMeanLine'];
    }

    /**
     * Sets showMeanLine
     *
     * @param bool $showMeanLine True if mean line is shown. Applied to BoxAndWhisker series only.
     *
     * @return $this
     */
    public function setShowMeanLine($showMeanLine)
    {
        $this->container['showMeanLine'] = $showMeanLine;

        return $this;
    }

    /**
     * Gets showMeanMarkers
     *
     * @return bool
     */
    public function getShowMeanMarkers()
    {
        return $this->container['showMeanMarkers'];
    }

    /**
     * Sets showMeanMarkers
     *
     * @param bool $showMeanMarkers True if mean markers are shown. Applied to BoxAndWhisker series only.
     *
     * @return $this
     */
    public function setShowMeanMarkers($showMeanMarkers)
    {
        $this->container['showMeanMarkers'] = $showMeanMarkers;

        return $this;
    }

    /**
     * Gets showOutlierPoints
     *
     * @return bool
     */
    public function getShowOutlierPoints()
    {
        return $this->container['showOutlierPoints'];
    }

    /**
     * Sets showOutlierPoints
     *
     * @param bool $showOutlierPoints True if outlier points are shown. Applied to BoxAndWhisker series only.
     *
     * @return $this
     */
    public function setShowOutlierPoints($showOutlierPoints)
    {
        $this->container['showOutlierPoints'] = $showOutlierPoints;

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


