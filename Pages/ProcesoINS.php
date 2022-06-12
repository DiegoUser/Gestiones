<?php
    include "../conexion.inc";
    // capturar datos del formulario
    $descripcion = utf8_decode($_POST["DES"]);
    $importe      = $_POST["IMP"];
    $fecha      = $_POST["FEC"];
    // crear sentencia SQL
    $sql  = "INSERT INTO gestion ";
    $sql .= "(idGastos,descripcionGastos,importeGastos,fechaGastos) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$importe','$fecha')";
    // depurar SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: catalogo.php");
