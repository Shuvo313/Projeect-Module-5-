<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for '{$this->title}'.\n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        $book->borrowBook();
    }

    public function returnBook(Book $book) {
        $book->returnBook();
    }
}

// -----------------------------
// Dynamic Input via readline()

echo "Enter details for 2 books:\n";
$books = [];

for ($i = 1; $i <= 2; $i++) {
    $title = readline("Enter title for Book $i: ");
    $copies = (int)readline("Enter available copies for '$title': ");
    $books[] = new Book($title, $copies);
}

echo "\nEnter details for 2 members:\n";
$members = [];

for ($i = 1; $i <= 2; $i++) {
    $name = readline("Enter name for Member $i: ");
    $members[] = new Member($name);
}

// Each member borrows one book (1st member -> 1st book, 2nd -> 2nd)
echo "\n---Borrowing Books---\n";
$members[0]->borrowBook($books[0]);
$members[1]->borrowBook($books[1]);

// Output the available copies
echo "\n--- Available Copies After Borrowing ---\n";
echo "Available Copies of '{$books[0]->getTitle()}': {$books[0]->getAvailableCopies()}\n";
echo "Available Copies of '{$books[1]->getTitle()}': {$books[1]->getAvailableCopies()}\n";
