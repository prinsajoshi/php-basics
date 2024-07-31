<?php
/*
__isset($name) or empty() is used on in accessible or non-existent properties
Define cistom behaviour for echecking if properties are set
 */
class Example{
    private $data=["name"=>"John"];

    public function __isset($name){
        return isset($this->data[$name]);
    }
}

$obj=new Example();
var_dump(isset($obj->name)); //Outputs: bool(true)
?>