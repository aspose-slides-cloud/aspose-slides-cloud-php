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
 * AddMasterSlide Class Doc Comment
 *
 * @category Class
 * @description Add master slide task.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddMasterSlide extends Task 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddMasterSlide';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cloneFromFile' => '\Aspose\Slides\Cloud\Sdk\Model\InputFile',
        'cloneFromPosition' => 'int',
        'applyToAll' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cloneFromFile' => null,
        'cloneFromPosition' => 'int32',
        'applyToAll' => null
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
        'cloneFromFile' => 'CloneFromFile',
        'cloneFromPosition' => 'CloneFromPosition',
        'applyToAll' => 'ApplyToAll'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloneFromFile' => 'setCloneFromFile',
        'cloneFromPosition' => 'setCloneFromPosition',
        'applyToAll' => 'setApplyToAll'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloneFromFile' => 'getCloneFromFile',
        'cloneFromPosition' => 'getCloneFromPosition',
        'applyToAll' => 'getApplyToAll'
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

        $this->container['cloneFromFile'] = isset($data['cloneFromFile']) ? $data['cloneFromFile'] : null;
        $this->container['cloneFromPosition'] = isset($data['cloneFromPosition']) ? $data['cloneFromPosition'] : null;
        $this->container['applyToAll'] = isset($data['applyToAll']) ? $data['applyToAll'] : null;
        $this->container['type'] = 'AddMasterSlide';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['cloneFromPosition'] === null) {
            $invalidProperties[] = "'cloneFromPosition' can't be null";
        }
        if ($this->container['applyToAll'] === null) {
            $invalidProperties[] = "'applyToAll' can't be null";
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

        if ($this->container['cloneFromPosition'] === null) {
            return false;
        }
        if ($this->container['applyToAll'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets cloneFromFile
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\InputFile
     */
    public function getCloneFromFile()
    {
        return $this->container['cloneFromFile'];
    }

    /**
     * Sets cloneFromFile
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\InputFile $cloneFromFile Source presentation clone from.
     *
     * @return $this
     */
    public function setCloneFromFile($cloneFromFile)
    {
        $this->container['cloneFromFile'] = $cloneFromFile;

        return $this;
    }

    /**
     * Gets cloneFromPosition
     *
     * @return int
     */
    public function getCloneFromPosition()
    {
        return $this->container['cloneFromPosition'];
    }

    /**
     * Sets cloneFromPosition
     *
     * @param int $cloneFromPosition Index of slide to clone.
     *
     * @return $this
     */
    public function setCloneFromPosition($cloneFromPosition)
    {
        $this->container['cloneFromPosition'] = $cloneFromPosition;

        return $this;
    }

    /**
     * Gets applyToAll
     *
     * @return bool
     */
    public function getApplyToAll()
    {
        return $this->container['applyToAll'];
    }

    /**
     * Sets applyToAll
     *
     * @param bool $applyToAll True if cloned master slide is applied to all slides.
     *
     * @return $this
     */
    public function setApplyToAll($applyToAll)
    {
        $this->container['applyToAll'] = $applyToAll;

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


