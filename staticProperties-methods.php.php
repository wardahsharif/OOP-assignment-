<?php

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