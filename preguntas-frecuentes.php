<?php
include("datebase/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preguntas Frecuentes</title>

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
                <a class="nav-link collapsed" href="profesionales.php">
                    <i class="bi bi-person-check-fill"></i>
                    <span>Profesionales</span>
                </a>
            </li>

            <li class="nav-heading mt-3">OTROS AJUSTES</li>

            <li class="nav-item">
                <a class="nav-link" href="preguntas-frecuentes.php">
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
            <h1>Preguntas Frecuentes</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Otros Ajustes</li>
                    <li class="breadcrumb-item">Preguntas Frecuentes</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->


        <section class="section faq">
            <!-- F.A.Q -->
            <div class="row">

                <div class="col-lg-6">
                    <!-- F.A.Q Grupo 1 -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sobre SaludFit</h5>

                            <div class="accordion accordion-flush" id="faq-group-1">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                                            ¿Qué es SaludFit?
                                        </button>
                                    </h2>
                                    <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                        <div class="accordion-body">
                                            SaludFit es un espacio web y virtual que permite a los usuarios realizar gestiones y consultas, aparte de reservar sus actividades dirigidas.
                                            Además, está situado en Valencia permitiendo que puedan asistir nuestros socios al gimnasio cuando quieran para poder utilizar las máquinas.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                                            ¿Qué contenidos me ofrece SaludFit?
                                        </button>
                                    </h2>
                                    <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Reservar clases tanto presencial como online.</li>
                                                <li>Poder tener acceso a más Podcasts y Libros para escucharlos y leerlos cuando y donde quieras.</li>
                                                <li>Acceder a consejos de entrenamiento y alimentación.</li>
                                                <li>Ver vídeos cuando desees para practicar en casa.</li>
                                                <li>Contactar con profesionales de la salud y el deporte.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                                            ¿Cómo puedo comenzar a entrenar en SaludFit?
                                        </button>
                                    </h2>
                                    <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                        <div class="accordion-body">
                                            <p>Los nuevos comiensos siempre dan miedo, es normal por eso si no sabes por dónde empezar, ¡no te preocupes!</p>
                                            <p>Tenemos a nuestros profesionales que te asesoraran en las actividades que mejor se ajusten a tus objetivos y te diseñaran tu plan de entrenamiento personalizado basado en tu edad, condición física y objetivos, aparte de recomendarte los mejores podcasts y libros para ti.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                                            ¿Hay algún servicio de asesoramiento para los socios?
                                        </button>
                                    </h2>
                                    <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                        <div class="accordion-body">
                                            <p>Contamos con un equipo de profesionales del deporte que te podrán ayudar y guiar para realizar tu plan de entrenamientos o tener consultas privadas con profesionales de la salud mental de la forma más segura y efectiva posible.</p>
                                            <p>Si quieres algo más personalizado contáctanos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                                            ¿Cómo funciona el espacio virtual de SaludFit?
                                        </button>
                                    </h2>
                                    <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                        <div class="accordion-body">
                                            <p>El espacio virtual de SaludFit te proponemos llevar una mejor salud mental con nuestras recomendaciones y un seguimiento de tu entrenamiento diario desde casa.</p>
                                           <p>Para que disfrutes con nosotros te hemos preparado los diferentes apartados: </p>
                                           <ul>
                                               <li><b>Indicadores:</b> encontraras tus últimos accesos, un calendario para poder apuntarte cualquier evento importante y donde te aparecerán las actividades a las que te has apuntado, aparte de una lista de tareas para tener tus días más organizados.</li>
                                               <li><b>Mi Perfil:</b> donde podrás ver tus datos con los que te inscribiste y poder editarlos tú mismo si hay algún cambio. Además podrás descargarte la factura e imprimirla.</li>
                                               <li><b>Salud Mental:</b> donde podrás escuchar podcasts para mejorar tú mismo, conocerte más y ver la vida desde otro punto de vista, y unos cuantos libros recomendados de desarrollo y crecimiento personal recomendados por nosotros, dónde podrás ir directamente a comprarlos.</li>
                                               <li><b>Actividades:</b> en este apartado podrás ver las actividades que se imparten en SaludFit, su horario y reservar para asistir a ellas, ya sea de manera presencial u online.</li>
                                               <li><b>Entrenamiento:</b> te aconsejaremos estiramientos y buenos hábitos para un mejor estilo de vida y subiremos videos de ejercicios para que puedas realizarlos en cualquier momento.</li>
                                               <li><b>Profesionales:</b> encontraras buenos profesionales tanto del deporte como la salud mental para poder contactar con ellos directamente y de manera personal.</li>
                                           </ul>
                                           <p>Puedes enviarnos las sugerencias o dudas que tengas, estaremos encantados de darte soluciones.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- Fin F.A.Q Grupo 1 -->

                    <!-- F.A.Q Grupo 2 -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Centro e Inscripción</h5>

                            <div class="accordion accordion-flush" id="faq-group-2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                                            ¿Es cierto que SaludFit abre 365 días al año?
                                        </button>
                                    </h2>
                                    <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                        <p>Si, estamos <b>abiertos los 363 días del año</b> incluido domingos y festivos de 9:00h a 22:00h</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                                            ¿Qué normas existen en nuestros centros?
                                        </button>
                                    </h2>
                                    <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                           <ul>
                                                <li>Uso de toalla, ropa comoda y deportiva.</li>
                                                <li>No se permitirá entrenar con chanclas o ropa baño/interior en las actividades dirigidas.</li>
                                                <li>Es obligatorio dejar nuestras pertenecias en taquillas y en los sitios reservados para ello el material que se utiliza para entrenar.</li>
                                                <li>Está prohibido fumar dentro del centro.</li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                                        ¿Qué puedo hacer en el centro deportivo de SaludFit?
                                        </button>
                                    </h2>
                                    <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                           Puedes acceder y utilizar cualquier máquina disponible y asistir a las actividades dirigidas que reservaste desde el espacio de clientes.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                                        ¿Qué máquinas hay en el centro?
                                        </button>
                                    </h2>
                                    <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                            <p>Disponemos de máquinas libres, de abductores/aductores, de abdominales, de aperturas, de pierna y muchas más, aparte de zonas de peso libre y calentamiento. </p>
                                           <p>Puedes desarrollar el mejor entrenamiento con nosotros y si necesitas ayuda cualquier profesional del deporte de guiará a cómo conseguir tus objetivos de forma segura y sencilla.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                                            ¿Puedo probar el centro antes de apuntarme?
                                        </button>
                                    </h2>
                                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                           Debes acudir al mismo centro y allí te atenderan para informarte de las posibilidades que tienes.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-6" type="button" data-bs-toggle="collapse">
                                            ¿A partir de qué edad puedo inscribirme?
                                        </button>
                                    </h2>
                                    <div id="faqsTwo-6" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                            <p>La edad mínima para inscribirse en nuestro gimnasio son 16 años.</p>
                                           <p>Hasta que se cumpla la mayoría de edad, será necesario que el padre, madre o tutor autorice el alta y la domiciliación de la inscripción.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Fin F.A.Q Grupo 2 -->
                </div>


                    

                <div class="col-lg-6">
                    <!-- F.A.Q Grupo 3 -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Actividades dirigidas</h5>

                            <div class="accordion accordion-flush" id="faq-group-3">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                                            ¿Que actividades dirigidas hay en SaludFit?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                           En el menú lateral en "ACTIVIDADES / TODAS LAS ACTIVIDADES" encontrarás toda la información acerca de cada actividad: descripción, intensidad, calorías consumidas por clase... ¡Elige la que mejor se adapte a tus objetivos!
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                                            ¿Cómo puedo ver los horarios de las actividades dirigidas?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                            En la barra de menú haciendo clic en "ACTIVIDADES / HORARIOS" puedes acceder al calendario de las actividades dirigidas de SaludFit.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                                            ¿Cómo puedo reservar actividades dirigidas?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                            <p>Para reservar alguna actividad debes hacer clic en "ACTIVIDADES / RESERVAR", seleccionas la actividad que deseas reservar, el día de la semana y hora y a continuación seleccionas si vas a asistir de manera presencial u online. Si es online te enviarán un correo el mismo día con un enlace a zoom para poder ver la actividad y seguir al profesor desde donde estés.</p>
                                            <p>Recuerda hacerlo con un máximo de 24 horas y un mínimo de 15 minutos de antelación. Si finalmente no puedes asistir a clase, recuerda cancelar tu reserva para que otro socio pueda disponer de dicha plaza.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                                            ¿Cuántas actividades dirigidas pudo reservar?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Puedes reservar la clase en cualquier momento.</li>
                                                <li>Puedes realizar un máximo de 2 clases por día.</li>
                                                <li>Puedes cancelar la reserva en cualquier momento, si no vas a asistir a la actividad anúlala, ya que otro abonado podrá usar esa plaza.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-5" type="button" data-bs-toggle="collapse">
                                            ¿Qué sucede si reservo una actividad y no asisto?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                            Te pedimos porfavor que anules la actividad si no puedes asistir y asi liberar esa plaza para que otro socio pueda disponer de dicha plaza.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-6" type="button" data-bs-toggle="collapse">
                                            ¿Se puede acudir a las actividades sin reserva a clase?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-6" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                            No, ya que si es presencial no podrás entrar a la sala donde se imparte la actividad y si es online no te enviarán el enlace para acceder a esa clase.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-7" type="button" data-bs-toggle="collapse">
                                            ¿A partir de qué edad se puede participar en las actividades dirigidas?
                                        </button>
                                    </h2>
                                    <div id="faqsThree-7" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                        <div class="accordion-body">
                                           A partir de los 16 años, ya que en el momento de inscribirse el padre, madre o tutor autorizará su alta y la domiciliación de la inscipción.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Fin F.A.Q Grupo 3 -->

                    <!-- F.A.Q Grupo 4 -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tarifas</h5>

                            <div class="accordion accordion-flush" id="faq-group-4">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsFour-1" type="button" data-bs-toggle="collapse">
                                            He cambiado mis datos de cuenta bancaria. ¿Cómo puedo cambiarlos?
                                        </button>
                                    </h2>
                                    <div id="faqsFour-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-4">
                                        <div class="accordion-body">
                                            En el menú de la barra lateral haces clic en "MI PERFIL / DATOS PERSONALES", a continuación clic en "Editar Pefil" y cambias la cuenta bancaria.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsFour-2" type="button" data-bs-toggle="collapse">
                                            ¿Puedo cambiar de cuota?
                                        </button>
                                    </h2>
                                    <div id="faqsFour-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-4">
                                        <div class="accordion-body">
                                            <p>Si se puede cambiar la modalidad del abono. </p>
                                           <p>Podrás cambiarte a las que esten vigentes en el momento del cambio y deberas contactarlo o en recepción del centro o en "CONTACTO" del menú lateral.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsFour-3" type="button" data-bs-toggle="collapse">
                                            ¿Existe permanencia?
                                        </button>
                                    </h2>
                                    <div id="faqsFour-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-4">
                                        <div class="accordion-body">
                                            <p>La permanencia será el tiempo de cuota que se haya abonado (seis meses o anual). Puedes darte de baja en el momento que lo desees comunicándolo un mes antes de la finalización de la cuota.</p>
                                            <p>La baja se hará efectiva el último día del mes y hasta entonces podrás seguir accediendo al centro y al espacio de clientes.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsFour-4" type="button" data-bs-toggle="collapse">
                                            ¿Cómo puedo darme de baja?
                                        </button>
                                    </h2>
                                    <div id="faqsFour-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-4">
                                        <div class="accordion-body">
                                            <p>Para tramitar tu baja debes contactar con nosotros en recepción del centro o en "CONTACTO" del menú lateral, para que así se pueda formalizar tu baja. La baja se hará efectiva el último día del mes y hasta entonces podrás seguir accediendo al centro y al espacio de clientes.</p>
                                            <p>Recuerda comunicarlo un mes antes de la finalización de la cuenta, ya que las gestiones administrativas van despacio. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Fin F.A.Q Grupo 4 -->
                </div>

            </div> <!-- Fin F.A.Q -->
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