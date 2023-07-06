<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="revisar.css">
    <script defer src="navbar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/db678f56b4.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Telepsicologia Unifranz</title>
    <link rel="shortcut icon" href="./imagenes/icon1.ico" type="image/x-icon">
</head>
<body>
    <?php include("sesionPsico.php") ?>
    <?php include("verCuestionarios.php") ?>
    <header class="header">
        <div class="container logo-nav">
            <img class="logo" src="imagenes/icon1.png" alt="logoPagina">
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Principal</a></li>
                    <li><a href="revisar.php">Revisar</a></li>
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
    <h2 class="title">Revisar cuestionarios</h2>
        <div class="options-div">
            <div class="div-option">
                <h3 class="title-option">Influencia tecnológica</h3>
                <div class="tables">
                <div>
                    <h4 class="subtitle-option">Vida diaria y tecnología</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("vida_diaria_y_tecnologia");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Bienestar emocional y tecnología</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("bienestar_emocional_y_tecnologia");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Relaciones sociales y tecnología</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("relaciones_sociales_y_tecnologia");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Videojuegos y tecnología</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("videojuegos_y_tecnologia");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Conducta y tecnología</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("conducta_y_tecnologia");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Las redes sociales</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("las_redes_sociales");
                        ?>
                    </table>
                </div>
                </div>
            </div>
            <div class="div-option">
                <h3 class="title-option">Videojuegos</h3>
                <div class="tables">
                <div>
                    <h4 class="subtitle-option">Videojuegos y estabilidad emocional</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("videojuegos_y_estabilidad_emocional");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Videojuegos y frustración</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("videojuegos_y_frustracion");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Videojuegos y agresividad directa</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("videojuegos_y_agresividad_directa");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">Videojuegos y agresividad indirecta</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("videojuegos_y_agresividad_indirecta");
                        ?>
                    </table>
                </div>
                </div>
            </div>
            <div class="div-option">
                <h3 class="title-option">Escala Woltik</h3>
                <div class="tables">
                <div>
                    <h4 class="subtitle-option">TikTok en mi vida diaria</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("tiktok_en_mi_vida_diaria");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">TikTok y su influencia en mi alimentación</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("tiktok_y_mi_alimentacion");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">TikTok y mis relaciones sociales</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("tiktok_y_mis_relaciones_sociales");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">TikTok y mi aspecto físico</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("tiktok_y_mi_aspecto_fisico");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">TikTok y mi estado emocional</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("tiktok_y_mi_estado_emocional");
                        ?>
                    </table>
                </div>
                <div>
                    <h4 class="subtitle-option">TikTok y mi autoestima</h4>
                    <table class="table-option">
                        <tr>
                            <th>Usuario</th>
                            <th class="diagnosticar">Puntaje</th>
                            <th class="diagnosticar">Mail</th>
                            <th class="diagnosticar">Ver</th>
                        </tr>
                        <?php
                            ver("tiktok_y_mi_autoestima");
                        ?>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
    <script src="revisar.js"></script>
</body>
</html>