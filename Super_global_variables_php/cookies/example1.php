<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<!-- Form to Set a Cookie -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Enter your name:</label>
    <input type="text" name="username">
    <input type="submit" name="set_cookie" value="Set Cookie">
</form>

<div>
    <?php
    // Check if the form was submitted to set a cookie
    if (isset($_POST['set_cookie'])) {
        $username = htmlspecialchars($_POST['username']); // Sanitize user input
        if (!empty($username)) {
            // Set a cookie that expires in 1 hour
            setcookie('username', $username, time() + 3600, "/");
            echo "Cookie has been set. Reload the page to see the cookie value.";
        } else {
            echo "Please enter a name.";
        }
    }

    // Check if the cookie is set and display its value
    if (isset($_COOKIE['username'])) {
        // Access the cookie value using $_COOKIE superglobal
        $cookieValue = htmlspecialchars($_COOKIE['username']);
        echo "<p>Hello, " . $cookieValue . "!</p>";
    } else {
        echo "<p>No cookie set.</p>";
    }
    ?>
</div>

</body>
</html>

<!--
Output:

1.first visit:
No cookie set.

2. Form submission with username:
Cookie has been set. Reload the page to see the cookie value.

3.Page reload after setting the cookie:
Hello, Ram!

-->