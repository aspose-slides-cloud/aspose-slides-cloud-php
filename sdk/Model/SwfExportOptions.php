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
 * SwfExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in SWF format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwfExportOptions extends ExportOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SwfExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'show_hidden_slides' => 'bool',
        'compressed' => 'bool',
        'viewer_included' => 'bool',
        'show_page_border' => 'bool',
        'show_full_screen' => 'bool',
        'show_page_stepper' => 'bool',
        'show_search' => 'bool',
        'show_top_pane' => 'bool',
        'show_bottom_pane' => 'bool',
        'show_left_pane' => 'bool',
        'start_open_left_pane' => 'bool',
        'enable_context_menu' => 'bool',
        'logo_image' => 'string',
        'logo_link' => 'string',
        'jpeg_quality' => 'int',
        'notes_position' => 'string',
        'comments_position' => 'string',
        'comments_area_width' => 'int',
        'comments_area_color' => 'string',
        'show_comments_by_no_author' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'show_hidden_slides' => null,
        'compressed' => null,
        'viewer_included' => null,
        'show_page_border' => null,
        'show_full_screen' => null,
        'show_page_stepper' => null,
        'show_search' => null,
        'show_top_pane' => null,
        'show_bottom_pane' => null,
        'show_left_pane' => null,
        'start_open_left_pane' => null,
        'enable_context_menu' => null,
        'logo_image' => null,
        'logo_link' => null,
        'jpeg_quality' => 'int32',
        'notes_position' => null,
        'comments_position' => null,
        'comments_area_width' => 'int32',
        'comments_area_color' => null,
        'show_comments_by_no_author' => null
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
        'show_hidden_slides' => 'ShowHiddenSlides',
        'compressed' => 'Compressed',
        'viewer_included' => 'ViewerIncluded',
        'show_page_border' => 'ShowPageBorder',
        'show_full_screen' => 'ShowFullScreen',
        'show_page_stepper' => 'ShowPageStepper',
        'show_search' => 'ShowSearch',
        'show_top_pane' => 'ShowTopPane',
        'show_bottom_pane' => 'ShowBottomPane',
        'show_left_pane' => 'ShowLeftPane',
        'start_open_left_pane' => 'StartOpenLeftPane',
        'enable_context_menu' => 'EnableContextMenu',
        'logo_image' => 'LogoImage',
        'logo_link' => 'LogoLink',
        'jpeg_quality' => 'JpegQuality',
        'notes_position' => 'NotesPosition',
        'comments_position' => 'CommentsPosition',
        'comments_area_width' => 'CommentsAreaWidth',
        'comments_area_color' => 'CommentsAreaColor',
        'show_comments_by_no_author' => 'ShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_hidden_slides' => 'setShowHiddenSlides',
        'compressed' => 'setCompressed',
        'viewer_included' => 'setViewerIncluded',
        'show_page_border' => 'setShowPageBorder',
        'show_full_screen' => 'setShowFullScreen',
        'show_page_stepper' => 'setShowPageStepper',
        'show_search' => 'setShowSearch',
        'show_top_pane' => 'setShowTopPane',
        'show_bottom_pane' => 'setShowBottomPane',
        'show_left_pane' => 'setShowLeftPane',
        'start_open_left_pane' => 'setStartOpenLeftPane',
        'enable_context_menu' => 'setEnableContextMenu',
        'logo_image' => 'setLogoImage',
        'logo_link' => 'setLogoLink',
        'jpeg_quality' => 'setJpegQuality',
        'notes_position' => 'setNotesPosition',
        'comments_position' => 'setCommentsPosition',
        'comments_area_width' => 'setCommentsAreaWidth',
        'comments_area_color' => 'setCommentsAreaColor',
        'show_comments_by_no_author' => 'setShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_hidden_slides' => 'getShowHiddenSlides',
        'compressed' => 'getCompressed',
        'viewer_included' => 'getViewerIncluded',
        'show_page_border' => 'getShowPageBorder',
        'show_full_screen' => 'getShowFullScreen',
        'show_page_stepper' => 'getShowPageStepper',
        'show_search' => 'getShowSearch',
        'show_top_pane' => 'getShowTopPane',
        'show_bottom_pane' => 'getShowBottomPane',
        'show_left_pane' => 'getShowLeftPane',
        'start_open_left_pane' => 'getStartOpenLeftPane',
        'enable_context_menu' => 'getEnableContextMenu',
        'logo_image' => 'getLogoImage',
        'logo_link' => 'getLogoLink',
        'jpeg_quality' => 'getJpegQuality',
        'notes_position' => 'getNotesPosition',
        'comments_position' => 'getCommentsPosition',
        'comments_area_width' => 'getCommentsAreaWidth',
        'comments_area_color' => 'getCommentsAreaColor',
        'show_comments_by_no_author' => 'getShowCommentsByNoAuthor'
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

    const NOTES_POSITION_NONE = 'None';
    const NOTES_POSITION_BOTTOM_FULL = 'BottomFull';
    const NOTES_POSITION_BOTTOM_TRUNCATED = 'BottomTruncated';
    const COMMENTS_POSITION_NONE = 'None';
    const COMMENTS_POSITION_BOTTOM = 'Bottom';
    const COMMENTS_POSITION_RIGHT = 'Right';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotesPositionAllowableValues()
    {
        return [
            self::NOTES_POSITION_NONE,
            self::NOTES_POSITION_BOTTOM_FULL,
            self::NOTES_POSITION_BOTTOM_TRUNCATED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommentsPositionAllowableValues()
    {
        return [
            self::COMMENTS_POSITION_NONE,
            self::COMMENTS_POSITION_BOTTOM,
            self::COMMENTS_POSITION_RIGHT,
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

        $this->container['show_hidden_slides'] = isset($data['show_hidden_slides']) ? $data['show_hidden_slides'] : null;
        $this->container['compressed'] = isset($data['compressed']) ? $data['compressed'] : null;
        $this->container['viewer_included'] = isset($data['viewer_included']) ? $data['viewer_included'] : null;
        $this->container['show_page_border'] = isset($data['show_page_border']) ? $data['show_page_border'] : null;
        $this->container['show_full_screen'] = isset($data['show_full_screen']) ? $data['show_full_screen'] : null;
        $this->container['show_page_stepper'] = isset($data['show_page_stepper']) ? $data['show_page_stepper'] : null;
        $this->container['show_search'] = isset($data['show_search']) ? $data['show_search'] : null;
        $this->container['show_top_pane'] = isset($data['show_top_pane']) ? $data['show_top_pane'] : null;
        $this->container['show_bottom_pane'] = isset($data['show_bottom_pane']) ? $data['show_bottom_pane'] : null;
        $this->container['show_left_pane'] = isset($data['show_left_pane']) ? $data['show_left_pane'] : null;
        $this->container['start_open_left_pane'] = isset($data['start_open_left_pane']) ? $data['start_open_left_pane'] : null;
        $this->container['enable_context_menu'] = isset($data['enable_context_menu']) ? $data['enable_context_menu'] : null;
        $this->container['logo_image'] = isset($data['logo_image']) ? $data['logo_image'] : null;
        $this->container['logo_link'] = isset($data['logo_link']) ? $data['logo_link'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['notes_position'] = isset($data['notes_position']) ? $data['notes_position'] : null;
        $this->container['comments_position'] = isset($data['comments_position']) ? $data['comments_position'] : null;
        $this->container['comments_area_width'] = isset($data['comments_area_width']) ? $data['comments_area_width'] : null;
        $this->container['comments_area_color'] = isset($data['comments_area_color']) ? $data['comments_area_color'] : null;
        $this->container['show_comments_by_no_author'] = isset($data['show_comments_by_no_author']) ? $data['show_comments_by_no_author'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['show_hidden_slides'] === null) {
            $invalidProperties[] = "'show_hidden_slides' can't be null";
        }
        if ($this->container['compressed'] === null) {
            $invalidProperties[] = "'compressed' can't be null";
        }
        if ($this->container['viewer_included'] === null) {
            $invalidProperties[] = "'viewer_included' can't be null";
        }
        if ($this->container['show_page_border'] === null) {
            $invalidProperties[] = "'show_page_border' can't be null";
        }
        if ($this->container['show_full_screen'] === null) {
            $invalidProperties[] = "'show_full_screen' can't be null";
        }
        if ($this->container['show_page_stepper'] === null) {
            $invalidProperties[] = "'show_page_stepper' can't be null";
        }
        if ($this->container['show_search'] === null) {
            $invalidProperties[] = "'show_search' can't be null";
        }
        if ($this->container['show_top_pane'] === null) {
            $invalidProperties[] = "'show_top_pane' can't be null";
        }
        if ($this->container['show_bottom_pane'] === null) {
            $invalidProperties[] = "'show_bottom_pane' can't be null";
        }
        if ($this->container['show_left_pane'] === null) {
            $invalidProperties[] = "'show_left_pane' can't be null";
        }
        if ($this->container['start_open_left_pane'] === null) {
            $invalidProperties[] = "'start_open_left_pane' can't be null";
        }
        if ($this->container['enable_context_menu'] === null) {
            $invalidProperties[] = "'enable_context_menu' can't be null";
        }
        if ($this->container['jpeg_quality'] === null) {
            $invalidProperties[] = "'jpeg_quality' can't be null";
        }
        if ($this->container['notes_position'] === null) {
            $invalidProperties[] = "'notes_position' can't be null";
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notes_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notes_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['comments_position'] === null) {
            $invalidProperties[] = "'comments_position' can't be null";
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['comments_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'comments_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['comments_area_width'] === null) {
            $invalidProperties[] = "'comments_area_width' can't be null";
        }
        if ($this->container['show_comments_by_no_author'] === null) {
            $invalidProperties[] = "'show_comments_by_no_author' can't be null";
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

        if ($this->container['show_hidden_slides'] === null) {
            return false;
        }
        if ($this->container['compressed'] === null) {
            return false;
        }
        if ($this->container['viewer_included'] === null) {
            return false;
        }
        if ($this->container['show_page_border'] === null) {
            return false;
        }
        if ($this->container['show_full_screen'] === null) {
            return false;
        }
        if ($this->container['show_page_stepper'] === null) {
            return false;
        }
        if ($this->container['show_search'] === null) {
            return false;
        }
        if ($this->container['show_top_pane'] === null) {
            return false;
        }
        if ($this->container['show_bottom_pane'] === null) {
            return false;
        }
        if ($this->container['show_left_pane'] === null) {
            return false;
        }
        if ($this->container['start_open_left_pane'] === null) {
            return false;
        }
        if ($this->container['enable_context_menu'] === null) {
            return false;
        }
        if ($this->container['jpeg_quality'] === null) {
            return false;
        }
        if ($this->container['notes_position'] === null) {
            return false;
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notes_position'], $allowedValues)) {
            return false;
        }
        if ($this->container['comments_position'] === null) {
            return false;
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['comments_position'], $allowedValues)) {
            return false;
        }
        if ($this->container['comments_area_width'] === null) {
            return false;
        }
        if ($this->container['show_comments_by_no_author'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets show_hidden_slides
     *
     * @return bool
     */
    public function getShowHiddenSlides()
    {
        return $this->container['show_hidden_slides'];
    }

    /**
     * Sets show_hidden_slides
     *
     * @param bool $show_hidden_slides Specifies whether the generated document should include hidden slides or not. Default is false.
     *
     * @return $this
     */
    public function setShowHiddenSlides($show_hidden_slides)
    {
        $this->container['show_hidden_slides'] = $show_hidden_slides;

        return $this;
    }

    /**
     * Gets compressed
     *
     * @return bool
     */
    public function getCompressed()
    {
        return $this->container['compressed'];
    }

    /**
     * Sets compressed
     *
     * @param bool $compressed Specifies whether the generated SWF document should be compressed or not. Default is true.
     *
     * @return $this
     */
    public function setCompressed($compressed)
    {
        $this->container['compressed'] = $compressed;

        return $this;
    }

    /**
     * Gets viewer_included
     *
     * @return bool
     */
    public function getViewerIncluded()
    {
        return $this->container['viewer_included'];
    }

    /**
     * Sets viewer_included
     *
     * @param bool $viewer_included Specifies whether the generated SWF document should include the integrated document viewer or not. Default is true.
     *
     * @return $this
     */
    public function setViewerIncluded($viewer_included)
    {
        $this->container['viewer_included'] = $viewer_included;

        return $this;
    }

    /**
     * Gets show_page_border
     *
     * @return bool
     */
    public function getShowPageBorder()
    {
        return $this->container['show_page_border'];
    }

    /**
     * Sets show_page_border
     *
     * @param bool $show_page_border Specifies whether border around pages should be shown. Default is true.
     *
     * @return $this
     */
    public function setShowPageBorder($show_page_border)
    {
        $this->container['show_page_border'] = $show_page_border;

        return $this;
    }

    /**
     * Gets show_full_screen
     *
     * @return bool
     */
    public function getShowFullScreen()
    {
        return $this->container['show_full_screen'];
    }

    /**
     * Sets show_full_screen
     *
     * @param bool $show_full_screen Show/hide fullscreen button. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowFullScreen($show_full_screen)
    {
        $this->container['show_full_screen'] = $show_full_screen;

        return $this;
    }

    /**
     * Gets show_page_stepper
     *
     * @return bool
     */
    public function getShowPageStepper()
    {
        return $this->container['show_page_stepper'];
    }

    /**
     * Sets show_page_stepper
     *
     * @param bool $show_page_stepper Show/hide page stepper. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowPageStepper($show_page_stepper)
    {
        $this->container['show_page_stepper'] = $show_page_stepper;

        return $this;
    }

    /**
     * Gets show_search
     *
     * @return bool
     */
    public function getShowSearch()
    {
        return $this->container['show_search'];
    }

    /**
     * Sets show_search
     *
     * @param bool $show_search Show/hide search section. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowSearch($show_search)
    {
        $this->container['show_search'] = $show_search;

        return $this;
    }

    /**
     * Gets show_top_pane
     *
     * @return bool
     */
    public function getShowTopPane()
    {
        return $this->container['show_top_pane'];
    }

    /**
     * Sets show_top_pane
     *
     * @param bool $show_top_pane Show/hide whole top pane. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowTopPane($show_top_pane)
    {
        $this->container['show_top_pane'] = $show_top_pane;

        return $this;
    }

    /**
     * Gets show_bottom_pane
     *
     * @return bool
     */
    public function getShowBottomPane()
    {
        return $this->container['show_bottom_pane'];
    }

    /**
     * Sets show_bottom_pane
     *
     * @param bool $show_bottom_pane Show/hide bottom pane. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowBottomPane($show_bottom_pane)
    {
        $this->container['show_bottom_pane'] = $show_bottom_pane;

        return $this;
    }

    /**
     * Gets show_left_pane
     *
     * @return bool
     */
    public function getShowLeftPane()
    {
        return $this->container['show_left_pane'];
    }

    /**
     * Sets show_left_pane
     *
     * @param bool $show_left_pane Show/hide left pane. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowLeftPane($show_left_pane)
    {
        $this->container['show_left_pane'] = $show_left_pane;

        return $this;
    }

    /**
     * Gets start_open_left_pane
     *
     * @return bool
     */
    public function getStartOpenLeftPane()
    {
        return $this->container['start_open_left_pane'];
    }

    /**
     * Sets start_open_left_pane
     *
     * @param bool $start_open_left_pane Start with opened left pane. Can be overridden in flashvars. Default is false.
     *
     * @return $this
     */
    public function setStartOpenLeftPane($start_open_left_pane)
    {
        $this->container['start_open_left_pane'] = $start_open_left_pane;

        return $this;
    }

    /**
     * Gets enable_context_menu
     *
     * @return bool
     */
    public function getEnableContextMenu()
    {
        return $this->container['enable_context_menu'];
    }

    /**
     * Sets enable_context_menu
     *
     * @param bool $enable_context_menu Enable/disable context menu. Default is true.
     *
     * @return $this
     */
    public function setEnableContextMenu($enable_context_menu)
    {
        $this->container['enable_context_menu'] = $enable_context_menu;

        return $this;
    }

    /**
     * Gets logo_image
     *
     * @return string
     */
    public function getLogoImage()
    {
        return $this->container['logo_image'];
    }

    /**
     * Sets logo_image
     *
     * @param string $logo_image Image that will be displayed as logo in the top right corner of the viewer. The image data is a base 64 string. Image should be 32x64 pixels PNG image, otherwise logo can be displayed improperly.
     *
     * @return $this
     */
    public function setLogoImage($logo_image)
    {
        $this->container['logo_image'] = $logo_image;

        return $this;
    }

    /**
     * Gets logo_link
     *
     * @return string
     */
    public function getLogoLink()
    {
        return $this->container['logo_link'];
    }

    /**
     * Sets logo_link
     *
     * @param string $logo_link Gets or sets the full hyperlink address for a logo. Has an effect only if a LogoImage is specified.
     *
     * @return $this
     */
    public function setLogoLink($logo_link)
    {
        $this->container['logo_link'] = $logo_link;

        return $this;
    }

    /**
     * Gets jpeg_quality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpeg_quality'];
    }

    /**
     * Sets jpeg_quality
     *
     * @param int $jpeg_quality Specifies the quality of JPEG images. Default is 95.
     *
     * @return $this
     */
    public function setJpegQuality($jpeg_quality)
    {
        $this->container['jpeg_quality'] = $jpeg_quality;

        return $this;
    }

    /**
     * Gets notes_position
     *
     * @return string
     */
    public function getNotesPosition()
    {
        return $this->container['notes_position'];
    }

    /**
     * Sets notes_position
     *
     * @param string $notes_position Gets or sets the position of the notes on the page.
     *
     * @return $this
     */
    public function setNotesPosition($notes_position)
    {
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($notes_position, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'notes_position', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notes_position'] = $notes_position;

        return $this;
    }

    /**
     * Gets comments_position
     *
     * @return string
     */
    public function getCommentsPosition()
    {
        return $this->container['comments_position'];
    }

    /**
     * Sets comments_position
     *
     * @param string $comments_position Gets or sets the position of the comments on the page.
     *
     * @return $this
     */
    public function setCommentsPosition($comments_position)
    {
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($comments_position, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'comments_position', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['comments_position'] = $comments_position;

        return $this;
    }

    /**
     * Gets comments_area_width
     *
     * @return int
     */
    public function getCommentsAreaWidth()
    {
        return $this->container['comments_area_width'];
    }

    /**
     * Sets comments_area_width
     *
     * @param int $comments_area_width Gets or sets the width of the comment output area in pixels (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaWidth($comments_area_width)
    {
        $this->container['comments_area_width'] = $comments_area_width;

        return $this;
    }

    /**
     * Gets comments_area_color
     *
     * @return string
     */
    public function getCommentsAreaColor()
    {
        return $this->container['comments_area_color'];
    }

    /**
     * Sets comments_area_color
     *
     * @param string $comments_area_color Gets or sets the color of comments area (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaColor($comments_area_color)
    {
        $this->container['comments_area_color'] = $comments_area_color;

        return $this;
    }

    /**
     * Gets show_comments_by_no_author
     *
     * @return bool
     */
    public function getShowCommentsByNoAuthor()
    {
        return $this->container['show_comments_by_no_author'];
    }

    /**
     * Sets show_comments_by_no_author
     *
     * @param bool $show_comments_by_no_author True if comments that have no author are displayed. (Applies only if comments are displayed).
     *
     * @return $this
     */
    public function setShowCommentsByNoAuthor($show_comments_by_no_author)
    {
        $this->container['show_comments_by_no_author'] = $show_comments_by_no_author;

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


