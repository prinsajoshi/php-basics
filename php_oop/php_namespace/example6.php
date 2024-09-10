/*
// File: app/Models/User.php
namespace App\Models;

class User {
    public function getInfo() {
        return "User information from Models";
    }
}


// File: app/Controllers/User.php
namespace App\Controllers;

class User {
    public function getInfo() {
        return "User information from Controllers";
    }
}



// File: index.php
require 'app/Models/User.php';
require 'app/Controllers/User.php';

// Accessing the Models User class
$userModel = new \App\Models\User();
echo $userModel->getInfo(); // Outputs: User information from Models

// Accessing the Controllers User class
$userController = new \App\Controllers\User();
echo $userController->getInfo(); // Outputs: User information from Controllers


// File: index.php
use App\Models\User as UserModel;
use App\Controllers\User as UserController;

$userModel = new UserModel();
echo $userModel->getInfo();

$userController = new UserController();
echo $userController->getInfo();
*/