<?php

namespace OneLogin\api\models;

use OneLogin\api\models\User;

class SessionTokenInfo
{
    /** @var string */
    public $status;

    /** @var User (partial info) */
    public $user;

    /** @var string */
    public $returnToUrl;

    /** @var DateTime */
    public $expiresAt;

    /** @var string */
    public $sessionToken;

    /**
     * Create a new instance of SessionTokenInfo.
     */
    public function __construct($data)
    {
        $utc = new \DateTimeZone("UTC");
        $this->status = $data->status;
        if (!empty($data->user)) {
            $this->user = new User($data->user);
        }
        $this->returnToUrl = $data->return_to_url;
        $this->expiresAt = \DateTime::createFromFormat('Y/m/d H:i:s O', $data->expires_at, $utc);
        $this->sessionToken = $data->session_token;
    }
}
