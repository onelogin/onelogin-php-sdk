<?php

namespace OneLogin\api\util;

/**
 * Constants class of OneLogin's PHP SDK.
 *
 * A class that contains several constants related to the SDK
 */
class Constants
{
    // OAuth2 Tokens URLs
    const TOKEN_REQUEST_URL = "https://api.%s.onelogin.com/auth/oauth2/v2/token";
    const TOKEN_REFRESH_URL = "https://api.%s.onelogin.com/auth/oauth2/v2/token";
    const TOKEN_REVOKE_URL = "https://api.%s.onelogin.com/auth/oauth2/v2/revoke";
    const GET_RATE_URL = "https://api.%s.onelogin.com/auth/rate_limit";

    // User URLs
    const GET_USERS_URL = "https://api.%s.onelogin.com/api/1/users";
    const GET_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s";
    const GET_APPS_FOR_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/apps";
    const GET_ROLES_FOR_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/roles";
    const GET_CUSTOM_ATTRIBUTES_URL = "https://api.%s.onelogin.com/api/1/users/custom_attributes";
    const CREATE_USER_URL = "https://api.%s.onelogin.com/api/1/users";
    const SESSION_LOGIN_TOKEN_URL = "https://api.%s.onelogin.com/api/1/login/auth";
    const GET_TOKEN_VERIFY_FACTOR = "https://api.%s.onelogin.com/api/1/login/verify_factor";
    const SESSION_API_TOKEN_URL = "https://admin.%s.onelogin.com/session_via_api_token";
    const UPDATE_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s";
    const DELETE_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s";
    const ADD_ROLE_TO_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/add_roles";
    const DELETE_ROLE_TO_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/remove_roles";
    const SET_PW_CLEARTEXT = "https://api.%s.onelogin.com/api/1/users/set_password_clear_text/%s";
    const SET_PW_SALT = "https://api.%s.onelogin.com/api/1/users/set_password_using_salt/%s";
    const SET_STATE_TO_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/set_state";
    const SET_CUSTOM_ATTRIBUTE_TO_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/set_custom_attributes";
    const LOG_USER_OUT_URL = "https://api.%s.onelogin.com/api/1/users/%s/logout";
    const LOCK_USER_URL = "https://api.%s.onelogin.com/api/1/users/%s/lock_user";

    // Role URLs
    const GET_ROLES_URL = "https://api.%s.onelogin.com/api/1/roles";
    const CREATE_ROLE_URL = "https://api.%s.onelogin.com/api/1/roles";
    const GET_ROLE_URL = "https://api.%s.onelogin.com/api/1/roles/%s";

    // Event URLS
    const GET_EVENT_TYPES_URL = "https://api.%s.onelogin.com/api/1/events/types";
    const GET_EVENTS_URL = "https://api.%s.onelogin.com/api/1/events";
    const CREATE_EVENT_URL = "https://api.%s.onelogin.com/api/1/events";
    const GET_EVENT_URL = "https://api.%s.onelogin.com/api/1/events/%s";

    // Group URLs
    const GET_GROUPS_URL = "https://api.%s.onelogin.com/api/1/groups";
    const CREATE_GROUP_URL = "https://api.%s.onelogin.com/api/1/groups";
    const GET_GROUP_URL = "https://api.%s.onelogin.com/api/1/groups/%s";

    // SAML Assertion URLs
    const GET_SAML_ASSERTION_URL = "https://api.%s.onelogin.com/api/1/saml_assertion";
    const GET_SAML_VERIFY_FACTOR = "https://api.%s.onelogin.com/api/1/saml_assertion/verify_factor";

    // Multi-Factor Authentication URLs
    const GET_FACTORS_URL = "https://api.%s.onelogin.com/api/1/users/%s/auth_factors";
    const ENROLL_FACTOR_URL = "https://api.%s.onelogin.com/api/1/users/%s/otp_devices";
    const GET_ENROLLED_FACTORS_URL = "https://api.%s.onelogin.com/api/1/:users/%s/;otp_devices";
    const ACTIVATE_FACTOR_URL = "https://api.%s.onelogin.com/api/1/users/%s/otp_devices/%s/trigger";
    const VERIFY_FACTOR_URL = "https://api.%s.onelogin.com/api/1/users/%s/otp_devices/%s/verify";

    // Invite Link URLS
    const GENERATE_INVITE_LINK_URL = "https://api.%s.onelogin.com/api/1/invites/get_invite_link";
    const SEND_INVITE_LINK_URL = "https://api.%s.onelogin.com/api/1/invites/send_invite_link";

    // Embed Apps URL
    const EMBED_APP_URL = "https://api.onelogin.com/client/apps/embed2";
}
