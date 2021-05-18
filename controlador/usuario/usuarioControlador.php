<?php

class usuarioControlador
{
    #Ingreso de Usuario
    #---------------------
    public function ingresoUsuarioControlador()
    {
        if (isset($_POST["dniL"])) {
            $datosControlador = array(
                "dni" => $_POST["dniL"],
                "password" => $_POST["passwordL"]
            );

            $respuesta = Datos::ingresoUsuarioModelo($datosControlador, 'usuarios');

            if ($respuesta["id"] == $_POST["dniL"] && $respuesta["contra"] == $_POST["passwordL"]) {
                session_start();
                $_SESSION["dni"] = $respuesta["id"];
                $_SESSION["username"] = $respuesta["usuario"];
                $_SESSION["puntos"] = $respuesta["puntos"];
                $_SESSION["validar"] = true;
                header("location:index.php?action=inicio");
            } else {
                header("location:index.php?action=fallo");
            }
        }
    }

    public function registroUsuarioControlador()
    {
        if (isset($_POST["dniR"])) {
            $datosControlador = array(
                "dni" => $_POST["dniR"],
                "nombres" => $_POST["nombres"],
                "apellidos" => $_POST["apellidos"],
                "password" => $_POST["passwordR"],
                "puntos" => $_POST["puntos"]
            );

            $respuesta = Datos::registroUsuarioModelo($datosControlador, "usuarios");

            if ($respuesta == "success") {
                header("location:index.php?action=ok");
            } else {
                header("location:index.php");
            }
        }
    }
}
