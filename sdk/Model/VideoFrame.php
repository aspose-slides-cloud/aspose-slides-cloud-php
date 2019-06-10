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
 * VideoFrame Class Doc Comment
 *
 * @category Class
 * @description Represents VideoFrame resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoFrame extends GeometryShape 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoFrame';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'full_screen_mode' => 'bool',
        'hide_at_showing' => 'bool',
        'play_loop_mode' => 'bool',
        'play_mode' => 'string',
        'rewind_video' => 'bool',
        'volume' => 'string',
        'base64_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'full_screen_mode' => null,
        'hide_at_showing' => null,
        'play_loop_mode' => null,
        'play_mode' => null,
        'rewind_video' => null,
        'volume' => null,
        'base64_data' => null
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
        'full_screen_mode' => 'FullScreenMode',
        'hide_at_showing' => 'HideAtShowing',
        'play_loop_mode' => 'PlayLoopMode',
        'play_mode' => 'PlayMode',
        'rewind_video' => 'RewindVideo',
        'volume' => 'Volume',
        'base64_data' => 'Base64Data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'full_screen_mode' => 'setFullScreenMode',
        'hide_at_showing' => 'setHideAtShowing',
        'play_loop_mode' => 'setPlayLoopMode',
        'play_mode' => 'setPlayMode',
        'rewind_video' => 'setRewindVideo',
        'volume' => 'setVolume',
        'base64_data' => 'setBase64Data'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'full_screen_mode' => 'getFullScreenMode',
        'hide_at_showing' => 'getHideAtShowing',
        'play_loop_mode' => 'getPlayLoopMode',
        'play_mode' => 'getPlayMode',
        'rewind_video' => 'getRewindVideo',
        'volume' => 'getVolume',
        'base64_data' => 'getBase64Data'
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

    const PLAY_MODE_AUTO = 'Auto';
    const PLAY_MODE_ON_CLICK = 'OnClick';
    const PLAY_MODE_ALL_SLIDES = 'AllSlides';
    const PLAY_MODE_MIXED = 'Mixed';
    const VOLUME_MUTE = 'Mute';
    const VOLUME_LOW = 'Low';
    const VOLUME_MEDIUM = 'Medium';
    const VOLUME_LOUD = 'Loud';
    const VOLUME_MIXED = 'Mixed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlayModeAllowableValues()
    {
        return [
            self::PLAY_MODE_AUTO,
            self::PLAY_MODE_ON_CLICK,
            self::PLAY_MODE_ALL_SLIDES,
            self::PLAY_MODE_MIXED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVolumeAllowableValues()
    {
        return [
            self::VOLUME_MUTE,
            self::VOLUME_LOW,
            self::VOLUME_MEDIUM,
            self::VOLUME_LOUD,
            self::VOLUME_MIXED,
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

        $this->container['full_screen_mode'] = isset($data['full_screen_mode']) ? $data['full_screen_mode'] : null;
        $this->container['hide_at_showing'] = isset($data['hide_at_showing']) ? $data['hide_at_showing'] : null;
        $this->container['play_loop_mode'] = isset($data['play_loop_mode']) ? $data['play_loop_mode'] : null;
        $this->container['play_mode'] = isset($data['play_mode']) ? $data['play_mode'] : null;
        $this->container['rewind_video'] = isset($data['rewind_video']) ? $data['rewind_video'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['base64_data'] = isset($data['base64_data']) ? $data['base64_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getPlayModeAllowableValues();
        if (!in_array($this->container['play_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'play_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVolumeAllowableValues();
        if (!in_array($this->container['volume'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'volume', must be one of '%s'",
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

        $allowedValues = $this->getPlayModeAllowableValues();
        if (!in_array($this->container['play_mode'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVolumeAllowableValues();
        if (!in_array($this->container['volume'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets full_screen_mode
     *
     * @return bool
     */
    public function getFullScreenMode()
    {
        return $this->container['full_screen_mode'];
    }

    /**
     * Sets full_screen_mode
     *
     * @param bool $full_screen_mode Determines whether a video is shown in full screen mode.
     *
     * @return $this
     */
    public function setFullScreenMode($full_screen_mode)
    {
        $this->container['full_screen_mode'] = $full_screen_mode;

        return $this;
    }

    /**
     * Gets hide_at_showing
     *
     * @return bool
     */
    public function getHideAtShowing()
    {
        return $this->container['hide_at_showing'];
    }

    /**
     * Sets hide_at_showing
     *
     * @param bool $hide_at_showing Determines whether a VideoFrame is hidden.
     *
     * @return $this
     */
    public function setHideAtShowing($hide_at_showing)
    {
        $this->container['hide_at_showing'] = $hide_at_showing;

        return $this;
    }

    /**
     * Gets play_loop_mode
     *
     * @return bool
     */
    public function getPlayLoopMode()
    {
        return $this->container['play_loop_mode'];
    }

    /**
     * Sets play_loop_mode
     *
     * @param bool $play_loop_mode Determines whether a video is looped.
     *
     * @return $this
     */
    public function setPlayLoopMode($play_loop_mode)
    {
        $this->container['play_loop_mode'] = $play_loop_mode;

        return $this;
    }

    /**
     * Gets play_mode
     *
     * @return string
     */
    public function getPlayMode()
    {
        return $this->container['play_mode'];
    }

    /**
     * Sets play_mode
     *
     * @param string $play_mode Returns or sets the video play mode.
     *
     * @return $this
     */
    public function setPlayMode($play_mode)
    {
        $allowedValues = $this->getPlayModeAllowableValues();
        if (!is_null($play_mode) && !in_array($play_mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'play_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['play_mode'] = $play_mode;

        return $this;
    }

    /**
     * Gets rewind_video
     *
     * @return bool
     */
    public function getRewindVideo()
    {
        return $this->container['rewind_video'];
    }

    /**
     * Sets rewind_video
     *
     * @param bool $rewind_video Determines whether a video is automatically rewinded to start as soon as the movie has finished playing
     *
     * @return $this
     */
    public function setRewindVideo($rewind_video)
    {
        $this->container['rewind_video'] = $rewind_video;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param string $volume Returns or sets the audio volume.
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $allowedValues = $this->getVolumeAllowableValues();
        if (!is_null($volume) && !in_array($volume, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'volume', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets base64_data
     *
     * @return string
     */
    public function getBase64Data()
    {
        return $this->container['base64_data'];
    }

    /**
     * Sets base64_data
     *
     * @param string $base64_data Video data encoded in base64.
     *
     * @return $this
     */
    public function setBase64Data($base64_data)
    {
        $this->container['base64_data'] = $base64_data;

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


