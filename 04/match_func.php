<?php
$data = 10;

function hoge($hoge){
    return false;
}
function fuga($fuga){
    return false;
}

function piyo($piyo){
    return $piyo;
}

print match($data){
    hoge($data) => 'hoge',
    fuga($data) => 'fuga',
    piyo($data) => 'piyo',
    default => '?'
};
?>