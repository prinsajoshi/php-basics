<?php
require 'db.php';

    $id = $conn->real_escape_string($_POST['id']);

    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error while deleting value: " . $conn->error . "<br>";
    }

?>
