<?php

namespace OneLogin\api\models;

class UserMetadata
{
    /** @var DateTime */
    public $activatedAt;

    /** @var DateTime */
    public $createdAt;

    /** @var DateTime */
    public $updatedAt;

    /** @var DateTime */
    public $passwordChangedAt;

    /** @var int */
    public $invalidLoginAttempts;

    /** @var DateTime */
    public $invitationSentAt;

    /** @var DateTime */
    public $lastLogin;

    /** @var DateTime */
    public $lockedUntil;

    /** @var string */
    public $comment;
}
