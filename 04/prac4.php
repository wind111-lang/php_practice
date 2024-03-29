<?php
$result = 0;
for ($i = 1; $i < 100; $i++){
    if ($i % 2 === 0){
        continue;
    }
    $result += $i;
}
print $result . '<br />';

$j = 0;
$result2 = 0;

while ($j < 100){
    $j++;
    if ($j % 2 === 0){
        continue;
    }
    $result2 += $j;
}

print $result2 . '<br />';

$data = [10, 25, 50];

foreach ($data as &$item){
    $item *= 1.5;
}

print_r($data);
print '<br />';

$language = 'Java';

switch ($language){
    case 'Python':
    case 'PHP':
    case 'Ruby':
        print 'インタプリター言語 <br />';
        break;
    case 'C#':
    case 'Java':
        print 'コンパイル言語 <br />';
        break;
    default:
        print '? <br />';
}

if ($language === 'Python' || $language === 'PHP' || $language === 'Ruby'){
    print 'インタプリター言語 <br />';
}elseif ($language === 'C#' || $language === 'Java'){
    print 'コンパイル言語 <br />';
}else{
    print '? <br />';
}

print match($language){
    'Python', 'PHP', 'Ruby' => 'インタプリター言語',
    'C#', 'Java' => 'コンパイル言語',
    default => '?',
}

?>