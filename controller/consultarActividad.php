<?php

extract($_REQUEST);
require_once "conexionBaseDatos.php";
require_once "../model/Proceso.php";

$objActividad = new Proceso();
$objActividad->mostrarActividad($_REQUEST['descripcionActividad']);

$respuesta = $objActividad->consultarActividad();

$tabla = '<thead class="">
<tr>
<th scope="col">ID Clase</th>
<th scope="col">Clase</th>
<th scope="col">ID</th>
<th scope="col">Producto</th>
<th scope="col">Acción</th>
</tr>
</thead>

';

while ($actividad = $respuesta->fetch_object()){
    $tabla .= "
    <tr>
        <th>$actividad->codigoclase</th>
        <th>$actividad->nombreclase</th>
        <th>$actividad->codigoproducto</th>
        <th>$actividad->nombreproducto</th>
        <th onClick='seleccionarActividad($actividad->id)'>✔</th>
    </tr>
    ";
}

if($respuesta){
    echo json_encode($tabla);
}
else{
    echo json_encode('La consulta no arrojó resultados');
}
