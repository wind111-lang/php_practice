<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset='UTF-8' />
    <title>Variable PHP</title>
</head>

<body>
    <?php
    $str = 'PHP';
    $msg = <<<EOD
    {$str}はサーバサイドで動作する簡易スクリプトです．"Let's start PHP!"
    EOD;

    print $msg;
    ?>
</body>

</html>