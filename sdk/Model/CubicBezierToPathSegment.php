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
 * CubicBezierToPathSegment Class Doc Comment
 *
 * @category Class
 * @description Cubic Bezier curve segment of the geometry path
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CubicBezierToPathSegment extends PathSegment 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CubicBezierToPathSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'x1' => 'double',
        'y1' => 'double',
        'x2' => 'double',
        'y2' => 'double',
        'x3' => 'double',
        'y3' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'x1' => 'double',
        'y1' => 'double',
        'x2' => 'double',
        'y2' => 'double',
        'x3' => 'double',
        'y3' => 'double'
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
        'x1' => 'X1',
        'y1' => 'Y1',
        'x2' => 'X2',
        'y2' => 'Y2',
        'x3' => 'X3',
        'y3' => 'Y3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x1' => 'setX1',
        'y1' => 'setY1',
        'x2' => 'setX2',
        'y2' => 'setY2',
        'x3' => 'setX3',
        'y3' => 'setY3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x1' => 'getX1',
        'y1' => 'getY1',
        'x2' => 'getX2',
        'y2' => 'getY2',
        'x3' => 'getX3',
        'y3' => 'getY3'
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

        $this->container['x1'] = isset($data['x1']) ? $data['x1'] : null;
        $this->container['y1'] = isset($data['y1']) ? $data['y1'] : null;
        $this->container['x2'] = isset($data['x2']) ? $data['x2'] : null;
        $this->container['y2'] = isset($data['y2']) ? $data['y2'] : null;
        $this->container['x3'] = isset($data['x3']) ? $data['x3'] : null;
        $this->container['y3'] = isset($data['y3']) ? $data['y3'] : null;
        $this->container['type'] = 'CubicBezierTo';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['x1'] === null) {
            $invalidProperties[] = "'x1' can't be null";
        }
        if ($this->container['y1'] === null) {
            $invalidProperties[] = "'y1' can't be null";
        }
        if ($this->container['x2'] === null) {
            $invalidProperties[] = "'x2' can't be null";
        }
        if ($this->container['y2'] === null) {
            $invalidProperties[] = "'y2' can't be null";
        }
        if ($this->container['x3'] === null) {
            $invalidProperties[] = "'x3' can't be null";
        }
        if ($this->container['y3'] === null) {
            $invalidProperties[] = "'y3' can't be null";
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

        if ($this->container['x1'] === null) {
            return false;
        }
        if ($this->container['y1'] === null) {
            return false;
        }
        if ($this->container['x2'] === null) {
            return false;
        }
        if ($this->container['y2'] === null) {
            return false;
        }
        if ($this->container['x3'] === null) {
            return false;
        }
        if ($this->container['y3'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets x1
     *
     * @return double
     */
    public function getX1()
    {
        return $this->container['x1'];
    }

    /**
     * Sets x1
     *
     * @param double $x1 X coordinate of the first direction point
     *
     * @return $this
     */
    public function setX1($x1)
    {
        $this->container['x1'] = $x1;

        return $this;
    }

    /**
     * Gets y1
     *
     * @return double
     */
    public function getY1()
    {
        return $this->container['y1'];
    }

    /**
     * Sets y1
     *
     * @param double $y1 Y coordinate of the first direction point
     *
     * @return $this
     */
    public function setY1($y1)
    {
        $this->container['y1'] = $y1;

        return $this;
    }

    /**
     * Gets x2
     *
     * @return double
     */
    public function getX2()
    {
        return $this->container['x2'];
    }

    /**
     * Sets x2
     *
     * @param double $x2 X coordinate of the second direction point
     *
     * @return $this
     */
    public function setX2($x2)
    {
        $this->container['x2'] = $x2;

        return $this;
    }

    /**
     * Gets y2
     *
     * @return double
     */
    public function getY2()
    {
        return $this->container['y2'];
    }

    /**
     * Sets y2
     *
     * @param double $y2 Y coordinate of the second direction point
     *
     * @return $this
     */
    public function setY2($y2)
    {
        $this->container['y2'] = $y2;

        return $this;
    }

    /**
     * Gets x3
     *
     * @return double
     */
    public function getX3()
    {
        return $this->container['x3'];
    }

    /**
     * Sets x3
     *
     * @param double $x3 X coordinate of end point
     *
     * @return $this
     */
    public function setX3($x3)
    {
        $this->container['x3'] = $x3;

        return $this;
    }

    /**
     * Gets y3
     *
     * @return double
     */
    public function getY3()
    {
        return $this->container['y3'];
    }

    /**
     * Sets y3
     *
     * @param double $y3 Y coordinate of end point
     *
     * @return $this
     */
    public function setY3($y3)
    {
        $this->container['y3'] = $y3;

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


