<?php

require_once "modelo/conexion.php";

class DatosRecords extends Conexion
{
    #Registrar records de puntos
    #----------------------------
    public function registroRecordsModelo($datosModelo, $tabla)
    {
        $st = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario_id,puntuacion_total,fecha) VALUES (:dni,:ptotal,now())");
        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":ptotal", $datosModelo["ptsO"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }
    }
}
