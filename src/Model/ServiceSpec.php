<?php
/**
 * ServiceSpec
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
 * ServiceSpec Class Doc Comment
 *
 * @category Class
 * @description User modifiable configuration for a service.
 * @package  Piurafunk\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'labels' => 'map[string,string]',
        'taskTemplate' => '\Piurafunk\Docker\Model\TaskSpec',
        'mode' => '\Piurafunk\Docker\Model\ServiceSpecMode',
        'updateConfig' => '\Piurafunk\Docker\Model\ServiceSpecUpdateConfig',
        'rollbackConfig' => '\Piurafunk\Docker\Model\ServiceSpecRollbackConfig',
        'networks' => '\Piurafunk\Docker\Model\NetworkAttachmentConfig[]',
        'endpointSpec' => '\Piurafunk\Docker\Model\EndpointSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'labels' => null,
        'taskTemplate' => null,
        'mode' => null,
        'updateConfig' => null,
        'rollbackConfig' => null,
        'networks' => null,
        'endpointSpec' => null
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
        'name' => 'Name',
        'labels' => 'Labels',
        'taskTemplate' => 'TaskTemplate',
        'mode' => 'Mode',
        'updateConfig' => 'UpdateConfig',
        'rollbackConfig' => 'RollbackConfig',
        'networks' => 'Networks',
        'endpointSpec' => 'EndpointSpec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'labels' => 'setLabels',
        'taskTemplate' => 'setTaskTemplate',
        'mode' => 'setMode',
        'updateConfig' => 'setUpdateConfig',
        'rollbackConfig' => 'setRollbackConfig',
        'networks' => 'setNetworks',
        'endpointSpec' => 'setEndpointSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'labels' => 'getLabels',
        'taskTemplate' => 'getTaskTemplate',
        'mode' => 'getMode',
        'updateConfig' => 'getUpdateConfig',
        'rollbackConfig' => 'getRollbackConfig',
        'networks' => 'getNetworks',
        'endpointSpec' => 'getEndpointSpec'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['taskTemplate'] = isset($data['taskTemplate']) ? $data['taskTemplate'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['updateConfig'] = isset($data['updateConfig']) ? $data['updateConfig'] : null;
        $this->container['rollbackConfig'] = isset($data['rollbackConfig']) ? $data['rollbackConfig'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['endpointSpec'] = isset($data['endpointSpec']) ? $data['endpointSpec'] : null;
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
     * @param string|null $name Name of the service.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,string]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,string]|null $labels User-defined key/value metadata.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets taskTemplate
     *
     * @return \Piurafunk\Docker\Model\TaskSpec|null
     */
    public function getTaskTemplate()
    {
        return $this->container['taskTemplate'];
    }

    /**
     * Sets taskTemplate
     *
     * @param \Piurafunk\Docker\Model\TaskSpec|null $taskTemplate taskTemplate
     *
     * @return $this
     */
    public function setTaskTemplate($taskTemplate)
    {
        $this->container['taskTemplate'] = $taskTemplate;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return \Piurafunk\Docker\Model\ServiceSpecMode|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \Piurafunk\Docker\Model\ServiceSpecMode|null $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets updateConfig
     *
     * @return \Piurafunk\Docker\Model\ServiceSpecUpdateConfig|null
     */
    public function getUpdateConfig()
    {
        return $this->container['updateConfig'];
    }

    /**
     * Sets updateConfig
     *
     * @param \Piurafunk\Docker\Model\ServiceSpecUpdateConfig|null $updateConfig updateConfig
     *
     * @return $this
     */
    public function setUpdateConfig($updateConfig)
    {
        $this->container['updateConfig'] = $updateConfig;

        return $this;
    }

    /**
     * Gets rollbackConfig
     *
     * @return \Piurafunk\Docker\Model\ServiceSpecRollbackConfig|null
     */
    public function getRollbackConfig()
    {
        return $this->container['rollbackConfig'];
    }

    /**
     * Sets rollbackConfig
     *
     * @param \Piurafunk\Docker\Model\ServiceSpecRollbackConfig|null $rollbackConfig rollbackConfig
     *
     * @return $this
     */
    public function setRollbackConfig($rollbackConfig)
    {
        $this->container['rollbackConfig'] = $rollbackConfig;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return \Piurafunk\Docker\Model\NetworkAttachmentConfig[]|null
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param \Piurafunk\Docker\Model\NetworkAttachmentConfig[]|null $networks Specifies which networks the service should attach to.
     *
     * @return $this
     */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets endpointSpec
     *
     * @return \Piurafunk\Docker\Model\EndpointSpec|null
     */
    public function getEndpointSpec()
    {
        return $this->container['endpointSpec'];
    }

    /**
     * Sets endpointSpec
     *
     * @param \Piurafunk\Docker\Model\EndpointSpec|null $endpointSpec endpointSpec
     *
     * @return $this
     */
    public function setEndpointSpec($endpointSpec)
    {
        $this->container['endpointSpec'] = $endpointSpec;

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


