<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Podcasts</title>

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
                        <a href="podcasts.php" class="active">
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
            <h1>Podcasts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
                    <li class="breadcrumb-item">Salud Mental</li>
                    <li class="breadcrumb-item">Podcasts</li>
                </ol>
            </nav>
        </div><!-- Fin Migas de pan -->


        <section class="section podcasts">
            <!-- Podcasts -->
            <div class="row">
                <!-- Podcast1 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/0sGGLIDnnijRPLef7InllD?utm_source=generator&theme=0" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">ENTIENDE TU MENTE</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Podcast de psicología que de una manera amena cuenta cómo funciona nuestra mente para poder controlar o superar las situaciones, retos, o dificultades que se te presentan día a día.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast1 -->

                <!-- Podcast2 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/0KUjSzqMyxrTyXuw15j4e8?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">SE REGALAN DUDAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Lety Sahagún y Ashley Frangie te invitan a que te lo cuestiones todo: de dónde vienes, a dónde vas, qué le aportas al mundo, qué te hace falta sanar, de qué pensamientos te alimentas, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast2 -->

                <!-- Podcast3 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/1TDJJoHWEq7Nbh3yEBOJOj?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">PSICOLOGÍA AL DESNUDO</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Este podcast es una producción de Psicóloga Clínica Marina Mammoliti y está aquí para guiarte en tu gestión emocional. ¿El objetivo? Que puedas vivir una vida plena, feliz y llena de sentido.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast3 -->

                <!-- Podcast4 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/7ADFu7XNQhwVRxruJL0OxC?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">COFFUELLED</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Marguga habla sobre nutrición emocional, salud espiritual, mindfulness y salud mental. Entrevista a personas que te pueden ayudar hacia la autoconsciencia desde la meditación.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast4 -->

                <!-- Podcast5 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/5DJvmyRXDP22PcJ7pi4kYT?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">CHARUCA, JEFA DE TU VIDA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Charucla comparte a la semana historias motivadoras y experiencias de éxito de sus invitados, es un poscast para enseñarle a todas las mujeres que ellas pueden ser las jefas de sus vidas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast5 -->

                <!-- Podcast6 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/5YL4n5woXEUqfVNWHsSJJy?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">¡CON AMOR, CARAJO!</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Lorena Aguirre, pedagoga, neuropsicología y coach de vida toca temas como la educación emocional, relaciones interpersonales sanas y volver a colocarte en el asiento del piloto de tu vida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast6 -->

                <!-- Podcast7 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/3CyozwHt48EWyiMDO6uxu4?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">STAY WILD</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Paula Garcia en este podcast habla sobre experiencias, emociones, inseguridades, miedos que toda persona podemos sentir y ella ayuda a reflexionar sobre esos sentimientos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast7 -->

                <!-- Podcast8 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/4f7zlV39dM0zTZHkkQeT9z?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">CUIDA TU MENTE</h3>
                                    <p style="margin-bottom: 0; text-align: justify;">Ayuda a conocerte mejor y a tu propia mente. Este podcast te dará herramientas prácticas para obtener una vida más sana, potenciar tus fortalezas y eliminar aquellas emociones negativas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast8 -->

                <!-- Podcast9 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/69LULp34At6BNtDP3PqbW5?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">ENTRENAMIENTO PARA LA MENTE</h3>
                                    <p style="margin-bottom: 0; text-align: justify; ">Nico Iglesias, terapeuta gastaltico y coach profesional te ayuda a "entrenar la mente" con ejercicios y prácticas que colaboran con el proceso de cambio y superación personal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast9 -->

                <!-- Podcast10 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/0UmgrZ6hnUhl8rXQyCoQKC?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">CONVERSACIONES INSPIRADORAS</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Jesús García en este podcasts tiene tener conversaciones sobre historias de superación, autoconocimiento y crecimiento personal con personas que son un ejemplo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast10 -->

                <!-- Podcast11 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/12Ev7yJyd1AHNDCzNzsehy?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">PSICOLOGÍA Y BIENESTAR</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Irene Muñoz entrevista a psicólogos especializados para tratar de temas que pueden ayudarte a ti como la autoestima, los celos y los trastornos de personalidad, pero con palabras que todos pueden entender.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast11 -->

                <!-- Podcast12 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/5heHksT8rReQUXitfF1MEs?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">MENTOR360</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Luis Ramos entrevista a referentes mundiales que te ayudan en temas como la productividad, el cremiento personal y profesional. Temas de reflexión, conovmientos, acciones todo orientado a tu aceleración y tus resultados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast12 -->

                <!-- Podcast13 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/1P0kcdXx0xpbBNzBDiUugB?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">EMOTION ME</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Pedro Vivar entrevista a personas del mundo de la salud, el deporte y la empresa. Ademas de compartir cuentos y relatos de liderazgo y audios sobre desarrollo personal. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast13 -->

                <!-- Podcast14 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6KVVzLIa1rFLT1EJgueRL6?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">EFECTIVIDA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Podcast que habla sobre la eficacia, eficiencia, productividad, organización, desarrollo personal y cualquier otra cosa que nos pueda ayudar a ser más efectivos y más felices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast14 -->

                <!-- Podcast15 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/2Fchk02J2WLdRNymJ1WZXi?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">CÁPSULAS DE PRODUCTIVIDAD</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Jose María te explica cómo mejorar tu productividad con GTD, metodologías ágiles, liderazgo, gestión de quipos y proyectos, transformación digital, desarrollo y cremiento personal, estilo de vida, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast15 -->

                <!-- Podcast16 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/3XBUhm7s4UIsMSXyKRW5Xl?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">DESARROLLO PROFESIONAL</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Podcast inspirado en la experiencia de Mattia Pantanoli para aconsejar a todo aquel que busque una carrera profesional exitosa. Te ayuda a mejorar en tu trabajo, dando técnicas, estrategias y trucos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast16 -->

                <!-- Podcast17 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/7yxNkZufSfzCSfFlBEkStf?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">PRÁCTICA LA PSICOLOGÍA POSITIVA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Dafne Cataluña y Eva Rodríguez te dan ejercicios que potencian la felicidad, el optimismo, la gratitud, la positividad, el perdón, etc. Tratan temas como la autoestima, la dependencia emocional o las habilidades sociales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast17 -->

                <!-- Podcast18 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/2xV7Vx7NQgAC8vMt2vZNnE?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">ENCUENTRA TU PERSONA VITAMINA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Marian Rojas reconocida como psiquiatra española habla sobre temas del mundo de la mente y su vinculación con el cuerpo y las emociones. Este podcast ha sido destacado como uno de los mejores podcast para escuchar en 2022.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast18 -->

                <!-- Podcast19 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/5kWWIIpq8J7KRGk7jqtqYi?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">KENSO</h3>
                                    <p style="margin-bottom: 0; text-align: justify">En este podcasts podrás aprender todo sobre organización del tiempo, efectividad, concentración, sistemas para incrementar tu productividad, etc. Es uno de los favoritos de muchas personas que aspiran a mayor conciencia respeto al desarrollo personal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast19 -->

                <!-- Podcast20 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="podcast-item">
                                <div class="mente-content mt-3">
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/6r8y6v2BAmx6eFYMmSzdw4?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                    <h3 style="text-align: center;" class="mt-3">EL PODCAST DE ÁLEX ROVIERA</h3>
                                    <p style="margin-bottom: 0; text-align: justify">Alex Roviera comparte reflexiones que tienen como propósito mejorar y transformar vidas y personas aportando temáticas de crecimiento personal, inteligencia emocional y social, psicología de liderazgo, afectos, empoderamiento, motivación, inspiración, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin Podcast20 -->

            </div><!-- Fin Podcasts -->
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