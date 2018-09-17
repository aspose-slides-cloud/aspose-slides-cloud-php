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
 * Chart Class Doc Comment
 *
 * @category Class
 * @description Represents chart resource
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Chart extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_type' => '\Aspose\Slides\Cloud\Sdk\Model\ChartType',
        'series' => '\Aspose\Slides\Cloud\Sdk\Model\Series[]',
        'categories' => 'string[]',
        'title' => '\Aspose\Slides\Cloud\Sdk\Model\ChartTitle',
        'back_wall' => '\Aspose\Slides\Cloud\Sdk\Model\ChartWall',
        'side_wall' => '\Aspose\Slides\Cloud\Sdk\Model\ChartWall',
        'floor' => '\Aspose\Slides\Cloud\Sdk\Model\ChartWall',
        'legend' => '\Aspose\Slides\Cloud\Sdk\Model\Legend',
        'axes' => '\Aspose\Slides\Cloud\Sdk\Model\Axes',
        'plot_area' => '\Aspose\Slides\Cloud\Sdk\Model\PlotArea'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart_type' => null,
        'series' => null,
        'categories' => null,
        'title' => null,
        'back_wall' => null,
        'side_wall' => null,
        'floor' => null,
        'legend' => null,
        'axes' => null,
        'plot_area' => null
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
        'chart_type' => 'ChartType',
        'series' => 'Series',
        'categories' => 'Categories',
        'title' => 'Title',
        'back_wall' => 'BackWall',
        'side_wall' => 'SideWall',
        'floor' => 'Floor',
        'legend' => 'Legend',
        'axes' => 'Axes',
        'plot_area' => 'PlotArea'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chart_type' => 'setChartType',
        'series' => 'setSeries',
        'categories' => 'setCategories',
        'title' => 'setTitle',
        'back_wall' => 'setBackWall',
        'side_wall' => 'setSideWall',
        'floor' => 'setFloor',
        'legend' => 'setLegend',
        'axes' => 'setAxes',
        'plot_area' => 'setPlotArea'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chart_type' => 'getChartType',
        'series' => 'getSeries',
        'categories' => 'getCategories',
        'title' => 'getTitle',
        'back_wall' => 'getBackWall',
        'side_wall' => 'getSideWall',
        'floor' => 'getFloor',
        'legend' => 'getLegend',
        'axes' => 'getAxes',
        'plot_area' => 'getPlotArea'
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

        $this->container['chart_type'] = isset($data['chart_type']) ? $data['chart_type'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['back_wall'] = isset($data['back_wall']) ? $data['back_wall'] : null;
        $this->container['side_wall'] = isset($data['side_wall']) ? $data['side_wall'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['legend'] = isset($data['legend']) ? $data['legend'] : null;
        $this->container['axes'] = isset($data['axes']) ? $data['axes'] : null;
        $this->container['plot_area'] = isset($data['plot_area']) ? $data['plot_area'] : null;
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
     * Gets chart_type
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartType
     */
    public function getChartType()
    {
        return $this->container['chart_type'];
    }

    /**
     * Sets chart_type
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartType $chart_type Gets or sets the type of the chart.
     *
     * @return $this
     */
    public function setChartType($chart_type)
    {
        $this->container['chart_type'] = $chart_type;

        return $this;
    }

    /**
     * Gets series
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Series[]
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Series[] $series Gets or sets the series of chart data values.
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories Gets or sets the categories for chart data
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartTitle
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartTitle $title Gets or sets the title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets back_wall
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartWall
     */
    public function getBackWall()
    {
        return $this->container['back_wall'];
    }

    /**
     * Sets back_wall
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartWall $back_wall Gets or sets the back wall.
     *
     * @return $this
     */
    public function setBackWall($back_wall)
    {
        $this->container['back_wall'] = $back_wall;

        return $this;
    }

    /**
     * Gets side_wall
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartWall
     */
    public function getSideWall()
    {
        return $this->container['side_wall'];
    }

    /**
     * Sets side_wall
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartWall $side_wall Gets or sets the side wall.
     *
     * @return $this
     */
    public function setSideWall($side_wall)
    {
        $this->container['side_wall'] = $side_wall;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ChartWall
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ChartWall $floor Gets or sets the floor.
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets legend
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Legend
     */
    public function getLegend()
    {
        return $this->container['legend'];
    }

    /**
     * Sets legend
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Legend $legend Gets or sets the legend.
     *
     * @return $this
     */
    public function setLegend($legend)
    {
        $this->container['legend'] = $legend;

        return $this;
    }

    /**
     * Gets axes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\Axes
     */
    public function getAxes()
    {
        return $this->container['axes'];
    }

    /**
     * Sets axes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\Axes $axes Gets or sets the axes.
     *
     * @return $this
     */
    public function setAxes($axes)
    {
        $this->container['axes'] = $axes;

        return $this;
    }

    /**
     * Gets plot_area
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\PlotArea
     */
    public function getPlotArea()
    {
        return $this->container['plot_area'];
    }

    /**
     * Sets plot_area
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\PlotArea $plot_area Gets or sets the plot area.
     *
     * @return $this
     */
    public function setPlotArea($plot_area)
    {
        $this->container['plot_area'] = $plot_area;

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


