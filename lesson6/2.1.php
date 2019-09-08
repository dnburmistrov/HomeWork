<?php
function brainstorm(int $a)
{
    if ($a != 0) {
        echo $a % 10;
        brainstorm($a / 10);
    } else return;
}

$a = rand(1, 56751);
printf("Данно натуральное число - %s <br>", $a);
$a = brainstorm($a);
