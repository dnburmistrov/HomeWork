<?php
$num = rand (1, 4);
$day = rand (1, 31);
$month = rand (1, 12);
//////////////////////////1///////////////////////////////////
switch ($num) {
    case 1:
        printf('В переменную $num  попало число %s значит сейчас  - %s <br>',$num, $result="Зима");
        break;
    case 2:
        printf('В переменную $num  попало число %s значит сейчас  - %s <br>',$num, $result="Весна");
        break;
    case 3:
        printf('В переменную $num  попало число %s значит сейчас  - %s <br>',$num, $result="Лето");
        break;
    case 4:
        printf('В переменную $num  попало число %s значит сейчас  - %s <br>',$num, $result="Оеснь");
        break;
}
//////////////////////////2///////////////////////////////////
if ($day >= 1 & $day <= 10){
    printf('В переменную $day  попало число %s значит это 1-я декада месяца <br>',$day);
}elseif ($day >= 11 & $day <= 20){
    printf('В переменную $day  попало число %s значит это 2-я декада месяца <br>',$day);
}elseif ($day >= 21 & $day <= 31){
    printf('В переменную $day  попало число %s значит это 3-я декада месяца <br>',$day);
}
//////////////////////////3///////////////////////////////////
if ($month >= 1 & $month <= 2){
    printf('В переменную $month  попало число %s значит сейчас Зима <br>',$month);
}elseif ($month >= 3 & $month <= 5){
    printf('В переменную $month  попало число %s значит сейчас Весна <br>',$month);
}elseif ($month >= 6 & $month <= 8){
    printf('В переменную $month  попало число %s значит сейчас Лето <br>',$month);
}elseif ($month >= 9 & $month <= 11){
    printf('В переменную $month  попало число %s значит сейчас Осень <br>',$month);
}
else  printf('В переменную $month  попало число %s значит сейчас Зима <br>',$month);
?>
<a href="#" title="Оч" class="btn btn-primary" onclick="window.location.reload();">Обновить входящие данные</a>
