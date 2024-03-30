<?php
$str = 'WINGSプロジェクト';
print mb_strlen($str);//文字長
print '<br />';
print mb_strwidth($str);//全角を2としてカウントした場合の文字長
?>