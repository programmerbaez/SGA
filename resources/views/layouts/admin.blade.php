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
                </li>
            </ul>
        </nav>

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
</body>
</html>
