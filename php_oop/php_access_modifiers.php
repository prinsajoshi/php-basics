<?php
/*
Visibility
-public:The properties and methods that can be accessed from anywhere
-private:The properties and methods that can be accessed within the class itself
-protected: The properties and methods can be accessed within class ad by classes derived from that class
 */

#Public
class MyClass {
    public $publicProperty = "I am public";
    
    public function publicMethod() {
        echo "This is a public method.";
    }
}

$obj = new MyClass();
echo $obj->publicProperty; // Accessible: I am public
$obj->publicMethod();      // Accessible: This is a public method.


#Protected 
class ParentClass {
    protected $protectedProperty = "I am protected";
    
    protected function protectedMethod() {
        echo "This is a protected method.";
    }
}

class ChildClass extends ParentClass {
    public function accessProtected() {
        echo $this->protectedProperty; // Accessible: I am protected
        $this->protectedMethod();      // Accessible: This is a protected method.
    }
}

$obj = new ChildClass();
$obj->accessProtected();
// echo $obj->protectedProperty; // Error: Cannot access protected property
// $obj->protectedMethod();      // Error: Cannot access protected method



#Private
class MyClass1 {
    private $privateProperty = "I am private";
    
    private function privateMethod() {
        echo "This is a private method.";
    }

    public function accessPrivate() {
        echo $this->privateProperty; // Accessible: I am private
        $this->privateMethod();      // Accessible: This is a private method.
    }
}

$obj = new MyClass1();
$obj->accessPrivate();
// echo $obj->privateProperty; // Error: Cannot access private property
// $obj->privateMethod();      // Error: Cannot access private method

?>