<?php
$keys = ['十', '百', '千', '万', '億', '兆', '京', '垓', '𥝱', '穣', '溝', '潤', '正', '載', '極', '恒河沙', '阿僧祇', '那由他', '不可思議', '無量大数'];
$data = ['那由他', '京', '垓', '億', '無量大数'];

usort($data, function ($a, $b) use ($keys){
    // 無名関数
    return array_search($a, $keys) <=> array_search($b, $keys);
});// 指定した単位で配列をソート
print_r($data);
?>