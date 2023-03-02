<?php

function getByClass() {
    $ch = curl_init();
    $url = "http://".$_SERVER["SERVER_ADDR"]."/ProyectoIntegrador/API/api.php/arduino";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);

    curl_close($ch);
    return json_decode($resultado, true);

}

function getByLastDate() {
    $ch = curl_init();
    $url = "http://".$_SERVER["SERVER_ADDR"]."ProyectoIntegrador/API/api.php/sensores?idClase=2";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);

    curl_close($ch);
    return json_decode($resultado, true);

}

?>