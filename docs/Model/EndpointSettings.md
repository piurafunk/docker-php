# # EndpointSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iPAMConfig** | [**\Piurafunk\Docker\Model\EndpointIPAMConfig**](EndpointIPAMConfig.md) |  | [optional] 
**links** | **string[]** |  | [optional] 
**aliases** | **string[]** |  | [optional] 
**networkID** | **string** | Unique ID of the network. | [optional] 
**endpointID** | **string** | Unique ID for the service endpoint in a Sandbox. | [optional] 
**gateway** | **string** | Gateway address for this network. | [optional] 
**iPAddress** | **string** | IPv4 address. | [optional] 
**iPPrefixLen** | **int** | Mask length of the IPv4 address. | [optional] 
**iPv6Gateway** | **string** | IPv6 gateway address. | [optional] 
**globalIPv6Address** | **string** | Global IPv6 address. | [optional] 
**globalIPv6PrefixLen** | **int** | Mask length of the global IPv6 address. | [optional] 
**macAddress** | **string** | MAC address for the endpoint on this network. | [optional] 
**driverOpts** | **map[string,string]** | DriverOpts is a mapping of driver options and values. These options are passed directly to the driver and are driver specific. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


