<?php
$str = '1,2,2,3,3,3,4,4,4,4,5,5,5,5,5,6,6,6,6,6,6,7,7,7,7,7,7,7,8,8,8,8,8,8,8,8';
$arrK = explode(",", $str);
$n = rand(1, 8);
echo $n . '<br>';
function myFunction(array $arr, int $int)
{
    foreach ($arr as $key => $value) {
        if ($key >= $int) {
            break;
        } else printf($value);
    }
}
myFunction($arrK,$n);