<?php
    include "../conexion.inc";
    // capturar datos del formulario
    $id = $_POST["ID"];
    // crear sentencia SQL para eliminar registro físicamente
    $sql  = "DELETE FROM gestion WHERE idGastos =$id ";
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: FormDEL.php");
?>