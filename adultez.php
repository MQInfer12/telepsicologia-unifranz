<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="adultez.css">
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
    <?php include('enviarAdultez.php') ?>
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
        <video onClick="mostrarCuestionario(0)" class="banner" autoplay loop>
            <source src="./banners/VidaDiariaYTecnologia.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">A menudo</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Casi nunca</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Alguna vez intentaste pasar menos tiempo conectado y no lo has logrado</td>
                    <td><div class="option"><input type="radio" name="1p1" id="11p1" value="4"><label for="11p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="21p1" value="2"><label for="21p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="31p1" value="1"><label for="31p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="41p1" value="0"><label for="41p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. La intención es pasar algunos minutos, pero cuando te das cuentas ya estás conectado a muchas horas</td>
                    <td><div class="option"><input type="radio" name="1p2" id="11p2" value="4"><label for="11p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="21p2" value="2"><label for="21p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="31p2" value="1"><label for="31p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="41p2" value="0"><label for="41p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Mientras estás navegando, te olvidas de los problemas</td>
                    <td><div class="option"><input type="radio" name="1p3" id="11p3" value="4"><label for="11p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="21p3" value="2"><label for="21p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="31p3" value="1"><label for="31p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="41p3" value="0"><label for="41p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Has dejado de hacer alguna actividad de ocio (ver la tele, pasear en el parque, etc) para pasar más tiempo conectado a la internet</td>
                    <td><div class="option"><input type="radio" name="1p4" id="11p4" value="4"><label for="11p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="21p4" value="2"><label for="21p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="31p4" value="1"><label for="31p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="41p4" value="0"><label for="41p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>5. Has sido negligente en tus actividades domésticas para pasar más tiempo navegando</p></td>
                    <td><div class="option"><input type="radio" name="1p5" id="11p5" value="4"><label for="11p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="21p5" value="2"><label for="21p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="31p5" value="1"><label for="31p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="41p5" value="0"><label for="41p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>6. Tienes dificultad en planificar actividades de descanso (como pasear en un parque, estar con los amigos, otros) por no involucrar internet</p>
                    <td><div class="option"><input type="radio" name="1p6" id="11p6" value="4"><label for="11p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="21p6" value="2"><label for="21p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="31p6" value="1"><label for="31p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="41p6" value="0"><label for="41p6"><span></span></label></div></td>
                </tr> 
                <tr>
                    <td><p>7. No te das cuenta de las horas que pasas navegando cuando dijiste que solo sería un momento</p></td>
                    <td><div class="option"><input type="radio" name="1p7" id="11p7" value="4"><label for="11p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="21p7" value="2"><label for="21p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="31p7" value="1"><label for="31p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="41p7" value="0"><label for="41p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>8. Has intentado conectarte menos tiempo en el chat y no lo lograste</p></td>
                    <td><div class="option"><input type="radio" name="1p8" id="11p8" value="4"><label for="11p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="21p8" value="2"><label for="21p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="31p8" value="1"><label for="31p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="41p8" value="0"><label for="41p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>9. Las personas hablan que pasas tiempo demasiado en las redes sociales</p></td>
                    <td><div class="option"><input type="radio" name="1p9" id="11p9" value="4"><label for="11p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="21p9" value="2"><label for="21p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="31p9" value="1"><label for="31p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="41p9" value="0"><label for="41p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>10. Te olvidaste las actividades de casa por estar conectado</p></td>
                    <td><div class="option"><input type="radio" name="1p10" id="11p10" value="4"><label for="11p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="21p10" value="2"><label for="21p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="31p10" value="1"><label for="31p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="41p10" value="0"><label for="41p10"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC1" type="submit" value="Enviar">
        </form>
        </div>
        <video onClick="mostrarCuestionario(1)" class="banner" autoplay loop>
            <source src="./banners/BienestarEmocionalYTecnologia.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr>
                    <th>PREGUNTA</th>
                    <th class="descrip">A menudo</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Casi nunca</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. El recibir un mensaje o correo electrónico es una alegría para ti</td>
                    <td><div class="option"><input type="radio" name="2p1" id="12p1" value="4"><label for="12p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="22p1" value="2"><label for="22p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="32p1" value="1"><label for="32p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="42p1" value="0"><label for="42p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Los amigos virtuales te hacen sentir más feliz que las reuniones presenciales con tu familia y amigos</td>
                    <td><div class="option"><input type="radio" name="2p2" id="12p2" value="4"><label for="12p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="22p2" value="2"><label for="22p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="32p2" value="1"><label for="32p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="42p2" value="0"><label for="42p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Te sientes bien al estar conectado</td>
                    <td><div class="option"><input type="radio" name="2p3" id="12p3" value="4"><label for="12p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="22p3" value="2"><label for="22p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="32p3" value="1"><label for="32p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="42p3" value="0"><label for="42p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Te sientes incómodo cuando alguien te pregunta en qué dedicas el tiempo que pasas navegando</td>
                    <td><div class="option"><input type="radio" name="2p4" id="12p4" value="4"><label for="12p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="22p4" value="2"><label for="22p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="32p4" value="1"><label for="32p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="42p4" value="0"><label for="42p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Te sientes mal si el tiempo en el chat se reduce por alguna actividad que tienes que realizar</td>
                    <td><div class="option"><input type="radio" name="2p5" id="12p5" value="4"><label for="12p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="22p5" value="2"><label for="22p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="32p5" value="1"><label for="32p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="42p5" value="0"><label for="42p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Estas de mal humor si no entras a tus redes sociales</td>
                    <td><div class="option"><input type="radio" name="2p6" id="12p6" value="4"><label for="12p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="22p6" value="2"><label for="22p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="32p6" value="1"><label for="32p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="42p6" value="0"><label for="42p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Tiendes a quedarte pensando y/o soñando que estás navegando en la red</td>
                    <td><div class="option"><input type="radio" name="2p7" id="12p7" value="4"><label for="12p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="22p7" value="2"><label for="22p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="32p7" value="1"><label for="32p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="42p7" value="0"><label for="42p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Te sientes angustiado con la posibilidad de estar desconectado por algun tiempo</td>
                    <td><div class="option"><input type="radio" name="2p8" id="12p8" value="4"><label for="12p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="22p8" value="2"><label for="22p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="32p8" value="1"><label for="32p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="42p8" value="0"><label for="42p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Te sientes ansioso cuando no estas conectado en las redes sociales</td>
                    <td><div class="option"><input type="radio" name="2p9" id="12p9" value="4"><label for="12p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="22p9" value="2"><label for="22p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="32p9" value="1"><label for="32p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="42p9" value="0"><label for="42p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. Te sientes molesto cuando alguien te interrumpe cuando estas conectado a la internet</td>
                    <td><div class="option"><input type="radio" name="2p10" id="12p10" value="4"><label for="12p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="22p10" value="2"><label for="22p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="32p10" value="1"><label for="32p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="42p10" value="0"><label for="42p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Tú te sientes enojado si no recibes muchos likes en tu post</td>
                    <td><div class="option"><input type="radio" name="2p11" id="12p11" value="4"><label for="12p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="22p11" value="2"><label for="22p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="32p11" value="1"><label for="32p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="42p11" value="0"><label for="42p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. Te sientes con la autoestima más elevada cuando estás chateando</td>
                    <td><div class="option"><input type="radio" name="2p12" id="12p12" value="4"><label for="12p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p12" id="22p12" value="2"><label for="22p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p12" id="32p12" value="1"><label for="32p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p12" id="42p12" value="0"><label for="42p12"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC2" type="submit" value="Enviar">
        </form>
        </div>
        <video onClick="mostrarCuestionario(2)" class="banner" autoplay loop>
            <source src="./banners/RelacionesSocialesYTecnologia.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr>
                    <th>PREGUNTA</th>
                    <th class="descrip">A menudo</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Casi nunca</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Prefieres estar en la agitación del mundo virtual a estar con tu pareja</td>
                    <td><div class="option"><input type="radio" name="3p1" id="13p1" value="4"><label for="13p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="23p1" value="2"><label for="23p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="33p1" value="1"><label for="33p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="43p1" value="0"><label for="43p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Mantienes relaciones de socialesamistades con otras personas online</td>
                    <td><div class="option"><input type="radio" name="3p2" id="13p2" value="4"><label for="13p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="23p2" value="2"><label for="23p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="33p2" value="1"><label for="33p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="43p2" value="0"><label for="43p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Tienes la costumbre de verificar tus redes sociales luego que despiertas</td>
                    <td><div class="option"><input type="radio" name="3p3" id="13p3" value="4"><label for="13p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="23p3" value="2"><label for="23p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="33p3" value="1"><label for="33p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="43p3" value="0"><label for="43p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Te gusta hacer amigos por redes sociales</td>
                    <td><div class="option"><input type="radio" name="3p4" id="13p4" value="4"><label for="13p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="23p4" value="2"><label for="23p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="33p4" value="1"><label for="33p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="43p4" value="0"><label for="43p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Hablas con gente desconocida en redes sociales</td>
                    <td><div class="option"><input type="radio" name="3p5" id="13p5" value="4"><label for="13p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="23p5" value="2"><label for="23p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="33p5" value="1"><label for="33p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="43p5" value="0"><label for="43p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Suele sentirte aceptado con los amigos virtuales que realizas en redes sociales</td>
                    <td><div class="option"><input type="radio" name="3p6" id="13p6" value="4"><label for="13p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="23p6" value="2"><label for="23p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="33p6" value="1"><label for="33p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="43p6" value="0"><label for="43p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Prefiere estar navegando en la internet que salir a pasear con otras personas</td>
                    <td><div class="option"><input type="radio" name="3p7" id="13p7" value="4"><label for="13p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="23p7" value="2"><label for="23p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="33p7" value="1"><label for="33p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="43p7" value="0"><label for="43p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. El tiempo que dedicas a estar conectado es mayor que el tiempo que dedicas a tus amigos</td>
                    <td><div class="option"><input type="radio" name="3p8" id="13p8" value="4"><label for="13p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="23p8" value="2"><label for="23p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="33p8" value="1"><label for="33p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="43p8" value="0"><label for="43p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Ha disminuido el tiempo con tu familia y amigos por estar navegando en el internet</td>
                    <td><div class="option"><input type="radio" name="3p9" id="13p9" value="4"><label for="13p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="23p9" value="2"><label for="23p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="33p9" value="1"><label for="33p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="43p9" value="0"><label for="43p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. Prefieres conocer personas por chat, porque puedes ser la persona que quisieras ser</td>
                    <td><div class="option"><input type="radio" name="3p10" id="13p10" value="4"><label for="13p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="23p10" value="2"><label for="23p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="33p10" value="1"><label for="33p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="43p10" value="0"><label for="43p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Socializas más por internet que en persona</td>
                    <td><div class="option"><input type="radio" name="3p11" id="13p11" value="4"><label for="13p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="23p11" value="2"><label for="23p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="33p11" value="1"><label for="33p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="43p11" value="0"><label for="43p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. Logras comenzar nuevas amistades en las redes sociales, aunque eres tímido presencialmente</td>
                    <td><div class="option"><input type="radio" name="3p12" id="13p12" value="4"><label for="13p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="23p12" value="2"><label for="23p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="33p12" value="1"><label for="33p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="43p12" value="0"><label for="43p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>13. Prefieres comunicarte por mensaje o email que en persona</td>
                    <td><div class="option"><input type="radio" name="3p13" id="13p13" value="4"><label for="13p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="23p13" value="2"><label for="23p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="33p13" value="1"><label for="33p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="43p13" value="0"><label for="43p13"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC3" type="submit" value="Enviar">
        </form>
        </div>
        <video onClick="mostrarCuestionario(3)" class="banner" autoplay loop>
            <source src="./banners/VideojuegosYTecnologia.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr>
                    <th>PREGUNTA</th>
                    <th class="descrip">A menudo</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Casi nunca</th>
                    <th class="descrip">Nunca</th>
                </tr>
                <tr>
                    <td>1. Pasas tiempo jugando en línea</td>
                    <td><div class="option"><input type="radio" name="4p1" id="14p1" value="4"><label for="14p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="24p1" value="2"><label for="24p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="34p1" value="1"><label for="34p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="44p1" value="0"><label for="44p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Dejaste actividades como practicar deportes, conversar con amigos, etc, por jugar en línea</td>
                    <td><div class="option"><input type="radio" name="4p2" id="14p2" value="4"><label for="14p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="24p2" value="2"><label for="24p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="34p2" value="1"><label for="34p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="44p2" value="0"><label for="44p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Te ocultas o disimulas mientras juegas en línea cuando te ven tus padres/hijos/pareja</td>
                    <td><div class="option"><input type="radio" name="4p3" id="14p3" value="4"><label for="14p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="24p3" value="2"><label for="24p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="34p3" value="1"><label for="34p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="44p3" value="0"><label for="44p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Repasas las partidas ya jugadas online</td>
                    <td><div class="option"><input type="radio" name="4p4" id="14p4" value="4"><label for="14p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="24p4" value="2"><label for="24p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="34p4" value="1"><label for="34p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="44p4" value="0"><label for="44p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Sientes ansiedad por acabar el juego</td>
                    <td><div class="option"><input type="radio" name="4p5" id="14p5" value="4"><label for="14p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="24p5" value="2"><label for="24p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="34p5" value="1"><label for="34p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="44p5" value="0"><label for="44p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6.  Sueles cambiar el operador responsable de los juegos a menudo</td>
                    <td><div class="option"><input type="radio" name="4p6" id="14p6" value="4"><label for="14p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="24p6" value="2"><label for="24p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="34p6" value="1"><label for="34p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="44p6" value="0"><label for="44p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Me gusta jugar en videojuegos</td>
                    <td><div class="option"><input type="radio" name="4p7" id="14p7" value="4"><label for="14p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="24p7" value="2"><label for="24p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="34p7" value="1"><label for="34p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="44p7" value="0"><label for="44p7"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC4" type="submit" value="Enviar">
        </form>
       </div>
       <video onClick="mostrarCuestionario(4)" class="banner" autoplay loop>
            <source src="./banners/ConductaYTecnologia.mp4" type="video/mp4">
        </video>
       <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr>
                    <th>PREGUNTA</th>
                    <th class="descrip">A menudo</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Casi nunca</th>
                    <th class="descrip">Nunca</th>
                <tr>
                    <td>1. Eres impulsivo con alguien que interrumpe el momento en que esta conectado</td>
                    <td><div class="option"><input type="radio" name="5p1" id="15p1" value="4"><label for="15p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="25p1" value="2"><label for="25p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="35p1" value="1"><label for="35p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p1" id="45p1" value="0"><label for="45p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Te sientes más aburrido cuando no estás conectado a internet</td>
                    <td><div class="option"><input type="radio" name="5p2" id="15p2" value="4"><label for="15p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="25p2" value="2"><label for="25p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="35p2" value="1"><label for="35p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p2" id="45p2" value="0"><label for="45p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Te irritas cuando no tienes el celular a la mano</td>
                    <td><div class="option"><input type="radio" name="5p3" id="15p3" value="4"><label for="15p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="25p3" value="2"><label for="25p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="35p3" value="1"><label for="35p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p3" id="45p3" value="0"><label for="45p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Suele conectar al celular apenas te despiertas</td>
                    <td><div class="option"><input type="radio" name="5p4" id="15p4" value="4"><label for="15p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="25p4" value="2"><label for="25p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="35p4" value="1"><label for="35p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p4" id="45p4" value="0"><label for="45p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Estás atento a cualquier novedad en el celular</td>
                    <td><div class="option"><input type="radio" name="5p5" id="15p5" value="4"><label for="15p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="25p5" value="2"><label for="25p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="35p5" value="1"><label for="35p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p5" id="45p5" value="0"><label for="45p5"><span></span></label></div></td>
                <tr>
                    <td>6. No dices la verdad sobre el tiempo que pasas conectado cuando alguien te pregunta</td>
                    <td><div class="option"><input type="radio" name="5p6" id="15p6" value="4"><label for="15p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="25p6" value="2"><label for="25p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="35p6" value="1"><label for="35p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p6" id="45p6" value="0"><label for="45p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Has disminuido el tiempo de sueño por permanecer conectado</td>
                    <td><div class="option"><input type="radio" name="5p7" id="15p7" value="4"><label for="15p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="25p7" value="2"><label for="25p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="35p7" value="1"><label for="35p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p7" id="45p7" value="0"><label for="45p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Cuando te acuestas, tardas a dormir pensando en lo que estaba haciendo en internet</td>
                    <td><div class="option"><input type="radio" name="5p8" id="15p8" value="4"><label for="15p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="25p8" value="2"><label for="25p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="35p8" value="1"><label for="35p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p8" id="45p8" value="0"><label for="45p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Te has visto pensando en el momento que te conectaras para chatear</td>
                    <td><div class="option"><input type="radio" name="5p9" id="15p9" value="4"><label for="15p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="25p9" value="2"><label for="25p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="35p9" value="1"><label for="35p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p9" id="45p9" value="0"><label for="45p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. Trata de ocultar de tu familia el tiempo que pasas navegando</td>
                    <td><div class="option"><input type="radio" name="5p10" id="15p10" value="4"><label for="15p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="25p10" value="2"><label for="25p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="35p10" value="1"><label for="35p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p10" id="45p10" value="0"><label for="45p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Te has soñado que estás navegando por internet</td>
                    <td><div class="option"><input type="radio" name="5p11" id="15p11" value="4"><label for="15p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="25p11" value="2"><label for="25p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="35p11" value="1"><label for="35p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p11" id="45p11" value="0"><label for="45p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. Tu conducta suele ser pasiva, o sea, sin importarse con lo que pasa a tu alrededor, cuando estás en redes sociales</td>
                    <td><div class="option"><input type="radio" name="5p12" id="15p12" value="4"><label for="15p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="25p12" value="2"><label for="25p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="35p12" value="1"><label for="35p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p12" id="45p12" value="0"><label for="45p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>13. Te comportas de un modo agresivo cuando estás en redes sociales</td>
                    <td><div class="option"><input type="radio" name="5p13" id="15p13" value="4"><label for="15p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="25p13" value="2"><label for="25p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="35p13" value="1"><label for="35p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p13" id="45p13" value="0"><label for="45p13"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>14. Estás atento a tus posts para ver cuántos likes has recibido</td>
                    <td><div class="option"><input type="radio" name="5p14" id="15p14" value="4"><label for="15p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="25p14" value="2"><label for="25p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="35p14" value="1"><label for="35p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p14" id="45p14" value="0"><label for="45p14"><span></span></label></div></td>
                <tr>
                    <td>15. Crees que el uso del celular te ayudo a entender mejor su funcionamiento</td>
                    <td><div class="option"><input type="radio" name="5p15" id="15p15" value="4"><label for="15p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="25p15" value="2"><label for="25p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="35p15" value="1"><label for="35p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="5p15" id="45p15" value="0"><label for="45p15"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC5" type="submit" value="Enviar">
        </form>
        </div>
        
        <video onClick="mostrarCuestionario(5)" class="banner" autoplay loop>
            <source src="./banners/LasRedesSociales.mp4" type="video/mp4">
        </video>
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr>
                    <th>PREGUNTA</th>
                    <th class="descrip">A menudo</th>
                    <th class="descrip">A veces</th>
                    <th class="descrip">Casi nunca</th>
                    <th class="descrip">Nunca</th>
                <tr>
                    <td>1. El tener redes sociales te pone de buen humor</td>
                    <td><div class="option"><input type="radio" name="6p1" id="16p1" value="4"><label for="16p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="26p1" value="2"><label for="26p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="36p1" value="1"><label for="36p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p1" id="46p1" value="0"><label for="46p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. El estar en redes sociales se volvió un hobbie</td>
                    <td><div class="option"><input type="radio" name="6p2" id="16p2" value="4"><label for="16p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="26p2" value="2"><label for="26p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="36p2" value="1"><label for="36p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p2" id="46p2" value="0"><label for="46p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Es importante tener redes sociales</td>
                    <td><div class="option"><input type="radio" name="6p3" id="16p3" value="4"><label for="16p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="26p3" value="2"><label for="26p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="36p3" value="1"><label for="36p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p3" id="46p3" value="0"><label for="46p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Usas tus redes sociales diariamente</td>
                    <td><div class="option"><input type="radio" name="6p4" id="16p4" value="4"><label for="16p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="26p4" value="2"><label for="26p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="36p4" value="1"><label for="36p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p4" id="46p4" value="0"><label for="46p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. Sueles entrar cada hora a facebook</td>
                    <td><div class="option"><input type="radio" name="6p5" id="16p5" value="4"><label for="16p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="26p5" value="2"><label for="26p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="36p5" value="1"><label for="36p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p5" id="46p5" value="0"><label for="46p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Sueles entrar diariamente a instagram</td>
                    <td><div class="option"><input type="radio" name="6p6" id="16p6" value="4"><label for="16p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="26p6" value="2"><label for="26p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="36p6" value="1"><label for="36p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p6" id="46p6" value="0"><label for="46p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>7. Sueles entrar todas las noches a whatsapp</td>
                    <td><div class="option"><input type="radio" name="6p7" id="16p7" value="4"><label for="16p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="26p7" value="2"><label for="26p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="36p7" value="1"><label for="36p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p7" id="46p7" value="0"><label for="46p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Sueles entrar todas las mañanas a twitter</td>
                    <td><div class="option"><input type="radio" name="6p8" id="16p8" value="4"><label for="16p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="26p8" value="2"><label for="26p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="36p8" value="1"><label for="36p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p8" id="46p8" value="0"><label for="46p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Sueles entrar cada fin de semana a telegram</td>
                    <td><div class="option"><input type="radio" name="6p9" id="16p9" value="4"><label for="16p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="26p9" value="2"><label for="26p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="36p9" value="1"><label for="36p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p9" id="46p9" value="0"><label for="46p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. En el chat, evades los problemas que puedas tener</td>
                    <td><div class="option"><input type="radio" name="6p10" id="16p10" value="4"><label for="16p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="26p10" value="2"><label for="26p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="36p10" value="1"><label for="36p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p10" id="46p10" value="0"><label for="46p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Logras cumplir todas tus metas mismo con el tiempo que dedicas a las redes sociales</td>
                    <td><div class="option"><input type="radio" name="6p11" id="16p11" value="4"><label for="16p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="26p11" value="2"><label for="26p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="36p11" value="1"><label for="36p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p11" id="46p11" value="0"><label for="46p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12. Estar en redes sociales ocupa la mayor parte de tu día</td>
                    <td><div class="option"><input type="radio" name="6p12" id="16p12" value="4"><label for="16p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p12" id="26p12" value="2"><label for="26p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p12" id="36p12" value="1"><label for="36p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p12" id="46p12" value="0"><label for="46p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>13. Me irrita tener que usar redes sociales</td>
                    <td><div class="option"><input type="radio" name="6p13" id="16p13" value="4"><label for="16p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p13" id="26p13" value="2"><label for="26p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p13" id="36p13" value="1"><label for="36p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p13" id="46p13" value="0"><label for="46p13"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>14. Quedas muy feliz cuando recibes muchos likes en tus posts</td>
                    <td><div class="option"><input type="radio" name="6p14" id="16p14" value="4"><label for="16p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p14" id="26p14" value="2"><label for="26p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p14" id="36p14" value="1"><label for="36p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p14" id="46p14" value="0"><label for="46p14"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>15. En las redes sociales, tienes seguridad para hablar lo que sientes y lo que piensas</td>
                    <td><div class="option"><input type="radio" name="6p15" id="16p15" value="4"><label for="16p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p15" id="26p15" value="2"><label for="26p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p15" id="36p15" value="1"><label for="36p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p15" id="46p15" value="0"><label for="46p15"><span></span></label></div></td>
                </tr>
                    <td>16. Me siento triste cuando no tengo a la mano mi celular</td>
                    <td><div class="option"><input type="radio" name="6p16" id="16p16" value="4"><label for="16p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p16" id="26p16" value="2"><label for="26p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p16" id="36p16" value="1"><label for="36p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p16" id="46p16" value="0"><label for="46p16"><span></span></label></div></td>
                </tr>
                    <td>17. Me preocupa no tener tantos seguidores en mis redes sociales</td>
                    <td><div class="option"><input type="radio" name="6p17" id="16p17" value="4"><label for="16p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p17" id="26p17" value="2"><label for="26p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p17" id="36p17" value="1"><label for="36p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p17" id="46p17" value="0"><label for="46p17"><span></span></label></div></td>
                </tr>
                    <td>18. Me da miedo tener redes sociales</td>
                    <td><div class="option"><input type="radio" name="6p18" id="16p18" value="4"><label for="16p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p18" id="26p18" value="2"><label for="26p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p18" id="36p18" value="1"><label for="36p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p18" id="46p18" value="0"><label for="46p18"><span></span></label></div></td>
                </tr>
                    <td>19. Al menos una vez has llorado cuando no navegaste al menos una vez en internet</td>
                    <td><div class="option"><input type="radio" name="6p19" id="16p19" value="4"><label for="16p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p19" id="26p19" value="2"><label for="26p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p19" id="36p19" value="1"><label for="36p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p19" id="46p19" value="0"><label for="46p19"><span></span></label></div></td>
                </tr>
                </tr>
                    <td>20. Cuando estás en las redes sociales, te sientes con más libertad para conversar</td>
                    <td><div class="option"><input type="radio" name="6p20" id="16p20" value="4"><label for="16p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p20" id="26p20" value="2"><label for="26p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p20" id="36p20" value="1"><label for="36p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="6p20" id="46p20" value="0"><label for="46p20"><span></span></label></div></td>
                </tr>
        </table>
            <input class="btn-enviar" name="enviarC6" type="submit" value="Enviar">
        </form>
        </div>
    </section>
    <script src="mostrar.js"></script>
</body>            
</html>