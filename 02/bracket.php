<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>配列</title>
    </head>
    <pre>
    <body>
        <?php
        $data[0] = 'Taro';
        $data[1] = 'Jiro';
        $data[2] = 'Saburo';
        $data[3] = 'Yonro';
        $data[1] = 'Goro';
        $data[] = 'Rokuro';

        print_r($data);
        ?>
    </body>
</html>