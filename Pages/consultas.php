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
    <script type="text/javascript">
        window.addEventListener('keydown', function(e) {
            if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
                if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                    e.preventDefault();
                    return false;
                }
            }
        }, true);
    </script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <?php include "../navsidebar.inc" ?>
        <div class="Filtro">
            <fieldset>
                <legend>Egresos Pasados</legend>
                <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <h4>Descripcion:</h4>
                                </td>
                                <td>
                                    <input id="dataDES" type="name" name="DES" />
                                </td>
                            </tr>
                            <tr>
                                <td id="botonesformulario" colspan="2">
                                    <?php
                                    echo "<input type='button' class='bn632-hover bn19' value='Atras' onClick='history.go(-1);'>";
                                    ?>
                                    <input type="button" class="bn632-hover bn19" value="Buscar" onclick="Filtro();" />
                                    <input type="button" class="bn632-hover bn19" value="Cancelar" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </fieldset>
        </div>
        <div class="info">
            <span><strong>Info!</strong> Si desea visualizar todos los registros, deje el filtro vacío</span>
        </div>
    </div>
</body>

</html>