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
        'audioCdEndTrack' => 'int',
        'audioCdEndTrackTime' => 'int',
        'audioCdStartTrack' => 'int',
        'audioCdStartTrackTime' => 'int',
        'embedded' => 'bool',
        'hideAtShowing' => 'bool',
        'playLoopMode' => 'bool',
        'playMode' => 'string',
        'volume' => 'string',
        'base64Data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audioCdEndTrack' => 'int32',
        'audioCdEndTrackTime' => 'int32',
        'audioCdStartTrack' => 'int32',
        'audioCdStartTrackTime' => 'int32',
        'embedded' => null,
        'hideAtShowing' => null,
        'playLoopMode' => null,
        'playMode' => null,
        'volume' => null,
        'base64Data' => null
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
        'audioCdEndTrack' => 'AudioCdEndTrack',
        'audioCdEndTrackTime' => 'AudioCdEndTrackTime',
        'audioCdStartTrack' => 'AudioCdStartTrack',
        'audioCdStartTrackTime' => 'AudioCdStartTrackTime',
        'embedded' => 'Embedded',
        'hideAtShowing' => 'HideAtShowing',
        'playLoopMode' => 'PlayLoopMode',
        'playMode' => 'PlayMode',
        'volume' => 'Volume',
        'base64Data' => 'Base64Data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audioCdEndTrack' => 'setAudioCdEndTrack',
        'audioCdEndTrackTime' => 'setAudioCdEndTrackTime',
        'audioCdStartTrack' => 'setAudioCdStartTrack',
        'audioCdStartTrackTime' => 'setAudioCdStartTrackTime',
        'embedded' => 'setEmbedded',
        'hideAtShowing' => 'setHideAtShowing',
        'playLoopMode' => 'setPlayLoopMode',
        'playMode' => 'setPlayMode',
        'volume' => 'setVolume',
        'base64Data' => 'setBase64Data'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audioCdEndTrack' => 'getAudioCdEndTrack',
        'audioCdEndTrackTime' => 'getAudioCdEndTrackTime',
        'audioCdStartTrack' => 'getAudioCdStartTrack',
        'audioCdStartTrackTime' => 'getAudioCdStartTrackTime',
        'embedded' => 'getEmbedded',
        'hideAtShowing' => 'getHideAtShowing',
        'playLoopMode' => 'getPlayLoopMode',
        'playMode' => 'getPlayMode',
        'volume' => 'getVolume',
        'base64Data' => 'getBase64Data'
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

        $this->container['audioCdEndTrack'] = isset($data['audioCdEndTrack']) ? $data['audioCdEndTrack'] : null;
        $this->container['audioCdEndTrackTime'] = isset($data['audioCdEndTrackTime']) ? $data['audioCdEndTrackTime'] : null;
        $this->container['audioCdStartTrack'] = isset($data['audioCdStartTrack']) ? $data['audioCdStartTrack'] : null;
        $this->container['audioCdStartTrackTime'] = isset($data['audioCdStartTrackTime']) ? $data['audioCdStartTrackTime'] : null;
        $this->container['embedded'] = isset($data['embedded']) ? $data['embedded'] : null;
        $this->container['hideAtShowing'] = isset($data['hideAtShowing']) ? $data['hideAtShowing'] : null;
        $this->container['playLoopMode'] = isset($data['playLoopMode']) ? $data['playLoopMode'] : null;
        $this->container['playMode'] = isset($data['playMode']) ? $data['playMode'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['base64Data'] = isset($data['base64Data']) ? $data['base64Data'] : null;
        $this->container['type'] = 'AudioFrame';
        
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
        if (!in_array($this->container['playMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'playMode', must be one of '%s'",
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
        if (!in_array($this->container['playMode'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVolumeAllowableValues();
        if (!in_array($this->container['volume'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets audioCdEndTrack
     *
     * @return int
     */
    public function getAudioCdEndTrack()
    {
        return $this->container['audioCdEndTrack'];
    }

    /**
     * Sets audioCdEndTrack
     *
     * @param int $audioCdEndTrack Returns or sets a last track index.
     *
     * @return $this
     */
    public function setAudioCdEndTrack($audioCdEndTrack)
    {
        $this->container['audioCdEndTrack'] = $audioCdEndTrack;

        return $this;
    }

    /**
     * Gets audioCdEndTrackTime
     *
     * @return int
     */
    public function getAudioCdEndTrackTime()
    {
        return $this->container['audioCdEndTrackTime'];
    }

    /**
     * Sets audioCdEndTrackTime
     *
     * @param int $audioCdEndTrackTime Returns or sets a last track time.
     *
     * @return $this
     */
    public function setAudioCdEndTrackTime($audioCdEndTrackTime)
    {
        $this->container['audioCdEndTrackTime'] = $audioCdEndTrackTime;

        return $this;
    }

    /**
     * Gets audioCdStartTrack
     *
     * @return int
     */
    public function getAudioCdStartTrack()
    {
        return $this->container['audioCdStartTrack'];
    }

    /**
     * Sets audioCdStartTrack
     *
     * @param int $audioCdStartTrack Returns or sets a start track index.
     *
     * @return $this
     */
    public function setAudioCdStartTrack($audioCdStartTrack)
    {
        $this->container['audioCdStartTrack'] = $audioCdStartTrack;

        return $this;
    }

    /**
     * Gets audioCdStartTrackTime
     *
     * @return int
     */
    public function getAudioCdStartTrackTime()
    {
        return $this->container['audioCdStartTrackTime'];
    }

    /**
     * Sets audioCdStartTrackTime
     *
     * @param int $audioCdStartTrackTime Returns or sets a start track time.
     *
     * @return $this
     */
    public function setAudioCdStartTrackTime($audioCdStartTrackTime)
    {
        $this->container['audioCdStartTrackTime'] = $audioCdStartTrackTime;

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
     * Gets hideAtShowing
     *
     * @return bool
     */
    public function getHideAtShowing()
    {
        return $this->container['hideAtShowing'];
    }

    /**
     * Sets hideAtShowing
     *
     * @param bool $hideAtShowing Determines whether an AudioFrame is hidden.
     *
     * @return $this
     */
    public function setHideAtShowing($hideAtShowing)
    {
        $this->container['hideAtShowing'] = $hideAtShowing;

        return $this;
    }

    /**
     * Gets playLoopMode
     *
     * @return bool
     */
    public function getPlayLoopMode()
    {
        return $this->container['playLoopMode'];
    }

    /**
     * Sets playLoopMode
     *
     * @param bool $playLoopMode Determines whether an audio is looped.
     *
     * @return $this
     */
    public function setPlayLoopMode($playLoopMode)
    {
        $this->container['playLoopMode'] = $playLoopMode;

        return $this;
    }

    /**
     * Gets playMode
     *
     * @return string
     */
    public function getPlayMode()
    {
        return $this->container['playMode'];
    }

    /**
     * Sets playMode
     *
     * @param string $playMode Returns or sets the audio play mode.
     *
     * @return $this
     */
    public function setPlayMode($playMode)
    {
        $allowedValues = $this->getPlayModeAllowableValues();


        if (is_numeric($playMode)) {
            if ($playMode >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'playMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $playMode = $allowedValues[$playMode];
            }
        } else {
            if (!is_null($playMode) && !in_array($playMode, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'playMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['playMode'] = $playMode;

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


        if (is_numeric($volume)) {
            if ($volume >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'volume', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $volume = $allowedValues[$volume];
            }
        } else {
            if (!is_null($volume) && !in_array($volume, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'volume', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets base64Data
     *
     * @return string
     */
    public function getBase64Data()
    {
        return $this->container['base64Data'];
    }

    /**
     * Sets base64Data
     *
     * @param string $base64Data Audio data encoded in base64.
     *
     * @return $this
     */
    public function setBase64Data($base64Data)
    {
        $this->container['base64Data'] = $base64Data;

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


