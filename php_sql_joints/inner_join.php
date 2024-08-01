<?php
require "db.php";
require "create_table.php";
table($conn);
require "insert.php";
// inner_insert_table($conn);

$sql = "SELECT Employees.EmployeeID, Employees.EmployeeName, Departments.DepartmentName
        FROM Employees
        INNER JOIN Departments ON Employees.DepartmentID = Departments.DepartmentID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "EmployeeID: " . $row["EmployeeID"] . " - Name: " . $row["EmployeeName"] . " - Department: " . $row["DepartmentName"] . "<br>";
    }
} else {
    echo "No data\n";
}

$conn->close();
?>
