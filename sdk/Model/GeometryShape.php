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
        'geometry_shape_type' => 'string',
        
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'geometry_shape_type' => null,
        
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
        'geometry_shape_type' => 'GeometryShapeType',
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'geometry_shape_type' => 'setGeometryShapeType',
        
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'geometry_shape_type' => 'getGeometryShapeType',
        
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

    const GEOMETRY_SHAPE_TYPE_CUSTOM = 'Custom';
    const GEOMETRY_SHAPE_TYPE_LINE = 'Line';
    const GEOMETRY_SHAPE_TYPE_LINE_INVERSE = 'LineInverse';
    const GEOMETRY_SHAPE_TYPE_TRIANGLE = 'Triangle';
    const GEOMETRY_SHAPE_TYPE_RIGHT_TRIANGLE = 'RightTriangle';
    const GEOMETRY_SHAPE_TYPE_RECTANGLE = 'Rectangle';
    const GEOMETRY_SHAPE_TYPE_DIAMOND = 'Diamond';
    const GEOMETRY_SHAPE_TYPE_PARALLELOGRAM = 'Parallelogram';
    const GEOMETRY_SHAPE_TYPE_TRAPEZOID = 'Trapezoid';
    const GEOMETRY_SHAPE_TYPE_NON_ISOSCELES_TRAPEZOID = 'NonIsoscelesTrapezoid';
    const GEOMETRY_SHAPE_TYPE_PENTAGON = 'Pentagon';
    const GEOMETRY_SHAPE_TYPE_HEXAGON = 'Hexagon';
    const GEOMETRY_SHAPE_TYPE_HEPTAGON = 'Heptagon';
    const GEOMETRY_SHAPE_TYPE_OCTAGON = 'Octagon';
    const GEOMETRY_SHAPE_TYPE_DECAGON = 'Decagon';
    const GEOMETRY_SHAPE_TYPE_DODECAGON = 'Dodecagon';
    const GEOMETRY_SHAPE_TYPE_FOUR_POINTED_STAR = 'FourPointedStar';
    const GEOMETRY_SHAPE_TYPE_FIVE_POINTED_STAR = 'FivePointedStar';
    const GEOMETRY_SHAPE_TYPE_SIX_POINTED_STAR = 'SixPointedStar';
    const GEOMETRY_SHAPE_TYPE_SEVEN_POINTED_STAR = 'SevenPointedStar';
    const GEOMETRY_SHAPE_TYPE_EIGHT_POINTED_STAR = 'EightPointedStar';
    const GEOMETRY_SHAPE_TYPE_TEN_POINTED_STAR = 'TenPointedStar';
    const GEOMETRY_SHAPE_TYPE_TWELVE_POINTED_STAR = 'TwelvePointedStar';
    const GEOMETRY_SHAPE_TYPE_SIXTEEN_POINTED_STAR = 'SixteenPointedStar';
    const GEOMETRY_SHAPE_TYPE_TWENTY_FOUR_POINTED_STAR = 'TwentyFourPointedStar';
    const GEOMETRY_SHAPE_TYPE_THIRTY_TWO_POINTED_STAR = 'ThirtyTwoPointedStar';
    const GEOMETRY_SHAPE_TYPE_ROUND_CORNER_RECTANGLE = 'RoundCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_ONE_ROUND_CORNER_RECTANGLE = 'OneRoundCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_TWO_SAMESIDE_ROUND_CORNER_RECTANGLE = 'TwoSamesideRoundCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_TWO_DIAGONAL_ROUND_CORNER_RECTANGLE = 'TwoDiagonalRoundCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_ONE_SNIP_ONE_ROUND_CORNER_RECTANGLE = 'OneSnipOneRoundCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_ONE_SNIP_CORNER_RECTANGLE = 'OneSnipCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_TWO_SAMESIDE_SNIP_CORNER_RECTANGLE = 'TwoSamesideSnipCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_TWO_DIAGONAL_SNIP_CORNER_RECTANGLE = 'TwoDiagonalSnipCornerRectangle';
    const GEOMETRY_SHAPE_TYPE_PLAQUE = 'Plaque';
    const GEOMETRY_SHAPE_TYPE_ELLIPSE = 'Ellipse';
    const GEOMETRY_SHAPE_TYPE_TEARDROP = 'Teardrop';
    const GEOMETRY_SHAPE_TYPE_HOME_PLATE = 'HomePlate';
    const GEOMETRY_SHAPE_TYPE_CHEVRON = 'Chevron';
    const GEOMETRY_SHAPE_TYPE_PIE_WEDGE = 'PieWedge';
    const GEOMETRY_SHAPE_TYPE_PIE = 'Pie';
    const GEOMETRY_SHAPE_TYPE_BLOCK_ARC = 'BlockArc';
    const GEOMETRY_SHAPE_TYPE_DONUT = 'Donut';
    const GEOMETRY_SHAPE_TYPE_NO_SMOKING = 'NoSmoking';
    const GEOMETRY_SHAPE_TYPE_RIGHT_ARROW = 'RightArrow';
    const GEOMETRY_SHAPE_TYPE_LEFT_ARROW = 'LeftArrow';
    const GEOMETRY_SHAPE_TYPE_UP_ARROW = 'UpArrow';
    const GEOMETRY_SHAPE_TYPE_DOWN_ARROW = 'DownArrow';
    const GEOMETRY_SHAPE_TYPE_STRIPED_RIGHT_ARROW = 'StripedRightArrow';
    const GEOMETRY_SHAPE_TYPE_NOTCHED_RIGHT_ARROW = 'NotchedRightArrow';
    const GEOMETRY_SHAPE_TYPE_BENT_UP_ARROW = 'BentUpArrow';
    const GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_ARROW = 'LeftRightArrow';
    const GEOMETRY_SHAPE_TYPE_UP_DOWN_ARROW = 'UpDownArrow';
    const GEOMETRY_SHAPE_TYPE_LEFT_UP_ARROW = 'LeftUpArrow';
    const GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_UP_ARROW = 'LeftRightUpArrow';
    const GEOMETRY_SHAPE_TYPE_QUAD_ARROW = 'QuadArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_LEFT_ARROW = 'CalloutLeftArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_RIGHT_ARROW = 'CalloutRightArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_UP_ARROW = 'CalloutUpArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_DOWN_ARROW = 'CalloutDownArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_LEFT_RIGHT_ARROW = 'CalloutLeftRightArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_UP_DOWN_ARROW = 'CalloutUpDownArrow';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_QUAD_ARROW = 'CalloutQuadArrow';
    const GEOMETRY_SHAPE_TYPE_BENT_ARROW = 'BentArrow';
    const GEOMETRY_SHAPE_TYPE_U_TURN_ARROW = 'UTurnArrow';
    const GEOMETRY_SHAPE_TYPE_CIRCULAR_ARROW = 'CircularArrow';
    const GEOMETRY_SHAPE_TYPE_LEFT_CIRCULAR_ARROW = 'LeftCircularArrow';
    const GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_CIRCULAR_ARROW = 'LeftRightCircularArrow';
    const GEOMETRY_SHAPE_TYPE_CURVED_RIGHT_ARROW = 'CurvedRightArrow';
    const GEOMETRY_SHAPE_TYPE_CURVED_LEFT_ARROW = 'CurvedLeftArrow';
    const GEOMETRY_SHAPE_TYPE_CURVED_UP_ARROW = 'CurvedUpArrow';
    const GEOMETRY_SHAPE_TYPE_CURVED_DOWN_ARROW = 'CurvedDownArrow';
    const GEOMETRY_SHAPE_TYPE_SWOOSH_ARROW = 'SwooshArrow';
    const GEOMETRY_SHAPE_TYPE_CUBE = 'Cube';
    const GEOMETRY_SHAPE_TYPE_CAN = 'Can';
    const GEOMETRY_SHAPE_TYPE_LIGHTNING_BOLT = 'LightningBolt';
    const GEOMETRY_SHAPE_TYPE_HEART = 'Heart';
    const GEOMETRY_SHAPE_TYPE_SUN = 'Sun';
    const GEOMETRY_SHAPE_TYPE_MOON = 'Moon';
    const GEOMETRY_SHAPE_TYPE_SMILEY_FACE = 'SmileyFace';
    const GEOMETRY_SHAPE_TYPE_IRREGULAR_SEAL1 = 'IrregularSeal1';
    const GEOMETRY_SHAPE_TYPE_IRREGULAR_SEAL2 = 'IrregularSeal2';
    const GEOMETRY_SHAPE_TYPE_FOLDED_CORNER = 'FoldedCorner';
    const GEOMETRY_SHAPE_TYPE_BEVEL = 'Bevel';
    const GEOMETRY_SHAPE_TYPE_FRAME = 'Frame';
    const GEOMETRY_SHAPE_TYPE_HALF_FRAME = 'HalfFrame';
    const GEOMETRY_SHAPE_TYPE_CORNER = 'Corner';
    const GEOMETRY_SHAPE_TYPE_DIAGONAL_STRIPE = 'DiagonalStripe';
    const GEOMETRY_SHAPE_TYPE_CHORD = 'Chord';
    const GEOMETRY_SHAPE_TYPE_CURVED_ARC = 'CurvedArc';
    const GEOMETRY_SHAPE_TYPE_LEFT_BRACKET = 'LeftBracket';
    const GEOMETRY_SHAPE_TYPE_RIGHT_BRACKET = 'RightBracket';
    const GEOMETRY_SHAPE_TYPE_LEFT_BRACE = 'LeftBrace';
    const GEOMETRY_SHAPE_TYPE_RIGHT_BRACE = 'RightBrace';
    const GEOMETRY_SHAPE_TYPE_BRACKET_PAIR = 'BracketPair';
    const GEOMETRY_SHAPE_TYPE_BRACE_PAIR = 'BracePair';
    const GEOMETRY_SHAPE_TYPE_STRAIGHT_CONNECTOR1 = 'StraightConnector1';
    const GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR2 = 'BentConnector2';
    const GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR3 = 'BentConnector3';
    const GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR4 = 'BentConnector4';
    const GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR5 = 'BentConnector5';
    const GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR2 = 'CurvedConnector2';
    const GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR3 = 'CurvedConnector3';
    const GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR4 = 'CurvedConnector4';
    const GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR5 = 'CurvedConnector5';
    const GEOMETRY_SHAPE_TYPE_CALLOUT1 = 'Callout1';
    const GEOMETRY_SHAPE_TYPE_CALLOUT2 = 'Callout2';
    const GEOMETRY_SHAPE_TYPE_CALLOUT3 = 'Callout3';
    const GEOMETRY_SHAPE_TYPE_CALLOUT1_WITH_ACCENT = 'Callout1WithAccent';
    const GEOMETRY_SHAPE_TYPE_CALLOUT2_WITH_ACCENT = 'Callout2WithAccent';
    const GEOMETRY_SHAPE_TYPE_CALLOUT3_WITH_ACCENT = 'Callout3WithAccent';
    const GEOMETRY_SHAPE_TYPE_CALLOUT1_WITH_BORDER = 'Callout1WithBorder';
    const GEOMETRY_SHAPE_TYPE_CALLOUT2_WITH_BORDER = 'Callout2WithBorder';
    const GEOMETRY_SHAPE_TYPE_CALLOUT3_WITH_BORDER = 'Callout3WithBorder';
    const GEOMETRY_SHAPE_TYPE_CALLOUT1_WITH_BORDER_AND_ACCENT = 'Callout1WithBorderAndAccent';
    const GEOMETRY_SHAPE_TYPE_CALLOUT2_WITH_BORDER_AND_ACCENT = 'Callout2WithBorderAndAccent';
    const GEOMETRY_SHAPE_TYPE_CALLOUT3_WITH_BORDER_AND_ACCENT = 'Callout3WithBorderAndAccent';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_WEDGE_RECTANGLE = 'CalloutWedgeRectangle';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_WEDGE_ROUND_RECTANGLE = 'CalloutWedgeRoundRectangle';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_WEDGE_ELLIPSE = 'CalloutWedgeEllipse';
    const GEOMETRY_SHAPE_TYPE_CALLOUT_CLOUD = 'CalloutCloud';
    const GEOMETRY_SHAPE_TYPE_CLOUD = 'Cloud';
    const GEOMETRY_SHAPE_TYPE_RIBBON = 'Ribbon';
    const GEOMETRY_SHAPE_TYPE_RIBBON2 = 'Ribbon2';
    const GEOMETRY_SHAPE_TYPE_ELLIPSE_RIBBON = 'EllipseRibbon';
    const GEOMETRY_SHAPE_TYPE_ELLIPSE_RIBBON2 = 'EllipseRibbon2';
    const GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_RIBBON = 'LeftRightRibbon';
    const GEOMETRY_SHAPE_TYPE_VERTICAL_SCROLL = 'VerticalScroll';
    const GEOMETRY_SHAPE_TYPE_HORIZONTAL_SCROLL = 'HorizontalScroll';
    const GEOMETRY_SHAPE_TYPE_WAVE = 'Wave';
    const GEOMETRY_SHAPE_TYPE_DOUBLE_WAVE = 'DoubleWave';
    const GEOMETRY_SHAPE_TYPE_PLUS = 'Plus';
    const GEOMETRY_SHAPE_TYPE_PROCESS_FLOW = 'ProcessFlow';
    const GEOMETRY_SHAPE_TYPE_DECISION_FLOW = 'DecisionFlow';
    const GEOMETRY_SHAPE_TYPE_INPUT_OUTPUT_FLOW = 'InputOutputFlow';
    const GEOMETRY_SHAPE_TYPE_PREDEFINED_PROCESS_FLOW = 'PredefinedProcessFlow';
    const GEOMETRY_SHAPE_TYPE_INTERNAL_STORAGE_FLOW = 'InternalStorageFlow';
    const GEOMETRY_SHAPE_TYPE_DOCUMENT_FLOW = 'DocumentFlow';
    const GEOMETRY_SHAPE_TYPE_MULTI_DOCUMENT_FLOW = 'MultiDocumentFlow';
    const GEOMETRY_SHAPE_TYPE_TERMINATOR_FLOW = 'TerminatorFlow';
    const GEOMETRY_SHAPE_TYPE_PREPARATION_FLOW = 'PreparationFlow';
    const GEOMETRY_SHAPE_TYPE_MANUAL_INPUT_FLOW = 'ManualInputFlow';
    const GEOMETRY_SHAPE_TYPE_MANUAL_OPERATION_FLOW = 'ManualOperationFlow';
    const GEOMETRY_SHAPE_TYPE_CONNECTOR_FLOW = 'ConnectorFlow';
    const GEOMETRY_SHAPE_TYPE_PUNCHED_CARD_FLOW = 'PunchedCardFlow';
    const GEOMETRY_SHAPE_TYPE_PUNCHED_TAPE_FLOW = 'PunchedTapeFlow';
    const GEOMETRY_SHAPE_TYPE_SUMMING_JUNCTION_FLOW = 'SummingJunctionFlow';
    const GEOMETRY_SHAPE_TYPE_OR_FLOW = 'OrFlow';
    const GEOMETRY_SHAPE_TYPE_COLLATE_FLOW = 'CollateFlow';
    const GEOMETRY_SHAPE_TYPE_SORT_FLOW = 'SortFlow';
    const GEOMETRY_SHAPE_TYPE_EXTRACT_FLOW = 'ExtractFlow';
    const GEOMETRY_SHAPE_TYPE_MERGE_FLOW = 'MergeFlow';
    const GEOMETRY_SHAPE_TYPE_OFFLINE_STORAGE_FLOW = 'OfflineStorageFlow';
    const GEOMETRY_SHAPE_TYPE_ONLINE_STORAGE_FLOW = 'OnlineStorageFlow';
    const GEOMETRY_SHAPE_TYPE_MAGNETIC_TAPE_FLOW = 'MagneticTapeFlow';
    const GEOMETRY_SHAPE_TYPE_MAGNETIC_DISK_FLOW = 'MagneticDiskFlow';
    const GEOMETRY_SHAPE_TYPE_MAGNETIC_DRUM_FLOW = 'MagneticDrumFlow';
    const GEOMETRY_SHAPE_TYPE_DISPLAY_FLOW = 'DisplayFlow';
    const GEOMETRY_SHAPE_TYPE_DELAY_FLOW = 'DelayFlow';
    const GEOMETRY_SHAPE_TYPE_ALTERNATE_PROCESS_FLOW = 'AlternateProcessFlow';
    const GEOMETRY_SHAPE_TYPE_OFF_PAGE_CONNECTOR_FLOW = 'OffPageConnectorFlow';
    const GEOMETRY_SHAPE_TYPE_BLANK_BUTTON = 'BlankButton';
    const GEOMETRY_SHAPE_TYPE_HOME_BUTTON = 'HomeButton';
    const GEOMETRY_SHAPE_TYPE_HELP_BUTTON = 'HelpButton';
    const GEOMETRY_SHAPE_TYPE_INFORMATION_BUTTON = 'InformationButton';
    const GEOMETRY_SHAPE_TYPE_FORWARD_OR_NEXT_BUTTON = 'ForwardOrNextButton';
    const GEOMETRY_SHAPE_TYPE_BACK_OR_PREVIOUS_BUTTON = 'BackOrPreviousButton';
    const GEOMETRY_SHAPE_TYPE_END_BUTTON = 'EndButton';
    const GEOMETRY_SHAPE_TYPE_BEGINNING_BUTTON = 'BeginningButton';
    const GEOMETRY_SHAPE_TYPE_RETURN_BUTTON = 'ReturnButton';
    const GEOMETRY_SHAPE_TYPE_DOCUMENT_BUTTON = 'DocumentButton';
    const GEOMETRY_SHAPE_TYPE_SOUND_BUTTON = 'SoundButton';
    const GEOMETRY_SHAPE_TYPE_MOVIE_BUTTON = 'MovieButton';
    const GEOMETRY_SHAPE_TYPE_GEAR6 = 'Gear6';
    const GEOMETRY_SHAPE_TYPE_GEAR9 = 'Gear9';
    const GEOMETRY_SHAPE_TYPE_FUNNEL = 'Funnel';
    const GEOMETRY_SHAPE_TYPE_PLUS_MATH = 'PlusMath';
    const GEOMETRY_SHAPE_TYPE_MINUS_MATH = 'MinusMath';
    const GEOMETRY_SHAPE_TYPE_MULTIPLY_MATH = 'MultiplyMath';
    const GEOMETRY_SHAPE_TYPE_DIVIDE_MATH = 'DivideMath';
    const GEOMETRY_SHAPE_TYPE_EQUAL_MATH = 'EqualMath';
    const GEOMETRY_SHAPE_TYPE_NOT_EQUAL_MATH = 'NotEqualMath';
    const GEOMETRY_SHAPE_TYPE_CORNER_TABS = 'CornerTabs';
    const GEOMETRY_SHAPE_TYPE_SQUARE_TABS = 'SquareTabs';
    const GEOMETRY_SHAPE_TYPE_PLAQUE_TABS = 'PlaqueTabs';
    const GEOMETRY_SHAPE_TYPE_CHART_X = 'ChartX';
    const GEOMETRY_SHAPE_TYPE_CHART_STAR = 'ChartStar';
    const GEOMETRY_SHAPE_TYPE_CHART_PLUS = 'ChartPlus';
    const GEOMETRY_SHAPE_TYPE_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGeometryShapeTypeAllowableValues()
    {
        return [
            self::GEOMETRY_SHAPE_TYPE_CUSTOM,
            self::GEOMETRY_SHAPE_TYPE_LINE,
            self::GEOMETRY_SHAPE_TYPE_LINE_INVERSE,
            self::GEOMETRY_SHAPE_TYPE_TRIANGLE,
            self::GEOMETRY_SHAPE_TYPE_RIGHT_TRIANGLE,
            self::GEOMETRY_SHAPE_TYPE_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_DIAMOND,
            self::GEOMETRY_SHAPE_TYPE_PARALLELOGRAM,
            self::GEOMETRY_SHAPE_TYPE_TRAPEZOID,
            self::GEOMETRY_SHAPE_TYPE_NON_ISOSCELES_TRAPEZOID,
            self::GEOMETRY_SHAPE_TYPE_PENTAGON,
            self::GEOMETRY_SHAPE_TYPE_HEXAGON,
            self::GEOMETRY_SHAPE_TYPE_HEPTAGON,
            self::GEOMETRY_SHAPE_TYPE_OCTAGON,
            self::GEOMETRY_SHAPE_TYPE_DECAGON,
            self::GEOMETRY_SHAPE_TYPE_DODECAGON,
            self::GEOMETRY_SHAPE_TYPE_FOUR_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_FIVE_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_SIX_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_SEVEN_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_EIGHT_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_TEN_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_TWELVE_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_SIXTEEN_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_TWENTY_FOUR_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_THIRTY_TWO_POINTED_STAR,
            self::GEOMETRY_SHAPE_TYPE_ROUND_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_ONE_ROUND_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_TWO_SAMESIDE_ROUND_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_TWO_DIAGONAL_ROUND_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_ONE_SNIP_ONE_ROUND_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_ONE_SNIP_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_TWO_SAMESIDE_SNIP_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_TWO_DIAGONAL_SNIP_CORNER_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_PLAQUE,
            self::GEOMETRY_SHAPE_TYPE_ELLIPSE,
            self::GEOMETRY_SHAPE_TYPE_TEARDROP,
            self::GEOMETRY_SHAPE_TYPE_HOME_PLATE,
            self::GEOMETRY_SHAPE_TYPE_CHEVRON,
            self::GEOMETRY_SHAPE_TYPE_PIE_WEDGE,
            self::GEOMETRY_SHAPE_TYPE_PIE,
            self::GEOMETRY_SHAPE_TYPE_BLOCK_ARC,
            self::GEOMETRY_SHAPE_TYPE_DONUT,
            self::GEOMETRY_SHAPE_TYPE_NO_SMOKING,
            self::GEOMETRY_SHAPE_TYPE_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_LEFT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_UP_ARROW,
            self::GEOMETRY_SHAPE_TYPE_DOWN_ARROW,
            self::GEOMETRY_SHAPE_TYPE_STRIPED_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_NOTCHED_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_BENT_UP_ARROW,
            self::GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_UP_DOWN_ARROW,
            self::GEOMETRY_SHAPE_TYPE_LEFT_UP_ARROW,
            self::GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_UP_ARROW,
            self::GEOMETRY_SHAPE_TYPE_QUAD_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_LEFT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_UP_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_DOWN_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_LEFT_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_UP_DOWN_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_QUAD_ARROW,
            self::GEOMETRY_SHAPE_TYPE_BENT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_U_TURN_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CIRCULAR_ARROW,
            self::GEOMETRY_SHAPE_TYPE_LEFT_CIRCULAR_ARROW,
            self::GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_CIRCULAR_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CURVED_RIGHT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CURVED_LEFT_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CURVED_UP_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CURVED_DOWN_ARROW,
            self::GEOMETRY_SHAPE_TYPE_SWOOSH_ARROW,
            self::GEOMETRY_SHAPE_TYPE_CUBE,
            self::GEOMETRY_SHAPE_TYPE_CAN,
            self::GEOMETRY_SHAPE_TYPE_LIGHTNING_BOLT,
            self::GEOMETRY_SHAPE_TYPE_HEART,
            self::GEOMETRY_SHAPE_TYPE_SUN,
            self::GEOMETRY_SHAPE_TYPE_MOON,
            self::GEOMETRY_SHAPE_TYPE_SMILEY_FACE,
            self::GEOMETRY_SHAPE_TYPE_IRREGULAR_SEAL1,
            self::GEOMETRY_SHAPE_TYPE_IRREGULAR_SEAL2,
            self::GEOMETRY_SHAPE_TYPE_FOLDED_CORNER,
            self::GEOMETRY_SHAPE_TYPE_BEVEL,
            self::GEOMETRY_SHAPE_TYPE_FRAME,
            self::GEOMETRY_SHAPE_TYPE_HALF_FRAME,
            self::GEOMETRY_SHAPE_TYPE_CORNER,
            self::GEOMETRY_SHAPE_TYPE_DIAGONAL_STRIPE,
            self::GEOMETRY_SHAPE_TYPE_CHORD,
            self::GEOMETRY_SHAPE_TYPE_CURVED_ARC,
            self::GEOMETRY_SHAPE_TYPE_LEFT_BRACKET,
            self::GEOMETRY_SHAPE_TYPE_RIGHT_BRACKET,
            self::GEOMETRY_SHAPE_TYPE_LEFT_BRACE,
            self::GEOMETRY_SHAPE_TYPE_RIGHT_BRACE,
            self::GEOMETRY_SHAPE_TYPE_BRACKET_PAIR,
            self::GEOMETRY_SHAPE_TYPE_BRACE_PAIR,
            self::GEOMETRY_SHAPE_TYPE_STRAIGHT_CONNECTOR1,
            self::GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR2,
            self::GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR3,
            self::GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR4,
            self::GEOMETRY_SHAPE_TYPE_BENT_CONNECTOR5,
            self::GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR2,
            self::GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR3,
            self::GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR4,
            self::GEOMETRY_SHAPE_TYPE_CURVED_CONNECTOR5,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT1,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT2,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT3,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT1_WITH_ACCENT,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT2_WITH_ACCENT,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT3_WITH_ACCENT,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT1_WITH_BORDER,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT2_WITH_BORDER,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT3_WITH_BORDER,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT1_WITH_BORDER_AND_ACCENT,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT2_WITH_BORDER_AND_ACCENT,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT3_WITH_BORDER_AND_ACCENT,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_WEDGE_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_WEDGE_ROUND_RECTANGLE,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_WEDGE_ELLIPSE,
            self::GEOMETRY_SHAPE_TYPE_CALLOUT_CLOUD,
            self::GEOMETRY_SHAPE_TYPE_CLOUD,
            self::GEOMETRY_SHAPE_TYPE_RIBBON,
            self::GEOMETRY_SHAPE_TYPE_RIBBON2,
            self::GEOMETRY_SHAPE_TYPE_ELLIPSE_RIBBON,
            self::GEOMETRY_SHAPE_TYPE_ELLIPSE_RIBBON2,
            self::GEOMETRY_SHAPE_TYPE_LEFT_RIGHT_RIBBON,
            self::GEOMETRY_SHAPE_TYPE_VERTICAL_SCROLL,
            self::GEOMETRY_SHAPE_TYPE_HORIZONTAL_SCROLL,
            self::GEOMETRY_SHAPE_TYPE_WAVE,
            self::GEOMETRY_SHAPE_TYPE_DOUBLE_WAVE,
            self::GEOMETRY_SHAPE_TYPE_PLUS,
            self::GEOMETRY_SHAPE_TYPE_PROCESS_FLOW,
            self::GEOMETRY_SHAPE_TYPE_DECISION_FLOW,
            self::GEOMETRY_SHAPE_TYPE_INPUT_OUTPUT_FLOW,
            self::GEOMETRY_SHAPE_TYPE_PREDEFINED_PROCESS_FLOW,
            self::GEOMETRY_SHAPE_TYPE_INTERNAL_STORAGE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_DOCUMENT_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MULTI_DOCUMENT_FLOW,
            self::GEOMETRY_SHAPE_TYPE_TERMINATOR_FLOW,
            self::GEOMETRY_SHAPE_TYPE_PREPARATION_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MANUAL_INPUT_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MANUAL_OPERATION_FLOW,
            self::GEOMETRY_SHAPE_TYPE_CONNECTOR_FLOW,
            self::GEOMETRY_SHAPE_TYPE_PUNCHED_CARD_FLOW,
            self::GEOMETRY_SHAPE_TYPE_PUNCHED_TAPE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_SUMMING_JUNCTION_FLOW,
            self::GEOMETRY_SHAPE_TYPE_OR_FLOW,
            self::GEOMETRY_SHAPE_TYPE_COLLATE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_SORT_FLOW,
            self::GEOMETRY_SHAPE_TYPE_EXTRACT_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MERGE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_OFFLINE_STORAGE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_ONLINE_STORAGE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MAGNETIC_TAPE_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MAGNETIC_DISK_FLOW,
            self::GEOMETRY_SHAPE_TYPE_MAGNETIC_DRUM_FLOW,
            self::GEOMETRY_SHAPE_TYPE_DISPLAY_FLOW,
            self::GEOMETRY_SHAPE_TYPE_DELAY_FLOW,
            self::GEOMETRY_SHAPE_TYPE_ALTERNATE_PROCESS_FLOW,
            self::GEOMETRY_SHAPE_TYPE_OFF_PAGE_CONNECTOR_FLOW,
            self::GEOMETRY_SHAPE_TYPE_BLANK_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_HOME_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_HELP_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_INFORMATION_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_FORWARD_OR_NEXT_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_BACK_OR_PREVIOUS_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_END_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_BEGINNING_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_RETURN_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_DOCUMENT_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_SOUND_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_MOVIE_BUTTON,
            self::GEOMETRY_SHAPE_TYPE_GEAR6,
            self::GEOMETRY_SHAPE_TYPE_GEAR9,
            self::GEOMETRY_SHAPE_TYPE_FUNNEL,
            self::GEOMETRY_SHAPE_TYPE_PLUS_MATH,
            self::GEOMETRY_SHAPE_TYPE_MINUS_MATH,
            self::GEOMETRY_SHAPE_TYPE_MULTIPLY_MATH,
            self::GEOMETRY_SHAPE_TYPE_DIVIDE_MATH,
            self::GEOMETRY_SHAPE_TYPE_EQUAL_MATH,
            self::GEOMETRY_SHAPE_TYPE_NOT_EQUAL_MATH,
            self::GEOMETRY_SHAPE_TYPE_CORNER_TABS,
            self::GEOMETRY_SHAPE_TYPE_SQUARE_TABS,
            self::GEOMETRY_SHAPE_TYPE_PLAQUE_TABS,
            self::GEOMETRY_SHAPE_TYPE_CHART_X,
            self::GEOMETRY_SHAPE_TYPE_CHART_STAR,
            self::GEOMETRY_SHAPE_TYPE_CHART_PLUS,
            self::GEOMETRY_SHAPE_TYPE_NOT_DEFINED,
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

        $this->container['geometry_shape_type'] = isset($data['geometry_shape_type']) ? $data['geometry_shape_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['geometry_shape_type'] === null) {
            $invalidProperties[] = "'geometry_shape_type' can't be null";
        }
        $allowedValues = $this->getGeometryShapeTypeAllowableValues();
        if (!in_array($this->container['geometry_shape_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'geometry_shape_type', must be one of '%s'",
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

        if ($this->container['geometry_shape_type'] === null) {
            return false;
        }
        $allowedValues = $this->getGeometryShapeTypeAllowableValues();
        if (!in_array($this->container['geometry_shape_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets geometry_shape_type
     *
     * @return string
     */
    public function getGeometryShapeType()
    {
        return $this->container['geometry_shape_type'];
    }

    /**
     * Sets geometry_shape_type
     *
     * @param string $geometry_shape_type geometry_shape_type
     *
     * @return $this
     */
    public function setGeometryShapeType($geometry_shape_type)
    {
        $allowedValues = $this->getGeometryShapeTypeAllowableValues();
        if (!in_array($geometry_shape_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'geometry_shape_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['geometry_shape_type'] = $geometry_shape_type;

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


