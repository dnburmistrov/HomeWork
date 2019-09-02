<?php
function calc(int $numOne, int $numTwo, string $str)
{
    switch ($str) {
        case 'add':
            return $result = $numOne + $numTwo;
            break;
        case 'subtract':
            return $result = $numOne - $numTwo;
            break;
        case 'multiply':
            return $result = $numOne * $numTwo;
            break;
        case 'divide':
            return $result = $numOne / $numTwo;
            break;
    }
}

if (empty($_POST['one']) || empty($_POST['two']) || empty($_POST['op1'])) {
    echo 'Вы не заполнили все елементы' . '<br>';
} else {
    $num1 = (int)$_POST['one'];
    $num2 = (int)$_POST['two'];
    $str = (string)$_POST['op1'];
    $result = calc($num1, $num2, $str);
    printf(("Результат операции %s"), $result);
}

?>
<p><a href="1.1-1.php">Вернутся назад</a></p>