<?php
$books = [
    ['title' => '初めてのPHP', 'price' => 2180],
    ['title' => '初めてのPython', 'price' => 3480],
    ['title' => '初めてのGo', 'price' => 5550],
];

foreach ($books as ['title' => $title, 'price' => $price]){
    print "{$title} : {$price}円 <br />";
}
?>