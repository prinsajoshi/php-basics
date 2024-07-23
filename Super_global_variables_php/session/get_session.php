<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Get</title>
</head>
<body>
    <h1>Accessing Session Variables</h1>
    <?php
    // Check if session variables are set
    if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
        echo "<p>Username: " . $_SESSION["username"] . "</p>";
        echo "<p>Email: " . $_SESSION["email"] . "</p>";
    } else {
        echo "<p>No session variables are set.</p>";
    }
    ?>
</body>
</html>

<!-- 
Output:
Accessing Session Variables
Username: ram
Email: ram@example.com
-->