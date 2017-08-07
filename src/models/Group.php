<?php

namespace OneLogin\api\models;

class Group
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $reference;

    /**
     * Create a new instance of Group.
     */
    public function __construct($data)
    {
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->name = $data->name;
        $this->reference = $data->reference;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getReference()
    {
        return $this->reference;
    }
}
