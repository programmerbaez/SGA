<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logosena.png') }}" type="image/x-icon">
    <title>Sistema de Gestión de Almuerzos CEFA</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- OverlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    
    <!-- Scripts cargados de forma diferida -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Aquí puedes añadir más elementos si lo necesitas -->
=======
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SGA {{ Auth::user()->role }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* Sidebar con verde oscuro */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            background-color: #2E7D32; /* Verde oscuro */
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #1B5E20; /* Verde aún más oscuro */
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        /* Dropdown con verde oscuro */
        .dropdown-menu {
            background-color: #388E3C; /* Verde oscuro intermedio */
        }

        .dropdown-menu a {
            color: white !important;
        }

        .dropdown-menu a:hover {
            background-color: #1B5E20; /* Verde más oscuro */
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="text-center">
                <a class="navbar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                    <span class="me-2">🍽️</span> <!-- Ícono del plato de comida -->
                    <span>SGA</span>
                </a>
            </div>

            <!-- Enlaces del Navbar -->
            <ul class="navbar-nav">
                <li><a href="/admin/dashboard">🏠 Inicio (Dashboard)</a></li>

                <li>
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#usuariosSubmenu">👥 Gestión de Usuarios</a>
                    <div class="collapse submenu" id="usuariosSubmenu">
                        <a href="/admin/usuarios/aprendices">📌 Aprendices</a>
                        <a href="/admin/usuarios/funcionarios">📌 Funcionarios</a>
                        <a href="/admin/usuarios/administradores">📌 Administradores</a>
                    </div>
                </li>

                <li>
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#beneficiosSubmenu">🍽️ Gestión de Beneficios</a>
                    <div class="collapse submenu" id="beneficiosSubmenu">
                        <a href="/admin/beneficios/asignacion">📌 Asignación de Subsidios</a>
                        <a href="/admin/beneficios/historial">📌 Historial de Evaluaciones</a>
                    </div>
                </li>

                <li>
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#reportesSubmenu">📊 Reportes</a>
                    <div class="collapse submenu" id="reportesSubmenu">
                        <a href="/admin/reportes/beneficios">📌 Resumen de Beneficios</a>
                        <a href="/admin/reportes/exportar">📌 Exportar Datos</a>
                    </div>
                </li>

                <li>
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#configSubmenu">⚙️ Configuración</a>
                    <div class="collapse submenu" id="configSubmenu">
                        <a href="/admin/configuracion/parametros">📌 Parámetros del Sistema</a>
                        <a href="/admin/configuracion/permisos">📌 Roles y Permisos</a>
                    </div>
                </li>

                <li>
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#perfilSubmenu">👤 Perfil</a>
                    <div class="collapse submenu" id="perfilSubmenu">
                        <a href="/admin/perfil/ver">📌 Ver Perfil</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            📌 Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
                </li>
            </ul>
        </nav>

<<<<<<< HEAD
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" href="{{ asset('img/logosena.png') }}">
            <a class="brand-link">
                <span class="brand-text font-weight-light">SGA</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fas fa-user-circle fa-2x text-white"></i>
                    </div>
                    <div class="info">
                        <a class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Agregar más opciones al menú -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard_admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>Administrators</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard_staff') }}" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>Staffs</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard_apprentice') }}" class="nav-link">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>Apprentices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>Parameters</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Bienvenido al sistema</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <!-- Aquí se mostrará el contenido de cada página -->
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023-2025 <a href="#">GDF</a>.</strong> Todos los derechos reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Versión</b> 3.2.0
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
=======
        <!-- Contenido principal -->
        <main class="content">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let menuItems = document.querySelectorAll(".menu-toggle");

            menuItems.forEach(item => {
                item.addEventListener("click", function () {
                    let openMenus = document.querySelectorAll(".submenu.show");
                    openMenus.forEach(menu => {
                        if (menu.id !== this.getAttribute("data-bs-target").replace("#", "")) {
                            new bootstrap.Collapse(menu, { toggle: false }).hide();
                        }
                    });
                });
            });
        });
    </script>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
</body>
</html>
