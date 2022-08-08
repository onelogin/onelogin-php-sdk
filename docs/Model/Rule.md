# # Rule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | The name of the rule. | [optional]
**match** | **string** | Indicates how conditions should be matched. | [optional]
**enabled** | **bool** | Indicates if the rule is enabled or not. | [optional]
**position** | **int** | Indicates the order of the rule. When &#x60;null&#x60; this will default to last position. | [optional]
**conditions** | [**\OpenAPI\Client\Model\Condition[]**](Condition.md) | An array of conditions that the user must meet in order for the rule to be applied. | [optional]
**actions** | [**\OpenAPI\Client\Model\Action[]**](Action.md) | An array of actions that will be applied to the users that are matched by the conditions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
