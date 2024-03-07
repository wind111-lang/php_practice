<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8' />
    <title>Cast</title>
</head>

<body>
    <?php
    var_dump((int) '0b11') . "<br />";
    var_dump((int) '0777') . "<br />";
    var_dump((int) '0xFF') . "<br />";
    var_dump(bindec('0b11')). "<br />";
    var_dump(octdec('0777')). "<br />";
    var_dump(hexdec('0xFF')). "<br />";
    var_dump((int) '1e4'). "<br />";
    var_dump((float) '1e4');
    ?>
</body>

</html>