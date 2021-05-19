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

    #Registro de Usuario
    #--------------------------
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

    #Actualizar puntos del Usuario
    #-----------------------------------
    public function actualizarUsuarioPuntosControlador()
    {
        if (isset($_POST["pts"])) {
            $datosControlador = array(
                "dni" => $_SESSION["dni"],
                "puntos" => $_POST["pts"]
            );
            $respuesta = Datos::actualizarUsuarioPuntosModelo($datosControlador, "usuarios");

            if ($respuesta == "success") {
                header('location:index.php?action=mi-perfil&dni=' . $_SESSION["dni"] . '');
            } else {
                header("location:index.php");
            }
     }

        
    }
}
