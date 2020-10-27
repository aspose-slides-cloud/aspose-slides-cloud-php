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
 * Placeholder Class Doc Comment
 *
 * @category Class
 * @description Represents placeholder
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Placeholder extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Placeholder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'int',
        'orientation' => 'string',
        'size' => 'string',
        'type' => 'string',
        'shape' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => null,
        'orientation' => null,
        'size' => null,
        'type' => null,
        'shape' => null
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
        'index' => 'Index',
        'orientation' => 'Orientation',
        'size' => 'Size',
        'type' => 'Type',
        'shape' => 'Shape'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'orientation' => 'setOrientation',
        'size' => 'setSize',
        'type' => 'setType',
        'shape' => 'setShape'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'orientation' => 'getOrientation',
        'size' => 'getSize',
        'type' => 'getType',
        'shape' => 'getShape'
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

    const ORIENTATION_HORIZONTAL = 'Horizontal';
    const ORIENTATION_VERTICAL = 'Vertical';
    const SIZE_FULL = 'Full';
    const SIZE_HALF = 'Half';
    const SIZE_QUARTER = 'Quarter';
    const TYPE_TITLE = 'Title';
    const TYPE_BODY = 'Body';
    const TYPE_CENTERED_TITLE = 'CenteredTitle';
    const TYPE_SUBTITLE = 'Subtitle';
    const TYPE_DATE_AND_TIME = 'DateAndTime';
    const TYPE_SLIDE_NUMBER = 'SlideNumber';
    const TYPE_FOOTER = 'Footer';
    const TYPE_HEADER = 'Header';
    const TYPE_OBJECT = 'Object';
    const TYPE_CHART = 'Chart';
    const TYPE_TABLE = 'Table';
    const TYPE_CLIP_ART = 'ClipArt';
    const TYPE_DIAGRAM = 'Diagram';
    const TYPE_MEDIA = 'Media';
    const TYPE_SLIDE_IMAGE = 'SlideImage';
    const TYPE_PICTURE = 'Picture';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_HORIZONTAL,
            self::ORIENTATION_VERTICAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeAllowableValues()
    {
        return [
            self::SIZE_FULL,
            self::SIZE_HALF,
            self::SIZE_QUARTER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TITLE,
            self::TYPE_BODY,
            self::TYPE_CENTERED_TITLE,
            self::TYPE_SUBTITLE,
            self::TYPE_DATE_AND_TIME,
            self::TYPE_SLIDE_NUMBER,
            self::TYPE_FOOTER,
            self::TYPE_HEADER,
            self::TYPE_OBJECT,
            self::TYPE_CHART,
            self::TYPE_TABLE,
            self::TYPE_CLIP_ART,
            self::TYPE_DIAGRAM,
            self::TYPE_MEDIA,
            self::TYPE_SLIDE_IMAGE,
            self::TYPE_PICTURE,
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

        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['shape'] = isset($data['shape']) ? $data['shape'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['orientation'] === null) {
            $invalidProperties[] = "'orientation' can't be null";
        }
        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orientation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        $allowedValues = $this->getSizeAllowableValues();
        if (!in_array($this->container['size'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'size', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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

        if ($this->container['index'] === null) {
            return false;
        }
        if ($this->container['orientation'] === null) {
            return false;
        }
        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        $allowedValues = $this->getSizeAllowableValues();
        if (!in_array($this->container['size'], $allowedValues)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Index.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param string $orientation Orientation.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $allowedValues = $this->getOrientationAllowableValues();


        if (is_numeric($orientation)) {
            if ($orientation >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orientation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $orientation = $allowedValues[$orientation];
            }
        } else {
            if (!in_array($orientation, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orientation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size Size.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $allowedValues = $this->getSizeAllowableValues();


        if (is_numeric($size)) {
            if ($size >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'size', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $size = $allowedValues[$size];
            }
        } else {
            if (!in_array($size, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'size', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Placeholder type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();


        if (is_numeric($type)) {
            if ($type >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'type', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $type = $allowedValues[$type];
            }
        } else {
            if (!in_array($type, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'type', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $shape Shape link.
     *
     * @return $this
     */
    public function setShape($shape)
    {
        $this->container['shape'] = $shape;

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


