<?php
/*
Abstraction focus on the essential properties and behaviours an object should have

An abstract class in PHP is a class that cannot be instantiated directly and is meant 
to be subclassed. It can contain both abstract methods (which must be implemented by 
subclasses) and non-abstract methods (which can have their own implementation).

Note: we cannot directly create instances of an abstract class, we can use abstract classes to define
common methods and properties that must be implemented by subclasses
*/

#Example 1
abstract class Animal4 {
    // Abstract method (does not have a body)
    abstract public function makeSound();


    // Regular method
    public function breathe() {
        echo "Breathing...\n";
    }
}

class Dog4 extends Animal4 {
    // Implement the abstract method
    public function makeSound() {
        echo "Woof!\n";
    }
}

$dog = new Dog4();
$dog->makeSound(); // Output: Woof!
$dog->breathe();   // Output: Breathing...

#Example2
abstract class Shape {
    abstract public function getArea();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(5, 10);
echo $rectangle->getArea(); // Output: 50

?>
