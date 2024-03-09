<?php
$data = [1, 2, [3, 4, 5]];
[$a, $b, $c] = $data;

print_r($a);
print_r($b);
print_r($c);

[$x, $y, [$z1, $z2, $z3]] = $data;

print '<br />' . $x;
print $y;
print $z1;
print $z2;
print $z3;

?>