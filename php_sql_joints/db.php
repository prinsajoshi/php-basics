<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "innerdatabase";

$conn = new mysqli($localhost, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

$conn->select_db($dbname);
?>
