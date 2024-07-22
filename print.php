<?php
#Different ways to Print

#Using echo
#Simple print
echo "hello world \n";
echo "hello"," world \n";
echo "hello"." world \n";
echo 'hello world';

#Using print statement  
#print takes a single argument(also slow) while echo can take multiple arguments.
print "hello world";
print "hello"." world";
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


#Using var_dump statement 
#provide details information about variables,including datatype and value
$array = array('apple', 'banana', 'cherry');
var_dump($array);

#Using var_export
#returns a parsable string representation of variable
$array = array('apple', 'banana', 'cherry');
var_export($array);
?>