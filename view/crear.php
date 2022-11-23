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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
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
        <div class="creacion__opciones">
            <a href="#" class="creacion__enlace">Infomación básica</a>
            <a href="#" class="creacion__enlace">Cronograma</a>
        </div>
        <h3 class="creacion__titulo">Información básica</h3>

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

        <form action="../controller/insertarProceso.php" method="post" class="formulario">

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
                            buscar
                    </button>
                </div>
                <div class="formulario__registro">
                    <input class="formulario__submit" type="submit" value="Guardar">
                </div>
        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                </div>
    </main>


    <?php require_once './footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>