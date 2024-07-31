<?php
/*
__set_state()
Purpose: This static method is called when an object is exported using var_export().
Use: Customize the behavior of object export and re-creation. */
class Example {
    public $name;

    public static function __set_state($array) {
        $obj = new self;
        $obj->name = $array['name'];
        return $obj;
    }
}

$obj = new Example();
$obj->name = "John";
$exported = var_export($obj, true);
eval('$restoredObj = ' . $exported . ';');

?>