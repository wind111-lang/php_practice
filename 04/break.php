<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++){
    $sum += $i;

    if ($sum > 1000){
        break;
    }
}
print "1000を超えるのは1~{$i}を加算したとき"
?>