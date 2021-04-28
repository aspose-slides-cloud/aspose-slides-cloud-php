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
 * ProtectionProperties Class Doc Comment
 *
 * @category Class
 * @description Protection properties.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProtectionProperties extends ResourceBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProtectionProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'encryptDocumentProperties' => 'bool',
        'readOnlyRecommended' => 'bool',
        'readPassword' => 'string',
        'writePassword' => 'string',
        'isWriteProtected' => 'bool',
        'isEncrypted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'encryptDocumentProperties' => null,
        'readOnlyRecommended' => null,
        'readPassword' => null,
        'writePassword' => null,
        'isWriteProtected' => null,
        'isEncrypted' => null
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
        'encryptDocumentProperties' => 'EncryptDocumentProperties',
        'readOnlyRecommended' => 'ReadOnlyRecommended',
        'readPassword' => 'ReadPassword',
        'writePassword' => 'WritePassword',
        'isWriteProtected' => 'IsWriteProtected',
        'isEncrypted' => 'IsEncrypted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encryptDocumentProperties' => 'setEncryptDocumentProperties',
        'readOnlyRecommended' => 'setReadOnlyRecommended',
        'readPassword' => 'setReadPassword',
        'writePassword' => 'setWritePassword',
        'isWriteProtected' => 'setIsWriteProtected',
        'isEncrypted' => 'setIsEncrypted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encryptDocumentProperties' => 'getEncryptDocumentProperties',
        'readOnlyRecommended' => 'getReadOnlyRecommended',
        'readPassword' => 'getReadPassword',
        'writePassword' => 'getWritePassword',
        'isWriteProtected' => 'getIsWriteProtected',
        'isEncrypted' => 'getIsEncrypted'
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

        $this->container['encryptDocumentProperties'] = isset($data['encryptDocumentProperties']) ? $data['encryptDocumentProperties'] : null;
        $this->container['readOnlyRecommended'] = isset($data['readOnlyRecommended']) ? $data['readOnlyRecommended'] : null;
        $this->container['readPassword'] = isset($data['readPassword']) ? $data['readPassword'] : null;
        $this->container['writePassword'] = isset($data['writePassword']) ? $data['writePassword'] : null;
        $this->container['isWriteProtected'] = isset($data['isWriteProtected']) ? $data['isWriteProtected'] : null;
        $this->container['isEncrypted'] = isset($data['isEncrypted']) ? $data['isEncrypted'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['isWriteProtected'] === null) {
            $invalidProperties[] = "'isWriteProtected' can't be null";
        }
        if ($this->container['isEncrypted'] === null) {
            $invalidProperties[] = "'isEncrypted' can't be null";
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

        if ($this->container['isWriteProtected'] === null) {
            return false;
        }
        if ($this->container['isEncrypted'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets encryptDocumentProperties
     *
     * @return bool
     */
    public function getEncryptDocumentProperties()
    {
        return $this->container['encryptDocumentProperties'];
    }

    /**
     * Sets encryptDocumentProperties
     *
     * @param bool $encryptDocumentProperties True if document properties are encrypted. Has effect only for password protected presentations.
     *
     * @return $this
     */
    public function setEncryptDocumentProperties($encryptDocumentProperties)
    {
        $this->container['encryptDocumentProperties'] = $encryptDocumentProperties;

        return $this;
    }

    /**
     * Gets readOnlyRecommended
     *
     * @return bool
     */
    public function getReadOnlyRecommended()
    {
        return $this->container['readOnlyRecommended'];
    }

    /**
     * Sets readOnlyRecommended
     *
     * @param bool $readOnlyRecommended True if the document should be opened as read-only.
     *
     * @return $this
     */
    public function setReadOnlyRecommended($readOnlyRecommended)
    {
        $this->container['readOnlyRecommended'] = $readOnlyRecommended;

        return $this;
    }

    /**
     * Gets readPassword
     *
     * @return string
     */
    public function getReadPassword()
    {
        return $this->container['readPassword'];
    }

    /**
     * Sets readPassword
     *
     * @param string $readPassword Password for read protection.
     *
     * @return $this
     */
    public function setReadPassword($readPassword)
    {
        $this->container['readPassword'] = $readPassword;

        return $this;
    }

    /**
     * Gets writePassword
     *
     * @return string
     */
    public function getWritePassword()
    {
        return $this->container['writePassword'];
    }

    /**
     * Sets writePassword
     *
     * @param string $writePassword Password for write protection.
     *
     * @return $this
     */
    public function setWritePassword($writePassword)
    {
        $this->container['writePassword'] = $writePassword;

        return $this;
    }

    /**
     * Gets isWriteProtected
     *
     * @return bool
     */
    public function getIsWriteProtected()
    {
        return $this->container['isWriteProtected'];
    }

    /**
     * Sets isWriteProtected
     *
     * @param bool $isWriteProtected Returns true if the presentation protected for editing.
     *
     * @return $this
     */
    public function setIsWriteProtected($isWriteProtected)
    {
        $this->container['isWriteProtected'] = $isWriteProtected;

        return $this;
    }

    /**
     * Gets isEncrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->container['isEncrypted'];
    }

    /**
     * Sets isEncrypted
     *
     * @param bool $isEncrypted Returns true if the presentation protected for reading.
     *
     * @return $this
     */
    public function setIsEncrypted($isEncrypted)
    {
        $this->container['isEncrypted'] = $isEncrypted;

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


