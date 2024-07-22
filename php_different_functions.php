<?php
#Different kinds of functions

#Built-in functions
echo strlen("Hello, world!");

#User defined function
function add($a,$b){
    return $a+$b;
}
echo add(2,3);

#Anonymous Functions: creation of functions without specified name
$greet=function($name){
    return "Hello, $name!";
};
echo $greet("PHP");

/*Arow functions
Syntax: 
$variableName = fn($parameter1, $parameter2) => $expression;
*/
$add=fn($a,$b)=>$a+$b;
echo $add(2,3);

#Variable functions
function sayHello(){
    echo "hello, world";
}
$func='sayHello';
$func();
?>