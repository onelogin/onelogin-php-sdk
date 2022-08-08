# # GenerateSamlAssertionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username_or_email** | **string** | Set this to the username or email of the OneLogin user accessing the app for which you want to generate a SAML token. |
**password** | **string** | Password of the OneLogin user accessing the app for which you want to generate a SAML token. |
**app_id** | **string** | App ID of the app for which you want to generate a SAML token. This is the app ID in OneLogin. |
**subdomain** | **string** | Set to the subdomain of the OneLogin user accessing the app for which you want to generate a SAML token. |
**ip_address** | **string** | Whitelisted IP address, if MFA is required and you need to honor IP address whitelisting defined in MFA policies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
