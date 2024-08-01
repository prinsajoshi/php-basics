<?php
function inner_insert_table($conn){

// Insert data into Departments table
$sql = "INSERT INTO Departments (DepartmentID, DepartmentName) VALUES
    (101, 'Sales'),
    (102, 'Marketing'),
    (103, 'IT'),
    (104, 'HR')";
run($conn, $sql);

// Insert data into Employees table
$sql = "INSERT INTO Employees (EmployeeName, DepartmentID) VALUES
    ('Jungkook', 101),
    ('Jimin', 102),
    ('Jin', 103),
    ('RM', 104)";
run($conn, $sql);

}


function  left_insert_table($conn){
    // Insert data into Departments table
$sql = "INSERT INTO Departments (DepartmentID, DepartmentName) VALUES
(1010, 'Sales'),
(1020, 'Marketing'),
(1030, 'IT'),
(1040, 'HR')";
run($conn, $sql);

// Insert data into Employees table
$sql = "INSERT INTO Employees (EmployeeName, DepartmentID) VALUES
('John Doe', 1010),
('Jane Smith', 1020),
('Emily Jones', 1050),  -- Non-existent department
('Michael Brown', NULL)";  
run($conn, $sql);

}

function  full_insert_table($conn){

// Insert data into Departments table
$sql = "INSERT INTO Departments (DepartmentID, DepartmentName) VALUES
(1001, 'Sales'),
(1002, 'Marketing'),
(1003, 'IT'),
(1004, 'HR'),
(1005, 'Finance')";
run($conn, $sql);

// Insert data into Employees table
$sql = "INSERT INTO Employees (EmployeeName, DepartmentID) VALUES
('John Doe', 1001),
('Jane Smith', 1002),
('Emily Jones', NULL),
('Michael Brown', 1006)";  // Non-existent department
run($conn, $sql);

}


function cross_insert_table($conn){

// Insert data into Products table
$sql = "INSERT INTO Products (ProductName) VALUES
('Widget'),
('Gadget')";
run($conn,$sql);

// Insert data into Colors table
$sql = "INSERT INTO Colors (ColorName) VALUES
('Red'),
('Blue'),
('Green')";
run($conn,$sql);
}

function self_insert_table($conn){

    // Insert data into Products table
    $sql = "INSERT INTO Products_self (ProductName,RelatedProductID) VALUES
    ('Widget',2),
    ('Gadget',1),
    ('Sprocket',NULL)";
run($conn,$sql);
}   

// Function to run SQL queries
function run($conn, $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully\n";
    } else {
        echo "Error inserting data: " . $conn->error . "\n";
    }
}
?>
