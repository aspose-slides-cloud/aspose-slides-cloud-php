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
 * LineFormat Class Doc Comment
 *
 * @category Class
 * @description Line format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineFormat implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alignment' => 'string',
        'capStyle' => 'string',
        'dashStyle' => 'string',
        'joinStyle' => 'string',
        'style' => 'string',
        'sketchType' => 'string',
        'beginArrowHead' => '\Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties',
        'endArrowHead' => '\Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties',
        'customDashPattern' => '\Aspose\Slides\Cloud\Sdk\Model\CustomDashPattern',
        'fillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'miterLimit' => 'double',
        'width' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alignment' => null,
        'capStyle' => null,
        'dashStyle' => null,
        'joinStyle' => null,
        'style' => null,
        'sketchType' => null,
        'beginArrowHead' => null,
        'endArrowHead' => null,
        'customDashPattern' => null,
        'fillFormat' => null,
        'miterLimit' => 'double',
        'width' => 'double'
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
        'alignment' => 'Alignment',
        'capStyle' => 'CapStyle',
        'dashStyle' => 'DashStyle',
        'joinStyle' => 'JoinStyle',
        'style' => 'Style',
        'sketchType' => 'SketchType',
        'beginArrowHead' => 'BeginArrowHead',
        'endArrowHead' => 'EndArrowHead',
        'customDashPattern' => 'CustomDashPattern',
        'fillFormat' => 'FillFormat',
        'miterLimit' => 'MiterLimit',
        'width' => 'Width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alignment' => 'setAlignment',
        'capStyle' => 'setCapStyle',
        'dashStyle' => 'setDashStyle',
        'joinStyle' => 'setJoinStyle',
        'style' => 'setStyle',
        'sketchType' => 'setSketchType',
        'beginArrowHead' => 'setBeginArrowHead',
        'endArrowHead' => 'setEndArrowHead',
        'customDashPattern' => 'setCustomDashPattern',
        'fillFormat' => 'setFillFormat',
        'miterLimit' => 'setMiterLimit',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alignment' => 'getAlignment',
        'capStyle' => 'getCapStyle',
        'dashStyle' => 'getDashStyle',
        'joinStyle' => 'getJoinStyle',
        'style' => 'getStyle',
        'sketchType' => 'getSketchType',
        'beginArrowHead' => 'getBeginArrowHead',
        'endArrowHead' => 'getEndArrowHead',
        'customDashPattern' => 'getCustomDashPattern',
        'fillFormat' => 'getFillFormat',
        'miterLimit' => 'getMiterLimit',
        'width' => 'getWidth'
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

    const ALIGNMENT_CENTER = 'Center';
    const ALIGNMENT_INSET = 'Inset';
    const ALIGNMENT_NOT_DEFINED = 'NotDefined';
    const CAP_STYLE_ROUND = 'Round';
    const CAP_STYLE_SQUARE = 'Square';
    const CAP_STYLE_FLAT = 'Flat';
    const CAP_STYLE_NOT_DEFINED = 'NotDefined';
    const DASH_STYLE_SOLID = 'Solid';
    const DASH_STYLE_DOT = 'Dot';
    const DASH_STYLE_DASH = 'Dash';
    const DASH_STYLE_LARGE_DASH = 'LargeDash';
    const DASH_STYLE_DASH_DOT = 'DashDot';
    const DASH_STYLE_LARGE_DASH_DOT = 'LargeDashDot';
    const DASH_STYLE_LARGE_DASH_DOT_DOT = 'LargeDashDotDot';
    const DASH_STYLE_SYSTEM_DASH = 'SystemDash';
    const DASH_STYLE_SYSTEM_DOT = 'SystemDot';
    const DASH_STYLE_SYSTEM_DASH_DOT = 'SystemDashDot';
    const DASH_STYLE_SYSTEM_DASH_DOT_DOT = 'SystemDashDotDot';
    const DASH_STYLE_CUSTOM = 'Custom';
    const DASH_STYLE_NOT_DEFINED = 'NotDefined';
    const JOIN_STYLE_ROUND = 'Round';
    const JOIN_STYLE_BEVEL = 'Bevel';
    const JOIN_STYLE_MITER = 'Miter';
    const JOIN_STYLE_NOT_DEFINED = 'NotDefined';
    const STYLE_SINGLE = 'Single';
    const STYLE_THIN_THIN = 'ThinThin';
    const STYLE_THIN_THICK = 'ThinThick';
    const STYLE_THICK_THIN = 'ThickThin';
    const STYLE_THICK_BETWEEN_THIN = 'ThickBetweenThin';
    const STYLE_NOT_DEFINED = 'NotDefined';
    const SKETCH_TYPE_NONE = 'None';
    const SKETCH_TYPE_CURVED = 'Curved';
    const SKETCH_TYPE_FREEHAND = 'Freehand';
    const SKETCH_TYPE_SCRIBBLE = 'Scribble';
    const SKETCH_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_CENTER,
            self::ALIGNMENT_INSET,
            self::ALIGNMENT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapStyleAllowableValues()
    {
        return [
            self::CAP_STYLE_ROUND,
            self::CAP_STYLE_SQUARE,
            self::CAP_STYLE_FLAT,
            self::CAP_STYLE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDashStyleAllowableValues()
    {
        return [
            self::DASH_STYLE_SOLID,
            self::DASH_STYLE_DOT,
            self::DASH_STYLE_DASH,
            self::DASH_STYLE_LARGE_DASH,
            self::DASH_STYLE_DASH_DOT,
            self::DASH_STYLE_LARGE_DASH_DOT,
            self::DASH_STYLE_LARGE_DASH_DOT_DOT,
            self::DASH_STYLE_SYSTEM_DASH,
            self::DASH_STYLE_SYSTEM_DOT,
            self::DASH_STYLE_SYSTEM_DASH_DOT,
            self::DASH_STYLE_SYSTEM_DASH_DOT_DOT,
            self::DASH_STYLE_CUSTOM,
            self::DASH_STYLE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJoinStyleAllowableValues()
    {
        return [
            self::JOIN_STYLE_ROUND,
            self::JOIN_STYLE_BEVEL,
            self::JOIN_STYLE_MITER,
            self::JOIN_STYLE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_SINGLE,
            self::STYLE_THIN_THIN,
            self::STYLE_THIN_THICK,
            self::STYLE_THICK_THIN,
            self::STYLE_THICK_BETWEEN_THIN,
            self::STYLE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSketchTypeAllowableValues()
    {
        return [
            self::SKETCH_TYPE_NONE,
            self::SKETCH_TYPE_CURVED,
            self::SKETCH_TYPE_FREEHAND,
            self::SKETCH_TYPE_SCRIBBLE,
            self::SKETCH_TYPE_NOT_DEFINED,
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
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['capStyle'] = isset($data['capStyle']) ? $data['capStyle'] : null;
        $this->container['dashStyle'] = isset($data['dashStyle']) ? $data['dashStyle'] : null;
        $this->container['joinStyle'] = isset($data['joinStyle']) ? $data['joinStyle'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['sketchType'] = isset($data['sketchType']) ? $data['sketchType'] : null;
        $this->container['beginArrowHead'] = isset($data['beginArrowHead']) ? $data['beginArrowHead'] : null;
        $this->container['endArrowHead'] = isset($data['endArrowHead']) ? $data['endArrowHead'] : null;
        $this->container['customDashPattern'] = isset($data['customDashPattern']) ? $data['customDashPattern'] : null;
        $this->container['fillFormat'] = isset($data['fillFormat']) ? $data['fillFormat'] : null;
        $this->container['miterLimit'] = isset($data['miterLimit']) ? $data['miterLimit'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCapStyleAllowableValues();
        if (!in_array($this->container['capStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'capStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDashStyleAllowableValues();
        if (!in_array($this->container['dashStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dashStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJoinStyleAllowableValues();
        if (!in_array($this->container['joinStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'joinStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSketchTypeAllowableValues();
        if (!in_array($this->container['sketchType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sketchType', must be one of '%s'",
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

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCapStyleAllowableValues();
        if (!in_array($this->container['capStyle'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getDashStyleAllowableValues();
        if (!in_array($this->container['dashStyle'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getJoinStyleAllowableValues();
        if (!in_array($this->container['joinStyle'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSketchTypeAllowableValues();
        if (!in_array($this->container['sketchType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param string $alignment Alignment.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();


        if (is_numeric($alignment)) {
            if ($alignment >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'alignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $alignment = $allowedValues[$alignment];
            }
        } else {
            if (!is_null($alignment) && !in_array($alignment, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'alignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets capStyle
     *
     * @return string
     */
    public function getCapStyle()
    {
        return $this->container['capStyle'];
    }

    /**
     * Sets capStyle
     *
     * @param string $capStyle Cap style.
     *
     * @return $this
     */
    public function setCapStyle($capStyle)
    {
        $allowedValues = $this->getCapStyleAllowableValues();


        if (is_numeric($capStyle)) {
            if ($capStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'capStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $capStyle = $allowedValues[$capStyle];
            }
        } else {
            if (!is_null($capStyle) && !in_array($capStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'capStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['capStyle'] = $capStyle;

        return $this;
    }

    /**
     * Gets dashStyle
     *
     * @return string
     */
    public function getDashStyle()
    {
        return $this->container['dashStyle'];
    }

    /**
     * Sets dashStyle
     *
     * @param string $dashStyle Dash style.
     *
     * @return $this
     */
    public function setDashStyle($dashStyle)
    {
        $allowedValues = $this->getDashStyleAllowableValues();


        if (is_numeric($dashStyle)) {
            if ($dashStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'dashStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $dashStyle = $allowedValues[$dashStyle];
            }
        } else {
            if (!is_null($dashStyle) && !in_array($dashStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'dashStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['dashStyle'] = $dashStyle;

        return $this;
    }

    /**
     * Gets joinStyle
     *
     * @return string
     */
    public function getJoinStyle()
    {
        return $this->container['joinStyle'];
    }

    /**
     * Sets joinStyle
     *
     * @param string $joinStyle Join style.
     *
     * @return $this
     */
    public function setJoinStyle($joinStyle)
    {
        $allowedValues = $this->getJoinStyleAllowableValues();


        if (is_numeric($joinStyle)) {
            if ($joinStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'joinStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $joinStyle = $allowedValues[$joinStyle];
            }
        } else {
            if (!is_null($joinStyle) && !in_array($joinStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'joinStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['joinStyle'] = $joinStyle;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style Style.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $allowedValues = $this->getStyleAllowableValues();


        if (is_numeric($style)) {
            if ($style >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'style', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $style = $allowedValues[$style];
            }
        } else {
            if (!is_null($style) && !in_array($style, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'style', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets sketchType
     *
     * @return string
     */
    public function getSketchType()
    {
        return $this->container['sketchType'];
    }

    /**
     * Sets sketchType
     *
     * @param string $sketchType Sketch type.
     *
     * @return $this
     */
    public function setSketchType($sketchType)
    {
        $allowedValues = $this->getSketchTypeAllowableValues();


        if (is_numeric($sketchType)) {
            if ($sketchType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'sketchType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $sketchType = $allowedValues[$sketchType];
            }
        } else {
            if (!is_null($sketchType) && !in_array($sketchType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'sketchType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['sketchType'] = $sketchType;

        return $this;
    }

    /**
     * Gets beginArrowHead
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties
     */
    public function getBeginArrowHead()
    {
        return $this->container['beginArrowHead'];
    }

    /**
     * Sets beginArrowHead
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties $beginArrowHead Begin arrowhead.
     *
     * @return $this
     */
    public function setBeginArrowHead($beginArrowHead)
    {
        $this->container['beginArrowHead'] = $beginArrowHead;

        return $this;
    }

    /**
     * Gets endArrowHead
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties
     */
    public function getEndArrowHead()
    {
        return $this->container['endArrowHead'];
    }

    /**
     * Sets endArrowHead
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties $endArrowHead End arrowhead.
     *
     * @return $this
     */
    public function setEndArrowHead($endArrowHead)
    {
        $this->container['endArrowHead'] = $endArrowHead;

        return $this;
    }

    /**
     * Gets customDashPattern
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CustomDashPattern
     */
    public function getCustomDashPattern()
    {
        return $this->container['customDashPattern'];
    }

    /**
     * Sets customDashPattern
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CustomDashPattern $customDashPattern Custom dash pattern.
     *
     * @return $this
     */
    public function setCustomDashPattern($customDashPattern)
    {
        $this->container['customDashPattern'] = $customDashPattern;

        return $this;
    }

    /**
     * Gets fillFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fillFormat'];
    }

    /**
     * Sets fillFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fillFormat Fill format.
     *
     * @return $this
     */
    public function setFillFormat($fillFormat)
    {
        $this->container['fillFormat'] = $fillFormat;

        return $this;
    }

    /**
     * Gets miterLimit
     *
     * @return double
     */
    public function getMiterLimit()
    {
        return $this->container['miterLimit'];
    }

    /**
     * Sets miterLimit
     *
     * @param double $miterLimit Miter limit.
     *
     * @return $this
     */
    public function setMiterLimit($miterLimit)
    {
        $this->container['miterLimit'] = $miterLimit;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


