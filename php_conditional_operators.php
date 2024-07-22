<?php
// Different PHP conditional operators

// If statement
$age = 20;
echo "<b>If Statement:</b><br>";
if ($age >= 20) {
    echo "You are an adult<br>";
}
/* Output:
You are an adult
*/

// If-Else statement
echo "<b>If-Else Statement:</b><br>";
if ($age < 18) {
    echo "You are under age<br>";
} else {
    echo "You are an adult<br>";
}
/* Output:
You are an adult
*/

// If-Elseif-Else statement
$string = "cat";
echo "<b>If-Elseif-Else Statement:</b><br>";
if ($string == "cat") {
    echo "You are an animal<br>";
} elseif ($string == "rose") {
    echo "You are a plant<br>";
} else {
    echo "You are neither a plant nor an animal<br>";
}
/* Output:
You are an animal
*/

// Nested 'if' statement
$age = 20;
$hasID = true;
echo "<b>Nested 'If' Statement:</b><br>";
if ($age >= 20) {
    if ($hasID) {
        echo "You are an adult and can vote<br>";
    } else {
        echo "ID is required to vote<br>";
    }
} else {
    echo "You are too young to vote<br>";
}
/* Output:
You are an adult and can vote
*/

// Switch statement
$day = 'sunday';
echo "<b>Switch Statement:</b><br>";
switch ($day) {
    case "sunday":
        echo "Day1: " . $day . "<br>";
        break;
    case "monday":
        echo "Day2: " . $day . "<br>";
        break;
    case "tuesday":
        echo "Day3: " . $day . "<br>";
        break;
    case "wednesday":
        echo "Day4: " . $day . "<br>";
        break;
    case "thursday":
        echo "Day5: " . $day . "<br>";
        break;
    case "friday":
        echo "Day6: " . $day . "<br>";
        break;
    default:
        echo "Not a valid day<br>";
}
/* Output:
Day1: sunday
*/

?>
