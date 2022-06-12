<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <!-- SECCION CONTENIDO -->
    <div class="contenedor">
        <fieldset class="errorField">
            <legend>E R R O R</legend>
            <?php
            // capturar mensaje de error
            $mensaje = $_GET["MSG"];
            echo "<h5>A T E N C I O N </br> $mensaje</h5>\n";
            ?>
        </fieldset>
        <div id="BotonError">
            <input type="button" class="bn632-hover bn19" value="Volver al Inicio" onclick="window.location.href='catalogo.php'"/>
        </div>
        <?php
        header("refresh:3 url=catalogo.php");
        ?>
    </div>
</body>

</html>