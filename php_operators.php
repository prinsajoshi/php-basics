<?php
#Different kind of php operators

#Arithmetic Operators

//addition
$a=2+3;

//subtractio
$b=10-5;

//multiplication
$c= 10*6;

//Division
$d=60/10;

//Modulus Operator
$e=7%2;

//Exponential operator
$f= 7**6;


#Comparision operators

//Equal('=='): checks if two values are equal
$a==$b;

//Strictly equal('==='): checks two values are equal along with same data type
$a===$b;

//Not Equal
$a!=$b;

//Not Stricly Equal
$a!==$b;

//Greater than
$a>$b;

//Less than
$a<$b;

//Greater than or equal to('>=')
$a>=$b;

//Less than or equal to
$a<=$b;


#Logical Opertors

//AND('&&' or 'and'):if both conditions are true
$result=($a>5 && $a< 10);

//OR('||' or 'or') : if one condition is true
$result= ($a>5 || $b< 10);

//NOT('!' or 'not): returns true if the condition is false
$result=!($a>5);

//XOR('xor'): returns true if one condition is true and the other is false
$result=($a>5 xor $b<10);

?>