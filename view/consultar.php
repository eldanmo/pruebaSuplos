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
    
</head>
<body>
    <header class="header">

    <div class="navegacion">

        <?php require_once './nav.php' ?>
        
    </div>

    </header>

    <main class="creacion contenedor">

        <h2>Procesos / Eventos participación cerrada</h2>

        <p>Busqueda</p>

        <form class="formulario" id="formularioBuscar">  
            <div class="formulario__busqueda">
                <label for="id" class="formulario__label">Id Cerrada</label>
                <input name="id" id="id" type="number" class="formulario__campo" placeholder="Número de id Procesos / Eventos" >
            </div>
            <div class="formulario__busqueda">
                <label for="objeto" class="formulario__label">Objeto / Descripción</label>
                <input name="objeto" id="objeto" type="text" class="formulario__campo" placeholder="Objeto / Descripción" >
            </div>
            <div class="formulario__busqueda">
                <label for="comprador" class="formulario__label">Comprador</label>
                <input name="comprador" id="comprador" type="text" class="formulario__campo" placeholder="Responsable Evento" >
            </div>
            <div class="formulario__busqueda">
                <label for="estado" class="formulario__label">Estado</label>
                <select name="estado" id="estado">
                    <option value="">TODOS</option>
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="PUBLICADO">PUBLICADO</option>
                    <option value="EVALUACION">EVALUACIÓN</option>
                </select>
            </div>
            <div class="formulario__busqueda">
                <input class="formulario__submit" type="submit" value="Buscar">
            </div>

            <div id="respuesta" class="formulario__busqueda">
            </div>

            <div class="tabla">
                <table id="tabla">
                </table>
            </div>
        </form>

    </main>


    <?php require_once './footer.php' ?>

<script src="../js/busqueda.js"></script>
   
</body>
</html>