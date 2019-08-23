<?php
$arrValue = range(90,150, 3);
$arrKey = range(150, 90, 3);
$arrayCombine = array_combine($arrKey,$arrValue);
$arrayCombine2 = array_combine($arrValue,$arrKey);
echo '<pre>';
print_r($arrayCombine);
echo '<pre/>';
echo '<pre>';
print_r($arrayCombine2);
echo '<pre/>';
