<!DOCTYPE html>
<html>
<head>
    <title>Show User</title>
</head>
<body>
    <h1>Show User</h1>
    <p>Name: <?php echo $user['name']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <a href="/product/mvc_pattern_crud/?action=index">Back to Users</a>
</body>
</html>
