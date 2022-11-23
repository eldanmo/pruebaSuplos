<?php

extract($_REQUEST);
require_once "conexionBaseDatos.php";
require_once "../model/Proceso.php";

$objActividad = new Proceso();
$objActividad->mostrarActividad($_REQUEST['descripcionActividad']);

$respuesta = $objActividad->consultarActividad();

while ($actividad = $respuesta->fetch_object()){
    echo $tbody = "
    <tr>
        <th>$actividad->codigoclase</th>;
        <th>$actividad->nombreclase</th>;
        <th>$actividad->codigoproducto</th>;
        <th>$actividad->nombreproducto</th>;
        <th>$actividad->id</th>;
    </tr>
    ";
}