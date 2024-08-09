<?php

require_once 'models/Admin.php';

class AdminController {
    private $adminModel;

    public function __construct($db) {
        $this->adminModel = new Admin($db);
    }

    public function index_admin() {
        include 'views/admin/login.php';
    }

    public function login_check() {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->adminModel->checkCredentials($username, $password)) {
                header("Location: /product/mvc_pattern_crud/?action=index");
                exit();
            } else {
                echo "Invalid username or password.";
            }
        }
    }

?>
