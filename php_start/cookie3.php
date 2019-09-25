<?php

$counter = 1;


if (isset($_COOKIE["counter"])) {
    $counter = intval($_COOKIE["counter"]);
    $counter++;
    $str = "Вы посетили страницы сайта $counter раз(а)";

} else {
    $str = 'Ваш первый визит';
}

setcookie("counter", $counter);

?>

<!DOCTYPE html>

<html>
<head>
    <title>PHP Start | Cookie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<p align="center"><?php echo $str; ?></p>
</body>
</html>