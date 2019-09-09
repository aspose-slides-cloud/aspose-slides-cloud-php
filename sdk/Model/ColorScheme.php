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
 * ColorScheme Class Doc Comment
 *
 * @category Class
 * @description Slide&#39;s color scheme DTO
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ColorScheme extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ColorScheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accent1' => 'string',
        'accent2' => 'string',
        'accent3' => 'string',
        'accent4' => 'string',
        'accent5' => 'string',
        'accent6' => 'string',
        'dark1' => 'string',
        'dark2' => 'string',
        'followedHyperlink' => 'string',
        'hyperlink' => 'string',
        'light1' => 'string',
        'light2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accent1' => null,
        'accent2' => null,
        'accent3' => null,
        'accent4' => null,
        'accent5' => null,
        'accent6' => null,
        'dark1' => null,
        'dark2' => null,
        'followedHyperlink' => null,
        'hyperlink' => null,
        'light1' => null,
        'light2' => null
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
        'accent1' => 'Accent1',
        'accent2' => 'Accent2',
        'accent3' => 'Accent3',
        'accent4' => 'Accent4',
        'accent5' => 'Accent5',
        'accent6' => 'Accent6',
        'dark1' => 'Dark1',
        'dark2' => 'Dark2',
        'followedHyperlink' => 'FollowedHyperlink',
        'hyperlink' => 'Hyperlink',
        'light1' => 'Light1',
        'light2' => 'Light2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accent1' => 'setAccent1',
        'accent2' => 'setAccent2',
        'accent3' => 'setAccent3',
        'accent4' => 'setAccent4',
        'accent5' => 'setAccent5',
        'accent6' => 'setAccent6',
        'dark1' => 'setDark1',
        'dark2' => 'setDark2',
        'followedHyperlink' => 'setFollowedHyperlink',
        'hyperlink' => 'setHyperlink',
        'light1' => 'setLight1',
        'light2' => 'setLight2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accent1' => 'getAccent1',
        'accent2' => 'getAccent2',
        'accent3' => 'getAccent3',
        'accent4' => 'getAccent4',
        'accent5' => 'getAccent5',
        'accent6' => 'getAccent6',
        'dark1' => 'getDark1',
        'dark2' => 'getDark2',
        'followedHyperlink' => 'getFollowedHyperlink',
        'hyperlink' => 'getHyperlink',
        'light1' => 'getLight1',
        'light2' => 'getLight2'
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

        $this->container['accent1'] = isset($data['accent1']) ? $data['accent1'] : null;
        $this->container['accent2'] = isset($data['accent2']) ? $data['accent2'] : null;
        $this->container['accent3'] = isset($data['accent3']) ? $data['accent3'] : null;
        $this->container['accent4'] = isset($data['accent4']) ? $data['accent4'] : null;
        $this->container['accent5'] = isset($data['accent5']) ? $data['accent5'] : null;
        $this->container['accent6'] = isset($data['accent6']) ? $data['accent6'] : null;
        $this->container['dark1'] = isset($data['dark1']) ? $data['dark1'] : null;
        $this->container['dark2'] = isset($data['dark2']) ? $data['dark2'] : null;
        $this->container['followedHyperlink'] = isset($data['followedHyperlink']) ? $data['followedHyperlink'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
        $this->container['light1'] = isset($data['light1']) ? $data['light1'] : null;
        $this->container['light2'] = isset($data['light2']) ? $data['light2'] : null;
        
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
     * Gets accent1
     *
     * @return string
     */
    public function getAccent1()
    {
        return $this->container['accent1'];
    }

    /**
     * Sets accent1
     *
     * @param string $accent1 First accent color.
     *
     * @return $this
     */
    public function setAccent1($accent1)
    {
        $this->container['accent1'] = $accent1;

        return $this;
    }

    /**
     * Gets accent2
     *
     * @return string
     */
    public function getAccent2()
    {
        return $this->container['accent2'];
    }

    /**
     * Sets accent2
     *
     * @param string $accent2 Second accent color.
     *
     * @return $this
     */
    public function setAccent2($accent2)
    {
        $this->container['accent2'] = $accent2;

        return $this;
    }

    /**
     * Gets accent3
     *
     * @return string
     */
    public function getAccent3()
    {
        return $this->container['accent3'];
    }

    /**
     * Sets accent3
     *
     * @param string $accent3 Third accent color.
     *
     * @return $this
     */
    public function setAccent3($accent3)
    {
        $this->container['accent3'] = $accent3;

        return $this;
    }

    /**
     * Gets accent4
     *
     * @return string
     */
    public function getAccent4()
    {
        return $this->container['accent4'];
    }

    /**
     * Sets accent4
     *
     * @param string $accent4 Fourth accent color.
     *
     * @return $this
     */
    public function setAccent4($accent4)
    {
        $this->container['accent4'] = $accent4;

        return $this;
    }

    /**
     * Gets accent5
     *
     * @return string
     */
    public function getAccent5()
    {
        return $this->container['accent5'];
    }

    /**
     * Sets accent5
     *
     * @param string $accent5 Fifth accent color.
     *
     * @return $this
     */
    public function setAccent5($accent5)
    {
        $this->container['accent5'] = $accent5;

        return $this;
    }

    /**
     * Gets accent6
     *
     * @return string
     */
    public function getAccent6()
    {
        return $this->container['accent6'];
    }

    /**
     * Sets accent6
     *
     * @param string $accent6 Sixth accent color.
     *
     * @return $this
     */
    public function setAccent6($accent6)
    {
        $this->container['accent6'] = $accent6;

        return $this;
    }

    /**
     * Gets dark1
     *
     * @return string
     */
    public function getDark1()
    {
        return $this->container['dark1'];
    }

    /**
     * Sets dark1
     *
     * @param string $dark1 First dark color.
     *
     * @return $this
     */
    public function setDark1($dark1)
    {
        $this->container['dark1'] = $dark1;

        return $this;
    }

    /**
     * Gets dark2
     *
     * @return string
     */
    public function getDark2()
    {
        return $this->container['dark2'];
    }

    /**
     * Sets dark2
     *
     * @param string $dark2 Second dark color.
     *
     * @return $this
     */
    public function setDark2($dark2)
    {
        $this->container['dark2'] = $dark2;

        return $this;
    }

    /**
     * Gets followedHyperlink
     *
     * @return string
     */
    public function getFollowedHyperlink()
    {
        return $this->container['followedHyperlink'];
    }

    /**
     * Sets followedHyperlink
     *
     * @param string $followedHyperlink Visited hyperlink color.
     *
     * @return $this
     */
    public function setFollowedHyperlink($followedHyperlink)
    {
        $this->container['followedHyperlink'] = $followedHyperlink;

        return $this;
    }

    /**
     * Gets hyperlink
     *
     * @return string
     */
    public function getHyperlink()
    {
        return $this->container['hyperlink'];
    }

    /**
     * Sets hyperlink
     *
     * @param string $hyperlink Hyperlink color/
     *
     * @return $this
     */
    public function setHyperlink($hyperlink)
    {
        $this->container['hyperlink'] = $hyperlink;

        return $this;
    }

    /**
     * Gets light1
     *
     * @return string
     */
    public function getLight1()
    {
        return $this->container['light1'];
    }

    /**
     * Sets light1
     *
     * @param string $light1 First light color.
     *
     * @return $this
     */
    public function setLight1($light1)
    {
        $this->container['light1'] = $light1;

        return $this;
    }

    /**
     * Gets light2
     *
     * @return string
     */
    public function getLight2()
    {
        return $this->container['light2'];
    }

    /**
     * Sets light2
     *
     * @param string $light2 Second light color.
     *
     * @return $this
     */
    public function setLight2($light2)
    {
        $this->container['light2'] = $light2;

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


