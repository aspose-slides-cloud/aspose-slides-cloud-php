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
 * LayoutSlide Class Doc Comment
 *
 * @category Class
 * @description Layout slide.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LayoutSlide extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LayoutSlide';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'type' => 'string',
        'masterSlide' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'dependingSlides' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'type' => null,
        'masterSlide' => null,
        'dependingSlides' => null
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
        'type' => 'Type',
        'masterSlide' => 'MasterSlide',
        'dependingSlides' => 'DependingSlides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'masterSlide' => 'setMasterSlide',
        'dependingSlides' => 'setDependingSlides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'masterSlide' => 'getMasterSlide',
        'dependingSlides' => 'getDependingSlides'
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

    const TYPE_TITLE = 'Title';
    const TYPE_TEXT = 'Text';
    const TYPE_TWO_COLUMN_TEXT = 'TwoColumnText';
    const TYPE_TABLE = 'Table';
    const TYPE_TEXT_AND_CHART = 'TextAndChart';
    const TYPE_CHART_AND_TEXT = 'ChartAndText';
    const TYPE_DIAGRAM = 'Diagram';
    const TYPE_CHART = 'Chart';
    const TYPE_TEXT_AND_CLIP_ART = 'TextAndClipArt';
    const TYPE_CLIP_ART_AND_TEXT = 'ClipArtAndText';
    const TYPE_TITLE_ONLY = 'TitleOnly';
    const TYPE_BLANK = 'Blank';
    const TYPE_TEXT_AND_OBJECT = 'TextAndObject';
    const TYPE_OBJECT_AND_TEXT = 'ObjectAndText';
    const TYPE_OBJECT = 'Object';
    const TYPE_TITLE_AND_OBJECT = 'TitleAndObject';
    const TYPE_TEXT_AND_MEDIA = 'TextAndMedia';
    const TYPE_MEDIA_AND_TEXT = 'MediaAndText';
    const TYPE_OBJECT_OVER_TEXT = 'ObjectOverText';
    const TYPE_TEXT_OVER_OBJECT = 'TextOverObject';
    const TYPE_TEXT_AND_TWO_OBJECTS = 'TextAndTwoObjects';
    const TYPE_TWO_OBJECTS_AND_TEXT = 'TwoObjectsAndText';
    const TYPE_TWO_OBJECTS_OVER_TEXT = 'TwoObjectsOverText';
    const TYPE_FOUR_OBJECTS = 'FourObjects';
    const TYPE_VERTICAL_TEXT = 'VerticalText';
    const TYPE_CLIP_ART_AND_VERTICAL_TEXT = 'ClipArtAndVerticalText';
    const TYPE_VERTICAL_TITLE_AND_TEXT = 'VerticalTitleAndText';
    const TYPE_VERTICAL_TITLE_AND_TEXT_OVER_CHART = 'VerticalTitleAndTextOverChart';
    const TYPE_TWO_OBJECTS = 'TwoObjects';
    const TYPE_OBJECT_AND_TWO_OBJECT = 'ObjectAndTwoObject';
    const TYPE_TWO_OBJECTS_AND_OBJECT = 'TwoObjectsAndObject';
    const TYPE_SECTION_HEADER = 'SectionHeader';
    const TYPE_TWO_TEXT_AND_TWO_OBJECTS = 'TwoTextAndTwoObjects';
    const TYPE_TITLE_OBJECT_AND_CAPTION = 'TitleObjectAndCaption';
    const TYPE_PICTURE_AND_CAPTION = 'PictureAndCaption';
    const TYPE_CUSTOM = 'Custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TITLE,
            self::TYPE_TEXT,
            self::TYPE_TWO_COLUMN_TEXT,
            self::TYPE_TABLE,
            self::TYPE_TEXT_AND_CHART,
            self::TYPE_CHART_AND_TEXT,
            self::TYPE_DIAGRAM,
            self::TYPE_CHART,
            self::TYPE_TEXT_AND_CLIP_ART,
            self::TYPE_CLIP_ART_AND_TEXT,
            self::TYPE_TITLE_ONLY,
            self::TYPE_BLANK,
            self::TYPE_TEXT_AND_OBJECT,
            self::TYPE_OBJECT_AND_TEXT,
            self::TYPE_OBJECT,
            self::TYPE_TITLE_AND_OBJECT,
            self::TYPE_TEXT_AND_MEDIA,
            self::TYPE_MEDIA_AND_TEXT,
            self::TYPE_OBJECT_OVER_TEXT,
            self::TYPE_TEXT_OVER_OBJECT,
            self::TYPE_TEXT_AND_TWO_OBJECTS,
            self::TYPE_TWO_OBJECTS_AND_TEXT,
            self::TYPE_TWO_OBJECTS_OVER_TEXT,
            self::TYPE_FOUR_OBJECTS,
            self::TYPE_VERTICAL_TEXT,
            self::TYPE_CLIP_ART_AND_VERTICAL_TEXT,
            self::TYPE_VERTICAL_TITLE_AND_TEXT,
            self::TYPE_VERTICAL_TITLE_AND_TEXT_OVER_CHART,
            self::TYPE_TWO_OBJECTS,
            self::TYPE_OBJECT_AND_TWO_OBJECT,
            self::TYPE_TWO_OBJECTS_AND_OBJECT,
            self::TYPE_SECTION_HEADER,
            self::TYPE_TWO_TEXT_AND_TWO_OBJECTS,
            self::TYPE_TITLE_OBJECT_AND_CAPTION,
            self::TYPE_PICTURE_AND_CAPTION,
            self::TYPE_CUSTOM,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['masterSlide'] = isset($data['masterSlide']) ? $data['masterSlide'] : null;
        $this->container['dependingSlides'] = isset($data['dependingSlides']) ? $data['dependingSlides'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * @param string $name Name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $type Layout slide type.
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
     * Gets masterSlide
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getMasterSlide()
    {
        return $this->container['masterSlide'];
    }

    /**
     * Sets masterSlide
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $masterSlide Master slide link.
     *
     * @return $this
     */
    public function setMasterSlide($masterSlide)
    {
        $this->container['masterSlide'] = $masterSlide;

        return $this;
    }

    /**
     * Gets dependingSlides
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[]
     */
    public function getDependingSlides()
    {
        return $this->container['dependingSlides'];
    }

    /**
     * Sets dependingSlides
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri[] $dependingSlides List of depending slides.
     *
     * @return $this
     */
    public function setDependingSlides($dependingSlides)
    {
        $this->container['dependingSlides'] = $dependingSlides;

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


