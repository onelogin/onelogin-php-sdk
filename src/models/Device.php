<?php

namespace OneLogin\api\models;

class Device
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $type;

    /**
    * Create a new instance of Device.
    */
    public function __construct($data)
    {
        $this->id = isset($data->device_id)? (int) $data->device_id : null;
        $this->type = $data->device_type;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }
}
