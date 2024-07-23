<!--Request on get:
 The 'Get' method sends form data as query parameters in the URL 
 example: http://localhost/Super_global_variables_php/php_request/request_on_get/example1.php?fname=prinsa-->

<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Using GET</title>
</head>
<body>

<!-- HTML Form with GET Method -->
<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Name:</label>
    <input type="text" name="fname">
    <input type="submit">
</form>

<div>
    <?php
    // PHP Code to Process the GET Request
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve the value from the GET request
        $name = htmlspecialchars($_GET['fname']);
        if ($name == '') {
            echo "Name is empty";
        } else {
            echo "Gotya name, $name";
        }
    }
    ?>
</div>

</body>
</html>

<!-- 
1. First Visit:
Output: The form is displayed with no message in the div.

2.Submitting the Form with an Empty Name:
Output: Name is empty

3.Submitting the Form with a Name (e.g., "John Doe"):
Output: Gotya name, John Doe
-->