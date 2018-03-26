<?php

namespace OneLogin\api\models;

class UserData
{
    /** @var int */
    public $id;

    /** @var int */
    public $externalId;

    /** @var string */
    public $email;

    /** @var string */
    public $username;

    /** @var string */
    public $firstname;

    /** @var string */
    public $lastname;

    /** @var string */
    public $distinguishedName;

    /** @var string */
    public $phone;

    /** @var string */
    public $company;

    /** @var string */
    public $department;

    /** @var int */
    public $status;

    /** @var int */
    public $state;

    /** @var string */
    public $memberOf;

    /** @var string */
    public $samaccountname;

    /** @var string */
    public $userprincipalname;

    /** @var string */
    public $openidName;

    /** @var string */
    public $localeCode;

    /** @var string */
    #public $notes;

    /** @var int */
    public $directoryId;

    /** @var int */
    public $managerAdId;

    /** @var int */
    public $trustedIdPId;
}
