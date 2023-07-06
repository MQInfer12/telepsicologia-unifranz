<?php

include('conexion.php');

$id = $_GET['id'];

$consulta = "DELETE FROM tbl_login WHERE ID='$id'";

?> 
<script>
    Swal.fire({
    icon: 'warning',
    title: '',
    text: '¿Estas seguro de eliminar este usuario?',
    }).then(function() {
        <?php
            if ($conexion->query($consulta) === TRUE) {
                header("location: administrar.php");
            } else {
                echo "Error deleting record: " . $conexion->error;
            }
        ?>
    })
</script>
<?php

mysqli_close($conexion);

?>