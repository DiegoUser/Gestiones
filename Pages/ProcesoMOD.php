<?php
    include "../conexion.inc";
    $id          = $_POST["ID"];
    $descripcion = utf8_decode($_POST["DES"]);
    $importe      = $_POST["IMP"];
    $fecha      = $_POST["FEC"];
    // crear sentencia SQL para actualizar
    $sql  = "UPDATE gestion SET ";
    $sql .= "descripcionGastos='$descripcion',";
    $sql .= "importeGastos='$importe',";
    $sql .= "fechaGastos='$fecha'";
    $sql .= "WHERE idGastos=$id";                
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: FormMOD.php");
?>
    