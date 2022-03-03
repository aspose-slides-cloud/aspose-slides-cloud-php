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


namespace Aspose\Slides\Cloud\Sdk\Api;

/*
 * Utility class to manage model class hierarchy
 */
class ClassHierarchy
{
    /*
     * Get class descendants
     *
     * @param string $className class name
     *
     * @return string[] descendant class names
     */
    public static function getDescendants($className)
    {
        $result = [];
        foreach (self::$hierarchy as $key => $value)
        {
            if (strcasecmp($value, $className) == 0)
            {
                $result = array_merge($result, self::getDescendants($key));
                $result[] = $key;
            }
        }
        return $result;
    }

    /*
     * Get class descendants
     *
     * @param string $className class name
     *
     * @return string[] descendant class names
     */
    public static function isInstanceOfClass($object, $className)
    {
        $classDeterminers = self::$determiners[$className];
        if ($classDeterminers == null || empty($classDeterminers))
        {
            return 0;
        }
        foreach ($classDeterminers as $key => $value)
        {
            if (!
                (((is_array($object) && array_key_exists($key, $object) && strcasecmp($value, $object[$key]) == 0)
                    || (!is_array($object) && property_exists($object, $key) && strcasecmp($value, $object->{$key}) == 0))
                || ((is_array($object) && array_key_exists(lcfirst($key), $object) && strcasecmp($value, $object[lcfirst($key)]) == 0)
                    || (!is_array($object) && property_exists($object, lcfirst($key)) && strcasecmp($value, $object->{lcfirst($key)}) == 0))
                || ((is_array($object) && array_key_exists(ucfirst($key), $object) && strcasecmp($value, $object[ucfirst($key)]) == 0)
                    || (!is_array($object) && property_exists($object, ucfirst($key)) && strcasecmp($value, $object->{ucfirst($key)}) == 0))))
            {
                return 0;
            }
        }
        return 1;
    }

    private static $hierarchy = [
        'AccentElement' => 'MathElement',
        'AddLayoutSlide' => 'Task',
        'AddMasterSlide' => 'Task',
        'AddShape' => 'Task',
        'AddSlide' => 'Task',
        'ArcToPathSegment' => 'PathSegment',
        'ArrayElement' => 'MathElement',
        'BarElement' => 'MathElement',
        'Base64InputFile' => 'InputFile',
        'BlockElement' => 'MathElement',
        'BorderBoxElement' => 'MathElement',
        'BoxElement' => 'MathElement',
        'ClosePathSegment' => 'PathSegment',
        'ColorScheme' => 'ResourceBase',
        'CubicBezierToPathSegment' => 'PathSegment',
        'DelimiterElement' => 'MathElement',
        'Document' => 'ResourceBase',
        'DocumentProperties' => 'ResourceBase',
        'DocumentProperty' => 'ResourceBase',
        'FileVersion' => 'StorageFile',
        'FontScheme' => 'ResourceBase',
        'FormatScheme' => 'ResourceBase',
        'FractionElement' => 'MathElement',
        'FunctionElement' => 'MathElement',
        'GifExportOptions' => 'ExportOptions',
        'GradientFill' => 'FillFormat',
        'GroupingCharacterElement' => 'MathElement',
        'HeaderFooter' => 'ResourceBase',
        'Html5ExportOptions' => 'ExportOptions',
        'HtmlExportOptions' => 'ExportOptions',
        'Image' => 'ResourceBase',
        'ImageExportOptions' => 'ExportOptions',
        'Images' => 'ResourceBase',
        'LayoutSlide' => 'ResourceBase',
        'LayoutSlides' => 'ResourceBase',
        'LeftSubSuperscriptElement' => 'MathElement',
        'LimitElement' => 'MathElement',
        'LineToPathSegment' => 'PathSegment',
        'MasterSlide' => 'ResourceBase',
        'MasterSlides' => 'ResourceBase',
        'MatrixElement' => 'MathElement',
        'Merge' => 'Task',
        'MoveToPathSegment' => 'PathSegment',
        'NaryOperatorElement' => 'MathElement',
        'NoFill' => 'FillFormat',
        'NotesSlide' => 'ResourceBase',
        'NotesSlideHeaderFooter' => 'ResourceBase',
        'OneValueChartDataPoint' => 'DataPoint',
        'OneValueSeries' => 'Series',
        'Paragraph' => 'ResourceBase',
        'Paragraphs' => 'ResourceBase',
        'PathInputFile' => 'InputFile',
        'PathOutputFile' => 'OutputFile',
        'PatternFill' => 'FillFormat',
        'PdfExportOptions' => 'ExportOptions',
        'PictureFill' => 'FillFormat',
        'Placeholder' => 'ResourceBase',
        'Placeholders' => 'ResourceBase',
        'Portion' => 'ResourceBase',
        'Portions' => 'ResourceBase',
        'PptxExportOptions' => 'ExportOptions',
        'ProtectionProperties' => 'ResourceBase',
        'QuadraticBezierToPathSegment' => 'PathSegment',
        'RadicalElement' => 'MathElement',
        'RemoveShape' => 'Task',
        'RemoveSlide' => 'Task',
        'ReorderSlide' => 'Task',
        'ReplaceText' => 'Task',
        'RequestInputFile' => 'InputFile',
        'ResetSlide' => 'Task',
        'ResponseOutputFile' => 'OutputFile',
        'RightSubSuperscriptElement' => 'MathElement',
        'Save' => 'Task',
        'SaveShape' => 'Task',
        'SaveSlide' => 'Task',
        'ScatterChartDataPoint' => 'DataPoint',
        'Section' => 'ResourceBase',
        'Sections' => 'ResourceBase',
        'ShapeBase' => 'ResourceBase',
        'Shapes' => 'ResourceBase',
        'Slide' => 'ResourceBase',
        'SlideAnimation' => 'ResourceBase',
        'SlideBackground' => 'ResourceBase',
        'SlideComments' => 'ResourceBase',
        'SlideProperties' => 'ResourceBase',
        'Slides' => 'ResourceBase',
        'SolidFill' => 'FillFormat',
        'SplitDocumentResult' => 'ResourceBase',
        'SubscriptElement' => 'MathElement',
        'SuperscriptElement' => 'MathElement',
        'SvgExportOptions' => 'ExportOptions',
        'SwfExportOptions' => 'ExportOptions',
        'TextElement' => 'MathElement',
        'TextItems' => 'ResourceBase',
        'Theme' => 'ResourceBase',
        'TiffExportOptions' => 'ExportOptions',
        'UpdateBackground' => 'Task',
        'UpdateShape' => 'Task',
        'VideoExportOptions' => 'ExportOptions',
        'ViewProperties' => 'ResourceBase',
        'XYSeries' => 'Series',
        'XamlExportOptions' => 'ExportOptions',
        'XpsExportOptions' => 'ExportOptions',
        'BoxAndWhiskerSeries' => 'OneValueSeries',
        'BubbleChartDataPoint' => 'ScatterChartDataPoint',
        'BubbleSeries' => 'XYSeries',
        'Chart' => 'ShapeBase',
        'DocumentReplaceResult' => 'Document',
        'GeometryShape' => 'ShapeBase',
        'GraphicalObject' => 'ShapeBase',
        'GroupShape' => 'ShapeBase',
        'OleObjectFrame' => 'ShapeBase',
        'ScatterSeries' => 'XYSeries',
        'SlideReplaceResult' => 'Slide',
        'SmartArt' => 'ShapeBase',
        'SummaryZoomFrame' => 'ShapeBase',
        'Table' => 'ShapeBase',
        'WaterfallChartDataPoint' => 'OneValueChartDataPoint',
        'WaterfallSeries' => 'OneValueSeries',
        'ZoomObject' => 'ShapeBase',
        'AudioFrame' => 'GeometryShape',
        'Connector' => 'GeometryShape',
        'PictureFrame' => 'GeometryShape',
        'SectionZoomFrame' => 'ZoomObject',
        'Shape' => 'GeometryShape',
        'SmartArtShape' => 'GeometryShape',
        'VideoFrame' => 'GeometryShape',
        'ZoomFrame' => 'ZoomObject',
        'SummaryZoomSection' => 'SectionZoomFrame',
        
    ];


    private static $determiners = [
            'ApiInfo' => [],
            'ArrowHeadProperties' => [],
            'Axes' => [],
            'Axis' => [],
            'BlurEffect' => [],
            'Camera' => [],
            'ChartCategory' => [],
            'ChartTitle' => [],
            'ChartWall' => [],
            'CommonSlideViewProperties' => [],
            'CustomDashPattern' => [],
            'DataPoint' => [],
            'DiscUsage' => [],
            'Effect' => [],
            'EffectFormat' => [],
            'EntityExists' => [],
            'Error' => [],
            'ErrorDetails' => [],
            'ExportFormat' => [],
            'ExportOptions' => [],
            'FileVersions' => [],
            'FilesList' => [],
            'FilesUploadResult' => [],
            'FillFormat' => [],
            'FillOverlayEffect' => [],
            'FontSet' => [],
            'GeometryPath' => [],
            'GeometryPaths' => [],
            'GlowEffect' => [],
            'GradientFillStop' => [],
            'Hyperlink' => [],
            'IShapeExportOptions' => [],
            'ImageExportFormat' => [],
            'InnerShadowEffect' => [],
            'Input' => [],
            'InputFile' => [],
            'InteractiveSequence' => [],
            'Legend' => [],
            'LightRig' => [],
            'LineFormat' => [],
            'MathElement' => [],
            'MathParagraph' => [],
            'MergingSource' => [],
            'NormalViewRestoredProperties' => [],
            'NotesSlideExportFormat' => [],
            'ObjectExist' => [],
            'OrderedMergeRequest' => [],
            'OuterShadowEffect' => [],
            'OutputFile' => [],
            'PathSegment' => [],
            'Pipeline' => [],
            'PlotArea' => [],
            'PresentationToMerge' => [],
            'PresentationsMergeRequest' => [],
            'PresetShadowEffect' => [],
            'ReflectionEffect' => [],
            'ResourceBase' => [],
            'ResourceUri' => [],
            'Series' => [],
            'SeriesMarker' => [],
            'ShapeBevel' => [],
            'ShapeExportFormat' => [],
            'ShapeImageExportOptions' => [],
            'ShapeThumbnailBounds' => [],
            'ShapesAlignmentType' => [],
            'SlideComment' => [],
            'SlideExportFormat' => [],
            'SmartArtNode' => [],
            'SoftEdgeEffect' => [],
            'SpecialSlideType' => [],
            'StorageExist' => [],
            'StorageFile' => [],
            'TableCell' => [],
            'TableColumn' => [],
            'TableRow' => [],
            'Task' => [],
            'TextFrameFormat' => [],
            'TextItem' => [],
            'ThreeDFormat' => [],
            'AccentElement' => ['Type' => 'Accent',],
            'AddLayoutSlide' => ['Type' => 'AddLayoutSlide',],
            'AddMasterSlide' => ['Type' => 'AddMasterSlide',],
            'AddShape' => ['Type' => 'AddShape',],
            'AddSlide' => ['Type' => 'AddSlide',],
            'ArcToPathSegment' => ['Type' => 'ArcTo',],
            'ArrayElement' => ['Type' => 'Array',],
            'BarElement' => ['Type' => 'Bar',],
            'Base64InputFile' => ['Type' => 'Base64',],
            'BlockElement' => ['Type' => 'Block',],
            'BorderBoxElement' => ['Type' => 'BorderBox',],
            'BoxElement' => ['Type' => 'Box',],
            'ClosePathSegment' => ['Type' => 'Close',],
            'ColorScheme' => [],
            'CubicBezierToPathSegment' => ['Type' => 'CubicBezierTo',],
            'DelimiterElement' => ['Type' => 'Delimiter',],
            'Document' => [],
            'DocumentProperties' => [],
            'DocumentProperty' => [],
            'FileVersion' => [],
            'FontScheme' => [],
            'FormatScheme' => [],
            'FractionElement' => ['Type' => 'Fraction',],
            'FunctionElement' => ['Type' => 'Function',],
            'GifExportOptions' => ['Format' => 'gif',],
            'GradientFill' => ['Type' => 'Gradient',],
            'GroupingCharacterElement' => ['Type' => 'GroupingCharacter',],
            'HeaderFooter' => [],
            'Html5ExportOptions' => ['Format' => 'html5',],
            'HtmlExportOptions' => ['Format' => 'html',],
            'Image' => [],
            'ImageExportOptions' => ['Format' => 'image',],
            'Images' => [],
            'LayoutSlide' => [],
            'LayoutSlides' => [],
            'LeftSubSuperscriptElement' => ['Type' => 'LeftSubSuperscriptElement',],
            'LimitElement' => ['Type' => 'Limit',],
            'LineToPathSegment' => ['Type' => 'LineTo',],
            'MasterSlide' => [],
            'MasterSlides' => [],
            'MatrixElement' => ['Type' => 'Matrix',],
            'Merge' => ['Type' => 'Merge',],
            'MoveToPathSegment' => ['Type' => 'MoveTo',],
            'NaryOperatorElement' => ['Type' => 'NaryOperator',],
            'NoFill' => ['Type' => 'NoFill',],
            'NotesSlide' => [],
            'NotesSlideHeaderFooter' => [],
            'OneValueChartDataPoint' => [],
            'OneValueSeries' => ['DataPointType' => 'OneValue',],
            'Paragraph' => [],
            'Paragraphs' => [],
            'PathInputFile' => ['Type' => 'Path',],
            'PathOutputFile' => ['Type' => 'Path',],
            'PatternFill' => ['Type' => 'Pattern',],
            'PdfExportOptions' => ['Format' => 'pdf',],
            'PictureFill' => ['Type' => 'Picture',],
            'Placeholder' => [],
            'Placeholders' => [],
            'Portion' => [],
            'Portions' => [],
            'PptxExportOptions' => ['Format' => 'pptx',],
            'ProtectionProperties' => [],
            'QuadraticBezierToPathSegment' => ['Type' => 'QuadBezierTo',],
            'RadicalElement' => ['Type' => 'Radical',],
            'RemoveShape' => ['Type' => 'RemoveShape',],
            'RemoveSlide' => ['Type' => 'RemoveSlide',],
            'ReorderSlide' => ['Type' => 'ReoderSlide',],
            'ReplaceText' => ['Type' => 'ReplaceText',],
            'RequestInputFile' => ['Type' => 'Request',],
            'ResetSlide' => ['Type' => 'ResetSlide',],
            'ResponseOutputFile' => ['Type' => 'Response',],
            'RightSubSuperscriptElement' => ['Type' => 'RightSubSuperscriptElement',],
            'Save' => ['Type' => 'Save',],
            'SaveShape' => ['Type' => 'SaveShape',],
            'SaveSlide' => ['Type' => 'SaveSlide',],
            'ScatterChartDataPoint' => [],
            'Section' => [],
            'Sections' => [],
            'ShapeBase' => [],
            'Shapes' => [],
            'Slide' => [],
            'SlideAnimation' => [],
            'SlideBackground' => [],
            'SlideComments' => [],
            'SlideProperties' => [],
            'Slides' => [],
            'SolidFill' => ['Type' => 'Solid',],
            'SplitDocumentResult' => [],
            'SubscriptElement' => ['Type' => 'SubscriptElement',],
            'SuperscriptElement' => ['Type' => 'SuperscriptElement',],
            'SvgExportOptions' => ['Format' => 'svg',],
            'SwfExportOptions' => ['Format' => 'swf',],
            'TextElement' => ['Type' => 'Text',],
            'TextItems' => [],
            'Theme' => [],
            'TiffExportOptions' => ['Format' => 'tiff',],
            'UpdateBackground' => ['Type' => 'UpdateBackground',],
            'UpdateShape' => ['Type' => 'UpdateShape',],
            'VideoExportOptions' => ['Format' => 'mpeg4',],
            'ViewProperties' => [],
            'XYSeries' => [],
            'XamlExportOptions' => ['Format' => 'xaml',],
            'XpsExportOptions' => ['Format' => 'xps',],
            'BoxAndWhiskerSeries' => ['DataPointType' => 'OneValue',],
            'BubbleChartDataPoint' => [],
            'BubbleSeries' => ['DataPointType' => 'Bubble',],
            'Chart' => ['Type' => 'Chart',],
            'DocumentReplaceResult' => [],
            'GeometryShape' => [],
            'GraphicalObject' => ['Type' => 'GraphicalObject',],
            'GroupShape' => ['Type' => 'GroupShape',],
            'OleObjectFrame' => ['Type' => 'OleObjectFrame',],
            'ScatterSeries' => ['DataPointType' => 'Scatter',],
            'SlideReplaceResult' => [],
            'SmartArt' => ['Type' => 'SmartArt',],
            'SummaryZoomFrame' => ['Type' => 'SummaryZoomFrame',],
            'Table' => ['Type' => 'Table',],
            'WaterfallChartDataPoint' => [],
            'WaterfallSeries' => ['DataPointType' => 'OneValue',],
            'ZoomObject' => [],
            'AudioFrame' => ['Type' => 'AudioFrame',],
            'Connector' => ['Type' => 'Connector',],
            'PictureFrame' => ['Type' => 'PictureFrame',],
            'SectionZoomFrame' => ['Type' => 'SectionZoomFrame',],
            'Shape' => ['Type' => 'Shape',],
            'SmartArtShape' => ['Type' => 'SmartArtShape',],
            'VideoFrame' => ['Type' => 'VideoFrame',],
            'ZoomFrame' => ['Type' => 'ZoomFrame',],
            'SummaryZoomSection' => ['Type' => 'SummaryZoomSection',],
    ];
}
