# # VerifyFactorSamlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | App ID of the app for which you want to generate a SAML token. This is the app ID in OneLogin. |
**device_id** | **string** | Provide the MFA device_id you are submitting for verification. The device_id is supplied by the Generate SAML Assertion API. |
**state_token** | **string** | state_token associated with the MFA device_id you are submitting. The state_token is supplied by the Generate SAML Assertion API. |
**otp_token** | **string** | Provide the OTP value for the MFA factor you are submitting for verification. | [optional]
**do_not_notify** | **bool** | When verifying MFA via Protect Push, set this to true to stop additional push notifications being sent to the OneLogin Protect device. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
