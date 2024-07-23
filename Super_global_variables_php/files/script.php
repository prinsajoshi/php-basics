<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Directory where the file will be uploaded
    $target_dir = "uploads/";
    // Path to the file to be uploaded
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Try to upload file using move_uploaded_file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>

<!-- 
output: 
The file Screenshot (310).png has been uploaded.-->