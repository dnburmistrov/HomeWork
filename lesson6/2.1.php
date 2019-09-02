<?php
function brainstorm(int $a)
{
    if ($a != 0) {
        echo $a % 10 . '<br>';
        brainstorm($a / 10);
    } else return;
}

$a = rand(1, 56751);
$a = brainstorm($a);
