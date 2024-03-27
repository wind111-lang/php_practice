<?php
$books = [
    ['初めてのPHP', 2190],
    ['初めてのPython', 3480],
    ['初めてのGo', 5550],
];
foreach($books as [$title, $price]){
    print "{$title} : {$price}円 <br />";
}
?>