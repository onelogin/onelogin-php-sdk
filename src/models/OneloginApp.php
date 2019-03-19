<?php

namespace OneLogin\api\models;

class OneloginApp
{
    /** @var int */
    public $id;

    /** @var int */
    public $connectorId;

    /** @var string */
    public $name;

    /** @var bool */
    public $extension;

    /** @var string */
    public $icon;

    /** @var bool */
    public $visible;

    /** @var bool */
    public $provisioning;

    /**
     * Create a new instance of Onelogin App / Connector.
     */
    public function __construct($data)
    {
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->connectorId = isset($data->connector_id)? (int) $data->connector_id : null;
        $this->name = $data->name;
        $this->extension = $data->extension;
        $this->icon = $data->icon;
        $this->visible = $data->visible;
        $this->provisioning = $data->provisioning;
    }
}
