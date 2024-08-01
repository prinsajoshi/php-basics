<?php
require 'db.php';
require 'create_table.php';
self_table($conn); 
require 'insert.php';
self_insert_table($conn); 

// Perform SELF JOIN query
$sql = "SELECT p1.ProductName AS Product, p2.ProductName AS RelatedProduct
        FROM Products_self p1
        LEFT JOIN Products_self p2 ON p1.RelatedProductID = p2.ProductID";

// Execute the query and handle errors
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Product: " . $row["Product"] . " - Related Product: " . ($row["RelatedProduct"] ? $row["RelatedProduct"] : "None") . "<br>";
        }
    } else {
        echo "No data found";
    }
} else {
    echo "Error executing query: " . $conn->error;
}

$conn->close();
?>
