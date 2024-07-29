<?php
#Array Manipulation Functions
#range()
$numbers = range(1, 10);
print_r($numbers);
// Output:
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
//     [5] => 6
//     [6] => 7
//     [7] => 8
//     [8] => 9
//     [9] => 10
// )

echo("\n");


#extract()
$data = ["name" => "John", "age" => 30];
extract($data);
echo $name; // Output: John
echo $age;  // Output: 30

echo("\n");


#compact()
$name = "John";
$age = 30;
$array = compact("name", "age");
print_r($array);
// Output:
// Array
// (
//     [name] => John
//     [age] => 30
// )

echo("\n");

#Array Iteration Functions
//list()
$array = [1, 2, 3];
list($a, $b, $c) = $array;
echo $a; // Output: 1
echo $b; // Output: 2
echo $c; // Output: 3

echo("\n");

//next()
$array = ['a', 'b', 'c'];
echo next($array); // Output: b
echo next($array); // Output: c

echo("\n");

//prev()
$array = ['a', 'b', 'c'];
next($array); // Move to 'b'
next($array); // Move to 'c'
echo prev($array); // Output: b

echo("\n");

//end()
$array = ['a', 'b', 'c'];
echo end($array); // Output: c

echo("\n");

// //each()
// $array = ['a' => 1, 'b' => 2, 'c' => 3];
// while ($element = each($array)) {
//     print_r($element);
// }
// Output:
// Array ( [1] => 1 [value] => 1 [0] => a [key] => a )
// Array ( [1] => 2 [value] => 2 [0] => b [key] => b )
// Array ( [1] => 3 [value] => 3 [0] => c [key] => c )

//pos() and current()
$array = ['a', 'b', 'c'];
echo current($array); // Output: a
echo pos($array); // Output: a (pos() is an alias of current())

echo("\n");

//key()
$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo key($array); // Output: a
next($array); // Move to the next element
echo key($array); // Output: b

echo("\n");

//reset()
$array = ['a', 'b', 'c'];
echo next($array); // Output: b
echo next($array); // Output: c
echo reset($array); // Output: a


?>