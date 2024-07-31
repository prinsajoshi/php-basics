<?php
/* 
__debugInfo()
Purpose: This method is called when var_dump() is used on an object.
Use: Customize the information displayed during debugging.*/


class Example {
    private $hidden = "secret";
    public $public = "visible";

    public function __debugInfo() {
        return [
            'public' => $this->public,
            'hidden' => '***'
        ];
    }
}

$obj = new Example();
var_dump($obj); // Outputs: array(2) { ["public"]=> string(7) "visible" ["hidden"]=> string(3) "***" }

?>