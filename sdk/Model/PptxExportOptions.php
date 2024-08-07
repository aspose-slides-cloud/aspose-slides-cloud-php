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
 * PptxExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in PPTX format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PptxExportOptions extends ExportOptions 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PptxExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conformance' => 'string',
        'zip64Mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conformance' => null,
        'zip64Mode' => null
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
        'conformance' => 'Conformance',
        'zip64Mode' => 'Zip64Mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conformance' => 'setConformance',
        'zip64Mode' => 'setZip64Mode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conformance' => 'getConformance',
        'zip64Mode' => 'getZip64Mode'
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

    const CONFORMANCE_ECMA376 = 'Ecma376';
    const CONFORMANCE_ISO29500_TRANSITIONAL = 'Iso29500Transitional';
    const CONFORMANCE_ISO29500_STRICT = 'Iso29500Strict';
    const ZIP64_MODE_NEVER = 'Never';
    const ZIP64_MODE_IF_NECESSARY = 'IfNecessary';
    const ZIP64_MODE_ALWAYS = 'Always';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConformanceAllowableValues()
    {
        return [
            self::CONFORMANCE_ECMA376,
            self::CONFORMANCE_ISO29500_TRANSITIONAL,
            self::CONFORMANCE_ISO29500_STRICT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getZip64ModeAllowableValues()
    {
        return [
            self::ZIP64_MODE_NEVER,
            self::ZIP64_MODE_IF_NECESSARY,
            self::ZIP64_MODE_ALWAYS,
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

        $this->container['conformance'] = isset($data['conformance']) ? $data['conformance'] : null;
        $this->container['zip64Mode'] = isset($data['zip64Mode']) ? $data['zip64Mode'] : null;
        $this->container['format'] = 'pptx';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getConformanceAllowableValues();
        if (!in_array($this->container['conformance'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'conformance', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getZip64ModeAllowableValues();
        if (!in_array($this->container['zip64Mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'zip64Mode', must be one of '%s'",
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

        $allowedValues = $this->getConformanceAllowableValues();
        if (!in_array($this->container['conformance'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getZip64ModeAllowableValues();
        if (!in_array($this->container['zip64Mode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets conformance
     *
     * @return string
     */
    public function getConformance()
    {
        return $this->container['conformance'];
    }

    /**
     * Sets conformance
     *
     * @param string $conformance The conformance class to which the PresentationML document conforms.
     *
     * @return $this
     */
    public function setConformance($conformance)
    {
        $allowedValues = $this->getConformanceAllowableValues();


        if (is_numeric($conformance)) {
            if ($conformance >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'conformance', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $conformance = $allowedValues[$conformance];
            }
        } else {
            if (!is_null($conformance) && !in_array($conformance, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'conformance', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['conformance'] = $conformance;

        return $this;
    }

    /**
     * Gets zip64Mode
     *
     * @return string
     */
    public function getZip64Mode()
    {
        return $this->container['zip64Mode'];
    }

    /**
     * Sets zip64Mode
     *
     * @param string $zip64Mode Specifies whether the ZIP64 format is used for the Presentation document. The default value is Zip64Mode.IfNecessary.
     *
     * @return $this
     */
    public function setZip64Mode($zip64Mode)
    {
        $allowedValues = $this->getZip64ModeAllowableValues();


        if (is_numeric($zip64Mode)) {
            if ($zip64Mode >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'zip64Mode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $zip64Mode = $allowedValues[$zip64Mode];
            }
        } else {
            if (!is_null($zip64Mode) && !in_array($zip64Mode, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'zip64Mode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['zip64Mode'] = $zip64Mode;

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


