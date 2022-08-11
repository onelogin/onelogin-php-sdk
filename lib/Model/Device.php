<?php
/**
 * Device
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  onelogin/sdk
 * @author   Onelogin Devex Team
 * @link     https://onelogin.com
 */

/**
 * OneLogin API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 3.0.0-alpha.1
 * Generated by: https://onelogin.com
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://onelogin.com).
 * https://onelogin.com
 * Do not edit the class manually.
 */

namespace onelogin/sdk\Model;

use \ArrayAccess;
use \onelogin/sdk\ObjectSerializer;

/**
 * Device Class Doc Comment
 *
 * @category Class
 * @package  onelogin/sdk
 * @author   Onelogin Devex Team
 * @link     https://onelogin.com
 * @implements \ArrayAccess<string, mixed>
 */
class Device implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'device_id' => 'string',
        'user_display_name' => 'string',
        'type_display_name' => 'string',
        'auth_factor_name' => 'string',
        'default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'device_id' => null,
        'user_display_name' => null,
        'type_display_name' => null,
        'auth_factor_name' => null,
        'default' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'device_id' => 'device_id',
        'user_display_name' => 'user_display_name',
        'type_display_name' => 'type_display_name',
        'auth_factor_name' => 'auth_factor_name',
        'default' => 'default'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_id' => 'setDeviceId',
        'user_display_name' => 'setUserDisplayName',
        'type_display_name' => 'setTypeDisplayName',
        'auth_factor_name' => 'setAuthFactorName',
        'default' => 'setDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_id' => 'getDeviceId',
        'user_display_name' => 'getUserDisplayName',
        'type_display_name' => 'getTypeDisplayName',
        'auth_factor_name' => 'getAuthFactorName',
        'default' => 'getDefault'
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
        return self::$openAPIModelName;
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
        $this->container['device_id'] = $data['device_id'] ?? null;
        $this->container['user_display_name'] = $data['user_display_name'] ?? null;
        $this->container['type_display_name'] = $data['type_display_name'] ?? null;
        $this->container['auth_factor_name'] = $data['auth_factor_name'] ?? null;
        $this->container['default'] = $data['default'] ?? null;
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
     * Gets device_id
     *
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string|null $device_id device_id
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets user_display_name
     *
     * @return string|null
     */
    public function getUserDisplayName()
    {
        return $this->container['user_display_name'];
    }

    /**
     * Sets user_display_name
     *
     * @param string|null $user_display_name user_display_name
     *
     * @return self
     */
    public function setUserDisplayName($user_display_name)
    {
        $this->container['user_display_name'] = $user_display_name;

        return $this;
    }

    /**
     * Gets type_display_name
     *
     * @return string|null
     */
    public function getTypeDisplayName()
    {
        return $this->container['type_display_name'];
    }

    /**
     * Sets type_display_name
     *
     * @param string|null $type_display_name type_display_name
     *
     * @return self
     */
    public function setTypeDisplayName($type_display_name)
    {
        $this->container['type_display_name'] = $type_display_name;

        return $this;
    }

    /**
     * Gets auth_factor_name
     *
     * @return string|null
     */
    public function getAuthFactorName()
    {
        return $this->container['auth_factor_name'];
    }

    /**
     * Sets auth_factor_name
     *
     * @param string|null $auth_factor_name auth_factor_name
     *
     * @return self
     */
    public function setAuthFactorName($auth_factor_name)
    {
        $this->container['auth_factor_name'] = $auth_factor_name;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

