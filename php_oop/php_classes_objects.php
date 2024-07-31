<?php
/*
Class
-class is the blueprint to create the objects
-class consist of properties(varibales),methods(functions)

Objects
Object is the instance of the class

Visibility
-public:The properties and methods that can be accessed from anywhere
-private:The properties and methods that can be accessed within the class itself
-protected: The properties and methods can be accessed within class ad by classes derived from that class
 */


//creating class model
 class car{
    public $color;
    public $model;
    
    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }

    public function display(){
        return  "Color: " . $this->color . "<br>Model: " . $this->model;
    }
 }

 //creating object 
 $car1=new Car("red","Toyota");
 echo $car1->display();

?>