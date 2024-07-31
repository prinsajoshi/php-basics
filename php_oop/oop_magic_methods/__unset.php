<?php
/*
__unset($name)  is used on in accessible or non-existent properties
Define custom behaviour for unsetting peoperties
 */
class Example{
    private $data=["name"=>"John"];

    public function __unset($name){
         unset($this->data[$name]);
    }
}

$obj=new Example();
unset($obj->name); 
?>