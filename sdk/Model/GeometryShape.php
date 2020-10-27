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
 * GeometryShape Class Doc Comment
 *
 * @category Class
 * @description Represents GeometryShape resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeometryShape extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeometryShape';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shapeType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shapeType' => null
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
        'shapeType' => 'ShapeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shapeType' => 'setShapeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shapeType' => 'getShapeType'
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

    const SHAPE_TYPE_CUSTOM = 'Custom';
    const SHAPE_TYPE_LINE = 'Line';
    const SHAPE_TYPE_LINE_INVERSE = 'LineInverse';
    const SHAPE_TYPE_TRIANGLE = 'Triangle';
    const SHAPE_TYPE_RIGHT_TRIANGLE = 'RightTriangle';
    const SHAPE_TYPE_RECTANGLE = 'Rectangle';
    const SHAPE_TYPE_DIAMOND = 'Diamond';
    const SHAPE_TYPE_PARALLELOGRAM = 'Parallelogram';
    const SHAPE_TYPE_TRAPEZOID = 'Trapezoid';
    const SHAPE_TYPE_NON_ISOSCELES_TRAPEZOID = 'NonIsoscelesTrapezoid';
    const SHAPE_TYPE_PENTAGON = 'Pentagon';
    const SHAPE_TYPE_HEXAGON = 'Hexagon';
    const SHAPE_TYPE_HEPTAGON = 'Heptagon';
    const SHAPE_TYPE_OCTAGON = 'Octagon';
    const SHAPE_TYPE_DECAGON = 'Decagon';
    const SHAPE_TYPE_DODECAGON = 'Dodecagon';
    const SHAPE_TYPE_FOUR_POINTED_STAR = 'FourPointedStar';
    const SHAPE_TYPE_FIVE_POINTED_STAR = 'FivePointedStar';
    const SHAPE_TYPE_SIX_POINTED_STAR = 'SixPointedStar';
    const SHAPE_TYPE_SEVEN_POINTED_STAR = 'SevenPointedStar';
    const SHAPE_TYPE_EIGHT_POINTED_STAR = 'EightPointedStar';
    const SHAPE_TYPE_TEN_POINTED_STAR = 'TenPointedStar';
    const SHAPE_TYPE_TWELVE_POINTED_STAR = 'TwelvePointedStar';
    const SHAPE_TYPE_SIXTEEN_POINTED_STAR = 'SixteenPointedStar';
    const SHAPE_TYPE_TWENTY_FOUR_POINTED_STAR = 'TwentyFourPointedStar';
    const SHAPE_TYPE_THIRTY_TWO_POINTED_STAR = 'ThirtyTwoPointedStar';
    const SHAPE_TYPE_ROUND_CORNER_RECTANGLE = 'RoundCornerRectangle';
    const SHAPE_TYPE_ONE_ROUND_CORNER_RECTANGLE = 'OneRoundCornerRectangle';
    const SHAPE_TYPE_TWO_SAMESIDE_ROUND_CORNER_RECTANGLE = 'TwoSamesideRoundCornerRectangle';
    const SHAPE_TYPE_TWO_DIAGONAL_ROUND_CORNER_RECTANGLE = 'TwoDiagonalRoundCornerRectangle';
    const SHAPE_TYPE_ONE_SNIP_ONE_ROUND_CORNER_RECTANGLE = 'OneSnipOneRoundCornerRectangle';
    const SHAPE_TYPE_ONE_SNIP_CORNER_RECTANGLE = 'OneSnipCornerRectangle';
    const SHAPE_TYPE_TWO_SAMESIDE_SNIP_CORNER_RECTANGLE = 'TwoSamesideSnipCornerRectangle';
    const SHAPE_TYPE_TWO_DIAGONAL_SNIP_CORNER_RECTANGLE = 'TwoDiagonalSnipCornerRectangle';
    const SHAPE_TYPE_PLAQUE = 'Plaque';
    const SHAPE_TYPE_ELLIPSE = 'Ellipse';
    const SHAPE_TYPE_TEARDROP = 'Teardrop';
    const SHAPE_TYPE_HOME_PLATE = 'HomePlate';
    const SHAPE_TYPE_CHEVRON = 'Chevron';
    const SHAPE_TYPE_PIE_WEDGE = 'PieWedge';
    const SHAPE_TYPE_PIE = 'Pie';
    const SHAPE_TYPE_BLOCK_ARC = 'BlockArc';
    const SHAPE_TYPE_DONUT = 'Donut';
    const SHAPE_TYPE_NO_SMOKING = 'NoSmoking';
    const SHAPE_TYPE_RIGHT_ARROW = 'RightArrow';
    const SHAPE_TYPE_LEFT_ARROW = 'LeftArrow';
    const SHAPE_TYPE_UP_ARROW = 'UpArrow';
    const SHAPE_TYPE_DOWN_ARROW = 'DownArrow';
    const SHAPE_TYPE_STRIPED_RIGHT_ARROW = 'StripedRightArrow';
    const SHAPE_TYPE_NOTCHED_RIGHT_ARROW = 'NotchedRightArrow';
    const SHAPE_TYPE_BENT_UP_ARROW = 'BentUpArrow';
    const SHAPE_TYPE_LEFT_RIGHT_ARROW = 'LeftRightArrow';
    const SHAPE_TYPE_UP_DOWN_ARROW = 'UpDownArrow';
    const SHAPE_TYPE_LEFT_UP_ARROW = 'LeftUpArrow';
    const SHAPE_TYPE_LEFT_RIGHT_UP_ARROW = 'LeftRightUpArrow';
    const SHAPE_TYPE_QUAD_ARROW = 'QuadArrow';
    const SHAPE_TYPE_CALLOUT_LEFT_ARROW = 'CalloutLeftArrow';
    const SHAPE_TYPE_CALLOUT_RIGHT_ARROW = 'CalloutRightArrow';
    const SHAPE_TYPE_CALLOUT_UP_ARROW = 'CalloutUpArrow';
    const SHAPE_TYPE_CALLOUT_DOWN_ARROW = 'CalloutDownArrow';
    const SHAPE_TYPE_CALLOUT_LEFT_RIGHT_ARROW = 'CalloutLeftRightArrow';
    const SHAPE_TYPE_CALLOUT_UP_DOWN_ARROW = 'CalloutUpDownArrow';
    const SHAPE_TYPE_CALLOUT_QUAD_ARROW = 'CalloutQuadArrow';
    const SHAPE_TYPE_BENT_ARROW = 'BentArrow';
    const SHAPE_TYPE_U_TURN_ARROW = 'UTurnArrow';
    const SHAPE_TYPE_CIRCULAR_ARROW = 'CircularArrow';
    const SHAPE_TYPE_LEFT_CIRCULAR_ARROW = 'LeftCircularArrow';
    const SHAPE_TYPE_LEFT_RIGHT_CIRCULAR_ARROW = 'LeftRightCircularArrow';
    const SHAPE_TYPE_CURVED_RIGHT_ARROW = 'CurvedRightArrow';
    const SHAPE_TYPE_CURVED_LEFT_ARROW = 'CurvedLeftArrow';
    const SHAPE_TYPE_CURVED_UP_ARROW = 'CurvedUpArrow';
    const SHAPE_TYPE_CURVED_DOWN_ARROW = 'CurvedDownArrow';
    const SHAPE_TYPE_SWOOSH_ARROW = 'SwooshArrow';
    const SHAPE_TYPE_CUBE = 'Cube';
    const SHAPE_TYPE_CAN = 'Can';
    const SHAPE_TYPE_LIGHTNING_BOLT = 'LightningBolt';
    const SHAPE_TYPE_HEART = 'Heart';
    const SHAPE_TYPE_SUN = 'Sun';
    const SHAPE_TYPE_MOON = 'Moon';
    const SHAPE_TYPE_SMILEY_FACE = 'SmileyFace';
    const SHAPE_TYPE_IRREGULAR_SEAL1 = 'IrregularSeal1';
    const SHAPE_TYPE_IRREGULAR_SEAL2 = 'IrregularSeal2';
    const SHAPE_TYPE_FOLDED_CORNER = 'FoldedCorner';
    const SHAPE_TYPE_BEVEL = 'Bevel';
    const SHAPE_TYPE_FRAME = 'Frame';
    const SHAPE_TYPE_HALF_FRAME = 'HalfFrame';
    const SHAPE_TYPE_CORNER = 'Corner';
    const SHAPE_TYPE_DIAGONAL_STRIPE = 'DiagonalStripe';
    const SHAPE_TYPE_CHORD = 'Chord';
    const SHAPE_TYPE_CURVED_ARC = 'CurvedArc';
    const SHAPE_TYPE_LEFT_BRACKET = 'LeftBracket';
    const SHAPE_TYPE_RIGHT_BRACKET = 'RightBracket';
    const SHAPE_TYPE_LEFT_BRACE = 'LeftBrace';
    const SHAPE_TYPE_RIGHT_BRACE = 'RightBrace';
    const SHAPE_TYPE_BRACKET_PAIR = 'BracketPair';
    const SHAPE_TYPE_BRACE_PAIR = 'BracePair';
    const SHAPE_TYPE_STRAIGHT_CONNECTOR1 = 'StraightConnector1';
    const SHAPE_TYPE_BENT_CONNECTOR2 = 'BentConnector2';
    const SHAPE_TYPE_BENT_CONNECTOR3 = 'BentConnector3';
    const SHAPE_TYPE_BENT_CONNECTOR4 = 'BentConnector4';
    const SHAPE_TYPE_BENT_CONNECTOR5 = 'BentConnector5';
    const SHAPE_TYPE_CURVED_CONNECTOR2 = 'CurvedConnector2';
    const SHAPE_TYPE_CURVED_CONNECTOR3 = 'CurvedConnector3';
    const SHAPE_TYPE_CURVED_CONNECTOR4 = 'CurvedConnector4';
    const SHAPE_TYPE_CURVED_CONNECTOR5 = 'CurvedConnector5';
    const SHAPE_TYPE_CALLOUT1 = 'Callout1';
    const SHAPE_TYPE_CALLOUT2 = 'Callout2';
    const SHAPE_TYPE_CALLOUT3 = 'Callout3';
    const SHAPE_TYPE_CALLOUT1_WITH_ACCENT = 'Callout1WithAccent';
    const SHAPE_TYPE_CALLOUT2_WITH_ACCENT = 'Callout2WithAccent';
    const SHAPE_TYPE_CALLOUT3_WITH_ACCENT = 'Callout3WithAccent';
    const SHAPE_TYPE_CALLOUT1_WITH_BORDER = 'Callout1WithBorder';
    const SHAPE_TYPE_CALLOUT2_WITH_BORDER = 'Callout2WithBorder';
    const SHAPE_TYPE_CALLOUT3_WITH_BORDER = 'Callout3WithBorder';
    const SHAPE_TYPE_CALLOUT1_WITH_BORDER_AND_ACCENT = 'Callout1WithBorderAndAccent';
    const SHAPE_TYPE_CALLOUT2_WITH_BORDER_AND_ACCENT = 'Callout2WithBorderAndAccent';
    const SHAPE_TYPE_CALLOUT3_WITH_BORDER_AND_ACCENT = 'Callout3WithBorderAndAccent';
    const SHAPE_TYPE_CALLOUT_WEDGE_RECTANGLE = 'CalloutWedgeRectangle';
    const SHAPE_TYPE_CALLOUT_WEDGE_ROUND_RECTANGLE = 'CalloutWedgeRoundRectangle';
    const SHAPE_TYPE_CALLOUT_WEDGE_ELLIPSE = 'CalloutWedgeEllipse';
    const SHAPE_TYPE_CALLOUT_CLOUD = 'CalloutCloud';
    const SHAPE_TYPE_CLOUD = 'Cloud';
    const SHAPE_TYPE_RIBBON = 'Ribbon';
    const SHAPE_TYPE_RIBBON2 = 'Ribbon2';
    const SHAPE_TYPE_ELLIPSE_RIBBON = 'EllipseRibbon';
    const SHAPE_TYPE_ELLIPSE_RIBBON2 = 'EllipseRibbon2';
    const SHAPE_TYPE_LEFT_RIGHT_RIBBON = 'LeftRightRibbon';
    const SHAPE_TYPE_VERTICAL_SCROLL = 'VerticalScroll';
    const SHAPE_TYPE_HORIZONTAL_SCROLL = 'HorizontalScroll';
    const SHAPE_TYPE_WAVE = 'Wave';
    const SHAPE_TYPE_DOUBLE_WAVE = 'DoubleWave';
    const SHAPE_TYPE_PLUS = 'Plus';
    const SHAPE_TYPE_PROCESS_FLOW = 'ProcessFlow';
    const SHAPE_TYPE_DECISION_FLOW = 'DecisionFlow';
    const SHAPE_TYPE_INPUT_OUTPUT_FLOW = 'InputOutputFlow';
    const SHAPE_TYPE_PREDEFINED_PROCESS_FLOW = 'PredefinedProcessFlow';
    const SHAPE_TYPE_INTERNAL_STORAGE_FLOW = 'InternalStorageFlow';
    const SHAPE_TYPE_DOCUMENT_FLOW = 'DocumentFlow';
    const SHAPE_TYPE_MULTI_DOCUMENT_FLOW = 'MultiDocumentFlow';
    const SHAPE_TYPE_TERMINATOR_FLOW = 'TerminatorFlow';
    const SHAPE_TYPE_PREPARATION_FLOW = 'PreparationFlow';
    const SHAPE_TYPE_MANUAL_INPUT_FLOW = 'ManualInputFlow';
    const SHAPE_TYPE_MANUAL_OPERATION_FLOW = 'ManualOperationFlow';
    const SHAPE_TYPE_CONNECTOR_FLOW = 'ConnectorFlow';
    const SHAPE_TYPE_PUNCHED_CARD_FLOW = 'PunchedCardFlow';
    const SHAPE_TYPE_PUNCHED_TAPE_FLOW = 'PunchedTapeFlow';
    const SHAPE_TYPE_SUMMING_JUNCTION_FLOW = 'SummingJunctionFlow';
    const SHAPE_TYPE_OR_FLOW = 'OrFlow';
    const SHAPE_TYPE_COLLATE_FLOW = 'CollateFlow';
    const SHAPE_TYPE_SORT_FLOW = 'SortFlow';
    const SHAPE_TYPE_EXTRACT_FLOW = 'ExtractFlow';
    const SHAPE_TYPE_MERGE_FLOW = 'MergeFlow';
    const SHAPE_TYPE_OFFLINE_STORAGE_FLOW = 'OfflineStorageFlow';
    const SHAPE_TYPE_ONLINE_STORAGE_FLOW = 'OnlineStorageFlow';
    const SHAPE_TYPE_MAGNETIC_TAPE_FLOW = 'MagneticTapeFlow';
    const SHAPE_TYPE_MAGNETIC_DISK_FLOW = 'MagneticDiskFlow';
    const SHAPE_TYPE_MAGNETIC_DRUM_FLOW = 'MagneticDrumFlow';
    const SHAPE_TYPE_DISPLAY_FLOW = 'DisplayFlow';
    const SHAPE_TYPE_DELAY_FLOW = 'DelayFlow';
    const SHAPE_TYPE_ALTERNATE_PROCESS_FLOW = 'AlternateProcessFlow';
    const SHAPE_TYPE_OFF_PAGE_CONNECTOR_FLOW = 'OffPageConnectorFlow';
    const SHAPE_TYPE_BLANK_BUTTON = 'BlankButton';
    const SHAPE_TYPE_HOME_BUTTON = 'HomeButton';
    const SHAPE_TYPE_HELP_BUTTON = 'HelpButton';
    const SHAPE_TYPE_INFORMATION_BUTTON = 'InformationButton';
    const SHAPE_TYPE_FORWARD_OR_NEXT_BUTTON = 'ForwardOrNextButton';
    const SHAPE_TYPE_BACK_OR_PREVIOUS_BUTTON = 'BackOrPreviousButton';
    const SHAPE_TYPE_END_BUTTON = 'EndButton';
    const SHAPE_TYPE_BEGINNING_BUTTON = 'BeginningButton';
    const SHAPE_TYPE_RETURN_BUTTON = 'ReturnButton';
    const SHAPE_TYPE_DOCUMENT_BUTTON = 'DocumentButton';
    const SHAPE_TYPE_SOUND_BUTTON = 'SoundButton';
    const SHAPE_TYPE_MOVIE_BUTTON = 'MovieButton';
    const SHAPE_TYPE_GEAR6 = 'Gear6';
    const SHAPE_TYPE_GEAR9 = 'Gear9';
    const SHAPE_TYPE_FUNNEL = 'Funnel';
    const SHAPE_TYPE_PLUS_MATH = 'PlusMath';
    const SHAPE_TYPE_MINUS_MATH = 'MinusMath';
    const SHAPE_TYPE_MULTIPLY_MATH = 'MultiplyMath';
    const SHAPE_TYPE_DIVIDE_MATH = 'DivideMath';
    const SHAPE_TYPE_EQUAL_MATH = 'EqualMath';
    const SHAPE_TYPE_NOT_EQUAL_MATH = 'NotEqualMath';
    const SHAPE_TYPE_CORNER_TABS = 'CornerTabs';
    const SHAPE_TYPE_SQUARE_TABS = 'SquareTabs';
    const SHAPE_TYPE_PLAQUE_TABS = 'PlaqueTabs';
    const SHAPE_TYPE_CHART_X = 'ChartX';
    const SHAPE_TYPE_CHART_STAR = 'ChartStar';
    const SHAPE_TYPE_CHART_PLUS = 'ChartPlus';
    const SHAPE_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeTypeAllowableValues()
    {
        return [
            self::SHAPE_TYPE_CUSTOM,
            self::SHAPE_TYPE_LINE,
            self::SHAPE_TYPE_LINE_INVERSE,
            self::SHAPE_TYPE_TRIANGLE,
            self::SHAPE_TYPE_RIGHT_TRIANGLE,
            self::SHAPE_TYPE_RECTANGLE,
            self::SHAPE_TYPE_DIAMOND,
            self::SHAPE_TYPE_PARALLELOGRAM,
            self::SHAPE_TYPE_TRAPEZOID,
            self::SHAPE_TYPE_NON_ISOSCELES_TRAPEZOID,
            self::SHAPE_TYPE_PENTAGON,
            self::SHAPE_TYPE_HEXAGON,
            self::SHAPE_TYPE_HEPTAGON,
            self::SHAPE_TYPE_OCTAGON,
            self::SHAPE_TYPE_DECAGON,
            self::SHAPE_TYPE_DODECAGON,
            self::SHAPE_TYPE_FOUR_POINTED_STAR,
            self::SHAPE_TYPE_FIVE_POINTED_STAR,
            self::SHAPE_TYPE_SIX_POINTED_STAR,
            self::SHAPE_TYPE_SEVEN_POINTED_STAR,
            self::SHAPE_TYPE_EIGHT_POINTED_STAR,
            self::SHAPE_TYPE_TEN_POINTED_STAR,
            self::SHAPE_TYPE_TWELVE_POINTED_STAR,
            self::SHAPE_TYPE_SIXTEEN_POINTED_STAR,
            self::SHAPE_TYPE_TWENTY_FOUR_POINTED_STAR,
            self::SHAPE_TYPE_THIRTY_TWO_POINTED_STAR,
            self::SHAPE_TYPE_ROUND_CORNER_RECTANGLE,
            self::SHAPE_TYPE_ONE_ROUND_CORNER_RECTANGLE,
            self::SHAPE_TYPE_TWO_SAMESIDE_ROUND_CORNER_RECTANGLE,
            self::SHAPE_TYPE_TWO_DIAGONAL_ROUND_CORNER_RECTANGLE,
            self::SHAPE_TYPE_ONE_SNIP_ONE_ROUND_CORNER_RECTANGLE,
            self::SHAPE_TYPE_ONE_SNIP_CORNER_RECTANGLE,
            self::SHAPE_TYPE_TWO_SAMESIDE_SNIP_CORNER_RECTANGLE,
            self::SHAPE_TYPE_TWO_DIAGONAL_SNIP_CORNER_RECTANGLE,
            self::SHAPE_TYPE_PLAQUE,
            self::SHAPE_TYPE_ELLIPSE,
            self::SHAPE_TYPE_TEARDROP,
            self::SHAPE_TYPE_HOME_PLATE,
            self::SHAPE_TYPE_CHEVRON,
            self::SHAPE_TYPE_PIE_WEDGE,
            self::SHAPE_TYPE_PIE,
            self::SHAPE_TYPE_BLOCK_ARC,
            self::SHAPE_TYPE_DONUT,
            self::SHAPE_TYPE_NO_SMOKING,
            self::SHAPE_TYPE_RIGHT_ARROW,
            self::SHAPE_TYPE_LEFT_ARROW,
            self::SHAPE_TYPE_UP_ARROW,
            self::SHAPE_TYPE_DOWN_ARROW,
            self::SHAPE_TYPE_STRIPED_RIGHT_ARROW,
            self::SHAPE_TYPE_NOTCHED_RIGHT_ARROW,
            self::SHAPE_TYPE_BENT_UP_ARROW,
            self::SHAPE_TYPE_LEFT_RIGHT_ARROW,
            self::SHAPE_TYPE_UP_DOWN_ARROW,
            self::SHAPE_TYPE_LEFT_UP_ARROW,
            self::SHAPE_TYPE_LEFT_RIGHT_UP_ARROW,
            self::SHAPE_TYPE_QUAD_ARROW,
            self::SHAPE_TYPE_CALLOUT_LEFT_ARROW,
            self::SHAPE_TYPE_CALLOUT_RIGHT_ARROW,
            self::SHAPE_TYPE_CALLOUT_UP_ARROW,
            self::SHAPE_TYPE_CALLOUT_DOWN_ARROW,
            self::SHAPE_TYPE_CALLOUT_LEFT_RIGHT_ARROW,
            self::SHAPE_TYPE_CALLOUT_UP_DOWN_ARROW,
            self::SHAPE_TYPE_CALLOUT_QUAD_ARROW,
            self::SHAPE_TYPE_BENT_ARROW,
            self::SHAPE_TYPE_U_TURN_ARROW,
            self::SHAPE_TYPE_CIRCULAR_ARROW,
            self::SHAPE_TYPE_LEFT_CIRCULAR_ARROW,
            self::SHAPE_TYPE_LEFT_RIGHT_CIRCULAR_ARROW,
            self::SHAPE_TYPE_CURVED_RIGHT_ARROW,
            self::SHAPE_TYPE_CURVED_LEFT_ARROW,
            self::SHAPE_TYPE_CURVED_UP_ARROW,
            self::SHAPE_TYPE_CURVED_DOWN_ARROW,
            self::SHAPE_TYPE_SWOOSH_ARROW,
            self::SHAPE_TYPE_CUBE,
            self::SHAPE_TYPE_CAN,
            self::SHAPE_TYPE_LIGHTNING_BOLT,
            self::SHAPE_TYPE_HEART,
            self::SHAPE_TYPE_SUN,
            self::SHAPE_TYPE_MOON,
            self::SHAPE_TYPE_SMILEY_FACE,
            self::SHAPE_TYPE_IRREGULAR_SEAL1,
            self::SHAPE_TYPE_IRREGULAR_SEAL2,
            self::SHAPE_TYPE_FOLDED_CORNER,
            self::SHAPE_TYPE_BEVEL,
            self::SHAPE_TYPE_FRAME,
            self::SHAPE_TYPE_HALF_FRAME,
            self::SHAPE_TYPE_CORNER,
            self::SHAPE_TYPE_DIAGONAL_STRIPE,
            self::SHAPE_TYPE_CHORD,
            self::SHAPE_TYPE_CURVED_ARC,
            self::SHAPE_TYPE_LEFT_BRACKET,
            self::SHAPE_TYPE_RIGHT_BRACKET,
            self::SHAPE_TYPE_LEFT_BRACE,
            self::SHAPE_TYPE_RIGHT_BRACE,
            self::SHAPE_TYPE_BRACKET_PAIR,
            self::SHAPE_TYPE_BRACE_PAIR,
            self::SHAPE_TYPE_STRAIGHT_CONNECTOR1,
            self::SHAPE_TYPE_BENT_CONNECTOR2,
            self::SHAPE_TYPE_BENT_CONNECTOR3,
            self::SHAPE_TYPE_BENT_CONNECTOR4,
            self::SHAPE_TYPE_BENT_CONNECTOR5,
            self::SHAPE_TYPE_CURVED_CONNECTOR2,
            self::SHAPE_TYPE_CURVED_CONNECTOR3,
            self::SHAPE_TYPE_CURVED_CONNECTOR4,
            self::SHAPE_TYPE_CURVED_CONNECTOR5,
            self::SHAPE_TYPE_CALLOUT1,
            self::SHAPE_TYPE_CALLOUT2,
            self::SHAPE_TYPE_CALLOUT3,
            self::SHAPE_TYPE_CALLOUT1_WITH_ACCENT,
            self::SHAPE_TYPE_CALLOUT2_WITH_ACCENT,
            self::SHAPE_TYPE_CALLOUT3_WITH_ACCENT,
            self::SHAPE_TYPE_CALLOUT1_WITH_BORDER,
            self::SHAPE_TYPE_CALLOUT2_WITH_BORDER,
            self::SHAPE_TYPE_CALLOUT3_WITH_BORDER,
            self::SHAPE_TYPE_CALLOUT1_WITH_BORDER_AND_ACCENT,
            self::SHAPE_TYPE_CALLOUT2_WITH_BORDER_AND_ACCENT,
            self::SHAPE_TYPE_CALLOUT3_WITH_BORDER_AND_ACCENT,
            self::SHAPE_TYPE_CALLOUT_WEDGE_RECTANGLE,
            self::SHAPE_TYPE_CALLOUT_WEDGE_ROUND_RECTANGLE,
            self::SHAPE_TYPE_CALLOUT_WEDGE_ELLIPSE,
            self::SHAPE_TYPE_CALLOUT_CLOUD,
            self::SHAPE_TYPE_CLOUD,
            self::SHAPE_TYPE_RIBBON,
            self::SHAPE_TYPE_RIBBON2,
            self::SHAPE_TYPE_ELLIPSE_RIBBON,
            self::SHAPE_TYPE_ELLIPSE_RIBBON2,
            self::SHAPE_TYPE_LEFT_RIGHT_RIBBON,
            self::SHAPE_TYPE_VERTICAL_SCROLL,
            self::SHAPE_TYPE_HORIZONTAL_SCROLL,
            self::SHAPE_TYPE_WAVE,
            self::SHAPE_TYPE_DOUBLE_WAVE,
            self::SHAPE_TYPE_PLUS,
            self::SHAPE_TYPE_PROCESS_FLOW,
            self::SHAPE_TYPE_DECISION_FLOW,
            self::SHAPE_TYPE_INPUT_OUTPUT_FLOW,
            self::SHAPE_TYPE_PREDEFINED_PROCESS_FLOW,
            self::SHAPE_TYPE_INTERNAL_STORAGE_FLOW,
            self::SHAPE_TYPE_DOCUMENT_FLOW,
            self::SHAPE_TYPE_MULTI_DOCUMENT_FLOW,
            self::SHAPE_TYPE_TERMINATOR_FLOW,
            self::SHAPE_TYPE_PREPARATION_FLOW,
            self::SHAPE_TYPE_MANUAL_INPUT_FLOW,
            self::SHAPE_TYPE_MANUAL_OPERATION_FLOW,
            self::SHAPE_TYPE_CONNECTOR_FLOW,
            self::SHAPE_TYPE_PUNCHED_CARD_FLOW,
            self::SHAPE_TYPE_PUNCHED_TAPE_FLOW,
            self::SHAPE_TYPE_SUMMING_JUNCTION_FLOW,
            self::SHAPE_TYPE_OR_FLOW,
            self::SHAPE_TYPE_COLLATE_FLOW,
            self::SHAPE_TYPE_SORT_FLOW,
            self::SHAPE_TYPE_EXTRACT_FLOW,
            self::SHAPE_TYPE_MERGE_FLOW,
            self::SHAPE_TYPE_OFFLINE_STORAGE_FLOW,
            self::SHAPE_TYPE_ONLINE_STORAGE_FLOW,
            self::SHAPE_TYPE_MAGNETIC_TAPE_FLOW,
            self::SHAPE_TYPE_MAGNETIC_DISK_FLOW,
            self::SHAPE_TYPE_MAGNETIC_DRUM_FLOW,
            self::SHAPE_TYPE_DISPLAY_FLOW,
            self::SHAPE_TYPE_DELAY_FLOW,
            self::SHAPE_TYPE_ALTERNATE_PROCESS_FLOW,
            self::SHAPE_TYPE_OFF_PAGE_CONNECTOR_FLOW,
            self::SHAPE_TYPE_BLANK_BUTTON,
            self::SHAPE_TYPE_HOME_BUTTON,
            self::SHAPE_TYPE_HELP_BUTTON,
            self::SHAPE_TYPE_INFORMATION_BUTTON,
            self::SHAPE_TYPE_FORWARD_OR_NEXT_BUTTON,
            self::SHAPE_TYPE_BACK_OR_PREVIOUS_BUTTON,
            self::SHAPE_TYPE_END_BUTTON,
            self::SHAPE_TYPE_BEGINNING_BUTTON,
            self::SHAPE_TYPE_RETURN_BUTTON,
            self::SHAPE_TYPE_DOCUMENT_BUTTON,
            self::SHAPE_TYPE_SOUND_BUTTON,
            self::SHAPE_TYPE_MOVIE_BUTTON,
            self::SHAPE_TYPE_GEAR6,
            self::SHAPE_TYPE_GEAR9,
            self::SHAPE_TYPE_FUNNEL,
            self::SHAPE_TYPE_PLUS_MATH,
            self::SHAPE_TYPE_MINUS_MATH,
            self::SHAPE_TYPE_MULTIPLY_MATH,
            self::SHAPE_TYPE_DIVIDE_MATH,
            self::SHAPE_TYPE_EQUAL_MATH,
            self::SHAPE_TYPE_NOT_EQUAL_MATH,
            self::SHAPE_TYPE_CORNER_TABS,
            self::SHAPE_TYPE_SQUARE_TABS,
            self::SHAPE_TYPE_PLAQUE_TABS,
            self::SHAPE_TYPE_CHART_X,
            self::SHAPE_TYPE_CHART_STAR,
            self::SHAPE_TYPE_CHART_PLUS,
            self::SHAPE_TYPE_NOT_DEFINED,
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

        $this->container['shapeType'] = isset($data['shapeType']) ? $data['shapeType'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['shapeType'] === null) {
            $invalidProperties[] = "'shapeType' can't be null";
        }
        $allowedValues = $this->getShapeTypeAllowableValues();
        if (!in_array($this->container['shapeType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shapeType', must be one of '%s'",
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

        if ($this->container['shapeType'] === null) {
            return false;
        }
        $allowedValues = $this->getShapeTypeAllowableValues();
        if (!in_array($this->container['shapeType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets shapeType
     *
     * @return string
     */
    public function getShapeType()
    {
        return $this->container['shapeType'];
    }

    /**
     * Sets shapeType
     *
     * @param string $shapeType Combined shape type.
     *
     * @return $this
     */
    public function setShapeType($shapeType)
    {
        $allowedValues = $this->getShapeTypeAllowableValues();


        if (is_numeric($shapeType)) {
            if ($shapeType >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'shapeType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $shapeType = $allowedValues[$shapeType];
            }
        } else {
            if (!in_array($shapeType, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'shapeType', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['shapeType'] = $shapeType;

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


