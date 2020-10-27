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
 * SmartArt Class Doc Comment
 *
 * @category Class
 * @description Represents SmartArt shape resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartArt extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartArt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'layout' => 'string',
        'quickStyle' => 'string',
        'colorStyle' => 'string',
        'nodes' => '\Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[]',
        'isReversed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'layout' => null,
        'quickStyle' => null,
        'colorStyle' => null,
        'nodes' => null,
        'isReversed' => null
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
        'layout' => 'Layout',
        'quickStyle' => 'QuickStyle',
        'colorStyle' => 'ColorStyle',
        'nodes' => 'Nodes',
        'isReversed' => 'IsReversed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layout' => 'setLayout',
        'quickStyle' => 'setQuickStyle',
        'colorStyle' => 'setColorStyle',
        'nodes' => 'setNodes',
        'isReversed' => 'setIsReversed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layout' => 'getLayout',
        'quickStyle' => 'getQuickStyle',
        'colorStyle' => 'getColorStyle',
        'nodes' => 'getNodes',
        'isReversed' => 'getIsReversed'
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

    const LAYOUT_ACCENT_PROCESS = 'AccentProcess';
    const LAYOUT_ACCENTED_PICTURE = 'AccentedPicture';
    const LAYOUT_ALTERNATING_FLOW = 'AlternatingFlow';
    const LAYOUT_ALTERNATING_HEXAGONS = 'AlternatingHexagons';
    const LAYOUT_ALTERNATING_PICTURE_BLOCKS = 'AlternatingPictureBlocks';
    const LAYOUT_ALTERNATING_PICTURE_CIRCLES = 'AlternatingPictureCircles';
    const LAYOUT_ARROW_RIBBON = 'ArrowRibbon';
    const LAYOUT_ASCENDING_PICTURE_ACCENT_PROCESS = 'AscendingPictureAccentProcess';
    const LAYOUT_BALANCE = 'Balance';
    const LAYOUT_BASIC_BENDING_PROCESS = 'BasicBendingProcess';
    const LAYOUT_BASIC_BLOCK_LIST = 'BasicBlockList';
    const LAYOUT_BASIC_CHEVRON_PROCESS = 'BasicChevronProcess';
    const LAYOUT_BASIC_CYCLE = 'BasicCycle';
    const LAYOUT_BASIC_MATRIX = 'BasicMatrix';
    const LAYOUT_BASIC_PIE = 'BasicPie';
    const LAYOUT_BASIC_PROCESS = 'BasicProcess';
    const LAYOUT_BASIC_PYRAMID = 'BasicPyramid';
    const LAYOUT_BASIC_RADIAL = 'BasicRadial';
    const LAYOUT_BASIC_TARGET = 'BasicTarget';
    const LAYOUT_BASIC_TIMELINE = 'BasicTimeline';
    const LAYOUT_BASIC_VENN = 'BasicVenn';
    const LAYOUT_BENDING_PICTURE_ACCENT_LIST = 'BendingPictureAccentList';
    const LAYOUT_BENDING_PICTURE_BLOCKS = 'BendingPictureBlocks';
    const LAYOUT_BENDING_PICTURE_CAPTION = 'BendingPictureCaption';
    const LAYOUT_BENDING_PICTURE_CAPTION_LIST = 'BendingPictureCaptionList';
    const LAYOUT_BENDING_PICTURE_SEMI_TRANSPARENT_TEXT = 'BendingPictureSemiTransparentText';
    const LAYOUT_BLOCK_CYCLE = 'BlockCycle';
    const LAYOUT_BUBBLE_PICTURE_LIST = 'BubblePictureList';
    const LAYOUT_CAPTIONED_PICTURES = 'CaptionedPictures';
    const LAYOUT_CHEVRON_LIST = 'ChevronList';
    const LAYOUT_CIRCLE_ACCENT_TIMELINE = 'CircleAccentTimeline';
    const LAYOUT_CIRCLE_ARROW_PROCESS = 'CircleArrowProcess';
    const LAYOUT_CIRCLE_PICTURE_HIERARCHY = 'CirclePictureHierarchy';
    const LAYOUT_CIRCLE_RELATIONSHIP = 'CircleRelationship';
    const LAYOUT_CIRCULAR_BENDING_PROCESS = 'CircularBendingProcess';
    const LAYOUT_CIRCULAR_PICTURE_CALLOUT = 'CircularPictureCallout';
    const LAYOUT_CLOSED_CHEVRON_PROCESS = 'ClosedChevronProcess';
    const LAYOUT_CONTINUOUS_ARROW_PROCESS = 'ContinuousArrowProcess';
    const LAYOUT_CONTINUOUS_BLOCK_PROCESS = 'ContinuousBlockProcess';
    const LAYOUT_CONTINUOUS_CYCLE = 'ContinuousCycle';
    const LAYOUT_CONTINUOUS_PICTURE_LIST = 'ContinuousPictureList';
    const LAYOUT_CONVERGING_ARROWS = 'ConvergingArrows';
    const LAYOUT_CONVERGING_RADIAL = 'ConvergingRadial';
    const LAYOUT_COUNTERBALANCE_ARROWS = 'CounterbalanceArrows';
    const LAYOUT_CYCLE_MATRIX = 'CycleMatrix';
    const LAYOUT_DESCENDING_BLOCK_LIST = 'DescendingBlockList';
    const LAYOUT_DESCENDING_PROCESS = 'DescendingProcess';
    const LAYOUT_DETAILED_PROCESS = 'DetailedProcess';
    const LAYOUT_DIVERGING_ARROWS = 'DivergingArrows';
    const LAYOUT_DIVERGING_RADIAL = 'DivergingRadial';
    const LAYOUT_EQUATION = 'Equation';
    const LAYOUT_FRAMED_TEXT_PICTURE = 'FramedTextPicture';
    const LAYOUT_FUNNEL = 'Funnel';
    const LAYOUT_GEAR = 'Gear';
    const LAYOUT_GRID_MATRIX = 'GridMatrix';
    const LAYOUT_GROUPED_LIST = 'GroupedList';
    const LAYOUT_HALF_CIRCLE_ORGANIZATION_CHART = 'HalfCircleOrganizationChart';
    const LAYOUT_HEXAGON_CLUSTER = 'HexagonCluster';
    const LAYOUT_HIERARCHY = 'Hierarchy';
    const LAYOUT_HIERARCHY_LIST = 'HierarchyList';
    const LAYOUT_HORIZONTAL_BULLET_LIST = 'HorizontalBulletList';
    const LAYOUT_HORIZONTAL_HIERARCHY = 'HorizontalHierarchy';
    const LAYOUT_HORIZONTAL_LABELED_HIERARCHY = 'HorizontalLabeledHierarchy';
    const LAYOUT_HORIZONTAL_MULTI_LEVEL_HIERARCHY = 'HorizontalMultiLevelHierarchy';
    const LAYOUT_HORIZONTAL_ORGANIZATION_CHART = 'HorizontalOrganizationChart';
    const LAYOUT_HORIZONTAL_PICTURE_LIST = 'HorizontalPictureList';
    const LAYOUT_INCREASING_ARROWS_PROCESS = 'IncreasingArrowsProcess';
    const LAYOUT_INCREASING_CIRCLE_PROCESS = 'IncreasingCircleProcess';
    const LAYOUT_INVERTED_PYRAMID = 'InvertedPyramid';
    const LAYOUT_LABELED_HIERARCHY = 'LabeledHierarchy';
    const LAYOUT_LINEAR_VENN = 'LinearVenn';
    const LAYOUT_LINED_LIST = 'LinedList';
    const LAYOUT_MULTIDIRECTIONAL_CYCLE = 'MultidirectionalCycle';
    const LAYOUT_NAMEAND_TITLE_ORGANIZATION_CHART = 'NameandTitleOrganizationChart';
    const LAYOUT_NESTED_TARGET = 'NestedTarget';
    const LAYOUT_NONDIRECTIONAL_CYCLE = 'NondirectionalCycle';
    const LAYOUT_OPPOSING_ARROWS = 'OpposingArrows';
    const LAYOUT_OPPOSING_IDEAS = 'OpposingIdeas';
    const LAYOUT_ORGANIZATION_CHART = 'OrganizationChart';
    const LAYOUT_PHASED_PROCESS = 'PhasedProcess';
    const LAYOUT_PICTURE_ACCENT_BLOCKS = 'PictureAccentBlocks';
    const LAYOUT_PICTURE_ACCENT_LIST = 'PictureAccentList';
    const LAYOUT_PICTURE_ACCENT_PROCESS = 'PictureAccentProcess';
    const LAYOUT_PICTURE_CAPTION_LIST = 'PictureCaptionList';
    const LAYOUT_PICTURE_GRID = 'PictureGrid';
    const LAYOUT_PICTURE_LINEUP = 'PictureLineup';
    const LAYOUT_PICTURE_STRIPS = 'PictureStrips';
    const LAYOUT_PIE_PROCESS = 'PieProcess';
    const LAYOUT_PLUSAND_MINUS = 'PlusandMinus';
    const LAYOUT_PROCESS_ARROWS = 'ProcessArrows';
    const LAYOUT_PROCESS_LIST = 'ProcessList';
    const LAYOUT_PYRAMID_LIST = 'PyramidList';
    const LAYOUT_RADIAL_CLUSTER = 'RadialCluster';
    const LAYOUT_RADIAL_CYCLE = 'RadialCycle';
    const LAYOUT_RADIAL_LIST = 'RadialList';
    const LAYOUT_RADIAL_VENN = 'RadialVenn';
    const LAYOUT_RANDOM_TO_RESULT_PROCESS = 'RandomToResultProcess';
    const LAYOUT_REPEATING_BENDING_PROCESS = 'RepeatingBendingProcess';
    const LAYOUT_REVERSE_LIST = 'ReverseList';
    const LAYOUT_SEGMENTED_CYCLE = 'SegmentedCycle';
    const LAYOUT_SEGMENTED_PROCESS = 'SegmentedProcess';
    const LAYOUT_SEGMENTED_PYRAMID = 'SegmentedPyramid';
    const LAYOUT_SNAPSHOT_PICTURE_LIST = 'SnapshotPictureList';
    const LAYOUT_SPIRAL_PICTURE = 'SpiralPicture';
    const LAYOUT_SQUARE_ACCENT_LIST = 'SquareAccentList';
    const LAYOUT_STACKED_LIST = 'StackedList';
    const LAYOUT_STACKED_VENN = 'StackedVenn';
    const LAYOUT_STAGGERED_PROCESS = 'StaggeredProcess';
    const LAYOUT_STEP_DOWN_PROCESS = 'StepDownProcess';
    const LAYOUT_STEP_UP_PROCESS = 'StepUpProcess';
    const LAYOUT_SUB_STEP_PROCESS = 'SubStepProcess';
    const LAYOUT_TABLE_HIERARCHY = 'TableHierarchy';
    const LAYOUT_TABLE_LIST = 'TableList';
    const LAYOUT_TARGET_LIST = 'TargetList';
    const LAYOUT_TEXT_CYCLE = 'TextCycle';
    const LAYOUT_TITLE_PICTURE_LINEUP = 'TitlePictureLineup';
    const LAYOUT_TITLED_MATRIX = 'TitledMatrix';
    const LAYOUT_TITLED_PICTURE_ACCENT_LIST = 'TitledPictureAccentList';
    const LAYOUT_TITLED_PICTURE_BLOCKS = 'TitledPictureBlocks';
    const LAYOUT_TRAPEZOID_LIST = 'TrapezoidList';
    const LAYOUT_UPWARD_ARROW = 'UpwardArrow';
    const LAYOUT_VERTICAL_ACCENT_LIST = 'VerticalAccentList';
    const LAYOUT_VERTICAL_ARROW_LIST = 'VerticalArrowList';
    const LAYOUT_VERTICAL_BENDING_PROCESS = 'VerticalBendingProcess';
    const LAYOUT_VERTICAL_BLOCK_LIST = 'VerticalBlockList';
    const LAYOUT_VERTICAL_BOX_LIST = 'VerticalBoxList';
    const LAYOUT_VERTICAL_BULLET_LIST = 'VerticalBulletList';
    const LAYOUT_VERTICAL_CHEVRON_LIST = 'VerticalChevronList';
    const LAYOUT_VERTICAL_CIRCLE_LIST = 'VerticalCircleList';
    const LAYOUT_VERTICAL_CURVED_LIST = 'VerticalCurvedList';
    const LAYOUT_VERTICAL_EQUATION = 'VerticalEquation';
    const LAYOUT_VERTICAL_PICTURE_ACCENT_LIST = 'VerticalPictureAccentList';
    const LAYOUT_VERTICAL_PICTURE_LIST = 'VerticalPictureList';
    const LAYOUT_VERTICAL_PROCESS = 'VerticalProcess';
    const LAYOUT_CUSTOM = 'Custom';
    const LAYOUT_PICTURE_ORGANIZATION_CHART = 'PictureOrganizationChart';
    const QUICK_STYLE_SIMPLE_FILL = 'SimpleFill';
    const QUICK_STYLE_WHITE_OUTLINE = 'WhiteOutline';
    const QUICK_STYLE_SUBTLE_EFFECT = 'SubtleEffect';
    const QUICK_STYLE_MODERATE_EFFECT = 'ModerateEffect';
    const QUICK_STYLE_INTENCE_EFFECT = 'IntenceEffect';
    const QUICK_STYLE_POLISHED = 'Polished';
    const QUICK_STYLE_INSET = 'Inset';
    const QUICK_STYLE_CARTOON = 'Cartoon';
    const QUICK_STYLE_POWDER = 'Powder';
    const QUICK_STYLE_BRICK_SCENE = 'BrickScene';
    const QUICK_STYLE_FLAT_SCENE = 'FlatScene';
    const QUICK_STYLE_METALLIC_SCENE = 'MetallicScene';
    const QUICK_STYLE_SUNSET_SCENE = 'SunsetScene';
    const QUICK_STYLE_BIRDS_EYE_SCENE = 'BirdsEyeScene';
    const COLOR_STYLE_DARK1_OUTLINE = 'Dark1Outline';
    const COLOR_STYLE_DARK2_OUTLINE = 'Dark2Outline';
    const COLOR_STYLE_DARK_FILL = 'DarkFill';
    const COLOR_STYLE_COLORFUL_ACCENT_COLORS = 'ColorfulAccentColors';
    const COLOR_STYLE_COLORFUL_ACCENT_COLORS2TO3 = 'ColorfulAccentColors2to3';
    const COLOR_STYLE_COLORFUL_ACCENT_COLORS3TO4 = 'ColorfulAccentColors3to4';
    const COLOR_STYLE_COLORFUL_ACCENT_COLORS4TO5 = 'ColorfulAccentColors4to5';
    const COLOR_STYLE_COLORFUL_ACCENT_COLORS5TO6 = 'ColorfulAccentColors5to6';
    const COLOR_STYLE_COLORED_OUTLINE_ACCENT1 = 'ColoredOutlineAccent1';
    const COLOR_STYLE_COLORED_FILL_ACCENT1 = 'ColoredFillAccent1';
    const COLOR_STYLE_GRADIENT_RANGE_ACCENT1 = 'GradientRangeAccent1';
    const COLOR_STYLE_GRADIENT_LOOP_ACCENT1 = 'GradientLoopAccent1';
    const COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT1 = 'TransparentGradientRangeAccent1';
    const COLOR_STYLE_COLORED_OUTLINE_ACCENT2 = 'ColoredOutlineAccent2';
    const COLOR_STYLE_COLORED_FILL_ACCENT2 = 'ColoredFillAccent2';
    const COLOR_STYLE_GRADIENT_RANGE_ACCENT2 = 'GradientRangeAccent2';
    const COLOR_STYLE_GRADIENT_LOOP_ACCENT2 = 'GradientLoopAccent2';
    const COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT2 = 'TransparentGradientRangeAccent2';
    const COLOR_STYLE_COLORED_OUTLINE_ACCENT3 = 'ColoredOutlineAccent3';
    const COLOR_STYLE_COLORED_FILL_ACCENT3 = 'ColoredFillAccent3';
    const COLOR_STYLE_GRADIENT_RANGE_ACCENT3 = 'GradientRangeAccent3';
    const COLOR_STYLE_GRADIENT_LOOP_ACCENT3 = 'GradientLoopAccent3';
    const COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT3 = 'TransparentGradientRangeAccent3';
    const COLOR_STYLE_COLORED_OUTLINE_ACCENT4 = 'ColoredOutlineAccent4';
    const COLOR_STYLE_COLORED_FILL_ACCENT4 = 'ColoredFillAccent4';
    const COLOR_STYLE_GRADIENT_RANGE_ACCENT4 = 'GradientRangeAccent4';
    const COLOR_STYLE_GRADIENT_LOOP_ACCENT4 = 'GradientLoopAccent4';
    const COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT4 = 'TransparentGradientRangeAccent4';
    const COLOR_STYLE_COLORED_OUTLINE_ACCENT5 = 'ColoredOutlineAccent5';
    const COLOR_STYLE_COLORED_FILL_ACCENT5 = 'ColoredFillAccent5';
    const COLOR_STYLE_GRADIENT_RANGE_ACCENT5 = 'GradientRangeAccent5';
    const COLOR_STYLE_GRADIENT_LOOP_ACCENT5 = 'GradientLoopAccent5';
    const COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT5 = 'TransparentGradientRangeAccent5';
    const COLOR_STYLE_COLORED_OUTLINE_ACCENT6 = 'ColoredOutlineAccent6';
    const COLOR_STYLE_COLORED_FILL_ACCENT6 = 'ColoredFillAccent6';
    const COLOR_STYLE_GRADIENT_RANGE_ACCENT6 = 'GradientRangeAccent6';
    const COLOR_STYLE_GRADIENT_LOOP_ACCENT6 = 'GradientLoopAccent6';
    const COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT6 = 'TransparentGradientRangeAccent6';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayoutAllowableValues()
    {
        return [
            self::LAYOUT_ACCENT_PROCESS,
            self::LAYOUT_ACCENTED_PICTURE,
            self::LAYOUT_ALTERNATING_FLOW,
            self::LAYOUT_ALTERNATING_HEXAGONS,
            self::LAYOUT_ALTERNATING_PICTURE_BLOCKS,
            self::LAYOUT_ALTERNATING_PICTURE_CIRCLES,
            self::LAYOUT_ARROW_RIBBON,
            self::LAYOUT_ASCENDING_PICTURE_ACCENT_PROCESS,
            self::LAYOUT_BALANCE,
            self::LAYOUT_BASIC_BENDING_PROCESS,
            self::LAYOUT_BASIC_BLOCK_LIST,
            self::LAYOUT_BASIC_CHEVRON_PROCESS,
            self::LAYOUT_BASIC_CYCLE,
            self::LAYOUT_BASIC_MATRIX,
            self::LAYOUT_BASIC_PIE,
            self::LAYOUT_BASIC_PROCESS,
            self::LAYOUT_BASIC_PYRAMID,
            self::LAYOUT_BASIC_RADIAL,
            self::LAYOUT_BASIC_TARGET,
            self::LAYOUT_BASIC_TIMELINE,
            self::LAYOUT_BASIC_VENN,
            self::LAYOUT_BENDING_PICTURE_ACCENT_LIST,
            self::LAYOUT_BENDING_PICTURE_BLOCKS,
            self::LAYOUT_BENDING_PICTURE_CAPTION,
            self::LAYOUT_BENDING_PICTURE_CAPTION_LIST,
            self::LAYOUT_BENDING_PICTURE_SEMI_TRANSPARENT_TEXT,
            self::LAYOUT_BLOCK_CYCLE,
            self::LAYOUT_BUBBLE_PICTURE_LIST,
            self::LAYOUT_CAPTIONED_PICTURES,
            self::LAYOUT_CHEVRON_LIST,
            self::LAYOUT_CIRCLE_ACCENT_TIMELINE,
            self::LAYOUT_CIRCLE_ARROW_PROCESS,
            self::LAYOUT_CIRCLE_PICTURE_HIERARCHY,
            self::LAYOUT_CIRCLE_RELATIONSHIP,
            self::LAYOUT_CIRCULAR_BENDING_PROCESS,
            self::LAYOUT_CIRCULAR_PICTURE_CALLOUT,
            self::LAYOUT_CLOSED_CHEVRON_PROCESS,
            self::LAYOUT_CONTINUOUS_ARROW_PROCESS,
            self::LAYOUT_CONTINUOUS_BLOCK_PROCESS,
            self::LAYOUT_CONTINUOUS_CYCLE,
            self::LAYOUT_CONTINUOUS_PICTURE_LIST,
            self::LAYOUT_CONVERGING_ARROWS,
            self::LAYOUT_CONVERGING_RADIAL,
            self::LAYOUT_COUNTERBALANCE_ARROWS,
            self::LAYOUT_CYCLE_MATRIX,
            self::LAYOUT_DESCENDING_BLOCK_LIST,
            self::LAYOUT_DESCENDING_PROCESS,
            self::LAYOUT_DETAILED_PROCESS,
            self::LAYOUT_DIVERGING_ARROWS,
            self::LAYOUT_DIVERGING_RADIAL,
            self::LAYOUT_EQUATION,
            self::LAYOUT_FRAMED_TEXT_PICTURE,
            self::LAYOUT_FUNNEL,
            self::LAYOUT_GEAR,
            self::LAYOUT_GRID_MATRIX,
            self::LAYOUT_GROUPED_LIST,
            self::LAYOUT_HALF_CIRCLE_ORGANIZATION_CHART,
            self::LAYOUT_HEXAGON_CLUSTER,
            self::LAYOUT_HIERARCHY,
            self::LAYOUT_HIERARCHY_LIST,
            self::LAYOUT_HORIZONTAL_BULLET_LIST,
            self::LAYOUT_HORIZONTAL_HIERARCHY,
            self::LAYOUT_HORIZONTAL_LABELED_HIERARCHY,
            self::LAYOUT_HORIZONTAL_MULTI_LEVEL_HIERARCHY,
            self::LAYOUT_HORIZONTAL_ORGANIZATION_CHART,
            self::LAYOUT_HORIZONTAL_PICTURE_LIST,
            self::LAYOUT_INCREASING_ARROWS_PROCESS,
            self::LAYOUT_INCREASING_CIRCLE_PROCESS,
            self::LAYOUT_INVERTED_PYRAMID,
            self::LAYOUT_LABELED_HIERARCHY,
            self::LAYOUT_LINEAR_VENN,
            self::LAYOUT_LINED_LIST,
            self::LAYOUT_MULTIDIRECTIONAL_CYCLE,
            self::LAYOUT_NAMEAND_TITLE_ORGANIZATION_CHART,
            self::LAYOUT_NESTED_TARGET,
            self::LAYOUT_NONDIRECTIONAL_CYCLE,
            self::LAYOUT_OPPOSING_ARROWS,
            self::LAYOUT_OPPOSING_IDEAS,
            self::LAYOUT_ORGANIZATION_CHART,
            self::LAYOUT_PHASED_PROCESS,
            self::LAYOUT_PICTURE_ACCENT_BLOCKS,
            self::LAYOUT_PICTURE_ACCENT_LIST,
            self::LAYOUT_PICTURE_ACCENT_PROCESS,
            self::LAYOUT_PICTURE_CAPTION_LIST,
            self::LAYOUT_PICTURE_GRID,
            self::LAYOUT_PICTURE_LINEUP,
            self::LAYOUT_PICTURE_STRIPS,
            self::LAYOUT_PIE_PROCESS,
            self::LAYOUT_PLUSAND_MINUS,
            self::LAYOUT_PROCESS_ARROWS,
            self::LAYOUT_PROCESS_LIST,
            self::LAYOUT_PYRAMID_LIST,
            self::LAYOUT_RADIAL_CLUSTER,
            self::LAYOUT_RADIAL_CYCLE,
            self::LAYOUT_RADIAL_LIST,
            self::LAYOUT_RADIAL_VENN,
            self::LAYOUT_RANDOM_TO_RESULT_PROCESS,
            self::LAYOUT_REPEATING_BENDING_PROCESS,
            self::LAYOUT_REVERSE_LIST,
            self::LAYOUT_SEGMENTED_CYCLE,
            self::LAYOUT_SEGMENTED_PROCESS,
            self::LAYOUT_SEGMENTED_PYRAMID,
            self::LAYOUT_SNAPSHOT_PICTURE_LIST,
            self::LAYOUT_SPIRAL_PICTURE,
            self::LAYOUT_SQUARE_ACCENT_LIST,
            self::LAYOUT_STACKED_LIST,
            self::LAYOUT_STACKED_VENN,
            self::LAYOUT_STAGGERED_PROCESS,
            self::LAYOUT_STEP_DOWN_PROCESS,
            self::LAYOUT_STEP_UP_PROCESS,
            self::LAYOUT_SUB_STEP_PROCESS,
            self::LAYOUT_TABLE_HIERARCHY,
            self::LAYOUT_TABLE_LIST,
            self::LAYOUT_TARGET_LIST,
            self::LAYOUT_TEXT_CYCLE,
            self::LAYOUT_TITLE_PICTURE_LINEUP,
            self::LAYOUT_TITLED_MATRIX,
            self::LAYOUT_TITLED_PICTURE_ACCENT_LIST,
            self::LAYOUT_TITLED_PICTURE_BLOCKS,
            self::LAYOUT_TRAPEZOID_LIST,
            self::LAYOUT_UPWARD_ARROW,
            self::LAYOUT_VERTICAL_ACCENT_LIST,
            self::LAYOUT_VERTICAL_ARROW_LIST,
            self::LAYOUT_VERTICAL_BENDING_PROCESS,
            self::LAYOUT_VERTICAL_BLOCK_LIST,
            self::LAYOUT_VERTICAL_BOX_LIST,
            self::LAYOUT_VERTICAL_BULLET_LIST,
            self::LAYOUT_VERTICAL_CHEVRON_LIST,
            self::LAYOUT_VERTICAL_CIRCLE_LIST,
            self::LAYOUT_VERTICAL_CURVED_LIST,
            self::LAYOUT_VERTICAL_EQUATION,
            self::LAYOUT_VERTICAL_PICTURE_ACCENT_LIST,
            self::LAYOUT_VERTICAL_PICTURE_LIST,
            self::LAYOUT_VERTICAL_PROCESS,
            self::LAYOUT_CUSTOM,
            self::LAYOUT_PICTURE_ORGANIZATION_CHART,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQuickStyleAllowableValues()
    {
        return [
            self::QUICK_STYLE_SIMPLE_FILL,
            self::QUICK_STYLE_WHITE_OUTLINE,
            self::QUICK_STYLE_SUBTLE_EFFECT,
            self::QUICK_STYLE_MODERATE_EFFECT,
            self::QUICK_STYLE_INTENCE_EFFECT,
            self::QUICK_STYLE_POLISHED,
            self::QUICK_STYLE_INSET,
            self::QUICK_STYLE_CARTOON,
            self::QUICK_STYLE_POWDER,
            self::QUICK_STYLE_BRICK_SCENE,
            self::QUICK_STYLE_FLAT_SCENE,
            self::QUICK_STYLE_METALLIC_SCENE,
            self::QUICK_STYLE_SUNSET_SCENE,
            self::QUICK_STYLE_BIRDS_EYE_SCENE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorStyleAllowableValues()
    {
        return [
            self::COLOR_STYLE_DARK1_OUTLINE,
            self::COLOR_STYLE_DARK2_OUTLINE,
            self::COLOR_STYLE_DARK_FILL,
            self::COLOR_STYLE_COLORFUL_ACCENT_COLORS,
            self::COLOR_STYLE_COLORFUL_ACCENT_COLORS2TO3,
            self::COLOR_STYLE_COLORFUL_ACCENT_COLORS3TO4,
            self::COLOR_STYLE_COLORFUL_ACCENT_COLORS4TO5,
            self::COLOR_STYLE_COLORFUL_ACCENT_COLORS5TO6,
            self::COLOR_STYLE_COLORED_OUTLINE_ACCENT1,
            self::COLOR_STYLE_COLORED_FILL_ACCENT1,
            self::COLOR_STYLE_GRADIENT_RANGE_ACCENT1,
            self::COLOR_STYLE_GRADIENT_LOOP_ACCENT1,
            self::COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT1,
            self::COLOR_STYLE_COLORED_OUTLINE_ACCENT2,
            self::COLOR_STYLE_COLORED_FILL_ACCENT2,
            self::COLOR_STYLE_GRADIENT_RANGE_ACCENT2,
            self::COLOR_STYLE_GRADIENT_LOOP_ACCENT2,
            self::COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT2,
            self::COLOR_STYLE_COLORED_OUTLINE_ACCENT3,
            self::COLOR_STYLE_COLORED_FILL_ACCENT3,
            self::COLOR_STYLE_GRADIENT_RANGE_ACCENT3,
            self::COLOR_STYLE_GRADIENT_LOOP_ACCENT3,
            self::COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT3,
            self::COLOR_STYLE_COLORED_OUTLINE_ACCENT4,
            self::COLOR_STYLE_COLORED_FILL_ACCENT4,
            self::COLOR_STYLE_GRADIENT_RANGE_ACCENT4,
            self::COLOR_STYLE_GRADIENT_LOOP_ACCENT4,
            self::COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT4,
            self::COLOR_STYLE_COLORED_OUTLINE_ACCENT5,
            self::COLOR_STYLE_COLORED_FILL_ACCENT5,
            self::COLOR_STYLE_GRADIENT_RANGE_ACCENT5,
            self::COLOR_STYLE_GRADIENT_LOOP_ACCENT5,
            self::COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT5,
            self::COLOR_STYLE_COLORED_OUTLINE_ACCENT6,
            self::COLOR_STYLE_COLORED_FILL_ACCENT6,
            self::COLOR_STYLE_GRADIENT_RANGE_ACCENT6,
            self::COLOR_STYLE_GRADIENT_LOOP_ACCENT6,
            self::COLOR_STYLE_TRANSPARENT_GRADIENT_RANGE_ACCENT6,
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

        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['quickStyle'] = isset($data['quickStyle']) ? $data['quickStyle'] : null;
        $this->container['colorStyle'] = isset($data['colorStyle']) ? $data['colorStyle'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['isReversed'] = isset($data['isReversed']) ? $data['isReversed'] : null;
        $this->container['type'] = 'SmartArt';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['layout'] === null) {
            $invalidProperties[] = "'layout' can't be null";
        }
        $allowedValues = $this->getLayoutAllowableValues();
        if (!in_array($this->container['layout'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'layout', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quickStyle'] === null) {
            $invalidProperties[] = "'quickStyle' can't be null";
        }
        $allowedValues = $this->getQuickStyleAllowableValues();
        if (!in_array($this->container['quickStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'quickStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['colorStyle'] === null) {
            $invalidProperties[] = "'colorStyle' can't be null";
        }
        $allowedValues = $this->getColorStyleAllowableValues();
        if (!in_array($this->container['colorStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'colorStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['isReversed'] === null) {
            $invalidProperties[] = "'isReversed' can't be null";
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

        if ($this->container['layout'] === null) {
            return false;
        }
        $allowedValues = $this->getLayoutAllowableValues();
        if (!in_array($this->container['layout'], $allowedValues)) {
            return false;
        }
        if ($this->container['quickStyle'] === null) {
            return false;
        }
        $allowedValues = $this->getQuickStyleAllowableValues();
        if (!in_array($this->container['quickStyle'], $allowedValues)) {
            return false;
        }
        if ($this->container['colorStyle'] === null) {
            return false;
        }
        $allowedValues = $this->getColorStyleAllowableValues();
        if (!in_array($this->container['colorStyle'], $allowedValues)) {
            return false;
        }
        if ($this->container['isReversed'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string $layout Layout type.
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $allowedValues = $this->getLayoutAllowableValues();


        if (is_numeric($layout)) {
            if ($layout >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'layout', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $layout = $allowedValues[$layout];
            }
        } else {
            if (!in_array($layout, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'layout', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets quickStyle
     *
     * @return string
     */
    public function getQuickStyle()
    {
        return $this->container['quickStyle'];
    }

    /**
     * Sets quickStyle
     *
     * @param string $quickStyle Quick style.
     *
     * @return $this
     */
    public function setQuickStyle($quickStyle)
    {
        $allowedValues = $this->getQuickStyleAllowableValues();


        if (is_numeric($quickStyle)) {
            if ($quickStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'quickStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $quickStyle = $allowedValues[$quickStyle];
            }
        } else {
            if (!in_array($quickStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'quickStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['quickStyle'] = $quickStyle;

        return $this;
    }

    /**
     * Gets colorStyle
     *
     * @return string
     */
    public function getColorStyle()
    {
        return $this->container['colorStyle'];
    }

    /**
     * Sets colorStyle
     *
     * @param string $colorStyle Color style.
     *
     * @return $this
     */
    public function setColorStyle($colorStyle)
    {
        $allowedValues = $this->getColorStyleAllowableValues();


        if (is_numeric($colorStyle)) {
            if ($colorStyle >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'colorStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $colorStyle = $allowedValues[$colorStyle];
            }
        } else {
            if (!in_array($colorStyle, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'colorStyle', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['colorStyle'] = $colorStyle;

        return $this;
    }

    /**
     * Gets nodes
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[]
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\SmartArtNode[] $nodes Collection of nodes in SmartArt object.
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets isReversed
     *
     * @return bool
     */
    public function getIsReversed()
    {
        return $this->container['isReversed'];
    }

    /**
     * Sets isReversed
     *
     * @param bool $isReversed The state of the SmartArt diagram with regard to (left-to-right) LTR or (right-to-left) RTL, if the diagram supports reversal.
     *
     * @return $this
     */
    public function setIsReversed($isReversed)
    {
        $this->container['isReversed'] = $isReversed;

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


