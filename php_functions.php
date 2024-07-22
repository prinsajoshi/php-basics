<?php
// Functions without parameters
function sayHello() {
    echo "Hello world<br>";
}
sayHello();
/* Output:
Hello world
*/

// Functions with parameters
function greet($name) {
    echo "Hello, $name!<br>";
}
greet("John");
/* Output:
Hello, John!
*/

// Default parameter functions
function say($name = "Guest") {
    echo "Hello, $name!<br>";
}
say("Alex");
say();
/* Output:
Hello, Alex!
Hello, Guest!
*/

// Functions with multiple parameters
function add($a, $b) {
    return $a + $b;
}
echo add(10, 20) . "<br>";
/* Output:
30
*/

// Functions with passing by reference
function addNum(&$num) {
    $num++;
}
$value = 5;
addNum($value);
echo $value . "<br>";
/* Output:
6
*/

// Functions with variable number of parameters
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

?>
