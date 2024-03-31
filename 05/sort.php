<?php
$data =['Tennis', 'Swimming', 'Soccer', 'Baseball'];
sort($data, SORT_STRING);//文字列を昇順でソート
print_r($data);
print '<br />';

rsort($data, SORT_STRING);//文字列を降順でソート
print_r($data);
print '<br />';

$data2 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
sort($data2, SORT_NUMERIC);//数値を昇順でソート, キーは維持されない
print_r($data2);
print '<br />';

$data3 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
asort($data3, SORT_NUMERIC);//連想配列の数値を昇順にソート, キーは維持される
print_r($data3);
print '<br />';

ksort($data3, SORT_STRING);//連想配列のキーを昇順にソート, キーは維持される
print_r($data3);
?>