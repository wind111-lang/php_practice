<?php
const EPSILON = 0.00001;
$x = 0.123456;
$y = 0.123455;
print abs($x - $y) . '<br />';// test
var_dump(abs($x - $y) < EPSILON);
?>