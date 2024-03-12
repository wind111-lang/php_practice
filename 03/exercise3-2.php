<?php
//1
$x = 0;

// $flag = ($x == 1) ? 0 : -1; // まとめて書こうね and ===でデータ型も考慮しようね
$flag = ($x === 1 ? 0 : -1);
print $flag . '<br />';

//2

var_dump('1.44e2' == 144); //true
var_dump('1.44e2' === 144); //false
var_dump('0x10' == '16'); //false
var_dump([1, 5] > [1, 2, 3]); //false
?>