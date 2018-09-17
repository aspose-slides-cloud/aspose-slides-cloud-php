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
 * ChartType Class Doc Comment
 *
 * @category Class
 * @description Represents a type of chart.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChartType
{
    /**
     * Possible values of this enum
     */
    const CLUSTERED_COLUMN = 'ClusteredColumn';
    const STACKED_COLUMN = 'StackedColumn';
    const PERCENTS_STACKED_COLUMN = 'PercentsStackedColumn';
    const CLUSTERED_COLUMN3_D = 'ClusteredColumn3D';
    const STACKED_COLUMN3_D = 'StackedColumn3D';
    const PERCENTS_STACKED_COLUMN3_D = 'PercentsStackedColumn3D';
    const COLUMN3_D = 'Column3D';
    const CLUSTERED_CYLINDER = 'ClusteredCylinder';
    const STACKED_CYLINDER = 'StackedCylinder';
    const PERCENTS_STACKED_CYLINDER = 'PercentsStackedCylinder';
    const CYLINDER3_D = 'Cylinder3D';
    const CLUSTERED_CONE = 'ClusteredCone';
    const STACKED_CONE = 'StackedCone';
    const PERCENTS_STACKED_CONE = 'PercentsStackedCone';
    const CONE3_D = 'Cone3D';
    const CLUSTERED_PYRAMID = 'ClusteredPyramid';
    const STACKED_PYRAMID = 'StackedPyramid';
    const PERCENTS_STACKED_PYRAMID = 'PercentsStackedPyramid';
    const PYRAMID3_D = 'Pyramid3D';
    const LINE = 'Line';
    const STACKED_LINE = 'StackedLine';
    const PERCENTS_STACKED_LINE = 'PercentsStackedLine';
    const LINE_WITH_MARKERS = 'LineWithMarkers';
    const STACKED_LINE_WITH_MARKERS = 'StackedLineWithMarkers';
    const PERCENTS_STACKED_LINE_WITH_MARKERS = 'PercentsStackedLineWithMarkers';
    const LINE3_D = 'Line3D';
    const PIE = 'Pie';
    const PIE3_D = 'Pie3D';
    const PIE_OF_PIE = 'PieOfPie';
    const EXPLODED_PIE = 'ExplodedPie';
    const EXPLODED_PIE3_D = 'ExplodedPie3D';
    const BAR_OF_PIE = 'BarOfPie';
    const PERCENTS_STACKED_BAR = 'PercentsStackedBar';
    const CLUSTERED_BAR3_D = 'ClusteredBar3D';
    const CLUSTERED_BAR = 'ClusteredBar';
    const STACKED_BAR = 'StackedBar';
    const STACKED_BAR3_D = 'StackedBar3D';
    const PERCENTS_STACKED_BAR3_D = 'PercentsStackedBar3D';
    const CLUSTERED_HORIZONTAL_CYLINDER = 'ClusteredHorizontalCylinder';
    const STACKED_HORIZONTAL_CYLINDER = 'StackedHorizontalCylinder';
    const PERCENTS_STACKED_HORIZONTAL_CYLINDER = 'PercentsStackedHorizontalCylinder';
    const CLUSTERED_HORIZONTAL_CONE = 'ClusteredHorizontalCone';
    const STACKED_HORIZONTAL_CONE = 'StackedHorizontalCone';
    const PERCENTS_STACKED_HORIZONTAL_CONE = 'PercentsStackedHorizontalCone';
    const CLUSTERED_HORIZONTAL_PYRAMID = 'ClusteredHorizontalPyramid';
    const STACKED_HORIZONTAL_PYRAMID = 'StackedHorizontalPyramid';
    const PERCENTS_STACKED_HORIZONTAL_PYRAMID = 'PercentsStackedHorizontalPyramid';
    const AREA = 'Area';
    const STACKED_AREA = 'StackedArea';
    const PERCENTS_STACKED_AREA = 'PercentsStackedArea';
    const AREA3_D = 'Area3D';
    const STACKED_AREA3_D = 'StackedArea3D';
    const PERCENTS_STACKED_AREA3_D = 'PercentsStackedArea3D';
    const SCATTER_WITH_MARKERS = 'ScatterWithMarkers';
    const SCATTER_WITH_SMOOTH_LINES_AND_MARKERS = 'ScatterWithSmoothLinesAndMarkers';
    const SCATTER_WITH_SMOOTH_LINES = 'ScatterWithSmoothLines';
    const SCATTER_WITH_STRAIGHT_LINES_AND_MARKERS = 'ScatterWithStraightLinesAndMarkers';
    const SCATTER_WITH_STRAIGHT_LINES = 'ScatterWithStraightLines';
    const HIGH_LOW_CLOSE = 'HighLowClose';
    const OPEN_HIGH_LOW_CLOSE = 'OpenHighLowClose';
    const VOLUME_HIGH_LOW_CLOSE = 'VolumeHighLowClose';
    const VOLUME_OPEN_HIGH_LOW_CLOSE = 'VolumeOpenHighLowClose';
    const SURFACE3_D = 'Surface3D';
    const WIREFRAME_SURFACE3_D = 'WireframeSurface3D';
    const CONTOUR = 'Contour';
    const WIREFRAME_CONTOUR = 'WireframeContour';
    const DOUGHNUT = 'Doughnut';
    const EXPLODED_DOUGHNUT = 'ExplodedDoughnut';
    const BUBBLE = 'Bubble';
    const BUBBLE_WITH3_D = 'BubbleWith3D';
    const RADAR = 'Radar';
    const RADAR_WITH_MARKERS = 'RadarWithMarkers';
    const FILLED_RADAR = 'FilledRadar';
    const SERIES_OF_MIXED_TYPES = 'SeriesOfMixedTypes';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLUSTERED_COLUMN,
            self::STACKED_COLUMN,
            self::PERCENTS_STACKED_COLUMN,
            self::CLUSTERED_COLUMN3_D,
            self::STACKED_COLUMN3_D,
            self::PERCENTS_STACKED_COLUMN3_D,
            self::COLUMN3_D,
            self::CLUSTERED_CYLINDER,
            self::STACKED_CYLINDER,
            self::PERCENTS_STACKED_CYLINDER,
            self::CYLINDER3_D,
            self::CLUSTERED_CONE,
            self::STACKED_CONE,
            self::PERCENTS_STACKED_CONE,
            self::CONE3_D,
            self::CLUSTERED_PYRAMID,
            self::STACKED_PYRAMID,
            self::PERCENTS_STACKED_PYRAMID,
            self::PYRAMID3_D,
            self::LINE,
            self::STACKED_LINE,
            self::PERCENTS_STACKED_LINE,
            self::LINE_WITH_MARKERS,
            self::STACKED_LINE_WITH_MARKERS,
            self::PERCENTS_STACKED_LINE_WITH_MARKERS,
            self::LINE3_D,
            self::PIE,
            self::PIE3_D,
            self::PIE_OF_PIE,
            self::EXPLODED_PIE,
            self::EXPLODED_PIE3_D,
            self::BAR_OF_PIE,
            self::PERCENTS_STACKED_BAR,
            self::CLUSTERED_BAR3_D,
            self::CLUSTERED_BAR,
            self::STACKED_BAR,
            self::STACKED_BAR3_D,
            self::PERCENTS_STACKED_BAR3_D,
            self::CLUSTERED_HORIZONTAL_CYLINDER,
            self::STACKED_HORIZONTAL_CYLINDER,
            self::PERCENTS_STACKED_HORIZONTAL_CYLINDER,
            self::CLUSTERED_HORIZONTAL_CONE,
            self::STACKED_HORIZONTAL_CONE,
            self::PERCENTS_STACKED_HORIZONTAL_CONE,
            self::CLUSTERED_HORIZONTAL_PYRAMID,
            self::STACKED_HORIZONTAL_PYRAMID,
            self::PERCENTS_STACKED_HORIZONTAL_PYRAMID,
            self::AREA,
            self::STACKED_AREA,
            self::PERCENTS_STACKED_AREA,
            self::AREA3_D,
            self::STACKED_AREA3_D,
            self::PERCENTS_STACKED_AREA3_D,
            self::SCATTER_WITH_MARKERS,
            self::SCATTER_WITH_SMOOTH_LINES_AND_MARKERS,
            self::SCATTER_WITH_SMOOTH_LINES,
            self::SCATTER_WITH_STRAIGHT_LINES_AND_MARKERS,
            self::SCATTER_WITH_STRAIGHT_LINES,
            self::HIGH_LOW_CLOSE,
            self::OPEN_HIGH_LOW_CLOSE,
            self::VOLUME_HIGH_LOW_CLOSE,
            self::VOLUME_OPEN_HIGH_LOW_CLOSE,
            self::SURFACE3_D,
            self::WIREFRAME_SURFACE3_D,
            self::CONTOUR,
            self::WIREFRAME_CONTOUR,
            self::DOUGHNUT,
            self::EXPLODED_DOUGHNUT,
            self::BUBBLE,
            self::BUBBLE_WITH3_D,
            self::RADAR,
            self::RADAR_WITH_MARKERS,
            self::FILLED_RADAR,
            self::SERIES_OF_MIXED_TYPES,
        ];
    }
}


