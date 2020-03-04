# # ContainerInspectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the container | [optional] 
**created** | **string** | The time the container was created | [optional] 
**path** | **string** | The path to the command being run | [optional] 
**args** | **string[]** | The arguments to the command being run | [optional] 
**state** | [**\Piurafunk\Docker\Model\ContainerState**](ContainerState.md) |  | [optional] 
**image** | **string** | The container&#39;s image | [optional] 
**resolvConfPath** | **string** |  | [optional] 
**hostnamePath** | **string** |  | [optional] 
**hostsPath** | **string** |  | [optional] 
**logPath** | **string** |  | [optional] 
**node** | [**object**](.md) | TODO | [optional] 
**name** | **string** |  | [optional] 
**restartCount** | **int** |  | [optional] 
**driver** | **string** |  | [optional] 
**platform** | **string** |  | [optional] 
**mountLabel** | **string** |  | [optional] 
**processLabel** | **string** |  | [optional] 
**appArmorProfile** | **string** |  | [optional] 
**execIDs** | **string[]** | IDs of exec instances that are running in the container. | [optional] 
**hostConfig** | [**\Piurafunk\Docker\Model\HostConfig**](HostConfig.md) |  | [optional] 
**graphDriver** | [**\Piurafunk\Docker\Model\GraphDriverData**](GraphDriverData.md) |  | [optional] 
**sizeRw** | **int** | The size of files that have been created or changed by this container. | [optional] 
**sizeRootFs** | **int** | The total size of all the files in this container. | [optional] 
**mounts** | [**\Piurafunk\Docker\Model\MountPoint[]**](MountPoint.md) |  | [optional] 
**config** | [**\Piurafunk\Docker\Model\ContainerConfig**](ContainerConfig.md) |  | [optional] 
**networkSettings** | [**\Piurafunk\Docker\Model\NetworkSettings**](NetworkSettings.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


