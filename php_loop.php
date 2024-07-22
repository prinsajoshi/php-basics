<?php

// Different loop conditions in PHP

// For loop
echo "<b>For Loop:</b><br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is : $x <br>";
}
/* Output:
The number is : 0
The number is : 1
The number is : 2
The number is : 3
The number is : 4
The number is : 5
The number is : 6
The number is : 7
The number is : 8
The number is : 9
The number is : 10
*/

// While loop
echo "<b>While Loop:</b><br>";
$a = 0;
while ($a <= 10) {
    echo "The number is : $a <br>";
    $a++;
}
/* Output:
The number is : 0
The number is : 1
The number is : 2
The number is : 3
The number is : 4
The number is : 5
The number is : 6
The number is : 7
The number is : 8
The number is : 9
The number is : 10
*/

// Do-while loop
echo "<b>Do-While Loop:</b><br>";
$i = 0;
do {
    echo "The number is : " . $i . "<br>";
    $i++;
} while ($i <= 10);
/* Output:
The number is : 0
The number is : 1
The number is : 2
The number is : 3
The number is : 4
The number is : 5
The number is : 6
The number is : 7
The number is : 8
The number is : 9
The number is : 10
*/

// For-each loop
echo "<b>For-Each Loop Example 1:</b><br>";
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo "The color is : $color <br>";
}
/* Output:
The color is : red
The color is : green
The color is : blue
*/

// For-each loop with associative array
echo "<b>For-Each Loop Example 2:</b><br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($age as $name => $value) {
    echo "$name is $value years old <br>";
}
/* Output:
Peter is 35 years old
Ben is 37 years old
Joe is 43 years old
*/

?>
