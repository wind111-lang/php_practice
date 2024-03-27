<?php
$drink = 'ビール';
switch ($drink){
    case '日本酒':
    case 'ビール':
    case 'ワイン':
        print '醸造酒';
        break;
    case 'ウイスキー':
    case 'ブランデー':
        print '蒸留酒';
        break;
    default:
        print '?';
        break;
}
?>