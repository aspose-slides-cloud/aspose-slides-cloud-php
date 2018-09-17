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
 * SmartArt Class Doc Comment
 *
 * @category Class
 * @description Represents SmartArt shape resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartArt extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartArt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'layout' => '\Aspose\Slides\Cloud\Sdk\Model\SmartArtLayoutType',
        'quick_style' => '\Aspose\Slides\Cloud\Sdk\Model\SmartArtQuickStyleType',
        'color_style' => '\Aspose\Slides\Cloud\Sdk\Model\SmartArtColorType',
        'nodes' => '\Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[]',
        'is_reversed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'layout' => null,
        'quick_style' => null,
        'color_style' => null,
        'nodes' => null,
        'is_reversed' => null
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
        'layout' => 'Layout',
        'quick_style' => 'QuickStyle',
        'color_style' => 'ColorStyle',
        'nodes' => 'Nodes',
        'is_reversed' => 'IsReversed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layout' => 'setLayout',
        'quick_style' => 'setQuickStyle',
        'color_style' => 'setColorStyle',
        'nodes' => 'setNodes',
        'is_reversed' => 'setIsReversed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layout' => 'getLayout',
        'quick_style' => 'getQuickStyle',
        'color_style' => 'getColorStyle',
        'nodes' => 'getNodes',
        'is_reversed' => 'getIsReversed'
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

        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['quick_style'] = isset($data['quick_style']) ? $data['quick_style'] : null;
        $this->container['color_style'] = isset($data['color_style']) ? $data['color_style'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['is_reversed'] = isset($data['is_reversed']) ? $data['is_reversed'] : null;
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
     * Gets layout
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SmartArtLayoutType
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SmartArtLayoutType $layout Layout type.
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets quick_style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SmartArtQuickStyleType
     */
    public function getQuickStyle()
    {
        return $this->container['quick_style'];
    }

    /**
     * Sets quick_style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SmartArtQuickStyleType $quick_style Quick style.
     *
     * @return $this
     */
    public function setQuickStyle($quick_style)
    {
        $this->container['quick_style'] = $quick_style;

        return $this;
    }

    /**
     * Gets color_style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SmartArtColorType
     */
    public function getColorStyle()
    {
        return $this->container['color_style'];
    }

    /**
     * Sets color_style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SmartArtColorType $color_style Color style.
     *
     * @return $this
     */
    public function setColorStyle($color_style)
    {
        $this->container['color_style'] = $color_style;

        return $this;
    }

    /**
     * Gets nodes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[]
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[] $nodes Collection of nodes in SmartArt object.
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets is_reversed
     *
     * @return bool
     */
    public function getIsReversed()
    {
        return $this->container['is_reversed'];
    }

    /**
     * Sets is_reversed
     *
     * @param bool $is_reversed The state of the SmartArt diagram with regard to (left-to-right) LTR or (right-to-left) RTL, if the diagram supports reversal.
     *
     * @return $this
     */
    public function setIsReversed($is_reversed)
    {
        $this->container['is_reversed'] = $is_reversed;

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


