<?php

require_once 'Book.php';
require_once 'BookList.php';
require_once 'BookListIterator.php';

$bookList = new BookList();
$bookList->addBook(new Book("1984"));
$bookList->addBook(new Book("To Kill a Mockingbird"));
$bookList->addBook(new Book("The Great Gatsby"));

$iterator = new BookListIterator($bookList);
while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getTitle() . "\n";
}