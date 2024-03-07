<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8' />
    <title>Const</title>
</head>

<body>
    <?php
    define('TAX', 1.1);
    $price = 1000;
    $sum = $price * TAX . '<br/>';
    print $sum;

    print __FILE__ . "<br/>";
    print __LINE__ ;
    ?>
</body>

</html>