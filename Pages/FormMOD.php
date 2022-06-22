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
    <script src="https://kit.fontawesome.com/a1775e8a18.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <?php include "../navsidebar.inc" ?>
        <div class="cuerpoCatalogo">
            <div id="contenido">
                <fieldset id="fldFRM">
                    <legend>Modificar</legend>
                    <form id="dataFRM" action="ProcesoConfirmMOD.php" method="POST">
                        <table id="tablaFRM">
                            <tr>
                                <td>
                                    <h4>ID:</h4>
                                </td>
                                <td>
                                    <input id="dataID" type="text" name="ID" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Descripción:</h4>
                                </td>
                                <td>
                                    <input id="dataDES" type="text" name="DES" disabled="true" title="deshabilitado" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4> Importe:</h4>
                                </td>
                                <td>
                                    <input id="dataIMP" type="text" name="IMP" disabled="true" title="deshabilitado" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4> Fecha:</h4>
                                </td>
                                <td>
                                    <input id="dataFEC" type="date" name="FEC" disabled="true" title="deshabilitado" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td id="botonesformulario" colspan="2">
                                    <?php
                                    echo "<input type='button' class='bn632-hover bn19' value='Atras' onClick='history.go(-1);'>";
                                    ?>
                                    <input type="button" class="bn632-hover bn19" value="Confirmar" onclick="CheckID();" />
                                    <input type="button" class="bn632-hover bn19" value="Cancelar" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
</body>

</html>