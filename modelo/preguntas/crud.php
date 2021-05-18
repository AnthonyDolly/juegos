<?php

require_once "modelo/conexion.php";

class DatosPreguntas extends Conexion
{
    #Vista de 10 preguntas
    #---------------------------
    public function vistaPreguntasModelo($datosModelo, $tabla)
    {
        $st = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nivel = 1 ORDER BY RAND() LIMIT 10; ");
        $st->execute();

        return $st->fetchAll();
    }
}
