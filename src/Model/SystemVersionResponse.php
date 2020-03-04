<?php
/**
 * SystemVersionResponse
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
 * SystemVersionResponse Class Doc Comment
 *
 * @category Class
 * @package  Piurafunk\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SystemVersionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SystemVersionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform' => '\Piurafunk\Docker\Model\SystemVersionResponsePlatform',
        'components' => '\Piurafunk\Docker\Model\SystemVersionResponseComponents[]',
        'version' => 'string',
        'apiVersion' => 'string',
        'minAPIVersion' => 'string',
        'gitCommit' => 'string',
        'goVersion' => 'string',
        'os' => 'string',
        'arch' => 'string',
        'kernelVersion' => 'string',
        'experimental' => 'bool',
        'buildTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'platform' => null,
        'components' => null,
        'version' => null,
        'apiVersion' => null,
        'minAPIVersion' => null,
        'gitCommit' => null,
        'goVersion' => null,
        'os' => null,
        'arch' => null,
        'kernelVersion' => null,
        'experimental' => null,
        'buildTime' => null
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
        'platform' => 'Platform',
        'components' => 'Components',
        'version' => 'Version',
        'apiVersion' => 'ApiVersion',
        'minAPIVersion' => 'MinAPIVersion',
        'gitCommit' => 'GitCommit',
        'goVersion' => 'GoVersion',
        'os' => 'Os',
        'arch' => 'Arch',
        'kernelVersion' => 'KernelVersion',
        'experimental' => 'Experimental',
        'buildTime' => 'BuildTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform' => 'setPlatform',
        'components' => 'setComponents',
        'version' => 'setVersion',
        'apiVersion' => 'setApiVersion',
        'minAPIVersion' => 'setMinAPIVersion',
        'gitCommit' => 'setGitCommit',
        'goVersion' => 'setGoVersion',
        'os' => 'setOs',
        'arch' => 'setArch',
        'kernelVersion' => 'setKernelVersion',
        'experimental' => 'setExperimental',
        'buildTime' => 'setBuildTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform' => 'getPlatform',
        'components' => 'getComponents',
        'version' => 'getVersion',
        'apiVersion' => 'getApiVersion',
        'minAPIVersion' => 'getMinAPIVersion',
        'gitCommit' => 'getGitCommit',
        'goVersion' => 'getGoVersion',
        'os' => 'getOs',
        'arch' => 'getArch',
        'kernelVersion' => 'getKernelVersion',
        'experimental' => 'getExperimental',
        'buildTime' => 'getBuildTime'
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
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['minAPIVersion'] = isset($data['minAPIVersion']) ? $data['minAPIVersion'] : null;
        $this->container['gitCommit'] = isset($data['gitCommit']) ? $data['gitCommit'] : null;
        $this->container['goVersion'] = isset($data['goVersion']) ? $data['goVersion'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['experimental'] = isset($data['experimental']) ? $data['experimental'] : null;
        $this->container['buildTime'] = isset($data['buildTime']) ? $data['buildTime'] : null;
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
     * Gets platform
     *
     * @return \Piurafunk\Docker\Model\SystemVersionResponsePlatform|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param \Piurafunk\Docker\Model\SystemVersionResponsePlatform|null $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \Piurafunk\Docker\Model\SystemVersionResponseComponents[]|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \Piurafunk\Docker\Model\SystemVersionResponseComponents[]|null $components components
     *
     * @return $this
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets apiVersion
     *
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
     * Sets apiVersion
     *
     * @param string|null $apiVersion apiVersion
     *
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;

        return $this;
    }

    /**
     * Gets minAPIVersion
     *
     * @return string|null
     */
    public function getMinAPIVersion()
    {
        return $this->container['minAPIVersion'];
    }

    /**
     * Sets minAPIVersion
     *
     * @param string|null $minAPIVersion minAPIVersion
     *
     * @return $this
     */
    public function setMinAPIVersion($minAPIVersion)
    {
        $this->container['minAPIVersion'] = $minAPIVersion;

        return $this;
    }

    /**
     * Gets gitCommit
     *
     * @return string|null
     */
    public function getGitCommit()
    {
        return $this->container['gitCommit'];
    }

    /**
     * Sets gitCommit
     *
     * @param string|null $gitCommit gitCommit
     *
     * @return $this
     */
    public function setGitCommit($gitCommit)
    {
        $this->container['gitCommit'] = $gitCommit;

        return $this;
    }

    /**
     * Gets goVersion
     *
     * @return string|null
     */
    public function getGoVersion()
    {
        return $this->container['goVersion'];
    }

    /**
     * Sets goVersion
     *
     * @param string|null $goVersion goVersion
     *
     * @return $this
     */
    public function setGoVersion($goVersion)
    {
        $this->container['goVersion'] = $goVersion;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string|null $os os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets arch
     *
     * @return string|null
     */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
     * Sets arch
     *
     * @param string|null $arch arch
     *
     * @return $this
     */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;

        return $this;
    }

    /**
     * Gets kernelVersion
     *
     * @return string|null
     */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
     * Sets kernelVersion
     *
     * @param string|null $kernelVersion kernelVersion
     *
     * @return $this
     */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;

        return $this;
    }

    /**
     * Gets experimental
     *
     * @return bool|null
     */
    public function getExperimental()
    {
        return $this->container['experimental'];
    }

    /**
     * Sets experimental
     *
     * @param bool|null $experimental experimental
     *
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->container['experimental'] = $experimental;

        return $this;
    }

    /**
     * Gets buildTime
     *
     * @return string|null
     */
    public function getBuildTime()
    {
        return $this->container['buildTime'];
    }

    /**
     * Sets buildTime
     *
     * @param string|null $buildTime buildTime
     *
     * @return $this
     */
    public function setBuildTime($buildTime)
    {
        $this->container['buildTime'] = $buildTime;

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

