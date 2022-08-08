# # TrackEventRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verb** | **string** | Verbs are used to distinguish between different types of events. |
**ip** | **string** | The IP address of the User&#39;s request. |
**user_agent** | **string** | The user agent of the User&#39;s request. |
**user** | [**\OpenAPI\Client\Model\RiskUser**](RiskUser.md) |  |
**source** | [**\OpenAPI\Client\Model\Source**](Source.md) |  | [optional]
**session** | [**\OpenAPI\Client\Model\Session**](Session.md) |  | [optional]
**device** | [**\OpenAPI\Client\Model\RiskDevice**](RiskDevice.md) |  | [optional]
**fp** | **string** | Set to the value of the __tdli_fp cookie. | [optional]
**published** | **string** | Date and time of the event in IS08601 format. Useful for preloading old events. Defaults to date time this API request is received. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
