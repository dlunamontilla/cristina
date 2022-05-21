<?php
include("datebase/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservar actividad</title>

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
                <a class="nav-link collapsed" href="indicadores.php">
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
                        <a href="horario.php">
                            <i class="bi bi-circle"></i><span>Horario</span>
                        </a>
                    </li>
                    <li>
                        <a href="reservar.php" class="active">
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

    <!-- ======= Contenido ======= -->
    <main id="main" class="main">

        <!-- Titulo - Migas de pan -->
        <div class="pagetitle">
            <h1>Reservar</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Mi Perfil</li>
                    <li class="breadcrumb-item">Reservar</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->


        <section class="section reserva">

            <!-- Reservar -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Reservar actividad</h5>

                            <form action="">
                                <div class="row">
                                    <label for="actividad" class="col-md-2 col-lg-2 col-form-label">Actividad:</label>
                                    <div class="col-md-10 col-lg-10" id="actividad">
                                        <select class="form-select form-control" required>
                                            <option class="option-select" selected>Seleccione Actividad...</option>
                                            <option value="abdominales">Abdominales</option>
                                            <option value="aerobic">Aerobic</option>
                                            <option value="burpes">Burpes</option>
                                            <option value="body-pump">Body Pump</option>
                                            <option value="body-balance">Body Balance</option>
                                            <option value="cardio-hit">Cardio Hit</option>
                                            <option value="crossfit">Crossfit</option>
                                            <option value="cycling">Cycling</option>
                                            <option value="duet-boxing">Duet Boxing</option>
                                            <option value="duet-camp">Duet Camp</option>
                                            <option value="estiramientos">Estiramientos</option>
                                            <option value="gap">Gap</option>
                                            <option value="hipopresivos">Hipopresivos</option>
                                            <option value="pilates">Pilates</option>
                                            <option value="tai-chi">Tai Chi</option>
                                            <option value="tonificacion">Tonificación</option>
                                            <option value="yoga">Yoga</option>
                                            <option value="zumba">Zumba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="horario" class="col-md-2 col-lg-2 col-form-label">Horario:</label>
                                    <div class="col-md-10 col-lg-10" id="horario">
                                        <select class="form-select form-control" required>
                                            <option class="option-select" selected>Seleccione Horario...</option>
                                            <option value="abd_lun_15:15">Abdominales - Lunes | 15:15-15:30</option>
                                            <option value="abd_mier_15:15">Abdominales - Miércoles | 15:15-15:30</option>
                                            <option value="abd_juev_11:45">Abdominales - Jueves | 11:45-12:00</option>
                                            <option value="abd_juev_15:15">Abdominales - Jueves | 15:15-15:30</option>
                                            <option value="abd_vier_15:15">Abdominales - Viernes | 15:15-15:30</option>
                                            <option value="aer_lun_15:00">Aerobic - Lunes | 15:00-15:45</option>
                                            <option value="aer_mar_15:00">Aerobic - Martes | 15:00-15:45</option>
                                            <option value="aer_mier_15:00">Aerobic - Miércoles | 15:00-15:45</option>
                                            <option value="aer_vier_15:00">Aerobic - Viernes | 15:00-15:45</option>
                                            <option value="burp_lun_16:30">Burpes - Lunes | 16:30-17:00</option>
                                            <option value="burp_mar_16:30">Burpes - Martes | 16:30-17:00</option>
                                            <option value="burp_vier_16:30">Burpes - Viernes | 16:30-17:00</option>
                                            <option value="pump_mar_10:00">Body Pump - Martes | 10:00-11:00</option>
                                            <option value="pump_mar_21:00">Body Pump - Martes | 21:00-22:00</option>
                                            <option value="pump_mier_10:00">Body Pump - Miércoles | 10:00-11:00</option>
                                            <option value="pump_mier_19:00">Body Pump - Miércoles | 19:00-19:45</option>
                                            <option value="pump_juev_10:00">Body Pump - Jueves | 10:00-11:00</option>
                                            <option value="pump_juev_21:00">Body Pump - Jueves | 21:00-22:00</option>
                                            <option value="pump_sab_18:00">Body Pump - Sábado | 18:00-18:45</option>
                                            <option value="pump_dom_18:00">Body Pump - Domingo | 18:00-18:45</option>
                                            <option value="balan_mar_9:00">Body Balance - Martes | 9:00-10:15</option>
                                            <option value="balan_mar_20:00">Body Balance - Martes | 20:00-21:00</option>
                                            <option value="balan_mier_9:00">Body Balance - Miércoles | 9:00-10:15</option>
                                            <option value="balan_juev_9:00">Body Balance - Jueves | 9:00-10:15</option>
                                            <option value="balan_vier_20:00">Body Balance - Viernes | 20:00-21:00</option>
                                            <option value="balan_sab_11:00">Body Balance - Sábado | 11:00-11:45</option>
                                            <option value="card_lun_20:00">Cardio Hit - Lunes | 20:00-21:00</option>
                                            <option value="card_mier_20:00">Cardio Hit - Miércoles | 20:00-21:00</option>
                                            <option value="card_juev_20:00">Cardio Hit - Jueves | 20:00-21:00</option>
                                            <option value="card_sab_20:00">Cardio Hit - Sábado | 20:00-21:00</option>
                                            <option value="card_dom_20:00">Cardio Hit - Domingo | 20:00-21:00</option>
                                            <option value="cros_lun_19:30">Crossfit - Lunes | 19:30-20-15</option>
                                            <option value="cros_mar_17:15">Crossfit - Martes | 17:15-18:00</option>
                                            <option value="cros_lun_19:30">Crossfit - Martes | 19:30-20-15</option>
                                            <option value="cros_mier_17:15">Crossfit - Miércoles | 17:15-18:00</option>
                                            <option value="cros_mier_19:30">Crossfit - Miércoles | 19:30-20-15</option>
                                            <option value="cros_juev_19:30">Crossfit - Jueves | 19:30-20-15</option>
                                            <option value="cros_vier_19:30">Crossfit - Viernes | 19:30-20-15</option>
                                            <option value="cros_sab_19:30">Crossfit - Sábado | 19:30-20-15</option>
                                            <option value="cros_dom_19:30">Crossfit - Domingo | 19:30-20-15</option>
                                            <option value="cycl_lun_9:00">Cycling - Lunes | 9:00-9:45</option>
                                            <option value="cycl_lun_20:15">Cycling - Lunes | 20:15-21:00</option>
                                            <option value="cycl_mar_9:00">Cycling - Martes | 9:00-9:45</option>
                                            <option value="cycl_mar_20:15">Cycling - Martes | 20:15-21:00</option>
                                            <option value="cycl_mier_9:00">Cycling - Miércoles | 9:00-9:45</option>
                                            <option value="cycl_mier_20:15">Cycling - Miércoles | 20:15-21:00</option>
                                            <option value="cycl_lun_9:00">Cycling - Jueves | 9:00-9:45</option>
                                            <option value="cycl_juev_20:15">Cycling - Jueves | 20:15-21:00</option>
                                            <option value="cycl_vier_9:00">Cycling - Viernes | 9:00-9:45</option>
                                            <option value="cycl_vier_20:15">Cycling - Viernes | 20:15-21:00</option>
                                            <option value="cycl_sab_10:00">Cycling - Sábado | 10:00-10:45</option>
                                            <option value="cycl_dom_10:00">Cycling - Domingo | 10:00-10:45</option>
                                            <option value="cycl_dom_20:00">Cycling - Domingo | 20:00-20:45</option>
                                            <option value="boxi_mar_19:15">Duet Boxing - Martes | 19:15-20:00</option>
                                            <option value="boxi_mier_19:15">Duet Boxing - Miércoles | 19:15-20:00</option>
                                            <option value="boxi_juev_19:15">Duet Boxing - Jueves | 19:15-20:00</option>
                                            <option value="duet_lun_14:00">Duet Camp - Lunes | 14:00-15:30</option>
                                            <option value="duet_mar_14:00">Duet Camp - Martes | 14:00-15:30</option>
                                            <option value="duet_mier_14:00">Duet Camp - Miércoles | 14:00-15:30</option>
                                            <option value="duet_juev_14:00">Duet Camp - Jueves | 14:00-15:30</option>
                                            <option value="estir_lun_11:00">Estiramientos - Lunes | 11:00-11:45</option>
                                            <option value="estir_lun_17:15">Estiramientos - Lunes | 17:15-18:00</option>
                                            <option value="estir_mier_11:00">Estiramientos - Miércoles | 11:00-11:45</option>
                                            <option value="estir_mier_21:00">Estiramientos - Miércoles | 21:00-21:45</option>
                                            <option value="estir_juev_17:15">Estiramientos - Jueves | 17:15-18:00</option>
                                            <option value="estir_vier_17:15">Estiramientos - Viernes | 17:15-18:00</option>
                                            <option value="gap_lun_11:45">Gap - Lunes | 11:45-12:00</option>
                                            <option value="gap_lun_18:15">Gap - Lunes | 18:15-19:00</option>
                                            <option value="gap_mar_18:15">Gap - Martes | 18:15-19:00</option>
                                            <option value="gap_juev_18:15">Gap - Jueves | 18:15-19:00</option>
                                            <option value="gap_vier_11:00">Gap - Viernes | 11:00-11:45</option>
                                            <option value="gap_vier_18:15">Gap - Viernes | 18:15-19:00</option>
                                            <option value="hipo_lun_21:00">Hipopresivos - Lunes | 21:00-22:00</option>
                                            <option value="hipo_mier_11:45">Hipopresivos - Miércoles | 11:45-12:00</option>
                                            <option value="hipo_vier_14:30">Hipopresivos - Viernes | 14:30-15:30</option>
                                            <option value="pil_lun_10:00">Pilates - Lunes | 10:00-10:45</option>
                                            <option value="pil_lun_19:00">Pilates - Lunes | 19:00-19:45</option>
                                            <option value="pil_mar_13:00">Pilates - Martes | 13:00-13:45</option>
                                            <option value="pil_mar_18:00">Pilates - Martes | 18:00-18:45</option>
                                            <option value="pil_juev_13:00">Pilates - Jueves | 13:00-13:45</option>
                                            <option value="pil_juev_19:00">Pilates - Jueves | 19:00-19:45</option>
                                            <option value="pil_vier_10:00">Pilates - Viernes | 10:00-10:45</option>
                                            <option value="pil_vier_19:00">Pilates - Viernes | 19:00-19:45</option>
                                            <option value="tai_lun_16:15">Tai Chi - Lunes | 16:15-17:00</option>
                                            <option value="tai_mar_16:15">Tai Chi - Martes | 16:15-17:00</option>
                                            <option value="tai_mier_16:15">Tai Chi - Miércoles | 16:15-17:00</option>
                                            <option value="tai_juev_16:15">Tai Chi - Jueves | 16:15-17:00</option>
                                            <option value="ton_lun_13:00">Tonificación - Lunes | 13:00-14:00</option>
                                            <option value="ton_mier_13:00">Tonificación - Miércoles | 13:00-14:00</option>
                                            <option value="yoga_mier_18:15">Yoga - Miércoles | 18:15-19:00</option>
                                            <option value="yoga_vier_18:00">Yoga - Viernes | 18:00-18:45</option>
                                            <option value="zum_lun_12:00">Zumba - Lunes | 12:00-12:45</option>
                                            <option value="zum_lun_18:00">Zumba - Lunes | 18:00-18:45</option>
                                            <option value="zum_mar_12:00">Zumba - Martes | 12:00-12:45</option>
                                            <option value="zum_mier_12:00">Zumba - Miércoles | 12:00-12:45</option>
                                            <option value="zum_mier_18:00">Zumba - Miércoles | 18:00-18:45</option>
                                            <option value="zum_juev_12:00">Zumba - Jueves | 12:00-12:45</option>
                                            <option value="zum_juev_18:00">Zumba - Jueves | 18:00-18:45</option>
                                            <option value="zum_vier_12:00">Zumba - Viernes | 12:00-12:45</option>
                                            <option value="zum_sab_12:00">Zumba - Sábado | 12:00-12:45</option>
                                            <option value="zum_dom_12:00">Zumba - Domingo | 12:00-12:45</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-center mt-3 mb-4">
                                    <a type="submit" class="btn-edit">Reservar</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                        <div class="card">

                            <div class="card-body pb-0">
                                <h5 class="card-title">Clases Reservadas</h5>
                                

                            </div>
                        </div>
                        
                </div>
            </div>

        </section>




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