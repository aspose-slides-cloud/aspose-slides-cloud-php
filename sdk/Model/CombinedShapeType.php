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
 * CombinedShapeType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CombinedShapeType
{
    /**
     * Possible values of this enum
     */
    const Custom = 0;
    const Line = 1;
    const LineInverse = 2;
    const Triangle = 3;
    const RightTriangle = 4;
    const Rectangle = 5;
    const Diamond = 6;
    const Parallelogram = 7;
    const Trapezoid = 8;
    const NonIsoscelesTrapezoid = 9;
    const Pentagon = 10;
    const Hexagon = 11;
    const Heptagon = 12;
    const Octagon = 13;
    const Decagon = 14;
    const Dodecagon = 15;
    const FourPointedStar = 16;
    const FivePointedStar = 17;
    const SixPointedStar = 18;
    const SevenPointedStar = 19;
    const EightPointedStar = 20;
    const TenPointedStar = 21;
    const TwelvePointedStar = 22;
    const SixteenPointedStar = 23;
    const TwentyFourPointedStar = 24;
    const ThirtyTwoPointedStar = 25;
    const RoundCornerRectangle = 26;
    const OneRoundCornerRectangle = 27;
    const TwoSamesideRoundCornerRectangle = 28;
    const TwoDiagonalRoundCornerRectangle = 29;
    const OneSnipOneRoundCornerRectangle = 30;
    const OneSnipCornerRectangle = 31;
    const TwoSamesideSnipCornerRectangle = 32;
    const TwoDiagonalSnipCornerRectangle = 33;
    const Plaque = 34;
    const Ellipse = 35;
    const Teardrop = 36;
    const HomePlate = 37;
    const Chevron = 38;
    const PieWedge = 39;
    const Pie = 40;
    const BlockArc = 41;
    const Donut = 42;
    const NoSmoking = 43;
    const RightArrow = 44;
    const LeftArrow = 45;
    const UpArrow = 46;
    const DownArrow = 47;
    const StripedRightArrow = 48;
    const NotchedRightArrow = 49;
    const BentUpArrow = 50;
    const LeftRightArrow = 51;
    const UpDownArrow = 52;
    const LeftUpArrow = 53;
    const LeftRightUpArrow = 54;
    const QuadArrow = 55;
    const CalloutLeftArrow = 56;
    const CalloutRightArrow = 57;
    const CalloutUpArrow = 58;
    const CalloutDownArrow = 59;
    const CalloutLeftRightArrow = 60;
    const CalloutUpDownArrow = 61;
    const CalloutQuadArrow = 62;
    const BentArrow = 63;
    const UTurnArrow = 64;
    const CircularArrow = 65;
    const LeftCircularArrow = 66;
    const LeftRightCircularArrow = 67;
    const CurvedRightArrow = 68;
    const CurvedLeftArrow = 69;
    const CurvedUpArrow = 70;
    const CurvedDownArrow = 71;
    const SwooshArrow = 72;
    const Cube = 73;
    const Can = 74;
    const LightningBolt = 75;
    const Heart = 76;
    const Sun = 77;
    const Moon = 78;
    const SmileyFace = 79;
    const IrregularSeal1 = 80;
    const IrregularSeal2 = 81;
    const FoldedCorner = 82;
    const Bevel = 83;
    const Frame = 84;
    const HalfFrame = 85;
    const Corner = 86;
    const DiagonalStripe = 87;
    const Chord = 88;
    const CurvedArc = 89;
    const LeftBracket = 90;
    const RightBracket = 91;
    const LeftBrace = 92;
    const RightBrace = 93;
    const BracketPair = 94;
    const BracePair = 95;
    const StraightConnector1 = 96;
    const BentConnector2 = 97;
    const BentConnector3 = 98;
    const BentConnector4 = 99;
    const BentConnector5 = 100;
    const CurvedConnector2 = 101;
    const CurvedConnector3 = 102;
    const CurvedConnector4 = 103;
    const CurvedConnector5 = 104;
    const Callout1 = 105;
    const Callout2 = 106;
    const Callout3 = 107;
    const Callout1WithAccent = 108;
    const Callout2WithAccent = 109;
    const Callout3WithAccent = 110;
    const Callout1WithBorder = 111;
    const Callout2WithBorder = 112;
    const Callout3WithBorder = 113;
    const Callout1WithBorderAndAccent = 114;
    const Callout2WithBorderAndAccent = 115;
    const Callout3WithBorderAndAccent = 116;
    const CalloutWedgeRectangle = 117;
    const CalloutWedgeRoundRectangle = 118;
    const CalloutWedgeEllipse = 119;
    const CalloutCloud = 120;
    const Cloud = 121;
    const Ribbon = 122;
    const Ribbon2 = 123;
    const EllipseRibbon = 124;
    const EllipseRibbon2 = 125;
    const LeftRightRibbon = 126;
    const VerticalScroll = 127;
    const HorizontalScroll = 128;
    const Wave = 129;
    const DoubleWave = 130;
    const Plus = 131;
    const ProcessFlow = 132;
    const DecisionFlow = 133;
    const InputOutputFlow = 134;
    const PredefinedProcessFlow = 135;
    const InternalStorageFlow = 136;
    const DocumentFlow = 137;
    const MultiDocumentFlow = 138;
    const TerminatorFlow = 139;
    const PreparationFlow = 140;
    const ManualInputFlow = 141;
    const ManualOperationFlow = 142;
    const ConnectorFlow = 143;
    const PunchedCardFlow = 144;
    const PunchedTapeFlow = 145;
    const SummingJunctionFlow = 146;
    const OrFlow = 147;
    const CollateFlow = 148;
    const SortFlow = 149;
    const ExtractFlow = 150;
    const MergeFlow = 151;
    const OfflineStorageFlow = 152;
    const OnlineStorageFlow = 153;
    const MagneticTapeFlow = 154;
    const MagneticDiskFlow = 155;
    const MagneticDrumFlow = 156;
    const DisplayFlow = 157;
    const DelayFlow = 158;
    const AlternateProcessFlow = 159;
    const OffPageConnectorFlow = 160;
    const BlankButton = 161;
    const HomeButton = 162;
    const HelpButton = 163;
    const InformationButton = 164;
    const ForwardOrNextButton = 165;
    const BackOrPreviousButton = 166;
    const EndButton = 167;
    const BeginningButton = 168;
    const ReturnButton = 169;
    const DocumentButton = 170;
    const SoundButton = 171;
    const MovieButton = 172;
    const Gear6 = 173;
    const Gear9 = 174;
    const Funnel = 175;
    const PlusMath = 176;
    const MinusMath = 177;
    const MultiplyMath = 178;
    const DivideMath = 179;
    const EqualMath = 180;
    const NotEqualMath = 181;
    const CornerTabs = 182;
    const SquareTabs = 183;
    const PlaqueTabs = 184;
    const ChartX = 185;
    const ChartStar = 186;
    const ChartPlus = 187;
    const Chart = 188;
    const Table = 189;
    const PictureFrame = 190;
    const VideoFrame = 191;
    const AudioFrame = 192;
    const Diagram = 193;
    const OleObjectFrame = 194;
    const GroupShape = 195;
    const GraphicalObject = 196;
    const NotDefined = -1;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Custom,
            self::Line,
            self::LineInverse,
            self::Triangle,
            self::RightTriangle,
            self::Rectangle,
            self::Diamond,
            self::Parallelogram,
            self::Trapezoid,
            self::NonIsoscelesTrapezoid,
            self::Pentagon,
            self::Hexagon,
            self::Heptagon,
            self::Octagon,
            self::Decagon,
            self::Dodecagon,
            self::FourPointedStar,
            self::FivePointedStar,
            self::SixPointedStar,
            self::SevenPointedStar,
            self::EightPointedStar,
            self::TenPointedStar,
            self::TwelvePointedStar,
            self::SixteenPointedStar,
            self::TwentyFourPointedStar,
            self::ThirtyTwoPointedStar,
            self::RoundCornerRectangle,
            self::OneRoundCornerRectangle,
            self::TwoSamesideRoundCornerRectangle,
            self::TwoDiagonalRoundCornerRectangle,
            self::OneSnipOneRoundCornerRectangle,
            self::OneSnipCornerRectangle,
            self::TwoSamesideSnipCornerRectangle,
            self::TwoDiagonalSnipCornerRectangle,
            self::Plaque,
            self::Ellipse,
            self::Teardrop,
            self::HomePlate,
            self::Chevron,
            self::PieWedge,
            self::Pie,
            self::BlockArc,
            self::Donut,
            self::NoSmoking,
            self::RightArrow,
            self::LeftArrow,
            self::UpArrow,
            self::DownArrow,
            self::StripedRightArrow,
            self::NotchedRightArrow,
            self::BentUpArrow,
            self::LeftRightArrow,
            self::UpDownArrow,
            self::LeftUpArrow,
            self::LeftRightUpArrow,
            self::QuadArrow,
            self::CalloutLeftArrow,
            self::CalloutRightArrow,
            self::CalloutUpArrow,
            self::CalloutDownArrow,
            self::CalloutLeftRightArrow,
            self::CalloutUpDownArrow,
            self::CalloutQuadArrow,
            self::BentArrow,
            self::UTurnArrow,
            self::CircularArrow,
            self::LeftCircularArrow,
            self::LeftRightCircularArrow,
            self::CurvedRightArrow,
            self::CurvedLeftArrow,
            self::CurvedUpArrow,
            self::CurvedDownArrow,
            self::SwooshArrow,
            self::Cube,
            self::Can,
            self::LightningBolt,
            self::Heart,
            self::Sun,
            self::Moon,
            self::SmileyFace,
            self::IrregularSeal1,
            self::IrregularSeal2,
            self::FoldedCorner,
            self::Bevel,
            self::Frame,
            self::HalfFrame,
            self::Corner,
            self::DiagonalStripe,
            self::Chord,
            self::CurvedArc,
            self::LeftBracket,
            self::RightBracket,
            self::LeftBrace,
            self::RightBrace,
            self::BracketPair,
            self::BracePair,
            self::StraightConnector1,
            self::BentConnector2,
            self::BentConnector3,
            self::BentConnector4,
            self::BentConnector5,
            self::CurvedConnector2,
            self::CurvedConnector3,
            self::CurvedConnector4,
            self::CurvedConnector5,
            self::Callout1,
            self::Callout2,
            self::Callout3,
            self::Callout1WithAccent,
            self::Callout2WithAccent,
            self::Callout3WithAccent,
            self::Callout1WithBorder,
            self::Callout2WithBorder,
            self::Callout3WithBorder,
            self::Callout1WithBorderAndAccent,
            self::Callout2WithBorderAndAccent,
            self::Callout3WithBorderAndAccent,
            self::CalloutWedgeRectangle,
            self::CalloutWedgeRoundRectangle,
            self::CalloutWedgeEllipse,
            self::CalloutCloud,
            self::Cloud,
            self::Ribbon,
            self::Ribbon2,
            self::EllipseRibbon,
            self::EllipseRibbon2,
            self::LeftRightRibbon,
            self::VerticalScroll,
            self::HorizontalScroll,
            self::Wave,
            self::DoubleWave,
            self::Plus,
            self::ProcessFlow,
            self::DecisionFlow,
            self::InputOutputFlow,
            self::PredefinedProcessFlow,
            self::InternalStorageFlow,
            self::DocumentFlow,
            self::MultiDocumentFlow,
            self::TerminatorFlow,
            self::PreparationFlow,
            self::ManualInputFlow,
            self::ManualOperationFlow,
            self::ConnectorFlow,
            self::PunchedCardFlow,
            self::PunchedTapeFlow,
            self::SummingJunctionFlow,
            self::OrFlow,
            self::CollateFlow,
            self::SortFlow,
            self::ExtractFlow,
            self::MergeFlow,
            self::OfflineStorageFlow,
            self::OnlineStorageFlow,
            self::MagneticTapeFlow,
            self::MagneticDiskFlow,
            self::MagneticDrumFlow,
            self::DisplayFlow,
            self::DelayFlow,
            self::AlternateProcessFlow,
            self::OffPageConnectorFlow,
            self::BlankButton,
            self::HomeButton,
            self::HelpButton,
            self::InformationButton,
            self::ForwardOrNextButton,
            self::BackOrPreviousButton,
            self::EndButton,
            self::BeginningButton,
            self::ReturnButton,
            self::DocumentButton,
            self::SoundButton,
            self::MovieButton,
            self::Gear6,
            self::Gear9,
            self::Funnel,
            self::PlusMath,
            self::MinusMath,
            self::MultiplyMath,
            self::DivideMath,
            self::EqualMath,
            self::NotEqualMath,
            self::CornerTabs,
            self::SquareTabs,
            self::PlaqueTabs,
            self::ChartX,
            self::ChartStar,
            self::ChartPlus,
            self::Chart,
            self::Table,
            self::PictureFrame,
            self::VideoFrame,
            self::AudioFrame,
            self::Diagram,
            self::OleObjectFrame,
            self::GroupShape,
            self::GraphicalObject,
            self::NotDefined,
        ];
    }
}


