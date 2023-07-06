<?php
    include('conexion.php');

    $id_usuario = $_SESSION['id'];

    if(isset($_POST['enviarC1'])) {
        $p1 = $_POST['1p1'];
        $p2 = $_POST['1p2'];
        $p3 = $_POST['1p3'];
        $p4 = $_POST['1p4'];
        $p5 = $_POST['1p5'];
        $p6 = $_POST['1p6'];
        $p7 = $_POST['1p7'];
        $p8 = $_POST['1p8'];
        $p9 = $_POST['1p9'];
        $p10 = $_POST['1p10'];

        $consulta = "INSERT INTO vida_diaria_y_tecnologia(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./adultez.php";
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
    }

    if(isset($_POST['enviarC2'])) {
        $p1 = $_POST['2p1'];
        $p2 = $_POST['2p2'];
        $p3 = $_POST['2p3'];
        $p4 = $_POST['2p4'];
        $p5 = $_POST['2p5'];
        $p6 = $_POST['2p6'];
        $p7 = $_POST['2p7'];
        $p8 = $_POST['2p8'];
        $p9 = $_POST['2p9'];
        $p10 = $_POST['2p10'];
        $p11 = $_POST['2p11'];
        $p12 = $_POST['2p12'];

        $consulta = "INSERT INTO bienestar_emocional_y_tecnologia(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./adultez.php";
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
    }

    if(isset($_POST['enviarC3'])) {
        $p1 = $_POST['3p1'];
        $p2 = $_POST['3p2'];
        $p3 = $_POST['3p3'];
        $p4 = $_POST['3p4'];
        $p5 = $_POST['3p5'];
        $p6 = $_POST['3p6'];
        $p7 = $_POST['3p7'];
        $p8 = $_POST['3p8'];
        $p9 = $_POST['3p9'];
        $p10 = $_POST['3p10'];
        $p11 = $_POST['3p11'];
        $p12 = $_POST['3p12'];
        $p13 = $_POST['3p13'];

        $consulta = "INSERT INTO relaciones_sociales_y_tecnologia(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./adultez.php";
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
    }

    if(isset($_POST['enviarC4'])) {
        $p1 = $_POST['4p1'];
        $p2 = $_POST['4p2'];
        $p3 = $_POST['4p3'];
        $p4 = $_POST['4p4'];
        $p5 = $_POST['4p5'];
        $p6 = $_POST['4p6'];
        $p7 = $_POST['4p7'];

        $consulta = "INSERT INTO videojuegos_y_tecnologia(ID_usuario, p1, p2, p3, p4, p5, p6, p7) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./adultez.php";
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
    }

    if(isset($_POST['enviarC5'])) {
        $p1 = $_POST['5p1'];
        $p2 = $_POST['5p2'];
        $p3 = $_POST['5p3'];
        $p4 = $_POST['5p4'];
        $p5 = $_POST['5p5'];
        $p6 = $_POST['5p6'];
        $p7 = $_POST['5p7'];
        $p8 = $_POST['5p8'];
        $p9 = $_POST['5p9'];
        $p10 = $_POST['5p10'];
        $p11 = $_POST['5p11'];
        $p12 = $_POST['5p12'];
        $p13 = $_POST['5p13'];
        $p14 = $_POST['5p14'];
        $p15 = $_POST['5p15'];

        $consulta = "INSERT INTO conducta_y_tecnologia(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./adultez.php";
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
    }

    if(isset($_POST['enviarC6'])) {
        $p1 = $_POST['6p1'];
        $p2 = $_POST['6p2'];
        $p3 = $_POST['6p3'];
        $p4 = $_POST['6p4'];
        $p5 = $_POST['6p4'];
        $p6 = $_POST['6p5'];
        $p6 = $_POST['6p6'];
        $p7 = $_POST['6p7'];
        $p8 = $_POST['6p8'];
        $p9 = $_POST['6p9'];
        $p10 = $_POST['6p10'];
        $p11 = $_POST['6p11'];
        $p12 = $_POST['6p12'];
        $p13 = $_POST['6p13'];
        $p14 = $_POST['6p14'];
        $p15 = $_POST['6p15'];
        $p16 = $_POST['6p16'];
        $p17 = $_POST['6p17'];
        $p18 = $_POST['6p18'];
        $p19 = $_POST['6p19'];
        $p20 = $_POST['6p20'];

        $consulta = "INSERT INTO las_redes_sociales(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./adultez.php";
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
    }
?>