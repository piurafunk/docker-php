# # ClusterInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iD** | **string** | The ID of the swarm. | [optional] 
**version** | [**\Piurafunk\Docker\Model\ObjectVersion**](ObjectVersion.md) |  | [optional] 
**createdAt** | **string** | Date and time at which the swarm was initialised in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds. | [optional] 
**updatedAt** | **string** | Date and time at which the swarm was last updated in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds. | [optional] 
**spec** | [**\Piurafunk\Docker\Model\SwarmSpec**](SwarmSpec.md) |  | [optional] 
**tLSInfo** | [**\Piurafunk\Docker\Model\TLSInfo**](TLSInfo.md) |  | [optional] 
**rootRotationInProgress** | **bool** | Whether there is currently a root CA rotation in progress for the swarm | [optional] 
**dataPathPort** | **int** | DataPathPort specifies the data path port number for data traffic. Acceptable port range is 1024 to 49151. If no port is set or is set to 0, the default port (4789) is used. | [optional] 
**defaultAddrPool** | **string[]** | Default Address Pool specifies default subnet pools for global scope networks. | [optional] 
**subnetSize** | **int** | SubnetSize specifies the subnet size of the networks created from the default subnet pool | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


