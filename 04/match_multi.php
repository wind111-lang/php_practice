<?php
function beer(){
    return '<br />' . 'ビールだよ';
}

$drink = 'ビール';

print match($drink){
    '日本酒', 'ワイン', 'ビール' => '醸造酒',
    'ウイスキー', 'ブランデー' => '蒸留酒',
    default => '?'
};

print match($drink){
    'ビール' => beer(),
    default => '?'
}
?>