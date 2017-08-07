<?php

namespace OneLogin\api\models;

use OneLogin\api\models\Device;
use OneLogin\api\models\User;

class MFA
{
    /** @var string */
    public $stateToken;

    /** @var string */
    public $callbackUrl;

    /** @var User */
    public $user;

    /** @var array */
    public $devices = array();

    /**
     * Create a new instance of MFA.
     */
    public function __construct($data)
    {
        $this->stateToken = $data->state_token;
        $this->callbackUrl = $data->callback_url;
        if (!empty($data->user)) {
            $user = new User($data->user);
        }
        if (!empty($data->devices)) {
            $this->devices = array();
            foreach ($data->devices as $deviceData) {
                $this->devices[] = new Device($deviceData);
            }
        }
    }

    public function getStateToken()
    {
        return $this->stateToken;
    }

    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getDevices()
    {
        return $this->devices;
    }
}
