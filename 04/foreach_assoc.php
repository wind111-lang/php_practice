<?php
$data = ['東京' => '関東', '大阪' => '関西', '名古屋' => '中部', '福岡' => '九州', '札幌' => '北海道'];
foreach ($data as $key => $value){
    print "キー{$key}はバリュー{$value}地方です <br />";
}
?>