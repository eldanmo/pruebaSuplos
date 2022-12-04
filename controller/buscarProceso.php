<?php

extract($_REQUEST);
require_once "conexionBaseDatos.php";
require_once "../model/Proceso.php";

$id = $_GET['id'];

$objProceso = new Proceso();
$objProceso->mostrarProceso($_REQUEST['id']);

$respuesta = $objProceso->consultarProceso();

echo $respuesta->fetch_object();

/*$html = '<main class="creacion contenedor">
<h2 class="creacion__titulo">Crear proceso / Evento participación entrada</h2>

<form class="formulario" id="formulario">
    <fieldset class="formulario__pasos">
    <h2 class="formulario__registro">Información Básica</h2>    
            <div class="formulario__registro">
                <label for="objeto" class="formulario__label">Objeto(*)</label>
                <input name="objeto" id="objeto" type="text" class="formulario__campo" required>
            </div>
            <div class="formulario__registro">
                <label for="descripcionAlcance" class="formulario__label">Descripcion / Alcance (*)</label>
                <textarea name="descripcionAlcance" id="descripcionAlcance" type="text" class="formulario__campo" required></textarea>
            </div>
            <div class="formulario__registro">
                <label for="moneda" class="formulario__label">Moneda</label>
                <select name="moneda" id="moneda">3
                    <option value="COP">COP</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                </select>
            </div>
            <div class="formulario__registro">
                <label for="presupuesto" class="formulario__label">Presupuesto (*)</label>
                <input name="presupuesto" id="presupuesto" type="number" class="formulario__campo" required>
            </div>
            <div class="formulario__registro formulario__registro--actividad">
                <label for="actividad" class="formulario__label">Actividad (*)</label>
                <input name="actividad" id="actividad" type="search" class="formulario__campo" readonly required>
            </div>
            <div class="formulario__registro">
                <button type="button" class="formulario__submit formulario__submit--actividad" id="openModal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="formulario__submit--icono">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                        buscar
                </button>
            </div>
            <div id="respuesta" class="formulario__registro">
            </div>
            <input type="button" class="next btn btn-info formulario__submit formulario__submit--siguiente" value="Siguiente" onclick="siguiente()" />
    </fieldset>
    <fieldset class="formulario__pasos">
    <h2 class="formulario__cronograma"> Cronograma</h2>
         <div class="formulario__cronograma">
            <label for="fechaInicio" class="formulario__label">Fecha Inicio (*)</label>
            <input name="fechaInicio" id="fechaInicio" type="date" class="formulario__campo">
        </div>
        <div class="formulario__cronograma">
            <label for="horaInicio" class="formulario__label">Hora Inicio (*)</label>
            <input name="horaInicio" id="horaInicio" type="time" class="formulario__campo">
        </div>
        <div class="formulario__cronograma">
            <label for="fechaCierre" class="formulario__label">Fecha de Cierre (*)</label>
            <input name="fechaCierre" id="fechaCierre" type="date" class="formulario__campo">
        </div>
        <div class="formulario__cronograma">
            <label for="horaCierre" class="formulario__label">Hora Cierre (*)</label>
            <input name="horaCierre" id="horaCierre" type="time" class="formulario__campo">
        </div>
        <div id="respuesta1" class="formulario__cronograma">
        </div>
        <input type="button" class="formulario__submit formulario__submit--previo" value="Previo" onclick="previo()" />
        <div class="formulario__cronograma">
            <input class="formulario__submit" type="submit" value="Guardar">
        </div>

    </fieldset>
</form>

<div id="modal" class="modal">
    <div class="modal__contenido">
        <div id="cerrar" class="modal__cerrar">x</div>
        <h2>Actividades</h2>
        <div class="modal__Formulario">
        <form id="busqueda" class="formulario__buscar-actividad">
                    <div class="formulario__registro-actividad">
                        <label for="descripcionActividad" class="formulario__label">Descripción Actividad</label>
                        <input name="descripcionActividad" id="descripcionActividad" type="text" class="formulario__campo">
                    </div>
                    <div class="formulario__registro-actividad">
                        <input class="formulario__submit" type="submit" value="Buscar">
                    </div>
                    <div id="respuesta2" class="formulario__registro-actividad">
                    </div>
                </form>
                    <div class="tabla">
                        <table id="tabla">
                        </table>
                    </div>
                    
        </div>
        <div class="modal__close">
            <button id="close" class="modal__boton">
                Cerrar
            </button>
        </div>
    
    </div>
</div>
</main>';

echo $html;*/

/*if($respuesta){
    echo json_encode($html);
}
else{
    echo json_encode('La consulta no arrojó resultados');
}*/