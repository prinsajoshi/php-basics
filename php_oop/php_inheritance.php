<?
/*
Single inheritance occurs when class inherit form only one parent class */
class Animal{
    public function eat(){
        echo "Eating";
    }
}

class Dog extends Animal{
    public function bark(){
        echo "Barking";
    }

}

$dog=new Dog();
$dog->bark(); //Barking
$dog->eat();//Eating


/*
Multilevel inheritance occurs when class id derived form the another derived class forming a chain of inheritance*/
class Animal1{
    public function eat(){
        echo "Eating";
    }
}

class Dog1 extends Animal1{
    public function bark(){
        echo "Barking";
    }
}

class Puppy extends Dog1{
    public function play(){
        echo "playing";
    }
}

$puppy=new Puppy();
$puppy->eat(); //Eating
$puppy->bark();//Barking
$puppy->play();//playing


/*
Hierarchical inheritance occurs when multiple class inherit form the single parent class */
class Animal2 {
    public function eat() {
        echo "Eating...";
    }
}

class Dog2 extends Animal2 {
    public function bark() {
        echo "Barking...";
    }
}

class Cat extends Animal2 {
    public function meow() {
        echo "Meowing...";
    }
}

$dog = new Dog();
$dog->eat(); // Output: Eating...
$dog->bark(); // Output: Barking...

$cat = new Cat();
$cat->eat(); // Output: Eating...
$cat->meow(); // Output: Meowing...

/*
Multiple inheritance: php doesnot support multilevel inheritance directly (a class cannot extends morre than one clas) instead we use 'traits' concepts 
which allow a class to use multiple class from multiple source */
trait CanFly{
    public function fly(){
        echo "Flying";
    }
}

trait CanSwim{
    public function swim(){
        echo "Swimming";
    }
}

class Animal3{
    public function eat(){
        echo "Eating....";
    }
}

class Duck extends Animal3{
    use CanFly,CanSwim;
}

$duck=new Duck();
$duck->eat();//Output: Eating
$duck->fly();//Flying
$duck->swim();//Swimming

?>