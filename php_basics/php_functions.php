<?php
#Functions without parameters
function sayHello() {
    echo "Hello world<br>";
}
sayHello();
/* Output:
Hello world
*/

#Functions with parameters
function greet($name) {
    echo "Hello, $name!<br>";
}
greet("John");
/* Output:
Hello, John!
*/

#Default parameter functions
function say($name = "Guest") {
    echo "Hello, $name!<br>";
}
say("Alex");
say();
/* Output:
Hello, Alex!
Hello, Guest!
*/

#Functions with multiple parameters
function add($a, $b) {
    return $a + $b;
}
echo add(10, 20) . "<br>";
/* Output:
30
*/

#Functions with passing argument by value
function addNum1($num) {
    $num++;
}
$value = 5;
addNum1($value);
echo $value . "<br>";
/* Output:
5
*/


#Functions with passing argument by reference
function addNum(&$num) {
    $num++;
}
$value = 5;
addNum($value);
echo $value . "<br>";
/* Output:
6
*/

#Functions with variable number of parameters
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo sum(1, 2, 3) . "<br>";
/* Output:
6
*/


#Recursive Function
function factorial($n) {
    if ($n == 0) {
        return 1;
    }
    // Recursive case: $n * factorial of ($n - 1)
    else {
        return $n * factorial($n - 1);
    }
}
echo factorial(5); 
// Output: 120

?>
