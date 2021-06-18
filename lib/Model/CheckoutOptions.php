<?php
/**
 * CheckoutOptions
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
 * CheckoutOptions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'speed_policy' => 'OneOfCheckoutOptionsSpeedPolicy',
'payment_methods' => 'string[]',
'expiration_minutes' => 'AllOfCheckoutOptionsExpirationMinutes',
'monitoring_minutes' => 'AllOfCheckoutOptionsMonitoringMinutes',
'payment_tolerance' => 'double',
'redirect_url' => 'string',
'redirect_automatically' => 'bool',
'default_language' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'speed_policy' => null,
'payment_methods' => null,
'expiration_minutes' => null,
'monitoring_minutes' => null,
'payment_tolerance' => 'double',
'redirect_url' => null,
'redirect_automatically' => null,
'default_language' => null    ];

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
        'speed_policy' => 'speedPolicy',
'payment_methods' => 'paymentMethods',
'expiration_minutes' => 'expirationMinutes',
'monitoring_minutes' => 'monitoringMinutes',
'payment_tolerance' => 'paymentTolerance',
'redirect_url' => 'redirectURL',
'redirect_automatically' => 'redirectAutomatically',
'default_language' => 'defaultLanguage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'speed_policy' => 'setSpeedPolicy',
'payment_methods' => 'setPaymentMethods',
'expiration_minutes' => 'setExpirationMinutes',
'monitoring_minutes' => 'setMonitoringMinutes',
'payment_tolerance' => 'setPaymentTolerance',
'redirect_url' => 'setRedirectUrl',
'redirect_automatically' => 'setRedirectAutomatically',
'default_language' => 'setDefaultLanguage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'speed_policy' => 'getSpeedPolicy',
'payment_methods' => 'getPaymentMethods',
'expiration_minutes' => 'getExpirationMinutes',
'monitoring_minutes' => 'getMonitoringMinutes',
'payment_tolerance' => 'getPaymentTolerance',
'redirect_url' => 'getRedirectUrl',
'redirect_automatically' => 'getRedirectAutomatically',
'default_language' => 'getDefaultLanguage'    ];

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
        $this->container['speed_policy'] = isset($data['speed_policy']) ? $data['speed_policy'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['expiration_minutes'] = isset($data['expiration_minutes']) ? $data['expiration_minutes'] : null;
        $this->container['monitoring_minutes'] = isset($data['monitoring_minutes']) ? $data['monitoring_minutes'] : null;
        $this->container['payment_tolerance'] = isset($data['payment_tolerance']) ? $data['payment_tolerance'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['redirect_automatically'] = isset($data['redirect_automatically']) ? $data['redirect_automatically'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
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
     * Gets speed_policy
     *
     * @return OneOfCheckoutOptionsSpeedPolicy
     */
    public function getSpeedPolicy()
    {
        return $this->container['speed_policy'];
    }

    /**
     * Sets speed_policy
     *
     * @param OneOfCheckoutOptionsSpeedPolicy $speed_policy This is a risk mitigation parameter for the merchant to configure how they want to fulfill orders depending on the number of block confirmations for the transaction made by the consumer on the selected cryptocurrency
     *
     * @return $this
     */
    public function setSpeedPolicy($speed_policy)
    {
        $this->container['speed_policy'] = $speed_policy;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param string[] $payment_methods A specific set of payment methods to use for this invoice (ie. BTC, BTC-LightningNetwork). By default, select all payment methods enabled in the store.
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets expiration_minutes
     *
     * @return AllOfCheckoutOptionsExpirationMinutes
     */
    public function getExpirationMinutes()
    {
        return $this->container['expiration_minutes'];
    }

    /**
     * Sets expiration_minutes
     *
     * @param AllOfCheckoutOptionsExpirationMinutes $expiration_minutes The number of minutes after which an invoice becomes expired. Defaults to the store's settings. (The default store settings is 15)
     *
     * @return $this
     */
    public function setExpirationMinutes($expiration_minutes)
    {
        $this->container['expiration_minutes'] = $expiration_minutes;

        return $this;
    }

    /**
     * Gets monitoring_minutes
     *
     * @return AllOfCheckoutOptionsMonitoringMinutes
     */
    public function getMonitoringMinutes()
    {
        return $this->container['monitoring_minutes'];
    }

    /**
     * Sets monitoring_minutes
     *
     * @param AllOfCheckoutOptionsMonitoringMinutes $monitoring_minutes The number of minutes after an invoice expired after which we are still monitoring for incoming payments. Defaults to the store's settings. (The default store settings is 1440, 1 day)
     *
     * @return $this
     */
    public function setMonitoringMinutes($monitoring_minutes)
    {
        $this->container['monitoring_minutes'] = $monitoring_minutes;

        return $this;
    }

    /**
     * Gets payment_tolerance
     *
     * @return double
     */
    public function getPaymentTolerance()
    {
        return $this->container['payment_tolerance'];
    }

    /**
     * Sets payment_tolerance
     *
     * @param double $payment_tolerance A percentage determining whether to count the invoice as paid when the invoice is paid within the specified margin of error. Defaults to the store's settings. (The default store settings is 100)
     *
     * @return $this
     */
    public function setPaymentTolerance($payment_tolerance)
    {
        $this->container['payment_tolerance'] = $payment_tolerance;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url When the customer has paid the invoice, the URL where the customer will be redirected when clicking on the `return to store` button. You can use placeholders `{InvoiceId}` or `{OrderId}` in the URL, BTCPay Server will replace those with this invoice `id` or `metadata.orderId` respectively.
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets redirect_automatically
     *
     * @return bool
     */
    public function getRedirectAutomatically()
    {
        return $this->container['redirect_automatically'];
    }

    /**
     * Sets redirect_automatically
     *
     * @param bool $redirect_automatically When the customer has paid the invoice, and a `redirectURL` is set, the checkout is redirected to `redirectURL` automatically if `redirectAutomatically` is true. Defaults to the store's settings. (The default store settings is false)
     *
     * @return $this
     */
    public function setRedirectAutomatically($redirect_automatically)
    {
        $this->container['redirect_automatically'] = $redirect_automatically;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param string $default_language The language code (eg. en-US, en, fr-FR...) of the language presented to your customer in the checkout page. BTCPay Server tries to match the best language available. If null or not set, will fallback on the store's default language. You can see the list of language codes with [this operation](#operation/langCodes).
     *
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

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
