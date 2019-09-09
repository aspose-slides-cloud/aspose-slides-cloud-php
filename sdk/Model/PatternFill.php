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
 * PatternFill Class Doc Comment
 *
 * @category Class
 * @description Represents Pattern Fill
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PatternFill extends FillFormat 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PatternFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'backColor' => 'string',
        'foreColor' => 'string',
        'style' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'backColor' => null,
        'foreColor' => null,
        'style' => null
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
        'backColor' => 'BackColor',
        'foreColor' => 'ForeColor',
        'style' => 'Style'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backColor' => 'setBackColor',
        'foreColor' => 'setForeColor',
        'style' => 'setStyle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backColor' => 'getBackColor',
        'foreColor' => 'getForeColor',
        'style' => 'getStyle'
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

    const STYLE_UNKNOWN = 'Unknown';
    const STYLE_PERCENT05 = 'Percent05';
    const STYLE_PERCENT10 = 'Percent10';
    const STYLE_PERCENT20 = 'Percent20';
    const STYLE_PERCENT25 = 'Percent25';
    const STYLE_PERCENT30 = 'Percent30';
    const STYLE_PERCENT40 = 'Percent40';
    const STYLE_PERCENT50 = 'Percent50';
    const STYLE_PERCENT60 = 'Percent60';
    const STYLE_PERCENT70 = 'Percent70';
    const STYLE_PERCENT75 = 'Percent75';
    const STYLE_PERCENT80 = 'Percent80';
    const STYLE_PERCENT90 = 'Percent90';
    const STYLE_DARK_HORIZONTAL = 'DarkHorizontal';
    const STYLE_DARK_VERTICAL = 'DarkVertical';
    const STYLE_DARK_DOWNWARD_DIAGONAL = 'DarkDownwardDiagonal';
    const STYLE_DARK_UPWARD_DIAGONAL = 'DarkUpwardDiagonal';
    const STYLE_SMALL_CHECKER_BOARD = 'SmallCheckerBoard';
    const STYLE_TRELLIS = 'Trellis';
    const STYLE_LIGHT_HORIZONTAL = 'LightHorizontal';
    const STYLE_LIGHT_VERTICAL = 'LightVertical';
    const STYLE_LIGHT_DOWNWARD_DIAGONAL = 'LightDownwardDiagonal';
    const STYLE_LIGHT_UPWARD_DIAGONAL = 'LightUpwardDiagonal';
    const STYLE_SMALL_GRID = 'SmallGrid';
    const STYLE_DOTTED_DIAMOND = 'DottedDiamond';
    const STYLE_WIDE_DOWNWARD_DIAGONAL = 'WideDownwardDiagonal';
    const STYLE_WIDE_UPWARD_DIAGONAL = 'WideUpwardDiagonal';
    const STYLE_DASHED_UPWARD_DIAGONAL = 'DashedUpwardDiagonal';
    const STYLE_DASHED_DOWNWARD_DIAGONAL = 'DashedDownwardDiagonal';
    const STYLE_NARROW_VERTICAL = 'NarrowVertical';
    const STYLE_NARROW_HORIZONTAL = 'NarrowHorizontal';
    const STYLE_DASHED_VERTICAL = 'DashedVertical';
    const STYLE_DASHED_HORIZONTAL = 'DashedHorizontal';
    const STYLE_LARGE_CONFETTI = 'LargeConfetti';
    const STYLE_LARGE_GRID = 'LargeGrid';
    const STYLE_HORIZONTAL_BRICK = 'HorizontalBrick';
    const STYLE_LARGE_CHECKER_BOARD = 'LargeCheckerBoard';
    const STYLE_SMALL_CONFETTI = 'SmallConfetti';
    const STYLE_ZIGZAG = 'Zigzag';
    const STYLE_SOLID_DIAMOND = 'SolidDiamond';
    const STYLE_DIAGONAL_BRICK = 'DiagonalBrick';
    const STYLE_OUTLINED_DIAMOND = 'OutlinedDiamond';
    const STYLE_PLAID = 'Plaid';
    const STYLE_SPHERE = 'Sphere';
    const STYLE_WEAVE = 'Weave';
    const STYLE_DOTTED_GRID = 'DottedGrid';
    const STYLE_DIVOT = 'Divot';
    const STYLE_SHINGLE = 'Shingle';
    const STYLE_WAVE = 'Wave';
    const STYLE_HORIZONTAL = 'Horizontal';
    const STYLE_VERTICAL = 'Vertical';
    const STYLE_CROSS = 'Cross';
    const STYLE_DOWNWARD_DIAGONAL = 'DownwardDiagonal';
    const STYLE_UPWARD_DIAGONAL = 'UpwardDiagonal';
    const STYLE_DIAGONAL_CROSS = 'DiagonalCross';
    const STYLE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_UNKNOWN,
            self::STYLE_PERCENT05,
            self::STYLE_PERCENT10,
            self::STYLE_PERCENT20,
            self::STYLE_PERCENT25,
            self::STYLE_PERCENT30,
            self::STYLE_PERCENT40,
            self::STYLE_PERCENT50,
            self::STYLE_PERCENT60,
            self::STYLE_PERCENT70,
            self::STYLE_PERCENT75,
            self::STYLE_PERCENT80,
            self::STYLE_PERCENT90,
            self::STYLE_DARK_HORIZONTAL,
            self::STYLE_DARK_VERTICAL,
            self::STYLE_DARK_DOWNWARD_DIAGONAL,
            self::STYLE_DARK_UPWARD_DIAGONAL,
            self::STYLE_SMALL_CHECKER_BOARD,
            self::STYLE_TRELLIS,
            self::STYLE_LIGHT_HORIZONTAL,
            self::STYLE_LIGHT_VERTICAL,
            self::STYLE_LIGHT_DOWNWARD_DIAGONAL,
            self::STYLE_LIGHT_UPWARD_DIAGONAL,
            self::STYLE_SMALL_GRID,
            self::STYLE_DOTTED_DIAMOND,
            self::STYLE_WIDE_DOWNWARD_DIAGONAL,
            self::STYLE_WIDE_UPWARD_DIAGONAL,
            self::STYLE_DASHED_UPWARD_DIAGONAL,
            self::STYLE_DASHED_DOWNWARD_DIAGONAL,
            self::STYLE_NARROW_VERTICAL,
            self::STYLE_NARROW_HORIZONTAL,
            self::STYLE_DASHED_VERTICAL,
            self::STYLE_DASHED_HORIZONTAL,
            self::STYLE_LARGE_CONFETTI,
            self::STYLE_LARGE_GRID,
            self::STYLE_HORIZONTAL_BRICK,
            self::STYLE_LARGE_CHECKER_BOARD,
            self::STYLE_SMALL_CONFETTI,
            self::STYLE_ZIGZAG,
            self::STYLE_SOLID_DIAMOND,
            self::STYLE_DIAGONAL_BRICK,
            self::STYLE_OUTLINED_DIAMOND,
            self::STYLE_PLAID,
            self::STYLE_SPHERE,
            self::STYLE_WEAVE,
            self::STYLE_DOTTED_GRID,
            self::STYLE_DIVOT,
            self::STYLE_SHINGLE,
            self::STYLE_WAVE,
            self::STYLE_HORIZONTAL,
            self::STYLE_VERTICAL,
            self::STYLE_CROSS,
            self::STYLE_DOWNWARD_DIAGONAL,
            self::STYLE_UPWARD_DIAGONAL,
            self::STYLE_DIAGONAL_CROSS,
            self::STYLE_NOT_DEFINED,
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

        $this->container['backColor'] = isset($data['backColor']) ? $data['backColor'] : null;
        $this->container['foreColor'] = isset($data['foreColor']) ? $data['foreColor'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['type'] = 'Pattern';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style', must be one of '%s'",
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

        if ($this->container['style'] === null) {
            return false;
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets backColor
     *
     * @return string
     */
    public function getBackColor()
    {
        return $this->container['backColor'];
    }

    /**
     * Sets backColor
     *
     * @param string $backColor Gets or sets the back color of the pattern fill.
     *
     * @return $this
     */
    public function setBackColor($backColor)
    {
        $this->container['backColor'] = $backColor;

        return $this;
    }

    /**
     * Gets foreColor
     *
     * @return string
     */
    public function getForeColor()
    {
        return $this->container['foreColor'];
    }

    /**
     * Sets foreColor
     *
     * @param string $foreColor Gets or sets the fore color of the pattern fill.
     *
     * @return $this
     */
    public function setForeColor($foreColor)
    {
        $this->container['foreColor'] = $foreColor;

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
     * @param string $style Gets or sets the style of pattern fill.
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
            if (!in_array($style, $allowedValues)) {
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


