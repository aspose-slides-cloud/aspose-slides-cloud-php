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
 * ViewProperties Class Doc Comment
 *
 * @category Class
 * @description Slides document properties.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ViewProperties extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ViewProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lastView' => 'string',
        'horizontalBarState' => 'string',
        'verticalBarState' => 'string',
        'preferSingleView' => 'bool',
        'restoredLeft' => '\Aspose\Slides\Cloud\Sdk\Model\NormalViewRestoredProperties',
        'restoredTop' => '\Aspose\Slides\Cloud\Sdk\Model\NormalViewRestoredProperties',
        'slideViewProperties' => '\Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties',
        'notesViewProperties' => '\Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties',
        'showComments' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lastView' => null,
        'horizontalBarState' => null,
        'verticalBarState' => null,
        'preferSingleView' => null,
        'restoredLeft' => null,
        'restoredTop' => null,
        'slideViewProperties' => null,
        'notesViewProperties' => null,
        'showComments' => null
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
        'lastView' => 'LastView',
        'horizontalBarState' => 'HorizontalBarState',
        'verticalBarState' => 'VerticalBarState',
        'preferSingleView' => 'PreferSingleView',
        'restoredLeft' => 'RestoredLeft',
        'restoredTop' => 'RestoredTop',
        'slideViewProperties' => 'SlideViewProperties',
        'notesViewProperties' => 'NotesViewProperties',
        'showComments' => 'ShowComments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lastView' => 'setLastView',
        'horizontalBarState' => 'setHorizontalBarState',
        'verticalBarState' => 'setVerticalBarState',
        'preferSingleView' => 'setPreferSingleView',
        'restoredLeft' => 'setRestoredLeft',
        'restoredTop' => 'setRestoredTop',
        'slideViewProperties' => 'setSlideViewProperties',
        'notesViewProperties' => 'setNotesViewProperties',
        'showComments' => 'setShowComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lastView' => 'getLastView',
        'horizontalBarState' => 'getHorizontalBarState',
        'verticalBarState' => 'getVerticalBarState',
        'preferSingleView' => 'getPreferSingleView',
        'restoredLeft' => 'getRestoredLeft',
        'restoredTop' => 'getRestoredTop',
        'slideViewProperties' => 'getSlideViewProperties',
        'notesViewProperties' => 'getNotesViewProperties',
        'showComments' => 'getShowComments'
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

    const LAST_VIEW_NOT_DEFINED = 'NotDefined';
    const LAST_VIEW_SLIDE_VIEW = 'SlideView';
    const LAST_VIEW_SLIDE_MASTER_VIEW = 'SlideMasterView';
    const LAST_VIEW_NOTES_VIEW = 'NotesView';
    const LAST_VIEW_HANDOUT_VIEW = 'HandoutView';
    const LAST_VIEW_NOTES_MASTER_VIEW = 'NotesMasterView';
    const LAST_VIEW_OUTLINE_VIEW = 'OutlineView';
    const LAST_VIEW_SLIDE_SORTER_VIEW = 'SlideSorterView';
    const LAST_VIEW_SLIDE_THUMBNAIL_VIEW = 'SlideThumbnailView';
    const HORIZONTAL_BAR_STATE_MINIMIZED = 'Minimized';
    const HORIZONTAL_BAR_STATE_RESTORED = 'Restored';
    const HORIZONTAL_BAR_STATE_MAXIMIZED = 'Maximized';
    const VERTICAL_BAR_STATE_MINIMIZED = 'Minimized';
    const VERTICAL_BAR_STATE_RESTORED = 'Restored';
    const VERTICAL_BAR_STATE_MAXIMIZED = 'Maximized';
    const SHOW_COMMENTS_FALSE = 'False';
    const SHOW_COMMENTS_TRUE = 'True';
    const SHOW_COMMENTS_NOT_DEFINED = 'NotDefined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLastViewAllowableValues()
    {
        return [
            self::LAST_VIEW_NOT_DEFINED,
            self::LAST_VIEW_SLIDE_VIEW,
            self::LAST_VIEW_SLIDE_MASTER_VIEW,
            self::LAST_VIEW_NOTES_VIEW,
            self::LAST_VIEW_HANDOUT_VIEW,
            self::LAST_VIEW_NOTES_MASTER_VIEW,
            self::LAST_VIEW_OUTLINE_VIEW,
            self::LAST_VIEW_SLIDE_SORTER_VIEW,
            self::LAST_VIEW_SLIDE_THUMBNAIL_VIEW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizontalBarStateAllowableValues()
    {
        return [
            self::HORIZONTAL_BAR_STATE_MINIMIZED,
            self::HORIZONTAL_BAR_STATE_RESTORED,
            self::HORIZONTAL_BAR_STATE_MAXIMIZED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalBarStateAllowableValues()
    {
        return [
            self::VERTICAL_BAR_STATE_MINIMIZED,
            self::VERTICAL_BAR_STATE_RESTORED,
            self::VERTICAL_BAR_STATE_MAXIMIZED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShowCommentsAllowableValues()
    {
        return [
            self::SHOW_COMMENTS_FALSE,
            self::SHOW_COMMENTS_TRUE,
            self::SHOW_COMMENTS_NOT_DEFINED,
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

        $this->container['lastView'] = isset($data['lastView']) ? $data['lastView'] : null;
        $this->container['horizontalBarState'] = isset($data['horizontalBarState']) ? $data['horizontalBarState'] : null;
        $this->container['verticalBarState'] = isset($data['verticalBarState']) ? $data['verticalBarState'] : null;
        $this->container['preferSingleView'] = isset($data['preferSingleView']) ? $data['preferSingleView'] : null;
        $this->container['restoredLeft'] = isset($data['restoredLeft']) ? $data['restoredLeft'] : null;
        $this->container['restoredTop'] = isset($data['restoredTop']) ? $data['restoredTop'] : null;
        $this->container['slideViewProperties'] = isset($data['slideViewProperties']) ? $data['slideViewProperties'] : null;
        $this->container['notesViewProperties'] = isset($data['notesViewProperties']) ? $data['notesViewProperties'] : null;
        $this->container['showComments'] = isset($data['showComments']) ? $data['showComments'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getLastViewAllowableValues();
        if (!in_array($this->container['lastView'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'lastView', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHorizontalBarStateAllowableValues();
        if (!in_array($this->container['horizontalBarState'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizontalBarState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVerticalBarStateAllowableValues();
        if (!in_array($this->container['verticalBarState'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verticalBarState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShowCommentsAllowableValues();
        if (!in_array($this->container['showComments'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'showComments', must be one of '%s'",
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

        $allowedValues = $this->getLastViewAllowableValues();
        if (!in_array($this->container['lastView'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHorizontalBarStateAllowableValues();
        if (!in_array($this->container['horizontalBarState'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVerticalBarStateAllowableValues();
        if (!in_array($this->container['verticalBarState'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getShowCommentsAllowableValues();
        if (!in_array($this->container['showComments'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets lastView
     *
     * @return string
     */
    public function getLastView()
    {
        return $this->container['lastView'];
    }

    /**
     * Sets lastView
     *
     * @param string $lastView Last used view mode.
     *
     * @return $this
     */
    public function setLastView($lastView)
    {
        $allowedValues = $this->getLastViewAllowableValues();


        if (is_numeric($lastView)) {
            if ($lastView >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'lastView', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $lastView = $allowedValues[$lastView];
            }
        } else {
            if (!is_null($lastView) && !in_array($lastView, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'lastView', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['lastView'] = $lastView;

        return $this;
    }

    /**
     * Gets horizontalBarState
     *
     * @return string
     */
    public function getHorizontalBarState()
    {
        return $this->container['horizontalBarState'];
    }

    /**
     * Sets horizontalBarState
     *
     * @param string $horizontalBarState Horizontal bar state.
     *
     * @return $this
     */
    public function setHorizontalBarState($horizontalBarState)
    {
        $allowedValues = $this->getHorizontalBarStateAllowableValues();


        if (is_numeric($horizontalBarState)) {
            if ($horizontalBarState >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'horizontalBarState', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $horizontalBarState = $allowedValues[$horizontalBarState];
            }
        } else {
            if (!is_null($horizontalBarState) && !in_array($horizontalBarState, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'horizontalBarState', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['horizontalBarState'] = $horizontalBarState;

        return $this;
    }

    /**
     * Gets verticalBarState
     *
     * @return string
     */
    public function getVerticalBarState()
    {
        return $this->container['verticalBarState'];
    }

    /**
     * Sets verticalBarState
     *
     * @param string $verticalBarState Vertical bar state.
     *
     * @return $this
     */
    public function setVerticalBarState($verticalBarState)
    {
        $allowedValues = $this->getVerticalBarStateAllowableValues();


        if (is_numeric($verticalBarState)) {
            if ($verticalBarState >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'verticalBarState', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $verticalBarState = $allowedValues[$verticalBarState];
            }
        } else {
            if (!is_null($verticalBarState) && !in_array($verticalBarState, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'verticalBarState', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['verticalBarState'] = $verticalBarState;

        return $this;
    }

    /**
     * Gets preferSingleView
     *
     * @return bool
     */
    public function getPreferSingleView()
    {
        return $this->container['preferSingleView'];
    }

    /**
     * Sets preferSingleView
     *
     * @param bool $preferSingleView True to prefer single view.
     *
     * @return $this
     */
    public function setPreferSingleView($preferSingleView)
    {
        $this->container['preferSingleView'] = $preferSingleView;

        return $this;
    }

    /**
     * Gets restoredLeft
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NormalViewRestoredProperties
     */
    public function getRestoredLeft()
    {
        return $this->container['restoredLeft'];
    }

    /**
     * Sets restoredLeft
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NormalViewRestoredProperties $restoredLeft The sizing of the side content region of the normal view, when the region is of a variable restored size.
     *
     * @return $this
     */
    public function setRestoredLeft($restoredLeft)
    {
        $this->container['restoredLeft'] = $restoredLeft;

        return $this;
    }

    /**
     * Gets restoredTop
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NormalViewRestoredProperties
     */
    public function getRestoredTop()
    {
        return $this->container['restoredTop'];
    }

    /**
     * Sets restoredTop
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NormalViewRestoredProperties $restoredTop The sizing of the top slide region of the normal view, when the region is of a variable restored size.
     *
     * @return $this
     */
    public function setRestoredTop($restoredTop)
    {
        $this->container['restoredTop'] = $restoredTop;

        return $this;
    }

    /**
     * Gets slideViewProperties
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties
     */
    public function getSlideViewProperties()
    {
        return $this->container['slideViewProperties'];
    }

    /**
     * Sets slideViewProperties
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties $slideViewProperties Slide view mode properties.
     *
     * @return $this
     */
    public function setSlideViewProperties($slideViewProperties)
    {
        $this->container['slideViewProperties'] = $slideViewProperties;

        return $this;
    }

    /**
     * Gets notesViewProperties
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties
     */
    public function getNotesViewProperties()
    {
        return $this->container['notesViewProperties'];
    }

    /**
     * Sets notesViewProperties
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CommonSlideViewProperties $notesViewProperties Notes view mode properties.
     *
     * @return $this
     */
    public function setNotesViewProperties($notesViewProperties)
    {
        $this->container['notesViewProperties'] = $notesViewProperties;

        return $this;
    }

    /**
     * Gets showComments
     *
     * @return string
     */
    public function getShowComments()
    {
        return $this->container['showComments'];
    }

    /**
     * Sets showComments
     *
     * @param string $showComments True if the comments should be shown.
     *
     * @return $this
     */
    public function setShowComments($showComments)
    {
        $allowedValues = $this->getShowCommentsAllowableValues();


        if (is_numeric($showComments)) {
            if ($showComments >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'showComments', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $showComments = $allowedValues[$showComments];
            }
        } else {
            if (!is_null($showComments) && !in_array($showComments, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'showComments', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['showComments'] = $showComments;

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


