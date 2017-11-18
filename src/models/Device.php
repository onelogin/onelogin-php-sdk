<?php

namespace OneLogin\api\models;

class Device
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $type;

    /** @var string */
    protected $duoSigRequest;

    /** @var string */
    protected $duoApiHostname;

    /**
    * Create a new instance of Device.
    */
    public function __construct($data)
    {
        $this->id = isset($data->device_id)? (int) $data->device_id : null;
        $this->type = $data->device_type;
        $this->duoSigRequest = isset($data->duo_sig_request)? $data->duo_sig_request : null;
        $this->duoApiHostname = isset($data->duo_api_hostname)? $data->duo_api_hostname : null;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDuoSigRequest()
    {
        return $this->duoSigRequest;
    }

    public function getDuoApiHostname()
    {
        return $this->duoApiHostname;
    }
}
