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
 * BorderBoxElement Class Doc Comment
 *
 * @category Class
 * @description Rectangular or some other border around the MathElement.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BorderBoxElement extends MathElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BorderBoxElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'hideTop' => 'bool',
        'hideBottom' => 'bool',
        'hideLeft' => 'bool',
        'hideRight' => 'bool',
        'strikethroughHorizontal' => 'bool',
        'strikethroughVertical' => 'bool',
        'strikethroughBottomLeftToTopRight' => 'bool',
        'strikethroughTopLeftToBottomRight' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base' => null,
        'hideTop' => null,
        'hideBottom' => null,
        'hideLeft' => null,
        'hideRight' => null,
        'strikethroughHorizontal' => null,
        'strikethroughVertical' => null,
        'strikethroughBottomLeftToTopRight' => null,
        'strikethroughTopLeftToBottomRight' => null
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
        'base' => 'Base',
        'hideTop' => 'HideTop',
        'hideBottom' => 'HideBottom',
        'hideLeft' => 'HideLeft',
        'hideRight' => 'HideRight',
        'strikethroughHorizontal' => 'StrikethroughHorizontal',
        'strikethroughVertical' => 'StrikethroughVertical',
        'strikethroughBottomLeftToTopRight' => 'StrikethroughBottomLeftToTopRight',
        'strikethroughTopLeftToBottomRight' => 'StrikethroughTopLeftToBottomRight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base' => 'setBase',
        'hideTop' => 'setHideTop',
        'hideBottom' => 'setHideBottom',
        'hideLeft' => 'setHideLeft',
        'hideRight' => 'setHideRight',
        'strikethroughHorizontal' => 'setStrikethroughHorizontal',
        'strikethroughVertical' => 'setStrikethroughVertical',
        'strikethroughBottomLeftToTopRight' => 'setStrikethroughBottomLeftToTopRight',
        'strikethroughTopLeftToBottomRight' => 'setStrikethroughTopLeftToBottomRight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base' => 'getBase',
        'hideTop' => 'getHideTop',
        'hideBottom' => 'getHideBottom',
        'hideLeft' => 'getHideLeft',
        'hideRight' => 'getHideRight',
        'strikethroughHorizontal' => 'getStrikethroughHorizontal',
        'strikethroughVertical' => 'getStrikethroughVertical',
        'strikethroughBottomLeftToTopRight' => 'getStrikethroughBottomLeftToTopRight',
        'strikethroughTopLeftToBottomRight' => 'getStrikethroughTopLeftToBottomRight'
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

        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['hideTop'] = isset($data['hideTop']) ? $data['hideTop'] : null;
        $this->container['hideBottom'] = isset($data['hideBottom']) ? $data['hideBottom'] : null;
        $this->container['hideLeft'] = isset($data['hideLeft']) ? $data['hideLeft'] : null;
        $this->container['hideRight'] = isset($data['hideRight']) ? $data['hideRight'] : null;
        $this->container['strikethroughHorizontal'] = isset($data['strikethroughHorizontal']) ? $data['strikethroughHorizontal'] : null;
        $this->container['strikethroughVertical'] = isset($data['strikethroughVertical']) ? $data['strikethroughVertical'] : null;
        $this->container['strikethroughBottomLeftToTopRight'] = isset($data['strikethroughBottomLeftToTopRight']) ? $data['strikethroughBottomLeftToTopRight'] : null;
        $this->container['strikethroughTopLeftToBottomRight'] = isset($data['strikethroughTopLeftToBottomRight']) ? $data['strikethroughTopLeftToBottomRight'] : null;
        $this->container['type'] = 'BorderBox';
        
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
     * Gets base
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $base Base
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets hideTop
     *
     * @return bool
     */
    public function getHideTop()
    {
        return $this->container['hideTop'];
    }

    /**
     * Sets hideTop
     *
     * @param bool $hideTop Hide Top Edge
     *
     * @return $this
     */
    public function setHideTop($hideTop)
    {
        $this->container['hideTop'] = $hideTop;

        return $this;
    }

    /**
     * Gets hideBottom
     *
     * @return bool
     */
    public function getHideBottom()
    {
        return $this->container['hideBottom'];
    }

    /**
     * Sets hideBottom
     *
     * @param bool $hideBottom Hide Bottom Edge
     *
     * @return $this
     */
    public function setHideBottom($hideBottom)
    {
        $this->container['hideBottom'] = $hideBottom;

        return $this;
    }

    /**
     * Gets hideLeft
     *
     * @return bool
     */
    public function getHideLeft()
    {
        return $this->container['hideLeft'];
    }

    /**
     * Sets hideLeft
     *
     * @param bool $hideLeft Hide Left Edge
     *
     * @return $this
     */
    public function setHideLeft($hideLeft)
    {
        $this->container['hideLeft'] = $hideLeft;

        return $this;
    }

    /**
     * Gets hideRight
     *
     * @return bool
     */
    public function getHideRight()
    {
        return $this->container['hideRight'];
    }

    /**
     * Sets hideRight
     *
     * @param bool $hideRight Hide Right Edge
     *
     * @return $this
     */
    public function setHideRight($hideRight)
    {
        $this->container['hideRight'] = $hideRight;

        return $this;
    }

    /**
     * Gets strikethroughHorizontal
     *
     * @return bool
     */
    public function getStrikethroughHorizontal()
    {
        return $this->container['strikethroughHorizontal'];
    }

    /**
     * Sets strikethroughHorizontal
     *
     * @param bool $strikethroughHorizontal Strikethrough Horizontal
     *
     * @return $this
     */
    public function setStrikethroughHorizontal($strikethroughHorizontal)
    {
        $this->container['strikethroughHorizontal'] = $strikethroughHorizontal;

        return $this;
    }

    /**
     * Gets strikethroughVertical
     *
     * @return bool
     */
    public function getStrikethroughVertical()
    {
        return $this->container['strikethroughVertical'];
    }

    /**
     * Sets strikethroughVertical
     *
     * @param bool $strikethroughVertical Strikethrough Vertical
     *
     * @return $this
     */
    public function setStrikethroughVertical($strikethroughVertical)
    {
        $this->container['strikethroughVertical'] = $strikethroughVertical;

        return $this;
    }

    /**
     * Gets strikethroughBottomLeftToTopRight
     *
     * @return bool
     */
    public function getStrikethroughBottomLeftToTopRight()
    {
        return $this->container['strikethroughBottomLeftToTopRight'];
    }

    /**
     * Sets strikethroughBottomLeftToTopRight
     *
     * @param bool $strikethroughBottomLeftToTopRight Strikethrough Bottom-Left to Top-Right
     *
     * @return $this
     */
    public function setStrikethroughBottomLeftToTopRight($strikethroughBottomLeftToTopRight)
    {
        $this->container['strikethroughBottomLeftToTopRight'] = $strikethroughBottomLeftToTopRight;

        return $this;
    }

    /**
     * Gets strikethroughTopLeftToBottomRight
     *
     * @return bool
     */
    public function getStrikethroughTopLeftToBottomRight()
    {
        return $this->container['strikethroughTopLeftToBottomRight'];
    }

    /**
     * Sets strikethroughTopLeftToBottomRight
     *
     * @param bool $strikethroughTopLeftToBottomRight Strikethrough Top-Left to Bottom-Right.
     *
     * @return $this
     */
    public function setStrikethroughTopLeftToBottomRight($strikethroughTopLeftToBottomRight)
    {
        $this->container['strikethroughTopLeftToBottomRight'] = $strikethroughTopLeftToBottomRight;

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


