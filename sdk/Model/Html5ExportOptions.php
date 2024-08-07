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
 * Html5ExportOptions Class Doc Comment
 *
 * @category Class
 * @description Provides options that control how a presentation is saved in Html5 format.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Html5ExportOptions extends ExportOptions 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Html5ExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'animateTransitions' => 'bool',
        'animateShapes' => 'bool',
        'embedImages' => 'bool',
        'notesCommentsLayouting' => '\Aspose\Slides\Cloud\Sdk\Model\NotesCommentsLayoutingOptions',
        'templatesPath' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'animateTransitions' => null,
        'animateShapes' => null,
        'embedImages' => null,
        'notesCommentsLayouting' => null,
        'templatesPath' => null
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
        'animateTransitions' => 'AnimateTransitions',
        'animateShapes' => 'AnimateShapes',
        'embedImages' => 'EmbedImages',
        'notesCommentsLayouting' => 'NotesCommentsLayouting',
        'templatesPath' => 'TemplatesPath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'animateTransitions' => 'setAnimateTransitions',
        'animateShapes' => 'setAnimateShapes',
        'embedImages' => 'setEmbedImages',
        'notesCommentsLayouting' => 'setNotesCommentsLayouting',
        'templatesPath' => 'setTemplatesPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'animateTransitions' => 'getAnimateTransitions',
        'animateShapes' => 'getAnimateShapes',
        'embedImages' => 'getEmbedImages',
        'notesCommentsLayouting' => 'getNotesCommentsLayouting',
        'templatesPath' => 'getTemplatesPath'
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

        $this->container['animateTransitions'] = isset($data['animateTransitions']) ? $data['animateTransitions'] : null;
        $this->container['animateShapes'] = isset($data['animateShapes']) ? $data['animateShapes'] : null;
        $this->container['embedImages'] = isset($data['embedImages']) ? $data['embedImages'] : null;
        $this->container['notesCommentsLayouting'] = isset($data['notesCommentsLayouting']) ? $data['notesCommentsLayouting'] : null;
        $this->container['templatesPath'] = isset($data['templatesPath']) ? $data['templatesPath'] : null;
        $this->container['format'] = 'html5';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets animateTransitions
     *
     * @return bool
     */
    public function getAnimateTransitions()
    {
        return $this->container['animateTransitions'];
    }

    /**
     * Sets animateTransitions
     *
     * @param bool $animateTransitions Gets or sets transitions animation option.
     *
     * @return $this
     */
    public function setAnimateTransitions($animateTransitions)
    {
        $this->container['animateTransitions'] = $animateTransitions;

        return $this;
    }

    /**
     * Gets animateShapes
     *
     * @return bool
     */
    public function getAnimateShapes()
    {
        return $this->container['animateShapes'];
    }

    /**
     * Sets animateShapes
     *
     * @param bool $animateShapes Gets or sets shapes animation option.
     *
     * @return $this
     */
    public function setAnimateShapes($animateShapes)
    {
        $this->container['animateShapes'] = $animateShapes;

        return $this;
    }

    /**
     * Gets embedImages
     *
     * @return bool
     */
    public function getEmbedImages()
    {
        return $this->container['embedImages'];
    }

    /**
     * Sets embedImages
     *
     * @param bool $embedImages Gets or sets embed images option.
     *
     * @return $this
     */
    public function setEmbedImages($embedImages)
    {
        $this->container['embedImages'] = $embedImages;

        return $this;
    }

    /**
     * Gets notesCommentsLayouting
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\NotesCommentsLayoutingOptions
     */
    public function getNotesCommentsLayouting()
    {
        return $this->container['notesCommentsLayouting'];
    }

    /**
     * Sets notesCommentsLayouting
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\NotesCommentsLayoutingOptions $notesCommentsLayouting Slides layouting options
     *
     * @return $this
     */
    public function setNotesCommentsLayouting($notesCommentsLayouting)
    {
        $this->container['notesCommentsLayouting'] = $notesCommentsLayouting;

        return $this;
    }

    /**
     * Gets templatesPath
     *
     * @return string
     */
    public function getTemplatesPath()
    {
        return $this->container['templatesPath'];
    }

    /**
     * Sets templatesPath
     *
     * @param string $templatesPath Path to custom templates
     *
     * @return $this
     */
    public function setTemplatesPath($templatesPath)
    {
        $this->container['templatesPath'] = $templatesPath;

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


