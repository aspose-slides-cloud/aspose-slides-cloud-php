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
 * ZoomObject Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZoomObject extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZoomObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imageType' => 'string',
        'returnToParent' => 'bool',
        'showBackground' => 'bool',
        'image' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'transitionDuration' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imageType' => null,
        'returnToParent' => null,
        'showBackground' => null,
        'image' => null,
        'transitionDuration' => 'double'
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
        'imageType' => 'ImageType',
        'returnToParent' => 'ReturnToParent',
        'showBackground' => 'ShowBackground',
        'image' => 'Image',
        'transitionDuration' => 'TransitionDuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imageType' => 'setImageType',
        'returnToParent' => 'setReturnToParent',
        'showBackground' => 'setShowBackground',
        'image' => 'setImage',
        'transitionDuration' => 'setTransitionDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imageType' => 'getImageType',
        'returnToParent' => 'getReturnToParent',
        'showBackground' => 'getShowBackground',
        'image' => 'getImage',
        'transitionDuration' => 'getTransitionDuration'
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

    const IMAGE_TYPE_PREVIEW = 'Preview';
    const IMAGE_TYPE_COVER = 'Cover';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageTypeAllowableValues()
    {
        return [
            self::IMAGE_TYPE_PREVIEW,
            self::IMAGE_TYPE_COVER,
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

        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['returnToParent'] = isset($data['returnToParent']) ? $data['returnToParent'] : null;
        $this->container['showBackground'] = isset($data['showBackground']) ? $data['showBackground'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['transitionDuration'] = isset($data['transitionDuration']) ? $data['transitionDuration'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getImageTypeAllowableValues();
        if (!in_array($this->container['imageType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'imageType', must be one of '%s'",
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

        $allowedValues = $this->getImageTypeAllowableValues();
        if (!in_array($this->container['imageType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets imageType
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
     * Sets imageType
     *
     * @param string $imageType Image type of a zoom object.
     *
     * @return $this
     */
    public function setImageType($imageType)
    {
        $allowedValues = $this->getImageTypeAllowableValues();


        if (is_numeric($imageType)) {
            if ($imageType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'imageType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $imageType = $allowedValues[$imageType];
            }
        } else {
            if (!is_null($imageType) && !in_array($imageType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'imageType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['imageType'] = $imageType;

        return $this;
    }

    /**
     * Gets returnToParent
     *
     * @return bool
     */
    public function getReturnToParent()
    {
        return $this->container['returnToParent'];
    }

    /**
     * Sets returnToParent
     *
     * @param bool $returnToParent Navigation behavior in slideshow.
     *
     * @return $this
     */
    public function setReturnToParent($returnToParent)
    {
        $this->container['returnToParent'] = $returnToParent;

        return $this;
    }

    /**
     * Gets showBackground
     *
     * @return bool
     */
    public function getShowBackground()
    {
        return $this->container['showBackground'];
    }

    /**
     * Sets showBackground
     *
     * @param bool $showBackground Specifies whether the Zoom will use the background of the destination slide.
     *
     * @return $this
     */
    public function setShowBackground($showBackground)
    {
        $this->container['showBackground'] = $showBackground;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $image Internal image link for zoom object
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets transitionDuration
     *
     * @return double
     */
    public function getTransitionDuration()
    {
        return $this->container['transitionDuration'];
    }

    /**
     * Sets transitionDuration
     *
     * @param double $transitionDuration Duration of the transition between Zoom and slide.
     *
     * @return $this
     */
    public function setTransitionDuration($transitionDuration)
    {
        $this->container['transitionDuration'] = $transitionDuration;

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


