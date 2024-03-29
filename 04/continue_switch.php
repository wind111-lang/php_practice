<?php
for ($i = 1; $i < 4; $i++){
    $result = 0;

    switch ($i){
        case 1:
        case 3:
            $result = $i * $i;
            break;
        case 2:
            //continue; Warningが出る
            continue 2;
    }

    print "{$i}^2は{$result} <br/>";
}
?>