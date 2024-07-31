<?php
/*Subnamespaces are created by using a namespace, similar to directory structure */
namespace Library\Math\Geometry;

class Circle {
    public function calculateArea($radius) {
        return pi() * $radius * $radius;
    }
}

// Accessing the class
$circle = new \Library\Math\Geometry\Circle();
echo $circle->calculateArea(5); // Output: Area of the circle
