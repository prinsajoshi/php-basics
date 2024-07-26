<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <a href="/mvc_pattern_crud/?action=create">Create User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?php echo $user['name']; ?> (<?php echo $user['email']; ?>)
                <a href="/mvc_pattern_crud/?action=show&id=<?php echo $user['id']; ?>">Show</a>
                <a href="/mvc_pattern_crud/?action=edit&id=<?php echo $user['id']; ?>">Edit</a>
                <a href="/mvc_pattern_crud/?action=delete&id=<?php echo $user['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
