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
 * ShapeBase Class Doc Comment
 *
 * @category Class
 * @description Slide shape.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShapeBase extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShapeBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'width' => 'double',
        'height' => 'double',
        'alternativeText' => 'string',
        'alternativeTextTitle' => 'string',
        'hidden' => 'bool',
        'x' => 'double',
        'y' => 'double',
        'zOrderPosition' => 'int',
        'shapes' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'fillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effectFormat' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'lineFormat' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'width' => 'double',
        'height' => 'double',
        'alternativeText' => null,
        'alternativeTextTitle' => null,
        'hidden' => null,
        'x' => 'double',
        'y' => 'double',
        'zOrderPosition' => 'int32',
        'shapes' => null,
        'fillFormat' => null,
        'effectFormat' => null,
        'lineFormat' => null,
        'type' => null
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
        'name' => 'Name',
        'width' => 'Width',
        'height' => 'Height',
        'alternativeText' => 'AlternativeText',
        'alternativeTextTitle' => 'AlternativeTextTitle',
        'hidden' => 'Hidden',
        'x' => 'X',
        'y' => 'Y',
        'zOrderPosition' => 'ZOrderPosition',
        'shapes' => 'Shapes',
        'fillFormat' => 'FillFormat',
        'effectFormat' => 'EffectFormat',
        'lineFormat' => 'LineFormat',
        'type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'alternativeText' => 'setAlternativeText',
        'alternativeTextTitle' => 'setAlternativeTextTitle',
        'hidden' => 'setHidden',
        'x' => 'setX',
        'y' => 'setY',
        'zOrderPosition' => 'setZOrderPosition',
        'shapes' => 'setShapes',
        'fillFormat' => 'setFillFormat',
        'effectFormat' => 'setEffectFormat',
        'lineFormat' => 'setLineFormat',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'alternativeText' => 'getAlternativeText',
        'alternativeTextTitle' => 'getAlternativeTextTitle',
        'hidden' => 'getHidden',
        'x' => 'getX',
        'y' => 'getY',
        'zOrderPosition' => 'getZOrderPosition',
        'shapes' => 'getShapes',
        'fillFormat' => 'getFillFormat',
        'effectFormat' => 'getEffectFormat',
        'lineFormat' => 'getLineFormat',
        'type' => 'getType'
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

    const TYPE_SHAPE = 'Shape';
    const TYPE_CHART = 'Chart';
    const TYPE_TABLE = 'Table';
    const TYPE_PICTURE_FRAME = 'PictureFrame';
    const TYPE_VIDEO_FRAME = 'VideoFrame';
    const TYPE_AUDIO_FRAME = 'AudioFrame';
    const TYPE_SMART_ART = 'SmartArt';
    const TYPE_OLE_OBJECT_FRAME = 'OleObjectFrame';
    const TYPE_GROUP_SHAPE = 'GroupShape';
    const TYPE_GRAPHICAL_OBJECT = 'GraphicalObject';
    const TYPE_CONNECTOR = 'Connector';
    const TYPE_SMART_ART_SHAPE = 'SmartArtShape';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHAPE,
            self::TYPE_CHART,
            self::TYPE_TABLE,
            self::TYPE_PICTURE_FRAME,
            self::TYPE_VIDEO_FRAME,
            self::TYPE_AUDIO_FRAME,
            self::TYPE_SMART_ART,
            self::TYPE_OLE_OBJECT_FRAME,
            self::TYPE_GROUP_SHAPE,
            self::TYPE_GRAPHICAL_OBJECT,
            self::TYPE_CONNECTOR,
            self::TYPE_SMART_ART_SHAPE,
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

        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['alternativeText'] = isset($data['alternativeText']) ? $data['alternativeText'] : null;
        $this->container['alternativeTextTitle'] = isset($data['alternativeTextTitle']) ? $data['alternativeTextTitle'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['zOrderPosition'] = isset($data['zOrderPosition']) ? $data['zOrderPosition'] : null;
        $this->container['shapes'] = isset($data['shapes']) ? $data['shapes'] : null;
        $this->container['fillFormat'] = isset($data['fillFormat']) ? $data['fillFormat'] : null;
        $this->container['effectFormat'] = isset($data['effectFormat']) ? $data['effectFormat'] : null;
        $this->container['lineFormat'] = isset($data['lineFormat']) ? $data['lineFormat'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['zOrderPosition'] === null) {
            $invalidProperties[] = "'zOrderPosition' can't be null";
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

        if ($this->container['zOrderPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Gets or sets the name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Gets or sets the width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Gets or sets the height.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets alternativeText
     *
     * @return string
     */
    public function getAlternativeText()
    {
        return $this->container['alternativeText'];
    }

    /**
     * Sets alternativeText
     *
     * @param string $alternativeText Gets or sets the alternative text.
     *
     * @return $this
     */
    public function setAlternativeText($alternativeText)
    {
        $this->container['alternativeText'] = $alternativeText;

        return $this;
    }

    /**
     * Gets alternativeTextTitle
     *
     * @return string
     */
    public function getAlternativeTextTitle()
    {
        return $this->container['alternativeTextTitle'];
    }

    /**
     * Sets alternativeTextTitle
     *
     * @param string $alternativeTextTitle The title of alternative text associated with the shape.
     *
     * @return $this
     */
    public function setAlternativeTextTitle($alternativeTextTitle)
    {
        $this->container['alternativeTextTitle'] = $alternativeTextTitle;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Gets or sets a value indicating whether this ShapeBase is hidden.
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets x
     *
     * @return double
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param double $x Gets or sets the X
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return double
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param double $y Gets or sets the Y.
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets zOrderPosition
     *
     * @return int
     */
    public function getZOrderPosition()
    {
        return $this->container['zOrderPosition'];
    }

    /**
     * Sets zOrderPosition
     *
     * @param int $zOrderPosition Gets z-order position of shape
     *
     * @return $this
     */
    public function setZOrderPosition($zOrderPosition)
    {
        $this->container['zOrderPosition'] = $zOrderPosition;

        return $this;
    }

    /**
     * Gets shapes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getShapes()
    {
        return $this->container['shapes'];
    }

    /**
     * Sets shapes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $shapes Gets or sets the link to shapes.
     *
     * @return $this
     */
    public function setShapes($shapes)
    {
        $this->container['shapes'] = $shapes;

        return $this;
    }

    /**
     * Gets fillFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fillFormat'];
    }

    /**
     * Sets fillFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fillFormat Gets or sets the fill format.
     *
     * @return $this
     */
    public function setFillFormat($fillFormat)
    {
        $this->container['fillFormat'] = $fillFormat;

        return $this;
    }

    /**
     * Gets effectFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\EffectFormat
     */
    public function getEffectFormat()
    {
        return $this->container['effectFormat'];
    }

    /**
     * Sets effectFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effectFormat Gets or sets the effect format.
     *
     * @return $this
     */
    public function setEffectFormat($effectFormat)
    {
        $this->container['effectFormat'] = $effectFormat;

        return $this;
    }

    /**
     * Gets lineFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getLineFormat()
    {
        return $this->container['lineFormat'];
    }

    /**
     * Sets lineFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $lineFormat Gets or sets the line format.
     *
     * @return $this
     */
    public function setLineFormat($lineFormat)
    {
        $this->container['lineFormat'] = $lineFormat;

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
     * @param string $type type
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
            if (!is_null($type) && !in_array($type, $allowedValues)) {
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


