<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <?php
       require 'db.php';
       $id = $_GET['id'];
        // Fetch the data for the given ID
        $sqli = "SELECT id, username, email FROM users WHERE id = $id";
        $result = $conn->query($sqli);
        $row = $result->fetch_assoc(); ?>
        
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

        <button type="submit">UPDATE DATA</button>
    </form>
</body>
</html>
