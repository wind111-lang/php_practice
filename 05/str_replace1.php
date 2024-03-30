<?php
$str = 'にわにはにわにわとりがいる';
$cnt = 0;
print str_replace('にわ', 'ニワ', $str, $cnt);
print '<br />';
print "{$cnt}個の置換を実行";
?>