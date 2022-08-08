# # Schema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Apps unique ID in OneLogin. | [optional]
**connector_id** | **int** | ID of the apps underlying connector. | [optional]
**name** | **string** | App name. | [optional]
**description** | **string** | Freeform description of the app. | [optional]
**notes** | **string** | Freeform notes about the app. | [optional]
**policy_id** | **int** | The security policy assigned to the app. | [optional]
**brand_id** | **int** | The custom login page branding to use for this app. Applies to app initiated logins via OIDC or SAML. | [optional]
**icon_url** | **string** | A link to the apps icon url. | [optional]
**visible** | **bool** | Indicates if the app is visible in the OneLogin portal. | [optional]
**auth_method** | **int** | An ID indicating the type of app. | [optional]
**tab_id** | **int** | ID of the OneLogin portal tab that the app is assigned to. | [optional]
**created_at** | **string** | The date the app was created. | [optional]
**updated_at** | **string** | The date the app was last updated. | [optional]
**role_ids** | **int[]** | List of Role IDs that are assigned to the app. On App Create or Update the entire array is replaced with the values provided. | [optional]
**allow_assumed_signin** | **bool** | Indicates whether or not administrators can access the app as a user that they have assumed control over. | [optional]
**provisioning** | [**\OpenAPI\Client\Model\SchemaProvisioning**](SchemaProvisioning.md) |  | [optional]
**sso** | **object** |  | [optional]
**configuration** | **object** |  | [optional]
**parameters** | **object** |  | [optional]
**enforcement_point** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
