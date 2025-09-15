<?php
/**
 * Example: Using OneLogin PHP SDK with Exception Handling
 * 
 * This example demonstrates how to use the OneLogin PHP SDK with exception handling enabled.
 * When exceptions are enabled, API errors will throw appropriate exceptions instead of 
 * requiring manual error checking.
 */

require_once '../vendor/autoload.php'; // Adjust path as needed

use OneLogin\api\OneLoginClient;
use OneLogin\api\exceptions\OneLoginException;
use OneLogin\api\exceptions\AuthenticationException;
use OneLogin\api\exceptions\ValidationException;
use OneLogin\api\exceptions\RateLimitException;
use OneLogin\api\exceptions\ServerException;

// Configuration
$clientId = 'your_client_id';
$clientSecret = 'your_client_secret';
$region = 'us'; // or 'eu'

// Example 1: Traditional approach (backward compatible)
echo "=== Traditional Approach (Backward Compatible) ===\n";
$client = new OneLoginClient($clientId, $clientSecret, $region);

// Manual error checking is still required
$users = $client->getUsers();
if ($client->getError()) {
    echo "Error: " . $client->getErrorDescription() . "\n";
} else {
    echo "Users retrieved successfully\n";
}

// Example 2: Exception-based approach (recommended)
echo "\n=== Exception-based Approach (Recommended) ===\n";
$clientWithExceptions = new OneLoginClient($clientId, $clientSecret, $region, 1000, true);

try {
    $users = $clientWithExceptions->getUsers();
    echo "Users retrieved successfully\n";
    // Process users...
    
} catch (AuthenticationException $e) {
    echo "Authentication Error: " . $e->getMessage() . "\n";
    echo "HTTP Status Code: " . $e->getErrorCode() . "\n";
    // Handle authentication errors (401, 403)
    
} catch (ValidationException $e) {
    echo "Validation Error: " . $e->getMessage() . "\n";
    echo "HTTP Status Code: " . $e->getErrorCode() . "\n";
    if ($e->getErrorAttribute()) {
        echo "Error Attribute: " . $e->getErrorAttribute() . "\n";
    }
    // Handle validation errors (400)
    
} catch (RateLimitException $e) {
    echo "Rate Limit Exceeded: " . $e->getMessage() . "\n";
    echo "HTTP Status Code: " . $e->getErrorCode() . "\n";
    // Handle rate limiting (429) - maybe retry after delay
    
} catch (ServerException $e) {
    echo "Server Error: " . $e->getMessage() . "\n";
    echo "HTTP Status Code: " . $e->getErrorCode() . "\n";
    // Handle server errors (5xx) - maybe retry later
    
} catch (OneLoginException $e) {
    echo "OneLogin API Error: " . $e->getMessage() . "\n";
    echo "HTTP Status Code: " . $e->getErrorCode() . "\n";
    // Handle any other API errors
}

// Example 3: Enable exceptions on existing client
echo "\n=== Enable Exceptions on Existing Client ===\n";
$existingClient = new OneLoginClient($clientId, $clientSecret, $region);
$existingClient->setThrowExceptions(true);

try {
    $user = $existingClient->getUser(12345);
    echo "User retrieved successfully\n";
} catch (OneLoginException $e) {
    echo "Error retrieving user: " . $e->getMessage() . "\n";
}

// Example 4: Mixed approach - temporarily disable exceptions
echo "\n=== Temporarily Disable Exceptions ===\n";
$client->setThrowExceptions(false);
$result = $client->createUser(['email' => 'test@example.com']);
if ($client->getError()) {
    echo "Create user failed: " . $client->getErrorDescription() . "\n";
}

// Re-enable exceptions
$client->setThrowExceptions(true);

echo "\nExamples completed!\n";
?>