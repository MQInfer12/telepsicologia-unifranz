<?php

include('conexion.php');

$id = $_GET['id'];
$validar = $_GET['validar'];

$consulta = "UPDATE tbl_login SET validar = '$validar' WHERE ID = '$id'";

if ($conexion->query($consulta) === TRUE) {
    header("Location:administrar.php");
} else {
    echo "Error updating record: " . $conexion->error;
}

mysqli_close($conexion);

?>