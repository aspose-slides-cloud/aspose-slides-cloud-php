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


use \ArrayAccess;
use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * Hyperlink Class Doc Comment
 *
 * @category Class
 * @description Hyperlink
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Hyperlink implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hyperlink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isDisabled' => 'bool',
        'actionType' => 'string',
        'externalUrl' => 'string',
        'targetSlideIndex' => 'int',
        'targetFrame' => 'string',
        'tooltip' => 'string',
        'history' => 'bool',
        'highlightClick' => 'bool',
        'stopSoundOnClick' => 'bool',
        'colorSource' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isDisabled' => null,
        'actionType' => null,
        'externalUrl' => null,
        'targetSlideIndex' => 'int32',
        'targetFrame' => null,
        'tooltip' => null,
        'history' => null,
        'highlightClick' => null,
        'stopSoundOnClick' => null,
        'colorSource' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'isDisabled' => 'IsDisabled',
        'actionType' => 'ActionType',
        'externalUrl' => 'ExternalUrl',
        'targetSlideIndex' => 'TargetSlideIndex',
        'targetFrame' => 'TargetFrame',
        'tooltip' => 'Tooltip',
        'history' => 'History',
        'highlightClick' => 'HighlightClick',
        'stopSoundOnClick' => 'StopSoundOnClick',
        'colorSource' => 'ColorSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isDisabled' => 'setIsDisabled',
        'actionType' => 'setActionType',
        'externalUrl' => 'setExternalUrl',
        'targetSlideIndex' => 'setTargetSlideIndex',
        'targetFrame' => 'setTargetFrame',
        'tooltip' => 'setTooltip',
        'history' => 'setHistory',
        'highlightClick' => 'setHighlightClick',
        'stopSoundOnClick' => 'setStopSoundOnClick',
        'colorSource' => 'setColorSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isDisabled' => 'getIsDisabled',
        'actionType' => 'getActionType',
        'externalUrl' => 'getExternalUrl',
        'targetSlideIndex' => 'getTargetSlideIndex',
        'targetFrame' => 'getTargetFrame',
        'tooltip' => 'getTooltip',
        'history' => 'getHistory',
        'highlightClick' => 'getHighlightClick',
        'stopSoundOnClick' => 'getStopSoundOnClick',
        'colorSource' => 'getColorSource'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const ACTION_TYPE_NO_ACTION = 'NoAction';
    const ACTION_TYPE_HYPERLINK = 'Hyperlink';
    const ACTION_TYPE_JUMP_FIRST_SLIDE = 'JumpFirstSlide';
    const ACTION_TYPE_JUMP_PREVIOUS_SLIDE = 'JumpPreviousSlide';
    const ACTION_TYPE_JUMP_NEXT_SLIDE = 'JumpNextSlide';
    const ACTION_TYPE_JUMP_LAST_SLIDE = 'JumpLastSlide';
    const ACTION_TYPE_JUMP_END_SHOW = 'JumpEndShow';
    const ACTION_TYPE_JUMP_LAST_VIEWED_SLIDE = 'JumpLastViewedSlide';
    const ACTION_TYPE_JUMP_SPECIFIC_SLIDE = 'JumpSpecificSlide';
    const ACTION_TYPE_START_CUSTOM_SLIDE_SHOW = 'StartCustomSlideShow';
    const ACTION_TYPE_OPEN_FILE = 'OpenFile';
    const ACTION_TYPE_OPEN_PRESENTATION = 'OpenPresentation';
    const ACTION_TYPE_START_STOP_MEDIA = 'StartStopMedia';
    const ACTION_TYPE_START_MACRO = 'StartMacro';
    const ACTION_TYPE_START_PROGRAM = 'StartProgram';
    const ACTION_TYPE_UNKNOWN = 'Unknown';
    const COLOR_SOURCE_STYLES = 'Styles';
    const COLOR_SOURCE_PORTION_FORMAT = 'PortionFormat';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_NO_ACTION,
            self::ACTION_TYPE_HYPERLINK,
            self::ACTION_TYPE_JUMP_FIRST_SLIDE,
            self::ACTION_TYPE_JUMP_PREVIOUS_SLIDE,
            self::ACTION_TYPE_JUMP_NEXT_SLIDE,
            self::ACTION_TYPE_JUMP_LAST_SLIDE,
            self::ACTION_TYPE_JUMP_END_SHOW,
            self::ACTION_TYPE_JUMP_LAST_VIEWED_SLIDE,
            self::ACTION_TYPE_JUMP_SPECIFIC_SLIDE,
            self::ACTION_TYPE_START_CUSTOM_SLIDE_SHOW,
            self::ACTION_TYPE_OPEN_FILE,
            self::ACTION_TYPE_OPEN_PRESENTATION,
            self::ACTION_TYPE_START_STOP_MEDIA,
            self::ACTION_TYPE_START_MACRO,
            self::ACTION_TYPE_START_PROGRAM,
            self::ACTION_TYPE_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorSourceAllowableValues()
    {
        return [
            self::COLOR_SOURCE_STYLES,
            self::COLOR_SOURCE_PORTION_FORMAT,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['isDisabled'] = isset($data['isDisabled']) ? $data['isDisabled'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['externalUrl'] = isset($data['externalUrl']) ? $data['externalUrl'] : null;
        $this->container['targetSlideIndex'] = isset($data['targetSlideIndex']) ? $data['targetSlideIndex'] : null;
        $this->container['targetFrame'] = isset($data['targetFrame']) ? $data['targetFrame'] : null;
        $this->container['tooltip'] = isset($data['tooltip']) ? $data['tooltip'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
        $this->container['highlightClick'] = isset($data['highlightClick']) ? $data['highlightClick'] : null;
        $this->container['stopSoundOnClick'] = isset($data['stopSoundOnClick']) ? $data['stopSoundOnClick'] : null;
        $this->container['colorSource'] = isset($data['colorSource']) ? $data['colorSource'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['actionType'] === null) {
            $invalidProperties[] = "'actionType' can't be null";
        }
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!in_array($this->container['actionType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getColorSourceAllowableValues();
        if (!in_array($this->container['colorSource'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'colorSource', must be one of '%s'",
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

        if ($this->container['actionType'] === null) {
            return false;
        }
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!in_array($this->container['actionType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getColorSourceAllowableValues();
        if (!in_array($this->container['colorSource'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets isDisabled
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
     * Sets isDisabled
     *
     * @param bool $isDisabled If true Hypelink is not applied.
     *
     * @return $this
     */
    public function setIsDisabled($isDisabled)
    {
        $this->container['isDisabled'] = $isDisabled;

        return $this;
    }

    /**
     * Gets actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param string $actionType Type of HyperLink action
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $allowedValues = $this->getActionTypeAllowableValues();


        if (is_numeric($actionType)) {
            if ($actionType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'actionType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $actionType = $allowedValues[$actionType];
            }
        } else {
            if (!in_array($actionType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'actionType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets externalUrl
     *
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->container['externalUrl'];
    }

    /**
     * Sets externalUrl
     *
     * @param string $externalUrl Specifies the external URL
     *
     * @return $this
     */
    public function setExternalUrl($externalUrl)
    {
        $this->container['externalUrl'] = $externalUrl;

        return $this;
    }

    /**
     * Gets targetSlideIndex
     *
     * @return int
     */
    public function getTargetSlideIndex()
    {
        return $this->container['targetSlideIndex'];
    }

    /**
     * Sets targetSlideIndex
     *
     * @param int $targetSlideIndex Index of the target slide
     *
     * @return $this
     */
    public function setTargetSlideIndex($targetSlideIndex)
    {
        $this->container['targetSlideIndex'] = $targetSlideIndex;

        return $this;
    }

    /**
     * Gets targetFrame
     *
     * @return string
     */
    public function getTargetFrame()
    {
        return $this->container['targetFrame'];
    }

    /**
     * Sets targetFrame
     *
     * @param string $targetFrame Target frame
     *
     * @return $this
     */
    public function setTargetFrame($targetFrame)
    {
        $this->container['targetFrame'] = $targetFrame;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return string
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param string $tooltip Hyperlink tooltip
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets history
     *
     * @return bool
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param bool $history Makes hyperlink viewed when it is invoked.
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

        return $this;
    }

    /**
     * Gets highlightClick
     *
     * @return bool
     */
    public function getHighlightClick()
    {
        return $this->container['highlightClick'];
    }

    /**
     * Sets highlightClick
     *
     * @param bool $highlightClick Determines whether the hyperlink should be highlighted on click.
     *
     * @return $this
     */
    public function setHighlightClick($highlightClick)
    {
        $this->container['highlightClick'] = $highlightClick;

        return $this;
    }

    /**
     * Gets stopSoundOnClick
     *
     * @return bool
     */
    public function getStopSoundOnClick()
    {
        return $this->container['stopSoundOnClick'];
    }

    /**
     * Sets stopSoundOnClick
     *
     * @param bool $stopSoundOnClick Determines whether the sound should be stopped on hyperlink click
     *
     * @return $this
     */
    public function setStopSoundOnClick($stopSoundOnClick)
    {
        $this->container['stopSoundOnClick'] = $stopSoundOnClick;

        return $this;
    }

    /**
     * Gets colorSource
     *
     * @return string
     */
    public function getColorSource()
    {
        return $this->container['colorSource'];
    }

    /**
     * Sets colorSource
     *
     * @param string $colorSource Represents the source of hyperlink color
     *
     * @return $this
     */
    public function setColorSource($colorSource)
    {
        $allowedValues = $this->getColorSourceAllowableValues();


        if (is_numeric($colorSource)) {
            if ($colorSource >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'colorSource', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $colorSource = $allowedValues[$colorSource];
            }
        } else {
            if (!is_null($colorSource) && !in_array($colorSource, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'colorSource', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['colorSource'] = $colorSource;

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


