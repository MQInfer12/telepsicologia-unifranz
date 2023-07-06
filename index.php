<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <script defer src="navbar.js"></script>
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
    <section class="section1">
        <div class="first-column">
            <h2>Te damos la bienvenida a Telepsicología Unifranz</h2>
            <p>
                La tecnología hoy en día, afecta lentamente a todos los que hacen uso de ella... es por ello que queremos ayudarte diagnosticando la influencia que esta tiene sobre ti.
            </p>
            <a href="register.php">¡COMIENZA AHORA!</a>
        </div>
        <div class="first-column">
            <div class="chat-container">
                <div class="chat">
                    <h3 class="chat-title">#psicologo-tecnologico</h3>
                    <div class="chat1">
                        <div class="chat1-color"></div>
                        <div>
                            <h3 class="chat-name">Psicólogo</h3>
                            <p class="chat-msg">¿Motivo de consulta?</p>
                        </div>
                    </div>
                    <div class="chat2">
                        <div class="chat2-color"></div>
                        <div>
                            <h3 class="chat-name">Usuario</h3>
                            <p class="chat-msg">Me afecta la tecnolo- gía.</p>
                        </div>
                    </div>
                </div>
                <div class="changa">
                    <div class="img-chat1">
                        <img src="./imagenes/psicologo.png">
                    </div>
                </div>
                <div class="chango">
                    <div class="img-chat2">
                        <img src="./imagenes/usuaria.png">
                    </div>
                </div>
            </div>
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