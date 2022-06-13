<?php
include "../conexion.inc";
// capturar datos del formulario
$descripcion = utf8_decode($_POST["DES"]);
$importe     = $_POST["IMP"];
$fecha       = $_POST["FEC"];
$tipo        = $_POST["Añadir"];

//definir tipo
if ($tipo=1||$tipo=2) {
    // crear sentencia SQL
    $sql  = "INSERT INTO gestion ";
    $sql .= "(idGastos,descripcionGastos,importeGastos,fechaGastos,tipoGastos) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$importe','$fecha','Ingreso')";

// depurar SQL
// die($sql);
// ejecutar sentencia SQL
mysqli_query($conex, $sql);
// cerrar conexión
mysqli_close($conex);
// volver al forumulario automáticamente
header("Location: catalogo.php");
}elseif ($tipo=3||$tipo=4) {
    // crear sentencia SQL
    $sql  = "INSERT INTO gestion ";
    $sql .= "(idGastos,descripcionGastos,importeGastos,fechaGastos,tipoGastos) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$importe','$fecha','Egreso')";

// depurar SQL
// die($sql);
// ejecutar sentencia SQL
mysqli_query($conex, $sql);
// cerrar conexión
mysqli_close($conex);
// volver al forumulario automáticamente
header("Location: catalogo.php");
}elseif ($tipo=5) {
    // crear sentencia SQL
    $sql  = "INSERT INTO gestion ";
    $sql .= "(idGastos,descripcionGastos,importeGastos,fechaGastos,tipoGastos) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$importe','$fecha','Ahorro')";

// depurar SQL
// die($sql);
// ejecutar sentencia SQL
mysqli_query($conex, $sql);
// cerrar conexión
mysqli_close($conex);
// volver al forumulario automáticamente
header("Location: catalogo.php");
}

