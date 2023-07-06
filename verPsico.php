<?php

include('conexion.php');

$consulta = "SELECT * FROM tbl_login";

if(isset($_POST['buscar'])) {
    $rol = $_POST['rol'];
    $busqueda = $_POST['busqueda'];

    if($rol == "") {
        $consulta = "SELECT * FROM tbl_login WHERE usuario LIKE '%$busqueda%'";
    } else {
        $consulta = "SELECT * FROM tbl_login WHERE rol = '$rol' AND usuario LIKE '%$busqueda%'";
    }
}

$resultado = $conexion->prepare($consulta);
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_all($resultado);

if($filas) {
    foreach ($filas as $fila) {
        ?>
        <tr>
            <th class="table-title"><?php print_r($fila[0]) ?></th>
            <td class="table-text"><?php print_r($fila[1]) ?></td>
            <td class="table-text"><?php print_r($fila[2]) ?></td>
            <td class="table-text"><?php print_r($fila[4]) ?></td>
            <?php
            if($fila[5] == '0') {
                ?>
                <td class="table-text inactive">Inactivo</td>
                <?php 
                if($fila[4] != 'admin') {
                    ?><td class="icon-btn activate"><a href="activatePsico.php?id=<?php print_r($fila[0]) ?>&validar=1"><i class="icon fa-solid fa-check"></i></a></td><?php
                } else {
                    ?><td class="icon-btn activate admin-btn"><a href="activatePsico.php?id=<?php print_r($fila[0]) ?>&validar=1"><i class="icon fa-solid fa-check"></i></a></td><?php
                }
            } else if ($fila[5] == '1') {
                ?>
                <td class="table-text active">Activo</td>
                <?php 
                if($fila[4] != 'admin') {
                    ?><td class="icon-btn activate"><a href="activatePsico.php?id=<?php print_r($fila[0]) ?>&validar=0"><i class="icon fa-solid fa-x"></i></a></td><?php
                } else {
                    ?><td class="icon-btn activate admin-btn"><a href="activatePsico.php?id=<?php print_r($fila[0]) ?>&validar=0"><i class="icon fa-solid fa-x"></i></a></td></td><?php
                }
            }

            if($fila[4] != 'admin')
            {
                ?><td class="icon-btn trash"><a href="deletePsico.php?id=<?php print_r($fila[0]) ?>"><i class="icon fa-solid fa-trash-can"></i></a></td><?php
            } else {
                ?><td class="icon-btn trash admin-btn"><a href="deletePsico.php?id=<?php print_r($fila[0]) ?>"><i class="icon fa-solid fa-trash-can"></i></a></td><?php
            }
            ?> 
        </tr>
        <?php
    }
}

mysqli_free_result($resultado);

mysqli_close($conexion);

?>