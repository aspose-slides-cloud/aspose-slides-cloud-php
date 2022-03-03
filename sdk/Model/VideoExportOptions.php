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
 * VideoExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in an video format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoExportOptions extends ExportOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transitionDuration' => 'int',
        'videoResolutionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transitionDuration' => 'int32',
        'videoResolutionType' => null
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
        'transitionDuration' => 'TransitionDuration',
        'videoResolutionType' => 'VideoResolutionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transitionDuration' => 'setTransitionDuration',
        'videoResolutionType' => 'setVideoResolutionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transitionDuration' => 'getTransitionDuration',
        'videoResolutionType' => 'getVideoResolutionType'
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

    const VIDEO_RESOLUTION_TYPE_FULL_HD = 'FullHD';
    const VIDEO_RESOLUTION_TYPE_SD = 'SD';
    const VIDEO_RESOLUTION_TYPE_HD = 'HD';
    const VIDEO_RESOLUTION_TYPE_QHD = 'QHD';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoResolutionTypeAllowableValues()
    {
        return [
            self::VIDEO_RESOLUTION_TYPE_FULL_HD,
            self::VIDEO_RESOLUTION_TYPE_SD,
            self::VIDEO_RESOLUTION_TYPE_HD,
            self::VIDEO_RESOLUTION_TYPE_QHD,
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

        $this->container['transitionDuration'] = isset($data['transitionDuration']) ? $data['transitionDuration'] : null;
        $this->container['videoResolutionType'] = isset($data['videoResolutionType']) ? $data['videoResolutionType'] : null;
        $this->container['format'] = 'mpeg4';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getVideoResolutionTypeAllowableValues();
        if (!in_array($this->container['videoResolutionType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'videoResolutionType', must be one of '%s'",
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

        $allowedValues = $this->getVideoResolutionTypeAllowableValues();
        if (!in_array($this->container['videoResolutionType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets transitionDuration
     *
     * @return int
     */
    public function getTransitionDuration()
    {
        return $this->container['transitionDuration'];
    }

    /**
     * Sets transitionDuration
     *
     * @param int $transitionDuration Transition duration.
     *
     * @return $this
     */
    public function setTransitionDuration($transitionDuration)
    {
        $this->container['transitionDuration'] = $transitionDuration;

        return $this;
    }

    /**
     * Gets videoResolutionType
     *
     * @return string
     */
    public function getVideoResolutionType()
    {
        return $this->container['videoResolutionType'];
    }

    /**
     * Sets videoResolutionType
     *
     * @param string $videoResolutionType Video resolution type
     *
     * @return $this
     */
    public function setVideoResolutionType($videoResolutionType)
    {
        $allowedValues = $this->getVideoResolutionTypeAllowableValues();


        if (is_numeric($videoResolutionType)) {
            if ($videoResolutionType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'videoResolutionType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $videoResolutionType = $allowedValues[$videoResolutionType];
            }
        } else {
            if (!is_null($videoResolutionType) && !in_array($videoResolutionType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'videoResolutionType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['videoResolutionType'] = $videoResolutionType;

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


