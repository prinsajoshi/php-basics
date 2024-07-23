<?php
#Global Variables in php

#accessing global variables inside a function
//method 1:
$x=75;

function myFun(){
    echo $GLOBALS['x'];
}
myfun();
//output:75

//method 2:
$x=75;

function myFun1(){
    global $x;
    echo $x;
}
myfun1();
//output:75

//creating the global variables inside a function and use it outside
function myFun3(){
    $GLOBALS['a']=30;
}

myFun3();
echo $a;
//output:30

?>