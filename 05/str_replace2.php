<?php
$str = ['PHPは良い言語です.', 'PHPは良いサーバ実行環境です.'];
$src = ['PHP', '良い'];
$rep = ['PHP 8', '素晴らしい'];
print_r(str_replace($src, $rep, $str, $cnt));// 変換したい文字, 変換後の文字, 変換対象の文字列
print '<br />';
print "{$cnt}個の置換を実行";
?>