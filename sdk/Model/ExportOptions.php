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
 * ExportOptions Class Doc Comment
 *
 * @category Class
 * @description Represents export options for whole presentation.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportOptions implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'defaultRegularFont' => 'string',
        'deleteEmbeddedBinaryObjects' => 'bool',
        'gradientStyle' => 'string',
        'fontFallbackRules' => '\Aspose\Slides\Cloud\Sdk\Model\FontFallbackRule[]',
        'fontSubstRules' => '\Aspose\Slides\Cloud\Sdk\Model\FontSubstRule[]',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'defaultRegularFont' => null,
        'deleteEmbeddedBinaryObjects' => null,
        'gradientStyle' => null,
        'fontFallbackRules' => null,
        'fontSubstRules' => null,
        'format' => null
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
        'defaultRegularFont' => 'DefaultRegularFont',
        'deleteEmbeddedBinaryObjects' => 'DeleteEmbeddedBinaryObjects',
        'gradientStyle' => 'GradientStyle',
        'fontFallbackRules' => 'FontFallbackRules',
        'fontSubstRules' => 'FontSubstRules',
        'format' => 'Format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultRegularFont' => 'setDefaultRegularFont',
        'deleteEmbeddedBinaryObjects' => 'setDeleteEmbeddedBinaryObjects',
        'gradientStyle' => 'setGradientStyle',
        'fontFallbackRules' => 'setFontFallbackRules',
        'fontSubstRules' => 'setFontSubstRules',
        'format' => 'setFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultRegularFont' => 'getDefaultRegularFont',
        'deleteEmbeddedBinaryObjects' => 'getDeleteEmbeddedBinaryObjects',
        'gradientStyle' => 'getGradientStyle',
        'fontFallbackRules' => 'getFontFallbackRules',
        'fontSubstRules' => 'getFontSubstRules',
        'format' => 'getFormat'
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

    const GRADIENT_STYLE__DEFAULT = 'Default';
    const GRADIENT_STYLE_POWER_POINT_UI = 'PowerPointUI';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGradientStyleAllowableValues()
    {
        return [
            self::GRADIENT_STYLE__DEFAULT,
            self::GRADIENT_STYLE_POWER_POINT_UI,
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
        $this->container['defaultRegularFont'] = isset($data['defaultRegularFont']) ? $data['defaultRegularFont'] : null;
        $this->container['deleteEmbeddedBinaryObjects'] = isset($data['deleteEmbeddedBinaryObjects']) ? $data['deleteEmbeddedBinaryObjects'] : null;
        $this->container['gradientStyle'] = isset($data['gradientStyle']) ? $data['gradientStyle'] : null;
        $this->container['fontFallbackRules'] = isset($data['fontFallbackRules']) ? $data['fontFallbackRules'] : null;
        $this->container['fontSubstRules'] = isset($data['fontSubstRules']) ? $data['fontSubstRules'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGradientStyleAllowableValues();
        if (!in_array($this->container['gradientStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gradientStyle', must be one of '%s'",
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

        $allowedValues = $this->getGradientStyleAllowableValues();
        if (!in_array($this->container['gradientStyle'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets defaultRegularFont
     *
     * @return string
     */
    public function getDefaultRegularFont()
    {
        return $this->container['defaultRegularFont'];
    }

    /**
     * Sets defaultRegularFont
     *
     * @param string $defaultRegularFont Default regular font for rendering the presentation.
     *
     * @return $this
     */
    public function setDefaultRegularFont($defaultRegularFont)
    {
        $this->container['defaultRegularFont'] = $defaultRegularFont;

        return $this;
    }

    /**
     * Gets deleteEmbeddedBinaryObjects
     *
     * @return bool
     */
    public function getDeleteEmbeddedBinaryObjects()
    {
        return $this->container['deleteEmbeddedBinaryObjects'];
    }

    /**
     * Sets deleteEmbeddedBinaryObjects
     *
     * @param bool $deleteEmbeddedBinaryObjects True to delete delete all embedded binary objects.
     *
     * @return $this
     */
    public function setDeleteEmbeddedBinaryObjects($deleteEmbeddedBinaryObjects)
    {
        $this->container['deleteEmbeddedBinaryObjects'] = $deleteEmbeddedBinaryObjects;

        return $this;
    }

    /**
     * Gets gradientStyle
     *
     * @return string
     */
    public function getGradientStyle()
    {
        return $this->container['gradientStyle'];
    }

    /**
     * Sets gradientStyle
     *
     * @param string $gradientStyle Default regular font for rendering the presentation.
     *
     * @return $this
     */
    public function setGradientStyle($gradientStyle)
    {
        $allowedValues = $this->getGradientStyleAllowableValues();


        if (is_numeric($gradientStyle)) {
            if ($gradientStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'gradientStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $gradientStyle = $allowedValues[$gradientStyle];
            }
        } else {
            if (!is_null($gradientStyle) && !in_array($gradientStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'gradientStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['gradientStyle'] = $gradientStyle;

        return $this;
    }

    /**
     * Gets fontFallbackRules
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FontFallbackRule[]
     */
    public function getFontFallbackRules()
    {
        return $this->container['fontFallbackRules'];
    }

    /**
     * Sets fontFallbackRules
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FontFallbackRule[] $fontFallbackRules Gets of sets list of font fallback rules.
     *
     * @return $this
     */
    public function setFontFallbackRules($fontFallbackRules)
    {
        $this->container['fontFallbackRules'] = $fontFallbackRules;

        return $this;
    }

    /**
     * Gets fontSubstRules
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FontSubstRule[]
     */
    public function getFontSubstRules()
    {
        return $this->container['fontSubstRules'];
    }

    /**
     * Sets fontSubstRules
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FontSubstRule[] $fontSubstRules Gets of sets list of font substitution rules.
     *
     * @return $this
     */
    public function setFontSubstRules($fontSubstRules)
    {
        $this->container['fontSubstRules'] = $fontSubstRules;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

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


