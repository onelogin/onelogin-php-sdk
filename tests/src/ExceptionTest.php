<?php

use OneLogin\api\OneLoginClient;
use OneLogin\api\exceptions\OneLoginException;
use OneLogin\api\exceptions\AuthenticationException;
use OneLogin\api\exceptions\ValidationException;
use OneLogin\api\exceptions\RateLimitException;
use OneLogin\api\exceptions\ServerException;

/**
 * Unit tests for Exception handling in OneLoginClient
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    private $clientId = 'test_client_id';
    private $clientSecret = 'test_client_secret';

    /**
     * Test that exceptions are disabled by default (backward compatibility)
     *
     * @covers OneLoginClient::__construct
     * @covers OneLoginClient::isThrowExceptionsEnabled
     */
    public function testExceptionsDisabledByDefault()
    {
        $client = new OneLoginClient($this->clientId, $this->clientSecret);
        $this->assertFalse($client->isThrowExceptionsEnabled());
    }

    /**
     * Test enabling exceptions during construction
     *
     * @covers OneLoginClient::__construct
     * @covers OneLoginClient::isThrowExceptionsEnabled
     */
    public function testExceptionsEnabledInConstructor()
    {
        $client = new OneLoginClient($this->clientId, $this->clientSecret, 'us', 1000, true);
        $this->assertTrue($client->isThrowExceptionsEnabled());
    }

    /**
     * Test toggling exception throwing
     *
     * @covers OneLoginClient::setThrowExceptions
     * @covers OneLoginClient::isThrowExceptionsEnabled
     */
    public function testToggleExceptions()
    {
        $client = new OneLoginClient($this->clientId, $this->clientSecret);
        
        // Initially disabled
        $this->assertFalse($client->isThrowExceptionsEnabled());
        
        // Enable exceptions
        $client->setThrowExceptions(true);
        $this->assertTrue($client->isThrowExceptionsEnabled());
        
        // Disable exceptions
        $client->setThrowExceptions(false);
        $this->assertFalse($client->isThrowExceptionsEnabled());
    }

    /**
     * Test OneLoginException base class
     *
     * @covers OneLoginException::__construct
     * @covers OneLoginException::getErrorCode
     * @covers OneLoginException::getErrorAttribute
     */
    public function testOneLoginExceptionBase()
    {
        $exception = new OneLoginException("Test message", 400, "test_attr");
        
        $this->assertEquals("Test message", $exception->getMessage());
        $this->assertEquals(400, $exception->getErrorCode());
        $this->assertEquals("test_attr", $exception->getErrorAttribute());
    }

    /**
     * Test AuthenticationException
     *
     * @covers AuthenticationException::__construct
     */
    public function testAuthenticationException()
    {
        $exception = new AuthenticationException("Auth failed", 401);
        
        $this->assertInstanceOf('OneLogin\api\exceptions\OneLoginException', $exception);
        $this->assertEquals("Auth failed", $exception->getMessage());
        $this->assertEquals(401, $exception->getErrorCode());
    }

    /**
     * Test ValidationException
     *
     * @covers ValidationException::__construct
     */
    public function testValidationException()
    {
        $exception = new ValidationException("Validation failed", 400, "email");
        
        $this->assertInstanceOf('OneLogin\api\exceptions\OneLoginException', $exception);
        $this->assertEquals("Validation failed", $exception->getMessage());
        $this->assertEquals(400, $exception->getErrorCode());
        $this->assertEquals("email", $exception->getErrorAttribute());
    }

    /**
     * Test RateLimitException
     *
     * @covers RateLimitException::__construct
     */
    public function testRateLimitException()
    {
        $exception = new RateLimitException("Rate limit exceeded", 429);
        
        $this->assertInstanceOf('OneLogin\api\exceptions\OneLoginException', $exception);
        $this->assertEquals("Rate limit exceeded", $exception->getMessage());
        $this->assertEquals(429, $exception->getErrorCode());
    }

    /**
     * Test ServerException
     *
     * @covers ServerException::__construct
     */
    public function testServerException()
    {
        $exception = new ServerException("Server error", 500);
        
        $this->assertInstanceOf('OneLogin\api\exceptions\OneLoginException', $exception);
        $this->assertEquals("Server error", $exception->getMessage());
        $this->assertEquals(500, $exception->getErrorCode());
    }
}