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
            <fieldset id="fldFRM">
                <legend>Añadir</legend>
                <form id="dataFRM" action="ProcesoINS.php" method="POST">
                    <table id="tablaFRM">
                        <tr>
                            <td>
                                <h4>Descripción:</h4>
                            </td>
                            <td>
                                <input id="dataDES" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="DES" maxlenght="50" title="Máximo 50 carácteres" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Tipo:</h4>
                            </td>
                            <td>
                                <select name="Agregar">
                                    <option selected value="0"> Elige una opción </option>
                                    <optgroup label="Ingreso">
                                        <option value="1">Ingreso Fijo</option>
                                        <option value="2">Otro Ingreso</option>
                                    </optgroup>
                                    <optgroup label="Egreso">
                                        <option value="3">Egreso Fijo</option>
                                        <option value="4">Otro Egreso</option>
                                    </optgroup>
                                    <optgroup label="Ahorro">
                                        <option value="5">Ahorro</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Importe:</h4>
                            </td>
                            <td>
                                <input id="dataIMP" type="text" name="IMP" maxlenght="10" title="Máximo 10 carácteres" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Fecha:</h4>
                            </td>
                            <td>
                                <input id="dataFEC" type="date" name="FEC" />
                            </td>
                        </tr>
                        <tr>
                            <td id="botonesformulario" colspan="2">
                                <?php
                                echo "<input type='button' class='bn632-hover bn19' value='Atras' onClick='history.go(-1);'>";
                                ?>
                                <input type="button" class="bn632-hover bn19" value="Confirmar" onclick="CheckForm('Insertar');" />
                                <input type="button" class="bn632-hover bn19" value="Cancelar" />
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