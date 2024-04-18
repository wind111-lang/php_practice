<?php
$str = '仕事用はwings@example.comです。プライベート用はYAMA@example.comです。';

if(preg_match_all('/([a-z0-9.!#$%&\'*+\/=?^_{|}~-]+)@([a-z0-9-]+(?:\.[a-z0-9-]+)*)/i', $str, $data, PREG_SET_ORDER)){
    //?: は正規表現のサブマッチを除外, *のみでは隣接しか参照しない
    foreach ($data as $item){
        print "$item[0] <br />";
        print "$item[1] <br />";
        print "$item[2] <br />";
        //print "$item[3]";
        print "<hr />";
    }
}
