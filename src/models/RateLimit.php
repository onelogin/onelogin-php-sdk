<?php

namespace OneLogin\api\models;

class RateLimit
{
    /** @var int */
    public $limit;

    /** @var int */
    public $remaining;

    /** @var int */
    public $reset;

    /**
     * Create a new instance of RateLimit.
     */
    public function __construct($data)
    {
        $data = (array) $data;
        $this->limit = (int) $data['X-RateLimit-Limit'];
        $this->remaining = (int) $data['X-RateLimit-Remaining'];
        $this->reset = (int) $data['X-RateLimit-Reset'];
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getRemaining()
    {
        return $this->remaining;
    }

    public function getReset()
    {
        return $this->reset;
    }
}
