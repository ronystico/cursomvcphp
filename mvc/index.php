<?php

require_once "controladores/rutasc.php";
require_once "controladores/adminc.php";

require_once "modelos/rutasm.php";
require_once "modelos/adminm.php";


$rutas = new RutasControlador();
$rutas -> Plantilla();

?>
