<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="info.css">
    <link rel="stylesheet" href="footer.css">
    <script defer src="navbar.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/db678f56b4.js" crossorigin="anonymous"></script>
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
                    <li><a href="info.php">Información</a></li>
                    <li><a href="login.php">Iniciar sesión</a></li>
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
        <div class="fondo">
            <div class="fondo-text">
                <h2>Acerca de la página</h2>
                <p>Creamos <span>Telepsicología Tecnológica Unifranz</span> para ayudar a las personas a medir la influencia de la tecnología en sus vidas.</p>
            </div>
        </div>
        <div class="info1">
            <div>
                <h3>Ingresa</h3>
                <p>Regístrate para realizar cuestionarios que podrán ser respondidos por nuestros psicólogos.</p>
            </div>
            <div>
                <h3>Elije</h3>
                <p>Selecciona cualquiera de nuestros formularios de diferentes temáticas.</p>
            </div>
            <div>
                <h3>Responde</h3>
                <p>Sé sincero con tu respuesta para obtener un mejor diagnóstico.</p>
            </div>
        </div>
    </section>
    <section class="second">
        <div>
            <h3>Planteamiento</h3>
            <p>La mayoría de las personas están empezando a tener una dependencia hacía la tecnología ya sea computadoras o aparatos móviles.
            el mundo actual está viviendo una necesidad de permanecer conectado a internet, lo que afecta a la conducta de las personas
            de manera directa o indirecta y paulatinamente.</p>
        </div>
        <div>
            <h3>Problema</h3>
            <p>La tecnología y las redes sociales necesitan de un manejo adecuado, de lo contrario puede llevar a cambiar ciertos aspectos
            psicológicos de las personas, reflejando estrés e incluso comportamientos de molestia y agresión que serán reflejados en las respuestas
            de los formularios.</p>
        </div>
        <div>
            <h3>Objetivo</h3>
            <p>Generar un sistema web con las características necesarias para responder y diagnósticar usuarios con dudas acerca de su conducta
            respecto a la tecnología en general y especificamente redes sociales o videojuegos.</p>
        </div>
    </section>
    <section class="third">
        <div class="register-psico">
            <h3>¿Trabajas con nosotros?</h3>
            <p>Ayuda a revisar los formularios de nuestros usuarios.</p>
            <a class="btn-register" href="register_psico.php">¡Regístrate como psicólogo!</a>
        </div>
        <div class="fondo2">

        </div>
    </section>
    <footer class="footer">
        <div class="design"><p>Supported by <span>Unifranz</span></p></div>
        <div class="unifranz-social">
                <a href="https://www.facebook.com/UnifranzCbbaOficial"><i class="social fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/unifranz/"><i class="social fa-brands fa-instagram"></i></a>
                <a href="https://vm.tiktok.com/ZMN8P36Vc/"><i class="social fa-brands fa-tiktok"></i></a>
                <a href="https://twitter.com/UnifranzBolivia"><i class="social fa-brands fa-twitter"></i></a>
            </div>
        <div class="design"><p>Ingeniería de Sistemas</p></div>
        <div class="design"><p>Psicología</p></div>
        <div class="design"><p>Publicidad y Marketing</p></div>
        <div class="design"><p>Designed by <span>Las Alpacas Community</span></p></div>
    </footer>
</body>
</html>