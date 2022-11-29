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
 * BoxElement Class Doc Comment
 *
 * @category Class
 * @description Box element.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoxElement extends MathElement 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BoxElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'operatorEmulator' => 'bool',
        'noBreak' => 'bool',
        'differential' => 'bool',
        'alignmentPoint' => 'bool',
        'explicitBreak' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base' => null,
        'operatorEmulator' => null,
        'noBreak' => null,
        'differential' => null,
        'alignmentPoint' => null,
        'explicitBreak' => 'int32'
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
        'base' => 'Base',
        'operatorEmulator' => 'OperatorEmulator',
        'noBreak' => 'NoBreak',
        'differential' => 'Differential',
        'alignmentPoint' => 'AlignmentPoint',
        'explicitBreak' => 'ExplicitBreak'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base' => 'setBase',
        'operatorEmulator' => 'setOperatorEmulator',
        'noBreak' => 'setNoBreak',
        'differential' => 'setDifferential',
        'alignmentPoint' => 'setAlignmentPoint',
        'explicitBreak' => 'setExplicitBreak'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base' => 'getBase',
        'operatorEmulator' => 'getOperatorEmulator',
        'noBreak' => 'getNoBreak',
        'differential' => 'getDifferential',
        'alignmentPoint' => 'getAlignmentPoint',
        'explicitBreak' => 'getExplicitBreak'
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

        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['operatorEmulator'] = isset($data['operatorEmulator']) ? $data['operatorEmulator'] : null;
        $this->container['noBreak'] = isset($data['noBreak']) ? $data['noBreak'] : null;
        $this->container['differential'] = isset($data['differential']) ? $data['differential'] : null;
        $this->container['alignmentPoint'] = isset($data['alignmentPoint']) ? $data['alignmentPoint'] : null;
        $this->container['explicitBreak'] = isset($data['explicitBreak']) ? $data['explicitBreak'] : null;
        $this->container['type'] = 'Box';
        
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
     * Gets base
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $base Base
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets operatorEmulator
     *
     * @return bool
     */
    public function getOperatorEmulator()
    {
        return $this->container['operatorEmulator'];
    }

    /**
     * Sets operatorEmulator
     *
     * @param bool $operatorEmulator Operator emulator
     *
     * @return $this
     */
    public function setOperatorEmulator($operatorEmulator)
    {
        $this->container['operatorEmulator'] = $operatorEmulator;

        return $this;
    }

    /**
     * Gets noBreak
     *
     * @return bool
     */
    public function getNoBreak()
    {
        return $this->container['noBreak'];
    }

    /**
     * Sets noBreak
     *
     * @param bool $noBreak No break
     *
     * @return $this
     */
    public function setNoBreak($noBreak)
    {
        $this->container['noBreak'] = $noBreak;

        return $this;
    }

    /**
     * Gets differential
     *
     * @return bool
     */
    public function getDifferential()
    {
        return $this->container['differential'];
    }

    /**
     * Sets differential
     *
     * @param bool $differential Differential
     *
     * @return $this
     */
    public function setDifferential($differential)
    {
        $this->container['differential'] = $differential;

        return $this;
    }

    /**
     * Gets alignmentPoint
     *
     * @return bool
     */
    public function getAlignmentPoint()
    {
        return $this->container['alignmentPoint'];
    }

    /**
     * Sets alignmentPoint
     *
     * @param bool $alignmentPoint Alignment point
     *
     * @return $this
     */
    public function setAlignmentPoint($alignmentPoint)
    {
        $this->container['alignmentPoint'] = $alignmentPoint;

        return $this;
    }

    /**
     * Gets explicitBreak
     *
     * @return int
     */
    public function getExplicitBreak()
    {
        return $this->container['explicitBreak'];
    }

    /**
     * Sets explicitBreak
     *
     * @param int $explicitBreak Explicit break
     *
     * @return $this
     */
    public function setExplicitBreak($explicitBreak)
    {
        $this->container['explicitBreak'] = $explicitBreak;

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


