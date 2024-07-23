<!-- The $_REQUEST superglobal in PHP is used to gather data from the $_GET, $_POST, and $_COOKIE superglobals. 
It allows you to access data from both GET and POST requests as well as cookies.
-->
<!DOCTYPE html>
<html>
<head>
    <title>$_REQUEST Example working as POST</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Enter your name:</label>
    <input type="text" name="name">
    <label>Enter your email:</label>
    <input type="email" name="email">
    <input type="submit" value="Submit">
</form>

<div>
    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Accessing form data using $_REQUEST
        $name = htmlspecialchars($_REQUEST['name']);
        $email = htmlspecialchars($_REQUEST['email']);

        // Display the submitted data
        if (!empty($name) && !empty($email)) {
            echo "<p>Submitted Name: " . $name . "</p>";
            echo "<p>Submitted Email: " . $email . "</p>";
        } else {
            echo "<p>Please fill in both fields.</p>";
        }
    }
    ?>
</div>

</body>
</html>

<!-- 
1. When you visit the page
output:
Enter your name: 
Enter your email: 
Submit

2.After you submit the data:
output:
Enter your name: 
Enter your email: 
 
Submitted Name: prinsa
Submitted Email: joshi.prinsa1234@gmail.com
-->
