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
 * SlideShowProperties Class Doc Comment
 *
 * @category Class
 * @description Slide show properties.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SlideShowProperties extends ResourceBase 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SlideShowProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'loop' => 'bool',
        'startSlide' => 'int',
        'endSlide' => 'int',
        'penColor' => 'string',
        'showAnimation' => 'bool',
        'showNarration' => 'bool',
        'useTimings' => 'bool',
        'slideShowType' => 'string',
        'showScrollbar' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'loop' => null,
        'startSlide' => 'int32',
        'endSlide' => 'int32',
        'penColor' => null,
        'showAnimation' => null,
        'showNarration' => null,
        'useTimings' => null,
        'slideShowType' => null,
        'showScrollbar' => null
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
        'loop' => 'Loop',
        'startSlide' => 'StartSlide',
        'endSlide' => 'EndSlide',
        'penColor' => 'PenColor',
        'showAnimation' => 'ShowAnimation',
        'showNarration' => 'ShowNarration',
        'useTimings' => 'UseTimings',
        'slideShowType' => 'SlideShowType',
        'showScrollbar' => 'ShowScrollbar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'loop' => 'setLoop',
        'startSlide' => 'setStartSlide',
        'endSlide' => 'setEndSlide',
        'penColor' => 'setPenColor',
        'showAnimation' => 'setShowAnimation',
        'showNarration' => 'setShowNarration',
        'useTimings' => 'setUseTimings',
        'slideShowType' => 'setSlideShowType',
        'showScrollbar' => 'setShowScrollbar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'loop' => 'getLoop',
        'startSlide' => 'getStartSlide',
        'endSlide' => 'getEndSlide',
        'penColor' => 'getPenColor',
        'showAnimation' => 'getShowAnimation',
        'showNarration' => 'getShowNarration',
        'useTimings' => 'getUseTimings',
        'slideShowType' => 'getSlideShowType',
        'showScrollbar' => 'getShowScrollbar'
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

    const SLIDE_SHOW_TYPE_BROWSED_AT_KIOSK = 'BrowsedAtKiosk';
    const SLIDE_SHOW_TYPE_BROWSED_BY_INDIVIDUAL = 'BrowsedByIndividual';
    const SLIDE_SHOW_TYPE_PRESENTED_BY_SPEAKER = 'PresentedBySpeaker';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSlideShowTypeAllowableValues()
    {
        return [
            self::SLIDE_SHOW_TYPE_BROWSED_AT_KIOSK,
            self::SLIDE_SHOW_TYPE_BROWSED_BY_INDIVIDUAL,
            self::SLIDE_SHOW_TYPE_PRESENTED_BY_SPEAKER,
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

        $this->container['loop'] = isset($data['loop']) ? $data['loop'] : null;
        $this->container['startSlide'] = isset($data['startSlide']) ? $data['startSlide'] : null;
        $this->container['endSlide'] = isset($data['endSlide']) ? $data['endSlide'] : null;
        $this->container['penColor'] = isset($data['penColor']) ? $data['penColor'] : null;
        $this->container['showAnimation'] = isset($data['showAnimation']) ? $data['showAnimation'] : null;
        $this->container['showNarration'] = isset($data['showNarration']) ? $data['showNarration'] : null;
        $this->container['useTimings'] = isset($data['useTimings']) ? $data['useTimings'] : null;
        $this->container['slideShowType'] = isset($data['slideShowType']) ? $data['slideShowType'] : null;
        $this->container['showScrollbar'] = isset($data['showScrollbar']) ? $data['showScrollbar'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getSlideShowTypeAllowableValues();
        if (!in_array($this->container['slideShowType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'slideShowType', must be one of '%s'",
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

        $allowedValues = $this->getSlideShowTypeAllowableValues();
        if (!in_array($this->container['slideShowType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets loop
     *
     * @return bool
     */
    public function getLoop()
    {
        return $this->container['loop'];
    }

    /**
     * Sets loop
     *
     * @param bool $loop Loop slide show.
     *
     * @return $this
     */
    public function setLoop($loop)
    {
        $this->container['loop'] = $loop;

        return $this;
    }

    /**
     * Gets startSlide
     *
     * @return int
     */
    public function getStartSlide()
    {
        return $this->container['startSlide'];
    }

    /**
     * Sets startSlide
     *
     * @param int $startSlide Start slide in the slide show.
     *
     * @return $this
     */
    public function setStartSlide($startSlide)
    {
        $this->container['startSlide'] = $startSlide;

        return $this;
    }

    /**
     * Gets endSlide
     *
     * @return int
     */
    public function getEndSlide()
    {
        return $this->container['endSlide'];
    }

    /**
     * Sets endSlide
     *
     * @param int $endSlide End slides in the slide show.
     *
     * @return $this
     */
    public function setEndSlide($endSlide)
    {
        $this->container['endSlide'] = $endSlide;

        return $this;
    }

    /**
     * Gets penColor
     *
     * @return string
     */
    public function getPenColor()
    {
        return $this->container['penColor'];
    }

    /**
     * Sets penColor
     *
     * @param string $penColor Pen color.
     *
     * @return $this
     */
    public function setPenColor($penColor)
    {
        $this->container['penColor'] = $penColor;

        return $this;
    }

    /**
     * Gets showAnimation
     *
     * @return bool
     */
    public function getShowAnimation()
    {
        return $this->container['showAnimation'];
    }

    /**
     * Sets showAnimation
     *
     * @param bool $showAnimation Show animation.
     *
     * @return $this
     */
    public function setShowAnimation($showAnimation)
    {
        $this->container['showAnimation'] = $showAnimation;

        return $this;
    }

    /**
     * Gets showNarration
     *
     * @return bool
     */
    public function getShowNarration()
    {
        return $this->container['showNarration'];
    }

    /**
     * Sets showNarration
     *
     * @param bool $showNarration Show narrration.
     *
     * @return $this
     */
    public function setShowNarration($showNarration)
    {
        $this->container['showNarration'] = $showNarration;

        return $this;
    }

    /**
     * Gets useTimings
     *
     * @return bool
     */
    public function getUseTimings()
    {
        return $this->container['useTimings'];
    }

    /**
     * Sets useTimings
     *
     * @param bool $useTimings Use timings.
     *
     * @return $this
     */
    public function setUseTimings($useTimings)
    {
        $this->container['useTimings'] = $useTimings;

        return $this;
    }

    /**
     * Gets slideShowType
     *
     * @return string
     */
    public function getSlideShowType()
    {
        return $this->container['slideShowType'];
    }

    /**
     * Sets slideShowType
     *
     * @param string $slideShowType Slide show type.
     *
     * @return $this
     */
    public function setSlideShowType($slideShowType)
    {
        $allowedValues = $this->getSlideShowTypeAllowableValues();


        if (is_numeric($slideShowType)) {
            if ($slideShowType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'slideShowType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $slideShowType = $allowedValues[$slideShowType];
            }
        } else {
            if (!is_null($slideShowType) && !in_array($slideShowType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'slideShowType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['slideShowType'] = $slideShowType;

        return $this;
    }

    /**
     * Gets showScrollbar
     *
     * @return bool
     */
    public function getShowScrollbar()
    {
        return $this->container['showScrollbar'];
    }

    /**
     * Sets showScrollbar
     *
     * @param bool $showScrollbar Show scroll bar. Applied with BrowsedByIndividual slide show type.
     *
     * @return $this
     */
    public function setShowScrollbar($showScrollbar)
    {
        $this->container['showScrollbar'] = $showScrollbar;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
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
    public function offsetGet($offset) : mixed
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
    public function offsetSet($offset, $value) : void
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
    public function offsetUnset($offset) : void
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


