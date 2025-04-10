<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SGA {{ Auth::user()->role }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            background-color: #1b5e20; /* Verde oscuro */
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
            background-color: #2e7d32; /* Verde más claro */
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="sidebar">
            <div class="text-center">
                <a class="navbar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                    <span class="me-2">🍽️</span>
                    <span>SGA</span>
                </a>
            </div>

            <ul class="navbar-nav">
                <li><a href="/aprendiz/dashboard">🏠 Inicio (Dashboard)</a></li>
                <li><a href="/aprendiz/beneficio">🍽️ Mi Beneficio Alimentario</a></li>
                <li><a href="/aprendiz/historial">📜 Historial de Beneficios</a></li>
                <li><a href="/aprendiz/comprobante">📑 Descargar Comprobante</a></li>
                <li><a href="/aprendiz/perfil">👤 Perfil</a></li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        🚪 Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <main class="content">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
