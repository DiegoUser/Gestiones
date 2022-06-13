<?php
include "../conexion.inc";
// capturar datos del formulario (ID)
$id = $_POST["ID"];
// crear sentencia SQL para buscar ID
$sql = "SELECT * FROM gestion WHERE idGastos = $id";
// ejecutar sentencia
$result = mysqli_query($conex, $sql);
// controlar existencia
if (mysqli_num_rows($result) == 0) {
    // enviar mensaje de error
    die(header("Location: errorPage.php?MSG=El ID no existe" . mysqli_connect_error()));
} else {
    // cargar registro
    $regGastos    = mysqli_fetch_array($result);
    // cargar y convertir datos
    $id          = $regGastos["idGastos"];
    $descripcion = utf8_encode($regGastos["descripcionGastos"]);
    $importe      = utf8_encode($regGastos["importeGastos"]);
    $fecha      = $regGastos["fechaGastos"];
}
// cerrar conexión
mysqli_close($conex);
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <?php include "../navsidebar.inc" ?>
    <div class="cuerpoCatalogo">
        <fieldset id="fldFRM">
            <legend>Quitar</legend>
            <form id="dataFRM" action="ProcesoDEL.php" method="POST">
                <table id="tablaFRM">
                    <tr>
                        <td>
                            <h4>ID:</h4>
                        </td>
                        <td>
                            <input id="dataID" type="text" name="ID" <?php
                                                                        echo "value='$id'";
                                                                        ?> readonly="true" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Descripción:</h4>
                        </td>
                        <td>
                            <input id="dataDES" type="text" name="DES" disabled="true" <?php
                                                                                        echo "value='$descripcion'";
                                                                                        ?> />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Importe:</h4>
                        </td>
                        <td>
                            <input id="dataIMP" type="text" name="IMP" disabled="true" <?php
                                                                                        echo "value='$importe'";
                                                                                        ?> />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4> Fecha:</h4>
                        </td>
                        <td>
                            <input id="dataFEC" type="date" name="FEC" disabled="true" <?php
                                                                                        echo "value='$fecha'";
                                                                                        ?> />
                        </td>
                    </tr>
                    <!--BOTONES DEL FORMULARIO-->
                    <tr>
                        <td id="botonesformulario" colspan="2">
                            <?php
                            echo "<input type='button' class='bn632-hover bn19' value='Atras' onClick='history.go(-1);'>";
                            ?>
                            <input type="button" class="bn632-hover bn19" value="Quitar" onclick="CheckForm('Eliminar');" />
                            <input type="button" class="bn632-hover bn19" value="Cancelar" onclick="SetPage('FormDEL.php');" />
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    </div>
    </div>
</body>

</html>