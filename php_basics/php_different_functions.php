<?php
// Different kinds of functions

// Built-in function
// strlen: Returns the length of a string
echo "<b>Built-in Function:</b><br>";
echo strlen("Hello, world!") . "<br>";
/* Output:
Built-in Function:
13
*/

// User-defined function
// add: Adds two numbers
function add($a, $b) {
    return $a + $b;
}
echo "<b>User-defined Function:</b><br>";
echo add(2, 3) . "<br>";
/* Output:
User-defined Function:
5
*/

// Anonymous Function
// Creates a function without a specified name
$greet = function($name) {
    return "Hello, $name!";
};
echo "<b>Anonymous Function:</b><br>";
echo $greet("PHP") . "<br>";
/* Output:
Anonymous Function:
Hello, PHP!
*/

// Arrow Functions
// Short syntax for defining anonymous functions
$add = fn($a, $b) => $a + $b;
echo "<b>Arrow Function:</b><br>";
echo $add(2, 3) . "<br>";
/* Output:
Arrow Function:
5
*/

// Variable Functions
// Calls a function using a variable containing the function name
function sayHello() {
    echo "hello, world<br>";
}
$func = 'sayHello';
echo "<b>Variable Function:</b><br>";
$func();
/* Output:
Variable Function:
hello, world
*/

?>
