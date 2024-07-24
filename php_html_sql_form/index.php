<?php
require 'create_table.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP SQL HTML Form</title>
</head>
<body>
    <h1>Add the data to store in database</h1>
    <form method="post" action="add.php">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">ADD DATA</button>
    </form>

    <h2>All Data</h2>
    <?php require 'function_to_fetch.php';
    fetch_all_data(); ?>
</body>
</html>
