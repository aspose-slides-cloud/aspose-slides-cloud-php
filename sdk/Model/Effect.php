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
 * Effect Class Doc Comment
 *
 * @category Class
 * @description Represents comment of slide
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Effect implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Effect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'subtype' => 'string',
        'presetClassType' => 'string',
        'shapeIndex' => 'int',
        'triggerType' => 'string',
        'accelerate' => 'double',
        'autoReverse' => 'bool',
        'decelerate' => 'double',
        'duration' => 'double',
        'repeatCount' => 'double',
        'repeatDuration' => 'double',
        'restart' => 'string',
        'speed' => 'double',
        'triggerDelayTime' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'subtype' => null,
        'presetClassType' => null,
        'shapeIndex' => 'int32',
        'triggerType' => null,
        'accelerate' => 'double',
        'autoReverse' => null,
        'decelerate' => 'double',
        'duration' => 'double',
        'repeatCount' => 'double',
        'repeatDuration' => 'double',
        'restart' => null,
        'speed' => 'double',
        'triggerDelayTime' => 'double'
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
        'subtype' => 'Subtype',
        'presetClassType' => 'PresetClassType',
        'shapeIndex' => 'ShapeIndex',
        'triggerType' => 'TriggerType',
        'accelerate' => 'Accelerate',
        'autoReverse' => 'AutoReverse',
        'decelerate' => 'Decelerate',
        'duration' => 'Duration',
        'repeatCount' => 'RepeatCount',
        'repeatDuration' => 'RepeatDuration',
        'restart' => 'Restart',
        'speed' => 'Speed',
        'triggerDelayTime' => 'TriggerDelayTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'presetClassType' => 'setPresetClassType',
        'shapeIndex' => 'setShapeIndex',
        'triggerType' => 'setTriggerType',
        'accelerate' => 'setAccelerate',
        'autoReverse' => 'setAutoReverse',
        'decelerate' => 'setDecelerate',
        'duration' => 'setDuration',
        'repeatCount' => 'setRepeatCount',
        'repeatDuration' => 'setRepeatDuration',
        'restart' => 'setRestart',
        'speed' => 'setSpeed',
        'triggerDelayTime' => 'setTriggerDelayTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'presetClassType' => 'getPresetClassType',
        'shapeIndex' => 'getShapeIndex',
        'triggerType' => 'getTriggerType',
        'accelerate' => 'getAccelerate',
        'autoReverse' => 'getAutoReverse',
        'decelerate' => 'getDecelerate',
        'duration' => 'getDuration',
        'repeatCount' => 'getRepeatCount',
        'repeatDuration' => 'getRepeatDuration',
        'restart' => 'getRestart',
        'speed' => 'getSpeed',
        'triggerDelayTime' => 'getTriggerDelayTime'
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

    const TYPE_APPEAR = 'Appear';
    const TYPE_CURVE_UP_DOWN = 'CurveUpDown';
    const TYPE_ASCEND = 'Ascend';
    const TYPE_BLAST = 'Blast';
    const TYPE_BLINDS = 'Blinds';
    const TYPE_BLINK = 'Blink';
    const TYPE_BOLD_FLASH = 'BoldFlash';
    const TYPE_BOLD_REVEAL = 'BoldReveal';
    const TYPE_BOOMERANG = 'Boomerang';
    const TYPE_BOUNCE = 'Bounce';
    const TYPE_BOX = 'Box';
    const TYPE_BRUSH_ON_COLOR = 'BrushOnColor';
    const TYPE_BRUSH_ON_UNDERLINE = 'BrushOnUnderline';
    const TYPE_CENTER_REVOLVE = 'CenterRevolve';
    const TYPE_CHANGE_FILL_COLOR = 'ChangeFillColor';
    const TYPE_CHANGE_FONT = 'ChangeFont';
    const TYPE_CHANGE_FONT_COLOR = 'ChangeFontColor';
    const TYPE_CHANGE_FONT_SIZE = 'ChangeFontSize';
    const TYPE_CHANGE_FONT_STYLE = 'ChangeFontStyle';
    const TYPE_CHANGE_LINE_COLOR = 'ChangeLineColor';
    const TYPE_CHECKERBOARD = 'Checkerboard';
    const TYPE_CIRCLE = 'Circle';
    const TYPE_COLOR_BLEND = 'ColorBlend';
    const TYPE_COLOR_TYPEWRITER = 'ColorTypewriter';
    const TYPE_COLOR_WAVE = 'ColorWave';
    const TYPE_COMPLEMENTARY_COLOR = 'ComplementaryColor';
    const TYPE_COMPLEMENTARY_COLOR2 = 'ComplementaryColor2';
    const TYPE_COMPRESS = 'Compress';
    const TYPE_CONTRASTING_COLOR = 'ContrastingColor';
    const TYPE_CRAWL = 'Crawl';
    const TYPE_CREDITS = 'Credits';
    const TYPE_CUSTOM = 'Custom';
    const TYPE_DARKEN = 'Darken';
    const TYPE_DESATURATE = 'Desaturate';
    const TYPE_DESCEND = 'Descend';
    const TYPE_DIAMOND = 'Diamond';
    const TYPE_DISSOLVE = 'Dissolve';
    const TYPE_EASE_IN_OUT = 'EaseInOut';
    const TYPE_EXPAND = 'Expand';
    const TYPE_FADE = 'Fade';
    const TYPE_FADED_SWIVEL = 'FadedSwivel';
    const TYPE_FADED_ZOOM = 'FadedZoom';
    const TYPE_FLASH_BULB = 'FlashBulb';
    const TYPE_FLASH_ONCE = 'FlashOnce';
    const TYPE_FLICKER = 'Flicker';
    const TYPE_FLIP = 'Flip';
    const TYPE_FLOAT = 'Float';
    const TYPE_FLY = 'Fly';
    const TYPE_FOLD = 'Fold';
    const TYPE_GLIDE = 'Glide';
    const TYPE_GROW_AND_TURN = 'GrowAndTurn';
    const TYPE_GROW_SHRINK = 'GrowShrink';
    const TYPE_GROW_WITH_COLOR = 'GrowWithColor';
    const TYPE_LIGHTEN = 'Lighten';
    const TYPE_LIGHT_SPEED = 'LightSpeed';
    const TYPE_MEDIA_PAUSE = 'MediaPause';
    const TYPE_MEDIA_PLAY = 'MediaPlay';
    const TYPE_MEDIA_STOP = 'MediaStop';
    const TYPE_PATH4_POINT_STAR = 'Path4PointStar';
    const TYPE_PATH5_POINT_STAR = 'Path5PointStar';
    const TYPE_PATH6_POINT_STAR = 'Path6PointStar';
    const TYPE_PATH8_POINT_STAR = 'Path8PointStar';
    const TYPE_PATH_ARC_DOWN = 'PathArcDown';
    const TYPE_PATH_ARC_LEFT = 'PathArcLeft';
    const TYPE_PATH_ARC_RIGHT = 'PathArcRight';
    const TYPE_PATH_ARC_UP = 'PathArcUp';
    const TYPE_PATH_BEAN = 'PathBean';
    const TYPE_PATH_BOUNCE_LEFT = 'PathBounceLeft';
    const TYPE_PATH_BOUNCE_RIGHT = 'PathBounceRight';
    const TYPE_PATH_BUZZSAW = 'PathBuzzsaw';
    const TYPE_PATH_CIRCLE = 'PathCircle';
    const TYPE_PATH_CRESCENT_MOON = 'PathCrescentMoon';
    const TYPE_PATH_CURVED_SQUARE = 'PathCurvedSquare';
    const TYPE_PATH_CURVED_X = 'PathCurvedX';
    const TYPE_PATH_CURVY_LEFT = 'PathCurvyLeft';
    const TYPE_PATH_CURVY_RIGHT = 'PathCurvyRight';
    const TYPE_PATH_CURVY_STAR = 'PathCurvyStar';
    const TYPE_PATH_DECAYING_WAVE = 'PathDecayingWave';
    const TYPE_PATH_DIAGONAL_DOWN_RIGHT = 'PathDiagonalDownRight';
    const TYPE_PATH_DIAGONAL_UP_RIGHT = 'PathDiagonalUpRight';
    const TYPE_PATH_DIAMOND = 'PathDiamond';
    const TYPE_PATH_DOWN = 'PathDown';
    const TYPE_PATH_EQUAL_TRIANGLE = 'PathEqualTriangle';
    const TYPE_PATH_FIGURE8_FOUR = 'PathFigure8Four';
    const TYPE_PATH_FOOTBALL = 'PathFootball';
    const TYPE_PATH_FUNNEL = 'PathFunnel';
    const TYPE_PATH_HEART = 'PathHeart';
    const TYPE_PATH_HEARTBEAT = 'PathHeartbeat';
    const TYPE_PATH_HEXAGON = 'PathHexagon';
    const TYPE_PATH_HORIZONTAL_FIGURE8 = 'PathHorizontalFigure8';
    const TYPE_PATH_INVERTED_SQUARE = 'PathInvertedSquare';
    const TYPE_PATH_INVERTED_TRIANGLE = 'PathInvertedTriangle';
    const TYPE_PATH_LEFT = 'PathLeft';
    const TYPE_PATH_LOOPDE_LOOP = 'PathLoopdeLoop';
    const TYPE_PATH_NEUTRON = 'PathNeutron';
    const TYPE_PATH_OCTAGON = 'PathOctagon';
    const TYPE_PATH_PARALLELOGRAM = 'PathParallelogram';
    const TYPE_PATH_PEANUT = 'PathPeanut';
    const TYPE_PATH_PENTAGON = 'PathPentagon';
    const TYPE_PATH_PLUS = 'PathPlus';
    const TYPE_PATH_POINTY_STAR = 'PathPointyStar';
    const TYPE_PATH_RIGHT = 'PathRight';
    const TYPE_PATH_RIGHT_TRIANGLE = 'PathRightTriangle';
    const TYPE_PATH_S_CURVE1 = 'PathSCurve1';
    const TYPE_PATH_S_CURVE2 = 'PathSCurve2';
    const TYPE_PATH_SINE_WAVE = 'PathSineWave';
    const TYPE_PATH_SPIRAL_LEFT = 'PathSpiralLeft';
    const TYPE_PATH_SPIRAL_RIGHT = 'PathSpiralRight';
    const TYPE_PATH_SPRING = 'PathSpring';
    const TYPE_PATH_SQUARE = 'PathSquare';
    const TYPE_PATH_STAIRS_DOWN = 'PathStairsDown';
    const TYPE_PATH_SWOOSH = 'PathSwoosh';
    const TYPE_PATH_TEARDROP = 'PathTeardrop';
    const TYPE_PATH_TRAPEZOID = 'PathTrapezoid';
    const TYPE_PATH_TURN_DOWN = 'PathTurnDown';
    const TYPE_PATH_TURN_RIGHT = 'PathTurnRight';
    const TYPE_PATH_TURN_UP = 'PathTurnUp';
    const TYPE_PATH_TURN_UP_RIGHT = 'PathTurnUpRight';
    const TYPE_PATH_UP = 'PathUp';
    const TYPE_PATH_USER = 'PathUser';
    const TYPE_PATH_VERTICAL_FIGURE8 = 'PathVerticalFigure8';
    const TYPE_PATH_WAVE = 'PathWave';
    const TYPE_PATH_ZIGZAG = 'PathZigzag';
    const TYPE_PEEK = 'Peek';
    const TYPE_PINWHEEL = 'Pinwheel';
    const TYPE_PLUS = 'Plus';
    const TYPE_RANDOM_BARS = 'RandomBars';
    const TYPE_RANDOM_EFFECTS = 'RandomEffects';
    const TYPE_RISE_UP = 'RiseUp';
    const TYPE_SHIMMER = 'Shimmer';
    const TYPE_SLING = 'Sling';
    const TYPE_SPIN = 'Spin';
    const TYPE_SPINNER = 'Spinner';
    const TYPE_SPIRAL = 'Spiral';
    const TYPE_SPLIT = 'Split';
    const TYPE_STRETCH = 'Stretch';
    const TYPE_STRIPS = 'Strips';
    const TYPE_STYLE_EMPHASIS = 'StyleEmphasis';
    const TYPE_SWISH = 'Swish';
    const TYPE_SWIVEL = 'Swivel';
    const TYPE_TEETER = 'Teeter';
    const TYPE_THREAD = 'Thread';
    const TYPE_TRANSPARENCY = 'Transparency';
    const TYPE_UNFOLD = 'Unfold';
    const TYPE_VERTICAL_GROW = 'VerticalGrow';
    const TYPE_WAVE = 'Wave';
    const TYPE_WEDGE = 'Wedge';
    const TYPE_WHEEL = 'Wheel';
    const TYPE_WHIP = 'Whip';
    const TYPE_WIPE = 'Wipe';
    const TYPE_MAGNIFY = 'Magnify';
    const TYPE_ZOOM = 'Zoom';
    const TYPE_OLE_OBJECT_SHOW = 'OLEObjectShow';
    const TYPE_OLE_OBJECT_EDIT = 'OLEObjectEdit';
    const TYPE_OLE_OBJECT_OPEN = 'OLEObjectOpen';
    const SUBTYPE_NONE = 'None';
    const SUBTYPE_ACROSS = 'Across';
    const SUBTYPE_BOTTOM = 'Bottom';
    const SUBTYPE_BOTTOM_LEFT = 'BottomLeft';
    const SUBTYPE_BOTTOM_RIGHT = 'BottomRight';
    const SUBTYPE_CENTER = 'Center';
    const SUBTYPE_CLOCKWISE = 'Clockwise';
    const SUBTYPE_COUNTER_CLOCKWISE = 'CounterClockwise';
    const SUBTYPE_GRADUAL_AND_CYCLE_CLOCKWISE = 'GradualAndCycleClockwise';
    const SUBTYPE_GRADUAL_AND_CYCLE_COUNTER_CLOCKWISE = 'GradualAndCycleCounterClockwise';
    const SUBTYPE_DOWN = 'Down';
    const SUBTYPE_DOWN_LEFT = 'DownLeft';
    const SUBTYPE_DOWN_RIGHT = 'DownRight';
    const SUBTYPE_FONT_ALL_CAPS = 'FontAllCaps';
    const SUBTYPE_FONT_BOLD = 'FontBold';
    const SUBTYPE_FONT_ITALIC = 'FontItalic';
    const SUBTYPE_FONT_SHADOW = 'FontShadow';
    const SUBTYPE_FONT_STRIKETHROUGH = 'FontStrikethrough';
    const SUBTYPE_FONT_UNDERLINE = 'FontUnderline';
    const SUBTYPE_GRADUAL = 'Gradual';
    const SUBTYPE_HORIZONTAL = 'Horizontal';
    const SUBTYPE_HORIZONTAL_IN = 'HorizontalIn';
    const SUBTYPE_HORIZONTAL_OUT = 'HorizontalOut';
    const SUBTYPE_IN = 'In';
    const SUBTYPE_IN_BOTTOM = 'InBottom';
    const SUBTYPE_IN_CENTER = 'InCenter';
    const SUBTYPE_IN_SLIGHTLY = 'InSlightly';
    const SUBTYPE_INSTANT = 'Instant';
    const SUBTYPE_LEFT = 'Left';
    const SUBTYPE_ORDINAL_MASK = 'OrdinalMask';
    const SUBTYPE_OUT = 'Out';
    const SUBTYPE_OUT_BOTTOM = 'OutBottom';
    const SUBTYPE_OUT_CENTER = 'OutCenter';
    const SUBTYPE_OUT_SLIGHTLY = 'OutSlightly';
    const SUBTYPE_RIGHT = 'Right';
    const SUBTYPE_SLIGHTLY = 'Slightly';
    const SUBTYPE_TOP = 'Top';
    const SUBTYPE_TOP_LEFT = 'TopLeft';
    const SUBTYPE_TOP_RIGHT = 'TopRight';
    const SUBTYPE_UP = 'Up';
    const SUBTYPE_UP_LEFT = 'UpLeft';
    const SUBTYPE_UP_RIGHT = 'UpRight';
    const SUBTYPE_VERTICAL = 'Vertical';
    const SUBTYPE_VERTICAL_IN = 'VerticalIn';
    const SUBTYPE_VERTICAL_OUT = 'VerticalOut';
    const SUBTYPE_WHEEL1 = 'Wheel1';
    const SUBTYPE_WHEEL2 = 'Wheel2';
    const SUBTYPE_WHEEL3 = 'Wheel3';
    const SUBTYPE_WHEEL4 = 'Wheel4';
    const SUBTYPE_WHEEL8 = 'Wheel8';
    const PRESET_CLASS_TYPE_ENTRANCE = 'Entrance';
    const PRESET_CLASS_TYPE__EXIT = 'Exit';
    const PRESET_CLASS_TYPE_EMPHASIS = 'Emphasis';
    const PRESET_CLASS_TYPE_PATH = 'Path';
    const PRESET_CLASS_TYPE_MEDIA_CALL = 'MediaCall';
    const PRESET_CLASS_TYPE_OLE_ACTION_VERBS = 'OLEActionVerbs';
    const TRIGGER_TYPE_AFTER_PREVIOUS = 'AfterPrevious';
    const TRIGGER_TYPE_ON_CLICK = 'OnClick';
    const TRIGGER_TYPE_WITH_PREVIOUS = 'WithPrevious';
    const RESTART_ALWAYS = 'Always';
    const RESTART_WHEN_NOT_ACTIVE = 'WhenNotActive';
    const RESTART_NEVER = 'Never';
    const RESTART_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_APPEAR,
            self::TYPE_CURVE_UP_DOWN,
            self::TYPE_ASCEND,
            self::TYPE_BLAST,
            self::TYPE_BLINDS,
            self::TYPE_BLINK,
            self::TYPE_BOLD_FLASH,
            self::TYPE_BOLD_REVEAL,
            self::TYPE_BOOMERANG,
            self::TYPE_BOUNCE,
            self::TYPE_BOX,
            self::TYPE_BRUSH_ON_COLOR,
            self::TYPE_BRUSH_ON_UNDERLINE,
            self::TYPE_CENTER_REVOLVE,
            self::TYPE_CHANGE_FILL_COLOR,
            self::TYPE_CHANGE_FONT,
            self::TYPE_CHANGE_FONT_COLOR,
            self::TYPE_CHANGE_FONT_SIZE,
            self::TYPE_CHANGE_FONT_STYLE,
            self::TYPE_CHANGE_LINE_COLOR,
            self::TYPE_CHECKERBOARD,
            self::TYPE_CIRCLE,
            self::TYPE_COLOR_BLEND,
            self::TYPE_COLOR_TYPEWRITER,
            self::TYPE_COLOR_WAVE,
            self::TYPE_COMPLEMENTARY_COLOR,
            self::TYPE_COMPLEMENTARY_COLOR2,
            self::TYPE_COMPRESS,
            self::TYPE_CONTRASTING_COLOR,
            self::TYPE_CRAWL,
            self::TYPE_CREDITS,
            self::TYPE_CUSTOM,
            self::TYPE_DARKEN,
            self::TYPE_DESATURATE,
            self::TYPE_DESCEND,
            self::TYPE_DIAMOND,
            self::TYPE_DISSOLVE,
            self::TYPE_EASE_IN_OUT,
            self::TYPE_EXPAND,
            self::TYPE_FADE,
            self::TYPE_FADED_SWIVEL,
            self::TYPE_FADED_ZOOM,
            self::TYPE_FLASH_BULB,
            self::TYPE_FLASH_ONCE,
            self::TYPE_FLICKER,
            self::TYPE_FLIP,
            self::TYPE_FLOAT,
            self::TYPE_FLY,
            self::TYPE_FOLD,
            self::TYPE_GLIDE,
            self::TYPE_GROW_AND_TURN,
            self::TYPE_GROW_SHRINK,
            self::TYPE_GROW_WITH_COLOR,
            self::TYPE_LIGHTEN,
            self::TYPE_LIGHT_SPEED,
            self::TYPE_MEDIA_PAUSE,
            self::TYPE_MEDIA_PLAY,
            self::TYPE_MEDIA_STOP,
            self::TYPE_PATH4_POINT_STAR,
            self::TYPE_PATH5_POINT_STAR,
            self::TYPE_PATH6_POINT_STAR,
            self::TYPE_PATH8_POINT_STAR,
            self::TYPE_PATH_ARC_DOWN,
            self::TYPE_PATH_ARC_LEFT,
            self::TYPE_PATH_ARC_RIGHT,
            self::TYPE_PATH_ARC_UP,
            self::TYPE_PATH_BEAN,
            self::TYPE_PATH_BOUNCE_LEFT,
            self::TYPE_PATH_BOUNCE_RIGHT,
            self::TYPE_PATH_BUZZSAW,
            self::TYPE_PATH_CIRCLE,
            self::TYPE_PATH_CRESCENT_MOON,
            self::TYPE_PATH_CURVED_SQUARE,
            self::TYPE_PATH_CURVED_X,
            self::TYPE_PATH_CURVY_LEFT,
            self::TYPE_PATH_CURVY_RIGHT,
            self::TYPE_PATH_CURVY_STAR,
            self::TYPE_PATH_DECAYING_WAVE,
            self::TYPE_PATH_DIAGONAL_DOWN_RIGHT,
            self::TYPE_PATH_DIAGONAL_UP_RIGHT,
            self::TYPE_PATH_DIAMOND,
            self::TYPE_PATH_DOWN,
            self::TYPE_PATH_EQUAL_TRIANGLE,
            self::TYPE_PATH_FIGURE8_FOUR,
            self::TYPE_PATH_FOOTBALL,
            self::TYPE_PATH_FUNNEL,
            self::TYPE_PATH_HEART,
            self::TYPE_PATH_HEARTBEAT,
            self::TYPE_PATH_HEXAGON,
            self::TYPE_PATH_HORIZONTAL_FIGURE8,
            self::TYPE_PATH_INVERTED_SQUARE,
            self::TYPE_PATH_INVERTED_TRIANGLE,
            self::TYPE_PATH_LEFT,
            self::TYPE_PATH_LOOPDE_LOOP,
            self::TYPE_PATH_NEUTRON,
            self::TYPE_PATH_OCTAGON,
            self::TYPE_PATH_PARALLELOGRAM,
            self::TYPE_PATH_PEANUT,
            self::TYPE_PATH_PENTAGON,
            self::TYPE_PATH_PLUS,
            self::TYPE_PATH_POINTY_STAR,
            self::TYPE_PATH_RIGHT,
            self::TYPE_PATH_RIGHT_TRIANGLE,
            self::TYPE_PATH_S_CURVE1,
            self::TYPE_PATH_S_CURVE2,
            self::TYPE_PATH_SINE_WAVE,
            self::TYPE_PATH_SPIRAL_LEFT,
            self::TYPE_PATH_SPIRAL_RIGHT,
            self::TYPE_PATH_SPRING,
            self::TYPE_PATH_SQUARE,
            self::TYPE_PATH_STAIRS_DOWN,
            self::TYPE_PATH_SWOOSH,
            self::TYPE_PATH_TEARDROP,
            self::TYPE_PATH_TRAPEZOID,
            self::TYPE_PATH_TURN_DOWN,
            self::TYPE_PATH_TURN_RIGHT,
            self::TYPE_PATH_TURN_UP,
            self::TYPE_PATH_TURN_UP_RIGHT,
            self::TYPE_PATH_UP,
            self::TYPE_PATH_USER,
            self::TYPE_PATH_VERTICAL_FIGURE8,
            self::TYPE_PATH_WAVE,
            self::TYPE_PATH_ZIGZAG,
            self::TYPE_PEEK,
            self::TYPE_PINWHEEL,
            self::TYPE_PLUS,
            self::TYPE_RANDOM_BARS,
            self::TYPE_RANDOM_EFFECTS,
            self::TYPE_RISE_UP,
            self::TYPE_SHIMMER,
            self::TYPE_SLING,
            self::TYPE_SPIN,
            self::TYPE_SPINNER,
            self::TYPE_SPIRAL,
            self::TYPE_SPLIT,
            self::TYPE_STRETCH,
            self::TYPE_STRIPS,
            self::TYPE_STYLE_EMPHASIS,
            self::TYPE_SWISH,
            self::TYPE_SWIVEL,
            self::TYPE_TEETER,
            self::TYPE_THREAD,
            self::TYPE_TRANSPARENCY,
            self::TYPE_UNFOLD,
            self::TYPE_VERTICAL_GROW,
            self::TYPE_WAVE,
            self::TYPE_WEDGE,
            self::TYPE_WHEEL,
            self::TYPE_WHIP,
            self::TYPE_WIPE,
            self::TYPE_MAGNIFY,
            self::TYPE_ZOOM,
            self::TYPE_OLE_OBJECT_SHOW,
            self::TYPE_OLE_OBJECT_EDIT,
            self::TYPE_OLE_OBJECT_OPEN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubtypeAllowableValues()
    {
        return [
            self::SUBTYPE_NONE,
            self::SUBTYPE_ACROSS,
            self::SUBTYPE_BOTTOM,
            self::SUBTYPE_BOTTOM_LEFT,
            self::SUBTYPE_BOTTOM_RIGHT,
            self::SUBTYPE_CENTER,
            self::SUBTYPE_CLOCKWISE,
            self::SUBTYPE_COUNTER_CLOCKWISE,
            self::SUBTYPE_GRADUAL_AND_CYCLE_CLOCKWISE,
            self::SUBTYPE_GRADUAL_AND_CYCLE_COUNTER_CLOCKWISE,
            self::SUBTYPE_DOWN,
            self::SUBTYPE_DOWN_LEFT,
            self::SUBTYPE_DOWN_RIGHT,
            self::SUBTYPE_FONT_ALL_CAPS,
            self::SUBTYPE_FONT_BOLD,
            self::SUBTYPE_FONT_ITALIC,
            self::SUBTYPE_FONT_SHADOW,
            self::SUBTYPE_FONT_STRIKETHROUGH,
            self::SUBTYPE_FONT_UNDERLINE,
            self::SUBTYPE_GRADUAL,
            self::SUBTYPE_HORIZONTAL,
            self::SUBTYPE_HORIZONTAL_IN,
            self::SUBTYPE_HORIZONTAL_OUT,
            self::SUBTYPE_IN,
            self::SUBTYPE_IN_BOTTOM,
            self::SUBTYPE_IN_CENTER,
            self::SUBTYPE_IN_SLIGHTLY,
            self::SUBTYPE_INSTANT,
            self::SUBTYPE_LEFT,
            self::SUBTYPE_ORDINAL_MASK,
            self::SUBTYPE_OUT,
            self::SUBTYPE_OUT_BOTTOM,
            self::SUBTYPE_OUT_CENTER,
            self::SUBTYPE_OUT_SLIGHTLY,
            self::SUBTYPE_RIGHT,
            self::SUBTYPE_SLIGHTLY,
            self::SUBTYPE_TOP,
            self::SUBTYPE_TOP_LEFT,
            self::SUBTYPE_TOP_RIGHT,
            self::SUBTYPE_UP,
            self::SUBTYPE_UP_LEFT,
            self::SUBTYPE_UP_RIGHT,
            self::SUBTYPE_VERTICAL,
            self::SUBTYPE_VERTICAL_IN,
            self::SUBTYPE_VERTICAL_OUT,
            self::SUBTYPE_WHEEL1,
            self::SUBTYPE_WHEEL2,
            self::SUBTYPE_WHEEL3,
            self::SUBTYPE_WHEEL4,
            self::SUBTYPE_WHEEL8,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPresetClassTypeAllowableValues()
    {
        return [
            self::PRESET_CLASS_TYPE_ENTRANCE,
            self::PRESET_CLASS_TYPE__EXIT,
            self::PRESET_CLASS_TYPE_EMPHASIS,
            self::PRESET_CLASS_TYPE_PATH,
            self::PRESET_CLASS_TYPE_MEDIA_CALL,
            self::PRESET_CLASS_TYPE_OLE_ACTION_VERBS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_AFTER_PREVIOUS,
            self::TRIGGER_TYPE_ON_CLICK,
            self::TRIGGER_TYPE_WITH_PREVIOUS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRestartAllowableValues()
    {
        return [
            self::RESTART_ALWAYS,
            self::RESTART_WHEN_NOT_ACTIVE,
            self::RESTART_NEVER,
            self::RESTART_NOT_DEFINED,
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
        $this->container['subtype'] = isset($data['subtype']) ? $data['subtype'] : null;
        $this->container['presetClassType'] = isset($data['presetClassType']) ? $data['presetClassType'] : null;
        $this->container['shapeIndex'] = isset($data['shapeIndex']) ? $data['shapeIndex'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['accelerate'] = isset($data['accelerate']) ? $data['accelerate'] : null;
        $this->container['autoReverse'] = isset($data['autoReverse']) ? $data['autoReverse'] : null;
        $this->container['decelerate'] = isset($data['decelerate']) ? $data['decelerate'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['repeatCount'] = isset($data['repeatCount']) ? $data['repeatCount'] : null;
        $this->container['repeatDuration'] = isset($data['repeatDuration']) ? $data['repeatDuration'] : null;
        $this->container['restart'] = isset($data['restart']) ? $data['restart'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['triggerDelayTime'] = isset($data['triggerDelayTime']) ? $data['triggerDelayTime'] : null;
        
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

        $allowedValues = $this->getSubtypeAllowableValues();
        if (!in_array($this->container['subtype'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subtype', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPresetClassTypeAllowableValues();
        if (!in_array($this->container['presetClassType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'presetClassType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shapeIndex'] === null) {
            $invalidProperties[] = "'shapeIndex' can't be null";
        }
        $allowedValues = $this->getTriggerTypeAllowableValues();
        if (!in_array($this->container['triggerType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRestartAllowableValues();
        if (!in_array($this->container['restart'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'restart', must be one of '%s'",
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
        $allowedValues = $this->getSubtypeAllowableValues();
        if (!in_array($this->container['subtype'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPresetClassTypeAllowableValues();
        if (!in_array($this->container['presetClassType'], $allowedValues)) {
            return false;
        }
        if ($this->container['shapeIndex'] === null) {
            return false;
        }
        $allowedValues = $this->getTriggerTypeAllowableValues();
        if (!in_array($this->container['triggerType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRestartAllowableValues();
        if (!in_array($this->container['restart'], $allowedValues)) {
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
     * @param string $type Effect type.
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
     * Gets subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string $subtype Effect subtype.
     *
     * @return $this
     */
    public function setSubtype($subtype)
    {
        $allowedValues = $this->getSubtypeAllowableValues();


        if (is_numeric($subtype)) {
            if ($subtype >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'subtype', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $subtype = $allowedValues[$subtype];
            }
        } else {
            if (!is_null($subtype) && !in_array($subtype, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'subtype', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets presetClassType
     *
     * @return string
     */
    public function getPresetClassType()
    {
        return $this->container['presetClassType'];
    }

    /**
     * Sets presetClassType
     *
     * @param string $presetClassType Preset class type.
     *
     * @return $this
     */
    public function setPresetClassType($presetClassType)
    {
        $allowedValues = $this->getPresetClassTypeAllowableValues();


        if (is_numeric($presetClassType)) {
            if ($presetClassType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'presetClassType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $presetClassType = $allowedValues[$presetClassType];
            }
        } else {
            if (!is_null($presetClassType) && !in_array($presetClassType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'presetClassType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['presetClassType'] = $presetClassType;

        return $this;
    }

    /**
     * Gets shapeIndex
     *
     * @return int
     */
    public function getShapeIndex()
    {
        return $this->container['shapeIndex'];
    }

    /**
     * Sets shapeIndex
     *
     * @param int $shapeIndex Shape index.
     *
     * @return $this
     */
    public function setShapeIndex($shapeIndex)
    {
        $this->container['shapeIndex'] = $shapeIndex;

        return $this;
    }

    /**
     * Gets triggerType
     *
     * @return string
     */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
     * Sets triggerType
     *
     * @param string $triggerType Effect trigger type.
     *
     * @return $this
     */
    public function setTriggerType($triggerType)
    {
        $allowedValues = $this->getTriggerTypeAllowableValues();


        if (is_numeric($triggerType)) {
            if ($triggerType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'triggerType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $triggerType = $allowedValues[$triggerType];
            }
        } else {
            if (!is_null($triggerType) && !in_array($triggerType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'triggerType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['triggerType'] = $triggerType;

        return $this;
    }

    /**
     * Gets accelerate
     *
     * @return double
     */
    public function getAccelerate()
    {
        return $this->container['accelerate'];
    }

    /**
     * Sets accelerate
     *
     * @param double $accelerate The percentage of duration accelerate behavior effect.
     *
     * @return $this
     */
    public function setAccelerate($accelerate)
    {
        $this->container['accelerate'] = $accelerate;

        return $this;
    }

    /**
     * Gets autoReverse
     *
     * @return bool
     */
    public function getAutoReverse()
    {
        return $this->container['autoReverse'];
    }

    /**
     * Sets autoReverse
     *
     * @param bool $autoReverse True to automatically play the animation in reverse after playing it in the forward direction.
     *
     * @return $this
     */
    public function setAutoReverse($autoReverse)
    {
        $this->container['autoReverse'] = $autoReverse;

        return $this;
    }

    /**
     * Gets decelerate
     *
     * @return double
     */
    public function getDecelerate()
    {
        return $this->container['decelerate'];
    }

    /**
     * Sets decelerate
     *
     * @param double $decelerate The percentage of duration decelerate behavior effect.
     *
     * @return $this
     */
    public function setDecelerate($decelerate)
    {
        $this->container['decelerate'] = $decelerate;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return double
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param double $duration The duration of animation effect.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets repeatCount
     *
     * @return double
     */
    public function getRepeatCount()
    {
        return $this->container['repeatCount'];
    }

    /**
     * Sets repeatCount
     *
     * @param double $repeatCount The number of times the effect should repeat.
     *
     * @return $this
     */
    public function setRepeatCount($repeatCount)
    {
        $this->container['repeatCount'] = $repeatCount;

        return $this;
    }

    /**
     * Gets repeatDuration
     *
     * @return double
     */
    public function getRepeatDuration()
    {
        return $this->container['repeatDuration'];
    }

    /**
     * Sets repeatDuration
     *
     * @param double $repeatDuration The number of times the effect should repeat.
     *
     * @return $this
     */
    public function setRepeatDuration($repeatDuration)
    {
        $this->container['repeatDuration'] = $repeatDuration;

        return $this;
    }

    /**
     * Gets restart
     *
     * @return string
     */
    public function getRestart()
    {
        return $this->container['restart'];
    }

    /**
     * Sets restart
     *
     * @param string $restart The way for a effect to restart after complete.
     *
     * @return $this
     */
    public function setRestart($restart)
    {
        $allowedValues = $this->getRestartAllowableValues();


        if (is_numeric($restart)) {
            if ($restart >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'restart', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $restart = $allowedValues[$restart];
            }
        } else {
            if (!is_null($restart) && !in_array($restart, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'restart', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['restart'] = $restart;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return double
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param double $speed The percentage by which to speed up (or slow down) the timing.
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets triggerDelayTime
     *
     * @return double
     */
    public function getTriggerDelayTime()
    {
        return $this->container['triggerDelayTime'];
    }

    /**
     * Sets triggerDelayTime
     *
     * @param double $triggerDelayTime Delay time after trigger.
     *
     * @return $this
     */
    public function setTriggerDelayTime($triggerDelayTime)
    {
        $this->container['triggerDelayTime'] = $triggerDelayTime;

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


