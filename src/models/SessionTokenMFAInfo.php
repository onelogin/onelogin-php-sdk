<?php

namespace OneLogin\api\models;

use OneLogin\api\models\Device;
use OneLogin\api\models\User;

class SessionTokenMFAInfo
{
    /** @var User (partial info) */
    public $user;

    /** @var string */
    public $stateToken;

    /** @var string */
    public $callbackUrl;

    /** @var array */
    public $devices = array();

    /**
     * Create a new instance of SessionTokenMFAInfo.
     */
    public function __construct($data)
    {
        if (!empty($data->user)) {
            $this->user = new User($data->user);
        }
        $this->stateToken = $data->state_token;
        $this->callbackUrl = $data->callback_url;
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
