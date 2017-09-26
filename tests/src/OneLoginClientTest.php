<?php

use \OneLogin\api\OneLoginClient;

/**
 * Unit tests for OneLoginClient class
 */
class OneloginClientTest extends PHPUnit_Framework_TestCase
{

    /**
    * Tests the constructor method of the OneLoginClient class
    * Build a OneLoginClient object with a client_id and client_secret
    *
    * @covers OneloginClientTest
    */
    public function testClientWithData()
    {
        $clientId = 'test_client_id';
        $clientSecret = 'test_client_secret';
        $client = new OneLoginClient($clientId, $clientSecret);
        $this->assertNotNull($client);
        $this->assertEquals('test_client_id', $client->clientId);
        $this->assertEquals('test_client_secret', $client->clientSecret);
        $this->assertEquals('us', $client->urlBuilder->getRegion());
    }

    /**
    * Tests the constructor method of the OneLoginClient class
    * Build a OneLoginClient object with a client_id, client_secret and region
    *
    * @covers OneloginClientTest
    */
    public function testClientWithDataAndRegion()
    {
        $clientId = 'test_client_id';
        $clientSecret = 'test_client_secret';
        $region = 'eu';
        $client = new OneLoginClient($clientId, $clientSecret, $region);
        $this->assertNotNull($client);
        $this->assertEquals('test_client_id', $client->clientId);
        $this->assertEquals('test_client_secret', $client->clientSecret);
        $this->assertEquals('eu', $client->urlBuilder->getRegion());
    }

    /**
    * Tests the constructor method of the OneLoginClient class
    * Build a OneLoginClient object with no data
    *
    * @covers OneloginClientTest
    */
    public function testClientWithNoData()
    {
        try {
            $client = new OneLoginClient();
            // Do not ever get here
            $this->assertFalse(true);
        } catch (Exception $e) {
            $this->assertContains('Missing argument', $e->getMessage());
        }
    }
}