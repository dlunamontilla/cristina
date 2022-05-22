<?php
  include("database/conexion.php"); /*Insertar archivo conexión a la base de datos*/

  $sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Factura</title>

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
            <a href="datos-personales.php" >
              <i class="bi bi-circle"></i><span>Datos Personales</span>
            </a>
          </li>
          <li>
            <a href="factura.php" class="active">
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
            <a href="reservar.php" >
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
      <h1>Factura</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="user.php">Indicadores</a></li>
          <li class="breadcrumb-item">Mi Perfil</li>
          <li class="breadcrumb-item">Factura</li>
        </ol>
      </nav>
    </div><!-- Fin Migas de pan -->


    <section class="section factura">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">

              <section class="content">

                <!-- Titulo -->
                <div class="row">
                  <div class="factura-header">
                      <i class="bi bi-paperclip"></i>
                      <h3 class="title">FACTURA</h3>
                  </div>
                </div><!-- Fin Titulo -->

                <!-- Info de... -->
                <div class="row factura-de">
                  <div class="col-lg-12">
                    <address>
                      <strong>SaludFit</strong>
                      <br>C. los Centelles, 30,
                      <br>46004 Valencia, Valencia
                      <br>Teléfono: +34 95 323 65 78
                      <br>Email: atencioncliente@saludfit.com
                    </address>
                  </div>
                </div><!-- Fin Info de... -->

                <!-- Info a... -->
                <div class="row factura-info">
                  <div class="col-sm-8 ">
                    <h5>Facturar a</h5>
                    <address>
                      <strong>Andrea Martinez Lozano</strong>
                      <br>C/ Miguel Hernandez
                      <br>Xirivella, Valencia
                      <br>Móvil: 620833829
                      <br>Email: andreamartinez@gmail.com
                    </address>
                  </div>
                  
                  <div class="col-sm-2 col">
                    <h6>ID FACTURA</h6><br>
                    <h6>FECHA PAGO</h6><br>
                    <h6>CUENTA</h6>
                  </div>
                  <div class="col-sm-2 col">
                    <span>001</span><br>
                    <span>2/22/2014</span><br>
                    <span>968-34567</span>
                  </div>
                </div><!-- Fin Info a... -->

                <!-- Tabla -->
                <div class="row mt-4">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th>Cant.</th>
                          <th>Producto</th>
                          <th>Descripción</th>
                          <th>Importe</th>
                        </tr>
                      </thead>
                      <tbody >
                        <tr>
                          <td>1</td>
                          <td>Tarifa Anual</td>
                          <td>Duración minima de 6 meses y renovación en 6 meses si no te das de baja.</td>
                          <td>13,90 €</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> <!-- Fin Tabla -->

                <!-- Info IVA -->
                <div class="row">
                  <div class="col-md-9">  
                  </div>

                  <div class="col-md-3">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody >
                          <tr>
                            <td style="width:60%">Subtotal sin IVA</td>
                            <td style="padding-left: 10px;">11,48</td>
                          </tr>
                          <tr>
                            <td>IVA 21% de 11,48</td>
                            <td style="padding-left: 10px;">2,42</td>
                          </tr>
                          <tr>
                            <th>Total EUR</th>
                            <td style="padding-left: 10px;"><b>13,90 €<b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- Fin Info IVA -->

                <!-- Botones Impr - PDF -->
                <div class="row no-print">
                  <div class=" ">
                    <button class="btn btn-edit" onclick="window.print();"><i class="bi bi-file-earmark"></i>Imprimir</button>
                    <button class="btn pull-right btn-edit" style="margin-right: 5px;"><i class="bi bi-download"></i> Generar PDF</button>
                  </div>
                </div><!-- Fin Botones Impr - PDF -->

              </section>
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