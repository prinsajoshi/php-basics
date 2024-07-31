<?php
// Define a namespace
namespace MyApp\Services;

class UserService1 {
    public function getUser() {
        return "Getting user from UserService";
    }
}

// Use the UserService class with a fully qualified name
$userService = new \MyApp\Services\UserService1();
echo $userService->getUser(); // Output: Getting user from UserService

/******************************************
 * 
*/
// Import the class into the current namespace
use MyApp\Services\UserService;

// Use the imported class
$userService = new UserService1();
echo $userService->getUser(); // Output: Getting user from UserService
