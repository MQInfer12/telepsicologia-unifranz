<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="cuestionario.css">
    <script defer src="navbar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Telepsicologia Unifranz</title>
    <link rel="shortcut icon" href="./imagenes/icon1.ico" type="image/x-icon">
</head>
<body>
    <?php include("sesionPaciente.php") ?>
    <header class="header">
        <div class="container logo-nav">
            <img class="logo" src="imagenes/icon1.png" alt="logoPagina">
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Principal</a></li>
                    <li><a href="cuestionario.php">Cuestionario</a></li>
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
        <h2 class="title">Seleccione una opción</h2>
        <div class="options-div">
            <div class="div-option">
                <div class="img-option">
                    <img src="./imagenes/adulteztemprana.jpg">
                    <div class="text-option text-option1">
                        <div class="grid-text">
                            <h2 class="title-option">Tecnología y conducta</h2>
                            <p class="descrip-option">Escala para medir la influencia  de la tecnología en la conducta en la adultez temprana.</p>
                            <a class="button-option button-option1" href="adultez.php">Ir a consulta</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-option">
                <div class="img-option">
                    <img src="./imagenes/videojuegos.jpg">
                    <div class="text-option text-option2">
                        <div class="grid-text">
                            <h2 class="title-option">Agresividad y videojuegos</h2>
                            <p class="descrip-option">Escala para medir la relación entre el aumento de la agresividad y el uso de los videojuegos.</p>
                            <a class="button-option button-option2" href="videojuegos.php">Ir a consulta</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-option">
                <div class="img-option">
                    <img src="./imagenes/escalawoltik.jpg">
                    <div class="text-option text-option3">
                        <div class="grid-text">
                            <h2 class="title-option">Escala Woltik</h2>
                            <p class="descrip-option">Escala para medir la influencia de TikTok en la vida diaría.</p>
                            <a class="button-option button-option3" href="woltik.php">Ir a consulta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>