<?php
require 'db.php';

    $id = $conn->real_escape_string($_POST['id']);
    $user = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "UPDATE users SET username='$user', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error while updating value: " . $conn->error . "<br>";
    }

?>
