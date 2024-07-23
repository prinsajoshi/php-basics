<?php
#session allows you to store user information across different pages
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "ram";
$_SESSION["email"] = "ram@example.com";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Set</title>
</head>
<body>
    <h1>Session variables are set.</h1>
    <a href="get_session.php">Go to next page</a>
</body>
</html>

<!-- 
Output: 
Session variables are set.
Go to next page
-->