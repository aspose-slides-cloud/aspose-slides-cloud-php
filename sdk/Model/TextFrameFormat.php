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
 * TextFrameFormat Class Doc Comment
 *
 * @category Class
 * @description Contains the TextFrame&#39;s formatting properties.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextFrameFormat implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextFrameFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'threeDFormat' => '\Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat',
        'transform' => 'string',
        'marginLeft' => 'double',
        'marginRight' => 'double',
        'marginTop' => 'double',
        'marginBottom' => 'double',
        'wrapText' => 'string',
        'anchoringType' => 'string',
        'centerText' => 'string',
        'textVerticalType' => 'string',
        'autofitType' => 'string',
        'columnCount' => 'int',
        'columnSpacing' => 'double',
        'keepTextFlat' => 'bool',
        'rotationAngle' => 'double',
        'defaultParagraphFormat' => '\Aspose\Slides\Cloud\Sdk\Model\ParagraphFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'threeDFormat' => null,
        'transform' => null,
        'marginLeft' => 'double',
        'marginRight' => 'double',
        'marginTop' => 'double',
        'marginBottom' => 'double',
        'wrapText' => null,
        'anchoringType' => null,
        'centerText' => null,
        'textVerticalType' => null,
        'autofitType' => null,
        'columnCount' => 'int32',
        'columnSpacing' => 'double',
        'keepTextFlat' => null,
        'rotationAngle' => 'double',
        'defaultParagraphFormat' => null
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
        'threeDFormat' => 'ThreeDFormat',
        'transform' => 'Transform',
        'marginLeft' => 'MarginLeft',
        'marginRight' => 'MarginRight',
        'marginTop' => 'MarginTop',
        'marginBottom' => 'MarginBottom',
        'wrapText' => 'WrapText',
        'anchoringType' => 'AnchoringType',
        'centerText' => 'CenterText',
        'textVerticalType' => 'TextVerticalType',
        'autofitType' => 'AutofitType',
        'columnCount' => 'ColumnCount',
        'columnSpacing' => 'ColumnSpacing',
        'keepTextFlat' => 'KeepTextFlat',
        'rotationAngle' => 'RotationAngle',
        'defaultParagraphFormat' => 'DefaultParagraphFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'threeDFormat' => 'setThreeDFormat',
        'transform' => 'setTransform',
        'marginLeft' => 'setMarginLeft',
        'marginRight' => 'setMarginRight',
        'marginTop' => 'setMarginTop',
        'marginBottom' => 'setMarginBottom',
        'wrapText' => 'setWrapText',
        'anchoringType' => 'setAnchoringType',
        'centerText' => 'setCenterText',
        'textVerticalType' => 'setTextVerticalType',
        'autofitType' => 'setAutofitType',
        'columnCount' => 'setColumnCount',
        'columnSpacing' => 'setColumnSpacing',
        'keepTextFlat' => 'setKeepTextFlat',
        'rotationAngle' => 'setRotationAngle',
        'defaultParagraphFormat' => 'setDefaultParagraphFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'threeDFormat' => 'getThreeDFormat',
        'transform' => 'getTransform',
        'marginLeft' => 'getMarginLeft',
        'marginRight' => 'getMarginRight',
        'marginTop' => 'getMarginTop',
        'marginBottom' => 'getMarginBottom',
        'wrapText' => 'getWrapText',
        'anchoringType' => 'getAnchoringType',
        'centerText' => 'getCenterText',
        'textVerticalType' => 'getTextVerticalType',
        'autofitType' => 'getAutofitType',
        'columnCount' => 'getColumnCount',
        'columnSpacing' => 'getColumnSpacing',
        'keepTextFlat' => 'getKeepTextFlat',
        'rotationAngle' => 'getRotationAngle',
        'defaultParagraphFormat' => 'getDefaultParagraphFormat'
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

    const TRANSFORM_NONE = 'None';
    const TRANSFORM_PLAIN = 'Plain';
    const TRANSFORM_STOP = 'Stop';
    const TRANSFORM_TRIANGLE = 'Triangle';
    const TRANSFORM_TRIANGLE_INVERTED = 'TriangleInverted';
    const TRANSFORM_CHEVRON = 'Chevron';
    const TRANSFORM_CHEVRON_INVERTED = 'ChevronInverted';
    const TRANSFORM_RING_INSIDE = 'RingInside';
    const TRANSFORM_RING_OUTSIDE = 'RingOutside';
    const TRANSFORM_ARCH_UP = 'ArchUp';
    const TRANSFORM_ARCH_DOWN = 'ArchDown';
    const TRANSFORM_CIRCLE = 'Circle';
    const TRANSFORM_BUTTON = 'Button';
    const TRANSFORM_ARCH_UP_POUR = 'ArchUpPour';
    const TRANSFORM_ARCH_DOWN_POUR = 'ArchDownPour';
    const TRANSFORM_CIRCLE_POUR = 'CirclePour';
    const TRANSFORM_BUTTON_POUR = 'ButtonPour';
    const TRANSFORM_CURVE_UP = 'CurveUp';
    const TRANSFORM_CURVE_DOWN = 'CurveDown';
    const TRANSFORM_CAN_UP = 'CanUp';
    const TRANSFORM_CAN_DOWN = 'CanDown';
    const TRANSFORM_WAVE1 = 'Wave1';
    const TRANSFORM_WAVE2 = 'Wave2';
    const TRANSFORM_DOUBLE_WAVE1 = 'DoubleWave1';
    const TRANSFORM_WAVE4 = 'Wave4';
    const TRANSFORM_INFLATE = 'Inflate';
    const TRANSFORM_DEFLATE = 'Deflate';
    const TRANSFORM_INFLATE_BOTTOM = 'InflateBottom';
    const TRANSFORM_DEFLATE_BOTTOM = 'DeflateBottom';
    const TRANSFORM_INFLATE_TOP = 'InflateTop';
    const TRANSFORM_DEFLATE_TOP = 'DeflateTop';
    const TRANSFORM_DEFLATE_INFLATE = 'DeflateInflate';
    const TRANSFORM_DEFLATE_INFLATE_DEFLATE = 'DeflateInflateDeflate';
    const TRANSFORM_FADE_RIGHT = 'FadeRight';
    const TRANSFORM_FADE_LEFT = 'FadeLeft';
    const TRANSFORM_FADE_UP = 'FadeUp';
    const TRANSFORM_FADE_DOWN = 'FadeDown';
    const TRANSFORM_SLANT_UP = 'SlantUp';
    const TRANSFORM_SLANT_DOWN = 'SlantDown';
    const TRANSFORM_CASCADE_UP = 'CascadeUp';
    const TRANSFORM_CASCADE_DOWN = 'CascadeDown';
    const TRANSFORM_CUSTOM = 'Custom';
    const TRANSFORM_NOT_DEFINED = 'NotDefined';
    const WRAP_TEXT_FALSE = 'False';
    const WRAP_TEXT_TRUE = 'True';
    const WRAP_TEXT_NOT_DEFINED = 'NotDefined';
    const ANCHORING_TYPE_TOP = 'Top';
    const ANCHORING_TYPE_CENTER = 'Center';
    const ANCHORING_TYPE_BOTTOM = 'Bottom';
    const ANCHORING_TYPE_JUSTIFIED = 'Justified';
    const ANCHORING_TYPE_DISTRIBUTED = 'Distributed';
    const ANCHORING_TYPE_NOT_DEFINED = 'NotDefined';
    const CENTER_TEXT_FALSE = 'False';
    const CENTER_TEXT_TRUE = 'True';
    const CENTER_TEXT_NOT_DEFINED = 'NotDefined';
    const TEXT_VERTICAL_TYPE_HORIZONTAL = 'Horizontal';
    const TEXT_VERTICAL_TYPE_VERTICAL = 'Vertical';
    const TEXT_VERTICAL_TYPE_VERTICAL270 = 'Vertical270';
    const TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL = 'WordArtVertical';
    const TEXT_VERTICAL_TYPE_EAST_ASIAN_VERTICAL = 'EastAsianVertical';
    const TEXT_VERTICAL_TYPE_MONGOLIAN_VERTICAL = 'MongolianVertical';
    const TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL_RIGHT_TO_LEFT = 'WordArtVerticalRightToLeft';
    const TEXT_VERTICAL_TYPE_NOT_DEFINED = 'NotDefined';
    const AUTOFIT_TYPE_NONE = 'None';
    const AUTOFIT_TYPE_NORMAL = 'Normal';
    const AUTOFIT_TYPE_SHAPE = 'Shape';
    const AUTOFIT_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransformAllowableValues()
    {
        return [
            self::TRANSFORM_NONE,
            self::TRANSFORM_PLAIN,
            self::TRANSFORM_STOP,
            self::TRANSFORM_TRIANGLE,
            self::TRANSFORM_TRIANGLE_INVERTED,
            self::TRANSFORM_CHEVRON,
            self::TRANSFORM_CHEVRON_INVERTED,
            self::TRANSFORM_RING_INSIDE,
            self::TRANSFORM_RING_OUTSIDE,
            self::TRANSFORM_ARCH_UP,
            self::TRANSFORM_ARCH_DOWN,
            self::TRANSFORM_CIRCLE,
            self::TRANSFORM_BUTTON,
            self::TRANSFORM_ARCH_UP_POUR,
            self::TRANSFORM_ARCH_DOWN_POUR,
            self::TRANSFORM_CIRCLE_POUR,
            self::TRANSFORM_BUTTON_POUR,
            self::TRANSFORM_CURVE_UP,
            self::TRANSFORM_CURVE_DOWN,
            self::TRANSFORM_CAN_UP,
            self::TRANSFORM_CAN_DOWN,
            self::TRANSFORM_WAVE1,
            self::TRANSFORM_WAVE2,
            self::TRANSFORM_DOUBLE_WAVE1,
            self::TRANSFORM_WAVE4,
            self::TRANSFORM_INFLATE,
            self::TRANSFORM_DEFLATE,
            self::TRANSFORM_INFLATE_BOTTOM,
            self::TRANSFORM_DEFLATE_BOTTOM,
            self::TRANSFORM_INFLATE_TOP,
            self::TRANSFORM_DEFLATE_TOP,
            self::TRANSFORM_DEFLATE_INFLATE,
            self::TRANSFORM_DEFLATE_INFLATE_DEFLATE,
            self::TRANSFORM_FADE_RIGHT,
            self::TRANSFORM_FADE_LEFT,
            self::TRANSFORM_FADE_UP,
            self::TRANSFORM_FADE_DOWN,
            self::TRANSFORM_SLANT_UP,
            self::TRANSFORM_SLANT_DOWN,
            self::TRANSFORM_CASCADE_UP,
            self::TRANSFORM_CASCADE_DOWN,
            self::TRANSFORM_CUSTOM,
            self::TRANSFORM_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWrapTextAllowableValues()
    {
        return [
            self::WRAP_TEXT_FALSE,
            self::WRAP_TEXT_TRUE,
            self::WRAP_TEXT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnchoringTypeAllowableValues()
    {
        return [
            self::ANCHORING_TYPE_TOP,
            self::ANCHORING_TYPE_CENTER,
            self::ANCHORING_TYPE_BOTTOM,
            self::ANCHORING_TYPE_JUSTIFIED,
            self::ANCHORING_TYPE_DISTRIBUTED,
            self::ANCHORING_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCenterTextAllowableValues()
    {
        return [
            self::CENTER_TEXT_FALSE,
            self::CENTER_TEXT_TRUE,
            self::CENTER_TEXT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextVerticalTypeAllowableValues()
    {
        return [
            self::TEXT_VERTICAL_TYPE_HORIZONTAL,
            self::TEXT_VERTICAL_TYPE_VERTICAL,
            self::TEXT_VERTICAL_TYPE_VERTICAL270,
            self::TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL,
            self::TEXT_VERTICAL_TYPE_EAST_ASIAN_VERTICAL,
            self::TEXT_VERTICAL_TYPE_MONGOLIAN_VERTICAL,
            self::TEXT_VERTICAL_TYPE_WORD_ART_VERTICAL_RIGHT_TO_LEFT,
            self::TEXT_VERTICAL_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutofitTypeAllowableValues()
    {
        return [
            self::AUTOFIT_TYPE_NONE,
            self::AUTOFIT_TYPE_NORMAL,
            self::AUTOFIT_TYPE_SHAPE,
            self::AUTOFIT_TYPE_NOT_DEFINED,
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
        $this->container['threeDFormat'] = isset($data['threeDFormat']) ? $data['threeDFormat'] : null;
        $this->container['transform'] = isset($data['transform']) ? $data['transform'] : null;
        $this->container['marginLeft'] = isset($data['marginLeft']) ? $data['marginLeft'] : null;
        $this->container['marginRight'] = isset($data['marginRight']) ? $data['marginRight'] : null;
        $this->container['marginTop'] = isset($data['marginTop']) ? $data['marginTop'] : null;
        $this->container['marginBottom'] = isset($data['marginBottom']) ? $data['marginBottom'] : null;
        $this->container['wrapText'] = isset($data['wrapText']) ? $data['wrapText'] : null;
        $this->container['anchoringType'] = isset($data['anchoringType']) ? $data['anchoringType'] : null;
        $this->container['centerText'] = isset($data['centerText']) ? $data['centerText'] : null;
        $this->container['textVerticalType'] = isset($data['textVerticalType']) ? $data['textVerticalType'] : null;
        $this->container['autofitType'] = isset($data['autofitType']) ? $data['autofitType'] : null;
        $this->container['columnCount'] = isset($data['columnCount']) ? $data['columnCount'] : null;
        $this->container['columnSpacing'] = isset($data['columnSpacing']) ? $data['columnSpacing'] : null;
        $this->container['keepTextFlat'] = isset($data['keepTextFlat']) ? $data['keepTextFlat'] : null;
        $this->container['rotationAngle'] = isset($data['rotationAngle']) ? $data['rotationAngle'] : null;
        $this->container['defaultParagraphFormat'] = isset($data['defaultParagraphFormat']) ? $data['defaultParagraphFormat'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransformAllowableValues();
        if (!in_array($this->container['transform'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transform', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWrapTextAllowableValues();
        if (!in_array($this->container['wrapText'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wrapText', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAnchoringTypeAllowableValues();
        if (!in_array($this->container['anchoringType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'anchoringType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCenterTextAllowableValues();
        if (!in_array($this->container['centerText'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'centerText', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($this->container['textVerticalType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textVerticalType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAutofitTypeAllowableValues();
        if (!in_array($this->container['autofitType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'autofitType', must be one of '%s'",
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

        $allowedValues = $this->getTransformAllowableValues();
        if (!in_array($this->container['transform'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getWrapTextAllowableValues();
        if (!in_array($this->container['wrapText'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getAnchoringTypeAllowableValues();
        if (!in_array($this->container['anchoringType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCenterTextAllowableValues();
        if (!in_array($this->container['centerText'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTextVerticalTypeAllowableValues();
        if (!in_array($this->container['textVerticalType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getAutofitTypeAllowableValues();
        if (!in_array($this->container['autofitType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets threeDFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat
     */
    public function getThreeDFormat()
    {
        return $this->container['threeDFormat'];
    }

    /**
     * Sets threeDFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ThreeDFormat $threeDFormat Represents 3d effect properties for a text.
     *
     * @return $this
     */
    public function setThreeDFormat($threeDFormat)
    {
        $this->container['threeDFormat'] = $threeDFormat;

        return $this;
    }

    /**
     * Gets transform
     *
     * @return string
     */
    public function getTransform()
    {
        return $this->container['transform'];
    }

    /**
     * Sets transform
     *
     * @param string $transform Gets or sets text wrapping shape.
     *
     * @return $this
     */
    public function setTransform($transform)
    {
        $allowedValues = $this->getTransformAllowableValues();


        if (is_numeric($transform)) {
            if ($transform >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'transform', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $transform = $allowedValues[$transform];
            }
        } else {
            if (!is_null($transform) && !in_array($transform, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'transform', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['transform'] = $transform;

        return $this;
    }

    /**
     * Gets marginLeft
     *
     * @return double
     */
    public function getMarginLeft()
    {
        return $this->container['marginLeft'];
    }

    /**
     * Sets marginLeft
     *
     * @param double $marginLeft Left margin. Left margin.
     *
     * @return $this
     */
    public function setMarginLeft($marginLeft)
    {
        $this->container['marginLeft'] = $marginLeft;

        return $this;
    }

    /**
     * Gets marginRight
     *
     * @return double
     */
    public function getMarginRight()
    {
        return $this->container['marginRight'];
    }

    /**
     * Sets marginRight
     *
     * @param double $marginRight Right margin.
     *
     * @return $this
     */
    public function setMarginRight($marginRight)
    {
        $this->container['marginRight'] = $marginRight;

        return $this;
    }

    /**
     * Gets marginTop
     *
     * @return double
     */
    public function getMarginTop()
    {
        return $this->container['marginTop'];
    }

    /**
     * Sets marginTop
     *
     * @param double $marginTop Top margin.
     *
     * @return $this
     */
    public function setMarginTop($marginTop)
    {
        $this->container['marginTop'] = $marginTop;

        return $this;
    }

    /**
     * Gets marginBottom
     *
     * @return double
     */
    public function getMarginBottom()
    {
        return $this->container['marginBottom'];
    }

    /**
     * Sets marginBottom
     *
     * @param double $marginBottom Bottom margin.
     *
     * @return $this
     */
    public function setMarginBottom($marginBottom)
    {
        $this->container['marginBottom'] = $marginBottom;

        return $this;
    }

    /**
     * Gets wrapText
     *
     * @return string
     */
    public function getWrapText()
    {
        return $this->container['wrapText'];
    }

    /**
     * Sets wrapText
     *
     * @param string $wrapText True if text is wrapped at TextFrame's margins.
     *
     * @return $this
     */
    public function setWrapText($wrapText)
    {
        $allowedValues = $this->getWrapTextAllowableValues();


        if (is_numeric($wrapText)) {
            if ($wrapText >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'wrapText', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $wrapText = $allowedValues[$wrapText];
            }
        } else {
            if (!is_null($wrapText) && !in_array($wrapText, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'wrapText', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['wrapText'] = $wrapText;

        return $this;
    }

    /**
     * Gets anchoringType
     *
     * @return string
     */
    public function getAnchoringType()
    {
        return $this->container['anchoringType'];
    }

    /**
     * Sets anchoringType
     *
     * @param string $anchoringType Returns or sets vertical anchor text in a TextFrame.
     *
     * @return $this
     */
    public function setAnchoringType($anchoringType)
    {
        $allowedValues = $this->getAnchoringTypeAllowableValues();


        if (is_numeric($anchoringType)) {
            if ($anchoringType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'anchoringType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $anchoringType = $allowedValues[$anchoringType];
            }
        } else {
            if (!is_null($anchoringType) && !in_array($anchoringType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'anchoringType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['anchoringType'] = $anchoringType;

        return $this;
    }

    /**
     * Gets centerText
     *
     * @return string
     */
    public function getCenterText()
    {
        return $this->container['centerText'];
    }

    /**
     * Sets centerText
     *
     * @param string $centerText If True then text should be centered in box horizontally.
     *
     * @return $this
     */
    public function setCenterText($centerText)
    {
        $allowedValues = $this->getCenterTextAllowableValues();


        if (is_numeric($centerText)) {
            if ($centerText >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'centerText', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $centerText = $allowedValues[$centerText];
            }
        } else {
            if (!is_null($centerText) && !in_array($centerText, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'centerText', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['centerText'] = $centerText;

        return $this;
    }

    /**
     * Gets textVerticalType
     *
     * @return string
     */
    public function getTextVerticalType()
    {
        return $this->container['textVerticalType'];
    }

    /**
     * Sets textVerticalType
     *
     * @param string $textVerticalType Determines text orientation. The resulted value of visual text rotation summarized from this property and custom angle in property RotationAngle.
     *
     * @return $this
     */
    public function setTextVerticalType($textVerticalType)
    {
        $allowedValues = $this->getTextVerticalTypeAllowableValues();


        if (is_numeric($textVerticalType)) {
            if ($textVerticalType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textVerticalType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $textVerticalType = $allowedValues[$textVerticalType];
            }
        } else {
            if (!is_null($textVerticalType) && !in_array($textVerticalType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textVerticalType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['textVerticalType'] = $textVerticalType;

        return $this;
    }

    /**
     * Gets autofitType
     *
     * @return string
     */
    public function getAutofitType()
    {
        return $this->container['autofitType'];
    }

    /**
     * Sets autofitType
     *
     * @param string $autofitType Returns or sets text's auto-fit mode.
     *
     * @return $this
     */
    public function setAutofitType($autofitType)
    {
        $allowedValues = $this->getAutofitTypeAllowableValues();


        if (is_numeric($autofitType)) {
            if ($autofitType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'autofitType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $autofitType = $allowedValues[$autofitType];
            }
        } else {
            if (!is_null($autofitType) && !in_array($autofitType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'autofitType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['autofitType'] = $autofitType;

        return $this;
    }

    /**
     * Gets columnCount
     *
     * @return int
     */
    public function getColumnCount()
    {
        return $this->container['columnCount'];
    }

    /**
     * Sets columnCount
     *
     * @param int $columnCount Returns or sets number of columns in the text area. This value must be a positive number. Otherwise, the value will be set to zero.  Value 0 means undefined value.
     *
     * @return $this
     */
    public function setColumnCount($columnCount)
    {
        $this->container['columnCount'] = $columnCount;

        return $this;
    }

    /**
     * Gets columnSpacing
     *
     * @return double
     */
    public function getColumnSpacing()
    {
        return $this->container['columnSpacing'];
    }

    /**
     * Sets columnSpacing
     *
     * @param double $columnSpacing Returns or sets the space between text columns in the text area (in points). This should only apply  when there is more than 1 column present. This value must be a positive number. Otherwise, the value will be set to zero.
     *
     * @return $this
     */
    public function setColumnSpacing($columnSpacing)
    {
        $this->container['columnSpacing'] = $columnSpacing;

        return $this;
    }

    /**
     * Gets keepTextFlat
     *
     * @return bool
     */
    public function getKeepTextFlat()
    {
        return $this->container['keepTextFlat'];
    }

    /**
     * Sets keepTextFlat
     *
     * @param bool $keepTextFlat Returns or set keeping text out of 3D scene entirely.
     *
     * @return $this
     */
    public function setKeepTextFlat($keepTextFlat)
    {
        $this->container['keepTextFlat'] = $keepTextFlat;

        return $this;
    }

    /**
     * Gets rotationAngle
     *
     * @return double
     */
    public function getRotationAngle()
    {
        return $this->container['rotationAngle'];
    }

    /**
     * Sets rotationAngle
     *
     * @param double $rotationAngle Specifies the custom rotation that is being applied to the text within the bounding box.
     *
     * @return $this
     */
    public function setRotationAngle($rotationAngle)
    {
        $this->container['rotationAngle'] = $rotationAngle;

        return $this;
    }

    /**
     * Gets defaultParagraphFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ParagraphFormat
     */
    public function getDefaultParagraphFormat()
    {
        return $this->container['defaultParagraphFormat'];
    }

    /**
     * Sets defaultParagraphFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ParagraphFormat $defaultParagraphFormat Default portion format.
     *
     * @return $this
     */
    public function setDefaultParagraphFormat($defaultParagraphFormat)
    {
        $this->container['defaultParagraphFormat'] = $defaultParagraphFormat;

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


