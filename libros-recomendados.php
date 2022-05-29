<?php
include __DIR__ . "/app/autoload.php";

use database\Connect;

$connect = new Connect;
$conexion = $connect->getPDO();
$sentencia = $conexion->query('SELECT * FROM dl_events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros Recomendados</title>

    <!--Icono navegación-->
    <link rel="shortcut icon" href="assets/img/logo.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Archivos CSS -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Archivo estilos CSS -->
    <link href="assets/css/style-admin.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <!-- Logo - Icono de navegación -->
        <div class="d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" width="80" height="60">
            </a>
            <i id="toggle-sidebar-btn" class="bi bi-list toggle-sidebar-btn menu__btn"></i>
        </div>

        <!-- Navegación Usuario -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <!-- Icono Usuario -->
                <li class="nav-item dropdown pe-4">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person-fill"></i>
                        <i class="bi bi-caret-down-fill"></i>
                    </a>

                    <!-- Configuración perfil -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Nombre Usuario</h6>
                            <span>Tarifa</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="datos-personales.php">
                                <i class="bi bi-person"></i>
                                <span>Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="preguntas-frecuentes.php">
                                <i class="bi bi-question-circle"></i>
                                <span>Ayuda</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Cerrar Sesión</span>
                            </a>
                        </li>

                    </ul><!-- Fin Configuración perfil -->
                </li><!-- Fin Icono Usuario-->

            </ul>
        </nav><!-- Fin Navegación Usuario-->

    </header><!-- Fin Header -->

    <!-- ======= Barra lateral ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="user.php">
                    <i class="bi bi-grid"></i>
                    <span>Indicadores</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#perfil-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Mi Perfil</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="perfil-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="datos-personales.php">
                            <i class="bi bi-circle"></i><span>Datos Personales</span>
                        </a>
                    </li>
                    <li>
                        <a href="factura.php">
                            <i class="bi bi-circle"></i><span>Factura</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#mente-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-activity"></i><span>Salud Mental</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="mente-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="podcasts.php">
                            <i class="bi bi-circle"></i><span>Podcasts</span>
                        </a>
                    </li>
                    <li>
                        <a href="libros-recomendados.php" class="active">
                            <i class="bi bi-circle"></i><span>Libros</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#act-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar3"></i><span>Actividades</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="act-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="todas-actividades.php">
                            <i class="bi bi-circle"></i><span>Todas las actividades</span>
                        </a>
                    </li>
                    <li>
                        <a href="horario.php">
                            <i class="bi bi-circle"></i><span>Horario</span>
                        </a>
                    </li>
                    <li>
                        <a href="reservar.php">
                            <i class="bi bi-circle"></i><span>Reservar</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#entren-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Entrenamiento</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="entren-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="consejos.php">
                            <i class="bi bi-circle"></i><span>Consejos</span>
                        </a>
                    </li>
                    <li>
                        <a href="videos.php">
                            <i class="bi bi-circle"></i><span>Videos</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="profesionales.php">
                    <i class="bi bi-person-check-fill"></i>
                    <span>Profesionales</span>
                </a>
            </li>

            <li class="nav-heading mt-3">OTROS AJUSTES</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="preguntas-frecuentes.php">
                    <i class="bi bi-question-circle"></i>
                    <span>Preguntas Frecuentes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="contacto.php">
                    <i class="bi bi-envelope"></i>
                    <span>Contacto</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </li>

        </ul>

    </aside><!-- Fin Barra lateral-->




    <main id="main" class="main">

        <!-- Titulo - Migas de pan -->
        <div class="pagetitle">
            <h1>Libros Recomendados</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Salud Mental</li>
                    <li class="breadcrumb-item">Libros Recomendados</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->

        <section class="section libros">
            <!-- Libros -->
            <div class="row">
                <!-- Libro1 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/poder-habitos.png" width="57%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL PÓDER DE LOS HÁBITOS</h3>
                                    <p style="margin-bottom: 0; text-align: justify"><em>El poder de los hábitos</em> nos lleva al límite de los descubrimientos científicos que explican por que existen los hábitos, cómo nos condicionan y cómo cambiarlos. Con este libro conseguirás transformar tu vida laboral, social y personal... <br><a href="https://www.casadellibro.com/libro-el-poder-de-los-habitos/9788417664138/9072337" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro1 -->

                <!-- Libro2 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/quierete-y-mucho.png" width="57%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">QUIÉRETE ¡Y MUCHO!</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Marc Reklau en este libro te muestra cómo aumentar tu autoestima con ejercicios simples y prácticos. Nuestra autoestima afecta todos los aspectos de nuestra vida: nuestras relaciones con los demás, nuestro nivel de autoconfianza... <br><a href="https://www.casadellibro.com/libro-quierete-y-mucho/9789918950843/12419700" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro2 -->

                <!-- Libro3 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/aprendiz-de-sabio.png" width="57%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">APRENDIZ DE SABIO</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Todos poseemos los recursos necesarios para encontrar un camino más satisfactorio y que nos proporcione más felicidad. Sin embargo, a menudo actuamos en contra de nuestro propio bienestar y nos negamos a aceptar el daño... <br><a href="https://www.casadellibro.com/libro-aprendiz-de-sabio-una-guia-insuperable-para-mejorar-tu-vida/9788499085494/1767336" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro3 -->

                <!-- Libro4 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/poder-del-ahora.png" width="57%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL PODER DEL AHORA</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Para adentrarse en <em>El poder del Ahora</em> tendremos que dejar atrás nuestra mente analítica y su falso yo, el ego. Desde la primera página de este extraordinario libro nos elevamos a una mayor altura y respiramos un aire más ligero... <br> <a href="https://www.casadellibro.com/libro-el-poder-del-ahora-una-guia-para-la-iluminacion-espiritual-6-e-d/9788484452065/1159328" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro4 -->

                <!-- Libro5 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/7-habitos.png" width="51%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">LOS 7 HÁBITOS DE LA GENTE ALTAMENTE EFECTIVA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Casi todo el mundo intuye que su comportamiento, tanto en el trabajo como en la vida privada pordría mejorar en muchos aspectos, pero pocos saben cómo conseguirlo. El autor se sirve de anécdotas penetrantes y significativas destinadas a hacernos reflexionar... <br><a href="https://www.casadellibro.com/libro-los-7-habitos-de-la-gente-altamente-efectiva-edicion-revisada-y-actualizada/9788408143987/2583485" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro5 -->

                <!-- Libro6 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/ganar-amigos.png" width="51%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">CÓMO GANAR AMIGOS E INFLUIR SOBRE LAS PERSONAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Carnegie en este libro muestra las técnicas fundamentales para gustar a los demás, comprender sus puntos de vista e imponer las propias ideas sin causar resentimiento. Dale Carnegie escribió este libro con el propósito de ser un suplemento a su curso sobre oratoria y relaciones humanas... <br><a href="https://www.casadellibro.com/libro-como-ganar-amigos-e-influir-sobre-las-personas-62-ed/9788493664923/1222506" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro6 -->

                <!-- Libro7 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/cosas-buenas.png" width="56%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">CÓMO HACER QUE TE PASEN COSAS BUENAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Uniendo el punto de vista científico, psicológico y humano, Marian Rojas nos ofrece una reflexión profunda, de útiles consejos acerca de la aplicación de nuestras propias capacidades al empeño de procurarnos una existencia plena y feliz... <br><a href="https://www.casadellibro.com/libro-como-hacer-que-te-pasen-cosas-buenas/9788467053302/7013936" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro7 -->

                <!-- Libro8 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/tus-zonas-erroneas.png" width="51%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">TUS ZONAS ERRÓNEAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">¿Tienes la sensación de estar desbordado por la existencia? ¿Paralizado por compromisos afectivos y laborales que ya no te satisfacen? ¿Dominado por complejos de culpa o inseguridad? No proyectes tu insatisfacción en otros: la causa está en ti, en las "zonas erróneas" de tu personalidad que te bloquean... <br><a href="https://www.casadellibro.com/libro-tus-zonas-erroneas/9788499085524/1657848" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro8 -->

                <!-- Libro9 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/el-plan-de-los-50-dias.png" width="56%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL PLAN DE LOS 50 DÍAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Una guía que muestra paso a paso como comenzar a crear avance hacia esa vida que siempre has deseado. Todos tenemos sueños y a todos nos gusta creer en lo más profundo de nuestro corazón que nuestra vida puede marcar una diferencia... <br><a href="https://www.casadellibro.com/libro-el-plan-de-los-50-dias-hacia-una-vida-de-exito/9788494131622/2592250" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro9 -->

                <!-- Libro10 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/poder-sin-limites.png" width="56%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">PODER SIN LÍMITES</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Solemos pedirle a la vida un precio bajo, limitando nuestras ambiciones, siendo presas de la frustración o el miedo de ir más allá. Y esta actitud negativa es lo que <em>Poder sin límites</em> ayuda a combatir enseñándonos el poder oculto del cerebro... <br><a href="https://www.casadellibro.com/libro-poder-sin-limites/9788499085500/1697364" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro10 -->

                <!-- Libro11 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/el-club-de-las-cinco-de-la-mañana.png" width="56%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL CLUB DE LAS 5 DE LA MAÑANA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Este libro nos descubrirá las rutinas que han hecho posible que muchas personas alcancen grandes resultados al tiempo que nuestra felicidad y vitalidad aumenta... <br><a href="https://www.casadellibro.com/libro-el-club-de-las-5-de-la-manana-controla-tus-mananas-impulsa-tu-vida/9788466353472/11467409" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro11 -->

                <!-- Libro12 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/cree-en-ti.png" width="58%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">CREE EN TI</h3>
                                    <p style="margin-bottom: 0; text-align: justify">¿Por qué hay personas que consiguen fácilmente lo que quieren y otras no? ¿Estás harto de que tu vida no cambie? <em>Cree en ti</em> no es un libro de autoayuda.Cree en ti es un libro de autoempoderamiento... <br><a href="https://www.casadellibro.com/libro-cree-en-ti/9788408176275/5701998" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro12 -->

                <!-- Libro13 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/vivir-con-abundancia.png" width="51%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">VIVIR CON ABUNDANCIA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Algunas personas materializan todo aquello que desean sin esfuerzo; otras parecen condenadas a una vida de resignación y sufrimiento. <em>Vivir con abundancia</em> no es un libro, es una revolución que te permitirá pasar a formar parte del primer grupo... <br><a href="https://www.casadellibro.com/libro-vivir-con-abundancia-como-tenerlo-todo/9788416256464/2498930" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro13 -->

                <!-- Libro14 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/el-monje-que-vendio-su-ferrari.png" width="51%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL MONJE QUE VENDIÓ SU FERRARI</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Con esta historia tan especial e inolvidable, Robin Sharma nos enseña, paso a paso, una nueva manera de enfocar la vida personal, profesional y familiar. Nos muestra lo importante que es emprender un recorrido vital con una dirección clara, con pasión... <br><a href="https://www.casadellibro.com/libro-el-monje-que-vendio-su-ferrari-una-fabula-espiritual/9788499087122/1814884" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro14 -->

                <!-- Libro15 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/mananas-milagrosas.png" width="52%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">MAÑANAS MILAGROSAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">¿Qué tienen en común Tim Cook, el director de Apple, Anna Wintour, la directora de Vogue US y el fundador de Virgin, Richard Benson? ¿El éxito? Por supuesto. Pero sobre todo, un secreto bien guardado: todos ellos se levantan antes del amanecer... <br><a href="https://www.casadellibro.com/libro-mananas-milagrosas/9788408158530/3033489" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro15 -->

                <!-- Libro16-->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/alquimista.png" width="69%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL ALQUIMISTA</h3>
                                    <p style="margin-bottom: 0; text-align: justify"><em>El Alquimista</em> relata las aventuras de Santiago, un joven pastor andaluz que un día emprende un viaje por las arenas del desierto en busca de un tesoro. Lo que empieza como la búsqueda de bienes mundanos se convertirá en el descubrimiento del tesoro interior... <br><a href="https://www.casadellibro.com/libro-el-alquimista/9788408130451/2304507" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro16 -->

                <!-- Libro17-->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/actitud-mental-positiva.png" width="52%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">LA ACTITUD MENTAL POSITIVA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Este método le indicará como deshacerse de sus "telarañas" mentales, pensar con claridad y explorar a fondo el subconsciente; cómo fijarse un objetivo y cómo alcanzarlo mediante la reflexión persistente y una acción positiva... <br><a href="https://www.casadellibro.com/libro-la-actitud-mental-positiva/9788499086583/1705981" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro17 -->

                <!-- Libro18-->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/el-cociente-agallas.png" width="52%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL COCIENTE AGALLAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Llegar a ser feliz, alcanzar la plenitud, es la meta que persigue todo ser humano. Para ello, la mayoría de las veces, es necesario cambiar aspectos profundos de nuestra propia vida. Ello implica salir de la zona de confort... <br><a href="https://www.casadellibro.com/libro-el-cociente-agallas/9788467045444/2583475" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro18 -->

                <!-- Libro19 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/quien-se-ha-llevado-mi-queso.png" width="52%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">¿QUIÉN SE HA LLEVADO MI QUESO?</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Esta fábula simple e ingeniosa puede aplicarse a todos los ámbitos de la vida. Con palabras y ejemplos comprensibles incluso para un niño, nos enseña que todo cambia. El "queso" del relato representa cualquier cosa que queramos alcanzar... <br><a href="https://www.casadellibro.com/libro-quien-se-ha-llevado-mi-queso-edicion-20-aniversario/9788416997091/9026422" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro19 -->

                <!-- Libro20 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/persona-vitamina.png" width="50%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">ENCUENTRA TU PERSONA VITAMINA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Encuentra tu persona vitamina te ayudará a comprender mejor la relación con tus padres, familiares, pareja y amigos a la vez que irás comprendiendo tu historia emocional... <br><a href="https://www.casadellibro.com/libro-encuentra-tu-persona-vitamina/9788467062212/12381515" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro20 -->

                <!-- Libro21 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/adversidad.png" width="82%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">SUPERAR LA ADVERISDAD</h3>
                                    <p style="margin-bottom: 0; text-align: justify">En epocas de dificultades y en las que la vida te da la espalda, necesitamos mecanismos para resistir. Sobrevivir es la regla, y el ser humano tiene un instrumento natural para combatirlo: la resiliencia... <br><a href="https://www.casadellibro.com/libro-superar-la-adversidad-el-poder-de-la-resilencia/9788467035834/1816736" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro21 -->

                <!-- Libro22 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/me-acompañas.png" width="45%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">¿ME ACOMPAÑAS?</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Una obra para despertar, ir más allá de nuestra personalidad y contactar con nuestro auténtico ser.. <em>¿Me compañas?</em> te hace mirar lo que no se ve a simple vista, a cruzar al otro lado del miedo, a iluminar las sombras... <br><a href="https://www.casadellibro.com/libro-me-acompanas/9788479539764/4908944" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro22 -->

                <!-- Libro23 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/confiar-en-ti.png" width="54%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">EL PODER DE CONFIAR EN TI</h3>
                                    <p style="margin-bottom: 0; text-align: justify"><em>El poder de confiar en ti</em> te invita a convertirte en tu propio coach y a ser tu propio guía con pautas y ejercicios para que aprendas a sentirte bien y a hacer realidad tus verdaderos deseos y aspiraciones... <br><a href="https://www.casadellibro.com/libro-el-poder-de-confiar-en-ti/9788408205630/9024553" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro23 -->

                <!-- Libro24 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="libro-item">
                                <div class="mente-content trainer">
                                    <img class="libros" src="assets/img/books/cuatro-acuerdos.png" width="65%" alt="">
                                    <h3 style="text-align: center;" class="mt-2">LOS CUATRO ACUERDOS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">El doctor Miguel Ruiz nos propone en este libro un sencillo procedimiento para eliminar todas aquellas creencias heredadas que nos limitan y substituirlas por otras que responden a nuestra realidad interior y nos conducen a la libertad... <br><a href="https://www.casadellibro.com/libro-los-cuatro-acuerdos-un-libro-de-sabiduria-tolteca/9788479532536/626219" target="_blank">Ver libro</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Libro24 -->

            </div> <!-- Fin Libros -->
        </section>

    </main>



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright 2021 <strong>SaludFit</strong>. Todos los derechos reservados.
        </div>
        <div class="credits">
            <a href="terminos-y-condiciones.html">Términos y condiciones</a>
            <a href="politica-de-privacidad.html">Política de privacidad</a>
            <a href="politica-de-cookies.html">Política de cookies</a>
        </div>
    </footer><!-- Fin Footer -->

    <!-- ======= Icono flecha ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a><!-- Final 'Icono' -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Archivo scripts JS -->
    <script src='assets/js/main-admin.js'></script>

</body>

</html>