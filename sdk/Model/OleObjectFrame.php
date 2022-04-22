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
 * OleObjectFrame Class Doc Comment
 *
 * @category Class
 * @description Represents OleObjectFrame resource.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OleObjectFrame extends ShapeBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OleObjectFrame';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isObjectIcon' => 'bool',
        'substitutePictureTitle' => 'string',
        'substitutePictureFormat' => '\Aspose\Slides\Cloud\Sdk\Model\PictureFill',
        'objectName' => 'string',
        'embeddedFileBase64Data' => 'string',
        'embeddedFileExtension' => 'string',
        'objectProgId' => 'string',
        'linkPath' => 'string',
        'updateAutomatic' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isObjectIcon' => null,
        'substitutePictureTitle' => null,
        'substitutePictureFormat' => null,
        'objectName' => null,
        'embeddedFileBase64Data' => null,
        'embeddedFileExtension' => null,
        'objectProgId' => null,
        'linkPath' => null,
        'updateAutomatic' => null
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
        'isObjectIcon' => 'IsObjectIcon',
        'substitutePictureTitle' => 'SubstitutePictureTitle',
        'substitutePictureFormat' => 'SubstitutePictureFormat',
        'objectName' => 'ObjectName',
        'embeddedFileBase64Data' => 'EmbeddedFileBase64Data',
        'embeddedFileExtension' => 'EmbeddedFileExtension',
        'objectProgId' => 'ObjectProgId',
        'linkPath' => 'LinkPath',
        'updateAutomatic' => 'UpdateAutomatic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isObjectIcon' => 'setIsObjectIcon',
        'substitutePictureTitle' => 'setSubstitutePictureTitle',
        'substitutePictureFormat' => 'setSubstitutePictureFormat',
        'objectName' => 'setObjectName',
        'embeddedFileBase64Data' => 'setEmbeddedFileBase64Data',
        'embeddedFileExtension' => 'setEmbeddedFileExtension',
        'objectProgId' => 'setObjectProgId',
        'linkPath' => 'setLinkPath',
        'updateAutomatic' => 'setUpdateAutomatic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isObjectIcon' => 'getIsObjectIcon',
        'substitutePictureTitle' => 'getSubstitutePictureTitle',
        'substitutePictureFormat' => 'getSubstitutePictureFormat',
        'objectName' => 'getObjectName',
        'embeddedFileBase64Data' => 'getEmbeddedFileBase64Data',
        'embeddedFileExtension' => 'getEmbeddedFileExtension',
        'objectProgId' => 'getObjectProgId',
        'linkPath' => 'getLinkPath',
        'updateAutomatic' => 'getUpdateAutomatic'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['isObjectIcon'] = isset($data['isObjectIcon']) ? $data['isObjectIcon'] : null;
        $this->container['substitutePictureTitle'] = isset($data['substitutePictureTitle']) ? $data['substitutePictureTitle'] : null;
        $this->container['substitutePictureFormat'] = isset($data['substitutePictureFormat']) ? $data['substitutePictureFormat'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['embeddedFileBase64Data'] = isset($data['embeddedFileBase64Data']) ? $data['embeddedFileBase64Data'] : null;
        $this->container['embeddedFileExtension'] = isset($data['embeddedFileExtension']) ? $data['embeddedFileExtension'] : null;
        $this->container['objectProgId'] = isset($data['objectProgId']) ? $data['objectProgId'] : null;
        $this->container['linkPath'] = isset($data['linkPath']) ? $data['linkPath'] : null;
        $this->container['updateAutomatic'] = isset($data['updateAutomatic']) ? $data['updateAutomatic'] : null;
        $this->container['type'] = 'OleObjectFrame';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['isObjectIcon'] === null) {
            $invalidProperties[] = "'isObjectIcon' can't be null";
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

        if ($this->container['isObjectIcon'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets isObjectIcon
     *
     * @return bool
     */
    public function getIsObjectIcon()
    {
        return $this->container['isObjectIcon'];
    }

    /**
     * Sets isObjectIcon
     *
     * @param bool $isObjectIcon True if an object is visible as icon.
     *
     * @return $this
     */
    public function setIsObjectIcon($isObjectIcon)
    {
        $this->container['isObjectIcon'] = $isObjectIcon;

        return $this;
    }

    /**
     * Gets substitutePictureTitle
     *
     * @return string
     */
    public function getSubstitutePictureTitle()
    {
        return $this->container['substitutePictureTitle'];
    }

    /**
     * Sets substitutePictureTitle
     *
     * @param string $substitutePictureTitle The title for OleObject icon.
     *
     * @return $this
     */
    public function setSubstitutePictureTitle($substitutePictureTitle)
    {
        $this->container['substitutePictureTitle'] = $substitutePictureTitle;

        return $this;
    }

    /**
     * Gets substitutePictureFormat
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\PictureFill
     */
    public function getSubstitutePictureFormat()
    {
        return $this->container['substitutePictureFormat'];
    }

    /**
     * Sets substitutePictureFormat
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\PictureFill $substitutePictureFormat OleObject image fill properties.
     *
     * @return $this
     */
    public function setSubstitutePictureFormat($substitutePictureFormat)
    {
        $this->container['substitutePictureFormat'] = $substitutePictureFormat;

        return $this;
    }

    /**
     * Gets objectName
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
     * Sets objectName
     *
     * @param string $objectName Returns or sets the name of an object.
     *
     * @return $this
     */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;

        return $this;
    }

    /**
     * Gets embeddedFileBase64Data
     *
     * @return string
     */
    public function getEmbeddedFileBase64Data()
    {
        return $this->container['embeddedFileBase64Data'];
    }

    /**
     * Sets embeddedFileBase64Data
     *
     * @param string $embeddedFileBase64Data File data of embedded OLE object.
     *
     * @return $this
     */
    public function setEmbeddedFileBase64Data($embeddedFileBase64Data)
    {
        $this->container['embeddedFileBase64Data'] = $embeddedFileBase64Data;

        return $this;
    }

    /**
     * Gets embeddedFileExtension
     *
     * @return string
     */
    public function getEmbeddedFileExtension()
    {
        return $this->container['embeddedFileExtension'];
    }

    /**
     * Sets embeddedFileExtension
     *
     * @param string $embeddedFileExtension File extension for the current embedded OLE object
     *
     * @return $this
     */
    public function setEmbeddedFileExtension($embeddedFileExtension)
    {
        $this->container['embeddedFileExtension'] = $embeddedFileExtension;

        return $this;
    }

    /**
     * Gets objectProgId
     *
     * @return string
     */
    public function getObjectProgId()
    {
        return $this->container['objectProgId'];
    }

    /**
     * Sets objectProgId
     *
     * @param string $objectProgId ProgID of an object.
     *
     * @return $this
     */
    public function setObjectProgId($objectProgId)
    {
        $this->container['objectProgId'] = $objectProgId;

        return $this;
    }

    /**
     * Gets linkPath
     *
     * @return string
     */
    public function getLinkPath()
    {
        return $this->container['linkPath'];
    }

    /**
     * Sets linkPath
     *
     * @param string $linkPath Full path to a linked file.
     *
     * @return $this
     */
    public function setLinkPath($linkPath)
    {
        $this->container['linkPath'] = $linkPath;

        return $this;
    }

    /**
     * Gets updateAutomatic
     *
     * @return bool
     */
    public function getUpdateAutomatic()
    {
        return $this->container['updateAutomatic'];
    }

    /**
     * Sets updateAutomatic
     *
     * @param bool $updateAutomatic Determines if the linked embedded object is automatically updated when the presentation is opened or printed. Read/write Boolean.
     *
     * @return $this
     */
    public function setUpdateAutomatic($updateAutomatic)
    {
        $this->container['updateAutomatic'] = $updateAutomatic;

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


