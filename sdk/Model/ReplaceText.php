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
 * ReplaceText Class Doc Comment
 *
 * @category Class
 * @description Replace text task.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplaceText extends Task 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplaceText';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oldText' => 'string',
        'newText' => 'string',
        'ignoreCase' => 'bool',
        'slidePosition' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oldText' => null,
        'newText' => null,
        'ignoreCase' => null,
        'slidePosition' => 'int32'
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
        'oldText' => 'OldText',
        'newText' => 'NewText',
        'ignoreCase' => 'IgnoreCase',
        'slidePosition' => 'SlidePosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oldText' => 'setOldText',
        'newText' => 'setNewText',
        'ignoreCase' => 'setIgnoreCase',
        'slidePosition' => 'setSlidePosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oldText' => 'getOldText',
        'newText' => 'getNewText',
        'ignoreCase' => 'getIgnoreCase',
        'slidePosition' => 'getSlidePosition'
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

        $this->container['oldText'] = isset($data['oldText']) ? $data['oldText'] : null;
        $this->container['newText'] = isset($data['newText']) ? $data['newText'] : null;
        $this->container['ignoreCase'] = isset($data['ignoreCase']) ? $data['ignoreCase'] : null;
        $this->container['slidePosition'] = isset($data['slidePosition']) ? $data['slidePosition'] : null;
        $this->container['type'] = 'ReplaceText';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['ignoreCase'] === null) {
            $invalidProperties[] = "'ignoreCase' can't be null";
        }
        if ($this->container['slidePosition'] === null) {
            $invalidProperties[] = "'slidePosition' can't be null";
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

        if ($this->container['ignoreCase'] === null) {
            return false;
        }
        if ($this->container['slidePosition'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets oldText
     *
     * @return string
     */
    public function getOldText()
    {
        return $this->container['oldText'];
    }

    /**
     * Sets oldText
     *
     * @param string $oldText Text to be replaced.
     *
     * @return $this
     */
    public function setOldText($oldText)
    {
        $this->container['oldText'] = $oldText;

        return $this;
    }

    /**
     * Gets newText
     *
     * @return string
     */
    public function getNewText()
    {
        return $this->container['newText'];
    }

    /**
     * Sets newText
     *
     * @param string $newText Text to replace with.
     *
     * @return $this
     */
    public function setNewText($newText)
    {
        $this->container['newText'] = $newText;

        return $this;
    }

    /**
     * Gets ignoreCase
     *
     * @return bool
     */
    public function getIgnoreCase()
    {
        return $this->container['ignoreCase'];
    }

    /**
     * Sets ignoreCase
     *
     * @param bool $ignoreCase True to ignore case in replace pattern search.
     *
     * @return $this
     */
    public function setIgnoreCase($ignoreCase)
    {
        $this->container['ignoreCase'] = $ignoreCase;

        return $this;
    }

    /**
     * Gets slidePosition
     *
     * @return int
     */
    public function getSlidePosition()
    {
        return $this->container['slidePosition'];
    }

    /**
     * Sets slidePosition
     *
     * @param int $slidePosition One-based position of the slide to perform the replace in. 0 to make the replace throughout the presentation.
     *
     * @return $this
     */
    public function setSlidePosition($slidePosition)
    {
        $this->container['slidePosition'] = $slidePosition;

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


