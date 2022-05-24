<?php
include("database/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
// $sentencia = $conexion->query('SELECT * FROM dl_events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es-ES">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Sesión</title>

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

  <!-- Calendar -->
  <link href="assets/vendor/fullcalendar/fullcalendar.css" rel="stylesheet">

  <!-- Archivo estilos CSS -->
  <link href="assets/css/style-admin.css" rel="stylesheet">

  <!-- Registrar eventos -->
  <script src="assets/js/saveToServer.js"></script>
  <script src="assets/js/register-events.js" defer></script>
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
        <a class="nav-link" href="user.php">
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
        <ul id="act-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
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


  <!-- ======= Contenido ======= -->
  <main id="main" class="main">

    <!-- Título página -->
    <div class="pagetitle">
      <h1>Indicadores</h1>
    </div><!-- Fin Título página -->


    <section class="section indicadores">
      <div class="row">

        <!-- Columna Accesos -->
        <div class="col-lg-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Últimos accesos</h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Fecha de acceso</th>
                    <th scope="col">IP</th>
                    <th scope="col">Tipo de dispositivo</th>
                    <th scope="col">Nombre del dispositivo</th>
                    <th scope="col">Sistema Operativo</th>
                    <th scope="col">Navegador</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2022-05-04 12:35:22</td>
                    <td>90.169.197.185</td>
                    <td>Ordenador</td>
                    <td>WebKit</td>
                    <td>Windows 10.0</td>
                    <td>Chrome 100.0.4896.127</td>
                  </tr>
                  <tr>
                    <td>2022-05-04 12:35:22</td>
                    <td>90.169.197.185</td>
                    <td>Ordenador</td>
                    <td>WebKit</td>
                    <td>Windows 10.0</td>
                    <td>Chrome 100.0.4896.127</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div><!-- Fin Columna Accesos -->

        <!-- Columna Calendario -->
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body pb-0">
              <div id='calendar'></div>
            </div>
          </div>
        </div><!-- Fin Columna Calendario -->

        <!-- Columna Tareas -->
        <div class="col-lg-4">
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Lista de tareas</h5>

              <!-- Lista de tareas -->
              <ul class="to_do" id="lista-nav" data-bs-toggle="collapse" href="#"></ul>

              <button class="button button--add" id="add-task">Agregar tarea</button>
            </div>
          </div>
          <!-- Fin Columna Tareas-->
        </div>

        <!-- AÑADIR EVENTO CALENDARIO -->
        <div class="modal fade" id="modal-addEvent" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-addEvent">Añadir evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">

                <form action="./api/" method="POST" id="form-register-event">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <label for="start" class="control-label">Fecha Inicial</label>
                      <input type="date" name="initial_date" class="form-control" id="fecha_start" required="required" />
                    </div>
                    <div class="col-sm-6">
                      <label for="end" class="control-label">Hora Inicial</label>
                      <input type="time" name="initial_time" class="form-control" required="required" />
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <label for="start" class="control-label">Fecha Final</label>
                      <input type="date" name="final_date" class="form-control" required="required" />
                    </div>
                    <div class="col-sm-6">
<<<<<<< HEAD
                      <label for="end" class="control-label">Hora Final</label>
                      <input type="time" name="end" class="form-control">
=======
                      <label for="end" class="control-label">Fecha Final</label>
                      <input type="time" name="final_time" class="form-control" required="required" />
>>>>>>> f6b55d4 (Implementación parcial del registro)
                    </div>
                  </div>
                  <div class="col-sm-12 mb-2">
                    <label for="title" class="control-label">Titulo evento:</label>
                    <input type="text" name="title" class="form-control" placeholder="Titulo" required="required" />
                  </div>
                  <div class="col-sm-8 mb-2">
                    <label for="color" class="control-label">Color:</label>
                    <select name="color" class="form-control">
                      <option value="">Seleccionar Color</option>
                      <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                      <option style="color:	#FFD700" value="	#FFD700">&#9724; Amarillo</option>
                      <option style="color:#FFA500" value="#FFA500">&#9724; Naranja</option>
                      <option style="color:#008000" value="#008000">&#9724; Verde</option>
                      <option style="color:#00BFFF" value="#00BFFF">&#9724; Azul</option>
                      <option style="color:#800080" value="#800080">&#9724; Morado</option>
                      <option style="color:#ff0080;" value="#ff0080">&#9724; Rosa</option>
                    </select>
                  </div>
                  
                  <input type="hidden" name="user_id" value="1" />
                  <div class="modal-footer">
                    <button type="submit" class="btn-calendar">Añadir evento</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

          <!-- EDITAR EVENTO CALENDARIO -->
          <div class="modal fade" id="modal2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modal2"> Editar Evento</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>>
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">

                  <form action="database/editEvent.php" method="POST">
                    <input type="hidden" name="id" class="form-control" id="id">
                    <div class="col-sm-12 mb-2">
                      <label for="title" class="control-label">Titulo evento:</label>
                      <input type="text" name="title" class="form-control" placeholder="Titulo">
                    </div>
                    <div class="col-sm-8 mb-2">
                      <label for="color" class="control-label">Color:</label>
                      <select name="color" class="form-control">
                        <option value="">Seleccionar Color</option>
                        <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                        <option style="color:	#FFD700" value="	#FFD700">&#9724; Amarillo</option>
                        <option style="color:#FFA500" value="#FFA500">&#9724; Naranja</option>
                        <option style="color:#008000" value="#008000">&#9724; Verde</option>
                        <option style="color:#00BFFF" value="#00BFFF">&#9724; Azul</option>
                        <option style="color:#800080" value="#800080">&#9724; Morado</option>
                        <option style="color:#ff0080;" value="#ff0080">&#9724; Rosa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label class="text-danger"><input type="checkbox" name="delete"> Eliminar Evento</label>
                        </div>
                      </div>
                    </div>



                    <input type="submit">
                  </form>
                </div>
              </div>
            </div>

          </div>
    </section>
  </main><!-- Fin Contenido -->

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

  <!-- Lista -->
  <script src="assets/js/tasklist.js" defer></script>

  <!-- Calendar -->
  <script src="assets/vendor/jquery/jquery.js"></script>
  <script src='assets/vendor/moment/moment.min.js'></script>
  <script src='assets/vendor/fullcalendar/fullcalendar.js'></script>
  <script src='assets/vendor/fullcalendar/locale/es.js'></script>



  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        locale: 'es',
        initialView: 'timeGridDay',

        header: { //botón de semana y agenda y orden a mostrar
          left: 'prev, next, today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },

        height: 500, //tamaño calendario
        editable: true, //editable
        navLinks: true, // poder navegar por dia, mes, etc.
        selectable: true, //seleccionar varios días
        selectMirror: true,
        selectHelper: true,
        eventLimit: true,
        mostrarEventoEnd: true,
        displayEventTime: true,

        eventRender: function(event, element) {
          element.bind('dblclick', function() {
            $('#modal2 #id').val(event.id);
            $('#modal2 #title').val(event.title);
            $('#modal2 #color').val(event.color);
            $('#modal2').modal('show');
          });
        },
        events: [
          <?php foreach ($sentencia as $fila) { ?> {
              id: "<?php echo $fila["id"]; ?>",
              title: "<?php echo $fila["title"]; ?>",
              color: "<?php echo $fila["color"]; ?>",
              start: "<?php echo $fila["start"]; ?>",
              end: "<?php echo $fila["end"]; ?>",
            },
          <?php
          }
          ?>
        ],
        dayClick: function(fecha, javascriptEvent, vista) {
          $("#modal-addEvent").modal('show');
          $("#fecha_start").val(fecha.format());
        },
      });
    });
  </script>

</body>

</html>