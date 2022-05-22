<?php
include("datebase/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horario Actividades</title>

    <!--Icono navegación-->
    <link rel="shortcut icon" href="img/logo.png">

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

    <style>
        .horario .table tbody th, td{
            border: solid #fff 5px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <!-- Logo - Icono de navegación -->
        <div class="d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center">
                <img src="img/logo.png" alt="" width="80" height="60">
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
                        <a href="factura.php" >
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
                        <a href="podcasts.php" >
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
                <a class="nav-link" data-bs-target="#act-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar3"></i><span>Actividades</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="act-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="todas-actividades.php">
                            <i class="bi bi-circle"></i><span>Todas las actividades</span>
                        </a>
                    </li>
                    <li>
                        <a href="horario.php" class="active">
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
            <h1>Horario</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Actividades</li>
                    <li class="breadcrumb-item">Horario</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->


        <section class="section horario">
            <!-- Horario -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">

                            <!-- Etiquetas -->
                            <div class="d-flex justify-content-center mt-4">
                                <div class="section-color d-flex justify-content-center">
                                    <ul class="activ-color">
                                        <li style="color: #006ff2;">QUEMA CALORÍAS</li>
                                        <li style="color: #9c0;">TONIFICA</li>
                                        <li style="color: #c9f;">PREVENCIÓN-RELAX</li>
                                    </ul>
                                </div>
                            </div> <!-- Fin Etiquetas -->

                            <!-- Tabla -->  
                            <div class="table-responsive mb-4">
                                <table class="table">
                                    <!-- Días de la semana -->
                                    <thead>
                                        <tr>
                                            <th scope="col"><i class="bi bi-calendar3"></i></th>
                                            <th scope="col">LUNES</th>
                                            <th scope="col">MARTES</th>
                                            <th scope="col">MIÉRCOLES</th>
                                            <th scope="col">JUEVES</th>
                                            <th scope="col">VIERNES</th>
                                            <th scope="col">SÁBADO</th>
                                            <th scope="col">DOMINGO</th>
                                        </tr>
                                    </thead> <!-- Fin Días de la semana -->

                                    <!-- Clases -->
                                    <tbody>
                                        <!-- fila1.1 -->
                                        <tr>
                                            <th scope="row" rowspan="2">9:00</th>
                                            <td>
                                                <div class="activity-time quemaCal-time">9:00-9:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">9:00-9:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">9:00-9:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">9:00-9:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">9:00-9:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr> <!-- Fin fila1.1 -->

                                        <!-- fila1.2 -->
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="activity-time relax-time">9:30-10:15</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">BODY BALANCE</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">9:30-10:15</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">BODY BALANCE</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">9:30-10:15</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">BODY BALANCE</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila1.2 -->

                                        <!-- fila2 -->
                                        <tr>
                                            <th scope="row">10:00</th>
                                            <td>
                                                <div class="activity-time relax-time">10:00-10:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">10:00-11:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">10:00-11:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">10:00-11:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">10:00-10:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">10:00-10:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">10:00-10:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                        </tr>   <!-- Fin fila2 -->

                                        <!-- fila3.1 -->
                                        <tr>
                                            <th scope="row" rowspan="2">11:00</th>
                                            <td>
                                                <div class="activity-time relax-time">11:00-11:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">ESTIRAMIENTOS</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="activity-time relax-time">11:00-11:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">ESTIRAMIENTOS</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="activity-time tonifica-time">11:00-11:45</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">GAP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">11:00-11:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">BODY BALANCE</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>   <!-- Fin fila3.1 -->

                                        <!-- fila3.2 -->
                                        <tr>
                                            <td>
                                                <div class="activity-time tonifica-time">11:45-12:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">GAP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">11:45-12:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">ABDOMINALES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">11:45-12:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">HIPOPRESIVOS</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">11:45-12:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">ABDOMINALES</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr> <!-- Fin fila3.2 -->

                                        <!-- fila4 -->
                                        <tr>
                                            <th scope="row">12:00</th>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">12:00-12:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                        </tr> <!-- Fin fila4 -->

                                        <!-- fila5 -->
                                        <tr>
                                            
                                            <th scope="row">13:00</th>
                                            <td>
                                                <div class="activity-time tonifica-time">13:00-14:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">TONIFICACIÓN</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">13:00-13:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">13:00-14:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">TONIFICACIÓN</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">13:00-13:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila5 -->
                                        
                                        <!-- fila6 -->
                                        <tr>
                                            <th scope="row">14:00</th>
                                            <td>
                                                <div class="activity-time tonifica-time">14:30-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">DUET CAMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">14:30-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">DUET CAMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">14:30-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">DUET CAMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">14:30-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">DUET CAMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">14:30-15:30</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">HIPOPRESIVOS</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>  <!-- Fin fila6 -->

                                        <!-- fila7.1 -->
                                        <tr>
                                            <th scope="row" rowspan="2">15:00</th>
                                            <td>
                                                <div class="activity-time quemaCal-time">15:00-15:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">AEROBIC</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">15:00-15:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">AEROBIC</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">15:00-15:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">AEROBIC</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="activity-time quemaCal-time">15:00-15:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">AEROBIC</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>  <!-- Fin fila7.1 -->

                                        <!-- fila7.2 -->
                                        <tr>
                                            <td>
                                                <div class="activity-time tonifica-time">15:15-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">ABDOMINALES</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="activity-time tonifica-time">15:15-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">ABDOMINALES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">15:15-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">ABDOMINALES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">15:15-15:30</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">ABDOMINALES</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>  <!-- Fin fila7.2 -->

                                        <!-- fila8.1 -->
                                        <tr>
                                            
                                            <th scope="row" rowspan="2">16:00</th>
                                            <td>
                                                <div class="activity-time relax-time">16:15-17:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">TAI CHI</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">16:15-17:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">TAI CHI</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">16:15-17:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">TAI CHI</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">16:15-17:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">TAI CHI</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila8.1 -->

                                        <!-- fila8.2 -->
                                        <tr>
                                            
                                            <td>
                                                <div class="activity-time quemaCal-time">16:30-17:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">BURPEES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">16:30-17:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">BURPEES</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="activity-time quemaCal-time">16:30-17:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">BURPEES</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>  <!-- Fin fila8.2 -->

                                        <!-- fila9 -->
                                        <tr>
                                            <th scope="row">17:00</th>
                                            <td>
                                                <div class="activity-time relax-time">17:15-18:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">ESTIRAMIENTOS</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">17:15-18:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">17:15-18:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">17:15-18:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">ESTIRAMIENTOS</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">17:15-18:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">ESTIRAMIENTOS</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>  <!-- Fin fila9 -->

                                        <!-- fila10.1 -->
                                        <tr>
                                            <th scope="row" rowspan="2">18:00</th>
                                            <td>
                                                <div class="activity-time quemaCal-time">18:00-18:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">18:00-18:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">18:00-18:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">18:00-18:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">ZUMBA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">18:00-18:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">YOGA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">18:00-18:45</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">18:00-18:45</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila10.1 -->

                                        <!-- fila10.2 -->
                                        <tr>
                                            <td>
                                                <div class="activity-time tonifica-time">18:15-19:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">GAP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">18:15-19:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">GAP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">18:15-19:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">YOGA</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">18:15-19:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">GAP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">18:15-19:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">GAP</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila10.2 -->

                                        <!-- fila11.1 -->
                                        <tr>
                                            <th scope="row" rowspan="3">19:00</th>
                                            <td>
                                                <div class="activity-time relax-time">19:00-19:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:00-19:45</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">19:00-19:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">19:00-19:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">PILATES</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila11.1 -->

                                        <!-- fila11.2 -->
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="activity-time quemaCal-time">19:15-20:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">DUET BOXING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">19:15-20:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">DUET BOXING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">19:15-20:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">DUET BOXING</div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>  <!-- Fin fila11.2 -->

                                        <!-- fila11.3 -->
                                        <tr>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">19:30-20:15</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">CROSSFIT</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila11.3 -->

                                        <!-- fila12.1 -->
                                        <tr>
                                            <th scope="row" rowspan="2">20:00</th>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:00-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CARDIO HIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">20:00-21:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">BODY BALANCE</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:00-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CARDIO HIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:00-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CARDIO HIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">20:00-21:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">BODY BALANCE</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:00-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CARDIO HIT</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:00-20:45</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila12.1 -->

                                        <!-- fila12.2 -->
                                        <tr>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:15-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:15-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:15-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:15-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:15-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time quemaCal-time">20:15-21:00</div>
                                                <div class="activity-cue quemaCal">
                                                    <div class="activity-name">CYCLING</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila12.2 -->

                                        <!-- fila13 -->
                                        <tr>
                                            <th scope="row">21:00</th>
                                            <td>
                                                <div class="activity-time relax-time">21:00-22:00</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">HIPOPRESIVOS</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">21:00-22:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time relax-time">21:00-21:45</div>
                                                <div class="activity-cue relax">
                                                    <div class="activity-name ">ESTIRAMIENTOS</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="activity-time tonifica-time">21:00-22:00</div>
                                                <div class="activity-cue tonifica">
                                                    <div class="activity-name ">BODY PUMP</div>
                                                </div>
                                            </td>
                                        </tr>  <!-- Fin fila13 -->

                                    </tbody> <!-- Fin Clases -->

                                </table>
                            </div><!-- Fin Tabla --> 

                        </div>
                    </div>
                </div>
            </div> <!-- Fin Horario -->
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