<?php
/*
__sleep()
Purpose: This method is called before an object is serialized.
Use: Specify which properties should be serialized.
-it is used to prepare an object for serialization
-serialization is the process of converting an object into a storable format
 */

 class Example {
    private $data;

    public function __sleep() {
        return ['data'];
    }
}

$obj = new Example();
serialize($obj);

?>