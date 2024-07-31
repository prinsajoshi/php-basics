<?php
/*OOP overriding methods and properties 
-this concept is essential for implementing polymorphism
allows subclasses to provide a specific implementation of methods
 and properties defined in the parent class 

Property Shadowing: Subclass properties with same name as parent properties 
will shadow them but not replace them

Static Method Overriding: allows sublcasses to provide new implemtation for static method
but these do not participate in the polymorphism
*/

#Method overriding function 
class ParentClass {
    public function display() {
        echo "This is the parent class method.\n";
    }
}

class ChildClass extends ParentClass {
    public function display() {
        echo "This is the overridden method in the child class.\n";
    }
}

$parent = new ParentClass();
$parent->display(); // Output: This is the parent class method.

$child = new ChildClass();
$child->display(); // Output: This is the overridden method in the child class.


#property overriding 
class ParentClass1 {
    public $property = "Parent Property";

    public function showProperty() {
        echo $this->property . "\n";
    }
}

class ChildClass1 extends ParentClass1 {
    public $property = "Child Property";

    public function showProperty() {
        echo $this->property . "\n";
    }
}

$parent = new ParentClass1();
$parent->showProperty(); // Output: Parent Property

$child = new ChildClass1();
$child->showProperty(); // Output: Child Property


#Static method overriding
class ParentClass2 {
    public static function display() {
        echo "Static method in the parent class.\n";
    }
}

class ChildClass2 extends ParentClass2 {
    public static function display() {
        echo "Static method in the child class.\n";
    }
}

ParentClass2::display(); // Output: Static method in the parent class.
ChildClass2::display();  // Output: Static method in the child class.


#but however if we have to access the parent properties from the child class we can use(parent::):
class ParentClass3 {
    public function greet() {
        echo "Hello from ParentClass\n";
    }
}

class ChildClass3 extends ParentClass3 {
    public function greet() {
        parent::greet(); // Call the parent class's greet method
        echo "Hello from ChildClass\n";
    }
}

$child = new ChildClass3();
$child->greet();
// Output:
// Hello from ParentClass
// Hello from ChildClass


?>
