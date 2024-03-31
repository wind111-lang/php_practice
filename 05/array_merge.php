<?php
$array1 = [1, 3, 5];
$array2 = [2, 4, 6];
$result = array_merge($array1, $array2);
print_r($result);
print '<br />';

$assoc1 = ['Apple' => 'Red', 'Banana' => 'Yellow', 'Melon' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];
$result2 = array_merge($assoc1, $assoc2);
print_r($result2);//配列のキー重複時、後の値で上書きされる
print '<br />';

//配列のキー重複時の上書きを避ける
$result3 = array_merge_recursive($assoc1, $assoc2);
print_r($result3);
?>