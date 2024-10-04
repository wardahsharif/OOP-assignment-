<?php
/*
 Static Properties and Methods

- Static Properties Are variables that are shared across all instances of a class.
 Instead of each object having its own copy, a static property is shared by all instances of the class.

- Static Methods Are functions that can be called on the class itself, not on an object. 
You don't need to create an instance of the class to call a static method.


When to Use Static

When you want to store information that should be the same across all instances of a class 
(like a counter or configuration settings).
When a method should be accessed without creating an instance of the class.

 */

 class Visitor {

    //Static property to keep track of the number of visitors.
    public static $visitorCount = 0;

    //Static method to increase the visitor count.
    public static function addVisitor() {
        self::$visitorCount++; //increase the count 
    }

    public static function getVisitorCount() {
        return self::$visitorCount; // Return the current count
    }

 }

 //use the static property and methods

 Visitor::addVisitor(); //Add one visitor
 Visitor::addVisitor(); //Add another visitor
 
 // Get the current visitor count 
 echo "Total Visitors:" . Visitor::getVisitorCount(); //outputs: total visitors


?>