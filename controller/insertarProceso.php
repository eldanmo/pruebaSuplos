<?php

extract($_REQUEST);
require_once "conexionBaseDatos.php";
require_once "../model/Proceso.php";

$objeto = $_REQUEST['objeto'];
$descripcionAlcance = $_REQUEST['descripcionAlcance'];
$moneda = $_REQUEST['moneda'];
$presupuesto = $_REQUEST['presupuesto'];
$actividad = $_REQUEST['actividad'];
$fechaInicio = $_REQUEST['fechaInicio'];
$horaInicio = $_REQUEST['horaInicio'];
$fechaCierre = $_REQUEST['fechaCierre'];
$horaCierre = $_REQUEST['horaCierre'];

if(empty($objeto)  
    || empty($descripcionAlcance) 
    || empty($moneda) 
    || empty($presupuesto) 
    || empty($actividad) 
    || empty($fechaInicio) 
    || empty($horaInicio) 
    || empty($fechaCierre)
    || empty($horaCierre)){
        echo json_encode('error');
}

$objProceso = new Proceso();
$objProceso->crearProceso(
    $objeto,
    $descripcionAlcance,
    $moneda,
    $presupuesto,
    $actividad,
    $fechaInicio,
    $horaInicio,
    $fechaCierre,
    $horaCierre,
    'ACTIVO',
     );

$respuesta = $objProceso->agregarProceso();

if($respuesta){
    echo json_encode('correcto '.$horaCierre);
}
else{
    echo json_encode('error');
}