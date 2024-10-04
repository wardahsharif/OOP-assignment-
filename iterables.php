<?php


 
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

