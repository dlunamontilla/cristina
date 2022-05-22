<?php
include("database/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vídeos</title>

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
                <a class="nav-link" data-bs-target="#entren-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Entrenamiento</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="entren-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="consejos.php">
                            <i class="bi bi-circle"></i><span>Consejos</span>
                        </a>
                    </li>
                    <li>
                        <a href="videos.php" class="active">
                            <i class="bi bi-circle"></i><span>Vídeos</span>
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
            <h1>Vídeos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Entrenamiento</li>
                    <li class="breadcrumb-item">Vídeos</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->


        <section class="section videos">

            <!-- Videos -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pt-3">

                            <!-- Navegación -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cardio" type="cardio" role="tab">Cardio</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cintura" type="button" role="tab">Cintura y abdomen</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#brazos" type="button" role="tab">Brazos</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#piernas" type="button" role="tab">Piernas, gluteos y muslos</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#total-body" type="button" role="tab">Todal Body</button>
                                </li>


                            </ul><!-- Fin Navegación -->

                            <!-- Contenido -->
                            <div class="tab-content pt-2">

                                <!-- Cardio -->
                                <div class="tab-pane fade show active" id="cardio" role="tabpanel">
                                    <div class="row ">

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gT3C2xZjw4o?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Cardio sin saltos de bajo impacto para perder peso rápido</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OYqxnKLLeP4" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina de Cardio HIIT Intens 30 minutos para adelgazar y eliminar la grasa abdominal</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mcjMSQCNkbQ?start=6" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina de cardio intenso completa con calentamiento y estiramiento final incluido</h5>
                                        </div>
 
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nIUsMFjpV0g?start=6" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina GAP de 20 minutos con banda elástica y un par de mancuernas.</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CVums-UNrHE?start=6" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina GAP(Glúteos, Abdomen y Piernas) para endurecer, tonificar y deshacerse de la celulitis</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BVIvwuNN3-0?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina GAP de 30 minutos que incluye calentamiento previo y estiramiento final con banda elástica</h5>
                                        </div>

                                    </div>
                                </div><!-- Fin Cardio -->

                                <!-- Cintura y abdomen -->
                                <div class="tab-pane fade" id="cintura" role="tabpanel">
                                    <div class="row ">

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/15C4jceizq8?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina para reducir Cintura y Abdomen. Todos los ejercicios son de pie y no harás mucho esfuerzo</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2svSnFHSRJM?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina intensa de cintura y abdomen de solo 10 minutos con banda elástica</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EJ9Sz202ZV4?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Abdominales de pie con palo para moldear la cintura y endurecer el abdomen</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5Ty9nxONdjA?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina de tan solo 7 minutos para la tonificación y endurecimiento de el abdomen</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yxO2Loep01Q" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina intensa de abdomen, 10 min de ejercicios. Conseguirás un abdomen plano en 14 días</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/__rUlBhvzxo?start=6" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Abdominales intensos en 10 min, excelente rutina para endurecer y tonificar el abdomen</h5>
                                        </div>

                                    </div>
                                </div><!-- Fin Cintura y abdomen -->


                                <!-- Brazos -->
                                <div class="tab-pane fade" id="brazos" role="tabpanel">
                                    <div class="row ">

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f1j2yx9VXxU?start=4" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina de brazos y espalda sin pesas</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PacaXjvM7IE?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Adelgazar y reducir brazos y espalda con adbominales de pie</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uHFANw0fuew?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Tonificar, endurecer y crear un tren superior estilizado</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dxv_XMiHO7c?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Adelgazar brazos y espalda más abdomen rápidamente</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SS0tgLsw7yk?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Reducir brazos y espalda combatiendo la flacidez</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XoXPafUA1wE?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Adelgazar espalda alta y brazos rápidamente en 30 minutos</h5>
                                        </div>

                                    </div>
                                </div><!-- Fin Brazos -->

                                <!-- Piernas, gluteos y muslos -->
                                <div class="tab-pane fade" id="piernas" role="tabpanel">
                                    <div class="row ">

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/va2nvoP6XAo?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Lograr piernas y glúteos fuertes, tonificadas y sin celulitis perfectos</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VNfsU41KmHc?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Aumentar glúteos, piernas y caderas</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CsDnE-IUU2M?start=6" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Tonificación, endurecimiento, levantamiento de glúteos y piernas bonitas sin pesas</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/r7IAwMLsilQ?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Endurecer la parte interna de los muslos</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/g1ocvfqErsw?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Endurecer, tonificar y eliminar flacidez rápido</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NGDCCQm-W7w?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Endurecer los muslos internos y combatir la celulitis</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/t7lYv3ilIiY?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Ejercicios de glúteos más firmes, redondos y levantados sin pesas</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XIzJXWbMCD8?start=6" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina para obtener bonitas piernas y glúteos, sin flacidez, sin celulitis, tonificadas y fuertes</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Fio420SE_TY?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Glúteos más fuertes y tonificados, además disminuir flacidez y celulitis</h5>
                                        </div>

                                    </div>
                                </div><!-- Fin Piernas, gluteos y muslos -->

                                <!-- Total body -->
                                <div class="tab-pane fade" id="total-body" role="tabpanel">
                                    <div class="row ">

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HJRs3-uVTTQ?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Estiramientos para relajar cada músculo de tu cuerpo y aliviar el dolor lumbar</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j_bHvABiAUg" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Calentamiento de 10 min antes de los ejercicios</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5h_DWgEGD0c?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina para tonificar, endurecer, marcar, definir, bajar la grasa y construir músculos bonitos y fuertes</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v33XQDONL2o?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina cuerpo entero con resistencia para ayudar a conseguir una mayor tonificación y prevenir flacidez y celulitis</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rsgaaXo7htM?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina de cuerpo completo para adelgazar rápido haciendo esta rutina 21 días</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-4 mt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pjYoZYFv1D4?start=17" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <h5 style="text-align: center;" class="mt-3">Rutina de bajo impacto dónde sentirás como trabaja cada parte de tu cuerpo. Quemaras muchas calorías sin necesidad de saltar</h5>
                                        </div>

                                    </div>
                                </div><!-- Fin Total body -->

                            </div><!-- Fin Contenido -->

                        </div>
                    </div>
                </div>
            </div> <!-- Fin Videos -->
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


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Archivo scripts JS -->
    <script src='assets/js/main-admin.js'></script>

</body>

</html>