<?php

namespace OneLogin\api\models;

class App
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $icon;

    /** @var string */
    public $provisioned;

    /** @var bool */
    public $extension;

    /** @var string */
    public $loginId;

    /** @var bool */
    public $personal;

    /**
     * Create a new instance of App.
     */
    public function __construct($data)
    {
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->name = $data->name;
        $this->icon = isset($data->icon) ? $data->icon : null;
        $this->provisioned = $data->provisioned;
        $this->extension = $data->extension;
        $this->loginId = $data->login_id;
        $this->personal = $data->personal;
    }
}
