<?php
$array = [
    'a1' => ['id'=>'1', 'age'=>'16', 'gender'=>'m', 'login'=>'Вася'],
    'a2' => ['id'=>'2', 'age'=>'18', 'gender'=>'m', 'login'=>'Петя'],
    'a3' => ['id'=>'3', 'age'=>'20', 'gender'=>'g', 'login'=>'Катя'],
    'a4' => ['id'=>'4', 'age'=>'20', 'gender'=>'m', 'login'=>'Стас'],
    'a5' => ['id'=>'5', 'age'=>'12', 'gender'=>'g', 'login'=>'Маша'],
    'a6' => ['id'=>'6', 'age'=>'44', 'gender'=>'g', 'login'=>'Галя'],
    'a7' => ['id'=>'7', 'age'=>'45', 'gender'=>'m', 'login'=>'Макс'],
    'a8' => ['id'=>'8', 'age'=>'20', 'gender'=>'m', 'login'=>'Илья'],
    'a9' => ['id'=>'9', 'age'=>'20', 'gender'=>'g', 'login'=>'Даша']
];
function mysortfunc($a, $b) {

    if ($a['gender']>$b['gender']) { return -1; }

    if ($a['gender']<$b['gender']) { return 1; }

    if ($a['gender']==$b['gender']) {
        if ($a['age']==$b['age']) return 0;
        return ($a['age']>$b['age']) ? 1 : -1;
    }

}
uasort($array, 'mysortfunc');
echo '<pre>';
print_r($array);
echo '<pre/>';
?>