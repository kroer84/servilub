<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo-link">
                <div class="sidebar-header">
                    <div class="sidebar-logo-container">
                        <div class="logo-container">
                            <img class="logo-sidebar" alt="logo" src="{{ asset('img/logo_servilub.png') }}" />
                        </div>
                        <div class="brand-name-container">

                            <div class="brand-name1">
                                Servi
                            </div>
                            <div class="brand-name2">
                                Lub
                            </div>

                        </div>
                    </div>
                </div>
            </a>
            <ul>
                @auth
                <div class="dropdown nameuser">
                    {{ Auth::user()->name }}
                    <span class="fa-solid fa-circle-chevron-down margen-der color"></span>
                    <div class="dropdown-content">
                        <a class="dropdown-element" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket margen-izq color"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
                @endauth
            </ul>
        </nav>
    </header>

    <div class="page">
        <div class="sidebar">
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item {{ active('admin/home') }}">
                        <a class="navigation-link" href="{{ route('admin.home') }}">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-house color"></i>
                                </div>
                                <div class="col-10 color">
                                    admin
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item {{ active('admin/users') }}">
                        <a class="navigation-link" href="{{ route('admin.users.index') }}">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-user color"></i>
                                </div>
                                <div class="col-10 color">
                                    Usuarios
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item {{ active('admin/maquinas') }}">
                        <a class="navigation-link" href="{{ route('maquinas.index') }}">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-robot color"></i>
                                </div>
                                <div class="col-10 color">
                                    Maquinas
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item {{ active('admin/mangueras') }}">
                        <a class="navigation-link" href="{{ route('mangueras.index') }}">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-bacon color"></i>
                                </div>
                                <div class="col-10 color">
                                    Mangueras
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item {{ active('admin/Instalacion') }}">
                        <a class="navigation-link" href="{{ route('Instalacion.index') }}">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-screwdriver-wrench color"></i>
                                </div>
                                <div class="col-10 color">
                                    Instalaciones
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item {{ active('admin/reportes') }}">
                        <a class="navigation-link" href="{{ route('admin.reporte.index') }}">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-clipboard color"></i>
                                </div>
                                <div class="col-10 color">
                                    Reporte
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="content space-header">
            <button id="sidebarToggle" class="btn sidebarToggle">
                <i class="fa-solid fa-bars icono"></i>
            </button>

            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
