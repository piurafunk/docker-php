# # TaskSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pluginSpec** | [**\Piurafunk\Docker\Model\TaskSpecPluginSpec**](TaskSpecPluginSpec.md) |  | [optional] 
**containerSpec** | [**\Piurafunk\Docker\Model\TaskSpecContainerSpec**](TaskSpecContainerSpec.md) |  | [optional] 
**networkAttachmentSpec** | [**\Piurafunk\Docker\Model\TaskSpecNetworkAttachmentSpec**](TaskSpecNetworkAttachmentSpec.md) |  | [optional] 
**resources** | [**\Piurafunk\Docker\Model\TaskSpecResources**](TaskSpecResources.md) |  | [optional] 
**restartPolicy** | [**\Piurafunk\Docker\Model\TaskSpecRestartPolicy**](TaskSpecRestartPolicy.md) |  | [optional] 
**placement** | [**\Piurafunk\Docker\Model\TaskSpecPlacement**](TaskSpecPlacement.md) |  | [optional] 
**forceUpdate** | **int** | A counter that triggers an update even if no relevant parameters have been changed. | [optional] 
**runtime** | **string** | Runtime is the type of runtime specified for the task executor. | [optional] 
**networks** | [**\Piurafunk\Docker\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional] 
**logDriver** | [**\Piurafunk\Docker\Model\TaskSpecLogDriver**](TaskSpecLogDriver.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


