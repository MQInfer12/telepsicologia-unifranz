<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="administrar.css">
    <script defer src="navbar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db678f56b4.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Telepsicologia Unifranz</title>
    <link rel="shortcut icon" href="./imagenes/icon1.ico" type="image/x-icon">
</head>
<body>
    <?php include("sesionAdmin.php") ?>
    <header class="header">
        <div class="container logo-nav">
            <img class="logo" src="imagenes/icon1.png" alt="logoPagina">
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Principal</a></li>
                    <?php 
                    if($_SESSION['rol'] == 'paciente') {
                        ?> <li><a href="cuestionario.php">Cuestionario</a></li> <?php
                    } else if ($_SESSION['rol'] == 'psicologo') {
                        ?> <li><a href="revisar.php">Revisar</a></li> <?php
                    } else if ($_SESSION['rol'] == 'admin') {
                        ?> <li><a href="administrar.php">Administrar</a></li> <?php
                    }
                    ?>
                    <li><a href="logout.php">Cerrar sesión</a></li>
                </ul>
            </nav>
            <div class="menu-barra">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </div>
        </div>
    </header>
    <section class="first-section">
        <form id="search" class="search" method="post">
            <input class="search-input" type="text" name="busqueda" placeholder="Búsqueda por Usuario">
            <select class="search-select" name="rol" form="search">
                <option selected value="">Cualquiera</option>
                <option value="admin">Administrador</option>
                <option value="psicologo">Psicólogo</option>
                <option value="paciente">Paciente</option>
            </select>
            <input class="search-btn" type="submit" value="Buscar" name="buscar">
        </form>
        <table class="table-psico">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th class="correo">Correo</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Validado</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <?php 
                    include('verPsico.php');
                    ?>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>