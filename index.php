<?php
#EL INDEX: En el mostramos la salida de las vistas al usuario y también a travez de él enviamos las distintas acciones que el usuario envíe al controlador.

require_once "modelo/enlaces.php";
require_once "controlador/enlaces.php";
require_once "controlador/usuario/usuarioControlador.php";
require_once "controlador/preguntas/preguntasControlador.php";
require_once "controlador/records/recordsControlador.php";
require_once "modelo/usuario/crud.php";
require_once "modelo/preguntas/crud.php";
require_once "modelo/records/crud.php";

$mvc = new MvcControlador();
$mvc->plantilla();
