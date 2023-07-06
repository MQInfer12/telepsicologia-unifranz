<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Telepsicologia Unifranz</title>
    <link rel="shortcut icon" href="./imagenes/icon1.ico" type="image/x-icon">
</head>
<body>
    <?php include("sesionStart.php") ?>
    <header class="header">
        <div class="container logo-nav">
            <img class="logo" src="imagenes/icon1.png" alt="logoPagina">
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Información</a></li>
                    <li><a href="login.php">Iniciar sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>
   <section class="section1"></section>
   <img class="unifranz-logo" src="logo.png">
    <div class="container-form"> 
       <div class="container-soon">
            <form method="post">
                <h1 class="title">REGISTRARSE COMO PSICÓLOGO</h1>
                <p class="form-text">Correo:</p>
                <input class="form-input" type="email" placeholder="Ingrese su correo" name="correo">
                <p class="form-text">Usuario:</p>
                <input class="form-input" type="text" placeholder="Ingrese su nombre de usuario" name="usuario">
                <p class="form-text">Contraseña:</p>
                <input class="form-input" type="password" placeholder="Ingrese su contraseña" name="contrasena">
                <p class="form-text">Confirmar contraseña:</p>
                <input class="form-input" type="password" placeholder="Ingrese su contraseña de nuevo" name="ccontrasena">
                </br>
                <input class="form-button" type="submit" value="Registrar" name="register">
                <p class="form-register">¿Ya tiene una cuenta? <a href="login.php">Inicia sesión</a></p>
            </form>
            <?php
                include("validar_psico.php");
            ?>
       </div>
    </div>
</body>
</html>