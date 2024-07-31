<?php
/*
OOP static members
-Static members are class properties and methods that belongs to the class itself
rather any particular instance(object) of the class
-They can be accessed without creating a object of the class
-static members are useful for data or behaviour
that should be shared across all instances of a class or does not 
depend on instace-specific data 
*/

#Example1
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

// Accessing static property and method without instantiation
Counter::$count = 1; // Set static property
Counter::increment(); // Call static method
echo Counter::getCount(); // Output: 2

#Example2
class MathHelper {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }
}

// Calling static methods
echo MathHelper::add(5, 3); // Output: 8
echo MathHelper::subtract(10, 4); // Output: 6



/*
'self' and 'static' keyword
-'self': used within the class to refer to the current class itslef.
It can be used to access static properties and methods

-'static':a late static binding keuword that rfeer to the class that was actually 
called at runtime.It's useful in inheritance scenarios to refer to the called
class rather than the class where the method is defined.

LATE STATIC BINDING helps in scenarios where you want methods to behave accoridng to the class
that's actually calling them, not just where they were defined.It can be used as a late static 
binding keuword that rfeer to the class that was actually called at runtime.
It's useful in inheritance scenarios to refer to the called class rather than the class where the method is defined.
*/
class BaseClass{
    public static function getClassName(){
        return __CLASS__;
    }

    public static function getStaticClassName(){
        return static::getClassName();
    }
}

class ChildClass extends BaseClass{
    public static function getClassName()
    {
        return __CLASS__;
    }
}

echo BaseClass::getStaticClassName(); //output: BaseClass
echo ChildClass::getStaticClassName();//output:ChildClass
?>