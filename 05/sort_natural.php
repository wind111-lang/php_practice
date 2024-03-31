<?php
$data = ['img15.png', 'img5.png', 'img2.png', 'img18.png', 'img3.png'];
sort($data, SORT_STRING);
print_r($data);//辞書順でソート
print '<br />';

sort($data, SORT_NATURAL);//自然順でソート
print_r($data);
?>