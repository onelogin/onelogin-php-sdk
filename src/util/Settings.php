<?php

namespace OneLogin\api\util;

/**
 * Onelogin client implementation
 */
class Settings
{
    const ONELOGIN_PROPERTIES_FILE = "onelogin.sdk.ini";
    const CLIENT_ID_KEY = "onelogin.sdk.client_id";
    const CLIENT_SECRET_KEY = "onelogin.sdk.client_secret";
    const REGION = "onelogin.sdk.region";

    /** @var string $clientID OneLogin Client ID */
    private $clientID;

    /** @var string $clientSecret OneLogin Client  */
    private $clientSecret;

    /** @var string $region Onelogin Region */
    private $region = "us";

    /**
     * Create a new instance of Settings.
     *
     * @param string $path
     */
    public function __construct($path = null)
    {
        if (empty($path)) {
            $path = dirname(__FILE__);
        }

        if (substr($path, -1) !== '/') {
            $path = $path . '/';
        }
        $filename = $path . self::ONELOGIN_PROPERTIES_FILE;

        if (!file_exists($filename)) {
            throw new \Exception("Onelogin settings file not found at $filename");
        }

        $info = parse_ini_file($filename);

        if (!empty($info[self::CLIENT_ID_KEY])) {
            $this->clientID = $info[self::CLIENT_ID_KEY];
        }

        if (!empty($info[self::CLIENT_SECRET_KEY])) {
            $this->clientSecret = $info[self::CLIENT_SECRET_KEY];
        }

        if (!empty($info[self::REGION])) {
            $this->region = $info[self::REGION];
        }
    }

    public function getClientId()
    {
        return $this->clientID;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getURL($base, $id = null)
    {
        if ($id != null) {
            return sprintf($base, $this->region, $id);
        } else {
            return sprintf($base, $this->region);
        }
    }
}
