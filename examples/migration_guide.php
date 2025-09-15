<?php
/**
 * Migration Guide: From Manual Error Checking to Exception Handling
 * 
 * This example shows how to migrate from manual error checking to
 * exception-based error handling in the OneLogin PHP SDK.
 */

require_once '../vendor/autoload.php'; // Adjust path as needed

use OneLogin\api\OneLoginClient;
use OneLogin\api\exceptions\OneLoginException;
use OneLogin\api\exceptions\AuthenticationException;
use OneLogin\api\exceptions\ValidationException;

$clientId = 'your_client_id';
$clientSecret = 'your_client_secret';

echo "=== OneLogin SDK Migration Guide ===\n\n";

// ========================================================================
// BEFORE: Manual Error Checking (Still Supported)
// ========================================================================
echo "BEFORE - Manual Error Checking:\n";
echo str_repeat("-", 40) . "\n";

$client = new OneLoginClient($clientId, $clientSecret);

// Example: Getting users with manual error checking
$users = $client->getUsers();
if ($client->getError()) {
    echo "❌ Error getting users: " . $client->getErrorDescription() . "\n";
    echo "   HTTP Code: " . $client->getError() . "\n";
    if ($client->getErrorAttribute()) {
        echo "   Problem field: " . $client->getErrorAttribute() . "\n";
    }
} else {
    echo "✅ Users retrieved successfully\n";
}

// Example: Creating user with manual error checking
$newUser = [
    'email' => 'john.doe@example.com',
    'firstname' => 'John',
    'lastname' => 'Doe'
];

$user = $client->createUser($newUser);
if ($client->getError()) {
    echo "❌ Error creating user: " . $client->getErrorDescription() . "\n";
    echo "   HTTP Code: " . $client->getError() . "\n";
    if ($client->getErrorAttribute()) {
        echo "   Problem field: " . $client->getErrorAttribute() . "\n";
    }
} else {
    echo "✅ User created successfully\n";
}

// ========================================================================
// AFTER: Exception-Based Error Handling (Recommended)
// ========================================================================
echo "\nAFTER - Exception-Based Error Handling:\n";
echo str_repeat("-", 40) . "\n";

// Option 1: Enable exceptions during construction
$clientWithExceptions = new OneLoginClient($clientId, $clientSecret, 'us', 1000, true);

// Option 2: Enable exceptions on existing client
// $client->setThrowExceptions(true);

try {
    // Getting users - no manual error checking needed!
    $users = $clientWithExceptions->getUsers();
    echo "✅ Users retrieved successfully\n";
    
    // Creating user - exceptions will be thrown automatically on error
    $user = $clientWithExceptions->createUser($newUser);
    echo "✅ User created successfully\n";
    
    // Chain multiple operations safely
    $userRoles = $clientWithExceptions->getUserRoles($user->getId());
    $apps = $clientWithExceptions->getUserApps($user->getId());
    echo "✅ User data retrieved successfully\n";
    
} catch (AuthenticationException $e) {
    echo "❌ Authentication Error: " . $e->getMessage() . "\n";
    echo "   HTTP Code: " . $e->getErrorCode() . "\n";
    // Handle auth errors - maybe refresh tokens or re-authenticate
    
} catch (ValidationException $e) {
    echo "❌ Validation Error: " . $e->getMessage() . "\n";
    echo "   HTTP Code: " . $e->getErrorCode() . "\n";
    if ($e->getErrorAttribute()) {
        echo "   Problem field: " . $e->getErrorAttribute() . "\n";
    }
    // Handle validation errors - fix the data and retry
    
} catch (OneLoginException $e) {
    echo "❌ OneLogin API Error: " . $e->getMessage() . "\n";
    echo "   HTTP Code: " . $e->getErrorCode() . "\n";
    // Handle any other API errors
}

// ========================================================================
// HYBRID APPROACH: Use Both as Needed
// ========================================================================
echo "\nHYBRID - Use Both Approaches as Needed:\n";
echo str_repeat("-", 40) . "\n";

$hybridClient = new OneLoginClient($clientId, $clientSecret);

// For critical operations, use exceptions
$hybridClient->setThrowExceptions(true);
try {
    $criticalData = $hybridClient->getUser(12345);
    echo "✅ Critical data retrieved with exceptions\n";
} catch (OneLoginException $e) {
    echo "❌ Critical operation failed: " . $e->getMessage() . "\n";
}

// For optional operations, use manual checking
$hybridClient->setThrowExceptions(false);
$optionalData = $hybridClient->getUser(99999);
if ($hybridClient->getError()) {
    echo "⚠️ Optional operation failed (ignored): " . $hybridClient->getErrorDescription() . "\n";
} else {
    echo "✅ Optional data retrieved\n";
}

echo "\n=== Migration Complete! ===\n";
echo "Benefits of Exception-Based Approach:\n";
echo "✅ Cleaner, more readable code\n";
echo "✅ Automatic error propagation\n";
echo "✅ Type-safe error handling\n";
echo "✅ Easier to chain operations\n";
echo "✅ Better error categorization\n";
echo "✅ Still fully backward compatible!\n";
?>