<?php
$exp = '3e2';
print match($exp){
    300 => '300',
    '3e2' => '3e2',
    default => '?'
};
?>