<?php
$books = [
    ['isbn' => '111-1111-11-1', 'title' => '初めてのPHP'],
    ['isbn' => '222-2222-22-2', 'title' => '初めてのPython'],
    ['isbn' => '333-3333-33-3', 'title' => '初めてのGo'],
];

$isbn = [];

foreach ($books as $book){
    ['isbn' => $isbn[]] = $book;
}

print_r($isbn);
?>