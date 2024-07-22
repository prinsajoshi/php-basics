<?php
#Functions without parameter
function sayHello(){
    echo "Hello world";
}
sayHello();

#Functions with parameter
function greet($name){
    echo "Hello,$name!";
}
greet("John");

#Default parameter functions
function say($name="Guest"){
    echo "hello, $name!";
}
say("Alex");
say();

#Functions with multiple parameters
function add($a,$b){
    return $a+$b;
}
echo add(10,20);

#Function with passing by reference
function addNum(&$num)
{
    $num++;
}
$value=5;
addNum($value);
echo $value;


#Funcations with variable number of parameters
function sum(...$numbers){
  $total=0;
  foreach($numbers as $number){
    $total+=$number;
  }
  return $total;
}
echo sum(1,2,3);

?>