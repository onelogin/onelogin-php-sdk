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
    public $extensionRequired;

    /** @var int */
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
        $this->icon = $data->icon;
        $this->provisioned = $data->provisioned;
        $this->extensionRequired = $data->extension;
        $this->loginId = isset($data->login_id)? (int) $data->login_id : null;
        $this->personal = $data->personal;
    }
}
