<?php

namespace OneLogin\api\models;

use OneLogin\api\models\MFA;

class SAMLEndpointResponse
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $message;

    /** @var MFA */
    protected $mfa;

    /** @var string */
    protected $samlResponse;

    /**
     * Create a new instance of SAMLEndpointResponse.
     */
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function setMFA($mfa)
    {
        return $this->mfa = $mfa;
    }

    public function setSAMLResponse($samlResponse)
    {
        return $this->samlResponse = $samlResponse;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getMFA()
    {
        return $this->mfa;
    }

    public function getSAMLResponse()
    {
        return $this->samlResponse;
    }
}
