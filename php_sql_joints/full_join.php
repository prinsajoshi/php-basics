<?php
/*
Since MySQL doesn't support 'FULL OUTER JOIN' directly we use 'LEFT JOIN' 'RIGHT JOIN' with 'UNION'
 */
require "db.php";
require "create_table.php";

// Create tables and insert data
table($conn); 
require "insert.php";

// Perform FULL JOIN simulation
$sql = "SELECT Employees.EmployeeID, Employees.EmployeeName, Departments.DepartmentName
        FROM Employees
        LEFT JOIN Departments ON Employees.DepartmentID = Departments.DepartmentID
        UNION
        SELECT Employees.EmployeeID, Employees.EmployeeName, Departments.DepartmentName
        FROM Departments
        LEFT JOIN Employees ON Departments.DepartmentID = Employees.DepartmentID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "EmployeeID: " . ($row["EmployeeID"] ? $row["EmployeeID"] : "No Employee") . 
             " - Name: " . ($row["EmployeeName"] ? $row["EmployeeName"] : "No Employee") . 
             " - Department: " . ($row["DepartmentName"] ? $row["DepartmentName"] : "No Department") . "<br>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>
