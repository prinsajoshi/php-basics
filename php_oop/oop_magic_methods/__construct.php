<?php
/*
OOp include special methods known as magic methods
-these methdos have specific names that start and end with doublw undersicre
-they provide functionality for different operation as object creation,string representation and property
access among others
-magic methods can be overriden in user-defined classes to customize these operations

Like constructor method,called automatically when a new object is instantiated
*/

class Example1 {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$obj = new Example1("John");

?>