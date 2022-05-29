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
    <title>Consejos</title>

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
                <a class="nav-link collapsed" data-bs-target="#act-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar3"></i><span>Actividades</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="act-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="todas-actividades.php" >
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
                        <a href="consejos.php" class="active">
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
            <h1>Consejos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Entrenamiento</li>
                    <li class="breadcrumb-item">Consejos</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->

        
        <section class="section consejos">

            <!-- Consejos -->
            <div class="row">
                <!-- Consejo1 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Calentar antes del entrenamiento</h5>
						<p class="description">Antes de hacer ejercicio calendar al menos durante cinco minutos, el calentamiento puede ser caminar a paso ligero sobre la cinta de correr.</p>
					</div>
				</div>
                <!-- Consejo2 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Hacer cardio después de las pesas</h5>
						<p class="description">Ya sea nuestro objetivo ganar músculo o perder grasa, si usamos antes las pesas conseguiremos tener mayor fuerza que si se hace a la inversa.</p>
					</div>
				</div>
                <!-- Consejo3 -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Tener una actitud positiva</h5>
						<p class="description">Con una actitud positiva conseguirás resultados, por el contrario con una actitud negativa no te llevará a ningún lado.</p>
					</div>
				</div>
                <!-- Consejo4 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Convertir el ejercicio en una rutina</h5>
                        <p class="description">El ejercicio se debe tomar como una rutina que hacemos todos los días para así no verlo como una obligación. Ser constantes y hacer ejercicio mínimo dos o tres días por sermana.</p>
					</div>
				</div>
                <!-- Consejo5 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Descansar nuestras horas</h5>
						<p class="description">Comer saludable después de hacer ejercicio, dormir de siete a nueve horas, reducir el estrés y descansar son aspectos vitales para conseguir resultados óptimos.</p>
					</div>
				</div>
                <!-- Consejo6 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Usar el equipo correcto</h5>
						<p class="description">Si no hacemos uso del calzado correcto no estarás comodo y puedes terminar con lesiones graves. Siempre tener en tu bolsa de deporte una botella de agua, toalla y guantillas si haces pesas.</p>
					</div>
				</div>
                <!-- Consejo7 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Rodéate de personas con tus mismas metas</h5>
						<p class="description">La gente de tu alrededor nos puede condicionar mucho, si nos juntamos con personas con las mismas metas que nosotros podemos aprender a llevar una vida sana.</p>
					</div>
				</div>
                <!-- Consejo8 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="consejo">
                        <h5 class="title">Evitar grandes cantidades de grasa antes de entrenar</h5>
                        <p class="description">Las grases son buenas pero tardan mucho en digerirse, por ello no es recomendable tomarlas dos horas antes de entrenar.</p>
                    </div>
                </div>
                <!-- Consejo9 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="consejo">
						<h5 class="title">Busca ayuda y habla con un especialista</h5>
						<p class="description">Si buscas la manera más efectiva de hacer ejercicio lo ideal es programar una serie de citas con uno de nuestros entrenadores personales.</p>
					</div>
				</div>

            </div><!-- Fin Consejos -->
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