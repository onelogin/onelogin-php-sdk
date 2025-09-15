<?php

namespace OneLogin\api\models;

class AuthFactor
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /**
    * Create a new instance of Auth Factor.
    */
    public function __construct($data)
    {
        $this->id = isset($data->factor_id)? (int) $data->factor_id : null;
        $this->name = $data->name ?? null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
