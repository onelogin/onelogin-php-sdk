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

    /** @var boolean */
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
        
        // Boolean fields with appropriate defaults
        $this->active = isset($data->active) ? (bool) $data->active : false;
        $this->default = isset($data->default) ? (bool) $data->default : false;
        $this->needsTrigger = isset($data->needs_trigger) ? (bool) $data->needs_trigger : false;
        
        // String fields with null-safe access but fail-fast for missing required fields
        $this->authFactorName = $data->auth_factor_name ?? null;
        $this->phoneNumber = $data->phone_number ?? null;
        $this->typeDisplayName = $data->type_display_name ?? null;
        $this->userDisplayName = $data->user_display_name ?? null;
        $this->stateToken = $data->state_token ?? null;
    }
}
