<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="videojuegos.css">
    <script defer src="navbar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Telepsicologia Unifranz</title>
    <link rel="shortcut icon" href="./imagenes/icon1.ico" type="image/x-icon">
</head>
<body>
    <?php include("sesionPaciente.php") ?>
    <?php include('enviarVideojuegos.php') ?>
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
        <img src="./banners/videojuegosYEstabilidadEmocional.gif" onClick="mostrarCuestionario(0)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Muy de acuerdo</th>
                    <th class="descrip">De acuerdo</th>
                    <th class="descrip">Indeciso</th>
                    <th class="descrip">En desacuerdo</th>
                    <th class="descrip">Muy en desacuerdo</th>
                </tr>
                <tr>
                    <td>1. Aunque pase mucho tiempo jugando videojuegos, me considero una persona equilibrada emocionalmente.</td>
                    <td><div class="option"><input type="radio" name="1p1" id="11p1" value="4"><label for="11p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="21p1" value="3"><label for="21p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="31p1" value="2"><label for="31p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="41p1" value="1"><label for="41p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p1" id="51p1" value="0"><label for="51p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Cuando los demás me provocan en un juego en línea soy capaz de no responder.</td>
                    <td><div class="option"><input type="radio" name="1p2" id="11p2" value="4"><label for="11p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="21p2" value="3"><label for="21p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="31p2" value="2"><label for="31p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="41p2" value="1"><label for="41p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p2" id="51p2" value="0"><label for="51p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Cuando me piden que diga o haga algo que me parece inaceptable, como insultar o engañar en el juego a un jugador, me niego a hacerlo.</td>
                    <td><div class="option"><input type="radio" name="1p3" id="11p3" value="4"><label for="11p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="21p3" value="3"><label for="21p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="31p3" value="2"><label for="31p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="41p3" value="1"><label for="41p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p3" id="51p3" value="0"><label for="51p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>4. Llego a acuerdos razonables con otras personas cuando tenemos roces en un juego en línea.</p></td>
                    <td><div class="option"><input type="radio" name="1p4" id="11p4" value="4"><label for="11p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="21p4" value="3"><label for="21p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="31p4" value="2"><label for="31p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="41p4" value="1"><label for="41p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p4" id="51p4" value="0"><label for="51p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>5. Soy capaz de quitarme de la mente las preocupaciones y poder jugar tranquilamente.</p>
                    <td><div class="option"><input type="radio" name="1p5" id="11p5" value="4"><label for="11p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="21p5" value="3"><label for="21p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="31p5" value="2"><label for="31p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="41p5" value="1"><label for="41p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p5" id="51p5" value="0"><label for="51p5"><span></span></label></div></td>
                </tr> 
                <tr>
                    <td><p>6. A menudo discuto con los demás por perder en un videojuego.</p></td>
                    <td><div class="option"><input type="radio" name="1p6" id="11p6" value="0"><label for="11p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="21p6" value="1"><label for="21p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="31p6" value="2"><label for="31p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="41p6" value="3"><label for="41p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p6" id="51p6" value="4"><label for="51p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>7. Soy capaz de divertirme y pasármelo bien en juegos en línea.</p></td>
                    <td><div class="option"><input type="radio" name="1p7" id="11p7" value="4"><label for="11p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="21p7" value="3"><label for="21p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="31p7" value="2"><label for="31p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="41p7" value="1"><label for="41p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p7" id="51p7" value="0"><label for="51p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>8. Mantengo conversaciones amigables con la gente en un juego en línea.</p></td>
                    <td><div class="option"><input type="radio" name="1p8" id="11p8" value="4"><label for="11p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="21p8" value="3"><label for="21p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="31p8" value="2"><label for="31p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="41p8" value="1"><label for="41p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p8" id="51p8" value="0"><label for="51p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>9. Me responsabilizo de las cosas que hago al momento de jugar un videojuego.</p></td>
                    <td><div class="option"><input type="radio" name="1p9" id="11p9" value="4"><label for="11p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="21p9" value="3"><label for="21p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="31p9" value="2"><label for="31p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="41p9" value="1"><label for="41p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p9" id="51p9" value="0"><label for="51p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>10. Genero un ambiente tóxico(Hostil, lleno de agresividad) en los juegos en línea.</p></td>
                    <td><div class="option"><input type="radio" name="1p10" id="11p10" value="0"><label for="11p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="21p10" value="1"><label for="21p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="31p10" value="2"><label for="31p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="41p10" value="3"><label for="41p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p10" id="51p10" value="4"><label for="51p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>11. Cuando pierdo una partida suelo culparme.</p></td>
                    <td><div class="option"><input type="radio" name="1p11" id="11p11" value="0"><label for="11p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="21p11" value="1"><label for="21p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="31p11" value="2"><label for="31p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="41p11" value="3"><label for="41p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p11" id="51p11" value="4"><label for="51p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>12. Me comunico bien con la gente con la que me relaciono en juegos en línea.</p></td>
                    <td><div class="option"><input type="radio" name="1p12" id="11p12" value="4"><label for="11p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="21p12" value="3"><label for="21p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="31p12" value="2"><label for="31p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="41p12" value="1"><label for="41p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p12" id="51p12" value="0"><label for="51p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>13. Tomo decisiones sin dudar ni titubear demasiado para dirigir a mi equipo en la partida del juego en línea.</p></td>
                    <td><div class="option"><input type="radio" name="1p13" id="11p13" value="4"><label for="11p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="21p13" value="3"><label for="21p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="31p13" value="2"><label for="31p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="41p13" value="1"><label for="41p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p13" id="51p13" value="0"><label for="51p13"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>14. Por lo general disfruto hablar con mis compañeros de juegos en línea sin importar si ganamos o perdemos.</p></td>
                    <td><div class="option"><input type="radio" name="1p14" id="11p14" value="4"><label for="11p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="21p14" value="3"><label for="21p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="31p14" value="2"><label for="31p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="41p14" value="1"><label for="41p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p14" id="51p14" value="0"><label for="51p14"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>15. Soy una persona que no suele enfadarse al jugar un videojuego.</p></td>
                    <td><div class="option"><input type="radio" name="1p15" id="11p15" value="4"><label for="11p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="21p15" value="3"><label for="21p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="31p15" value="2"><label for="31p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="41p15" value="1"><label for="41p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p15" id="51p15" value="0"><label for="51p15"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>16. Cuando pierdo una partida me dejo llevar por el sentimiento de la ira.</p></td>
                    <td><div class="option"><input type="radio" name="1p16" id="11p16" value="0"><label for="11p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="21p16" value="1"><label for="21p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="31p16" value="2"><label for="31p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="41p16" value="4"><label for="41p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p16" id="51p16" value="4"><label for="51p16"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>17. Algunos de mis amigos piensan que me enfado fácilmente al jugar algún videojuego.</p></td>
                    <td><div class="option"><input type="radio" name="1p17" id="11p17" value="0"><label for="11p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="21p17" value="1"><label for="21p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="31p17" value="2"><label for="31p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="41p17" value="3"><label for="41p17"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p17" id="51p17" value="4"><label for="51p17"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>18. Acepto las diferentes opiniones que surgen para crear un ambiente tranquilo en el juego.</p></td>
                    <td><div class="option"><input type="radio" name="1p18" id="11p18" value="4"><label for="11p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p18" id="21p18" value="3"><label for="21p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p18" id="31p18" value="2"><label for="31p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p18" id="41p18" value="1"><label for="41p18"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p18" id="51p18" value="0"><label for="51p18"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>19. Acepto las diferentes estrategias de juego para crear un ambiente tranquilo en el juego.</p></td>
                    <td><div class="option"><input type="radio" name="1p19" id="11p19" value="4"><label for="11p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p19" id="21p19" value="3"><label for="21p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p19" id="31p19" value="2"><label for="31p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p19" id="41p19" value="1"><label for="41p19"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p19" id="51p19" value="0"><label for="51p19"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>20. Me enfado rápidamente cuando juego algún videojuego.</p></td>
                    <td><div class="option"><input type="radio" name="1p20" id="11p20" value="0"><label for="11p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p20" id="21p20" value="1"><label for="21p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p20" id="31p20" value="2"><label for="31p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p20" id="41p20" value="3"><label for="41p20"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p20" id="51p20" value="4"><label for="51p20"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>21. Cuando juego algún videojuego me enfado, pero se me pasa enseguida.</p></td>
                    <td><div class="option"><input type="radio" name="1p21" id="11p21" value="4"><label for="11p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p21" id="21p21" value="3"><label for="21p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p21" id="31p21" value="2"><label for="31p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p21" id="41p21" value="1"><label for="41p21"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p21" id="51p21" value="0"><label for="51p21"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>22. Algunos de mis amigos piensan que soy una persona impulsiva cuando juego.</p></td>
                    <td><div class="option"><input type="radio" name="1p22" id="11p22" value="0"><label for="11p22"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p22" id="21p22" value="1"><label for="21p22"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p22" id="31p22" value="2"><label for="31p22"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p22" id="41p22" value="3"><label for="41p22"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p22" id="51p22" value="4"><label for="51p22"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>23. Cuando pierdo una partida suelo culpar a la gente a mi alrededor.</p></td>
                    <td><div class="option"><input type="radio" name="1p23" id="11p23" value="0"><label for="11p23"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p23" id="21p23" value="1"><label for="21p23"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p23" id="31p23" value="2"><label for="31p23"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p23" id="41p23" value="3"><label for="41p23"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p23" id="51p23" value="4"><label for="51p23"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>24. Algunas veces me siento resentido por haber perdido.</p></td>
                    <td><div class="option"><input type="radio" name="1p24" id="11p24" value="0"><label for="11p24"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p24" id="21p24" value="1"><label for="21p24"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p24" id="31p24" value="2"><label for="31p24"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p24" id="41p24" value="3"><label for="41p24"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p24" id="51p24" value="4"><label for="51p24"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>25. En momentos donde estoy perdiendo en un videojuego demuestro mi enojo.</p></td>
                    <td><div class="option"><input type="radio" name="1p25" id="11p25" value="0"><label for="11p25"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p25" id="21p25" value="1"><label for="21p25"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p25" id="31p25" value="2"><label for="31p25"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p25" id="41p25" value="3"><label for="41p25"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p25" id="51p25" value="4"><label for="51p25"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>26. En momentos donde estoy perdiendo en un videojuego soy capaz de relajarme y tranquilizarme.</p></td>
                    <td><div class="option"><input type="radio" name="1p26" id="11p26" value="4"><label for="11p26"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p26" id="21p26" value="3"><label for="21p26"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p26" id="31p26" value="2"><label for="31p26"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p26" id="41p26" value="1"><label for="41p26"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="1p26" id="51p26" value="0"><label for="51p26"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC1" type="submit" value="Enviar">
        </form>
        </div>
        <img src="./banners/videojuegosYFrustracion.gif" onClick="mostrarCuestionario(1)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Muy de acuerdo</th>
                    <th class="descrip">De acuerdo</th>
                    <th class="descrip">Indeciso</th>
                    <th class="descrip">En desacuerdo</th>
                    <th class="descrip">Muy en desacuerdo</th>
                </tr>
                <tr>
                    <td>1. Cuando estoy frustrado por un videojuego muestro el enfado que tengo.</td>
                    <td><div class="option"><input type="radio" name="2p1" id="12p1" value="0"><label for="12p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="22p1" value="1"><label for="22p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="32p1" value="2"><label for="32p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="42p1" value="3"><label for="42p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p1" id="52p1" value="4"><label for="52p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Soy capaz de aguantar bien la frustración cuando no consigo ganar en un videojuego.</td>
                    <td><div class="option"><input type="radio" name="2p2" id="12p2" value="4"><label for="12p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="22p2" value="3"><label for="22p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="32p2" value="2"><label for="32p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="42p2" value="1"><label for="42p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p2" id="52p2" value="0"><label for="52p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Luego de frustrarme por un juego me cuesta mucho volver a calmarme.</td>
                    <td><div class="option"><input type="radio" name="2p3" id="12p3" value="0"><label for="12p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="22p3" value="1"><label for="22p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="32p3" value="2"><label for="32p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="42p3" value="3"><label for="42p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p3" id="52p3" value="4"><label for="52p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Al perder una partida la frustración me dura mucho tiempo.</td>
                    <td><div class="option"><input type="radio" name="2p4" id="12p4" value="0"><label for="12p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="22p4" value="1"><label for="22p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="32p4" value="2"><label for="32p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="42p4" value="3"><label for="42p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p4" id="52p4" value="4"><label for="52p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>5. Me frustro tanto en una partida que llegue a lastimarme físicamente.</p></td>
                    <td><div class="option"><input type="radio" name="2p5" id="12p5" value="0"><label for="12p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="22p5" value="1"><label for="22p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="32p5" value="2"><label for="32p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="42p5" value="3"><label for="42p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p5" id="52p5" value="4"><label for="52p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>6. Cuando me frustro después de perder una partida siento que pierdo el control de mi mismo.</p>
                    <td><div class="option"><input type="radio" name="2p6" id="12p6" value="0"><label for="12p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="22p6" value="1"><label for="22p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="32p6" value="2"><label for="32p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="42p6" value="3"><label for="42p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p6" id="52p6" value="4"><label for="52p6"><span></span></label></div></td>
                </tr> 
                <tr>
                    <td><p>7. Cuando estoy frustrado al jugar un videojuego suelo mostrar irritación.</p></td>
                    <td><div class="option"><input type="radio" name="2p7" id="12p7" value="0"><label for="12p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="22p7" value="1"><label for="22p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="32p7" value="2"><label for="32p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="42p7" value="3"><label for="42p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p7" id="52p7" value="4"><label for="52p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>8. Cuando estoy por ganar una partida y comienzo a tener problemas de red me frustro y reacciono de forma agresiva.</p></td>
                    <td><div class="option"><input type="radio" name="2p8" id="12p8" value="0"><label for="12p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="22p8" value="1"><label for="22p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="32p8" value="2"><label for="32p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="42p8" value="3"><label for="42p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p8" id="52p8" value="4"><label for="52p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>9. Cuando no puedo controlar mi enojo dejo a mi equipo para no mostrarlo contra ellos.</p></td>
                    <td><div class="option"><input type="radio" name="2p9" id="12p9" value="4"><label for="12p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="22p9" value="3"><label for="22p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="32p9" value="2"><label for="32p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="42p9" value="1"><label for="42p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p9" id="52p9" value="0"><label for="52p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>10. Ver algo relacionado con el juego en el que perdí me causa frustración.</p></td>
                    <td><div class="option"><input type="radio" name="2p10" id="12p10" value="0"><label for="12p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="22p10" value="1"><label for="22p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="32p10" value="2"><label for="32p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="42p10" value="3"><label for="42p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p10" id="52p10" value="4"><label for="52p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>11. Cuando mi equipo va perdiendo, me enfado y me desconecto de la partida.</p></td>
                    <td><div class="option"><input type="radio" name="2p11" id="12p11" value="0"><label for="12p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="22p11" value="1"><label for="22p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="32p11" value="2"><label for="32p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="42p11" value="3"><label for="42p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="2p11" id="52p11" value="4"><label for="52p11"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC2" type="submit" value="Enviar">
        </form>
        </div>
        <img src="./banners/videojuegosYAgresividadDirecta.gif" onClick="mostrarCuestionario(2)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Muy de acuerdo</th>
                    <th class="descrip">De acuerdo</th>
                    <th class="descrip">Indeciso</th>
                    <th class="descrip">En desacuerdo</th>
                    <th class="descrip">Muy en desacuerdo</th>
                </tr>
                <tr>
                    <td>1. Me enojo con las personas de mi equipo cuando creo que no están jugando bien.</td>
                    <td><div class="option"><input type="radio" name="3p1" id="13p1" value="0"><label for="13p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="23p1" value="1"><label for="23p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="33p1" value="2"><label for="33p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="43p1" value="3"><label for="43p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p1" id="53p1" value="4"><label for="53p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Reacciono de forma impulsiva si mi equipo no realiza mis indicaciones.</td>
                    <td><div class="option"><input type="radio" name="3p2" id="13p2" value="0"><label for="13p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="23p2" value="1"><label for="23p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="33p2" value="2"><label for="33p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="43p2" value="3"><label for="43p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p2" id="53p2" value="4"><label for="53p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. He amenazado físicamente a otras personas desde el chat de un videojuego.</td>
                    <td><div class="option"><input type="radio" name="3p3" id="13p3" value="0"><label for="13p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="23p3" value="1"><label for="23p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="33p3" value="2"><label for="33p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="43p3" value="3"><label for="43p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p3" id="53p3" value="4"><label for="53p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>4. Si en una partida un jugador me desagrada, lo llego a acosar en partida persiguiéndolo e intentando eliminarlo la mayoría de veces que pueda.</td>
                    <td><div class="option"><input type="radio" name="3p4" id="13p4" value="0"><label for="13p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="23p4" value="1"><label for="23p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="33p4" value="2"><label for="33p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="43p4" value="3"><label for="43p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p4" id="53p4" value="4"><label for="53p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>5. He amenazado a gente que conozco por perder una partida.</td>
                    <td><div class="option"><input type="radio" name="3p5" id="13p5" value="0"><label for="13p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="23p5" value="1"><label for="23p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="33p5" value="2"><label for="33p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="43p5" value="3"><label for="43p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p5" id="53p5" value="4"><label for="53p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>6. Algunas veces pierdo los estribos en un videojuego.</td>
                    <td><div class="option"><input type="radio" name="3p6" id="13p6" value="0"><label for="13p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="23p6" value="1"><label for="23p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="33p6" value="2"><label for="33p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="43p6" value="3"><label for="43p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p6" id="53p6" value="4"><label for="53p6"><span></span></label></div></td>
                </tr> 
                <tr>
                    <td>7.Me he enfadado tanto por perder una partida que he lastimado a alguien físicamente</td> 
                    <td><div class="option"><input type="radio" name="3p7" id="13p7" value="0"><label for="13p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="23p7" value="1"><label for="23p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="33p7" value="2"><label for="33p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="43p7" value="3"><label for="43p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p7" id="53p7" value="4"><label for="53p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>8. Pienso que a la persona que agredí verbalmente se lo merecía.</td>
                    <td><div class="option"><input type="radio" name="3p8" id="13p8" value="0"><label for="13p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="23p8" value="1"><label for="23p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="33p8" value="2"><label for="33p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="43p8" value="3"><label for="43p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p8" id="53p8" value="4"><label for="53p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>9. Mis amigos dicen que discuto mucho en los juegos en línea.</td> 
                    <td><div class="option"><input type="radio" name="3p9" id="13p9" value="0"><label for="13p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="23p9" value="1"><label for="23p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="33p9" value="2"><label for="33p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="43p9" value="3"><label for="43p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p9" id="53p9" value="4"><label for="53p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>10. En una partida llego a insultar a mis compañeros.</td>
                    <td><div class="option"><input type="radio" name="3p10" id="13p10" value="0"><label for="13p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="23p10" value="1"><label for="23p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="33p10" value="2"><label for="33p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="43p10" value="3"><label for="43p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p10" id="53p10" value="4"><label for="53p10"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>11. Insulte a desconocidos por el chat en un videojuego.</td>
                    <td><div class="option"><input type="radio" name="3p11" id="13p11" value="0"><label for="13p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="23p11" value="1"><label for="23p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="33p11" value="2"><label for="33p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="43p11" value="3"><label for="43p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p11" id="53p11" value="4"><label for="53p11"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>12.  Insulte a mis amigos por el chat de un videojuego.</td>
                    <td><div class="option"><input type="radio" name="3p12" id="13p12" value="0"><label for="13p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="23p12" value="1"><label for="23p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="33p12" value="2"><label for="33p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="43p12" value="3"><label for="43p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p12" id="53p12" value="4"><label for="53p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>13. Suelo atacar verbalmente a mis compañeros de juego cuando no siguen mis instrucciones.</td>
                    <td><div class="option"><input type="radio" name="3p13" id="13p13" value="0"><label for="13p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="23p13" value="1"><label for="23p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="33p13" value="2"><label for="33p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="43p13" value="3"><label for="43p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p13" id="53p13" value="4"><label for="53p13"><span></span></label></div></td>
                </tr>  
                <tr>
                    <td>14. Cuando me encuentro enojado de antemano suelo ser agresivo con mi equipo.</td>
                    <td><div class="option"><input type="radio" name="3p14" id="13p14" value="0"><label for="13p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p14" id="23p14" value="1"><label for="23p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p14" id="33p14" value="2"><label for="33p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p14" id="43p14" value="3"><label for="43p14"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p14" id="53p14" value="4"><label for="53p14"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>15. Cuando no estoy de acuerdo con mis amigos en una partida, discuto abiertamente con ellos.</td>
                    <td><div class="option"><input type="radio" name="3p15" id="13p15" value="4"><label for="13p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p15" id="23p15" value="3"><label for="23p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p15" id="33p15" value="2"><label for="33p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p15" id="43p15" value="1"><label for="43p15"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p15" id="53p15" value="0"><label for="53p15"><span></span></label></div></td>
                </tr>
                <tr> 
                    <td>16. Cuando la gente se burla de mi en un videojuego discuto con ellos.</td>
                    <td><div class="option"><input type="radio" name="3p16" id="13p16" value="0"><label for="13p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p16" id="23p16" value="1"><label for="23p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p16" id="33p16" value="2"><label for="33p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p16" id="43p16" value="3"><label for="43p16"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="3p16" id="53p16" value="4"><label for="53p16"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC3" type="submit" value="Enviar">
        </form>
        </div>
        <img src="./banners/videojuegosYAgresividadIndirecta.gif" onClick="mostrarCuestionario(3)" class="banner">
        <div class="form-animated">
            <form class="preguntas-padding" method="post">
            <table class="preguntas">
                <tr class="titulos">
                    <th>PREGUNTA</th>
                    <th class="descrip">Muy de acuerdo</th>
                    <th class="descrip">De acuerdo</th>
                    <th class="descrip">Indeciso</th>
                    <th class="descrip">En desacuerdo</th>
                    <th class="descrip">Muy en desacuerdo</th>
                </tr>
                <tr>
                    <td>1. Luego de una partida frustrante, sin querer llego a ser verbalmente hiriente con mi familia.</td>
                    <td><div class="option"><input type="radio" name="4p1" id="14p1" value="0"><label for="14p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="24p1" value="1"><label for="24p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="34p1" value="2"><label for="34p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="44p1" value="3"><label for="44p1"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p1" id="54p1" value="4"><label for="54p1"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>2. Cuando pierdo una partida daño mis objetos personales (controles, teclados, etc.) </td>
                    <td><div class="option"><input type="radio" name="4p2" id="14p2" value="0"><label for="14p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="24p2" value="1"><label for="24p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="34p2" value="2"><label for="34p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="44p2" value="3"><label for="44p2"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p2" id="54p2" value="4"><label for="54p2"><span></span></label></div></td>
                </tr>
                <tr>
                    <td>3. Cuando mi equipo decide algo que no me parece suelo ignorarlos y seguir mis propios planes</td>
                    <td><div class="option"><input type="radio" name="4p3" id="14p3" value="0"><label for="14p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="24p3" value="1"><label for="24p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="34p3" value="2"><label for="34p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="44p3" value="3"><label for="44p3"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p3" id="54p3" value="4"><label for="54p3"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>4. He llegado a estar tan furioso al jugar un videojuego que he roto cosas</p></td>
                    <td><div class="option"><input type="radio" name="4p4" id="14p4" value="0"><label for="14p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="24p4" value="1"><label for="24p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="34p4" value="2"><label for="34p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="44p4" value="3"><label for="44p4"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p4" id="54p4" value="4"><label for="54p4"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>5. Cuando me enojo por perder por una partida siento ganas de atentar contra la integridad física de las personas que me rodean.</p>
                    <td><div class="option"><input type="radio" name="4p5" id="14p5" value="0"><label for="14p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="24p5" value="1"><label for="24p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="34p5" value="2"><label for="34p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="44p5" value="3"><label for="44p5"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p5" id="54p5" value="4"><label for="54p5"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>6. Tiendo a ser más agresivo al estar perdiendo una partida.</p></td>
                    <td><div class="option"><input type="radio" name="4p6" id="14p6" value="0"><label for="14p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="24p6" value="1"><label for="24p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="34p6" value="2"><label for="34p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="44p6" value="3"><label for="44p6"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p6" id="54p6" value="4"><label for="54p6"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>7. Siento que la competitividad en los videojuegos saca lo peor de mi.</p></td>
                    <td><div class="option"><input type="radio" name="4p7" id="14p7" value="0"><label for="14p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="24p7" value="1"><label for="24p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="34p7" value="2"><label for="34p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="44p7" value="3"><label for="44p7"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p7" id="54p7" value="4"><label for="54p7"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>8. Pienso que últimamente cuando juego videojuegos soy más agresivo de lo normal.</p></td>
                    <td><div class="option"><input type="radio" name="4p8" id="14p8" value="0"><label for="14p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="24p8" value="1"><label for="24p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="34p8" value="2"><label for="34p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="44p8" value="3"><label for="44p8"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p8" id="54p8" value="4"><label for="54p8"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>9. Me suelo poner nervioso antes de reaccionar agresivamente en una partida.</p></td>
                    <td><div class="option"><input type="radio" name="4p9" id="14p9" value="0"><label for="14p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="24p9" value="1"><label for="24p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="34p9" value="2"><label for="34p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="44p9" value="3"><label for="44p9"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p9" id="54p9" value="4"><label for="54p9"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>10. Suelo golpear o lanzar objetos para evitar lastimar a una persona cuando me enojo.</p></td>
                    <td><div class="option"><input type="radio" name="4p10" id="14p10" value="0"><label for="14p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="24p10" value="1"><label for="24p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="34p10" value="2"><label for="34p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="44p10" value="3"><label for="44p10"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p10" id="54p10" value="4"><label for="54p10"><span></span></label></div></td>
                </tr>
                <tr> 
                    <td><p>11. Tiento a justificar mi agresividad en los videojuegos.</p></td>
                    <td><div class="option"><input type="radio" name="4p11" id="14p11" value="0"><label for="14p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="24p11" value="1"><label for="24p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="34p11" value="2"><label for="34p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="44p11" value="3"><label for="44p11"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p11" id="54p11" value="4"><label for="54p11"><span></span></label></div></td>
                </tr>
                <tr> 
                    <td><p>12. Tiendo a reaccionar de manera agresiva cuando me siento tan presionado en la partida.</p></td>
                    <td><div class="option"><input type="radio" name="4p12" id="14p12" value="0"><label for="14p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="24p12" value="1"><label for="24p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="34p12" value="2"><label for="34p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="44p12" value="3"><label for="44p12"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p12" id="54p12" value="4"><label for="54p12"><span></span></label></div></td>
                </tr>
                <tr>
                    <td><p>13. Creo que mi forma de reaccionar ante una provocación en un videojuego es muy excesiva y desproporcionada.</p></td>
                    <td><div class="option"><input type="radio" name="4p13" id="14p13" value="0"><label for="14p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="24p13" value="1"><label for="24p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="34p13" value="2"><label for="34p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="44p13" value="3"><label for="44p13"><span></span></label></div></td>
                    <td><div class="option"><input type="radio" name="4p13" id="54p13" value="4"><label for="54p13"><span></span></label></div></td>
                </tr>
            </table>
            <input class="btn-enviar" name="enviarC4" type="submit" value="Enviar">
        </form>
        </div>
    <script src="mostrar.js"></script>
</body>
</html>