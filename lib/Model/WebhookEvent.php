<?php
/**
 * WebhookEvent
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
 * WebhookEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'delivery_id' => 'string',
'webhook_id' => 'string',
'original_delivery_id' => 'string',
'is_redelivery' => 'bool',
'type' => 'string',
'timestamp' => 'AllOfWebhookEventTimestamp'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'delivery_id' => null,
'webhook_id' => null,
'original_delivery_id' => null,
'is_redelivery' => null,
'type' => null,
'timestamp' => null    ];

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
        'delivery_id' => 'deliveryId',
'webhook_id' => 'webhookId',
'original_delivery_id' => 'originalDeliveryId',
'is_redelivery' => 'isRedelivery',
'type' => 'type',
'timestamp' => 'timestamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_id' => 'setDeliveryId',
'webhook_id' => 'setWebhookId',
'original_delivery_id' => 'setOriginalDeliveryId',
'is_redelivery' => 'setIsRedelivery',
'type' => 'setType',
'timestamp' => 'setTimestamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_id' => 'getDeliveryId',
'webhook_id' => 'getWebhookId',
'original_delivery_id' => 'getOriginalDeliveryId',
'is_redelivery' => 'getIsRedelivery',
'type' => 'getType',
'timestamp' => 'getTimestamp'    ];

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
        $this->container['delivery_id'] = isset($data['delivery_id']) ? $data['delivery_id'] : null;
        $this->container['webhook_id'] = isset($data['webhook_id']) ? $data['webhook_id'] : null;
        $this->container['original_delivery_id'] = isset($data['original_delivery_id']) ? $data['original_delivery_id'] : null;
        $this->container['is_redelivery'] = isset($data['is_redelivery']) ? $data['is_redelivery'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
     * Gets delivery_id
     *
     * @return string
     */
    public function getDeliveryId()
    {
        return $this->container['delivery_id'];
    }

    /**
     * Sets delivery_id
     *
     * @param string $delivery_id The delivery id of the webhook
     *
     * @return $this
     */
    public function setDeliveryId($delivery_id)
    {
        $this->container['delivery_id'] = $delivery_id;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id The id of the webhook
     *
     * @return $this
     */
    public function setWebhookId($webhook_id)
    {
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets original_delivery_id
     *
     * @return string
     */
    public function getOriginalDeliveryId()
    {
        return $this->container['original_delivery_id'];
    }

    /**
     * Sets original_delivery_id
     *
     * @param string $original_delivery_id If this delivery is a redelivery, the is the delivery id of the original delivery.
     *
     * @return $this
     */
    public function setOriginalDeliveryId($original_delivery_id)
    {
        $this->container['original_delivery_id'] = $original_delivery_id;

        return $this;
    }

    /**
     * Gets is_redelivery
     *
     * @return bool
     */
    public function getIsRedelivery()
    {
        return $this->container['is_redelivery'];
    }

    /**
     * Sets is_redelivery
     *
     * @param bool $is_redelivery True if this delivery is a redelivery
     *
     * @return $this
     */
    public function setIsRedelivery($is_redelivery)
    {
        $this->container['is_redelivery'] = $is_redelivery;

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
     * @param string $type The type of this event, current available are `InvoiceCreated`, `InvoiceReceivedPayment`, `InvoicePaidInFull`, `InvoiceExpired`, `InvoiceConfirmed`, and `InvoiceInvalid`.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return AllOfWebhookEventTimestamp
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param AllOfWebhookEventTimestamp $timestamp The timestamp when this delivery has been created
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
