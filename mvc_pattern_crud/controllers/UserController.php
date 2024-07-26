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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->create($name, $email);
        header('Location: /mvc_pattern_crud');
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->update($id, $name, $email);
        header('Location: /mvc_pattern_crud');
    }

    public function delete($id) {
        $this->userModel->delete($id);
        header('Location: /mvc_pattern_crud');
    }
}
?>
