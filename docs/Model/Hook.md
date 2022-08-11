# # Hook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Hook unique ID in OneLogin. | [optional]
**type** | **string** | A string describing the type of hook. e.g. &#x60;pre-authentication&#x60; |
**disabled** | **bool** | Boolean to enable or disable the hook. Disabled hooks will not run. | [default to true]
**timeout** | **int** | The number of seconds to allow the hook function to run before before timing out. Maximum timeout varies based on the type of hook. | [default to 1]
**env_vars** | **string[]** | Environment Variable objects that will be available via process.env.ENV_VAR_NAME in the hook code. |
**runtime** | **string** | The Smart Hooks supported Node.js version to execute this hook with. |
**retries** | **int** | Number of retries if execution fails. | [default to 0]
**packages** | **object** | An object containing NPM packages that are bundled with the hook function. |
**function** | **string** | A base64 encoded string containing the javascript function code. |
**context_version** | **string** | The semantic version of the content that will be injected into this hook. | [optional]
**status** | **string** | String describing the state of the hook function. When a hook is ready and disabled is false it will be executed. | [optional]
**options** | [**\onelogin/sdk\Model\HookOptions**](HookOptions.md) |  | [optional]
**conditions** | [**\onelogin/sdk\Model\HookConditionsInner[]**](HookConditionsInner.md) | An array of objects that let you limit the execution of a hook to users in specific roles. | [optional]
**created_at** | **string** | ISO8601 format date that they hook function was created. | [optional]
**updated_at** | **string** | ISO8601 format date that they hook function was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
