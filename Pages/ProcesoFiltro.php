<?php
// Valores con PHP. Estos podrían venir de una base de datos o de cualquier lugar del servidor
$etiquetas = ["Enero", "Febrero", "Marzo", "Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
$datosVentas = ["SELECT importeGastos FROM gestion"];
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
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1775e8a18.js" crossorigin="anonymous"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <!-- SECCION CONTENIDO -->
    <div class="contenedor">
        <?php include "../navsidebar.inc" ?>
        <div class="Filtro">
            <fieldset>
                <legend>Consultas</legend>
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
                                <td class="botonesformulario" colspan="2">
                                    <fieldset>
                                        <legend>
                                            <h6>Tipo de consulta</h6>
                                        </legend>
                                        <group class="inline-radio">
                                            <div><input type="radio" class="opciones" name="options" value="Ingreso" checked><label>Ingreso</label></div>
                                            <div><input type="radio" class="opciones" name="options" value="Egreso"><label>Egreso</label></div>
                                            <div><input type="radio" class="opciones" name="options" value="Ahorro"><label>Ahorro</label></div>
                                        </group>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td class="botonesformulario" colspan="2">
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
        <div id="Filtrado">
            <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                <table id="TablaConsultas">
                    <?php
                    isset($_POST['options']) ? $options =
                        $_POST['options'] : $options =
                        $_GET['options'];
                    // determinar filtro del listado
                    if (isset($_POST["DES"])) {
                        // asignar filtro especificado en el formulario
                        $descripcion = $_POST["DES"];
                    } else {
                        // asignar filtro desde el listado
                        $descripcion = $_GET["DES"];
                    }

                    // determinar orden del listado
                    if (isset($_GET["ORD"])) {
                        // obtener orden especificado
                        $orden = $_GET["ORD"];
                    } else {
                        // establecer orden por defecto
                        $orden = "idGastos";
                    }

                    // determinar filtro
                    echo "<thead>
                <tr>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=idGastos&DES=$descripcion&options=$options'>ID</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=descripcionGastos&DES=$descripcion&options=$options'>Descripcion</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=importeGastos&DES=$descripcion&options=$options'>Importe</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=fechaGastos&DES=$descripcion&options=$options'>Fecha</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=tipoGastos&DES=$descripcion&options=$options'>Tipo</a>
                    </th>
                </tr>
                </thead>
                ";
                    if (empty($descripcion)) {
                        include "../conexion.inc";
                        $sql = "SELECT * FROM gestion WHERE tipoGastos LIKE '%$options%' ORDER BY $orden";
                        $result = mysqli_query($conex, $sql);
                        include_once "ConsultaTabla.php";
                    }

                    if (!empty($descripcion)) {
                        include "../conexion.inc";
                        $sql = "SELECT * FROM gestion WHERE descripcionGastos LIKE '%$descripcion%' AND tipoGastos LIKE '%$options%' ORDER BY $orden";
                        $result = mysqli_query($conex, $sql);
                        if (mysqli_num_rows($result) == 0) {
                    ?>
                            <td>No</td>
                            <td>Existe</td>
                            <td>Registro</td>
                    <?php
                            $total = 0;
                            mysqli_close($conex);
                        } else {
                            include_once "ConsultaTabla.php";
                            include_once "../div.inc";
                        }
                    }
                    ?>
            </form>
        </div>
        <canvas id="grafica"></canvas>
        <script type="text/javascript">
            // Obtener una referencia al elemento canvas del DOM
            const $grafica = document.querySelector("#grafica");
            // Las etiquetas son las que van en el eje X. 
            const etiquetas = <?php echo json_encode($etiquetas) ?>;
            // Podemos tener varios conjuntos de datos

            const datosIngreso2022 = {
                label: "Ingresos por mes - 2022",
                data:<?php echo json_encode($datosVentas) ?>, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(211,93,110, 0.2)', // Color de fondo
                borderColor: 'rgba(211,93,110, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };
            const datosEgreso2022= {
                label: "Egresos por mes - 2022",
                data: <?php echo json_encode($datosVentas) ?>, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(209,234,163,0.5)', // Color de fondo
                borderColor: 'rgba(209,234,163,1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };
            const datosAhorro2022 = {
                label: "Ahorros por mes - 2022",
                data:<?php echo json_encode($datosVentas) ?>, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };

            new Chart($grafica, {
                type: 'line', // Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosIngreso2022,
                        datosEgreso2022,
                        datosAhorro2022,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
        </script>
    </div>
</body>

</html>