<?php
/*
__call($name, $arguments)
Purpose: This method is called when an inaccessible or non-existent method is called on an object.
Use: Define custom behavior for method calls, implement dynamic method dispatching.
 */
class DynamicMethods {
    // Method to handle undefined or inaccessible method calls
    public function __call($name, $arguments) {
        echo "You tried to call the method '$name' with the following arguments: ";
        print_r($arguments);

        // Example of dynamic behavior: handling specific cases
        switch($name) {
            case 'getUserInfo':
                return "Fetching user info with ID " . $arguments[0];
            case 'sendEmail':
                return "Sending email to " . $arguments[0];
            default:
                return "No such method: '$name'";
        }
    }
}

$obj = new DynamicMethods();

// Trying to call methods that are not defined in the class
echo $obj->getUserInfo(123); // Outputs: Fetching user info with ID 123
echo $obj->sendEmail('john@example.com'); // Outputs: Sending email to john@example.com
echo $obj->undefinedMethod('test'); // Outputs: No such method: 'undefinedMethod'

/******************************************/

class Example {
    public function __call($name, $arguments) {
        echo "Called method '$name' with arguments: " . implode(", ", $arguments);//string implode ( string $separator , array $array )
    }
}

$obj = new Example();
$obj->testMethod("arg1", "arg2"); // Outputs: Called method 'testMethod' with arguments: arg1, arg2

?>