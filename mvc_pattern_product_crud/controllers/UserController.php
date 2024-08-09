<?php

require_once 'models/User.php';

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function index() {
        $users = $this->userModel->getAll();
        include 'views/users/index.php';
    }

    public function create() {
        include 'views/users/create.php';
    }

    public function store() {
        /*Trim to remove the whitespace
         */
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);

        if (strlen($name)<3 || strlen($email)<5){
            die ("Validation error: Name or Email is too short");
        }

        $this->userModel->create($name, $email);
        header('Location: /product/mvc_pattern_crud/?action=index');
    }

    public function show($id) {
        $user = $this->userModel->getById($id);
        include 'views/users/show.php';
    }

    public function edit($id) {
        $user = $this->userModel->getById($id);
        include 'views/users/edit.php';
    }

    public function update($id) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $this->userModel->update($id, $name, $email);
        header('Location: /product/mvc_pattern_crud/?action=index');
    }

    public function delete($id) {
        $this->userModel->delete($id);
        header('Location: /product/mvc_pattern_crud/?action=index');
    }
}
?>
