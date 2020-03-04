<?php
/**
 * BuildCache
 *
 * PHP version 5
 *
 * @category Class
 * @package  Piurafunk\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.40) is used. For example, calling `/info` is the same as calling `/v1.40/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a Base64 encoded (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * The version of the OpenAPI document: 1.40
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Piurafunk\Docker\Model;

use \ArrayAccess;
use \Piurafunk\Docker\ObjectSerializer;

/**
 * BuildCache Class Doc Comment
 *
 * @category Class
 * @package  Piurafunk\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuildCache implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuildCache';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iD' => 'string',
        'parent' => 'string',
        'type' => 'string',
        'description' => 'string',
        'inUse' => 'bool',
        'shared' => 'bool',
        'size' => 'int',
        'createdAt' => 'int',
        'lastUsedAt' => 'int',
        'usageCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'iD' => null,
        'parent' => null,
        'type' => null,
        'description' => null,
        'inUse' => null,
        'shared' => null,
        'size' => null,
        'createdAt' => null,
        'lastUsedAt' => null,
        'usageCount' => null
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
        'iD' => 'ID',
        'parent' => 'Parent',
        'type' => 'Type',
        'description' => 'Description',
        'inUse' => 'InUse',
        'shared' => 'Shared',
        'size' => 'Size',
        'createdAt' => 'CreatedAt',
        'lastUsedAt' => 'LastUsedAt',
        'usageCount' => 'UsageCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iD' => 'setID',
        'parent' => 'setParent',
        'type' => 'setType',
        'description' => 'setDescription',
        'inUse' => 'setInUse',
        'shared' => 'setShared',
        'size' => 'setSize',
        'createdAt' => 'setCreatedAt',
        'lastUsedAt' => 'setLastUsedAt',
        'usageCount' => 'setUsageCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iD' => 'getID',
        'parent' => 'getParent',
        'type' => 'getType',
        'description' => 'getDescription',
        'inUse' => 'getInUse',
        'shared' => 'getShared',
        'size' => 'getSize',
        'createdAt' => 'getCreatedAt',
        'lastUsedAt' => 'getLastUsedAt',
        'usageCount' => 'getUsageCount'
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
        $this->container['iD'] = isset($data['iD']) ? $data['iD'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['inUse'] = isset($data['inUse']) ? $data['inUse'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['lastUsedAt'] = isset($data['lastUsedAt']) ? $data['lastUsedAt'] : null;
        $this->container['usageCount'] = isset($data['usageCount']) ? $data['usageCount'] : null;
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
     * Gets iD
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->container['iD'];
    }

    /**
     * Sets iD
     *
     * @param string|null $iD iD
     *
     * @return $this
     */
    public function setID($iD)
    {
        $this->container['iD'] = $iD;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string|null $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets inUse
     *
     * @return bool|null
     */
    public function getInUse()
    {
        return $this->container['inUse'];
    }

    /**
     * Sets inUse
     *
     * @param bool|null $inUse inUse
     *
     * @return $this
     */
    public function setInUse($inUse)
    {
        $this->container['inUse'] = $inUse;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return bool|null
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param bool|null $shared shared
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param int|null $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets lastUsedAt
     *
     * @return int|null
     */
    public function getLastUsedAt()
    {
        return $this->container['lastUsedAt'];
    }

    /**
     * Sets lastUsedAt
     *
     * @param int|null $lastUsedAt lastUsedAt
     *
     * @return $this
     */
    public function setLastUsedAt($lastUsedAt)
    {
        $this->container['lastUsedAt'] = $lastUsedAt;

        return $this;
    }

    /**
     * Gets usageCount
     *
     * @return int|null
     */
    public function getUsageCount()
    {
        return $this->container['usageCount'];
    }

    /**
     * Sets usageCount
     *
     * @param int|null $usageCount usageCount
     *
     * @return $this
     */
    public function setUsageCount($usageCount)
    {
        $this->container['usageCount'] = $usageCount;

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


