<?php
/**
 * PluginConfig
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
 * PluginConfig Class Doc Comment
 *
 * @category Class
 * @description The config of a plugin.
 * @package  Piurafunk\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PluginConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Plugin_Config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dockerVersion' => 'string',
        'description' => 'string',
        'documentation' => 'string',
        'interface' => '\Piurafunk\Docker\Model\PluginConfigInterface',
        'entrypoint' => 'string[]',
        'workDir' => 'string',
        'user' => '\Piurafunk\Docker\Model\PluginConfigUser',
        'network' => '\Piurafunk\Docker\Model\PluginConfigNetwork',
        'linux' => '\Piurafunk\Docker\Model\PluginConfigLinux',
        'propagatedMount' => 'string',
        'ipcHost' => 'bool',
        'pidHost' => 'bool',
        'mounts' => '\Piurafunk\Docker\Model\PluginMount[]',
        'env' => '\Piurafunk\Docker\Model\PluginEnv[]',
        'args' => '\Piurafunk\Docker\Model\PluginConfigArgs',
        'rootfs' => '\Piurafunk\Docker\Model\PluginConfigRootfs'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dockerVersion' => null,
        'description' => null,
        'documentation' => null,
        'interface' => null,
        'entrypoint' => null,
        'workDir' => null,
        'user' => null,
        'network' => null,
        'linux' => null,
        'propagatedMount' => null,
        'ipcHost' => null,
        'pidHost' => null,
        'mounts' => null,
        'env' => null,
        'args' => null,
        'rootfs' => null
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
        'dockerVersion' => 'DockerVersion',
        'description' => 'Description',
        'documentation' => 'Documentation',
        'interface' => 'Interface',
        'entrypoint' => 'Entrypoint',
        'workDir' => 'WorkDir',
        'user' => 'User',
        'network' => 'Network',
        'linux' => 'Linux',
        'propagatedMount' => 'PropagatedMount',
        'ipcHost' => 'IpcHost',
        'pidHost' => 'PidHost',
        'mounts' => 'Mounts',
        'env' => 'Env',
        'args' => 'Args',
        'rootfs' => 'rootfs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dockerVersion' => 'setDockerVersion',
        'description' => 'setDescription',
        'documentation' => 'setDocumentation',
        'interface' => 'setInterface',
        'entrypoint' => 'setEntrypoint',
        'workDir' => 'setWorkDir',
        'user' => 'setUser',
        'network' => 'setNetwork',
        'linux' => 'setLinux',
        'propagatedMount' => 'setPropagatedMount',
        'ipcHost' => 'setIpcHost',
        'pidHost' => 'setPidHost',
        'mounts' => 'setMounts',
        'env' => 'setEnv',
        'args' => 'setArgs',
        'rootfs' => 'setRootfs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dockerVersion' => 'getDockerVersion',
        'description' => 'getDescription',
        'documentation' => 'getDocumentation',
        'interface' => 'getInterface',
        'entrypoint' => 'getEntrypoint',
        'workDir' => 'getWorkDir',
        'user' => 'getUser',
        'network' => 'getNetwork',
        'linux' => 'getLinux',
        'propagatedMount' => 'getPropagatedMount',
        'ipcHost' => 'getIpcHost',
        'pidHost' => 'getPidHost',
        'mounts' => 'getMounts',
        'env' => 'getEnv',
        'args' => 'getArgs',
        'rootfs' => 'getRootfs'
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
        $this->container['dockerVersion'] = isset($data['dockerVersion']) ? $data['dockerVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['documentation'] = isset($data['documentation']) ? $data['documentation'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['workDir'] = isset($data['workDir']) ? $data['workDir'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['linux'] = isset($data['linux']) ? $data['linux'] : null;
        $this->container['propagatedMount'] = isset($data['propagatedMount']) ? $data['propagatedMount'] : null;
        $this->container['ipcHost'] = isset($data['ipcHost']) ? $data['ipcHost'] : null;
        $this->container['pidHost'] = isset($data['pidHost']) ? $data['pidHost'] : null;
        $this->container['mounts'] = isset($data['mounts']) ? $data['mounts'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['rootfs'] = isset($data['rootfs']) ? $data['rootfs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['documentation'] === null) {
            $invalidProperties[] = "'documentation' can't be null";
        }
        if ($this->container['interface'] === null) {
            $invalidProperties[] = "'interface' can't be null";
        }
        if ($this->container['entrypoint'] === null) {
            $invalidProperties[] = "'entrypoint' can't be null";
        }
        if ($this->container['workDir'] === null) {
            $invalidProperties[] = "'workDir' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['linux'] === null) {
            $invalidProperties[] = "'linux' can't be null";
        }
        if ($this->container['propagatedMount'] === null) {
            $invalidProperties[] = "'propagatedMount' can't be null";
        }
        if ($this->container['ipcHost'] === null) {
            $invalidProperties[] = "'ipcHost' can't be null";
        }
        if ($this->container['pidHost'] === null) {
            $invalidProperties[] = "'pidHost' can't be null";
        }
        if ($this->container['mounts'] === null) {
            $invalidProperties[] = "'mounts' can't be null";
        }
        if ($this->container['env'] === null) {
            $invalidProperties[] = "'env' can't be null";
        }
        if ($this->container['args'] === null) {
            $invalidProperties[] = "'args' can't be null";
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
     * Gets dockerVersion
     *
     * @return string|null
     */
    public function getDockerVersion()
    {
        return $this->container['dockerVersion'];
    }

    /**
     * Sets dockerVersion
     *
     * @param string|null $dockerVersion Docker Version used to create the plugin
     *
     * @return $this
     */
    public function setDockerVersion($dockerVersion)
    {
        $this->container['dockerVersion'] = $dockerVersion;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets documentation
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->container['documentation'];
    }

    /**
     * Sets documentation
     *
     * @param string $documentation documentation
     *
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->container['documentation'] = $documentation;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return \Piurafunk\Docker\Model\PluginConfigInterface
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param \Piurafunk\Docker\Model\PluginConfigInterface $interface interface
     *
     * @return $this
     */
    public function setInterface($interface)
    {
        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets entrypoint
     *
     * @return string[]
     */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
     * Sets entrypoint
     *
     * @param string[] $entrypoint entrypoint
     *
     * @return $this
     */
    public function setEntrypoint($entrypoint)
    {
        $this->container['entrypoint'] = $entrypoint;

        return $this;
    }

    /**
     * Gets workDir
     *
     * @return string
     */
    public function getWorkDir()
    {
        return $this->container['workDir'];
    }

    /**
     * Sets workDir
     *
     * @param string $workDir workDir
     *
     * @return $this
     */
    public function setWorkDir($workDir)
    {
        $this->container['workDir'] = $workDir;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Piurafunk\Docker\Model\PluginConfigUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Piurafunk\Docker\Model\PluginConfigUser|null $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets network
     *
     * @return \Piurafunk\Docker\Model\PluginConfigNetwork
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param \Piurafunk\Docker\Model\PluginConfigNetwork $network network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets linux
     *
     * @return \Piurafunk\Docker\Model\PluginConfigLinux
     */
    public function getLinux()
    {
        return $this->container['linux'];
    }

    /**
     * Sets linux
     *
     * @param \Piurafunk\Docker\Model\PluginConfigLinux $linux linux
     *
     * @return $this
     */
    public function setLinux($linux)
    {
        $this->container['linux'] = $linux;

        return $this;
    }

    /**
     * Gets propagatedMount
     *
     * @return string
     */
    public function getPropagatedMount()
    {
        return $this->container['propagatedMount'];
    }

    /**
     * Sets propagatedMount
     *
     * @param string $propagatedMount propagatedMount
     *
     * @return $this
     */
    public function setPropagatedMount($propagatedMount)
    {
        $this->container['propagatedMount'] = $propagatedMount;

        return $this;
    }

    /**
     * Gets ipcHost
     *
     * @return bool
     */
    public function getIpcHost()
    {
        return $this->container['ipcHost'];
    }

    /**
     * Sets ipcHost
     *
     * @param bool $ipcHost ipcHost
     *
     * @return $this
     */
    public function setIpcHost($ipcHost)
    {
        $this->container['ipcHost'] = $ipcHost;

        return $this;
    }

    /**
     * Gets pidHost
     *
     * @return bool
     */
    public function getPidHost()
    {
        return $this->container['pidHost'];
    }

    /**
     * Sets pidHost
     *
     * @param bool $pidHost pidHost
     *
     * @return $this
     */
    public function setPidHost($pidHost)
    {
        $this->container['pidHost'] = $pidHost;

        return $this;
    }

    /**
     * Gets mounts
     *
     * @return \Piurafunk\Docker\Model\PluginMount[]
     */
    public function getMounts()
    {
        return $this->container['mounts'];
    }

    /**
     * Sets mounts
     *
     * @param \Piurafunk\Docker\Model\PluginMount[] $mounts mounts
     *
     * @return $this
     */
    public function setMounts($mounts)
    {
        $this->container['mounts'] = $mounts;

        return $this;
    }

    /**
     * Gets env
     *
     * @return \Piurafunk\Docker\Model\PluginEnv[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     *
     * @param \Piurafunk\Docker\Model\PluginEnv[] $env env
     *
     * @return $this
     */
    public function setEnv($env)
    {
        $this->container['env'] = $env;

        return $this;
    }

    /**
     * Gets args
     *
     * @return \Piurafunk\Docker\Model\PluginConfigArgs
     */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
     * Sets args
     *
     * @param \Piurafunk\Docker\Model\PluginConfigArgs $args args
     *
     * @return $this
     */
    public function setArgs($args)
    {
        $this->container['args'] = $args;

        return $this;
    }

    /**
     * Gets rootfs
     *
     * @return \Piurafunk\Docker\Model\PluginConfigRootfs|null
     */
    public function getRootfs()
    {
        return $this->container['rootfs'];
    }

    /**
     * Sets rootfs
     *
     * @param \Piurafunk\Docker\Model\PluginConfigRootfs|null $rootfs rootfs
     *
     * @return $this
     */
    public function setRootfs($rootfs)
    {
        $this->container['rootfs'] = $rootfs;

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


