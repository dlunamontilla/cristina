<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mis datos personales</title>

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
        <a class="nav-link" data-bs-target="#perfil-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Mi Perfil</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="perfil-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="datos-personales.php" class="active">
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
      <h1>Datos Personales</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
          <li class="breadcrumb-item">Mi Perfil</li>
          <li class="breadcrumb-item">Datos Personales</li>
        </ol>
      </nav>
    </div><!-- Fin Migas de pan -->


    <section class="section profile">
      <div class="row">

        <!-- Columna Nombre Usuario -->
        <div class="col-xl-3">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <i class="bi bi-person-fill"></i>
              <h2>Nombre Usuario</h2>
              <span>Tarifa</span>
            </div>
          </div>
        </div><!-- Fin Colum. Nombre Usuario -->

        <!-- Columna Datos -->
        <div class="col-xl-9">
          <div class="card">
            <div class="card-body pt-3">

              <!-- Navegación -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Mis datos</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Datos de acceso</button>
                </li>
              </ul><!-- Fin Navegación -->

              <!-- Contenido -->
              <div class="tab-content pt-2">

                <!-- Mis Datos -->
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title-profile mb-4">Datos personales</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Género:</div>
                    <div class="col-lg-9 col-md-8">Mujer/Hombre/Otro</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nombre:</div>
                    <div class="col-lg-9 col-md-8">Andrea</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Apellidos:</div>
                    <div class="col-lg-9 col-md-8">Martinez Lozano</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">DNI:</div>
                    <div class="col-lg-9 col-md-8">73823212J</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Fecha nacimiento:</div>
                    <div class="col-lg-9 col-md-8">16/02/2000</div>
                  </div>

                  <h5 class="card-title-profile mb-4">Datos de contacto</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Correo electrónico:</div>
                    <div class="col-lg-9 col-md-8">andreamartinez@gmail.com</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Teléfono:</div>
                    <div class="col-lg-9 col-md-8">620833829</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dirección postal:</div>
                    <div class="col-lg-9 col-md-8">C/ Miguel Hernandez</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Provincia:</div>
                    <div class="col-lg-9 col-md-8">Valencia</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Localidad:</div>
                    <div class="col-lg-9 col-md-8">Aldaia</div>
                  </div>



                </div>
                <!--Fin Mis Datos -->

                <!-- Editar Perfil -->
                <div class="tab-pane fade profile-edit" id="profile-edit">
                  <h5 class="card-title-profile mb-3">Datos personales</h5>
                  <form>
                    <div class="row mb-3">
                      <label for="nombre" class="col-md-4 col-lg-3 col-form-label">Nombre:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nombre" type="text" class="form-control" id="nombre" value="Andrea" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="apellidos" class="col-md-4 col-lg-3 col-form-label">Apellidos:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="apellidos" type="text" class="form-control" id="apellidos" value="Martinez Lozano" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="dni" class="col-md-4 col-lg-3 col-form-label">DNI:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dni" type="text" class="form-control" id="dni" value="73823212J" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fecha_nacimiento" class="col-md-4 col-lg-3 col-form-label">Fecha de nacimiento:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" value="2000-02-16" readonly>
                      </div>
                    </div>

                    <h5 class="card-title-profile mt-4 mb-3">Datos de contacto</h5>

                    <div class="row mb-3">
                      <label for="tel" class="col-md-4 col-lg-3 col-form-label">Teléfono:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tel" type="tel" class="form-control" id="tel" value="620833829" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="direccion" class="col-md-4 col-lg-3 col-form-label">Dirección postal:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="direccion" type="text" class="form-control" id="direccion" value="C/ Miguel Hernandez" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="provincia" class="col-md-4 col-lg-3 col-form-label">Provincia:</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select form-control" required>
                          <option class="option-select" selected>Seleccione Provincia...</option>
                          <option value="alicante">Alicante</option>
                          <option value="barcelona">Barcelona</option>
                          <option value="madrid">Madrid</option>
                          <option value="valencia">Valencia</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="localidad" class="col-md-4 col-lg-3 col-form-label">Localidad:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="localidad" type="text" class="form-control" id="localidad" value="Aldaia" required>
                      </div>
                    </div>

                    <h5 class="card-title-profile mt-4 mb-3">Datos bancarios</h5>

                    <div class="row mb-3">
                      <label for="cuenta-bancaria" class="col-md-4 col-lg-3 col-form-label">Cuenta bancaria:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cuenta-bancaria" type="text" class="form-control" id="cuenta-bancaria" value="123-234-123" required>
                      </div>
                    </div>


                    <div class="text-center">
                      <a type="submit" class="btn-edit">Cambiar datos</a>
                    </div>
                  </form><!-- Fin Editar Perfil -->

                </div>

                <!-- Editar Datos acceso -->
                <div class="tab-pane fade profile-edit pt-3" id="profile-change-password">
                  <form>
                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Correo electrónico:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="andreamartinez@gmail.com" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">Contraseña:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Deje en blanco para mantener la contraseña">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">Repite la contraseña:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="password">
                      </div>
                    </div>

                    <div class="text-center">
                      <a type="submit" class="btn-edit">Cambiar datos</a>
                    </div>
                  </form><!-- Fin Datos acceso -->

                </div>

              </div><!-- Fin Contenido -->

            </div>
          </div>

        </div><!-- Fin Colum. Datos -->
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