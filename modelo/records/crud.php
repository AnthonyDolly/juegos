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

    #Vista del top 5 de la tabla records
    #-------------------------------------
    public function vistaRecordsModelo($tabla)
    {
        $st = Conexion::conectar()->prepare('SELECT concat(nombres," ", apellidos) AS Nombre, puntuacion_total AS "Puntuacion Total", fecha AS "Fecha" 
        FROM records r
        INNER JOIN usuarios u
        ON u.id = r.usuario_id
        ORDER BY puntuacion_total DESC, fecha DESC 
        LIMIT 5');

        $st->execute();

        return $st->fetchAll();
    }
}
