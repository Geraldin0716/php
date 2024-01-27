<?php
require_once("config.php");
require_once("controlador/index.php");

if(isset($_GET['m'])):
    $metodo =  $_GET['m'];
   // echo method_exists(modeloController::class,$metodo);
    if(method_exists(modeloController::class,$metodo)):
        modeloController::{$metodo}();

    endif;

else:
    modeloController::index();

endif;

?>