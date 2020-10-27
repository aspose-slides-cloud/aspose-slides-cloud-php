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
 * SmartArtNode Class Doc Comment
 *
 * @category Class
 * @description Smart art node.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartArtNode implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartArtNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nodes' => '\Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[]',
        'shapes' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'isAssistant' => 'bool',
        'text' => 'string',
        'orgChartLayout' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nodes' => null,
        'shapes' => null,
        'isAssistant' => null,
        'text' => null,
        'orgChartLayout' => null
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
        'nodes' => 'Nodes',
        'shapes' => 'Shapes',
        'isAssistant' => 'IsAssistant',
        'text' => 'Text',
        'orgChartLayout' => 'OrgChartLayout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nodes' => 'setNodes',
        'shapes' => 'setShapes',
        'isAssistant' => 'setIsAssistant',
        'text' => 'setText',
        'orgChartLayout' => 'setOrgChartLayout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nodes' => 'getNodes',
        'shapes' => 'getShapes',
        'isAssistant' => 'getIsAssistant',
        'text' => 'getText',
        'orgChartLayout' => 'getOrgChartLayout'
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

    const ORG_CHART_LAYOUT_INITIAL = 'Initial';
    const ORG_CHART_LAYOUT_STANDART = 'Standart';
    const ORG_CHART_LAYOUT_BOTH_HANGING = 'BothHanging';
    const ORG_CHART_LAYOUT_LEFT_HANGING = 'LeftHanging';
    const ORG_CHART_LAYOUT_RIGHT_HANGING = 'RightHanging';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrgChartLayoutAllowableValues()
    {
        return [
            self::ORG_CHART_LAYOUT_INITIAL,
            self::ORG_CHART_LAYOUT_STANDART,
            self::ORG_CHART_LAYOUT_BOTH_HANGING,
            self::ORG_CHART_LAYOUT_LEFT_HANGING,
            self::ORG_CHART_LAYOUT_RIGHT_HANGING,
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
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['shapes'] = isset($data['shapes']) ? $data['shapes'] : null;
        $this->container['isAssistant'] = isset($data['isAssistant']) ? $data['isAssistant'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['orgChartLayout'] = isset($data['orgChartLayout']) ? $data['orgChartLayout'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isAssistant'] === null) {
            $invalidProperties[] = "'isAssistant' can't be null";
        }
        if ($this->container['orgChartLayout'] === null) {
            $invalidProperties[] = "'orgChartLayout' can't be null";
        }
        $allowedValues = $this->getOrgChartLayoutAllowableValues();
        if (!in_array($this->container['orgChartLayout'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orgChartLayout', must be one of '%s'",
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

        if ($this->container['isAssistant'] === null) {
            return false;
        }
        if ($this->container['orgChartLayout'] === null) {
            return false;
        }
        $allowedValues = $this->getOrgChartLayoutAllowableValues();
        if (!in_array($this->container['orgChartLayout'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets nodes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[]
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[] $nodes Node list.
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets shapes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getShapes()
    {
        return $this->container['shapes'];
    }

    /**
     * Sets shapes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $shapes Gets or sets the link to shapes.
     *
     * @return $this
     */
    public function setShapes($shapes)
    {
        $this->container['shapes'] = $shapes;

        return $this;
    }

    /**
     * Gets isAssistant
     *
     * @return bool
     */
    public function getIsAssistant()
    {
        return $this->container['isAssistant'];
    }

    /**
     * Sets isAssistant
     *
     * @param bool $isAssistant True for and assistant node.
     *
     * @return $this
     */
    public function setIsAssistant($isAssistant)
    {
        $this->container['isAssistant'] = $isAssistant;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Node text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets orgChartLayout
     *
     * @return string
     */
    public function getOrgChartLayout()
    {
        return $this->container['orgChartLayout'];
    }

    /**
     * Sets orgChartLayout
     *
     * @param string $orgChartLayout Organization chart layout type associated with current node.
     *
     * @return $this
     */
    public function setOrgChartLayout($orgChartLayout)
    {
        $allowedValues = $this->getOrgChartLayoutAllowableValues();


        if (is_numeric($orgChartLayout)) {
            if ($orgChartLayout >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orgChartLayout', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $orgChartLayout = $allowedValues[$orgChartLayout];
            }
        } else {
            if (!in_array($orgChartLayout, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orgChartLayout', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['orgChartLayout'] = $orgChartLayout;

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


