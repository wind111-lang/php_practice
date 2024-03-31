<?php
$data = [
    ['x-1', 'x-2', 'x-3'],
    ['y-1', 'y-2', 'y-3'],
    ['z-1', 'z-2', 'z-3']
];

print count($data) . '<br />';
print count($data, COUNT_RECURSIVE);// COUNT_RECURSIVEは多次元配列の要素数を数えるのに有用

?>