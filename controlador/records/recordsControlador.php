<?php

class recordsControlador
{
    #Insertando el puntaje obtenido en records
    public function registroRecordsControlador()
    {
        if (isset($_POST["ptsO"])) {
            $datosControlador = array(
                "dni" => $_SESSION["dni"],
                "ptsO" => $_POST["ptsO"]
            );

            $respuesta = DatosRecords::registroRecordsModelo($datosControlador, "records");

            if ($respuesta == "success") {
                header('location:index.php?action=ok&pts=' . $_GET["pts"] . '');
            } else {
                header("location:index.php");
            }
        }
    }
}
