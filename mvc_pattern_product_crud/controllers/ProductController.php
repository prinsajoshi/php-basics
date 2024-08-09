<?php
require_once 'models/Products.php';

class ProductController {
    private $productModel;

    public function __construct($db) {
        $this->productModel = new Product($db);
    }

    public function index_product($user_id) {
        $products = $this->productModel->getAllByUserId($user_id);
        include 'views/products/index.php';
    }

    public function create($user_id) {
        include 'views/products/create.php';
    }

    public function store() {
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);
        $price = trim($_POST['price']);
        $user_id = trim($_POST['user_id']);

        if (strlen($name) < 3 || strlen($description) < 5 || !is_numeric($price)) {
            die("Validation error: Invalid input.");
        }

        $this->productModel->create($name, $description, $price, $user_id);
        header('Location: /product/mvc_pattern_crud/?action=product_index&id=' . $user_id);
    }

    public function show($id) {
        $product = $this->productModel->getById($id);
        include 'views/products/show.php';
    }

    public function edit($id) {
        $product = $this->productModel->getById($id);
        include 'views/products/edit.php';
    }

    public function update($id) {
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);
        $price = trim($_POST['price']);

        if (strlen($name) < 3 || strlen($description) < 5 || !is_numeric($price)) {
            die("Validation error: Invalid input.");
        }

        $this->productModel->update($id, $name, $description, $price);
        header('Location: /product/mvc_pattern_crud/?action=product_index&id=' . $_POST['user_id']);
    }

    public function delete($id) {
        $user_id = $this->productModel->getById($id)['user_id'];
        $this->productModel->delete($id);
        header('Location: /product/mvc_pattern_crud/?action=product_index&id=' . $user_id);
    }
}
?>
