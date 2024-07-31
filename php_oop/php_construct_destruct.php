<?php
/*
-Constructor is the method called when an object is initialized(often intialized the object properties)
-Destructor is the method called when an object is destroyed(objects goes out of scope)

*/
class car{
    public $color;
    public $model;
    
    #here is the example of constructor
    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }

    public function display(){
        return  "Color: " . $this->color . "<br>Model: " . $this->model;
    }

    public function __destruct(){
        echo "This is call from the destructor";
    }
 }
 $car1=new Car("red","Toyota");
 echo $car1->display();

?>