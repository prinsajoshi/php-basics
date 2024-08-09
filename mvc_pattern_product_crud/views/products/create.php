<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="/product/mvc_pattern_crud/?action=product_store" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Description:</label>
        <textarea name="description" required></textarea><br>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" required><br>
        <button type="submit">Add Product</button>
    </form>
    <a href="/product/mvc_pattern_crud/?action=product_index&id=<?php echo $user_id; ?>">Back to Products</a>
</body>
</html>
