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


use \ArrayAccess;
use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * AccessPermissions Class Doc Comment
 *
 * @category Class
 * @description A set of properties specifying which access permissions should be granted when the document is opened with user access.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessPermissions implements ArrayAccess
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessPermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'printDocument' => 'bool',
        'modifyContent' => 'bool',
        'copyTextAndGraphics' => 'bool',
        'addOrModifyFields' => 'bool',
        'fillExistingFields' => 'bool',
        'extractTextAndGraphics' => 'bool',
        'assembleDocument' => 'bool',
        'highQualityPrint' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'printDocument' => null,
        'modifyContent' => null,
        'copyTextAndGraphics' => null,
        'addOrModifyFields' => null,
        'fillExistingFields' => null,
        'extractTextAndGraphics' => null,
        'assembleDocument' => null,
        'highQualityPrint' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'printDocument' => 'PrintDocument',
        'modifyContent' => 'ModifyContent',
        'copyTextAndGraphics' => 'CopyTextAndGraphics',
        'addOrModifyFields' => 'AddOrModifyFields',
        'fillExistingFields' => 'FillExistingFields',
        'extractTextAndGraphics' => 'ExtractTextAndGraphics',
        'assembleDocument' => 'AssembleDocument',
        'highQualityPrint' => 'HighQualityPrint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'printDocument' => 'setPrintDocument',
        'modifyContent' => 'setModifyContent',
        'copyTextAndGraphics' => 'setCopyTextAndGraphics',
        'addOrModifyFields' => 'setAddOrModifyFields',
        'fillExistingFields' => 'setFillExistingFields',
        'extractTextAndGraphics' => 'setExtractTextAndGraphics',
        'assembleDocument' => 'setAssembleDocument',
        'highQualityPrint' => 'setHighQualityPrint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'printDocument' => 'getPrintDocument',
        'modifyContent' => 'getModifyContent',
        'copyTextAndGraphics' => 'getCopyTextAndGraphics',
        'addOrModifyFields' => 'getAddOrModifyFields',
        'fillExistingFields' => 'getFillExistingFields',
        'extractTextAndGraphics' => 'getExtractTextAndGraphics',
        'assembleDocument' => 'getAssembleDocument',
        'highQualityPrint' => 'getHighQualityPrint'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['printDocument'] = isset($data['printDocument']) ? $data['printDocument'] : null;
        $this->container['modifyContent'] = isset($data['modifyContent']) ? $data['modifyContent'] : null;
        $this->container['copyTextAndGraphics'] = isset($data['copyTextAndGraphics']) ? $data['copyTextAndGraphics'] : null;
        $this->container['addOrModifyFields'] = isset($data['addOrModifyFields']) ? $data['addOrModifyFields'] : null;
        $this->container['fillExistingFields'] = isset($data['fillExistingFields']) ? $data['fillExistingFields'] : null;
        $this->container['extractTextAndGraphics'] = isset($data['extractTextAndGraphics']) ? $data['extractTextAndGraphics'] : null;
        $this->container['assembleDocument'] = isset($data['assembleDocument']) ? $data['assembleDocument'] : null;
        $this->container['highQualityPrint'] = isset($data['highQualityPrint']) ? $data['highQualityPrint'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['printDocument'] === null) {
            $invalidProperties[] = "'printDocument' can't be null";
        }
        if ($this->container['modifyContent'] === null) {
            $invalidProperties[] = "'modifyContent' can't be null";
        }
        if ($this->container['copyTextAndGraphics'] === null) {
            $invalidProperties[] = "'copyTextAndGraphics' can't be null";
        }
        if ($this->container['addOrModifyFields'] === null) {
            $invalidProperties[] = "'addOrModifyFields' can't be null";
        }
        if ($this->container['fillExistingFields'] === null) {
            $invalidProperties[] = "'fillExistingFields' can't be null";
        }
        if ($this->container['extractTextAndGraphics'] === null) {
            $invalidProperties[] = "'extractTextAndGraphics' can't be null";
        }
        if ($this->container['assembleDocument'] === null) {
            $invalidProperties[] = "'assembleDocument' can't be null";
        }
        if ($this->container['highQualityPrint'] === null) {
            $invalidProperties[] = "'highQualityPrint' can't be null";
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

        if ($this->container['printDocument'] === null) {
            return false;
        }
        if ($this->container['modifyContent'] === null) {
            return false;
        }
        if ($this->container['copyTextAndGraphics'] === null) {
            return false;
        }
        if ($this->container['addOrModifyFields'] === null) {
            return false;
        }
        if ($this->container['fillExistingFields'] === null) {
            return false;
        }
        if ($this->container['extractTextAndGraphics'] === null) {
            return false;
        }
        if ($this->container['assembleDocument'] === null) {
            return false;
        }
        if ($this->container['highQualityPrint'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets printDocument
     *
     * @return bool
     */
    public function getPrintDocument()
    {
        return $this->container['printDocument'];
    }

    /**
     * Sets printDocument
     *
     * @param bool $printDocument The user may print the document (possibly not at the highest quality level, depending on whether bit HighQualityPrint is also set).
     *
     * @return $this
     */
    public function setPrintDocument($printDocument)
    {
        $this->container['printDocument'] = $printDocument;

        return $this;
    }

    /**
     * Gets modifyContent
     *
     * @return bool
     */
    public function getModifyContent()
    {
        return $this->container['modifyContent'];
    }

    /**
     * Sets modifyContent
     *
     * @param bool $modifyContent The user may modify the contents of the document by operations other than those controlled by bits AddOrModifyFields, FillExistingFields, AssembleDocument.
     *
     * @return $this
     */
    public function setModifyContent($modifyContent)
    {
        $this->container['modifyContent'] = $modifyContent;

        return $this;
    }

    /**
     * Gets copyTextAndGraphics
     *
     * @return bool
     */
    public function getCopyTextAndGraphics()
    {
        return $this->container['copyTextAndGraphics'];
    }

    /**
     * Sets copyTextAndGraphics
     *
     * @param bool $copyTextAndGraphics The user may copy or otherwise extract text and graphics from the document by operations other than that controlled by bit ExtractTextAndGraphics.
     *
     * @return $this
     */
    public function setCopyTextAndGraphics($copyTextAndGraphics)
    {
        $this->container['copyTextAndGraphics'] = $copyTextAndGraphics;

        return $this;
    }

    /**
     * Gets addOrModifyFields
     *
     * @return bool
     */
    public function getAddOrModifyFields()
    {
        return $this->container['addOrModifyFields'];
    }

    /**
     * Sets addOrModifyFields
     *
     * @param bool $addOrModifyFields The user may add or modify text annotations, fill in interactive form fields, and, if bit ModifyContent is also set, create or modify interactive form fields (including signature fields).
     *
     * @return $this
     */
    public function setAddOrModifyFields($addOrModifyFields)
    {
        $this->container['addOrModifyFields'] = $addOrModifyFields;

        return $this;
    }

    /**
     * Gets fillExistingFields
     *
     * @return bool
     */
    public function getFillExistingFields()
    {
        return $this->container['fillExistingFields'];
    }

    /**
     * Sets fillExistingFields
     *
     * @param bool $fillExistingFields The user may fill in existing interactive form fields (including signature fields), even if bit AddOrModifyFields is clear.
     *
     * @return $this
     */
    public function setFillExistingFields($fillExistingFields)
    {
        $this->container['fillExistingFields'] = $fillExistingFields;

        return $this;
    }

    /**
     * Gets extractTextAndGraphics
     *
     * @return bool
     */
    public function getExtractTextAndGraphics()
    {
        return $this->container['extractTextAndGraphics'];
    }

    /**
     * Sets extractTextAndGraphics
     *
     * @param bool $extractTextAndGraphics The user may extract text and graphics in support of accessibility to users with disabilities or for other purposes.
     *
     * @return $this
     */
    public function setExtractTextAndGraphics($extractTextAndGraphics)
    {
        $this->container['extractTextAndGraphics'] = $extractTextAndGraphics;

        return $this;
    }

    /**
     * Gets assembleDocument
     *
     * @return bool
     */
    public function getAssembleDocument()
    {
        return $this->container['assembleDocument'];
    }

    /**
     * Sets assembleDocument
     *
     * @param bool $assembleDocument The user may assemble the document (insert, rotate, or delete pages and create bookmarks or thumbnail images), even if bit ModifyContent is clear.
     *
     * @return $this
     */
    public function setAssembleDocument($assembleDocument)
    {
        $this->container['assembleDocument'] = $assembleDocument;

        return $this;
    }

    /**
     * Gets highQualityPrint
     *
     * @return bool
     */
    public function getHighQualityPrint()
    {
        return $this->container['highQualityPrint'];
    }

    /**
     * Sets highQualityPrint
     *
     * @param bool $highQualityPrint The user may print the document to a representation from which a faithful digital copy of the PDF content could be generated. When this bit is clear (and bit PrintDocument is set), printing is limited to a low-level representation of the appearance, possibly of degraded quality.
     *
     * @return $this
     */
    public function setHighQualityPrint($highQualityPrint)
    {
        $this->container['highQualityPrint'] = $highQualityPrint;

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


