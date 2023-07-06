<?php

include('conexion.php');

if(isset($_POST['register'])) {

    $consulta = "SELECT * FROM tbl_login";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_all($resultado);

    if($filas) {
        foreach($filas as $fila) {
            if($_POST['correo'] == $fila[1]) {
                ?>
                <script>
                    Swal.fire({
                    icon: 'error',
                    text: 'Ya existe una cuenta con este correo.',
                    })
                </script>
                <?php
                return;
            }
        }
    }

    if($_POST['contrasena'] == $_POST['ccontrasena']) {
        if(strlen($_POST['correo']) >= 1 && strlen($_POST['usuario']) >= 1) {
            if(strlen($_POST['contrasena']) >= 8) {
                $correo = $_POST['correo'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];
    
                $hash = md5($contrasena);
    
                $consulta = "INSERT INTO tbl_login (correo, usuario, contrasena, rol, validar) VALUES ('$correo', '$usuario' , '$hash', 'paciente', '1')";
                $resultado = mysqli_query($conexion, $consulta);
                if($resultado) {
                    ?>
                    <script>
                        Swal.fire({
                        icon: 'success',
                        text: 'Registrado correctamente.',
                        })
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        Swal.fire({
                        icon: 'error',
                        text: '¡Ups! Algo salió mal.',
                        })
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    Swal.fire({
                    icon: 'error',
                    text: 'La contraseña debe tener mínimo 8 carácteres.',
                    })
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                Swal.fire({
                icon: 'error',
                text: 'Por favor, llene todos los campos.',
                })
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            Swal.fire({
            icon: 'error',
            text: 'Las contraseñas deben ser iguales.',
            })
        </script>
        <?php
    }
}

mysqli_close($conexion);
?>