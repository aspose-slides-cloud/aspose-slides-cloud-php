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
 * HandoutLayoutingOptions Class Doc Comment
 *
 * @category Class
 * @description Handout layouting options
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HandoutLayoutingOptions extends SlidesLayoutOptions 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HandoutLayoutingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handout' => 'string',
        'printSlideNumbers' => 'bool',
        'printComments' => 'bool',
        'printFrameSlide' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handout' => null,
        'printSlideNumbers' => null,
        'printComments' => null,
        'printFrameSlide' => null
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
        'handout' => 'Handout',
        'printSlideNumbers' => 'PrintSlideNumbers',
        'printComments' => 'PrintComments',
        'printFrameSlide' => 'PrintFrameSlide'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'handout' => 'setHandout',
        'printSlideNumbers' => 'setPrintSlideNumbers',
        'printComments' => 'setPrintComments',
        'printFrameSlide' => 'setPrintFrameSlide'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'handout' => 'getHandout',
        'printSlideNumbers' => 'getPrintSlideNumbers',
        'printComments' => 'getPrintComments',
        'printFrameSlide' => 'getPrintFrameSlide'
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

    const HANDOUT_HANDOUTS1 = 'Handouts1';
    const HANDOUT_HANDOUTS2 = 'Handouts2';
    const HANDOUT_HANDOUTS3 = 'Handouts3';
    const HANDOUT_HANDOUTS4_HORIZONTAL = 'Handouts4Horizontal';
    const HANDOUT_HANDOUTS4_VERTICAL = 'Handouts4Vertical';
    const HANDOUT_HANDOUTS6_HORIZONTAL = 'Handouts6Horizontal';
    const HANDOUT_HANDOUTS6_VERTICAL = 'Handouts6Vertical';
    const HANDOUT_HANDOUTS9_HORIZONTAL = 'Handouts9Horizontal';
    const HANDOUT_HANDOUTS9_VERTICAL = 'Handouts9Vertical';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandoutAllowableValues()
    {
        return [
            self::HANDOUT_HANDOUTS1,
            self::HANDOUT_HANDOUTS2,
            self::HANDOUT_HANDOUTS3,
            self::HANDOUT_HANDOUTS4_HORIZONTAL,
            self::HANDOUT_HANDOUTS4_VERTICAL,
            self::HANDOUT_HANDOUTS6_HORIZONTAL,
            self::HANDOUT_HANDOUTS6_VERTICAL,
            self::HANDOUT_HANDOUTS9_HORIZONTAL,
            self::HANDOUT_HANDOUTS9_VERTICAL,
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

        $this->container['handout'] = isset($data['handout']) ? $data['handout'] : null;
        $this->container['printSlideNumbers'] = isset($data['printSlideNumbers']) ? $data['printSlideNumbers'] : null;
        $this->container['printComments'] = isset($data['printComments']) ? $data['printComments'] : null;
        $this->container['printFrameSlide'] = isset($data['printFrameSlide']) ? $data['printFrameSlide'] : null;
        $this->container['layoutType'] = 'Handout';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getHandoutAllowableValues();
        if (!in_array($this->container['handout'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'handout', must be one of '%s'",
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

        $allowedValues = $this->getHandoutAllowableValues();
        if (!in_array($this->container['handout'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets handout
     *
     * @return string
     */
    public function getHandout()
    {
        return $this->container['handout'];
    }

    /**
     * Sets handout
     *
     * @param string $handout Specified how many pages and in what sequence will be placed on the page.
     *
     * @return $this
     */
    public function setHandout($handout)
    {
        $allowedValues = $this->getHandoutAllowableValues();


        if (is_numeric($handout)) {
            if ($handout >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'handout', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $handout = $allowedValues[$handout];
            }
        } else {
            if (!is_null($handout) && !in_array($handout, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'handout', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['handout'] = $handout;

        return $this;
    }

    /**
     * Gets printSlideNumbers
     *
     * @return bool
     */
    public function getPrintSlideNumbers()
    {
        return $this->container['printSlideNumbers'];
    }

    /**
     * Sets printSlideNumbers
     *
     * @param bool $printSlideNumbers True to print the displayed slide numbers.
     *
     * @return $this
     */
    public function setPrintSlideNumbers($printSlideNumbers)
    {
        $this->container['printSlideNumbers'] = $printSlideNumbers;

        return $this;
    }

    /**
     * Gets printComments
     *
     * @return bool
     */
    public function getPrintComments()
    {
        return $this->container['printComments'];
    }

    /**
     * Sets printComments
     *
     * @param bool $printComments True to display comments on slide.
     *
     * @return $this
     */
    public function setPrintComments($printComments)
    {
        $this->container['printComments'] = $printComments;

        return $this;
    }

    /**
     * Gets printFrameSlide
     *
     * @return bool
     */
    public function getPrintFrameSlide()
    {
        return $this->container['printFrameSlide'];
    }

    /**
     * Sets printFrameSlide
     *
     * @param bool $printFrameSlide True to draw frames around the displayed slides.
     *
     * @return $this
     */
    public function setPrintFrameSlide($printFrameSlide)
    {
        $this->container['printFrameSlide'] = $printFrameSlide;

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


