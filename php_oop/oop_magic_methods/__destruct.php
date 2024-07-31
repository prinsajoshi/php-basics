<?php
/*
Destruct method,called when an object is destroyed or script ends
*/
class Example {
    public function __destruct() {
        echo "Object destroyed";
    }
}

$obj = new Example();
/************************************* */
unset($obj); // Explicitly destroys the object

?>