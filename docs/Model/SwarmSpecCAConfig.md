# # SwarmSpecCAConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodeCertExpiry** | **int** | The duration node certificates are issued for. | [optional] 
**externalCAs** | [**\Piurafunk\Docker\Model\SwarmSpecCAConfigExternalCAs[]**](SwarmSpecCAConfigExternalCAs.md) | Configuration for forwarding signing requests to an external certificate authority. | [optional] 
**signingCACert** | **string** | The desired signing CA certificate for all swarm node TLS leaf certificates, in PEM format. | [optional] 
**signingCAKey** | **string** | The desired signing CA key for all swarm node TLS leaf certificates, in PEM format. | [optional] 
**forceRotate** | **int** | An integer whose purpose is to force swarm to generate a new signing CA certificate and key, if none have been specified in &#x60;SigningCACert&#x60; and &#x60;SigningCAKey&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


