<?php
$data = 'Wings project';
$data2 = 'ｗｉｎｇｓプロジェクト';
$data3 = 'Fußball';

print mb_convert_case($data, MB_CASE_UPPER);
print '<br />';
print mb_convert_case($data, MB_CASE_LOWER);
print '<br />';
print mb_convert_case($data, MB_CASE_TITLE);
print '<br />';
print mb_convert_case($data2, MB_CASE_UPPER);
print '<br />';
print mb_convert_case($data3, MB_CASE_UPPER);
print '<br />';
print mb_convert_case($data3, MB_CASE_UPPER_SIMPLE);
// MB_CASE_UPPER: 小文字を大文字に変換
// MB_CASE_LOWER: 大文字を小文字に変換
// MB_CASE_TITLE: 先頭文字を大文字に変換
// MB_CASE_XXXXX_SIMPLE: 文字列長を維持させた変換 UPPER, LOWER, TITLEに対応

?>