<?php

namespace OneLogin\api\util;

/**
 * Builds the API URL endpoints for the OneLogin's PHP SDK.
 */
class UrlBuilder
{
    /** @var string $region Onelogin Region */
    private $region;

    /**
     * Create a new instance of UrlBuilder.
     *
     * @param string $region
     */
    public function __construct($region = "us")
    {
        $this->region = $region;
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
