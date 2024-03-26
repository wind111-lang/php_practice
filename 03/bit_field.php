<?php
const SPRING = 1 << 0;
const SUMMER = 1 << 1;
const AUTUMN = 1 << 2;
const WINTER = 1 << 3;

$flags = SPRING | WINTER;
var_dump($flags & SUMMER); // int(0) -> 0010 & (0001, 1000) -> 0
var_dump($flags | SUMMER); // int(11) -> 0010 | (0001, 1000) -> 8 + 2 + 1 = 11

$flags = SPRING | AUTUMN | WINTER;
var_dump(($flags & (SPRING | WINTER)) === (SPRING | WINTER)); // 9 === 9
var_dump(($flags | (SPRING | AUTUMN)) === (SPRING | AUTUMN));// 13 != 5
?>