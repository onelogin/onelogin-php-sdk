<?php

namespace OneLogin\api\models;

class EmbedApp
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $icon;

    /** @var int */
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
        $this->provisioned = isset($data->provisioned)? (int) $data->provisioned : null;
        $this->extensionRequired = boolval($data->personal);
        $this->loginId = isset($data->login_id)? (int) $data->login_id : null;
        $this->personal = boolval($data->personal);
    }
}
