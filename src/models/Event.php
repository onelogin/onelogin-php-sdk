<?php

namespace OneLogin\api\models;

class Event
{
    /** @var int */
    public $id;

    /** @var DateTime */
    public $createdAt;

    /** @var int */
    public $accountId;

    /** @var int */
    public $userId;

    /** @var string */
    public $userName;

    /** @var int */
    public $eventTypeId;

    /** @var string */
    public $notes;

    /** @var string */
    public $ipaddr;

    /** @var int */
    public $actorUserId;

    /** @var string */
    public $actorUserName;

    /** @var int */
    public $assumingActingUserId ;

    /** @var int */
    public $roleId;

    /** @var string */
    public $roleName;

    /** @var int */
    public $appId;

    /** @var string */
    public $appName;

    /** @var int */
    public $groupId;

    /** @var string */
    public $groupName;

    /** @var int */
    public $otpDeviceId;

    /** @var string */
    public $otpDeviceName;

    /** @var int */
    public $policyId;

    /** @var string */
    public $policyName;

    /** @var string */
    public $actorSystem;

    /** @var string */
    public $customMessage;

    /** @var string */
    public $operationName;

    /** @var int */
    public $directorySyncRunId;

    /** @var int */
    public $directoryId;

    /** @var string */
    public $resolution;

    /** @var int */
    public $clientId;

    /** @var int */
    public $resourceTypeId;

    /** @var string */
    public $errorDescription;

    /** @var string */
    public $proxyIp;

    /** @var int */
    public $riskScore;

    /** @var string */
    public $riskReasons;

    /** @var string */
    public $riskCookieId;

    /** @var string */
    public $browserFingerprint;

    /**
     * Create a new instance of Event.
     */
    public function __construct($data)
    {
        $utc = new \DateTimeZone("UTC");
        $this->id = isset($data->id)? (int) $data->id : null;
        $this->createdAt = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $data->created_at, $utc);
        $this->accountId = isset($data->account_id)? (int) $data->account_id : null;
        $this->userId = isset($data->user_id)? (int) $data->user_id : null;
        $this->userName = $data->user_name;
        $this->eventTypeId = isset($data->event_type_id)? (int) $data->event_type_id : null;
        $this->notes = $data->notes;
        $this->ipaddr = $data->ipaddr;
        $this->actorUserId = isset($data->actor_user_id)? (int) $data->actor_user_id : null;
        $this->actorUserName = $data->actor_user_name;
        $this->assumingActingUserId = isset($data->assuming_acting_user_id)? (int) $data->assuming_acting_user_id : null;
        $this->roleId = isset($data->role_id)? (int) $data->role_id : null;
        $this->roleName = $data->role_name;
        $this->appId = isset($data->app_id)? (int) $data->app_id : null;
        $this->appName = $data->app_name;
        $this->groupId = isset($data->group_id)? (int) $data->group_id : null;
        $this->groupName = $data->group_name;
        $this->otpDeviceId = isset($data->otp_device_id)? (int) $data->otp_device_id : null;
        $this->otpDeviceName = $data->otp_device_name;
        $this->policyId = isset($data->policy_id)? (int) $data->policy_id : null;
        $this->policyName = $data->policy_name;
        $this->actorSystem = $data->actor_system;
        $this->customMessage = $data->custom_message;
        $this->operationName = $data->operation_name;
        $this->directorySyncRunId = isset($data->directory_sync_run_id)? (int) $data->directory_sync_run_id : null;
        $this->directoryId = isset($data->directory_id)? (int) $data->directory_id : null;
        $this->resolution = $data->resolution;
        $this->clientId = isset($data->client_id)? (int) $data->client_id : null;
        $this->resourceTypeId = isset($data->resource_type_id)? (int) $data->resource_type_id : null;
        $this->errorDescription = $data->error_description;
        $this->proxyIp = $data->proxy_ip;
        $this->riskScore = $data->risk_score;
        $this->riskReasons = $data->risk_reasons;
        $this->riskCookieId = $data->risk_cookie_id;
        $this->browserFingerprint = $data->browser_fingerprint;
    }

    public function getRole()
    {
        $role = null;
        if (!empty($this->roleId) && $this->roleName != null) {
            $role = new Role($this->roleId, $this->roleName);
        }
        return $role;
    }

    public function getGroup()
    {
        $group = null;
        if (!empty($this->groupId) && $this->groupName != null) {
            $group = new Role($this->groupId, $this->groupName, null);
        }
        return $group;
    }
}
