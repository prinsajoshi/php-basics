<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <a href="/product/mvc_pattern_crud/?action=create">Create User<br></a>
    <?php echo str_repeat('=', 50);  ?>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <!-- Padding a string to certain kength with another string 
                  here padding to the end by default with space-->
                <?php echo str_pad($user['name'],20,' '); ?> (<?php echo $user['email']; ?>)
                <a href="/product/mvc_pattern_crud/?action=show&id=<?php echo $user['user_id']; ?>">Show</a>
                <a href="/product/mvc_pattern_crud/?action=edit&id=<?php echo $user['user_id']; ?>">Edit</a>
                <a href="/product/mvc_pattern_crud/?action=delete&id=<?php echo $user['user_id']; ?>">Delete</a>
                <a href="/product/mvc_pattern_crud/?action=product_index&id=<?php echo $user['user_id']; ?>">Add Product</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
