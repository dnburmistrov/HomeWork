<?php
function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function operation($numOne, $numTwo, $str)
{
    switch ($str) {
        case 'add':
            return add($numOne, $numTwo);
        case 'sub':
            return sub($numOne, $numTwo);

    }
}

$result = operation(509, 675, 'sub');
$result = operation(509, 675, 'add');
printf("\$result = %s", $result);
?>
