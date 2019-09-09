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
 * Portion Class Doc Comment
 *
 * @category Class
 * @description Represents portion resource
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Portion extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Portion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'fontBold' => 'string',
        'fontItalic' => 'string',
        'fontUnderline' => 'string',
        'strikethroughType' => 'string',
        'textCapType' => 'string',
        'escapement' => 'double',
        'spacing' => 'double',
        'fontColor' => 'string',
        'highlightColor' => 'string',
        'fontHeight' => 'double',
        'normaliseHeight' => 'string',
        'proofDisabled' => 'string',
        'smartTagClean' => 'bool',
        'kerningMinimalSize' => 'double',
        'kumimoji' => 'string',
        'languageId' => 'string',
        'alternativeLanguageId' => 'string',
        'isHardUnderlineFill' => 'string',
        'isHardUnderlineLine' => 'string',
        'fillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'effectFormat' => '\Aspose\Slides\Cloud\Sdk\Model\EffectFormat',
        'lineFormat' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat',
        'underlineFillFormat' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'underlineLineFormat' => '\Aspose\Slides\Cloud\Sdk\Model\LineFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'fontBold' => null,
        'fontItalic' => null,
        'fontUnderline' => null,
        'strikethroughType' => null,
        'textCapType' => null,
        'escapement' => 'double',
        'spacing' => 'double',
        'fontColor' => null,
        'highlightColor' => null,
        'fontHeight' => 'double',
        'normaliseHeight' => null,
        'proofDisabled' => null,
        'smartTagClean' => null,
        'kerningMinimalSize' => 'double',
        'kumimoji' => null,
        'languageId' => null,
        'alternativeLanguageId' => null,
        'isHardUnderlineFill' => null,
        'isHardUnderlineLine' => null,
        'fillFormat' => null,
        'effectFormat' => null,
        'lineFormat' => null,
        'underlineFillFormat' => null,
        'underlineLineFormat' => null
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
        'text' => 'Text',
        'fontBold' => 'FontBold',
        'fontItalic' => 'FontItalic',
        'fontUnderline' => 'FontUnderline',
        'strikethroughType' => 'StrikethroughType',
        'textCapType' => 'TextCapType',
        'escapement' => 'Escapement',
        'spacing' => 'Spacing',
        'fontColor' => 'FontColor',
        'highlightColor' => 'HighlightColor',
        'fontHeight' => 'FontHeight',
        'normaliseHeight' => 'NormaliseHeight',
        'proofDisabled' => 'ProofDisabled',
        'smartTagClean' => 'SmartTagClean',
        'kerningMinimalSize' => 'KerningMinimalSize',
        'kumimoji' => 'Kumimoji',
        'languageId' => 'LanguageId',
        'alternativeLanguageId' => 'AlternativeLanguageId',
        'isHardUnderlineFill' => 'IsHardUnderlineFill',
        'isHardUnderlineLine' => 'IsHardUnderlineLine',
        'fillFormat' => 'FillFormat',
        'effectFormat' => 'EffectFormat',
        'lineFormat' => 'LineFormat',
        'underlineFillFormat' => 'UnderlineFillFormat',
        'underlineLineFormat' => 'UnderlineLineFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'fontBold' => 'setFontBold',
        'fontItalic' => 'setFontItalic',
        'fontUnderline' => 'setFontUnderline',
        'strikethroughType' => 'setStrikethroughType',
        'textCapType' => 'setTextCapType',
        'escapement' => 'setEscapement',
        'spacing' => 'setSpacing',
        'fontColor' => 'setFontColor',
        'highlightColor' => 'setHighlightColor',
        'fontHeight' => 'setFontHeight',
        'normaliseHeight' => 'setNormaliseHeight',
        'proofDisabled' => 'setProofDisabled',
        'smartTagClean' => 'setSmartTagClean',
        'kerningMinimalSize' => 'setKerningMinimalSize',
        'kumimoji' => 'setKumimoji',
        'languageId' => 'setLanguageId',
        'alternativeLanguageId' => 'setAlternativeLanguageId',
        'isHardUnderlineFill' => 'setIsHardUnderlineFill',
        'isHardUnderlineLine' => 'setIsHardUnderlineLine',
        'fillFormat' => 'setFillFormat',
        'effectFormat' => 'setEffectFormat',
        'lineFormat' => 'setLineFormat',
        'underlineFillFormat' => 'setUnderlineFillFormat',
        'underlineLineFormat' => 'setUnderlineLineFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'fontBold' => 'getFontBold',
        'fontItalic' => 'getFontItalic',
        'fontUnderline' => 'getFontUnderline',
        'strikethroughType' => 'getStrikethroughType',
        'textCapType' => 'getTextCapType',
        'escapement' => 'getEscapement',
        'spacing' => 'getSpacing',
        'fontColor' => 'getFontColor',
        'highlightColor' => 'getHighlightColor',
        'fontHeight' => 'getFontHeight',
        'normaliseHeight' => 'getNormaliseHeight',
        'proofDisabled' => 'getProofDisabled',
        'smartTagClean' => 'getSmartTagClean',
        'kerningMinimalSize' => 'getKerningMinimalSize',
        'kumimoji' => 'getKumimoji',
        'languageId' => 'getLanguageId',
        'alternativeLanguageId' => 'getAlternativeLanguageId',
        'isHardUnderlineFill' => 'getIsHardUnderlineFill',
        'isHardUnderlineLine' => 'getIsHardUnderlineLine',
        'fillFormat' => 'getFillFormat',
        'effectFormat' => 'getEffectFormat',
        'lineFormat' => 'getLineFormat',
        'underlineFillFormat' => 'getUnderlineFillFormat',
        'underlineLineFormat' => 'getUnderlineLineFormat'
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

    const FONT_BOLD_FALSE = 'False';
    const FONT_BOLD_TRUE = 'True';
    const FONT_BOLD_NOT_DEFINED = 'NotDefined';
    const FONT_ITALIC_FALSE = 'False';
    const FONT_ITALIC_TRUE = 'True';
    const FONT_ITALIC_NOT_DEFINED = 'NotDefined';
    const FONT_UNDERLINE_NONE = 'None';
    const FONT_UNDERLINE_WORDS = 'Words';
    const FONT_UNDERLINE_SINGLE = 'Single';
    const FONT_UNDERLINE_DOUBLE = 'Double';
    const FONT_UNDERLINE_HEAVY = 'Heavy';
    const FONT_UNDERLINE_DOTTED = 'Dotted';
    const FONT_UNDERLINE_HEAVY_DOTTED = 'HeavyDotted';
    const FONT_UNDERLINE_DASHED = 'Dashed';
    const FONT_UNDERLINE_HEAVY_DASHED = 'HeavyDashed';
    const FONT_UNDERLINE_LONG_DASHED = 'LongDashed';
    const FONT_UNDERLINE_HEAVY_LONG_DASHED = 'HeavyLongDashed';
    const FONT_UNDERLINE_DOT_DASH = 'DotDash';
    const FONT_UNDERLINE_HEAVY_DOT_DASH = 'HeavyDotDash';
    const FONT_UNDERLINE_DOT_DOT_DASH = 'DotDotDash';
    const FONT_UNDERLINE_HEAVY_DOT_DOT_DASH = 'HeavyDotDotDash';
    const FONT_UNDERLINE_WAVY = 'Wavy';
    const FONT_UNDERLINE_HEAVY_WAVY = 'HeavyWavy';
    const FONT_UNDERLINE_DOUBLE_WAVY = 'DoubleWavy';
    const FONT_UNDERLINE_NOT_DEFINED = 'NotDefined';
    const STRIKETHROUGH_TYPE_NONE = 'None';
    const STRIKETHROUGH_TYPE_SINGLE = 'Single';
    const STRIKETHROUGH_TYPE_DOUBLE = 'Double';
    const STRIKETHROUGH_TYPE_NOT_DEFINED = 'NotDefined';
    const TEXT_CAP_TYPE_NONE = 'None';
    const TEXT_CAP_TYPE_SMALL = 'Small';
    const TEXT_CAP_TYPE_ALL = 'All';
    const TEXT_CAP_TYPE_NOT_DEFINED = 'NotDefined';
    const NORMALISE_HEIGHT_FALSE = 'False';
    const NORMALISE_HEIGHT_TRUE = 'True';
    const NORMALISE_HEIGHT_NOT_DEFINED = 'NotDefined';
    const PROOF_DISABLED_FALSE = 'False';
    const PROOF_DISABLED_TRUE = 'True';
    const PROOF_DISABLED_NOT_DEFINED = 'NotDefined';
    const KUMIMOJI_FALSE = 'False';
    const KUMIMOJI_TRUE = 'True';
    const KUMIMOJI_NOT_DEFINED = 'NotDefined';
    const IS_HARD_UNDERLINE_FILL_FALSE = 'False';
    const IS_HARD_UNDERLINE_FILL_TRUE = 'True';
    const IS_HARD_UNDERLINE_FILL_NOT_DEFINED = 'NotDefined';
    const IS_HARD_UNDERLINE_LINE_FALSE = 'False';
    const IS_HARD_UNDERLINE_LINE_TRUE = 'True';
    const IS_HARD_UNDERLINE_LINE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontBoldAllowableValues()
    {
        return [
            self::FONT_BOLD_FALSE,
            self::FONT_BOLD_TRUE,
            self::FONT_BOLD_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontItalicAllowableValues()
    {
        return [
            self::FONT_ITALIC_FALSE,
            self::FONT_ITALIC_TRUE,
            self::FONT_ITALIC_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontUnderlineAllowableValues()
    {
        return [
            self::FONT_UNDERLINE_NONE,
            self::FONT_UNDERLINE_WORDS,
            self::FONT_UNDERLINE_SINGLE,
            self::FONT_UNDERLINE_DOUBLE,
            self::FONT_UNDERLINE_HEAVY,
            self::FONT_UNDERLINE_DOTTED,
            self::FONT_UNDERLINE_HEAVY_DOTTED,
            self::FONT_UNDERLINE_DASHED,
            self::FONT_UNDERLINE_HEAVY_DASHED,
            self::FONT_UNDERLINE_LONG_DASHED,
            self::FONT_UNDERLINE_HEAVY_LONG_DASHED,
            self::FONT_UNDERLINE_DOT_DASH,
            self::FONT_UNDERLINE_HEAVY_DOT_DASH,
            self::FONT_UNDERLINE_DOT_DOT_DASH,
            self::FONT_UNDERLINE_HEAVY_DOT_DOT_DASH,
            self::FONT_UNDERLINE_WAVY,
            self::FONT_UNDERLINE_HEAVY_WAVY,
            self::FONT_UNDERLINE_DOUBLE_WAVY,
            self::FONT_UNDERLINE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStrikethroughTypeAllowableValues()
    {
        return [
            self::STRIKETHROUGH_TYPE_NONE,
            self::STRIKETHROUGH_TYPE_SINGLE,
            self::STRIKETHROUGH_TYPE_DOUBLE,
            self::STRIKETHROUGH_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextCapTypeAllowableValues()
    {
        return [
            self::TEXT_CAP_TYPE_NONE,
            self::TEXT_CAP_TYPE_SMALL,
            self::TEXT_CAP_TYPE_ALL,
            self::TEXT_CAP_TYPE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNormaliseHeightAllowableValues()
    {
        return [
            self::NORMALISE_HEIGHT_FALSE,
            self::NORMALISE_HEIGHT_TRUE,
            self::NORMALISE_HEIGHT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProofDisabledAllowableValues()
    {
        return [
            self::PROOF_DISABLED_FALSE,
            self::PROOF_DISABLED_TRUE,
            self::PROOF_DISABLED_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKumimojiAllowableValues()
    {
        return [
            self::KUMIMOJI_FALSE,
            self::KUMIMOJI_TRUE,
            self::KUMIMOJI_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsHardUnderlineFillAllowableValues()
    {
        return [
            self::IS_HARD_UNDERLINE_FILL_FALSE,
            self::IS_HARD_UNDERLINE_FILL_TRUE,
            self::IS_HARD_UNDERLINE_FILL_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsHardUnderlineLineAllowableValues()
    {
        return [
            self::IS_HARD_UNDERLINE_LINE_FALSE,
            self::IS_HARD_UNDERLINE_LINE_TRUE,
            self::IS_HARD_UNDERLINE_LINE_NOT_DEFINED,
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

        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['fontBold'] = isset($data['fontBold']) ? $data['fontBold'] : null;
        $this->container['fontItalic'] = isset($data['fontItalic']) ? $data['fontItalic'] : null;
        $this->container['fontUnderline'] = isset($data['fontUnderline']) ? $data['fontUnderline'] : null;
        $this->container['strikethroughType'] = isset($data['strikethroughType']) ? $data['strikethroughType'] : null;
        $this->container['textCapType'] = isset($data['textCapType']) ? $data['textCapType'] : null;
        $this->container['escapement'] = isset($data['escapement']) ? $data['escapement'] : null;
        $this->container['spacing'] = isset($data['spacing']) ? $data['spacing'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['highlightColor'] = isset($data['highlightColor']) ? $data['highlightColor'] : null;
        $this->container['fontHeight'] = isset($data['fontHeight']) ? $data['fontHeight'] : null;
        $this->container['normaliseHeight'] = isset($data['normaliseHeight']) ? $data['normaliseHeight'] : null;
        $this->container['proofDisabled'] = isset($data['proofDisabled']) ? $data['proofDisabled'] : null;
        $this->container['smartTagClean'] = isset($data['smartTagClean']) ? $data['smartTagClean'] : null;
        $this->container['kerningMinimalSize'] = isset($data['kerningMinimalSize']) ? $data['kerningMinimalSize'] : null;
        $this->container['kumimoji'] = isset($data['kumimoji']) ? $data['kumimoji'] : null;
        $this->container['languageId'] = isset($data['languageId']) ? $data['languageId'] : null;
        $this->container['alternativeLanguageId'] = isset($data['alternativeLanguageId']) ? $data['alternativeLanguageId'] : null;
        $this->container['isHardUnderlineFill'] = isset($data['isHardUnderlineFill']) ? $data['isHardUnderlineFill'] : null;
        $this->container['isHardUnderlineLine'] = isset($data['isHardUnderlineLine']) ? $data['isHardUnderlineLine'] : null;
        $this->container['fillFormat'] = isset($data['fillFormat']) ? $data['fillFormat'] : null;
        $this->container['effectFormat'] = isset($data['effectFormat']) ? $data['effectFormat'] : null;
        $this->container['lineFormat'] = isset($data['lineFormat']) ? $data['lineFormat'] : null;
        $this->container['underlineFillFormat'] = isset($data['underlineFillFormat']) ? $data['underlineFillFormat'] : null;
        $this->container['underlineLineFormat'] = isset($data['underlineLineFormat']) ? $data['underlineLineFormat'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getFontBoldAllowableValues();
        if (!in_array($this->container['fontBold'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fontBold', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFontItalicAllowableValues();
        if (!in_array($this->container['fontItalic'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fontItalic', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFontUnderlineAllowableValues();
        if (!in_array($this->container['fontUnderline'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fontUnderline', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStrikethroughTypeAllowableValues();
        if (!in_array($this->container['strikethroughType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'strikethroughType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextCapTypeAllowableValues();
        if (!in_array($this->container['textCapType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textCapType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNormaliseHeightAllowableValues();
        if (!in_array($this->container['normaliseHeight'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'normaliseHeight', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProofDisabledAllowableValues();
        if (!in_array($this->container['proofDisabled'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'proofDisabled', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getKumimojiAllowableValues();
        if (!in_array($this->container['kumimoji'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kumimoji', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIsHardUnderlineFillAllowableValues();
        if (!in_array($this->container['isHardUnderlineFill'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'isHardUnderlineFill', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIsHardUnderlineLineAllowableValues();
        if (!in_array($this->container['isHardUnderlineLine'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'isHardUnderlineLine', must be one of '%s'",
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

        $allowedValues = $this->getFontBoldAllowableValues();
        if (!in_array($this->container['fontBold'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFontItalicAllowableValues();
        if (!in_array($this->container['fontItalic'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFontUnderlineAllowableValues();
        if (!in_array($this->container['fontUnderline'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStrikethroughTypeAllowableValues();
        if (!in_array($this->container['strikethroughType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTextCapTypeAllowableValues();
        if (!in_array($this->container['textCapType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getNormaliseHeightAllowableValues();
        if (!in_array($this->container['normaliseHeight'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getProofDisabledAllowableValues();
        if (!in_array($this->container['proofDisabled'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getKumimojiAllowableValues();
        if (!in_array($this->container['kumimoji'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getIsHardUnderlineFillAllowableValues();
        if (!in_array($this->container['isHardUnderlineFill'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getIsHardUnderlineLineAllowableValues();
        if (!in_array($this->container['isHardUnderlineLine'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param string $text Text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets fontBold
     *
     * @return string
     */
    public function getFontBold()
    {
        return $this->container['fontBold'];
    }

    /**
     * Sets fontBold
     *
     * @param string $fontBold True for bold font.
     *
     * @return $this
     */
    public function setFontBold($fontBold)
    {
        $allowedValues = $this->getFontBoldAllowableValues();


        if (is_numeric($fontBold)) {
            if ($fontBold >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontBold', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $fontBold = $allowedValues[$fontBold];
            }
        } else {
            if (!is_null($fontBold) && !in_array($fontBold, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontBold', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['fontBold'] = $fontBold;

        return $this;
    }

    /**
     * Gets fontItalic
     *
     * @return string
     */
    public function getFontItalic()
    {
        return $this->container['fontItalic'];
    }

    /**
     * Sets fontItalic
     *
     * @param string $fontItalic True for italic font.
     *
     * @return $this
     */
    public function setFontItalic($fontItalic)
    {
        $allowedValues = $this->getFontItalicAllowableValues();


        if (is_numeric($fontItalic)) {
            if ($fontItalic >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontItalic', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $fontItalic = $allowedValues[$fontItalic];
            }
        } else {
            if (!is_null($fontItalic) && !in_array($fontItalic, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontItalic', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['fontItalic'] = $fontItalic;

        return $this;
    }

    /**
     * Gets fontUnderline
     *
     * @return string
     */
    public function getFontUnderline()
    {
        return $this->container['fontUnderline'];
    }

    /**
     * Sets fontUnderline
     *
     * @param string $fontUnderline Text underline type.
     *
     * @return $this
     */
    public function setFontUnderline($fontUnderline)
    {
        $allowedValues = $this->getFontUnderlineAllowableValues();


        if (is_numeric($fontUnderline)) {
            if ($fontUnderline >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontUnderline', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $fontUnderline = $allowedValues[$fontUnderline];
            }
        } else {
            if (!is_null($fontUnderline) && !in_array($fontUnderline, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'fontUnderline', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['fontUnderline'] = $fontUnderline;

        return $this;
    }

    /**
     * Gets strikethroughType
     *
     * @return string
     */
    public function getStrikethroughType()
    {
        return $this->container['strikethroughType'];
    }

    /**
     * Sets strikethroughType
     *
     * @param string $strikethroughType Text strikethrough type.
     *
     * @return $this
     */
    public function setStrikethroughType($strikethroughType)
    {
        $allowedValues = $this->getStrikethroughTypeAllowableValues();


        if (is_numeric($strikethroughType)) {
            if ($strikethroughType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'strikethroughType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $strikethroughType = $allowedValues[$strikethroughType];
            }
        } else {
            if (!is_null($strikethroughType) && !in_array($strikethroughType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'strikethroughType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['strikethroughType'] = $strikethroughType;

        return $this;
    }

    /**
     * Gets textCapType
     *
     * @return string
     */
    public function getTextCapType()
    {
        return $this->container['textCapType'];
    }

    /**
     * Sets textCapType
     *
     * @param string $textCapType Text capitalization type.
     *
     * @return $this
     */
    public function setTextCapType($textCapType)
    {
        $allowedValues = $this->getTextCapTypeAllowableValues();


        if (is_numeric($textCapType)) {
            if ($textCapType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textCapType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $textCapType = $allowedValues[$textCapType];
            }
        } else {
            if (!is_null($textCapType) && !in_array($textCapType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'textCapType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['textCapType'] = $textCapType;

        return $this;
    }

    /**
     * Gets escapement
     *
     * @return double
     */
    public function getEscapement()
    {
        return $this->container['escapement'];
    }

    /**
     * Sets escapement
     *
     * @param double $escapement Superscript or subscript of the text.
     *
     * @return $this
     */
    public function setEscapement($escapement)
    {
        $this->container['escapement'] = $escapement;

        return $this;
    }

    /**
     * Gets spacing
     *
     * @return double
     */
    public function getSpacing()
    {
        return $this->container['spacing'];
    }

    /**
     * Sets spacing
     *
     * @param double $spacing Intercharacter spacing increment.
     *
     * @return $this
     */
    public function setSpacing($spacing)
    {
        $this->container['spacing'] = $spacing;

        return $this;
    }

    /**
     * Gets fontColor
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
     * Sets fontColor
     *
     * @param string $fontColor Font color.
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /**
     * Gets highlightColor
     *
     * @return string
     */
    public function getHighlightColor()
    {
        return $this->container['highlightColor'];
    }

    /**
     * Sets highlightColor
     *
     * @param string $highlightColor Highlight color.
     *
     * @return $this
     */
    public function setHighlightColor($highlightColor)
    {
        $this->container['highlightColor'] = $highlightColor;

        return $this;
    }

    /**
     * Gets fontHeight
     *
     * @return double
     */
    public function getFontHeight()
    {
        return $this->container['fontHeight'];
    }

    /**
     * Sets fontHeight
     *
     * @param double $fontHeight Font height.
     *
     * @return $this
     */
    public function setFontHeight($fontHeight)
    {
        $this->container['fontHeight'] = $fontHeight;

        return $this;
    }

    /**
     * Gets normaliseHeight
     *
     * @return string
     */
    public function getNormaliseHeight()
    {
        return $this->container['normaliseHeight'];
    }

    /**
     * Sets normaliseHeight
     *
     * @param string $normaliseHeight True to normalize the text.
     *
     * @return $this
     */
    public function setNormaliseHeight($normaliseHeight)
    {
        $allowedValues = $this->getNormaliseHeightAllowableValues();


        if (is_numeric($normaliseHeight)) {
            if ($normaliseHeight >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'normaliseHeight', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $normaliseHeight = $allowedValues[$normaliseHeight];
            }
        } else {
            if (!is_null($normaliseHeight) && !in_array($normaliseHeight, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'normaliseHeight', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['normaliseHeight'] = $normaliseHeight;

        return $this;
    }

    /**
     * Gets proofDisabled
     *
     * @return string
     */
    public function getProofDisabled()
    {
        return $this->container['proofDisabled'];
    }

    /**
     * Sets proofDisabled
     *
     * @param string $proofDisabled True if the text proof should be disabled.
     *
     * @return $this
     */
    public function setProofDisabled($proofDisabled)
    {
        $allowedValues = $this->getProofDisabledAllowableValues();


        if (is_numeric($proofDisabled)) {
            if ($proofDisabled >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'proofDisabled', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $proofDisabled = $allowedValues[$proofDisabled];
            }
        } else {
            if (!is_null($proofDisabled) && !in_array($proofDisabled, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'proofDisabled', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['proofDisabled'] = $proofDisabled;

        return $this;
    }

    /**
     * Gets smartTagClean
     *
     * @return bool
     */
    public function getSmartTagClean()
    {
        return $this->container['smartTagClean'];
    }

    /**
     * Sets smartTagClean
     *
     * @param bool $smartTagClean True if smart tag should be cleaned.
     *
     * @return $this
     */
    public function setSmartTagClean($smartTagClean)
    {
        $this->container['smartTagClean'] = $smartTagClean;

        return $this;
    }

    /**
     * Gets kerningMinimalSize
     *
     * @return double
     */
    public function getKerningMinimalSize()
    {
        return $this->container['kerningMinimalSize'];
    }

    /**
     * Sets kerningMinimalSize
     *
     * @param double $kerningMinimalSize Minimal font size for kerning.
     *
     * @return $this
     */
    public function setKerningMinimalSize($kerningMinimalSize)
    {
        $this->container['kerningMinimalSize'] = $kerningMinimalSize;

        return $this;
    }

    /**
     * Gets kumimoji
     *
     * @return string
     */
    public function getKumimoji()
    {
        return $this->container['kumimoji'];
    }

    /**
     * Sets kumimoji
     *
     * @param string $kumimoji True if numbers should ignore East-Asian specific vertical text layout.
     *
     * @return $this
     */
    public function setKumimoji($kumimoji)
    {
        $allowedValues = $this->getKumimojiAllowableValues();


        if (is_numeric($kumimoji)) {
            if ($kumimoji >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'kumimoji', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $kumimoji = $allowedValues[$kumimoji];
            }
        } else {
            if (!is_null($kumimoji) && !in_array($kumimoji, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'kumimoji', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['kumimoji'] = $kumimoji;

        return $this;
    }

    /**
     * Gets languageId
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['languageId'];
    }

    /**
     * Sets languageId
     *
     * @param string $languageId Proving language ID.
     *
     * @return $this
     */
    public function setLanguageId($languageId)
    {
        $this->container['languageId'] = $languageId;

        return $this;
    }

    /**
     * Gets alternativeLanguageId
     *
     * @return string
     */
    public function getAlternativeLanguageId()
    {
        return $this->container['alternativeLanguageId'];
    }

    /**
     * Sets alternativeLanguageId
     *
     * @param string $alternativeLanguageId Alternative proving language ID.
     *
     * @return $this
     */
    public function setAlternativeLanguageId($alternativeLanguageId)
    {
        $this->container['alternativeLanguageId'] = $alternativeLanguageId;

        return $this;
    }

    /**
     * Gets isHardUnderlineFill
     *
     * @return string
     */
    public function getIsHardUnderlineFill()
    {
        return $this->container['isHardUnderlineFill'];
    }

    /**
     * Sets isHardUnderlineFill
     *
     * @param string $isHardUnderlineFill True if underline style has own FillFormat properties.
     *
     * @return $this
     */
    public function setIsHardUnderlineFill($isHardUnderlineFill)
    {
        $allowedValues = $this->getIsHardUnderlineFillAllowableValues();


        if (is_numeric($isHardUnderlineFill)) {
            if ($isHardUnderlineFill >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'isHardUnderlineFill', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $isHardUnderlineFill = $allowedValues[$isHardUnderlineFill];
            }
        } else {
            if (!is_null($isHardUnderlineFill) && !in_array($isHardUnderlineFill, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'isHardUnderlineFill', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['isHardUnderlineFill'] = $isHardUnderlineFill;

        return $this;
    }

    /**
     * Gets isHardUnderlineLine
     *
     * @return string
     */
    public function getIsHardUnderlineLine()
    {
        return $this->container['isHardUnderlineLine'];
    }

    /**
     * Sets isHardUnderlineLine
     *
     * @param string $isHardUnderlineLine True if underline style has own LineFormat properties.
     *
     * @return $this
     */
    public function setIsHardUnderlineLine($isHardUnderlineLine)
    {
        $allowedValues = $this->getIsHardUnderlineLineAllowableValues();


        if (is_numeric($isHardUnderlineLine)) {
            if ($isHardUnderlineLine >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'isHardUnderlineLine', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $isHardUnderlineLine = $allowedValues[$isHardUnderlineLine];
            }
        } else {
            if (!is_null($isHardUnderlineLine) && !in_array($isHardUnderlineLine, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'isHardUnderlineLine', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['isHardUnderlineLine'] = $isHardUnderlineLine;

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
     * Gets effectFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\EffectFormat
     */
    public function getEffectFormat()
    {
        return $this->container['effectFormat'];
    }

    /**
     * Sets effectFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\EffectFormat $effectFormat Effect format.
     *
     * @return $this
     */
    public function setEffectFormat($effectFormat)
    {
        $this->container['effectFormat'] = $effectFormat;

        return $this;
    }

    /**
     * Gets lineFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getLineFormat()
    {
        return $this->container['lineFormat'];
    }

    /**
     * Sets lineFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $lineFormat Line format.
     *
     * @return $this
     */
    public function setLineFormat($lineFormat)
    {
        $this->container['lineFormat'] = $lineFormat;

        return $this;
    }

    /**
     * Gets underlineFillFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getUnderlineFillFormat()
    {
        return $this->container['underlineFillFormat'];
    }

    /**
     * Sets underlineFillFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $underlineFillFormat Underline fill format.
     *
     * @return $this
     */
    public function setUnderlineFillFormat($underlineFillFormat)
    {
        $this->container['underlineFillFormat'] = $underlineFillFormat;

        return $this;
    }

    /**
     * Gets underlineLineFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineFormat
     */
    public function getUnderlineLineFormat()
    {
        return $this->container['underlineLineFormat'];
    }

    /**
     * Sets underlineLineFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineFormat $underlineLineFormat Underline line format.
     *
     * @return $this
     */
    public function setUnderlineLineFormat($underlineLineFormat)
    {
        $this->container['underlineLineFormat'] = $underlineLineFormat;

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


