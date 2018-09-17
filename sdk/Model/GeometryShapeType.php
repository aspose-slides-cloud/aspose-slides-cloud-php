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
 * GeometryShapeType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeometryShapeType
{
    /**
     * Possible values of this enum
     */
    const CUSTOM = 'Custom';
    const LINE = 'Line';
    const LINE_INVERSE = 'LineInverse';
    const TRIANGLE = 'Triangle';
    const RIGHT_TRIANGLE = 'RightTriangle';
    const RECTANGLE = 'Rectangle';
    const DIAMOND = 'Diamond';
    const PARALLELOGRAM = 'Parallelogram';
    const TRAPEZOID = 'Trapezoid';
    const NON_ISOSCELES_TRAPEZOID = 'NonIsoscelesTrapezoid';
    const PENTAGON = 'Pentagon';
    const HEXAGON = 'Hexagon';
    const HEPTAGON = 'Heptagon';
    const OCTAGON = 'Octagon';
    const DECAGON = 'Decagon';
    const DODECAGON = 'Dodecagon';
    const FOUR_POINTED_STAR = 'FourPointedStar';
    const FIVE_POINTED_STAR = 'FivePointedStar';
    const SIX_POINTED_STAR = 'SixPointedStar';
    const SEVEN_POINTED_STAR = 'SevenPointedStar';
    const EIGHT_POINTED_STAR = 'EightPointedStar';
    const TEN_POINTED_STAR = 'TenPointedStar';
    const TWELVE_POINTED_STAR = 'TwelvePointedStar';
    const SIXTEEN_POINTED_STAR = 'SixteenPointedStar';
    const TWENTY_FOUR_POINTED_STAR = 'TwentyFourPointedStar';
    const THIRTY_TWO_POINTED_STAR = 'ThirtyTwoPointedStar';
    const ROUND_CORNER_RECTANGLE = 'RoundCornerRectangle';
    const ONE_ROUND_CORNER_RECTANGLE = 'OneRoundCornerRectangle';
    const TWO_SAMESIDE_ROUND_CORNER_RECTANGLE = 'TwoSamesideRoundCornerRectangle';
    const TWO_DIAGONAL_ROUND_CORNER_RECTANGLE = 'TwoDiagonalRoundCornerRectangle';
    const ONE_SNIP_ONE_ROUND_CORNER_RECTANGLE = 'OneSnipOneRoundCornerRectangle';
    const ONE_SNIP_CORNER_RECTANGLE = 'OneSnipCornerRectangle';
    const TWO_SAMESIDE_SNIP_CORNER_RECTANGLE = 'TwoSamesideSnipCornerRectangle';
    const TWO_DIAGONAL_SNIP_CORNER_RECTANGLE = 'TwoDiagonalSnipCornerRectangle';
    const PLAQUE = 'Plaque';
    const ELLIPSE = 'Ellipse';
    const TEARDROP = 'Teardrop';
    const HOME_PLATE = 'HomePlate';
    const CHEVRON = 'Chevron';
    const PIE_WEDGE = 'PieWedge';
    const PIE = 'Pie';
    const BLOCK_ARC = 'BlockArc';
    const DONUT = 'Donut';
    const NO_SMOKING = 'NoSmoking';
    const RIGHT_ARROW = 'RightArrow';
    const LEFT_ARROW = 'LeftArrow';
    const UP_ARROW = 'UpArrow';
    const DOWN_ARROW = 'DownArrow';
    const STRIPED_RIGHT_ARROW = 'StripedRightArrow';
    const NOTCHED_RIGHT_ARROW = 'NotchedRightArrow';
    const BENT_UP_ARROW = 'BentUpArrow';
    const LEFT_RIGHT_ARROW = 'LeftRightArrow';
    const UP_DOWN_ARROW = 'UpDownArrow';
    const LEFT_UP_ARROW = 'LeftUpArrow';
    const LEFT_RIGHT_UP_ARROW = 'LeftRightUpArrow';
    const QUAD_ARROW = 'QuadArrow';
    const CALLOUT_LEFT_ARROW = 'CalloutLeftArrow';
    const CALLOUT_RIGHT_ARROW = 'CalloutRightArrow';
    const CALLOUT_UP_ARROW = 'CalloutUpArrow';
    const CALLOUT_DOWN_ARROW = 'CalloutDownArrow';
    const CALLOUT_LEFT_RIGHT_ARROW = 'CalloutLeftRightArrow';
    const CALLOUT_UP_DOWN_ARROW = 'CalloutUpDownArrow';
    const CALLOUT_QUAD_ARROW = 'CalloutQuadArrow';
    const BENT_ARROW = 'BentArrow';
    const U_TURN_ARROW = 'UTurnArrow';
    const CIRCULAR_ARROW = 'CircularArrow';
    const LEFT_CIRCULAR_ARROW = 'LeftCircularArrow';
    const LEFT_RIGHT_CIRCULAR_ARROW = 'LeftRightCircularArrow';
    const CURVED_RIGHT_ARROW = 'CurvedRightArrow';
    const CURVED_LEFT_ARROW = 'CurvedLeftArrow';
    const CURVED_UP_ARROW = 'CurvedUpArrow';
    const CURVED_DOWN_ARROW = 'CurvedDownArrow';
    const SWOOSH_ARROW = 'SwooshArrow';
    const CUBE = 'Cube';
    const CAN = 'Can';
    const LIGHTNING_BOLT = 'LightningBolt';
    const HEART = 'Heart';
    const SUN = 'Sun';
    const MOON = 'Moon';
    const SMILEY_FACE = 'SmileyFace';
    const IRREGULAR_SEAL1 = 'IrregularSeal1';
    const IRREGULAR_SEAL2 = 'IrregularSeal2';
    const FOLDED_CORNER = 'FoldedCorner';
    const BEVEL = 'Bevel';
    const FRAME = 'Frame';
    const HALF_FRAME = 'HalfFrame';
    const CORNER = 'Corner';
    const DIAGONAL_STRIPE = 'DiagonalStripe';
    const CHORD = 'Chord';
    const CURVED_ARC = 'CurvedArc';
    const LEFT_BRACKET = 'LeftBracket';
    const RIGHT_BRACKET = 'RightBracket';
    const LEFT_BRACE = 'LeftBrace';
    const RIGHT_BRACE = 'RightBrace';
    const BRACKET_PAIR = 'BracketPair';
    const BRACE_PAIR = 'BracePair';
    const STRAIGHT_CONNECTOR1 = 'StraightConnector1';
    const BENT_CONNECTOR2 = 'BentConnector2';
    const BENT_CONNECTOR3 = 'BentConnector3';
    const BENT_CONNECTOR4 = 'BentConnector4';
    const BENT_CONNECTOR5 = 'BentConnector5';
    const CURVED_CONNECTOR2 = 'CurvedConnector2';
    const CURVED_CONNECTOR3 = 'CurvedConnector3';
    const CURVED_CONNECTOR4 = 'CurvedConnector4';
    const CURVED_CONNECTOR5 = 'CurvedConnector5';
    const CALLOUT1 = 'Callout1';
    const CALLOUT2 = 'Callout2';
    const CALLOUT3 = 'Callout3';
    const CALLOUT1_WITH_ACCENT = 'Callout1WithAccent';
    const CALLOUT2_WITH_ACCENT = 'Callout2WithAccent';
    const CALLOUT3_WITH_ACCENT = 'Callout3WithAccent';
    const CALLOUT1_WITH_BORDER = 'Callout1WithBorder';
    const CALLOUT2_WITH_BORDER = 'Callout2WithBorder';
    const CALLOUT3_WITH_BORDER = 'Callout3WithBorder';
    const CALLOUT1_WITH_BORDER_AND_ACCENT = 'Callout1WithBorderAndAccent';
    const CALLOUT2_WITH_BORDER_AND_ACCENT = 'Callout2WithBorderAndAccent';
    const CALLOUT3_WITH_BORDER_AND_ACCENT = 'Callout3WithBorderAndAccent';
    const CALLOUT_WEDGE_RECTANGLE = 'CalloutWedgeRectangle';
    const CALLOUT_WEDGE_ROUND_RECTANGLE = 'CalloutWedgeRoundRectangle';
    const CALLOUT_WEDGE_ELLIPSE = 'CalloutWedgeEllipse';
    const CALLOUT_CLOUD = 'CalloutCloud';
    const CLOUD = 'Cloud';
    const RIBBON = 'Ribbon';
    const RIBBON2 = 'Ribbon2';
    const ELLIPSE_RIBBON = 'EllipseRibbon';
    const ELLIPSE_RIBBON2 = 'EllipseRibbon2';
    const LEFT_RIGHT_RIBBON = 'LeftRightRibbon';
    const VERTICAL_SCROLL = 'VerticalScroll';
    const HORIZONTAL_SCROLL = 'HorizontalScroll';
    const WAVE = 'Wave';
    const DOUBLE_WAVE = 'DoubleWave';
    const PLUS = 'Plus';
    const PROCESS_FLOW = 'ProcessFlow';
    const DECISION_FLOW = 'DecisionFlow';
    const INPUT_OUTPUT_FLOW = 'InputOutputFlow';
    const PREDEFINED_PROCESS_FLOW = 'PredefinedProcessFlow';
    const INTERNAL_STORAGE_FLOW = 'InternalStorageFlow';
    const DOCUMENT_FLOW = 'DocumentFlow';
    const MULTI_DOCUMENT_FLOW = 'MultiDocumentFlow';
    const TERMINATOR_FLOW = 'TerminatorFlow';
    const PREPARATION_FLOW = 'PreparationFlow';
    const MANUAL_INPUT_FLOW = 'ManualInputFlow';
    const MANUAL_OPERATION_FLOW = 'ManualOperationFlow';
    const CONNECTOR_FLOW = 'ConnectorFlow';
    const PUNCHED_CARD_FLOW = 'PunchedCardFlow';
    const PUNCHED_TAPE_FLOW = 'PunchedTapeFlow';
    const SUMMING_JUNCTION_FLOW = 'SummingJunctionFlow';
    const OR_FLOW = 'OrFlow';
    const COLLATE_FLOW = 'CollateFlow';
    const SORT_FLOW = 'SortFlow';
    const EXTRACT_FLOW = 'ExtractFlow';
    const MERGE_FLOW = 'MergeFlow';
    const OFFLINE_STORAGE_FLOW = 'OfflineStorageFlow';
    const ONLINE_STORAGE_FLOW = 'OnlineStorageFlow';
    const MAGNETIC_TAPE_FLOW = 'MagneticTapeFlow';
    const MAGNETIC_DISK_FLOW = 'MagneticDiskFlow';
    const MAGNETIC_DRUM_FLOW = 'MagneticDrumFlow';
    const DISPLAY_FLOW = 'DisplayFlow';
    const DELAY_FLOW = 'DelayFlow';
    const ALTERNATE_PROCESS_FLOW = 'AlternateProcessFlow';
    const OFF_PAGE_CONNECTOR_FLOW = 'OffPageConnectorFlow';
    const BLANK_BUTTON = 'BlankButton';
    const HOME_BUTTON = 'HomeButton';
    const HELP_BUTTON = 'HelpButton';
    const INFORMATION_BUTTON = 'InformationButton';
    const FORWARD_OR_NEXT_BUTTON = 'ForwardOrNextButton';
    const BACK_OR_PREVIOUS_BUTTON = 'BackOrPreviousButton';
    const END_BUTTON = 'EndButton';
    const BEGINNING_BUTTON = 'BeginningButton';
    const RETURN_BUTTON = 'ReturnButton';
    const DOCUMENT_BUTTON = 'DocumentButton';
    const SOUND_BUTTON = 'SoundButton';
    const MOVIE_BUTTON = 'MovieButton';
    const GEAR6 = 'Gear6';
    const GEAR9 = 'Gear9';
    const FUNNEL = 'Funnel';
    const PLUS_MATH = 'PlusMath';
    const MINUS_MATH = 'MinusMath';
    const MULTIPLY_MATH = 'MultiplyMath';
    const DIVIDE_MATH = 'DivideMath';
    const EQUAL_MATH = 'EqualMath';
    const NOT_EQUAL_MATH = 'NotEqualMath';
    const CORNER_TABS = 'CornerTabs';
    const SQUARE_TABS = 'SquareTabs';
    const PLAQUE_TABS = 'PlaqueTabs';
    const CHART_X = 'ChartX';
    const CHART_STAR = 'ChartStar';
    const CHART_PLUS = 'ChartPlus';
    const NOT_DEFINED = 'NotDefined';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOM,
            self::LINE,
            self::LINE_INVERSE,
            self::TRIANGLE,
            self::RIGHT_TRIANGLE,
            self::RECTANGLE,
            self::DIAMOND,
            self::PARALLELOGRAM,
            self::TRAPEZOID,
            self::NON_ISOSCELES_TRAPEZOID,
            self::PENTAGON,
            self::HEXAGON,
            self::HEPTAGON,
            self::OCTAGON,
            self::DECAGON,
            self::DODECAGON,
            self::FOUR_POINTED_STAR,
            self::FIVE_POINTED_STAR,
            self::SIX_POINTED_STAR,
            self::SEVEN_POINTED_STAR,
            self::EIGHT_POINTED_STAR,
            self::TEN_POINTED_STAR,
            self::TWELVE_POINTED_STAR,
            self::SIXTEEN_POINTED_STAR,
            self::TWENTY_FOUR_POINTED_STAR,
            self::THIRTY_TWO_POINTED_STAR,
            self::ROUND_CORNER_RECTANGLE,
            self::ONE_ROUND_CORNER_RECTANGLE,
            self::TWO_SAMESIDE_ROUND_CORNER_RECTANGLE,
            self::TWO_DIAGONAL_ROUND_CORNER_RECTANGLE,
            self::ONE_SNIP_ONE_ROUND_CORNER_RECTANGLE,
            self::ONE_SNIP_CORNER_RECTANGLE,
            self::TWO_SAMESIDE_SNIP_CORNER_RECTANGLE,
            self::TWO_DIAGONAL_SNIP_CORNER_RECTANGLE,
            self::PLAQUE,
            self::ELLIPSE,
            self::TEARDROP,
            self::HOME_PLATE,
            self::CHEVRON,
            self::PIE_WEDGE,
            self::PIE,
            self::BLOCK_ARC,
            self::DONUT,
            self::NO_SMOKING,
            self::RIGHT_ARROW,
            self::LEFT_ARROW,
            self::UP_ARROW,
            self::DOWN_ARROW,
            self::STRIPED_RIGHT_ARROW,
            self::NOTCHED_RIGHT_ARROW,
            self::BENT_UP_ARROW,
            self::LEFT_RIGHT_ARROW,
            self::UP_DOWN_ARROW,
            self::LEFT_UP_ARROW,
            self::LEFT_RIGHT_UP_ARROW,
            self::QUAD_ARROW,
            self::CALLOUT_LEFT_ARROW,
            self::CALLOUT_RIGHT_ARROW,
            self::CALLOUT_UP_ARROW,
            self::CALLOUT_DOWN_ARROW,
            self::CALLOUT_LEFT_RIGHT_ARROW,
            self::CALLOUT_UP_DOWN_ARROW,
            self::CALLOUT_QUAD_ARROW,
            self::BENT_ARROW,
            self::U_TURN_ARROW,
            self::CIRCULAR_ARROW,
            self::LEFT_CIRCULAR_ARROW,
            self::LEFT_RIGHT_CIRCULAR_ARROW,
            self::CURVED_RIGHT_ARROW,
            self::CURVED_LEFT_ARROW,
            self::CURVED_UP_ARROW,
            self::CURVED_DOWN_ARROW,
            self::SWOOSH_ARROW,
            self::CUBE,
            self::CAN,
            self::LIGHTNING_BOLT,
            self::HEART,
            self::SUN,
            self::MOON,
            self::SMILEY_FACE,
            self::IRREGULAR_SEAL1,
            self::IRREGULAR_SEAL2,
            self::FOLDED_CORNER,
            self::BEVEL,
            self::FRAME,
            self::HALF_FRAME,
            self::CORNER,
            self::DIAGONAL_STRIPE,
            self::CHORD,
            self::CURVED_ARC,
            self::LEFT_BRACKET,
            self::RIGHT_BRACKET,
            self::LEFT_BRACE,
            self::RIGHT_BRACE,
            self::BRACKET_PAIR,
            self::BRACE_PAIR,
            self::STRAIGHT_CONNECTOR1,
            self::BENT_CONNECTOR2,
            self::BENT_CONNECTOR3,
            self::BENT_CONNECTOR4,
            self::BENT_CONNECTOR5,
            self::CURVED_CONNECTOR2,
            self::CURVED_CONNECTOR3,
            self::CURVED_CONNECTOR4,
            self::CURVED_CONNECTOR5,
            self::CALLOUT1,
            self::CALLOUT2,
            self::CALLOUT3,
            self::CALLOUT1_WITH_ACCENT,
            self::CALLOUT2_WITH_ACCENT,
            self::CALLOUT3_WITH_ACCENT,
            self::CALLOUT1_WITH_BORDER,
            self::CALLOUT2_WITH_BORDER,
            self::CALLOUT3_WITH_BORDER,
            self::CALLOUT1_WITH_BORDER_AND_ACCENT,
            self::CALLOUT2_WITH_BORDER_AND_ACCENT,
            self::CALLOUT3_WITH_BORDER_AND_ACCENT,
            self::CALLOUT_WEDGE_RECTANGLE,
            self::CALLOUT_WEDGE_ROUND_RECTANGLE,
            self::CALLOUT_WEDGE_ELLIPSE,
            self::CALLOUT_CLOUD,
            self::CLOUD,
            self::RIBBON,
            self::RIBBON2,
            self::ELLIPSE_RIBBON,
            self::ELLIPSE_RIBBON2,
            self::LEFT_RIGHT_RIBBON,
            self::VERTICAL_SCROLL,
            self::HORIZONTAL_SCROLL,
            self::WAVE,
            self::DOUBLE_WAVE,
            self::PLUS,
            self::PROCESS_FLOW,
            self::DECISION_FLOW,
            self::INPUT_OUTPUT_FLOW,
            self::PREDEFINED_PROCESS_FLOW,
            self::INTERNAL_STORAGE_FLOW,
            self::DOCUMENT_FLOW,
            self::MULTI_DOCUMENT_FLOW,
            self::TERMINATOR_FLOW,
            self::PREPARATION_FLOW,
            self::MANUAL_INPUT_FLOW,
            self::MANUAL_OPERATION_FLOW,
            self::CONNECTOR_FLOW,
            self::PUNCHED_CARD_FLOW,
            self::PUNCHED_TAPE_FLOW,
            self::SUMMING_JUNCTION_FLOW,
            self::OR_FLOW,
            self::COLLATE_FLOW,
            self::SORT_FLOW,
            self::EXTRACT_FLOW,
            self::MERGE_FLOW,
            self::OFFLINE_STORAGE_FLOW,
            self::ONLINE_STORAGE_FLOW,
            self::MAGNETIC_TAPE_FLOW,
            self::MAGNETIC_DISK_FLOW,
            self::MAGNETIC_DRUM_FLOW,
            self::DISPLAY_FLOW,
            self::DELAY_FLOW,
            self::ALTERNATE_PROCESS_FLOW,
            self::OFF_PAGE_CONNECTOR_FLOW,
            self::BLANK_BUTTON,
            self::HOME_BUTTON,
            self::HELP_BUTTON,
            self::INFORMATION_BUTTON,
            self::FORWARD_OR_NEXT_BUTTON,
            self::BACK_OR_PREVIOUS_BUTTON,
            self::END_BUTTON,
            self::BEGINNING_BUTTON,
            self::RETURN_BUTTON,
            self::DOCUMENT_BUTTON,
            self::SOUND_BUTTON,
            self::MOVIE_BUTTON,
            self::GEAR6,
            self::GEAR9,
            self::FUNNEL,
            self::PLUS_MATH,
            self::MINUS_MATH,
            self::MULTIPLY_MATH,
            self::DIVIDE_MATH,
            self::EQUAL_MATH,
            self::NOT_EQUAL_MATH,
            self::CORNER_TABS,
            self::SQUARE_TABS,
            self::PLAQUE_TABS,
            self::CHART_X,
            self::CHART_STAR,
            self::CHART_PLUS,
            self::NOT_DEFINED,
        ];
    }
}


