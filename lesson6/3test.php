<?php
$agenda = array(
    "fulanito" => array(
        "nombre" => "Gsancho",
        "direccion" => "sierra olvira",
        "fuerza" => "Over 9000"),
    "jonki" => array(
        "nombre" => "jonki",
        "direccion" => "valdemin",
        "fuerza" => "0"));
echo "<pre>";
print_r($agenda);


foreach ($agenda as $clave_agenda => $persona) {

    echo "$clave_agenda ";

    foreach ($persona as $clave_agenda2 => $datos) {

        echo "$clave_agenda2 : $datos <br>";

    }
}
