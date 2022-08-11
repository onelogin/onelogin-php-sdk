<?php
/**
 * Schema
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
 * Schema Class Doc Comment
 *
 * @category Class
 * @package  onelogin/sdk
 * @author   Onelogin Devex Team
 * @link     https://onelogin.com
 * @implements \ArrayAccess<string, mixed>
 */
class Schema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'schema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'connector_id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'notes' => 'string',
        'policy_id' => 'int',
        'brand_id' => 'int',
        'icon_url' => 'string',
        'visible' => 'bool',
        'auth_method' => 'int',
        'tab_id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string',
        'role_ids' => 'int[]',
        'allow_assumed_signin' => 'bool',
        'provisioning' => '\onelogin/sdk\Model\SchemaProvisioning',
        'sso' => 'object',
        'configuration' => 'object',
        'parameters' => 'object',
        'enforcement_point' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'connector_id' => null,
        'name' => null,
        'description' => null,
        'notes' => null,
        'policy_id' => null,
        'brand_id' => null,
        'icon_url' => null,
        'visible' => null,
        'auth_method' => null,
        'tab_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'role_ids' => null,
        'allow_assumed_signin' => null,
        'provisioning' => null,
        'sso' => null,
        'configuration' => null,
        'parameters' => null,
        'enforcement_point' => null
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
        'id' => 'id',
        'connector_id' => 'connector_id',
        'name' => 'name',
        'description' => 'description',
        'notes' => 'notes',
        'policy_id' => 'policy_id',
        'brand_id' => 'brand_id',
        'icon_url' => 'icon_url',
        'visible' => 'visible',
        'auth_method' => 'auth_method',
        'tab_id' => 'tab_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'role_ids' => 'role_ids',
        'allow_assumed_signin' => 'allow_assumed_signin',
        'provisioning' => 'provisioning',
        'sso' => 'sso',
        'configuration' => 'configuration',
        'parameters' => 'parameters',
        'enforcement_point' => 'enforcement_point'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'connector_id' => 'setConnectorId',
        'name' => 'setName',
        'description' => 'setDescription',
        'notes' => 'setNotes',
        'policy_id' => 'setPolicyId',
        'brand_id' => 'setBrandId',
        'icon_url' => 'setIconUrl',
        'visible' => 'setVisible',
        'auth_method' => 'setAuthMethod',
        'tab_id' => 'setTabId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'role_ids' => 'setRoleIds',
        'allow_assumed_signin' => 'setAllowAssumedSignin',
        'provisioning' => 'setProvisioning',
        'sso' => 'setSso',
        'configuration' => 'setConfiguration',
        'parameters' => 'setParameters',
        'enforcement_point' => 'setEnforcementPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'connector_id' => 'getConnectorId',
        'name' => 'getName',
        'description' => 'getDescription',
        'notes' => 'getNotes',
        'policy_id' => 'getPolicyId',
        'brand_id' => 'getBrandId',
        'icon_url' => 'getIconUrl',
        'visible' => 'getVisible',
        'auth_method' => 'getAuthMethod',
        'tab_id' => 'getTabId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'role_ids' => 'getRoleIds',
        'allow_assumed_signin' => 'getAllowAssumedSignin',
        'provisioning' => 'getProvisioning',
        'sso' => 'getSso',
        'configuration' => 'getConfiguration',
        'parameters' => 'getParameters',
        'enforcement_point' => 'getEnforcementPoint'
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

    public const AUTH_METHOD_0 = 0;
    public const AUTH_METHOD_1 = 1;
    public const AUTH_METHOD_2 = 2;
    public const AUTH_METHOD_3 = 3;
    public const AUTH_METHOD_4 = 4;
    public const AUTH_METHOD_6 = 6;
    public const AUTH_METHOD_7 = 7;
    public const AUTH_METHOD_8 = 8;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthMethodAllowableValues()
    {
        return [
            self::AUTH_METHOD_0,
            self::AUTH_METHOD_1,
            self::AUTH_METHOD_2,
            self::AUTH_METHOD_3,
            self::AUTH_METHOD_4,
            self::AUTH_METHOD_6,
            self::AUTH_METHOD_7,
            self::AUTH_METHOD_8,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['connector_id'] = $data['connector_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['policy_id'] = $data['policy_id'] ?? null;
        $this->container['brand_id'] = $data['brand_id'] ?? null;
        $this->container['icon_url'] = $data['icon_url'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['auth_method'] = $data['auth_method'] ?? null;
        $this->container['tab_id'] = $data['tab_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['role_ids'] = $data['role_ids'] ?? null;
        $this->container['allow_assumed_signin'] = $data['allow_assumed_signin'] ?? null;
        $this->container['provisioning'] = $data['provisioning'] ?? null;
        $this->container['sso'] = $data['sso'] ?? null;
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['enforcement_point'] = $data['enforcement_point'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthMethodAllowableValues();
        if (!is_null($this->container['auth_method']) && !in_array($this->container['auth_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_method', must be one of '%s'",
                $this->container['auth_method'],
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Apps unique ID in OneLogin.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets connector_id
     *
     * @return int|null
     */
    public function getConnectorId()
    {
        return $this->container['connector_id'];
    }

    /**
     * Sets connector_id
     *
     * @param int|null $connector_id ID of the apps underlying connector.
     *
     * @return self
     */
    public function setConnectorId($connector_id)
    {
        $this->container['connector_id'] = $connector_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name App name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Freeform description of the app.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Freeform notes about the app.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets policy_id
     *
     * @return int|null
     */
    public function getPolicyId()
    {
        return $this->container['policy_id'];
    }

    /**
     * Sets policy_id
     *
     * @param int|null $policy_id The security policy assigned to the app.
     *
     * @return self
     */
    public function setPolicyId($policy_id)
    {
        $this->container['policy_id'] = $policy_id;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param int|null $brand_id The custom login page branding to use for this app. Applies to app initiated logins via OIDC or SAML.
     *
     * @return self
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url A link to the apps icon url.
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible Indicates if the app is visible in the OneLogin portal.
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets auth_method
     *
     * @return int|null
     */
    public function getAuthMethod()
    {
        return $this->container['auth_method'];
    }

    /**
     * Sets auth_method
     *
     * @param int|null $auth_method An ID indicating the type of app.
     *
     * @return self
     */
    public function setAuthMethod($auth_method)
    {
        $allowedValues = $this->getAuthMethodAllowableValues();
        if (!is_null($auth_method) && !in_array($auth_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_method', must be one of '%s'",
                    $auth_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_method'] = $auth_method;

        return $this;
    }

    /**
     * Gets tab_id
     *
     * @return int|null
     */
    public function getTabId()
    {
        return $this->container['tab_id'];
    }

    /**
     * Sets tab_id
     *
     * @param int|null $tab_id ID of the OneLogin portal tab that the app is assigned to.
     *
     * @return self
     */
    public function setTabId($tab_id)
    {
        $this->container['tab_id'] = $tab_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at The date the app was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at The date the app was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets role_ids
     *
     * @return int[]|null
     */
    public function getRoleIds()
    {
        return $this->container['role_ids'];
    }

    /**
     * Sets role_ids
     *
     * @param int[]|null $role_ids List of Role IDs that are assigned to the app. On App Create or Update the entire array is replaced with the values provided.
     *
     * @return self
     */
    public function setRoleIds($role_ids)
    {
        $this->container['role_ids'] = $role_ids;

        return $this;
    }

    /**
     * Gets allow_assumed_signin
     *
     * @return bool|null
     */
    public function getAllowAssumedSignin()
    {
        return $this->container['allow_assumed_signin'];
    }

    /**
     * Sets allow_assumed_signin
     *
     * @param bool|null $allow_assumed_signin Indicates whether or not administrators can access the app as a user that they have assumed control over.
     *
     * @return self
     */
    public function setAllowAssumedSignin($allow_assumed_signin)
    {
        $this->container['allow_assumed_signin'] = $allow_assumed_signin;

        return $this;
    }

    /**
     * Gets provisioning
     *
     * @return \onelogin/sdk\Model\SchemaProvisioning|null
     */
    public function getProvisioning()
    {
        return $this->container['provisioning'];
    }

    /**
     * Sets provisioning
     *
     * @param \onelogin/sdk\Model\SchemaProvisioning|null $provisioning provisioning
     *
     * @return self
     */
    public function setProvisioning($provisioning)
    {
        $this->container['provisioning'] = $provisioning;

        return $this;
    }

    /**
     * Gets sso
     *
     * @return object|null
     */
    public function getSso()
    {
        return $this->container['sso'];
    }

    /**
     * Sets sso
     *
     * @param object|null $sso sso
     *
     * @return self
     */
    public function setSso($sso)
    {
        $this->container['sso'] = $sso;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return object|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param object|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return object|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param object|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets enforcement_point
     *
     * @return object|null
     */
    public function getEnforcementPoint()
    {
        return $this->container['enforcement_point'];
    }

    /**
     * Sets enforcement_point
     *
     * @param object|null $enforcement_point enforcement_point
     *
     * @return self
     */
    public function setEnforcementPoint($enforcement_point)
    {
        $this->container['enforcement_point'] = $enforcement_point;

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


