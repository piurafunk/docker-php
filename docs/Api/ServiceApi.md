# Piurafunk\Docker\ServiceApi

All URIs are relative to *http://localhost/v1.40*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceCreate**](ServiceApi.md#serviceCreate) | **POST** /services/create | Create a service
[**serviceDelete**](ServiceApi.md#serviceDelete) | **DELETE** /services/{id} | Delete a service
[**serviceInspect**](ServiceApi.md#serviceInspect) | **GET** /services/{id} | Inspect a service
[**serviceList**](ServiceApi.md#serviceList) | **GET** /services | List services
[**serviceLogs**](ServiceApi.md#serviceLogs) | **GET** /services/{id}/logs | Get service logs
[**serviceUpdate**](ServiceApi.md#serviceUpdate) | **POST** /services/{id}/update | Update a service



## serviceCreate

> \Piurafunk\Docker\Model\ServiceCreateResponse serviceCreate($body, $xRegistryAuth)

Create a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Piurafunk\Docker\Model\UNKNOWN_BASE_TYPE(); // \Piurafunk\Docker\Model\UNKNOWN_BASE_TYPE | 
$xRegistryAuth = 'xRegistryAuth_example'; // string | A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)

try {
    $result = $apiInstance->serviceCreate($body, $xRegistryAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Piurafunk\Docker\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |
 **xRegistryAuth** | **string**| A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication) | [optional]

### Return type

[**\Piurafunk\Docker\Model\ServiceCreateResponse**](../Model/ServiceCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceDelete

> serviceDelete($id)

Delete a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of service.

try {
    $apiInstance->serviceDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or name of service. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceInspect

> \Piurafunk\Docker\Model\Service serviceInspect($id, $insertDefaults)

Inspect a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of service.
$insertDefaults = false; // bool | Fill empty fields with default values.

try {
    $result = $apiInstance->serviceInspect($id, $insertDefaults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or name of service. |
 **insertDefaults** | **bool**| Fill empty fields with default values. | [optional] [default to false]

### Return type

[**\Piurafunk\Docker\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceList

> \Piurafunk\Docker\Model\Service[] serviceList($filters)

List services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the services list. Available filters:  - `id=<service id>` - `label=<service label>` - `mode=[\"replicated\"|\"global\"]` - `name=<service name>`

try {
    $result = $apiInstance->serviceList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the services list. Available filters:  - &#x60;id&#x3D;&lt;service id&gt;&#x60; - &#x60;label&#x3D;&lt;service label&gt;&#x60; - &#x60;mode&#x3D;[\&quot;replicated\&quot;|\&quot;global\&quot;]&#x60; - &#x60;name&#x3D;&lt;service name&gt;&#x60; | [optional]

### Return type

[**\Piurafunk\Docker\Model\Service[]**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceLogs

> \SplFileObject serviceLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail)

Get service logs

Get `stdout` and `stderr` logs from a service. See also [`/containers/{id}/logs`](#operation/ContainerLogs).  **Note**: This endpoint works only for services with the `local`, `json-file` or `journald` logging drivers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of the service
$details = false; // bool | Show service context and extra details provided to logs.
$follow = false; // bool | Keep connection after returning logs.
$stdout = false; // bool | Return logs from `stdout`
$stderr = false; // bool | Return logs from `stderr`
$since = 0; // int | Only return logs since this time, as a UNIX timestamp
$timestamps = false; // bool | Add timestamps to every log line
$tail = 'all'; // string | Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.

try {
    $result = $apiInstance->serviceLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or name of the service |
 **details** | **bool**| Show service context and extra details provided to logs. | [optional] [default to false]
 **follow** | **bool**| Keep connection after returning logs. | [optional] [default to false]
 **stdout** | **bool**| Return logs from &#x60;stdout&#x60; | [optional] [default to false]
 **stderr** | **bool**| Return logs from &#x60;stderr&#x60; | [optional] [default to false]
 **since** | **int**| Only return logs since this time, as a UNIX timestamp | [optional] [default to 0]
 **timestamps** | **bool**| Add timestamps to every log line | [optional] [default to false]
 **tail** | **string**| Only return this number of log lines from the end of the logs. Specify as an integer or &#x60;all&#x60; to output all log lines. | [optional] [default to &#39;all&#39;]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceUpdate

> \Piurafunk\Docker\Model\ServiceUpdateResponse serviceUpdate($id, $version, $body, $registryAuthFrom, $rollback, $xRegistryAuth)

Update a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Piurafunk\Docker\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of service.
$version = 56; // int | The version number of the service object being updated. This is required to avoid conflicting writes. This version number should be the value as currently set on the service *before* the update. You can find the current version by calling `GET /services/{id}`
$body = new \Piurafunk\Docker\Model\UNKNOWN_BASE_TYPE(); // \Piurafunk\Docker\Model\UNKNOWN_BASE_TYPE | 
$registryAuthFrom = 'spec'; // string | If the `X-Registry-Auth` header is not specified, this parameter indicates where to find registry authorization credentials.
$rollback = 'rollback_example'; // string | Set to this parameter to `previous` to cause a server-side rollback to the previous service spec. The supplied spec will be ignored in this case.
$xRegistryAuth = 'xRegistryAuth_example'; // string | A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)

try {
    $result = $apiInstance->serviceUpdate($id, $version, $body, $registryAuthFrom, $rollback, $xRegistryAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or name of service. |
 **version** | **int**| The version number of the service object being updated. This is required to avoid conflicting writes. This version number should be the value as currently set on the service *before* the update. You can find the current version by calling &#x60;GET /services/{id}&#x60; |
 **body** | [**\Piurafunk\Docker\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |
 **registryAuthFrom** | **string**| If the &#x60;X-Registry-Auth&#x60; header is not specified, this parameter indicates where to find registry authorization credentials. | [optional] [default to &#39;spec&#39;]
 **rollback** | **string**| Set to this parameter to &#x60;previous&#x60; to cause a server-side rollback to the previous service spec. The supplied spec will be ignored in this case. | [optional]
 **xRegistryAuth** | **string**| A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication) | [optional]

### Return type

[**\Piurafunk\Docker\Model\ServiceUpdateResponse**](../Model/ServiceUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

