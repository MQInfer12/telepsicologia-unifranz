<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="home.css">
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
    <?php include("sesion.php") ?>
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
        <div class="column1">
            <div class="c1-text">
                <h2>¡Bienvenido <?php print_r($_SESSION['usuario']) ?>!</h2>
                <p>Consigue diagnósticos según tu experiencia en la tecnología actual.</p>
            </div>
        </div>
        <div class="column2">
            <div>
                <h3>Consigue información de acerca de tu persona</h3>
                <p>En las diferentes áreas:</h4>
            </div>
            <ul>
                <li>
                    <h4>Tecnología y Conducta</h4>
                    <p>¿Cambió tu conducta al usar la tecnología?</p>
                </li>
                <li>
                    <h4>Agresividad en videojuegos</h4>
                    <p>¿Te vuelve más agresivo jugar videojuegos?</p>
                </li>
                <li>
                    <h4>Escala Woltik</h4>
                    <p>¿Tu forma de ser es afectada por el uso del TikTok?</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="second">
        <div class="row2">
            <div class="col2">
                <div>
                    <i class="icon fa-solid fa-brain"></i>
                    <h3>Descubrete a ti mismo.</h3>
                    <p>Ingresa al cuestionario de redes sociales para aprender más acerca de tu persona.</p>
                </div>
                <?php 
                if($_SESSION['rol'] == 'paciente') {
                    ?><a class="btn-ir" href="adultez.php">IR AL CUESTIONARIO</a><?php
                } 
                ?>
            </div>
            <div class="col2">
                <div>
                    <i class="icon fa-solid fa-gamepad"></i>
                    <h3>Tu forma de jugar</h3>
                    <p>Realiza las preguntas acerca de los videojuegos y danos a conocer tu hobbie.</p>
                </div>
                <?php 
                if($_SESSION['rol'] == 'paciente') {
                    ?><a class="btn-ir" href="videojuegos.php">IR AL CUESTIONARIO</a><?php
                } 
                ?>
            </div>
            <div class="col2">
                <div>
                    <i class="icon fa-solid fa-hourglass"></i>
                    <h3>Conoce tus pasatiempos.</h3>
                    <p>Descubre si empleas mucho tiempo en alguna actividad tecnológica.</p>
                </div>
                <?php 
                if($_SESSION['rol'] == 'paciente') {
                    ?><a class="btn-ir" href="videojuegos.php">IR AL CUESTIONARIO</a><?php
                } 
                ?>
            </div>
        </div>
        <div class="row2">
            <div class="col2">
                <div>
                    <i class="icon fa-solid fa-magnifying-glass"></i>
                    <h3>Descubre tu identidad</h3>
                    <p>Investiga acerca de tu personalidad usando la tecnología a tu favor.</p>
                </div>
                <?php 
                if($_SESSION['rol'] == 'paciente') {
                    ?><a class="btn-ir" href="adultez.php">IR AL CUESTIONARIO</a><?php
                } 
                ?>
            </div>
            <div class="col2">
                <div>
                    <i class="icon fa-solid fa-dice"></i>
                    <h3>Tu propia casualidad</h3>
                    <p>Date un paseo por tu propia persona realizando los quizes.</p>
                </div>
                <?php 
                if($_SESSION['rol'] == 'paciente') {
                    ?><a class="btn-ir" href="adultez.php">IR AL CUESTIONARIO</a><?php
                } 
                ?>
            </div>
            <div class="col2">
                <div>
                    <i class="icon fa-brands fa-tiktok"></i>
                    <h3>Tus propias recomendaciones</h3>
                    <p>Cuentanos tu forma de ser según a lo que navegas en TikTok.</p>
                </div>
                <?php 
                if($_SESSION['rol'] == 'paciente') {
                    ?><a class="btn-ir" href="woltik.php">IR AL CUESTIONARIO</a><?php
                } 
                ?>
            </div>
        </div>
    </section>
    <section class="third">
          <div class="parrafo-thrid">
              <div class="notas n1">
                <i class="fa fa-paperclip"></i>
                <p>Ingresa a los formularios para dar a conocer a los psicólogos tu situación actual.</p>
                <hr>
              </div>
              <div class="notas n2">
                <i class="fa fa-paperclip"></i>
                <p>Realiza la encuesta que más te guste o que más te llame la atención.</p>
                <hr>
              </div>
              <div class="notas n3">
                <i class="fa fa-paperclip"></i>
                <p>Obtén tus resultados en tu correo electrónico cuando lo revise uno de nuestros psicólogos.</p>
                <hr>
              </div>
          </div>
          <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_zvsbswis.json" background="transparent"  speed="1" loop autoplay></lottie-player>
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