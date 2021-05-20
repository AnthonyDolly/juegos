<?php

require_once "modelo/conexion.php";

class Datos extends Conexion
{
    #Ingreso usuarios
    #---------------------
    public function ingresoUsuarioModelo($datosModelo, $tabla)
    {
        $st = Conexion::conectar()->prepare("SELECT id, concat(nombres, ' ', apellidos) AS usuario, contra, puntos FROM $tabla where id = :dni");
        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->execute();

        return $st->fetch();

        // $st->close();
    }

    #Registro usuarios
    #------------------
    public function registroUsuarioModelo($datosModelo, $tabla)
    {
        $st = Conexion::conectar()->prepare("INSERT INTO $tabla(id, nombres, apellidos, contra, puntos) 
        VALUES(:dni,:nombres,:apellidos,:contra,0)");

        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":nombres", $datosModelo["nombres"], PDO::PARAM_STR);
        $st->bindParam(":apellidos", $datosModelo["apellidos"], PDO::PARAM_STR);
        $st->bindParam(":contra", $datosModelo["password"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }

        // $st->close();
    }

    #Actualizar puntos del Usuario
    #---------------------------------
    public function actualizarUsuarioPuntosModelo($datosModelo, $tabla)
    {
        $st = Conexion::conectar()->prepare("UPDATE $tabla SET puntos = :puntos WHERE id = :dni");

        $st->bindParam(":puntos", $datosModelo["puntos"], PDO::PARAM_INT);
        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            "error";
        }

        // $st->close();
    }
}
