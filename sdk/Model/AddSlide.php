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
 * AddSlide Class Doc Comment
 *
 * @category Class
 * @description Add slide task.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddSlide extends Task 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddSlide';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clone_from_file' => '\Aspose\Slides\Cloud\Sdk\Model\InputFile',
        'clone_from_position' => 'int',
        'position' => 'int',
        'layout_alias' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clone_from_file' => null,
        'clone_from_position' => 'int32',
        'position' => 'int32',
        'layout_alias' => null
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
        'clone_from_file' => 'CloneFromFile',
        'clone_from_position' => 'CloneFromPosition',
        'position' => 'Position',
        'layout_alias' => 'LayoutAlias'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clone_from_file' => 'setCloneFromFile',
        'clone_from_position' => 'setCloneFromPosition',
        'position' => 'setPosition',
        'layout_alias' => 'setLayoutAlias'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clone_from_file' => 'getCloneFromFile',
        'clone_from_position' => 'getCloneFromPosition',
        'position' => 'getPosition',
        'layout_alias' => 'getLayoutAlias'
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

        $this->container['clone_from_file'] = isset($data['clone_from_file']) ? $data['clone_from_file'] : null;
        $this->container['clone_from_position'] = isset($data['clone_from_position']) ? $data['clone_from_position'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['layout_alias'] = isset($data['layout_alias']) ? $data['layout_alias'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['clone_from_position'] === null) {
            $invalidProperties[] = "'clone_from_position' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
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

        if ($this->container['clone_from_position'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets clone_from_file
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\InputFile
     */
    public function getCloneFromFile()
    {
        return $this->container['clone_from_file'];
    }

    /**
     * Sets clone_from_file
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\InputFile $clone_from_file File to clone a slide from.
     *
     * @return $this
     */
    public function setCloneFromFile($clone_from_file)
    {
        $this->container['clone_from_file'] = $clone_from_file;

        return $this;
    }

    /**
     * Gets clone_from_position
     *
     * @return int
     */
    public function getCloneFromPosition()
    {
        return $this->container['clone_from_position'];
    }

    /**
     * Sets clone_from_position
     *
     * @param int $clone_from_position Position of the slide to clone.
     *
     * @return $this
     */
    public function setCloneFromPosition($clone_from_position)
    {
        $this->container['clone_from_position'] = $clone_from_position;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position at which to insert the slide.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets layout_alias
     *
     * @return string
     */
    public function getLayoutAlias()
    {
        return $this->container['layout_alias'];
    }

    /**
     * Sets layout_alias
     *
     * @param string $layout_alias Alias of layout (href, index or type). If value is null a blank slide is added.
     *
     * @return $this
     */
    public function setLayoutAlias($layout_alias)
    {
        $this->container['layout_alias'] = $layout_alias;

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


