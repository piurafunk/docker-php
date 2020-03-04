# Piurafunk\Docker\SystemApi

All URIs are relative to *http://localhost/v1.40*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemAuth**](SystemApi.md#systemAuth) | **POST** /auth | Check auth configuration
[**systemDataUsage**](SystemApi.md#systemDataUsage) | **GET** /system/df | Get data usage information
[**systemEvents**](SystemApi.md#systemEvents) | **GET** /events | Monitor events
[**systemInfo**](SystemApi.md#systemInfo) | **GET** /info | Get system information
[**systemPing**](SystemApi.md#systemPing) | **GET** /_ping | Ping
[**systemPingHead**](SystemApi.md#systemPingHead) | **HEAD** /_ping | Ping
[**systemVersion**](SystemApi.md#systemVersion) | **GET** /version | Get version



## systemAuth

> \Piurafunk\Docker\Model\SystemAuthResponse systemAuth($authConfig)

Check auth configuration

Validate credentials for a registry and, if available, get an identity token for accessing the registry without password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authConfig = new \Piurafunk\Docker\Model\AuthConfig(); // \Piurafunk\Docker\Model\AuthConfig | Authentication to check

try {
    $result = $apiInstance->systemAuth($authConfig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authConfig** | [**\Piurafunk\Docker\Model\AuthConfig**](../Model/AuthConfig.md)| Authentication to check | [optional]

### Return type

[**\Piurafunk\Docker\Model\SystemAuthResponse**](../Model/SystemAuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## systemDataUsage

> \Piurafunk\Docker\Model\SystemDataUsageResponse systemDataUsage()

Get data usage information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemDataUsage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemDataUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piurafunk\Docker\Model\SystemDataUsageResponse**](../Model/SystemDataUsageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## systemEvents

> \Piurafunk\Docker\Model\SystemEventsResponse systemEvents($since, $until, $filters)

Monitor events

Stream real-time events from the server.  Various objects within Docker report events when something happens to them.  Containers report these events: `attach`, `commit`, `copy`, `create`, `destroy`, `detach`, `die`, `exec_create`, `exec_detach`, `exec_start`, `exec_die`, `export`, `health_status`, `kill`, `oom`, `pause`, `rename`, `resize`, `restart`, `start`, `stop`, `top`, `unpause`, and `update`  Images report these events: `delete`, `import`, `load`, `pull`, `push`, `save`, `tag`, and `untag`  Volumes report these events: `create`, `mount`, `unmount`, and `destroy`  Networks report these events: `create`, `connect`, `disconnect`, `destroy`, `update`, and `remove`  The Docker daemon reports these events: `reload`  Services report these events: `create`, `update`, and `remove`  Nodes report these events: `create`, `update`, and `remove`  Secrets report these events: `create`, `update`, and `remove`  Configs report these events: `create`, `update`, and `remove`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$since = 'since_example'; // string | Show events created since this timestamp then stream new events.
$until = 'until_example'; // string | Show events created until this timestamp then stop streaming.
$filters = 'filters_example'; // string | A JSON encoded value of filters (a `map[string][]string`) to process on the event list. Available filters:  - `config=<string>` config name or ID - `container=<string>` container name or ID - `daemon=<string>` daemon name or ID - `event=<string>` event type - `image=<string>` image name or ID - `label=<string>` image or container label - `network=<string>` network name or ID - `node=<string>` node ID - `plugin`=<string> plugin name or ID - `scope`=<string> local or swarm - `secret=<string>` secret name or ID - `service=<string>` service name or ID - `type=<string>` object to filter by, one of `container`, `image`, `volume`, `network`, `daemon`, `plugin`, `node`, `service`, `secret` or `config` - `volume=<string>` volume name

try {
    $result = $apiInstance->systemEvents($since, $until, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **string**| Show events created since this timestamp then stream new events. | [optional]
 **until** | **string**| Show events created until this timestamp then stop streaming. | [optional]
 **filters** | **string**| A JSON encoded value of filters (a &#x60;map[string][]string&#x60;) to process on the event list. Available filters:  - &#x60;config&#x3D;&lt;string&gt;&#x60; config name or ID - &#x60;container&#x3D;&lt;string&gt;&#x60; container name or ID - &#x60;daemon&#x3D;&lt;string&gt;&#x60; daemon name or ID - &#x60;event&#x3D;&lt;string&gt;&#x60; event type - &#x60;image&#x3D;&lt;string&gt;&#x60; image name or ID - &#x60;label&#x3D;&lt;string&gt;&#x60; image or container label - &#x60;network&#x3D;&lt;string&gt;&#x60; network name or ID - &#x60;node&#x3D;&lt;string&gt;&#x60; node ID - &#x60;plugin&#x60;&#x3D;&lt;string&gt; plugin name or ID - &#x60;scope&#x60;&#x3D;&lt;string&gt; local or swarm - &#x60;secret&#x3D;&lt;string&gt;&#x60; secret name or ID - &#x60;service&#x3D;&lt;string&gt;&#x60; service name or ID - &#x60;type&#x3D;&lt;string&gt;&#x60; object to filter by, one of &#x60;container&#x60;, &#x60;image&#x60;, &#x60;volume&#x60;, &#x60;network&#x60;, &#x60;daemon&#x60;, &#x60;plugin&#x60;, &#x60;node&#x60;, &#x60;service&#x60;, &#x60;secret&#x60; or &#x60;config&#x60; - &#x60;volume&#x3D;&lt;string&gt;&#x60; volume name | [optional]

### Return type

[**\Piurafunk\Docker\Model\SystemEventsResponse**](../Model/SystemEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## systemInfo

> \Piurafunk\Docker\Model\SystemInfo systemInfo()

Get system information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piurafunk\Docker\Model\SystemInfo**](../Model/SystemInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## systemPing

> string systemPing()

Ping

This is a dummy endpoint you can use to test if the server is accessible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## systemPingHead

> string systemPingHead()

Ping

This is a dummy endpoint you can use to test if the server is accessible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemPingHead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemPingHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## systemVersion

> \Piurafunk\Docker\Model\SystemVersionResponse systemVersion()

Get version

Returns the version of Docker that is running and various information about the system that Docker is running on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piurafunk\Docker\Model\SystemVersionResponse**](../Model/SystemVersionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

