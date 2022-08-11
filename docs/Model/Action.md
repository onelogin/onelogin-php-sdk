# # Action

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The action to apply | [optional]
**value** | **string[]** | Only applicable to provisioned and set_* actions. Items in the array will be a plain text string or valid value for the selected action. | [optional]
**expression** | **string** | A regular expression to extract a value. Applies to provisionable, multi-selects, and string actions. | [optional]
**scriplet** | **string** | A hash containing scriptlet code that returns a value. | [optional]
**macro** | **string** | A template to construct a value. Applies to default, string, and list actions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
