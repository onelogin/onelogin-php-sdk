<?php

date_default_timezone_set('UTC');

$basePath = dirname(__DIR__).'/';

require_once $basePath."vendor/autoload.php";

require_once $basePath."src/models/App.php";
require_once $basePath."src/models/Device.php";
require_once $basePath."src/models/Event.php";
require_once $basePath."src/models/EventType.php";
require_once $basePath."src/models/Group.php";
require_once $basePath."src/models/MFA.php";
require_once $basePath."src/models/OneLoginToken.php";
require_once $basePath."src/models/RateLimit.php";
require_once $basePath."src/models/Role.php";
require_once $basePath."src/models/SAMLEndpointResponse.php";
require_once $basePath."src/models/SessionTokenInfo.php";
require_once $basePath."src/models/SessionTokenMFAInfo.php";
require_once $basePath."src/models/User.php";
require_once $basePath."src/models/UserData.php";
require_once $basePath."src/models/UserMetadata.php";
require_once $basePath."src/OneLoginClient.php";
require_once $basePath."src/util/Constants.php";
require_once $basePath."src/util/UrlBuilder.php";
