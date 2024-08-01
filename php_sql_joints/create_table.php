<?php
function table($conn){
// Create Employees table
$sql = "CREATE TABLE IF NOT EXISTS Employees (
    EmployeeID INT AUTO_INCREMENT PRIMARY KEY,
    EmployeeName VARCHAR(255) NOT NULL,
    DepartmentID INT 
)";
run_query($conn, $sql);

// Create Departments table
$sql = "CREATE TABLE IF NOT EXISTS Departments (
    DepartmentID INT PRIMARY KEY,
    DepartmentName VARCHAR(255) NOT NULL
)";
run_query($conn, $sql);
}



function cross_table($conn){

// Create Products table
$sql = "CREATE TABLE IF NOT EXISTS Products (
    ProductID INT AUTO_INCREMENT PRIMARY KEY,
    ProductName VARCHAR(255) NOT NULL
)";
run_query($conn,$sql);

// Create Colors table
$sql = "CREATE TABLE IF NOT EXISTS Colors (
    ColorID INT AUTO_INCREMENT PRIMARY KEY,
    ColorName VARCHAR(255) NOT NULL
)";
run_query($conn,$sql);

}

function self_table($conn){
    $sql = "CREATE TABLE IF NOT EXISTS Products_self (
        ProductID INT AUTO_INCREMENT PRIMARY KEY,
        ProductName VARCHAR(255) NOT NULL,
        RelatedProductID INT
    )";
    run_query($conn, $sql);
    }

// Error handling function
function run_query($conn, $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }
}

?>
