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
 * AudioFrame Class Doc Comment
 *
 * @category Class
 * @description Represents AudioFrame resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudioFrame extends GeometryShape 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AudioFrame';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'audio_cd_end_track' => 'int',
        'audio_cd_end_track_time' => 'int',
        'audio_cd_start_track' => 'int',
        'audio_cd_start_track_time' => 'int',
        'embedded' => 'bool',
        'hide_at_showing' => 'bool',
        'play_loop_mode' => 'bool',
        'play_mode' => 'string',
        'volume' => 'string',
        'base64_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audio_cd_end_track' => 'int32',
        'audio_cd_end_track_time' => 'int32',
        'audio_cd_start_track' => 'int32',
        'audio_cd_start_track_time' => 'int32',
        'embedded' => null,
        'hide_at_showing' => null,
        'play_loop_mode' => null,
        'play_mode' => null,
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
        'audio_cd_end_track' => 'AudioCdEndTrack',
        'audio_cd_end_track_time' => 'AudioCdEndTrackTime',
        'audio_cd_start_track' => 'AudioCdStartTrack',
        'audio_cd_start_track_time' => 'AudioCdStartTrackTime',
        'embedded' => 'Embedded',
        'hide_at_showing' => 'HideAtShowing',
        'play_loop_mode' => 'PlayLoopMode',
        'play_mode' => 'PlayMode',
        'volume' => 'Volume',
        'base64_data' => 'Base64Data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_cd_end_track' => 'setAudioCdEndTrack',
        'audio_cd_end_track_time' => 'setAudioCdEndTrackTime',
        'audio_cd_start_track' => 'setAudioCdStartTrack',
        'audio_cd_start_track_time' => 'setAudioCdStartTrackTime',
        'embedded' => 'setEmbedded',
        'hide_at_showing' => 'setHideAtShowing',
        'play_loop_mode' => 'setPlayLoopMode',
        'play_mode' => 'setPlayMode',
        'volume' => 'setVolume',
        'base64_data' => 'setBase64Data'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_cd_end_track' => 'getAudioCdEndTrack',
        'audio_cd_end_track_time' => 'getAudioCdEndTrackTime',
        'audio_cd_start_track' => 'getAudioCdStartTrack',
        'audio_cd_start_track_time' => 'getAudioCdStartTrackTime',
        'embedded' => 'getEmbedded',
        'hide_at_showing' => 'getHideAtShowing',
        'play_loop_mode' => 'getPlayLoopMode',
        'play_mode' => 'getPlayMode',
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

        $this->container['audio_cd_end_track'] = isset($data['audio_cd_end_track']) ? $data['audio_cd_end_track'] : null;
        $this->container['audio_cd_end_track_time'] = isset($data['audio_cd_end_track_time']) ? $data['audio_cd_end_track_time'] : null;
        $this->container['audio_cd_start_track'] = isset($data['audio_cd_start_track']) ? $data['audio_cd_start_track'] : null;
        $this->container['audio_cd_start_track_time'] = isset($data['audio_cd_start_track_time']) ? $data['audio_cd_start_track_time'] : null;
        $this->container['embedded'] = isset($data['embedded']) ? $data['embedded'] : null;
        $this->container['hide_at_showing'] = isset($data['hide_at_showing']) ? $data['hide_at_showing'] : null;
        $this->container['play_loop_mode'] = isset($data['play_loop_mode']) ? $data['play_loop_mode'] : null;
        $this->container['play_mode'] = isset($data['play_mode']) ? $data['play_mode'] : null;
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
     * Gets audio_cd_end_track
     *
     * @return int
     */
    public function getAudioCdEndTrack()
    {
        return $this->container['audio_cd_end_track'];
    }

    /**
     * Sets audio_cd_end_track
     *
     * @param int $audio_cd_end_track Returns or sets a last track index.
     *
     * @return $this
     */
    public function setAudioCdEndTrack($audio_cd_end_track)
    {
        $this->container['audio_cd_end_track'] = $audio_cd_end_track;

        return $this;
    }

    /**
     * Gets audio_cd_end_track_time
     *
     * @return int
     */
    public function getAudioCdEndTrackTime()
    {
        return $this->container['audio_cd_end_track_time'];
    }

    /**
     * Sets audio_cd_end_track_time
     *
     * @param int $audio_cd_end_track_time Returns or sets a last track time.
     *
     * @return $this
     */
    public function setAudioCdEndTrackTime($audio_cd_end_track_time)
    {
        $this->container['audio_cd_end_track_time'] = $audio_cd_end_track_time;

        return $this;
    }

    /**
     * Gets audio_cd_start_track
     *
     * @return int
     */
    public function getAudioCdStartTrack()
    {
        return $this->container['audio_cd_start_track'];
    }

    /**
     * Sets audio_cd_start_track
     *
     * @param int $audio_cd_start_track Returns or sets a start track index.
     *
     * @return $this
     */
    public function setAudioCdStartTrack($audio_cd_start_track)
    {
        $this->container['audio_cd_start_track'] = $audio_cd_start_track;

        return $this;
    }

    /**
     * Gets audio_cd_start_track_time
     *
     * @return int
     */
    public function getAudioCdStartTrackTime()
    {
        return $this->container['audio_cd_start_track_time'];
    }

    /**
     * Sets audio_cd_start_track_time
     *
     * @param int $audio_cd_start_track_time Returns or sets a start track time.
     *
     * @return $this
     */
    public function setAudioCdStartTrackTime($audio_cd_start_track_time)
    {
        $this->container['audio_cd_start_track_time'] = $audio_cd_start_track_time;

        return $this;
    }

    /**
     * Gets embedded
     *
     * @return bool
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param bool $embedded Determines whether a sound is embedded to a presentation.
     *
     * @return $this
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

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
     * @param bool $hide_at_showing Determines whether an AudioFrame is hidden.
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
     * @param bool $play_loop_mode Determines whether an audio is looped.
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
     * @param string $play_mode Returns or sets the audio play mode.
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
     * @param string $base64_data Audio data encoded in base64.
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


