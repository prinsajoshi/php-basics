<?php
/*
This method is called when trying to access an inaccessible or non existent 
property
*/
class Example {
    private $data = ["name" => "John", "age" => 30];  //since this is private this cannot be directly accessed oustdie the class

    public function __get($name) {  //automatically invoked when accessing a property that is not defined due to visibility
        return $this->data[$name] ?? null;
    }
}

$obj = new Example();
echo $obj->name; // Outputs: John

/*
When you try to access the $name property using $obj->name,
PHP automatically calls the __get() method since the property
$name is not directly accessible (it's not defined as a public
 property in the class).

Use Cases:
-lazy loading:loading an object's properties only when accessed
-default values:providing default values for undefined peoperties
*/

?>