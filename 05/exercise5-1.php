<?php
//1
print mb_substr('サーバサイド技術', 3, 3);
print '<br />';
print mb_convert_kana('ｻｰﾊﾞｻｲﾄﾞ技術', 'KV');
print '<br />';
print_r(explode("\t", "鈴木\t太郎\t男\t50歳\t広島県"));
?>