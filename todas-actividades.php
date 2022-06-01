<?php
    include __DIR__ . "/app/autoload.php";

    use app\User;

    $user = new User;

    if (!$user->auth()) {
        header("Location: ./");
    }
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todas las actividades</title>

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
                <a class="nav-link collapsed" data-bs-target="#mente-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-activity"></i><span>Salud Mental</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="mente-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="podcasts.php">
                            <i class="bi bi-circle"></i><span>Podcasts</span>
                        </a>
                    </li>
                    <li>
                        <a href="libros-recomendados.php">
                            <i class="bi bi-circle"></i><span>Libros</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#act-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar3"></i><span>Actividades</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="act-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="todas-actividades.php" class="active">
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
            <h1>TODAS LAS ACTIVIDADES</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Actividades</li>
                    <li class="breadcrumb-item">Todas las actividades</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->


        <section class="section actividades">
            <!-- Actividades -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">

                            <!-- Activ. Quema Calorías -->
                            <h5 class="card-title-activ quema-calorias mt-4 mb-2">QUEMA CALORÍAS</h5>
                            <div class="row my-3 px-2">

                                <!-- Activividad1 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/ciclyng.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Llueva, haga frío o calor en el exterior, en estas clases podrás sentir las mismas sensaciones que pedaleando en el exterior, guiado siempre por las indicaciones de nuestro personal técnico.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        CYCLING
                                    </div>
                                </div> <!-- Fin Activividad1 -->

                                <!-- Activividad2 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/zumba.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad que combina música internacional con coreografías fáciles de seguir, para lograr un entrenamiento de todo el cuerpo y sentirse alegre y saludable.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>200kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        ZUMBA
                                    </div>
                                </div> <!-- Fin Activividad2 -->

                                <!-- Activividad3 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/duet_boxing.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Disciplina con la que mediante movimientos de boxeo se consigue mejorar la fuerza, la capacidad aeróbica, la coordinación de movimientos, los reflejos, la flexibilidad y la propiocepción.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        DUET BOXING
                                    </div>
                                </div> <!-- Fin Activividad3 -->

                                <!-- Activividad4 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/cardio.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad de alta intensidad con una duración muy reducida, útil para perder peso, prevenir enfermedades cardiovaculares, mejorar nuestra fuerza e incluso ganar masa muscular.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>60min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        CARDIO HIT
                                    </div>
                                </div> <!-- Fin Activividad4 -->

                                <!-- Activividad5 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/burpees.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad que mide la resistencia anaeróbica. Se realiza en varios movimientos (flexión de pecho, sentadilla y saltos verticales).</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>30min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>200kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        BURPEES
                                    </div>
                                </div> <!-- Fin Activividad5 -->

                                <!-- Activividad6 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/aerobic.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad coreografiada que te permitirá mejorar tanto tu condición física como la coordinación, a través de sencillos pasos que se realizan siempre siguiendo el ritmo de la música.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        AEROBIC
                                    </div>
                                </div> <!-- Fin Activividad6 -->

                            </div> <!-- Fin Activ. Quema Calorías -->


                            <!-- Activ. Tonifica -->
                            <h5 class="card-title-activ tonifica mt-5 mb-2">TONIFICA</h5>
                            <div class="row my-3 px-2">

                                <!-- Activividad7 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/duet_camp.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Entrenamiento cardiovascular de agilidad y fuerza relacionado con las carreras, pruebas de obstáculos y entrenamientos militares.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>60min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>400kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        DUET CAMP
                                    </div>
                                </div> <!-- Fin Activividad7 -->

                                <!-- Activividad8 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/body_pump.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad orientada a la mejora de la fuerza muscular a través de la combinación de ejercicios propios de peso libre que se realizan al ritmo de la música y utilizando un material que permite variar el peso.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>60min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        BODY PUMP
                                    </div>
                                </div> <!-- Fin Activividad8 -->

                                <!-- Activividad9 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/crossfit.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Combina diferentes tipos de ejercicios y de entrenamiento cruzado, que combina resistencia respiratoria, fuerza, resistencia, potencia, flexibilidad, velocidad, agilidad, coordinación, precisión y equilibrio.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>800kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        CROSSFIT
                                    </div>
                                </div> <!-- Fin Activividad9 -->

                                <!-- Activividad10 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/tonifica.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Entrenamiento muscular combinado de tren inferior, tren superior y core.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>60min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        TONIFICACIÓN
                                    </div>
                                </div> <!-- Fin Activividad10 -->

                                <!-- Activividad11 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/gap.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Trabajaras tres zonas del cuerpo en concreto: Glúteos, Abdominales y Piernas. Su objetivo es eliminar la grasa que por naturaleza suele acumularse en esas zonas, y para tonificar.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>250kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        GAP
                                    </div>
                                </div> <!-- Fin Activividad11 -->

                                <!-- Activividad12 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/abdominales.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad destinada a la tonificación de los músculos abdominales.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>15min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        ABDOMINALES
                                    </div>
                                </div> <!-- Fin Activividad12 -->

                            </div><!-- Fin Activ. Tonifica -->


                            <!-- Activ. Relax -->
                            <h5 class="card-title-activ relax mt-5 mb-2">PREVENCIÓN-RELAX</h5>
                            <div class="row my-3 px-2 mb-5">

                                <!-- Activividad13 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/pilates.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Mejora tu salud postural a través de un trabajo consciente de toda la musculatura estabilizadora del tronco (abdominales, lumbares y musculatura profunda de la espalda).</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>240kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        PILATES
                                    </div>
                                </div> <!-- Fin Activividad13 -->

                                <!-- Activividad14 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/yoga.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad que implica a la conciencia corporal, respiración, corrección postural, meditación y la concentración. Actúa reequilibrando el cuerpo y mejora nuestra autonomía personal. </p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>200kcal</span> 
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        YOGA
                                    </div>
                                </div> <!-- Fin Activividad14 -->

                                <!-- Activividad15 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/body_balance.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Programa que combina técnicas de Yoga, Tai chí y Pilates. Aumenta la flexibilidad, la fuerza y el equilibrio</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>60min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>300kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        BODY BALANCE
                                    </div>
                                </div> <!-- Fin Activividad15 -->

                                <!-- Activividad16 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/estiramientos.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad que trata de estiramientos musculares trabajados por cadenas implicados en la consciencia corporal, respiración diafragmática, corrección postural, meditación y la concentración. Es equilibrador.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>200kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        ESTIRAMIENTOS
                                    </div>
                                </div> <!-- Fin Activividad16 -->

                                <!-- Activividad17 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/hipopresiva.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Ejercicios posturales y respiratorios que aportan múltiples beneficios en terapia, prevención, mejora de la salud, estéticas y de rendimiento deportivo. </p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>60min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>200kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        HIPOPRESIVOS
                                    </div>
                                </div> <!-- Fin Activividad17 -->

                                <!-- Activividad18 -->
                                <div class="col-lg-4 col-md-6 col-sm-12 contenedor-img">
                                    <div class="imagen-wrap">
                                        <img src="assets/img/sports/tai_chi.jpg" class="img-fluid" title="CYCLING" alt="CYCLING">
                                        <div class="imagen-info">
                                            <p>Actividad que trabaja sobre la respiración, relajación, concentración, conciencia corporal, meditación y los estiramientos. Equilibra el sistema nervioso y trabaja especialmente sobre la musculatura profunda.</p>
                                        </div>
                                        <div class="imagen-iconos">
                                            <i class="bi bi-alarm"></i>&nbsp;<span>45min</span>
                                            &nbsp;&nbsp;
                                            <i class="bi bi-lightning"></i><span>200kcal</span>
                                        </div>
                                    </div>

                                    <div class="nombre-aadd" style="background-color:rgba(217, 97, 89, 0.729); color:#fff;">
                                        TAI CHI
                                    </div>
                                </div> <!-- Fin Activividad18 -->

                            </div> <!-- Fin Activ. Relax -->

                        </div>
                    </div>
                </div>
            </div> <!-- Fin Actividades -->
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