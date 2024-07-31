<?php
/*
Setting the value of an inaccessible or non existent property
define custom behaviour for setting property values dynamically */
class Example{
    private $data=[];

    public function __set($name,$value){
        $this->data[$name]=$value;
    }
}

$obj=new Example();
$obj->name='Jhon';
?>