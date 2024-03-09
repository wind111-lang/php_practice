<?php
$assoc1 = [
    'Apple' => 'Red',
    'Orange' => 'Yellow',
    'Melon' => 'Green',
];

$assoc2 = [
    'Grape' => 'Purple',
    'Apple' => 'Yellow',
    'Strawberry' => 'Red',
];

$res = $assoc1 + $assoc2;

print_r($res);

$array1 = [1, 3, 5];
$array2 = [2, 4, 6];

$res = $array1 + $array2;

print_r($res);

?>