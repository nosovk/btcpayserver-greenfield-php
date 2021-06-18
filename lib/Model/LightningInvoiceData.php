<?php
/**
 * LightningInvoiceData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BTCPay Greenfield API
 *
 * A full API to use your BTCPay Server
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LightningInvoiceData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LightningInvoiceData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LightningInvoiceData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'status' => '\Swagger\Client\Model\LightningInvoiceStatus',
'bolt11' => 'string',
'paid_at' => 'AllOfLightningInvoiceDataPaidAt',
'expires_at' => 'AllOfLightningInvoiceDataExpiresAt',
'amount' => 'string',
'amount_received' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'status' => null,
'bolt11' => null,
'paid_at' => null,
'expires_at' => null,
'amount' => null,
'amount_received' => null    ];

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
        'id' => 'id',
'status' => 'status',
'bolt11' => 'BOLT11',
'paid_at' => 'paidAt',
'expires_at' => 'expiresAt',
'amount' => 'amount',
'amount_received' => 'amountReceived'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'status' => 'setStatus',
'bolt11' => 'setBolt11',
'paid_at' => 'setPaidAt',
'expires_at' => 'setExpiresAt',
'amount' => 'setAmount',
'amount_received' => 'setAmountReceived'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'status' => 'getStatus',
'bolt11' => 'getBolt11',
'paid_at' => 'getPaidAt',
'expires_at' => 'getExpiresAt',
'amount' => 'getAmount',
'amount_received' => 'getAmountReceived'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bolt11'] = isset($data['bolt11']) ? $data['bolt11'] : null;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_received'] = isset($data['amount_received']) ? $data['amount_received'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The invoice's ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\LightningInvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\LightningInvoiceStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets bolt11
     *
     * @return string
     */
    public function getBolt11()
    {
        return $this->container['bolt11'];
    }

    /**
     * Sets bolt11
     *
     * @param string $bolt11 The BOLT11 representation of the invoice
     *
     * @return $this
     */
    public function setBolt11($bolt11)
    {
        $this->container['bolt11'] = $bolt11;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return AllOfLightningInvoiceDataPaidAt
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param AllOfLightningInvoiceDataPaidAt $paid_at The unix timestamp when the invoice got paid
     *
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return AllOfLightningInvoiceDataExpiresAt
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param AllOfLightningInvoiceDataExpiresAt $expires_at The unix timestamp when the invoice expires
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The amount of the invoice in millisatoshi
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_received
     *
     * @return string
     */
    public function getAmountReceived()
    {
        return $this->container['amount_received'];
    }

    /**
     * Sets amount_received
     *
     * @param string $amount_received The amount received in millisatoshi
     *
     * @return $this
     */
    public function setAmountReceived($amount_received)
    {
        $this->container['amount_received'] = $amount_received;

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
