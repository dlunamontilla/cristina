<?php
include("datebase/conexion.php"); /*Insertar archivo conexión a la base de datos*/

$sentencia = $conexion->query('SELECT * FROM events'); /*Mostrar todos los datos de la tabla 'events'*/
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración</title>

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
                            <h6>Administrador</h6>
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
                <a class="nav-link" href="admin.php">
                    <i class="bi bi-gear"></i>
                    <span>Administración</span>
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
            <h1>Administración</h1>

        </div><!-- Fin Migas de pan -->

        <section class="section admin">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-auto">

                        <div class="add">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-arrow">
                                <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalAdd">Añadir nuevo usuario</button>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Lista de usuarios registrados</h5>

                            <table class="table table-hover align-middle table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Tarifa</th>
                                        <th scope="col">Cursos reservados</th>
                                        <th scope="col">Editar datos</th>
                                        <th scope="col">Eliminar usuario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>Andrea</td>
                                        <td>Martinez Lozano</td>
                                        <td>6 meses</td>
                                        <td>todos los cursos a los que se ha inscrito</td>
                                        <td>
                                            <button type="button" class="btn-admin-edit" data-bs-toggle="modal" data-bs-target="#modalEdit">Editar</button>
                                        </td>
                                        <td>
                                            <a class="btn-admin-delete" href="#">Eliminar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td>Jose</td>
                                        <td>Andres Castillo</td>
                                        <td>12 meses</td>
                                        <td>todos los cursos a los que se ha inscrito</td>
                                        <td>
                                            <button type="button" class="btn-admin-edit" data-bs-toggle="modal" data-bs-target="#modalEdit">Editar</button>
                                        </td>
                                        <td>
                                            <a class="btn-admin-delete" href="#">Eliminar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="modal fade" id="modalEdit" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar datos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <input type="hidden" name="id" value="id_alumno">
                                                <h6 class="card-title-profile mb-3">Datos personales</h6>

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
                                                        <input name="dni" type="text" class="form-control" id="dni" value="73823212J" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="fecha_nacimiento" class="col-md-4 col-lg-3 col-form-label">Fecha de nacimiento:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" value="2000-02-16" required>
                                                    </div>
                                                </div>

                                                <h6 class="card-title-profile mt-4 mb-3">Datos de contacto</h6>

                                                <div class="row mb-3">
                                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Dirección de correo:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email" class="form-control" id="email" value="andreamartinez@gmail.com" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="movil" class="col-md-4 col-lg-3 col-form-label">Móvil:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="movil" type="text" class="form-control" id="movil" value="620833829" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="direccion" class="col-md-4 col-lg-3 col-form-label">Dirección postal:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="direccion" type="text" class="form-control" id="direccion" value="C/ Miguel Hernandez" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="localidad" class="col-md-4 col-lg-3 col-form-label">Localidad:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="localidad" type="text" class="form-control" id="localidad" value="Aldaia" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="provincia" class="col-md-4 col-lg-3 col-form-label">Provincia:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="provincia" type="text" class="form-control" id="provincia" value="Valencia" required>
                                                    </div>
                                                </div>

                                                <h6 class="card-title-profile mt-4 mb-3">Datos bancarios y tarifa</h6>

                                                <div class="row mb-3">
                                                    <label for="cuenta-bancaria" class="col-md-4 col-lg-3 col-form-label">Cuenta bancaria:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="cuenta-bancaria" type="text" class="form-control" id="cuenta-bancaria" value="123-234-123" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-1">
                                                    <label for="cuenta-bancaria" class="col-md-4 col-lg-3 col-form-label">Tarifa:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="tarifa" id="6meses" value="6meses" checked required>
                                                            <label for="6meses">6 meses</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="tarifa" id="12meses" value="12meses">
                                                            <label class="form-check-label" for="12meses">12 meses</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn-admin-edit">Guardar datos</button>
                                                </div>

                                            </form><!-- Fin Editar Perfil -->
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End Basic Modal-->



                            <div class="modal fade" id="modalAdd" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Crear usuario</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <input type="hidden" name="id" value="id_alumno">
                                                <h6 class="card-title-profile mb-3">Datos de acceso</h6>
                                                <div class="row mb-3">
                                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Correo electrónico:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email" class="form-control" id="email" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="password" class="col-md-4 col-lg-3 col-form-label">Contraseña:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="password" type="password" class="form-control" id="password" required>
                                                    </div>
                                                </div>

                                                <h6 class="card-title-profile mt-4 mb-3">Datos personales</h6>

                                                <div class="row mb-3">
                                                    <legend class="col-md-4 col-lg-3 col-form-label">Género:</legend>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="genero" id="mujer" value="mujer" required>
                                                            <label for="mujer">Mujer</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="genero" id="hombre" value="hombre">
                                                            <label class="form-check-label" for="hombre">Hombre</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="genero" id="otro" value="otro">
                                                            <label class="form-check-label" for="otro">Otro</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="nombre" class="col-md-4 col-lg-3 col-form-label">Nombre:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="nombre" type="text" class="form-control" id="nombre" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="apellidos" class="col-md-4 col-lg-3 col-form-label">Apellidos:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="apellidos" type="text" class="form-control" id="apellidos" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="dni" class="col-md-4 col-lg-3 col-form-label">DNI:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="dni" type="text" class="form-control" id="dni" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="fecha_nacimiento" class="col-md-4 col-lg-3 col-form-label">Fecha de nacimiento:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" required>
                                                    </div>
                                                </div>

                                                <h6 class="card-title-profile mt-4 mb-3">Datos de contacto</h6>

                                                <div class="row mb-3">
                                                    <label for="tel" class="col-md-4 col-lg-3 col-form-label">Teléfono:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="tel" type="tel" class="form-control" id="tel" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="direccion" class="col-md-4 col-lg-3 col-form-label">Dirección postal:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="direccion" type="text" class="form-control" id="direccion" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="localidad" class="col-md-4 col-lg-3 col-form-label">Localidad:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="localidad" type="text" class="form-control" id="localidad" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="provincia" class="col-md-4 col-lg-3 col-form-label">Provincia:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="provincia" type="text" class="form-control" id="provincia" required>
                                                    </div>
                                                </div>

                                                <h6 class="card-title-profile mt-4 mb-3">Datos bancarios y tarifa</h6>

                                                <div class="row mb-3">
                                                    <label for="cuenta-bancaria" class="col-md-4 col-lg-3 col-form-label">Cuenta bancaria:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="cuenta-bancaria" type="text" class="form-control" id="cuenta-bancaria" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-1">
                                                    <label for="cuenta-bancaria" class="col-md-4 col-lg-3 col-form-label">Tarifa:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="tarifa" id="6meses" value="6meses" required>
                                                            <label for="6meses">6 meses</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="tarifa" id="12meses" value="12meses">
                                                            <label class="form-check-label" for="12meses">12 meses</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn-admin-delete">Añadir usuario</button>
                                                </div>

                                            </form><!-- Fin Editar Perfil -->
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End Basic Modal-->
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