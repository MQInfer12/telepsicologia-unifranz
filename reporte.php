<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="reporte.css">
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
    <?php
    include('conexion.php');

    $id = $_GET['id'];
    $tabla = $_GET['tabla'];
    $consulta = "SELECT * FROM $tabla WHERE ID=$id";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_row($resultado);
    ?>

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
        <div class="title-div"><h2 class="title">Formulario</h2></div>

        <?php
        $id_user = $fila[1];
        $consulta = "SELECT * FROM tbl_login WHERE ID=$id_user";
        $resultado = mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_row($resultado);
        ?>

        <div class="datos">
            <div class="dato">
                <h3>Usuario:</h3>
                <p><?php print_r($row[2]) ?></p>
            </div>
            <div class="dato">
                <h3>Correo:</h3>
                <p><?php print_r($row[1]) ?></p>
            </div>
            <div class="dato">
                <h3>Cuestionario:</h3>
                <p class="cuestionario"></p>
                <script>
                    let cadena = "<?php print_r($tabla) ?>";
                    let sinBarras = cadena.replaceAll("_", " ");
                    let mayus = sinBarras.charAt(0).toUpperCase() + sinBarras.slice(1);
                    document.querySelector(".cuestionario").textContent = mayus;
                </script>
            </div>
            <div class="dato">
                <h3>Puntaje:</h3>
                <p><?php 
                $total = 0;
                $sobre = 0;
                for($i = 3; $i < count($fila); $i++) {
                    $sobre++;
                    $total = $total + $fila[$i];
                }
                print_r($total." / ". ($sobre*4));
                ?></p>
            </div>
        </div>
        <div class="buttons">
        <a class="btn-mail" href="./revisar.php">Volver a revisiones</a>
        <?php
        if($fila[2] == 0) {
            ?> 
            <button class="btn-mail" onclick="mostrarModal(<?php print_r($fila[0]) ?>, <?php print_r($id_user) ?>,'<?php print_r($tabla) ?>', '<?php print_r($row[1]) ?>', <?php print_r($total) ?>)"> 
                Enviar correo<i class="icon fa-solid fa-envelope"></i>
            </button> 
            <?php
        }
        ?>
        </div>   
        <script>
            let respuestas = [<?php
                for($i = 3; $i < count($fila); $i++) {
                    print_r($fila[$i]);
                    if($i != count($fila) - 1) {
                        print_r(",");
                    }
                }?>];

            //ADULTEZ

            let vida_diaria_y_tecnologia = [
                ["PREGUNTA", ["A menudo", "A veces", "Casi nunca", "Nunca"]],
                ["1. Alguna vez intentaste pasar menos tiempo conectado y no lo has logrado",[4, 2, 1, 0]],
                ["2. La intención es pasar algunos minutos, pero cuando te das cuentas ya estás conectado a muchas horas",[4, 2, 1, 0]],
                ["3. Mientras estás navegando, te olvidas de los problemas",[4, 2, 1, 0]],
                ["4. Has dejado de hacer alguna actividad de ocio (ver la tele, pasear en el parque, etc) para pasar más tiempo conectado a la internet",[4, 2, 1, 0]],
                ["5. Has sido negligente en tus actividades domésticas para pasar más tiempo navegando",[4, 2, 1, 0]],
                ["6. Tienes dificultad en planificar actividades de descanso (como pasear en un parque, estar con los amigos, otros) por no involucrar internet",[4, 2, 1, 0]],
                ["7. No te das cuenta de las horas que pasas navegando cuando dijiste que solo sería un momento",[4, 2, 1, 0]],
                ["8. Has intentado conectarte menos tiempo en el chat y no lo lograste",[4, 2, 1, 0]],
                ["9. Las personas hablan que pasas tiempo demasiado en las redes sociales",[4, 2, 1, 0]],
                ["10. Te olvidaste las actividades de casa por estar conectado",[4, 2, 1, 0]]
            ];

            let bienestar_emocional_y_tecnologia = [
                ["PREGUNTA", ["A menudo", "A veces", "Casi nunca", "Nunca"]],
                ["1. El recibir un mensaje o correo electrónico es una alegría para ti", [4, 2, 1, 0]],
                ["2. Los amigos virtuales te hacen sentir más feliz que las reuniones presenciales con tu familia y amigos", [4, 2, 1, 0]],
                ["3. Te sientes bien al estar conectado", [4, 2, 1, 0]],
                ["4. Te sientes incómodo cuando alguien te pregunta en qué dedicas el tiempo que pasas navegando", [4, 2, 1, 0]],
                ["5. Te sientes mal si el tiempo en el chat se reduce por alguna actividad que tienes que realizar", [4, 2, 1, 0]],
                ["6. Estas de mal humor si no entras a tus redes sociales", [4, 2, 1, 0]],
                ["7. Tiendes a quedarte pensando y/o soñando que estás navegando en la red", [4, 2, 1, 0]],
                ["8. Te sientes angustiado con la posibilidad de estar desconectado por algun tiempo", [4, 2, 1, 0]],
                ["9. Te sientes ansioso cuando no estas conectado en las redes sociales", [4, 2, 1, 0]],
                ["10. Te sientes molesto cuando alguien te interrumpe cuando estas conectado a la internet", [4, 2, 1, 0]],
                ["11. Tú te sientes enojado si no recibes muchos likes en tu post", [4, 2, 1, 0]],
                ["12. Te sientes con la autoestima más elevada cuando estás chateando", [4, 2, 1, 0]]
            ]

            let relaciones_sociales_y_tecnologia = [
                ["PREGUNTA", ["A menudo", "A veces", "Casi nunca", "Nunca"]],
                ["1. Prefieres estar en la agitación del mundo virtual a estar con tu pareja", [4, 2, 1, 0]],
                ["2. Mantienes relaciones de socialesamistades con otras personas online", [4, 2, 1, 0]],
                ["3. Tienes la costumbre de verificar tus redes sociales luego que despiertas", [4, 2, 1, 0]],
                ["4. Te gusta hacer amigos por redes sociales", [4, 2, 1, 0]],
                ["5. Hablas con gente desconocida en redes sociales", [4, 2, 1, 0]],
                ["6. Suele sentirte aceptado con los amigos virtuales que realizas en redes sociales", [4, 2, 1, 0]],
                ["7. Prefiere estar navegando en la internet que salir a pasear con otras personas", [4, 2, 1, 0]],
                ["8. El tiempo que dedicas a estar conectado es mayor que el tiempo que dedicas a tus amigos", [4, 2, 1, 0]],
                ["9. Ha disminuido el tiempo con tu familia y amigos por estar navegando en el internet", [4, 2, 1, 0]],
                ["10. Prefieres conocer personas por chat, porque puedes ser la persona que quisieras ser", [4, 2, 1, 0]],
                ["11. Socializas más por internet que en persona", [4, 2, 1, 0]],
                ["12. Logras comenzar nuevas amistades en las redes sociales, aunque eres tímido presencialmente", [4, 2, 1, 0]],
                ["13. Prefieres comunicarte por mensaje o email que en persona", [4, 2, 1, 0]]
            ]

            let videojuegos_y_tecnologia = [
                ["PREGUNTA", ["A menudo", "A veces", "Casi nunca", "Nunca"]],
                ["1. Pasas tiempo jugando en línea", [4, 2, 1, 0]],
                ["2. Dejaste actividades como practicar deportes, conversar con amigos, etc, por jugar en línea", [4, 2, 1, 0]],
                ["3. Te ocultas o disimulas mientras juegas en línea cuando te ven tus padres/hijos/pareja", [4, 2, 1, 0]],
                ["4. Repasas las partidas ya jugadas online", [4, 2, 1, 0]],
                ["5. Sientes ansiedad por acabar el juego", [4, 2, 1, 0]],
                ["6.  Sueles cambiar el operador responsable de los juegos a menudo", [4, 2, 1, 0]],
                ["7. Me gusta jugar en videojuegos", [4, 2, 1, 0]]
            ]

            let conducta_y_tecnologia = [
                ["PREGUNTA", ["A menudo", "A veces", "Casi nunca", "Nunca"]],
                ["1. Eres impulsivo con alguien que interrumpe el momento en que esta conectado", [4, 2, 1, 0]],
                ["2. Te sientes más aburrido cuando no estás conectado a internet", [4, 2, 1, 0]],
                ["3. Te irritas cuando no tienes el celular a la mano", [4, 2, 1, 0]],
                ["4. Suele conectar al celular apenas te despiertas", [4, 2, 1, 0]],
                ["5. Estás atento a cualquier novedad en el celular", [4, 2, 1, 0]],
                ["6. No dices la verdad sobre el tiempo que pasas conectado cuando alguien te pregunta", [4, 2, 1, 0]],
                ["7. Has disminuido el tiempo de sueño por permanecer conectado", [4, 2, 1, 0]],
                ["8. Cuando te acuestas, tardas a dormir pensando en lo que estaba haciendo en internet", [4, 2, 1, 0]],
                ["9. Te has visto pensando en el momento que te conectaras para chatear", [4, 2, 1, 0]],
                ["10. Trata de ocultar de tu familia el tiempo que pasas navegando", [4, 2, 1, 0]],
                ["11. Te has soñado que estás navegando por internet", [4, 2, 1, 0]],
                ["12. Tu conducta suele ser pasiva, o sea, sin importarse con lo que pasa a tu alrededor, cuando estás en redes sociales", [4, 2, 1, 0]],
                ["13. Te comportas de un modo agresivo cuando estás en redes sociales", [4, 2, 1, 0]],
                ["14. Estás atento a tus posts para ver cuántos likes has recibido", [4, 2, 1, 0]],
                ["15. Crees que el uso del celular te ayudo a entender mejor su funcionamiento", [4, 2, 1, 0]],
            ]

            let las_redes_sociales = [
                ["PREGUNTA", ["A menudo", "A veces", "Casi nunca", "Nunca"]],
                ["1. El tener redes sociales te pone de buen humor", [4, 2, 1, 0]],
                ["2. El estar en redes sociales se volvió un hobbie", [4, 2, 1, 0]],
                ["3. Es importante tener redes sociales", [4, 2, 1, 0]],
                ["4. Usas tus redes sociales diariamente", [4, 2, 1, 0]],
                ["5. Sueles entrar cada hora a facebook", [4, 2, 1, 0]],
                ["6. Sueles entrar diariamente a instagram", [4, 2, 1, 0]],
                ["7. Sueles entrar todas las noches a whatsapp", [4, 2, 1, 0]],
                ["8. Sueles entrar todas las mañanas a twitter", [4, 2, 1, 0]],
                ["9. Sueles entrar cada fin de semana a telegram", [4, 2, 1, 0]],
                ["10. En el chat, evades los problemas que puedas tener", [4, 2, 1, 0]],
                ["11. Logras cumplir todas tus metas mismo con el tiempo que dedicas a las redes sociales", [4, 2, 1, 0]],
                ["12. Estar en redes sociales ocupa la mayor parte de tu día", [4, 2, 1, 0]],
                ["13. Me irrita tener que usar redes sociales", [4, 2, 1, 0]],
                ["14. Quedas muy feliz cuando recibes muchos likes en tus posts", [4, 2, 1, 0]],
                ["15. En las redes sociales, tienes seguridad para hablar lo que sientes y lo que piensas", [4, 2, 1, 0]],
                ["16. Me siento triste cuando no tengo a la mano mi celular", [4, 2, 1, 0]],
                ["17. Me preocupa no tener tantos seguidores en mis redes sociales", [4, 2, 1, 0]],
                ["18. Me da miedo tener redes sociales", [4, 2, 1, 0]],
                ["19. Al menos una vez has llorado cuando no navegaste al menos una vez en internet", [4, 2, 1, 0]],
                ["20. Cuando estás en las redes sociales, te sientes con más libertad para conversar", [4, 2, 1, 0]]
            ]

            //VIDEOJUEGOS

            let videojuegos_y_estabilidad_emocional = [
                ["PREGUNTA", ["Muy de acuerdo", "De acuerdo", "Indeciso", "En desacuerdo", "Muy en desacuerdo"]],
                ["1. Aunque pase mucho tiempo jugando videojuegos, me considero una persona equilibrada emocionalmente.", [4, 3, 2, 1, 0]],
                ["2. Cuando los demás me provocan en un juego en línea soy capaz de no responder.", [4, 3, 2, 1, 0]],
                ["3. Cuando me piden que diga o haga algo que me parece inaceptable, como insultar o engañar en el juego a un jugador, me niego a hacerlo.", [4, 3, 2, 1, 0]],
                ["4. Llego a acuerdos razonables con otras personas cuando tenemos roces en un juego en línea.", [4, 3, 2, 1, 0]],
                ["5. Soy capaz de quitarme de la mente las preocupaciones y poder jugar tranquilamente.", [4, 3, 2, 1, 0]],
                ["6. A menudo discuto con los demás por perder en un videojuego.", [0, 1, 2, 3, 4]],
                ["7. Soy capaz de divertirme y pasármelo bien en juegos en línea.", [4, 3, 2, 1, 0]],
                ["8. Mantengo conversaciones amigables con la gente en un juego en línea.", [4, 3, 2, 1, 0]],
                ["9. Me responsabilizo de las cosas que hago al momento de jugar un videojuego.", [4, 3, 2, 1, 0]],
                ["10. Genero un ambiente tóxico(Hostil, lleno de agresividad) en los juegos en línea.", [0, 1, 2, 3, 4]],
                ["11. Cuando pierdo una partida suelo culparme.", [0, 1, 2, 3, 4]],
                ["12. Me comunico bien con la gente con la que me relaciono en juegos en línea.", [4, 3, 2, 1, 0]],
                ["13. Tomo decisiones sin dudar ni titubear demasiado para dirigir a mi equipo en la partida del juego en línea.", [4, 3, 2, 1, 0]],
                ["14. Por lo general disfruto hablar con mis compañeros de juegos en línea sin importar si ganamos o perdemos.", [4, 3, 2, 1, 0]],
                ["15. Soy una persona que no suele enfadarse al jugar un videojuego.", [4, 3, 2, 1, 0]],
                ["16. Cuando pierdo una partida me dejo llevar por el sentimiento de la ira.", [0, 1, 2, 3, 4]],
                ["17. Algunos de mis amigos piensan que me enfado fácilmente al jugar algún videojuego.", [0, 1, 2, 3, 4]],
                ["18. Acepto las diferentes opiniones que surgen para crear un ambiente tranquilo en el juego.", [4, 3, 2, 1, 0]],
                ["19. Acepto las diferentes estrategias de juego para crear un ambiente tranquilo en el juego.", [4, 3, 2, 1, 0]],
                ["20. Me enfado rápidamente cuando juego algún videojuego.", [0, 1, 2, 3, 4]],
                ["21. Cuando juego algún videojuego me enfado, pero se me pasa enseguida.", [4, 3, 2, 1, 0]],
                ["22. Algunos de mis amigos piensan que soy una persona impulsiva cuando juego.", [0, 1, 2, 3, 4]],
                ["23. Cuando pierdo una partida suelo culpar a la gente a mi alrededor.", [0, 1, 2, 3, 4]],
                ["24. Algunas veces me siento resentido por haber perdido.", [0, 1, 2, 3, 4]],
                ["25. En momentos donde estoy perdiendo en un videojuego demuestro mi enojo.", [0, 1, 2, 3, 4]],
                ["26. En momentos donde estoy perdiendo en un videojuego soy capaz de relajarme y tranquilizarme.", [4, 3, 2, 1, 0]]
            ]

            let videojuegos_y_frustracion = [
                ["PREGUNTA", ["Muy de acuerdo", "De acuerdo", "Indeciso", "En desacuerdo", "Muy en desacuerdo"]],
                ["1. Cuando estoy frustrado por un videojuego muestro el enfado que tengo.", [0, 1, 2, 3, 4]],
                ["2. Soy capaz de aguantar bien la frustración cuando no consigo ganar en un videojuego.", [4, 3, 2, 1, 0]],
                ["3. Luego de frustrarme por un juego me cuesta mucho volver a calmarme.", [0, 1, 2, 3, 4]],
                ["4. Me frustro durante mucho tiempo sin estar jugando por haber perdido una partida.", [0, 1, 2, 3, 4]],
                ["5. Me frustro tanto en una partida que llegue a lastimarme físicamente.", [0, 1, 2, 3, 4]],
                ["6. Cuando me frustro después de perder una partida siento que pierdo el control de mi mismo.", [0, 1, 2, 3, 4]],
                ["7. Cuando estoy frustrado al jugar un videojuego suelo mostrar irritación.", [0, 1, 2, 3, 4]],
                ["8. Cuando estoy por ganar una partida y el juego tiene “lag” me frustro y reacciono de forma agresiva.", [0, 1, 2, 3, 4]],
                ["9. Cuando no puedo controlar mi enojo dejo a mi equipo para no mostrarlo contra ellos.", [4, 3, 2, 1, 0]],
                ["10. Al ver algo relacionado con el juego en el que perdí me causa frustración.", [0, 1, 2, 3, 4]],
                ["11. Cuando mi equipo va perdiendo, pierdo el control y me desconecto de la partida.", [0, 1, 2, 3, 4]]
            ]

            let videojuegos_y_agresividad_directa = [
                ["PREGUNTA", ["Muy de acuerdo", "De acuerdo", "Indeciso", "En desacuerdo", "Muy en desacuerdo"]],
                ["1. Me enojo con las personas de mi equipo cuando creo que no están jugando bien.", [0, 1, 2, 3, 4]],
                ["2. Reacciono de forma impulsiva si mi equipo no realiza mis indicaciones.", [0, 1, 2, 3, 4]],
                ["3. He amenazado físicamente a otras personas desde el chat de un videojuego.", [0, 1, 2, 3, 4]],
                ["4. Si en una partida un jugador me desagrada, lo llego a acosar en partida persiguiéndolo e intentando eliminarlo la mayoría de veces que pueda.", [0, 1, 2, 3, 4]],
                ["5. He amenazado a gente que conozco por perder una partida.", [0, 1, 2, 3, 4]],
                ["6. Algunas veces pierdo los estribos en un videojuego.", [0, 1, 2, 3, 4]],
                ["7.Me he enfadado tanto por perder una partida que he lastimado a alguien físicamente", [0, 1, 2, 3, 4]],
                ["8. Pienso que a la persona que agredí verbalmente se lo merecía.", [0, 1, 2, 3, 4]],
                ["9. Mis amigos dicen que discuto mucho en los juegos en línea.", [0, 1, 2, 3, 4]],
                ["10. En una partida llego a insultar a mis compañeros.", [0, 1, 2, 3, 4]],
                ["11. Insulte a desconocidos por el chat en un videojuego.", [0, 1, 2, 3, 4]],
                ["12. Insulte a mis amigos por el chat de un videojuego.", [0, 1, 2, 3, 4]],
                ["13. Suelo atacar verbalmente a mis compañeros de juego cuando no siguen mis instrucciones.", [0, 1, 2, 3, 4]],
                ["14. Cuando me encuentro enojado de antemano suelo ser agresivo con mi equipo.", [0, 1, 2, 3, 4]],
                ["15. Cuando no estoy de acuerdo con mis amigos en una partida, discuto abiertamente con ellos.", [4, 3, 2, 1, 0]],
                ["16. Cuando la gente se burla de mi en un videojuego discuto con ellos.", [0, 1, 2, 3, 4]]
            ]

            let videojuegos_y_agresividad_indirecta = [
                ["PREGUNTA", ["Muy de acuerdo", "De acuerdo", "Indeciso", "En desacuerdo", "Muy en desacuerdo"]],
                ["1. Luego de una partida frustrante, sin querer llego a ser verbalmente hiriente con mi familia.", [0, 1, 2, 3, 4]],
                ["2. Cuando pierdo una partida daño mis objetos personales (controles, teclados, etc.)", [0, 1, 2, 3, 4]],
                ["3. Cuando mi equipo decide algo que no me parece suelo ignorarlos y seguir mis propios planes.", [0, 1, 2, 3, 4]],
                ["4. He llegado a estar tan furioso al jugar un videojuego que he roto cosas", [0, 1, 2, 3, 4]],
                ["5. Cuando me enojo por perder por una partida siento ganas de atentar contra la integridad física de las personas que me rodean.", [0, 1, 2, 3, 4]],
                ["6. Tiendo a ser más agresivo al estar perdiendo una partida.", [0, 1, 2, 3, 4]],
                ["7. Siento que la competitividad en los videojuegos saca lo peor de mi", [0, 1, 2, 3, 4]],
                ["8. Pienso que últimamente cuando juego videojuegos soy más agresivo de lo normal.", [0, 1, 2, 3, 4]],
                ["9. Me suelo poner nervioso antes de reaccionar agresivamente en una partida.", [0, 1, 2, 3, 4]],
                ["10. Suelo golpear o lanzar objetos para evitar lastimar a una persona cuando me enojo..", [0, 1, 2, 3, 4]],
                ["11. Tiento a justificar mi agresividad en los videojuegos.", [0, 1, 2, 3, 4]],
                ["12. Tiendo a reaccionar de manera agresiva cuando me siento tan presionado en la partida.", [0, 1, 2, 3, 4]],
                ["13. Creo que mi forma de reaccionar ante una provocación en un videojuego es muy excesiva y desproporcionada.", [0, 1, 2, 3, 4]],

            ]

            //WOLTIK

            let tiktok_en_mi_vida_diaria = [
                ["PREGUNTA", ["Siempre", "Casi siempre", "A veces", "Rara vez", "Nunca"]],
                ["1. Soy consciente de que Tik Tok a desplazado plataformas importantes como Google.", [4, 3, 2, 1, 0]],
                ["2. Paso más de dos horas en la plataforma tik tok.", [4, 3, 2, 1, 0]],
                ["3. Reviso más de cinco veces al día mi celular para ver las notificaciones de tik tok.", [4, 3, 2, 1, 0]],
                ["4. Es importante la cantidad de likes que tienen mis publicaciones.", [4, 3, 2, 1, 0]],
                ["5. Suelo compárame con otras personas en Tik Tok.", [4, 3, 2, 1, 0]],
                ["6. Generalmente suelo seguir los consejos que dan los Influencer.", [4, 3, 2, 1, 0]],
                ["7. Siento que cuando entro a Tik Tok el tiempo pasa más rápido de lo normal.", [4, 3, 2, 1, 0]],
                ["8. Intento aparentar tener una vida perfecta frente a la gente desconocida publicando videos en Tik Tok", [4, 3, 2, 1, 0]],
                ["9. Suelo estar en Tik Tok el tiempo necesario sin descuidarme de mis estudios o familia", [4, 3, 2, 1, 0]],
                ["10. Suelo buscar información de cómo cuidar mi salud en Tik Tok y lo aplico en mi vida cotidiana", [4, 3, 2, 1, 0]],
                ["11. Suelo compárarme con la vida de otras persona dentro de Tik Tok", [4, 3, 2, 1, 0]],
                ["12. Usualmente pienso que es necesario tener redes sociales especialmente Tik Tok", [4, 3, 2, 1, 0]],
                ["13. Duermo menos de lo habitual cada vez que veo Tik Tok", [4, 3, 2, 1, 0]],
                ["14. Suelo utilizar Tik Tok solo para encontrar información y videos graciosos sin estar pendiente sobre los estereotipos", [4, 3, 2, 1, 0]],
                ["15. Soy una persona a la cual le gusta caminar, leer o hacer otras actividades recreativas, y no suelo estar pendiente a la Red social Tik Tok", [4, 3, 2, 1, 0]],
                ["16. Encontré videos en Tik Tok que te pagan por el uso de ciertas aplicaciones y pensé en irme de casa", [4, 3, 2, 1, 0]],
                ["17. Mis padres no suelen estar pendiente al contenido que veo en Tik Tok", [4, 3, 2, 1, 0]]
            ]

            let tiktok_y_mi_alimentacion = [
                ["PREGUNTA", ["Siempre", "Casi siempre", "A veces", "Rara vez", "Nunca"]],
                ["1. Generalmente suelo seguir dietas mencionadas en Tik Tok.", [4, 3, 2, 1, 0]],
                ["2. Encontré información acerca de la Bulimia y Anorexia en Tik Tok.", [4, 3, 2, 1, 0]],
                ["3. Me he auto diagnosticado algún trastornó alimenticio gracias a vídeos o búsquedas en Tik Tok.", [4, 3, 2, 1, 0]],
                ["4. Los consejos de comida saludable que veo en Tik Tok afectan mi manera de comer.", [4, 3, 2, 1, 0]]
            ]

            let tiktok_y_mis_relaciones_sociales = [
                ["PREGUNTA", ["Siempre", "Casi siempre", "A veces", "Rara vez", "Nunca"]],
                ["1. Comparo mi estilo de vida constantemente con la de los influencers.", [4, 3, 2, 1, 0]],
                ["2. Alguna vez me excluyeron de una conversación por no saber la tendencia de un video de Tik Tok.", [4, 3, 2, 1, 0]],
                ["3. Alguna vez subieron contenido de mi persona sin mi consentimiento burlándose de mi en Tik Tok.", [4, 3, 2, 1, 0]],
                ["4. Generalmente en Tik Tok me siguen personas que no conozco y suelo hablar con ellos.", [4, 3, 2, 1, 0]],
                ["5. Dependo de la aprobación social desde que utilizo Tik Tok.", [4, 3, 2, 1, 0]],
                ["6. Desde que tengo Tik Tok, cuando alguien habla mal de mi me afecta mucho.", [4, 3, 2, 1, 0]],
                ["7. Siento la necesidad de encajar en la sociedad y sus estereotipos desde que uso Tik Tok.", [4, 3, 2, 1, 0]],
                ["8. La distracción con los videos de Tik Tok me alejan de socializar con mi familia o amigos.", [4, 3, 2, 1, 0]],
                ["9. Siento necesidad de indagar en la vida personal de un tiktoker en cuanto veo un vídeo suyo, intentando copiar su estilo de vida.", [4, 3, 2, 1, 0]],
                ["10. Subo contenido a Tik Tok bailando y recibo críticas por otras personas con las que no estoy relacionado(a).", [4, 3, 2, 1, 0]],
                ["11. Disfruto mucho la vida social especialmente desde cuando utilizo Tik Tok.", [4, 3, 2, 1, 0]],
                ["12. Generalmente hablo con mis padres o hermanos acerca de esta red social Tik Tok.", [4, 3, 2, 1, 0]]
            ]

            let tiktok_y_mi_aspecto_fisico = [
                ["PREGUNTA", ["Siempre", "Casi siempre", "A veces", "Rara vez", "Nunca"]],
                ["1. Generalmente veo videos en Tik Tok sobre belleza.", [4, 3, 2, 1, 0]],
                ["2. Desde que tengo Tik Tok siento con mayor necesidad de arreglarme antes de cualquier visita o evento que se me presenta.", [4, 3, 2, 1, 0]],
                ["3. Suelo pensar mucho en mi manera de verme físicamente a consecuencia de Tik Tok.", [4, 3, 2, 1, 0]],
                ["4. Me siento presionado/a en bajar de peso o llevar un ritmo de vida 'saludable' gracias a los vídeos que me salen en Tik Tok.", [4, 3, 2, 1, 0]],
                ["5. Me siento mas seguro de mi cuerpo desde que utilizo tik tok.", [4, 3, 2, 1, 0]],
                ["6. Algunos videos en Tik Tok me dejan inseguridades acerca de mi cuerpo.", [4, 3, 2, 1, 0]],
                ["7. Considero que Tik Tok influye en mi imagen de cuerpo perfecto.", [4, 3, 2, 1, 0]],
                ["8. Alguna vez me salió videos acerca de bajar peso en una semana en Tik Tok y busqué como realizarlo.", [4, 3, 2, 1, 0]],
                ["9. Tengo una imagen distorsionada de mi físico frente al espejo desde cuando sigo tiktok.", [4, 3, 2, 1, 0]],
                ["10. Suelo compararme física y emocionalmente con tiktokers.", [4, 3, 2, 1, 0]],
                ["11. Suelo buscar formas para bajar de peso en Tik Tok.", [4, 3, 2, 1, 0]],
                ["12. No dejo que Tik Tok defina mi cuerpo.", [4, 3, 2, 1, 0]],
                ["13. Me siento satisfecho con mi aspecto físico gracias a un Influencer desde que sigo Tik Tok.", [4, 3, 2, 1, 0]],
                ["14. El algoritmo de Tik Tok me sugiere vídeos acerca del 'cuerpo ideal'.", [4, 3, 2, 1, 0]],
                ["15. La idea de un cuerpo perfecto en Tik Tok me hace plantearme ideas de someterte a una cirugía estética.", [4, 3, 2, 1, 0]],
                ["16. Cuando empecé a ver videos en Tik Tok de estereotipos empecé a ver mi cuerpo de otra forma.", [4, 3, 2, 1, 0]],
                ["17. Consideras que el estar mucho tiempo en Tik Tok afectan tu desempeño escolar y calificaciones.", [4, 3, 2, 1, 0]],
                ["18. Expreso abiertamente lo que no me gusta de mi persona desde cuando uso Tik Tok.", [4, 3, 2, 1, 0]],
                ["19. Me he sentido juzgado/a por las personas cuando ven mi físico desde que todos ven Tik Tok.", [4, 3, 2, 1, 0]],
                ["20. Sentí ganas de hacer videos de Tik Tok, pero no creí ser capaz al creer no tener el físico para realizarlos.", [4, 3, 2, 1, 0]],
                ["21. Al ver videos en la aplicación Tik Tok sobre moda, me replanteo mi forma de vestir.", [4, 3, 2, 1, 0]]
            ]

            let tiktok_y_mi_estado_emocional = [
                ["PREGUNTA", ["Siempre", "Casi siempre", "A veces", "Rara vez", "Nunca"]],
                ["1. He sido influenciado en cambiar mi forma de ser por videos de TikTok", [4, 3, 2, 1, 0]],
                ["2. Suele aparecerme videos en Tik Tok muy sensibles que afectan mi estado emocional.", [4, 3, 2, 1, 0]],
                ["3. Suelo estar deprimido a causa de sentirme fracasado por no ser como los Influencers de Tik Tok.", [4, 3, 2, 1, 0]],
                ["4. Tik tok causo que sea muy difícil tomar decisiones por mi cuenta.", [4, 3, 2, 1, 0]],
                ["5. Siento que la red social Tik Tok me sofoca con su contenido cada día acerca de temas delicados.", [4, 3, 2, 1, 0]],
                ["6. Siento que a veces mi vida no tiene sentido a causa de mis inseguridades ocasionadas en Tik tok.", [4, 3, 2, 1, 0]],
                ["7. En ocasiones busco ayuda psicológica en Tik Tok.", [4, 3, 2, 1, 0]],
                ["8. Cuando veo un contenido Tik Tok que no es de mi agrado suelo expresar mi opinión en la sección de comentarios.", [4, 3, 2, 1, 0]],
                ["9. He tenido pensamientos de cómo sería ser otra persona que ví dentro de la red social Tik Tok.", [4, 3, 2, 1, 0]],
                ["10. Suelo compárame con otras personas en Tik Tok.", [4, 3, 2, 1, 0]],
                ["11. Me he sentido atacado emocionalmente por un video que vi en Tik Tok.", [4, 3, 2, 1, 0]],
                ["12. Con frecuencia me siento cansado con todo lo que hago, y esto me lleva a pasar más tiempo en Tik Tok.", [4, 3, 2, 1, 0]],
                ["13. Hay días que pierdo la confianza en mi después de haber visto un video acerca del estereotipo en Tik Tok.", [4, 3, 2, 1, 0]],
                ["14. Me considero una persona muy creativa por lo cual me siento bien sin la red social de Tik Tok.", [4, 3, 2, 1, 0]],
                ["15. Generalmente suelo aburrirme en Tik Tok.", [4, 3, 2, 1, 0]]
            ]

            let tiktok_y_mi_autoestima = [
                ["PREGUNTA", ["Siempre", "Casi siempre", "A veces", "Rara vez", "Nunca"]],
                ["1. Pienso que si en casa dieran más atención pasaría menos tiempo en Tik Tok.", [4, 3, 2, 1, 0]],
                ["2. Considero que Tik Tok me conoce más que mi propia familia y amigos.", [4, 3, 2, 1, 0]],
                ["3. Generalmente no suelo prestar atención hacia personas que hablan de un estereotipo perfecto en Tik Tok ya que me siento satisfecha conmigo mismo (a).", [4, 3, 2, 1, 0]],
                ["4. Generalmente me sale contenido en Tik Tok de autoestima en donde hablan de aceptación a si a uno mismo(a).", [4, 3, 2, 1, 0]],
                ["5. Siento que una vez que instale Tik Tok soy una persona que no tiene tantas cualidades.", [4, 3, 2, 1, 0]],
                ["6. Suelo admirar a personas en Tik Tok por la autoestima que tienen y que transmiten hacia los demás a pesar de no cumplir con los estándares de belleza o estereotipos.", [4, 3, 2, 1, 0]],
                ["7. Valoro mas mi aspecto físico que del aspecto físico que veo en los demás de Tik Tok.", [4, 3, 2, 1, 0]],
                ["8. Estoy consciente que todas mis decisiones tienen consecuencias y comentarios dentro de la aplicación Tik Tok.", [4, 3, 2, 1, 0]],
                ["9. Los comentarios en Tik Tok pueden ser autodestructivos por parte de personas desconocidas burlándose de otras personas.", [4, 3, 2, 1, 0]],
                ["10. No me considero tan valiosa y útil como antes a consecuencia de Tik Tok.", [4, 3, 2, 1, 0]],
                ["11. Tik tok bajo mí autoestima que  me llevo a hacer cosas que sabía que no estaban bien, como ser dietas o dejar de comer.", [4, 3, 2, 1, 0]]
            ]

            function crearFormulario(form) {
                const section = document.querySelector(".first-section");
                let form_animated = document.createElement('div');
                form_animated.classList.add("form-animated");
                let formu = document.createElement('form');
                formu.method = "post";
                formu.classList.add("preguntas-padding");
                let table = document.createElement('table');
                table.classList.add("preguntas");
                let opciones = form[0];
                let tr_title = document.createElement('tr');
                tr_title.classList.add("titulos");
                let th_pregunta = document.createElement('th');
                th_pregunta.textContent = opciones[0];

                tr_title.appendChild(th_pregunta);
                opciones[1].forEach(opcion => {
                    let th_opcion = document.createElement('th');
                    th_opcion.classList.add("descrip");
                    th_opcion.textContent = opcion;
                    tr_title.appendChild(th_opcion);
                });
                table.appendChild(tr_title);

                form.forEach((pregunta, i) => {
                    if(i != 0) {
                        let tr = document.createElement('tr');
                        let td_pregunta = document.createElement('td');
                        td_pregunta.textContent = pregunta[0];
                        tr.appendChild(td_pregunta);

                        pregunta[1].forEach((selected, j) => {
                            let td_radio = document.createElement('td');
                            let div_radio = document.createElement('div');
                            div_radio.classList.add("option");
                            let input_radio = document.createElement('input');
                            input_radio.type = "radio";
                            input_radio.name = "p" + i;
                            input_radio.id = j + "p" + i;
                            let label_radio = document.createElement('label');
                            label_radio.setAttribute("for", j + "p" + i);
                            let span_radio = document.createElement('span');

                            setTimeout(() => {
                                if(selected == respuestas[i - 1]) {
                                    input_radio.checked = true;
                                }
                            }, 220 * i);

                            div_radio.appendChild(input_radio);
                            label_radio.appendChild(span_radio);
                            div_radio.appendChild(label_radio);
                            td_radio.appendChild(div_radio);
                            tr.appendChild(td_radio);
                        });
                        table.appendChild(tr);
                    }
                });

                formu.appendChild(table);
                form_animated.appendChild(formu);
                section.appendChild(form_animated);
            }

            crearFormulario(<?php print_r($tabla) ?>);
        </script>
    </section>
    <script src="revisar.js"></script>
</body>
</html>