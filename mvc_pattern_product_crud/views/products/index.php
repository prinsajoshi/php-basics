<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <a href="/product/mvc_pattern_crud/?action=product_create&id=<?php echo $user_id; ?>">Create Product<br></a>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo str_pad($product['name'], 20, ' '); ?> (<?php echo $product['price']; ?>)
                <a href="/product/mvc_pattern_crud/?action=product_show&id=<?php echo $product['product_id']; ?>">Show</a>
                <a href="/product/mvc_pattern_crud/?action=product_edit&id=<?php echo $product['product_id']; ?>">Edit</a>
                <a href="/product/mvc_pattern_crud/?action=product_delete&id=<?php echo $product['product_id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
