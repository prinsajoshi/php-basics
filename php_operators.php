<?php
// Different kinds of PHP operators

#Arithmetic Operators

// Addition
$a = 2 + 3; // $a = 5
echo "Addition: $a <br>"; // Output: Addition: 5

// Subtraction
$b = 10 - 5; // $b = 5
echo "Subtraction: $b <br>"; // Output: Subtraction: 5

// Multiplication
$c = 10 * 6; // $c = 60
echo "Multiplication: $c <br>"; // Output: Multiplication: 60

// Division
$d = 60 / 10; // $d = 6
echo "Division: $d <br>"; // Output: Division: 6

// Modulus Operator
$e = 7 % 2; // $e = 1
echo "Modulus: $e <br>"; // Output: Modulus: 1

// Exponential Operator
$f = 7 ** 6; // $f = 117649
echo "Exponential: $f <br>"; // Output: Exponential: 117649

#Comparison Operators

// Equal ('==')
$g = ($a == $b); // true
echo "Equal: ";
var_dump($g); // Output: bool(true)

// Strictly Equal ('===')
$h = ($a === $b); // false
echo "Strictly Equal: ";
var_dump($h); // Output: bool(false)

// Not Equal ('!=')
$i = ($a != $b); // false
echo "Not Equal: ";
var_dump($i); // Output: bool(false)

// Not Strictly Equal ('!==')
$j = ($a !== $b); // true
echo "Not Strictly Equal: ";
var_dump($j); // Output: bool(true)

// Greater Than ('>')
$k = ($a > $b); // false
echo "Greater Than: ";
var_dump($k); // Output: bool(false)

// Less Than ('<')
$l = ($a < $b); // false
echo "Less Than: ";
var_dump($l); // Output: bool(false)

// Greater Than or Equal To ('>=')
$m = ($a >= $b); // true
echo "Greater Than or Equal To: ";
var_dump($m); // Output: bool(true)

// Less Than or Equal To ('<=')
$n = ($a <= $b); // true
echo "Less Than or Equal To: ";
var_dump($n); // Output: bool(true)

#Logical Operators

// AND ('&&' or 'and')
$result1 = ($a > 5 && $a < 10); // true
echo "AND: ";
var_dump($result1); // Output: bool(true)

// OR ('||' or 'or')
$result2 = ($a > 5 || $b < 10); // true
echo "OR: ";
var_dump($result2); // Output: bool(true)

// NOT ('!' or 'not')
$result3 = !($a > 5); // false
echo "NOT: ";
var_dump($result3); // Output: bool(false)

// XOR ('xor')
$result4 = ($a > 5 xor $b < 10); // false
echo "XOR: ";
var_dump($result4); // Output: bool(false)
?>
