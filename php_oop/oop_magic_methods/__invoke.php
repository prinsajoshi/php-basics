<?php
/*
__invoke()
Purpose: This method is called when an object is used as a function.
Use: Define custom behavior for function-like object calls.
 */
class Example {
    public function __invoke($arg) {
        return "Object invoked with argument: $arg";
    }
}

$obj = new Example();
echo $obj("test"); // Outputs: Object invoked with argument: test


?>