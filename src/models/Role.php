<?php

namespace OneLogin\api\models;

class Role
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /**
     * Create a new instance of Role.
     */
    public function __construct($data)
    {
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->name = $data->name;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
