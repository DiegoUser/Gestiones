<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1775e8a18.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <div class="main_box">
            <input type="checkbox" id="check">
            <div class="btn_one">
                <label for="check">
                    <i class="fas fa-bars"></i>
                </label>
            </div>
            <div class="sidebar_menu">
                <div class="logo">
                    <a href="./index.php">Gestión</a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <i class="fa-solid fa-qrcode"></i>
                            <a href="./index.php">Inicio</a>
                        </li>
                        <!-- Data -->
                        <div onclick="SetBox('Data')">
                            <li>
                                <i class="fa-solid fa-database"></i>
                                <a href="#">Data</a>
                                <ul id="Data">
                                    <li>
                                        <i class="fa-solid fa-plus"></i>
                                        <a href="./pages/catalogo.php">Añadir</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-minus"></i>
                                        <a href="./pages/FormDEL.php">Quitar</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-right-left"></i>
                                        <a href="./pages/FormMOD.php">Modificar</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <!-- Fin de Data -->
                        <div onclick="SetBox('Consultas')">
                            <li>
                                <i class="fa-solid fa-clipboard-question"></i>
                                <a href="./pages/consultas.php">Consultas</a>
                                <ul id="Consultas">
                                </ul>
                            </li>
                        </div>
                        <li>
                            <i class="fa-solid fa-id-card-clip"></i>
                            <a href="#">Planes</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cuerpo">
                <div class="logo">
                    <img src="./Resources/logo.jpg" width="400" height="">
                </div>
                <div id="textoLogo">
                    <fieldset id="fldINDEX">
                        <legend>Gestión</legend>
                        <h2>Este servicio está pensado para llevar una gestión de los ingresos, egresos y ahorros.
                        </h2>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</body>

</html>