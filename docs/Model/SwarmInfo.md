# # SwarmInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodeID** | **string** | Unique identifier of for this node in the swarm. | [optional] [default to '']
**nodeAddr** | **string** | IP address at which this node can be reached by other nodes in the swarm. | [optional] [default to '']
**localNodeState** | [**\Piurafunk\Docker\Model\LocalNodeState**](LocalNodeState.md) |  | [optional] 
**controlAvailable** | **bool** |  | [optional] [default to false]
**error** | **string** |  | [optional] [default to '']
**remoteManagers** | [**\Piurafunk\Docker\Model\PeerNode[]**](PeerNode.md) | List of ID&#39;s and addresses of other managers in the swarm. | [optional] 
**nodes** | **int** | Total number of nodes in the swarm. | [optional] 
**managers** | **int** | Total number of managers in the swarm. | [optional] 
**cluster** | [**\Piurafunk\Docker\Model\ClusterInfo**](ClusterInfo.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


