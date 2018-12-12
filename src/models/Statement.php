<?php

namespace OneLogin\api\models;

class Statement
{
    /** @var string */
    public $effect;

    /** @var array */
    public $actions;

    /** @var array */
    public $scopes;

    /**
     * Create a new instance of Statement.
     */
    public function __construct()
    {
        $get_arguments       = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct1($data)
    {
        $this->effect = isset($data->Effect)? $data->Effect : "Allow";
        $this->actions = $data->Action;
        $this->scopes = $data->Scope;
    }

    public function __construct3($effect, $actions, $scopes)
    {
        $this->effect = $effect;
        $this->actions = $actions;
        $this->scopes = $scopes;
    }
}
