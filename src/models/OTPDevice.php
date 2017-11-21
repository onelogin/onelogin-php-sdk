<?php

namespace OneLogin\api\models;

class OTPDevice
{
    /** @var int */
    public $id;

    /** @var boolean */
    public $active;

    /** @var boolean */
    public $default;

    /** @var string */
    public $authFactorName;

    /** @var string */
    public $phoneNumber;

    /** @var string */
    public $typeDisplayName;

    /** @var string */
    public $needsTrigger;

    /** @var string */
    public $userDisplayName;

    /** @var string */
    public $stateToken;

    /**
    * Create a new instance of OTPDevice.
    */
    public function __construct($data)
    {
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->active = $data->active;
        $this->default = $data->default;
        $this->authFactorName = $data->auth_factor_name;
        $this->phoneNumber = $data->phone_number;
        $this->typeDisplayName = $data->type_display_name;
        $this->needsTrigger = $data->needs_trigger;
        $this->userDisplayName = $data->user_display_name;
        $this->stateToken = $data->state_token;
    }
}
