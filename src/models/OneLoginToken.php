<?php

namespace OneLogin\api\models;

class OneLoginToken
{

    /** @var string OAuth 2.0 Access Token */
    protected $accessToken;

    /** @var string OAuth 2.0 Refresh Token */
    protected $refreshToken;

    /** @var DateTime OAuth 2.0 Token expiration */
    protected $expiration;

    /** @var DateTime OAuth 2.0 Token creation */
    protected $createdAt;

    /** @var string OAuth 2.0 Token type */
    protected $tokenType;

    /** @var integer OneLogin Account ID */
    protected $accountId;

    /**
     * Create a new instance of OneLoginToken.
     */
    public function __construct($data)
    {
        $this->accessToken = $data->access_token;
        $this->refreshToken = $data->refresh_token;
        $this->accountId = (int) $data->account_id;
        $this->tokenType = $data->token_type;
        $utc = new \DateTimeZone("UTC");
        $this->createdAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->created_at, $utc);
        $expiresIn = (int) $data->expires_in;
        $this->expiration = new \DateTime(
            "+{$expiresIn} seconds",
            $utc
        );
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function getTokenType()
    {
        return $this->tokenType;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }
}
