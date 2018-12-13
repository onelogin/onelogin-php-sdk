<?php

namespace OneLogin\api\models;

use OneLogin\api\models\Statement;
use OneLogin\api\util\Constants;

class Privilege
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $version;

    /** @var array */
    public $statements = array();

    /**
     * Create a new instance of Privilege.
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
        $this->id = $data->id;
        $this->name = $data->name;
        $this->version = $data->privilege->Version;
        foreach ($data->privilege->Statement as $statementData) {
            $this->statements[] = new Statement($statementData);
        }
    }

    /**
     * Create a new instance of Privilege.
     */
    public function __construct4($id, $name, $version, $statements)
    {
        $this->id = $id;
        $this->name = $name;
        $this->version = $version;
        $this->statements = array();

        foreach ($statements as $statement) {
            if (is_object($statement)) {
                $this->statements[] = $statement;
            } else if (is_array($statement) && array_key_exists("Effect", $statement) && array_key_exists("Action", $statement) && array_key_exists("Scope", $statement)) {
                $this->statements[] = new Statement($statement["Effect"], $statement["Action"], $statement["Scope"]);
            }
        }
    }

    public static function getValidActions()
    {
        return Constants::VALID_ACTIONS;
    }
}
