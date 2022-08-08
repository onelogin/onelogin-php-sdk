# # FactorInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | MFA device identifier. | [optional]
**status** | **string** | accepted : factor has been verified. pending: registered but has not been verified. | [optional]
**default** | **bool** | True &#x3D; is user&#39;s default MFA device for OneLogin. | [optional]
**auth_factor_name** | **string** | \&quot;Official\&quot; authentication factor name, as it appears to administrators in OneLogin. | [optional]
**type_display_name** | **string** | Authentication factor display name as it appears to users upon initial registration, as defined by admins at Settings &gt; Authentication Factors. | [optional]
**user_display_name** | **string** | Authentication factor display name assigned by users when they enroll the device. | [optional]
**expires_at** | **string** | A short lived token that is required to Verify the Factor. This token expires based on the expires_in parameter passed in. | [optional]
**factor_data** | [**\OpenAPI\Client\Model\FactorInnerFactorData**](FactorInnerFactorData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
