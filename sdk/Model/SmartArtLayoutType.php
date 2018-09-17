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
 * SmartArtLayoutType Class Doc Comment
 *
 * @category Class
 * @description Represents layout type of a SmartArt diagram.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartArtLayoutType
{
    /**
     * Possible values of this enum
     */
    const ACCENT_PROCESS = 'AccentProcess';
    const ACCENTED_PICTURE = 'AccentedPicture';
    const ALTERNATING_FLOW = 'AlternatingFlow';
    const ALTERNATING_HEXAGONS = 'AlternatingHexagons';
    const ALTERNATING_PICTURE_BLOCKS = 'AlternatingPictureBlocks';
    const ALTERNATING_PICTURE_CIRCLES = 'AlternatingPictureCircles';
    const ARROW_RIBBON = 'ArrowRibbon';
    const ASCENDING_PICTURE_ACCENT_PROCESS = 'AscendingPictureAccentProcess';
    const BALANCE = 'Balance';
    const BASIC_BENDING_PROCESS = 'BasicBendingProcess';
    const BASIC_BLOCK_LIST = 'BasicBlockList';
    const BASIC_CHEVRON_PROCESS = 'BasicChevronProcess';
    const BASIC_CYCLE = 'BasicCycle';
    const BASIC_MATRIX = 'BasicMatrix';
    const BASIC_PIE = 'BasicPie';
    const BASIC_PROCESS = 'BasicProcess';
    const BASIC_PYRAMID = 'BasicPyramid';
    const BASIC_RADIAL = 'BasicRadial';
    const BASIC_TARGET = 'BasicTarget';
    const BASIC_TIMELINE = 'BasicTimeline';
    const BASIC_VENN = 'BasicVenn';
    const BENDING_PICTURE_ACCENT_LIST = 'BendingPictureAccentList';
    const BENDING_PICTURE_BLOCKS = 'BendingPictureBlocks';
    const BENDING_PICTURE_CAPTION = 'BendingPictureCaption';
    const BENDING_PICTURE_CAPTION_LIST = 'BendingPictureCaptionList';
    const BENDING_PICTURE_SEMI_TRANSPARENT_TEXT = 'BendingPictureSemiTransparentText';
    const BLOCK_CYCLE = 'BlockCycle';
    const BUBBLE_PICTURE_LIST = 'BubblePictureList';
    const CAPTIONED_PICTURES = 'CaptionedPictures';
    const CHEVRON_LIST = 'ChevronList';
    const CIRCLE_ACCENT_TIMELINE = 'CircleAccentTimeline';
    const CIRCLE_ARROW_PROCESS = 'CircleArrowProcess';
    const CIRCLE_PICTURE_HIERARCHY = 'CirclePictureHierarchy';
    const CIRCLE_RELATIONSHIP = 'CircleRelationship';
    const CIRCULAR_BENDING_PROCESS = 'CircularBendingProcess';
    const CIRCULAR_PICTURE_CALLOUT = 'CircularPictureCallout';
    const CLOSED_CHEVRON_PROCESS = 'ClosedChevronProcess';
    const CONTINUOUS_ARROW_PROCESS = 'ContinuousArrowProcess';
    const CONTINUOUS_BLOCK_PROCESS = 'ContinuousBlockProcess';
    const CONTINUOUS_CYCLE = 'ContinuousCycle';
    const CONTINUOUS_PICTURE_LIST = 'ContinuousPictureList';
    const CONVERGING_ARROWS = 'ConvergingArrows';
    const CONVERGING_RADIAL = 'ConvergingRadial';
    const COUNTERBALANCE_ARROWS = 'CounterbalanceArrows';
    const CYCLE_MATRIX = 'CycleMatrix';
    const DESCENDING_BLOCK_LIST = 'DescendingBlockList';
    const DESCENDING_PROCESS = 'DescendingProcess';
    const DETAILED_PROCESS = 'DetailedProcess';
    const DIVERGING_ARROWS = 'DivergingArrows';
    const DIVERGING_RADIAL = 'DivergingRadial';
    const EQUATION = 'Equation';
    const FRAMED_TEXT_PICTURE = 'FramedTextPicture';
    const FUNNEL = 'Funnel';
    const GEAR = 'Gear';
    const GRID_MATRIX = 'GridMatrix';
    const GROUPED_LIST = 'GroupedList';
    const HALF_CIRCLE_ORGANIZATION_CHART = 'HalfCircleOrganizationChart';
    const HEXAGON_CLUSTER = 'HexagonCluster';
    const HIERARCHY = 'Hierarchy';
    const HIERARCHY_LIST = 'HierarchyList';
    const HORIZONTAL_BULLET_LIST = 'HorizontalBulletList';
    const HORIZONTAL_HIERARCHY = 'HorizontalHierarchy';
    const HORIZONTAL_LABELED_HIERARCHY = 'HorizontalLabeledHierarchy';
    const HORIZONTAL_MULTI_LEVEL_HIERARCHY = 'HorizontalMultiLevelHierarchy';
    const HORIZONTAL_ORGANIZATION_CHART = 'HorizontalOrganizationChart';
    const HORIZONTAL_PICTURE_LIST = 'HorizontalPictureList';
    const INCREASING_ARROWS_PROCESS = 'IncreasingArrowsProcess';
    const INCREASING_CIRCLE_PROCESS = 'IncreasingCircleProcess';
    const INVERTED_PYRAMID = 'InvertedPyramid';
    const LABELED_HIERARCHY = 'LabeledHierarchy';
    const LINEAR_VENN = 'LinearVenn';
    const LINED_LIST = 'LinedList';
    const MULTIDIRECTIONAL_CYCLE = 'MultidirectionalCycle';
    const NAMEAND_TITLE_ORGANIZATION_CHART = 'NameandTitleOrganizationChart';
    const NESTED_TARGET = 'NestedTarget';
    const NONDIRECTIONAL_CYCLE = 'NondirectionalCycle';
    const OPPOSING_ARROWS = 'OpposingArrows';
    const OPPOSING_IDEAS = 'OpposingIdeas';
    const ORGANIZATION_CHART = 'OrganizationChart';
    const PHASED_PROCESS = 'PhasedProcess';
    const PICTURE_ACCENT_BLOCKS = 'PictureAccentBlocks';
    const PICTURE_ACCENT_LIST = 'PictureAccentList';
    const PICTURE_ACCENT_PROCESS = 'PictureAccentProcess';
    const PICTURE_CAPTION_LIST = 'PictureCaptionList';
    const PICTURE_GRID = 'PictureGrid';
    const PICTURE_LINEUP = 'PictureLineup';
    const PICTURE_STRIPS = 'PictureStrips';
    const PIE_PROCESS = 'PieProcess';
    const PLUSAND_MINUS = 'PlusandMinus';
    const PROCESS_ARROWS = 'ProcessArrows';
    const PROCESS_LIST = 'ProcessList';
    const PYRAMID_LIST = 'PyramidList';
    const RADIAL_CLUSTER = 'RadialCluster';
    const RADIAL_CYCLE = 'RadialCycle';
    const RADIAL_LIST = 'RadialList';
    const RADIAL_VENN = 'RadialVenn';
    const RANDOM_TO_RESULT_PROCESS = 'RandomToResultProcess';
    const REPEATING_BENDING_PROCESS = 'RepeatingBendingProcess';
    const REVERSE_LIST = 'ReverseList';
    const SEGMENTED_CYCLE = 'SegmentedCycle';
    const SEGMENTED_PROCESS = 'SegmentedProcess';
    const SEGMENTED_PYRAMID = 'SegmentedPyramid';
    const SNAPSHOT_PICTURE_LIST = 'SnapshotPictureList';
    const SPIRAL_PICTURE = 'SpiralPicture';
    const SQUARE_ACCENT_LIST = 'SquareAccentList';
    const STACKED_LIST = 'StackedList';
    const STACKED_VENN = 'StackedVenn';
    const STAGGERED_PROCESS = 'StaggeredProcess';
    const STEP_DOWN_PROCESS = 'StepDownProcess';
    const STEP_UP_PROCESS = 'StepUpProcess';
    const SUB_STEP_PROCESS = 'SubStepProcess';
    const TABLE_HIERARCHY = 'TableHierarchy';
    const TABLE_LIST = 'TableList';
    const TARGET_LIST = 'TargetList';
    const TEXT_CYCLE = 'TextCycle';
    const TITLE_PICTURE_LINEUP = 'TitlePictureLineup';
    const TITLED_MATRIX = 'TitledMatrix';
    const TITLED_PICTURE_ACCENT_LIST = 'TitledPictureAccentList';
    const TITLED_PICTURE_BLOCKS = 'TitledPictureBlocks';
    const TRAPEZOID_LIST = 'TrapezoidList';
    const UPWARD_ARROW = 'UpwardArrow';
    const VERTICAL_ACCENT_LIST = 'VerticalAccentList';
    const VERTICAL_ARROW_LIST = 'VerticalArrowList';
    const VERTICAL_BENDING_PROCESS = 'VerticalBendingProcess';
    const VERTICAL_BLOCK_LIST = 'VerticalBlockList';
    const VERTICAL_BOX_LIST = 'VerticalBoxList';
    const VERTICAL_BULLET_LIST = 'VerticalBulletList';
    const VERTICAL_CHEVRON_LIST = 'VerticalChevronList';
    const VERTICAL_CIRCLE_LIST = 'VerticalCircleList';
    const VERTICAL_CURVED_LIST = 'VerticalCurvedList';
    const VERTICAL_EQUATION = 'VerticalEquation';
    const VERTICAL_PICTURE_ACCENT_LIST = 'VerticalPictureAccentList';
    const VERTICAL_PICTURE_LIST = 'VerticalPictureList';
    const VERTICAL_PROCESS = 'VerticalProcess';
    const CUSTOM = 'Custom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCENT_PROCESS,
            self::ACCENTED_PICTURE,
            self::ALTERNATING_FLOW,
            self::ALTERNATING_HEXAGONS,
            self::ALTERNATING_PICTURE_BLOCKS,
            self::ALTERNATING_PICTURE_CIRCLES,
            self::ARROW_RIBBON,
            self::ASCENDING_PICTURE_ACCENT_PROCESS,
            self::BALANCE,
            self::BASIC_BENDING_PROCESS,
            self::BASIC_BLOCK_LIST,
            self::BASIC_CHEVRON_PROCESS,
            self::BASIC_CYCLE,
            self::BASIC_MATRIX,
            self::BASIC_PIE,
            self::BASIC_PROCESS,
            self::BASIC_PYRAMID,
            self::BASIC_RADIAL,
            self::BASIC_TARGET,
            self::BASIC_TIMELINE,
            self::BASIC_VENN,
            self::BENDING_PICTURE_ACCENT_LIST,
            self::BENDING_PICTURE_BLOCKS,
            self::BENDING_PICTURE_CAPTION,
            self::BENDING_PICTURE_CAPTION_LIST,
            self::BENDING_PICTURE_SEMI_TRANSPARENT_TEXT,
            self::BLOCK_CYCLE,
            self::BUBBLE_PICTURE_LIST,
            self::CAPTIONED_PICTURES,
            self::CHEVRON_LIST,
            self::CIRCLE_ACCENT_TIMELINE,
            self::CIRCLE_ARROW_PROCESS,
            self::CIRCLE_PICTURE_HIERARCHY,
            self::CIRCLE_RELATIONSHIP,
            self::CIRCULAR_BENDING_PROCESS,
            self::CIRCULAR_PICTURE_CALLOUT,
            self::CLOSED_CHEVRON_PROCESS,
            self::CONTINUOUS_ARROW_PROCESS,
            self::CONTINUOUS_BLOCK_PROCESS,
            self::CONTINUOUS_CYCLE,
            self::CONTINUOUS_PICTURE_LIST,
            self::CONVERGING_ARROWS,
            self::CONVERGING_RADIAL,
            self::COUNTERBALANCE_ARROWS,
            self::CYCLE_MATRIX,
            self::DESCENDING_BLOCK_LIST,
            self::DESCENDING_PROCESS,
            self::DETAILED_PROCESS,
            self::DIVERGING_ARROWS,
            self::DIVERGING_RADIAL,
            self::EQUATION,
            self::FRAMED_TEXT_PICTURE,
            self::FUNNEL,
            self::GEAR,
            self::GRID_MATRIX,
            self::GROUPED_LIST,
            self::HALF_CIRCLE_ORGANIZATION_CHART,
            self::HEXAGON_CLUSTER,
            self::HIERARCHY,
            self::HIERARCHY_LIST,
            self::HORIZONTAL_BULLET_LIST,
            self::HORIZONTAL_HIERARCHY,
            self::HORIZONTAL_LABELED_HIERARCHY,
            self::HORIZONTAL_MULTI_LEVEL_HIERARCHY,
            self::HORIZONTAL_ORGANIZATION_CHART,
            self::HORIZONTAL_PICTURE_LIST,
            self::INCREASING_ARROWS_PROCESS,
            self::INCREASING_CIRCLE_PROCESS,
            self::INVERTED_PYRAMID,
            self::LABELED_HIERARCHY,
            self::LINEAR_VENN,
            self::LINED_LIST,
            self::MULTIDIRECTIONAL_CYCLE,
            self::NAMEAND_TITLE_ORGANIZATION_CHART,
            self::NESTED_TARGET,
            self::NONDIRECTIONAL_CYCLE,
            self::OPPOSING_ARROWS,
            self::OPPOSING_IDEAS,
            self::ORGANIZATION_CHART,
            self::PHASED_PROCESS,
            self::PICTURE_ACCENT_BLOCKS,
            self::PICTURE_ACCENT_LIST,
            self::PICTURE_ACCENT_PROCESS,
            self::PICTURE_CAPTION_LIST,
            self::PICTURE_GRID,
            self::PICTURE_LINEUP,
            self::PICTURE_STRIPS,
            self::PIE_PROCESS,
            self::PLUSAND_MINUS,
            self::PROCESS_ARROWS,
            self::PROCESS_LIST,
            self::PYRAMID_LIST,
            self::RADIAL_CLUSTER,
            self::RADIAL_CYCLE,
            self::RADIAL_LIST,
            self::RADIAL_VENN,
            self::RANDOM_TO_RESULT_PROCESS,
            self::REPEATING_BENDING_PROCESS,
            self::REVERSE_LIST,
            self::SEGMENTED_CYCLE,
            self::SEGMENTED_PROCESS,
            self::SEGMENTED_PYRAMID,
            self::SNAPSHOT_PICTURE_LIST,
            self::SPIRAL_PICTURE,
            self::SQUARE_ACCENT_LIST,
            self::STACKED_LIST,
            self::STACKED_VENN,
            self::STAGGERED_PROCESS,
            self::STEP_DOWN_PROCESS,
            self::STEP_UP_PROCESS,
            self::SUB_STEP_PROCESS,
            self::TABLE_HIERARCHY,
            self::TABLE_LIST,
            self::TARGET_LIST,
            self::TEXT_CYCLE,
            self::TITLE_PICTURE_LINEUP,
            self::TITLED_MATRIX,
            self::TITLED_PICTURE_ACCENT_LIST,
            self::TITLED_PICTURE_BLOCKS,
            self::TRAPEZOID_LIST,
            self::UPWARD_ARROW,
            self::VERTICAL_ACCENT_LIST,
            self::VERTICAL_ARROW_LIST,
            self::VERTICAL_BENDING_PROCESS,
            self::VERTICAL_BLOCK_LIST,
            self::VERTICAL_BOX_LIST,
            self::VERTICAL_BULLET_LIST,
            self::VERTICAL_CHEVRON_LIST,
            self::VERTICAL_CIRCLE_LIST,
            self::VERTICAL_CURVED_LIST,
            self::VERTICAL_EQUATION,
            self::VERTICAL_PICTURE_ACCENT_LIST,
            self::VERTICAL_PICTURE_LIST,
            self::VERTICAL_PROCESS,
            self::CUSTOM,
        ];
    }
}


