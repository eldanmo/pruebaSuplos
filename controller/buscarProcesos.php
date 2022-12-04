<?php

extract($_REQUEST);
require_once "conexionBaseDatos.php";
require_once "../model/Proceso.php";

$objProceso = new Proceso();
$objProceso->mostrarProcesos($_REQUEST['id'], $_REQUEST['objeto'], $_REQUEST['estado']);

$respuesta = $objProceso->consultarProcesos();

$tabla = '<thead class="">
<tr>
<th scope="col">ID</th>
<th scope="col">RONDA</th>
<th scope="col">OBJETO</th>
<th scope="col">DESCRIPCIÓN</th>
<th scope="col">FECHA INICIO</th>
<th scope="col">FECHA CIERRE</th>
<th scope="col">ESTADO</th>
<th scope="col">RESPONSABLE DE EVENTO</th>
<th scope="col">ACCIONES</th>
</tr>
</thead>

';

while ($proceso = $respuesta->fetch_object()){
    $tabla .= "
    <tr>
        <th>$proceso->id</th>
        <th></th>
        <th>$proceso->objeto</th>

        <th>$proceso->descripcionAlcance</th>
        <th>$proceso->fechaInicio</th>
        <th>$proceso->fechaCierre</th>
        <th>$proceso->estado</th>
        <th></th>
        <th>" ;
    if($proceso->estado === 'ACTIVO'){
        $tabla .= "<p onClick='funcion($proceso->id)'>👁</p>
                <p onClick='editar($proceso->id)'>🖊</p>";
    }
    $tabla .= "<p onClick='publicar($proceso->id)'>🌍</p>  
        </th>
    </tr>
    ";
    
}

if($respuesta){
    echo json_encode($tabla);
}
else{
    echo json_encode('La consulta no arrojó resultados');
}


