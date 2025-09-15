<?php

namespace OneLogin\api\exceptions;

/**
 * Base OneLogin API Exception class
 */
class OneLoginException extends \Exception
{
    /** @var int $errorCode OneLogin API error code */
    protected $errorCode;
    
    /** @var string $errorAttribute The attribute that caused the error if available */
    protected $errorAttribute;

    public function __construct($message = "", $code = 0, $errorAttribute = null, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errorCode = $code;
        $this->errorAttribute = $errorAttribute;
    }

    /**
     * Get the OneLogin API error code
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Get the error attribute that caused the error
     *
     * @return string|null
     */
    public function getErrorAttribute()
    {
        return $this->errorAttribute;
    }
}