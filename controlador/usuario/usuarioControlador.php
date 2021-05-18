<?php

class usuarioControlador
{
    #Ingreso de Usuario
    #---------------------
    public function ingresoUsuarioControlador()
    {
        if (isset($_POST["dni"])) {
            $datosControlador = array(
                "dni" => $_POST["dniL"],
                "password" => $_POST["passwordL"]
            );

            $respuesta = Datos::ingresoUsuarioModelo($datosControlador, 'usuarios');

            if ($respuesta["id"] == $_POST["dni"] && $respuesta["contra"] == $_POST["password"]) {
                session_start();
                $_SESSION["dni"] = $respuesta["id"];
                $_SESSION["username"] = $respuesta["usuario"];
                $_SESSION["puntos"] = $respuesta["puntos"];
            }
        }
    }

    public function registroUsuarioControlador()
    {
        if (isset($_POST["dni"])) {
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
