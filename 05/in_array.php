<?php
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
print '1: ';
if (!array_search('PHP', $data)){
    print 'Not Found';
}// 返り値が0の場合はfalseと判定されるため
print '<br />';
print '2: ';

if (array_search('PHP', $data) === false){
    print 'Not Found';
}// 回避可能だが冗長
print '<br />';
print '3: ';

if (!in_array('PHP', $data)){
    'Not Found';
}
// 特定の要素が存在するか確認 in_array
?>