<?php
/*
Namespaces in PHP are a way to encapsulate and organize code,
making it easier to manage and avoid naming conflicts.
They allow you to group related classes, interfaces, functions, and
constants under a specific namespace.

Note: in php file it should have only one namespace declaration at the top
*/

// File 1: MyApp\Models\User.php
namespace MyApp\Models; // Define namespace

class User {
    public function __construct() {
        echo "User class from MyApp\Models namespace";
    }
}
?>