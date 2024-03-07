<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="UTF-8">
    <title>String</title>
</head>

<body>
    <?php
    $title = 'String';
    $data1 = 'Support\t {$title}<br />';
    $data2 = "Support\t {$title}";

    print $data1;
    print $data2;
    ?>
</body>

</html>