<?php
function newBrainStorm($a)
{
    static $staticB = 0;//count of recursion laps
    $staticB++;//start increment laps of recursion
    $b = $staticB;//record how much repeat echo every time

    if ($a > 0) {
        while ($b > 0 && $a > 0) {
            echo '[' . $staticB . ']';
            $b--;
            $a--;
        }
        newBrainStorm($a);
    } else return;
}

$num = rand(1, 25);

printf('Дано натуральное число %s <br> Его последовательность:<br>', $num);

newBrainStorm($num);