# # ServiceSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the service. | [optional] 
**labels** | **map[string,string]** | User-defined key/value metadata. | [optional] 
**taskTemplate** | [**\Piurafunk\Docker\Model\TaskSpec**](TaskSpec.md) |  | [optional] 
**mode** | [**\Piurafunk\Docker\Model\ServiceSpecMode**](ServiceSpecMode.md) |  | [optional] 
**updateConfig** | [**\Piurafunk\Docker\Model\ServiceSpecUpdateConfig**](ServiceSpecUpdateConfig.md) |  | [optional] 
**rollbackConfig** | [**\Piurafunk\Docker\Model\ServiceSpecRollbackConfig**](ServiceSpecRollbackConfig.md) |  | [optional] 
**networks** | [**\Piurafunk\Docker\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional] 
**endpointSpec** | [**\Piurafunk\Docker\Model\EndpointSpec**](EndpointSpec.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


