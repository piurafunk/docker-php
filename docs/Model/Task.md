# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iD** | **string** | The ID of the task. | [optional] 
**version** | [**\Piurafunk\Docker\Model\ObjectVersion**](ObjectVersion.md) |  | [optional] 
**createdAt** | **string** |  | [optional] 
**updatedAt** | **string** |  | [optional] 
**name** | **string** | Name of the task. | [optional] 
**labels** | **map[string,string]** | User-defined key/value metadata. | [optional] 
**spec** | [**\Piurafunk\Docker\Model\TaskSpec**](TaskSpec.md) |  | [optional] 
**serviceID** | **string** | The ID of the service this task is part of. | [optional] 
**slot** | **int** |  | [optional] 
**nodeID** | **string** | The ID of the node that this task is on. | [optional] 
**assignedGenericResources** | **object[]** | User-defined resources can be either Integer resources (e.g, &#x60;SSD&#x3D;3&#x60;) or String resources (e.g, &#x60;GPU&#x3D;UUID1&#x60;) | [optional] 
**status** | [**\Piurafunk\Docker\Model\TaskStatus**](TaskStatus.md) |  | [optional] 
**desiredState** | [**\Piurafunk\Docker\Model\TaskState**](TaskState.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


