<?php

namespace OneLogin\api\models;

class MFAToken
{
    /** @var string */
    public $value;

    /** @var bool */
    public $reusable;

    /** @var User */
    public $expiresAt;

    /**
     * Create a new instance of MFAToken.
     */
    public function __construct($data)
    {
        $this->value = $data->mfa_token;
        $this->reusable = $data->reusable;
        $this->expiresAt = $data->expires_at;
    }
}
