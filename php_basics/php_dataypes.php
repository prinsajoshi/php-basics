<?php
#Different types of php variables

#integer
$num_int=42;

#floats
$num_float=3.14;

#string
$string_quote="hello it's me";

#boolean
$is_true=true;

#array
$colors = array("red","green"); //indexed array
$colors_associative=array("first_name"=>'John',"last_name"=>"Cena"); //assocative array

#null
$var=null;

#Object
class Dog{
    public $name;

    public function bark(){
        echo "Woof!";
    }
}

$mydog=new Dog(); // Create object of the Dog Class
$mydog->bark();


#Type Juggling 
$result='10'+5; //15

#Type Casting
$number=(int) '10'; // Casts string to the integer
$float_num=(float) '10.2';
$string_quotes=(string) '123';
$boolean=(bool) 1;

#array type cast
class Person{
    public $name='ram';
    public $age='10';
}
$person=new Person(); 
//cast object to array
$array=(array)$person;

#object type casting
$array_set=array('name'=>'Alice','age'=>25);
$object=(object)$array_set;
echo $object->age;
/*Output
25
*/

?>