<?php
$rank = '甲';
$result = match($rank){
    '甲' => '優秀',
    '乙' => '良い',
    '丙' => '悪い',
    default => '?'
};
print $result;
?>