<?php
$data01 = [1, 2, 3];
$data02 = [1, 5];
var_dump($data01 < $data02);

$data03 = [1, 2, 3];
$data04 = [1, 5, 1];
var_dump($data03 < $data04);

$data05 = [1, 2, 3];
$data06 = [1, 2, '3'];
var_dump($data05 == $data06);
var_dump($data05 === $data06);

$data07 = ['A' => 'a', 'B' => 'b', 'C' => 'c'];
$data08 = ['A' => 'a', 'C' => 'c', 'B' => 'b'];
var_dump($data07 == $data08);
var_dump($data07 === $data08);
?>