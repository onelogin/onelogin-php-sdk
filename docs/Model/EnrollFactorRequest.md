# # EnrollFactorRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**factor_id** | **int** | The identifier of the factor to enroll the user with. |
**display_name** | **string** | A name for the users device. |
**expires_in** | **string** | Defaults to 120. Valid values are: 120-900 seconds. | [optional]
**verified** | **bool** | Defaults to false. | [optional]
**redirect_to** | **string** | Redirects MagicLink success page to specified URL after 2 seconds. | [optional]
**custom_message** | **string** | A message template that will be sent via SMS. Max length of the message after template items are inserted is 160 characters including the OTP code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
