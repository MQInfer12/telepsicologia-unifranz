<?php

include('conexion.php');

if(isset($_POST['login']))
{
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $hash = md5($contrasena);

    $consulta = "SELECT * FROM tbl_login WHERE correo='$correo' AND contrasena='$hash'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    if($filas) {
        $fila = mysqli_fetch_row($resultado);
        if($fila[5] == '1') {
            session_start();
            $_SESSION['id'] = $fila[0];
            $_SESSION['correo'] = $fila[1];
            $_SESSION['usuario'] = $fila[2];
            $_SESSION['rol'] = $fila[4];
            header("location: home.php");
        } else {
            ?>
            <script>
                Swal.fire({
                icon: 'error',
                text: 'Tu cuenta no está disponible.',
                })
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            Swal.fire({
            icon: 'error',
            text: 'Error en la autentificación.',
            })
        </script>
        <?php
    }

    mysqli_free_result($resultado);
}

mysqli_close($conexion);