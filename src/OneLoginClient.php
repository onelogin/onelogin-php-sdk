<?php

namespace OneLogin\api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use OneLogin\api\util\UrlBuilder;
use OneLogin\api\util\Constants;
use OneLogin\api\models\App;
use OneLogin\api\models\AuthFactor;
use OneLogin\api\models\EmbedApp;
use OneLogin\api\models\Event;
use OneLogin\api\models\EventType;
use OneLogin\api\models\FactorEnrollmentResponse;
use OneLogin\api\models\Group;
use OneLogin\api\models\MFA;
use OneLogin\api\models\MFAToken;
use OneLogin\api\models\OneloginApp;
use OneLogin\api\models\OneLoginToken;
use OneLogin\api\models\OTPDevice;
use OneLogin\api\models\Privilege;
use OneLogin\api\models\RateLimit;
use OneLogin\api\models\Role;
use OneLogin\api\models\SAMLEndpointResponse;
use OneLogin\api\models\SessionStatus;
use OneLogin\api\models\SessionTokenInfo;
use OneLogin\api\models\SessionTokenMFAInfo;
use OneLogin\api\models\User;
use OneLogin\api\exceptions\OneLoginException;
use OneLogin\api\exceptions\AuthenticationException;
use OneLogin\api\exceptions\ValidationException;
use OneLogin\api\exceptions\RateLimitException;
use OneLogin\api\exceptions\ServerException;

/**
 * OneLogin client implementation
 */
class OneLoginClient
{
    const VERSION = "1.8.0";

    const CUSTOM_USER_AGENT = "onelogin-php-sdk ".OneLoginClient::VERSION;

    /** @var GuzzleHttp\Client client  */
    protected $client;

    /** @var string $clientID OneLogin Client ID */
    public $clientID;

    /** @var string $clientSecret OneLogin Client  */
    public $clientSecret;

    /** @var string $accessToken OAuth 2.0 Access Token */
    protected $accessToken;

    /** @var string $refreshToken OAuth 2.0 Refresh Token */
    protected $refreshToken;

    /** @var DateTime $expiration OAuth 2.0 Token expiration */
    protected $expiration;

    /** @var [Object] Aux object to build the API URL endpoints */
    public $urlBuilder;

    /** @var string $error Last error found */
    protected $error;

    /** @var string $errorDescription Description of last error found */
    protected $errorDescription;

    /** @var string $errorAttribute The attribute that caused the last error found if declared */
    protected $errorAttribute;

    /** @var string $userAgent the User-Agent to be used on requests */
    public $userAgent;

    /** @var int $maxResults Limit the number of elements returned in a search */
    public $maxResults;

    /** @var bool $throwExceptions Whether to throw exceptions on API errors */
    protected $throwExceptions;

    /**
     * Create a new instance of Client.
     */
    public function __construct($clientId, $clientSecret, $region = "us", $maxResults = 1000, $throwExceptions = false)
    {
        $this->client = new Client();
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->urlBuilder = new UrlBuilder($region);
        $this->userAgent = OneLoginClient::CUSTOM_USER_AGENT;
        $this->maxResults = $maxResults;
        $this->throwExceptions = $throwExceptions;
    }

    /**
     * Clean any previous error registered at the client.
     */
    public function cleanError()
    {
        $this->error = null;
        $this->errorDescription = null;
        $this->errorAttribute = null;
    }

    public function getUrl($base, $id = null, $extraId = null)
    {
        return $this->urlBuilder->getUrl($base, $id, $extraId);
    }

    public function getError()
    {
        return $this->error;
    }

    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    public function getErrorAttribute()
    {
        return $this->errorAttribute;
    }

    /**
     * Enable or disable throwing exceptions on API errors
     *
     * @param bool $enabled
     */
    public function setThrowExceptions($enabled)
    {
        $this->throwExceptions = $enabled;
    }

    /**
     * Check if exception throwing is enabled
     *
     * @return bool
     */
    public function isThrowExceptionsEnabled()
    {
        return $this->throwExceptions;
    }

    /**
     * Throw appropriate exception based on status code and error details
     *
     * @param int $statusCode
     * @param string $errorMessage
     * @param string|null $errorAttribute
     * @throws OneLoginException
     */
    protected function throwAppropriateException($statusCode, $errorMessage, $errorAttribute = null)
    {
        if (!$this->throwExceptions) {
            return;
        }

        switch ($statusCode) {
            case 400:
                throw new ValidationException($errorMessage, $statusCode, $errorAttribute);
            case 401:
            case 403:
                throw new AuthenticationException($errorMessage, $statusCode, $errorAttribute);
            case 429:
                throw new RateLimitException($errorMessage, $statusCode, $errorAttribute);
            case 500:
            case 502:
            case 503:
            case 504:
                throw new ServerException($errorMessage, $statusCode, $errorAttribute);
            default:
                throw new OneLoginException($errorMessage, $statusCode, $errorAttribute);
        }
    }

    protected function extractErrorMessageFromResponse($response)
    {
        $message = '';
        $content = json_decode((string) $response->getBody());
        if (property_exists($content, 'status')) {
            if (property_exists($content->status, 'message')) {
                if (is_object($content->status->message)) {
                    if (property_exists($content->status->message, 'description')) {
                        $message = $content->status->message->description;
                    }
                } else {
                    $message = $content->status->message;
                }
            } else if (property_exists($content->status, 'type')) {
                $message = $content->status->type;
            }
        } else if (property_exists($content, 'message') && !empty($content->message)) {
            $message = $content->message;
        } else if (property_exists($content, 'name')) {
            $message = $content->name;
        }

        return $message;
    }

    protected function extractErrorAttributeFromResponse($response)
    {
        $attribute = null;
        $content = json_decode((string) $response->getBody());
        if (property_exists($content, 'status')) {
            if (property_exists($content->status, 'message')) {
                if (is_object($content->status->message)) {
                    if (property_exists($content->status->message, 'attribute')) {
                        $attribute = $content->status->message->attribute;
                    }
                }
            }
        }
        return $attribute;
    }

    protected function handleTokenResponse($response)
    {
        $token = null;
        if ($response->getStatusCode() == 200) {
            $content = json_decode($response->getBody());
            if (property_exists($content, 'status')) {
                $this->error = $content->status->code;
                $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            } else {
                $token = new OneLoginToken($content);
                if (!empty($token)) {
                    $this->accessToken = $token->getAccessToken();
                    $this->refreshToken = $token->getRefreshToken();
                    $this->expiration = $token->getExpiration();
                }
            }
        } else {
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
        }
        return $token;
    }

    protected function handleSessionTokenResponse($response)
    {
        $sessionToken = null;
        $content = json_decode($response->getBody());
        if (property_exists($content, 'status') && property_exists($content->status, 'message')) {
            if ($content->status->message == "Success" && property_exists($content, 'data')) {
                $sessionToken = new SessionTokenInfo($content->data[0]);
            } else if ($content->status->message == "MFA is required for this user" && property_exists($content, 'data')) {
                $sessionToken = new SessionTokenMFAInfo($content->data[0]);
            } else {
                $sessionToken = new SessionStatus($content->status);
            }
        }
        return $sessionToken;
    }

    protected function handleSAMLEndpointResponse($response)
    {
        $samlEndpointResponse = null;
        $content = json_decode($response->getBody());
        if (property_exists($content, 'status') && property_exists($content->status, 'message') && property_exists($content->status, 'type')) {
            $type = $content->status->type;
            $message = $content->status->message;
            $samlEndpointResponse = new SAMLEndpointResponse($type, $message);
            if (property_exists($content, 'data')) {
                if ($message == "Success") {
                    $samlResponse = $content->data;
                    $samlEndpointResponse->setSAMLResponse($samlResponse);
                } else {
                    $mfa = new MFA($content->data[0]);
                    $samlEndpointResponse->setMFA($mfa);
                }
            }
        }
        return $samlEndpointResponse;
    }

    protected function handleDataResponse($response)
    {
        $data = null;
        $content = json_decode($response->getBody());
        if (property_exists($content, 'data')) {
            $data = $content->data;
        }
        
        // Handle case where API returns object instead of array (e.g., otp_devices endpoint)
        // Convert object properties to array to maintain consistent return type
        if (is_object($data)) {
            // For otp_devices endpoint, extract the array from the object
            if (property_exists($data, 'otp_devices') && is_array($data->otp_devices)) {
                return $data->otp_devices;
            }
            // For other object-based responses, convert to array
            return (array) $data;
        }
        
        if (is_array($data) && count($data) == 1 && empty($data[0])) {
            return [];
        }

        return $data;
    }

    protected function handleOperationResponse($response)
    {
        $result = false;
        $content = json_decode($response->getBody());
        if (is_object($content) && property_exists($content, 'status') && property_exists($content->status, 'type') && $content->status->type == "success") {
            $result = true;
        } else {
            $statusCode = $response->getStatusCode();
            if (isset($statusCode) && $statusCode == 200 || $statusCode == 201 || $statusCode == 204) {
                $result = true;
            }
        }
        return $result;
    }

    protected function extractStatusCodeFromResponse($response)
    {
        $statusCode = '';
        $content = json_decode((string) $response->getBody());
        if (property_exists($content, 'statusCode')) {
            $statusCode = $content->statusCode;
        }
        return $statusCode;
    }

    public function retrieveAppsFromXML($xmlContent)
    {
        $embedApps = array();
        $doc = new \DOMDocument();
        $doc->loadXML($xmlContent);
        $xpath = new \DOMXpath($doc);
        $appNodeList = $xpath->query("/apps/app");
        $attributes = array("id", "icon", "name", "provisioned", "extension_required", "personal", "login_id");
        $appData = array();
        foreach ($appNodeList as $appNode) {
            $appAttrs = $appNode->childNodes;
            foreach ($appAttrs as $appAttr) {
                if (in_array($appAttr->nodeName, $attributes)) {
                    $appData[$appAttr->nodeName] = $appAttr->textContent;
                }
            }
            $embedApps[] = new EmbedApp((object) $appData);
        }
        return $embedApps;
    }

    protected function getAuthorizedHeader($bearer = true)
    {
        return array(
            'Authorization' => $this->getAuthorization($bearer),
            'Content-Type' => 'application/json',
            'User-Agent'=> $this->userAgent
        );
    }

    protected function getAuthorization($bearer = true)
    {
        if ($bearer) {
            // ":" removed
            $authorization = "bearer " . $this->accessToken;
        } else {
            $authorization = "client_id:" . $this->clientId . ", client_secret:" . $this->clientSecret;
        }
        return $authorization;
    }

    protected function getBeforeCursor($response)
    {
        $beforeCursor = null;
        $content = json_decode($response->getBody());
        if (!empty($content)) {
            if (property_exists($content, 'pagination') && property_exists($content->pagination, 'before_cursor')) {
                $beforeCursor = $content->pagination->before_cursor;
            } else if (property_exists($content, 'beforeCursor')) {
                $beforeCursor = $content->beforeCursor;
            }
        }
        return $beforeCursor;
    }

    protected function getAfterCursor($response)
    {
        $afterCursor = null;
        $content = json_decode($response->getBody());
        if (!empty($content)) {
            if (property_exists($content, 'pagination') && property_exists($content->pagination, 'after_cursor')) {
                $afterCursor = $content->pagination->after_cursor;
            } else if (property_exists($content, 'afterCursor')) {
                $afterCursor = $content->afterCursor;
            }
        }
        return $afterCursor;
    }

    public function isExpired()
    {
        $now = new \DateTime();
        return ($this->expiration != null) && ($now > $this->expiration);
    }

    protected function prepareToken()
    {
        if ($this->accessToken == null) {
            $this->getAccessToken();
        } else if ($this->isExpired()) {
            $this->refreshToken();
        }
    }

    ////////////////////////////////
    //  OAuth 2.0 Tokens Methods  //
    ////////////////////////////////

    /**
     *  Generates an access token and refresh token that you may use to
     *  call Onelogin's API methods.
     *
     * @see https://developers.onelogin.com/api-docs/1/oauth20-tokens/generate-tokens Generate Tokens documentation.
     */
    public function getAccessToken()
    {
        $this->cleanError();
        try {
            $url = $this->getURL(Constants::TOKEN_REQUEST_URL);
            $headers = $this->getAuthorizedHeader(false);

            $data = array(
                "grant_type" => "client_credentials"
            );

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            return $this->handleTokenResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Refreshing tokens provides a new set of access and refresh tokens.
     *
     * @see https://developers.onelogin.com/api-docs/1/oauth20-tokens/refresh-tokens Refresh Tokens documentation
     */
    public function refreshToken()
    {
        $this->cleanError();
        try {
            $url = $this->getURL(Constants::TOKEN_REQUEST_URL);
            $headers = array(
                'User-Agent'=> $this->userAgent
            );

            $data = array(
                "grant_type" => "refresh_token",
                "access_token" => $this->accessToken,
                "refresh_token" => $this->refreshToken
            );

            $response = $this->client->post(
                $url,
                array(
                    'headers' => $headers,
                    'json' => $data
                )
            );

            return $this->handleTokenResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Revokes an access token and refresh token pair.
     *
     * @see https://developers.onelogin.com/api-docs/1/oauth20-tokens/revoke-tokens Revoke Tokens documentation
     */
    public function revokeToken()
    {
        $this->cleanError();
        try {
            $url = $this->getURL(Constants::TOKEN_REVOKE_URL);
            $headers = $this->getAuthorizedHeader(false);

            $data = array(
                "access_token" => $this->accessToken
            );

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            if ($response->getStatusCode() == 200) {
                $this->accessToken = null;
                $this->refreshToken = null;
                $this->expiration = null;
                return true;
            } else {
                $this->error = $response->getStatusCode();
                $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Gets current rate limit details about an access token.
     *
     * @return RateLimit object
     *
     * @see https://developers.onelogin.com/api-docs/1/oauth20-tokens/get-rate-limit Get Rate Limit documentation
     */
    public function getRateLimit()
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_RATE_URL);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            if ($data) {
                return new RateLimit($data);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    ////////////////////
    //  User Methods  //
    ////////////////////

    /**
     * Gets a list of User resources.
     *
     * @param queryParameters
     *            Parameters to filter the result of the list
     * @param maxResults
     *            Limit the number of users returned (optional)
     *
     * @return Array of User
     *
     *
     * @see https://developers.onelogin.com/api-docs/1/users/get-users Get Users documentation
     */
    public function getUsers($queryParameters = null, $maxResults = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_USERS_URL);
            $headers = $this->getAuthorizedHeader();

            $maxResults = empty($maxResults)? $this->maxResults : $maxResults;

            $options = array(
                'headers' => $headers
            );

            if (!empty($queryParameters)) {
                if (!is_array($queryParameters)) {
                    new \Exception("Invalid value for queryParameters, must to be an indexed array");
                }

                $options['query'] = $queryParameters;
            }

            $users = array();
            $afterCursor = null;
            while (!isset($response) || (count($users) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );
                $data = $this->handleDataResponse($response);

                if (isset($data)) {
                    foreach ($data as $userData) {
                        if (count($users) < $maxResults) {
                            $users[] = new User($userData);
                        } else {
                            return $users;
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }
            return $users;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets User by ID.
     *
     * @param id
     *            Id of the user
     *
     * @return User
     *
     * @see https://developers.onelogin.com/api-docs/1/users/get-user-by-id Get User by ID documentation
     */
    public function getUser($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return new User($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets a list of apps accessible by a user, not including personal apps.
     *
     * @param id
     *            Id of the user
     *
     * @return List of Apps
     *
     * @see https://developers.onelogin.com/api-docs/1/users/get-apps-for-user Get Apps for a User documentation
     */
    public function getUserApps($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_APPS_FOR_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            $apps = array();
            if (isset($data)) {
                foreach ($data as $appData) {
                    $apps[] = new App($appData);
                }
            }
            return $apps;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets a list of role IDs that have been assigned to a user.
     *
     * @param id
     *            Id of the role
     *
     *
     * @return List of Role Ids
     *
     * @see https://developers.onelogin.com/api-docs/1/users/get-roles-for-user Get Roles for a User documentation
     */
    public function getUserRoles($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_ROLES_FOR_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            $roleIds = array();
            if (!empty($data)) {
                $roleIds = $data[0];
            }
            return $roleIds;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets a list of all custom attribute fields (also known as custom user fields) that have been defined for OL account.
     *
     * @return List of custom attribute fields
     *
     * @see https://developers.onelogin.com/api-docs/1/users/get-custom-attributes Get Custom Attributes documentation
     */
    public function getCustomAttributes()
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_CUSTOM_ATTRIBUTES_URL);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            $customAttributes = array();
            if (!empty($data)) {
                $customAttributes = $data[0];
            }
            return $customAttributes;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Creates an user
     *
     * @param userParams
     *            User data (firstname, lastname, email, username, company,
     *                       department, directory_id, distinguished_name,
     *                       external_id, group_id, invalid_login_attempts,
     *                       locale_code, manager_ad_id, member_of,
     *                       openid_name, phone, samaccountname, title,
     *                       userprincipalname)
     *
     * @return Created User
     *
     * @see https://developers.onelogin.com/api-docs/1/users/create-user Create User documentation
     */
    public function createUser($userParams)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::CREATE_USER_URL);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->post(
                $url,
                array(
                    'json' => $userParams,
                    'headers' => $headers
                )
            );

            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return new User($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Updates an user
     *
     * @param id
     *            Id of the user to be modified
     * @param userParams
     *            User data (firstname, lastname, email, username, company,
     *                       department, directory_id, distinguished_name,
     *                       external_id, group_id, invalid_login_attempts,
     *                       locale_code, manager_ad_id, member_of,
     *                       openid_name, phone, samaccountname, title,
     *                       userprincipalname)
     *
     * @return Updated User
     *
     * @see https://developers.onelogin.com/api-docs/1/users/update-user Update User by ID documentation
     */
    public function updateUser($id, $userParams)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::UPDATE_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->put(
                $url,
                array(
                    'json' => $userParams,
                    'headers' => $headers
                )
            );

            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return new User($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Assigns Roles to User
     *
     * @param id
     *            Id of the user to be modified
     * @param roleIds
     *            Set to an array of one or more role IDs.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/assign-role-to-user Assign Role to User documentation
     */
    public function assignRoleToUser($id, $roleIds)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::ADD_ROLE_TO_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "role_id_array" => $roleIds,
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Remove Role from User
     *
     * @param id
     *            Id of the user to be modified
     * @param roleIds
     *            Set to an array of one or more role IDs.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/remove-role-from-user Remove Role from User documentation
     */
    public function removeRoleFromUser($id, $roleIds)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::DELETE_ROLE_TO_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "role_id_array" => $roleIds,
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Sets Password by ID Using Cleartext
     *
     * @param id
     *            Id of the user to be modified
     * @param password
     *            Set to the password value using cleartext.
     * @param passwordConfirmation
     *            Ensure that this value matches the password value exactly.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/set-password-in-cleartext Set Password by ID Using Cleartext documentation
     */
    public function setPasswordUsingClearText($id, $password, $passwordConfirmation)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::SET_PW_CLEARTEXT, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "password" => $password,
                "password_confirmation" => $passwordConfirmation
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Set Password by ID Using Salt and SHA-256
     *
     * @param id
     *            Id of the user to be modified
     * @param password
     *            Set to the password value using a SHA-256-encoded value.
     * @param passwordConfirmation
     *            This value must match the password value.
     * @param passwordAlgorithm
     *            Set to salt+sha256.
     * @param passwordSalt
     *            To provide your own salt value.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/set-password-using-sha-256 Set Password by ID Using Salt and SHA-256 documentation
     */
    public function setPasswordUsingHashSalt($id, $password, $passwordConfirmation, $passwordAlgorithm, $passwordSalt = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::SET_PW_SALT, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "password" => $password,
                "password_confirmation" => $passwordConfirmation,
                "password_algorithm" => $passwordAlgorithm
            );

            if (!empty($passwordSalt)) {
                $data["password_salt"] = $passwordSalt;
            }

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Set the State for a user.
     *
     * @param id
     *            Id of the user to be modified
     * @param state
     *            Set to the state value. Valid values: 0-3.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/set-state Set User State documentation
     */
    public function setStateToUser($id, $state)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::SET_STATE_TO_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "state" => $state
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Set Custom Attribute Value
     *
     * @param id
     *            Id of the user to be modified
     * @param customAttributes
     *            Provide one or more key value pairs composed of the custom attribute field shortname and the value that you want to set the field to.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/set-custom-attribute Set Custom Attribute Value documentation
     */
    public function setCustomAttributeToUser($id, $customAttributes)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::SET_CUSTOM_ATTRIBUTE_TO_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "custom_attributes" => $customAttributes
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Log a user out of any and all sessions.
     *
     * @param id
     *            Id of the user to be logged out
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/log-user-out Log User Out documentation
     */
    public function logUserOut($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::LOG_USER_OUT_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->put(
                $url,
                array(
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Use this call to lock a user's account based on the policy assigned to
     * the user, for a specific time you define in the request, or until you
     * unlock it.
     *
     * @param id
     *            Id of the user to be locked
     * @param minutes
     *            Set to the number of minutes for which you want to lock the user account. (0 to delegate on policy)
         *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/lock-user-account Lock User Account documentation
     */
    public function lockUser($id, $minutes)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::LOCK_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "locked_until" => $minutes
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Deletes an user
     *
     * @param id
     *            Id of the user to be deleted
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/delete-user Delete User by ID documentation
     */
    public function deleteUser($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::DELETE_USER_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->delete(
                $url,
                array(
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Generate an access token for a user
     *
     * @param userId
     *            Id of the user
     * @param expiresIn
     *            Set the duration of the token in seconds. (default: 259200 seconds = 72h)
     *            72 hours is the max value.)
     * @param reusable
     *            Defines if the token reusable. (default: false) If set to true, token can be used for multiple apps, until it expires.
     *
     * @return MFAToken
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/generate-mfa-token Generate MFA Token documentation
     */
    public function generateMFAToken($userId, $expiresIn = 259200, $reusable = false)
    {
        $this->cleanError();
        $this->prepareToken();

        $data = array(
            'expires_in' => $expiresIn,
            'reusable' => $reusable
        );

        try {
            $url = $this->getURL(Constants::GENERATE_MFA_TOKEN_URL, $userId);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            $data = json_decode($response->getBody());

            if (!empty($data) && property_exists($data, 'mfa_token')) {
                return new MFAToken($data);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    //////////////////////////
    //  Login Page Methods  //
    //////////////////////////

    /**
     * Generates a session login token in scenarios in which MFA may or may not be required.
     * A session login token expires two minutes after creation.
     *
     * @param queryParams
     *            Query Parameters (username_or_email, password, subdomain, return_to_url,
     *                              ip_address, browser_id)
     * @param allowedOrigin
     *            Custom-Allowed-Origin-Header. Required for CORS requests only. Set to the Origin URI
     *            from which you are allowed to send a request using CORS.
     *
     * @return SessionTokenInfo|SessionTokenMFAInfo|SessionStatus object if success
     *
     * @see https://developers.onelogin.com/api-docs/1/users/create-session-login-token Create Session Login Token documentation
     */
    public function createSessionLoginToken($queryParams, $allowedOrigin = '')
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::SESSION_LOGIN_TOKEN_URL);
            $headers = $this->getAuthorizedHeader();

            if (!empty($allowedOrigin)) {
                $headers['Custom-Allowed-Origin-Header-1'] = $allowedOrigin;
            }

            $response = $this->client->post(
                $url,
                array(
                    'json' => $queryParams,
                    'headers' => $headers
                )
            );

            $sesionToken = $this->handleSessionTokenResponse($response);
            return $sesionToken;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Verify a one-time password (OTP) value provided for multi-factor authentication (MFA).
     *
     * @param devideId
     *            Provide the MFA device_id you are submitting for verification.
     * @param stateToken
     *            Provide the state_token associated with the MFA device_id you are submitting for verification.
     * @param otpToken
     *            Provide the OTP value for the MFA factor you are submitting for verification.
     * @param allowedOrigin
     *            Required for CORS requests only. Set to the Origin URI from which you are allowed to send a request using CORS.
     * @param doNotNotify
     *            When verifying MFA via Protect Push, set this to true to stop additional push notifications being sent to the OneLogin Protect device.
     *
     * @return SessionTokenInfo|SessionTokenMFAInfo|SessionStatus
     *
     * @see https://developers.onelogin.com/api-docs/1/users/verify-factor Verify Factor documentation
     */
    public function getSessionTokenVerified($devideId, $stateToken, $otpToken = null, $allowedOrigin = '', $doNotNotify = false)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_TOKEN_VERIFY_FACTOR);
            $headers = $this->getAuthorizedHeader();

            if (!empty($allowedOrigin)) {
                $headers['Custom-Allowed-Origin-Header-1'] = $allowedOrigin;
            }

            $data = array(
                "device_id" => strval($devideId),
                "state_token" => $stateToken,
                "do_not_notify" => $doNotNotify
            );

            if (!empty($otpToken)) {
                $data["otp_token"] = $otpToken;
            }

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            $sesionToken = $this->handleSessionTokenResponse($response);
            return $sesionToken;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /////////////////////////////
    //  Onelogin Apps Methods  //
    /////////////////////////////

    /**
     * Gets a list of all Apps in a OneLogin account.
     *
     * @param queryParameters
     *            Parameters to filter the result of the list
     * @param maxResults
     *            Limit the number of apps returned (optional)
     *
     * @return List of OneloginApp
     *
     * @see https://developers.onelogin.com/api-docs/1/apps/get-apps Get Apps documentation
     */
    public function getApps()
    {
        $this->cleanError();
        $this->prepareToken();

        $maxResults = empty($maxResults)? $this->maxResults : $maxResults;

        try {
            $url = $this->getURL(Constants::GET_APPS_URL);
            $headers = $this->getAuthorizedHeader();

            $options = array(
                'headers' => $headers
            );

            if (!empty($queryParameters)) {
                if (!is_array($queryParameters)) {
                    new \Exception("Invalid value for queryParameters, must to be an indexed array");
                }

                $options['query'] = $queryParameters;
            }

            $apps = array();
            $afterCursor = null;
            while (!isset($response) || (count($apps) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );
                $data = $this->handleDataResponse($response);

                if (isset($data)) {
                    foreach ($data as $appData) {
                        if (count($apps) < $maxResults) {
                            $apps[] = new OneloginApp($appData);
                        } else {
                            return $apps;
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }
            return $apps;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    ////////////////////
    //  Role Methods  //
    ////////////////////

    /**
     * Gets a list of Role resources.
     *
     * @param queryParameters
     *            Parameters to filter the result of the list
     * @param maxResults
     *            Limit the number of roles returned (optional)
     *
     * @return List of Role
     *
     * @see https://developers.onelogin.com/api-docs/1/roles/get-roles Get Roles documentation
     */
    public function getRoles($queryParameters = null, $maxResults = null)
    {
        $this->cleanError();
        $this->prepareToken();

        $maxResults = empty($maxResults)? $this->maxResults : $maxResults;

        try {
            $url = $this->getURL(Constants::GET_ROLES_URL);
            $headers = $this->getAuthorizedHeader();

            $options = array(
                'headers' => $headers
            );

            if (!empty($queryParameters)) {
                if (!is_array($queryParameters)) {
                    new \Exception("Invalid value for queryParameters, must to be an indexed array");
                }

                $options['query'] = $queryParameters;
            }

            $roles = array();
            $afterCursor = null;
            while (!isset($response) || (count($roles) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );
                $data = $this->handleDataResponse($response);

                if (isset($data)) {
                    foreach ($data as $roleData) {
                        if (count($roles) < $maxResults) {
                            $roles[] = new Role($roleData);
                        } else {
                            return $roles;
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }
            return $roles;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets Role by ID.
     *
     * @param id
     *            Id of the role
     *
     * @return Role
     *
     * @see https://developers.onelogin.com/api-docs/1/roles/get-role-by-id Get Role by ID documentation
     */
    public function getRole($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_ROLE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return new Role($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /////////////////////
    //  Event Methods  //
    /////////////////////

    /**
     * List of all OneLogin event types available to the Events API.
     *
     * @return List of EventType
     *
     * @see https://developers.onelogin.com/api-docs/1/events/event-types Get Event Types documentation
     */
    public function getEventTypes()
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_EVENT_TYPES_URL);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            $eventTypes = array();
            if (!empty($data)) {
                foreach ($data as $eventTypeData) {
                    $eventTypes[] = new EventType($eventTypeData);
                }
            }
            return $eventTypes;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets a list of Event resources. (if no limit provided, by default get 50 elements)
     *
     * @param queryParameters
     *            Parameters to filter the result of the list
     * @param maxResults
     *            Limit the number of events returned (optional)
     *
     * @return List of Event
     *
     * @see https://developers.onelogin.com/api-docs/1/events/get-events Get Events documentation
     */
    public function getEvents($queryParameters = null, $maxResults = null)
    {
        $this->cleanError();
        $this->prepareToken();

        $maxResults = empty($maxResults)? $this->maxResults : $maxResults;

        try {
            $url = $this->getURL(Constants::GET_EVENTS_URL);
            $headers = $this->getAuthorizedHeader();

            $options = array(
                'headers' => $headers
            );

            if (!empty($queryParameters)) {
                if (!is_array($queryParameters)) {
                    new \Exception("Invalid value for queryParameters, must to be an indexed array");
                }

                $options['query'] = $queryParameters;
            }

            $events = array();
            $afterCursor = null;
            while (!isset($response) || (count($events) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );

                $data = $this->handleDataResponse($response);

                if (isset($data)) {
                    foreach ($data as $eventData) {
                        if (count($events) < $maxResults) {
                            $events[] = new Event($eventData);
                        } else {
                            return $events;
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }

            return $events;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets Event by ID.
     *
     * @param id
     *            Id of the event
     *
     * @return Event
     *
     * @see https://developers.onelogin.com/api-docs/1/events/get-event-by-id Get Event by ID documentation
     */
    public function getEvent($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_EVENT_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return new Event($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Create an event in the OneLogin event log.
     *
     * @param eventParams
     *            Event Data (event_type_id, account_id, actor_system,
     *                        actor_user_id, actor_user_name, app_id,
     *                        assuming_acting_user_id, custom_message,
     *                        directory_sync_run_id, group_id, group_name,
     *                        ipaddr, otp_device_id, otp_device_name,
     *                        policy_id, policy_name, role_id, role_name,
     *                        user_id, user_name)
     *
     * @see https://developers.onelogin.com/api-docs/1/events/create-event Create Event documentation
     */
    public function createEvent($eventParams)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::CREATE_EVENT_URL);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->post(
                $url,
                array(
                    'json' => $eventParams,
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
            $this->errorAttribute = $this->extractErrorAttributeFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription, $this->errorAttribute);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /////////////////////
    //  Group Methods  //
    /////////////////////

    /**
     * Gets a list of Group resources (element of groups limited with the limit parameter).
     *
     * @param maxResults
     *            Limit the number of groups returned (optional)
     *
     * @return List of Group
     *
     * @see https://developers.onelogin.com/api-docs/1/groups/get-groups Get Groups documentation
     */
    public function getGroups($maxResults = null)
    {
        $this->cleanError();
        $this->prepareToken();

        $maxResults = empty($maxResults)? $this->maxResults : $maxResults;

        try {
            $url = $this->getURL(Constants::GET_GROUPS_URL);
            $headers = $this->getAuthorizedHeader();

            $options = array(
                'headers' => $headers
            );

            $groups = array();
            $afterCursor = null;
            while (!isset($response) || (count($groups) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );
                $data = $this->handleDataResponse($response);

                if (isset($data)) {
                    foreach ($data as $groupData) {
                        if (count($groups) < $maxResults) {
                            $groups[] = new Group($groupData);
                        } else {
                            return $groups;
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }
            return $groups;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Gets Group by ID.
     *
     * @param id
     *            Id of the group
     *
     * @return Group
     *
     * @see https://developers.onelogin.com/api-docs/1/groups/get-group-by-id Get Group by ID documentation
     */
    public function getGroup($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_GROUP_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return new Group($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    //////////////////////////////
    //  SAML Assertion Methods  //
    //////////////////////////////

    /**
     * Generates a SAML Assertion.
     *
     * @param usernameOrEmail
     *            username or email of the OneLogin user accessing the app
     * @param password
     *            Password of the OneLogin user accessing the app
     * @param appId
     *            App ID of the app for which you want to generate a SAML token
     * @param subdomain
     *            subdomain of the OneLogin account related to the user/app
     * @param ipAddress
     *            whitelisted IP address that needs to be bypassed (some MFA scenarios).
     *
     * @return SAMLEndpointResponse
     *
     * @see https://developers.onelogin.com/api-docs/1/saml-assertions/generate-saml-assertion Generate SAML Assertion documentation
     */
    public function getSAMLAssertion($usernameOrEmail, $password, $appId, $subdomain, $ipAddress = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_SAML_ASSERTION_URL);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "username_or_email" => $usernameOrEmail,
                "password" => $password,
                "app_id" => $appId,
                "subdomain"  => $subdomain
            );

            if (!empty($ipAddress)) {
                $data["ip_address"] = $ipAddress;
            }

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            $samlEndpointResponse = $this->handleSAMLEndpointResponse($response);
            return $samlEndpointResponse;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Verifies a one-time password (OTP) value provided for a second factor
     * when multi-factor authentication (MFA) is required for SAML authentication.
     *
     * @param appId
     *            App ID of the app for which you want to generate a SAML token
     * @param devideId
     *            Provide the MFA device_id you are submitting for verification.
     * @param stateToken
     *            Provide the state_token associated with the MFA device_id you are submitting for verification.
     * @param otpToken
     *            Provide the OTP value for the MFA factor you are submitting for verification.
     * @param urlEndpoint
     *            Specify an url where return the response.
     * @param doNotNotify
     *            When verifying MFA via Protect Push, set this to true to stop additional push notifications being sent to the OneLogin Protect device
     *
     * @return SAMLEndpointResponse
     *
     * @see https://developers.onelogin.com/api-docs/1/saml-assertions/verify-factor Verify Factor documentation
     */
    public function getSAMLAssertionVerifying($appId, $devideId, $stateToken, $otpToken = null, $urlEndpoint = null, $doNotNotify = false)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            if (empty($urlEndpoint)) {
                $url = $this->getURL(Constants::GET_SAML_VERIFY_FACTOR);
            } else {
                $url = $urlEndpoint;
            }

            $headers = $this->getAuthorizedHeader();

            $data = array(
                "app_id" => $appId,
                "device_id" => strval($devideId),
                "state_token" => $stateToken,
                "do_not_notify" => $doNotNotify
            );

            if (!empty($otpToken)) {
                $data["otp_token"] = $otpToken;
            }

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );
            $samlEndpointResponse = $this->handleSAMLEndpointResponse($response);
            return $samlEndpointResponse;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /////////////////////////////////
    //  Multi-factor Auth Methods  //
    /////////////////////////////////

    /**
     * Returns a list of authentication factors that are available for user enrollment
     * via API.
     *
     * @param userId
     *            The id of the user.
     *
     * @return Array AuthFactor list
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/available-factors Get Available Authentication Factors documentation
     */
    public function getFactors($userId)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_FACTORS_URL, $userId);
            $headers = $this->getAuthorizedHeader();

            $options = array(
                'headers' => $headers
            );

            $authFactors = array();
            $response = $this->client->get(
                $url,
                $options
            );

            $data = $this->handleDataResponse($response);

            if (isset($data) && property_exists($data, 'auth_factors')) {
                foreach ($data->auth_factors as $authFactorData) {
                    $authFactors[] = new AuthFactor($authFactorData);
                }
            }
            return $authFactors;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Enroll a user with a given authentication factor.
     *
     * @param userId
     *            The id of the user.
     * @param factorId
     *            The identifier of the factor to enroll the user with.
     * @param displayName
     *            A name for the users device.
     * @param number
     *            The phone number of the user in E.164 format.
     *
     * @return OTPDevice The MFA device
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/enroll-factor Enroll an Authentication Factor documentation
     */
    public function enrollFactor($userId, $factorId, $displayName, $number)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::ENROLL_FACTOR_URL, $userId);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "factor_id" => $factorId,
                "display_name" => $displayName,
                "number" => $number
            );

            $response = $this->client->post(
                $url,
                array(
                    'headers' => $headers,
                    'json' => $data
                )
            );

            $data = $this->handleDataResponse($response);

            if (!empty($data)) {
                return new OTPDevice($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Return a list of authentication factors registered to a particular user
     * for multifactor authentication (MFA)
     *
     * @param userId
     *            The id of the user.
     *
     * @return Array OTPDevice list
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/enrolled-factors Get Enrolled Authentication Factors documentation
     */
    public function getEnrolledFactors($userId)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_ENROLLED_FACTORS_URL, $userId);
            $headers = $this->getAuthorizedHeader();

            $options = array(
                'headers' => $headers
            );

            $otpDevices = array();
            $response = $this->client->get(
                $url,
                $options
            );

            $data = $this->handleDataResponse($response);

            if (isset($data) && property_exists($data, 'otp_devices')) {
                foreach ($data->otp_devices as $otpDeviceData) {
                    $otpDevices[] = new OTPDevice($otpDeviceData);
                }
            }
            return $otpDevices;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Triggers an SMS or Push notification containing a One-Time Password (OTP)
     * that can be used to authenticate a user with the Verify Factor call.
     *
     * @param userId
     *            The id of the user.
     * @param deviceId
     *            the id of the MFA device.
     *
     * @return FactorEnrollmentResponse Info with User Id, Device Id, and OTP Device
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/activate-factor Activate an Authentication Factor documentation
     */
    public function activateFactor($userId, $deviceId)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::ACTIVATE_FACTOR_URL, $userId, $deviceId);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->post(
                $url,
                array(
                    'headers' => $headers
                )
            );

            $data = $this->handleDataResponse($response);

            if (!empty($data)) {
                return new FactorEnrollmentResponse($data[0]);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Authenticates a one-time password (OTP) code provided by a multifactor authentication (MFA) device.
     *
     * @param userId
     *            The id of the user.
     * @param deviceId
     *            The id of the MFA device.
     * @param otpToken
     *            OTP code provided by the device or SMS message sent to user.
     *            When a device like OneLogin Protect that supports Push has
     *            been used you do not need to provide the otp_token.
     * @param stateToken
     *            The state_token is returned after a successful request
     *            to Enroll a Factor or Activate a Factor.
     *            MUST be provided if the needs_trigger attribute from
     *            the proceeding calls is set to true.
     *
     * @return Boolean True if Factor is verified
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/verify-factor Verify an Authentication Factor documentation
     */
    public function verifyFactor($userId, $deviceId, $otpToken = null, $stateToken = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::VERIFY_FACTOR_URL, $userId, $deviceId);
            $headers = $this->getAuthorizedHeader();

            $data = array();

            if (!empty($otpToken)) {
                $data['otp_token'] = $otpToken;
            }
            if (!empty($stateToken)) {
                $data['state_token'] = $stateToken;
            }

            if (!empty($data)) {
                $response = $this->client->post(
                    $url,
                    array(
                        'headers' => $headers,
                        'json' => $data
                    )
                );
            } else {
                $response = $this->client->post(
                    $url,
                    array(
                        'headers' => $headers
                    )
                );
            }

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Remove an enrolled factor from a user..
     *
     * @param userId
     *            The id of the user.
     * @param deviceId
     *            The device_id of the MFA device.
     * @return Boolean The result of the action
     *
     * @see https://developers.onelogin.com/api-docs/1/multi-factor-authentication/remove-factor Remove a Factor documentation
     */
    public function removeFactor($userId, $deviceId)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::REMOVE_FACTOR_URL, $userId, $deviceId);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->delete(
                $url,
                array(
                    'headers' => $headers
                )
            );

            return $response->getStatusCode() == 200;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    ////////////////////////////
    //  Invite Links Methods  //
    ////////////////////////////

    /**
     * Generates an invite link for a user that you have already created in your OneLogin account.
     *
     * @param email
     *            Set the email address of the user that you want to generate an invite link for.
     *
     * @return String with the link
     *
     * @see https://developers.onelogin.com/api-docs/1/invite-links/generate-invite-link Generate Invite Link documentation
     */
    public function generateInviteLink($email)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GENERATE_INVITE_LINK_URL);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "email" => $email
            );

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            $data = $this->handleDataResponse($response);
            if (!empty($data)) {
                return $data[0];
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Sends an invite link to a user that you have already created in your OneLogin account.
     *
     * @param email
     *            Set to the email address of the user that you want to send an invite link for.
     * @param personal_email
     *            If you want to send the invite email to an email other than the
     *            one provided in email, provide it here. The invite link will be
     *            sent to this address instead.
     *
     * @return True if the mail with the link was sent
     *
     * @see https://developers.onelogin.com/api-docs/1/invite-links/send-invite-link Send Invite Link documentation
     */
    public function sendInviteLink($email, $personalEmail = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::SEND_INVITE_LINK_URL);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "email" => $email
            );

            if (!empty($personalEmail)) {
                $data["personal_email"] = $personalEmail;
            }

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    ///////////////////////////
    //  Embed Apps   Method  //
    ///////////////////////////

    /**
     * Lists apps accessible by a OneLogin user.
     *
     * @param token
     *            Provide your embedding token.
     * @param email
     *            Provide the email of the user for which you want to return a list of embeddable apps.
     *
     * @return A list of Apps
     *
     * @see https://developers.onelogin.com/api-docs/1/embed-apps/get-apps-to-embed-for-a-user Get Apps to Embed for a User documentation
     */
    public function getEmbedApps($token, $email)
    {
        $this->cleanError();

        try {
            $url = Constants::EMBED_APP_URL;
            $headers = array (
                'User-Agent'=> $this->userAgent
            );

            $data = array(
                "token" => $token,
                "email" => $email
            );

            $apps = null;
            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers,
                    'json' => $data
                )
            );

            $xmlContent = $response->getBody()->getContents();
            if (!empty($xmlContent)) {
                $apps = $this->retrieveAppsFromXML($xmlContent);
            }
            return $apps;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /////////////////////////
    //  Privilege Methods  //
    /////////////////////////

    /**
     * Gets a list of the Privileges created in an account.
     *
     * @return Array of Privilege
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/list-privileges List Privileges documentation
     */
    public function getPrivileges()
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::LIST_PRIVILEGES_URL);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );
            $data = json_decode($response->getBody());

            $privileges = array();
            if (!empty($data)) {
                foreach ($data as $privilegeData) {
                    $privileges[] = new Privilege($privilegeData);
                }
            }
            return $privileges;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $this->extractStatusCodeFromResponse($response);
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Creates a Privilege
     *
     * @param name
     *            The name of this privilege.
     * @param version
     *            The version for the privilege schema. Set to 2018-05-18.
     * @param statements
     *            An array of statements. Statement object or an array with the keys Effect, Action and Scope
     *
     * @return Created Privilege
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/create-privilege Create Privilege documentation
     */
    public function createPrivilege($name, $version, $statements)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::CREATE_PRIVILEGE_URL);
            $headers = $this->getAuthorizedHeader();

            $statementData = array();
            foreach ($statements as $statement) {
                if (is_object($statement)) {
                    $statementData[] = array(
                        "Effect" => $statement->effect,
                        "Action" => $statement->actions,
                        "Scope" => $statement->scopes,
                    );
                } else if (is_array($statement) && array_key_exists("Effect", $statement) && array_key_exists("Action", $statement) && array_key_exists("Scope", $statement)) {
                    $statementData[] = $statement;
                } else {
                    $this->error = 400;
                    $this->errorDescription = "$statements is invalid. Provide an array of statements. The statement should be an Statement object or an Array with the keys Effect, Action and Scope";
                    return;
                }
            }

            $privilegeData = array(
                "name" => $name,
                "privilege" => array(
                    "Version" => $version,
                    "Statement" => $statementData
                )
            );

            $response = $this->client->post(
                $url,
                array(
                    'json' => $privilegeData,
                    'headers' => $headers
                )
            );

            $data = json_decode($response->getBody());
            if (!empty($data) && property_exists($data, "id")) {
                return new Privilege($data->id, $name, $version, $statements);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Get a Privilege
     *
     * @param id
     *            The id of the privilege you want to update.
     *
     * @return Privilege
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/get-privilege Get Privilege documentation
     */
    public function getPrivilege($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->get(
                $url,
                array(
                    'headers' => $headers
                )
            );

            $data = json_decode($response->getBody());
            if (!empty($data)) {
                return new Privilege($data);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Updates a Privilege
     *
     * @param id
     *            The id of the privilege you want to update.
     * @param name
     *            The name of this privilege.
     * @param version
     *            The version for the privilege schema. Set to 2018-05-18.
     * @param statements
     *            An array of statements. Statement object or an array with the keys Effect, Action and Scope
     *
     * @return Updated Privilege
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/update-privilege Update Privilege documentation
     */
    public function updatePrivilege($id, $name, $version, $statements)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::UPDATE_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $statementData = array();
            foreach ($statements as $statement) {
                if (is_object($statement)) {
                    $statementData[] = array(
                        "Effect" => $statement->effect,
                        "Action" => $statement->actions,
                        "Scope" => $statement->scopes,
                    );
                } else if (is_array($statement) && array_key_exists("Effect", $statement) && array_key_exists("Action", $statement) && array_key_exists("Scope", $statement)) {
                    $statementData[] = $statement;
                } else {
                    $this->error = 400;
                    $this->errorDescription = "$statements is invalid. Provide an array of statements. The statement should be an Statement object or an Array with the keys Effect, Action and Scope";
                    return;
                }
            }

            $privilegeData = array(
                "name" => $name,
                "privilege" => array(
                    "Version" => $version,
                    "Statement" => $statementData
                )
            );

            $response = $this->client->put(
                $url,
                array(
                    'json' => $privilegeData,
                    'headers' => $headers
                )
            );

            $data = json_decode($response->getBody());
            if (!empty($data) && property_exists($data, "id")) {
                return new Privilege($data->id, $name, $version, $statements);
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Deletes a Privilege
     *
     * @param id
     *            The id of the privilege you want to delete.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/delete-privilege Delete Privilege documentation
     */
    public function deletePrivilege($id)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::DELETE_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->delete(
                $url,
                array(
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Gets a list of the roles assigned to a privilege.
     *
     * @param id
     *            The id of the privilege.
     * @param maxResults
     *            Limit the number of roles returned (optional)
     *
     * @return Array
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/get-roles Get Assigned Roles documentation
     */
    public function getRolesAssignedToPrivilege($id, $maxResults = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_ROLES_ASSIGNED_TO_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $maxResults = empty($maxResults)? ($this->maxResults > 1000 ? $this->maxResults : 1000) : $maxResults;

            $options = array(
                'headers' => $headers
            );

            $roles = array();
            $afterCursor = null;
            while (!isset($response) || (count($roles) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );
                $data = json_decode($response->getBody());

                if (isset($data) && property_exists($data, 'roles')) {
                    if (count($roles) + count($data->roles) == $maxResults) {
                        $roles = array_merge($roles, $data->roles);
                        return $roles;
                    } else if (count($roles) + count($data->roles) < $maxResults) {
                        $roles = array_merge($roles, $data->roles);
                    } else {
                        foreach ($data->roles as $roleId) {
                            if (count($users) < $maxResults) {
                                $roles[] = $roleId;
                            } else {
                                return $roles;
                            }
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }
            return $roles;

        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $this->extractStatusCodeFromResponse($response);
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Assign one or more roles to a privilege.
     *
     * @param id
     *            The id of the privilege.
     * @param roles
     *            The ids of the roles to be assigned.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/assign-role Assign Roles documentation
     */
    public function assignRolesToPrivilege($id, $roles)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::ASSIGN_ROLES_TO_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "roles" => $roles
            );

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Remove a role from a privilege.
     *
     * @param id
     *            The id of the privilege.
     * @param roleId
     *            The id of the role to be removed.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/remove-role Remove Role documentation
     */
    public function removeRoleFromPrivilege($id, $roleId)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::REMOVE_ROLE_FROM_PRIVILEGE_URL, $id, $roleId);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->delete(
                $url,
                array(
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Gets a list of the users assigned to a privilege.
     *
     * @param id
     *            The id of the privilege.
     * @param maxResults
     *            Limit the number of users returned (optional)
     *
     * @return Array
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/get-users Get Assigned Users documentation
     */
    public function getUsersAssignedToPrivilege($id, $maxResults = null)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::GET_USERS_ASSIGNED_TO_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $maxResults = empty($maxResults)? ($this->maxResults > 1000 ? $this->maxResults : 1000) : $maxResults;

            $options = array(
                'headers' => $headers
            );

            $users = array();
            $afterCursor = null;
            while (!isset($response) || (count($users) < $maxResults && !empty($afterCursor))) {
                $response = $this->client->get(
                    $url,
                    $options
                );
                $data = json_decode($response->getBody());

                if (isset($data) && property_exists($data, 'users')) {
                    if (count($users) + count($data->users) == $maxResults) {
                        $users = array_merge($users, $data->users);
                        return $users;
                    } else if (count($users) + count($data->users) < $maxResults) {
                        $users = array_merge($users, $data->users);
                    } else {
                        foreach ($data->users as $roleId) {
                            if (count($users) < $maxResults) {
                                $users[] = $roleId;
                            } else {
                                return $users;
                            }
                        }
                    }
                }

                $afterCursor = $this->getAfterCursor($response);
                if (!empty($afterCursor)) {
                    if (!isset($options['query'])) {
                        $options['query'] = array();
                    }
                    $options['query']['after_cursor'] = $afterCursor;
                }
            }
            return $users;

        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $this->extractStatusCodeFromResponse($response);
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
    }

    /**
     * Assign one or more users to a privilege.
     *
     * @param id
     *            The id of the privilege.
     * @param users
     *            The ids of the users to be assigned.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/assign-users Assign Users documentation
     */
    public function assignUsersToPrivilege($id, $users)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::ASSIGN_USERS_TO_PRIVILEGE_URL, $id);
            $headers = $this->getAuthorizedHeader();

            $data = array(
                "users" => $users
            );

            $response = $this->client->post(
                $url,
                array(
                    'json' => $data,
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }

    /**
     * Remove a user from a privilege.
     *
     * @param id
     *            The id of the privilege.
     * @param userId
     *            The id of the user to be removed.
     *
     * @return true if success
     *
     * @see https://developers.onelogin.com/api-docs/1/privileges/remove-user Remove User documentation
     */
    public function removeUserFromPrivilege($id, $userId)
    {
        $this->cleanError();
        $this->prepareToken();

        try {
            $url = $this->getURL(Constants::REMOVE_USER_FROM_PRIVILEGE_URL, $id, $userId);
            $headers = $this->getAuthorizedHeader();

            $response = $this->client->delete(
                $url,
                array(
                    'headers' => $headers
                )
            );

            return $this->handleOperationResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->error = $response->getStatusCode();
            $this->errorDescription = $this->extractErrorMessageFromResponse($response);
            $this->throwAppropriateException($this->error, $this->errorDescription);
        } catch (\Exception $e) {
            $this->error = 500;
            $this->errorDescription = $e->getMessage();
            $this->throwAppropriateException($this->error, $this->errorDescription);
        }
        return false;
    }
}
