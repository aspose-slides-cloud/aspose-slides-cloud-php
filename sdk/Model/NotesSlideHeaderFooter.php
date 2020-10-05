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
 * NotesSlideHeaderFooter Class Doc Comment
 *
 * @category Class
 * @description Represents header/footer info of notes slide
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotesSlideHeaderFooter extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotesSlideHeaderFooter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isDateTimeVisible' => 'bool',
        'dateTimeText' => 'string',
        'isFooterVisible' => 'bool',
        'footerText' => 'string',
        'isHeaderVisible' => 'bool',
        'headerText' => 'string',
        'isSlideNumberVisible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isDateTimeVisible' => null,
        'dateTimeText' => null,
        'isFooterVisible' => null,
        'footerText' => null,
        'isHeaderVisible' => null,
        'headerText' => null,
        'isSlideNumberVisible' => null
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
        'isDateTimeVisible' => 'IsDateTimeVisible',
        'dateTimeText' => 'DateTimeText',
        'isFooterVisible' => 'IsFooterVisible',
        'footerText' => 'FooterText',
        'isHeaderVisible' => 'IsHeaderVisible',
        'headerText' => 'HeaderText',
        'isSlideNumberVisible' => 'IsSlideNumberVisible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isDateTimeVisible' => 'setIsDateTimeVisible',
        'dateTimeText' => 'setDateTimeText',
        'isFooterVisible' => 'setIsFooterVisible',
        'footerText' => 'setFooterText',
        'isHeaderVisible' => 'setIsHeaderVisible',
        'headerText' => 'setHeaderText',
        'isSlideNumberVisible' => 'setIsSlideNumberVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isDateTimeVisible' => 'getIsDateTimeVisible',
        'dateTimeText' => 'getDateTimeText',
        'isFooterVisible' => 'getIsFooterVisible',
        'footerText' => 'getFooterText',
        'isHeaderVisible' => 'getIsHeaderVisible',
        'headerText' => 'getHeaderText',
        'isSlideNumberVisible' => 'getIsSlideNumberVisible'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['isDateTimeVisible'] = isset($data['isDateTimeVisible']) ? $data['isDateTimeVisible'] : null;
        $this->container['dateTimeText'] = isset($data['dateTimeText']) ? $data['dateTimeText'] : null;
        $this->container['isFooterVisible'] = isset($data['isFooterVisible']) ? $data['isFooterVisible'] : null;
        $this->container['footerText'] = isset($data['footerText']) ? $data['footerText'] : null;
        $this->container['isHeaderVisible'] = isset($data['isHeaderVisible']) ? $data['isHeaderVisible'] : null;
        $this->container['headerText'] = isset($data['headerText']) ? $data['headerText'] : null;
        $this->container['isSlideNumberVisible'] = isset($data['isSlideNumberVisible']) ? $data['isSlideNumberVisible'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets isDateTimeVisible
     *
     * @return bool
     */
    public function getIsDateTimeVisible()
    {
        return $this->container['isDateTimeVisible'];
    }

    /**
     * Sets isDateTimeVisible
     *
     * @param bool $isDateTimeVisible True if date is displayed in the footer
     *
     * @return $this
     */
    public function setIsDateTimeVisible($isDateTimeVisible)
    {
        $this->container['isDateTimeVisible'] = $isDateTimeVisible;

        return $this;
    }

    /**
     * Gets dateTimeText
     *
     * @return string
     */
    public function getDateTimeText()
    {
        return $this->container['dateTimeText'];
    }

    /**
     * Sets dateTimeText
     *
     * @param string $dateTimeText Text to be displayed as date in the footer
     *
     * @return $this
     */
    public function setDateTimeText($dateTimeText)
    {
        $this->container['dateTimeText'] = $dateTimeText;

        return $this;
    }

    /**
     * Gets isFooterVisible
     *
     * @return bool
     */
    public function getIsFooterVisible()
    {
        return $this->container['isFooterVisible'];
    }

    /**
     * Sets isFooterVisible
     *
     * @param bool $isFooterVisible True if footer is displayed
     *
     * @return $this
     */
    public function setIsFooterVisible($isFooterVisible)
    {
        $this->container['isFooterVisible'] = $isFooterVisible;

        return $this;
    }

    /**
     * Gets footerText
     *
     * @return string
     */
    public function getFooterText()
    {
        return $this->container['footerText'];
    }

    /**
     * Sets footerText
     *
     * @param string $footerText Text to be displayed in the footer
     *
     * @return $this
     */
    public function setFooterText($footerText)
    {
        $this->container['footerText'] = $footerText;

        return $this;
    }

    /**
     * Gets isHeaderVisible
     *
     * @return bool
     */
    public function getIsHeaderVisible()
    {
        return $this->container['isHeaderVisible'];
    }

    /**
     * Sets isHeaderVisible
     *
     * @param bool $isHeaderVisible True if header is displayed
     *
     * @return $this
     */
    public function setIsHeaderVisible($isHeaderVisible)
    {
        $this->container['isHeaderVisible'] = $isHeaderVisible;

        return $this;
    }

    /**
     * Gets headerText
     *
     * @return string
     */
    public function getHeaderText()
    {
        return $this->container['headerText'];
    }

    /**
     * Sets headerText
     *
     * @param string $headerText Text to be displayed in the header
     *
     * @return $this
     */
    public function setHeaderText($headerText)
    {
        $this->container['headerText'] = $headerText;

        return $this;
    }

    /**
     * Gets isSlideNumberVisible
     *
     * @return bool
     */
    public function getIsSlideNumberVisible()
    {
        return $this->container['isSlideNumberVisible'];
    }

    /**
     * Sets isSlideNumberVisible
     *
     * @param bool $isSlideNumberVisible True if slide number is displayed in the footer
     *
     * @return $this
     */
    public function setIsSlideNumberVisible($isSlideNumberVisible)
    {
        $this->container['isSlideNumberVisible'] = $isSlideNumberVisible;

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


