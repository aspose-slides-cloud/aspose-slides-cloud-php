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
 * Connector Class Doc Comment
 *
 * @category Class
 * @description Represents Connector resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Connector extends GeometryShape 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'startShapeConnectedTo' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'startShapeConnectedToIndex' => 'int',
        'endShapeConnectedTo' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'endShapeConnectedToIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'startShapeConnectedTo' => null,
        'startShapeConnectedToIndex' => 'int32',
        'endShapeConnectedTo' => null,
        'endShapeConnectedToIndex' => 'int32'
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
        'startShapeConnectedTo' => 'StartShapeConnectedTo',
        'startShapeConnectedToIndex' => 'StartShapeConnectedToIndex',
        'endShapeConnectedTo' => 'EndShapeConnectedTo',
        'endShapeConnectedToIndex' => 'EndShapeConnectedToIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'startShapeConnectedTo' => 'setStartShapeConnectedTo',
        'startShapeConnectedToIndex' => 'setStartShapeConnectedToIndex',
        'endShapeConnectedTo' => 'setEndShapeConnectedTo',
        'endShapeConnectedToIndex' => 'setEndShapeConnectedToIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'startShapeConnectedTo' => 'getStartShapeConnectedTo',
        'startShapeConnectedToIndex' => 'getStartShapeConnectedToIndex',
        'endShapeConnectedTo' => 'getEndShapeConnectedTo',
        'endShapeConnectedToIndex' => 'getEndShapeConnectedToIndex'
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

        $this->container['startShapeConnectedTo'] = isset($data['startShapeConnectedTo']) ? $data['startShapeConnectedTo'] : null;
        $this->container['startShapeConnectedToIndex'] = isset($data['startShapeConnectedToIndex']) ? $data['startShapeConnectedToIndex'] : null;
        $this->container['endShapeConnectedTo'] = isset($data['endShapeConnectedTo']) ? $data['endShapeConnectedTo'] : null;
        $this->container['endShapeConnectedToIndex'] = isset($data['endShapeConnectedToIndex']) ? $data['endShapeConnectedToIndex'] : null;
        $this->container['type'] = 'Connector';
        
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
     * Gets startShapeConnectedTo
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getStartShapeConnectedTo()
    {
        return $this->container['startShapeConnectedTo'];
    }

    /**
     * Sets startShapeConnectedTo
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $startShapeConnectedTo Start shape link.
     *
     * @return $this
     */
    public function setStartShapeConnectedTo($startShapeConnectedTo)
    {
        $this->container['startShapeConnectedTo'] = $startShapeConnectedTo;

        return $this;
    }

    /**
     * Gets startShapeConnectedToIndex
     *
     * @return int
     */
    public function getStartShapeConnectedToIndex()
    {
        return $this->container['startShapeConnectedToIndex'];
    }

    /**
     * Sets startShapeConnectedToIndex
     *
     * @param int $startShapeConnectedToIndex Start shape index.
     *
     * @return $this
     */
    public function setStartShapeConnectedToIndex($startShapeConnectedToIndex)
    {
        $this->container['startShapeConnectedToIndex'] = $startShapeConnectedToIndex;

        return $this;
    }

    /**
     * Gets endShapeConnectedTo
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getEndShapeConnectedTo()
    {
        return $this->container['endShapeConnectedTo'];
    }

    /**
     * Sets endShapeConnectedTo
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $endShapeConnectedTo End shape link.
     *
     * @return $this
     */
    public function setEndShapeConnectedTo($endShapeConnectedTo)
    {
        $this->container['endShapeConnectedTo'] = $endShapeConnectedTo;

        return $this;
    }

    /**
     * Gets endShapeConnectedToIndex
     *
     * @return int
     */
    public function getEndShapeConnectedToIndex()
    {
        return $this->container['endShapeConnectedToIndex'];
    }

    /**
     * Sets endShapeConnectedToIndex
     *
     * @param int $endShapeConnectedToIndex End shape index.
     *
     * @return $this
     */
    public function setEndShapeConnectedToIndex($endShapeConnectedToIndex)
    {
        $this->container['endShapeConnectedToIndex'] = $endShapeConnectedToIndex;

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


