<?php

namespace OneLogin\api\models;

use OneLogin\api\models\UserData;
use OneLogin\api\models\UserMetaData;

class User
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

    /** @var string */
    public $title;

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

    /** @var int */
    public $groupId;

    /** @var array */
    public $roleIds = array();

    /** @var array */
    public $customAttributes = array();

    /** @var string */
    public $openidName;

    /** @var string */
    public $localeCode;

    /** @var string */
    public $comment;

    /** @var int */
    public $directoryId;

    /** @var int */
    public $managerAdId;

    /** @var int */
    public $trustedIdPId;

    /** @var int */
    public $managerUserId;

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

    /**
     * Create a new instance of User.
     */
    public function __construct($data)
    {
        $utc = new \DateTimeZone("UTC");
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->externalId = isset($data->external_id)? (int) $data->external_id : null;
        $this->email = $data->email;
        $this->username = $data->username;
        $this->firstname = $data->firstname;
        $this->lastname = $data->lastname;
        $this->distinguishedName = isset($data->distinguished_name)? $data->distinguished_name : null;
        $this->phone = isset($data->phone)? $data->phone : null;
        $this->company = isset($data->company)? $data->company : null;
        $this->department = isset($data->department)? $data->department : null;
        $this->title = isset($data->title)? $data->title : null;
        $this->status = isset($data->status)? (int) $data->status : null;
        $this->state = isset($data->state)? (int) $data->state : null;
        $this->memberOf = isset($data->member_of)? $data->member_of : null;
        $this->samaccountname = isset($data->samaccountname)? $data->samaccountname : null;
        $this->userprincipalname = isset($data->userprincipalname)? $data->userprincipalname : null;
        $this->groupId = isset($data->group_id)? (int) $data->group_id : null;
        if (!empty($data->role_id)) {
            $this->roleIds = array();
            foreach ($data->role_id as $roleid) {
                $this->roleIds[] = (int) $roleid;
            }
        }
        if (!empty($data->custom_attributes)) {
            $this->customAttributes = (array) $data->custom_attributes;
        }
        $this->openidName = isset($data->openid_name)? $data->openid_name : null;
        $this->localeCode = isset($data->locale_code)? $data->locale_code : null;
        #if (isset($data->notes)) {
        #    $this->notes = $data->notes;
        #}
        $this->comment = isset($data->comment)? $data->comment : null;
        $this->directoryId = isset($data->directory_id)? (int) $data->directory_id : null;
        $this->managerAdId = isset($data->manager_ad_id)? (int) $data->manager_ad_id : null;
        $this->trustedIdPId = isset($data->trusted_idp_id)? (int) $data->trusted_idp_id : null;
        $this->managerUserId = isset($data->manager_user_id)? (int) $data->manager_user_id : null;
        if (isset($data->activated_at)) {
            $this->activatedAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->activated_at, $utc);
        }
        if (isset($data->created_at)) {
            $this->createdAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->created_at, $utc);
        }
        if (isset($data->updated_at)) {
            $this->updatedAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->updated_at, $utc);
        }
        if (isset($data->password_changed_at)) {
            $this->passwordChangedAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->password_changed_at, $utc);
        }
        if (isset($data->invitation_sent_at)) {
            $this->invitationSentAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->invitation_sent_at, $utc);
        }
        $this->invalidLoginAttempts = isset($data->invalid_login_attempts)? (int) $data->invalid_login_attempts : null;

        if (isset($data->last_login)) {
            $this->lastLogin = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->last_login, $utc);
        }
        if (isset($data->locked_until)) {
            $this->lockedUntil = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->locked_until, $utc);
        }
    }

    public function getRoleIDs()
    {
        return $this->roleIds;
    }

    public function getGroupID()
    {
        return $this->groupId;
    }

    public function getUserData()
    {
        $userData = new UserData();
        $userData->id = $this->id;
        $userData->externalId= $this->externalId;
        $userData->email = $this->email;
        $userData->username = $this->username;
        $userData->firstname = $this->firstname;
        $userData->lastname = $this->lastname;
        $userData->distinguishedName = $this->distinguishedName;
        $userData->phone = $this->phone;
        $userData->company = $this->company;
        $userData->department = $this->department;
        $userData->title = $this->title;
        $userData->status = $this->status;
        $userData->state = $this->state;
        $userData->memberOf = $this->memberOf;
        $userData->samaccountname = $this->samaccountname;
        $userData->userprincipalname = $this->userprincipalname;
        $userData->openidName = $this->openidName;
        $userData->localeCode = $this->localeCode;
        $userData->directoryId = $this->directoryId;
        $userData->managerAdId = $this->managerAdId;
        $userData->trustedIdPId = $this->trustedIdPId;
        $userData->managerUserId = $this->managerUserId;
        return $userData;
    }

    public function getUserMetaData()
    {
        $userMetaData = new UserMetaData();
        $userData->id = $this->id;
        $userMetaData->activatedAt = $this->activatedAt;
        $userMetaData->createdAt = $this->createdAt;
        $userMetaData->updatedAt = $this->updatedAt;
        $userMetaData->passwordChangedAt = $this->passwordChangedAt;
        $userMetaData->invalidLoginAttempts = $this->invalidLoginAttempts;
        $userMetaData->invitationSentAt = $this->invitationSentAt;
        $userMetaData->lastLogin = $this->lastLogin;
        $userMetaData->lockedUntil = $this->lockedUntil;
        $userMetaData->comment = $this->comment;
        return $userMetaData;
    }

    public function getUserCustomAttributes()
    {
        return $this->customAttributes;
    }
    
    public function getUserParams()
    {
        $userParams = array();
        $userParams["external_id"] = $this->externalId;
        $userParams["email"] = $this->email;
        $userParams["username"] = $this->username;
        $userParams["firstname"] = $this->firstname;
        $userParams["lastname"] = $this->lastname;
        $userParams["distinguished_name"] = $this->distinguishedName;
        $userParams["phone"] = $this->phone;
        $userParams["company"] = $this->company;
        $userParams["department"] = $this->department;
        $userParams["title"] = $this->title;
        $userParams["status"] = $this->status;
        $userParams["state"] = $this->state;
        $userParams["member_of"] = $this->memberOf;
        $userParams["samaccountname"] = $this->samaccountname;
        $userParams["invalid_login_attempts"] = $this->invalidLoginAttempts;
        $userParams["userprincipalname"] = $this->userprincipalname;
        $userParams["group_id"] = $this->groupId;
        $userParams["openid_name"] = $this->openidName;
        $userParams["locale_code"] = $this->localeCode;
        #$userParams["notes"] = $this->notes;
        $userParams["openid_name"] = $this->openidName;
        $userParams["directory_id"] = $this->directoryId;
        $userParams["manager_ad_id"] = $this->managerAdId;
        $userParams["trusted_idp_id"] = $this->trustedIdPId;

        return $userParams;
    }
}
