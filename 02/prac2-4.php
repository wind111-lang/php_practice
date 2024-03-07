<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Prac2-4</title>
    </head>
    <body>
        <?php
        const DISCOUNT = 0.9;
        $price = 500;
        $sum = $price * DISCOUNT;
        print "値引き後価格は{$sum}円";
        ?>
    </body>
</html>