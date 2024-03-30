<?php
$str = 'WINGSプロジェクト';
print mb_strstr($str, 'S', true);//trueで前方の文字列を取得, defaultのfalseは$needle('S')と後方の文字列を取得
print '<br />';
print mb_strstr($str, 'S');
print '<br />';
print mb_strstr($str, 'M', false);//存在しないためfalseが返ってくる, 出力しない.
?>