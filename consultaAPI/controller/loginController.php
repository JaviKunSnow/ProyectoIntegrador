<?php

if(isset($_REQUEST["enviar"])) {
    if(isset($_REQUEST["user"]) && isset($_REQUEST["pass"])){
        $user = $_REQUEST["user"];
        $pass = $_REQUEST["pass"];
        
        if(empty($user)){
            $_SESSION['error'] = "Debe rellenar la contraseña";
        } elseif (empty($pass)) {
            $_SESSION['error'] = "Debe rellenar la contraseña";
        } else {
            $usuario = UsuarioDAO::valida($user, $pass);
            if($usuario != null) {
                $_SESSION['validado'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['rol'] = $usuario->rol;
                if(estaValidado() && esAdmin()) {
                    $_SESSION['vista'] = $vistas['adminPlantas'];
                    $_SESSION['controlador'] = $controladores['admin'];
                    $_SESSION['pagina'] = 'Plantas';
                    $_SESSION['css'] = $css['admin'];
                } else {
                    $acceso = AccederDAO::findById($usuario->idUsuario);
                    $_SESSION['idAula'] = $acceso->idArduino;
                    $_SESSION['vista'] = $vistas['userAula'];
                    $_SESSION['pagina'] = 'Aula';
                    $_SESSION['controlador'] = $controladores['user'];
                    $_SESSION['css'] = $css['user'];
                }

                header('location: ./index.php');
            }
        }
    }
}

?>
