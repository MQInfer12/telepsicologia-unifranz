<?php
    include('conexion.php');

    $id = $_GET['id'];
    $idUser = $_GET['iduser'];
    $tabla = $_GET['tabla'];

    $consulta = "UPDATE $tabla SET revisado = 1 WHERE ID_usuario = '$idUser' AND ID = '$id'";

    if ($conexion->query($consulta) === TRUE) {
        header("Location:revisar.php");
    } else {
        echo "Error updating record: " . $conexion->error;
    }

    mysqli_close($conexion);
?>