<?php

function estaValidado() {
    if(isset($_SESSION["validado"])){
        return true;
    }
    return false;
}

function esAdmin() {
    if(isset($_SESSION["rol"])){
        if($_SESSION["rol"] == "admin") {
            return true;
        }
    }
    return false;
}
