<?php

namespace OneLogin\api\models;

class FactorEnrollmentResponse
{
    /** @var int */
    public $device_id;

    /** @var int */
    public $user_id;

    /** @var boolean */
    public $active;

    /** @var string */
    public $authFactorName;

    /** @var string */
    public $typeDisplayName;

    /** @var string */
    public $userDisplayName;

    /** @var string */
    public $stateToken;

    /**
    * Create a new instance of FactorEnrollmentResponse.
    */
    public function __construct($data)
    {
        $this->device_id = isset($data->device_id)? (int) $data->device_id : null;
        $this->user_id = isset($data->id)? (int) $data->id : null;
        $this->active = $data->default;
        $this->authFactorName = $data->auth_factor_name;
        $this->typeDisplayName = $data->type_display_name;
        $this->userDisplayName = $data->user_display_name;
        $this->stateToken = $data->state_token;
    }
}
