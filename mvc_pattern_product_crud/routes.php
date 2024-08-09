<?php

require_once 'config/database.php';
require_once 'controllers/UserController.php';
require_once 'controllers/AdminController.php';
require_once 'controllers/ProductController.php';

$controller = new UserController($conn);
$controller_admin = new AdminController($conn);
$controller_product = new ProductController($conn);

$action = $_GET['action'] ?? 'index_admin';
$id = $_GET['id'] ?? null;

switch ($action) {
    // User-related actions
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'show':
        $controller->show($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'index':
        $controller->index();
        break;

    // Admin-related actions
    case 'login_check':
        $controller_admin->login_check();
        break;
    case 'index_admin':
        $controller_admin->index_admin();
        break;

    // Product-related actions
    case 'product_index':
        $controller_product->index_product($id);
        break;
    case 'product_create':
        $controller_product->create($id);
        break;
    case 'product_store':
        $controller_product->store();
        break;
    case 'product_show':
        $controller_product->show($id);
        break;
    case 'product_edit':
        $controller_product->edit($id);
        break;
    case 'product_update':
        $controller_product->update($id);
        break;
    case 'product_delete':
        $controller_product->delete($id);
        break;

    default:
        $controller_admin->index_admin();
        break;
}
?>
