<!DOCTYPE html>
<html>
<head>
    <title>Show Product</title>
</head>
<body>
    <h1>Show Product</h1>
    <p>Name: <?php echo $product['name']; ?></p>
    <p>Description: <?php echo $product['description']; ?></p>
    <p>Price: <?php echo $product['price']; ?></p>
    <a href="/product/mvc_pattern_crud/?action=product_index&id=<?php echo $product['user_id']; ?>">Back to Products</a>
</body>
</html>
