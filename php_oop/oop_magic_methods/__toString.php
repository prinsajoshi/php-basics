<?php
/*
__toString()
Purpose: This method is called when an object is treated as a string.
Use: Define how an object should be represented as a string.
*/
class Example {
    public function __toString() {
        return "This is an Example object.";
    }
}

$obj = new Example();
echo $obj; // Outputs: This is an Example object.


?>