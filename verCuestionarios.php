<?php
    function ver($tabla) {
        include('conexion.php');
        $consulta = "SELECT * FROM $tabla";
        $resultado = $conexion->prepare($consulta);
        $resultado = mysqli_query($conexion, $consulta);
        $filas = mysqli_fetch_all($resultado);
        $total = 0;
        $sobre = 0;
    
        if($filas) {
            foreach ($filas as $fila) {
                if($fila[2] == '0')
                {
                    for($i = 3; $i < count($fila); $i++) {
                        $sobre++;
                        $total = $total + $fila[$i];
                    }
        
                    $idUser = $fila[1];
                    $getUser = "SELECT usuario, correo FROM tbl_login WHERE ID='$idUser'";
                    $resultUser = $conexion->prepare($getUser);
                    $resultUser = mysqli_query($conexion, $getUser);
                    $row = mysqli_fetch_row($resultUser);
                    ?>
                    <tr>
                        <td><?php print_r($row[0]) ?></th>
                        <td class="total"><?php print_r($total) ?><span class="sobre"><?php print_r("/".($sobre*4)) ?></span></td>
                        <td class="mail-btn">
                            <button class="mail-btn" onclick="mostrarModal(<?php print_r($fila[0]) ?>, <?php print_r($idUser) ?>,'<?php print_r($tabla) ?>', '<?php print_r($row[1]) ?>', <?php print_r($total) ?>)"> 
                                <i class="icon fa-solid fa-envelope"></i>
                            </button>
                        </td>
                        <td class="mail-btn">
                            <a href="reporte.php?id=<?php print_r($fila[0]) ?>&tabla=<?php print_r($tabla) ?>"><i class="icon fa-solid fa-eye"></i></a>
                        </td>
                    </tr><?php

                    $total = 0;
                    $sobre = 0;
                }
            }
        }
    }
?>