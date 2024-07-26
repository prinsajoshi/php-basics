<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) !== TRUE) {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $method = $_POST['_method'] ?? 'POST';

    if ($method === 'POST') {
        // Insert data
        $user = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);

        $sql = "INSERT INTO users (username, email) VALUES ('$user', '$email')";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit;
        } else {
            echo "Error while inserting value: " . $conn->error . "<br>";
        }
    } elseif ($method === 'PUT') {
        // Update data
        /*  
        real_escape_string is used to prevent SQL injection prevention(escapes special characters in string such as wuotes,backslashes)
        and esnures data is inserted correctly */
        $id = $conn->real_escape_string($_POST['id']);
        $user = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);


        $sql = "UPDATE users SET username='$user', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            //redirect the browser to a different page
            header('Location: index.php');
            exit;
        } else {
            echo "Error while updating value: " . $conn->error . "<br>";
        }
    } elseif ($method === 'DELETE') {
        // $conn->real_escape_string()) is crucial for preventing SQL injection attacks
        $id = $conn->real_escape_string($_POST['id']);

        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit;
        } else {
            echo "Error while deleting value: " . $conn->error . "<br>";
        }
    }
}


?>
