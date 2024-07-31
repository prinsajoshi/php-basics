<?php
/*Php supports nested namespace, which allows you to create a hierarchical structure  */
namespace MyApp\Models\Users;

class Admin {
    public function __construct() {
        echo "Admin class from MyApp\Models\Users namespace";
    }
}
