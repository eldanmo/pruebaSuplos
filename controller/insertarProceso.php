<?php

extract($_REQUEST);
require_once "conexionBaseDatos.php";
require_once "../model/Proceso.php";

$objProceso = new Proceso();
$objProceso->crearProceso(
    $_REQUEST['objeto'],
    $_REQUEST['descripcionAlcance'],
    $_REQUEST['moneda'],
    $_REQUEST['presupuesto'],
    $_REQUEST['actividad'],
     );

$respuesta = $objProceso->agregarProceso();

if($respuesta){
    header('location: ../view/crear.php?msj==1');
}
else{
    header('location: ../view/crear.php?msj==2');
}
