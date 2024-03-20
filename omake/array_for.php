<?php
for ($i = 0; $i < 10; $i++) {
    print "i = {$i}\n";
}
// normal for func

$array = [1, 2, 3, 4, 5];

foreach ($array as $value) {
    print "value = {$value}\n";
}
// normal foreach func
$array_map = ['Apple' => 'Red', 'Banana' => 'Yellow', 'Grape' => 'Purple'];

foreach ($array_map as $key => $value) {
    print "key(fruit) = {$key}, value(color) = {$value}\n";
}
// foreach func with map
?>