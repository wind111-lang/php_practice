<?php
file_put_contents('result.txt', mb_convert_encoding('Hello, PHP!', 'EUC-JP', 'UTF-8, SJIS, JIS'));
print '変換しました.';
?>