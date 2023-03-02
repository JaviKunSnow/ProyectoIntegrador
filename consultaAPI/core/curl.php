<?php

function getByClass() {
    $ch = curl_init();
    $url = "http://192.168.2.206/ProyectoIntegrador/API/api/arduino";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);

    curl_close($ch);
    return json_decode($resultado, true);

}

?>