<?php
namespace OneLogin\api\models;

class SessionStatus
{

    /** @var string */
    public $type;

    /** @var int */
    public $code;

    /** @var string */
    public $message;

    /** @var bool */
    public $error;

    /**
     * Create a new instance of SessionStatus.
     */
    public function __construct($status)
    {
        $this->type    = $status->type;
        $this->code    = $status->code;
        $this->message = $status->message;
        $this->error   = $status->error;
    }
}
