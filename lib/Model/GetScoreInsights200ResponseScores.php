<?php
/**
 * GetScoreInsights200ResponseScores
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
 * GetScoreInsights200ResponseScores Class Doc Comment
 *
 * @category Class
 * @package  onelogin/sdk
 * @author   Onelogin Devex Team
 * @link     https://onelogin.com
 * @implements \ArrayAccess<string, mixed>
 */
class GetScoreInsights200ResponseScores implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getScoreInsights_200_response_scores';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'minimal' => 'int',
        'low' => 'int',
        'medium' => 'int',
        'high' => 'int',
        'very_high' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'minimal' => null,
        'low' => null,
        'medium' => null,
        'high' => null,
        'very_high' => null
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
        'minimal' => 'minimal',
        'low' => 'low',
        'medium' => 'medium',
        'high' => 'high',
        'very_high' => 'very_high'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimal' => 'setMinimal',
        'low' => 'setLow',
        'medium' => 'setMedium',
        'high' => 'setHigh',
        'very_high' => 'setVeryHigh'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimal' => 'getMinimal',
        'low' => 'getLow',
        'medium' => 'getMedium',
        'high' => 'getHigh',
        'very_high' => 'getVeryHigh'
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
        $this->container['minimal'] = $data['minimal'] ?? null;
        $this->container['low'] = $data['low'] ?? null;
        $this->container['medium'] = $data['medium'] ?? null;
        $this->container['high'] = $data['high'] ?? null;
        $this->container['very_high'] = $data['very_high'] ?? null;
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
     * Gets minimal
     *
     * @return int|null
     */
    public function getMinimal()
    {
        return $this->container['minimal'];
    }

    /**
     * Sets minimal
     *
     * @param int|null $minimal minimal
     *
     * @return self
     */
    public function setMinimal($minimal)
    {
        $this->container['minimal'] = $minimal;

        return $this;
    }

    /**
     * Gets low
     *
     * @return int|null
     */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
     * Sets low
     *
     * @param int|null $low low
     *
     * @return self
     */
    public function setLow($low)
    {
        $this->container['low'] = $low;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return int|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param int|null $medium medium
     *
     * @return self
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets high
     *
     * @return int|null
     */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
     * Sets high
     *
     * @param int|null $high high
     *
     * @return self
     */
    public function setHigh($high)
    {
        $this->container['high'] = $high;

        return $this;
    }

    /**
     * Gets very_high
     *
     * @return int|null
     */
    public function getVeryHigh()
    {
        return $this->container['very_high'];
    }

    /**
     * Sets very_high
     *
     * @param int|null $very_high very_high
     *
     * @return self
     */
    public function setVeryHigh($very_high)
    {
        $this->container['very_high'] = $very_high;

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

