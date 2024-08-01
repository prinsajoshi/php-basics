<?php
require 'db.php';
require 'create_table.php';
cross_table($conn);
require 'insert.php';
cross_insert_table($conn);

// Perform CROSS JOIN query
$sql = "SELECT Products.ProductName, Colors.ColorName
        FROM Products
        CROSS JOIN Colors";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Product: " . $row["ProductName"] . " - Color: " . $row["ColorName"] . "<br>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>
