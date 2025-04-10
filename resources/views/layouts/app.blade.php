<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
=======
    <title>SGA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
=======

    <style>
        /* Navbar personalizado */
        .navbar-custom {
            background-color: #1B5E20 !important; /* Verde oscuro */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .navbar-custom .navbar-brand span {
            margin-left: 8px;
        }

        .navbar-custom .nav-link {
            color: #ffffff !important;
            font-weight: bold;
        }

        .navbar-custom .nav-link:hover {
            background-color: #2E7D32;
            border-radius: 5px;
        }

        .dropdown-menu {
            background-color: #2E7D32;
        }

        .dropdown-menu a {
            color: white !important;
        }

        .dropdown-menu a:hover {
            background-color: #1B5E20;
        }

        /* Botones estilizados */
        .btn-custom {
            background-color: #2E7D32;
            color: white;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #1B5E20;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    🍽️ <span>SGA</span>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
<<<<<<< HEAD
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
=======
                    <ul class="navbar-nav me-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-custom px-3 mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
<<<<<<< HEAD
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
=======
                                    <a class="nav-link btn btn-custom px-3 mx-1" href="{{ route('register') }}">{{ __('Register') }}</a>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
<<<<<<< HEAD
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
=======
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        🚪 {{ __('logout') }}
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<<<<<<< HEAD
=======

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
</body>
</html>
