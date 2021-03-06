<?php
/**
 * Accessory
 *
 * PHP version 5
 *
 * @category Class
 * @package  Boracomputer\ITScope
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ITscope - Interactive API V20
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * Contact: support@itscope.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Boracomputer\ITScope\Model;

use \ArrayAccess;
use \Boracomputer\ITScope\ObjectSerializer;

/**
 * Accessory Class Doc Comment
 *
 * @category Class
 * @description &lt;a href&#x3D;\&quot;https://support.itscope.com/hc/de/articles/206032592\&quot;&gt;Originalzubehör und kompatibles Zubehör&lt;/a&gt; zu einem Produkt
 * @package  Boracomputer\ITScope
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Accessory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accessory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'referenced_product_id' => 'int',
        'type_id' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'referenced_product_id' => 'int64',
        'type_id' => 'int32',
        'type' => null
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
        'referenced_product_id' => 'referencedProductId',
        'type_id' => 'typeId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referenced_product_id' => 'setReferencedProductId',
        'type_id' => 'setTypeId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referenced_product_id' => 'getReferencedProductId',
        'type_id' => 'getTypeId',
        'type' => 'getType'
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
        $this->container['referenced_product_id'] = isset($data['referenced_product_id']) ? $data['referenced_product_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['type']) && (strlen($this->container['type']) > 255)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['type']) && (strlen($this->container['type']) < 0)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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

        if (strlen($this->container['type']) > 255) {
            return false;
        }
        if (strlen($this->container['type']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets referenced_product_id
     *
     * @return int
     */
    public function getReferencedProductId()
    {
        return $this->container['referenced_product_id'];
    }

    /**
     * Sets referenced_product_id
     *
     * @param int $referenced_product_id Referenz auf ein Bezugsprodukt, z.B. ein Produkt das als Originalzubehör geführt wird
     *
     * @return $this
     */
    public function setReferencedProductId($referenced_product_id)
    {
        $this->container['referenced_product_id'] = $referenced_product_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id Interne Kennung für die <a href=\"https://support.itscope.com/hc/de/articles/206032592\">Art des Bezugsproduktes</a>
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Bezeichner für die <a href=\"https://support.itscope.com/hc/de/articles/206032592\">Art des Bezugsproduktes</a>, z.B. Original-Zubehör, Kompatibles Zubehör, usw.
     *
     * @return $this
     */
    public function setType($type)
    {
        if (!is_null($type) && (strlen($type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $type when calling Accessory., must be smaller than or equal to 255.');
        }
        if (!is_null($type) && (strlen($type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $type when calling Accessory., must be bigger than or equal to 0.');
        }

        $this->container['type'] = $type;

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


