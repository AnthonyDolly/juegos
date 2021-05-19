<?php

class EnlacesPaginas
{
    public function enlacesPaginasModelo($enlacesModelo)
    {
        if (
            $enlacesModelo == "preguntas" ||
            $enlacesModelo == "records" ||
            $enlacesModelo == "cerrar-sesion" ||
            $enlacesModelo == "home"
        ) {
            $modulo = "vista/modulos/" . $enlacesModelo . ".php";
        } elseif ($enlacesModelo == "index") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "ok") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "ok") {
            $modulo = "vista/modulos/inicio.php";
        } else {
            $modulo = "vista/modulos/inicio.php";
        } 
        return $modulo;
    }
}
