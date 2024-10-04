<?php

/*
ITERABLES

An iterable is any type of object that can be looped over using a foreach loop.
 In PHP, an object is considered iterable if it implements the Traversable interface
(which is a base interface for both Iterator and IteratorAggregate).

Why Use Iterables?
To create custom objects that you can loop through, just like arrays.
Useful when you want to define how an object should be traversed
(e.g., through a collection of items).

 */

 
class BookCollection implements IteratorAggregate {
    private $books = [];  // Array to hold the list of books

    // Constructor to add books
    public function __construct($books) {
        $this->books = $books;
    }

    // Implement the getIterator() method from IteratorAggregate
    public function getIterator() {
        return new ArrayIterator($this->books);
    }
}

// Creating a collection of books
$books = new BookCollection(["Book 1", "Book 2", "Book 3"]);

// Loop over the books collection using foreach
foreach ($books as $book) {
    echo $book . "\n";  // Outputs each book
}
?>

