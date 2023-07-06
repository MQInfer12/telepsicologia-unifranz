<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="woltik.css">
    <script defer src="navbar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/db678f56b4.js" crossorigin="anonymous"></script>
    <title>Telepsicologia Unifranz</title>
    <link rel="shortcut icon" href="./imagenes/icon1.ico" type="image/x-icon">
</head>
<body>
    <?php include("sesionPaciente.php") ?>
    <?php include('enviarWoltik.php') ?>
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
        <div class="title-div"><h2 class="title">Seleccione una consulta</h2></div>
        <img src="./banners/tiktokEnMiVidaDiaria.gif" onClick="mostrarCuestionario(0)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Siempre</th>
                    <th class="descrip">Casi siempre</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Rara vez</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Soy consciente de que Tik Tok a desplazado plataformas importantes como Google.</td>
                    <td><div class="option"><input type="radio" name="1p1" id="11p1" value="4"><label for="11p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="21p1" value="3"><label for="21p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="31p1" value="2"><label for="31p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="41p1" value="1"><label for="41p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="51p1" value="0"><label for="51p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Paso más de dos horas en la plataforma tik tok.</td>
                    <td><div class="option"><input type="radio" name="1p2" id="11p2" value="4"><label for="11p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="21p2" value="3"><label for="21p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="31p2" value="2"><label for="31p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="41p2" value="1"><label for="41p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="51p2" value="0"><label for="51p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Reviso más de cinco veces al día mi celular para ver las notificaciones de tik tok.</td>
                    <td><div class="option"><input type="radio" name="1p3" id="11p3" value="4"><label for="11p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="21p3" value="3"><label for="21p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="31p3" value="2"><label for="31p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="41p3" value="1"><label for="41p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="51p3" value="0"><label for="51p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Es importante la cantidad de likes que tienen mis publicaciones.</td>
                    <td><div class="option"><input type="radio" name="1p4" id="11p4" value="4"><label for="11p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="21p4" value="3"><label for="21p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="31p4" value="2"><label for="31p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="41p4" value="1"><label for="41p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="51p4" value="0"><label for="51p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>5. Suelo compárame con otras personas en Tik Tok.</p></td>
                    <td><div class="option"><input type="radio" name="1p5" id="11p5" value="4"><label for="11p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="21p5" value="3"><label for="21p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="31p5" value="2"><label for="31p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="41p5" value="1"><label for="41p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="51p5" value="0"><label for="51p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>6. Generalmente suelo seguir los consejos que dan los Influencer.</p></td>
                    <td><div class="option"><input type="radio" name="1p6" id="11p6" value="4"><label for="11p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="21p6" value="3"><label for="21p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="31p6" value="2"><label for="31p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="41p6" value="1"><label for="41p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="51p6" value="0"><label for="51p6"><span></span></label></div></td>
                </tr> 
                <tr>
                    <td><p>7. Siento que cuando entro a Tik Tok el tiempo pasa más rápido de lo normal.</p></td>
                    <td><div class="option"><input type="radio" name="1p7" id="11p7" value="4"><label for="11p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="21p7" value="3"><label for="21p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="31p7" value="2"><label for="31p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="41p7" value="1"><label for="41p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="51p7" value="0"><label for="51p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>8. Intento aparentar tener una vida perfecta frente a la gente desconocida publicando videos en Tik Tok</p></td>
                    <td><div class="option"><input type="radio" name="1p8" id="11p8" value="4"><label for="11p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="21p8" value="3"><label for="21p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="31p8" value="2"><label for="31p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="41p8" value="1"><label for="41p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="51p8" value="0"><label for="51p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>9. Suelo estar en Tik Tok el tiempo necesario sin descuidarme de mis estudios o familia</p></td>
                    <td><div class="option"><input type="radio" name="1p9" id="11p9" value="4"><label for="11p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="21p9" value="3"><label for="21p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="31p9" value="2"><label for="31p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="41p9" value="1"><label for="41p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="51p9" value="0"><label for="51p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>10. Suelo buscar información de cómo cuidar mi salud en Tik Tok y lo aplico en mi vida cotidiana</p></td>
                    <td><div class="option"><input type="radio" name="1p10" id="11p10" value="4"><label for="11p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="21p10" value="3"><label for="21p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="31p10" value="2"><label for="31p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="41p10" value="1"><label for="41p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="51p10" value="0"><label for="51p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>11. Suelo compárarme con la vida de otras persona dentro de Tik Tok</p></td>
                    <td><div class="option"><input type="radio" name="1p11" id="11p11" value="4"><label for="11p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="21p11" value="3"><label for="21p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="31p11" value="2"><label for="31p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="41p11" value="1"><label for="41p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="51p11" value="0"><label for="51p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>12. Usualmente pienso que es necesario tener redes sociales especialmente Tik Tok</p></td>
                    <td><div class="option"><input type="radio" name="1p12" id="11p12" value="4"><label for="11p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="21p12" value="3"><label for="21p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="31p12" value="2"><label for="31p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="41p12" value="1"><label for="41p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="51p12" value="0"><label for="51p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>13. Duermo menos de lo habitual cada vez que veo Tik Tok</p></td>
                    <td><div class="option"><input type="radio" name="1p13" id="11p13" value="4"><label for="11p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="21p13" value="3"><label for="21p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="31p13" value="2"><label for="31p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="41p13" value="1"><label for="41p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="51p13" value="0"><label for="51p13"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>14. Suelo utilizar Tik Tok solo para encontrar información y videos graciosos sin estar pendiente sobre los estereotipos</p></td>
                    <td><div class="option"><input type="radio" name="1p14" id="11p14" value="4"><label for="11p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="21p14" value="3"><label for="21p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="31p14" value="2"><label for="31p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="41p14" value="1"><label for="41p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="51p14" value="0"><label for="51p14"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>15. Soy una persona a la cual le gusta caminar, leer o hacer otras actividades recreativas, y no suelo estar pendiente a la Red social Tik Tok</p></td>
                    <td><div class="option"><input type="radio" name="1p15" id="11p15" value="4"><label for="11p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="21p15" value="3"><label for="21p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="31p15" value="2"><label for="31p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="41p15" value="1"><label for="41p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="51p15" value="0"><label for="51p15"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>16. Encontré videos en Tik Tok que te pagan por el uso de ciertas aplicaciones y pensé en irme de casa</p></td>
                    <td><div class="option"><input type="radio" name="1p16" id="11p16" value="4"><label for="11p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="21p16" value="3"><label for="21p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="31p16" value="2"><label for="31p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="41p16" value="1"><label for="41p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="51p16" value="0"><label for="51p16"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>17. Mis padres no suelen estar pendiente al contenido que veo en Tik Tok</p></td>
                    <td><div class="option"><input type="radio" name="1p17" id="11p17" value="4"><label for="11p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="21p17" value="3"><label for="21p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="31p17" value="2"><label for="31p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="41p17" value="1"><label for="41p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="51p17" value="0"><label for="51p17"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC1" type="submit" value="Enviar">
        </form>
        </div>
        <img src="./banners/tiktokYMiAlimentacion.gif" onClick="mostrarCuestionario(1)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                <th>PREGUNTA</th>
                    <th class="descrip">Siempre</th>
                    <th class="descrip">Casi siempre</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Rara vez</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Generalmente suelo seguir dietas mencionadas en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="2p1" id="12p1" value="4"><label for="12p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="22p1" value="3"><label for="22p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="32p1" value="2"><label for="32p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="42p1" value="1"><label for="42p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="52p1" value="0"><label for="52p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Encontré información acerca de la Bulimia y Anorexia en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="2p2" id="12p2" value="4"><label for="12p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="22p2" value="3"><label for="22p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="32p2" value="2"><label for="32p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="42p2" value="1"><label for="42p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="52p2" value="0"><label for="52p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Me he auto diagnosticado algún trastornó alimenticio gracias a vídeos o búsquedas en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="2p3" id="12p3" value="4"><label for="12p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="22p3" value="3"><label for="22p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="32p3" value="2"><label for="32p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="42p3" value="1"><label for="42p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="52p3" value="0"><label for="52p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Los consejos de comida saludable que veo en Tik Tok afectan mi manera de comer</td>
                    <td><div class="option"><input type="radio" name="2p4" id="12p4" value="4"><label for="12p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="22p4" value="3"><label for="22p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="32p4" value="2"><label for="32p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="42p4" value="1"><label for="42p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="52p4" value="0"><label for="52p4"><span></span></label></div></td>
                </tr>
                
            </table>
            <input class="btn-enviar" name="enviarC2" type="submit" value="Enviar">
        </form>
        </div>

        <video onClick="mostrarCuestionario(2)" class="banner" autoplay loop>
            <source src="./banners/tiktokYMisRelacionesSociales.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Siempre</th>
                    <th class="descrip">Casi siempre</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Rara vez</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Comparo mi estilo de vida constantemente con la de los influencers.</td>
                    <td><div class="option"><input type="radio" name="3p1" id="13p1" value="4"><label for="13p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="23p1" value="3"><label for="23p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="33p1" value="2"><label for="33p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="43p1" value="1"><label for="43p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="53p1" value="0"><label for="53p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Alguna vez me excluyeron de una conversación por no saber la tendencia de un video de Tik Tok</td>
                    <td><div class="option"><input type="radio" name="3p2" id="13p2" value="4"><label for="13p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="23p2" value="3"><label for="23p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="33p2" value="2"><label for="33p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="43p2" value="1"><label for="43p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="53p2" value="0"><label for="53p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Alguna vez subieron contenido de mi persona sin mi consentimiento burlándose de mi en Tik Tok</td>
                    <td><div class="option"><input type="radio" name="3p3" id="13p3" value="4"><label for="13p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="23p3" value="3"><label for="23p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="33p3" value="2"><label for="33p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="43p3" value="1"><label for="43p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="53p3" value="0"><label for="53p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Generalmente en Tik Tok me siguen personas que no conozco y suelo hablar con ellos</td>  
                    <td><div class="option"><input type="radio" name="3p4" id="13p4"value="4"><label for="13p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="23p4"value="3"><label for="23p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="33p4"value="2"><label for="33p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="43p4"value="1"><label for="43p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="53p4"value="0"><label for="53p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Dependo de la aprobación social desde que utilizo Tik Tok.</td> 
                    <td><div class="option"><input type="radio" name="3p5" id="13p5"value="4"><label for="13p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="23p5"value="3"><label for="23p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="33p5"value="2"><label for="33p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="43p5"value="1"><label for="43p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="53p5"value="0"><label for="53p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Desde que tengo Tik Tok, cuando alguien habla mal de mi me afecta mucho.</td>  
                    <td><div class="option"><input type="radio" name="3p6" id="13p6"value="4"><label for="13p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="23p6"value="3"><label for="23p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="33p6"value="2"><label for="33p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="43p6"value="1"><label for="43p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="53p6"value="0"><label for="53p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Siento la necesidad de encajar en la sociedad y sus estereotipos desde que uso Tik Tok.</td>  
                    <td><div class="option"><input type="radio" name="3p7" id="13p7"value="4"><label for="13p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="23p7"value="3"><label for="23p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="33p7"value="2"><label for="33p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="43p7"value="1"><label for="43p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="53p7"value="0"><label for="53p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. La distracción con los videos de Tik Tok me alejan de socializar con mi familia o amigos.</td>  
                    <td><div class="option"><input type="radio" name="3p8" id="13p8"value="4"><label for="13p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="23p8"value="3"><label for="23p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="33p8"value="2"><label for="33p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="43p8"value="1"><label for="43p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="43p8"value="0"><label for="53p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Siento necesidad de indagar en la vida personal de un tiktoker en cuanto veo un vídeo suyo, intentando copiar su estilo de vida.</td>  
                    <td><div class="option"><input type="radio" name="3p9" id="13p9"value="4"><label for="13p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="23p9"value="3"><label for="23p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="33p9"value="2"><label for="33p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="43p9"value="1"><label for="43p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="53p9"value="0"><label for="53p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. Subo contenido a Tik Tok bailando y recibo críticas por otras personas con las que no estoy relacionado(a)</td>  
                    <td><div class="option"><input type="radio" name="3p10" id="13p10"value="4"><label for="13p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="23p10"value="3"><label for="23p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="33p10"value="2"><label for="33p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="43p10"value="1"><label for="43p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="53p10"value="0"><label for="53p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Disfruto mucho la vida social especialmente desde cuando utilizo Tik Tok</td>  
                    <td><div class="option"><input type="radio" name="3p11" id="13p11"value="4"><label for="13p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="23p11"value="3"><label for="23p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="33p11"value="2"><label for="33p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="43p11"value="1"><label for="43p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="53p11"value="0"><label for="53p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. Generalmente hablo con mis padres o hermanos acerca de esta red social Tik Tok</td>  
                    <td><div class="option"><input type="radio" name="3p12" id="13p12"value="4"><label for="13p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="23p12"value="3"><label for="23p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="33p12"value="2"><label for="33p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="43p12"value="1"><label for="43p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="53p12"value="0"><label for="53p12"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC3" type="submit" value="Enviar">
        </form>
        </div>

        <img src="./banners/tiktokYMiAspectoFisico.gif" onClick="mostrarCuestionario(3)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Siempre</th>
                    <th class="descrip">Casi siempre</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Rara vez</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Generalmente veo videos en Tik Tok sobre belleza.</td>
                    <td><div class="option"><input type="radio" name="4p1" id="14p1" value="4"><label for="14p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="24p1" value="3"><label for="24p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="34p1" value="2"><label for="34p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="44p1" value="1"><label for="44p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="54p1" value="0"><label for="54p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Desde que tengo Tik Tok siento con mayor necesidad de arreglarme antes de cualquier visita o evento que se me presenta.</td>
                    <td><div class="option"><input type="radio" name="4p2" id="14p2" value="4"><label for="14p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="24p2" value="3"><label for="24p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="34p2" value="2"><label for="34p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="44p2" value="1"><label for="44p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="54p2" value="0"><label for="54p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Suelo pensar mucho en mi manera de verme físicamente a consecuencia de Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="4p3" id="14p3"value="4"><label for="14p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="24p3"value="3"><label for="24p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="34p3"value="2"><label for="34p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="44p3"value="1"><label for="44p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="54p3"value="0"><label for="54p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Me siento presionado/a en bajar de peso o llevar un ritmo de vida "saludable" gracias a los vídeos que me salen en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="4p4" id="14p4" value="4"><label for="14p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="24p4" value="3"><label for="24p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="34p4" value="2"><label for="34p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="44p4" value="1"><label for="44p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="54p4" value="0"><label for="54p4"><span></span></label></div></td>
                </tr>
                    <td>5. Me siento mas seguro de mi cuerpo desde que utilizo tik tok.</td>
                    <td><div class="option"><input type="radio" name="4p5" id="14p5" value="4"><label for="14p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="24p5" value="3"><label for="24p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="34p5" value="2"><label for="34p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="44p5" value="1"><label for="44p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="54p5" value="0"><label for="54p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Algunos videos en Tik Tok me dejan inseguridades acerca de mi cuerpo</td>
                    <td><div class="option"><input type="radio" name="4p6" id="14p6" value="4"><label for="14p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="24p6" value="3"><label for="24p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="34p6" value="2"><label for="34p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="44p6" value="1"><label for="44p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="54p6" value="0"><label for="54p6"><span></span></label></div></td>
                </tr>  
                <tr>
                    <td>7. Considero que Tik Tok influye en mi imagen de cuerpo perfecto</td>
                    <td><div class="option"><input type="radio" name="4p7" id="14p7" value="4"><label for="14p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="24p7" value="3"><label for="24p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="34p7" value="2"><label for="34p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="44p7" value="1"><label for="44p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="54p7" value="0"><label for="54p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Alguna vez me salió videos acerca de bajar peso en una semana en Tik Tok y busqué como realizarlo.</td>
                    <td><div class="option"><input type="radio" name="4p8" id="14p8" value="4"><label for="14p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="24p8" value="3"><label for="24p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="34p8" value="2"><label for="34p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="44p8" value="1"><label for="44p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="54p8" value="0"><label for="54p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Tengo una imagen distorsionada de mi físico frente al espejo desde cuando sigo tiktok</td>
                    <td><div class="option"><input type="radio" name="4p9" id="14p9" value="4"><label for="14p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="24p9" value="3"><label for="24p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="34p9" value="2"><label for="34p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="44p9" value="1"><label for="44p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="54p9" value="0"><label for="54p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. Suelo compararme física y emocionalmente con tiktokers.</td>
                    <td><div class="option"><input type="radio" name="4p10" id="14p10" value="4"><label for="14p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="24p10" value="3"><label for="24p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="34p10" value="2"><label for="34p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="44p10" value="1"><label for="44p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="54p10" value="0"><label for="54p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Suelo buscar formas para bajar de peso en Tik Tok</td>
                    <td><div class="option"><input type="radio" name="4p11" id="14p11" value="4"><label for="14p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="24p11" value="3"><label for="24p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="34p11" value="2"><label for="34p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="44p11" value="1"><label for="44p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="54p11" value="0"><label for="54p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. No dejo que Tik Tok defina mi cuerpo</td>
                    <td><div class="option"><input type="radio" name="4p12" id="14p12" value="4"><label for="14p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="24p12" value="3"><label for="24p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="34p12" value="2"><label for="34p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="44p12" value="1"><label for="44p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="54p12" value="0"><label for="54p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>13. Me siento satisfecho con mi aspecto físico gracias a un Influencer desde que sigo Tik Tok</td>
                    <td><div class="option"><input type="radio" name="4p13" id="14p13" value="4"><label for="14p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="24p13" value="3"><label for="24p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="34p13" value="2"><label for="34p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="44p13" value="1"><label for="44p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="54p13" value="0"><label for="54p13"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>14. El algoritmo de Tik Tok me sugiere vídeos acerca del "cuerpo ideal".</td>
                    <td><div class="option"><input type="radio" name="4p14" id="14p14" value="4"><label for="14p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p14" id="24p14" value="3"><label for="24p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p14" id="34p14" value="2"><label for="34p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p14" id="44p14" value="1"><label for="44p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p14" id="54p14" value="0"><label for="54p14"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>15. La idea de un cuerpo perfecto en Tik Tok me hace plantearme ideas de someterte a una cirugía estética.</td>
                    <td><div class="option"><input type="radio" name="4p15" id="14p15" value="4"><label for="14p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p15" id="24p15" value="3"><label for="24p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p15" id="34p15" value="2"><label for="34p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p15" id="44p15" value="1"><label for="44p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p15" id="54p15" value="0"><label for="54p15"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>16. Cuando empecé a ver videos en Tik Tok de estereotipos empecé a ver mi cuerpo de otra forma.</td>
                    <td><div class="option"><input type="radio" name="4p16" id="14p16" value="4"><label for="14p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p16" id="24p16" value="3"><label for="24p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p16" id="34p16" value="2"><label for="34p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p16" id="44p16" value="1"><label for="44p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p16" id="54p16" value="0"><label for="54p16"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>17. Consideras que el estar mucho tiempo en Tik Tok afectan tu desempeño escolar y calificaciones.</td>
                    <td><div class="option"><input type="radio" name="4p17" id="14p17" value="4"><label for="14p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p17" id="24p17" value="3"><label for="24p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p17" id="34p17" value="2"><label for="34p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p17" id="44p17" value="1"><label for="44p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p17" id="54p17" value="0"><label for="54p17"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>18. Expreso abiertamente lo que no me gusta de mi persona desde cuando uso Tik Tok</td>
                    <td><div class="option"><input type="radio" name="4p18" id="14p18" value="4"><label for="14p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p18" id="24p18" value="3"><label for="24p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p18" id="34p18" value="2"><label for="34p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p18" id="44p18" value="1"><label for="44p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p18" id="54p18" value="0"><label for="54p18"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>19. Me he sentido juzgado/a por las personas cuando ven mi físico desde que todos ven Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="4p19" id="14p19" value="4"><label for="14p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p19" id="24p19" value="3"><label for="24p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p19" id="34p19" value="2"><label for="34p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p19" id="44p19" value="1"><label for="44p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p19" id="54p19" value="0"><label for="54p19"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>20. Sentí ganas de hacer videos de Tik Tok, pero no creí ser capaz al creer no tener el físico para realizarlos.</td>
                    <td><div class="option"><input type="radio" name="4p20" id="14p20" value="4"><label for="14p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p20" id="24p20" value="3"><label for="24p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p20" id="34p20" value="2"><label for="34p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p20" id="44p20" value="1"><label for="44p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p20" id="54p20" value="0"><label for="54p20"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>21. Al ver videos en la aplicación Tik Tok sobre moda, me replanteo mi forma de vestir.</td>
                    <td><div class="option"><input type="radio" name="4p21" id="14p21" value="4"><label for="14p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p21" id="24p21" value="3"><label for="24p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p21" id="34p21" value="2"><label for="34p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p21" id="44p21" value="1"><label for="44p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p21" id="54p21" value="0"><label for="54p21"><span></span></label></div></td>
                </tr>
            </table>     
            <input class="btn-enviar" name="enviarC4" type="submit" value="Enviar">
        </form>
        </div>
        
        <img src="./banners/tiktokYMiEstadoEmocional.gif" onClick="mostrarCuestionario(4)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Siempre</th>
                    <th class="descrip">Casi siempre</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Rara vez</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. He sido influenciado en cambiar mi forma de ser por videos de TikTok</td>
                    <td><div class="option"><input type="radio" name="5p1" id="15p1" value="4"><label for="15p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="25p1" value="3"><label for="25p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="35p1" value="2"><label for="35p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="45p1" value="1"><label for="45p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="55p1" value="0"><label for="55p1"><span></span></label></div></td>
                </tr>      
                <tr>
                    <td>2. Suele aparecerme videos en Tik Tok muy sensibles que afectan mi estado emocional.</td>
                    <td><div class="option"><input type="radio" name="5p2" id="15p2" value="4"><label for="15p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="25p2" value="3"><label for="25p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="35p2" value="2"><label for="35p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="45p2" value="1"><label for="45p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="55p2" value="0"><label for="55p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Suelo estar deprimido a causa de sentirme fracasado por no ser como los Influencers de Tik Tok</td>
                    <td><div class="option"><input type="radio" name="5p3" id="15p3" value="4"><label for="15p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="25p3" value="3"><label for="25p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="35p3" value="2"><label for="35p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="45p3" value="1"><label for="45p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="55p3" value="0"><label for="55p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Tik tok causo que sea muy difícil tomar decisiones por mi cuenta.</td>
                    <td><div class="option"><input type="radio" name="5p4" id="15p4" value="4"><label for="15p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="25p4" value="3"><label for="25p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="35p4" value="2"><label for="35p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="45p4" value="1"><label for="45p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="55p4" value="0"><label for="55p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Siento que la red social Tik Tok me sofoca con su contenido cada día acerca de temas delicados</td>
                    <td><div class="option"><input type="radio" name="5p5" id="15p5" value="4"><label for="15p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="25p5" value="3"><label for="25p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="35p5" value="2"><label for="35p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="45p5" value="1"><label for="45p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="55p5" value="0"><label for="55p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Siento que a veces mi vida no tiene sentido a causa de mis inseguridades ocasionadas en Tik tok</td>
                    <td><div class="option"><input type="radio" name="5p6" id="15p6" value="4"><label for="15p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="25p6" value="3"><label for="25p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="35p6" value="2"><label for="35p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="45p6" value="1"><label for="45p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="55p6" value="0"><label for="55p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. En ocasiones busco ayuda psicológica en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="5p7" id="15p7" value="4"><label for="15p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="25p7" value="3"><label for="25p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="35p7" value="2"><label for="35p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="45p7" value="1"><label for="45p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="55p7" value="0"><label for="55p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Cuando veo un contenido Tik Tok que no es de mi agrado suelo expresar mi opinión en la sección de comentarios.</td>
                    <td><div class="option"><input type="radio" name="5p8" id="15p8" value="4"><label for="15p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="25p8" value="3"><label for="25p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="35p8" value="2"><label for="35p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="45p8" value="1"><label for="45p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="55p8" value="0"><label for="55p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. He tenido pensamientos de cómo sería ser otra persona que ví dentro de la red social Tik Tok</td>
                    <td><div class="option"><input type="radio" name="5p9" id="15p9" value="4"><label for="15p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="25p9" value="3"><label for="25p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="35p9" value="2"><label for="35p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="45p9" value="1"><label for="45p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="55p9" value="0"><label for="55p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. Suelo compárame con otras personas en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="5p10" id="15p10" value="4"><label for="15p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="25p10" value="3"><label for="25p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="35p10" value="2"><label for="35p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="45p10" value="1"><label for="45p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="55p10" value="0"><label for="55p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Me he sentido atacado emocionalmente por un video que vi en Tik Tok.</td>
                    <td><div class="option"><input type="radio" name="5p11" id="15p11" value="4"><label for="15p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="25p11" value="3"><label for="25p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="35p11" value="2"><label for="35p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="45p11" value="1"><label for="45p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="55p11" value="0"><label for="55p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. Con frecuencia me siento cansado con todo lo que hago, y esto me lleva a pasar más tiempo en Tik Tok</td>
                    <td><div class="option"><input type="radio" name="5p12" id="15p12" value="4"><label for="15p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="25p12" value="3"><label for="25p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="35p12" value="2"><label for="35p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="45p12" value="1"><label for="45p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="55p12" value="0"><label for="55p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>13. Hay días que pierdo la confianza en mi después de haber visto un video acerca del estereotipo en Tik Tok</td>
                    <td><div class="option"><input type="radio" name="5p13" id="15p13" value="4"><label for="15p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="25p13" value="3"><label for="25p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="35p13" value="2"><label for="35p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="45p13" value="1"><label for="45p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="55p13" value="0"><label for="55p13"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>14. Me considero una persona muy creativa por lo cual me siento bien sin la red social de Tik Tok</td>
                    <td><div class="option"><input type="radio" name="5p14" id="15p14" value="4"><label for="15p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="25p14" value="3"><label for="25p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="35p14" value="2"><label for="35p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="45p14" value="1"><label for="45p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="55p14" value="0"><label for="55p14"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>15. Generalmente suelo aburrirme en Tik Tok</td>
                    <td><div class="option"><input type="radio" name="5p15" id="15p15" value="4"><label for="15p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="25p15" value="3"><label for="25p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="35p15" value="2"><label for="35p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="45p15" value="1"><label for="45p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="55p15" value="0"><label for="55p15"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC5" type="submit" value="Enviar">
        </form>
        </div>

        <video onClick="mostrarCuestionario(5)" class="banner" autoplay loop>
            <source src="./banners/tiktokYMiAutoestima.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Siempre</th>
                    <th class="descrip">Casi siempre</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Rara vez</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Pienso que si en casa dieran más atención pasaría menos tiempo en Tik Tok</td>
                    <td><div class="option"><input type="radio" name="6p1" id="16p1" value="4"><label for="16p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="26p1" value="3"><label for="26p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="36p1" value="2"><label for="36p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="46p1" value="1"><label for="46p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="56p1" value="0"><label for="56p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Considero que Tik Tok me conoce más que mi propia familia y amigos.</td>
                    <td><div class="option"><input type="radio" name="6p2" id="16p2" value="4"><label for="16p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="26p2" value="3"><label for="26p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="36p2" value="2"><label for="36p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="46p2" value="1"><label for="46p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="56p2" value="0"><label for="56p2"><span></span></label></div></td>
                </tr>  
                <tr>
                    <td>3. Generalmente no suelo prestar atención hacia personas que hablan de un estereotipo perfecto en Tik Tok ya que me siento satisfecha conmigo mismo (a).</td>
                    <td><div class="option"><input type="radio" name="6p3" id="16p3" value="4"><label for="16p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="26p3" value="3"><label for="26p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="36p3" value="2"><label for="36p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="46p3" value="1"><label for="46p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="56p3" value="0"><label for="56p3"><span></span></label></div></td>
                </tr>  
                <tr>
                    <td>4. Generalmente me sale contenido en Tik Tok de autoestima en donde hablan de aceptación a si a uno mismo(a)</td>
                    <td><div class="option"><input type="radio" name="6p4" id="16p4" value="4"><label for="16p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="26p4" value="3"><label for="26p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="36p4" value="2"><label for="36p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="46p4" value="1"><label for="46p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="56p4" value="0"><label for="56p4"><span></span></label></div></td>
                </tr>  
                <tr>
                    <td>5. Siento que una vez que instale Tik Tok soy una persona que no tiene tantas cualidades</td>
                    <td><div class="option"><input type="radio" name="6p5" id="16p5" value="4"><label for="16p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="26p5" value="3"><label for="26p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="36p5" value="2"><label for="36p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="46p5" value="1"><label for="46p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="56p5" value="0"><label for="56p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Suelo admirar a personas en Tik Tok por la autoestima que tienen y que transmiten hacia los demás a pesar de no cumplir con los estándares de belleza o estereotipos</td>
                    <td><div class="option"><input type="radio" name="6p6" id="16p6" value="4"><label for="16p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="26p6" value="3"><label for="26p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="36p6" value="2"><label for="36p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="46p6" value="1"><label for="46p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="56p6" value="0"><label for="56p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Valoro mas mi aspecto físico que del aspecto físico que veo en los demás de Tik Tok </td>
                    <td><div class="option"><input type="radio" name="6p7" id="16p7" value="4"><label for="16p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="26p7" value="3"><label for="26p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="36p7" value="2"><label for="36p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="46p7" value="1"><label for="46p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="56p7" value="0"><label for="56p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Estoy consciente que todas mis decisiones tienen consecuencias y comentarios dentro de la aplicación Tik Tok</td>
                    <td><div class="option"><input type="radio" name="6p8" id="16p8" value="4"><label for="16p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="26p8" value="3"><label for="26p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="36p8" value="2"><label for="36p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="46p8" value="1"><label for="46p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="56p8" value="0"><label for="56p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Los comentarios en Tik Tok pueden ser autodestructivos por parte de personas desconocidas burlándose de otras personas</td>
                    <td><div class="option"><input type="radio" name="6p9" id="16p9" value="4"><label for="16p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="26p9" value="3"><label for="26p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="36p9" value="2"><label for="36p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="46p9" value="1"><label for="46p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="56p9" value="0"><label for="56p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. No me considero tan valiosa y útil como antes a consecuencia de Tik Tok</td>
                    <td><div class="option"><input type="radio" name="6p10" id="16p10" value="4"><label for="16p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="26p10" value="3"><label for="26p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="36p10" value="2"><label for="36p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="46p10" value="1"><label for="46p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="56p10" value="0"><label for="56p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Tik tok bajo mí autoestima que  me llevo a hacer cosas que sabía que no estaban bien, como ser dietas o dejar de comer.</td>
                    <td><div class="option"><input type="radio" name="6p11" id="16p11" value="4"><label for="16p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="26p11" value="3"><label for="26p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="36p11" value="2"><label for="36p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="46p11" value="1"><label for="46p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="56p11" value="0"><label for="56p11"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC6" type="submit" value="Enviar">
        </form>
        </div>
        </section>
    <script src="mostrar.js"></script>
</body>            
</html>