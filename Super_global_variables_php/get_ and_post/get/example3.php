<!DOCTYPE html>
<html>
<head>
    <title>Greeting Page</title>
</head>
<body>
    <?php
    // Check if the 'name' parameter is set in the URL
    if (isset($_GET['name'])) {
        // Retrieve the 'name' parameter from the URL
        $name = htmlspecialchars($_GET['name']);
        echo "<h1>Hello, " . $name . "!</h1>";
    } else {
        echo "<h1>Hello, Guest!</h1>";
    }
    ?>
</body>
</html>

<!-- follow url like: 
 http://localhost/Super_global_variables_php/php_request/request_get/example3.php/?name=Jin 
 
 Output: Hello,Jin!-->