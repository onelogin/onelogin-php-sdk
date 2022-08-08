# OpenAPI\Client\DefaultApi

All URIs are relative to https://onelogininc.onelogin.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateFactor()**](DefaultApi.md#activateFactor) | **POST** /api/2/mfa/users/{user_id}/verifications | 
[**addAccessTokenClaim()**](DefaultApi.md#addAccessTokenClaim) | **POST** /api/2/api_authorizations/{id}/claims | 
[**addClientApp()**](DefaultApi.md#addClientApp) | **POST** /api/2/api_authorizations/{id}/clients | 
[**addRoleAdmins()**](DefaultApi.md#addRoleAdmins) | **POST** /api/2/roles/{role_id}/admins | 
[**addRoleUsers()**](DefaultApi.md#addRoleUsers) | **POST** /api/2/roles/{role_id}/users | 
[**addScope()**](DefaultApi.md#addScope) | **POST** /api/2/api_authorizations/{id}/scopes | 
[**bulkMappingSort()**](DefaultApi.md#bulkMappingSort) | **PUT** /api/2/apps/mappings/sort | 
[**bulkSort()**](DefaultApi.md#bulkSort) | **PUT** /api/2/apps/{app_id}/rules/sort | 
[**createApp()**](DefaultApi.md#createApp) | **POST** /api/2/apps | 
[**createAuthorizationServer()**](DefaultApi.md#createAuthorizationServer) | **POST** /api/2/api_authorizations | 
[**createEnvironmentVariable()**](DefaultApi.md#createEnvironmentVariable) | **POST** /api/2/hooks/envs | 
[**createHook()**](DefaultApi.md#createHook) | **POST** /api/2/hooks | 
[**createMapping()**](DefaultApi.md#createMapping) | **POST** /api/2/mappings | 
[**createRiskRule()**](DefaultApi.md#createRiskRule) | **POST** /api/2/risk/rules | 
[**createRoles()**](DefaultApi.md#createRoles) | **POST** /api/2/roles | 
[**createRule()**](DefaultApi.md#createRule) | **POST** /api/2/apps/{app_id}/rules | 
[**createUser()**](DefaultApi.md#createUser) | **POST** /api/2/users | 
[**deleteAccessTokenClaim()**](DefaultApi.md#deleteAccessTokenClaim) | **DELETE** /api/2/api_authorizations/{id}/claims/{claim_id} | 
[**deleteApp()**](DefaultApi.md#deleteApp) | **DELETE** /api/2/apps/{app_id} | 
[**deleteAppParameter()**](DefaultApi.md#deleteAppParameter) | **DELETE** /api/2/apps/{app_id}/parameters/{parameter_id} | 
[**deleteAuthorizationServer()**](DefaultApi.md#deleteAuthorizationServer) | **DELETE** /api/2/api_authorizations/{id} | 
[**deleteEnvironmentVariable()**](DefaultApi.md#deleteEnvironmentVariable) | **DELETE** /api/2/hooks/envs/{envvar_id} | 
[**deleteFactor()**](DefaultApi.md#deleteFactor) | **DELETE** /api/2/mfa/users/{user_id}/devices/{device_id} | 
[**deleteHook()**](DefaultApi.md#deleteHook) | **DELETE** /api/2/hooks/{hook_id} | 
[**deleteMapping()**](DefaultApi.md#deleteMapping) | **DELETE** /api/2/mappings/{mapping_id} | 
[**deleteRiskRule()**](DefaultApi.md#deleteRiskRule) | **DELETE** /api/2/risk/rules/{risk_rule_id} | 
[**deleteRole()**](DefaultApi.md#deleteRole) | **DELETE** /api/2/roles/{role_id} | 
[**deleteRule()**](DefaultApi.md#deleteRule) | **DELETE** /api/2/apps/{app_id}/rules/{rule_id} | 
[**deleteScope()**](DefaultApi.md#deleteScope) | **DELETE** /api/2/api_authorizations/{id}/scopes/{scope_id} | 
[**deleteUser()**](DefaultApi.md#deleteUser) | **DELETE** /api/2/users/{user_id} | 
[**dryRunMapping()**](DefaultApi.md#dryRunMapping) | **POST** /api/2/mappings/{mapping_id}/dryrun | 
[**enrollFactor()**](DefaultApi.md#enrollFactor) | **POST** /api/2/mfa/users/{user_id}/registrations | 
[**generateMfaToken()**](DefaultApi.md#generateMfaToken) | **POST** /api/2/mfs/users/{user_id}/mfa_token | 
[**generateSamlAssertion()**](DefaultApi.md#generateSamlAssertion) | **POST** /api/2/saml_assertion | 
[**generateToken()**](DefaultApi.md#generateToken) | **POST** /auth/oauth2/v2/token | 
[**getApp()**](DefaultApi.md#getApp) | **GET** /api/2/apps/{app_id} | 
[**getAuthorizationServer()**](DefaultApi.md#getAuthorizationServer) | **GET** /api/2/api_authorizations/{id} | 
[**getAvailableFactors()**](DefaultApi.md#getAvailableFactors) | **GET** /api/2/mfa/users/{user_id}/factors | 
[**getClientApps()**](DefaultApi.md#getClientApps) | **GET** /api/2/api_authorizations/{id}/clients | 
[**getEnrolledFactors()**](DefaultApi.md#getEnrolledFactors) | **GET** /api/2/mfa/users/{user_id}/devices | 
[**getEnvironmentVariable()**](DefaultApi.md#getEnvironmentVariable) | **GET** /api/2/hooks/envs/{envvar_id} | 
[**getHook()**](DefaultApi.md#getHook) | **GET** /api/2/hooks/{hook_id} | 
[**getLogs()**](DefaultApi.md#getLogs) | **GET** /api/2/hooks/{hook_id}/logs | 
[**getMapping()**](DefaultApi.md#getMapping) | **GET** /api/2/mappings/{mapping_id} | 
[**getRateLimit()**](DefaultApi.md#getRateLimit) | **GET** /auth/rate_limit | 
[**getRiskRule()**](DefaultApi.md#getRiskRule) | **GET** /api/2/risk/rules/{risk_rule_id} | 
[**getRiskScore()**](DefaultApi.md#getRiskScore) | **POST** /api/2/risk/verify | 
[**getRole()**](DefaultApi.md#getRole) | **GET** /api/2/roles/{role_id} | 
[**getRoleAdmins()**](DefaultApi.md#getRoleAdmins) | **GET** /api/2/roles/{role_id}/admins | 
[**getRoleApps()**](DefaultApi.md#getRoleApps) | **GET** /api/2/roles/{role_id}/apps | 
[**getRoleUsers()**](DefaultApi.md#getRoleUsers) | **GET** /api/2/roles/{role_id}/users | 
[**getRule()**](DefaultApi.md#getRule) | **GET** /api/2/apps/{app_id}/rules/{rule_id} | 
[**getScoreInsights()**](DefaultApi.md#getScoreInsights) | **GET** /api/2/risk/scores | 
[**getUser()**](DefaultApi.md#getUser) | **GET** /api/2/users/{user_id} | 
[**getUserApps()**](DefaultApi.md#getUserApps) | **GET** /api/2/users/{user_id}/apps | 
[**listAccessTokenClaims()**](DefaultApi.md#listAccessTokenClaims) | **GET** /api/2/api_authorizations/{id}/claims | 
[**listActionValues()**](DefaultApi.md#listActionValues) | **GET** /api/2/apps/{app_id}/rules/actions/{actuion_value}/values | 
[**listActions()**](DefaultApi.md#listActions) | **GET** /api/2/apps/{app_id}/rules/actions | 
[**listAppUsers()**](DefaultApi.md#listAppUsers) | **GET** /api/2/apps/{app_id}/users | 
[**listApps()**](DefaultApi.md#listApps) | **GET** /api/2/apps | 
[**listAuthorizationServers()**](DefaultApi.md#listAuthorizationServers) | **GET** /api/2/api_authorizations | 
[**listConditionOperators()**](DefaultApi.md#listConditionOperators) | **GET** /api/2/apps/{app_id}/rules/conditions/{condition_value}/operators | 
[**listConditionValues()**](DefaultApi.md#listConditionValues) | **GET** /api/2/apps/{app_id}/rules/conditions/{condition_value}/values | 
[**listConditions()**](DefaultApi.md#listConditions) | **GET** /api/2/apps/{app_id}/rules/conditions | 
[**listConnectors()**](DefaultApi.md#listConnectors) | **GET** /api/2/connectors | 
[**listEnvironmentVariables()**](DefaultApi.md#listEnvironmentVariables) | **GET** /api/2/hooks/envs | 
[**listHooks()**](DefaultApi.md#listHooks) | **GET** /api/2/hooks | 
[**listMappingActionValues()**](DefaultApi.md#listMappingActionValues) | **GET** /api/2/apps/mappings/actions/{actuion_value}/values | 
[**listMappingActions()**](DefaultApi.md#listMappingActions) | **GET** /api/2/apps/mappings/actions | 
[**listMappingConditionOperators()**](DefaultApi.md#listMappingConditionOperators) | **GET** /api/2/apps/mappings/conditions/{condition_value}/operators | 
[**listMappingConditionValues()**](DefaultApi.md#listMappingConditionValues) | **GET** /api/2/apps/mappings/conditions/{condition_value}/values | 
[**listMappingConditions()**](DefaultApi.md#listMappingConditions) | **GET** /api/2/apps/mappings/conditions | 
[**listMappings()**](DefaultApi.md#listMappings) | **GET** /api/2/mappings | 
[**listRiskRules()**](DefaultApi.md#listRiskRules) | **GET** /api/2/risk/rules | 
[**listRoles()**](DefaultApi.md#listRoles) | **GET** /api/2/roles | 
[**listRules()**](DefaultApi.md#listRules) | **GET** /api/2/apps/{app_id}/rules | 
[**listScopes()**](DefaultApi.md#listScopes) | **GET** /api/2/api_authorizations/{id}/scopes | 
[**listUsers()**](DefaultApi.md#listUsers) | **GET** /api/2/users | 
[**removeClientApp()**](DefaultApi.md#removeClientApp) | **DELETE** /api/2/api_authorizations/{id}/clients/{client_app_id} | 
[**removeRoleAdmins()**](DefaultApi.md#removeRoleAdmins) | **DELETE** /api/2/roles/{role_id}/admins | 
[**removeRoleUsers()**](DefaultApi.md#removeRoleUsers) | **DELETE** /api/2/roles/{role_id}/users | 
[**revokeToken()**](DefaultApi.md#revokeToken) | **POST** /auth/oauth2/revoke | 
[**setRoleApps()**](DefaultApi.md#setRoleApps) | **PUT** /api/2/roles/{role_id}/apps | 
[**trackEvent()**](DefaultApi.md#trackEvent) | **POST** /api/2/risk/events | 
[**updateAccessTokenClaim()**](DefaultApi.md#updateAccessTokenClaim) | **PUT** /api/2/api_authorizations/{id}/claims/{claim_id} | 
[**updateApp()**](DefaultApi.md#updateApp) | **PUT** /api/2/apps/{app_id} | 
[**updateAuthorizationServer()**](DefaultApi.md#updateAuthorizationServer) | **PUT** /api/2/api_authorizations/{id} | 
[**updateClientApp()**](DefaultApi.md#updateClientApp) | **PUT** /api/2/api_authorizations/{id}/clients/{client_app_id} | 
[**updateEnvironmentVariable()**](DefaultApi.md#updateEnvironmentVariable) | **PUT** /api/2/hooks/envs/{envvar_id} | 
[**updateHook()**](DefaultApi.md#updateHook) | **PUT** /api/2/hooks/{hook_id} | 
[**updateMapping()**](DefaultApi.md#updateMapping) | **PUT** /api/2/mappings/{mapping_id} | 
[**updateRiskRule()**](DefaultApi.md#updateRiskRule) | **PUT** /api/2/risk/rules/{risk_rule_id} | 
[**updateRole()**](DefaultApi.md#updateRole) | **PUT** /api/2/roles/{role_id} | 
[**updateRule()**](DefaultApi.md#updateRule) | **PUT** /api/2/apps/{app_id}/rules/{rule_id} | 
[**updateScope()**](DefaultApi.md#updateScope) | **PUT** /api/2/api_authorizations/{id}/scopes/{scope_id} | 
[**updateUser()**](DefaultApi.md#updateUser) | **PUT** /api/2/users/{user_id} | 
[**verifyEnrollment()**](DefaultApi.md#verifyEnrollment) | **PUT** /api/2/mfa/users/{user_id}/registrations/{registration_id} | 
[**verifyEnrollmentVoiceProtect()**](DefaultApi.md#verifyEnrollmentVoiceProtect) | **GET** /api/2/mfa/users/{user_id}/registrations/{registration_id} | 
[**verifyFactor()**](DefaultApi.md#verifyFactor) | **PUT** /api/2/mfa/users/{user_id}/verifications/{verification_id} | 
[**verifyFactorSaml()**](DefaultApi.md#verifyFactorSaml) | **POST** /api/2/saml_assertion/verify_factor | 
[**verifyFactorVoice()**](DefaultApi.md#verifyFactorVoice) | **GET** /api/2/mfa/users/{user_id}/verifications/{verification_id} | 


## `activateFactor()`

```php
activateFactor($authorization, $user_id, $activate_factor_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$activate_factor_request = new \OpenAPI\Client\Model\ActivateFactorRequest(); // \OpenAPI\Client\Model\ActivateFactorRequest

try {
    $apiInstance->activateFactor($authorization, $user_id, $activate_factor_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->activateFactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **activate_factor_request** | [**\OpenAPI\Client\Model\ActivateFactorRequest**](../Model/ActivateFactorRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAccessTokenClaim()`

```php
addAccessTokenClaim($authorization, $id, $add_access_token_claim_request): \OpenAPI\Client\Model\Id
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$add_access_token_claim_request = new \OpenAPI\Client\Model\AddAccessTokenClaimRequest(); // \OpenAPI\Client\Model\AddAccessTokenClaimRequest

try {
    $result = $apiInstance->addAccessTokenClaim($authorization, $id, $add_access_token_claim_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addAccessTokenClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **add_access_token_claim_request** | [**\OpenAPI\Client\Model\AddAccessTokenClaimRequest**](../Model/AddAccessTokenClaimRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addClientApp()`

```php
addClientApp($authorization, $id, $add_client_app_request): \OpenAPI\Client\Model\ClientApp
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$add_client_app_request = new \OpenAPI\Client\Model\AddClientAppRequest(); // \OpenAPI\Client\Model\AddClientAppRequest

try {
    $result = $apiInstance->addClientApp($authorization, $id, $add_client_app_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **add_client_app_request** | [**\OpenAPI\Client\Model\AddClientAppRequest**](../Model/AddClientAppRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addRoleAdmins()`

```php
addRoleAdmins($authorization, $role_id, $request_body): \OpenAPI\Client\Model\AddRoleUsers200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->addRoleAdmins($authorization, $role_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addRoleAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **request_body** | [**int[]**](../Model/int.md)|  |

### Return type

[**\OpenAPI\Client\Model\AddRoleUsers200ResponseInner[]**](../Model/AddRoleUsers200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addRoleUsers()`

```php
addRoleUsers($authorization, $role_id, $request_body): \OpenAPI\Client\Model\AddRoleUsers200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->addRoleUsers($authorization, $role_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addRoleUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **request_body** | [**int[]**](../Model/int.md)|  |

### Return type

[**\OpenAPI\Client\Model\AddRoleUsers200ResponseInner[]**](../Model/AddRoleUsers200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addScope()`

```php
addScope($authorization, $id, $add_scope_request): \OpenAPI\Client\Model\Id
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$add_scope_request = new \OpenAPI\Client\Model\AddScopeRequest(); // \OpenAPI\Client\Model\AddScopeRequest

try {
    $result = $apiInstance->addScope($authorization, $id, $add_scope_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addScope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **add_scope_request** | [**\OpenAPI\Client\Model\AddScopeRequest**](../Model/AddScopeRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkMappingSort()`

```php
bulkMappingSort($authorization, $request_body): int[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$request_body = array(56); // int[] | The request body must contain an array of User Mapping IDs in the desired order.

try {
    $result = $apiInstance->bulkMappingSort($authorization, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bulkMappingSort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **request_body** | [**int[]**](../Model/int.md)| The request body must contain an array of User Mapping IDs in the desired order. |

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSort()`

```php
bulkSort($authorization, $app_id, $request_body): int[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$request_body = array(56); // int[] | The request body must contain an array of App Rule IDs in the desired order.

try {
    $result = $apiInstance->bulkSort($authorization, $app_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bulkSort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **request_body** | [**int[]**](../Model/int.md)| The request body must contain an array of App Rule IDs in the desired order. |

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApp()`

```php
createApp($authorization, $schema): \OpenAPI\Client\Model\Schema
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$schema = new \OpenAPI\Client\Model\Schema(); // \OpenAPI\Client\Model\Schema

try {
    $result = $apiInstance->createApp($authorization, $schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **schema** | [**\OpenAPI\Client\Model\Schema**](../Model/Schema.md)|  |

### Return type

[**\OpenAPI\Client\Model\Schema**](../Model/Schema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAuthorizationServer()`

```php
createAuthorizationServer($authorization, $create_authorization_server_request): \OpenAPI\Client\Model\Id
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$create_authorization_server_request = new \OpenAPI\Client\Model\CreateAuthorizationServerRequest(); // \OpenAPI\Client\Model\CreateAuthorizationServerRequest

try {
    $result = $apiInstance->createAuthorizationServer($authorization, $create_authorization_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAuthorizationServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **create_authorization_server_request** | [**\OpenAPI\Client\Model\CreateAuthorizationServerRequest**](../Model/CreateAuthorizationServerRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnvironmentVariable()`

```php
createEnvironmentVariable($authorization, $create_environment_variable_request): \OpenAPI\Client\Model\Envvar
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$create_environment_variable_request = new \OpenAPI\Client\Model\CreateEnvironmentVariableRequest(); // \OpenAPI\Client\Model\CreateEnvironmentVariableRequest

try {
    $result = $apiInstance->createEnvironmentVariable($authorization, $create_environment_variable_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **create_environment_variable_request** | [**\OpenAPI\Client\Model\CreateEnvironmentVariableRequest**](../Model/CreateEnvironmentVariableRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Envvar**](../Model/Envvar.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHook()`

```php
createHook($authorization, $hook)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$hook = new \OpenAPI\Client\Model\Hook(); // \OpenAPI\Client\Model\Hook

try {
    $apiInstance->createHook($authorization, $hook);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **hook** | [**\OpenAPI\Client\Model\Hook**](../Model/Hook.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMapping()`

```php
createMapping($authorization, $mapping): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$mapping = new \OpenAPI\Client\Model\Mapping(); // \OpenAPI\Client\Model\Mapping

try {
    $result = $apiInstance->createMapping($authorization, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **mapping** | [**\OpenAPI\Client\Model\Mapping**](../Model/Mapping.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRiskRule()`

```php
createRiskRule($authorization, $risk_rule)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$risk_rule = new \OpenAPI\Client\Model\RiskRule(); // \OpenAPI\Client\Model\RiskRule

try {
    $apiInstance->createRiskRule($authorization, $risk_rule);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createRiskRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **risk_rule** | [**\OpenAPI\Client\Model\RiskRule**](../Model/RiskRule.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoles()`

```php
createRoles($authorization): \OpenAPI\Client\Model\CreateRoles201ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->createRoles($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\CreateRoles201ResponseInner[]**](../Model/CreateRoles201ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRule()`

```php
createRule($authorization, $app_id, $rule): \OpenAPI\Client\Model\RuleId
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$rule = new \OpenAPI\Client\Model\Rule(); // \OpenAPI\Client\Model\Rule

try {
    $result = $apiInstance->createRule($authorization, $app_id, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **rule** | [**\OpenAPI\Client\Model\Rule**](../Model/Rule.md)|  |

### Return type

[**\OpenAPI\Client\Model\RuleId**](../Model/RuleId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($authorization, $user, $mappings, $validate_policy): \OpenAPI\Client\Model\User
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User
$mappings = 'mappings_example'; // string | Controls how mappings will be applied to the user on creation. Defaults to async.
$validate_policy = True; // bool | Will passwords validate against the User Policy? Defaults to true.

try {
    $result = $apiInstance->createUser($authorization, $user, $mappings, $validate_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  |
 **mappings** | **string**| Controls how mappings will be applied to the user on creation. Defaults to async. | [optional]
 **validate_policy** | **bool**| Will passwords validate against the User Policy? Defaults to true. | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccessTokenClaim()`

```php
deleteAccessTokenClaim($authorization, $id, $claim_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$claim_id = 56; // int

try {
    $apiInstance->deleteAccessTokenClaim($authorization, $id, $claim_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAccessTokenClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **claim_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApp()`

```php
deleteApp($authorization, $app_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int

try {
    $apiInstance->deleteApp($authorization, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppParameter()`

```php
deleteAppParameter($authorization, $app_id, $parameter_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$parameter_id = 56; // int

try {
    $apiInstance->deleteAppParameter($authorization, $app_id, $parameter_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAppParameter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **parameter_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAuthorizationServer()`

```php
deleteAuthorizationServer($authorization, $id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int

try {
    $apiInstance->deleteAuthorizationServer($authorization, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAuthorizationServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentVariable()`

```php
deleteEnvironmentVariable($authorization, $envvar_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$envvar_id = 'envvar_id_example'; // string | Set to the id of the Hook Environment Variable that you want to fetch.

try {
    $apiInstance->deleteEnvironmentVariable($authorization, $envvar_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **envvar_id** | **string**| Set to the id of the Hook Environment Variable that you want to fetch. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFactor()`

```php
deleteFactor($authorization, $user_id, $device_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$device_id = 56; // int | Set to the device_id of the MFA device.

try {
    $apiInstance->deleteFactor($authorization, $user_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **device_id** | **int**| Set to the device_id of the MFA device. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHook()`

```php
deleteHook($authorization, $hook_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$hook_id = 'hook_id_example'; // string | Set to the id of the Hook that you want to return.

try {
    $apiInstance->deleteHook($authorization, $hook_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **hook_id** | **string**| Set to the id of the Hook that you want to return. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMapping()`

```php
deleteMapping($authorization, $mapping_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$mapping_id = 56; // int | The id of the user mapping to locate.

try {
    $apiInstance->deleteMapping($authorization, $mapping_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **mapping_id** | **int**| The id of the user mapping to locate. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRiskRule()`

```php
deleteRiskRule($authorization, $risk_rule_id): \OpenAPI\Client\Model\RiskRule
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$risk_rule_id = 'risk_rule_id_example'; // string

try {
    $result = $apiInstance->deleteRiskRule($authorization, $risk_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteRiskRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **risk_rule_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RiskRule**](../Model/RiskRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRole()`

```php
deleteRole($authorization, $role_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.

try {
    $apiInstance->deleteRole($authorization, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRule()`

```php
deleteRule($authorization, $app_id, $rule_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$rule_id = 56; // int | The id of the app rule to locate.

try {
    $apiInstance->deleteRule($authorization, $app_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **rule_id** | **int**| The id of the app rule to locate. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScope()`

```php
deleteScope($authorization, $id, $scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$scope_id = 56; // int

try {
    $apiInstance->deleteScope($authorization, $id, $scope_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteScope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **scope_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($authorization, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user that you want to return.

try {
    $apiInstance->deleteUser($authorization, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user that you want to return. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dryRunMapping()`

```php
dryRunMapping($authorization, $mapping_id, $request_body): object[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$mapping_id = 56; // int | The id of the user mapping to locate.
$request_body = array(56); // int[] | Request body is a list of user IDs tested against the mapping conditions to verify that the mapping would be applied

try {
    $result = $apiInstance->dryRunMapping($authorization, $mapping_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dryRunMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **mapping_id** | **int**| The id of the user mapping to locate. |
 **request_body** | [**int[]**](../Model/int.md)| Request body is a list of user IDs tested against the mapping conditions to verify that the mapping would be applied |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enrollFactor()`

```php
enrollFactor($authorization, $user_id, $enroll_factor_request): array[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$enroll_factor_request = new \OpenAPI\Client\Model\EnrollFactorRequest(); // \OpenAPI\Client\Model\EnrollFactorRequest

try {
    $result = $apiInstance->enrollFactor($authorization, $user_id, $enroll_factor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->enrollFactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **enroll_factor_request** | [**\OpenAPI\Client\Model\EnrollFactorRequest**](../Model/EnrollFactorRequest.md)|  |

### Return type

**array[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateMfaToken()`

```php
generateMfaToken($authorization, $generate_mfa_token_request): \OpenAPI\Client\Model\GenerateMfaToken200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$generate_mfa_token_request = new \OpenAPI\Client\Model\GenerateMfaTokenRequest(); // \OpenAPI\Client\Model\GenerateMfaTokenRequest

try {
    $result = $apiInstance->generateMfaToken($authorization, $generate_mfa_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateMfaToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **generate_mfa_token_request** | [**\OpenAPI\Client\Model\GenerateMfaTokenRequest**](../Model/GenerateMfaTokenRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\GenerateMfaToken200Response**](../Model/GenerateMfaToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSamlAssertion()`

```php
generateSamlAssertion($authorization, $generate_saml_assertion_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$generate_saml_assertion_request = new \OpenAPI\Client\Model\GenerateSamlAssertionRequest(); // \OpenAPI\Client\Model\GenerateSamlAssertionRequest

try {
    $apiInstance->generateSamlAssertion($authorization, $generate_saml_assertion_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateSamlAssertion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **generate_saml_assertion_request** | [**\OpenAPI\Client\Model\GenerateSamlAssertionRequest**](../Model/GenerateSamlAssertionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateToken()`

```php
generateToken($authorization, $generate_token_request): \OpenAPI\Client\Model\GenerateToken200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$generate_token_request = new \OpenAPI\Client\Model\GenerateTokenRequest(); // \OpenAPI\Client\Model\GenerateTokenRequest

try {
    $result = $apiInstance->generateToken($authorization, $generate_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **generate_token_request** | [**\OpenAPI\Client\Model\GenerateTokenRequest**](../Model/GenerateTokenRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\GenerateToken200Response**](../Model/GenerateToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApp()`

```php
getApp($authorization, $app_id): \OpenAPI\Client\Model\Schema
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int

try {
    $result = $apiInstance->getApp($authorization, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Schema**](../Model/Schema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthorizationServer()`

```php
getAuthorizationServer($authorization, $id): \OpenAPI\Client\Model\GetAuthorizationServer200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->getAuthorizationServer($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAuthorizationServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\GetAuthorizationServer200Response**](../Model/GetAuthorizationServer200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableFactors()`

```php
getAvailableFactors($authorization, $user_id): \OpenAPI\Client\Model\GetAvailableFactors200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.

try {
    $result = $apiInstance->getAvailableFactors($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAvailableFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |

### Return type

[**\OpenAPI\Client\Model\GetAvailableFactors200ResponseInner[]**](../Model/GetAvailableFactors200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientApps()`

```php
getClientApps($authorization, $id): \OpenAPI\Client\Model\GetClientApps200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->getClientApps($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClientApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\GetClientApps200ResponseInner[]**](../Model/GetClientApps200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrolledFactors()`

```php
getEnrolledFactors($authorization, $user_id): \OpenAPI\Client\Model\Device[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.

try {
    $result = $apiInstance->getEnrolledFactors($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEnrolledFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |

### Return type

[**\OpenAPI\Client\Model\Device[]**](../Model/Device.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentVariable()`

```php
getEnvironmentVariable($authorization, $envvar_id): \OpenAPI\Client\Model\Envvar
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$envvar_id = 'envvar_id_example'; // string | Set to the id of the Hook Environment Variable that you want to fetch.

try {
    $result = $apiInstance->getEnvironmentVariable($authorization, $envvar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **envvar_id** | **string**| Set to the id of the Hook Environment Variable that you want to fetch. |

### Return type

[**\OpenAPI\Client\Model\Envvar**](../Model/Envvar.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHook()`

```php
getHook($authorization, $hook_id): \OpenAPI\Client\Model\Hook
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$hook_id = 'hook_id_example'; // string | Set to the id of the Hook that you want to return.

try {
    $result = $apiInstance->getHook($authorization, $hook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **hook_id** | **string**| Set to the id of the Hook that you want to return. |

### Return type

[**\OpenAPI\Client\Model\Hook**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogs()`

```php
getLogs($authorization, $hook_id, $limit, $page, $cursor, $request_id, $correlation_id): \OpenAPI\Client\Model\Log[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$hook_id = 'hook_id_example'; // string | Set to the id of the Hook that you want to return.
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$request_id = 'request_id_example'; // string | Returns logs that contain this request_id.
$correlation_id = 'correlation_id_example'; // string | Returns logs that contain this correlation_id.

try {
    $result = $apiInstance->getLogs($authorization, $hook_id, $limit, $page, $cursor, $request_id, $correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **hook_id** | **string**| Set to the id of the Hook that you want to return. |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **request_id** | **string**| Returns logs that contain this request_id. | [optional]
 **correlation_id** | **string**| Returns logs that contain this correlation_id. | [optional]

### Return type

[**\OpenAPI\Client\Model\Log[]**](../Model/Log.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMapping()`

```php
getMapping($authorization, $mapping_id): \OpenAPI\Client\Model\Mapping
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$mapping_id = 56; // int | The id of the user mapping to locate.

try {
    $result = $apiInstance->getMapping($authorization, $mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **mapping_id** | **int**| The id of the user mapping to locate. |

### Return type

[**\OpenAPI\Client\Model\Mapping**](../Model/Mapping.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRateLimit()`

```php
getRateLimit($authorization): \OpenAPI\Client\Model\GetRateLimit200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->getRateLimit($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRateLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetRateLimit200Response**](../Model/GetRateLimit200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRiskRule()`

```php
getRiskRule($authorization, $risk_rule_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$risk_rule_id = 'risk_rule_id_example'; // string

try {
    $apiInstance->getRiskRule($authorization, $risk_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRiskRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **risk_rule_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRiskScore()`

```php
getRiskScore($authorization, $get_risk_score_request): \OpenAPI\Client\Model\GetRiskScore200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$get_risk_score_request = new \OpenAPI\Client\Model\GetRiskScoreRequest(); // \OpenAPI\Client\Model\GetRiskScoreRequest

try {
    $result = $apiInstance->getRiskScore($authorization, $get_risk_score_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRiskScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **get_risk_score_request** | [**\OpenAPI\Client\Model\GetRiskScoreRequest**](../Model/GetRiskScoreRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\GetRiskScore200Response**](../Model/GetRiskScore200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRole()`

```php
getRole($authorization, $role_id): \OpenAPI\Client\Model\Role
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.

try {
    $result = $apiInstance->getRole($authorization, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleAdmins()`

```php
getRoleAdmins($authorization, $role_id, $limit, $page, $cursor, $name, $include_unassigned): \OpenAPI\Client\Model\Schema1[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$name = 'name_example'; // string | Allows you to filter on first name, last name, username, and email address.
$include_unassigned = True; // bool | Optional. Defaults to false. Include users that aren’t assigned to the role.

try {
    $result = $apiInstance->getRoleAdmins($authorization, $role_id, $limit, $page, $cursor, $name, $include_unassigned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRoleAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **name** | **string**| Allows you to filter on first name, last name, username, and email address. | [optional]
 **include_unassigned** | **bool**| Optional. Defaults to false. Include users that aren’t assigned to the role. | [optional]

### Return type

[**\OpenAPI\Client\Model\Schema1[]**](../Model/Schema1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `applcation/json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleApps()`

```php
getRoleApps($authorization, $role_id, $limit, $page, $cursor, $assigned): \OpenAPI\Client\Model\Schema[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$assigned = True; // bool | Optional. Defaults to true. Returns all apps not yet assigned to the role.

try {
    $result = $apiInstance->getRoleApps($authorization, $role_id, $limit, $page, $cursor, $assigned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRoleApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **assigned** | **bool**| Optional. Defaults to true. Returns all apps not yet assigned to the role. | [optional]

### Return type

[**\OpenAPI\Client\Model\Schema[]**](../Model/Schema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `applcation/json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleUsers()`

```php
getRoleUsers($authorization, $role_id, $limit, $page, $cursor, $name, $include_unassigned): \OpenAPI\Client\Model\Schema1[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$name = 'name_example'; // string | Allows you to filter on first name, last name, username, and email address.
$include_unassigned = True; // bool | Optional. Defaults to false. Include users that aren’t assigned to the role.

try {
    $result = $apiInstance->getRoleUsers($authorization, $role_id, $limit, $page, $cursor, $name, $include_unassigned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRoleUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **name** | **string**| Allows you to filter on first name, last name, username, and email address. | [optional]
 **include_unassigned** | **bool**| Optional. Defaults to false. Include users that aren’t assigned to the role. | [optional]

### Return type

[**\OpenAPI\Client\Model\Schema1[]**](../Model/Schema1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `applcation/json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRule()`

```php
getRule($authorization, $app_id, $rule_id): \OpenAPI\Client\Model\Rule
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$rule_id = 56; // int | The id of the app rule to locate.

try {
    $result = $apiInstance->getRule($authorization, $app_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **rule_id** | **int**| The id of the app rule to locate. |

### Return type

[**\OpenAPI\Client\Model\Rule**](../Model/Rule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreInsights()`

```php
getScoreInsights($authorization, $before, $after): \OpenAPI\Client\Model\GetScoreInsights200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$before = 'before_example'; // string | Optional ISO8601 formatted date string. Defaults to current date. Maximum date is 90 days ago.
$after = 'after_example'; // string | Optional ISO8601 formatted date string. Defaults to 30 days ago. Maximum date is 90 days ago.

try {
    $result = $apiInstance->getScoreInsights($authorization, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getScoreInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **before** | **string**| Optional ISO8601 formatted date string. Defaults to current date. Maximum date is 90 days ago. | [optional]
 **after** | **string**| Optional ISO8601 formatted date string. Defaults to 30 days ago. Maximum date is 90 days ago. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetScoreInsights200Response**](../Model/GetScoreInsights200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($authorization, $user_id): \OpenAPI\Client\Model\User
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user that you want to return.

try {
    $result = $apiInstance->getUser($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user that you want to return. |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserApps()`

```php
getUserApps($authorization, $user_id, $ignore_visibility): \OpenAPI\Client\Model\GetUserApps200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user that you want to return.
$ignore_visibility = True; // bool | Defaults to `false`. When `true` will show all apps that are assigned to a user regardless of their portal visibility setting.

try {
    $result = $apiInstance->getUserApps($authorization, $user_id, $ignore_visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user that you want to return. |
 **ignore_visibility** | **bool**| Defaults to &#x60;false&#x60;. When &#x60;true&#x60; will show all apps that are assigned to a user regardless of their portal visibility setting. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetUserApps200ResponseInner[]**](../Model/GetUserApps200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccessTokenClaims()`

```php
listAccessTokenClaims($authorization, $id): \OpenAPI\Client\Model\ListAccessTokenClaims200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->listAccessTokenClaims($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAccessTokenClaims: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ListAccessTokenClaims200ResponseInner[]**](../Model/ListAccessTokenClaims200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActionValues()`

```php
listActionValues($authorization, $app_id, $action_value): \OpenAPI\Client\Model\ListConditionValues200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$action_value = 'action_value_example'; // string | The value for the selected action.

try {
    $result = $apiInstance->listActionValues($authorization, $app_id, $action_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listActionValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **action_value** | **string**| The value for the selected action. |

### Return type

[**\OpenAPI\Client\Model\ListConditionValues200ResponseInner[]**](../Model/ListConditionValues200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActions()`

```php
listActions($authorization, $app_id): \OpenAPI\Client\Model\ListActions200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int

try {
    $result = $apiInstance->listActions($authorization, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ListActions200ResponseInner[]**](../Model/ListActions200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppUsers()`

```php
listAppUsers($authorization, $app_id, $limit, $page, $cursor): \OpenAPI\Client\Model\ListAppUsers200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.

try {
    $result = $apiInstance->listAppUsers($authorization, $app_id, $limit, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAppUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]

### Return type

[**\OpenAPI\Client\Model\ListAppUsers200ResponseInner[]**](../Model/ListAppUsers200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApps()`

```php
listApps($authorization, $limit, $page, $cursor, $name, $connector_id, $auth_method): \OpenAPI\Client\Model\Schema[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$name = 'name_example'; // string | The name or partial name of the app to search for. When using a partial name you must append a wildcard `*`
$connector_id = 56; // int | Returns all apps based off a specific connector. See List Connectors for a complete list of Connector IDs.
$auth_method = new \OpenAPI\Client\Model\AuthMethod(); // AuthMethod | Returns all apps based of a given type.

try {
    $result = $apiInstance->listApps($authorization, $limit, $page, $cursor, $name, $connector_id, $auth_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **name** | **string**| The name or partial name of the app to search for. When using a partial name you must append a wildcard &#x60;*&#x60; | [optional]
 **connector_id** | **int**| Returns all apps based off a specific connector. See List Connectors for a complete list of Connector IDs. | [optional]
 **auth_method** | [**AuthMethod**](../Model/.md)| Returns all apps based of a given type. | [optional]

### Return type

[**\OpenAPI\Client\Model\Schema[]**](../Model/Schema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuthorizationServers()`

```php
listAuthorizationServers($authorization): \OpenAPI\Client\Model\ListAuthorizationServers200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->listAuthorizationServers($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAuthorizationServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ListAuthorizationServers200ResponseInner[]**](../Model/ListAuthorizationServers200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConditionOperators()`

```php
listConditionOperators($authorization, $app_id, $condition_value): \OpenAPI\Client\Model\ListConditionOperators200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$condition_value = 'condition_value_example'; // string | The value for the selected condition.

try {
    $result = $apiInstance->listConditionOperators($authorization, $app_id, $condition_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listConditionOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **condition_value** | **string**| The value for the selected condition. |

### Return type

[**\OpenAPI\Client\Model\ListConditionOperators200ResponseInner[]**](../Model/ListConditionOperators200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConditionValues()`

```php
listConditionValues($authorization, $app_id, $condition_value): \OpenAPI\Client\Model\ListConditionValues200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$condition_value = 'condition_value_example'; // string | The value for the selected condition.

try {
    $result = $apiInstance->listConditionValues($authorization, $app_id, $condition_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listConditionValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **condition_value** | **string**| The value for the selected condition. |

### Return type

[**\OpenAPI\Client\Model\ListConditionValues200ResponseInner[]**](../Model/ListConditionValues200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConditions()`

```php
listConditions($authorization, $app_id): \OpenAPI\Client\Model\ListConditions200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int

try {
    $result = $apiInstance->listConditions($authorization, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ListConditions200ResponseInner[]**](../Model/ListConditions200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnectors()`

```php
listConnectors($authorization, $limit, $page, $cursor, $name, $auth_method): \OpenAPI\Client\Model\Connector[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$name = 'name_example'; // string | The name or partial name of the connector to search for. When using a partial name you must append a wildcard `*`
$auth_method = new \OpenAPI\Client\Model\AuthMethod(); // AuthMethod | Returns all connectors of a given type.

try {
    $result = $apiInstance->listConnectors($authorization, $limit, $page, $cursor, $name, $auth_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listConnectors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **name** | **string**| The name or partial name of the connector to search for. When using a partial name you must append a wildcard &#x60;*&#x60; | [optional]
 **auth_method** | [**AuthMethod**](../Model/.md)| Returns all connectors of a given type. | [optional]

### Return type

[**\OpenAPI\Client\Model\Connector[]**](../Model/Connector.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEnvironmentVariables()`

```php
listEnvironmentVariables($authorization, $limit, $page, $cursor): \OpenAPI\Client\Model\Envvar[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.

try {
    $result = $apiInstance->listEnvironmentVariables($authorization, $limit, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEnvironmentVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]

### Return type

[**\OpenAPI\Client\Model\Envvar[]**](../Model/Envvar.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHooks()`

```php
listHooks($authorization, $limit, $page, $cursor): \OpenAPI\Client\Model\Hook[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.

try {
    $result = $apiInstance->listHooks($authorization, $limit, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listHooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]

### Return type

[**\OpenAPI\Client\Model\Hook[]**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMappingActionValues()`

```php
listMappingActionValues($authorization, $action_value): \OpenAPI\Client\Model\ListConditionValues200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$action_value = 'action_value_example'; // string | The value for the selected action.

try {
    $result = $apiInstance->listMappingActionValues($authorization, $action_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMappingActionValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **action_value** | **string**| The value for the selected action. |

### Return type

[**\OpenAPI\Client\Model\ListConditionValues200ResponseInner[]**](../Model/ListConditionValues200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMappingActions()`

```php
listMappingActions($authorization): \OpenAPI\Client\Model\ListActions200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->listMappingActions($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMappingActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ListActions200ResponseInner[]**](../Model/ListActions200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMappingConditionOperators()`

```php
listMappingConditionOperators($authorization, $condition_value): \OpenAPI\Client\Model\ListMappingConditionOperators200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$condition_value = 'condition_value_example'; // string | The value for the selected condition.

try {
    $result = $apiInstance->listMappingConditionOperators($authorization, $condition_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMappingConditionOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **condition_value** | **string**| The value for the selected condition. |

### Return type

[**\OpenAPI\Client\Model\ListMappingConditionOperators200ResponseInner[]**](../Model/ListMappingConditionOperators200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMappingConditionValues()`

```php
listMappingConditionValues($authorization, $condition_value): \OpenAPI\Client\Model\ListConditionValues200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$condition_value = 'condition_value_example'; // string | The value for the selected condition.

try {
    $result = $apiInstance->listMappingConditionValues($authorization, $condition_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMappingConditionValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **condition_value** | **string**| The value for the selected condition. |

### Return type

[**\OpenAPI\Client\Model\ListConditionValues200ResponseInner[]**](../Model/ListConditionValues200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMappingConditions()`

```php
listMappingConditions($authorization): \OpenAPI\Client\Model\ListMappingConditions200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->listMappingConditions($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMappingConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ListMappingConditions200ResponseInner[]**](../Model/ListMappingConditions200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMappings()`

```php
listMappings($authorization, $enabled, $has_condition, $has_condition_type, $has_action, $has_action_type): \OpenAPI\Client\Model\Mapping[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$enabled = true; // bool | Defaults to true. When set to `false` will return all disabled mappings.
$has_condition = has_condition=has_role:123456,status:1; // string | Filters Mappings based on their Conditions.
$has_condition_type = 'has_condition_type_example'; // string | Filters Mappings based on their condition types.
$has_action = has_action=set_groups:123456,set_usertype:*; // string | Filters Mappings based on their Actions.
$has_action_type = 'has_action_type_example'; // string | Filters Mappings based on their action types.

try {
    $result = $apiInstance->listMappings($authorization, $enabled, $has_condition, $has_condition_type, $has_action, $has_action_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **enabled** | **bool**| Defaults to true. When set to &#x60;false&#x60; will return all disabled mappings. | [optional] [default to true]
 **has_condition** | **string**| Filters Mappings based on their Conditions. | [optional]
 **has_condition_type** | **string**| Filters Mappings based on their condition types. | [optional]
 **has_action** | **string**| Filters Mappings based on their Actions. | [optional]
 **has_action_type** | **string**| Filters Mappings based on their action types. | [optional]

### Return type

[**\OpenAPI\Client\Model\Mapping[]**](../Model/Mapping.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRiskRules()`

```php
listRiskRules($authorization)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $apiInstance->listRiskRules($authorization);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRiskRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoles()`

```php
listRoles($authorization, $limit, $page, $cursor, $name, $app_id, $fields): \OpenAPI\Client\Model\Role[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$name = 'name_example'; // string | Optional. Filters by role name.
$app_id = 'app_id_example'; // string | Optional. Returns roles that contain this app name.
$fields = 'fields_example'; // string | Optional. Comma delimited list of fields to return.

try {
    $result = $apiInstance->listRoles($authorization, $limit, $page, $cursor, $name, $app_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **name** | **string**| Optional. Filters by role name. | [optional]
 **app_id** | **string**| Optional. Returns roles that contain this app name. | [optional]
 **fields** | **string**| Optional. Comma delimited list of fields to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\Role[]**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRules()`

```php
listRules($authorization, $app_id, $enabled, $has_condition, $has_condition_type, $has_action, $has_action_type): \OpenAPI\Client\Model\Rule[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$enabled = True; // bool | Defaults to true. When set to `false` will return all disabled rules.
$has_condition = 'has_condition_example'; // string | Filters Rules based on their Conditions.
$has_condition_type = 'has_condition_type_example'; // string | Filters Rules based on their condition types.
$has_action = 'has_action_example'; // string | Filters Rules based on their Actions.
$has_action_type = 'has_action_type_example'; // string | Filters Rules based on their action types.

try {
    $result = $apiInstance->listRules($authorization, $app_id, $enabled, $has_condition, $has_condition_type, $has_action, $has_action_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **enabled** | **bool**| Defaults to true. When set to &#x60;false&#x60; will return all disabled rules. | [optional]
 **has_condition** | **string**| Filters Rules based on their Conditions. | [optional]
 **has_condition_type** | **string**| Filters Rules based on their condition types. | [optional]
 **has_action** | **string**| Filters Rules based on their Actions. | [optional]
 **has_action_type** | **string**| Filters Rules based on their action types. | [optional]

### Return type

[**\OpenAPI\Client\Model\Rule[]**](../Model/Rule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listScopes()`

```php
listScopes($authorization, $id): \OpenAPI\Client\Model\ListScopes200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->listScopes($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ListScopes200ResponseInner[]**](../Model/ListScopes200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($authorization, $limit, $page, $cursor, $created_since, $created_until, $updated_since, $updated_until, $last_login_since, $last_login_until, $firstname, $lastname, $email, $username, $samaccountname, $directory_id, $external_id, $app_id, $user_ids, $custom_attributes_attribute_name, $fields): \OpenAPI\Client\Model\User[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$limit = 56; // int | The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit.
$page = 56; // int | The page number of results to return.
$cursor = 'cursor_example'; // string | Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page.
$created_since = 'created_since_example'; // string | An ISO8601 timestamp value that returns all users created after a given date & time.
$created_until = 'created_until_example'; // string | An ISO8601 timestamp value that returns all users created before a given date & time.
$updated_since = 'updated_since_example'; // string | An ISO8601 timestamp value that returns all users updated after a given date & time.
$updated_until = 'updated_until_example'; // string | An ISO8601 timestamp value that returns all users updated before a given date & time.
$last_login_since = 'last_login_since_example'; // string | An ISO8601 timestamp value that returns all users that logged in after a given date & time.
$last_login_until = 'last_login_until_example'; // string
$firstname = 'firstname_example'; // string | The first name of the user
$lastname = 'lastname_example'; // string | The last name of the user
$email = 'email_example'; // string | The email address of the user
$username = 'username_example'; // string | The username for the user
$samaccountname = 'samaccountname_example'; // string | The AD login name for the user
$directory_id = 'directory_id_example'; // string | The ID in OneLogin of the Directory that the user belongs to
$external_id = 'external_id_example'; // string | An external identifier that has been set on the user
$app_id = 'app_id_example'; // string | The ID of a OneLogin Application
$user_ids = 'user_ids_example'; // string | A comma separated list of OneLogin User IDs
$custom_attributes_attribute_name = 'custom_attributes_attribute_name_example'; // string | The short name of a custom attribute. Note that the attribute name is prefixed with custom_attributes.
$fields = 'fields_example'; // string | A comma separated list user attributes to return.

try {
    $result = $apiInstance->listUsers($authorization, $limit, $page, $cursor, $created_since, $created_until, $updated_since, $updated_until, $last_login_since, $last_login_until, $firstname, $lastname, $email, $username, $samaccountname, $directory_id, $external_id, $app_id, $user_ids, $custom_attributes_attribute_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **limit** | **int**| The total number of items returned per page. The maximum limit varies between endpoints, see the relevant endpoint documentation for the specific limit. | [optional]
 **page** | **int**| The page number of results to return. | [optional]
 **cursor** | **string**| Set to the value extracted from Before-Cursor or After-Cursor headers to return the previous or next page. | [optional]
 **created_since** | **string**| An ISO8601 timestamp value that returns all users created after a given date &amp; time. | [optional]
 **created_until** | **string**| An ISO8601 timestamp value that returns all users created before a given date &amp; time. | [optional]
 **updated_since** | **string**| An ISO8601 timestamp value that returns all users updated after a given date &amp; time. | [optional]
 **updated_until** | **string**| An ISO8601 timestamp value that returns all users updated before a given date &amp; time. | [optional]
 **last_login_since** | **string**| An ISO8601 timestamp value that returns all users that logged in after a given date &amp; time. | [optional]
 **last_login_until** | **string**|  | [optional]
 **firstname** | **string**| The first name of the user | [optional]
 **lastname** | **string**| The last name of the user | [optional]
 **email** | **string**| The email address of the user | [optional]
 **username** | **string**| The username for the user | [optional]
 **samaccountname** | **string**| The AD login name for the user | [optional]
 **directory_id** | **string**| The ID in OneLogin of the Directory that the user belongs to | [optional]
 **external_id** | **string**| An external identifier that has been set on the user | [optional]
 **app_id** | **string**| The ID of a OneLogin Application | [optional]
 **user_ids** | **string**| A comma separated list of OneLogin User IDs | [optional]
 **custom_attributes_attribute_name** | **string**| The short name of a custom attribute. Note that the attribute name is prefixed with custom_attributes. | [optional]
 **fields** | **string**| A comma separated list user attributes to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeClientApp()`

```php
removeClientApp($authorization, $id, $client_app_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$client_app_id = 56; // int

try {
    $apiInstance->removeClientApp($authorization, $id, $client_app_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **client_app_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeRoleAdmins()`

```php
removeRoleAdmins($authorization, $role_id, $remove_role_users_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$remove_role_users_request = new \OpenAPI\Client\Model\RemoveRoleUsersRequest(); // \OpenAPI\Client\Model\RemoveRoleUsersRequest

try {
    $apiInstance->removeRoleAdmins($authorization, $role_id, $remove_role_users_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeRoleAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **remove_role_users_request** | [**\OpenAPI\Client\Model\RemoveRoleUsersRequest**](../Model/RemoveRoleUsersRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeRoleUsers()`

```php
removeRoleUsers($authorization, $role_id, $remove_role_users_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$remove_role_users_request = new \OpenAPI\Client\Model\RemoveRoleUsersRequest(); // \OpenAPI\Client\Model\RemoveRoleUsersRequest

try {
    $apiInstance->removeRoleUsers($authorization, $role_id, $remove_role_users_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeRoleUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **remove_role_users_request** | [**\OpenAPI\Client\Model\RemoveRoleUsersRequest**](../Model/RemoveRoleUsersRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeToken()`

```php
revokeToken($authorization, $revoke_token_request): \OpenAPI\Client\Model\GenerateToken400Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$revoke_token_request = new \OpenAPI\Client\Model\RevokeTokenRequest(); // \OpenAPI\Client\Model\RevokeTokenRequest

try {
    $result = $apiInstance->revokeToken($authorization, $revoke_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **revoke_token_request** | [**\OpenAPI\Client\Model\RevokeTokenRequest**](../Model/RevokeTokenRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GenerateToken400Response**](../Model/GenerateToken400Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setRoleApps()`

```php
setRoleApps($authorization, $role_id, $request_body): \OpenAPI\Client\Model\SetRoleApps200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->setRoleApps($authorization, $role_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setRoleApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **request_body** | [**int[]**](../Model/int.md)|  |

### Return type

[**\OpenAPI\Client\Model\SetRoleApps200ResponseInner[]**](../Model/SetRoleApps200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackEvent()`

```php
trackEvent($authorization, $track_event_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$track_event_request = new \OpenAPI\Client\Model\TrackEventRequest(); // \OpenAPI\Client\Model\TrackEventRequest

try {
    $apiInstance->trackEvent($authorization, $track_event_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trackEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **track_event_request** | [**\OpenAPI\Client\Model\TrackEventRequest**](../Model/TrackEventRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccessTokenClaim()`

```php
updateAccessTokenClaim($authorization, $id, $claim_id, $add_access_token_claim_request): \OpenAPI\Client\Model\Id
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$claim_id = 56; // int
$add_access_token_claim_request = new \OpenAPI\Client\Model\AddAccessTokenClaimRequest(); // \OpenAPI\Client\Model\AddAccessTokenClaimRequest

try {
    $result = $apiInstance->updateAccessTokenClaim($authorization, $id, $claim_id, $add_access_token_claim_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAccessTokenClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **claim_id** | **int**|  |
 **add_access_token_claim_request** | [**\OpenAPI\Client\Model\AddAccessTokenClaimRequest**](../Model/AddAccessTokenClaimRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApp()`

```php
updateApp($authorization, $app_id, $schema): \OpenAPI\Client\Model\Schema
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$schema = new \OpenAPI\Client\Model\Schema(); // \OpenAPI\Client\Model\Schema

try {
    $result = $apiInstance->updateApp($authorization, $app_id, $schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **schema** | [**\OpenAPI\Client\Model\Schema**](../Model/Schema.md)|  |

### Return type

[**\OpenAPI\Client\Model\Schema**](../Model/Schema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAuthorizationServer()`

```php
updateAuthorizationServer($authorization, $id, $create_authorization_server_request): \OpenAPI\Client\Model\Id
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$create_authorization_server_request = new \OpenAPI\Client\Model\CreateAuthorizationServerRequest(); // \OpenAPI\Client\Model\CreateAuthorizationServerRequest

try {
    $result = $apiInstance->updateAuthorizationServer($authorization, $id, $create_authorization_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAuthorizationServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **create_authorization_server_request** | [**\OpenAPI\Client\Model\CreateAuthorizationServerRequest**](../Model/CreateAuthorizationServerRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClientApp()`

```php
updateClientApp($authorization, $id, $client_app_id, $update_client_app_request): \OpenAPI\Client\Model\ClientApp
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$client_app_id = 56; // int
$update_client_app_request = new \OpenAPI\Client\Model\UpdateClientAppRequest(); // \OpenAPI\Client\Model\UpdateClientAppRequest

try {
    $result = $apiInstance->updateClientApp($authorization, $id, $client_app_id, $update_client_app_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **client_app_id** | **int**|  |
 **update_client_app_request** | [**\OpenAPI\Client\Model\UpdateClientAppRequest**](../Model/UpdateClientAppRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironmentVariable()`

```php
updateEnvironmentVariable($authorization, $envvar_id, $update_environment_variable_request): \OpenAPI\Client\Model\Envvar
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$envvar_id = 'envvar_id_example'; // string | Set to the id of the Hook Environment Variable that you want to fetch.
$update_environment_variable_request = new \OpenAPI\Client\Model\UpdateEnvironmentVariableRequest(); // \OpenAPI\Client\Model\UpdateEnvironmentVariableRequest

try {
    $result = $apiInstance->updateEnvironmentVariable($authorization, $envvar_id, $update_environment_variable_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **envvar_id** | **string**| Set to the id of the Hook Environment Variable that you want to fetch. |
 **update_environment_variable_request** | [**\OpenAPI\Client\Model\UpdateEnvironmentVariableRequest**](../Model/UpdateEnvironmentVariableRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Envvar**](../Model/Envvar.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHook()`

```php
updateHook($authorization, $hook_id, $hook): \OpenAPI\Client\Model\Hook
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$hook_id = 'hook_id_example'; // string | Set to the id of the Hook that you want to return.
$hook = new \OpenAPI\Client\Model\Hook(); // \OpenAPI\Client\Model\Hook

try {
    $result = $apiInstance->updateHook($authorization, $hook_id, $hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateHook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **hook_id** | **string**| Set to the id of the Hook that you want to return. |
 **hook** | [**\OpenAPI\Client\Model\Hook**](../Model/Hook.md)|  |

### Return type

[**\OpenAPI\Client\Model\Hook**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMapping()`

```php
updateMapping($authorization, $mapping_id, $mapping): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$mapping_id = 56; // int | The id of the user mapping to locate.
$mapping = new \OpenAPI\Client\Model\Mapping(); // \OpenAPI\Client\Model\Mapping

try {
    $result = $apiInstance->updateMapping($authorization, $mapping_id, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **mapping_id** | **int**| The id of the user mapping to locate. |
 **mapping** | [**\OpenAPI\Client\Model\Mapping**](../Model/Mapping.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRiskRule()`

```php
updateRiskRule($authorization, $risk_rule_id, $risk_rule): \OpenAPI\Client\Model\RiskRule
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$risk_rule_id = 'risk_rule_id_example'; // string
$risk_rule = new \OpenAPI\Client\Model\RiskRule(); // \OpenAPI\Client\Model\RiskRule

try {
    $result = $apiInstance->updateRiskRule($authorization, $risk_rule_id, $risk_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateRiskRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **risk_rule_id** | **string**|  |
 **risk_rule** | [**\OpenAPI\Client\Model\RiskRule**](../Model/RiskRule.md)|  |

### Return type

[**\OpenAPI\Client\Model\RiskRule**](../Model/RiskRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRole()`

```php
updateRole($authorization, $role_id, $role): \OpenAPI\Client\Model\UpdateRole200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$role_id = 56; // int | Set to the id of the role you want to return.
$role = new \OpenAPI\Client\Model\Role(); // \OpenAPI\Client\Model\Role

try {
    $result = $apiInstance->updateRole($authorization, $role_id, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **role_id** | **int**| Set to the id of the role you want to return. |
 **role** | [**\OpenAPI\Client\Model\Role**](../Model/Role.md)|  |

### Return type

[**\OpenAPI\Client\Model\UpdateRole200Response**](../Model/UpdateRole200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRule()`

```php
updateRule($authorization, $app_id, $rule_id, $rule): \OpenAPI\Client\Model\RuleId
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$app_id = 56; // int
$rule_id = 56; // int | The id of the app rule to locate.
$rule = new \OpenAPI\Client\Model\Rule(); // \OpenAPI\Client\Model\Rule

try {
    $result = $apiInstance->updateRule($authorization, $app_id, $rule_id, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **app_id** | **int**|  |
 **rule_id** | **int**| The id of the app rule to locate. |
 **rule** | [**\OpenAPI\Client\Model\Rule**](../Model/Rule.md)|  |

### Return type

[**\OpenAPI\Client\Model\RuleId**](../Model/RuleId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScope()`

```php
updateScope($authorization, $id, $scope_id, $add_scope_request): \OpenAPI\Client\Model\Id
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$id = 56; // int
$scope_id = 56; // int
$add_scope_request = new \OpenAPI\Client\Model\AddScopeRequest(); // \OpenAPI\Client\Model\AddScopeRequest

try {
    $result = $apiInstance->updateScope($authorization, $id, $scope_id, $add_scope_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateScope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **id** | **int**|  |
 **scope_id** | **int**|  |
 **add_scope_request** | [**\OpenAPI\Client\Model\AddScopeRequest**](../Model/AddScopeRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($authorization, $user_id, $user, $mappings, $validate_policy): \OpenAPI\Client\Model\User
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user that you want to return.
$user = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User
$mappings = 'mappings_example'; // string | Controls how mappings will be applied to the user on creation. Defaults to async.
$validate_policy = True; // bool | Will passwords validate against the User Policy? Defaults to true.

try {
    $result = $apiInstance->updateUser($authorization, $user_id, $user, $mappings, $validate_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user that you want to return. |
 **user** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  |
 **mappings** | **string**| Controls how mappings will be applied to the user on creation. Defaults to async. | [optional]
 **validate_policy** | **bool**| Will passwords validate against the User Policy? Defaults to true. | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyEnrollment()`

```php
verifyEnrollment($authorization, $user_id, $registration_id, $verify_enrollment_request): \OpenAPI\Client\Model\Registration[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$registration_id = 56; // int | Set to the uuid of the registration. This was included in the response as part of the initial request in Enroll Factor.
$verify_enrollment_request = new \OpenAPI\Client\Model\VerifyEnrollmentRequest(); // \OpenAPI\Client\Model\VerifyEnrollmentRequest

try {
    $result = $apiInstance->verifyEnrollment($authorization, $user_id, $registration_id, $verify_enrollment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **registration_id** | **int**| Set to the uuid of the registration. This was included in the response as part of the initial request in Enroll Factor. |
 **verify_enrollment_request** | [**\OpenAPI\Client\Model\VerifyEnrollmentRequest**](../Model/VerifyEnrollmentRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Registration[]**](../Model/Registration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyEnrollmentVoiceProtect()`

```php
verifyEnrollmentVoiceProtect($authorization, $user_id, $registration_id): \OpenAPI\Client\Model\Registration[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$registration_id = 56; // int | Set to the uuid of the registration. This was included in the response as part of the initial request in Enroll Factor.

try {
    $result = $apiInstance->verifyEnrollmentVoiceProtect($authorization, $user_id, $registration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyEnrollmentVoiceProtect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **registration_id** | **int**| Set to the uuid of the registration. This was included in the response as part of the initial request in Enroll Factor. |

### Return type

[**\OpenAPI\Client\Model\Registration[]**](../Model/Registration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyFactor()`

```php
verifyFactor($authorization, $user_id, $verification_id, $verify_factor_request): \OpenAPI\Client\Model\Status2
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$verification_id = 56; // int | The verification_id is returned on activation of the factor or you can get the device_id using the Activate Factor API call.
$verify_factor_request = new \OpenAPI\Client\Model\VerifyFactorRequest(); // \OpenAPI\Client\Model\VerifyFactorRequest

try {
    $result = $apiInstance->verifyFactor($authorization, $user_id, $verification_id, $verify_factor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyFactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **verification_id** | **int**| The verification_id is returned on activation of the factor or you can get the device_id using the Activate Factor API call. |
 **verify_factor_request** | [**\OpenAPI\Client\Model\VerifyFactorRequest**](../Model/VerifyFactorRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Status2**](../Model/Status2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyFactorSaml()`

```php
verifyFactorSaml($authorization, $verify_factor_saml_request): \OpenAPI\Client\Model\VerifyFactorSaml200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$verify_factor_saml_request = new \OpenAPI\Client\Model\VerifyFactorSamlRequest(); // \OpenAPI\Client\Model\VerifyFactorSamlRequest

try {
    $result = $apiInstance->verifyFactorSaml($authorization, $verify_factor_saml_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyFactorSaml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **verify_factor_saml_request** | [**\OpenAPI\Client\Model\VerifyFactorSamlRequest**](../Model/VerifyFactorSamlRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\VerifyFactorSaml200Response**](../Model/VerifyFactorSaml200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyFactorVoice()`

```php
verifyFactorVoice($authorization, $user_id, $verification_id): \OpenAPI\Client\Model\VerifyFactorVoice200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$user_id = 56; // int | Set to the id of the user.
$verification_id = 56; // int | The verification_id is returned on activation of the factor or you can get the device_id using the Activate Factor API call.

try {
    $result = $apiInstance->verifyFactorVoice($authorization, $user_id, $verification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyFactorVoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **user_id** | **int**| Set to the id of the user. |
 **verification_id** | **int**| The verification_id is returned on activation of the factor or you can get the device_id using the Activate Factor API call. |

### Return type

[**\OpenAPI\Client\Model\VerifyFactorVoice200ResponseInner[]**](../Model/VerifyFactorVoice200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
