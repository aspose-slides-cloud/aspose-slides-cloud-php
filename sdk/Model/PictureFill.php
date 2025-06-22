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
 * PictureFill Class Doc Comment
 *
 * @category Class
 * @description Picture fill.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PictureFill extends FillFormat 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PictureFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cropBottom' => 'double',
        'cropLeft' => 'double',
        'cropRight' => 'double',
        'cropTop' => 'double',
        'dpi' => 'int',
        'tileOffsetX' => 'double',
        'tileOffsetY' => 'double',
        'tileScaleX' => 'double',
        'tileScaleY' => 'double',
        'tileAlignment' => 'string',
        'tileFlip' => 'string',
        'image' => '\Aspose\Slides\Cloud\Sdk\Model\ResourceUri',
        'base64Data' => 'string',
        'svgData' => 'string',
        'deletePictureCroppedAreas' => 'bool',
        'resolution' => 'double',
        'pictureFillMode' => 'string',
        'imageTransformList' => '\Aspose\Slides\Cloud\Sdk\Model\ImageTransformEffect[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cropBottom' => 'double',
        'cropLeft' => 'double',
        'cropRight' => 'double',
        'cropTop' => 'double',
        'dpi' => 'int32',
        'tileOffsetX' => 'double',
        'tileOffsetY' => 'double',
        'tileScaleX' => 'double',
        'tileScaleY' => 'double',
        'tileAlignment' => null,
        'tileFlip' => null,
        'image' => null,
        'base64Data' => null,
        'svgData' => null,
        'deletePictureCroppedAreas' => null,
        'resolution' => 'double',
        'pictureFillMode' => null,
        'imageTransformList' => null
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
        'cropBottom' => 'CropBottom',
        'cropLeft' => 'CropLeft',
        'cropRight' => 'CropRight',
        'cropTop' => 'CropTop',
        'dpi' => 'Dpi',
        'tileOffsetX' => 'TileOffsetX',
        'tileOffsetY' => 'TileOffsetY',
        'tileScaleX' => 'TileScaleX',
        'tileScaleY' => 'TileScaleY',
        'tileAlignment' => 'TileAlignment',
        'tileFlip' => 'TileFlip',
        'image' => 'Image',
        'base64Data' => 'Base64Data',
        'svgData' => 'SvgData',
        'deletePictureCroppedAreas' => 'DeletePictureCroppedAreas',
        'resolution' => 'Resolution',
        'pictureFillMode' => 'PictureFillMode',
        'imageTransformList' => 'ImageTransformList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cropBottom' => 'setCropBottom',
        'cropLeft' => 'setCropLeft',
        'cropRight' => 'setCropRight',
        'cropTop' => 'setCropTop',
        'dpi' => 'setDpi',
        'tileOffsetX' => 'setTileOffsetX',
        'tileOffsetY' => 'setTileOffsetY',
        'tileScaleX' => 'setTileScaleX',
        'tileScaleY' => 'setTileScaleY',
        'tileAlignment' => 'setTileAlignment',
        'tileFlip' => 'setTileFlip',
        'image' => 'setImage',
        'base64Data' => 'setBase64Data',
        'svgData' => 'setSvgData',
        'deletePictureCroppedAreas' => 'setDeletePictureCroppedAreas',
        'resolution' => 'setResolution',
        'pictureFillMode' => 'setPictureFillMode',
        'imageTransformList' => 'setImageTransformList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cropBottom' => 'getCropBottom',
        'cropLeft' => 'getCropLeft',
        'cropRight' => 'getCropRight',
        'cropTop' => 'getCropTop',
        'dpi' => 'getDpi',
        'tileOffsetX' => 'getTileOffsetX',
        'tileOffsetY' => 'getTileOffsetY',
        'tileScaleX' => 'getTileScaleX',
        'tileScaleY' => 'getTileScaleY',
        'tileAlignment' => 'getTileAlignment',
        'tileFlip' => 'getTileFlip',
        'image' => 'getImage',
        'base64Data' => 'getBase64Data',
        'svgData' => 'getSvgData',
        'deletePictureCroppedAreas' => 'getDeletePictureCroppedAreas',
        'resolution' => 'getResolution',
        'pictureFillMode' => 'getPictureFillMode',
        'imageTransformList' => 'getImageTransformList'
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

    const TILE_ALIGNMENT_TOP_LEFT = 'TopLeft';
    const TILE_ALIGNMENT_TOP = 'Top';
    const TILE_ALIGNMENT_TOP_RIGHT = 'TopRight';
    const TILE_ALIGNMENT_LEFT = 'Left';
    const TILE_ALIGNMENT_CENTER = 'Center';
    const TILE_ALIGNMENT_RIGHT = 'Right';
    const TILE_ALIGNMENT_BOTTOM_LEFT = 'BottomLeft';
    const TILE_ALIGNMENT_BOTTOM = 'Bottom';
    const TILE_ALIGNMENT_BOTTOM_RIGHT = 'BottomRight';
    const TILE_ALIGNMENT_NOT_DEFINED = 'NotDefined';
    const TILE_FLIP_NO_FLIP = 'NoFlip';
    const TILE_FLIP_FLIP_X = 'FlipX';
    const TILE_FLIP_FLIP_Y = 'FlipY';
    const TILE_FLIP_FLIP_BOTH = 'FlipBoth';
    const TILE_FLIP_NOT_DEFINED = 'NotDefined';
    const PICTURE_FILL_MODE_TILE = 'Tile';
    const PICTURE_FILL_MODE_STRETCH = 'Stretch';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTileAlignmentAllowableValues()
    {
        return [
            self::TILE_ALIGNMENT_TOP_LEFT,
            self::TILE_ALIGNMENT_TOP,
            self::TILE_ALIGNMENT_TOP_RIGHT,
            self::TILE_ALIGNMENT_LEFT,
            self::TILE_ALIGNMENT_CENTER,
            self::TILE_ALIGNMENT_RIGHT,
            self::TILE_ALIGNMENT_BOTTOM_LEFT,
            self::TILE_ALIGNMENT_BOTTOM,
            self::TILE_ALIGNMENT_BOTTOM_RIGHT,
            self::TILE_ALIGNMENT_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTileFlipAllowableValues()
    {
        return [
            self::TILE_FLIP_NO_FLIP,
            self::TILE_FLIP_FLIP_X,
            self::TILE_FLIP_FLIP_Y,
            self::TILE_FLIP_FLIP_BOTH,
            self::TILE_FLIP_NOT_DEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPictureFillModeAllowableValues()
    {
        return [
            self::PICTURE_FILL_MODE_TILE,
            self::PICTURE_FILL_MODE_STRETCH,
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

        $this->container['cropBottom'] = isset($data['cropBottom']) ? $data['cropBottom'] : null;
        $this->container['cropLeft'] = isset($data['cropLeft']) ? $data['cropLeft'] : null;
        $this->container['cropRight'] = isset($data['cropRight']) ? $data['cropRight'] : null;
        $this->container['cropTop'] = isset($data['cropTop']) ? $data['cropTop'] : null;
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['tileOffsetX'] = isset($data['tileOffsetX']) ? $data['tileOffsetX'] : null;
        $this->container['tileOffsetY'] = isset($data['tileOffsetY']) ? $data['tileOffsetY'] : null;
        $this->container['tileScaleX'] = isset($data['tileScaleX']) ? $data['tileScaleX'] : null;
        $this->container['tileScaleY'] = isset($data['tileScaleY']) ? $data['tileScaleY'] : null;
        $this->container['tileAlignment'] = isset($data['tileAlignment']) ? $data['tileAlignment'] : null;
        $this->container['tileFlip'] = isset($data['tileFlip']) ? $data['tileFlip'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['base64Data'] = isset($data['base64Data']) ? $data['base64Data'] : null;
        $this->container['svgData'] = isset($data['svgData']) ? $data['svgData'] : null;
        $this->container['deletePictureCroppedAreas'] = isset($data['deletePictureCroppedAreas']) ? $data['deletePictureCroppedAreas'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['pictureFillMode'] = isset($data['pictureFillMode']) ? $data['pictureFillMode'] : null;
        $this->container['imageTransformList'] = isset($data['imageTransformList']) ? $data['imageTransformList'] : null;
        $this->container['type'] = 'Picture';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['cropBottom'] === null) {
            $invalidProperties[] = "'cropBottom' can't be null";
        }
        if ($this->container['cropLeft'] === null) {
            $invalidProperties[] = "'cropLeft' can't be null";
        }
        if ($this->container['cropRight'] === null) {
            $invalidProperties[] = "'cropRight' can't be null";
        }
        if ($this->container['cropTop'] === null) {
            $invalidProperties[] = "'cropTop' can't be null";
        }
        if ($this->container['dpi'] === null) {
            $invalidProperties[] = "'dpi' can't be null";
        }
        $allowedValues = $this->getTileAlignmentAllowableValues();
        if (!in_array($this->container['tileAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tileAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($this->container['tileFlip'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tileFlip', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pictureFillMode'] === null) {
            $invalidProperties[] = "'pictureFillMode' can't be null";
        }
        $allowedValues = $this->getPictureFillModeAllowableValues();
        if (!in_array($this->container['pictureFillMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pictureFillMode', must be one of '%s'",
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

        if ($this->container['cropBottom'] === null) {
            return false;
        }
        if ($this->container['cropLeft'] === null) {
            return false;
        }
        if ($this->container['cropRight'] === null) {
            return false;
        }
        if ($this->container['cropTop'] === null) {
            return false;
        }
        if ($this->container['dpi'] === null) {
            return false;
        }
        $allowedValues = $this->getTileAlignmentAllowableValues();
        if (!in_array($this->container['tileAlignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTileFlipAllowableValues();
        if (!in_array($this->container['tileFlip'], $allowedValues)) {
            return false;
        }
        if ($this->container['pictureFillMode'] === null) {
            return false;
        }
        $allowedValues = $this->getPictureFillModeAllowableValues();
        if (!in_array($this->container['pictureFillMode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets cropBottom
     *
     * @return double
     */
    public function getCropBottom()
    {
        return $this->container['cropBottom'];
    }

    /**
     * Sets cropBottom
     *
     * @param double $cropBottom Percentage of image height that is cropped from the bottom.
     *
     * @return $this
     */
    public function setCropBottom($cropBottom)
    {
        $this->container['cropBottom'] = $cropBottom;

        return $this;
    }

    /**
     * Gets cropLeft
     *
     * @return double
     */
    public function getCropLeft()
    {
        return $this->container['cropLeft'];
    }

    /**
     * Sets cropLeft
     *
     * @param double $cropLeft Percentage of image height that is cropped from the left.
     *
     * @return $this
     */
    public function setCropLeft($cropLeft)
    {
        $this->container['cropLeft'] = $cropLeft;

        return $this;
    }

    /**
     * Gets cropRight
     *
     * @return double
     */
    public function getCropRight()
    {
        return $this->container['cropRight'];
    }

    /**
     * Sets cropRight
     *
     * @param double $cropRight Percentage of image height that is cropped from the right.
     *
     * @return $this
     */
    public function setCropRight($cropRight)
    {
        $this->container['cropRight'] = $cropRight;

        return $this;
    }

    /**
     * Gets cropTop
     *
     * @return double
     */
    public function getCropTop()
    {
        return $this->container['cropTop'];
    }

    /**
     * Sets cropTop
     *
     * @param double $cropTop Percentage of image height that is cropped from the top.
     *
     * @return $this
     */
    public function setCropTop($cropTop)
    {
        $this->container['cropTop'] = $cropTop;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return int
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param int $dpi Picture resolution.
     *
     * @return $this
     */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets tileOffsetX
     *
     * @return double
     */
    public function getTileOffsetX()
    {
        return $this->container['tileOffsetX'];
    }

    /**
     * Sets tileOffsetX
     *
     * @param double $tileOffsetX The horizontal offset of the texture from the shape's origin in points. A positive value moves the texture to the right, while a negative value moves it to the left.
     *
     * @return $this
     */
    public function setTileOffsetX($tileOffsetX)
    {
        $this->container['tileOffsetX'] = $tileOffsetX;

        return $this;
    }

    /**
     * Gets tileOffsetY
     *
     * @return double
     */
    public function getTileOffsetY()
    {
        return $this->container['tileOffsetY'];
    }

    /**
     * Sets tileOffsetY
     *
     * @param double $tileOffsetY The vertical offset of the texture from the shape's origin in points. A positive value moves the texture down, while a negative value moves it up.
     *
     * @return $this
     */
    public function setTileOffsetY($tileOffsetY)
    {
        $this->container['tileOffsetY'] = $tileOffsetY;

        return $this;
    }

    /**
     * Gets tileScaleX
     *
     * @return double
     */
    public function getTileScaleX()
    {
        return $this->container['tileScaleX'];
    }

    /**
     * Sets tileScaleX
     *
     * @param double $tileScaleX The horizontal scale for the texture fill as a percentage.
     *
     * @return $this
     */
    public function setTileScaleX($tileScaleX)
    {
        $this->container['tileScaleX'] = $tileScaleX;

        return $this;
    }

    /**
     * Gets tileScaleY
     *
     * @return double
     */
    public function getTileScaleY()
    {
        return $this->container['tileScaleY'];
    }

    /**
     * Sets tileScaleY
     *
     * @param double $tileScaleY The vertical scale for the texture fill as a percentage.
     *
     * @return $this
     */
    public function setTileScaleY($tileScaleY)
    {
        $this->container['tileScaleY'] = $tileScaleY;

        return $this;
    }

    /**
     * Gets tileAlignment
     *
     * @return string
     */
    public function getTileAlignment()
    {
        return $this->container['tileAlignment'];
    }

    /**
     * Sets tileAlignment
     *
     * @param string $tileAlignment The way texture is aligned within the shape. This setting controls the starting point of the texture pattern and how it repeats across the shape.
     *
     * @return $this
     */
    public function setTileAlignment($tileAlignment)
    {
        $allowedValues = $this->getTileAlignmentAllowableValues();


        if (is_numeric($tileAlignment)) {
            if ($tileAlignment >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tileAlignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $tileAlignment = $allowedValues[$tileAlignment];
            }
        } else {
            if (!is_null($tileAlignment) && !in_array($tileAlignment, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tileAlignment', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['tileAlignment'] = $tileAlignment;

        return $this;
    }

    /**
     * Gets tileFlip
     *
     * @return string
     */
    public function getTileFlip()
    {
        return $this->container['tileFlip'];
    }

    /**
     * Sets tileFlip
     *
     * @param string $tileFlip Flips the texture tile around its horizontal, vertical or both axis.
     *
     * @return $this
     */
    public function setTileFlip($tileFlip)
    {
        $allowedValues = $this->getTileFlipAllowableValues();


        if (is_numeric($tileFlip)) {
            if ($tileFlip >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tileFlip', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $tileFlip = $allowedValues[$tileFlip];
            }
        } else {
            if (!is_null($tileFlip) && !in_array($tileFlip, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'tileFlip', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['tileFlip'] = $tileFlip;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ResourceUri
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ResourceUri $image Internal image link.
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets base64Data
     *
     * @return string
     */
    public function getBase64Data()
    {
        return $this->container['base64Data'];
    }

    /**
     * Sets base64Data
     *
     * @param string $base64Data Base 64 image data.
     *
     * @return $this
     */
    public function setBase64Data($base64Data)
    {
        $this->container['base64Data'] = $base64Data;

        return $this;
    }

    /**
     * Gets svgData
     *
     * @return string
     */
    public function getSvgData()
    {
        return $this->container['svgData'];
    }

    /**
     * Sets svgData
     *
     * @param string $svgData SVG image data.
     *
     * @return $this
     */
    public function setSvgData($svgData)
    {
        $this->container['svgData'] = $svgData;

        return $this;
    }

    /**
     * Gets deletePictureCroppedAreas
     *
     * @return bool
     */
    public function getDeletePictureCroppedAreas()
    {
        return $this->container['deletePictureCroppedAreas'];
    }

    /**
     * Sets deletePictureCroppedAreas
     *
     * @param bool $deletePictureCroppedAreas true to delete picture cropped areas on save.
     *
     * @return $this
     */
    public function setDeletePictureCroppedAreas($deletePictureCroppedAreas)
    {
        $this->container['deletePictureCroppedAreas'] = $deletePictureCroppedAreas;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return double
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param double $resolution true to compress the picture image with the specified resolution (in dpi) on save.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets pictureFillMode
     *
     * @return string
     */
    public function getPictureFillMode()
    {
        return $this->container['pictureFillMode'];
    }

    /**
     * Sets pictureFillMode
     *
     * @param string $pictureFillMode Fill mode.
     *
     * @return $this
     */
    public function setPictureFillMode($pictureFillMode)
    {
        $allowedValues = $this->getPictureFillModeAllowableValues();


        if (is_numeric($pictureFillMode)) {
            if ($pictureFillMode >= sizeof($allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pictureFillMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
                $pictureFillMode = $allowedValues[$pictureFillMode];
            }
        } else {
            if (!in_array($pictureFillMode, $allowedValues)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value for 'pictureFillMode', must be one of '%s'",
                        implode("', '", $allowedValues)
                    )
                );
            }
        }
        $this->container['pictureFillMode'] = $pictureFillMode;

        return $this;
    }

    /**
     * Gets imageTransformList
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ImageTransformEffect[]
     */
    public function getImageTransformList()
    {
        return $this->container['imageTransformList'];
    }

    /**
     * Sets imageTransformList
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ImageTransformEffect[] $imageTransformList Image transform effects.
     *
     * @return $this
     */
    public function setImageTransformList($imageTransformList)
    {
        $this->container['imageTransformList'] = $imageTransformList;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
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
    public function offsetGet($offset) : mixed
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
    public function offsetSet($offset, $value) : void
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
    public function offsetUnset($offset) : void
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


