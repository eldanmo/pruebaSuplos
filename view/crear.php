<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesos / Eventos - Crear</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../build/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
</head>
<body>

    <?php
        $msj = isset($_GET['msj']);
    ?>

    <header class="header">

    <div class="navegacion">

        <?php require_once './nav.php' ?>
        
    </div>

    </header>

    <main class="creacion contenedor">
        <h2 class="creacion__titulo">Crear proceso / Evento participación entrada</h2>
        <!--div class="creacion__opciones">
            <a href="#" class="creacion__enlace">Infomación básica</a>
            <a href="#" class="creacion__enlace">Cronograma</a>
        </div-->

        <?php
        if ($msj==1){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Se ha Agregado el proceso / Evento correctamente
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';}
        else if ($msj==2){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ha ocurrido un error, intente de nuevo, si el problema persiste, contacte al administrador
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';}
        ?>

        <form class="formulario" action="../controller/insertarProceso.php"  method="post">
            <fieldset class="formulario__pasos">
            <h2 class="formulario__registro">Información Básica</h2>    
                    <div class="formulario__registro">
                        <label for="objeto" class="formulario__label">Objeto</label>
                        <input name="objeto" id="objeto" type="text" class="formulario__campo" required>
                    </div>
                    <div class="formulario__registro">
                        <label for="descripcionAlcance" class="formulario__label">Descripcion / Alcance</label>
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
                        <label for="presupuesto" class="formulario__label">Presupuesto</label>
                        <input name="presupuesto" id="presupuesto" type="number" class="formulario__campo" required>
                    </div>
                    <div class="formulario__registro formulario__registro--actividad">
                        <label for="actividad" class="formulario__label">Actividad</label>
                        <input name="actividad" id="actividad" type="search" class="formulario__campo" required>
                    </div>
                    <div class="formulario__registro">
                        <button type="button" class="formulario__submit formulario__submit--actividad" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="formulario__submit--icono">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                                buscar
                        </button>
                    </div>
                    <input type="button" class="next btn btn-info formulario__submit formulario__submit--siguiente" value="Siguiente" onclick="siguiente()" />
            </fieldset>
            <fieldset class="formulario__pasos">
            <h2> Cronograma</h2>
                 <div class="formulario__registro">
                    <label for="objeto" class="formulario__label">Fecha Inicio (*)</label>
                    <input name="objeto" id="objeto" type="date" class="formulario__campo" required>
                </div>
                <div class="formulario__registro">
                    <label for="objeto" class="formulario__label">Hora Inicio (*)</label>
                    <input name="objeto" id="objeto" type="time" class="formulario__campo" required>
                </div>
                <div class="formulario__registro">
                    <label for="objeto" class="formulario__label">Fecha de Cierre (*)</label>
                    <input name="objeto" id="objeto" type="date" class="formulario__campo" required>
                </div>
                <div class="formulario__registro">
                    <label for="objeto" class="formulario__label">Hora Cierre (*)</label>
                    <input name="objeto" id="objeto" type="time" class="formulario__campo" required>
                </div>
                <input type="button" class="previous btn btn-default" value="Previo" onclick="previo()" />
                <div class="formulario__registro">
                    <input class="formulario__submit" type="submit" value="Guardar">
                </div>

            </fieldset>
        </form>

        <!--div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5" id="exampleModalLabel">Actividades</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./controller/consultarActividad.php" method="post" class="formulario__buscar-actividad">
                            <div class="formulario__registro-actividad">
                                <label for="descripcionActividad" class="formulario__label">Descripción Actividad</label>
                                <input name="descripcionActividad" id="descripcionActividad" type="text" class="formulario__campo" required>
                            </div>
                            <div class="formulario__registro-actividad"">
                                <input class="formulario__submit" type="submit" value="Buscar">
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table caption-top">
                                <thead>
                                    <tr>
                                    <th scope="col">ID Clase</th>
                                    <th scope="col">Clase</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Acción</th>
                                    </tr>
                                </thead>



                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div-->
    </main>


    <?php require_once './footer.php' ?>

    

<script type="text/javascript">
/*$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
	});
});*/

let tamanoPantalla = window.innerWidth
const fieldset = document.getElementsByTagName('fieldset')

function siguiente(){

    const objeto = document.getElementById('objeto').value
    const descripcionAlcance = document.getElementById('descripcionAlcance').value
    const moneda = document.getElementById('moneda').value
    const presupuesto = document.getElementById('presupuesto').value
    const actividad = document.getElementById('actividad').value

    /*if(objeto == '' || descripcionAlcance == '' || moneda == '' || presupuesto == '' || actividad == ''){
        console.log('Todos los campos son obligatorios')
        return
    }*/

    if(tamanoPantalla <= 480) {
    fieldset[0].style.display = "none"
    fieldset[1].style.display = "block"
    }else{
        fieldset[0].style.display = "none"
        fieldset[1].style.display = "grid"
    }
}
function previo(){
    if(tamanoPantalla <= 480) {
    fieldset[0].style.display = "block"
    fieldset[1].style.display = "none"
    }else{
        fieldset[0].style.display = "grid"
        fieldset[1].style.display = "none"
    }
}

</script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>