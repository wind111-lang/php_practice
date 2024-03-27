<?php
$data = ['東京', '大阪', '名古屋', '福岡', '札幌'];
foreach ($data as &$value){
    $value = "New" . $value;
}
print_r($data);
?>