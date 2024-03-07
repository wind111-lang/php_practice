<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>配列</title>
    </head>
    <body>
        <?php
        $members = [
            'Taro' => 'Aichi',
            'Jiro' => 'Tokyo',
            'Saburo' => 'Osaka',
            'Yonro' => 'Fukuoka',
            'Goro' => 'Kanagawa',
        ];
        print $members['Jiro'].'<br/>';
        $members['Jiro'] = 'Hokkaido';
        print $members['Jiro'];
        ?>
    </body>
</html>