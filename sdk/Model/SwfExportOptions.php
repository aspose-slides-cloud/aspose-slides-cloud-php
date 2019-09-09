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
        'showHiddenSlides' => 'bool',
        'compressed' => 'bool',
        'viewerIncluded' => 'bool',
        'showPageBorder' => 'bool',
        'showFullScreen' => 'bool',
        'showPageStepper' => 'bool',
        'showSearch' => 'bool',
        'showTopPane' => 'bool',
        'showBottomPane' => 'bool',
        'showLeftPane' => 'bool',
        'startOpenLeftPane' => 'bool',
        'enableContextMenu' => 'bool',
        'logoImage' => 'string',
        'logoLink' => 'string',
        'jpegQuality' => 'int',
        'notesPosition' => 'string',
        'commentsPosition' => 'string',
        'commentsAreaWidth' => 'int',
        'commentsAreaColor' => 'string',
        'showCommentsByNoAuthor' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'showHiddenSlides' => null,
        'compressed' => null,
        'viewerIncluded' => null,
        'showPageBorder' => null,
        'showFullScreen' => null,
        'showPageStepper' => null,
        'showSearch' => null,
        'showTopPane' => null,
        'showBottomPane' => null,
        'showLeftPane' => null,
        'startOpenLeftPane' => null,
        'enableContextMenu' => null,
        'logoImage' => null,
        'logoLink' => null,
        'jpegQuality' => 'int32',
        'notesPosition' => null,
        'commentsPosition' => null,
        'commentsAreaWidth' => 'int32',
        'commentsAreaColor' => null,
        'showCommentsByNoAuthor' => null
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
        'showHiddenSlides' => 'ShowHiddenSlides',
        'compressed' => 'Compressed',
        'viewerIncluded' => 'ViewerIncluded',
        'showPageBorder' => 'ShowPageBorder',
        'showFullScreen' => 'ShowFullScreen',
        'showPageStepper' => 'ShowPageStepper',
        'showSearch' => 'ShowSearch',
        'showTopPane' => 'ShowTopPane',
        'showBottomPane' => 'ShowBottomPane',
        'showLeftPane' => 'ShowLeftPane',
        'startOpenLeftPane' => 'StartOpenLeftPane',
        'enableContextMenu' => 'EnableContextMenu',
        'logoImage' => 'LogoImage',
        'logoLink' => 'LogoLink',
        'jpegQuality' => 'JpegQuality',
        'notesPosition' => 'NotesPosition',
        'commentsPosition' => 'CommentsPosition',
        'commentsAreaWidth' => 'CommentsAreaWidth',
        'commentsAreaColor' => 'CommentsAreaColor',
        'showCommentsByNoAuthor' => 'ShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'showHiddenSlides' => 'setShowHiddenSlides',
        'compressed' => 'setCompressed',
        'viewerIncluded' => 'setViewerIncluded',
        'showPageBorder' => 'setShowPageBorder',
        'showFullScreen' => 'setShowFullScreen',
        'showPageStepper' => 'setShowPageStepper',
        'showSearch' => 'setShowSearch',
        'showTopPane' => 'setShowTopPane',
        'showBottomPane' => 'setShowBottomPane',
        'showLeftPane' => 'setShowLeftPane',
        'startOpenLeftPane' => 'setStartOpenLeftPane',
        'enableContextMenu' => 'setEnableContextMenu',
        'logoImage' => 'setLogoImage',
        'logoLink' => 'setLogoLink',
        'jpegQuality' => 'setJpegQuality',
        'notesPosition' => 'setNotesPosition',
        'commentsPosition' => 'setCommentsPosition',
        'commentsAreaWidth' => 'setCommentsAreaWidth',
        'commentsAreaColor' => 'setCommentsAreaColor',
        'showCommentsByNoAuthor' => 'setShowCommentsByNoAuthor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'showHiddenSlides' => 'getShowHiddenSlides',
        'compressed' => 'getCompressed',
        'viewerIncluded' => 'getViewerIncluded',
        'showPageBorder' => 'getShowPageBorder',
        'showFullScreen' => 'getShowFullScreen',
        'showPageStepper' => 'getShowPageStepper',
        'showSearch' => 'getShowSearch',
        'showTopPane' => 'getShowTopPane',
        'showBottomPane' => 'getShowBottomPane',
        'showLeftPane' => 'getShowLeftPane',
        'startOpenLeftPane' => 'getStartOpenLeftPane',
        'enableContextMenu' => 'getEnableContextMenu',
        'logoImage' => 'getLogoImage',
        'logoLink' => 'getLogoLink',
        'jpegQuality' => 'getJpegQuality',
        'notesPosition' => 'getNotesPosition',
        'commentsPosition' => 'getCommentsPosition',
        'commentsAreaWidth' => 'getCommentsAreaWidth',
        'commentsAreaColor' => 'getCommentsAreaColor',
        'showCommentsByNoAuthor' => 'getShowCommentsByNoAuthor'
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

        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['compressed'] = isset($data['compressed']) ? $data['compressed'] : null;
        $this->container['viewerIncluded'] = isset($data['viewerIncluded']) ? $data['viewerIncluded'] : null;
        $this->container['showPageBorder'] = isset($data['showPageBorder']) ? $data['showPageBorder'] : null;
        $this->container['showFullScreen'] = isset($data['showFullScreen']) ? $data['showFullScreen'] : null;
        $this->container['showPageStepper'] = isset($data['showPageStepper']) ? $data['showPageStepper'] : null;
        $this->container['showSearch'] = isset($data['showSearch']) ? $data['showSearch'] : null;
        $this->container['showTopPane'] = isset($data['showTopPane']) ? $data['showTopPane'] : null;
        $this->container['showBottomPane'] = isset($data['showBottomPane']) ? $data['showBottomPane'] : null;
        $this->container['showLeftPane'] = isset($data['showLeftPane']) ? $data['showLeftPane'] : null;
        $this->container['startOpenLeftPane'] = isset($data['startOpenLeftPane']) ? $data['startOpenLeftPane'] : null;
        $this->container['enableContextMenu'] = isset($data['enableContextMenu']) ? $data['enableContextMenu'] : null;
        $this->container['logoImage'] = isset($data['logoImage']) ? $data['logoImage'] : null;
        $this->container['logoLink'] = isset($data['logoLink']) ? $data['logoLink'] : null;
        $this->container['jpegQuality'] = isset($data['jpegQuality']) ? $data['jpegQuality'] : null;
        $this->container['notesPosition'] = isset($data['notesPosition']) ? $data['notesPosition'] : null;
        $this->container['commentsPosition'] = isset($data['commentsPosition']) ? $data['commentsPosition'] : null;
        $this->container['commentsAreaWidth'] = isset($data['commentsAreaWidth']) ? $data['commentsAreaWidth'] : null;
        $this->container['commentsAreaColor'] = isset($data['commentsAreaColor']) ? $data['commentsAreaColor'] : null;
        $this->container['showCommentsByNoAuthor'] = isset($data['showCommentsByNoAuthor']) ? $data['showCommentsByNoAuthor'] : null;
        $this->container['format'] = 'swf';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['showHiddenSlides'] === null) {
            $invalidProperties[] = "'showHiddenSlides' can't be null";
        }
        if ($this->container['compressed'] === null) {
            $invalidProperties[] = "'compressed' can't be null";
        }
        if ($this->container['viewerIncluded'] === null) {
            $invalidProperties[] = "'viewerIncluded' can't be null";
        }
        if ($this->container['showPageBorder'] === null) {
            $invalidProperties[] = "'showPageBorder' can't be null";
        }
        if ($this->container['showFullScreen'] === null) {
            $invalidProperties[] = "'showFullScreen' can't be null";
        }
        if ($this->container['showPageStepper'] === null) {
            $invalidProperties[] = "'showPageStepper' can't be null";
        }
        if ($this->container['showSearch'] === null) {
            $invalidProperties[] = "'showSearch' can't be null";
        }
        if ($this->container['showTopPane'] === null) {
            $invalidProperties[] = "'showTopPane' can't be null";
        }
        if ($this->container['showBottomPane'] === null) {
            $invalidProperties[] = "'showBottomPane' can't be null";
        }
        if ($this->container['showLeftPane'] === null) {
            $invalidProperties[] = "'showLeftPane' can't be null";
        }
        if ($this->container['startOpenLeftPane'] === null) {
            $invalidProperties[] = "'startOpenLeftPane' can't be null";
        }
        if ($this->container['enableContextMenu'] === null) {
            $invalidProperties[] = "'enableContextMenu' can't be null";
        }
        if ($this->container['jpegQuality'] === null) {
            $invalidProperties[] = "'jpegQuality' can't be null";
        }
        if ($this->container['notesPosition'] === null) {
            $invalidProperties[] = "'notesPosition' can't be null";
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notesPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notesPosition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['commentsPosition'] === null) {
            $invalidProperties[] = "'commentsPosition' can't be null";
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['commentsPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'commentsPosition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['commentsAreaWidth'] === null) {
            $invalidProperties[] = "'commentsAreaWidth' can't be null";
        }
        if ($this->container['showCommentsByNoAuthor'] === null) {
            $invalidProperties[] = "'showCommentsByNoAuthor' can't be null";
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

        if ($this->container['showHiddenSlides'] === null) {
            return false;
        }
        if ($this->container['compressed'] === null) {
            return false;
        }
        if ($this->container['viewerIncluded'] === null) {
            return false;
        }
        if ($this->container['showPageBorder'] === null) {
            return false;
        }
        if ($this->container['showFullScreen'] === null) {
            return false;
        }
        if ($this->container['showPageStepper'] === null) {
            return false;
        }
        if ($this->container['showSearch'] === null) {
            return false;
        }
        if ($this->container['showTopPane'] === null) {
            return false;
        }
        if ($this->container['showBottomPane'] === null) {
            return false;
        }
        if ($this->container['showLeftPane'] === null) {
            return false;
        }
        if ($this->container['startOpenLeftPane'] === null) {
            return false;
        }
        if ($this->container['enableContextMenu'] === null) {
            return false;
        }
        if ($this->container['jpegQuality'] === null) {
            return false;
        }
        if ($this->container['notesPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notesPosition'], $allowedValues)) {
            return false;
        }
        if ($this->container['commentsPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['commentsPosition'], $allowedValues)) {
            return false;
        }
        if ($this->container['commentsAreaWidth'] === null) {
            return false;
        }
        if ($this->container['showCommentsByNoAuthor'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets showHiddenSlides
     *
     * @return bool
     */
    public function getShowHiddenSlides()
    {
        return $this->container['showHiddenSlides'];
    }

    /**
     * Sets showHiddenSlides
     *
     * @param bool $showHiddenSlides Specifies whether the generated document should include hidden slides or not. Default is false.
     *
     * @return $this
     */
    public function setShowHiddenSlides($showHiddenSlides)
    {
        $this->container['showHiddenSlides'] = $showHiddenSlides;

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
     * Gets viewerIncluded
     *
     * @return bool
     */
    public function getViewerIncluded()
    {
        return $this->container['viewerIncluded'];
    }

    /**
     * Sets viewerIncluded
     *
     * @param bool $viewerIncluded Specifies whether the generated SWF document should include the integrated document viewer or not. Default is true.
     *
     * @return $this
     */
    public function setViewerIncluded($viewerIncluded)
    {
        $this->container['viewerIncluded'] = $viewerIncluded;

        return $this;
    }

    /**
     * Gets showPageBorder
     *
     * @return bool
     */
    public function getShowPageBorder()
    {
        return $this->container['showPageBorder'];
    }

    /**
     * Sets showPageBorder
     *
     * @param bool $showPageBorder Specifies whether border around pages should be shown. Default is true.
     *
     * @return $this
     */
    public function setShowPageBorder($showPageBorder)
    {
        $this->container['showPageBorder'] = $showPageBorder;

        return $this;
    }

    /**
     * Gets showFullScreen
     *
     * @return bool
     */
    public function getShowFullScreen()
    {
        return $this->container['showFullScreen'];
    }

    /**
     * Sets showFullScreen
     *
     * @param bool $showFullScreen Show/hide fullscreen button. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowFullScreen($showFullScreen)
    {
        $this->container['showFullScreen'] = $showFullScreen;

        return $this;
    }

    /**
     * Gets showPageStepper
     *
     * @return bool
     */
    public function getShowPageStepper()
    {
        return $this->container['showPageStepper'];
    }

    /**
     * Sets showPageStepper
     *
     * @param bool $showPageStepper Show/hide page stepper. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowPageStepper($showPageStepper)
    {
        $this->container['showPageStepper'] = $showPageStepper;

        return $this;
    }

    /**
     * Gets showSearch
     *
     * @return bool
     */
    public function getShowSearch()
    {
        return $this->container['showSearch'];
    }

    /**
     * Sets showSearch
     *
     * @param bool $showSearch Show/hide search section. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowSearch($showSearch)
    {
        $this->container['showSearch'] = $showSearch;

        return $this;
    }

    /**
     * Gets showTopPane
     *
     * @return bool
     */
    public function getShowTopPane()
    {
        return $this->container['showTopPane'];
    }

    /**
     * Sets showTopPane
     *
     * @param bool $showTopPane Show/hide whole top pane. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowTopPane($showTopPane)
    {
        $this->container['showTopPane'] = $showTopPane;

        return $this;
    }

    /**
     * Gets showBottomPane
     *
     * @return bool
     */
    public function getShowBottomPane()
    {
        return $this->container['showBottomPane'];
    }

    /**
     * Sets showBottomPane
     *
     * @param bool $showBottomPane Show/hide bottom pane. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowBottomPane($showBottomPane)
    {
        $this->container['showBottomPane'] = $showBottomPane;

        return $this;
    }

    /**
     * Gets showLeftPane
     *
     * @return bool
     */
    public function getShowLeftPane()
    {
        return $this->container['showLeftPane'];
    }

    /**
     * Sets showLeftPane
     *
     * @param bool $showLeftPane Show/hide left pane. Can be overridden in flashvars. Default is true.
     *
     * @return $this
     */
    public function setShowLeftPane($showLeftPane)
    {
        $this->container['showLeftPane'] = $showLeftPane;

        return $this;
    }

    /**
     * Gets startOpenLeftPane
     *
     * @return bool
     */
    public function getStartOpenLeftPane()
    {
        return $this->container['startOpenLeftPane'];
    }

    /**
     * Sets startOpenLeftPane
     *
     * @param bool $startOpenLeftPane Start with opened left pane. Can be overridden in flashvars. Default is false.
     *
     * @return $this
     */
    public function setStartOpenLeftPane($startOpenLeftPane)
    {
        $this->container['startOpenLeftPane'] = $startOpenLeftPane;

        return $this;
    }

    /**
     * Gets enableContextMenu
     *
     * @return bool
     */
    public function getEnableContextMenu()
    {
        return $this->container['enableContextMenu'];
    }

    /**
     * Sets enableContextMenu
     *
     * @param bool $enableContextMenu Enable/disable context menu. Default is true.
     *
     * @return $this
     */
    public function setEnableContextMenu($enableContextMenu)
    {
        $this->container['enableContextMenu'] = $enableContextMenu;

        return $this;
    }

    /**
     * Gets logoImage
     *
     * @return string
     */
    public function getLogoImage()
    {
        return $this->container['logoImage'];
    }

    /**
     * Sets logoImage
     *
     * @param string $logoImage Image that will be displayed as logo in the top right corner of the viewer. The image data is a base 64 string. Image should be 32x64 pixels PNG image, otherwise logo can be displayed improperly.
     *
     * @return $this
     */
    public function setLogoImage($logoImage)
    {
        $this->container['logoImage'] = $logoImage;

        return $this;
    }

    /**
     * Gets logoLink
     *
     * @return string
     */
    public function getLogoLink()
    {
        return $this->container['logoLink'];
    }

    /**
     * Sets logoLink
     *
     * @param string $logoLink Gets or sets the full hyperlink address for a logo. Has an effect only if a LogoImage is specified.
     *
     * @return $this
     */
    public function setLogoLink($logoLink)
    {
        $this->container['logoLink'] = $logoLink;

        return $this;
    }

    /**
     * Gets jpegQuality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpegQuality'];
    }

    /**
     * Sets jpegQuality
     *
     * @param int $jpegQuality Specifies the quality of JPEG images. Default is 95.
     *
     * @return $this
     */
    public function setJpegQuality($jpegQuality)
    {
        $this->container['jpegQuality'] = $jpegQuality;

        return $this;
    }

    /**
     * Gets notesPosition
     *
     * @return string
     */
    public function getNotesPosition()
    {
        return $this->container['notesPosition'];
    }

    /**
     * Sets notesPosition
     *
     * @param string $notesPosition Gets or sets the position of the notes on the page.
     *
     * @return $this
     */
    public function setNotesPosition($notesPosition)
    {
        $allowedValues = $this->getNotesPositionAllowableValues();


        if (is_numeric($notesPosition)) {
            if ($notesPosition >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'notesPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $notesPosition = $allowedValues[$notesPosition];
            }
        } else {
            if (!in_array($notesPosition, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'notesPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['notesPosition'] = $notesPosition;

        return $this;
    }

    /**
     * Gets commentsPosition
     *
     * @return string
     */
    public function getCommentsPosition()
    {
        return $this->container['commentsPosition'];
    }

    /**
     * Sets commentsPosition
     *
     * @param string $commentsPosition Gets or sets the position of the comments on the page.
     *
     * @return $this
     */
    public function setCommentsPosition($commentsPosition)
    {
        $allowedValues = $this->getCommentsPositionAllowableValues();


        if (is_numeric($commentsPosition)) {
            if ($commentsPosition >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'commentsPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $commentsPosition = $allowedValues[$commentsPosition];
            }
        } else {
            if (!in_array($commentsPosition, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'commentsPosition', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['commentsPosition'] = $commentsPosition;

        return $this;
    }

    /**
     * Gets commentsAreaWidth
     *
     * @return int
     */
    public function getCommentsAreaWidth()
    {
        return $this->container['commentsAreaWidth'];
    }

    /**
     * Sets commentsAreaWidth
     *
     * @param int $commentsAreaWidth Gets or sets the width of the comment output area in pixels (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaWidth($commentsAreaWidth)
    {
        $this->container['commentsAreaWidth'] = $commentsAreaWidth;

        return $this;
    }

    /**
     * Gets commentsAreaColor
     *
     * @return string
     */
    public function getCommentsAreaColor()
    {
        return $this->container['commentsAreaColor'];
    }

    /**
     * Sets commentsAreaColor
     *
     * @param string $commentsAreaColor Gets or sets the color of comments area (Applies only if comments are displayed on the right).
     *
     * @return $this
     */
    public function setCommentsAreaColor($commentsAreaColor)
    {
        $this->container['commentsAreaColor'] = $commentsAreaColor;

        return $this;
    }

    /**
     * Gets showCommentsByNoAuthor
     *
     * @return bool
     */
    public function getShowCommentsByNoAuthor()
    {
        return $this->container['showCommentsByNoAuthor'];
    }

    /**
     * Sets showCommentsByNoAuthor
     *
     * @param bool $showCommentsByNoAuthor True if comments that have no author are displayed. (Applies only if comments are displayed).
     *
     * @return $this
     */
    public function setShowCommentsByNoAuthor($showCommentsByNoAuthor)
    {
        $this->container['showCommentsByNoAuthor'] = $showCommentsByNoAuthor;

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


