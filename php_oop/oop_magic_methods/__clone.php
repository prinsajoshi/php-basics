<?php
/*
__clone
Purpose: This method is called when an object is cloned.
Use: Customize the behavior of object cloning, such as copying or modifying properties.
*/
class Example {
    public $value;

    public function __clone() {
        $this->value = "Cloned";
    }
}

$obj1 = new Example();
$obj2 = clone $obj1;
echo $obj2->value; // Outputs: Cloned

?>