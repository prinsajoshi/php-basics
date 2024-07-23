<!-- process_login.php -->
<?php
$username1 = "admin";
$password1 = "admin";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username===$username1 && $password===$password1) {
        echo "<p>Thank you for logging in, " . htmlspecialchars($username) . "!</p>";
    } else {
        echo "<p>Please enter both username and password.</p>";
    }
}
?>
