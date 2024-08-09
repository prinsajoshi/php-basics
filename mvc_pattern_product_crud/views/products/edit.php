<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="/product/mvc_pattern_crud/?action=product_update" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $product['user_id']; ?>">
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
        <label>Description:</label>
        <textarea name="description" required><?php echo $product['description']; ?></textarea><br>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" value="<?php echo $product['price']; ?>" required><br>
        <button type="submit">Update Product</button>
    </form>
    <a href="/product/mvc_pattern_crud/?action=product_index&id=<?php echo $product['user_id']; ?>">Back to Products</a>
</body>
</html>
