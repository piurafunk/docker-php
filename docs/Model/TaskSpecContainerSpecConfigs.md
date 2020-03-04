# # TaskSpecContainerSpecConfigs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file** | [**\Piurafunk\Docker\Model\TaskSpecContainerSpecFile1**](TaskSpecContainerSpecFile1.md) |  | [optional] 
**runtime** | [**object**](.md) | Runtime represents a target that is not mounted into the container but is used by the task  &lt;p&gt;&lt;br /&gt;&lt;p&gt;  &gt; **Note**: &#x60;Configs.File&#x60; and &#x60;Configs.Runtime&#x60; are mutually exclusive | [optional] 
**configID** | **string** | ConfigID represents the ID of the specific config that we&#39;re referencing. | [optional] 
**configName** | **string** | ConfigName is the name of the config that this references, but this is just provided for lookup/display purposes. The config in the reference will be identified by its ID. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


