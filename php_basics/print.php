<?php
#Different ways to Print

#Using echo
echo "hello world <br>";    
echo "hello"," world <br>";  
echo "hello"." world <br>";  //concatenation using dot operator
echo 'hello world';
//Output: hello world

#Using print statement  
#print takes a single argument(also slow) while echo can take multiple arguments.
print "hello world";
print "hello"." world";
//Output: hello world


#Note: echo,print is not designed to handle arrays directly so we use print_r

#Using print_r statement
/*
Syntax:
print_r(mixed $expression, bool $return = false): string|bool
-if true, it will return output as string instead of directly printing it

UseCase:
- To Print an Array or Object in a readable format.
*/
$nested_array = array(
    'fruits' => array('apple', 'banana', 'cherry'),
    'vegetables' => array('carrot', 'lettuce', 'pea')
);
print_r($nested_array);
/*  Output:
Array
(
    [fruits] => Array
        (
            [0] => apple
            [1] => banana
            [2] => cherry
        )

    [vegetables] => Array
        (
            [0] => carrot
            [1] => lettuce
            [2] => pea
        )
)
*/

#Using var_dump statement 
#provide details information about variables,including datatype and value
$array = array('apple', 'banana', 'cherry');
var_dump($array);
/*
Output: array(3) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(6) "banana"
  [2]=>
  string(6) "cherry"
}
*/

#Using var_export
#returns a parsable string representation of variable
$array = array('apple', 'banana', 'cherry');
var_export($array);
/*
Output:
array (
  0 => 'apple',
  1 => 'banana',
  2 => 'cherry',
)
*/

#Using printf(): used to format and output a string
/*
Syntax:
printf(format, argument1, argument2, ...);

Common Format Codes
%s - String
%d - Decimal number (integer)
%f - Floating-point number
%x - Hexadecimal number
%o - Octal number
*/
$name = "John";
$age = 30;

printf("Name: %s, Age: %d", $name, $age);

?>