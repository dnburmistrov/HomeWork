<p style="color:#4f00ff">Задание: сумма отрицателиных и положительных чисел в массиве</p>
<?php
///////////////////////////////1///////////////////////////////////////////////////////////////////////////////////////
$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
foreach ($arr as $item => $value) {
    if ($value >= 0){
        $posValue+=$value;
    }
    else{
    $negValue+=$value;
}
};
echo "<pre>";
print_r($arr);
printf('Сумма отрицательных чисел: \'%s\' <br>',$negValue);
printf('Сумма положительных чисел: \'%s\' <br>',$posValue);
echo   '<br>';
?>
<p style="color:#4f00ff">Задание: отображение делителей числа в массиве</p>
<?php
///////////////////////////////2////////////////////////////////////////////////////////////////////////////////////////
printf('Данно число - %s, делители данного числа: <br>', $a=rand(30,150));
$b = 1;
while ($b <= $a){
        if ($a%$b > 0){
        }else  $array[]=$b;
    $b++;
}
echo "<pre>";
print_r($array);
?>
<p style="color:#4f00ff">Задание: Пирамида</p>
<?php
///////////////////////////////1////////////////////////////////////////////////////////////////////////////////////////
$num = rand(5,10);
$i = 0;
printf('Дано число - %s <br>', $num);
while($num > 0){
    while ($i<$num){
        echo "x";
        $i++;
    }
    $num--;
    $i = 0;
    echo '<br>';

}
echo   '<br>';
?>

<a href="#" title="Оч" class="btn btn-primary" onclick="window.location.reload();">Обновить входящие данные</a>