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
 * SlideShowTransition Class Doc Comment
 *
 * @category Class
 * @description Slide Show Transition.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SlideShowTransition implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SlideShowTransition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'advanceAfter' => 'bool',
        'advanceAfterTime' => 'int',
        'advanceOnClick' => 'bool',
        'soundIsBuiltIn' => 'bool',
        'soundLoop' => 'bool',
        'soundMode' => 'string',
        'soundName' => 'string',
        'speed' => 'string',
        'cornerDirection' => 'string',
        'eightDirection' => 'string',
        'inOutDirection' => 'string',
        'hasBounce' => 'bool',
        'sideDirection' => 'string',
        'pattern' => 'string',
        'leftRightDirection' => 'string',
        'morphType' => 'string',
        'fromBlack' => 'bool',
        'orientationDirection' => 'string',
        'throughBlack' => 'bool',
        'cornerAndCenterDirection' => 'string',
        'shredPattern' => 'string',
        'orientation' => 'string',
        'spokes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'advanceAfter' => null,
        'advanceAfterTime' => 'int32',
        'advanceOnClick' => null,
        'soundIsBuiltIn' => null,
        'soundLoop' => null,
        'soundMode' => null,
        'soundName' => null,
        'speed' => null,
        'cornerDirection' => null,
        'eightDirection' => null,
        'inOutDirection' => null,
        'hasBounce' => null,
        'sideDirection' => null,
        'pattern' => null,
        'leftRightDirection' => null,
        'morphType' => null,
        'fromBlack' => null,
        'orientationDirection' => null,
        'throughBlack' => null,
        'cornerAndCenterDirection' => null,
        'shredPattern' => null,
        'orientation' => null,
        'spokes' => 'int32'
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
        'type' => 'Type',
        'advanceAfter' => 'AdvanceAfter',
        'advanceAfterTime' => 'AdvanceAfterTime',
        'advanceOnClick' => 'AdvanceOnClick',
        'soundIsBuiltIn' => 'SoundIsBuiltIn',
        'soundLoop' => 'SoundLoop',
        'soundMode' => 'SoundMode',
        'soundName' => 'SoundName',
        'speed' => 'Speed',
        'cornerDirection' => 'CornerDirection',
        'eightDirection' => 'EightDirection',
        'inOutDirection' => 'InOutDirection',
        'hasBounce' => 'HasBounce',
        'sideDirection' => 'SideDirection',
        'pattern' => 'Pattern',
        'leftRightDirection' => 'LeftRightDirection',
        'morphType' => 'MorphType',
        'fromBlack' => 'FromBlack',
        'orientationDirection' => 'OrientationDirection',
        'throughBlack' => 'ThroughBlack',
        'cornerAndCenterDirection' => 'CornerAndCenterDirection',
        'shredPattern' => 'ShredPattern',
        'orientation' => 'Orientation',
        'spokes' => 'Spokes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'advanceAfter' => 'setAdvanceAfter',
        'advanceAfterTime' => 'setAdvanceAfterTime',
        'advanceOnClick' => 'setAdvanceOnClick',
        'soundIsBuiltIn' => 'setSoundIsBuiltIn',
        'soundLoop' => 'setSoundLoop',
        'soundMode' => 'setSoundMode',
        'soundName' => 'setSoundName',
        'speed' => 'setSpeed',
        'cornerDirection' => 'setCornerDirection',
        'eightDirection' => 'setEightDirection',
        'inOutDirection' => 'setInOutDirection',
        'hasBounce' => 'setHasBounce',
        'sideDirection' => 'setSideDirection',
        'pattern' => 'setPattern',
        'leftRightDirection' => 'setLeftRightDirection',
        'morphType' => 'setMorphType',
        'fromBlack' => 'setFromBlack',
        'orientationDirection' => 'setOrientationDirection',
        'throughBlack' => 'setThroughBlack',
        'cornerAndCenterDirection' => 'setCornerAndCenterDirection',
        'shredPattern' => 'setShredPattern',
        'orientation' => 'setOrientation',
        'spokes' => 'setSpokes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'advanceAfter' => 'getAdvanceAfter',
        'advanceAfterTime' => 'getAdvanceAfterTime',
        'advanceOnClick' => 'getAdvanceOnClick',
        'soundIsBuiltIn' => 'getSoundIsBuiltIn',
        'soundLoop' => 'getSoundLoop',
        'soundMode' => 'getSoundMode',
        'soundName' => 'getSoundName',
        'speed' => 'getSpeed',
        'cornerDirection' => 'getCornerDirection',
        'eightDirection' => 'getEightDirection',
        'inOutDirection' => 'getInOutDirection',
        'hasBounce' => 'getHasBounce',
        'sideDirection' => 'getSideDirection',
        'pattern' => 'getPattern',
        'leftRightDirection' => 'getLeftRightDirection',
        'morphType' => 'getMorphType',
        'fromBlack' => 'getFromBlack',
        'orientationDirection' => 'getOrientationDirection',
        'throughBlack' => 'getThroughBlack',
        'cornerAndCenterDirection' => 'getCornerAndCenterDirection',
        'shredPattern' => 'getShredPattern',
        'orientation' => 'getOrientation',
        'spokes' => 'getSpokes'
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

    const TYPE_NONE = 'None';
    const TYPE_BLINDS = 'Blinds';
    const TYPE_CHECKER = 'Checker';
    const TYPE_CIRCLE = 'Circle';
    const TYPE_COMB = 'Comb';
    const TYPE_COVER = 'Cover';
    const TYPE_CUT = 'Cut';
    const TYPE_DIAMOND = 'Diamond';
    const TYPE_DISSOLVE = 'Dissolve';
    const TYPE_FADE = 'Fade';
    const TYPE_NEWSFLASH = 'Newsflash';
    const TYPE_PLUS = 'Plus';
    const TYPE_PULL = 'Pull';
    const TYPE_PUSH = 'Push';
    const TYPE_RANDOM = 'Random';
    const TYPE_RANDOM_BAR = 'RandomBar';
    const TYPE_SPLIT = 'Split';
    const TYPE_STRIPS = 'Strips';
    const TYPE_WEDGE = 'Wedge';
    const TYPE_WHEEL = 'Wheel';
    const TYPE_WIPE = 'Wipe';
    const TYPE_ZOOM = 'Zoom';
    const TYPE_VORTEX = 'Vortex';
    const TYPE__SWITCH = 'Switch';
    const TYPE_FLIP = 'Flip';
    const TYPE_RIPPLE = 'Ripple';
    const TYPE_HONEYCOMB = 'Honeycomb';
    const TYPE_CUBE = 'Cube';
    const TYPE_BOX = 'Box';
    const TYPE_ROTATE = 'Rotate';
    const TYPE_ORBIT = 'Orbit';
    const TYPE_DOORS = 'Doors';
    const TYPE_WINDOW = 'Window';
    const TYPE_FERRIS = 'Ferris';
    const TYPE_GALLERY = 'Gallery';
    const TYPE_CONVEYOR = 'Conveyor';
    const TYPE_PAN = 'Pan';
    const TYPE_GLITTER = 'Glitter';
    const TYPE_WARP = 'Warp';
    const TYPE_FLYTHROUGH = 'Flythrough';
    const TYPE_FLASH = 'Flash';
    const TYPE_SHRED = 'Shred';
    const TYPE_REVEAL = 'Reveal';
    const TYPE_WHEEL_REVERSE = 'WheelReverse';
    const TYPE_FALL_OVER = 'FallOver';
    const TYPE_DRAPE = 'Drape';
    const TYPE_CURTAINS = 'Curtains';
    const TYPE_WIND = 'Wind';
    const TYPE_PRESTIGE = 'Prestige';
    const TYPE_FRACTURE = 'Fracture';
    const TYPE_CRUSH = 'Crush';
    const TYPE_PEEL_OFF = 'PeelOff';
    const TYPE_PAGE_CURL_DOUBLE = 'PageCurlDouble';
    const TYPE_PAGE_CURL_SINGLE = 'PageCurlSingle';
    const TYPE_AIRPLANE = 'Airplane';
    const TYPE_ORIGAMI = 'Origami';
    const TYPE_MORPH = 'Morph';
    const SOUND_MODE_START_SOUND = 'StartSound';
    const SOUND_MODE_STOP_PREVOIUS_SOUND = 'StopPrevoiusSound';
    const SOUND_MODE_NOT_DEFINED = 'NotDefined';
    const SPEED_FAST = 'Fast';
    const SPEED_MEDIUM = 'Medium';
    const SPEED_SLOW = 'Slow';
    const CORNER_DIRECTION_LEFT_DOWN = 'LeftDown';
    const CORNER_DIRECTION_LEFT_UP = 'LeftUp';
    const CORNER_DIRECTION_RIGHT_DOWN = 'RightDown';
    const CORNER_DIRECTION_RIGHT_UP = 'RightUp';
    const EIGHT_DIRECTION_LEFT_DOWN = 'LeftDown';
    const EIGHT_DIRECTION_LEFT_UP = 'LeftUp';
    const EIGHT_DIRECTION_RIGHT_DOWN = 'RightDown';
    const EIGHT_DIRECTION_RIGHT_UP = 'RightUp';
    const EIGHT_DIRECTION_LEFT = 'Left';
    const EIGHT_DIRECTION_UP = 'Up';
    const EIGHT_DIRECTION_DOWN = 'Down';
    const EIGHT_DIRECTION_RIGHT = 'Right';
    const IN_OUT_DIRECTION_IN = 'In';
    const IN_OUT_DIRECTION_OUT = 'Out';
    const SIDE_DIRECTION_LEFT = 'Left';
    const SIDE_DIRECTION_UP = 'Up';
    const SIDE_DIRECTION_DOWN = 'Down';
    const SIDE_DIRECTION_RIGHT = 'Right';
    const PATTERN_DIAMOND = 'Diamond';
    const PATTERN_HEXAGON = 'Hexagon';
    const LEFT_RIGHT_DIRECTION_LEFT = 'Left';
    const LEFT_RIGHT_DIRECTION_RIGHT = 'Right';
    const MORPH_TYPE_BY_OBJECT = 'ByObject';
    const MORPH_TYPE_BY_WORD = 'ByWord';
    const MORPH_TYPE_BY_CHAR = 'ByChar';
    const ORIENTATION_DIRECTION_HORIZONTAL = 'Horizontal';
    const ORIENTATION_DIRECTION_VERTICAL = 'Vertical';
    const CORNER_AND_CENTER_DIRECTION_LEFT_DOWN = 'LeftDown';
    const CORNER_AND_CENTER_DIRECTION_LEFT_UP = 'LeftUp';
    const CORNER_AND_CENTER_DIRECTION_RIGHT_DOWN = 'RightDown';
    const CORNER_AND_CENTER_DIRECTION_RIGHT_UP = 'RightUp';
    const CORNER_AND_CENTER_DIRECTION_CENTER = 'Center';
    const SHRED_PATTERN_STRIP = 'Strip';
    const SHRED_PATTERN_RECTANGLE = 'Rectangle';
    const ORIENTATION_HORIZONTAL = 'Horizontal';
    const ORIENTATION_VERTICAL = 'Vertical';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_BLINDS,
            self::TYPE_CHECKER,
            self::TYPE_CIRCLE,
            self::TYPE_COMB,
            self::TYPE_COVER,
            self::TYPE_CUT,
            self::TYPE_DIAMOND,
            self::TYPE_DISSOLVE,
            self::TYPE_FADE,
            self::TYPE_NEWSFLASH,
            self::TYPE_PLUS,
            self::TYPE_PULL,
            self::TYPE_PUSH,
            self::TYPE_RANDOM,
            self::TYPE_RANDOM_BAR,
            self::TYPE_SPLIT,
            self::TYPE_STRIPS,
            self::TYPE_WEDGE,
            self::TYPE_WHEEL,
            self::TYPE_WIPE,
            self::TYPE_ZOOM,
            self::TYPE_VORTEX,
            self::TYPE__SWITCH,
            self::TYPE_FLIP,
            self::TYPE_RIPPLE,
            self::TYPE_HONEYCOMB,
            self::TYPE_CUBE,
            self::TYPE_BOX,
            self::TYPE_ROTATE,
            self::TYPE_ORBIT,
            self::TYPE_DOORS,
            self::TYPE_WINDOW,
            self::TYPE_FERRIS,
            self::TYPE_GALLERY,
            self::TYPE_CONVEYOR,
            self::TYPE_PAN,
            self::TYPE_GLITTER,
            self::TYPE_WARP,
            self::TYPE_FLYTHROUGH,
            self::TYPE_FLASH,
            self::TYPE_SHRED,
            self::TYPE_REVEAL,
            self::TYPE_WHEEL_REVERSE,
            self::TYPE_FALL_OVER,
            self::TYPE_DRAPE,
            self::TYPE_CURTAINS,
            self::TYPE_WIND,
            self::TYPE_PRESTIGE,
            self::TYPE_FRACTURE,
            self::TYPE_CRUSH,
            self::TYPE_PEEL_OFF,
            self::TYPE_PAGE_CURL_DOUBLE,
            self::TYPE_PAGE_CURL_SINGLE,
            self::TYPE_AIRPLANE,
            self::TYPE_ORIGAMI,
            self::TYPE_MORPH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSoundModeAllowableValues()
    {
        return [
            self::SOUND_MODE_START_SOUND,
            self::SOUND_MODE_STOP_PREVOIUS_SOUND,
            self::SOUND_MODE_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpeedAllowableValues()
    {
        return [
            self::SPEED_FAST,
            self::SPEED_MEDIUM,
            self::SPEED_SLOW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCornerDirectionAllowableValues()
    {
        return [
            self::CORNER_DIRECTION_LEFT_DOWN,
            self::CORNER_DIRECTION_LEFT_UP,
            self::CORNER_DIRECTION_RIGHT_DOWN,
            self::CORNER_DIRECTION_RIGHT_UP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEightDirectionAllowableValues()
    {
        return [
            self::EIGHT_DIRECTION_LEFT_DOWN,
            self::EIGHT_DIRECTION_LEFT_UP,
            self::EIGHT_DIRECTION_RIGHT_DOWN,
            self::EIGHT_DIRECTION_RIGHT_UP,
            self::EIGHT_DIRECTION_LEFT,
            self::EIGHT_DIRECTION_UP,
            self::EIGHT_DIRECTION_DOWN,
            self::EIGHT_DIRECTION_RIGHT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInOutDirectionAllowableValues()
    {
        return [
            self::IN_OUT_DIRECTION_IN,
            self::IN_OUT_DIRECTION_OUT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideDirectionAllowableValues()
    {
        return [
            self::SIDE_DIRECTION_LEFT,
            self::SIDE_DIRECTION_UP,
            self::SIDE_DIRECTION_DOWN,
            self::SIDE_DIRECTION_RIGHT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPatternAllowableValues()
    {
        return [
            self::PATTERN_DIAMOND,
            self::PATTERN_HEXAGON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeftRightDirectionAllowableValues()
    {
        return [
            self::LEFT_RIGHT_DIRECTION_LEFT,
            self::LEFT_RIGHT_DIRECTION_RIGHT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMorphTypeAllowableValues()
    {
        return [
            self::MORPH_TYPE_BY_OBJECT,
            self::MORPH_TYPE_BY_WORD,
            self::MORPH_TYPE_BY_CHAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationDirectionAllowableValues()
    {
        return [
            self::ORIENTATION_DIRECTION_HORIZONTAL,
            self::ORIENTATION_DIRECTION_VERTICAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCornerAndCenterDirectionAllowableValues()
    {
        return [
            self::CORNER_AND_CENTER_DIRECTION_LEFT_DOWN,
            self::CORNER_AND_CENTER_DIRECTION_LEFT_UP,
            self::CORNER_AND_CENTER_DIRECTION_RIGHT_DOWN,
            self::CORNER_AND_CENTER_DIRECTION_RIGHT_UP,
            self::CORNER_AND_CENTER_DIRECTION_CENTER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShredPatternAllowableValues()
    {
        return [
            self::SHRED_PATTERN_STRIP,
            self::SHRED_PATTERN_RECTANGLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_HORIZONTAL,
            self::ORIENTATION_VERTICAL,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['advanceAfter'] = isset($data['advanceAfter']) ? $data['advanceAfter'] : null;
        $this->container['advanceAfterTime'] = isset($data['advanceAfterTime']) ? $data['advanceAfterTime'] : null;
        $this->container['advanceOnClick'] = isset($data['advanceOnClick']) ? $data['advanceOnClick'] : null;
        $this->container['soundIsBuiltIn'] = isset($data['soundIsBuiltIn']) ? $data['soundIsBuiltIn'] : null;
        $this->container['soundLoop'] = isset($data['soundLoop']) ? $data['soundLoop'] : null;
        $this->container['soundMode'] = isset($data['soundMode']) ? $data['soundMode'] : null;
        $this->container['soundName'] = isset($data['soundName']) ? $data['soundName'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['cornerDirection'] = isset($data['cornerDirection']) ? $data['cornerDirection'] : null;
        $this->container['eightDirection'] = isset($data['eightDirection']) ? $data['eightDirection'] : null;
        $this->container['inOutDirection'] = isset($data['inOutDirection']) ? $data['inOutDirection'] : null;
        $this->container['hasBounce'] = isset($data['hasBounce']) ? $data['hasBounce'] : null;
        $this->container['sideDirection'] = isset($data['sideDirection']) ? $data['sideDirection'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['leftRightDirection'] = isset($data['leftRightDirection']) ? $data['leftRightDirection'] : null;
        $this->container['morphType'] = isset($data['morphType']) ? $data['morphType'] : null;
        $this->container['fromBlack'] = isset($data['fromBlack']) ? $data['fromBlack'] : null;
        $this->container['orientationDirection'] = isset($data['orientationDirection']) ? $data['orientationDirection'] : null;
        $this->container['throughBlack'] = isset($data['throughBlack']) ? $data['throughBlack'] : null;
        $this->container['cornerAndCenterDirection'] = isset($data['cornerAndCenterDirection']) ? $data['cornerAndCenterDirection'] : null;
        $this->container['shredPattern'] = isset($data['shredPattern']) ? $data['shredPattern'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['spokes'] = isset($data['spokes']) ? $data['spokes'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSoundModeAllowableValues();
        if (!in_array($this->container['soundMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'soundMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpeedAllowableValues();
        if (!in_array($this->container['speed'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'speed', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCornerDirectionAllowableValues();
        if (!in_array($this->container['cornerDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cornerDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEightDirectionAllowableValues();
        if (!in_array($this->container['eightDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'eightDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInOutDirectionAllowableValues();
        if (!in_array($this->container['inOutDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inOutDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSideDirectionAllowableValues();
        if (!in_array($this->container['sideDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sideDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPatternAllowableValues();
        if (!in_array($this->container['pattern'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pattern', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeftRightDirectionAllowableValues();
        if (!in_array($this->container['leftRightDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leftRightDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMorphTypeAllowableValues();
        if (!in_array($this->container['morphType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'morphType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrientationDirectionAllowableValues();
        if (!in_array($this->container['orientationDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orientationDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCornerAndCenterDirectionAllowableValues();
        if (!in_array($this->container['cornerAndCenterDirection'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cornerAndCenterDirection', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShredPatternAllowableValues();
        if (!in_array($this->container['shredPattern'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shredPattern', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orientation', must be one of '%s'",
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSoundModeAllowableValues();
        if (!in_array($this->container['soundMode'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSpeedAllowableValues();
        if (!in_array($this->container['speed'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCornerDirectionAllowableValues();
        if (!in_array($this->container['cornerDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getEightDirectionAllowableValues();
        if (!in_array($this->container['eightDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getInOutDirectionAllowableValues();
        if (!in_array($this->container['inOutDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSideDirectionAllowableValues();
        if (!in_array($this->container['sideDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPatternAllowableValues();
        if (!in_array($this->container['pattern'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLeftRightDirectionAllowableValues();
        if (!in_array($this->container['leftRightDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMorphTypeAllowableValues();
        if (!in_array($this->container['morphType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getOrientationDirectionAllowableValues();
        if (!in_array($this->container['orientationDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCornerAndCenterDirectionAllowableValues();
        if (!in_array($this->container['cornerAndCenterDirection'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getShredPatternAllowableValues();
        if (!in_array($this->container['shredPattern'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Transition Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();


        if (is_numeric($type)) {
            if ($type >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'type', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $type = $allowedValues[$type];
            }
        } else {
            if (!is_null($type) && !in_array($type, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'type', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets advanceAfter
     *
     * @return bool
     */
    public function getAdvanceAfter()
    {
        return $this->container['advanceAfter'];
    }

    /**
     * Sets advanceAfter
     *
     * @param bool $advanceAfter Advance After
     *
     * @return $this
     */
    public function setAdvanceAfter($advanceAfter)
    {
        $this->container['advanceAfter'] = $advanceAfter;

        return $this;
    }

    /**
     * Gets advanceAfterTime
     *
     * @return int
     */
    public function getAdvanceAfterTime()
    {
        return $this->container['advanceAfterTime'];
    }

    /**
     * Sets advanceAfterTime
     *
     * @param int $advanceAfterTime Advance After Time
     *
     * @return $this
     */
    public function setAdvanceAfterTime($advanceAfterTime)
    {
        $this->container['advanceAfterTime'] = $advanceAfterTime;

        return $this;
    }

    /**
     * Gets advanceOnClick
     *
     * @return bool
     */
    public function getAdvanceOnClick()
    {
        return $this->container['advanceOnClick'];
    }

    /**
     * Sets advanceOnClick
     *
     * @param bool $advanceOnClick Advance On Click
     *
     * @return $this
     */
    public function setAdvanceOnClick($advanceOnClick)
    {
        $this->container['advanceOnClick'] = $advanceOnClick;

        return $this;
    }

    /**
     * Gets soundIsBuiltIn
     *
     * @return bool
     */
    public function getSoundIsBuiltIn()
    {
        return $this->container['soundIsBuiltIn'];
    }

    /**
     * Sets soundIsBuiltIn
     *
     * @param bool $soundIsBuiltIn Sound Is Built In
     *
     * @return $this
     */
    public function setSoundIsBuiltIn($soundIsBuiltIn)
    {
        $this->container['soundIsBuiltIn'] = $soundIsBuiltIn;

        return $this;
    }

    /**
     * Gets soundLoop
     *
     * @return bool
     */
    public function getSoundLoop()
    {
        return $this->container['soundLoop'];
    }

    /**
     * Sets soundLoop
     *
     * @param bool $soundLoop Sound Loop
     *
     * @return $this
     */
    public function setSoundLoop($soundLoop)
    {
        $this->container['soundLoop'] = $soundLoop;

        return $this;
    }

    /**
     * Gets soundMode
     *
     * @return string
     */
    public function getSoundMode()
    {
        return $this->container['soundMode'];
    }

    /**
     * Sets soundMode
     *
     * @param string $soundMode Sound Mode
     *
     * @return $this
     */
    public function setSoundMode($soundMode)
    {
        $allowedValues = $this->getSoundModeAllowableValues();


        if (is_numeric($soundMode)) {
            if ($soundMode >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'soundMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $soundMode = $allowedValues[$soundMode];
            }
        } else {
            if (!is_null($soundMode) && !in_array($soundMode, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'soundMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['soundMode'] = $soundMode;

        return $this;
    }

    /**
     * Gets soundName
     *
     * @return string
     */
    public function getSoundName()
    {
        return $this->container['soundName'];
    }

    /**
     * Sets soundName
     *
     * @param string $soundName Sound Name
     *
     * @return $this
     */
    public function setSoundName($soundName)
    {
        $this->container['soundName'] = $soundName;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return string
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param string $speed Speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $allowedValues = $this->getSpeedAllowableValues();


        if (is_numeric($speed)) {
            if ($speed >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'speed', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $speed = $allowedValues[$speed];
            }
        } else {
            if (!is_null($speed) && !in_array($speed, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'speed', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets cornerDirection
     *
     * @return string
     */
    public function getCornerDirection()
    {
        return $this->container['cornerDirection'];
    }

    /**
     * Sets cornerDirection
     *
     * @param string $cornerDirection Corner Direction.
     *
     * @return $this
     */
    public function setCornerDirection($cornerDirection)
    {
        $allowedValues = $this->getCornerDirectionAllowableValues();


        if (is_numeric($cornerDirection)) {
            if ($cornerDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'cornerDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $cornerDirection = $allowedValues[$cornerDirection];
            }
        } else {
            if (!is_null($cornerDirection) && !in_array($cornerDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'cornerDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['cornerDirection'] = $cornerDirection;

        return $this;
    }

    /**
     * Gets eightDirection
     *
     * @return string
     */
    public function getEightDirection()
    {
        return $this->container['eightDirection'];
    }

    /**
     * Sets eightDirection
     *
     * @param string $eightDirection Eight Direction.
     *
     * @return $this
     */
    public function setEightDirection($eightDirection)
    {
        $allowedValues = $this->getEightDirectionAllowableValues();


        if (is_numeric($eightDirection)) {
            if ($eightDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'eightDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $eightDirection = $allowedValues[$eightDirection];
            }
        } else {
            if (!is_null($eightDirection) && !in_array($eightDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'eightDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['eightDirection'] = $eightDirection;

        return $this;
    }

    /**
     * Gets inOutDirection
     *
     * @return string
     */
    public function getInOutDirection()
    {
        return $this->container['inOutDirection'];
    }

    /**
     * Sets inOutDirection
     *
     * @param string $inOutDirection In/Out Direction.
     *
     * @return $this
     */
    public function setInOutDirection($inOutDirection)
    {
        $allowedValues = $this->getInOutDirectionAllowableValues();


        if (is_numeric($inOutDirection)) {
            if ($inOutDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'inOutDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $inOutDirection = $allowedValues[$inOutDirection];
            }
        } else {
            if (!is_null($inOutDirection) && !in_array($inOutDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'inOutDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['inOutDirection'] = $inOutDirection;

        return $this;
    }

    /**
     * Gets hasBounce
     *
     * @return bool
     */
    public function getHasBounce()
    {
        return $this->container['hasBounce'];
    }

    /**
     * Sets hasBounce
     *
     * @param bool $hasBounce Has Bounce.
     *
     * @return $this
     */
    public function setHasBounce($hasBounce)
    {
        $this->container['hasBounce'] = $hasBounce;

        return $this;
    }

    /**
     * Gets sideDirection
     *
     * @return string
     */
    public function getSideDirection()
    {
        return $this->container['sideDirection'];
    }

    /**
     * Sets sideDirection
     *
     * @param string $sideDirection Side Direction.
     *
     * @return $this
     */
    public function setSideDirection($sideDirection)
    {
        $allowedValues = $this->getSideDirectionAllowableValues();


        if (is_numeric($sideDirection)) {
            if ($sideDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'sideDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $sideDirection = $allowedValues[$sideDirection];
            }
        } else {
            if (!is_null($sideDirection) && !in_array($sideDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'sideDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['sideDirection'] = $sideDirection;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return string
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string $pattern Pattern.
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $allowedValues = $this->getPatternAllowableValues();


        if (is_numeric($pattern)) {
            if ($pattern >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pattern', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $pattern = $allowedValues[$pattern];
            }
        } else {
            if (!is_null($pattern) && !in_array($pattern, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pattern', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets leftRightDirection
     *
     * @return string
     */
    public function getLeftRightDirection()
    {
        return $this->container['leftRightDirection'];
    }

    /**
     * Sets leftRightDirection
     *
     * @param string $leftRightDirection Left/Right Direction.
     *
     * @return $this
     */
    public function setLeftRightDirection($leftRightDirection)
    {
        $allowedValues = $this->getLeftRightDirectionAllowableValues();


        if (is_numeric($leftRightDirection)) {
            if ($leftRightDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'leftRightDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $leftRightDirection = $allowedValues[$leftRightDirection];
            }
        } else {
            if (!is_null($leftRightDirection) && !in_array($leftRightDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'leftRightDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['leftRightDirection'] = $leftRightDirection;

        return $this;
    }

    /**
     * Gets morphType
     *
     * @return string
     */
    public function getMorphType()
    {
        return $this->container['morphType'];
    }

    /**
     * Sets morphType
     *
     * @param string $morphType Morph Type.
     *
     * @return $this
     */
    public function setMorphType($morphType)
    {
        $allowedValues = $this->getMorphTypeAllowableValues();


        if (is_numeric($morphType)) {
            if ($morphType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'morphType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $morphType = $allowedValues[$morphType];
            }
        } else {
            if (!is_null($morphType) && !in_array($morphType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'morphType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['morphType'] = $morphType;

        return $this;
    }

    /**
     * Gets fromBlack
     *
     * @return bool
     */
    public function getFromBlack()
    {
        return $this->container['fromBlack'];
    }

    /**
     * Sets fromBlack
     *
     * @param bool $fromBlack From Black.
     *
     * @return $this
     */
    public function setFromBlack($fromBlack)
    {
        $this->container['fromBlack'] = $fromBlack;

        return $this;
    }

    /**
     * Gets orientationDirection
     *
     * @return string
     */
    public function getOrientationDirection()
    {
        return $this->container['orientationDirection'];
    }

    /**
     * Sets orientationDirection
     *
     * @param string $orientationDirection Orientation Direction.
     *
     * @return $this
     */
    public function setOrientationDirection($orientationDirection)
    {
        $allowedValues = $this->getOrientationDirectionAllowableValues();


        if (is_numeric($orientationDirection)) {
            if ($orientationDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orientationDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $orientationDirection = $allowedValues[$orientationDirection];
            }
        } else {
            if (!is_null($orientationDirection) && !in_array($orientationDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orientationDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['orientationDirection'] = $orientationDirection;

        return $this;
    }

    /**
     * Gets throughBlack
     *
     * @return bool
     */
    public function getThroughBlack()
    {
        return $this->container['throughBlack'];
    }

    /**
     * Sets throughBlack
     *
     * @param bool $throughBlack Through Black.
     *
     * @return $this
     */
    public function setThroughBlack($throughBlack)
    {
        $this->container['throughBlack'] = $throughBlack;

        return $this;
    }

    /**
     * Gets cornerAndCenterDirection
     *
     * @return string
     */
    public function getCornerAndCenterDirection()
    {
        return $this->container['cornerAndCenterDirection'];
    }

    /**
     * Sets cornerAndCenterDirection
     *
     * @param string $cornerAndCenterDirection Orientation.
     *
     * @return $this
     */
    public function setCornerAndCenterDirection($cornerAndCenterDirection)
    {
        $allowedValues = $this->getCornerAndCenterDirectionAllowableValues();


        if (is_numeric($cornerAndCenterDirection)) {
            if ($cornerAndCenterDirection >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'cornerAndCenterDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $cornerAndCenterDirection = $allowedValues[$cornerAndCenterDirection];
            }
        } else {
            if (!is_null($cornerAndCenterDirection) && !in_array($cornerAndCenterDirection, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'cornerAndCenterDirection', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['cornerAndCenterDirection'] = $cornerAndCenterDirection;

        return $this;
    }

    /**
     * Gets shredPattern
     *
     * @return string
     */
    public function getShredPattern()
    {
        return $this->container['shredPattern'];
    }

    /**
     * Sets shredPattern
     *
     * @param string $shredPattern Shred Pattern.
     *
     * @return $this
     */
    public function setShredPattern($shredPattern)
    {
        $allowedValues = $this->getShredPatternAllowableValues();


        if (is_numeric($shredPattern)) {
            if ($shredPattern >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'shredPattern', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $shredPattern = $allowedValues[$shredPattern];
            }
        } else {
            if (!is_null($shredPattern) && !in_array($shredPattern, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'shredPattern', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['shredPattern'] = $shredPattern;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param string $orientation Orientation.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $allowedValues = $this->getOrientationAllowableValues();


        if (is_numeric($orientation)) {
            if ($orientation >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orientation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $orientation = $allowedValues[$orientation];
            }
        } else {
            if (!is_null($orientation) && !in_array($orientation, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'orientation', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets spokes
     *
     * @return int
     */
    public function getSpokes()
    {
        return $this->container['spokes'];
    }

    /**
     * Sets spokes
     *
     * @param int $spokes Spokes.
     *
     * @return $this
     */
    public function setSpokes($spokes)
    {
        $this->container['spokes'] = $spokes;

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


