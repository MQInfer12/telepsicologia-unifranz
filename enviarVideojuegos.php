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
        $p11 = $_POST['1p11'];
        $p12 = $_POST['1p12'];
        $p13 = $_POST['1p13'];
        $p14 = $_POST['1p14'];
        $p15 = $_POST['1p15'];
        $p16 = $_POST['1p16'];
        $p17 = $_POST['1p17'];
        $p18 = $_POST['1p18'];
        $p19 = $_POST['1p19'];
        $p20 = $_POST['1p20'];
        $p21 = $_POST['1p21'];
        $p22 = $_POST['1p22'];
        $p23 = $_POST['1p23'];
        $p24 = $_POST['1p24'];
        $p25 = $_POST['1p25'];
        $p25 = $_POST['1p26'];

        $consulta = "INSERT INTO videojuegos_y_estabilidad_emocional(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./videojuegos.php";
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

        $consulta = "INSERT INTO videojuegos_y_frustracion(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11) VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./videojuegos.php";
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
        $p14 = $_POST['3p14'];
        $p15 = $_POST['3p15'];
        $p16 = $_POST['3p16'];

        $consulta = "INSERT INTO videojuegos_y_agresividad_directa(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16) 
                     VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./videojuegos.php";
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
        $p8 = $_POST['4p8'];
        $p9 = $_POST['4p9'];
        $p10 = $_POST['4p10'];
        $p11 = $_POST['4p11'];
        $p12 = $_POST['4p12'];
        $p13 = $_POST['4p13'];

        $consulta = "INSERT INTO videojuegos_y_agresividad_indirecta(ID_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13) 
                     VALUES ('$id_usuario', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: '',
                text: 'Enviado correctamente.',
                }).then(function() {
                    window.location = "./videojuegos.php";
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