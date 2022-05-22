<?php
include("database/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profesionales</title>

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
                <ul id="mente-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
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
                <a class="nav-link " href="profesionales.php">
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
        <div class="pagetitle ">
            <h1>Profesionales</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Profesionales</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->

    
        <section class="section team mt-4"> 

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/lidia.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lidia Navarro</h4>
                        <span>Entrenadores Personales</span>
                        <div class="contact">
                            <a href="mailto:lidianavarro@gmail.com"><i class="bi bi-envelope"> lidianavarro@gmail.com</i></a>
                            <a href="tel:+34632232422"><i class="bi bi-whatsapp"> +34 632 232 422</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/alejandro.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Alejandro Baena</h4>
                        <span>Instructores de Fitness</span>
                        <div class="contact">
                            <a href="mailto:alejandrobaena@gmail.com"><i class="bi bi-envelope"> alejandrobaena@gmail.com</i></a>
                            <a href="tel:+34642533976"><i class="bi bi-whatsapp"> +34 642 533 976</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/carla.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Carla Cano</h4>
                        <span>Servicios Generales</span>
                        <div class="contact">
                            <a href="mailto:carlacano@gmail.com"><i class="bi bi-envelope"> carlacano@gmail.com</i></a>
                            <a href="tel:+34693524334"><i class="bi bi-whatsapp"> +34 693 524 334</i></a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/hugo.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Hugo Vicente</h4>
                        <span>Atención al cliente</span>
                        <div class="contact">
                            <a href="mailto:saludfit@gmail.com"><i class="bi bi-envelope"> saludfit@gmail.com</i></a>
                            <a href="tel:+34953236578"><i class="bi bi-whatsapp"> +34 95 323 65 78</i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/alejandra.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Alejandra López</h4>
                        <span>Fisioterapeutas</span>
                        <div class="contact">
                            <a href="mailto:alejandralopez@gmail.com"><i class="bi bi-envelope"> alejandralopez@gmail.com</i></a>
                            <a href="tel:+34632232422"><i class="bi bi-whatsapp"> +34 634 987 542</i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/silvia.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Silvia Vidal</h4>
                        <span>Nutricionistas</span>
                        <div class="contact">
                            <a href="mailto:jesusrivera@gmail.com"><i class="bi bi-envelope"> silviavidal@gmail.com</i></a>
                            <a href="tel:+34686675324"><i class="bi bi-whatsapp"> +34 686 675 324</i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/natalia.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Natalia Osona</h4>
                        <span>Psicológos</span>
                        <div class="contact">
                            <a href="mailto:nataliaosona@gmail.com"><i class="bi bi-envelope"> nataliaosona@gmail.com</i></a>
                            <a href="tel:+34672292298"><i class="bi bi-whatsapp"> +34 672 292 298</i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card" style="margin-bottom: 95px">
                    <div class="pic"><img src="assets/img/team/mario.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Mario Garcia</h4>
                        <span>Médicos</span>
                        <div class="contact">
                            <a href="mailto:mariogarcia@gmail.com"><i class="bi bi-envelope"> mariogarcia@gmail.com</i></a>
                            <a href="tel:+34623948653"><i class="bi bi-whatsapp"> +34 623 948 653</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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