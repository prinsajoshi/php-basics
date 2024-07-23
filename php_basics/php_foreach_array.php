<?php
#Declare the array
$fruits = array("Apple", "Banana", "Cherry");

// Loop through the array with index and print each fruit with its index
foreach ($fruits as $index => $fruit) {
    echo "Index $index: $fruit\n";
}

/*
Output:
Index 0: Apple
Index 1: Banana
Index 2: Cherry
*/

#Declare the associative array
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
);

// Loop through the associative array and print each key and value
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

/*
Output:
first_name: John
last_name: Doe
age: 30
email: john.doe@example.com
*/

#Multidimensional Array
// Declare the multidimensional array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Loop through the multidimensional array
foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>"; // Print a newline after each row
}

/* Output:
1 2 3 
4 5 6 
7 8 9 

*/

# Declare the multidimensional associative array
$students = array(
    array(
        "name" => "Alice",
        "age" => 22,
        "courses" => array("Math", "Science", "English")
    ),
    array(
        "name" => "Bob",
        "age" => 24,
        "courses" => array("History", "Art", "Music")
    ),
    array(
        "name" => "Charlie",
        "age" => 23,
        "courses" => array("Biology", "Chemistry", "Physics")
    )
);

// Loop through the multidimensional associative array
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Courses: ";

    // Loop through the courses
    foreach ($student["courses"] as $course) {
        echo $course . " ";
    }
    echo "<br>"; // Print a newline after each student's details
}

/*
Output
Name: Alice
Age: 22
Courses: Math Science English 

Name: Bob
Age: 24
Courses: History Art Music 

Name: Charlie
Age: 23
Courses: Biology Chemistry Physics 
*/
?>
