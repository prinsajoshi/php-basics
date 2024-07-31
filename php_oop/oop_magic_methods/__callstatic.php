<?php
/*
__callStatic($name, $arguments)
Purpose: This static method is called when an inaccessible or non-existent static method is called.
Use: Define custom behavior for static method calls.
*/
class Example {
    public static function __callStatic($name, $arguments) {
        echo "Called static method '$name' with arguments: " . implode(", ", $arguments);
    }
}

Example::testMethod("arg1", "arg2"); // Outputs: Called static method 'testMethod' with arguments: arg1, arg2


?>